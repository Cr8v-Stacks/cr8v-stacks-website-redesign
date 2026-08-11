<?php
/**
 * CR8V Stacks — inc/customizer/panel-brand-strategy.php
 * Brand Strategy Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_brand_strategy_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_brand_strat_panel', [
        'title'           => 'Serv Page: Brand Strategy',
        'priority'        => 220,
        'active_callback' => function() {
            return is_page_template('page-service-brand-strategy.php') || is_page('brand-strategy');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_hero', '01. Hero Section', 'cr8v_brand_strat_panel', 10);
    _cr8v_text($wp_customize, 'bstrat_hero_crumb_parent', 'cr8v_bstrat_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'bstrat_hero_crumb_child', 'cr8v_bstrat_hero', 'Breadcrumb Child', 'BRAND STRATEGY');
    _cr8v_text($wp_customize, 'bstrat_hero_label', 'cr8v_bstrat_hero', 'Section Label', 'Market Positioning & Value Proposition Architecture');
    _cr8v_text($wp_customize, 'bstrat_hero_h1_part1', 'cr8v_bstrat_hero', 'Headline Part 1', 'Brand Strategy ');
    _cr8v_text($wp_customize, 'bstrat_hero_h1_serif', 'cr8v_bstrat_hero', 'Headline Serif Word', '& Market Positioning');
    _cr8v_textarea($wp_customize, 'bstrat_hero_intro', 'cr8v_bstrat_hero', 'Hero Subtitle', 'Competitive positioning frameworks, audience persona mapping, and messaging architecture engineered to define what makes your business irreplaceable before you spend a single dollar on design or marketing.');
    _cr8v_text($wp_customize, 'bstrat_hero_cta1_text', 'cr8v_bstrat_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'bstrat_hero_cta1_url', 'cr8v_bstrat_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'bstrat_hero_cta2_text', 'cr8v_bstrat_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'bstrat_hero_cta2_url', 'cr8v_bstrat_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'bstrat_hero_pill1', 'cr8v_bstrat_hero', 'Pill 1', 'Brand Identity');
    _cr8v_text($wp_customize, 'bstrat_hero_pill2', 'cr8v_bstrat_hero', 'Pill 2', 'Positioning');
    _cr8v_text($wp_customize, 'bstrat_hero_pill3', 'cr8v_bstrat_hero', 'Pill 3', 'Messaging');
    _cr8v_text($wp_customize, 'bstrat_hero_pill4', 'cr8v_bstrat_hero', 'Pill 4', 'Audience Research');

    // ── 02. WHY BRAND STRATEGY (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_flank', '02. Why Brand Strategy (Flank Cards)', 'cr8v_brand_strat_panel', 20);
    _cr8v_text($wp_customize, 'bstrat_flank_label', 'cr8v_bstrat_flank', 'Section Label', 'Why Brand Strategy');
    _cr8v_text($wp_customize, 'bstrat_flank_h2', 'cr8v_bstrat_flank', 'Section Title', 'Strategy Before Design Prevents Wasted Marketing Budget');

    _cr8v_text($wp_customize, 'bstrat_flank1_step', 'cr8v_bstrat_flank', 'Card 1 Step', 'Clarity // Positioning');
    _cr8v_text($wp_customize, 'bstrat_flank1_title', 'cr8v_bstrat_flank', 'Card 1 Title', 'Differentiated Market Positioning');
    _cr8v_textarea($wp_customize, 'bstrat_flank1_desc', 'cr8v_bstrat_flank', 'Card 1 Description', 'Establishing a defensible market category that separates your brand from commoditized competitors.');

    _cr8v_text($wp_customize, 'bstrat_flank2_step', 'cr8v_bstrat_flank', 'Card 2 Step', 'Persona // Mapping');
    _cr8v_text($wp_customize, 'bstrat_flank2_title', 'cr8v_bstrat_flank', 'Card 2 Title', 'Audience Persona Architecture');
    _cr8v_textarea($wp_customize, 'bstrat_flank2_desc', 'cr8v_bstrat_flank', 'Card 2 Description', 'Defining exact customer friction points, buying triggers, and psychological decision criteria.');

    _cr8v_text($wp_customize, 'bstrat_flank3_step', 'cr8v_bstrat_flank', 'Card 3 Step', 'Messaging // Blueprint');
    _cr8v_text($wp_customize, 'bstrat_flank3_title', 'cr8v_bstrat_flank', 'Card 3 Title', 'Unified Messaging Matrix');
    _cr8v_textarea($wp_customize, 'bstrat_flank3_desc', 'cr8v_bstrat_flank', 'Card 3 Description', 'Structuring brand headlines, value propositions, and proof points for consistent cross-channel communication.');

    _cr8v_text($wp_customize, 'bstrat_flank4_step', 'cr8v_bstrat_flank', 'Card 4 Step', 'Conversion // Alignment');
    _cr8v_text($wp_customize, 'bstrat_flank4_title', 'cr8v_bstrat_flank', 'Card 4 Title', 'Design & Marketing Alignment');
    _cr8v_textarea($wp_customize, 'bstrat_flank4_desc', 'cr8v_bstrat_flank', 'Card 4 Description', 'Ensuring every web layout, ad creative, and sales presentation reinforces one core positioning concept.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_work', '03. Our Work (Portfolio Showcase)', 'cr8v_brand_strat_panel', 30);
    _cr8v_text($wp_customize, 'bstrat_port_label', 'cr8v_bstrat_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'bstrat_port_h2_part1', 'cr8v_bstrat_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'bstrat_port_h2_serif', 'cr8v_bstrat_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'bstrat_port_client', 'cr8v_bstrat_work', 'Client Label', 'Case Study — Stride Plus Media');
    _cr8v_text($wp_customize, 'bstrat_port_title', 'cr8v_bstrat_work', 'Case Study Title', 'Brand Positioning & Market Architecture');
    _cr8v_textarea($wp_customize, 'bstrat_port_desc', 'cr8v_bstrat_work', 'Case Study Description', 'Stride Radio needed clear market positioning to compete in digital broadcast media. We defined their brand archetype, core value proposition, audience personas, and messaging framework before launching their streaming web application and ad campaigns.');
    _cr8v_img($wp_customize, 'bstrat_port_img', 'cr8v_bstrat_work', 'Case Study Image', 'https://images.unsplash.com/photo-1542744094-3a3172720188?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'bstrat_port_stat1_val', 'cr8v_bstrat_work', 'Stat 1 Value', '1');
    _cr8v_text($wp_customize, 'bstrat_port_stat1_lbl', 'cr8v_bstrat_work', 'Stat 1 Label', 'Unified Brand Positioning Blueprint');
    _cr8v_text($wp_customize, 'bstrat_port_stat2_val', 'cr8v_bstrat_work', 'Stat 2 Value', '4');
    _cr8v_text($wp_customize, 'bstrat_port_stat2_lbl', 'cr8v_bstrat_work', 'Stat 2 Label', 'Connected Channels Built On Strategy');
    _cr8v_text($wp_customize, 'bstrat_port_btn_text', 'cr8v_bstrat_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'bstrat_port_btn_url', 'cr8v_bstrat_work', 'Link URL', '/case-studies/stride-plus-media/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_folder', '04. What You Get (Folder Deck)', 'cr8v_brand_strat_panel', 40);
    _cr8v_text($wp_customize, 'bstrat_folder_label', 'cr8v_bstrat_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'bstrat_folder_h2_part1', 'cr8v_bstrat_folder', 'Title Part 1', 'Every layer of your brand strategy, ');
    _cr8v_text($wp_customize, 'bstrat_folder_h2_serif', 'cr8v_bstrat_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'bstrat_folder_desc', 'cr8v_bstrat_folder', 'Subtitle', 'Market positioning matrices, audience persona maps, brand voice guidelines, messaging hierarchies, and competitive differentiation audits.');

    _cr8v_text($wp_customize, 'bstrat_folder1_tab', 'cr8v_bstrat_folder', 'Card 1 Tab', '01 // Audit');
    _cr8v_text($wp_customize, 'bstrat_folder1_title', 'cr8v_bstrat_folder', 'Card 1 Title', 'Competitive Positioning Audit');
    _cr8v_textarea($wp_customize, 'bstrat_folder1_desc', 'cr8v_bstrat_folder', 'Card 1 Description', 'Evaluating competitor messaging gaps and mapping untapped category positioning opportunities.');

    _cr8v_text($wp_customize, 'bstrat_folder2_tab', 'cr8v_bstrat_folder', 'Card 2 Tab', '02 // Archetype');
    _cr8v_text($wp_customize, 'bstrat_folder2_title', 'cr8v_bstrat_folder', 'Card 2 Title', 'Brand Archetype & Voice System');
    _cr8v_textarea($wp_customize, 'bstrat_folder2_desc', 'cr8v_bstrat_folder', 'Card 2 Description', 'Defining your brand tone of voice, personality traits, vocabulary rules, and communication style.');

    _cr8v_text($wp_customize, 'bstrat_folder3_tab', 'cr8v_bstrat_folder', 'Card 3 Tab', '03 // Personas');
    _cr8v_text($wp_customize, 'bstrat_folder3_title', 'cr8v_bstrat_folder', 'Card 3 Title', 'Audience Persona Mapping');
    _cr8v_textarea($wp_customize, 'bstrat_folder3_desc', 'cr8v_bstrat_folder', 'Card 3 Description', 'Detailed buyer profile blueprints detailing pain points, desires, objections, and buying triggers.');

    _cr8v_text($wp_customize, 'bstrat_folder4_tab', 'cr8v_bstrat_folder', 'Card 4 Tab', '04 // Messaging');
    _cr8v_text($wp_customize, 'bstrat_folder4_title', 'cr8v_bstrat_folder', 'Card 4 Title', 'Core Value Proposition Matrix');
    _cr8v_textarea($wp_customize, 'bstrat_folder4_desc', 'cr8v_bstrat_folder', 'Card 4 Description', 'Developing primary brand headlines, secondary sub-headlines, proof points, and elevator pitches.');

    _cr8v_text($wp_customize, 'bstrat_folder5_tab', 'cr8v_bstrat_folder', 'Card 5 Tab', '05 // Blueprint');
    _cr8v_text($wp_customize, 'bstrat_folder5_title', 'cr8v_bstrat_folder', 'Card 5 Title', 'Brand Strategy Guidelines');
    _cr8v_textarea($wp_customize, 'bstrat_folder5_desc', 'cr8v_bstrat_folder', 'Card 5 Description', 'A comprehensive brand strategy document ready for your design, product, and sales teams.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_approach', '05. How We Approach It (Process)', 'cr8v_brand_strat_panel', 50);
    _cr8v_text($wp_customize, 'bstrat_app_label', 'cr8v_bstrat_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'bstrat_app_h2', 'cr8v_bstrat_approach', 'Section Title', 'How We Approach Brand Strategy');
    _cr8v_textarea($wp_customize, 'bstrat_app_sub', 'cr8v_bstrat_approach', 'Subtitle', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');

    _cr8v_text($wp_customize, 'bstrat_app1_num', 'cr8v_bstrat_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'bstrat_app1_name', 'cr8v_bstrat_approach', 'Stage 1 Name', 'Discover');
    _cr8v_text($wp_customize, 'bstrat_app1_tags', 'cr8v_bstrat_approach', 'Stage 1 Tags', 'Stakeholders · Market · Audits');
    _cr8v_textarea($wp_customize, 'bstrat_app1_desc', 'cr8v_bstrat_approach', 'Stage 1 Description', 'We interview key stakeholders, audit existing brand assets, and analyze competitor market positioning.');

    _cr8v_text($wp_customize, 'bstrat_app2_num', 'cr8v_bstrat_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'bstrat_app2_name', 'cr8v_bstrat_approach', 'Stage 2 Name', 'Define');
    _cr8v_text($wp_customize, 'bstrat_app2_tags', 'cr8v_bstrat_approach', 'Stage 2 Tags', 'Positioning · Archetype · Value Prop');
    _cr8v_textarea($wp_customize, 'bstrat_app2_desc', 'cr8v_bstrat_approach', 'Stage 2 Description', 'We crystalize your core brand positioning statement, define your brand archetype, and map value propositions.');

    _cr8v_text($wp_customize, 'bstrat_app3_num', 'cr8v_bstrat_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'bstrat_app3_name', 'cr8v_bstrat_approach', 'Stage 3 Name', 'Structure');
    _cr8v_text($wp_customize, 'bstrat_app3_tags', 'cr8v_bstrat_approach', 'Stage 3 Tags', 'Messaging · Personas · Voice');
    _cr8v_textarea($wp_customize, 'bstrat_app3_desc', 'cr8v_bstrat_approach', 'Stage 3 Description', 'We construct complete messaging frameworks, detailed audience personas, and tone-of-voice rules.');

    _cr8v_text($wp_customize, 'bstrat_app4_num', 'cr8v_bstrat_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'bstrat_app4_name', 'cr8v_bstrat_approach', 'Stage 4 Name', 'Deliver');
    _cr8v_text($wp_customize, 'bstrat_app4_tags', 'cr8v_bstrat_approach', 'Stage 4 Tags', 'Blueprint · Handoff · Execution');
    _cr8v_textarea($wp_customize, 'bstrat_app4_desc', 'cr8v_bstrat_approach', 'Stage 4 Description', 'We publish your complete Brand Strategy Blueprint and align your design and marketing teams for execution.');

    // ── 05.5. STRATEGIC SCOPING OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_plat', '05.5. Strategic Scoping Options', 'cr8v_brand_strat_panel', 55);
    _cr8v_text($wp_customize, 'bstrat_plat_label', 'cr8v_bstrat_plat', 'Section Label', 'Strategic Scoping Options');
    _cr8v_text($wp_customize, 'bstrat_plat_h2_part1', 'cr8v_bstrat_plat', 'Title Part 1', 'Choosing Your ');
    _cr8v_text($wp_customize, 'bstrat_plat_h2_serif', 'cr8v_bstrat_plat', 'Title Serif Word', 'Brand Architecture');

    _cr8v_text($wp_customize, 'bstrat_plat1_badge', 'cr8v_bstrat_plat', 'Option 1 Badge', 'Stack // Positioning');
    _cr8v_text($wp_customize, 'bstrat_plat1_title', 'cr8v_bstrat_plat', 'Option 1 Title', 'Core Brand Positioning');
    _cr8v_textarea($wp_customize, 'bstrat_plat1_desc', 'cr8v_bstrat_plat', 'Option 1 Description', 'For early-stage companies needing clear market positioning and value proposition frameworks.');

    _cr8v_text($wp_customize, 'bstrat_plat2_badge', 'cr8v_bstrat_plat', 'Option 2 Badge', 'Stack // Growth');
    _cr8v_text($wp_customize, 'bstrat_plat2_title', 'cr8v_bstrat_plat', 'Option 2 Title', 'Full Strategy & Messaging System');
    _cr8v_textarea($wp_customize, 'bstrat_plat2_desc', 'cr8v_bstrat_plat', 'Option 2 Description', 'For growing businesses expanding into new markets or launching new product verticals.');

    _cr8v_text($wp_customize, 'bstrat_plat3_badge', 'cr8v_bstrat_plat', 'Option 3 Badge', 'Stack // Rebrand');
    _cr8v_text($wp_customize, 'bstrat_plat3_title', 'cr8v_bstrat_plat', 'Option 3 Title', 'Strategic Rebranding Blueprint');
    _cr8v_textarea($wp_customize, 'bstrat_plat3_desc', 'cr8v_bstrat_plat', 'Option 3 Description', 'For established companies repositioning away from commoditized competition.');

    _cr8v_text($wp_customize, 'bstrat_plat4_badge', 'cr8v_bstrat_plat', 'Option 4 Badge', 'Stack // Advisory');
    _cr8v_text($wp_customize, 'bstrat_plat4_title', 'cr8v_bstrat_plat', 'Option 4 Title', 'Ongoing Strategic Advisory');
    _cr8v_textarea($wp_customize, 'bstrat_plat4_desc', 'cr8v_bstrat_plat', 'Option 4 Description', 'Quarterly brand positioning reviews, messaging audits, and market alignment support.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_hl', '06. Project Catalog (Hoverlist)', 'cr8v_brand_strat_panel', 60);
    _cr8v_text($wp_customize, 'bstrat_hl_label', 'cr8v_bstrat_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'bstrat_hl_h2', 'cr8v_bstrat_hl', 'Section Title', 'Every Kind of Brand Strategy We Engineer');
    _cr8v_textarea($wp_customize, 'bstrat_hl_sub', 'cr8v_bstrat_hl', 'Subtitle', 'From startup positioning blueprints to enterprise rebrand strategies — hover to inspect the strategy stack.');

    _cr8v_text($wp_customize, 'bstrat_hl1_title', 'cr8v_bstrat_hl', 'Item 1 Title', 'B2B Brand Positioning & Messaging');
    _cr8v_textarea($wp_customize, 'bstrat_hl1_tagline', 'cr8v_bstrat_hl', 'Item 1 Tagline', 'Building defensible market positioning frameworks for professional service firms and tech companies.');

    _cr8v_text($wp_customize, 'bstrat_hl2_title', 'cr8v_bstrat_hl', 'Item 2 Title', 'DTC & E-Commerce Brand Strategy');
    _cr8v_textarea($wp_customize, 'bstrat_hl2_tagline', 'cr8v_bstrat_hl', 'Item 2 Tagline', 'Defining brand story, customer emotional triggers, and product line positioning for retail brands.');

    _cr8v_text($wp_customize, 'bstrat_hl3_title', 'cr8v_bstrat_hl', 'Item 3 Title', 'SaaS Product Positioning & Messaging');
    _cr8v_textarea($wp_customize, 'bstrat_hl3_tagline', 'cr8v_bstrat_hl', 'Item 3 Tagline', 'Structuring feature-benefit matrices, ICP personas, and landing page messaging frameworks.');

    _cr8v_text($wp_customize, 'bstrat_hl4_title', 'cr8v_bstrat_hl', 'Item 4 Title', 'Corporate Rebranding Strategy');
    _cr8v_textarea($wp_customize, 'bstrat_hl4_tagline', 'cr8v_bstrat_hl', 'Item 4 Tagline', 'Auditing legacy brand equity, repositioning market perception, and guiding brand transition.');

    _cr8v_text($wp_customize, 'bstrat_hl5_title', 'cr8v_bstrat_hl', 'Item 5 Title', 'Audience Persona & Journey Mapping');
    _cr8v_textarea($wp_customize, 'bstrat_hl5_tagline', 'cr8v_bstrat_hl', 'Item 5 Tagline', 'Mapping multi-stage customer buying journeys from initial problem awareness to closed sale.');

    _cr8v_text($wp_customize, 'bstrat_hl6_title', 'cr8v_bstrat_hl', 'Item 6 Title', 'Tone of Voice & Messaging Guidelines');
    _cr8v_textarea($wp_customize, 'bstrat_hl6_tagline', 'cr8v_bstrat_hl', 'Item 6 Tagline', 'Creating brand voice rulebooks with word choice dos/don\'ts for copywriters and sales reps.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_testi', '07. Client Feedback (Testimonials)', 'cr8v_brand_strat_panel', 70);
    _cr8v_text($wp_customize, 'bstrat_testi_label', 'cr8v_bstrat_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'bstrat_testi_h2_part1', 'cr8v_bstrat_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'bstrat_testi_h2_serif', 'cr8v_bstrat_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'bstrat_testi1_text', 'cr8v_bstrat_testi', 'Testimonial 1 Text', 'Defining our brand strategy before building the app or running ads gave us a clear market identity that cut through noisy digital competitors.');
    _cr8v_text($wp_customize, 'bstrat_testi1_author', 'cr8v_bstrat_testi', 'Testimonial 1 Author', 'Chief Executive Officer — Digital Media');

    _cr8v_textarea($wp_customize, 'bstrat_testi2_text', 'cr8v_bstrat_testi', 'Testimonial 2 Text', 'The positioning blueprint Cr8v Stacks created transformed our sales conversations. We doubled our average deal size because our value proposition was crystal clear.');
    _cr8v_text($wp_customize, 'bstrat_testi2_author', 'cr8v_bstrat_testi', 'Testimonial 2 Author', 'David Sterling — Principal Advisory Lead');

    _cr8v_textarea($wp_customize, 'bstrat_testi3_text', 'cr8v_bstrat_testi', 'Testimonial 3 Text', 'Starting with brand strategy saved us tens of thousands in wasted ad spend. Our messaging resonated immediately with our target buyers.');
    _cr8v_text($wp_customize, 'bstrat_testi3_author', 'cr8v_bstrat_testi', 'Testimonial 3 Author', 'Ngozi Adeleke — Managing Director');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_pricing', '08. Pricing Models & Estimator', 'cr8v_brand_strat_panel', 80);
    _cr8v_text($wp_customize, 'bstrat_pricing_label', 'cr8v_bstrat_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'bstrat_pricing_h2_part1', 'cr8v_bstrat_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'bstrat_pricing_h2_serif', 'cr8v_bstrat_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'bstrat_pricing_desc', 'cr8v_bstrat_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_faq', '09. Frequently Asked Questions', 'cr8v_brand_strat_panel', 90);
    _cr8v_text($wp_customize, 'bstrat_faq_eyebrow', 'cr8v_bstrat_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'bstrat_faq_h2', 'cr8v_bstrat_faq', 'Title', 'Brand Strategy FAQ');
    _cr8v_textarea($wp_customize, 'bstrat_faq_sub', 'cr8v_bstrat_faq', 'Subtitle', 'Clear answers to common questions about our brand positioning, messaging frameworks, and audience persona architecture.');

    _cr8v_text($wp_customize, 'bstrat_faq1_q', 'cr8v_bstrat_faq', 'FAQ 1 Question', 'Why do we need brand strategy before designing our website or logo?');
    _cr8v_textarea($wp_customize, 'bstrat_faq1_a', 'cr8v_bstrat_faq', 'FAQ 1 Answer', 'Brand strategy defines who your exact ideal customer is and why they choose you over competitors. Designing without strategy risks creating pretty visuals that fail to convert or differentiate in your market.');

    _cr8v_text($wp_customize, 'bstrat_faq2_q', 'cr8v_bstrat_faq', 'FAQ 2 Question', 'What deliverables do we receive at the end of a brand strategy engagement?');
    _cr8v_textarea($wp_customize, 'bstrat_faq2_a', 'cr8v_bstrat_faq', 'FAQ 2 Answer', 'You receive a complete Brand Strategy Blueprint including category positioning statements, ICP audience persona maps, core value proposition matrix, brand archetype guidelines, and tone-of-voice rules.');

    _cr8v_text($wp_customize, 'bstrat_faq3_q', 'cr8v_bstrat_faq', 'FAQ 3 Question', 'How do you conduct competitive market research?');
    _cr8v_textarea($wp_customize, 'bstrat_faq3_a', 'cr8v_bstrat_faq', 'FAQ 3 Answer', 'We analyze competitor websites, value propositions, messaging strategies, customer reviews, and keyword positioning to identify messaging white space where your brand can lead.');

    _cr8v_text($wp_customize, 'bstrat_faq4_q', 'cr8v_bstrat_faq', 'FAQ 4 Question', 'How long does a brand strategy project take?');
    _cr8v_textarea($wp_customize, 'bstrat_faq4_a', 'cr8v_bstrat_faq', 'FAQ 4 Answer', 'Our standard brand positioning and strategy sprint takes 2 weeks from stakeholder discovery workshops to final strategy blueprint delivery.');

    _cr8v_text($wp_customize, 'bstrat_faq5_q', 'cr8v_bstrat_faq', 'FAQ 5 Question', 'Can brand strategy be combined with your web design or identity packages?');
    _cr8v_textarea($wp_customize, 'bstrat_faq5_a', 'cr8v_bstrat_faq', 'FAQ 5 Answer', 'Yes. Most clients execute Brand Strategy as Phase 1, seamlessly transitioning into Phase 2 Brand Identity Design and Phase 3 Custom Web Development.');

    _cr8v_text($wp_customize, 'bstrat_faq6_q', 'cr8v_bstrat_faq', 'FAQ 6 Question', 'Will our internal sales and marketing teams be able to use the strategy document?');
    _cr8v_textarea($wp_customize, 'bstrat_faq6_a', 'cr8v_bstrat_faq', 'FAQ 6 Answer', 'Absolutely. The Brand Strategy Blueprint is crafted specifically as an actionable internal operating guide for copywriters, designers, ad managers, and sales reps.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_bstrat_cta', '10. Bottom CTA Section', 'cr8v_brand_strat_panel', 100);
    _cr8v_text($wp_customize, 'bstrat_cta_label', 'cr8v_bstrat_cta', 'Section Label', 'READY TO POSITION?');
    _cr8v_text($wp_customize, 'bstrat_cta_h2_part1', 'cr8v_bstrat_cta', 'Title Part 1', 'Let’s Engineer Your ');
    _cr8v_text($wp_customize, 'bstrat_cta_h2_serif', 'cr8v_bstrat_cta', 'Title Serif Word', 'Brand Strategy');
    _cr8v_textarea($wp_customize, 'bstrat_cta_desc', 'cr8v_bstrat_cta', 'Subtitle', 'Tell us about your market goals to receive a complete price quote and strategy proposal within 24 hours.');
    _cr8v_text($wp_customize, 'bstrat_cta_btn_text', 'cr8v_bstrat_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'bstrat_cta_btn_url', 'cr8v_bstrat_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_brand_strategy_panel');
