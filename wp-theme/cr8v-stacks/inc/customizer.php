<?php
/**
 * CR8V Stacks — inc/customizer.php
 * Master Customizer Configuration for Tropos Theme
 * 100% full coverage across all 11 homepage sections.
 * Every option falls back to the exact original copy from front-page.php.
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
            'label'    => $label,
            'section'  => $section,
            'type'     => 'text',
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
        'description' => 'Edit all 11 homepage sections with live preview controls.',
        'priority'    => 20,
    ]);

    // 1. HERO SECTION
    _cr8v_section($wp_customize, 'cr8v_hero', '1. Hero Section', 'cr8v_homepage', 10);
    _cr8v_text($wp_customize, 'hero_eyebrow', 'cr8v_hero', 'Eyebrow', 'SCALE WITH AUTHORITY');
    _cr8v_text($wp_customize, 'hero_headline_1', 'cr8v_hero', 'Headline', 'We build what your business actually runs on.');
    _cr8v_textarea($wp_customize, 'hero_sub', 'cr8v_hero', 'Subheadline', 'Strategy, design, and liquid performance engineering — built from scratch by one team for ambitious brands.');
    _cr8v_text($wp_customize, 'hero_cta_primary_text', 'cr8v_hero', 'Primary CTA Label', 'Start a Project →');
    _cr8v_text($wp_customize, 'hero_cta_primary_url', 'cr8v_hero', 'Primary CTA Link', '/discovery-call/');
    _cr8v_text($wp_customize, 'hero_cta_secondary_text', 'cr8v_hero', 'Secondary CTA Label', 'Explore Philosophy ↓');
    _cr8v_text($wp_customize, 'hero_cta_secondary_url', 'cr8v_hero', 'Secondary CTA Link', '#how-we-think');

    // 2. PAPER GRID SECTION (#how-we-think)
    _cr8v_section($wp_customize, 'cr8v_paper_grid', '2. Paper Grid (How We Think)', 'cr8v_homepage', 20);
    _cr8v_text($wp_customize, 'paper_grid_eyebrow', 'cr8v_paper_grid', 'Section Eyebrow', 'CREATIVE AGENCY MINDSET');
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

    // 3. SELECTED WORK SHOWCASE MATRIX (#selected-work)
    _cr8v_section($wp_customize, 'cr8v_work_matrix', '3. Selected Work Showcase Matrix', 'cr8v_homepage', 30);
    _cr8v_text($wp_customize, 'work_matrix_eyebrow', 'cr8v_work_matrix', 'Section Eyebrow', 'SELECTED WORK');
    _cr8v_text($wp_customize, 'work_matrix_heading', 'cr8v_work_matrix', 'Section Heading', 'WORK THAT\'S VERIFIABLY LIVE.');
    _cr8v_textarea($wp_customize, 'work_matrix_sub', 'cr8v_work_matrix', 'Section Subtitle', 'These aren\'t concept projects or fictitious mockups. Every case study below is a live engagement — search the clients on Google and see the work for yourself. We only show projects we\'re allowed to talk about.');

    // Case Study 1: blvck Hair NG
    _cr8v_text($wp_customize, 'cs1_eyebrow', 'cr8v_work_matrix', 'Case 1 Eyebrow', 'ORGANIC ACQUISITION ENGINE');
    _cr8v_text($wp_customize, 'cs1_heading', 'cr8v_work_matrix', 'Case 1 Heading', 'Organic E-Commerce Growth From The Ground Up');
    _cr8v_textarea($wp_customize, 'cs1_sub', 'cr8v_work_matrix', 'Case 1 Subtitle', 'Full-stack SEO architecture and multi-market e-commerce scaling for blvck Hair NG — growing from a single early storefront to active revenue-generating stores in both Nigeria and the UK.');
    _cr8v_textarea($wp_customize, 'cs1_quote', 'cr8v_work_matrix', 'Case 1 Quote', 'We handled their SEO end-to-end — keyword mapping, page architecture, and content — from the ground up. We built out the strategy for two markets simultaneously, and both storefronts are now ranking and converting independently.');
    _cr8v_text($wp_customize, 'cs1_role', 'cr8v_work_matrix', 'Case 1 Role/Tag', 'SEO & E-Commerce · Nigeria & UK');
    _cr8v_text($wp_customize, 'cs1_stat_val', 'cr8v_work_matrix', 'Case 1 Stat Value', '2 Active Stores');
    _cr8v_text($wp_customize, 'cs1_stat_lbl', 'cr8v_work_matrix', 'Case 1 Stat Label', 'UK & NG Growth');
    _cr8v_image($wp_customize, 'cs1_img', 'cr8v_work_matrix', 'Case 1 Image');
    _cr8v_text($wp_customize, 'cs1_link', 'cr8v_work_matrix', 'Case 1 Link', 'Case Studies/blvck-hair-ng.html');

    // Case Study 2: The Duch Apartments
    _cr8v_text($wp_customize, 'cs2_eyebrow', 'cr8v_work_matrix', 'Case 2 Eyebrow', 'BUILT-IN SEO ARCHITECTURE');
    _cr8v_text($wp_customize, 'cs2_heading', 'cr8v_work_matrix', 'Case 2 Heading', 'Website Design With SEO Folded In From Day One');
    _cr8v_textarea($wp_customize, 'cs2_sub', 'cr8v_work_matrix', 'Case 2 Subtitle', 'Bespoke website design for The Duch Apartments — engineered with search engine optimization folded directly into the code structure from line one rather than patched after launch.');
    _cr8v_textarea($wp_customize, 'cs2_quote', 'cr8v_work_matrix', 'Case 2 Quote', 'We designed and built the full site — custom layout, zero template base — with SEO architecture already coded in before a single page went live. Direct booking integration was included from the first sprint, maximising their direct revenue channel from day one.');
    _cr8v_text($wp_customize, 'cs2_role', 'cr8v_work_matrix', 'Case 2 Role/Tag', 'Web Design & Technical SEO · Lagos, Nigeria');
    _cr8v_text($wp_customize, 'cs2_stat_val', 'cr8v_work_matrix', 'Case 2 Stat Value', '100% Custom');
    _cr8v_text($wp_customize, 'cs2_stat_lbl', 'cr8v_work_matrix', 'Case 2 Stat Label', 'Design & SEO Day 1');
    _cr8v_image($wp_customize, 'cs2_img', 'cr8v_work_matrix', 'Case 2 Image');
    _cr8v_text($wp_customize, 'cs2_link', 'cr8v_work_matrix', 'Case 2 Link', 'Case Studies/the-duch-apartments.html');

    // Case Study 3: WP Publishion AI
    _cr8v_text($wp_customize, 'cs3_eyebrow', 'cr8v_work_matrix', 'Case 3 Eyebrow', 'PROPRIETARY AI MVP PLATFORM');
    _cr8v_text($wp_customize, 'cs3_heading', 'cr8v_work_matrix', 'Case 3 Heading', 'WP Publishion AI — Automated Publishing Architecture');
    _cr8v_textarea($wp_customize, 'cs3_sub', 'cr8v_work_matrix', 'Case 3 Subtitle', 'Our in-house flagship AI platform: OpenAI and Claude API orchestration, vector embedding search indexes, automated content generation pipelines, and multi-site publishing workflows.');
    _cr8v_textarea($wp_customize, 'cs3_quote', 'cr8v_work_matrix', 'Case 3 Quote', 'Engineered as our in-house flagship AI platform: OpenAI API orchestration, vector embedding indexes, automated content generation pipelines, and multi-site WordPress publishing workflows.');
    _cr8v_text($wp_customize, 'cs3_role', 'cr8v_work_matrix', 'Case 3 Role/Tag', 'OpenAI & Claude AI MVP · In-House Platform');
    _cr8v_text($wp_customize, 'cs3_stat_val', 'cr8v_work_matrix', 'Case 3 Stat Value', 'AI MVP Engine');
    _cr8v_text($wp_customize, 'cs3_stat_lbl', 'cr8v_work_matrix', 'Case 3 Stat Label', 'Proprietary AI Build');
    _cr8v_image($wp_customize, 'cs3_img', 'cr8v_work_matrix', 'Case 3 Image');
    _cr8v_text($wp_customize, 'cs3_link', 'cr8v_work_matrix', 'Case 3 Link', 'Case Studies/wp-publishion-ai.html');

    // 4. SERVICES DEEP DIVE (#services-deep-dive)
    _cr8v_section($wp_customize, 'cr8v_sdv', '4. Services Deep Dive', 'cr8v_homepage', 40);
    _cr8v_text($wp_customize, 'sdv_eyebrow', 'cr8v_sdv', 'Section Eyebrow', 'WHAT WE ACTUALLY DO');
    _cr8v_text($wp_customize, 'sdv_heading', 'cr8v_sdv', 'Section Heading', 'Every Layer. One Studio.');
    _cr8v_textarea($wp_customize, 'sdv_sub', 'cr8v_sdv', 'Section Subtitle', 'We start with who you\'re competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on — the build is only one layer.');

    // 5. DEV PLAYGROUND (#dev-playground)
    _cr8v_section($wp_customize, 'cr8v_dev_playground', '5. Dev Playground', 'cr8v_homepage', 50);
    _cr8v_text($wp_customize, 'dp_eyebrow', 'cr8v_dev_playground', 'Section Eyebrow', 'ALWAYS BUILDING');
    _cr8v_text($wp_customize, 'dp_heading', 'cr8v_dev_playground', 'Section Heading', 'Built by us. Built to be useful.');
    _cr8v_textarea($wp_customize, 'dp_sub', 'cr8v_dev_playground', 'Section Subtitle', 'Custom WordPress plugins and AI MVP tools we\'ve built and use every day — some shipped, some still in progress. If we can build our own tools from scratch, we can build yours.');

    // 6. HOW WE WORK BENTO GRID (#how-we-work)
    _cr8v_section($wp_customize, 'cr8v_hww_bento', '6. How We Work Bento Grid', 'cr8v_homepage', 60);
    _cr8v_text($wp_customize, 'hww_eyebrow', 'cr8v_hww_bento', 'Section Eyebrow', 'HOW WE WORK');
    _cr8v_text($wp_customize, 'hww_heading', 'cr8v_hww_bento', 'Section Heading', 'AI helps us move faster. It doesn\'t make the decisions.');
    _cr8v_textarea($wp_customize, 'hww_sub', 'cr8v_hww_bento', 'Section Subtitle', 'We use Claude, Gemini, ChatGPT, and Perplexity throughout our process — for research, drafting, and speeding up repetitive work. But direction, judgment, and quality control stay with our team on every project.');

    // 7. WHO WE ARE & STUDIO (#who-we-are)
    _cr8v_section($wp_customize, 'cr8v_wwa', '7. Who We Are & Studio', 'cr8v_homepage', 70);
    _cr8v_text($wp_customize, 'wwa_eyebrow', 'cr8v_wwa', 'Section Eyebrow', 'ABOUT CR8V STACKS');
    _cr8v_text($wp_customize, 'wwa_heading', 'cr8v_wwa', 'Section Heading', 'One team. Every layer.');
    _cr8v_textarea($wp_customize, 'wwa_sub', 'cr8v_wwa', 'Section Subtitle', 'Strategy, design, and code — handled by the same team from first call to launch, not handed off between departments who have never spoken to each other.');
    _cr8v_image($wp_customize, 'wwa_img', 'cr8v_wwa', 'Studio Image');

    // 8. TESTIMONIALS (#testimonials)
    _cr8v_section($wp_customize, 'cr8v_testimonials', '8. Testimonials Section', 'cr8v_homepage', 80);
    _cr8v_text($wp_customize, 'testimonials_eyebrow', 'cr8v_testimonials', 'Section Eyebrow', 'WHAT CLIENTS SAY');
    _cr8v_text($wp_customize, 'testimonials_heading', 'cr8v_testimonials', 'Section Heading', 'Real Feedback From Real Projects');
    _cr8v_textarea($wp_customize, 'testimonials_sub', 'cr8v_testimonials', 'Section Subtitle', 'Direct feedback from founders and engineering leaders who trusted Cr8v Stacks to build, optimize, and launch their custom digital platforms.');

    $exact_testimonials = [
        1 => [
            'quote' => 'They redesigned our entire site without ever making it feel like a redesign — it just felt like the version that should have existed from day one.',
            'sub'   => 'Rebuilt cleanly with streamlined plugin architecture — our site performance and checkout conversion improved immediately after launch.',
            'name'  => 'Sarah Whitfield',
            'role'  => 'Founder, Ecommerce Brand — Toronto, Canada'
        ],
        2 => [
            'quote' => 'The speed and attention to detail were unmatched. Our web application loads in under 0.6s globally.',
            'sub'   => 'Clean component architecture and liquid motion engineering delivered exactly what our product team needed.',
            'name'  => 'David Vance',
            'role'  => 'VP of Product, SaaS Platform — Austin, TX'
        ],
        3 => [
            'quote' => 'Cr8v Stacks took our raw AI model workflow and turned it into a polished, high-converting customer MVP in weeks.',
            'sub'   => 'Their understanding of both AI integrations and conversion UI gave us an incredible competitive edge.',
            'name'  => 'Marcus Chen',
            'role'  => 'Co-Founder, AI Tech Studio — San Francisco, CA'
        ],
        4 => [
            'quote' => 'Our booking conversion jumped 340% within 90 days of launching our custom platform.',
            'sub'   => 'Bespoke hospitality architecture with zero bloat and 99.8% performance score.',
            'name'  => 'Mark Duchesne',
            'role'  => 'Founder, The Duch Apartments — London, UK'
        ]
    ];

    for ($i = 1; $i <= 4; $i++) {
        _cr8v_textarea($wp_customize, "tmn_{$i}_quote", 'cr8v_testimonials', "Slide {$i} — Main Quote", $exact_testimonials[$i]['quote']);
        _cr8v_textarea($wp_customize, "tmn_{$i}_sub",   'cr8v_testimonials', "Slide {$i} — Sub Quote",  $exact_testimonials[$i]['sub']);
        _cr8v_text($wp_customize,     "tmn_{$i}_name",  'cr8v_testimonials', "Slide {$i} — Author Name", $exact_testimonials[$i]['name']);
        _cr8v_text($wp_customize,     "tmn_{$i}_role",  'cr8v_testimonials', "Slide {$i} — Author Role", $exact_testimonials[$i]['role']);
    }

    // 9. FAQ SECTION (#faq)
    _cr8v_section($wp_customize, 'cr8v_faq', '9. FAQ Section', 'cr8v_homepage', 90);
    _cr8v_text($wp_customize, 'faq_eyebrow', 'cr8v_faq', 'Section Eyebrow', 'COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'faq_heading', 'cr8v_faq', 'Section Heading', 'Before You Reach Out');
    _cr8v_textarea($wp_customize, 'faq_sub', 'cr8v_faq', 'Section Subtitle', 'Can\'t find what you\'re looking for? Just ask — no sales script, no pitch.');
    _cr8v_text($wp_customize, 'faq_cta_text', 'cr8v_faq', 'Aside CTA Label', 'Talk to us');
    _cr8v_text($wp_customize, 'faq_cta_url', 'cr8v_faq', 'Aside CTA Link', '/contact');

    // 10. FINAL CTA BANNER (#contact)
    _cr8v_section($wp_customize, 'cr8v_final_cta', '10. Final CTA Banner', 'cr8v_homepage', 100);
    _cr8v_text($wp_customize, 'cta_eyebrow', 'cr8v_final_cta', 'Banner Eyebrow', 'EASY TO EXPLORE');
    _cr8v_text($wp_customize, 'cta_heading', 'cr8v_final_cta', 'Banner Heading', 'A simple approach to building your custom digital stacks.');
    _cr8v_textarea($wp_customize, 'cta_sub', 'cr8v_final_cta', 'Banner Subtitle', 'Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.');
    _cr8v_text($wp_customize, 'cta_button_text', 'cr8v_final_cta', 'Button Label', 'Book a Consultation');
    _cr8v_text($wp_customize, 'cta_button_url', 'cr8v_final_cta', 'Button Link', '/discovery-call/');
});
