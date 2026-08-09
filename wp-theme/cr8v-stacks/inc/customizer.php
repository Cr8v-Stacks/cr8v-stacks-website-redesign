<?php
/**
 * CR8V Stacks — inc/customizer.php
 * Registers all WP Customizer sections, settings, and controls.
 * Covers: Homepage Hero, Global CTA, Header Branding, Footer, Services.
 */

defined('ABSPATH') || exit;

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    /* ═══════════════════════════════════════════════════════
       PANEL: HOMEPAGE
    ═══════════════════════════════════════════════════════ */
    $wp_customize->add_panel('cr8v_homepage', [
        'title'    => '🏠 Homepage',
        'priority' => 10,
    ]);

    // ── SECTION: Hero ──────────────────────────────────────
    $wp_customize->add_section('cr8v_hero', [
        'title'    => 'Hero Section',
        'panel'    => 'cr8v_homepage',
        'priority' => 10,
    ]);

    _cr8v_text($wp_customize, 'hero_eyebrow',    'cr8v_hero', 'Eyebrow Label',         'Cr8v Stacks — Design & Engineering Studio');
    _cr8v_text($wp_customize, 'hero_headline_1', 'cr8v_hero', 'Headline — Line 1',     'We Build Businesses');
    _cr8v_text($wp_customize, 'hero_headline_2', 'cr8v_hero', 'Headline — Line 2',     'That Win Online');
    _cr8v_textarea($wp_customize, 'hero_sub',    'cr8v_hero', 'Subheadline / Intro',   'Strategy, design, and liquid performance engineering for ambitious brands.');
    _cr8v_text($wp_customize, 'hero_cta_text',   'cr8v_hero', 'CTA Button Text',       'Get an Estimate');
    _cr8v_url($wp_customize,  'hero_cta_link',   'cr8v_hero', 'CTA Button Link',       '/discovery-call/');
    _cr8v_url($wp_customize,  'hero_video_url',  'cr8v_hero', 'Background Video URL',  '');
    _cr8v_image($wp_customize,'hero_poster_img', 'cr8v_hero', 'Video Poster / BG Image');

    // ── SECTION: Testimonials ──────────────────────────────
    $wp_customize->add_section('cr8v_testimonials', [
        'title'    => 'Testimonials Section',
        'panel'    => 'cr8v_homepage',
        'priority' => 20,
    ]);
    _cr8v_text($wp_customize, 'testimonials_eyebrow', 'cr8v_testimonials', 'Section Eyebrow', '// WHAT CLIENTS SAY');
    _cr8v_text($wp_customize, 'testimonials_heading',  'cr8v_testimonials', 'Section Heading',  'Trusted by ambitious brands');

    // Individual testimonials — 3 slots
    for ($i = 1; $i <= 3; $i++) {
        _cr8v_textarea($wp_customize, "testimonial_{$i}_quote",  'cr8v_testimonials', "Testimonial {$i} — Quote",   '');
        _cr8v_text($wp_customize,     "testimonial_{$i}_name",   'cr8v_testimonials', "Testimonial {$i} — Name",    '');
        _cr8v_text($wp_customize,     "testimonial_{$i}_role",   'cr8v_testimonials', "Testimonial {$i} — Role",    '');
        _cr8v_image($wp_customize,    "testimonial_{$i}_avatar", 'cr8v_testimonials', "Testimonial {$i} — Avatar");
    }

    // ── SECTION: Matrix / Stats ───────────────────────────
    $wp_customize->add_section('cr8v_matrix', [
        'title'    => 'Stats / Matrix Section',
        'panel'    => 'cr8v_homepage',
        'priority' => 30,
    ]);
    _cr8v_text($wp_customize, 'matrix_eyebrow', 'cr8v_matrix', 'Section Eyebrow', '// BY THE NUMBERS');
    _cr8v_text($wp_customize, 'matrix_heading',  'cr8v_matrix', 'Section Heading',  'Delivering measurable results');
    for ($i = 1; $i <= 4; $i++) {
        _cr8v_text($wp_customize, "matrix_stat_{$i}_value", 'cr8v_matrix', "Stat {$i} — Value", '');
        _cr8v_text($wp_customize, "matrix_stat_{$i}_label", 'cr8v_matrix', "Stat {$i} — Label", '');
    }


    /* ═══════════════════════════════════════════════════════
       PANEL: GLOBAL SITE SETTINGS
    ═══════════════════════════════════════════════════════ */
    $wp_customize->add_panel('cr8v_global', [
        'title'    => '⚙️ Global Site Settings',
        'priority' => 20,
    ]);

    // ── SECTION: Header Branding ──────────────────────────
    $wp_customize->add_section('cr8v_header', [
        'title'    => 'Header — Branding & CTA',
        'panel'    => 'cr8v_global',
        'priority' => 10,
    ]);
    _cr8v_image($wp_customize, 'header_logo',        'cr8v_header', 'Logo Image');
    _cr8v_text($wp_customize,  'header_cta_text',    'cr8v_header', 'CTA Button Text',  'Get an Estimate');
    _cr8v_url($wp_customize,   'header_cta_link',    'cr8v_header', 'CTA Button Link',  '/discovery-call/');
    _cr8v_text($wp_customize,  'header_drawer_label','cr8v_header', 'Mobile Drawer Tagline', 'Strategy, Design & Liquid Performance');

    // ── SECTION: Footer ───────────────────────────────────
    $wp_customize->add_section('cr8v_footer', [
        'title'    => 'Footer — Copy & Links',
        'panel'    => 'cr8v_global',
        'priority' => 20,
    ]);
    _cr8v_text($wp_customize,    'footer_tagline',    'cr8v_footer', 'Footer Tagline',   'Design, Development & Growth Systems');
    _cr8v_textarea($wp_customize,'footer_desc',       'cr8v_footer', 'Footer Description','We design, build, and grow premium digital ecosystems for ambitious businesses.');
    _cr8v_text($wp_customize,    'footer_copyright',  'cr8v_footer', 'Copyright Text',   '© ' . date('Y') . ' CR8V Stacks. All rights reserved.');
    _cr8v_url($wp_customize,     'footer_linkedin',   'cr8v_footer', 'LinkedIn URL',     '');
    _cr8v_url($wp_customize,     'footer_twitter',    'cr8v_footer', 'X / Twitter URL',  '');
    _cr8v_url($wp_customize,     'footer_instagram',  'cr8v_footer', 'Instagram URL',    '');
    _cr8v_url($wp_customize,     'footer_youtube',    'cr8v_footer', 'YouTube URL',      '');


    /* ═══════════════════════════════════════════════════════
       PANEL: SERVICES PAGES
    ═══════════════════════════════════════════════════════ */
    $wp_customize->add_panel('cr8v_services', [
        'title'    => '🛠 Services Pages',
        'priority' => 30,
    ]);

    $services = [
        'web-design'       => 'Website Design',
        'custom-dev'       => 'Custom Development',
        'ecommerce'        => 'E-Commerce',
        'shopify'          => 'Shopify',
        'woocommerce'      => 'WooCommerce',
        'wordpress'        => 'WordPress',
        'ai-mvp'           => 'AI MVP',
        'brand-identity'   => 'Brand Identity',
        'brand-strategy'   => 'Brand Strategy',
        'digital-marketing'=> 'Digital Marketing',
        'seo-content'      => 'SEO & Content',
    ];

    foreach ($services as $slug => $label) {
        $section_id = 'cr8v_svc_' . str_replace('-', '_', $slug);
        $wp_customize->add_section($section_id, [
            'title' => $label,
            'panel' => 'cr8v_services',
        ]);
        _cr8v_text($wp_customize,    "{$slug}_hero_headline", $section_id, 'Hero Headline', $label);
        _cr8v_textarea($wp_customize,"{$slug}_hero_sub",      $section_id, 'Hero Subheadline', '');
        _cr8v_text($wp_customize,    "{$slug}_cta_text",      $section_id, 'CTA Button Text', 'Start a Project');
        _cr8v_url($wp_customize,     "{$slug}_cta_link",      $section_id, 'CTA Button Link', '/discovery-call/');
    }


    /* ═══════════════════════════════════════════════════════
       PANEL: CONTACT / DISCOVERY
    ═══════════════════════════════════════════════════════ */
    $wp_customize->add_panel('cr8v_contact', [
        'title'    => '📞 Contact & Discovery Call',
        'priority' => 40,
    ]);

    $wp_customize->add_section('cr8v_discovery', [
        'title' => 'Discovery Call Page',
        'panel' => 'cr8v_contact',
    ]);
    _cr8v_text($wp_customize,    'dc_tag',           'cr8v_discovery', 'Tag Label',            '↳ DISCOVERY CALL');
    _cr8v_text($wp_customize,    'dc_h1',            'cr8v_discovery', 'Page Headline',        'BOOK A DISCOVERY CALL');
    _cr8v_textarea($wp_customize,'dc_lede',          'cr8v_discovery', 'Intro Paragraph',      'Select an available time slot below to scope your project requirements, architecture, timelines, and execution strategy directly with our core engineering team.');
    _cr8v_textarea($wp_customize,'dc_booking_embed', 'cr8v_discovery', 'Booking Embed (Calendly URL or WP shortcode)', '');


    /* ═══════════════════════════════════════════════════════
       SELECTIVE REFRESH PARTIALS (Live Preview)
    ═══════════════════════════════════════════════════════ */
    $partials = [
        'hero_eyebrow'    => '.c8-hero-eyebrow, .dp-eyebrow',
        'hero_headline_1' => '.dp-headline .line-1',
        'hero_headline_2' => '.dp-headline .line-2',
        'hero_sub'        => '.dp-sub, .c8-hero-sub',
        'hero_cta_text'   => '.c8-hero-cta-btn',
        'header_cta_text' => '.c8hdr-root .c8-btn-cta',
        'footer_tagline'  => '.c8ft-brand-name',
        'footer_copyright'=> '.c8ft-legal-text',
    ];

    foreach ($partials as $setting_id => $selector) {
        $wp_customize->selective_refresh->add_partial($setting_id, [
            'selector'        => $selector,
            'render_callback' => function () use ($setting_id) {
                return esc_html(get_theme_mod($setting_id));
            },
        ]);
    }
});


/* ─── HELPER FUNCTIONS ──────────────────────────────────────── */
function _cr8v_text(WP_Customize_Manager $c, string $id, string $section, string $label, string $default = '') {
    $c->add_setting($id, ['default' => $default, 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage']);
    $c->add_control($id, ['label' => $label, 'section' => $section, 'type' => 'text']);
}

function _cr8v_textarea(WP_Customize_Manager $c, string $id, string $section, string $label, string $default = '') {
    $c->add_setting($id, ['default' => $default, 'sanitize_callback' => 'sanitize_textarea_field', 'transport' => 'postMessage']);
    $c->add_control($id, ['label' => $label, 'section' => $section, 'type' => 'textarea']);
}

function _cr8v_url(WP_Customize_Manager $c, string $id, string $section, string $label, string $default = '') {
    $c->add_setting($id, ['default' => $default, 'sanitize_callback' => 'esc_url_raw', 'transport' => 'postMessage']);
    $c->add_control($id, ['label' => $label, 'section' => $section, 'type' => 'url']);
}

function _cr8v_image(WP_Customize_Manager $c, string $id, string $section, string $label) {
    $c->add_setting($id, ['default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport' => 'postMessage']);
    $c->add_control(new WP_Customize_Image_Control($c, $id, [
        'label'   => $label,
        'section' => $section,
    ]));
}
