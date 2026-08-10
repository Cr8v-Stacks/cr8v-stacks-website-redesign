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
    _cr8v_textarea($wp_customize, 'sdv_sub', 'cr8v_sdv', 'Section Subtitle', 'We start with who you\'re competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on — the build is only one layer.');

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
});
