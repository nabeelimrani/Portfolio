# Nabeel Mehdi Imrani — Portfolio

Personal portfolio of **Nabeel Mehdi Imrani**, Lead Software Developer (Laravel, PHP, payment & enterprise integrations) based in the UAE.

🔗 **Live:** https://nabeelimrani.vercel.app
💼 **LinkedIn:** https://linkedin.com/in/nabeel-mehdi-imrani-070498230
🐙 **GitHub:** https://github.com/nabeelimrani

## Overview

A static, single-page portfolio (with per-project detail pages) built on the BootstrapMade *Personal* template. It showcases featured professional work, skills, experience, certifications, and a working contact form.

## Tech stack

- **HTML5 / CSS3** (custom styles in `assets/css/style.css`)
- **Bootstrap 5** (grid + components)
- **Vanilla JavaScript** (`assets/js/main.js`) — navigation, skill bars, Isotope portfolio filtering, Swiper sliders, PureCounter
- **Vendor libraries:** Bootstrap, Bootstrap Icons, Boxicons, GLightbox, Isotope, Swiper, Waypoints, PureCounter
- **Contact form:** [Web3Forms](https://web3forms.com) (AJAX submit, honeypot spam protection) — no backend required
- **Hosting:** Vercel (auto-deploys on push to `main`)

## Project structure

```
index.html              # Main single-page site
*.html                  # Per-project detail pages (E-Commerce, Pet Shop, etc.)
assets/
  css/style.css         # Custom styles
  js/main.js            # Site behaviour
  img/                  # Profile + background + favicons
  gif/                  # Project demo animations
  resume/               # CV (PDF)
  vendor/               # Third-party CSS/JS libraries
robots.txt, sitemap.xml # SEO
```

## Run locally

It's a static site — no build step. Serve the folder with any static server, e.g.:

```bash
# Python
python3 -m http.server 8000

# or Node
npx serve .
```

Then open http://localhost:8000.

## Deploy

Pushing to `main` triggers an automatic Vercel deployment. No build configuration is required (static output).

## Contact form setup

The contact form posts to Web3Forms using a public access key in `index.html` (`name="access_key"`). To use a different inbox, create a key at [web3forms.com](https://web3forms.com) and replace the value.
