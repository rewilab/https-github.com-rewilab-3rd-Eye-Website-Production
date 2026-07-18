<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo 'Method not allowed.';
        exit;
    }

    function clean_input($value) {
        return trim(str_replace(array("\r", "\n"), ' ', $value ?? ''));
    }

    $to = 'hello@3rd-eye.in';

    $name = clean_input($_POST['name'] ?? $_POST['fname'] ?? '');
    $company = clean_input($_POST['company'] ?? '');
    $country = clean_input($_POST['country'] ?? '');
    $email = filter_var(clean_input($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = clean_input($_POST['phone'] ?? $_POST['telephone'] ?? '');
    $subject = clean_input($_POST['subject'] ?? 'Website enquiry');
    $service = clean_input($_POST['service'] ?? '');
    $text = trim($_POST['message'] ?? '');

    if ($name === '' || !$email || $text === '') {
        http_response_code(400);
        echo 'Please provide a valid name, email address, and message.';
        exit;
    }

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

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: 3rd Eye Website <no-reply@3rdeyeoilfield.com>' . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    if (mail($to, $mailSubject, $message, $headers)) {
        echo 'The message has been sent.';
    } else {
        http_response_code(500);
        echo 'failed';
    }
?>
