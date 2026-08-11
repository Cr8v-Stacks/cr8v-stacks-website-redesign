<?php
/**
 * CR8V Stacks — inc/customizer/panel-digital-marketing.php
 * Digital Marketing Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_digital_marketing_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_digimkt_panel', [
        'title'           => 'Serv Page: Digital Mktg',
        'priority'        => 209,
        'active_callback' => function() {
            return is_page_template('page-service-digital-marketing.php') || is_page('digital-marketing') || is_page('marketing');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_hero', '01. Hero Section', 'cr8v_digimkt_panel', 10);
    _cr8v_text($wp_customize, 'digimkt_hero_crumb_parent', 'cr8v_digimkt_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'digimkt_hero_crumb_child', 'cr8v_digimkt_hero', 'Breadcrumb Child', 'DIGITAL MARKETING');
    _cr8v_text($wp_customize, 'digimkt_hero_label', 'cr8v_digimkt_hero', 'Section Label', 'Performance Acquisition & Paid Campaign Engineering');
    _cr8v_text($wp_customize, 'digimkt_hero_h1_part1', 'cr8v_digimkt_hero', 'Headline Part 1', 'Paid Lead Acquisition ');
    _cr8v_text($wp_customize, 'digimkt_hero_h1_serif', 'cr8v_digimkt_hero', 'Headline Serif Word', '& Growth Funnels');
    _cr8v_textarea($wp_customize, 'digimkt_hero_intro', 'cr8v_digimkt_hero', 'Hero Subtitle', 'Multi-channel paid campaigns, server-side conversion tracking, and automated lifecycle marketing funnels engineered to scale customer acquisition and return on ad spend (ROAS).');
    _cr8v_text($wp_customize, 'digimkt_hero_cta1_text', 'cr8v_digimkt_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'digimkt_hero_cta1_url', 'cr8v_digimkt_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'digimkt_hero_cta2_text', 'cr8v_digimkt_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'digimkt_hero_cta2_url', 'cr8v_digimkt_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'digimkt_hero_pill1', 'cr8v_digimkt_hero', 'Pill 1', 'Meta Ads');
    _cr8v_text($wp_customize, 'digimkt_hero_pill2', 'cr8v_digimkt_hero', 'Pill 2', 'Google Ads');
    _cr8v_text($wp_customize, 'digimkt_hero_pill3', 'cr8v_digimkt_hero', 'Pill 3', 'Klaviyo');
    _cr8v_text($wp_customize, 'digimkt_hero_pill4', 'cr8v_digimkt_hero', 'Pill 4', 'GA4');

    // ── 02. WHY DIGITAL MARKETING (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_flank', '02. Why Digital Marketing (Flank Cards)', 'cr8v_digimkt_panel', 20);
    _cr8v_text($wp_customize, 'digimkt_flank_label', 'cr8v_digimkt_flank', 'Section Label', 'Why Digital Marketing');
    _cr8v_text($wp_customize, 'digimkt_flank_h2', 'cr8v_digimkt_flank', 'Section Title', 'Acquisition Campaigns Built On Brand Positioning');

    _cr8v_text($wp_customize, 'digimkt_flank1_step', 'cr8v_digimkt_flank', 'Card 1 Step', 'Strategy // Aligned');
    _cr8v_text($wp_customize, 'digimkt_flank1_title', 'cr8v_digimkt_flank', 'Card 1 Title', 'Positioning-Led Ad Creative');
    _cr8v_textarea($wp_customize, 'digimkt_flank1_desc', 'cr8v_digimkt_flank', 'Card 1 Description', 'Ad campaigns engineered directly from your Brand Strategy positioning so every impression resonates with high-intent buyers.');

    _cr8v_text($wp_customize, 'digimkt_flank2_step', 'cr8v_digimkt_flank', 'Card 2 Step', 'Tracking // Precision');
    _cr8v_text($wp_customize, 'digimkt_flank2_title', 'cr8v_digimkt_flank', 'Card 2 Title', 'Server-side Conversion Tracking');
    _cr8v_textarea($wp_customize, 'digimkt_flank2_desc', 'cr8v_digimkt_flank', 'Card 2 Description', 'Precision Google Tag Manager, GA4, and Meta Conversions API (CAPI) wiring for 100% accurate attribution.');

    _cr8v_text($wp_customize, 'digimkt_flank3_step', 'cr8v_digimkt_flank', 'Card 3 Step', 'Funnel // Retention');
    _cr8v_text($wp_customize, 'digimkt_flank3_title', 'cr8v_digimkt_flank', 'Card 3 Title', 'Automated Email Lifecycles');
    _cr8v_textarea($wp_customize, 'digimkt_flank3_desc', 'cr8v_digimkt_flank', 'Card 3 Description', 'Klaviyo and Mailchimp email autoresponders that nurture leads and maximize customer lifetime value.');

    _cr8v_text($wp_customize, 'digimkt_flank4_step', 'cr8v_digimkt_flank', 'Card 4 Step', 'ROI // Transparency');
    _cr8v_text($wp_customize, 'digimkt_flank4_title', 'cr8v_digimkt_flank', 'Card 4 Title', 'ROAS & CAC Optimization');
    _cr8v_textarea($wp_customize, 'digimkt_flank4_desc', 'cr8v_digimkt_flank', 'Card 4 Description', 'Continuous creative A/B testing, audience pruning, and bid management focused strictly on profitable customer acquisition.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_work', '03. Our Work (Portfolio Showcase)', 'cr8v_digimkt_panel', 30);
    _cr8v_text($wp_customize, 'digimkt_port_label', 'cr8v_digimkt_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'digimkt_port_h2_part1', 'cr8v_digimkt_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'digimkt_port_h2_serif', 'cr8v_digimkt_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'digimkt_port_client', 'cr8v_digimkt_work', 'Client Label', 'Case Study — Stride Plus Media');
    _cr8v_text($wp_customize, 'digimkt_port_title', 'cr8v_digimkt_work', 'Case Study Title', 'One Team Behind Stride Radio\'s Full Acquisition Funnel');
    _cr8v_textarea($wp_customize, 'digimkt_port_desc', 'cr8v_digimkt_work', 'Case Study Description', 'Digital marketing for Stride Radio wasn\'t handled separately from the brand or the app — we ran Google Ads, Google Tag conversion tracking, Facebook Ads, and YouTube Ads as one connected funnel, built on the same positioning we defined in the brand strategy phase.');
    _cr8v_img($wp_customize, 'digimkt_port_img', 'cr8v_digimkt_work', 'Case Study Image', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'digimkt_port_stat1_val', 'cr8v_digimkt_work', 'Stat 1 Value', '4');
    _cr8v_text($wp_customize, 'digimkt_port_stat1_lbl', 'cr8v_digimkt_work', 'Stat 1 Label', 'Ad Channels Run Under One Message');
    _cr8v_text($wp_customize, 'digimkt_port_stat2_val', 'cr8v_digimkt_work', 'Stat 2 Value', '0');
    _cr8v_text($wp_customize, 'digimkt_port_stat2_lbl', 'cr8v_digimkt_work', 'Stat 2 Label', 'Third-party Handoffs');
    _cr8v_text($wp_customize, 'digimkt_port_btn_text', 'cr8v_digimkt_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'digimkt_port_btn_url', 'cr8v_digimkt_work', 'Link URL', '/case-studies/stride-plus-media/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_folder', '04. What You Get (Folder Deck)', 'cr8v_digimkt_panel', 40);
    _cr8v_text($wp_customize, 'digimkt_folder_label', 'cr8v_digimkt_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'digimkt_folder_h2_part1', 'cr8v_digimkt_folder', 'Title Part 1', 'Every layer of your marketing funnel, ');
    _cr8v_text($wp_customize, 'digimkt_folder_h2_serif', 'cr8v_digimkt_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'digimkt_folder_desc', 'cr8v_digimkt_folder', 'Subtitle', 'Multi-channel paid campaigns, server-side conversion tracking, automated email workflows, landing page CRO, and real-time ROAS reporting.');

    _cr8v_text($wp_customize, 'digimkt_folder1_tab', 'cr8v_digimkt_folder', 'Card 1 Tab', '01 // Paid Ads');
    _cr8v_text($wp_customize, 'digimkt_folder1_title', 'cr8v_digimkt_folder', 'Card 1 Title', 'Google & Meta Ad Campaigns');
    _cr8v_textarea($wp_customize, 'digimkt_folder1_desc', 'cr8v_digimkt_folder', 'Card 1 Description', 'Bespoke search, display, retargeting, and Meta ad campaign setup built around high-intent buyer keywords.');

    _cr8v_text($wp_customize, 'digimkt_folder2_tab', 'cr8v_digimkt_folder', 'Card 2 Tab', '02 // Tracking');
    _cr8v_text($wp_customize, 'digimkt_folder2_title', 'cr8v_digimkt_folder', 'Card 2 Title', 'GTM, GA4 & Meta CAPI Setup');
    _cr8v_textarea($wp_customize, 'digimkt_folder2_desc', 'cr8v_digimkt_folder', 'Card 2 Description', 'Server-side Google Tag Manager and Meta Conversions API (CAPI) wiring for complete attribution data.');

    _cr8v_text($wp_customize, 'digimkt_folder3_tab', 'cr8v_digimkt_folder', 'Card 3 Tab', '03 // Automation');
    _cr8v_text($wp_customize, 'digimkt_folder3_title', 'cr8v_digimkt_folder', 'Card 3 Title', 'Klaviyo & Mailchimp Autoresponders');
    _cr8v_textarea($wp_customize, 'digimkt_folder3_desc', 'cr8v_digimkt_folder', 'Card 3 Description', 'Lifecycle email sequences, welcome flows, abandoned cart triggers, and re-engagement campaigns.');

    _cr8v_text($wp_customize, 'digimkt_folder4_tab', 'cr8v_digimkt_folder', 'Card 4 Tab', '04 // Conversion');
    _cr8v_text($wp_customize, 'digimkt_folder4_title', 'cr8v_digimkt_folder', 'Card 4 Title', 'Landing Page CRO & A/B Testing');
    _cr8v_textarea($wp_customize, 'digimkt_folder4_desc', 'cr8v_digimkt_folder', 'Card 4 Description', 'Optimizing hero headlines, CTA placement, and form friction to increase visitor-to-lead conversion rates.');

    _cr8v_text($wp_customize, 'digimkt_folder5_tab', 'cr8v_digimkt_folder', 'Card 5 Tab', '05 // Reporting');
    _cr8v_text($wp_customize, 'digimkt_folder5_title', 'cr8v_digimkt_folder', 'Card 5 Title', 'Real-time ROAS & CAC Analytics');
    _cr8v_textarea($wp_customize, 'digimkt_folder5_desc', 'cr8v_digimkt_folder', 'Card 5 Description', 'Transparent performance dashboards monitoring customer acquisition cost (CAC) and return on ad spend (ROAS).');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_approach', '05. How We Approach It (Process)', 'cr8v_digimkt_panel', 50);
    _cr8v_text($wp_customize, 'digimkt_app_label', 'cr8v_digimkt_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'digimkt_app_h2', 'cr8v_digimkt_approach', 'Section Title', 'How We Approach Digital Marketing');
    _cr8v_textarea($wp_customize, 'digimkt_app_sub', 'cr8v_digimkt_approach', 'Subtitle', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');

    _cr8v_text($wp_customize, 'digimkt_app1_num', 'cr8v_digimkt_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'digimkt_app1_name', 'cr8v_digimkt_approach', 'Stage 1 Name', 'Audit');
    _cr8v_text($wp_customize, 'digimkt_app1_tags', 'cr8v_digimkt_approach', 'Stage 1 Tags', 'Funnel · Audiences · Tracking');
    _cr8v_textarea($wp_customize, 'digimkt_app1_desc', 'cr8v_digimkt_approach', 'Stage 1 Description', 'We audit existing campaign assets, analyze conversion funnels, map audience personas, and check tracking tag health.');

    _cr8v_text($wp_customize, 'digimkt_app2_num', 'cr8v_digimkt_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'digimkt_app2_name', 'cr8v_digimkt_approach', 'Stage 2 Name', 'Build');
    _cr8v_text($wp_customize, 'digimkt_app2_tags', 'cr8v_digimkt_approach', 'Stage 2 Tags', 'Ad Creative · Copy · Wiring');
    _cr8v_textarea($wp_customize, 'digimkt_app2_desc', 'cr8v_digimkt_approach', 'Stage 2 Description', 'We draft high-converting ad copy, design visual creative assets, build landing pages, and configure GTM tracking pixels.');

    _cr8v_text($wp_customize, 'digimkt_app3_num', 'cr8v_digimkt_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'digimkt_app3_name', 'cr8v_digimkt_approach', 'Stage 3 Name', 'Launch');
    _cr8v_text($wp_customize, 'digimkt_app3_tags', 'cr8v_digimkt_approach', 'Stage 3 Tags', 'Google Ads · Meta · Automations');
    _cr8v_textarea($wp_customize, 'digimkt_app3_desc', 'cr8v_digimkt_approach', 'Stage 3 Description', 'We launch targeted paid campaigns across search and social channels while triggering automated email welcome flows.');

    _cr8v_text($wp_customize, 'digimkt_app4_num', 'cr8v_digimkt_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'digimkt_app4_name', 'cr8v_digimkt_approach', 'Stage 4 Name', 'Scale');
    _cr8v_text($wp_customize, 'digimkt_app4_tags', 'cr8v_digimkt_approach', 'Stage 4 Tags', 'Optimization · CAC · ROAS');
    _cr8v_textarea($wp_customize, 'digimkt_app4_desc', 'cr8v_digimkt_approach', 'Stage 4 Description', 'We prune non-performing keywords, A/B test ad variations, scale winning audiences, and optimize CAC efficiency.');

    // ── 05.5. ACQUISITION STACK OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_plat', '05.5. Acquisition Stack Options', 'cr8v_digimkt_panel', 55);
    _cr8v_text($wp_customize, 'digimkt_plat_label', 'cr8v_digimkt_plat', 'Section Label', 'Marketing Channel Options');
    _cr8v_text($wp_customize, 'digimkt_plat_h2_part1', 'cr8v_digimkt_plat', 'Title Part 1', 'Choosing Your ');
    _cr8v_text($wp_customize, 'digimkt_plat_h2_serif', 'cr8v_digimkt_plat', 'Title Serif Word', 'Acquisition Stack');

    _cr8v_text($wp_customize, 'digimkt_plat1_badge', 'cr8v_digimkt_plat', 'Option 1 Badge', 'Stack // Search');
    _cr8v_text($wp_customize, 'digimkt_plat1_title', 'cr8v_digimkt_plat', 'Option 1 Title', 'Google Search & Shopping Ads');
    _cr8v_textarea($wp_customize, 'digimkt_plat1_desc', 'cr8v_digimkt_plat', 'Option 1 Description', 'Capturing high-intent buyers searching directly for your products or B2B solutions on Google.');

    _cr8v_text($wp_customize, 'digimkt_plat2_badge', 'cr8v_digimkt_plat', 'Option 2 Badge', 'Stack // Social');
    _cr8v_text($wp_customize, 'digimkt_plat2_title', 'cr8v_digimkt_plat', 'Option 2 Title', 'Meta & YouTube Paid Ads');
    _cr8v_textarea($wp_customize, 'digimkt_plat2_desc', 'cr8v_digimkt_plat', 'Option 2 Description', 'Creating visual brand demand and retargeting engaged audiences across Facebook, Instagram, and YouTube.');

    _cr8v_text($wp_customize, 'digimkt_plat3_badge', 'cr8v_digimkt_plat', 'Option 3 Badge', 'Stack // Lifecycle');
    _cr8v_text($wp_customize, 'digimkt_plat3_title', 'cr8v_digimkt_plat', 'Option 3 Title', 'Klaviyo & Mailchimp Funnels');
    _cr8v_textarea($wp_customize, 'digimkt_plat3_desc', 'cr8v_digimkt_plat', 'Option 3 Description', 'Nurturing incoming leads into recurring customers with automated email sequences.');

    _cr8v_text($wp_customize, 'digimkt_plat4_badge', 'cr8v_digimkt_plat', 'Option 4 Badge', 'Stack // Retainer');
    _cr8v_text($wp_customize, 'digimkt_plat4_title', 'cr8v_digimkt_plat', 'Option 4 Title', 'Full-Stack Growth Retainer');
    _cr8v_textarea($wp_customize, 'digimkt_plat4_desc', 'cr8v_digimkt_plat', 'Option 4 Description', 'Continuous multi-channel campaign management, conversion rate optimization, and weekly reporting.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_hl', '06. Project Catalog (Hoverlist)', 'cr8v_digimkt_panel', 60);
    _cr8v_text($wp_customize, 'digimkt_hl_label', 'cr8v_digimkt_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'digimkt_hl_h2', 'cr8v_digimkt_hl', 'Section Title', 'Every Kind of Marketing Funnel We Engineer');
    _cr8v_textarea($wp_customize, 'digimkt_hl_sub', 'cr8v_digimkt_hl', 'Subtitle', 'From B2B lead generation campaigns to e-commerce customer acquisition — hover to inspect the marketing stack.');

    _cr8v_text($wp_customize, 'digimkt_hl1_title', 'cr8v_digimkt_hl', 'Item 1 Title', 'B2B Lead Acquisition Funnels');
    _cr8v_textarea($wp_customize, 'digimkt_hl1_tagline', 'cr8v_digimkt_hl', 'Item 1 Tagline', 'Targeted Google Search campaigns and LinkedIn/Meta lead gen forms built to fill sales calendars.');

    _cr8v_text($wp_customize, 'digimkt_hl2_title', 'cr8v_digimkt_hl', 'Item 2 Title', 'E-Commerce Customer Scaling');
    _cr8v_textarea($wp_customize, 'digimkt_hl2_tagline', 'cr8v_digimkt_hl', 'Item 2 Tagline', 'Meta catalog ads, Google Shopping campaigns, and Klaviyo cart recovery flows for online stores.');

    _cr8v_text($wp_customize, 'digimkt_hl3_title', 'cr8v_digimkt_hl', 'Item 3 Title', 'SaaS Free-Trial & Demo Campaigns');
    _cr8v_textarea($wp_customize, 'digimkt_hl3_tagline', 'cr8v_digimkt_hl', 'Item 3 Tagline', 'Retargeting software buyers with product feature ads and automated trial onboarding sequences.');

    _cr8v_text($wp_customize, 'digimkt_hl4_title', 'cr8v_digimkt_hl', 'Item 4 Title', 'Local & Service Business Marketing');
    _cr8v_textarea($wp_customize, 'digimkt_hl4_tagline', 'cr8v_digimkt_hl', 'Item 4 Tagline', 'Geo-targeted Google Local Services ads, Google Maps optimization, and call-tracking funnels.');

    _cr8v_text($wp_customize, 'digimkt_hl5_title', 'cr8v_digimkt_hl', 'Item 5 Title', 'Server-Side Conversion Tracking Cleanup');
    _cr8v_textarea($wp_customize, 'digimkt_hl5_tagline', 'cr8v_digimkt_hl', 'Item 5 Tagline', 'Fixing iOS 14+ tracking loss with Google Tag Manager server-side containers and Meta CAPI.');

    _cr8v_text($wp_customize, 'digimkt_hl6_title', 'cr8v_digimkt_hl', 'Item 6 Title', 'Lifecycle Email & Retainers');
    _cr8v_textarea($wp_customize, 'digimkt_hl6_tagline', 'cr8v_digimkt_hl', 'Item 6 Tagline', 'Automated win-back flows, broadcast newsletters, and monthly growth retainer management.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_testi', '07. Client Feedback (Testimonials)', 'cr8v_digimkt_panel', 70);
    _cr8v_text($wp_customize, 'digimkt_testi_label', 'cr8v_digimkt_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'digimkt_testi_h2_part1', 'cr8v_digimkt_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'digimkt_testi_h2_serif', 'cr8v_digimkt_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'digimkt_testi1_text', 'cr8v_digimkt_testi', 'Testimonial 1 Text', 'Running our Google Ads, Meta Ads, and YouTube Ads under one consistent brand strategy message completely transformed our funnel performance.');
    _cr8v_text($wp_customize, 'digimkt_testi1_author', 'cr8v_digimkt_testi', 'Testimonial 1 Author', 'Marketing Director — Digital Media');

    _cr8v_textarea($wp_customize, 'digimkt_testi2_text', 'cr8v_digimkt_testi', 'Testimonial 2 Text', 'The GTM server-side tracking setup fixed our attribution gaps instantly. We can finally see exact customer acquisition costs across all paid channels.');
    _cr8v_text($wp_customize, 'digimkt_testi2_author', 'cr8v_digimkt_testi', 'Testimonial 2 Author', 'Tunde Oladipo — E-Commerce Growth Manager');

    _cr8v_textarea($wp_customize, 'digimkt_testi3_text', 'cr8v_digimkt_testi', 'Testimonial 3 Text', 'Cr8v Stacks rebuilt our Klaviyo lifecycle flows alongside our Meta ad campaigns. Our email revenue doubled within 60 days.');
    _cr8v_text($wp_customize, 'digimkt_testi3_author', 'cr8v_digimkt_testi', 'Testimonial 3 Author', 'Sarah Jenkins — Head of User Acquisition');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_pricing', '08. Pricing Models & Estimator', 'cr8v_digimkt_panel', 80);
    _cr8v_text($wp_customize, 'digimkt_pricing_label', 'cr8v_digimkt_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'digimkt_pricing_h2_part1', 'cr8v_digimkt_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'digimkt_pricing_h2_serif', 'cr8v_digimkt_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'digimkt_pricing_desc', 'cr8v_digimkt_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_faq', '09. Frequently Asked Questions', 'cr8v_digimkt_panel', 90);
    _cr8v_text($wp_customize, 'digimkt_faq_eyebrow', 'cr8v_digimkt_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'digimkt_faq_h2', 'cr8v_digimkt_faq', 'Title', 'Digital Marketing FAQ');
    _cr8v_textarea($wp_customize, 'digimkt_faq_sub', 'cr8v_digimkt_faq', 'Subtitle', 'Clear answers to common questions about our paid advertising management, conversion tracking, and email automation.');

    _cr8v_text($wp_customize, 'digimkt_faq1_q', 'cr8v_digimkt_faq', 'FAQ 1 Question', 'Which paid ad channels should we start with?');
    _cr8v_textarea($wp_customize, 'digimkt_faq1_a', 'cr8v_digimkt_faq', 'FAQ 1 Answer', 'If users are actively searching for your service, Google Search Ads deliver immediate high-intent leads. If your product requires visual demonstration or brand awareness, Meta Ads (Facebook/Instagram) excel. We audit your audience to select the right launch channel.');

    _cr8v_text($wp_customize, 'digimkt_faq2_q', 'cr8v_digimkt_faq', 'FAQ 2 Question', 'How do you track sales and leads accurately after iOS 14 privacy updates?');
    _cr8v_textarea($wp_customize, 'digimkt_faq2_a', 'cr8v_digimkt_faq', 'FAQ 2 Answer', 'We configure server-side Google Tag Manager (sGTM) containers and Meta Conversions API (CAPI) on your cloud server. This sends purchase events directly from your server to ad networks, bypassing browser ad blockers.');

    _cr8v_text($wp_customize, 'digimkt_faq3_q', 'cr8v_digimkt_faq', 'FAQ 3 Question', 'Do you create the ad graphics, videos, and copywriting?');
    _cr8v_textarea($wp_customize, 'digimkt_faq3_a', 'cr8v_digimkt_faq', 'FAQ 3 Answer', 'Yes. We handle end-to-end ad creation — copywriting, static visual graphic design, motion assets, and landing page CRO copy aligned with your core brand positioning.');

    _cr8v_text($wp_customize, 'digimkt_faq4_q', 'cr8v_digimkt_faq', 'FAQ 4 Question', 'What email automation platforms do you work with?');
    _cr8v_textarea($wp_customize, 'digimkt_faq4_a', 'cr8v_digimkt_faq', 'FAQ 4 Answer', 'We engineer custom email lifecycles on Klaviyo, Mailchimp, ActiveCampaign, and HubSpot, setting up automated welcome series, lead nurture flows, and abandoned cart recovery.');

    _cr8v_text($wp_customize, 'digimkt_faq5_q', 'cr8v_digimkt_faq', 'FAQ 5 Question', 'How much ad spend budget do we need to start?');
    _cr8v_textarea($wp_customize, 'digimkt_faq5_a', 'cr8v_digimkt_faq', 'FAQ 5 Answer', 'We recommend a minimum ad spend test budget of $1,000/month to gather statistical data, test creative variations, and optimize campaign ROAS effectively.');

    _cr8v_text($wp_customize, 'digimkt_faq6_q', 'cr8v_digimkt_faq', 'FAQ 6 Question', 'How do we track our campaign performance?');
    _cr8v_textarea($wp_customize, 'digimkt_faq6_a', 'cr8v_digimkt_faq', 'FAQ 6 Answer', 'We build live Looker Studio / GA4 reporting dashboards showing exact customer acquisition costs (CAC), ad spend, click-through rates (CTR), and return on ad spend (ROAS) updated in real time.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_digimkt_cta', '10. Bottom CTA Section', 'cr8v_digimkt_panel', 100);
    _cr8v_text($wp_customize, 'digimkt_cta_label', 'cr8v_digimkt_cta', 'Section Label', 'READY TO GROW?');
    _cr8v_text($wp_customize, 'digimkt_cta_h2_part1', 'cr8v_digimkt_cta', 'Title Part 1', 'Let’s Engineer Your Paid ');
    _cr8v_text($wp_customize, 'digimkt_cta_h2_serif', 'cr8v_digimkt_cta', 'Title Serif Word', 'Growth Funnel');
    _cr8v_textarea($wp_customize, 'digimkt_cta_desc', 'cr8v_digimkt_cta', 'Subtitle', 'Tell us about your acquisition targets and get a complete price quote and media plan proposal within 24 hours.');
    _cr8v_text($wp_customize, 'digimkt_cta_btn_text', 'cr8v_digimkt_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'digimkt_cta_btn_url', 'cr8v_digimkt_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_digital_marketing_panel');
