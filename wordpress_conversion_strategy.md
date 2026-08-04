# Cr8v Stacks — Zero-Plugin WordPress Conversion Strategy

## Executive Summary
This document defines the recommended architectural strategy for bringing the **Cr8v Stacks Website Redesign** into WordPress cleanly, securely, and seamlessly — guaranteeing zero 404 permalink errors, 100% design fidelity, and easy content editability for non-technical users while **debloating third-party plugins**.

---

## 1. Architectural Comparison & Recommendation

### Option A: Pure Elementor JSON Export (NOT Recommended)
- **Drawbacks**:
  - Drops custom interactive scripts (Matrix scramble, auto-scrolling testimonial progress bars, canvas web glitch effects).
  - Introduces heavy DOM wrapper bloat (`.elementor-widget-container`) which degrades Lighthouse speed scores.
  - Media asset paths (`assets/...`) break easily, causing 404 errors during migration between environments.

### Option B: Custom WordPress Framework Theme (RECOMMENDED STARTER STRATEGY)
- **Why This is the Best Approach**:
  - **100% Design Fidelity**: Preserves all custom CSS, typography tokens (`Michroma`, `Space Mono`, `DM Sans`), micro-animations, and custom video protection scripts exactly as authored.
  - **Full Editability via Native WP Meta Fields**: All headlines, body paragraphs, testimonials, CTA buttons, and video URLs are connected to native WP meta boxes declared directly inside theme code (`functions.php`).
  - **Zero Third-Party Plugin Dependencies**: Works natively upon theme activation without requiring manual plugin setup or ACF configuration.
  - **Protected Design System**: Layout boundaries, grid ratios, and brand colors (`#0047E1` Royal Blue) remain locked and immune to accidental visual breakage.
  - **Zero 404 Permalink Errors**: Standard WordPress template hierarchy (`front-page.php`, `page-discovery-call.php`, `page-contact.php`, `home.php`, `single.php`) handles clean SEO permalinks automatically.

---

## 2. Migrating Existing Infrastructure & Debloating Strategy

### Handling Existing Content (ACF Fields & Elementor Loops)
To debloat the site without losing legacy posts, case studies, or field content:
1. **Legacy Meta Key Aliasing**: Custom field queries in native theme code will read both new native meta keys and legacy ACF keys:
   ```php
   // Reads new meta key first, falls back to legacy ACF meta key seamlessly
   $headline = get_post_meta($post->ID, '_cr8v_hero_headline', true) 
            ?: get_post_meta($post->ID, 'hero_headline', true);
   ```
2. **Replacing Elementor Loop Builder with Native PHP Loops**:
   - Elementor Loop items are replaced by lightweight native `WP_Query` templates (`inc/case-studies-loop.php`), eliminating heavy database queries and 10+ unnecessary plugin assets.

---

## 3. Five Critical Edge Cases & Mitigation Protocols

### Edge Case 1: 404 Permalink Errors After Theme Activation
- **Risk**: Moving from custom URLs to WordPress templates can cause 404 errors if rewrite rules aren't flushed.
- **Solution**: Automated flush of rewrite rules during theme setup:
  ```php
  add_action('after_switch_theme', function() {
      cr8v_register_custom_post_types();
      flush_rewrite_rules();
  });
  ```

### Edge Case 2: Legacy ACF Meta Key Mismatches
- **Risk**: Past articles or portfolio items created via ACF plugin might not display if field names differ.
- **Solution**: Implement fallback helper function `cr8v_get_meta($post_id, $key)` that checks both `_cr8v_key` and legacy ACF `key` names.

### Edge Case 3: Relative Media Path Breakage Across Staging/Production
- **Risk**: Hardcoded `/assets/download.mp4` paths break when site is moved to subfolders or different domain URLs.
- **Solution**: All video and image paths resolve dynamically via `get_template_directory_uri() . '/assets/...'`.

### Edge Case 4: WP Auto-Formatting (`wpautop`) Breaking Custom HTML/Video Attributes
- **Risk**: WordPress automatically inserts `<p>` and `<br>` tags, breaking custom video attributes (`disablePictureInPicture`).
- **Solution**: Selective neutralization of `wpautop` filter on custom page templates in `functions.php`.

### Edge Case 5: Heavy Background Video Load on Mobile Devices
- **Risk**: Auto-playing background videos can slow down mobile connections or burn data.
- **Solution**: Prioritize WebM files with `preload="none"` posters on mobile `@media (max-width: 768px)`.

---

## 4. Blog & Article Templates Architecture

### Blog Archive Template (`home.php`)
- Displays articles in our clean editorial card grid (`.c8-blog-grid`).
- Employs native WordPress loop query (`if (have_posts()) : while (have_posts()) : the_post();`):
  - Post Title (`the_title()`) in `Michroma` font.
  - Category Badge (`the_category()`) in `Space Mono` font.
  - Featured Image (`the_post_thumbnail()`).
  - Author & Date Metadata (`the_time('M d, Y')`).

### Single Article Template (`single.php`)
- Renders full-width single blog posts using our dark/light editorial reader layout:
  - Header Hero with category pill, title, reading time, and publish date.
  - Rich Content Body (`the_content()`).

---

## 5. Theme Folder Structure (`/wp-content/themes/cr8v-stacks/`)

```
cr8v-stacks/
├── style.css                 # Theme header metadata & global CSS reset
├── functions.php             # Enqueue scripts, styles, native meta boxes, CF7 support
├── front-page.php            # Homepage template (homepage_hero_section.html)
├── page-contact.php          # Contact Us page template (Contact_us.html)
├── page-discovery-call.php   # Discovery Call booking page template (discovery-call.html)
├── home.php                  # Blog archive & listing page template
├── single.php                # Single blog post article template
├── single-case_study.php     # Dynamic Case Study template
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── video/               # Optimized WebM/MP4 videos
└── inc/
    ├── meta-boxes.php        # Native WP meta field declarations
    └── cpt-case-studies.php  # Custom Post Type for Case Studies
```
