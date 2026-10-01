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
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Dev Playground', 'menu-item-url' => home_url('/dev-playground/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'About', 'menu-item-url' => home_url('/about/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Blog', 'menu-item-url' => home_url('/blog/'), 'menu-item-status' => 'publish']);
                wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Contact Us', 'menu-item-url' => home_url('/contact/'), 'menu-item-status' => 'publish']);
                $locations['mobile-drawer'] = $menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }
    }
});

// Auto-heal existing menu items pointing to /#dev-playground
add_action('init', function () {
    if (is_admin() || wp_doing_ajax()) {
        $locations = get_theme_mod('nav_menu_locations');
        $menu_id = $locations['mobile-drawer'] ?? 0;
        if ($menu_id) {
            $items = wp_get_nav_menu_items($menu_id);
            if (!empty($items)) {
                foreach ($items as $item) {
                    if (strpos($item->url, '#dev-playground') !== false) {
                        update_post_meta($item->ID, '_menu_item_url', home_url('/dev-playground/'));
                    }
                }
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


/* ─── 9. CANONICAL REDIRECT SUPPRESSION & TEMPLATE ROUTER ──────────── */

// 9A-1. Suppress Rank Math & 3rd party redirect plugins from hijacking virtual routes & case studies
add_filter('rank_math/redirection/pre_search', function ($pre, $uri = '') {
    $req = !empty($uri) ? $uri : ($_SERVER['REQUEST_URI'] ?? '');
    $raw = strtolower(trim(parse_url($req, PHP_URL_PATH), '/'));
    $parts = explode('/', $raw);
    $first = $parts[0] ?? '';
    $last  = end($parts) ?: '';
    if (in_array($first, ['case-studies', 'case-study', 'portfolio', 'discovery-call', 'book-a-call', 'book', 'services', 'dev-playground', 'about', 'about-us', 'contact', 'contact-us', 'blog'], true)
        || in_array($last, ['web-design', 'shopify', 'wordpress', 'custom-dev', 'ai-mvp', 'ecommerce', 'digital-marketing', 'brand-identity', 'brand-strategy', 'woocommerce', 'seo-content'], true)) {
        return false;
    }
    return $pre;
}, 1, 2);

add_filter('rank_math/redirection/do_redirection', function ($redirect, $uri = '') {
    $req = !empty($uri) ? $uri : ($_SERVER['REQUEST_URI'] ?? '');
    $raw = strtolower(trim(parse_url($req, PHP_URL_PATH), '/'));
    $parts = explode('/', $raw);
    $first = $parts[0] ?? '';
    $last  = end($parts) ?: '';
    if (in_array($first, ['case-studies', 'case-study', 'portfolio', 'discovery-call', 'book-a-call', 'book', 'services', 'dev-playground', 'about', 'about-us', 'contact', 'contact-us', 'blog'], true)
        || in_array($last, ['web-design', 'shopify', 'wordpress', 'custom-dev', 'ai-mvp', 'ecommerce', 'digital-marketing', 'brand-identity', 'brand-strategy', 'woocommerce', 'seo-content'], true)) {
        return false;
    }
    return $redirect;
}, 1, 2);

// 9A-2. Priority 1 Early Router: Serves case study, service, and core URLs BEFORE Rank Math priority 10 redirect can fire
add_action('template_redirect', function () {
    $raw_uri   = strtolower(trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/'));
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';

    $case_study_slugs = [
        'the-duch-apartments', 'duch-apartments', 'the-duch', 'duch', 'vanguard-architecture',
        'mkenny-properties', 'mkenny', 'mkennyproperties', 'mkenny-real-estate',
        'bridgepoint-compliance', 'bridgepoint-consulting', 'bridgepoint', 'compliance-analysis', 'compliance-checker',
        'bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints',
        'blvck-hair-ng', 'blvck-hair', 'blvckhair', 'luxe-apparel',
        'victorias-lane', 'victoria-lane', 'victoriaslane',
        'kiri-city-stays', 'kiri-city', 'kiricitystays',
        'stride-plus-media', 'stride-plus', 'stride', 'strideradio', 'fintech-growth',
        'sweetermen-ng', 'sweetermen',
        'wp-publishion-ai', 'wp-publishion', 'cognitive-ai'
    ];

    // Single Case Study Route: /case-studies/{slug}/ or /portfolio/{slug}/
    if (($first_seg === 'case-studies' || $first_seg === 'case-study' || $first_seg === 'portfolio') && count($uri_parts) >= 2) {
        if (in_array($uri_slug, $case_study_slugs, true)) {
            global $wp_query;
            if ($wp_query) {
                $wp_query->is_404 = false;
                $wp_query->is_single = true;
                $wp_query->is_singular = true;
                $wp_query->is_page = false;
                $wp_query->is_archive = false;
                $wp_query->post_count = 1;
            }
            status_header(200);
            $template = locate_template('single-case_study.php');
            if ($template) {
                include $template;
                exit;
            }
        }
    }

    // Case Studies Archive: /case-studies/
    if (($first_seg === 'case-studies' || $first_seg === 'portfolio') && count($uri_parts) === 1) {
        global $wp_query;
        if ($wp_query) {
            $wp_query->is_404 = false;
            $wp_query->is_archive = true;
            $wp_query->is_page = false;
            $wp_query->is_single = false;
            $wp_query->is_singular = false;
        }
        status_header(200);
        $template = locate_template('archive-case_study.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // Individual Service Pages: /services/{slug}/ or /{slug}/
    $service_template_map = [
        'web-design'                 => 'page-service-web-design.php',
        'website-design'             => 'page-service-web-design.php',
        'shopify'                    => 'page-service-shopify.php',
        'shopify-storefronts'        => 'page-service-shopify.php',
        'wordpress'                  => 'page-service-wordpress.php',
        'wordpress-development'      => 'page-service-wordpress.php',
        'wp-development'             => 'page-service-wordpress.php',
        'custom-dev'                 => 'page-service-custom-dev.php',
        'custom-development'         => 'page-service-custom-dev.php',
        'custom-web-development'     => 'page-service-custom-dev.php',
        'ai-mvp'                     => 'page-service-ai-mvp.php',
        'ai-mvp-engineering'         => 'page-service-ai-mvp.php',
        'ai-development'             => 'page-service-ai-mvp.php',
        'ecommerce'                  => 'page-service-ecommerce.php',
        'e-commerce'                 => 'page-service-ecommerce.php',
        'ecommerce-solutions'        => 'page-service-ecommerce.php',
        'digital-marketing'          => 'page-service-digital-marketing.php',
        'search-marketing'           => 'page-service-digital-marketing.php',
        'seo-marketing'              => 'page-service-digital-marketing.php',
        'brand-identity'             => 'page-service-brand-identity.php',
        'brand-identity-design'      => 'page-service-brand-identity.php',
        'visual-identity'            => 'page-service-brand-identity.php',
        'brand-strategy'             => 'page-service-brand-strategy.php',
        'brand-positioning'          => 'page-service-brand-strategy.php',
        'woocommerce'                => 'page-service-woocommerce.php',
        'woocommerce-development'    => 'page-service-woocommerce.php',
        'woo-development'            => 'page-service-woocommerce.php',
        'seo-content'                => 'page-service-seo-content.php',
        'seo-and-content'            => 'page-service-seo-content.php',
        'search-engine-optimization' => 'page-service-seo-content.php',
        'seo'                        => 'page-service-seo-content.php',
    ];

    if ($first_seg === 'services' && count($uri_parts) >= 2 && isset($service_template_map[$uri_slug])) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template($service_template_map[$uri_slug]);
        if ($template) {
            include $template;
            exit;
        }
    }

    if (count($uri_parts) === 1 && isset($service_template_map[$first_seg])) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template($service_template_map[$first_seg]);
        if ($template) {
            include $template;
            exit;
        }
    }

    // Services Directory: /services/
    if (($first_seg === 'services' && count($uri_parts) === 1) || in_array($uri_slug, ['services', 'our-services', 'all-services'], true)) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template('page-services.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // Core Pages: Discovery Call, About Us, Contact Us
    if (in_array($first_seg, ['discovery-call', 'book-a-call', 'book'], true) || in_array($uri_slug, ['discovery-call', 'book-a-call', 'book'], true)) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template('page-discovery-call.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    if (in_array($first_seg, ['about', 'about-us', 'studio'], true) || in_array($uri_slug, ['about', 'about-us', 'studio'], true)) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template('page-about.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    if (in_array($first_seg, ['contact', 'contact-us'], true) || in_array($uri_slug, ['contact', 'contact-us'], true)) {
        global $wp_query;
        if ($wp_query) { $wp_query->is_404 = false; $wp_query->is_page = true; }
        status_header(200);
        $template = locate_template('page-contact.php');
        if ($template) {
            include $template;
            exit;
        }
    }
}, 1);

// 9A. Prevent WordPress from guessing/redirecting virtual routes & clean service URLs to similar-named blog posts
add_filter('redirect_canonical', function ($redirect_url, $requested_url) {
    $raw_uri   = trim(parse_url($requested_url, PHP_URL_PATH), '/');
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';

    $intercept_first_segs = [
        'services', 'discovery-call', 'book-a-call', 'book',
        'blog', 'about', 'contact', 'case-studies', 'case-study', 'portfolio', 'dev-playground'
    ];
    if (in_array($first_seg, $intercept_first_segs, true)) {
        return false;
    }

    $intercept_slugs = [
        'web-design', 'shopify', 'wordpress', 'custom-dev', 'ai-mvp', 'ecommerce',
        'digital-marketing', 'brand-identity', 'brand-strategy', 'woocommerce', 'seo-content',
        'discovery-call', 'book-a-call', 'book', 'dev-playground', 'case-studies', 'portfolio'
    ];
    if (in_array($uri_slug, $intercept_slugs, true)) {
        return false;
    }

    return $redirect_url;
}, 10, 2);

// 9B. Prevents 404s and automatically intercepts all core virtual routes
add_filter('pre_handle_404', function ($handled, $wp_query) {
    $raw_uri   = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';

    $routes_to_handle = [
        'services', 'discovery-call', 'book-a-call', 'book',
        'blog', 'about', 'contact', 'case-studies', 'case-study', 'portfolio', 'dev-playground'
    ];

    if (in_array($first_seg, $routes_to_handle, true)) {
        return true;
    }

    $case_study_slugs = [
        'the-duch-apartments', 'duch-apartments', 'the-duch', 'duch', 'vanguard-architecture',
        'mkenny-properties', 'mkenny', 'mkennyproperties', 'mkenny-real-estate',
        'bridgepoint-compliance', 'bridgepoint-consulting', 'bridgepoint', 'compliance-analysis',
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

    $service_slugs = [
        'web-design', 'website-design', 'webdesign',
        'shopify', 'shopify-storefronts',
        'wordpress', 'wordpress-development', 'wp-development',
        'custom-dev', 'custom-development', 'custom-web-development',
        'ai-mvp', 'ai-mvp-engineering', 'ai-development',
        'ecommerce', 'e-commerce', 'ecommerce-solutions',
        'digital-marketing', 'search-marketing', 'seo-marketing',
        'brand-identity', 'brand-identity-design', 'visual-identity',
        'brand-strategy', 'brand-positioning',
        'woocommerce', 'woocommerce-development', 'woo-development',
        'seo-content', 'seo-and-content', 'search-engine-optimization', 'seo'
    ];

    if (in_array($uri_slug, $service_slugs, true)) {
        return true;
    }

    return $handled;
}, 10, 2);

// 9C. Virtual & Physical Template Mapping Engine
add_filter('template_include', function ($template) {
    global $wp_query;

    $post_id = get_queried_object_id();
    $slug    = $post_id ? get_post_field('post_name', $post_id) : '';

    $raw_uri   = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
    $uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';
    $first_seg = !empty($uri_parts) ? $uri_parts[0] : '';

    // 1. BLOG ROUTE: Route /blog/ and /blog/page/X/ directly to home.php and populate posts query
    if ($slug === 'blog' || $uri_slug === 'blog' || $first_seg === 'blog') {
        if ($wp_query) {
            $paged = 1;
            if (!empty($wp_query->query_vars['paged'])) {
                $paged = $wp_query->query_vars['paged'];
            } elseif (!empty($wp_query->query_vars['page'])) {
                $paged = $wp_query->query_vars['page'];
            } elseif (isset($_GET['paged'])) {
                $paged = (int) $_GET['paged'];
            } elseif (count($uri_parts) >= 3 && $uri_parts[1] === 'page' && is_numeric($uri_parts[2])) {
                $paged = (int) $uri_parts[2];
            }
            $count = cr8v_mod('blog_posts_per_page', '9');
            $wp_query->query([
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => (int) $count,
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            $wp_query->is_404      = false;
            $wp_query->is_page     = false;
            $wp_query->is_home     = true;
            $wp_query->is_archive  = false;
            $wp_query->is_single   = false;
            $wp_query->is_singular = false;
        }
        status_header(200);
        $t = locate_template('home.php');
        if ($t) return $t;
    }

    // 2. CASE STUDIES ARCHIVE / PORTFOLIO
    if (($first_seg === 'case-studies' && count($uri_parts) === 1) || ($first_seg === 'case-study' && count($uri_parts) === 1) || in_array($slug, ['case-studies', 'portfolio'], true) || in_array($uri_slug, ['case-studies', 'portfolio'], true) || is_post_type_archive('case_study')) {
        if ($wp_query) {
            $wp_query->is_404 = false;
            $wp_query->is_page = false;
            $wp_query->is_singular = false;
            $wp_query->is_archive = true;
        }
        status_header(200);
        $t = locate_template('archive-case_study.php');
        if ($t) return $t;
    }

    // 3. UNIVERSAL CASE STUDY ROUTER — All portfolio pages use dynamic single-case_study.php controller
    $case_study_slugs = [
        'the-duch-apartments', 'duch-apartments', 'the-duch', 'duch', 'vanguard-architecture',
        'mkenny-properties', 'mkenny', 'mkennyproperties', 'mkenny-real-estate',
        'bridgepoint-compliance', 'bridgepoint-consulting', 'bridgepoint', 'compliance-analysis',
        'bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints',
        'blvck-hair-ng', 'blvck-hair', 'blvckhair', 'luxe-apparel',
        'victorias-lane', 'victoria-lane', 'victoriaslane',
        'kiri-city-stays', 'kiri-city', 'kiricitystays',
        'stride-plus-media', 'stride-plus', 'stride', 'strideradio', 'fintech-growth',
        'sweetermen-ng', 'sweetermen',
        'wp-publishion-ai', 'wp-publishion', 'cognitive-ai'
    ];

    $is_cs = in_array($slug, $case_study_slugs, true)
        || in_array($uri_slug, $case_study_slugs, true)
        || ($first_seg === 'portfolio' && count($uri_parts) >= 2)
        || ($first_seg === 'case-studies' && count($uri_parts) >= 2)
        || ($first_seg === 'case-study' && count($uri_parts) >= 2)
        || is_singular('case_study');

    if ($is_cs) {
        if ($wp_query) {
            $wp_query->is_404 = false;
            $target_post = null;
            if (!empty($post_id)) {
                $target_post = get_post($post_id);
            }
            if (!$target_post) {
                $target_post = get_page_by_path($uri_slug, OBJECT, ['case_study', 'page', 'post'])
                            ?: get_page_by_path('portfolio/' . $uri_slug, OBJECT, ['case_study', 'page', 'post']);
            }
            if ($target_post instanceof WP_Post && !empty($target_post->ID)) {
                $wp_query->post = $target_post;
                $wp_query->posts = [$target_post];
                $wp_query->post_count = 1;
                $wp_query->queried_object = $target_post;
                $wp_query->queried_object_id = $target_post->ID;
                $GLOBALS['post'] = $target_post;
                $wp_query->is_singular = true;
                $wp_query->is_single = true;
            } else {
                $wp_query->is_404 = false;
                $wp_query->is_single = false;
                $wp_query->is_page = false;
                $wp_query->is_singular = false;
                $wp_query->is_archive = false;
                $wp_query->post_count = 0;
            }
        }
        status_header(200);
        $t = locate_template('single-case_study.php');
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

    // Safety canonical URL filter for virtual portfolio routes to prevent core link-template.php null warnings
    add_filter('wp_get_canonical_url', function ($canonical_url, $post) {
        if (empty($post) && !empty($_SERVER['REQUEST_URI'])) {
            return home_url($_SERVER['REQUEST_URI']);
        }
        return $canonical_url;
    }, 10, 2);

    // 4. CORE PAGES & SERVICES (Works for both physical pages and virtual URL routes)
    // About Us
    if (in_array($slug, ['about', 'about-us', 'studio'], true) || in_array($uri_slug, ['about', 'about-us', 'studio'], true) || $first_seg === 'about') {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-about.php');
        if ($t) return $t;
    }

    // Contact Us
    if (in_array($slug, ['contact', 'contact-us'], true) || in_array($uri_slug, ['contact', 'contact-us'], true) || $first_seg === 'contact' || is_page_template('page-contact.php') || is_page_template('page-contact-us.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-contact.php');
        if ($t) return $t;
    }

    // Discovery Call
    if (in_array($slug, ['discovery-call', 'book-a-call', 'book'], true) || in_array($uri_slug, ['discovery-call', 'book-a-call', 'book'], true) || in_array($first_seg, ['discovery-call', 'book-a-call', 'book'], true) || is_page_template('page-discovery-call.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-discovery-call.php');
        if ($t) return $t;
    }

    // Services Overview / Directory
    if (($first_seg === 'services' && count($uri_parts) === 1) || in_array($slug, ['services', 'our-services', 'all-services'], true) || in_array($uri_slug, ['services', 'our-services', 'all-services'], true) || is_page_template('page-services.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-services.php');
        if ($t) return $t;
    }

    // Web Design & UX
    if (in_array($slug, ['web-design', 'website-design', 'webdesign'], true) || in_array($uri_slug, ['web-design', 'website-design', 'webdesign'], true) || is_page_template('page-web-design.php') || is_page_template('page-service-web-design.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-web-design.php');
        if ($t) return $t;
    }

    // Shopify Storefronts
    if (in_array($slug, ['shopify', 'shopify-storefronts'], true) || in_array($uri_slug, ['shopify', 'shopify-storefronts'], true) || is_page_template('page-shopify.php') || is_page_template('page-service-shopify.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-shopify.php');
        if ($t) return $t;
    }

    // WordPress Development
    if (in_array($slug, ['wordpress', 'wordpress-development', 'wp-development'], true) || in_array($uri_slug, ['wordpress', 'wordpress-development', 'wp-development'], true) || is_page_template('page-wordpress.php') || is_page_template('page-service-wordpress.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-wordpress.php');
        if ($t) return $t;
    }

    // Custom Web Development
    if (in_array($slug, ['custom-dev', 'custom-development', 'custom-web-development'], true) || in_array($uri_slug, ['custom-dev', 'custom-development', 'custom-web-development'], true) || is_page_template('page-custom-dev.php') || is_page_template('page-service-custom-dev.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-custom-dev.php');
        if ($t) return $t;
    }

    // AI MVP Engineering
    if (in_array($slug, ['ai-mvp', 'ai-mvp-engineering', 'ai-development'], true) || in_array($uri_slug, ['ai-mvp', 'ai-mvp-engineering', 'ai-development'], true) || is_page_template('page-ai-mvp.php') || is_page_template('page-service-ai-mvp.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-ai-mvp.php');
        if ($t) return $t;
    }

    // E-Commerce Solutions
    if (in_array($slug, ['ecommerce', 'e-commerce', 'ecommerce-solutions'], true) || in_array($uri_slug, ['ecommerce', 'e-commerce', 'ecommerce-solutions'], true) || is_page_template('page-ecommerce.php') || is_page_template('page-e-commerce.php') || is_page_template('page-service-ecommerce.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-ecommerce.php');
        if ($t) return $t;
    }

    // Digital Marketing
    if (in_array($slug, ['digital-marketing', 'search-marketing', 'seo-marketing'], true) || in_array($uri_slug, ['digital-marketing', 'search-marketing', 'seo-marketing'], true) || is_page_template('page-digital-marketing.php') || is_page_template('page-service-digital-marketing.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-digital-marketing.php');
        if ($t) return $t;
    }

    // Brand Identity Design
    if (in_array($slug, ['brand-identity', 'brand-identity-design', 'visual-identity'], true) || in_array($uri_slug, ['brand-identity', 'brand-identity-design', 'visual-identity'], true) || is_page_template('page-brand-identity.php') || is_page_template('page-service-brand-identity.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-brand-identity.php');
        if ($t) return $t;
    }

    // Brand Strategy
    if (in_array($slug, ['brand-strategy', 'brand-positioning'], true) || in_array($uri_slug, ['brand-strategy', 'brand-positioning'], true) || is_page_template('page-brand-strategy.php') || is_page_template('page-service-brand-strategy.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-brand-strategy.php');
        if ($t) return $t;
    }

    // WooCommerce Development
    if (in_array($slug, ['woocommerce', 'woocommerce-development', 'woo-development'], true) || in_array($uri_slug, ['woocommerce', 'woocommerce-development', 'woo-development'], true) || is_page_template('page-woocommerce.php') || is_page_template('page-service-woocommerce.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-woocommerce.php');
        if ($t) return $t;
    }

    // SEO & Content Strategy
    if (in_array($slug, ['seo-content', 'seo-and-content', 'search-engine-optimization', 'seo'], true) || in_array($uri_slug, ['seo-content', 'seo-and-content', 'search-engine-optimization', 'seo'], true) || is_page_template('page-seo-content.php') || is_page_template('page-service-seo-content.php')) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('page-service-seo-content.php');
        if ($t) return $t;
    }

    // Case Studies Archive
    if (in_array($slug, ['case-studies', 'portfolio'], true) || in_array($uri_slug, ['case-studies', 'portfolio'], true)) {
        if ($wp_query) { $wp_query->is_404 = false; }
        status_header(200);
        $t = locate_template('archive-case_study.php');
        if ($t) return $t;
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

/**
 * Global helper to locate theme case study images safely with automatic modification timestamp cache-busting.
 * Bypasses aggressive browser and CDN caches whenever an asset is updated.
 */
if ( ! function_exists( 'cr8v_cs_img_src' ) ) {
    function cr8v_cs_img_src( $filename, $fallback = '' ) {
        if ( empty( $filename ) ) return '';
        if ( filter_var( $filename, FILTER_VALIDATE_URL ) ) return $filename;
        $theme_dir = get_template_directory();
        $theme_uri = get_template_directory_uri();
        $rel = '/assets/img/case_studies/' . ltrim( $filename, '/' );
        if ( file_exists( $theme_dir . $rel ) ) {
            $ver = filemtime( $theme_dir . $rel );
            return $theme_uri . $rel . '?v=' . $ver;
        }
        if ( ! empty( $fallback ) ) {
            $rel_fb = '/assets/img/case_studies/' . ltrim( $fallback, '/' );
            if ( file_exists( $theme_dir . $rel_fb ) ) {
                $ver = filemtime( $theme_dir . $rel_fb );
                return $theme_uri . $rel_fb . '?v=' . $ver;
            }
        }
        return $theme_uri . $rel;
    }
}

/**
 * ─────────────────────────────────────────────────────────────────────────────
 * RAW HTML / ELEMENTOR MIGRATION CONTENT SANITIZER
 * Fixes broken CSS, JS, and layouts in blog posts and pages migrated from Elementor:
 * 1. Elementor data fallback: if Elementor is deactivated and post_content is empty,
 *    extracts HTML and text widgets directly from _elementor_data JSON.
 * 2. wpautop / wptexturize cleanup: strips injected <br /> and <p> from inside
 *    <style> and <script> tags, and decodes broken curly quotes.
 * 3. Removes phantom <p> wrappers from around block-level HTML tags.
 * ─────────────────────────────────────────────────────────────────────────────
 */

// 1. Elementor Deactivated Fallback: extract HTML/text widgets from _elementor_data if post_content is empty
add_filter( 'the_content', function( $content ) {
    if ( empty( trim( strip_tags( $content, '<img><style><script><video><iframe><section><article><div>' ) ) ) ) {
        $post_id = get_the_ID();
        if ( $post_id && ! did_action( 'elementor/loaded' ) ) {
            $el_data_raw = get_post_meta( $post_id, '_elementor_data', true );
            if ( ! empty( $el_data_raw ) ) {
                $el_data = is_array( $el_data_raw ) ? $el_data_raw : json_decode( $el_data_raw, true );
                if ( is_array( $el_data ) ) {
                    $extracted = cr8v_extract_elementor_html_recursive( $el_data );
                    if ( ! empty( $extracted ) ) {
                        $content = $extracted;
                    }
                }
            }
        }
    }
    return $content;
}, 1 );

function cr8v_extract_elementor_html_recursive( $elements ) {
    $out = '';
    if ( ! is_array( $elements ) ) return $out;
    foreach ( $elements as $el ) {
        if ( ! empty( $el['widgetType'] ) ) {
            if ( $el['widgetType'] === 'html' && ! empty( $el['settings']['html'] ) ) {
                $out .= $el['settings']['html'] . "\n";
            } elseif ( $el['widgetType'] === 'text-editor' && ! empty( $el['settings']['editor'] ) ) {
                $out .= $el['settings']['editor'] . "\n";
            } elseif ( $el['widgetType'] === 'heading' && ! empty( $el['settings']['title'] ) ) {
                $tag = ! empty( $el['settings']['header_size'] ) ? esc_attr( $el['settings']['header_size'] ) : 'h2';
                $out .= "<{$tag}>" . esc_html( $el['settings']['title'] ) . "</{$tag}>\n";
            }
        }
        if ( ! empty( $el['elements'] ) && is_array( $el['elements'] ) ) {
            $out .= cr8v_extract_elementor_html_recursive( $el['elements'] );
        }
    }
    return $out;
}

// 2. Clean up wpautop and wptexturize damage on HTML, style, and script tags (run at priority 999)
add_filter( 'the_content', function( $content ) {
    if ( empty( $content ) ) return $content;

    // A. Clean <style> blocks: remove <br />, <br>, <p>, </p>, and replace smart quotes
    $content = preg_replace_callback( '/<style\b[^>]*>(.*?)<\/style>/is', function( $matches ) {
        $css = $matches[1];
        $css = str_ireplace( [ '<br />', '<br>', '<p>', '</p>' ], '', $css );
        $css = str_replace( [ "\r\n\r\n", "\n\n" ], "\n", $css );
        // Replace smart quotes that break CSS font-family or selectors
        $css = str_replace(
            [ '&#8216;', '&#8217;', '&#8220;', '&#8221;', '&rsquo;', '&lsquo;', '&rdquo;', '&ldquo;', '‘', '’', '“', '”' ],
            [ "'", "'", '"', '"', "'", "'", '"', '"', "'", "'", '"', '"' ],
            $css
        );
        return '<style>' . $css . '</style>';
    }, $content );

    // B. Clean <script> blocks: remove <br />, <br>, <p>, </p>, and fix quotes/entities
    $content = preg_replace_callback( '/<script\b[^>]*>(.*?)<\/script>/is', function( $matches ) {
        $js = $matches[1];
        $js = str_ireplace( [ '<br />', '<br>', '<p>', '</p>' ], '', $js );
        $js = str_replace(
            [ '&#8216;', '&#8217;', '&#8220;', '&#8221;', '&rsquo;', '&lsquo;', '&rdquo;', '&ldquo;', '‘', '’', '“', '”', '&amp;&amp;', '&lt;', '&gt;' ],
            [ "'", "'", '"', '"', "'", "'", '"', '"', "'", "'", '"', '"', '&&', '<', '>' ],
            $js
        );
        return '<script>' . $js . '</script>';
    }, $content );

    // C. Remove accidental <p> tags wrapping block-level tags
    $block_tags = 'section|article|header|footer|nav|aside|div|style|script|pre|table|ul|ol|blockquote';
    $content = preg_replace( '/<p>\s*(<\/?(?:' . $block_tags . ')[^>]*>)\s*<\/p>/i', '$1', $content );
    $content = preg_replace( '/<p>\s*(<(?:' . $block_tags . ')[^>]*>)/i', '$1', $content );
    $content = preg_replace( '/(<\/(?:' . $block_tags . ')>)\s*<\/p>/i', '$1', $content );

    return $content;
}, 999 );


