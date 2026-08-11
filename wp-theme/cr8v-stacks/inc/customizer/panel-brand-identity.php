<?php
/**
 * CR8V Stacks — inc/customizer/panel-brand-identity.php
 * Brand Identity Design Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_brand_identity_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_brand_ident_panel', [
        'title'           => 'Serv Page: Brand Identity',
        'priority'        => 210,
        'active_callback' => function() {
            return is_page_template('page-service-brand-identity.php') || is_page('brand-identity') || is_page('brand-identity-design');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_bident_hero', '01. Hero Section', 'cr8v_brand_ident_panel', 10);
    _cr8v_text($wp_customize, 'bident_hero_crumb_parent', 'cr8v_bident_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'bident_hero_crumb_child', 'cr8v_bident_hero', 'Breadcrumb Child', 'BRAND IDENTITY DESIGN');
    _cr8v_text($wp_customize, 'bident_hero_label', 'cr8v_bident_hero', 'Section Label', 'Visual Identity Systems & Design Architecture');
    _cr8v_text($wp_customize, 'bident_hero_h1_part1', 'cr8v_bident_hero', 'Headline Part 1', 'Visual Identity Systems ');
    _cr8v_text($wp_customize, 'bident_hero_h1_serif', 'cr8v_bident_hero', 'Headline Serif Word', '& Brand Design');
    _cr8v_textarea($wp_customize, 'bident_hero_intro', 'cr8v_bident_hero', 'Hero Subtitle', 'Bespoke logo engineering, visual brand guidelines, typography tokens, and design systems engineered to build premium category presence and instant market authority.');
    _cr8v_text($wp_customize, 'bident_hero_cta1_text', 'cr8v_bident_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'bident_hero_cta1_url', 'cr8v_bident_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'bident_hero_cta2_text', 'cr8v_bident_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'bident_hero_cta2_url', 'cr8v_bident_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'bident_hero_pill1', 'cr8v_bident_hero', 'Pill 1', 'Figma');
    _cr8v_text($wp_customize, 'bident_hero_pill2', 'cr8v_bident_hero', 'Pill 2', 'Design System');
    _cr8v_text($wp_customize, 'bident_hero_pill3', 'cr8v_bident_hero', 'Pill 3', 'Typography');
    _cr8v_text($wp_customize, 'bident_hero_pill4', 'cr8v_bident_hero', 'Pill 4', 'Brand Guidelines');

    // ── 02. WHY BRAND IDENTITY (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_bident_flank', '02. Why Brand Identity (Flank Cards)', 'cr8v_brand_ident_panel', 20);
    _cr8v_text($wp_customize, 'bident_flank_label', 'cr8v_bident_flank', 'Section Label', 'Why Brand Identity');
    _cr8v_text($wp_customize, 'bident_flank_h2', 'cr8v_bident_flank', 'Section Title', 'Visual Systems Engineered For Premium Market Trust');

    _cr8v_text($wp_customize, 'bident_flank1_step', 'cr8v_bident_flank', 'Card 1 Step', 'Identity // Vector');
    _cr8v_text($wp_customize, 'bident_flank1_title', 'cr8v_bident_flank', 'Card 1 Title', 'Precision Logo Engineering');
    _cr8v_textarea($wp_customize, 'bident_flank1_desc', 'cr8v_bident_flank', 'Card 1 Description', 'Crafting memorable, scalable vector logo marks with geometric precision and multi-context versatility.');

    _cr8v_text($wp_customize, 'bident_flank2_step', 'cr8v_bident_flank', 'Card 2 Step', 'Tokens // Design');
    _cr8v_text($wp_customize, 'bident_flank2_title', 'cr8v_bident_flank', 'Card 2 Title', 'Typography & Color Systems');
    _cr8v_textarea($wp_customize, 'bident_flank2_desc', 'cr8v_bident_flank', 'Card 2 Description', 'Curating harmonious color palettes and modern typography scales that project instant quality.');

    _cr8v_text($wp_customize, 'bident_flank3_step', 'cr8v_bident_flank', 'Card 3 Step', 'Guidelines // Rules');
    _cr8v_text($wp_customize, 'bident_flank3_title', 'cr8v_bident_flank', 'Card 3 Title', 'Brand Identity Guidelines');
    _cr8v_textarea($wp_customize, 'bident_flank3_desc', 'cr8v_bident_flank', 'Card 3 Description', 'Defining clear usage rules, spacing ratios, dark mode variants, and misapplication safeguards.');

    _cr8v_text($wp_customize, 'bident_flank4_step', 'cr8v_bident_flank', 'Card 4 Step', 'System // Scalability');
    _cr8v_text($wp_customize, 'bident_flank4_title', 'cr8v_bident_flank', 'Card 4 Title', 'Cross-Platform Design Parity');
    _cr8v_textarea($wp_customize, 'bident_flank4_desc', 'cr8v_bident_flank', 'Card 4 Description', 'Ensuring flawless visual consistency across web UI, mobile apps, social media, and printed collateral.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_bident_work', '03. Our Work (Portfolio Showcase)', 'cr8v_brand_ident_panel', 30);
    _cr8v_text($wp_customize, 'bident_port_label', 'cr8v_bident_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'bident_port_h2_part1', 'cr8v_bident_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'bident_port_h2_serif', 'cr8v_bident_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'bident_port_client', 'cr8v_bident_work', 'Client Label', 'Case Study — BridgePoints');
    _cr8v_text($wp_customize, 'bident_port_title', 'cr8v_bident_work', 'Case Study Title', 'Visual Identity System & Design Architecture');
    _cr8v_textarea($wp_customize, 'bident_port_desc', 'cr8v_bident_work', 'Case Study Description', 'BridgePoints needed a high-trust visual brand identity for corporate compliance and advisory services. We designed their logo system, visual brand guidelines, typography scale, and color palette architecture.');
    _cr8v_img($wp_customize, 'bident_port_img', 'cr8v_bident_work', 'Case Study Image', 'https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'bident_port_stat1_val', 'cr8v_bident_work', 'Stat 1 Value', '1');
    _cr8v_text($wp_customize, 'bident_port_stat1_lbl', 'cr8v_bident_work', 'Stat 1 Label', 'Complete Visual Identity System & Guidelines');
    _cr8v_text($wp_customize, 'bident_port_stat2_val', 'cr8v_bident_work', 'Stat 2 Value', '100%');
    _cr8v_text($wp_customize, 'bident_port_stat2_lbl', 'cr8v_bident_work', 'Stat 2 Label', 'Brand Consistency Across Web & Collateral');
    _cr8v_text($wp_customize, 'bident_port_btn_text', 'cr8v_bident_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'bident_port_btn_url', 'cr8v_bident_work', 'Link URL', '/case-studies/bridgepoints/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_bident_folder', '04. What You Get (Folder Deck)', 'cr8v_brand_ident_panel', 40);
    _cr8v_text($wp_customize, 'bident_folder_label', 'cr8v_bident_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'bident_folder_h2_part1', 'cr8v_bident_folder', 'Title Part 1', 'Every layer of your visual identity, ');
    _cr8v_text($wp_customize, 'bident_folder_h2_serif', 'cr8v_bident_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'bident_folder_desc', 'cr8v_bident_folder', 'Subtitle', 'Vector logo systems, color token architectures, custom typography scales, brand rulebooks, and digital collateral templates.');

    _cr8v_text($wp_customize, 'bident_folder1_tab', 'cr8v_bident_folder', 'Card 1 Tab', '01 // Logo');
    _cr8v_text($wp_customize, 'bident_folder1_title', 'cr8v_bident_folder', 'Card 1 Title', 'Primary & Secondary Logo Marks');
    _cr8v_textarea($wp_customize, 'bident_folder1_desc', 'cr8v_bident_folder', 'Card 1 Description', 'Vector logo suite including primary logotype, sub-marks, favicons, and monochrome dark/light variants.');

    _cr8v_text($wp_customize, 'bident_folder2_tab', 'cr8v_bident_folder', 'Card 2 Tab', '02 // Color');
    _cr8v_text($wp_customize, 'bident_folder2_title', 'cr8v_bident_folder', 'Card 2 Title', 'Color Token & Palette Architecture');
    _cr8v_textarea($wp_customize, 'bident_folder2_desc', 'cr8v_bident_folder', 'Card 2 Description', 'Curating primary brand colors, secondary accents, neutral backgrounds, and accessibility contrast pairs.');

    _cr8v_text($wp_customize, 'bident_folder3_tab', 'cr8v_bident_folder', 'Card 3 Tab', '03 // Typography');
    _cr8v_text($wp_customize, 'bident_folder3_title', 'cr8v_bident_folder', 'Card 3 Title', 'Typography Hierarchy & Typeface Scale');
    _cr8v_textarea($wp_customize, 'bident_folder3_desc', 'cr8v_bident_folder', 'Card 3 Description', 'Selecting web-safe Google/custom fonts with defined H1-H6 scales, body text line-heights, and letter spacing.');

    _cr8v_text($wp_customize, 'bident_folder4_tab', 'cr8v_bident_folder', 'Card 4 Tab', '04 // Guidelines');
    _cr8v_text($wp_customize, 'bident_folder4_title', 'cr8v_bident_folder', 'Card 4 Title', 'Figma Brand Identity Guidelines');
    _cr8v_textarea($wp_customize, 'bident_folder4_desc', 'cr8v_bident_folder', 'Card 4 Description', 'A comprehensive digital brand book documenting clear usage rules, clear-space ratios, and icon sets.');

    _cr8v_text($wp_customize, 'bident_folder5_tab', 'cr8v_bident_folder', 'Card 5 Tab', '05 // Collateral');
    _cr8v_text($wp_customize, 'bident_folder5_title', 'cr8v_bident_folder', 'Card 5 Title', 'Social & Marketing Asset Templates');
    _cr8v_textarea($wp_customize, 'bident_folder5_desc', 'cr8v_bident_folder', 'Card 5 Description', 'Editable Figma templates for social media posts, pitch decks, business cards, and email signatures.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_bident_approach', '05. How We Approach It (Process)', 'cr8v_brand_ident_panel', 50);
    _cr8v_text($wp_customize, 'bident_app_label', 'cr8v_bident_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'bident_app_h2', 'cr8v_bident_approach', 'Section Title', 'How We Approach Brand Identity Design');
    _cr8v_textarea($wp_customize, 'bident_app_sub', 'cr8v_bident_approach', 'Subtitle', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');

    _cr8v_text($wp_customize, 'bident_app1_num', 'cr8v_bident_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'bident_app1_name', 'cr8v_bident_approach', 'Stage 1 Name', 'Concept');
    _cr8v_text($wp_customize, 'bident_app1_tags', 'cr8v_bident_approach', 'Stage 1 Tags', 'Moodboards · Directions · Sketches');
    _cr8v_textarea($wp_customize, 'bident_app1_desc', 'cr8v_bident_approach', 'Stage 1 Description', 'We analyze brand strategy blueprints, create visual moodboards, and sketch initial logo concept directions.');

    _cr8v_text($wp_customize, 'bident_app2_num', 'cr8v_bident_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'bident_app2_name', 'cr8v_bident_approach', 'Stage 2 Name', 'Vectorize');
    _cr8v_text($wp_customize, 'bident_app2_tags', 'cr8v_bident_approach', 'Stage 2 Tags', 'Geometry · Grid · Logotype');
    _cr8v_textarea($wp_customize, 'bident_app2_desc', 'cr8v_bident_approach', 'Stage 2 Description', 'We refine selected concept vectors on geometric grid systems, establishing exact proportions and alignment.');

    _cr8v_text($wp_customize, 'bident_app3_num', 'cr8v_bident_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'bident_app3_name', 'cr8v_bident_approach', 'Stage 3 Name', 'Systemize');
    _cr8v_text($wp_customize, 'bident_app3_tags', 'cr8v_bident_approach', 'Stage 3 Tags', 'Colors · Typography · Tokens');
    _cr8v_textarea($wp_customize, 'bident_app3_desc', 'cr8v_bident_approach', 'Stage 3 Description', 'We construct the complete design system — pairing typography scales, color palettes, and UI tokens.');

    _cr8v_text($wp_customize, 'bident_app4_num', 'cr8v_bident_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'bident_app4_name', 'cr8v_bident_approach', 'Stage 4 Name', 'Deliver');
    _cr8v_text($wp_customize, 'bident_app4_tags', 'cr8v_bident_approach', 'Stage 4 Tags', 'Brand Book · Assets · Templates');
    _cr8v_textarea($wp_customize, 'bident_app4_desc', 'cr8v_bident_approach', 'Stage 4 Description', 'We compile your final Figma Brand Book and export vector assets SVG, PNG, EPS, and PDF formats.');

    // ── 05.5. VISUAL IDENTITY OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_bident_plat', '05.5. Visual Identity Options', 'cr8v_brand_ident_panel', 55);
    _cr8v_text($wp_customize, 'bident_plat_label', 'cr8v_bident_plat', 'Section Label', 'Visual Identity Options');
    _cr8v_text($wp_customize, 'bident_plat_h2_part1', 'cr8v_bident_plat', 'Title Part 1', 'Choosing Your ');
    _cr8v_text($wp_customize, 'bident_plat_h2_serif', 'cr8v_bident_plat', 'Title Serif Word', 'Design Scope');

    _cr8v_text($wp_customize, 'bident_plat1_badge', 'cr8v_bident_plat', 'Option 1 Badge', 'Stack // Core');
    _cr8v_text($wp_customize, 'bident_plat1_title', 'cr8v_bident_plat', 'Option 1 Title', 'Core Logo & Color Package');
    _cr8v_textarea($wp_customize, 'bident_plat1_desc', 'cr8v_bident_plat', 'Option 1 Description', 'For early-stage companies needing a professional primary logo, color palette, and font pairing.');

    _cr8v_text($wp_customize, 'bident_plat2_badge', 'cr8v_bident_plat', 'Option 2 Badge', 'Stack // Identity');
    _cr8v_text($wp_customize, 'bident_plat2_title', 'cr8v_bident_plat', 'Option 2 Title', 'Complete Visual Identity System');
    _cr8v_textarea($wp_customize, 'bident_plat2_desc', 'cr8v_bident_plat', 'Option 2 Description', 'For growing businesses requiring logo suites, full brand guidelines, and collateral templates.');

    _cr8v_text($wp_customize, 'bident_plat3_badge', 'cr8v_bident_plat', 'Option 3 Badge', 'Stack // Rebrand');
    _cr8v_text($wp_customize, 'bident_plat3_title', 'cr8v_bident_plat', 'Option 3 Title', 'Enterprise Rebrand System');
    _cr8v_textarea($wp_customize, 'bident_plat3_desc', 'cr8v_bident_plat', 'Option 3 Description', 'For established organizations replacing outdated brand identity assets across all touchpoints.');

    _cr8v_text($wp_customize, 'bident_plat4_badge', 'cr8v_bident_plat', 'Option 4 Badge', 'Stack // Retainer');
    _cr8v_text($wp_customize, 'bident_plat4_title', 'cr8v_bident_plat', 'Option 4 Title', 'Design System Support Retainer');
    _cr8v_textarea($wp_customize, 'bident_plat4_desc', 'cr8v_bident_plat', 'Option 4 Description', 'Ongoing design asset production, marketing templates, and visual system updates.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_bident_hl', '06. Project Catalog (Hoverlist)', 'cr8v_brand_ident_panel', 60);
    _cr8v_text($wp_customize, 'bident_hl_label', 'cr8v_bident_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'bident_hl_h2', 'cr8v_bident_hl', 'Section Title', 'Every Kind of Visual Identity We Engineer');
    _cr8v_textarea($wp_customize, 'bident_hl_sub', 'cr8v_bident_hl', 'Subtitle', 'From corporate logo suites to e-commerce brand systems — hover to inspect the design stack.');

    _cr8v_text($wp_customize, 'bident_hl1_title', 'cr8v_bident_hl', 'Item 1 Title', 'Corporate & B2B Identity Systems');
    _cr8v_textarea($wp_customize, 'bident_hl1_tagline', 'cr8v_bident_hl', 'Item 1 Tagline', 'High-trust logo marks, corporate identity guidelines, and pitch deck templates.');

    _cr8v_text($wp_customize, 'bident_hl2_title', 'cr8v_bident_hl', 'Item 2 Title', 'E-Commerce & Retail Brand Design');
    _cr8v_textarea($wp_customize, 'bident_hl2_tagline', 'cr8v_bident_hl', 'Item 2 Tagline', 'Packaging design guidelines, unboxing collateral, and Shopify visual assets.');

    _cr8v_text($wp_customize, 'bident_hl3_title', 'cr8v_bident_hl', 'Item 3 Title', 'Tech Startup Logo & Vector Suites');
    _cr8v_textarea($wp_customize, 'bident_hl3_tagline', 'cr8v_bident_hl', 'Item 3 Tagline', 'Modern minimalist vector icons, dark-mode logotypes, and app icon assets.');

    _cr8v_text($wp_customize, 'bident_hl4_title', 'cr8v_bident_hl', 'Item 4 Title', 'Professional Services Identity');
    _cr8v_textarea($wp_customize, 'bident_hl4_tagline', 'cr8v_bident_hl', 'Item 4 Tagline', 'Refined identity systems for legal, financial, and consulting firms.');

    _cr8v_text($wp_customize, 'bident_hl5_title', 'cr8v_bident_hl', 'Item 5 Title', 'Design System & Component Libraries');
    _cr8v_textarea($wp_customize, 'bident_hl5_tagline', 'cr8v_bident_hl', 'Item 5 Tagline', 'Figma UI component libraries, color variables, and typography tokens.');

    _cr8v_text($wp_customize, 'bident_hl6_title', 'cr8v_bident_hl', 'Item 6 Title', 'Social Media & Marketing Templates');
    _cr8v_textarea($wp_customize, 'bident_hl6_tagline', 'cr8v_bident_hl', 'Item 6 Tagline', 'Reusable Figma graphic templates for Instagram, LinkedIn, and ad banners.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_bident_testi', '07. Client Feedback (Testimonials)', 'cr8v_brand_ident_panel', 70);
    _cr8v_text($wp_customize, 'bident_testi_label', 'cr8v_bident_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'bident_testi_h2_part1', 'cr8v_bident_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'bident_testi_h2_serif', 'cr8v_bident_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'bident_testi1_text', 'cr8v_bident_testi', 'Testimonial 1 Text', 'The visual identity system Cr8v Stacks engineered gave us immediate corporate credibility. Our brand book keeps every collateral piece aligned.');
    _cr8v_text($wp_customize, 'bident_testi1_author', 'cr8v_bident_testi', 'Testimonial 1 Author', 'Managing Partner — Corporate Advisory');

    _cr8v_textarea($wp_customize, 'bident_testi2_text', 'cr8v_bident_testi', 'Testimonial 2 Text', 'From the vector logo mark to the typography scale, everything was crafted with incredible visual quality. Our website now looks like a multi-million dollar brand.');
    _cr8v_text($wp_customize, 'bident_testi2_author', 'cr8v_bident_testi', 'Testimonial 2 Author', 'Kelechi Amadi — Operations Director');

    _cr8v_textarea($wp_customize, 'bident_testi3_text', 'cr8v_bident_testi', 'Testimonial 3 Text', 'The Figma asset templates saved our marketing team dozens of hours every month. The visual consistency across web and social is flawless.');
    _cr8v_text($wp_customize, 'bident_testi3_author', 'cr8v_bident_testi', 'Testimonial 3 Author', 'Victoria Vance — Creative Brand Director');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_bident_pricing', '08. Pricing Models & Estimator', 'cr8v_brand_ident_panel', 80);
    _cr8v_text($wp_customize, 'bident_pricing_label', 'cr8v_bident_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'bident_pricing_h2_part1', 'cr8v_bident_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'bident_pricing_h2_serif', 'cr8v_bident_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'bident_pricing_desc', 'cr8v_bident_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_bident_faq', '09. Frequently Asked Questions', 'cr8v_brand_ident_panel', 90);
    _cr8v_text($wp_customize, 'bident_faq_eyebrow', 'cr8v_bident_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'bident_faq_h2', 'cr8v_bident_faq', 'Title', 'Brand Identity Design FAQ');
    _cr8v_textarea($wp_customize, 'bident_faq_sub', 'cr8v_bident_faq', 'Subtitle', 'Clear answers to common questions about our vector logo design, brand guidelines, and design systems.');

    _cr8v_text($wp_customize, 'bident_faq1_q', 'cr8v_bident_faq', 'FAQ 1 Question', 'What vector file formats do you deliver for the logo system?');
    _cr8v_textarea($wp_customize, 'bident_faq1_a', 'cr8v_bident_faq', 'FAQ 1 Answer', 'We deliver full vector EPS, SVG, PDF, and high-resolution PNG/JPEG files in RGB, CMYK, and monochrome color spaces, along with an open Figma design system source file.');

    _cr8v_text($wp_customize, 'bident_faq2_q', 'cr8v_bident_faq', 'FAQ 2 Question', 'How many initial logo concepts do we receive?');
    _cr8v_textarea($wp_customize, 'bident_faq2_a', 'cr8v_bident_faq', 'FAQ 2 Answer', 'We present 3 distinct visual concept directions based on your brand strategy phase. Once a direction is chosen, we iterate through fine-tuning rounds until vector perfection.');

    _cr8v_text($wp_customize, 'bident_faq3_q', 'cr8v_bident_faq', 'FAQ 3 Question', 'What is included in the Brand Identity Guidelines manual?');
    _cr8v_textarea($wp_customize, 'bident_faq3_a', 'cr8v_bident_faq', 'FAQ 3 Answer', 'Our Brand Book documents clear logo clear-space rules, min-size thresholds, color hex/RGB codes, font pairing scales, social media avatar rules, and visual misapplication examples.');

    _cr8v_text($wp_customize, 'bident_faq4_q', 'cr8v_bident_faq', 'FAQ 4 Question', 'Do you also design business cards and marketing materials?');
    _cr8v_textarea($wp_customize, 'bident_faq4_a', 'cr8v_bident_faq', 'FAQ 4 Answer', 'Yes. We include custom design templates for stationery, business cards, email signatures, pitch decks, and social media graphics.');

    _cr8v_text($wp_customize, 'bident_faq5_q', 'cr8v_bident_faq', 'FAQ 5 Question', 'How long does a brand identity design project take?');
    _cr8v_textarea($wp_customize, 'bident_faq5_a', 'cr8v_bident_faq', 'FAQ 5 Answer', 'Our standard visual identity design engagement takes 2 to 3 weeks from initial concept briefing to final brand asset delivery.');

    _cr8v_text($wp_customize, 'bident_faq6_q', 'cr8v_bident_faq', 'FAQ 6 Question', 'Who owns the intellectual property and copyright for the logo design?');
    _cr8v_textarea($wp_customize, 'bident_faq6_a', 'cr8v_bident_faq', 'FAQ 6 Answer', 'You own 100% of the copyright, vector source files, and trademark rights to your final brand identity system upon final project payment.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_bident_cta', '10. Bottom CTA Section', 'cr8v_brand_ident_panel', 100);
    _cr8v_text($wp_customize, 'bident_cta_label', 'cr8v_bident_cta', 'Section Label', 'READY TO DESIGN?');
    _cr8v_text($wp_customize, 'bident_cta_h2_part1', 'cr8v_bident_cta', 'Title Part 1', 'Let’s Engineer Your ');
    _cr8v_text($wp_customize, 'bident_cta_h2_serif', 'cr8v_bident_cta', 'Title Serif Word', 'Visual Identity');
    _cr8v_textarea($wp_customize, 'bident_cta_desc', 'cr8v_bident_cta', 'Subtitle', 'Tell us about your brand goals to receive a complete price quote and design proposal within 24 hours.');
    _cr8v_text($wp_customize, 'bident_cta_btn_text', 'cr8v_bident_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'bident_cta_btn_url', 'cr8v_bident_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_brand_identity_panel');
