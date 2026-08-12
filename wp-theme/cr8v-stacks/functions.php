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
    add_theme_support('customize-selective-refresh-widgets');
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

    // Backend: Automatically populate & assign Mobile Drawer menu if unassigned
    $locations = get_theme_mod('nav_menu_locations');
    if (empty($locations['mobile-drawer'])) {
        $menu_name = 'Mobile Drawer Navigation';
        $menu_exists = wp_get_nav_menu_object($menu_name);

        if (!$menu_exists) {
            $menu_id = wp_create_nav_menu($menu_name);
            if (!is_wp_error($menu_id)) {
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Home', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Services', 'menu-item-url' => home_url('/services/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Case Studies', 'menu-item-url' => home_url('/case-studies/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Scope Estimator', 'menu-item-url' => home_url('/discovery-call/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Dev Playground', 'menu-item-url' => home_url('/#dev-playground'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'About', 'menu-item-url' => home_url('/about/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Blog', 'menu-item-url' => home_url('/blog/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Contact Us', 'menu-item-url' => home_url('/contact/'), 'menu-item-status' => 'publish']);
            }
        } else {
            $menu_id = $menu_exists->term_id;
        }

        if (isset($menu_id) && !is_wp_error($menu_id)) {
            $locations['mobile-drawer'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }

    // Programmatically ensure core WP pages exist in DB with correct templates
    $core_pages = [
        'contact' => [
            'title'    => 'Contact Us',
            'template' => 'page-contact.php',
        ],
        'about' => [
            'title'    => 'About Us',
            'template' => 'page-about.php',
        ],
        'services' => [
            'title'    => 'Services',
            'template' => 'page-services.php',
        ],
        'discovery-call' => [
            'title'    => 'Discovery Call',
            'template' => 'page-discovery-call.php',
        ],
        'blog' => [
            'title'    => 'Blog',
            'template' => '',
        ],
    ];

    foreach ($core_pages as $slug => $data) {
        $page_obj = get_page_by_path($slug);
        if (!$page_obj) {
            $new_id = wp_insert_post([
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ]);
            if ($new_id && !is_wp_error($new_id) && !empty($data['template'])) {
                update_post_meta($new_id, '_wp_page_template', $data['template']);
            }
        }
    }

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

    // Shared service component CSS (covers all page & section styles)
    wp_enqueue_style('cr8v-shared', $uri . '/assets/css/shared-service-components.css', ['cr8v-fonts'], $v);

    // Theme stylesheet — design tokens, global resets, typography
    // WordPress automatically enqueues style.css for the active theme;
    // we add it here explicitly so child-theme overrides work cleanly.
    wp_enqueue_style('cr8v-theme', get_stylesheet_uri(), ['cr8v-shared'], $v);

    // Page-specific canvas / interaction scripts (loaded in footer)
    wp_enqueue_script(
        'cr8v-canvas',
        $uri . '/assets/js/ecommerce-hero-canvas.js',
        [],
        $v,
        true  // load in footer
    );
    wp_enqueue_script(
        'cr8v-stack',
        $uri . '/assets/js/shared-folder-stack.js',
        [],
        $v,
        true
    );
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
        'page-services.php',
        'page-service-web-design.php',
        'page-web-design.php',
        'page-service-shopify.php',
        'page-shopify.php',
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

/* ─── PRE_GET_POSTS LOOP COUNT & DATE ORDER OVERRIDE FOR BLOG GRID ───────── */
add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_home() || $query->is_archive()) {
            $count = cr8v_mod('blog_posts_per_page', '9');
            $query->set('posts_per_page', (int) $count);
            $query->set('orderby', 'date');
            $query->set('order', 'DESC');
        }
    }
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

// Localise AJAX URL + nonce for search — attach to cr8v-canvas (a real JS handle)
add_action('wp_enqueue_scripts', function () {
    wp_localize_script('cr8v-canvas', 'cr8vAjax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('cr8v_search_nonce'),
    ]);
});


/* ─── 9. AUTOMATIC PAGE TEMPLATE ROUTER ───────────────────────── */
// Automatically maps page slugs & post types to dedicated templates
add_filter('template_include', function ($template) {
    $post_id = get_queried_object_id();
    $slug    = $post_id ? get_post_field('post_name', $post_id) : '';

    // Check dedicated case study template mappings for both CPT post types and Pages
    if (in_array($slug, ['the-duch-apartments', 'duch-apartments'], true) || is_page_template('page-case-study-duch.php')) {
        $t = locate_template('page-case-study-duch.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['mkenny-properties', 'mkenny'], true) || is_page_template('page-case-study-mkenny.php')) {
        $t = locate_template('page-case-study-mkenny.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['bridgepoint-compliance', 'bridgepoint-consulting'], true) || is_page_template('page-case-study-bridgepoint.php')) {
        $t = locate_template('page-case-study-bridgepoint.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['bridgepoint-advisory', 'bridgepoints'], true) || is_page_template('page-case-study-bridgepoint-brand.php')) {
        $t = locate_template('page-case-study-bridgepoint-brand.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['blvck-hair-ng', 'blvck-hair'], true) || is_page_template('page-case-study-blvck-hair.php')) {
        $t = locate_template('page-case-study-blvck-hair.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['victorias-lane', 'victoria-lane'], true) || is_page_template('page-case-study-victorias-lane.php')) {
        $t = locate_template('page-case-study-victorias-lane.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['kiri-city-stays', 'kiri-city'], true) || is_page_template('page-case-study-kiri-city.php')) {
        $t = locate_template('page-case-study-kiri-city.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['stride-plus-media', 'stride-plus'], true) || is_page_template('page-case-study-stride.php')) {
        $t = locate_template('page-case-study-stride.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['sweetermen-ng', 'sweetermen'], true) || is_page_template('page-case-study-sweetermen.php')) {
        $t = locate_template('page-case-study-sweetermen.php');
        if ($t) return $t;
    }
    if (in_array($slug, ['wp-publishion-ai', 'wp-publishion'], true) || is_page_template('page-case-study-wp-publishion.php')) {
        $t = locate_template('page-case-study-wp-publishion.php');
        if ($t) return $t;
    }

    if (is_singular('case_study')) {
        $t = locate_template('single-case_study.php');
        if ($t) return $t;
    }
    if (is_post_type_archive('case_study')) {
        $t = locate_template('archive-case_study.php');
        if ($t) return $t;
    }

    if (is_page()) {
        // About Us
        if (in_array($slug, ['about', 'about-us', 'studio'], true)) {
            $t = locate_template('page-about.php');
            if ($t) return $t;
        }
        
        // Contact Us
        if (in_array($slug, ['contact', 'contact-us'], true) || is_page_template('page-contact.php') || is_page_template('page-contact-us.php')) {
            $t = locate_template('page-contact.php');
            if ($t) return $t;
        }

        // Discovery Call
        if (in_array($slug, ['discovery-call', 'book-a-call', 'book'], true) || is_page_template('page-discovery-call.php')) {
            $t = locate_template('page-discovery-call.php');
            if ($t) return $t;
        }

        // Services Overview / Directory
        if (in_array($slug, ['services', 'our-services', 'all-services'], true)) {
            $t = locate_template('page-services.php');
            if ($t) return $t;
        }

        // Web Design & UX
        if (in_array($slug, ['web-design', 'website-design', 'webdesign'], true) || is_page_template('page-web-design.php') || is_page_template('page-service-web-design.php')) {
            $t = locate_template('page-service-web-design.php');
            if ($t) return $t;
        }

        // Shopify Storefronts
        if (in_array($slug, ['shopify', 'shopify-storefronts'], true) || is_page_template('page-shopify.php') || is_page_template('page-service-shopify.php')) {
            $t = locate_template('page-service-shopify.php');
            if ($t) return $t;
        }

        // WordPress Development
        if (in_array($slug, ['wordpress', 'wordpress-development', 'wp-development'], true) || is_page_template('page-wordpress.php') || is_page_template('page-service-wordpress.php')) {
            $t = locate_template('page-service-wordpress.php');
            if ($t) return $t;
        }

        // Custom Web Development
        if (in_array($slug, ['custom-dev', 'custom-development', 'custom-web-development'], true) || is_page_template('page-custom-dev.php') || is_page_template('page-service-custom-dev.php')) {
            $t = locate_template('page-service-custom-dev.php');
            if ($t) return $t;
        }

        // AI MVP Engineering
        if (in_array($slug, ['ai-mvp', 'ai-mvp-engineering', 'ai-development'], true) || is_page_template('page-ai-mvp.php') || is_page_template('page-service-ai-mvp.php')) {
            $t = locate_template('page-service-ai-mvp.php');
            if ($t) return $t;
        }

        // E-Commerce Solutions
        if (in_array($slug, ['ecommerce', 'e-commerce', 'ecommerce-solutions'], true) || is_page_template('page-ecommerce.php') || is_page_template('page-e-commerce.php') || is_page_template('page-service-ecommerce.php')) {
            $t = locate_template('page-service-ecommerce.php');
            if ($t) return $t;
        }

        // Digital Marketing
        if (in_array($slug, ['digital-marketing', 'search-marketing', 'seo-marketing'], true) || is_page_template('page-digital-marketing.php') || is_page_template('page-service-digital-marketing.php')) {
            $t = locate_template('page-service-digital-marketing.php');
            if ($t) return $t;
        }

        // Brand Identity Design
        if (in_array($slug, ['brand-identity', 'brand-identity-design', 'visual-identity'], true) || is_page_template('page-brand-identity.php') || is_page_template('page-service-brand-identity.php')) {
            $t = locate_template('page-service-brand-identity.php');
            if ($t) return $t;
        }

        // Brand Strategy
        if (in_array($slug, ['brand-strategy', 'brand-positioning'], true) || is_page_template('page-brand-strategy.php') || is_page_template('page-service-brand-strategy.php')) {
            $t = locate_template('page-service-brand-strategy.php');
            if ($t) return $t;
        }

        // Case Studies Archive
        if (in_array($slug, ['case-studies', 'portfolio'], true)) {
            $t = locate_template('archive-case_study.php');
            if ($t) return $t;
        }
    }
    return $template;
});

/**
 * Helper function for Customizer Theme Mods with Fallback Default
 */
if ( ! function_exists( 'cr8v_mod' ) ) {
    function cr8v_mod( $setting, $default = '' ) {
        return get_theme_mod( $setting, $default );
    }
}


