# DeeAROps Corporate Website

Static, dependency-free corporate website for **DeeAROps** — specialists in data
protection, backup, disaster recovery and replication.

Built strictly from the official **DeeAROps Brand Guidelines v1.1** (colors,
Sora/Manrope typography, 8-pt spacing, component rules) and the approved
company presentation content. No invented customers, statistics or services.

## Structure

- `index.html` … `contact.html` — 8 pages, plain HTML
- `css/main.css` — design tokens + all styles
- `js/main.js` — mobile nav, scroll reveals, tabs, contact-form validation
- `assets/` — official logo marks (light/dark), favicons

## Run locally

Open `index.html` in a browser, or serve the folder:

```
python -m http.server 8080
```

## Contact form backend

The form validates client-side and currently falls back to opening a
pre-filled email draft to info@deearops.com. To wire a real endpoint, set
`FORM_ENDPOINT` at the top of the contact-form section in `js/main.js` to a
POST URL accepting JSON `{name, company, email, phone, interest, message}`.

## Deploy

Any static host (GitHub Pages, Netlify, etc.). `sitemap.xml` and `robots.txt`
assume the production domain `www.deearops.com` — adjust if hosted elsewhere.
