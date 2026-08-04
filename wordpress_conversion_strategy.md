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

### Option B: Custom WordPress Framework Theme (RECOMMENDED STARTER STRATEGY)
- **Why This is the Best Approach**:
  - **100% Design Fidelity**: Preserves all custom CSS, typography tokens (`Michroma`, `Space Mono`, `DM Sans`), micro-animations, and custom video protection scripts exactly as authored.
  - **Full Editability via Native WP Meta Fields**: All headlines, body paragraphs, testimonials, CTA buttons, and video URLs are connected to native WP meta boxes declared directly inside theme code (`functions.php`).
  - **Zero Third-Party Plugin Dependencies**: Works natively upon theme activation without requiring manual plugin setup or ACF configuration.
  - **Protected Design System**: Layout boundaries, grid ratios, and brand colors (`#0047E1` Royal Blue) remain locked and immune to accidental visual breakage.
  - **Zero 404 Permalink Errors**: Standard WordPress template hierarchy (`front-page.php`, `page-discovery-call.php`, `page-contact.php`, `home.php`, `single.php`) handles clean SEO permalinks automatically.

---

## 2. Native WordPress Custom Fields Architecture (NO Plugins Needed)

Custom fields are declared directly inside theme code in `functions.php` (or an `/inc/meta-boxes.php` file) using WordPress's native **`add_meta_box()`** and **`register_setting()`** APIs:

```php
// Example: Native WP Meta Box registered directly in theme code
add_action('add_meta_boxes', function() {
    add_meta_box('cr8v_hero_meta', 'Hero Section Settings', 'cr8v_render_hero_box', 'page', 'normal', 'high');
});

function cr8v_render_hero_box($post) {
    $headline = get_post_meta($post->ID, '_cr8v_hero_headline', true);
    echo '<label>Hero Headline:</label>';
    echo '<input type="text" name="cr8v_hero_headline" value="' . esc_attr($headline) . '" style="width:100%;">';
}
```

---

## 3. Blog & Article Templates Architecture

### Blog Listing Template (`home.php`)
- Uses WordPress's native template hierarchy to display blog articles in our clean editorial card grid (`.c8-blog-grid`).
- Employs native WordPress loop query (`if (have_posts()) : while (have_posts()) : the_post();`):
  - Dynamic Post Title (`the_title()`) in `Michroma` font.
  - Category Badge (`the_category()`) in `Space Mono` font.
  - Featured Image (`the_post_thumbnail()`).
  - Author & Date Metadata (`the_time('M d, Y')`).

### Single Article Template (`single.php`)
- Renders full-width single blog posts using our dark/light editorial reader layout:
  - Header Hero with category pill, title, reading time, and publish date.
  - Rich Content Body (`the_content()`) supporting headings, code blocks, images, and blockquotes.
  - Next/Previous Article Navigation links.

---

## 4. Theme Folder Structure (`/wp-content/themes/cr8v-stacks/`)

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

---

## 5. Step-by-Step Implementation Roadmap

1. **Theme Packaging**: Package `homepage_hero_section.html`, `Contact_us.html`, and `discovery-call.html` into template files within `/wp-content/themes/cr8v-stacks/`.
2. **Asset Path Normalization**: Replace relative paths with `get_template_directory_uri() . '/assets/...'`.
3. **Native Meta Field Integration**: Wire dynamic PHP tags (`<?php echo get_post_meta($post->ID, '_hero_headline', true); ?>`) into template markup.
4. **Form Integration**: Replace static fallback forms with active WordPress plugin shortcodes (`do_shortcode('[contact-form-7 ...]')` and `do_shortcode('[booking-form-embed]')`).
5. **Permalink Flush**: Regenerate permalink rewrite rules under `WP Admin > Settings > Permalinks` to guarantee zero 404 errors.
