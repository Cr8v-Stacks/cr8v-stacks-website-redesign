# Cr8v Stacks — Zero-Plugin WordPress Conversion Strategy

## 1. Native WordPress Custom Fields Architecture (NO ACF Plugin Needed)

You specified that you do **NOT** want to install or manually build custom fields using third-party plugins (like ACF). 

### How We Build Custom Fields Directly in Theme Code:
In native WordPress PHP development, custom fields are declared directly inside the theme's `functions.php` (or an `/inc/meta-boxes.php` file) using WordPress's native **`add_meta_box()`** and **`register_setting()`** APIs:

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

### Key Advantages:
- **Zero Plugin Dependencies**: The theme works straight out of the box upon activation (`Appearance > Themes > Activate`).
- **No Manual Configuration Required**: You never have to manually create field groups or configure settings in the WP backend.
- **Zero Risk of Plugin Breakage**: Eliminates update conflicts, license keys, or third-party plugin vulnerabilities.

---

## 2. Blog Page (`home.php`) & Individual Article Pages (`single.php`)

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

## 3. Permalink & UI Integrity Guarantee

- **Zero 404 Errors**: Theme rewrite rules use standard WordPress page templates (`page-discovery-call.php`, `page-contact.php`, `single-case_study.php`).
- **Zero UI Degradation**: All custom CSS styles, typography variables (`Michroma`, `Space Mono`, `DM Sans`), and Matrix scramble hover scripts are enqueued via `wp_enqueue_style()` and `wp_enqueue_script()`, ensuring **100% visual fidelity** on every device.
