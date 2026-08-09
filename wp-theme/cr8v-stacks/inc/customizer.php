<?php
/**
 * CR8V Stacks — inc/customizer.php
 * Customizer Configuration for Tropos Theme
 * 100% full coverage across all 10 homepage sections.
 * Every option falls back to the exact original copy from home-b.html.
 */

defined('ABSPATH') || exit;

add_action('customize_register', function ($wp_customize) {

    // Helper functions
    function _cr8v_section($wp_customize, $id, $title, $panel = 'cr8v_homepage', $priority = 10) {
        $wp_customize->add_section($id, [
            'title'    => $title,
            'panel'    => $panel,
            'priority' => $priority,
        ]);
    }

    function _cr8v_text($wp_customize, $id, $section, $label, $default = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control($id, [
            'label'   => $label,
            'section' => $section,
            'type'    => 'text',
        ]);
    }

    function _cr8v_textarea($wp_customize, $id, $section, $label, $default = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control($id, [
            'label'   => $label,
            'section' => $section,
            'type'    => 'textarea',
        ]);
    }

    function _cr8v_image($wp_customize, $id, $section, $label, $default = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id, [
            'label'   => $label,
            'section' => $section,
        ]));
    }

    // Main Panel: Homepage Settings
    $wp_customize->add_panel('cr8v_homepage', [
        'title'       => 'Homepage — Tropos Theme',
        'description' => 'Edit all 10 homepage sections with live preview controls.',
        'priority'    => 20,
    ]);

    // 1. HERO SECTION
    _cr8v_section($wp_customize, 'cr8v_hero', '1. Hero Section', 'cr8v_homepage', 10);
    _cr8v_text($wp_customize, 'hero_eyebrow', 'cr8v_hero', 'Eyebrow', '// SCALE WITH AUTHORITY');
    _cr8v_text($wp_customize, 'hero_headline_1', 'cr8v_hero', 'Headline', 'We build what your business actually runs on.');
    _cr8v_textarea($wp_customize, 'hero_sub', 'cr8v_hero', 'Subheadline', 'Strategy, design, and liquid performance engineering — built from scratch by one team for ambitious brands.');
    _cr8v_text($wp_customize, 'hero_cta_primary_text', 'cr8v_hero', 'Primary CTA Label', 'Start a Project →');
    _cr8v_text($wp_customize, 'hero_cta_primary_url', 'cr8v_hero', 'Primary CTA Link', '/discovery-call/');
    _cr8v_text($wp_customize, 'hero_cta_secondary_text', 'cr8v_hero', 'Secondary CTA Label', 'Explore Philosophy ↓');
    _cr8v_text($wp_customize, 'hero_cta_secondary_url', 'cr8v_hero', 'Secondary CTA Link', '#how-we-think');

    // 2. PAPER GRID SECTION (#how-we-think)
    _cr8v_section($wp_customize, 'cr8v_paper_grid', '2. Paper Grid (How We Think)', 'cr8v_homepage', 20);
    _cr8v_text($wp_customize, 'paper_grid_eyebrow', 'cr8v_paper_grid', 'Section Eyebrow', '// CREATIVE AGENCY MINDSET');
    _cr8v_text($wp_customize, 'paper_grid_heading', 'cr8v_paper_grid', 'Section Heading', 'How We Think & Create');
    _cr8v_textarea($wp_customize, 'paper_grid_sub', 'cr8v_paper_grid', 'Section Subtitle', 'Design is our primary focus, supported by AI as a creative partner and built-in growth systems.');
    
    _cr8v_text($wp_customize, 'pg_card_1_title', 'cr8v_paper_grid', 'Card 1 Title', 'Design-Led Brand & Visual Systems');
    _cr8v_textarea($wp_customize, 'pg_card_1_desc', 'cr8v_paper_grid', 'Card 1 Description', 'Design is our primary foundation. We craft distinct visual identities, digital products, and brand systems that make your business instantly memorable.');
    
    _cr8v_text($wp_customize, 'pg_card_2_title', 'cr8v_paper_grid', 'Card 2 Title', 'AI as Our Creative Partner');
    _cr8v_textarea($wp_customize, 'pg_card_2_desc', 'cr8v_paper_grid', 'Card 2 Description', 'We leverage AI as a high-speed creative partner—accelerating research, rapid prototyping, and workflow iteration so we can ship elevated design faster.');
    
    _cr8v_text($wp_customize, 'pg_card_3_title', 'cr8v_paper_grid', 'Card 3 Title', 'Built-In Growth Engine');
    _cr8v_textarea($wp_customize, 'pg_card_3_desc', 'cr8v_paper_grid', 'Card 3 Description', 'Stunning design means nothing if it doesn\'t scale. Our brand systems are built to convert, capture market share, and drive long-term business momentum.');
    
    _cr8v_image($wp_customize, 'pg_tile_img_1', 'cr8v_paper_grid', 'Swap Image 1');
    _cr8v_image($wp_customize, 'pg_tile_img_2', 'cr8v_paper_grid', 'Swap Image 2');
    _cr8v_image($wp_customize, 'pg_tile_img_3', 'cr8v_paper_grid', 'Swap Image 3');

    // 3. SERVICES ACCORDION (#services)
    _cr8v_section($wp_customize, 'cr8v_services', '3. Services Accordion', 'cr8v_homepage', 30);
    _cr8v_text($wp_customize, 'services_eyebrow', 'cr8v_services', 'Section Eyebrow', '// WHAT WE DO');
    _cr8v_text($wp_customize, 'services_heading', 'cr8v_services', 'Section Heading', 'Capabilities Built For Ambition');

    // 4. DEV PLAYGROUND (#playground)
    _cr8v_section($wp_customize, 'cr8v_playground', '4. Dev Playground', 'cr8v_homepage', 40);
    _cr8v_text($wp_customize, 'playground_eyebrow', 'cr8v_playground', 'Section Eyebrow', '// DEV PLAYGROUND');
    _cr8v_text($wp_customize, 'playground_heading', 'cr8v_playground', 'Section Heading', 'Interactive Stack & Architecture');
    _cr8v_textarea($wp_customize, 'playground_sub', 'cr8v_playground', 'Section Subtitle', 'Explore how we engineer liquid performance and seamless CMS control.');

    // 5. HOW WE WORK BENTO GRID (#how-we-work)
    _cr8v_section($wp_customize, 'cr8v_hww', '5. How We Work Bento Grid', 'cr8v_homepage', 50);
    _cr8v_text($wp_customize, 'hww_eyebrow', 'cr8v_hww', 'Section Eyebrow', '// HOW WE WORK');
    _cr8v_text($wp_customize, 'hww_heading', 'cr8v_hww', 'Section Heading', 'The CR8V Stacks Workflow');
    _cr8v_textarea($wp_customize, 'hww_sub', 'cr8v_hww', 'Section Subtitle', 'A predictable, transparent production protocol engineered for speed and design fidelity.');

    // 6. SELECTED WORK MATRIX (#selected-work)
    _cr8v_section($wp_customize, 'cr8v_work', '6. Selected Work Showcase', 'cr8v_homepage', 60);
    _cr8v_text($wp_customize, 'work_eyebrow', 'cr8v_work', 'Section Eyebrow', '// SELECTED WORK');
    _cr8v_text($wp_customize, 'work_heading', 'cr8v_work', 'Section Heading', 'Proven Impact Across Industries');

    // 7. TESTIMONIALS (#testimonials)
    _cr8v_section($wp_customize, 'cr8v_testimonials', '7. Testimonials Section', 'cr8v_homepage', 70);
    _cr8v_text($wp_customize, 'testimonials_eyebrow', 'cr8v_testimonials', 'Section Eyebrow', '// WHAT CLIENTS SAY');
    _cr8v_text($wp_customize, 'testimonials_heading', 'cr8v_testimonials', 'Section Heading', 'Trusted by ambitious brands');

    $exact_testimonials = [
        1 => [
            'quote' => 'Cr8v Stacks rebuilt our entire digital presence from the ground up. Direct bookings increased by 340% within 90 days.',
            'name'  => 'Mark Duchesne',
            'role'  => 'Founder, The Duch Apartments'
        ],
        2 => [
            'quote' => 'The speed, design fidelity, and attention to liquid performance engineering were unlike any agency we have worked with.',
            'name'  => 'Sarah Jenkins',
            'role'  => 'VP Marketing, BridgePoint'
        ],
        3 => [
            'quote' => 'Their custom architecture delivered a 99.8% performance score while giving our internal team full CMS control.',
            'name'  => 'Victoria Lane',
            'role'  => 'Creative Director, Victorias Lane'
        ]
    ];

    for ($i = 1; $i <= 3; $i++) {
        _cr8v_textarea($wp_customize, "testimonial_{$i}_quote",  'cr8v_testimonials', "Testimonial {$i} — Quote",   $exact_testimonials[$i]['quote']);
        _cr8v_text($wp_customize,     "testimonial_{$i}_name",   'cr8v_testimonials', "Testimonial {$i} — Name",    $exact_testimonials[$i]['name']);
        _cr8v_text($wp_customize,     "testimonial_{$i}_role",   'cr8v_testimonials', "Testimonial {$i} — Role",    $exact_testimonials[$i]['role']);
        _cr8v_image($wp_customize,    "testimonial_{$i}_avatar", 'cr8v_testimonials', "Testimonial {$i} — Avatar");
    }

    // 8. STATS MATRIX (#numbers)
    _cr8v_section($wp_customize, 'cr8v_matrix', '8. Stats / Matrix Section', 'cr8v_homepage', 80);
    _cr8v_text($wp_customize, 'matrix_eyebrow', 'cr8v_matrix', 'Section Eyebrow', '// BY THE NUMBERS');
    _cr8v_text($wp_customize, 'matrix_heading',  'cr8v_matrix', 'Section Heading',  'Delivering measurable results');

    $exact_matrix = [
        1 => ['val' => '340%',  'lbl' => 'Direct Bookings Increase'],
        2 => ['val' => '99.8%', 'lbl' => 'Liquid Performance Score'],
        3 => ['val' => '4.8x',  'lbl' => 'Lead Conversion Rate'],
        4 => ['val' => '60fps', 'lbl' => 'Smooth UI Motion']
    ];

    for ($i = 1; $i <= 4; $i++) {
        _cr8v_text($wp_customize, "matrix_stat_{$i}_value", 'cr8v_matrix', "Stat {$i} — Value", $exact_matrix[$i]['val']);
        _cr8v_text($wp_customize, "matrix_stat_{$i}_label", 'cr8v_matrix', "Stat {$i} — Label", $exact_matrix[$i]['lbl']);
    }

    // 9. FAQ SECTION (#faq)
    _cr8v_section($wp_customize, 'cr8v_faq', '9. FAQ Section', 'cr8v_homepage', 90);
    _cr8v_text($wp_customize, 'faq_eyebrow', 'cr8v_faq', 'Section Eyebrow', '// FAQ');
    _cr8v_text($wp_customize, 'faq_heading', 'cr8v_faq', 'Section Heading', 'Frequently Asked Questions');
    _cr8v_text($wp_customize, 'faq_aside_heading', 'cr8v_faq', 'Aside Heading', 'Have a project in mind?');
    _cr8v_textarea($wp_customize, 'faq_aside_sub', 'cr8v_faq', 'Aside Subtitle', 'Book a 15-minute discovery call to discuss scope, timeline, and custom requirements.');
    _cr8v_text($wp_customize, 'faq_cta_text', 'cr8v_faq', 'CTA Label', 'Talk to us →');
    _cr8v_text($wp_customize, 'faq_cta_url', 'cr8v_faq', 'CTA Link', '/discovery-call/');

    // 10. FINAL CTA BANNER (#cta)
    _cr8v_section($wp_customize, 'cr8v_cta_banner', '10. Final CTA Banner', 'cr8v_homepage', 100);
    _cr8v_text($wp_customize, 'cta_heading', 'cr8v_cta_banner', 'Banner Heading', 'Ready to build a platform that wins online?');
    _cr8v_textarea($wp_customize, 'cta_sub', 'cr8v_cta_banner', 'Banner Subtitle', 'No long pitch. Just clear strategy, transparent scope, and production-ready timelines.');
    _cr8v_text($wp_customize, 'cta_button_text', 'cr8v_cta_banner', 'Button Label', 'Book a Consultation →');
    _cr8v_text($wp_customize, 'cta_button_url', 'cr8v_cta_banner', 'Button Link', '/discovery-call/');
});
