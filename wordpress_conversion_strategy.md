# Cr8v Stacks — Zero-Plugin WordPress Conversion Strategy

## Executive Summary
This document defines the recommended architectural strategy for bringing the **Cr8v Stacks Website Redesign** into WordPress cleanly, securely, and seamlessly — guaranteeing zero 404 permalink errors, 100% design fidelity, and easy content editability for non-technical users while **debloating third-party plugins**.

---

## ✅ Agent Feedback & Architecture Refinement (2026-08-09)

### What You're Actually Asking For (Restated Clearly)
You need to be able to:
1. Go to WP Admin → Pages → pick a page → edit it somehow (headlines, images, videos, links, eyebrows, CTAs)
2. Use WordPress native menus — add items, reorder, remove — without touching code
3. Have blog, archive, category, tag pages work natively through WordPress
4. NOT come back to a developer every time copy or an image changes
5. Keep 100% of the animations, canvas effects, custom scripts, and design system intact

This is 100% achievable. Here is the definitive architecture to do it.

---

### Why Elementor Is Not the Answer (Confirmed)
- Your pages use canvas animations, Matrix scramble effects, auto-scrolling progress bars, and custom video protection scripts — **none of these survive Elementor conversion**
- Elementor wraps every element in `.elementor-widget-container` divs, breaking your CSS grid ratios and animation targets
- 30+ pages is too many to rebuild manually in Elementor anyway
- Page load speed would drop significantly — incompatible with your Liquid Performance brand positioning

### Why Full Site Editing (FSE) / Block Editor Is Not the Answer
- FSE requires converting your entire layout to Gutenberg blocks
- Your sections are not block-compatible — they use sticky scroll stacks, canvas layers, and radial SVG backgrounds
- This would be a ground-up rebuild, not a conversion

---

### ✅ The Correct Architecture: Custom Theme + ACF Free + WP Menus + Gutenberg (Blog Only)

This is a **phased approach**. Phase 1 gets you live on WordPress in ~1–2 weeks with full menu control and blog working. Phase 2 adds the content editing layer (fields per page). Phase 3 adds front-end edit shortcuts.

---

## Phase 1: Theme Scaffold + WP Menus + Native Blog (1–2 weeks)

**What this delivers:**
- Your site runs on WordPress — every page is a real WP page
- WordPress Appearance → Menus controls all navigation — add, reorder, rename any item
- Blog, categories, tags, archive all work natively via WP loops
- Your full design, animations, and scripts are 100% preserved
- No content editing yet (still hardcoded), but the WordPress infrastructure is live

### How the Menus Work
Your `header.html` mega menu gets split into two layers:
- **WordPress menu data** (items, links, labels) — registered and controlled via WP Admin → Appearance → Menus
- **Mega menu design** (columns, hover effects, typography) — stays locked in your header PHP template

```php
// functions.php — register the menu locations
register_nav_menus([
  'primary'   => 'Primary Navigation',
  'services'  => 'Services Mega Menu',
  'toolkits'  => 'Toolkit Mega Menu',
  'footer'    => 'Footer Navigation',
  'mobile'    => 'Mobile Drawer Navigation',
]);
```

In WP Admin, you'd manage these as separate menus. The PHP template outputs them with your exact design classes applied.

### Theme Folder Structure
```
/wp-content/themes/cr8v-stacks/
├── style.css                    ← Theme header (name, version, author)
├── functions.php                ← Enqueue, CPTs, menus, ACF, image sizes
├── front-page.php               ← Homepage (home-b.html converted to PHP)
├── page.php                     ← Default page template fallback
├── page-about.php               ← About Us page template
├── page-contact.php             ← Contact Us page template
├── page-discovery-call.php      ← Discovery Call page template
├── page-services.php            ← Main Services page template
├── home.php                     ← Blog archive (blog.html)
├── single.php                   ← Single blog post (single-blog.html)
├── single-case_study.php        ← Case Study single template
├── archive-case_study.php       ← Case Studies index
├── category.php                 ← Blog category archive
├── tag.php                      ← Blog tag archive
├── 404.php                      ← 404 page
├── search.php                   ← Search results
├── parts/
│   ├── header.php               ← header.html → PHP partial (wp_nav_menu integrated)
│   └── footer.php               ← footer.html → PHP partial
├── assets/
│   ├── css/
│   │   └── shared-service-components.css  (copied directly)
│   ├── js/
│   └── img/
└── inc/
    ├── acf-fields.php           ← ACF field group definitions (exported as PHP)
    ├── cpt-case-studies.php     ← Case Studies Custom Post Type
    └── helpers.php              ← cr8v_get_meta(), template helpers
```

---

## Phase 2: Content Editing Layer (ACF Fields Per Page)

**What this delivers:**
- Go to WP Admin → Pages → [any page] → Edit → see fields for: Hero headline, subheadline, CTA text, CTA link, hero image, hero video URL, eyebrow label
- Change any of these and it reflects live on the site — no developer needed
- Images go through WP Media Library (familiar upload experience)
- Menus still managed via Appearance → Menus

### How ACF Fields Work on Your Pages

In WP Admin → Pages → "Homepage" → Edit, you'd see a meta box below the post editor like this:

```
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
HOMEPAGE HERO FIELDS
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Eyebrow Label:        [Cr8v Stacks — Design & Engineering Studio]
Hero Headline Line 1: [We Build Businesses]
Hero Headline Line 2: [That Win Online]
Hero Subheadline:     [Textarea...]
CTA Button Text:      [Get an Estimate]
CTA Button Link:      [https://cr8vstacks.com/discovery-call/]
Hero Background Video:[https://cr8vstacks.com/wp-content/uploads/video.mp4]
Hero Poster Image:    [Media Library picker]
```

Your `front-page.php` template outputs these:

```php
<?php
$eyebrow    = get_field('hero_eyebrow') ?: 'Cr8v Stacks — Design & Engineering Studio';
$headline_1 = get_field('hero_headline_1') ?: 'We Build Businesses';
$headline_2 = get_field('hero_headline_2') ?: 'That Win Online';
$cta_text   = get_field('hero_cta_text') ?: 'Get an Estimate';
$cta_link   = get_field('hero_cta_link') ?: '/discovery-call/';
?>

<div class="c8-hero-eyebrow"><?php echo esc_html($eyebrow); ?></div>
<h1 class="dp-headline">
  <span><?php echo esc_html($headline_1); ?></span>
  <em><?php echo esc_html($headline_2); ?></em>
</h1>
<a href="<?php echo esc_url($cta_link); ?>" class="c8-btn-primary">
  <?php echo esc_html($cta_text); ?> →
</a>
```

### Complete Field Mapping Per Page Template

#### Homepage (`front-page.php`)
| Field Label | ACF Key | Type |
|---|---|---|
| Hero Eyebrow | `hero_eyebrow` | Text |
| Hero Headline Line 1 | `hero_headline_1` | Text |
| Hero Headline Line 2 | `hero_headline_2` | Text |
| Hero Subheadline | `hero_sub` | Textarea |
| Hero CTA Text | `hero_cta_text` | Text |
| Hero CTA Link | `hero_cta_link` | URL |
| Hero Background Video | `hero_video_url` | URL |
| Hero Poster Image | `hero_poster_img` | Image |
| Testimonials | `testimonials` | Repeater → (quote, name, role, avatar) |
| Case Study Cards | Uses CPT query — no field needed | — |

#### Service Pages (`single-service.php`)
| Field Label | ACF Key | Type |
|---|---|---|
| Service Hero Headline | `service_headline` | Text |
| Service Intro Paragraph | `service_intro` | Textarea |
| Scope Pillars | `service_pillars` | Repeater → (title, desc) |
| Deliverables List | `service_deliverables` | Repeater → (label, item) |
| FAQ Accordion | `service_faqs` | Repeater → (question, answer) |

#### Case Studies (`single-case_study.php`)
| Field Label | ACF Key | Type |
|---|---|---|
| Client Name | `client_name` | Text |
| Project Type | `project_type` | Text |
| Hero Metric 1 Value | `metric_1_value` | Text |
| Hero Metric 1 Label | `metric_1_label` | Text |
| Gallery Asset 1 | `gallery_asset_1` | Image |
| Gallery Asset 2 | `gallery_asset_2` | Image |
| Gallery Asset 3 (tall) | `gallery_asset_3` | Image |

#### Blog (`single.php`)
| Field Label | ACF Key | Type |
|---|---|---|
| Post Category Pill | WP taxonomy | Native |
| Post Title | `post_title` | Native WP |
| Post Body | `the_content()` | Gutenberg editor |
| Featured Image | `_thumbnail_id` | Native WP |

---

## Phase 3: Front-End Edit Shortcuts

**What this delivers:**
- When logged in as admin, WordPress Admin Bar shows "Edit Page" on every page
- Clicking it takes you directly to that page's ACF fields in WP admin
- This is the native equivalent of Elementor's "Edit with Elementor" button

WordPress provides this natively — no additional plugin needed.

```
[WP logo] [Site Name] [+ New] [Edit Page] [View Page] [Howdy, Admin]
```

---

## Handling Existing Infrastructure

### ACF Fields & Legacy Meta Key Aliasing
```php
// Reads new meta key first, falls back to legacy ACF meta key seamlessly
$headline = get_post_meta($post->ID, '_cr8v_hero_headline', true)
         ?: get_post_meta($post->ID, 'hero_headline', true);
```

### Replacing Elementor Loop Builder with Native PHP Loops
```php
// Case Studies Archive — no plugin needed
$query = new WP_Query([
  'post_type'      => 'case_study',
  'posts_per_page' => 9,
  'orderby'        => 'date',
  'order'          => 'DESC',
]);
```

---

## Five Critical Edge Cases & Mitigation Protocols

### Edge Case 1: 404 Permalink Errors After Theme Activation
```php
add_action('after_switch_theme', function() {
    cr8v_register_custom_post_types();
    flush_rewrite_rules();
});
```

### Edge Case 2: Legacy ACF Meta Key Mismatches
Implement fallback helper `cr8v_get_meta($post_id, $key)` that checks both `_cr8v_key` and legacy ACF `key` names.

### Edge Case 3: Relative Media Path Breakage
All asset paths resolve dynamically via `get_template_directory_uri() . '/assets/...'`

### Edge Case 4: WP Auto-Formatting (`wpautop`)
Selectively remove `wpautop` on custom page templates to prevent WordPress inserting `<p>` and `<br>` tags that break custom video attributes.

### Edge Case 5: Heavy Background Video on Mobile
Use `preload="none"` with poster images on `@media (max-width: 768px)`.

---

## Recommended Execution Order

| Phase | Task | Time Estimate |
|---|---|---|
| **1a** | Build theme scaffold (`style.css`, `functions.php`, `parts/header.php`, `parts/footer.php`) | 3–5 days |
| **1b** | Convert `front-page.php` (homepage) — most complex, highest value | 2–3 days |
| **1c** | Convert `single.php` (blog) + `home.php` (archive) + `category.php` | 1–2 days |
| **1d** | Convert all service page templates | 2–3 days |
| **1e** | Convert case studies CPT + `single-case_study.php` | 2 days |
| **2a** | Define ACF field groups for homepage | 1 day |
| **2b** | Define ACF field groups for service pages | 1 day |
| **2c** | Define ACF field groups for case studies | 1 day |
| **3** | Test, flush permalinks, deploy to staging | 1–2 days |
| **Total** | | **~3 weeks** |

---

## Decision Summary

| Question | Decision | Reason |
|---|---|---|
| Elementor? | ❌ No | Kills animations, adds DOM bloat, can't convert correctly |
| Full Site Editing? | ❌ No | Incompatible with custom layout system |
| ACF Free? | ✅ Yes | Clean admin UI for content editors, no DB lock-in |
| Gutenberg (blog only)? | ✅ Yes | Blog posts use `the_content()` — full rich editor |
| WordPress Menus? | ✅ Yes | `wp_nav_menu()` with custom walker for mega menu |
| Custom Theme PHP templates? | ✅ Yes | 100% design fidelity, zero layout compromise |
| Upload HTML directly? | ✅ Viable short-term | Fastest to go live, but no content editing from admin |

---

## ✅ WYSIWYG & Visual Editing Discussion (2026-08-09)

### The Core Problem with Blind ACF Fields
The original Phase 2 plan (ACF fields in WP admin) works technically but creates a UX problem: you open the edit page and you're confronted with a wall of disconnected fields — no visual context, no way to know which field maps to which part of the page. For a codebase with this level of design complexity, that's a real constraint.

### What "True Inline Front-End Editing" Actually Means
Elementor-style "click on text and type directly into it on the front-end" works because Elementor **owns the DOM** — every element is a registered Elementor widget with a React-powered editor attached to it. That relationship doesn't exist with custom HTML/CSS/JS pages. Adding it would require registering every section as a widget — which is a ground-up rebuild, and would destroy the animations.

So: **true inline click-to-edit on existing custom pages = not reliable or feasible.**

### ✅ Option 1: WordPress Customizer API (Best Fit — Recommended)

**What it is:** `WP Admin → Appearance → Customize`

- **Right side**: Live iframe preview of your actual site, exactly as it looks, in real time
- **Left side**: Organised panels — "Homepage Hero", "Services Sections", "Testimonials", "Footer", etc.
- Type a new headline → it updates live in the right-side preview as you type
- Swap an image → it swaps live in the preview
- Change a video URL → reflected immediately
- Hit **Publish** → goes live

**This is genuine WYSIWYG.** You see the actual page. You see changes happen in real time before committing. No blind fields. No guessing what "hero_headline_1" refers to.

**The only limitation:** You edit in the left panel — you can't click directly on the live text and type into it. But you are looking at it as you edit. That is a fundamentally different (and far better) experience than ACF fields alone.

**How it integrates with the custom theme:**
```php
// functions.php — register Customizer sections and controls
add_action('customize_register', function($wp_customize) {

  // --- HOMEPAGE HERO ---
  $wp_customize->add_section('cr8v_hero', [
    'title'    => 'Homepage — Hero Section',
    'priority' => 10,
  ]);

  $wp_customize->add_setting('hero_headline_1', ['default' => 'We Build Businesses']);
  $wp_customize->add_control('hero_headline_1', [
    'label'   => 'Hero Headline Line 1',
    'section' => 'cr8v_hero',
    'type'    => 'text',
  ]);

  // Image picker — uses WP Media Library
  $wp_customize->add_setting('hero_poster_img');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_poster_img', [
    'label'   => 'Hero Background Image',
    'section' => 'cr8v_hero',
  ]));
});
```

In `front-page.php`:
```php
<h1><?php echo esc_html(get_theme_mod('hero_headline_1', 'We Build Businesses')); ?></h1>
```

**Live preview partial refresh** (so the page doesn't fully reload on each change):
```php
$wp_customize->selective_refresh->add_partial('hero_headline_1', [
  'selector'        => '.dp-headline',
  'render_callback' => function() {
    echo esc_html(get_theme_mod('hero_headline_1'));
  },
]);
```

### ✅ Option 2: Bricks Builder (If True Click-to-Edit is Required)

Bricks is the modern replacement for Elementor — built for developers, not marketers. Key differences:

| Elementor | Bricks |
|---|---|
| Wraps everything in `.elementor-widget-container` | Outputs raw HTML with your own class names |
| Breaks custom CSS selectors | Your CSS classes survive intact |
| Heavy JS (400KB+) | Lightweight, ~60KB |
| Animations break on conversion | Custom scripts can be loaded per-element |
| Front-end inline editing | Front-end inline editing ✅ |

**The trade-off:** Pages still need to be rebuilt in Bricks format. The complex animations (canvas, Matrix scramble, auto-scroll) would need to be registered as custom Bricks scripts. This is doable but is significant conversion work — estimated 1–2 weeks per complex page.

**Best use case:** New pages built from scratch in Bricks, while existing complex pages stay as custom PHP templates with Customizer controls.

### ✅ Recommended Hybrid Architecture (Final Decision)

| Layer | Approach | Editing Experience |
|---|---|---|
| Homepage, About, Contact, Discovery | Custom PHP template + **WP Customizer controls** | Live preview WYSIWYG |
| All service pages | Custom PHP template + **WP Customizer controls** | Live preview WYSIWYG |
| Case studies | Custom PHP template + **ACF fields** (structured data) | Admin fields with clear labels |
| Blog posts | Native **Gutenberg editor** | Full WYSIWYG rich text |
| Blog archive, categories, tags | Native WP loops in `home.php` / `category.php` | No editing needed — auto-generated |
| Navigation menus | `wp_nav_menu()` + **WP Appearance → Menus** | Drag-and-drop menu builder |
| New pages (future) | **Bricks Builder** (optional phase 3) | True inline front-end editing |

### Updated Decision Table

| Question | Decision | Reason |
|---|---|---|
| Elementor? | ❌ No | Kills animations, adds DOM bloat |
| ACF fields only? | ⚠️ Partial | Good for structured data (case studies, FAQs), not for visual page content |
| WP Customizer? | ✅ Yes — primary editing layer | Live preview, visual context, no page builder needed |
| Bricks Builder? | ✅ Optional Phase 3 | For new pages only — true inline editing without animation risk |
| Full Site Editing (FSE)? | ❌ No | Incompatible with custom layout system |
| WordPress Menus (native)? | ✅ Yes | Drag-and-drop, no code required |
| Gutenberg (blog only)? | ✅ Yes | Full rich editor for posts |
| Custom PHP templates? | ✅ Yes | 100% design fidelity, zero layout compromise |

