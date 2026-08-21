<?php
/*
 * 3rd Eye contact form handler.
 *
 * Anti-spam / abuse defences (no CAPTCHA):
 *   1. Method allow-list (POST only).
 *   2. Honeypot field ("company_website") — bots fill hidden fields; humans don't.
 *   3. Time gate — a signed, server-issued token (see form_token()) proves the form
 *      was actually rendered by this PHP and not forged by a bot, and that a human
 *      amount of time elapsed before submit (bots submit in <3s). The token carries
 *      an HMAC of the issue time + IP, so it cannot be spoofed client-side.
 *   4. Per-IP rate limiting (file-based, no DB required), keyed on a
 *      spoof-resistant client IP (see client_ip()).
 *   5. Strict server-side validation of every field (lengths, formats, allow-lists,
 *      consent checkbox).
 *   6. Content heuristics — cap URL count and reject common spam phrases.
 *   7. Email-header-injection hardening — header-bound fields are CRLF/NUL-stripped
 *      and the reply-to address is re-validated.
 */

declare(strict_types=1);

// ---- Configuration ---------------------------------------------------------
$to = 'hello@3rd-eye.in';
$from = '3rd Eye Website <no-reply@3rdeyeoilfield.com>';

// Honeypot field name (must match the hidden input in contact.html).
$HONEYPOT = 'company_website';

// Minimum/maximum acceptable time (ms) between rendering the form and submitting.
$MIN_SUBMIT_MS = 3000;   // 3 seconds — real humans take longer; bots submit instantly
$MAX_SUBMIT_MS = 3600000; // 1 hour — tokens expire after this

// Per-IP rate limits.
$RATE_WINDOW_S = 600;    // 10-minute rolling window
$RATE_MAX      = 3;      // max 3 submissions per IP per 10 minutes
$RATE_BURST_S  = 60;     // 1-minute burst window
$RATE_BURST_MAX = 2;     // max 2 submissions per IP per minute

// Per-field length caps.
$LIMITS = [
    'name'    => 100,
    'company' => 150,
    'country' => 100,
    'email'   => 254,
    'phone'   => 40,
    'subject' => 150,
    'message' => 5000,
];

// Allowed "service" values (must match the <option> values in contact.html).
$ALLOWED_SERVICES = ['general', 'procurement', 'project', 'partnership', 'careers', 'other'];

// Spam heuristics.
$MAX_URLS_IN_MESSAGE = 3;
$SPAM_PHRASES = [
    'viagra', 'cialis', 'casino', 'gambling', 'lottery', 'crypto giveaway',
    'free money', 'seo service', 'backlink', 'bitcoin investment',
];

// Secret used to sign the time token. Keep this private.
// In production set via environment variable TOKEN_SECRET; fallback is a
// generated-on-first-run random value persisted to a file outside the web root.
function token_secret(): string {
    $env = getenv('TOKEN_SECRET');
    if (is_string($env) && $env !== '') {
        return $env;
    }
    $file = sys_get_temp_dir() . '/3rdeye_token_secret';
    if (is_file($file)) {
        $v = trim((string)file_get_contents($file));
        if ($v !== '') return $v;
    }
    $v = bin2hex(random_bytes(32));
    @file_put_contents($file, $v);
    return $v;
}

// Issue a signed token binding the issue time (ms) to the client IP.
// contact.html fetches this via the token endpoint below and puts it in the
// hidden "form_token" field.
function form_token(): string {
    $issued = (string)round(microtime(true) * 1000);
    $ip = client_ip();
    $sig = hash_hmac('sha256', $issued . '|' . $ip, token_secret());
    return $issued . '.' . $sig;
}

// Verify a token returned by the client. Returns the issued time (ms) on
// success, or 0 on failure.
function verify_token(string $token): int {
    if ($token === '' || !str_contains($token, '.')) return 0;
    [$issued, $sig] = explode('.', $token, 2) + ['', ''];
    $issued = (string)$issued;
    if (!ctype_digit($issued)) return 0;
    $expected = hash_hmac('sha256', $issued . '|' . client_ip(), token_secret());
    if (!hash_equals($expected, (string)$sig)) return 0;
    return (int)$issued;
}

// Determine the client IP used for token binding and rate limiting.
//
// Default: trust only REMOTE_ADDR. It is set by the web server from the
// actual TCP connection, so a client cannot spoof it.
//
// X-Forwarded-For is fully client-controllable, so it is honoured ONLY when
// the immediate peer (REMOTE_ADDR) is a verified trusted reverse proxy/CDN
// listed in the TRUSTED_PROXIES environment variable (comma-separated IPs or
// CIDR ranges, e.g. "10.0.0.1,203.0.113.0/24"). That header is trustworthy
// only when such infrastructure terminates every client connection and
// strips/rewrites any inbound X-Forwarded-For before appending the real
// client address. Without TRUSTED_PROXIES configured there is no such
// guarantee, so the header is ignored: an attacker rotating forged values
// would otherwise gain unlimited fake rate-limit identities.
function client_ip(): string {
    $remote = $_SERVER['REMOTE_ADDR'] ?? '';
    if (filter_var($remote, FILTER_VALIDATE_IP) === false) {
        return '0.0.0.0';
    }
    if (!is_trusted_proxy($remote)) {
        return $remote;
    }
    // Behind a verified trusted proxy: walk the X-Forwarded-For chain from
    // the server outward (right to left) and stop at the first address that
    // is not itself trusted infrastructure. Entries to the right of it are
    // proxy-appended and therefore reliable; anything further left is raw
    // client input.
    $fwd = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    if ($fwd === '') {
        return $remote;
    }
    $hops = array_map('trim', explode(',', $fwd));
    for ($i = count($hops) - 1; $i >= 0; $i--) {
        $candidate = $hops[$i];
        if (filter_var($candidate, FILTER_VALIDATE_IP) === false) continue;
        if (is_trusted_proxy($candidate)) continue;
        return $candidate;
    }
    return $remote;
}

// Trusted reverse proxies/CDNs, from the TRUSTED_PROXIES env var.
// Empty by default: no peer is trusted to supply X-Forwarded-For.
function trusted_proxies(): array {
    static $cache = null;
    if ($cache !== null) return $cache;
    $cache = [];
    $raw = getenv('TRUSTED_PROXIES');
    if (is_string($raw) && $raw !== '') {
        foreach (explode(',', $raw) as $entry) {
            $entry = trim($entry);
            if ($entry !== '') $cache[] = $entry;
        }
    }
    return $cache;
}

function is_trusted_proxy(string $ip): bool {
    foreach (trusted_proxies() as $range) {
        if (ip_in_range($ip, $range)) return true;
    }
    return false;
}

// Match $ip against a single IP or a CIDR range ("10.0.0.0/8").
function ip_in_range(string $ip, string $range): bool {
    if (!str_contains($range, '/')) {
        return $ip === $range;
    }
    [$subnet, $bits] = explode('/', $range, 2);
    if (!ctype_digit($bits)) return false;
    $bits = (int)$bits;
    $ipBin = @inet_pton($ip);
    $subnetBin = @inet_pton($subnet);
    if ($ipBin === false || $subnetBin === false || strlen($ipBin) !== strlen($subnetBin)) return false;
    if ($bits < 0 || $bits > strlen($ipBin) * 8) return false;
    $mask = str_repeat("\xff", intdiv($bits, 8));
    if ($bits % 8 > 0) $mask .= chr(0xff << (8 - $bits % 8) & 0xff);
    $mask = str_pad($mask, strlen($ipBin), "\0");
    return ($ipBin & $mask) === ($subnetBin & $mask);
}

// Strip CR/LF/NUL so a value can never inject additional mail headers.
function clean_input($value): string {
    $value = (string)($value ?? '');
    $value = str_replace(["\r", "\n", "\0"], ' ', $value);
    return trim($value);
}

// File-based per-IP rate limiter. Returns true when the submission is allowed,
// false when the limit is exceeded.
function rate_ok(string $ip): bool {
    global $RATE_WINDOW_S, $RATE_MAX, $RATE_BURST_S, $RATE_BURST_MAX;
    $dir = sys_get_temp_dir() . '/3rdeye_rate';
    if (!is_dir($dir) && !@mkdir($dir, 0700, true)) {
        // Cannot persist — fail open (do not block legitimate users) but rely
        // on the other defences. Write attempt below will simply be skipped.
        return true;
    }
    $safe = hash('sha256', $ip);
    $file = $dir . '/' . $safe;
    $now = time();
    $times = [];
    if (is_file($file)) {
        foreach (explode("\n", trim((string)file_get_contents($file))) as $line) {
            $line = trim($line);
            if (ctype_digit($line)) $times[] = (int)$line;
        }
    }
    // Drop timestamps outside the rolling window we care about.
    $times = array_values(array_filter($times, fn($t) => ($now - $t) <= $RATE_WINDOW_S));
    $burst = count(array_filter($times, fn($t) => ($now - $t) <= $RATE_BURST_S));
    if (count($times) >= $RATE_MAX || $burst >= $RATE_BURST_MAX) {
        return false;
    }
    $times[] = $now;
    // Keep only the most recent entries to avoid unbounded growth.
    $times = array_slice($times, -50);
    @file_put_contents($file, implode("\n", $times), LOCK_EX);
    return true;
}

// Count URL-like substrings in a block of text.
function url_count(string $text): int {
    return (int)preg_match_all('#https?://|www\.#i', $text);
}

// Reject helper: set 4xx and stop.
function reject(int $code, string $msg): void {
    http_response_code($code);
    echo $msg;
    exit;
}

// Safe multi-byte string length: uses mb_strlen when available (correct for
// UTF-8), falling back to strlen otherwise so the code works on hosts that
// do not ship the mbstring extension.
function safe_strlen(string $s): int {
    return function_exists('mb_strlen') ? mb_strlen($s, 'UTF-8') : strlen($s);
}

// Safe multi-byte lower-case with the same fallback rationale.
function safe_strtolower(string $s): string {
    return function_exists('mb_strtolower') ? mb_strtolower($s, 'UTF-8') : strtolower($s);
}

// ---- Request routing -------------------------------------------------------
$action = $_GET['action'] ?? '';

// Token-issuing endpoint: GET mail.php?action=form_token
// contact.html calls this on load to obtain a signed, time-bound token.
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $action === 'form_token') {
    header('Content-Type: application/json');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    echo json_encode(['token' => form_token()]);
    exit;
}

// Everything else must be a POST submission.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    reject(405, 'Method not allowed.');
}

// 2. Honeypot — if the hidden field is filled, this is a bot. Reply with a
//    success-looking message but send nothing.
if (trim((string)($_POST[$HONEYPOT] ?? '')) !== '') {
    // Pretend success to waste the bot's time.
    echo 'The message has been sent.';
    exit;
}

// 4. Per-IP rate limiting.
if (!rate_ok(client_ip())) {
    // 429 Too Many Requests — but return a plain message for the UI.
    http_response_code(429);
    echo 'Too many submissions from your address. Please try again later.';
    exit;
}

// ---- Field collection & validation -----------------------------------------
$name    = clean_input($_POST['name'] ?? $_POST['fname'] ?? '');
$company = clean_input($_POST['company'] ?? '');
$country = clean_input($_POST['country'] ?? '');
$email   = clean_input($_POST['email'] ?? '');
$phone   = clean_input($_POST['phone'] ?? $_POST['telephone'] ?? '');
$subject = clean_input($_POST['subject'] ?? 'Website enquiry');
$service = clean_input($_POST['service'] ?? 'general');
$text    = trim((string)($_POST['message'] ?? ''));
$consent = isset($_POST['privacy-consent']) && $_POST['privacy-consent'] === 'on';

// 3. Time gate — verify the signed token.
$token = trim((string)($_POST['form_token'] ?? ''));
$issued = verify_token($token);
$nowMs = (int)round(microtime(true) * 1000);
if ($issued === 0) {
    reject(400, 'The form expired or was submitted incorrectly. Please reload the page and try again.');
}
$elapsed = $nowMs - $issued;
if ($elapsed < $MIN_SUBMIT_MS) {
    reject(400, 'Your submission was too fast to be human. Please take a moment to review your message and try again.');
}
if ($elapsed > $MAX_SUBMIT_MS) {
    reject(400, 'The form session has expired. Please reload the page and try again.');
}

// Required fields.
if ($name === '' || $email === '' || $text === '') {
    reject(400, 'Please provide a valid name, email address, and message.');
}

// Length caps.
foreach (['name' => $name, 'company' => $company, 'country' => $country,
          'email' => $email, 'phone' => $phone, 'subject' => $subject,
          'message' => $text] as $field => $value) {
    if (safe_strlen($value) > $LIMITS[$field]) {
        reject(400, 'One or more fields are too long. Please shorten your message and try again.');
    }
}

// Message must be a real message (not a single token).
if (safe_strlen($text) < 10) {
    reject(400, 'Please enter a message of at least 10 characters.');
}

// Name sanity — allow letters, spaces and common punctuation, 2+ chars.
if (!preg_match('/^[\p{L}\p{M}\'\-\.\s]{2,}$/u', $name)) {
    reject(400, 'Please enter a valid name.');
}

// Email must pass PHP's validator (rejects CRLF/header-injection attempts).
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    reject(400, 'Please enter a valid email address.');
}

// Service must come from the allow-list.
if (!in_array($service, $ALLOWED_SERVICES, true)) {
    $service = 'general';
}

// Phone is optional but if present must look like a phone number.
if ($phone !== '' && !preg_match('/^[0-9+\-\(\)\s]{4,}$/', $phone)) {
    reject(400, 'Please enter a valid telephone number.');
}

// Privacy consent is mandatory.
if (!$consent) {
    reject(400, 'Please accept the Privacy Policy to continue.');
}

// 6. Spam heuristics.
$fullText = $name . ' ' . $company . ' ' . $country . ' ' . $subject . ' ' . $text;
$lower = safe_strtolower($fullText);
foreach ($SPAM_PHRASES as $phrase) {
    if (str_contains($lower, $phrase)) {
        reject(400, 'Your message was flagged as potential spam. Please review and try again.');
    }
}
if (url_count($fullText) > $MAX_URLS_IN_MESSAGE) {
    reject(400, 'Your message contains too many links and was flagged as potential spam.');
}

// ---- Compose & send -------------------------------------------------------
$safeSubject = $subject !== '' ? $subject : 'Website enquiry';
$mailSubject = 'Website enquiry: ' . $safeSubject;

$message = '<table style="width:100%; border-collapse:collapse;" cellpadding="6">'
    . '<tr><td><strong>Name:</strong></td><td>' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Email:</strong></td><td>' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Phone:</strong></td><td>' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Company:</strong></td><td>' . htmlspecialchars($company, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Country:</strong></td><td>' . htmlspecialchars($country, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Service:</strong></td><td>' . htmlspecialchars($service, ENT_QUOTES, 'UTF-8') . '</td></tr>'
    . '<tr><td><strong>Message:</strong></td><td>' . nl2br(htmlspecialchars($text, ENT_QUOTES, 'UTF-8')) . '</td></tr>'
    . '</table>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: ' . $from . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";

if (mail($to, $mailSubject, $message, $headers)) {
    echo 'Thank you. Your message has been sent — we will be in touch shortly.';
} else {
    http_response_code(500);
    echo 'Sorry, we could not send your message right now. Please try again later or email us directly.';
}
?>
