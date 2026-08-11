<?php
defined('ABSPATH') || exit;
    $wp_customize->add_panel('cr8v_swd_panel', [
        'active_callback' => function() { return is_page('web-design') || is_page('website-design') || is_page_template('page-service-web-design.php') || is_page_template('page-web-design.php'); },
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
    $wp_customize->add_section('cr8v_swd_proc', ['title' => __('05a. Process & Approach (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
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
    $wp_customize->add_section('cr8v_swd_plat', ['title' => __('06a. Build Platform Options (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
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
    $wp_customize->add_section('cr8v_swd_cat', ['title' => __('07. Project Catalog (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
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
    _cr8v_text($wp_customize, 'swd_rel1_url', 'cr8v_swd_rel', 'Related 1 URL', '/service/wordpress/');
    _cr8v_text($wp_customize, 'swd_rel2_title', 'cr8v_swd_rel', 'Related 2 Title', 'Brand Strategy & Positioning');
    _cr8v_textarea($wp_customize, 'swd_rel2_desc', 'cr8v_swd_rel', 'Related 2 Description', 'Competitor analysis, pricing scoping, and messaging frameworks that give your website design clear strategic direction before a single pixel is designed.');
    _cr8v_text($wp_customize, 'swd_rel2_url', 'cr8v_swd_rel', 'Related 2 URL', '/service/brand-strategy/');
    _cr8v_text($wp_customize, 'swd_rel3_title', 'cr8v_swd_rel', 'Related 3 Title', 'Custom Development');
    _cr8v_textarea($wp_customize, 'swd_rel3_desc', 'cr8v_swd_rel', 'Related 3 Description', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.');
    _cr8v_text($wp_customize, 'swd_rel3_url', 'cr8v_swd_rel', 'Related 3 URL', '/service/custom-dev/');

    // ── GAP FILLS: Images, CTA Links, CDN Logos, FAQ Q&As ──────────────────

    // S3 Portfolio — Case Study Image
    _cr8v_img($wp_customize, 'swd_work_cs_img', 'cr8v_swd_work', 'Case Study Photo', 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop');

    // S4 Folder Deck — Card Images & CTA links (×5)
    _cr8v_img($wp_customize,  'swd_deck1_img',      'cr8v_swd_deck', 'Card 1 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'swd_deck1_cta_text', 'cr8v_swd_deck', 'Card 1 CTA Text', 'Discuss layout strategy →');
    _cr8v_text($wp_customize, 'swd_deck1_cta_url',  'cr8v_swd_deck', 'Card 1 CTA URL', '/discovery-call/');
    _cr8v_img($wp_customize,  'swd_deck2_img',      'cr8v_swd_deck', 'Card 2 Image', 'https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'swd_deck2_cta_text', 'cr8v_swd_deck', 'Card 2 CTA Text', 'Discuss visual UI →');
    _cr8v_text($wp_customize, 'swd_deck2_cta_url',  'cr8v_swd_deck', 'Card 2 CTA URL', '/discovery-call/');
    _cr8v_img($wp_customize,  'swd_deck3_img',      'cr8v_swd_deck', 'Card 3 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'swd_deck3_cta_text', 'cr8v_swd_deck', 'Card 3 CTA Text', 'Discuss platform builds →');
    _cr8v_text($wp_customize, 'swd_deck3_cta_url',  'cr8v_swd_deck', 'Card 3 CTA URL', '/discovery-call/');
    _cr8v_img($wp_customize,  'swd_deck4_img',      'cr8v_swd_deck', 'Card 4 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'swd_deck4_cta_text', 'cr8v_swd_deck', 'Card 4 CTA Text', 'Discuss performance →');
    _cr8v_text($wp_customize, 'swd_deck4_cta_url',  'cr8v_swd_deck', 'Card 4 CTA URL', '/discovery-call/');
    _cr8v_img($wp_customize,  'swd_deck5_img',      'cr8v_swd_deck', 'Card 5 Image', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'swd_deck5_cta_text', 'cr8v_swd_deck', 'Card 5 CTA Text', 'Discuss editing autonomy →');
    _cr8v_text($wp_customize, 'swd_deck5_cta_url',  'cr8v_swd_deck', 'Card 5 CTA URL', '/discovery-call/');

    // S5 Process — Stage Images (×4)
    $wp_customize->add_section('cr8v_swd_proc_imgs', ['title' => __('05b. Process Stage Images', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_img($wp_customize, 'swd_proc1_img', 'cr8v_swd_proc_imgs', 'Stage 1 Image', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'swd_proc2_img', 'cr8v_swd_proc_imgs', 'Stage 2 Image', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'swd_proc3_img', 'cr8v_swd_proc_imgs', 'Stage 3 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'swd_proc4_img', 'cr8v_swd_proc_imgs', 'Stage 4 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop');

    // S6 Project Catalog — Tech badges & CDN Logo URLs (×6)
    $wp_customize->add_section('cr8v_swd_cat_logos', ['title' => __('06b. Catalog CDN Logos & Tech', 'cr8v-stacks'), 'panel' => 'cr8v_swd_panel']);
    _cr8v_text($wp_customize, 'swd_cat1_tech',  'cr8v_swd_cat_logos', 'Item 1 Tech Badge', 'Corporate');
    _cr8v_text($wp_customize, 'swd_cat1_logo1', 'cr8v_swd_cat_logos', 'Item 1 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat1_logo2', 'cr8v_swd_cat_logos', 'Item 1 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg');
    _cr8v_text($wp_customize, 'swd_cat2_tech',  'cr8v_swd_cat_logos', 'Item 2 Tech Badge', 'SaaS / Tech');
    _cr8v_text($wp_customize, 'swd_cat2_logo1', 'cr8v_swd_cat_logos', 'Item 2 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat2_logo2', 'cr8v_swd_cat_logos', 'Item 2 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg');
    _cr8v_text($wp_customize, 'swd_cat3_tech',  'cr8v_swd_cat_logos', 'Item 3 Tech Badge', 'E-Commerce');
    _cr8v_text($wp_customize, 'swd_cat3_logo1', 'cr8v_swd_cat_logos', 'Item 3 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat3_logo2', 'cr8v_swd_cat_logos', 'Item 3 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/css3.svg');
    _cr8v_text($wp_customize, 'swd_cat4_tech',  'cr8v_swd_cat_logos', 'Item 4 Tech Badge', 'Web Apps');
    _cr8v_text($wp_customize, 'swd_cat4_logo1', 'cr8v_swd_cat_logos', 'Item 4 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat4_logo2', 'cr8v_swd_cat_logos', 'Item 4 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg');
    _cr8v_text($wp_customize, 'swd_cat5_tech',  'cr8v_swd_cat_logos', 'Item 5 Tech Badge', 'Media / Editorial');
    _cr8v_text($wp_customize, 'swd_cat5_logo1', 'cr8v_swd_cat_logos', 'Item 5 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat5_logo2', 'cr8v_swd_cat_logos', 'Item 5 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg');
    _cr8v_text($wp_customize, 'swd_cat6_tech',  'cr8v_swd_cat_logos', 'Item 6 Tech Badge', 'Redesign & Refactor');
    _cr8v_text($wp_customize, 'swd_cat6_logo1', 'cr8v_swd_cat_logos', 'Item 6 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg');
    _cr8v_text($wp_customize, 'swd_cat6_logo2', 'cr8v_swd_cat_logos', 'Item 6 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg');

    // S9 Pricing — CTA Buttons & Estimator Links
    _cr8v_text($wp_customize, 'swd_plan1_cta_text',  'cr8v_swd_pricing', 'Plan 1 CTA Button Text', 'Secure Retainer Slot');
    _cr8v_text($wp_customize, 'swd_plan1_cta_url',   'cr8v_swd_pricing', 'Plan 1 CTA URL', 'https://cr8vstacks.com/contact/?model=retainer');
    _cr8v_text($wp_customize, 'swd_plan2_cta_text',  'cr8v_swd_pricing', 'Plan 2 CTA Button Text', 'Start A Project');
    _cr8v_text($wp_customize, 'swd_plan2_cta_url',   'cr8v_swd_pricing', 'Plan 2 CTA URL', 'https://cr8vstacks.com/contact/?model=project');
    _cr8v_text($wp_customize, 'swd_est_cta_url',     'cr8v_swd_pricing', 'Estimator Submit CTA URL', 'https://cr8vstacks.com/contact/?platform=webdesign&est=1200-1500');
    _cr8v_text($wp_customize, 'swd_est_calc_url',    'cr8v_swd_pricing', 'Calculator Link URL', '/discovery-call/');

    // S10 FAQ — CTA Link + 7 Q&A pairs
    _cr8v_text($wp_customize,     'swd_faq_cta_text', 'cr8v_swd_faq', 'FAQ CTA Link Text', 'Talk to us');
    _cr8v_text($wp_customize,     'swd_faq_cta_url',  'cr8v_swd_faq', 'FAQ CTA Link URL', 'https://cr8vstacks.com/contact/');
    _cr8v_text($wp_customize,     'swd_faq1_q', 'cr8v_swd_faq', 'FAQ 1 Question', 'Why invest in custom Web Design & UX instead of using a generic pre-made template?');
    _cr8v_textarea($wp_customize, 'swd_faq1_a', 'cr8v_swd_faq', 'FAQ 1 Answer', 'Generic templates force your brand into rigid pre-existing layouts, contain heavy bloat code that slows page speed, and make your business look like thousands of competitors. Custom web design builds a tailored user experience around your specific market positioning, increasing conversion rates and brand trust.');
    _cr8v_text($wp_customize,     'swd_faq2_q', 'cr8v_swd_faq', 'FAQ 2 Question', 'What platforms do you build custom web design projects on?');
    _cr8v_textarea($wp_customize, 'swd_faq2_a', 'cr8v_swd_faq', 'FAQ 2 Answer', 'We build across custom WordPress (Gutenberg / Elementor), Shopify storefronts, WooCommerce stores, and bespoke PHP or React web applications depending on your team\'s technical preferences and operational goals.');
    _cr8v_text($wp_customize,     'swd_faq3_q', 'cr8v_swd_faq', 'FAQ 3 Question', 'How much does a custom Web Design project cost?');
    _cr8v_textarea($wp_customize, 'swd_faq3_a', 'cr8v_swd_faq', 'FAQ 3 Answer', 'Our fixed-scope Web Design and development projects start from $1,200 for a custom layout architecture, responsive page builds, and speed tuning. The final investment scales with the number of unique page layouts and specialized feature integrations.');
    _cr8v_text($wp_customize,     'swd_faq4_q', 'cr8v_swd_faq', 'FAQ 4 Question', 'Why hire an agency like Cr8v Stacks for Web Design instead of a solo freelancer?');
    _cr8v_textarea($wp_customize, 'swd_faq4_a', 'cr8v_swd_faq', 'FAQ 4 Answer', 'Solo freelancers often handle strategy, UI design, frontend code, and SEO as a single person, leading to missed technical deadlines or security gaps. Cr8v Stacks provides a dedicated multi-disciplinary team — combining brand strategists, UI/UX designers, senior frontend engineers, and technical SEO specialists — backed by formal contracts and support.');
    _cr8v_text($wp_customize,     'swd_faq5_q', 'cr8v_swd_faq', 'FAQ 5 Question', 'Do you handle website redesigns and 301 URL SEO redirects?');
    _cr8v_textarea($wp_customize, 'swd_faq5_a', 'cr8v_swd_faq', 'FAQ 5 Answer', 'Yes. When redesigning existing websites, we audit all existing URL structures and configure precise 301 redirect mapping to ensure your domain authority, search engine indexation, and organic rankings remain fully intact during launch.');
    _cr8v_text($wp_customize,     'swd_faq6_q', 'cr8v_swd_faq', 'FAQ 6 Question', 'How long does a complete Web Design and build project take?');
    _cr8v_textarea($wp_customize, 'swd_faq6_a', 'cr8v_swd_faq', 'FAQ 6 Answer', 'A standard custom web design and build project for a core 3–5 page site takes approximately 3 to 4 weeks from discovery kick-off to live tested launch. Complex web platforms or multi-language sites take 4 to 6 weeks.');
    _cr8v_text($wp_customize,     'swd_faq7_q', 'cr8v_swd_faq', 'FAQ 7 Question', 'Will I be able to edit page content myself without writing code?');
    _cr8v_textarea($wp_customize, 'swd_faq7_a', 'cr8v_swd_faq', 'FAQ 7 Answer', 'Yes. We configure visual page builders (Elementor or Gutenberg) and intuitive admin dashboards so your marketing team can publish blog posts, edit text, upload images, and add new landing pages easily without touching code.');
    _cr8v_text($wp_customize,     'swd_faq8_q', 'cr8v_swd_faq', 'FAQ 8 Question', 'Do I get full ownership of design source files and site code?');
    _cr8v_textarea($wp_customize, 'swd_faq8_a', 'cr8v_swd_faq', 'FAQ 8 Answer', '100% yes. Upon final payment, you own all Figma design source files, custom theme codebase, graphics, and database assets with zero ongoing licensing fees or platform lock-in.');

    /* ════════════════════════════════════════════════════════════════
       SERVICE PAGE — SHOPIFY STOREFRONTS PANEL
       ════════════════════════════════════════════════════════════════ */
