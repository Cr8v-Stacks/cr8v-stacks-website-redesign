<?php
/**
 * CR8V Stacks — inc/helpers.php
 * Utility functions used across all templates.
 */

defined('ABSPATH') || exit;

/**
 * Get a theme mod with fallback to legacy ACF meta key.
 * Allows seamless transition from ACF-managed content to Customizer.
 *
 * Usage: cr8v_mod('hero_headline_1', 'We Build Businesses')
 */
function cr8v_mod(string $key, string $default = ''): string {
    $val = get_theme_mod($key, '');
    if ($val !== '') return $val;

    // Fallback: check current post's ACF / native meta
    global $post;
    if ($post) {
        $meta = get_post_meta($post->ID, $key, true)
              ?: get_post_meta($post->ID, '_cr8v_' . $key, true);
        if ($meta) return $meta;
    }

    return $default;
}

/**
 * Get post meta with dual-key fallback (new key → legacy ACF key).
 */
function cr8v_get_meta(int $post_id, string $key, string $default = ''): string {
    return get_post_meta($post_id, '_cr8v_' . $key, true)
        ?: get_post_meta($post_id, $key, true)
        ?: $default;
}

/**
 * Returns the logo <img> tag using Customizer logo or WP custom logo fallback.
 */
function cr8v_logo_img(string $classes = 'c8-logo-img'): string {
    $custom_logo = get_theme_mod('header_logo', '');
    if (!$custom_logo) {
        $logo_id = get_theme_mod('custom_logo');
        if ($logo_id) {
            $custom_logo = wp_get_attachment_image_url($logo_id, 'full');
        }
    }
    if (!$custom_logo) {
        // Absolute fallback — production logo URL
        $custom_logo = 'https://cr8vstacks.com/wp-content/uploads/2022/08/1.png';
    }
    return '<img src="' . esc_url($custom_logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="' . esc_attr($classes) . '">';
}

/**
 * Truncate text to a word count with ellipsis.
 */
function cr8v_excerpt(string $text, int $words = 20): string {
    return wp_trim_words($text, $words, '…');
}

/**
 * Return reading time estimate for a post.
 */
function cr8v_reading_time(int $post_id = 0): string {
    $content = get_post_field('post_content', $post_id ?: get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $minutes = max(1, (int) ceil($word_count / 200));
    return $minutes . ' Min Read';
}

/**
 * Returns the active page's template file name (without .php).
 * Useful for adding body classes.
 */
function cr8v_current_template(): string {
    $template = get_page_template_slug();
    if ($template) return basename($template, '.php');
    if (is_front_page()) return 'front-page';
    if (is_home())       return 'blog';
    if (is_single())     return 'single';
    if (is_archive())    return 'archive';
    return 'page';
}
