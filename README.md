# Happy Day Toronto theme

WordPress theme for [happydaytoronto.com](https://happydaytoronto.com), a balloon
decor business in Richmond Hill / Vaughan. It's a classic PHP theme (no build
step, no npm), with WooCommerce for the shop.

This repo *is* the theme folder, so it lives at `wp-content/themes/happy-day`.

## How it's put together

Most pages are driven by plain PHP arrays rather than the block editor, so copy
and layout stay in git.

- `inc/services/*.php` – one file per service page (birthdays, garlands,
  backdrops, marquee numbers…). The file name has to match the page slug in
  WordPress; if it does, the page is rendered with `page-service.php`.
- `inc/locations/*.php` – city pages under `/service-areas/` (Vaughan, North
  York, Richmond Hill, etc.). Same idea, same layout.
- `inc/service-faqs.php` – FAQ overrides for service pages. If a slug is in
  here, these questions replace the ones in the service file.
- `inc/pricing.php` – published starting prices. Change a price here and it
  updates the price cards and the FAQ answers everywhere.
- `inc/quote-form.php` – fields and email body of the quote form. The form
  itself is a Contact Form 7 form, but the theme overrides its markup and mail
  body, so edits in the CF7 "Form" / "Mail" tabs won't stick. Recipient,
  sender and subject are still set in CF7.
- `inc/schema.php` – LocalBusiness and Service structured data on top of Yoast.
- `inc/performance.php` – asset trimming (YITH/product scripts only on store
  pages, Turnstile loaded next to the form, async CSS for widgets).
- `template-parts/` – shared chunks: service layout, gallery, blog CTA, etc.
- `assets/` – CSS, JS, images and videos. Font Awesome and Leaflet are vendored
  in `assets/vendor`.

Phone, email, social links and business details are edited in
**Appearance → Customize** (Contact & Social, Business details), not in code.

## Adding a service or city page

1. Copy an existing file in `inc/services/` (or `inc/locations/` for a city).
2. Name it after the slug you'll use, e.g. `foil-balloons.php`.
3. Create a page in WordPress with that slug (city pages go under the
   *Service Areas* page) and publish it. No template needs to be picked.

## Local setup

I run it on XAMPP at `http://localhost/Happy Day/`. Pull a copy of the
production database with All-in-One WP Migration if you need real content.

## Deploying

Pushing to `main` deploys the theme to production through WP Pusher. Only theme
files change on deploy; content, products, orders, media and plugin settings
are never touched from here.

After a deploy, purge the cache (**LiteSpeed Cache → Purge All**, and the
Hostinger CDN if something still looks stale), otherwise visitors keep seeing
the old pages for up to a week.

CSS and JS URLs get a content hash as `?ver=`, so browsers pick up changed
files on their own.

## Plugins the theme expects

- WooCommerce (+ YITH Product Add-ons on the personalised products)
- Contact Form 7 with Cloudflare Turnstile
- Yoast SEO
- LiteSpeed Cache
- Trustindex (Google reviews and Instagram feed)
- Click to Chat (WhatsApp button)
- Site Kit by Google
