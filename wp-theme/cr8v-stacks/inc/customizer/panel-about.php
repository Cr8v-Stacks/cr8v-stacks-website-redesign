<?php
defined('ABSPATH') || exit;
    $wp_customize->add_panel('cr8v_about_panel', [
        'active_callback' => function() { return is_page('about') || is_page('about-us') || is_page_template('page-about.php'); },
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
    _cr8v_img($wp_customize, 'abt_srv1_thumb', 'cr8v_abt_services', 'Service 1 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_webdesign.webp');
    _cr8v_img($wp_customize, 'abt_srv1_img',   'cr8v_abt_services', 'Service 1 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_webdesign.webp');
    _cr8v_textarea($wp_customize, 'abt_srv1_desc', 'cr8v_abt_services', 'Service 1 Description', 'High-converting digital experiences engineered for speed, search authority, and seamless user conversions.');
    
    _cr8v_text($wp_customize, 'abt_srv2_title', 'cr8v_abt_services', 'Service 2 Title', 'Custom Software & APIs');
    _cr8v_text($wp_customize, 'abt_srv2_tag',   'cr8v_abt_services', 'Service 2 Tag', 'Build Layer');
    _cr8v_text($wp_customize, 'abt_srv2_link',  'cr8v_abt_services', 'Service 2 Link', '/services/custom-dev/');
    _cr8v_img($wp_customize, 'abt_srv2_thumb', 'cr8v_abt_services', 'Service 2 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_customdev.webp');
    _cr8v_img($wp_customize, 'abt_srv2_img',   'cr8v_abt_services', 'Service 2 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_customdev.webp');
    _cr8v_textarea($wp_customize, 'abt_srv2_desc', 'cr8v_abt_services', 'Service 2 Description', 'Bespoke web applications, internal tools, custom API integrations, and scalable PHP/JS architectures.');
    
    _cr8v_text($wp_customize, 'abt_srv3_title', 'cr8v_abt_services', 'Service 3 Title', 'AI Product MVPs');
    _cr8v_text($wp_customize, 'abt_srv3_tag',   'cr8v_abt_services', 'Service 3 Tag', 'Build Layer');
    _cr8v_text($wp_customize, 'abt_srv3_link',  'cr8v_abt_services', 'Service 3 Link', '/services/ai-mvp/');
    _cr8v_img($wp_customize, 'abt_srv3_thumb', 'cr8v_abt_services', 'Service 3 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_aimvp.webp');
    _cr8v_img($wp_customize, 'abt_srv3_img',   'cr8v_abt_services', 'Service 3 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_aimvp.webp');
    _cr8v_textarea($wp_customize, 'abt_srv3_desc', 'cr8v_abt_services', 'Service 3 Description', 'Production-grade AI applications, LLM workflow integrations, and rapid prototype platforms.');
    
    _cr8v_text($wp_customize, 'abt_srv4_title', 'cr8v_abt_services', 'Service 4 Title', 'Brand Strategy & Voice');
    _cr8v_text($wp_customize, 'abt_srv4_tag',   'cr8v_abt_services', 'Service 4 Tag', 'Growth Layer');
    _cr8v_text($wp_customize, 'abt_srv4_link',  'cr8v_abt_services', 'Service 4 Link', '/services/brand-strategy/');
    _cr8v_img($wp_customize, 'abt_srv4_thumb', 'cr8v_abt_services', 'Service 4 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_brandstrategy.webp');
    _cr8v_img($wp_customize, 'abt_srv4_img',   'cr8v_abt_services', 'Service 4 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_brandstrategy.webp');
    _cr8v_textarea($wp_customize, 'abt_srv4_desc', 'cr8v_abt_services', 'Service 4 Description', 'Market positioning, competitor teardowns, value proposition frameworks, and pricing scoping.');
    
    _cr8v_text($wp_customize, 'abt_srv5_title', 'cr8v_abt_services', 'Service 5 Title', 'SEO & Entity Search');
    _cr8v_text($wp_customize, 'abt_srv5_tag',   'cr8v_abt_services', 'Service 5 Tag', 'Growth Layer');
    _cr8v_text($wp_customize, 'abt_srv5_link',  'cr8v_abt_services', 'Service 5 Link', '/services/seo-content/');
    _cr8v_img($wp_customize, 'abt_srv5_thumb', 'cr8v_abt_services', 'Service 5 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_seocontent.webp');
    _cr8v_img($wp_customize, 'abt_srv5_img',   'cr8v_abt_services', 'Service 5 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_seocontent.webp');
    _cr8v_textarea($wp_customize, 'abt_srv5_desc', 'cr8v_abt_services', 'Service 5 Description', 'Technical search architecture, Schema JSON-LD entity mapping, Core Web Vitals optimization.');
    
    _cr8v_text($wp_customize, 'abt_srv6_title', 'cr8v_abt_services', 'Service 6 Title', 'Digital Marketing');
    _cr8v_text($wp_customize, 'abt_srv6_tag',   'cr8v_abt_services', 'Service 6 Tag', 'Growth Layer');
    _cr8v_text($wp_customize, 'abt_srv6_link',  'cr8v_abt_services', 'Service 6 Link', '/services/digital-marketing/');
    _cr8v_img($wp_customize, 'abt_srv6_thumb', 'cr8v_abt_services', 'Service 6 Tab Thumbnail', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_digimkt.webp');
    _cr8v_img($wp_customize, 'abt_srv6_img',   'cr8v_abt_services', 'Service 6 Panel Visual', get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_digimkt.webp');
    _cr8v_textarea($wp_customize, 'abt_srv6_desc', 'cr8v_abt_services', 'Service 6 Description', 'Multi-channel campaigns and lead acquisition retainers built on strategic brand positioning.');

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
    _cr8v_img($wp_customize, 'abt_plr_c2_img', 'cr8v_abt_pillars', 'Card 2 Visual Image', get_template_directory_uri() . '/assets/img/abstract/cr8v_hww_chiaroscuro_beam.webp');
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
