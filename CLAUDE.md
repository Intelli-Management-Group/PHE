# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

Static-ish marketing site for PHE Luxwood (prefabricated/modular buildings), built as plain PHP pages with no framework, no build step, and no package manager (no `composer.json` / `package.json`). Runs directly under XAMPP/Apache (`.htaccess` handles HTTPS/www redirects and cache headers).

## Running locally

Serve via XAMPP/Apache with this directory as the document root (e.g. `htdocs/phe`), then visit `http://localhost/phe/`. There is no dev server, bundler, linter, or test suite in this repo — there is nothing to build or run other than pointing PHP at the files.

## Architecture

**Page structure**: Each top-level page (`index.php`, `about.php`, `projects.php`, `building-system.php`, `materials.php`, `contact.php`) sets `$page_title` and `$meta_description`, then does `include 'inc/header.php'` (opens `<html>`/`<body>`, nav) and `include 'inc/footer.php'` (closes body, loads shared JS). Page content and page-specific `<style>` blocks are typically written inline in the page file itself rather than extracted to a stylesheet (see `contact.php`).

**Data-driven product pages** (`materials.php` → `material-detail.php`): Product content lives in a single PHP array in [data/products.php](data/products.php), keyed by slug (`panel`, `roof`, `deck`, `cladding`, `screw`, `window-door`). `material-detail.php?product=<slug>` looks up the slug in that array and includes the template named by the product's `template` key from `inc/templates/` (`panel-layout.php` or `window-door-layout.php`), passing the array as `$product`. To add a new material product: add an entry to `$products` in `data/products.php` and link to it via `material-detail.php?product=<new-slug>`; only add a new template file if the existing two layouts don't fit.

**Projects page** (`projects.php`): Unlike materials, project entries are hardcoded HTML (no data array) — each project is a hand-written block referencing images under `img/<country>/` (e.g. `img/australia/`, `img/africa/`, `img/china/`). Follow the existing block pattern when adding a project rather than introducing a new data-driven abstraction.

**CSS**: One shared `css/style.css` (site-wide) plus `css/responsive.css`, loaded on every page via `inc/header.php`. Page-specific stylesheets (`css/about.css`, `css/contact.css`, `css/materials.css`) are `<link>`ed only from their respective pages.

**JavaScript**: A single global `js/script.js` (loaded on every page from `inc/footer.php`) drives all interactivity and animation via GSAP (`ScrollTrigger`, `SplitText`) and Splide carousels, both loaded from CDN. Effects are gated behind `document.querySelector(...)` existence checks so the same script is safe to load on pages that don't contain a given section. Elements with `data-aos="fade-up"` / `data-aos-delay` / `data-aos-duration` attributes are animated by custom GSAP code that mimics AOS — the actual AOS library is not included, so don't add it; extend the existing GSAP handling in `js/script.js` instead.

**Third-party assets**: Bootstrap 5, Font Awesome 7, Google Fonts (Montserrat), Splide, and GSAP are all pulled from CDN in `inc/header.php`/`inc/footer.php` — there are no local/vendored copies to update.

**Contact form**: [inc/send-form.php](inc/send-form.php) is leftover/unused code from a different site template (references `i-nova.ca`, `support.php`, `marketing@i-nova.ca`) — it is not included anywhere in the current codebase. `contact.php` does not currently wire up a working server-side form submission; check for a live handler before assuming form submissions work.

## Conventions

- Image assets are organized by page/section under `img/` (`img/home/`, `img/about/`, `img/building-material/<product>/`, `img/building-system/`, plus per-country project folders under `img/africa/`, `img/australia/`, `img/china/`). Place new images in the matching subfolder rather than at the `img/` root.
- Page markup relies on Bootstrap 5 grid/utility classes combined with custom BEM-ish component classes (e.g. `hero-section-bg`, `model-preview-card`, `product-card`) defined in the page-specific or shared CSS.
