# 3rd Eye Oilfield Supply & Services LLP — Website (Production)

## Project
Static HTML/CSS/JS site for 3rd Eye Oilfield Supply & Services LLP. Live production site.
- Repo: https://github.com/rewilab/https-github.com-rewilab-3rd-Eye-Website-Production
- Default branch: `main`
- Approved feature branch: `feature/final-website-completion` (merged into main)

## Approved commits (do not revert)
- `414fef3` — Homepage revamp
- `d9dec9d` — Official logo replacement (img/logo2026.png)
- `e37cac8` — Contact-form anti-spam/security hardening (mail.php)
- `bd357bd` — Header logo increased to ~2x (desktop 46px→92px, mobile 38px→72px)

## Brand assets (do NOT alter)
- Official logo: `img/logo2026.png` (PNG 320×293). Preserve WHITE/GREEN/SAFFRON colours exactly.
- Do not recreate or replace the logo file.
- Do not modify `mail.php` (anti-spam protection tested & approved).

## Logo sizing (current, approved)
In `css/main.css`:
- Desktop: `.logo img.logo-mark { height: 92px; width: auto; display: block; }` (~line 187)
- Mobile ≤480px: `.logo img.logo-mark { height: 72px; }` (~line 590)
- `width:auto` preserves aspect ratio. Only display height is set; the image file is untouched.

## Layout notes
- `.main-nav` uses `flex-wrap: wrap`; `.nav-links` get `flex-basis: 100%` at ≤820px, so nav wraps below the logo row on tablet/mobile — no overlap with the larger logo.
- All pages share `css/main.css`, so a CSS change applies site-wide across all 9 pages (index, about, divisions, services, products, projects, partners, contact, 404).

## Dev server
- `python3 -m http.server 12000` from repo root serves the site at http://localhost:12000

## Git
- Git identity: openhands <openhands@all-hands.dev> (set in repo config).
- Push directly to `main` only when approved. Do not create extra feature branches unless asked.
