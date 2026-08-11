<?php
defined('ABSPATH') || exit;
    $wp_customize->add_panel('cr8v_services_panel', [
        'active_callback' => function() { return is_page('services') || is_page('our-services') || is_page_template('page-services.php'); },
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
