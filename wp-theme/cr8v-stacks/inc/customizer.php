<?php
/**
 * CR8V Stacks — inc/customizer.php
 * Master Customizer Configuration for Tropos Theme
 * 100% Exhaustive coverage across ALL 11 homepage sections including every card, item, deliverable list, stat, image, video, CDN logo, badge, and CTA button.
 */

defined('ABSPATH') || exit;

add_action('customize_register', function ($wp_customize) {

    // Helper functions with selective refresh built-in
    function _cr8v_section($wp_customize, $id, $title, $panel = 'cr8v_homepage', $priority = 10) {
        $wp_customize->add_section($id, [
            'title'    => $title,
            'panel'    => $panel,
            'priority' => $priority,
        ]);
    }

    function _cr8v_text($wp_customize, $id, $section, $label, $default = '', $selector = '') {
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
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return esc_html(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }

    function _cr8v_textarea($wp_customize, $id, $section, $label, $default = '', $selector = '') {
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
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return wp_kses_post(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }

    
    function _cr8v_img($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        _cr8v_image($wp_customize, $id, $section, $label, $default, $selector);
    }

    function _cr8v_image($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id, [
            'label'   => $label,
            'section' => $section,
        ]));
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return esc_url(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }

    // Main Panel: Homepage Settings
    $wp_customize->add_panel('cr8v_homepage', [
        'title'       => 'Homepage — Tropos Theme',
        'description' => 'Edit all 11 homepage sections with live preview controls and shortcut pencil icons.',
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
    _cr8v_text($wp_customize, 'cs1_cta_text', 'cr8v_work_matrix', 'Case 1 CTA Button Text', 'Explore Case Study');
    _cr8v_text($wp_customize, 'cs1_stat_val', 'cr8v_work_matrix', 'Case 1 Stat Value', '2 Active Stores');
    _cr8v_text($wp_customize, 'cs1_stat_lbl', 'cr8v_work_matrix', 'Case 1 Stat Label', 'UK & NG Growth');
    _cr8v_image($wp_customize, 'cs1_img', 'cr8v_work_matrix', 'Case 1 Image');
    _cr8v_text($wp_customize, 'cs1_link', 'cr8v_work_matrix', 'Case 1 Link', '/case-studies/blvck-hair-ng/');

    // Case Study 2: The Duch Apartments
    _cr8v_text($wp_customize, 'cs2_eyebrow', 'cr8v_work_matrix', 'Case 2 Eyebrow', 'BUILT-IN SEO ARCHITECTURE');
    _cr8v_text($wp_customize, 'cs2_heading', 'cr8v_work_matrix', 'Case 2 Heading', 'Website Design With SEO Folded In From Day One');
    _cr8v_textarea($wp_customize, 'cs2_sub', 'cr8v_work_matrix', 'Case 2 Subtitle', 'Bespoke website design for The Duch Apartments — engineered with search engine optimization folded directly into the code structure from line one rather than patched after launch.');
    _cr8v_textarea($wp_customize, 'cs2_quote', 'cr8v_work_matrix', 'Case 2 Quote', 'We designed and built the full site — custom layout, zero template base — with SEO architecture already coded in before a single page went live. Direct booking integration was included from the first sprint, maximising their direct revenue channel from day one.');
    _cr8v_text($wp_customize, 'cs2_role', 'cr8v_work_matrix', 'Case 2 Role/Tag', 'Web Design & Technical SEO · Lagos, Nigeria');
    _cr8v_text($wp_customize, 'cs2_cta_text', 'cr8v_work_matrix', 'Case 2 CTA Button Text', 'Explore Case Study');
    _cr8v_text($wp_customize, 'cs2_stat_val', 'cr8v_work_matrix', 'Case 2 Stat Value', '100% Custom');
    _cr8v_text($wp_customize, 'cs2_stat_lbl', 'cr8v_work_matrix', 'Case 2 Stat Label', 'Design & SEO Day 1');
    _cr8v_image($wp_customize, 'cs2_img', 'cr8v_work_matrix', 'Case 2 Image');
    _cr8v_text($wp_customize, 'cs2_link', 'cr8v_work_matrix', 'Case 2 Link', '/case-studies/the-duch-apartments/');

    // Case Study 3: WP Publishion AI
    _cr8v_text($wp_customize, 'cs3_eyebrow', 'cr8v_work_matrix', 'Case 3 Eyebrow', 'PROPRIETARY AI MVP PLATFORM');
    _cr8v_text($wp_customize, 'cs3_heading', 'cr8v_work_matrix', 'Case 3 Heading', 'WP Publishion AI — Automated Publishing Architecture');
    _cr8v_textarea($wp_customize, 'cs3_sub', 'cr8v_work_matrix', 'Case 3 Subtitle', 'Our in-house flagship AI platform: OpenAI and Claude API orchestration, vector embedding search indexes, automated content generation pipelines, and multi-site publishing workflows.');
    _cr8v_textarea($wp_customize, 'cs3_quote', 'cr8v_work_matrix', 'Case 3 Quote', 'Engineered as our in-house flagship AI platform: OpenAI API orchestration, vector embedding indexes, automated content generation pipelines, and multi-site WordPress publishing workflows.');
    _cr8v_text($wp_customize, 'cs3_role', 'cr8v_work_matrix', 'Case 3 Role/Tag', 'OpenAI & Claude AI MVP · In-House Platform');
    _cr8v_text($wp_customize, 'cs3_cta_text', 'cr8v_work_matrix', 'Case 3 CTA Button Text', 'Explore Case Study');
    _cr8v_text($wp_customize, 'cs3_stat_val', 'cr8v_work_matrix', 'Case 3 Stat Value', 'AI MVP Engine');
    _cr8v_text($wp_customize, 'cs3_stat_lbl', 'cr8v_work_matrix', 'Case 3 Stat Label', 'Proprietary AI Build');
    _cr8v_image($wp_customize, 'cs3_img', 'cr8v_work_matrix', 'Case 3 Image');
    _cr8v_text($wp_customize, 'cs3_link', 'cr8v_work_matrix', 'Case 3 Link', '/case-studies/wp-publishion-ai/');

    // 4. SERVICES DEEP DIVE (#services-deep-dive)
    _cr8v_section($wp_customize, 'cr8v_sdv', '4. Services Deep Dive', 'cr8v_homepage', 40);
    _cr8v_text($wp_customize, 'sdv_eyebrow', 'cr8v_sdv', 'Section Eyebrow', 'WHAT WE ACTUALLY DO');
    _cr8v_text($wp_customize, 'sdv_heading', 'cr8v_sdv', 'Section Heading', 'Every Layer. One Studio.');
    _cr8v_textarea($wp_customize, 'sdv_sub', 'cr8v_sdv', 'Section Subtitle', 'We start with who you&#39;re competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on — the build is only one layer.');

    $exact_services = [
        1 => ['title' => 'Website Design', 'tag' => 'Build Layer', 'desc' => 'High-converting digital experiences engineered for speed, search authority, and seamless user conversions. We design across every platform your business runs on — once the Figma design is approved, it gets handed to whichever build stack fits: WordPress, Shopify, WooCommerce, or fully custom code.', 'cta_text' => 'Explore Web Design', 'cta_url' => '/services/web-design/', 'delivs' => ['Custom Figma UI Architecture', 'WordPress Builds & Elementor Systems', 'Shopify Liquid Storefronts', 'WooCommerce Custom Stores', 'Built-in SEO from Line One']],
        2 => ['title' => 'Custom Development', 'tag' => 'Build Layer', 'desc' => 'Tailored software architectures built from a blank file, engineered around your exact workflow. No templates, no SaaS dependencies, no monthly tool fees eating into your margin. When nothing off-the-shelf fits what you\'re building — this is where it starts.', 'cta_text' => 'Explore Custom Dev', 'cta_url' => '/services/custom-dev/', 'delivs' => ['Bespoke Web Applications', 'Custom APIs & Third-Party Integrations', 'Internal Business Tools & Dashboards', '100% Client-Owned Codebase', '0 Third-Party SaaS Dependencies']],
        3 => ['title' => 'AI MVP Products', 'tag' => 'Build Layer', 'desc' => 'Production-ready AI applications built to validate core business ideas with real users — not slide decks. We build AI-integrated products fast enough to get genuine market signal before you over-invest. When the idea validates, it hands directly into a full Custom Dev engagement.', 'cta_text' => 'Explore AI MVP', 'cta_url' => '/services/ai-mvp/', 'delivs' => ['LLM-Integrated Web Applications', 'AI-Powered Internal Tools', 'Rapid Prototyping & Market Validation', 'Custom Model Pipelines', 'Fully Functional — Not a Demo']],
        4 => ['title' => 'Brand Strategy', 'tag' => 'Growth Layer', 'desc' => 'Competitor analysis, pricing scoping, and messaging frameworks that give the rest of the build direction before a single pixel is designed. This is also the foundation every ad campaign and piece of content we run for you is built on — get this right first, and everything downstream gets easier and cheaper.', 'cta_text' => 'Explore Brand Strategy', 'cta_url' => '/services/brand-strategy/', 'delivs' => ['Market Positioning & Competitor Mapping', 'Messaging Frameworks & Brand Voice', 'Pricing Scoping & Value Proposition', 'Customer Profile Architecture', 'Brand Identity Design (optional next step)']],
        5 => ['title' => 'SEO & Content', 'tag' => 'Growth Layer', 'desc' => 'Technical search work and content architecture that gets the site found. We fold SEO into every build from line one — but for sites that already exist, we audit, fix, and build the content layer that compounds over time. Paid acquisition works better once your organic foundation is solid.', 'cta_text' => 'Explore SEO & Content', 'cta_url' => '/services/seo-content/', 'delivs' => ['Semantic Keyword Mapping', 'Entity SEO Optimization', 'Technical SEO Audits & Core Web Vitals', 'Content Architecture & Cluster Strategy', 'E-Commerce Category & Product SEO']],
        6 => ['title' => 'Digital Marketing', 'tag' => 'Growth Layer', 'desc' => 'Multi-channel campaigns and lead acquisition retainers built on the positioning your Brand Strategy work defined. If you haven\'t done positioning work with us yet, we fold a lightweight version into campaign setup — but a full Brand Strategy engagement first means faster, cheaper testing.', 'cta_text' => 'Explore Digital Marketing', 'cta_url' => '/services/digital-marketing/', 'delivs' => ['Paid Social & Search Campaign Management', 'Email Autoresponders & Nurture Sequences', 'Conversion Rate Audits', 'Target Audience & Funnel Mapping', 'Monthly Retainer & Performance Reporting']]
    ];

    for ($i = 1; $i <= 6; $i++) {
        _cr8v_text($wp_customize, "sdv_{$i}_title", 'cr8v_sdv', "Service {$i} Title", $exact_services[$i]['title']);
        _cr8v_text($wp_customize, "sdv_{$i}_tag",   'cr8v_sdv', "Service {$i} Layer Tag", $exact_services[$i]['tag']);
        _cr8v_textarea($wp_customize, "sdv_{$i}_desc", 'cr8v_sdv', "Service {$i} Description", $exact_services[$i]['desc']);
        _cr8v_text($wp_customize, "sdv_{$i}_cta_text", 'cr8v_sdv', "Service {$i} CTA Text", $exact_services[$i]['cta_text']);
        _cr8v_text($wp_customize, "sdv_{$i}_cta_url", 'cr8v_sdv', "Service {$i} CTA Link", $exact_services[$i]['cta_url']);
        _cr8v_image($wp_customize, "sdv_{$i}_img", 'cr8v_sdv', "Service {$i} Image");

        for ($d = 1; $d <= count($exact_services[$i]['delivs']); $d++) {
            _cr8v_text($wp_customize, "sdv_{$i}_deliv_{$d}", 'cr8v_sdv', "Service {$i} Deliverable {$d}", $exact_services[$i]['delivs'][$d-1]);
        }
    }

    // 5. DEV PLAYGROUND (#dev-playground)
    _cr8v_section($wp_customize, 'cr8v_dev_playground', '5. Dev Playground', 'cr8v_homepage', 50);
    _cr8v_text($wp_customize, 'dp_eyebrow', 'cr8v_dev_playground', 'Section Eyebrow', 'ALWAYS BUILDING');
    _cr8v_text($wp_customize, 'dp_heading', 'cr8v_dev_playground', 'Section Heading', 'Built by us. Built to be useful.');
    _cr8v_textarea($wp_customize, 'dp_sub', 'cr8v_dev_playground', 'Section Subtitle', 'Custom WordPress plugins and AI MVP tools we\'ve built and use every day — some shipped, some still in progress. If we can build our own tools from scratch, we can build yours.');
    _cr8v_text($wp_customize, 'dp_mascot_video', 'cr8v_dev_playground', 'Mascot Video WebM/MP4', 'cartoon_fox_winks.webm');

    $exact_tools = [
        1 => ['name' => 'Cost Calculator', 'desc' => 'Answer a few questions and get a realistic price range — before you ever book a call', 'url' => 'https://cr8vstacks.com/toolkits/website-cost-calculator/'],
        2 => ['name' => 'The Stack Directory', 'desc' => 'Curated index of the best business tools across AI, design, dev, and ecommerce — all searchable from one place', 'url' => '/tools/stack-directory'],
        3 => ['name' => 'Nativus Dashboard Pro', 'desc' => 'A custom WordPress admin dashboard plugin built for cleaner client handovers', 'url' => '/dev-playground/'],
        4 => ['name' => 'WP Publishion AI', 'desc' => 'AI-assisted WordPress publishing — drafts, meta, and scheduling from one panel', 'url' => '/dev-playground/'],
        5 => ['name' => 'LumiCode Syntax Highlighter', 'desc' => 'Lightweight code display plugin for WordPress — clean, themeable, zero dependencies', 'url' => '/dev-playground/']
    ];

    for ($i = 1; $i <= 5; $i++) {
        _cr8v_text($wp_customize, "dp_t{$i}_name", 'cr8v_dev_playground', "Tool {$i} Name", $exact_tools[$i]['name']);
        _cr8v_textarea($wp_customize, "dp_t{$i}_desc", 'cr8v_dev_playground', "Tool {$i} Description", $exact_tools[$i]['desc']);
        _cr8v_text($wp_customize, "dp_t{$i}_url", 'cr8v_dev_playground', "Tool {$i} Link", $exact_tools[$i]['url']);
    }

    _cr8v_text($wp_customize, 'dp_right_eyebrow', 'cr8v_dev_playground', 'Right Panel Eyebrow', 'NO GIMMICKS');
    _cr8v_text($wp_customize, 'dp_stat_1_val', 'cr8v_dev_playground', 'Stat 1 Value', '5');
    _cr8v_text($wp_customize, 'dp_stat_1_lbl', 'cr8v_dev_playground', 'Stat 1 Label', 'Tools Available');
    _cr8v_text($wp_customize, 'dp_stat_2_val', 'cr8v_dev_playground', 'Stat 2 Value', '100%');
    _cr8v_text($wp_customize, 'dp_stat_2_lbl', 'cr8v_dev_playground', 'Stat 2 Label', 'Instant Access');
    _cr8v_text($wp_customize, 'dp_stat_3_val', 'cr8v_dev_playground', 'Stat 3 Value', '60s');
    _cr8v_text($wp_customize, 'dp_stat_3_lbl', 'cr8v_dev_playground', 'Stat 3 Label', 'Avg. Time to Result');
    _cr8v_text($wp_customize, 'dp_stat_4_val', 'cr8v_dev_playground', 'Stat 4 Value', '∞');
    _cr8v_text($wp_customize, 'dp_stat_4_lbl', 'cr8v_dev_playground', 'Stat 4 Label', 'No Usage Limit');

    _cr8v_textarea($wp_customize, 'dp_right_desc', 'cr8v_dev_playground', 'Right Panel Description', 'These aren\'t lead magnets in disguise. Every tool runs in your browser. Take the output. No email capture, no follow-up sequence. We add tools regularly whenever something we built internally proves useful enough to open up.');
    _cr8v_text($wp_customize, 'dp_btn_primary_text', 'cr8v_dev_playground', 'Primary Button Label', 'Visit the Dev Playground');
    _cr8v_text($wp_customize, 'dp_btn_primary_url', 'cr8v_dev_playground', 'Primary Button Link', '/dev-playground/');
    _cr8v_text($wp_customize, 'dp_btn_ghost_text', 'cr8v_dev_playground', 'Secondary Button Label', 'Start a Project instead');
    _cr8v_text($wp_customize, 'dp_btn_ghost_url', 'cr8v_dev_playground', 'Secondary Button Link', '/discovery-call/');

    // 6. HOW WE WORK BENTO GRID (#how-we-work)
    _cr8v_section($wp_customize, 'cr8v_hww_bento', '6. How We Work Bento Grid', 'cr8v_homepage', 60);
    _cr8v_text($wp_customize, 'hww_eyebrow', 'cr8v_hww_bento', 'Section Eyebrow', 'HOW WE WORK');
    _cr8v_text($wp_customize, 'hww_heading', 'cr8v_hww_bento', 'Section Heading', 'AI helps us move faster. It doesn\'t make the decisions.');
    _cr8v_textarea($wp_customize, 'hww_sub', 'cr8v_hww_bento', 'Section Subtitle', 'We use Claude, Gemini, ChatGPT, and Perplexity throughout our process — for research, drafting, and speeding up repetitive work. But direction, judgment, and quality control stay with our team on every project. AI is a tool we use well, not a replacement for the expertise behind the work.');
    
    _cr8v_text($wp_customize, 'hww_c1_label', 'cr8v_hww_bento', 'Card 1 Label', 'Sprint Model');
    _cr8v_text($wp_customize, 'hww_c1_title', 'cr8v_hww_bento', 'Card 1 Title', 'Clear Steps. Zero Surprises.');
    _cr8v_text($wp_customize, 'hww_c1_s1_lbl', 'cr8v_hww_bento', 'Card 1 Step 1 Label', 'Discovery & Brief');
    _cr8v_text($wp_customize, 'hww_c1_s2_lbl', 'cr8v_hww_bento', 'Card 1 Step 2 Label', 'Architecture & Design');
    _cr8v_text($wp_customize, 'hww_c1_s3_lbl', 'cr8v_hww_bento', 'Card 1 Step 3 Label', 'Build & Iterate');
    _cr8v_text($wp_customize, 'hww_c1_s4_lbl', 'cr8v_hww_bento', 'Card 1 Step 4 Label', 'Launch & Handover');

    _cr8v_image($wp_customize, 'hww_c2_img', 'cr8v_hww_bento', 'Card 2 Image');

    _cr8v_text($wp_customize, 'hww_c3_label', 'cr8v_hww_bento', 'Card 3 Label', 'First Build Sprint');
    _cr8v_text($wp_customize, 'hww_c3_stat', 'cr8v_hww_bento', 'Card 3 Stat Number', '14 days');
    _cr8v_textarea($wp_customize, 'hww_c3_sub', 'cr8v_hww_bento', 'Card 3 Subtitle', 'From an approved brief to a working prototype your team can review, test, and give real feedback on.');
    
    _cr8v_text($wp_customize, 'hww_c4_label', 'cr8v_hww_bento', 'Card 4 Label', 'What Shapes Every Project');
    _cr8v_text($wp_customize, 'hww_c4_title', 'cr8v_hww_bento', 'Card 4 Title', 'No Black Boxes. Just Craft.');
    
    _cr8v_text($wp_customize, 'hww_c5_label', 'cr8v_hww_bento', 'Card 5 Label', 'Ownership');
    _cr8v_text($wp_customize, 'hww_c5_stat', 'cr8v_hww_bento', 'Card 5 Stat Number', '100%');
    _cr8v_textarea($wp_customize, 'hww_c5_sub', 'cr8v_hww_bento', 'Card 5 Subtitle', 'You own the code, domain, and data. No SaaS lock-in, no dependency on us to keep the lights on.');

    _cr8v_text($wp_customize, 'hww_c6_label', 'cr8v_hww_bento', 'Card 6 Label', 'What Ships With Every Project');
    _cr8v_text($wp_customize, 'hww_c6_i1_step', 'cr8v_hww_bento', 'Card 6 Item 1 Step', 'Brief');
    _cr8v_text($wp_customize, 'hww_c6_i1_lbl',  'cr8v_hww_bento', 'Card 6 Item 1 Label', 'Scoped & Signed');
    _cr8v_textarea($wp_customize, 'hww_c6_i1_desc', 'cr8v_hww_bento', 'Card 6 Item 1 Description', 'Fixed scope, fixed price. No surprise invoices mid-build or scope creep that costs you extra.');

    _cr8v_text($wp_customize, 'hww_c6_i2_step', 'cr8v_hww_bento', 'Card 6 Item 2 Step', 'Build');
    _cr8v_text($wp_customize, 'hww_c6_i2_lbl',  'cr8v_hww_bento', 'Card 6 Item 2 Label', 'Fully Documented');
    _cr8v_textarea($wp_customize, 'hww_c6_i2_desc', 'cr8v_hww_bento', 'Card 6 Item 2 Description', 'Technical handover docs included. Your team can pick it up from day one without needing us.');

    _cr8v_text($wp_customize, 'hww_c6_i3_step', 'cr8v_hww_bento', 'Card 6 Item 3 Step', 'Post-Launch');
    _cr8v_text($wp_customize, 'hww_c6_i3_lbl',  'cr8v_hww_bento', 'Card 6 Item 3 Label', '30-Day Support');
    _cr8v_textarea($wp_customize, 'hww_c6_i3_desc', 'cr8v_hww_bento', 'Card 6 Item 3 Description', 'Every project includes a 30-day post-launch support window. No extra charge, no conditions.');

    // 7. WHO WE ARE & STUDIO (#who-we-are)
    _cr8v_section($wp_customize, 'cr8v_wwa', '7. Who We Are & Studio', 'cr8v_homepage', 70);
    _cr8v_text($wp_customize, 'wwa_eyebrow', 'cr8v_wwa', 'Section Eyebrow', 'ABOUT CR8V STACKS');
    _cr8v_text($wp_customize, 'wwa_heading', 'cr8v_wwa', 'Section Heading', 'One team. Every layer.');
    _cr8v_textarea($wp_customize, 'wwa_sub', 'cr8v_wwa', 'Section Subtitle', 'Strategy, design, and code — handled by the same team from first call to launch, not handed off between departments who have never spoken to each other. Whether we are validating an AI product MVP, rebuilding a property platform from scratch, or running SEO for a growing brand.');
    _cr8v_text($wp_customize, 'wwa_top_tag', 'cr8v_wwa', 'Studio Top Tag', 'STUDIO & CREATIVE ENGINE');
    _cr8v_image($wp_customize, 'wwa_img', 'cr8v_wwa', 'Studio Image');
    _cr8v_text($wp_customize, 'wwa_caption', 'cr8v_wwa', 'Studio Overlay Caption', 'Built for execution, not pitch decks.');
    _cr8v_text($wp_customize, 'wwa_badge', 'cr8v_wwa', 'Studio Overlay Badge', 'IN-HOUSE STUDIO');

    _cr8v_text($wp_customize, 'wwa_f1_title', 'cr8v_wwa', 'Feature 1 Title', 'Strategy First');
    _cr8v_textarea($wp_customize, 'wwa_f1_body', 'cr8v_wwa', 'Feature 1 Description', 'Every project begins with understanding your business goals, not just your brief. We scope transparently, then we build.');
    
    _cr8v_text($wp_customize, 'wwa_f2_title', 'cr8v_wwa', 'Feature 2 Title', 'Design & Build, Together');
    _cr8v_textarea($wp_customize, 'wwa_f2_body', 'cr8v_wwa', 'Feature 2 Description', 'Design and development do not hand off — they run together. Less revision back-and-forth. More precision in code.');
    
    _cr8v_text($wp_customize, 'wwa_f3_title', 'cr8v_wwa', 'Feature 3 Title', 'You Own Everything');
    _cr8v_textarea($wp_customize, 'wwa_f3_body', 'cr8v_wwa', 'Feature 3 Description', 'Clean code, documented architectures, and 100% ownership from launch day.');

    _cr8v_text($wp_customize, 'wwa_s1_num', 'cr8v_wwa', 'Bottom Stat 1 Number', '100%');
    _cr8v_text($wp_customize, 'wwa_s1_lbl', 'cr8v_wwa', 'Bottom Stat 1 Label', 'Client Ownership');
    _cr8v_text($wp_customize, 'wwa_s2_num', 'cr8v_wwa', 'Bottom Stat 2 Number', '0');
    _cr8v_text($wp_customize, 'wwa_s2_lbl', 'cr8v_wwa', 'Bottom Stat 2 Label', 'SaaS Lock-in');
    _cr8v_text($wp_customize, 'wwa_s3_num', 'cr8v_wwa', 'Bottom Stat 3 Number', '24/7');
    _cr8v_text($wp_customize, 'wwa_s3_lbl', 'cr8v_wwa', 'Bottom Stat 3 Label', 'Monitoring & SLA Support');

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
            'role'  => 'Founder, Ecommerce Brand — Toronto, Canada',
            'logo'  => 'https://cdn.simpleicons.org/shopify/95BF47'
        ],
        2 => [
            'quote' => 'The speed and attention to detail were unmatched. Our web application loads in under 0.6s globally.',
            'sub'   => 'Clean component architecture and liquid motion engineering delivered exactly what our product team needed.',
            'name'  => 'David Vance',
            'role'  => 'VP of Product, SaaS Platform — Austin, TX',
            'logo'  => 'https://cdn.simpleicons.org/nextdotjs/000000'
        ],
        3 => [
            'quote' => 'Cr8v Stacks took our raw AI model workflow and turned it into a polished, high-converting customer MVP in weeks.',
            'sub'   => 'Their understanding of both AI integrations and conversion UI gave us an incredible competitive edge.',
            'name'  => 'Marcus Chen',
            'role'  => 'Co-Founder, AI Tech Studio — San Francisco, CA',
            'logo'  => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg'
        ],
        4 => [
            'quote' => 'Our booking conversion jumped 340% within 90 days of launching our custom platform.',
            'sub'   => 'Bespoke hospitality architecture with zero bloat and 99.8% performance score.',
            'name'  => 'Mark Duchesne',
            'role'  => 'Founder, The Duch Apartments — London, UK',
            'logo'  => 'https://cdn.simpleicons.org/wordpress/21759B'
        ]
    ];

    for ($i = 1; $i <= 4; $i++) {
        _cr8v_textarea($wp_customize, "tmn_{$i}_quote", 'cr8v_testimonials', "Slide {$i} — Main Quote", $exact_testimonials[$i]['quote']);
        _cr8v_textarea($wp_customize, "tmn_{$i}_sub",   'cr8v_testimonials', "Slide {$i} — Sub Quote",  $exact_testimonials[$i]['sub']);
        _cr8v_text($wp_customize,     "tmn_{$i}_name",  'cr8v_testimonials', "Slide {$i} — Author Name", $exact_testimonials[$i]['name']);
        _cr8v_text($wp_customize,     "tmn_{$i}_role",  'cr8v_testimonials', "Slide {$i} — Author Role", $exact_testimonials[$i]['role']);
        _cr8v_text($wp_customize,     "tmn_{$i}_logo",  'cr8v_testimonials', "Slide {$i} — CDN Logo URL", $exact_testimonials[$i]['logo']);
    }

    _cr8v_text($wp_customize, 'tmn_callout_text', 'cr8v_testimonials', 'Bottom Callout Text', 'See how impactful custom stacks make a difference?');
    _cr8v_text($wp_customize, 'tmn_callout_btn_text', 'cr8v_testimonials', 'Bottom Button Label', 'Schedule a Consultation');
    _cr8v_text($wp_customize, 'tmn_callout_btn_url', 'cr8v_testimonials', 'Bottom Button Link', '/discovery-call/');

    // 9. FAQ SECTION (#faq)
    _cr8v_section($wp_customize, 'cr8v_faq', '9. FAQ Section', 'cr8v_homepage', 90);
    _cr8v_text($wp_customize, 'faq_eyebrow', 'cr8v_faq', 'Section Eyebrow', 'COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'faq_heading', 'cr8v_faq', 'Section Heading', 'Before You Reach Out');
    _cr8v_textarea($wp_customize, 'faq_sub', 'cr8v_faq', 'Section Subtitle', 'Can\'t find what you\'re looking for? Just ask — no sales script, no pitch.');
    _cr8v_text($wp_customize, 'faq_cta_text', 'cr8v_faq', 'Aside CTA Label', 'Talk to us');
    _cr8v_text($wp_customize, 'faq_cta_url', 'cr8v_faq', 'Aside CTA Link', '/contact/');

    $exact_faqs = [
        1 => ['q' => 'How much does it cost to work with Cr8v Stacks?', 'a' => 'It depends on scope — a brochure site, an ecommerce store, and a custom AI MVP all price differently. Use our cost calculator for an instant range, or talk to us directly for a full quote.'],
        2 => ['q' => 'How long does a typical project take?', 'a' => 'Most website builds run a few weeks from approved design to launch; custom development and AI MVPs vary based on scope. We will give you a real timeline once we understand what you are building.'],
        3 => ['q' => 'What services do you actually offer?', 'a' => 'Web design, AI MVP development, and custom development are our core focus — alongside brand strategy, brand identity, and digital marketing. See the full breakdown on our Services page.'],
        4 => ['q' => 'Do you build on WordPress, Shopify, or something else?', 'a' => 'All of the above, plus WooCommerce and fully custom builds. We recommend the platform based on what your business needs, not what is easiest for us.'],
        5 => ['q' => 'Which payment gateways do you integrate?', 'a' => 'This depends on your platform and region — we will confirm exact options (Stripe, Paystack, and others) once we know your setup.'],
        6 => ['q' => 'Can you redesign or rebuild a site that already exists?', 'a' => 'Yes — a large share of our work is exactly this. We have rebuilt everything from basic landing pages to full property platforms.'],
        7 => ['q' => 'Is SEO included in a website build?', 'a' => 'We build with SEO in mind from day one rather than bolting it on afterward, and we also offer SEO as a standalone service if your site already exists.'],
        8 => ['q' => 'What support do you offer after launch?', 'a' => 'Support scope varies by project — we will define exactly what is included before you sign off on anything, so there is no ambiguity post-launch.'],
        9 => ['q' => 'Do you work with early-stage startups?', 'a' => 'Yes, including AI MVP work specifically built to validate an early idea before a larger investment.'],
        10 => ['q' => 'What is your take on AI?', 'a' => 'We use AI to move faster on research and repetitive work. Direction, judgment, and quality control stay with our team on every project — AI does not lead the work, we do.'],
        11 => ['q' => 'Why hire an agency instead of a freelancer?', 'a' => 'A freelancer is one person covering every discipline. We are a team where design, development, and strategy each get real, dedicated expertise instead of one person doing their best across all of them.'],
        12 => ['q' => 'What does Cr8v Stacks mean?', 'a' => 'Creative Stacks. Every project is built from different stacks of expertise — strategy, design, development, and marketing — layered together rather than handled by one generalist.']
    ];

    for ($i = 1; $i <= 12; $i++) {
        _cr8v_text($wp_customize, "faq_{$i}_q", 'cr8v_faq', "FAQ {$i} Question", $exact_faqs[$i]['q']);
        _cr8v_textarea($wp_customize, "faq_{$i}_a", 'cr8v_faq', "FAQ {$i} Answer", $exact_faqs[$i]['a']);
    }

    // 10. FINAL CTA BANNER (#contact)
    _cr8v_section($wp_customize, 'cr8v_final_cta', '10. Final CTA Banner', 'cr8v_homepage', 100);
    _cr8v_text($wp_customize, 'cta_eyebrow', 'cr8v_final_cta', 'Banner Eyebrow', 'EASY TO EXPLORE');
    _cr8v_text($wp_customize, 'cta_heading', 'cr8v_final_cta', 'Banner Heading', 'A simple approach to building your custom digital stacks.');
    _cr8v_textarea($wp_customize, 'cta_sub', 'cr8v_final_cta', 'Banner Subtitle', 'Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.');
    _cr8v_text($wp_customize, 'cta_button_text', 'cr8v_final_cta', 'Button Label', 'Book a Consultation');
    _cr8v_text($wp_customize, 'cta_button_url', 'cr8v_final_cta', 'Button Link', '/discovery-call/');
    _cr8v_text($wp_customize, 'cta_video_mp4', 'cr8v_final_cta', 'Banner Video MP4 Asset', 'download.mp4');
    _cr8v_text($wp_customize, 'cta_video_webm', 'cr8v_final_cta', 'Banner Video WebM Asset', 'seven_circular_badges.webm');

        // ==========================================
    // ABOUT US PAGE PANEL (11 EXHAUSTIVE SECTIONS)
    // ==========================================
    $wp_customize->add_panel('cr8v_about_panel', [
        'title'       => 'About Us Page — Tropos Theme',
        'description' => 'Edit all 11 sections of the About Us page including Hero, Philosophy, Dev Playground, What We Actually Do Accordion, Pillars of Growth Bento Grid, Performance Tech Tabs, About CR8V Stacks, Who We Build For (Fit Matrix), Leadership & Founder Pass (Mallami Adekunle), Open Source Education, and CTA Banner.',
        'priority'    => 25,
    ]);

    // ── 1. HERO SECTION & PILLS ──
    _cr8v_section($wp_customize, 'cr8v_abt_hero', '1. Hero Section & Pills', 'cr8v_about_panel', 10);
    _cr8v_text($wp_customize, 'abt_hero_tag', 'cr8v_abt_hero', 'Meta Tag', 'AGENCY PROFILE');
    _cr8v_textarea($wp_customize, 'abt_hero_headline', 'cr8v_abt_hero', 'Headline (HTML allowed)', 'WE DEFY <span class="c8abt-serif-italic">templates.</span><br>WE CODE <span class="c8abt-highlight-text">CONVERSIONS.</span>');
    _cr8v_textarea($wp_customize, 'abt_hero_p', 'cr8v_abt_hero', 'Subheadline / Paragraph', 'We are an engineering-first digital agency built for ambitious brands. We don&#39;t just assemble websites; we architect custom digital environments, brand systems, and organic search acquisition models designed to turn attention into measurable revenue.');
    _cr8v_img($wp_customize, 'abt_hero_img', 'cr8v_abt_hero', 'Studio Hero Image', get_template_directory_uri() . '/assets/img/wwa_studio_visual.jpg');
    _cr8v_text($wp_customize, 'abt_hero_hud', 'cr8v_abt_hero', 'HUD Tag Text', '// SYSTEM_ACTIVE');
    _cr8v_text($wp_customize, 'abt_hero_pill_1', 'cr8v_abt_hero', 'Hero Pill 1', 'Custom PHP');
    _cr8v_text($wp_customize, 'abt_hero_pill_2', 'cr8v_abt_hero', 'Hero Pill 2', 'Elementor-Safe Code');
    _cr8v_text($wp_customize, 'abt_hero_pill_3', 'cr8v_abt_hero', 'Hero Pill 3', 'WordPress');
    _cr8v_text($wp_customize, 'abt_hero_pill_4', 'cr8v_abt_hero', 'Hero Pill 4', 'Shopify');
    _cr8v_text($wp_customize, 'abt_hero_pill_5', 'cr8v_abt_hero', 'Hero Pill 5', 'Conversion UX');
    _cr8v_text($wp_customize, 'abt_hero_pill_6', 'cr8v_abt_hero', 'Hero Pill 6', 'Organic SEO');

    // ── 2. PHILOSOPHY & VALUES ──
    _cr8v_section($wp_customize, 'cr8v_abt_philosophy', '2. Philosophy & Values', 'cr8v_about_panel', 20);
    _cr8v_text($wp_customize, 'abt_phi_tag', 'cr8v_abt_philosophy', 'Meta Tag', 'WHAT YOU SHOULD KNOW');
    _cr8v_text($wp_customize, 'abt_phi_heading', 'cr8v_abt_philosophy', 'Heading', 'OUR PHILOSOPHY');
    _cr8v_textarea($wp_customize, 'abt_phi_p1', 'cr8v_abt_philosophy', 'Paragraph 1', 'We bridge the gap between creative visual branding and lightweight, custom-coded web architectures.');
    _cr8v_textarea($wp_customize, 'abt_phi_p2', 'cr8v_abt_philosophy', 'Paragraph 2', 'At CR8V Stacks, founded by Mallami Adekunle, we approach web development and branding from a performance-first perspective. We don&#39;t believe in generic page builders and bloated themes.');
    _cr8v_textarea($wp_customize, 'abt_phi_p3', 'cr8v_abt_philosophy', 'Paragraph 3', 'By keeping our technology stack lightweight and prioritizing custom layouts, we eliminate design bloat and give our clients the technical edge in speed, search ranking, and user experience.');
    _cr8v_text($wp_customize, 'abt_val1_title', 'cr8v_abt_philosophy', 'Value Card 1 Title', 'CODE ARCHITECTURE — ZERO BLOAT');
    _cr8v_textarea($wp_customize, 'abt_val1_desc', 'cr8v_abt_philosophy', 'Value Card 1 Description', 'Bespoke custom themes built from scratch with semantic HTML, CSS, and vanilla JS. No page builders, no unneeded plugins.');
    _cr8v_text($wp_customize, 'abt_val2_title', 'cr8v_abt_philosophy', 'Value Card 2 Title', 'LIQUID ENGINEERING — SUB-1.2S SPEED');
    _cr8v_textarea($wp_customize, 'abt_val2_desc', 'cr8v_abt_philosophy', 'Value Card 2 Description', 'Tuned for instant page loads and green Core Web Vitals across every single device, browser, and network condition.');
    _cr8v_text($wp_customize, 'abt_val3_title', 'cr8v_abt_philosophy', 'Value Card 3 Title', 'ENTITY SEO — ORGANIC DOMINANCE');
    _cr8v_textarea($wp_customize, 'abt_val3_desc', 'cr8v_abt_philosophy', 'Value Card 3 Description', 'Structured Schema JSON-LD markup and semantic HTML hierarchy ensuring total search engine clarity and ranking authority.');

    // ── 3. DEV PLAYGROUND SHOWCASE ──
    _cr8v_section($wp_customize, 'cr8v_abt_dp', '3. Dev Playground Showcase', 'cr8v_about_panel', 30);
    _cr8v_text($wp_customize, 'abt_dp_eyebrow', 'cr8v_abt_dp', 'Left Eyebrow', 'OPEN SOURCE & INTERNAL TOOLS');
    _cr8v_text($wp_customize, 'abt_dp_heading', 'cr8v_abt_dp', 'Left Heading', 'DEV PLAYGROUND');
    _cr8v_textarea($wp_customize, 'abt_dp_sub', 'cr8v_abt_dp', 'Left Subtitle', 'We build and publish free internal utilities, CSS generators, and AI tools for the web development community.');
    _cr8v_text($wp_customize, 'abt_dp_tool1_name', 'cr8v_abt_dp', 'Tool 1 Name', 'Mega Menu Generator');
    _cr8v_text($wp_customize, 'abt_dp_tool1_desc', 'cr8v_abt_dp', 'Tool 1 Description', 'Generate lightweight responsive navigation CSS structures without third-party plugins.');
    _cr8v_text($wp_customize, 'abt_dp_tool2_name', 'cr8v_abt_dp', 'Tool 2 Name', 'Schema Builder');
    _cr8v_text($wp_customize, 'abt_dp_tool2_desc', 'cr8v_abt_dp', 'Tool 2 Description', 'Visual JSON-LD entity generator for LocalBusiness, Product, Organization, and FAQ Schema.');
    _cr8v_text($wp_customize, 'abt_dp_tool3_name', 'cr8v_abt_dp', 'Tool 3 Name', 'AltText Buddy');
    _cr8v_text($wp_customize, 'abt_dp_tool3_desc', 'cr8v_abt_dp', 'Tool 3 Description', 'Automatically generate descriptive image alt text for your media library using 5 AI vision models.');
    _cr8v_text($wp_customize, 'abt_dp_tool4_name', 'cr8v_abt_dp', 'Tool 4 Name', 'LumiCode');
    _cr8v_text($wp_customize, 'abt_dp_tool4_desc', 'cr8v_abt_dp', 'Tool 4 Description', 'VS Code-style syntax-highlighted code blocks on WordPress with line numbers and copy utility.');
    _cr8v_text($wp_customize, 'abt_dp_tool5_name', 'cr8v_abt_dp', 'Tool 5 Name', 'Cost Calculator Pro');
    _cr8v_text($wp_customize, 'abt_dp_tool5_desc', 'cr8v_abt_dp', 'Tool 5 Description', 'Instant interactive web project estimator delivering itemized scope breakdowns in under 60 seconds.');
    _cr8v_text($wp_customize, 'abt_dp_r_eyebrow', 'cr8v_abt_dp', 'Right Eyebrow', 'NO GIMMICKS // OPEN ACCESS');
    _cr8v_text($wp_customize, 'abt_dp_stat1_num',  'cr8v_abt_dp', 'Stat 1 Number', '5');
    _cr8v_text($wp_customize, 'abt_dp_stat1_lbl',  'cr8v_abt_dp', 'Stat 1 Label', 'Tools Available');
    _cr8v_text($wp_customize, 'abt_dp_stat2_num',  'cr8v_abt_dp', 'Stat 2 Number', '100%');
    _cr8v_text($wp_customize, 'abt_dp_stat2_lbl',  'cr8v_abt_dp', 'Stat 2 Label', 'Instant Access');
    _cr8v_text($wp_customize, 'abt_dp_stat3_num',  'cr8v_abt_dp', 'Stat 3 Number', '60s');
    _cr8v_text($wp_customize, 'abt_dp_stat3_lbl',  'cr8v_abt_dp', 'Stat 3 Label', 'Avg Setup Time');
    _cr8v_text($wp_customize, 'abt_dp_stat4_num',  'cr8v_abt_dp', 'Stat 4 Number', '∞');
    _cr8v_text($wp_customize, 'abt_dp_stat4_lbl',  'cr8v_abt_dp', 'Stat 4 Label', 'No Builder Bloat');
    _cr8v_textarea($wp_customize, 'abt_dp_r_desc', 'cr8v_abt_dp', 'Right Description', 'Every tool in our playground is built out of necessity for real client builds. No corporate fluff, no bloated codebases — just lightweight, high-performance utilities designed to keep your WordPress and Shopify sites running lightning fast.');
    _cr8v_text($wp_customize, 'abt_dp_btn1_text',  'cr8v_abt_dp', 'Button 1 Text', 'Inspect Tool Blueprints');
    _cr8v_text($wp_customize, 'abt_dp_btn1_url',   'cr8v_abt_dp', 'Button 1 Link', 'https://cr8vstacks.com/dev-playground/');
    _cr8v_text($wp_customize, 'abt_dp_btn2_text',  'cr8v_abt_dp', 'Button 2 Text', 'Book A Discovery Call');
    _cr8v_text($wp_customize, 'abt_dp_btn2_url',   'cr8v_abt_dp', 'Button 2 Link', '/discovery-call/');

    // ── 4. WHAT WE ACTUALLY DO ACCORDION ──
    _cr8v_section($wp_customize, 'cr8v_abt_services', '4. What We Actually Do Accordion', 'cr8v_about_panel', 40);
    _cr8v_text($wp_customize, 'abt_srv_eyebrow', 'cr8v_abt_services', 'Section Eyebrow', '// WHAT WE ACTUALLY DO');
    _cr8v_textarea($wp_customize, 'abt_srv_heading', 'cr8v_abt_services', 'Section Heading', 'Every Layer.<br>One <em>Studio.</em>');
    _cr8v_textarea($wp_customize, 'abt_srv_sub', 'cr8v_abt_services', 'Section Subtitle', 'We start with who you&#39;re competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on — the build is only one layer.');
    _cr8v_text($wp_customize, 'abt_srv_pill_1', 'cr8v_abt_services', 'Header Layer Pill 1', 'Strategy');
    _cr8v_text($wp_customize, 'abt_srv_pill_2', 'cr8v_abt_services', 'Header Layer Pill 2', 'Design & Build');
    _cr8v_text($wp_customize, 'abt_srv_pill_3', 'cr8v_abt_services', 'Header Layer Pill 3', 'Growth');
    _cr8v_text($wp_customize, 'abt_srv1_title', 'cr8v_abt_services', 'Service 1 Title', 'Website Design');
    _cr8v_text($wp_customize, 'abt_srv1_tag',   'cr8v_abt_services', 'Service 1 Tag', 'Build Layer');
    _cr8v_text($wp_customize, 'abt_srv1_link',  'cr8v_abt_services', 'Service 1 Link', '/services/web-design/');
    _cr8v_textarea($wp_customize, 'abt_srv1_desc', 'cr8v_abt_services', 'Service 1 Description', 'High-converting digital experiences engineered for speed, search authority, and seamless user conversions.');
    _cr8v_text($wp_customize, 'abt_srv2_title', 'cr8v_abt_services', 'Service 2 Title', 'Custom Software & APIs');
    _cr8v_text($wp_customize, 'abt_srv2_tag',   'cr8v_abt_services', 'Service 2 Tag', 'Build Layer');
    _cr8v_text($wp_customize, 'abt_srv2_link',  'cr8v_abt_services', 'Service 2 Link', '/services/custom-dev/');
    _cr8v_textarea($wp_customize, 'abt_srv2_desc', 'cr8v_abt_services', 'Service 2 Description', 'Bespoke web applications, internal tools, custom API integrations, and scalable PHP/JS architectures.');
    _cr8v_text($wp_customize, 'abt_srv3_title', 'cr8v_abt_services', 'Service 3 Title', 'AI Product MVPs');
    _cr8v_text($wp_customize, 'abt_srv3_tag',   'cr8v_abt_services', 'Service 3 Tag', 'Build Layer');
    _cr8v_text($wp_customize, 'abt_srv3_link',  'cr8v_abt_services', 'Service 3 Link', '/services/ai-mvp/');
    _cr8v_textarea($wp_customize, 'abt_srv3_desc', 'cr8v_abt_services', 'Service 3 Description', 'Production-grade AI applications, LLM workflow integrations, and rapid prototype platforms.');
    _cr8v_text($wp_customize, 'abt_srv4_title', 'cr8v_abt_services', 'Service 4 Title', 'Brand Strategy & Voice');
    _cr8v_text($wp_customize, 'abt_srv4_tag',   'cr8v_abt_services', 'Service 4 Tag', 'Growth Layer');
    _cr8v_text($wp_customize, 'abt_srv4_link',  'cr8v_abt_services', 'Service 4 Link', '/services/brand-strategy/');
    _cr8v_textarea($wp_customize, 'abt_srv4_desc', 'cr8v_abt_services', 'Service 4 Description', 'Market positioning, competitor teardowns, value proposition frameworks, and pricing scoping.');
    _cr8v_text($wp_customize, 'abt_srv5_title', 'cr8v_abt_services', 'Service 5 Title', 'SEO & Entity Search');
    _cr8v_text($wp_customize, 'abt_srv5_tag',   'cr8v_abt_services', 'Service 5 Tag', 'Growth Layer');
    _cr8v_text($wp_customize, 'abt_srv5_link',  'cr8v_abt_services', 'Service 5 Link', '/services/seo-content/');
    _cr8v_textarea($wp_customize, 'abt_srv5_desc', 'cr8v_abt_services', 'Service 5 Description', 'Technical search architecture, Schema JSON-LD entity mapping, Core Web Vitals optimization.');

    // ── 5. PILLARS OF GROWTH BENTO GRID ──
    _cr8v_section($wp_customize, 'cr8v_abt_pillars', '5. Pillars of Growth Bento Grid', 'cr8v_about_panel', 50);
    _cr8v_text($wp_customize, 'abt_plr_eyebrow', 'cr8v_abt_pillars', 'Section Eyebrow', '// OUR PILLARS OF GROWTH');
    _cr8v_textarea($wp_customize, 'abt_plr_heading', 'cr8v_abt_pillars', 'Section Heading', 'ENGINEERED FOR SCALABILITY. <em>BUILT FOR PERFORMANCE.</em>');
    _cr8v_textarea($wp_customize, 'abt_plr_desc', 'cr8v_abt_pillars', 'Section Description', 'A full-spectrum digital framework designed to scale ambitious brands sustainably — from brand positioning and lightweight custom web engineering to entity search dominance.');
    _cr8v_text($wp_customize, 'abt_plr_c1_label', 'cr8v_abt_pillars', 'Card 1 Label', 'Growth Architecture');
    _cr8v_textarea($wp_customize, 'abt_plr_c1_title', 'cr8v_abt_pillars', 'Card 1 Title', 'Core Pillars.<br>Zero Bloat.');
    _cr8v_text($wp_customize, 'abt_plr_c1_p1', 'cr8v_abt_pillars', 'Card 1 Pillar 1', 'Brand Positioning');
    _cr8v_text($wp_customize, 'abt_plr_c1_p2', 'cr8v_abt_pillars', 'Card 1 Pillar 2', 'Web Architecture');
    _cr8v_text($wp_customize, 'abt_plr_c1_p3', 'cr8v_abt_pillars', 'Card 1 Pillar 3', 'Digital Marketing');
    _cr8v_text($wp_customize, 'abt_plr_c1_p4', 'cr8v_abt_pillars', 'Card 1 Pillar 4', 'Entity SEO Dominance');
    _cr8v_img($wp_customize, 'abt_plr_c2_img', 'cr8v_abt_pillars', 'Card 2 Visual Image', get_template_directory_uri() . '/assets/img/hww_stacks_visual.jpg');
    _cr8v_text($wp_customize, 'abt_plr_c3_label', 'cr8v_abt_pillars', 'Card 3 Label', 'Speed Benchmark');
    _cr8v_text($wp_customize, 'abt_plr_c3_num', 'cr8v_abt_pillars', 'Card 3 Number', '95+ PageSpeed');
    _cr8v_textarea($wp_customize, 'abt_plr_c3_sub', 'cr8v_abt_pillars', 'Card 3 Subtitle', 'Sub-1.2 second instantaneous loading speeds across mobile and desktop devices.');
    _cr8v_text($wp_customize, 'abt_plr_c4_label', 'cr8v_abt_pillars', 'Card 4 Label', 'Technology Stack');
    _cr8v_textarea($wp_customize, 'abt_plr_c4_title', 'cr8v_abt_pillars', 'Card 4 Title', 'Clean Engineering.<br>Zero Fluff.');
    _cr8v_text($wp_customize, 'abt_plr_c5_label', 'cr8v_abt_pillars', 'Card 5 Label', 'Client Ownership');
    _cr8v_text($wp_customize, 'abt_plr_c5_num', 'cr8v_abt_pillars', 'Card 5 Number', '100%');
    _cr8v_textarea($wp_customize, 'abt_plr_c5_sub', 'cr8v_abt_pillars', 'Card 5 Subtitle', 'You own all code, repositories, and data. Zero vendor lock-in or recurring monthly code fees.');
    _cr8v_text($wp_customize, 'abt_plr_c6_label', 'cr8v_abt_pillars', 'Card 6 Label', 'What Ships With Every Project');
    _cr8v_text($wp_customize, 'abt_plr_c6_item1_step', 'cr8v_abt_pillars', 'Card 6 Item 1 Step', 'Brand Strategy');
    _cr8v_text($wp_customize, 'abt_plr_c6_item1_lbl', 'cr8v_abt_pillars', 'Card 6 Item 1 Label', 'Positioning & UX');
    _cr8v_textarea($wp_customize, 'abt_plr_c6_item1_desc', 'cr8v_abt_pillars', 'Card 6 Item 1 Desc', 'High-intent keyword mapping and bespoke wireframes to command immediate trust.');
    _cr8v_text($wp_customize, 'abt_plr_c6_item2_step', 'cr8v_abt_pillars', 'Card 6 Item 2 Step', 'Web Design');
    _cr8v_text($wp_customize, 'abt_plr_c6_item2_lbl', 'cr8v_abt_pillars', 'Card 6 Item 2 Label', 'Lightweight Code');
    _cr8v_textarea($wp_customize, 'abt_plr_c6_item2_desc', 'cr8v_abt_pillars', 'Card 6 Item 2 Desc', 'Sub-1.2s loading speeds with custom PHP, HTML5, and scoped vanilla CSS.');
    _cr8v_text($wp_customize, 'abt_plr_c6_item3_step', 'cr8v_abt_pillars', 'Card 6 Item 3 Step', 'Organic SEO');
    _cr8v_text($wp_customize, 'abt_plr_c6_item3_lbl', 'cr8v_abt_pillars', 'Card 6 Item 3 Label', 'Entity Dominance');
    _cr8v_textarea($wp_customize, 'abt_plr_c6_item3_desc', 'cr8v_abt_pillars', 'Card 6 Item 3 Desc', 'JSON-LD schema hierarchy ensuring total search engine clarity and rank authority.');

    // ── 6. PERFORMANCE TECH TABS ──
    _cr8v_section($wp_customize, 'cr8v_abt_tech', '6. Performance Tech Tabs', 'cr8v_about_panel', 60);
    _cr8v_text($wp_customize, 'abt_tch_tag', 'cr8v_abt_tech', 'Meta Tag', 'PERFORMANCE & TECH STACK');
    _cr8v_textarea($wp_customize, 'abt_tch_heading', 'cr8v_abt_tech', 'Heading', 'BUILT FOR SPEED. <em>ENGINEERED TO DOMINATE.</em>');
    _cr8v_textarea($wp_customize, 'abt_tch_sub', 'cr8v_abt_tech', 'Subtitle', 'Explore our core technology stacks and performance benchmarks across WordPress, Shopify, custom software, and AI-accelerated workflows.');
    _cr8v_text($wp_customize, 'abt_tch1_title', 'cr8v_abt_tech', 'Tab 1 (WordPress) Title', 'WORDPRESS CUSTOM ENGINE');
    _cr8v_textarea($wp_customize, 'abt_tch1_desc', 'cr8v_abt_tech', 'Tab 1 Description', 'We architect custom WordPress themes and Elementor-safe code systems that bypass typical builder bloat. Hand-written PHP templates, optimized asset loading, and clean database queries ensure sub-1.2s page loads.');
    _cr8v_text($wp_customize, 'abt_tch1_m1_val', 'cr8v_abt_tech', 'Tab 1 Metric 1 Value', '95%+');
    _cr8v_text($wp_customize, 'abt_tch1_m1_lbl', 'cr8v_abt_tech', 'Tab 1 Metric 1 Label', 'PageSpeed Score');
    _cr8v_text($wp_customize, 'abt_tch1_m2_val', 'cr8v_abt_tech', 'Tab 1 Metric 2 Value', '< 1.2s');
    _cr8v_text($wp_customize, 'abt_tch1_m2_lbl', 'cr8v_abt_tech', 'Tab 1 Metric 2 Label', 'Page Load Time');
    _cr8v_text($wp_customize, 'abt_tch1_m3_val', 'cr8v_abt_tech', 'Tab 1 Metric 3 Value', '100%');
    _cr8v_text($wp_customize, 'abt_tch1_m3_lbl', 'cr8v_abt_tech', 'Tab 1 Metric 3 Label', 'Code Ownership');
    _cr8v_text($wp_customize, 'abt_tch2_title', 'cr8v_abt_tech', 'Tab 2 (Shopify) Title', 'SHOPIFY LIQUID STOREFRONTS');
    _cr8v_textarea($wp_customize, 'abt_tch2_desc', 'cr8v_abt_tech', 'Tab 2 Description', 'Bespoke Liquid storefronts designed to maximize mobile checkout speed, product discovery, and store conversion velocity — giving your e-commerce brand a distinct competitive edge.');
    _cr8v_text($wp_customize, 'abt_tch2_m1_val', 'cr8v_abt_tech', 'Tab 2 Metric 1 Value', '3.5x');
    _cr8v_text($wp_customize, 'abt_tch2_m1_lbl', 'cr8v_abt_tech', 'Tab 2 Metric 1 Label', 'Conversion Rate');
    _cr8v_text($wp_customize, 'abt_tch2_m2_val', 'cr8v_abt_tech', 'Tab 2 Metric 2 Value', '< 1.5s');
    _cr8v_text($wp_customize, 'abt_tch2_m2_lbl', 'cr8v_abt_tech', 'Tab 2 Metric 2 Label', 'Mobile Load Speed');
    _cr8v_text($wp_customize, 'abt_tch2_m3_val', 'cr8v_abt_tech', 'Tab 2 Metric 3 Value', 'Liquid');
    _cr8v_text($wp_customize, 'abt_tch2_m3_lbl', 'cr8v_abt_tech', 'Tab 2 Metric 3 Label', 'Performance Standard');
    _cr8v_text($wp_customize, 'abt_tch3_title', 'cr8v_abt_tech', 'Tab 3 (Custom Dev) Title', 'BESPOKE SOFTWARE & WEB APPLICATIONS');
    _cr8v_textarea($wp_customize, 'abt_tch3_desc', 'cr8v_abt_tech', 'Tab 3 Description', 'Tailored software engineering beyond conventional websites — including web applications, custom APIs, internal dashboards, and complex business logic built specifically around your operating workflow.');
    _cr8v_text($wp_customize, 'abt_tch3_m1_val', 'cr8v_abt_tech', 'Tab 3 Metric 1 Value', '100%');
    _cr8v_text($wp_customize, 'abt_tch3_m1_lbl', 'cr8v_abt_tech', 'Tab 3 Metric 1 Label', 'Bespoke Architecture');
    _cr8v_text($wp_customize, 'abt_tch3_m2_val', 'cr8v_abt_tech', 'Tab 3 Metric 2 Value', 'Zero');
    _cr8v_text($wp_customize, 'abt_tch3_m2_lbl', 'cr8v_abt_tech', 'Tab 3 Metric 2 Label', 'Vendor Lock-in');
    _cr8v_text($wp_customize, 'abt_tch3_m3_val', 'cr8v_abt_tech', 'Tab 3 Metric 3 Value', '∞');
    _cr8v_text($wp_customize, 'abt_tch3_m3_lbl', 'cr8v_abt_tech', 'Tab 3 Metric 3 Label', 'Scale Potential');
    _cr8v_text($wp_customize, 'abt_tch4_title', 'cr8v_abt_tech', 'Tab 4 (AI Workflows) Title', 'HUMAN-LED, AI-ACCELERATED WORKFLOWS');
    _cr8v_textarea($wp_customize, 'abt_tch4_desc', 'cr8v_abt_tech', 'Tab 4 Description', 'AI makes us faster, but human engineering and strategy drive every decision. We leverage AI pipelines to accelerate research, prototyping, and development while keeping software quality uncompromisingly high.');
    _cr8v_text($wp_customize, 'abt_tch4_m1_val', 'cr8v_abt_tech', 'Tab 4 Metric 1 Value', '3.5x');
    _cr8v_text($wp_customize, 'abt_tch4_m1_lbl', 'cr8v_abt_tech', 'Tab 4 Metric 1 Label', 'Execution Velocity');
    _cr8v_text($wp_customize, 'abt_tch4_m2_val', 'cr8v_abt_tech', 'Tab 4 Metric 2 Value', 'Human');
    _cr8v_text($wp_customize, 'abt_tch4_m2_lbl', 'cr8v_abt_tech', 'Tab 4 Metric 2 Label', 'Strategy & Oversight');
    _cr8v_text($wp_customize, 'abt_tch4_m3_val', 'cr8v_abt_tech', 'Tab 4 Metric 3 Value', 'Production');
    _cr8v_text($wp_customize, 'abt_tch4_m3_lbl', 'cr8v_abt_tech', 'Tab 4 Metric 3 Label', 'Grade Deliverables');

    // ── 7. ABOUT CR8V STACKS (3-COL GRID) ──
    _cr8v_section($wp_customize, 'cr8v_abt_agency', '7. About CR8V Stacks (3-Col Grid)', 'cr8v_about_panel', 70);
    _cr8v_text($wp_customize, 'abt_ag_tag', 'cr8v_abt_agency', 'Meta Tag', 'ABOUT CR8V STACKS');
    _cr8v_textarea($wp_customize, 'abt_ag_heading', 'cr8v_abt_agency', 'Heading', 'One team.<br><em>Every layer.</em>');
    _cr8v_textarea($wp_customize, 'abt_ag_desc', 'cr8v_abt_agency', 'Description', 'Strategy, design, and code — handled by the same developer-led team from first discovery call to launch. We don&#39;t hand off project briefs to isolated departments who have never spoken to each other.');
    _cr8v_text($wp_customize, 'abt_ag_card1_num', 'cr8v_abt_agency', 'Card 1 Num', '01 / STRATEGY');
    _cr8v_text($wp_customize, 'abt_ag_card1_h3', 'cr8v_abt_agency', 'Card 1 Title', 'DEVELOPER-LED STRATEGY');
    _cr8v_textarea($wp_customize, 'abt_ag_card1_p', 'cr8v_abt_agency', 'Card 1 Desc', 'Every engagement begins with real technical and positioning analysis. We scope transparently with fixed pricing, then we execute.');
    _cr8v_text($wp_customize, 'abt_ag_card2_num', 'cr8v_abt_agency', 'Card 2 Num', '02 / WORKFLOW');
    _cr8v_text($wp_customize, 'abt_ag_card2_h3', 'cr8v_abt_agency', 'Card 2 Title', 'DESIGN & BUILD TOGETHER');
    _cr8v_textarea($wp_customize, 'abt_ag_card2_p', 'cr8v_abt_agency', 'Card 2 Desc', 'Visual UI design and frontend code performance run simultaneously. Less revision back-and-forth, maximum precision in code.');
    _cr8v_text($wp_customize, 'abt_ag_card3_num', 'cr8v_abt_agency', 'Card 3 Num', '03 / FREEDOM');
    _cr8v_text($wp_customize, 'abt_ag_card3_h3', 'cr8v_abt_agency', 'Card 3 Title', 'COMPLETE CLIENT OWNERSHIP');
    _cr8v_textarea($wp_customize, 'abt_ag_card3_p', 'cr8v_abt_agency', 'Card 3 Desc', 'Codebase, domain, and data repositories are 100% yours from day one. No lock-in fees or dependencies to keep your site running.');

        // ── 8. WHO WE BUILD FOR (FIT MATRIX) ──
    _cr8v_section($wp_customize, 'cr8v_abt_fit', '8. Who We Build For (Fit Matrix)', 'cr8v_about_panel', 80);
    _cr8v_text($wp_customize, 'abt_fit_tag', 'cr8v_abt_fit', 'Meta Tag', 'WHO WE BUILD FOR');
    _cr8v_text($wp_customize, 'abt_fit_heading', 'cr8v_abt_fit', 'Heading', 'WE&#39;RE NOT A FIT FOR EVERYONE');
    _cr8v_textarea($wp_customize, 'abt_fit_sub', 'cr8v_abt_fit', 'Subtitle', 'That&#39;s on purpose. Here&#39;s how to tell if your brand is ready for custom engineering.');
    _cr8v_text($wp_customize, 'abt_fit_yes_pill', 'cr8v_abt_fit', 'Ideal Partner Pill', 'IDEAL PARTNER PROFILE');
    _cr8v_text($wp_customize, 'abt_fit_yes_title', 'cr8v_abt_fit', 'Right Fit Title', 'You&#39;re in the right place if');
    _cr8v_text($wp_customize, 'abt_fit_no_pill', 'cr8v_abt_fit', 'Disqualifiers Pill', 'DISQUALIFIERS');
    _cr8v_text($wp_customize, 'abt_fit_no_title', 'cr8v_abt_fit', 'Wrong Fit Title', 'We&#39;re probably not your agency if');

    _cr8v_textarea($wp_customize, 'abt_fit_yes_1', 'cr8v_abt_fit', 'Right Fit Bullet 1', '<strong>No More Plugin Dependency:</strong> You&#39;re tired of being told to "just install another plugin" every time you need a new feature.');
    _cr8v_textarea($wp_customize, 'abt_fit_yes_2', 'cr8v_abt_fit', 'Right Fit Bullet 2', '<strong>Integrated Developer Workflow:</strong> You want a designer and a developer thinking about your site architecture at the same time, not in sequence.');
    _cr8v_textarea($wp_customize, 'abt_fit_yes_3', 'cr8v_abt_fit', 'Right Fit Bullet 3', '<strong>Speed & Performance Priority:</strong> You care about your PageSpeed score and Core Web Vitals as much as your visual branding.');
    _cr8v_textarea($wp_customize, 'abt_fit_yes_4', 'cr8v_abt_fit', 'Right Fit Bullet 4', '<strong>Long-Term Brand Value:</strong> You&#39;re building a digital asset you intend to scale for years, not a temporary page you&#39;ll discard next quarter.');

    _cr8v_textarea($wp_customize, 'abt_fit_no_1', 'cr8v_abt_fit', 'Wrong Fit Bullet 1', '<strong>Quick Theme Installs:</strong> You want the cheapest pre-made template installed by Friday with zero custom code or optimization.');
    _cr8v_textarea($wp_customize, 'abt_fit_no_2', 'cr8v_abt_fit', 'Wrong Fit Bullet 2', '<strong>Passive Site Maintenance:</strong> You&#39;re looking for someone to quietly "manage" an existing bloated site without auditing or fixing it.');
    _cr8v_textarea($wp_customize, 'abt_fit_no_3', 'cr8v_abt_fit', 'Wrong Fit Bullet 3', '<strong>Gimmicks Over Metrics:</strong> Design trends matter more to your organization than page load times, search ranking, and conversion data.');
    _cr8v_textarea($wp_customize, 'abt_fit_no_4', 'cr8v_abt_fit', 'Wrong Fit Bullet 4', '<strong>Transactional Vendors:</strong> You want a set-and-forget outsourced vendor rather than an active technical engineering partner.');

    // ── 9. LEADERSHIP & FOUNDER PASS ──
    _cr8v_section($wp_customize, 'cr8v_abt_leadership', '9. Leadership & Founder Pass', 'cr8v_about_panel', 90);
    _cr8v_text($wp_customize, 'abt_fnd_tag', 'cr8v_abt_leadership', 'Meta Tag', 'LEADERSHIP');
    _cr8v_img($wp_customize, 'abt_fnd_media', 'cr8v_abt_leadership', 'Founder Media / Photo', get_template_directory_uri() . '/assets/img/dev_mascot.jpg');
    _cr8v_text($wp_customize, 'abt_fnd_heading', 'cr8v_abt_leadership', 'Heading', 'FOUNDER & DEV-LED CULTURE');
    _cr8v_textarea($wp_customize, 'abt_fnd_sub', 'cr8v_abt_leadership', 'Subheadline', 'Bridging the gap between creative visual architecture and clean, lightweight code.');
    _cr8v_textarea($wp_customize, 'abt_fnd_bio1', 'cr8v_abt_leadership', 'Bio Paragraph 1', 'Founded by Mallami Adekunle, a digital architect and strategist, CR8V Stacks was established to combat the slow, template-stuffed sites typical of corporate digital agencies. Observing how heavy WordPress configurations and generic page templates cost companies traffic and conversions, Mallami assembled a team of developer-first designers.');
    _cr8v_textarea($wp_customize, 'abt_fnd_bio2', 'cr8v_abt_leadership', 'Bio Paragraph 2', 'At CR8V Stacks, our designers are trained in performance optimization, and our developers are trained in conversion-focused UI/UX — so we never sacrifice speed for looks.');
    _cr8v_text($wp_customize, 'abt_fnd_pass_header', 'cr8v_abt_leadership', 'Pass Header Title', 'CR8V STACKS // SECURE PASS');
    _cr8v_text($wp_customize, 'abt_fnd_pass_meta', 'cr8v_abt_leadership', 'Pass Meta ID', 'ID: 080-MA');
    _cr8v_text($wp_customize, 'abt_fnd_name', 'cr8v_abt_leadership', 'Founder Name', 'Mallami Adekunle');
    _cr8v_text($wp_customize, 'abt_fnd_pass_desig', 'cr8v_abt_leadership', 'Designation', 'Founder & Principal Architect');
    _cr8v_text($wp_customize, 'abt_fnd_pass_stacks', 'cr8v_abt_leadership', 'Core Stacks', 'WordPress, Shopify, Figma, HTML5, CSS3, JS, PHP');
    _cr8v_text($wp_customize, 'abt_fnd_pass_stamp', 'cr8v_abt_leadership', 'Barcode Stamp', 'M.A.');

    // ── 10. OPEN SOURCE & EDUCATION ──
    _cr8v_section($wp_customize, 'cr8v_abt_edu', '10. Open Source & Education', 'cr8v_about_panel', 100);
    _cr8v_text($wp_customize, 'abt_edu_tag1', 'cr8v_abt_edu', 'Col 1 Tag', 'OPEN SOURCE & EDUCATION');
    _cr8v_text($wp_customize, 'abt_edu_title1', 'cr8v_abt_edu', 'Col 1 Title', 'ADVANCED ELEMENTOR TUTORIALS');
    _cr8v_textarea($wp_customize, 'abt_edu_desc1', 'cr8v_abt_edu', 'Col 1 Description', 'We run a dedicated learning channel under the handle @cr8vstacks, helping web developers write native CSS and JavaScript directly inside Elementor without compromising Google PageSpeed scores.');
    _cr8v_img($wp_customize, 'abt_edu_img1', 'cr8v_abt_edu', 'Col 1 Tutorial Image', get_template_directory_uri() . '/assets/img/cr8v_youtube_mockup.png');
    _cr8v_text($wp_customize, 'abt_edu_tag2', 'cr8v_abt_edu', 'Col 2 Tag', 'WORKFLOW AUTOMATION');
    _cr8v_text($wp_customize, 'abt_edu_title2', 'cr8v_abt_edu', 'Col 2 Title', 'AI-TO-WORDPRESS WORKFLOWS');
    _cr8v_textarea($wp_customize, 'abt_edu_desc2', 'cr8v_abt_edu', 'Col 2 Description', 'We teach developers how to leverage advanced AI models (like Claude, Gemini, and ChatGPT) to generate custom code structures and automatically translate those mockups into live, pixel-perfect Elementor sections.');
    _cr8v_img($wp_customize, 'abt_edu_img2', 'cr8v_abt_edu', 'Col 2 Tutorial Image', get_template_directory_uri() . '/assets/img/about_ai_workflow.jpg');

    // ── 11. FINAL CTA BANNER ──
    _cr8v_section($wp_customize, 'cr8v_abt_cta', '11. Final CTA Banner', 'cr8v_about_panel', 110);
    _cr8v_textarea($wp_customize, 'abt_cta_heading', 'cr8v_abt_cta', 'Banner Heading', 'LET&#39;S BRING YOUR BRAND TO THE NEXT LEVEL');
    _cr8v_textarea($wp_customize, 'abt_cta_sub', 'cr8v_abt_cta', 'Subtitle', 'Book a discovery call to discuss your web architecture, brand positioning, or search growth goals.');
    _cr8v_text($wp_customize, 'abt_cta_btn_text', 'cr8v_abt_cta', 'Button Text', 'BOOK A DISCOVERY CALL');
    _cr8v_text($wp_customize, 'abt_cta_btn_url',  'cr8v_abt_cta', 'Button Link', '/discovery-call/');
});

