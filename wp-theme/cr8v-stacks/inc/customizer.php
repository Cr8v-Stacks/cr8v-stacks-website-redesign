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
    _cr8v_img($wp_customize, 'abt_dp_mascot', 'cr8v_abt_dp', 'Dev Playground Mascot Media', get_template_directory_uri() . '/assets/img/dev_mascot.jpg');
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
    _cr8v_text($wp_customize, 'abt_plr_c3_label', 'cr8v_abt_pillars', 'Card 3 Label', 'Conversion Velocity');
    _cr8v_text($wp_customize, 'abt_plr_c3_num', 'cr8v_abt_pillars', 'Card 3 Metric', '+184% Conversion Lift');
    _cr8v_textarea($wp_customize, 'abt_plr_c3_sub', 'cr8v_abt_pillars', 'Card 3 Description', 'Engineered user paths and friction-free UI architectures that turn passive visitors into active high-ticket client inquiries.');
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

    // ════════════════════════════════════════════════════════════════
    // PANEL: Services Page Settings (page-services.php)
    // ════════════════════════════════════════════════════════════════
    $wp_customize->add_panel('cr8v_services_panel', [
        'title'       => 'Services Page — Tropos Theme',
        'description' => 'Edit all 8 sections of the Services Overview Page (page-services.php) with selective refresh and live pencil shortcut icons.',
        'priority'    => 40,
    ]);

    // ── 1. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_srv_hero', '1. Hero Section', 'cr8v_services_panel', 10);
    _cr8v_text($wp_customize, 'srv_hero_eyebrow', 'cr8v_srv_hero', 'Category Eyebrow', 'Services');
    _cr8v_text($wp_customize, 'srv_hero_h1_part1', 'cr8v_srv_hero', 'Headline Part 1', 'Every ');
    _cr8v_text($wp_customize, 'srv_hero_h1_serif', 'cr8v_srv_hero', 'Headline Serif Word', 'layer');
    _cr8v_text($wp_customize, 'srv_hero_h1_part2', 'cr8v_srv_hero', 'Headline Part 2', ' of your presence, ');
    _cr8v_text($wp_customize, 'srv_hero_h1_gradient', 'cr8v_srv_hero', 'Headline Gradient Text', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'srv_hero_intro', 'cr8v_srv_hero', 'Intro Paragraph', 'Cr8v Stacks handles every layer of your presence — brand positioning, design, the build itself, and the growth work after launch. Whichever platform your business runs on (WordPress, Shopify, WooCommerce, or a fully custom stack) the build is only one layer. We start with who you\'re competing against and end with the campaigns that bring people to the site we just built.');
    _cr8v_text($wp_customize, 'srv_hero_cta1_text', 'cr8v_srv_hero', 'Primary CTA Label', 'See What We Build →');
    _cr8v_text($wp_customize, 'srv_hero_cta1_url', 'cr8v_srv_hero', 'Primary CTA Link', '#primary-service-6cards');
    _cr8v_text($wp_customize, 'srv_hero_cta2_text', 'cr8v_srv_hero', 'Ghost CTA Label', 'Get a Quote →');
    _cr8v_text($wp_customize, 'srv_hero_cta2_url', 'cr8v_srv_hero', 'Ghost CTA Link', '/discovery-call/');
    _cr8v_text($wp_customize, 'srv_hero_pill1', 'cr8v_srv_hero', 'Pill 1', 'WordPress');
    _cr8v_text($wp_customize, 'srv_hero_pill2', 'cr8v_srv_hero', 'Pill 2', 'Shopify');
    _cr8v_text($wp_customize, 'srv_hero_pill3', 'cr8v_srv_hero', 'Pill 3', 'WooCommerce');
    _cr8v_text($wp_customize, 'srv_hero_pill4', 'cr8v_srv_hero', 'Pill 4', 'Custom Code');
    _cr8v_text($wp_customize, 'srv_hero_pill5', 'cr8v_srv_hero', 'Pill 5', 'AI MVP');

    // ── 2. PRIMARY SERVICE SHOWCASE (6-CARD GRID) ──
    _cr8v_section($wp_customize, 'cr8v_srv_primary', '2. Primary Service 6-Card Grid', 'cr8v_services_panel', 20);
    _cr8v_text($wp_customize, 'srv_primary_label', 'cr8v_srv_primary', 'Header Eyebrow', 'PRIMARY SERVICE // 01');
    _cr8v_text($wp_customize, 'srv_primary_h2_part1', 'cr8v_srv_primary', 'Title Line 1', 'Web Design &');
    _cr8v_text($wp_customize, 'srv_primary_h2_part2', 'cr8v_srv_primary', 'Title Line 2 (Emphasized)', 'Development Stacks');
    _cr8v_textarea($wp_customize, 'srv_primary_desc', 'cr8v_srv_primary', 'Intro Description', 'One senior engineering team, every modern web stack. Whichever foundation your business runs on — WordPress, Shopify, WooCommerce, or custom PHP/JS — we engineer lightweight, high-speed digital platforms tuned for sub-1.2s speeds and direct revenue conversion.');

    // Card 1
    _cr8v_text($wp_customize, 'srv_card1_num', 'cr8v_srv_primary', 'Card 1 Number Tag', '01 / WORDPRESS');
    _cr8v_text($wp_customize, 'srv_card1_title', 'cr8v_srv_primary', 'Card 1 Title', 'WORDPRESS, NO-CODE');
    _cr8v_textarea($wp_customize, 'srv_card1_desc', 'cr8v_srv_primary', 'Card 1 Description', 'Fully custom themes built on Elementor and native block engines. Hand-written PHP templates ensure 95+ PageSpeed scores while remaining 100% editable by your non-technical team without touching line one of code.');
    _cr8v_text($wp_customize, 'srv_card1_btn_text', 'cr8v_srv_primary', 'Card 1 Button Text', 'Explore WordPress →');
    _cr8v_text($wp_customize, 'srv_card1_btn_url', 'cr8v_srv_primary', 'Card 1 Button Link', '../WordPress Service Page/index.html');

    // Card 2
    _cr8v_text($wp_customize, 'srv_card2_num', 'cr8v_srv_primary', 'Card 2 Number Tag', '02 / SHOPIFY');
    _cr8v_text($wp_customize, 'srv_card2_title', 'cr8v_srv_primary', 'Card 2 Title', 'SHOPIFY STOREFRONTS');
    _cr8v_textarea($wp_customize, 'srv_card2_desc', 'cr8v_srv_primary', 'Card 2 Description', 'Conversion-focused Liquid storefronts engineered from a blank file. We streamline third-party apps, optimize checkout velocity, and maximize product discovery across all desktop and mobile devices.');
    _cr8v_text($wp_customize, 'srv_card2_btn_text', 'cr8v_srv_primary', 'Card 2 Button Text', 'Explore Shopify →');
    _cr8v_text($wp_customize, 'srv_card2_btn_url', 'cr8v_srv_primary', 'Card 2 Button Link', '../Shopify Service Page/index.html');

    // Card 3
    _cr8v_text($wp_customize, 'srv_card3_num', 'cr8v_srv_primary', 'Card 3 Number Tag', '03 / WOOCOMMERCE');
    _cr8v_text($wp_customize, 'srv_card3_title', 'cr8v_srv_primary', 'Card 3 Title', 'WOOCOMMERCE CONTROL');
    _cr8v_textarea($wp_customize, 'srv_card3_desc', 'cr8v_srv_primary', 'Card 3 Description', 'Total e-commerce freedom on your own WordPress hosting. Custom multi-step checkout flows, automated tax logic, multi-currency support, and zero third-party SaaS transaction fees.');
    _cr8v_text($wp_customize, 'srv_card3_btn_text', 'cr8v_srv_primary', 'Card 3 Button Text', 'Explore WooCommerce →');
    _cr8v_text($wp_customize, 'srv_card3_btn_url', 'cr8v_srv_primary', 'Card 3 Button Link', '../WooCommerce Service Page/index.html');

    // Card 4
    _cr8v_text($wp_customize, 'srv_card4_num', 'cr8v_srv_primary', 'Card 4 Number Tag', '04 / CUSTOM DEV');
    _cr8v_text($wp_customize, 'srv_card4_title', 'cr8v_srv_primary', 'Card 4 Title', 'BESPOKE SOFTWARE');
    _cr8v_textarea($wp_customize, 'srv_card4_desc', 'cr8v_srv_primary', 'Card 4 Description', 'Tailored web applications, internal dashboards, and custom APIs built from line one without SaaS dependencies — engineered around your business operations with 100% client code ownership.');
    _cr8v_text($wp_customize, 'srv_card4_btn_text', 'cr8v_srv_primary', 'Card 4 Button Text', 'Explore Custom Dev →');
    _cr8v_text($wp_customize, 'srv_card4_btn_url', 'cr8v_srv_primary', 'Card 4 Button Link', '../Custom Dev Service Page/index.html');

    // Card 5
    _cr8v_text($wp_customize, 'srv_card5_num', 'cr8v_srv_primary', 'Card 5 Number Tag', '05 / AI MVP');
    _cr8v_text($wp_customize, 'srv_card5_title', 'cr8v_srv_primary', 'Card 5 Title', 'AI PRODUCT MVPS');
    _cr8v_textarea($wp_customize, 'srv_card5_desc', 'cr8v_srv_primary', 'Card 5 Description', 'Production-grade AI applications built to validate early business concepts with real working software — integrating OpenAI, Claude, and custom model pipelines in weeks, not quarters.');
    _cr8v_text($wp_customize, 'srv_card5_btn_text', 'cr8v_srv_primary', 'Card 5 Button Text', 'Explore AI MVP →');
    _cr8v_text($wp_customize, 'srv_card5_btn_url', 'cr8v_srv_primary', 'Card 5 Button Link', '../AI MVP Service Page/index.html');

    // Card 6
    _cr8v_text($wp_customize, 'srv_card6_num', 'cr8v_srv_primary', 'Card 6 Number Tag', '06 / REDESIGNS');
    _cr8v_text($wp_customize, 'srv_card6_title', 'cr8v_srv_primary', 'Card 6 Title', 'PLATFORM REDESIGNS');
    _cr8v_textarea($wp_customize, 'srv_card6_desc', 'cr8v_srv_primary', 'Card 6 Description', 'Frontend modernization and core code refactoring for slow WordPress sites, proprietary web portals, and template-locked e-commerce storefronts seeking instant speed and conversion boosts.');
    _cr8v_text($wp_customize, 'srv_card6_btn_text', 'cr8v_srv_primary', 'Card 6 Button Text', 'Explore Redesigns →');
    _cr8v_text($wp_customize, 'srv_card6_btn_url', 'cr8v_srv_primary', 'Card 6 Button Link', '../Web Design Service Page/index.html');

    // ── 3. GROWTH & STRATEGY LAYER ──
    _cr8v_section($wp_customize, 'cr8v_srv_growth', '3. Growth & Strategy Layer', 'cr8v_services_panel', 30);
    _cr8v_text($wp_customize, 'srv_growth_label', 'cr8v_srv_growth', 'Section Label', 'Growth & Strategy');
    _cr8v_text($wp_customize, 'srv_growth_h2', 'cr8v_srv_growth', 'Section Title', 'The Growth & Strategy Layer');
    _cr8v_textarea($wp_customize, 'srv_growth_desc', 'cr8v_srv_growth', 'Section Subtitle', 'Positioning, visual identity, technical search, and acquisition funnels — the strategic capabilities that fuel your build.');

    _cr8v_text($wp_customize, 'srv_growth1_num', 'cr8v_srv_growth', 'Item 1 Number', '01');
    _cr8v_text($wp_customize, 'srv_growth1_title', 'cr8v_srv_growth', 'Item 1 Title', 'Brand Identity');
    _cr8v_textarea($wp_customize, 'srv_growth1_tagline', 'cr8v_srv_growth', 'Item 1 Tagline', 'Bespoke vector logo systems, curated typography hierarchies, and color guidelines built for scale');
    _cr8v_text($wp_customize, 'srv_growth1_btn_text', 'cr8v_srv_growth', 'Item 1 Button Text', 'Explore →');
    _cr8v_text($wp_customize, 'srv_growth1_url', 'cr8v_srv_growth', 'Item 1 Link URL', '../Brand Identity Design Service Page/index.html');

    _cr8v_text($wp_customize, 'srv_growth2_num', 'cr8v_srv_growth', 'Item 2 Number', '02');
    _cr8v_text($wp_customize, 'srv_growth2_title', 'cr8v_srv_growth', 'Item 2 Title', 'Brand Strategy');
    _cr8v_textarea($wp_customize, 'srv_growth2_tagline', 'cr8v_srv_growth', 'Item 2 Tagline', 'Market positioning matrices, competitive moat analysis, and messaging frameworks that guide your build');
    _cr8v_text($wp_customize, 'srv_growth2_btn_text', 'cr8v_srv_growth', 'Item 2 Button Text', 'Explore →');
    _cr8v_text($wp_customize, 'srv_growth2_url', 'cr8v_srv_growth', 'Item 2 Link URL', '../Brand Strategy Service Page/index.html');

    _cr8v_text($wp_customize, 'srv_growth3_num', 'cr8v_srv_growth', 'Item 3 Number', '03');
    _cr8v_text($wp_customize, 'srv_growth3_title', 'cr8v_srv_growth', 'Item 3 Title', 'SEO & Content');
    _cr8v_textarea($wp_customize, 'srv_growth3_tagline', 'cr8v_srv_growth', 'Item 3 Tagline', 'Technical schema markup, Screaming Frog audits, entity SEO, and semantic keyword architecture');
    _cr8v_text($wp_customize, 'srv_growth3_btn_text', 'cr8v_srv_growth', 'Item 3 Button Text', 'Explore →');
    _cr8v_text($wp_customize, 'srv_growth3_url', 'cr8v_srv_growth', 'Item 3 Link URL', '../SEO and Content Service Page/index.html');

    _cr8v_text($wp_customize, 'srv_growth4_num', 'cr8v_srv_growth', 'Item 4 Number', '04');
    _cr8v_text($wp_customize, 'srv_growth4_title', 'cr8v_srv_growth', 'Item 4 Title', 'Digital Marketing');
    _cr8v_textarea($wp_customize, 'srv_growth4_tagline', 'cr8v_srv_growth', 'Item 4 Tagline', 'Meta Ads funnels, Google Ads acquisition, Klaviyo email flows, and conversion tracking infrastructure');
    _cr8v_text($wp_customize, 'srv_growth4_btn_text', 'cr8v_srv_growth', 'Item 4 Button Text', 'Explore →');
    _cr8v_text($wp_customize, 'srv_growth4_url', 'cr8v_srv_growth', 'Item 4 Link URL', '../Digital Marketing Service Page/index.html');

    _cr8v_text($wp_customize, 'srv_fan_left', 'cr8v_srv_growth', 'Fan Left Word', 'Position');
    _cr8v_text($wp_customize, 'srv_fan_center', 'cr8v_srv_growth', 'Fan Center Word', 'Schema');
    _cr8v_text($wp_customize, 'srv_fan_right', 'cr8v_srv_growth', 'Fan Right Word', 'ROAS');

    // ── 4. DELIVERABLES FOLDER DECK ──
    _cr8v_section($wp_customize, 'cr8v_srv_deck', '4. Agency Deliverables Folder Deck', 'cr8v_services_panel', 40);
    _cr8v_text($wp_customize, 'srv_deck_label', 'cr8v_srv_deck', 'Section Label', 'Agency Deliverables');
    _cr8v_text($wp_customize, 'srv_deck_h2_part1', 'cr8v_srv_deck', 'Title Part 1', 'What You ');
    _cr8v_text($wp_customize, 'srv_deck_h2_serif', 'cr8v_srv_deck', 'Title Serif Word', 'Get');
    _cr8v_textarea($wp_customize, 'srv_deck_desc', 'cr8v_srv_deck', 'Section Subtitle', 'Concrete, high-end agency deliverables engineered for your digital ecosystem — built from scratch by one unified studio.');

    // Card 1
    _cr8v_text($wp_customize, 'srv_deck1_tab', 'cr8v_srv_deck', 'Card 1 Tab Label', '01 // Strategy');
    _cr8v_text($wp_customize, 'srv_deck1_title', 'cr8v_srv_deck', 'Card 1 Title', 'Full-Funnel Strategic Positioning & Architecture');
    _cr8v_textarea($wp_customize, 'srv_deck1_desc', 'cr8v_srv_deck', 'Card 1 Description', 'Competitor matrix mapping, pricing scoping, customer persona profiling, and messaging frameworks that give your visual identity, codebase, and paid campaigns clear direction before line one of code.');
    _cr8v_text($wp_customize, 'srv_deck1_link_text', 'cr8v_srv_deck', 'Card 1 Link Text', 'Explore Strategy Deliverables →');
    _cr8v_text($wp_customize, 'srv_deck1_url', 'cr8v_srv_deck', 'Card 1 Link URL', '../Brand Strategy Service Page/index.html');
    _cr8v_img($wp_customize, 'srv_deck1_img', 'cr8v_srv_deck', 'Card 1 Image', 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop');

    // Card 2
    _cr8v_text($wp_customize, 'srv_deck2_tab', 'cr8v_srv_deck', 'Card 2 Tab Label', '02 // Engineering');
    _cr8v_text($wp_customize, 'srv_deck2_title', 'cr8v_srv_deck', 'Card 2 Title', 'High-Converting Liquid & PHP Codebase');
    _cr8v_textarea($wp_customize, 'srv_deck2_desc', 'cr8v_srv_deck', 'Card 2 Description', 'Lightweight starter base themes, custom Gutenberg block suites, bespoke Liquid sections, and zero-SaaS custom application code tuned for sub-1.2s load speeds and friction-free user conversions.');
    _cr8v_text($wp_customize, 'srv_deck2_link_text', 'cr8v_srv_deck', 'Card 2 Link Text', 'Explore Code Deliverables →');
    _cr8v_text($wp_customize, 'srv_deck2_url', 'cr8v_srv_deck', 'Card 2 Link URL', '../Web Design Service Page/index.html');
    _cr8v_img($wp_customize, 'srv_deck2_img', 'cr8v_srv_deck', 'Card 2 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop');

    // Card 3
    _cr8v_text($wp_customize, 'srv_deck3_tab', 'cr8v_srv_deck', 'Card 3 Tab Label', '03 // Plugins');
    _cr8v_text($wp_customize, 'srv_deck3_title', 'cr8v_srv_deck', 'Card 3 Title', 'Proprietary Agency Plugins & API Wiring');
    _cr8v_textarea($wp_customize, 'srv_deck3_desc', 'cr8v_srv_deck', 'Card 3 Description', 'Custom-coded WordPress and WooCommerce extension plugins built in-house for specialized features, native payment gateway wiring (Stripe, Paystack), and vector AI integrations without third-party plugin overhead.');
    _cr8v_text($wp_customize, 'srv_deck3_link_text', 'cr8v_srv_deck', 'Card 3 Link Text', 'Explore Plugin Engineering →');
    _cr8v_text($wp_customize, 'srv_deck3_url', 'cr8v_srv_deck', 'Card 3 Link URL', '../Custom Dev Service Page/index.html');
    _cr8v_img($wp_customize, 'srv_deck3_img', 'cr8v_srv_deck', 'Card 3 Image', 'https://images.unsplash.com/photo-1472851294608-062f824d29cc?q=80&w=800&auto=format&fit=crop');

    // Card 4
    _cr8v_text($wp_customize, 'srv_deck4_tab', 'cr8v_srv_deck', 'Card 4 Tab Label', '04 // Organic');
    _cr8v_text($wp_customize, 'srv_deck4_title', 'cr8v_srv_deck', 'Card 4 Title', 'Technical Schema & Semantic Keyword Infrastructure');
    _cr8v_textarea($wp_customize, 'srv_deck4_desc', 'cr8v_srv_deck', 'Card 4 Description', 'Screaming Frog crawl auditing, entity SEO optimization, automated XML sitemaps, canonical redirect mapping, and Core Web Vitals tuning for long-term search dominance across Google.');
    _cr8v_text($wp_customize, 'srv_deck4_link_text', 'cr8v_srv_deck', 'Card 4 Link Text', 'Explore Search Infrastructure →');
    _cr8v_text($wp_customize, 'srv_deck4_url', 'cr8v_srv_deck', 'Card 4 Link URL', '../SEO and Content Service Page/index.html');
    _cr8v_img($wp_customize, 'srv_deck4_img', 'cr8v_srv_deck', 'Card 4 Image', 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=800&auto=format&fit=crop');

    // Card 5
    _cr8v_text($wp_customize, 'srv_deck5_tab', 'cr8v_srv_deck', 'Card 5 Tab Label', '05 // Retainer');
    _cr8v_text($wp_customize, 'srv_deck5_title', 'cr8v_srv_deck', 'Card 5 Title', 'Post-Launch Warranty & Active Growth Retainer');
    _cr8v_textarea($wp_customize, 'srv_deck5_desc', 'cr8v_srv_deck', 'Card 5 Description', '30-day post-launch code warranty, dedicated monthly developer support hours, continuous speed auditing, security patches, and active ad campaign optimization to keep your platform scaling.');
    _cr8v_text($wp_customize, 'srv_deck5_link_text', 'cr8v_srv_deck', 'Card 5 Link Text', 'Explore Growth Retainers →');
    _cr8v_text($wp_customize, 'srv_deck5_url', 'cr8v_srv_deck', 'Card 5 Link URL', 'https://cr8vstacks.com/contact/?model=retainer');
    _cr8v_img($wp_customize, 'srv_deck5_img', 'cr8v_srv_deck', 'Card 5 Image', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop');

    // ── 5. FLANKING CARDS (WHY IT WORKS) ──
    _cr8v_section($wp_customize, 'cr8v_srv_flank', '5. Why It Works Flanking Cards', 'cr8v_services_panel', 50);
    _cr8v_text($wp_customize, 'srv_flank_label', 'cr8v_srv_flank', 'Section Label', 'Why It Works');
    _cr8v_text($wp_customize, 'srv_flank_h2', 'cr8v_srv_flank', 'Section Title', 'Built around your business, not a template');

    _cr8v_text($wp_customize, 'srv_flank1_step', 'cr8v_srv_flank', 'Card 1 Step/Tag', 'Any Stack // Standard');
    _cr8v_text($wp_customize, 'srv_flank1_title', 'cr8v_srv_flank', 'Card 1 Title', 'One Standard');
    _cr8v_textarea($wp_customize, 'srv_flank1_desc', 'cr8v_srv_flank', 'Card 1 Description', 'WordPress, Shopify, WooCommerce, or custom — the same high-performance engineering standard applies no matter what it\'s built on.');

    _cr8v_text($wp_customize, 'srv_flank2_step', 'cr8v_srv_flank', 'Card 2 Step/Tag', 'Every Build // Speed');
    _cr8v_text($wp_customize, 'srv_flank2_title', 'cr8v_srv_flank', 'Card 2 Title', 'Performance');
    _cr8v_textarea($wp_customize, 'srv_flank2_desc', 'cr8v_srv_flank', 'Card 2 Description', 'Engineered for load speed and search ranking from the first line of code, not optimized after the fact.');

    _cr8v_text($wp_customize, 'srv_flank3_step', 'cr8v_srv_flank', 'Card 3 Step/Tag', 'What You Get // Control');
    _cr8v_text($wp_customize, 'srv_flank3_title', 'cr8v_srv_flank', 'Card 3 Title', 'Full Ownership');
    _cr8v_textarea($wp_customize, 'srv_flank3_desc', 'cr8v_srv_flank', 'Card 3 Description', 'Your code, your hosting, your data. No proprietary lock-in that leaves you stuck if you ever want to move on.');

    // ── 6. PRICING & SCOPE ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_srv_pricing', '6. Pricing Models & Scope Estimator', 'cr8v_services_panel', 60);
    _cr8v_text($wp_customize, 'srv_price_label', 'cr8v_srv_pricing', 'Section Label', 'Pricing Models');
    _cr8v_text($wp_customize, 'srv_price_h2_part1', 'cr8v_srv_pricing', 'Title Part 1', 'How We ');
    _cr8v_text($wp_customize, 'srv_price_h2_serif', 'cr8v_srv_pricing', 'Title Serif Word', 'Work');
    _cr8v_text($wp_customize, 'srv_price_h2_part2', 'cr8v_srv_pricing', 'Title Part 2', ' Together');
    _cr8v_textarea($wp_customize, 'srv_price_lead', 'cr8v_srv_pricing', 'Section Lead Paragraph', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // Box 1
    _cr8v_text($wp_customize, 'srv_price1_type', 'cr8v_srv_pricing', 'Box 1 Model Type', 'Ongoing Support');
    _cr8v_text($wp_customize, 'srv_price1_title', 'cr8v_srv_pricing', 'Box 1 Title', 'Growth Retainer');
    _cr8v_text($wp_customize, 'srv_price1_amount', 'cr8v_srv_pricing', 'Box 1 Amount', '$950');
    _cr8v_text($wp_customize, 'srv_price1_unit', 'cr8v_srv_pricing', 'Box 1 Unit', '/mo');
    _cr8v_textarea($wp_customize, 'srv_price1_desc', 'cr8v_srv_pricing', 'Box 1 Description', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.');
    _cr8v_text($wp_customize, 'srv_price1_f1', 'cr8v_srv_pricing', 'Box 1 Feature 1', 'Dedicated monthly support hours block');
    _cr8v_text($wp_customize, 'srv_price1_f2', 'cr8v_srv_pricing', 'Box 1 Feature 2', 'Monthly speed audits & code optimizations');
    _cr8v_text($wp_customize, 'srv_price1_f3', 'cr8v_srv_pricing', 'Box 1 Feature 3', 'Design tweaks, copy updates & SEO execution');
    _cr8v_text($wp_customize, 'srv_price1_btn_text', 'cr8v_srv_pricing', 'Box 1 Button Text', 'Secure Retainer Slot');
    _cr8v_text($wp_customize, 'srv_price1_btn_url', 'cr8v_srv_pricing', 'Box 1 Button Link', 'https://cr8vstacks.com/contact/?model=retainer');

    // Box 2
    _cr8v_text($wp_customize, 'srv_price2_type', 'cr8v_srv_pricing', 'Box 2 Model Type', 'Fixed Scope');
    _cr8v_text($wp_customize, 'srv_price2_title', 'cr8v_srv_pricing', 'Box 2 Title', 'Fixed Projects');
    _cr8v_text($wp_customize, 'srv_price2_amount', 'cr8v_srv_pricing', 'Box 2 Amount', '$1,200');
    _cr8v_text($wp_customize, 'srv_price2_unit', 'cr8v_srv_pricing', 'Box 2 Unit', ' start');
    _cr8v_textarea($wp_customize, 'srv_price2_desc', 'cr8v_srv_pricing', 'Box 2 Description', 'A deep, focused design & code engagement with transparent scoping, clear milestones, and guaranteed delivery. Best for building a new custom site, e-commerce storefront, or AI MVP prototype.');
    _cr8v_text($wp_customize, 'srv_price2_f1', 'cr8v_srv_pricing', 'Box 2 Feature 1', 'Pre-project positioning & speed audit');
    _cr8v_text($wp_customize, 'srv_price2_f2', 'cr8v_srv_pricing', 'Box 2 Feature 2', 'Guaranteed milestones & delivery timeline');
    _cr8v_text($wp_customize, 'srv_price2_f3', 'cr8v_srv_pricing', 'Box 2 Feature 3', '95+ PageSpeed & SEO launch configuration');
    _cr8v_text($wp_customize, 'srv_price2_btn_text', 'cr8v_srv_pricing', 'Box 2 Button Text', 'Start A Project');
    _cr8v_text($wp_customize, 'srv_price2_btn_url', 'cr8v_srv_pricing', 'Box 2 Button Link', 'https://cr8vstacks.com/contact/?model=project');

    // Estimator
    _cr8v_text($wp_customize, 'srv_est_tag', 'cr8v_srv_pricing', 'Estimator Tag', 'Project Scope Estimator');
    _cr8v_text($wp_customize, 'srv_est_title', 'cr8v_srv_pricing', 'Estimator Title', 'Build Your Stack Estimate');
    _cr8v_textarea($wp_customize, 'srv_est_desc', 'cr8v_srv_pricing', 'Estimator Description', 'Select your desired setup below to calculate an immediate starting price range estimate for your project.');
    _cr8v_text($wp_customize, 'srv_est_g1_title', 'cr8v_srv_pricing', 'Estimator Group 1 Title', '1. Core Architecture');
    _cr8v_text($wp_customize, 'srv_est_g2_title', 'cr8v_srv_pricing', 'Estimator Group 2 Title', '2. Project Scale');
    _cr8v_text($wp_customize, 'srv_est_g3_title', 'cr8v_srv_pricing', 'Estimator Group 3 Title', '3. Growth Add-Ons');
    _cr8v_text($wp_customize, 'srv_est_res_label', 'cr8v_srv_pricing', 'Estimator Result Label', 'Estimated Starting Investment');
    _cr8v_text($wp_customize, 'srv_est_deliv_title', 'cr8v_srv_pricing', 'Estimator Deliverables Title', 'Included Deliverables:');
    _cr8v_text($wp_customize, 'srv_est_cta_text', 'cr8v_srv_pricing', 'Estimator CTA Button Text', 'Submit Scope Request');
    _cr8v_text($wp_customize, 'srv_est_calc_text', 'cr8v_srv_pricing', 'Estimator Calculator Link Text', 'Or build a custom stack with our Calculator →');
    _cr8v_text($wp_customize, 'srv_est_calc_url', 'cr8v_srv_pricing', 'Estimator Calculator Link URL', 'https://cr8vstacks.com/toolkits/website-cost-calculator/');

    // ── 7. COMMON QUESTIONS FAQ ACCORDION ──
    _cr8v_section($wp_customize, 'cr8v_srv_faq', '7. Common Questions FAQ Accordion', 'cr8v_services_panel', 70);
    _cr8v_text($wp_customize, 'srv_faq_eyebrow', 'cr8v_srv_faq', 'Aside Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'srv_faq_h2', 'cr8v_srv_faq', 'Aside Title', 'Questions, Answered Honestly');
    _cr8v_textarea($wp_customize, 'srv_faq_sub', 'cr8v_srv_faq', 'Aside Subtitle', 'Clear answers to common questions about our design, development, and marketing processes.');
    _cr8v_text($wp_customize, 'srv_faq_cta_text', 'cr8v_srv_faq', 'Aside CTA Button Text', 'Talk to us');
    _cr8v_text($wp_customize, 'srv_faq_cta_url', 'cr8v_srv_faq', 'Aside CTA Button Link', '/discovery-call/');

    $srv_faqs = [
        1 => ['q' => 'How much does it cost to build a professional website?', 'a' => 'Our custom builds start from $1,200 for single-page setups and scale depending on the platform, page count, and feature complexity. We evaluate your scope beforehand to give a firm starting price estimate that matches exactly what you need without hidden fees.'],
        2 => ['q' => 'How long does it take to design and build a website?', 'a' => 'A standard landing page or simple build takes 2 to 3 weeks. Custom portals, high-end e-commerce configurations, or AI MVP builds typically span 4 to 8 weeks. We define clear milestones and release live progress links during each stage so you always know the exact status.'],
        3 => ['q' => 'What web design and development services do you offer?', 'a' => 'We build custom WordPress sites (no-code Gutenberg or custom code blocks), custom Shopify themes, WooCommerce stores, custom PHP/JS applications, and AI MVP prototypes. We also provide brand identity guidelines, technical SEO Audits, and digital marketing retainer setups.'],
        4 => ['q' => 'Do you build websites on WordPress, Shopify, or both?', 'a' => 'We build on both depending on your operational goals. If you need complete design control, hosting ownership, and low long-term software overhead, we build on WordPress (or WooCommerce). If you want hands-off hosted infrastructure, speed of deployment, and a simpler backend out of the box, we build on Shopify using custom Liquid templates.'],
        5 => ['q' => 'Which payment gateways do you integrate into websites?', 'a' => 'We support and integrate all major international and regional payment processors, including Stripe, PayPal, Lemon Squeezy, Paystack, and Flutterwave. The integrations are wired natively at the code level to guarantee clean, secure user experiences.'],
        6 => ['q' => 'Can you redesign or rebuild an existing website?', 'a' => 'Yes. We handle structural migrations and design revamps. We preserve your existing content, customer data, and SEO indexing structures through mapping and redirects so your traffic does not drop upon rebuilding.'],
        7 => ['q' => 'Do you offer SEO as part of the website build?', 'a' => 'Yes. Every project includes basic technical SEO setup: schema mapping, canonical URL structures, semantic coding, sitemap submission, and fast loading performance. We also offer advanced SEO strategy packages covering content strategy and keyword alignment.'],
        8 => ['q' => 'What ongoing support do you offer after a website goes live?', 'a' => 'Every build includes a 30-day post-launch warranty cover window to fix unexpected code issues. Afterward, you can sign up for our monthly Growth Retainer ($950/mo) for dedicated developer hours, technical maintenance, updates, SEO execution, and active copy support.'],
        9 => ['q' => 'Do you work with early-stage startups and new businesses?', 'a' => 'Some of our best work has been with fresh startups that need help articulating what they\'re building before they go to market. If you\'ve got a business or product and need to explain it clearly to customers, investors, or partners, we can help.'],
        10 => ['q' => 'How much does it cost to work with Cr8v Stacks?', 'a' => 'We scope projects individually after learning about your specific requirements and goals, with fixed-scope engagements starting from $1,200. Alternatively, you can engage with us on a Growth Retainer basis starting at $950/month for dedicated design, development, and active growth support.'],
        11 => ['q' => 'What makes our approach different?', 'a' => 'Everything we do comes back to one thing: clarity of communication. We distill complex products and brands down to their essence — what they do, why it matters, and how they help. No jargon, no fluff, just clean, impactful execution.'],
        12 => ['q' => 'What do we think about AI?', 'a' => 'It\'s cool (environmental and ethical issues nonwithstanding). However, it is not a replacement for raw human craftsmanship — it\'s not better than us, but in some instances it helps us work more efficiently and do better work. And if one day it is better than us, we\'ll close up shop.'],
        13 => ['q' => 'Why should I hire Cr8v Stacks over freelancers?', 'a' => 'Freelancers can obviously be great, especially for specific tasks. However, an agency like Cr8v Stacks gives you a full team with diverse expertise — strategy, design, development, and project management — all collaborating under one system. You get consistent availability, quality control, and the capacity to scale quickly. With freelancers, you\'re often coordinating multiple people yourself, which can slow things down and create gaps in accountability.'],
        14 => ['q' => 'What does "Cr8v Stacks" mean?', 'a' => 'We believe design and engineering should never be separated. "Cr8v" represents our focus on high-fidelity user experience and clear storytelling, while "Stacks" represents our deep technical expertise in full-stack architecture and clean code. Together, it means we build digital products that look stunning and perform flawlessly.']
    ];

    for ($q = 1; $q <= 14; $q++) {
        _cr8v_text($wp_customize, "srv_faq{$q}_q", 'cr8v_srv_faq', "FAQ {$q} Question", $srv_faqs[$q]['q']);
        _cr8v_textarea($wp_customize, "srv_faq{$q}_a", 'cr8v_srv_faq', "FAQ {$q} Answer", $srv_faqs[$q]['a']);
    }

    // ── 8. WOOCOMMERCE VS SHOPIFY MATRIX ──
    _cr8v_section($wp_customize, 'cr8v_srv_vs', '8. WooCommerce vs Shopify Matrix', 'cr8v_services_panel', 80);
    _cr8v_text($wp_customize, 'srv_vs_label', 'cr8v_srv_vs', 'Section Eyebrow', 'Choosing Your Platform');
    _cr8v_text($wp_customize, 'srv_vs_h2', 'cr8v_srv_vs', 'Section Title', 'WooCommerce or Shopify?');
    _cr8v_textarea($wp_customize, 'srv_vs_lead', 'cr8v_srv_vs', 'Section Subtitle', 'Both are excellent platforms. The right one depends on what you\'re optimizing for — pick a priority and we\'ll highlight what matters most.');
    _cr8v_text($wp_customize, 'srv_vs_btn1', 'cr8v_srv_vs', 'Priority Button 1', 'Speed to Launch');
    _cr8v_text($wp_customize, 'srv_vs_btn2', 'cr8v_srv_vs', 'Priority Button 2', 'Full Customization');
    _cr8v_text($wp_customize, 'srv_vs_btn3', 'cr8v_srv_vs', 'Priority Button 3', 'Lower Ongoing Cost');
    _cr8v_text($wp_customize, 'srv_vs_btn4', 'cr8v_srv_vs', 'Priority Button 4', 'Enterprise Scale');

    _cr8v_text($wp_customize, 'srv_vs_r1_c1', 'cr8v_srv_vs', 'Row 1 Criteria', 'Setup Speed');
    _cr8v_textarea($wp_customize, 'srv_vs_r1_c2', 'cr8v_srv_vs', 'Row 1 Shopify', 'Hosted infrastructure means fewer moving parts to configure before launch.<span class="c8srv-vs-winner">Faster to launch</span>');
    _cr8v_textarea($wp_customize, 'srv_vs_r1_c3', 'cr8v_srv_vs', 'Row 1 WooCommerce', 'Requires hosting, security, and plugin setup before you\'re live.');

    _cr8v_text($wp_customize, 'srv_vs_r2_c1', 'cr8v_srv_vs', 'Row 2 Criteria', 'Customization Depth');
    _cr8v_textarea($wp_customize, 'srv_vs_r2_c2', 'cr8v_srv_vs', 'Row 2 Shopify', 'Theme and app-level customization within Shopify\'s platform rules.');
    _cr8v_textarea($wp_customize, 'srv_vs_r2_c3', 'cr8v_srv_vs', 'Row 2 WooCommerce', 'Full code access — no ceiling on how deep you can customize.<span class="c8srv-vs-winner">Deepest control</span>');

    _cr8v_text($wp_customize, 'srv_vs_r3_c1', 'cr8v_srv_vs', 'Row 3 Criteria', 'Hosting & Data Control');
    _cr8v_textarea($wp_customize, 'srv_vs_r3_c2', 'cr8v_srv_vs', 'Row 3 Shopify', 'Hosted by Shopify — simple, but your store lives on their infrastructure.');
    _cr8v_textarea($wp_customize, 'srv_vs_r3_c3', 'cr8v_srv_vs', 'Row 3 WooCommerce', 'Self-hosted on infrastructure you choose and fully own.<span class="c8srv-vs-winner">Full ownership</span>');

    _cr8v_text($wp_customize, 'srv_vs_r4_c1', 'cr8v_srv_vs', 'Row 4 Criteria', 'Ongoing Platform Cost');
    _cr8v_textarea($wp_customize, 'srv_vs_r4_c2', 'cr8v_srv_vs', 'Row 4 Shopify', 'Predictable monthly plan; costs scale with add-on apps.');
    _cr8v_textarea($wp_customize, 'srv_vs_r4_c3', 'cr8v_srv_vs', 'Row 4 WooCommerce', 'No platform fee — costs come from hosting and plugins instead.');

    _cr8v_text($wp_customize, 'srv_vs_r5_c1', 'cr8v_srv_vs', 'Row 5 Criteria', 'App & Plugin Ecosystem');
    _cr8v_textarea($wp_customize, 'srv_vs_r5_c2', 'cr8v_srv_vs', 'Row 5 Shopify', 'Large, polished app store with consistent quality standards.<span class="c8srv-vs-winner">Most mature</span>');
    _cr8v_textarea($wp_customize, 'srv_vs_r5_c3', 'cr8v_srv_vs', 'Row 5 WooCommerce', 'Massive plugin library, with more variance in code quality.');

    _cr8v_text($wp_customize, 'srv_vs_r6_c1', 'cr8v_srv_vs', 'Row 6 Criteria', 'Enterprise Scalability');
    _cr8v_textarea($wp_customize, 'srv_vs_r6_c2', 'cr8v_srv_vs', 'Row 6 Shopify', 'Shopify Plus supports high-volume, multi-storefront operations.');
    _cr8v_textarea($wp_customize, 'srv_vs_r6_c3', 'cr8v_srv_vs', 'Row 6 WooCommerce', 'Scales fully custom — the ceiling is whatever we build to.');

    _cr8v_textarea($wp_customize, 'srv_vs_note', 'cr8v_srv_vs', 'Table Note', 'Both platforms are genuinely solid choices — the table above highlights trade-offs, not a verdict. We\'ll help you land on the right one during a positioning audit.');

    /* ════════════════════════════════════════════════════════════════
       SERVICE PAGE — WEB DESIGN & UX PANEL
       ════════════════════════════════════════════════════════════════ */
    $wp_customize->add_panel('cr8v_swd_panel', [
        'title'       => __('CR8V Service — Web Design & UX', 'cr8v-stacks'),
        'priority'    => 33,
        'description' => __('Manage all copy, headlines, cards, FAQs, and links for Web Design & UX Service Page.', 'cr8v-stacks'),
    ]);

    // Section 1: Hero
    $wp_customize->add_section('cr8v_swd_hero', ['title' => __('01. Hero Section', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_hero_eyebrow', 'cr8v_swd_hero', 'Hero Eyebrow', 'Strategic Interface & User Experience Engineering');
    _cr8v_text($wp_customize, 'swd_hero_h1_part1', 'cr8v_swd_hero', 'Headline Part 1', 'Conversion-Driven ');
    _cr8v_text($wp_customize, 'swd_hero_h1_serif', 'cr8v_swd_hero', 'Headline Serif (Italic)', 'Web Design & UX');
    _cr8v_textarea($wp_customize, 'swd_hero_intro', 'cr8v_swd_hero', 'Hero Intro Paragraph', 'Bespoke website design and development engineered for B2B, SaaS, and e-commerce brands. From initial visual architecture to custom WordPress, Shopify, and WooCommerce builds, we engineer fast, search-optimized web platforms built for long-term growth.');
    _cr8v_text($wp_customize, 'swd_hero_cta1_text', 'cr8v_swd_hero', 'Primary CTA Button Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'swd_hero_cta1_url', 'cr8v_swd_hero', 'Primary CTA URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'swd_hero_cta2_text', 'cr8v_swd_hero', 'Secondary CTA Button Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'swd_hero_cta2_url', 'cr8v_swd_hero', 'Secondary CTA URL', 'https://cr8vstacks.com/contact/');
    _cr8v_text($wp_customize, 'swd_hero_pill1', 'cr8v_swd_hero', 'Pill 1', 'WordPress');
    _cr8v_text($wp_customize, 'swd_hero_pill2', 'cr8v_swd_hero', 'Pill 2', 'Elementor');
    _cr8v_text($wp_customize, 'swd_hero_pill3', 'cr8v_swd_hero', 'Pill 3', 'Figma');
    _cr8v_text($wp_customize, 'swd_hero_pill4', 'cr8v_swd_hero', 'Pill 4', 'SEO');

    // Section 2: Why Custom Web Design
    $wp_customize->add_section('cr8v_swd_why', ['title' => __('02. Why Custom Web Design', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_why_label', 'cr8v_swd_why', 'Section Label', 'Why Custom Web Design');
    _cr8v_text($wp_customize, 'swd_why_h2', 'cr8v_swd_why', 'Section Title', 'Websites Designed For Conversion & Brand Authority');
    _cr8v_text($wp_customize, 'swd_why_card1_step', 'cr8v_swd_why', 'Card 1 Step', 'Strategy // First');
    _cr8v_text($wp_customize, 'swd_why_card1_title', 'cr8v_swd_why', 'Card 1 Title', 'Positioning-Led Interface Design');
    _cr8v_textarea($wp_customize, 'swd_why_card1_desc', 'cr8v_swd_why', 'Card 1 Description', 'Every layout is engineered around your market positioning, brand identity, and conversion goals before writing a single line of code.');
    _cr8v_text($wp_customize, 'swd_why_card2_step', 'cr8v_swd_why', 'Card 2 Step', 'UX // Optimization');
    _cr8v_text($wp_customize, 'swd_why_card2_title', 'cr8v_swd_why', 'Card 2 Title', 'Frictionless User Journeys');
    _cr8v_textarea($wp_customize, 'swd_why_card2_desc', 'cr8v_swd_why', 'Card 2 Description', 'Intuitive navigation, responsive viewports, and clear content hierarchies engineered across desktop and mobile devices.');
    _cr8v_text($wp_customize, 'swd_why_card3_step', 'cr8v_swd_why', 'Card 3 Step', 'System // Scalability');
    _cr8v_text($wp_customize, 'swd_why_card3_title', 'cr8v_swd_why', 'Card 3 Title', 'Multi-Platform Architecture');
    _cr8v_textarea($wp_customize, 'swd_why_card3_desc', 'cr8v_swd_why', 'Card 3 Description', 'Built seamlessly across WordPress, Elementor, Shopify, WooCommerce, or custom PHP/React frameworks to match your tech stack.');
    _cr8v_text($wp_customize, 'swd_why_card4_step', 'cr8v_swd_why', 'Card 4 Step', 'SEO // Native');
    _cr8v_text($wp_customize, 'swd_why_card4_title', 'cr8v_swd_why', 'Card 4 Title', 'Built-In Technical SEO & Speed');
    _cr8v_textarea($wp_customize, 'swd_why_card4_desc', 'cr8v_swd_why', 'Card 4 Description', 'Clean semantic HTML markup, schema structures, and GTmetrix speed tuning folded directly into the design process.');

    // Section 3: Our Work Showcase
    $wp_customize->add_section('cr8v_swd_work', ['title' => __('03. Case Study Showcase', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_work_label', 'cr8v_swd_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'swd_work_h2_part1', 'cr8v_swd_work', 'Title Part 1', 'Built for Real Outcomes,');
    _cr8v_text($wp_customize, 'swd_work_h2_serif', 'cr8v_swd_work', 'Title Serif', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'swd_work_cs_client', 'cr8v_swd_work', 'Case Study Client Tag', 'Case Study — The Duch Apartments');
    _cr8v_text($wp_customize, 'swd_work_cs_title', 'cr8v_swd_work', 'Case Study Title', 'Website Design With SEO Built In From Day One');
    _cr8v_textarea($wp_customize, 'swd_work_cs_desc', 'cr8v_swd_work', 'Case Study Description', 'A full website design for The Duch Apartments, a Nigeria-based service apartment company — with SEO folded into the build from the start rather than added afterward.');
    _cr8v_text($wp_customize, 'swd_work_cs_stat1_val', 'cr8v_swd_work', 'Metric 1 Value', '1');
    _cr8v_text($wp_customize, 'swd_work_cs_stat1_lbl', 'cr8v_swd_work', 'Metric 1 Label', 'Design & SEO Handled As One');
    _cr8v_text($wp_customize, 'swd_work_cs_stat2_val', 'cr8v_swd_work', 'Metric 2 Value', '100%');
    _cr8v_text($wp_customize, 'swd_work_cs_stat2_lbl', 'cr8v_swd_work', 'Metric 2 Label', 'Custom Layout Base');
    _cr8v_text($wp_customize, 'swd_work_cs_pill1', 'cr8v_swd_work', 'Deliverable Pill 1', 'Apartment Catalog');
    _cr8v_text($wp_customize, 'swd_work_cs_pill2', 'cr8v_swd_work', 'Deliverable Pill 2', 'Direct Booking Engine');
    _cr8v_text($wp_customize, 'swd_work_cs_pill3', 'cr8v_swd_work', 'Deliverable Pill 3', 'Entity SEO Structure');
    _cr8v_text($wp_customize, 'swd_work_cs_pill4', 'cr8v_swd_work', 'Deliverable Pill 4', 'Local Search Optimization');
    _cr8v_text($wp_customize, 'swd_work_cs_btn_text', 'cr8v_swd_work', 'Case Study Link Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'swd_work_cs_btn_url', 'cr8v_swd_work', 'Case Study Link URL', '../the-duch-apartments.html');

    // Section 4: Deliverables Deck (What You Get)
    $wp_customize->add_section('cr8v_swd_deck', ['title' => __('04. Deliverables Folder Deck', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_deck_label', 'cr8v_swd_deck', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'swd_deck_h2_part1', 'cr8v_swd_deck', 'Title Part 1', 'Every layer of your website, ');
    _cr8v_text($wp_customize, 'swd_deck_h2_serif', 'cr8v_swd_deck', 'Title Serif', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'swd_deck_desc', 'cr8v_swd_deck', 'Lead Description', 'Custom site layouts, drag-and-drop page builders, responsive frontend engineering, and search-optimized architectures.');
    _cr8v_text($wp_customize, 'swd_deck1_tab', 'cr8v_swd_deck', 'Card 1 Tab', '01 // Strategy & UX');
    _cr8v_text($wp_customize, 'swd_deck1_title', 'cr8v_swd_deck', 'Card 1 Title', 'User Flow & Layout Blueprint');
    _cr8v_textarea($wp_customize, 'swd_deck1_desc', 'cr8v_swd_deck', 'Card 1 Description', 'Information architecture, visual hierarchy mapping, and wireframe layouts engineered for high conversion rates.');
    _cr8v_text($wp_customize, 'swd_deck2_tab', 'cr8v_swd_deck', 'Card 2 Tab', '02 // Visual UI');
    _cr8v_text($wp_customize, 'swd_deck2_title', 'cr8v_swd_deck', 'Card 2 Title', 'High-Fidelity Interface Design');
    _cr8v_textarea($wp_customize, 'swd_deck2_desc', 'cr8v_swd_deck', 'Card 2 Description', 'Bespoke typography, color palettes, custom UI components, and brand assets crafted for instant authority.');
    _cr8v_text($wp_customize, 'swd_deck3_tab', 'cr8v_swd_deck', 'Card 3 Tab', '03 // Multi-Platform');
    _cr8v_text($wp_customize, 'swd_deck3_title', 'cr8v_swd_deck', 'Card 3 Title', 'Custom CMS & Platform Buildout');
    _cr8v_textarea($wp_customize, 'swd_deck3_desc', 'cr8v_swd_deck', 'Card 3 Description', 'Flawless implementation across WordPress, Elementor, Shopify, or WooCommerce tailored precisely to your team\'s workflow.');
    _cr8v_text($wp_customize, 'swd_deck4_tab', 'cr8v_swd_deck', 'Card 4 Tab', '04 // Performance');
    _cr8v_text($wp_customize, 'swd_deck4_title', 'cr8v_swd_deck', 'Card 4 Title', 'Core Web Vitals & Technical SEO');
    _cr8v_textarea($wp_customize, 'swd_deck4_desc', 'cr8v_swd_deck', 'Card 4 Description', 'Image asset pipeline optimization, semantic HTML markup, fast mobile rendering, and GTmetrix speed tuning.');
    _cr8v_text($wp_customize, 'swd_deck5_tab', 'cr8v_swd_deck', 'Card 5 Tab', '05 // Autonomy');
    _cr8v_text($wp_customize, 'swd_deck5_title', 'cr8v_swd_deck', 'Card 5 Title', 'Drag-and-Drop Admin Autonomy');
    _cr8v_textarea($wp_customize, 'swd_deck5_desc', 'cr8v_swd_deck', 'Card 5 Description', 'Intuitive page editing setup and visual builder configuration so your team can edit content effortlessly without touching code.');

    // Section 5: Process & Approach
    $wp_customize->add_section('cr8v_swd_proc', ['title' => __('05. Process & Approach', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_proc_label', 'cr8v_swd_proc', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'swd_proc_h2', 'cr8v_swd_proc', 'Section Title', 'How We Approach Web Design & UX');
    _cr8v_textarea($wp_customize, 'swd_proc_desc', 'cr8v_swd_proc', 'Lead Description', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');
    _cr8v_text($wp_customize, 'swd_proc1_num', 'cr8v_swd_proc', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'swd_proc1_name', 'cr8v_swd_proc', 'Stage 1 Name', 'Discover');
    _cr8v_text($wp_customize, 'swd_proc1_tags', 'cr8v_swd_proc', 'Stage 1 Tags', 'Audits · Competitors · Goals');
    _cr8v_textarea($wp_customize, 'swd_proc1_desc', 'cr8v_swd_proc', 'Stage 1 Description', 'We audit your brand positioning, study competitive landscapes, and map conversion targets before designing layouts. We understand your users before creating visuals.');
    _cr8v_text($wp_customize, 'swd_proc2_num', 'cr8v_swd_proc', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'swd_proc2_name', 'cr8v_swd_proc', 'Stage 2 Name', 'Design');
    _cr8v_text($wp_customize, 'swd_proc2_tags', 'cr8v_swd_proc', 'Stage 2 Tags', 'UX · Figma · Styling');
    _cr8v_textarea($wp_customize, 'swd_proc2_desc', 'cr8v_swd_proc', 'Stage 2 Description', 'We craft custom Figma wireframes and high-fidelity interface mockups, pairing typography and brand colors for maximum visual credibility.');
    _cr8v_text($wp_customize, 'swd_proc3_num', 'cr8v_swd_proc', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'swd_proc3_name', 'cr8v_swd_proc', 'Stage 3 Name', 'Engineering');
    _cr8v_text($wp_customize, 'swd_proc3_tags', 'cr8v_swd_proc', 'Stage 3 Tags', 'WordPress · Shopify · WooCommerce');
    _cr8v_textarea($wp_customize, 'swd_proc3_desc', 'cr8v_swd_proc', 'Stage 3 Description', 'We build the live website across your target CMS (WordPress, Elementor, Shopify, WooCommerce, or Custom React/PHP) with clean code.');
    _cr8v_text($wp_customize, 'swd_proc4_num', 'cr8v_swd_proc', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'swd_proc4_name', 'cr8v_swd_proc', 'Stage 4 Name', 'Audit & Launch');
    _cr8v_text($wp_customize, 'swd_proc4_tags', 'cr8v_swd_proc', 'Stage 4 Tags', 'Speed · SEO 301s · Go Live');
    _cr8v_textarea($wp_customize, 'swd_proc4_desc', 'cr8v_swd_proc', 'Stage 4 Description', 'We run Core Web Vitals speed tests, audit mobile responsiveness, set up SEO 301 redirects, and execute a tested live launch.');

    // Section 6: Build Platform Options
    $wp_customize->add_section('cr8v_swd_plat', ['title' => __('06. Build Platform Options', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_plat_label', 'cr8v_swd_plat', 'Section Label', 'Build Platform Options');
    _cr8v_text($wp_customize, 'swd_plat_h2_part1', 'cr8v_swd_plat', 'Title Part 1', 'Where Web Design ');
    _cr8v_text($wp_customize, 'swd_plat_h2_serif', 'cr8v_swd_plat', 'Title Serif', 'Flows Into Code');
    _cr8v_textarea($wp_customize, 'swd_plat_desc', 'cr8v_swd_plat', 'Lead Description', 'Web design is the foundational blueprint of your digital platform. Once your visual architecture is locked, we build it directly on the platform that fits your business model:');
    _cr8v_text($wp_customize, 'swd_plat1_badge', 'cr8v_swd_plat', 'Platform 1 Badge', 'Platform // WordPress');
    _cr8v_text($wp_customize, 'swd_plat1_title', 'cr8v_swd_plat', 'Platform 1 Title', 'WordPress Development');
    _cr8v_textarea($wp_customize, 'swd_plat1_desc', 'cr8v_swd_plat', 'Platform 1 Description', 'If your team needs to edit content easily without touching code.');
    _cr8v_text($wp_customize, 'swd_plat2_badge', 'cr8v_swd_plat', 'Platform 2 Badge', 'Platform // Shopify');
    _cr8v_text($wp_customize, 'swd_plat2_title', 'cr8v_swd_plat', 'Platform 2 Title', 'Shopify Storefronts');
    _cr8v_textarea($wp_customize, 'swd_plat2_desc', 'cr8v_swd_plat', 'Platform 2 Description', 'If you\'re selling physical or digital products and want hosted infrastructure.');
    _cr8v_text($wp_customize, 'swd_plat3_badge', 'cr8v_swd_plat', 'Platform 3 Badge', 'Platform // WooCommerce');
    _cr8v_text($wp_customize, 'swd_plat3_title', 'cr8v_swd_plat', 'Platform 3 Title', 'WooCommerce Stores');
    _cr8v_textarea($wp_customize, 'swd_plat3_desc', 'cr8v_swd_plat', 'Platform 3 Description', 'If you want full ownership of your store\'s data, hosting, and custom plugins.');
    _cr8v_text($wp_customize, 'swd_plat4_badge', 'cr8v_swd_plat', 'Platform 4 Badge', 'Platform // Custom');
    _cr8v_text($wp_customize, 'swd_plat4_title', 'cr8v_swd_plat', 'Platform 4 Title', 'Custom Bespoke App');
    _cr8v_textarea($wp_customize, 'swd_plat4_desc', 'cr8v_swd_plat', 'Platform 4 Description', 'If nothing off-the-shelf fits what you\'re building and you need custom PHP/React.');
    _cr8v_textarea($wp_customize, 'swd_plat_footer_note', 'cr8v_swd_plat', 'Footer Note', 'Not sure which one? That\'s a normal question at this stage — tell us what you\'re building and we\'ll recommend the right platform as part of the design engagement.');
    _cr8v_text($wp_customize, 'swd_plat_cta_text', 'cr8v_swd_plat', 'CTA Button Text', 'Start a Design Scoping Call →');
    _cr8v_text($wp_customize, 'swd_plat_cta_url', 'cr8v_swd_plat', 'CTA Button URL', 'https://cr8vstacks.com/contact/?model=project&service=web-design');

    // Section 7: Project Catalog
    $wp_customize->add_section('cr8v_swd_cat', ['title' => __('07. Project Catalog', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_cat_label', 'cr8v_swd_cat', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'swd_cat_h2', 'cr8v_swd_cat', 'Section Title', 'Every Kind of Web Design & UX We Engineer');
    _cr8v_textarea($wp_customize, 'swd_cat_desc', 'cr8v_swd_cat', 'Lead Description', 'From SaaS product landing pages to enterprise web portals — hover to inspect the design stack.');
    _cr8v_text($wp_customize, 'swd_cat1_title', 'cr8v_swd_cat', 'Catalog 1 Title', 'B2B & Enterprise Web Design');
    _cr8v_textarea($wp_customize, 'swd_cat1_tagline', 'cr8v_swd_cat', 'Catalog 1 Tagline', 'High-credibility corporate sites, executive team profiles, investor relations portals, and multi-branch company hubs.');
    _cr8v_text($wp_customize, 'swd_cat2_title', 'cr8v_swd_cat', 'Catalog 2 Title', 'SaaS & Product Landing Pages');
    _cr8v_textarea($wp_customize, 'swd_cat2_tagline', 'cr8v_swd_cat', 'Catalog 2 Tagline', 'Product feature showcases, interactive pricing calculators, API documentation hubs, and high-converting lead funnels.');
    _cr8v_text($wp_customize, 'swd_cat3_title', 'cr8v_swd_cat', 'Catalog 3 Title', 'E-Commerce Storefront UI Design');
    _cr8v_textarea($wp_customize, 'swd_cat3_tagline', 'cr8v_swd_cat', 'Catalog 3 Tagline', 'Bespoke Shopify and WooCommerce product pages, checkout flows, and collection grid designs.');
    _cr8v_text($wp_customize, 'swd_cat4_title', 'cr8v_swd_cat', 'Catalog 4 Title', 'Custom Web App Interface Design');
    _cr8v_textarea($wp_customize, 'swd_cat4_tagline', 'cr8v_swd_cat', 'Catalog 4 Tagline', 'SaaS dashboards, admin portals, onboarding workflows, and complex web app interfaces.');
    _cr8v_text($wp_customize, 'swd_cat5_title', 'cr8v_swd_cat', 'Catalog 5 Title', 'Media, Editorial & Content Hubs');
    _cr8v_textarea($wp_customize, 'swd_cat5_tagline', 'cr8v_swd_cat', 'Catalog 5 Tagline', 'High-frequency article archives, publication layouts, and content-first web designs.');
    _cr8v_text($wp_customize, 'swd_cat6_title', 'cr8v_swd_cat', 'Catalog 6 Title', 'Website Redesign & System Refactoring');
    _cr8v_textarea($wp_customize, 'swd_cat6_tagline', 'cr8v_swd_cat', 'Catalog 6 Tagline', 'Rebuilding outdated site designs into modern, high-converting digital experiences without losing search rankings.');

    // Section 8: Testimonials
    $wp_customize->add_section('cr8v_swd_testi', ['title' => __('08. Testimonials', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_testi_label', 'cr8v_swd_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'swd_testi_h2_part1', 'cr8v_swd_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'swd_testi_h2_serif', 'cr8v_swd_testi', 'Title Serif', 'launch');
    _cr8v_textarea($wp_customize, 'swd_testi1_text', 'cr8v_swd_testi', 'Testimonial 1 Text', 'The Duch Apartments site design gave our luxury listings the elevated visual identity they deserved. The layout flows naturally and converted far more inquiries from day one.');
    _cr8v_text($wp_customize, 'swd_testi1_author', 'cr8v_swd_testi', 'Testimonial 1 Author', 'David Sterling — Principal Real Estate Architect');
    _cr8v_textarea($wp_customize, 'swd_testi2_text', 'cr8v_swd_testi', 'Testimonial 2 Text', 'Cr8v Stacks handled our design system in Figma with extreme precision. Handing off the designs to our development team was completely seamless.');
    _cr8v_text($wp_customize, 'swd_testi2_author', 'cr8v_swd_testi', 'Testimonial 2 Author', 'Amina Bello — Digital Marketing Lead');
    _cr8v_textarea($wp_customize, 'swd_testi3_text', 'cr8v_swd_testi', 'Testimonial 3 Text', 'The wireframing and user journey mapping completely transformed how visitors interact with our services. High quality work delivered on schedule.');
    _cr8v_text($wp_customize, 'swd_testi3_author', 'cr8v_swd_testi', 'Testimonial 3 Author', 'Richard Coleman — Technical Operations Director');

    // Section 9: Pricing & Estimator
    $wp_customize->add_section('cr8v_swd_pricing', ['title' => __('09. Pricing & Estimator', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_pricing_label', 'cr8v_swd_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'swd_pricing_h2_part1', 'cr8v_swd_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'swd_pricing_h2_serif', 'cr8v_swd_pricing', 'Title Serif', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'swd_pricing_desc', 'cr8v_swd_pricing', 'Lead Description', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');
    _cr8v_text($wp_customize, 'swd_plan1_type', 'cr8v_swd_pricing', 'Plan 1 Type', 'Ongoing Support');
    _cr8v_text($wp_customize, 'swd_plan1_title', 'cr8v_swd_pricing', 'Plan 1 Title', 'Growth Retainer');
    _cr8v_text($wp_customize, 'swd_plan1_price', 'cr8v_swd_pricing', 'Plan 1 Price', '$950');
    _cr8v_text($wp_customize, 'swd_plan1_period', 'cr8v_swd_pricing', 'Plan 1 Period', '/mo');
    _cr8v_textarea($wp_customize, 'swd_plan1_desc', 'cr8v_swd_pricing', 'Plan 1 Description', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.');
    _cr8v_text($wp_customize, 'swd_plan2_type', 'cr8v_swd_pricing', 'Plan 2 Type', 'Fixed Scope');
    _cr8v_text($wp_customize, 'swd_plan2_title', 'cr8v_swd_pricing', 'Plan 2 Title', 'Fixed Projects');
    _cr8v_text($wp_customize, 'swd_plan2_price', 'cr8v_swd_pricing', 'Plan 2 Price', 'From $1,200');
    _cr8v_text($wp_customize, 'swd_plan2_period', 'cr8v_swd_pricing', 'Plan 2 Period', ' entry');
    _cr8v_textarea($wp_customize, 'swd_plan2_desc', 'cr8v_swd_pricing', 'Plan 2 Description', 'Complete visual website design & layout architecture engineered for brand authority, intuitive user journeys, and seamless developer handoff.');

    // Section 10: FAQ Accordion
    $wp_customize->add_section('cr8v_swd_faq', ['title' => __('10. FAQ Section', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_faq_eyebrow', 'cr8v_swd_faq', 'FAQ Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'swd_faq_h2', 'cr8v_swd_faq', 'FAQ Title', 'Web Design Questions, Answered Honestly');
    _cr8v_textarea($wp_customize, 'swd_faq_sub', 'cr8v_swd_faq', 'FAQ Subtitle', 'Clear answers to common questions about our custom web design, Figma UI/UX prototyping, and conversion optimization processes.');

    // Section 11: Related Services
    $wp_customize->add_section('cr8v_swd_rel', ['title' => __('11. Related Services', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_rel_label', 'cr8v_swd_rel', 'Section Label', 'Other Ways We Build');
    _cr8v_text($wp_customize, 'swd_rel_h2', 'cr8v_swd_rel', 'Section Title', 'Related Services');
    _cr8v_textarea($wp_customize, 'swd_rel_desc', 'cr8v_swd_rel', 'Lead Description', 'Web Design & UX is one of several services we offer. If a standalone web design engagement is not what you need, check these out.');
    _cr8v_text($wp_customize, 'swd_rel1_title', 'cr8v_swd_rel', 'Related 1 Title', 'WordPress Development');
    _cr8v_textarea($wp_customize, 'swd_rel1_desc', 'cr8v_swd_rel', 'Related 1 Description', 'Lightweight, custom-coded WordPress themes built for sub-second page loads, clean organic search visibility, and editing autonomy for your team.');
    _cr8v_text($wp_customize, 'swd_rel2_title', 'cr8v_swd_rel', 'Related 2 Title', 'Brand Strategy & Positioning');
    _cr8v_textarea($wp_customize, 'swd_rel2_desc', 'cr8v_swd_rel', 'Related 2 Description', 'Competitor analysis, pricing scoping, and messaging frameworks that give your website design clear strategic direction before a single pixel is designed.');
    _cr8v_text($wp_customize, 'swd_rel3_title', 'cr8v_swd_rel', 'Related 3 Title', 'Custom Development');
    _cr8v_textarea($wp_customize, 'swd_rel3_desc', 'cr8v_swd_rel', 'Related 3 Description', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.');
});

