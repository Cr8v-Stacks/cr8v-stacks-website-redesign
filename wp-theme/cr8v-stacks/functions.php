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

    // Image sizes
    add_image_size('cr8v-hero',       1920, 1080, true);
    add_image_size('cr8v-card',        800,  500, true);
    add_image_size('cr8v-gallery-h',  1200,  680, true);   // horizontal gallery
    add_image_size('cr8v-gallery-v',   680, 1200, true);   // tall/portrait gallery
});


/* ─── 2. ENQUEUE SCRIPTS & STYLES ────────────────────────────── */
add_action('wp_enqueue_scripts', function () {
    $uri = get_template_directory_uri();
    $v   = '1.0.2'; // Production asset version for optimal browser caching

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
    wp_enqueue_style('cr8v-theme', get_stylesheet_uri(), ['cr8v-shared'], $v);

    // Ensure Simple Booking plugin assets (CSS, JS & sbPublic localized data) are enqueued in <head> for Discovery Call page
    if (is_page('discovery-call') || is_page_template('page-discovery-call.php')) {
        if (function_exists('plugins_url')) {
            wp_enqueue_style('sb-public', plugins_url('simple-booking/assets/css/public.css'), [], $v);
            wp_enqueue_script('sb-public', plugins_url('simple-booking/assets/js/public.js'), [], $v, true);
            wp_localize_script(
                'sb-public',
                'sbPublic',
                [
                    'ajaxUrl'      => admin_url('admin-ajax.php'),
                    'nonce'        => wp_create_nonce('sb_public_nonce'),
                    'siteTimezone' => function_exists('wp_timezone_string') ? wp_timezone_string() : 'UTC',
                    'i18n'         => [
                        'loading'       => __('Loading available times…', 'simple-booking'),
                        'noSlots'       => __('No available times on this day. Please pick another date.', 'simple-booking'),
                        'bookingError'  => __('Something went wrong. Please try again.', 'simple-booking'),
                        'selectSlot'    => __('Please select a time slot.', 'simple-booking'),
                        'hostTimeLabel' => __("Host's local time:", 'simple-booking'),
                    ],
                ]
            );
        }
    }

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

// Instruct Simple Booking plugin to load its assets on Discovery Call page template
add_filter('sb_should_load_public_assets', function ($should_load) {
    if (is_page('discovery-call') || is_page_template('page-discovery-call.php')) {
        return true;
    }
    return $should_load;
});


/* ─── 3. INCLUDE MODULES ──────────────────────────────────────── */
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/cpt-case-studies.php';
require_once get_template_directory() . '/inc/cpt-business-talk.php';
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
        'page-service-seo-content.php',
        'page-service-brand-identity.php',
        'page-service-brand-strategy.php',
        'page-service-digital-marketing.php',
        'page-service-ecommerce.php',
        'page-service-woocommerce.php',
        'page-service-wordpress.php',
        'page-service-custom-dev.php',
        'page-service-ai-mvp.php',
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


/* ─── 5. PERMALINK FLUSH & CORE PAGE CREATOR ON THEME ACTIVATION ─── */
add_action('after_switch_theme', function () {
    cr8v_register_case_study_cpt(); // defined in inc/cpt-case-studies.php
    cr8v_register_business_talk_cpt(); // defined in inc/cpt-business-talk.php
    flush_rewrite_rules();

    // Auto-setup mobile drawer menu and core pages once on theme activation
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
                $locations['mobile-drawer'] = $menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }
    }
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


/* ─── 9. AUTOMATIC PAGE & CASE STUDY TEMPLATE ROUTER ──────────── */
// Prevents 404s and automatically maps URLs, slugs, & CPT items to dedicated templates
add_filter('pre_handle_404', function ($handled, $wp_query) {
    $raw_uri   = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';

    if (in_array($first_seg, ['case-studies', 'case-study', 'portfolio'], true)) {
        return true; // Intercept and allow template_include to render
    }

    $case_study_slugs = [
        'the-duch-apartments', 'duch-apartments', 'the-duch', 'duch', 'vanguard-architecture',
        'mkenny-properties', 'mkenny', 'mkennyproperties', 'mkenny-real-estate',
        'bridgepoint-compliance', 'bridgepoint-consulting', 'bridgepoint', 'apex-logistics',
        'bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints',
        'blvck-hair-ng', 'blvck-hair', 'blvckhair', 'luxe-apparel',
        'victorias-lane', 'victoria-lane', 'victoriaslane',
        'kiri-city-stays', 'kiri-city', 'kiricitystays',
        'stride-plus-media', 'stride-plus', 'stride', 'strideradio', 'fintech-growth',
        'sweetermen-ng', 'sweetermen',
        'wp-publishion-ai', 'wp-publishion', 'cognitive-ai',
    ];

    if (in_array($uri_slug, $case_study_slugs, true)) {
        return true;
    }

    return $handled;
}, 10, 2);

add_filter('template_include', function ($template) {
    global $wp_query;

    $post_id = get_queried_object_id();
    $slug    = $post_id ? get_post_field('post_name', $post_id) : '';

    $raw_uri   = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';

    // Check Case Studies Archive / Portfolio
    if (($first_seg === 'case-studies' && count($uri_parts) === 1) || ($first_seg === 'case-study' && count($uri_parts) === 1) || in_array($slug, ['case-studies', 'portfolio'], true) || in_array($uri_slug, ['case-studies', 'portfolio'], true) || is_post_type_archive('case_study')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('archive-case_study.php');
        if ($t) return $t;
    }

    // Comprehensive Case Studies Map & Aliases
    $case_study_routes = [
        'page-case-study-duch.php' => [
            'the-duch-apartments', 'duch-apartments', 'the-duch', 'duch', 'vanguard-architecture'
        ],
        'page-case-study-mkenny.php' => [
            'mkenny-properties', 'mkenny', 'mkennyproperties', 'mkenny-real-estate'
        ],
        'page-case-study-bridgepoint.php' => [
            'bridgepoint-compliance', 'bridgepoint-consulting', 'bridgepoint', 'apex-logistics'
        ],
        'page-case-study-bridgepoint-brand.php' => [
            'bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints'
        ],
        'page-case-study-blvck-hair.php' => [
            'blvck-hair-ng', 'blvck-hair', 'blvckhair', 'luxe-apparel'
        ],
        'page-case-study-victorias-lane.php' => [
            'victorias-lane', 'victoria-lane', 'victoriaslane'
        ],
        'page-case-study-kiri-city.php' => [
            'kiri-city-stays', 'kiri-city', 'kiricitystays'
        ],
        'page-case-study-stride.php' => [
            'stride-plus-media', 'stride-plus', 'stride', 'strideradio', 'fintech-growth'
        ],
        'page-case-study-sweetermen.php' => [
            'sweetermen-ng', 'sweetermen'
        ],
        'page-case-study-wp-publishion.php' => [
            'wp-publishion-ai', 'wp-publishion', 'cognitive-ai'
        ],
    ];

    foreach ($case_study_routes as $tpl_file => $slug_aliases) {
        if (in_array($slug, $slug_aliases, true) || in_array($uri_slug, $slug_aliases, true) || is_page_template($tpl_file)) {
            if ($wp_query) {
                $wp_query->is_404 = false;
                $wp_query->is_single = true;
            }
            status_header(200);
            $t = locate_template($tpl_file);
            if ($t) return $t;
        }
    }

    if (is_singular('case_study')) {
        $t = locate_template('single-case_study.php');
        if ($t) return $t;
    }
    if (is_post_type_archive('case_study')) {
        $t = locate_template('archive-case_study.php');
        if ($t) return $t;
    }

    if (is_page() || $post_id) {
        // About Us
        if (in_array($slug, ['about', 'about-us', 'studio'], true) || in_array($uri_slug, ['about', 'about-us', 'studio'], true)) {
            $t = locate_template('page-about.php');
            if ($t) return $t;
        }
        
        // Contact Us
        if (in_array($slug, ['contact', 'contact-us'], true) || in_array($uri_slug, ['contact', 'contact-us'], true) || is_page_template('page-contact.php') || is_page_template('page-contact-us.php')) {
            $t = locate_template('page-contact.php');
            if ($t) return $t;
        }

        // Discovery Call
        if (in_array($slug, ['discovery-call', 'book-a-call', 'book'], true) || in_array($uri_slug, ['discovery-call', 'book-a-call', 'book'], true) || is_page_template('page-discovery-call.php')) {
            $t = locate_template('page-discovery-call.php');
            if ($t) return $t;
        }

        // Services Overview / Directory
        if (in_array($slug, ['services', 'our-services', 'all-services'], true) || in_array($uri_slug, ['services', 'our-services', 'all-services'], true)) {
            $t = locate_template('page-services.php');
            if ($t) return $t;
        }

        // Web Design & UX
        if (in_array($slug, ['web-design', 'website-design', 'webdesign'], true) || in_array($uri_slug, ['web-design', 'website-design', 'webdesign'], true) || is_page_template('page-web-design.php') || is_page_template('page-service-web-design.php')) {
            $t = locate_template('page-service-web-design.php');
            if ($t) return $t;
        }

        // Shopify Storefronts
        if (in_array($slug, ['shopify', 'shopify-storefronts'], true) || in_array($uri_slug, ['shopify', 'shopify-storefronts'], true) || is_page_template('page-shopify.php') || is_page_template('page-service-shopify.php')) {
            $t = locate_template('page-service-shopify.php');
            if ($t) return $t;
        }

        // WordPress Development
        if (in_array($slug, ['wordpress', 'wordpress-development', 'wp-development'], true) || in_array($uri_slug, ['wordpress', 'wordpress-development', 'wp-development'], true) || is_page_template('page-wordpress.php') || is_page_template('page-service-wordpress.php')) {
            $t = locate_template('page-service-wordpress.php');
            if ($t) return $t;
        }

        // Custom Web Development
        if (in_array($slug, ['custom-dev', 'custom-development', 'custom-web-development'], true) || in_array($uri_slug, ['custom-dev', 'custom-development', 'custom-web-development'], true) || is_page_template('page-custom-dev.php') || is_page_template('page-service-custom-dev.php')) {
            $t = locate_template('page-service-custom-dev.php');
            if ($t) return $t;
        }

        // AI MVP Engineering
        if (in_array($slug, ['ai-mvp', 'ai-mvp-engineering', 'ai-development'], true) || in_array($uri_slug, ['ai-mvp', 'ai-mvp-engineering', 'ai-development'], true) || is_page_template('page-ai-mvp.php') || is_page_template('page-service-ai-mvp.php')) {
            $t = locate_template('page-service-ai-mvp.php');
            if ($t) return $t;
        }

        // E-Commerce Solutions
        if (in_array($slug, ['ecommerce', 'e-commerce', 'ecommerce-solutions'], true) || in_array($uri_slug, ['ecommerce', 'e-commerce', 'ecommerce-solutions'], true) || is_page_template('page-ecommerce.php') || is_page_template('page-e-commerce.php') || is_page_template('page-service-ecommerce.php')) {
            $t = locate_template('page-service-ecommerce.php');
            if ($t) return $t;
        }

        // Digital Marketing
        if (in_array($slug, ['digital-marketing', 'search-marketing', 'seo-marketing'], true) || in_array($uri_slug, ['digital-marketing', 'search-marketing', 'seo-marketing'], true) || is_page_template('page-digital-marketing.php') || is_page_template('page-service-digital-marketing.php')) {
            $t = locate_template('page-service-digital-marketing.php');
            if ($t) return $t;
        }

        // Brand Identity Design
        if (in_array($slug, ['brand-identity', 'brand-identity-design', 'visual-identity'], true) || in_array($uri_slug, ['brand-identity', 'brand-identity-design', 'visual-identity'], true) || is_page_template('page-brand-identity.php') || is_page_template('page-service-brand-identity.php')) {
            $t = locate_template('page-service-brand-identity.php');
            if ($t) return $t;
        }

        // Brand Strategy
        if (in_array($slug, ['brand-strategy', 'brand-positioning'], true) || in_array($uri_slug, ['brand-strategy', 'brand-positioning'], true) || is_page_template('page-brand-strategy.php') || is_page_template('page-service-brand-strategy.php')) {
            $t = locate_template('page-service-brand-strategy.php');
            if ($t) return $t;
        }

        // WooCommerce Development
        if (in_array($slug, ['woocommerce', 'woocommerce-development', 'woo-development'], true) || in_array($uri_slug, ['woocommerce', 'woocommerce-development', 'woo-development'], true) || is_page_template('page-woocommerce.php') || is_page_template('page-service-woocommerce.php')) {
            $t = locate_template('page-service-woocommerce.php');
            if ($t) return $t;
        }

        // SEO & Content Strategy
        if (in_array($slug, ['seo-content', 'seo-and-content', 'search-engine-optimization', 'seo'], true) || in_array($uri_slug, ['seo-content', 'seo-and-content', 'search-engine-optimization', 'seo'], true) || is_page_template('page-seo-content.php') || is_page_template('page-service-seo-content.php')) {
            $t = locate_template('page-service-seo-content.php');
            if ($t) return $t;
        }

        // Case Studies Archive
        if (in_array($slug, ['case-studies', 'portfolio'], true) || in_array($uri_slug, ['case-studies', 'portfolio'], true)) {
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


