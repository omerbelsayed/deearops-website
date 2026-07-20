# DeeAROps — WordPress theme

A 1:1 WordPress port of the static site in `../deearops-website`. Same
`css/main.css` and `js/main.js` (byte-identical), same 8 pages, same
copy, same SEO metadata — just running on WordPress instead of static files.

## What's here

```
deearops/                  ← the actual theme (zip this folder to install)
  style.css                ← WP theme header (visual styles live in css/main.css)
  functions.php             ← enqueues assets, page-URL helper, SEO meta, auto-creates pages
  header.php / footer.php   ← shared chrome, ported from the static site's header/footer
  front-page.php            ← Home (from index.html)
  page-about.php            ← About
  page-services.php         ← Services
  page-solutions.php         ← Solutions
  page-industries.php       ← Industries
  page-technology.php       ← Technology (includes the interactive Technology & Solutions Ecosystem section)
  page-insights.php         ← Insights
  page-contact.php          ← Contact
  css/main.css, js/main.js  ← copied verbatim from the static site
  assets/                   ← logo files, favicons

build_theme.py              ← the one-shot script that generated the page-*.php
                               templates from the static HTML. Re-run it if the
                               static site's content changes and needs re-porting
                               (it overwrites the generated templates only).
```

## Install

1. Zip the `deearops/` folder (the zip's top level must be the `deearops` folder itself).
2. WordPress admin → Appearance → Themes → Add New → Upload Theme → upload the zip → Activate.
3. On activation the theme automatically:
   - Creates the 7 interior pages (About, Services, Solutions, Industries,
     Technology Ecosystem, Insights, Contact) as published WordPress pages
     with matching slugs — no manual page setup needed. The homepage needs
     no page row; `front-page.php` is picked up by WordPress automatically.
   - Switches permalinks to `/page-name/` (only if permalinks were still on
     the default `?p=123` structure) so URLs read cleanly.
4. Set the two phone numbers, email and Riyadh address in `footer.php` /
   `page-contact.php` if they ever change — they're static text ported from
   the source presentation, same as the original site.

## Notes

- **Contact form**: still client-side only (`js/main.js`), same as the
  static site — validates, then opens a pre-filled `mailto:` draft to
  `info@deearops.com`. To post to a real endpoint instead, set
  `FORM_ENDPOINT` in `js/main.js`, or wire a `wp_mail()` handler off
  `admin-post.php` if you want native WordPress form handling — not
  included here since the static site didn't have a backend either and
  this is a straight port, not a new feature.
- **Sitemap**: WordPress doesn't need the static site's `sitemap.xml` —
  install an SEO plugin (Yoast SEO or Rank Math, either works) for an
  auto-generated one rather than hand-maintaining a static file again.
- **Fonts**: Sora + Manrope, loaded from Google Fonts exactly as before.
- Nothing here was invented: content, copy, stats, standards and vendor
  names are the same ones already verified against the DeeAROps brand
  guidelines and company deck for the static site.
