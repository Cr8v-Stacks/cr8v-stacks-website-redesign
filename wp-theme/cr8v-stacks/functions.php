<?php
/**
 * CR8V Stacks — functions.php
 * Theme setup, asset enqueue, menu registration, CPT, Customizer.
 */

defined('ABSPATH') || exit;

/* ─── 1. THEME SETUP ──────────────────────────────────────────── */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'        => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Register all navigation menu locations
    register_nav_menus([
        'primary'        => __('Primary Navigation', 'cr8v-stacks'),
        'services-mega'  => __('Services Mega Menu', 'cr8v-stacks'),
        'toolkits-mega'  => __('Toolkits Mega Menu', 'cr8v-stacks'),
        'mobile-drawer'  => __('Mobile Drawer Navigation', 'cr8v-stacks'),
        'footer-col-1'   => __('Footer — Company Links', 'cr8v-stacks'),
        'footer-col-2'   => __('Footer — Services Links', 'cr8v-stacks'),
        'footer-col-3'   => __('Footer — Resources Links', 'cr8v-stacks'),
    ]);

    // Image sizes
    add_image_size('cr8v-hero',       1920, 1080, true);
    add_image_size('cr8v-card',        800,  500, true);
    add_image_size('cr8v-gallery-h',  1200,  680, true);   // horizontal gallery
    add_image_size('cr8v-gallery-v',   680, 1200, true);   // tall/portrait gallery
});


/* ─── 2. ENQUEUE SCRIPTS & STYLES ────────────────────────────── */
add_action('wp_enqueue_scripts', function () {
    $uri = get_template_directory_uri();
    $v   = wp_get_theme()->get('Version');

    // Google Fonts
    wp_enqueue_style(
        'cr8v-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Michroma&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap',
        [],
        null
    );

    // Core shared service component styles (direct port of shared-service-components.css)
    wp_enqueue_style('cr8v-shared', $uri . '/assets/css/shared-service-components.css', ['cr8v-fonts'], $v);

    // Main theme stylesheet (design tokens + global resets)
    wp_enqueue_style('cr8v-main', $uri . '/assets/css/main.css', ['cr8v-shared'], $v);
});


/* ─── 3. INCLUDE MODULES ──────────────────────────────────────── */
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/cpt-case-studies.php';
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/acf-fields.php';  // programmatic ACF groups (Tropos)


/* ─── 4. DISABLE wpautop ON CUSTOM PAGE TEMPLATES ────────────── */
// Prevents WP from injecting <p> and <br> into our custom section HTML
add_action('template_redirect', function () {
    $templates_no_autop = [
        'front-page.php',
        'page-about.php',
        'page-contact.php',
        'page-discovery-call.php',
        'page-service.php',
        'page-services.php',
    ];
    foreach ($templates_no_autop as $t) {
        if (is_page_template($t)) {
            remove_filter('the_content', 'wpautop');
            break;
        }
    }
    // Also disable on all non-singular (archive, homepage, etc.)
    if (!is_singular('post')) {
        remove_filter('the_content', 'wpautop');
    }
});


/* ─── 5. PERMALINK FLUSH ON THEME ACTIVATION ─────────────────── */
add_action('after_switch_theme', function () {
    cr8v_register_case_study_cpt(); // defined in inc/cpt-case-studies.php
    flush_rewrite_rules();
});


/* ─── 6. CUSTOMIZER LIVE PREVIEW PARTIAL REFRESH SUPPORT ─────── */
add_action('wp_enqueue_scripts', function () {
    if (is_customize_preview()) {
        wp_enqueue_script(
            'cr8v-customizer-preview',
            get_template_directory_uri() . '/assets/js/customizer-preview.js',
            ['customize-preview'],
            wp_get_theme()->get('Version'),
            true
        );
    }
});


/* ─── 7. CLEAN UP WP HEAD ─────────────────────────────────────── */
remove_action('wp_head', 'wp_generator');              // hide WP version
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');


/* ─── 8. AJAX SEARCH (Blog Header) ───────────────────────────── */
add_action('wp_ajax_cr8v_search',        'cr8v_ajax_search');
add_action('wp_ajax_nopriv_cr8v_search', 'cr8v_ajax_search');

function cr8v_ajax_search() {
    check_ajax_referer('cr8v_search_nonce', 'nonce');
    $q = sanitize_text_field($_POST['query'] ?? '');
    if (strlen($q) < 2) {
        wp_send_json_success(['results' => []]);
    }
    $results = new WP_Query([
        's'              => $q,
        'post_type'      => ['post', 'case_study'],
        'posts_per_page' => 6,
        'post_status'    => 'publish',
    ]);
    $out = [];
    while ($results->have_posts()) {
        $results->the_post();
        $out[] = [
            'title'   => get_the_title(),
            'url'     => get_permalink(),
            'type'    => get_post_type(),
            'excerpt' => wp_trim_words(get_the_excerpt(), 12),
        ];
    }
    wp_reset_postdata();
    wp_send_json_success(['results' => $out]);
}

// Localise AJAX URL + nonce for blog header search
add_action('wp_enqueue_scripts', function () {
    wp_localize_script('cr8v-main', 'cr8vAjax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('cr8v_search_nonce'),
    ]);
});
