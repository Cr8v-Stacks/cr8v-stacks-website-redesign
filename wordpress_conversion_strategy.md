# Cr8v Stacks — WordPress Conversion & Deployment Strategy

## Executive Summary
This document defines the recommended architectural strategy for bringing the **Cr8v Stacks Website Redesign** into WordPress cleanly, securely, and seamlessly — guaranteeing zero 404 permalink errors, 100% design fidelity, and easy content editability for non-technical users.

---

## 1. Architectural Comparison & Recommendation

### Option A: Pure Elementor JSON Export (NOT Recommended)
- **Drawbacks**:
  - Drops custom interactive scripts (Matrix scramble, auto-scrolling testimonial progress bars, canvas web glitch effects).
  - Introduces heavy DOM wrapper bloat (`.elementor-widget-container`) which degrades Lighthouse speed scores.
  - Media asset paths (`assets/...`) break easily, causing 404 errors during migration between environments.

### Option B: Custom WordPress Framework Theme + ACF (RECOMMENDED STARTER STRATEGY)
- **Why This is the Best Approach**:
  - **100% Design Fidelity**: Preserves all custom CSS, typography tokens (`Michroma`, `Space Mono`, `DM Sans`), micro-animations, and custom video protection scripts exactly as authored.
  - **Full Editability via WP Admin**: All headlines, body paragraphs, testimonials, CTA buttons, and video URLs are connected to **ACF (Advanced Custom Fields) / Carbon Fields** options pages. Clients and team members can edit copy and images in WP Admin without touching code.
  - **Protected Design System**: Layout boundaries, grid ratios, and brand colors (`#0047E1` Royal Blue) remain locked and immune to accidental visual breakage.
  - **Zero 404 Permalink Errors**: Standard WordPress template hierarchy (`front-page.php`, `page-discovery-call.php`, `page-contact.php`) handles clean SEO permalinks automatically.

---

## 2. WordPress Theme Folder Structure (`/wp-content/themes/cr8v-stacks/`)

```
cr8v-stacks/
├── style.css                 # Theme header metadata & global CSS reset
├── functions.php             # Enqueue scripts, styles, ACF fields, CF7 support
├── front-page.php            # Homepage template (homepage_hero_section.html)
├── page-contact.php          # Contact Us page template (Contact_us.html)
├── page-discovery-call.php   # Discovery Call booking page template (discovery-call.html)
├── single-case_study.php     # Dynamic Case Study template
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── video/               # Optimized WebM/MP4 videos
└── inc/
    ├── acf-fields.php        # Registered custom fields for headlines, text, & media
    └── cpt-case-studies.php  # Custom Post Type for Case Studies
```

---

## 3. Editability & WP Admin Workflow

### A. Global Theme Settings (ACF Options Page)
- **Header & Footer Settings**: Logo URL, CTA button links (`/discovery-call/`), phone number, and address.
- **Brand Tokens**: Primary brand color, radius defaults (`4px`).

### B. Page-Level Editable Fields
1. **Homepage (`front-page.php`)**:
   - Hero Headline, Eyebrow Text, and 1-Paragraph Description.
   - Focus Areas (Web Design, Custom Dev, AI MVP copy & icons).
   - Testimonial Quote, Author Name, and Stack CDN Icons.
   - Dev Playground Tool titles, descriptions, and demo URLs.

2. **Contact Us (`page-contact.php`)**:
   - Contact Ticket Stub headline, lede, line number, location.
   - Contact Form 7 Shortcode ID (`[contact-form-7 id="..."]`).

3. **Discovery Call (`page-discovery-call.php`)**:
   - Booking Page Headline & Lede.
   - Booking Form Shortcode / Embed ID (`[booking-plugin-form id="..."]`).
   - Scoping Pillars (01 Scoping, 02 Stack, 03 Pricing, 04 Execution Roadmap).

---

## 4. Step-by-Step Implementation Roadmap

1. **Theme Packaging**: Package `homepage_hero_section.html`, `Contact_us.html`, and `discovery-call.html` into template files within `/wp-content/themes/cr8v-stacks/`.
2. **Asset Path Normalization**: Replace relative paths with `get_template_directory_uri() . '/assets/...'`.
3. **ACF Integration**: Wire dynamic PHP tags (`<?php the_field('hero_headline'); ?>`) into the template markup.
4. **Form Integration**: Replace static fallback forms with active WordPress plugin shortcodes (`do_shortcode('[contact-form-7 ...]')` and `do_shortcode('[booking-form-embed]')`).
5. **Permalink Flush**: Regenerate permalink rewrite rules under `WP Admin > Settings > Permalinks` to guarantee zero 404 errors.
