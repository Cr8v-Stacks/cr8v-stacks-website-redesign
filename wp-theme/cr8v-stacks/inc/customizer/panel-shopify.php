<?php
/**
 * CR8V Stacks — inc/customizer/panel-shopify.php
 * Customizer Controls for Shopify Storefronts Service Page
 * 100% Exhaustive Control Parity with Standard Protocol
 */

defined('ABSPATH') || exit;

$wp_customize->add_panel('cr8v_shp_panel', [
    'active_callback' => function() { return is_page('shopify') || is_page('shopify-storefronts') || is_page_template('page-service-shopify.php') || is_page_template('page-shopify.php'); },
    'title'       => __('CR8V Service — Shopify Storefronts', 'cr8v-stacks'),
    'priority'    => 34,
    'description' => __('Manage all copy, headlines, cards, FAQs, and links for Shopify Storefronts Service Page.', 'cr8v-stacks'),
]);

// Section 1: Hero
$wp_customize->add_section('cr8v_shp_hero', ['title' => __('01. Hero Section', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_hero_eyebrow', 'cr8v_shp_hero', 'Hero Eyebrow', 'Shopify Plus & Custom Storefront Engineering');
_cr8v_text($wp_customize, 'shp_hero_h1_part1', 'cr8v_shp_hero', 'Headline Part 1', 'Shopify Stores Built for ');
_cr8v_text($wp_customize, 'shp_hero_h1_serif', 'cr8v_shp_hero', 'Headline Serif (Italic)', 'High Conversion');
_cr8v_textarea($wp_customize, 'shp_hero_intro', 'cr8v_shp_hero', 'Hero Intro Paragraph', 'Purpose-built Shopify storefronts crafted for high add-to-cart conversion, friction-free mobile checkouts, and scalable hosted infrastructure.');
_cr8v_text($wp_customize, 'shp_hero_cta1_text', 'cr8v_shp_hero', 'Primary CTA Button Text', 'See What We Build →');
_cr8v_text($wp_customize, 'shp_hero_cta1_url', 'cr8v_shp_hero', 'Primary CTA URL', '#c8isv-services');
_cr8v_text($wp_customize, 'shp_hero_cta2_text', 'cr8v_shp_hero', 'Secondary CTA Button Text', 'Get a Quote →');
_cr8v_text($wp_customize, 'shp_hero_cta2_url', 'cr8v_shp_hero', 'Secondary CTA URL', 'https://cr8vstacks.com/contact/');
_cr8v_text($wp_customize, 'shp_hero_pill1', 'cr8v_shp_hero', 'Pill 1', 'Shopify');
_cr8v_text($wp_customize, 'shp_hero_pill2', 'cr8v_shp_hero', 'Pill 2', 'Liquid');
_cr8v_text($wp_customize, 'shp_hero_pill3', 'cr8v_shp_hero', 'Pill 3', 'CSS');
_cr8v_text($wp_customize, 'shp_hero_pill4', 'cr8v_shp_hero', 'Pill 4', 'Shopify Plus');

// Section 2: Why Shopify
$wp_customize->add_section('cr8v_shp_why', ['title' => __('02. Why Shopify', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_why_label', 'cr8v_shp_why', 'Section Label', 'Why Shopify');
_cr8v_text($wp_customize, 'shp_why_h2', 'cr8v_shp_why', 'Section Title', 'Shopify Storefronts Built For Sales Growth & Scalability');
_cr8v_text($wp_customize, 'shp_why_card1_step', 'cr8v_shp_why', 'Card 1 Step', 'Theme // Custom');
_cr8v_text($wp_customize, 'shp_why_card1_title', 'cr8v_shp_why', 'Card 1 Title', 'Bespoke Liquid Storefronts');
_cr8v_textarea($wp_customize, 'shp_why_card1_desc', 'cr8v_shp_why', 'Card 1 Description', 'Tailored sections built for high add-to-cart conversion and brand credibility without template constraints.');
_cr8v_text($wp_customize, 'shp_why_card2_step', 'cr8v_shp_why', 'Card 2 Step', 'Checkout // Mobile');
_cr8v_text($wp_customize, 'shp_why_card2_title', 'cr8v_shp_why', 'Card 2 Title', 'Fast Mobile Checkout');
_cr8v_textarea($wp_customize, 'shp_why_card2_desc', 'cr8v_shp_why', 'Card 2 Description', 'Optimized AJAX cart drawers, dynamic filters, and smooth mobile buying flows that keep visitors buying.');
_cr8v_text($wp_customize, 'shp_why_card3_step', 'cr8v_shp_why', 'Card 3 Step', 'Apps // Curation');
_cr8v_text($wp_customize, 'shp_why_card3_title', 'cr8v_shp_why', 'Card 3 Title', 'App Stack Curation');
_cr8v_textarea($wp_customize, 'shp_why_card3_desc', 'cr8v_shp_why', 'Card 3 Description', 'Audited essential Shopify apps to prevent store slowdown, unnecessary app fees, and script clutter.');
_cr8v_text($wp_customize, 'shp_why_card4_step', 'cr8v_shp_why', 'Card 4 Step', 'Global // Sales');
_cr8v_text($wp_customize, 'shp_why_card4_title', 'cr8v_shp_why', 'Card 4 Title', 'Global Multi-Currency Sales');
_cr8v_textarea($wp_customize, 'shp_why_card4_desc', 'cr8v_shp_why', 'Card 4 Description', 'Shopify Markets and international gateway configuration for effortless worldwide brand expansion.');

// Section 3: Case Study Showcase
$wp_customize->add_section('cr8v_shp_work', ['title' => __('03. Case Study Showcase', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_work_label', 'cr8v_shp_work', 'Section Label', 'Our Work');
_cr8v_text($wp_customize, 'shp_work_h2_part1', 'cr8v_shp_work', 'Title Part 1', 'Built for Real Outcomes,');
_cr8v_text($wp_customize, 'shp_work_h2_serif', 'cr8v_shp_work', 'Title Serif', 'Not Just Concepts');
_cr8v_text($wp_customize, 'shp_work_cs_client', 'cr8v_shp_work', 'Case Study Client Tag', 'Case Study — Victoria\'s Lane');
_cr8v_text($wp_customize, 'shp_work_cs_title', 'cr8v_shp_work', 'Case Study Title', 'Handbag & Purse E-Commerce, Rebuilt on Shopify');
_cr8v_textarea($wp_customize, 'shp_work_cs_desc', 'cr8v_shp_work', 'Case Study Description', 'Victoria\'s Lane came to us running on a generic, slow theme that wasn\'t built for how people actually shop for luxury handbags online. We rebuilt the entire storefront in Shopify, hand-coded in Liquid, with a checkout designed around impulse and gift-buying behavior.');
_cr8v_text($wp_customize, 'shp_work_cs_stat1_val', 'cr8v_shp_work', 'Metric 1 Value', '1.4s');
_cr8v_text($wp_customize, 'shp_work_cs_stat1_lbl', 'cr8v_shp_work', 'Metric 1 Label', 'Mobile Load Time');
_cr8v_text($wp_customize, 'shp_work_cs_stat2_val', 'cr8v_shp_work', 'Metric 2 Value', '+38%');
_cr8v_text($wp_customize, 'shp_work_cs_stat2_lbl', 'cr8v_shp_work', 'Metric 2 Label', 'Add-to-Cart Rate');
_cr8v_text($wp_customize, 'shp_work_cs_pill1', 'cr8v_shp_work', 'Deliverable Pill 1', 'Shopify Liquid Theme');
_cr8v_text($wp_customize, 'shp_work_cs_pill2', 'cr8v_shp_work', 'Deliverable Pill 2', 'Custom JSON Templates');
_cr8v_text($wp_customize, 'shp_work_cs_pill3', 'cr8v_shp_work', 'Deliverable Pill 3', 'Cart & Checkout Tuning');
_cr8v_text($wp_customize, 'shp_work_cs_pill4', 'cr8v_shp_work', 'Deliverable Pill 4', 'Sub-Second Mobile Load');
_cr8v_text($wp_customize, 'shp_work_cs_btn_text', 'cr8v_shp_work', 'Case Study Link Text', 'View Case Study →');
_cr8v_text($wp_customize, 'shp_work_cs_btn_url', 'cr8v_shp_work', 'Case Study Link URL', '/case-studies/victorias-lane/');

// Section 4: Deliverables Folder Deck
$wp_customize->add_section('cr8v_shp_deck', ['title' => __('04. Deliverables Folder Deck', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_deck_label', 'cr8v_shp_deck', 'Section Label', 'What You Get');
_cr8v_text($wp_customize, 'shp_deck_h2_part1', 'cr8v_shp_deck', 'Title Part 1', 'Every layer of your store, ');
_cr8v_text($wp_customize, 'shp_deck_h2_serif', 'cr8v_shp_deck', 'Title Serif', 'engineered by Cr8v Stacks.');
_cr8v_textarea($wp_customize, 'shp_deck_desc', 'cr8v_shp_deck', 'Lead Description', 'From theme design to background sync — built custom, with zero shortcuts.');
_cr8v_text($wp_customize, 'shp_deck1_tab', 'cr8v_shp_deck', 'Card 1 Tab', '01 // Theme');
_cr8v_text($wp_customize, 'shp_deck1_title', 'cr8v_shp_deck', 'Card 1 Title', 'Custom Theme Coding');
_cr8v_textarea($wp_customize, 'shp_deck1_desc', 'cr8v_shp_deck', 'Card 1 Description', 'A fully custom-designed Shopify theme built using Shopify CLI and native JSON templates. No pre-made templates, no heavy page builder plugins like PageFly, and 100% custom Liquid code.');
_cr8v_text($wp_customize, 'shp_deck2_tab', 'cr8v_shp_deck', 'Card 2 Tab', '02 // AJAX Cart');
_cr8v_text($wp_customize, 'shp_deck2_title', 'cr8v_shp_deck', 'Card 2 Title', 'App-Free Cart & Checkout');
_cr8v_textarea($wp_customize, 'shp_deck2_desc', 'cr8v_shp_deck', 'Card 2 Description', 'Custom slide-out AJAX cart drawers, native product bundles, and custom tier discounts coded directly to replace 10+ slow apps and eliminate recurring monthly app subscription fees.');
_cr8v_text($wp_customize, 'shp_deck3_tab', 'cr8v_shp_deck', 'Card 3 Tab', '03 // Performance');
_cr8v_text($wp_customize, 'shp_deck3_title', 'cr8v_shp_deck', 'Card 3 Title', 'Performance & SEO');
_cr8v_textarea($wp_customize, 'shp_deck3_desc', 'cr8v_shp_deck', 'Card 3 Description', 'Sub-1s page load speeds achieved natively. Structured product schema, optimized lazy-loading assets, and clean WebP asset pipelines configured directly for fast search indexing.');
_cr8v_text($wp_customize, 'shp_deck4_tab', 'cr8v_shp_deck', 'Card 4 Tab', '04 // Scale');
_cr8v_text($wp_customize, 'shp_deck4_title', 'cr8v_shp_deck', 'Card 4 Title', 'Plus & B2B Wholesale');
_cr8v_textarea($wp_customize, 'shp_deck4_desc', 'cr8v_shp_deck', 'Card 4 Description', 'Scaling enterprise brands with Shopify Plus customization, multi-region local currencies, wholesaling expansions, and native integrations for clean ERP/inventory syncing.');
_cr8v_text($wp_customize, 'shp_deck5_tab', 'cr8v_shp_deck', 'Card 5 Tab', '05 // Launch');
_cr8v_text($wp_customize, 'shp_deck5_title', 'cr8v_shp_deck', 'Card 5 Title', 'Store Launch QA & Training');
_cr8v_textarea($wp_customize, 'shp_deck5_desc', 'cr8v_shp_deck', 'Card 5 Description', 'Complete payment gateway testing, domain cutover, 301 redirect mapping, and staff training on the Shopify admin dashboard.');

// Section 5: Process & Approach
$wp_customize->add_section('cr8v_shp_proc', ['title' => __('05a. Process & Approach (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_proc_label', 'cr8v_shp_proc', 'Section Label', 'How We Approach It');
_cr8v_text($wp_customize, 'shp_proc_h2', 'cr8v_shp_proc', 'Section Title', 'Four stages. No overlap, no shortcuts.');
_cr8v_textarea($wp_customize, 'shp_proc_desc', 'cr8v_shp_proc', 'Lead Description', 'A battle-tested 4-stage Liquid storefront development process crafted for brand storytelling, app curation, and mobile sales velocity.');
_cr8v_text($wp_customize, 'shp_proc1_num', 'cr8v_shp_proc', 'Stage 1 Number', '01');
_cr8v_text($wp_customize, 'shp_proc1_name', 'cr8v_shp_proc', 'Stage 1 Name', 'Discover');
_cr8v_text($wp_customize, 'shp_proc1_tags', 'cr8v_shp_proc', 'Stage 1 Tags', 'Audit · Apps · Catalog');
_cr8v_textarea($wp_customize, 'shp_proc1_desc', 'cr8v_shp_proc', 'Stage 1 Description', 'Catalog mapping, Shopify app audits, and performance baselines. We identify which slow apps can be hardcoded and what features need custom Liquid layout setup.');
_cr8v_text($wp_customize, 'shp_proc2_num', 'cr8v_shp_proc', 'Stage 2 Number', '02');
_cr8v_text($wp_customize, 'shp_proc2_name', 'cr8v_shp_proc', 'Stage 2 Name', 'Design');
_cr8v_text($wp_customize, 'shp_proc2_tags', 'cr8v_shp_proc', 'Stage 2 Tags', 'UX · Layout · Branding');
_cr8v_textarea($wp_customize, 'shp_proc2_desc', 'cr8v_shp_proc', 'Stage 2 Description', 'AJAX cart drawer flows, responsive product page UX, custom checkout branding, and navigation hierarchies. Every pixel is custom-designed before coding begins.');
_cr8v_text($wp_customize, 'shp_proc3_num', 'cr8v_shp_proc', 'Stage 3 Number', '03');
_cr8v_text($wp_customize, 'shp_proc3_name', 'cr8v_shp_proc', 'Stage 3 Name', 'Build');
_cr8v_text($wp_customize, 'shp_proc3_tags', 'cr8v_shp_proc', 'Stage 3 Tags', 'Liquid · CLI · API');
_cr8v_textarea($wp_customize, 'shp_proc3_desc', 'cr8v_shp_proc', 'Stage 3 Description', 'Custom theme development using Shopify CLI and native JSON templates. AJAX scripts for cart drawers and native Shopify API connections are coded without slow plug-and-play apps.');
_cr8v_text($wp_customize, 'shp_proc4_num', 'cr8v_shp_proc', 'Stage 4 Number', '04');
_cr8v_text($wp_customize, 'shp_proc4_name', 'cr8v_shp_proc', 'Stage 4 Name', 'Launch');
_cr8v_text($wp_customize, 'shp_proc4_tags', 'cr8v_shp_proc', 'Stage 4 Tags', 'Speed · SEO · Handover');
_cr8v_textarea($wp_customize, 'shp_proc4_desc', 'cr8v_shp_proc', 'Stage 4 Description', 'Speed optimization, 301 URL redirect maps, structured SEO metadata schema setup, and standard admin training. We launch your new custom Shopify store with zero downtime.');

// Section 6: Build Platform Options
$wp_customize->add_section('cr8v_shp_plat', ['title' => __('06a. Shopify Stack Options (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_plat_label', 'cr8v_shp_plat', 'Section Label', 'Shopify Stack Options');
_cr8v_text($wp_customize, 'shp_plat_h2_part1', 'cr8v_shp_plat', 'Title Part 1', 'Choosing The Right ');
_cr8v_text($wp_customize, 'shp_plat_h2_serif', 'cr8v_shp_plat', 'Title Serif', 'Shopify Architecture');
_cr8v_textarea($wp_customize, 'shp_plat_desc', 'cr8v_shp_plat', 'Lead Description', 'Whether you need rapid theme setup, custom Liquid layouts, enterprise Plus features, or headless React — we engineer the right setup for your brand:');
_cr8v_text($wp_customize, 'shp_plat1_badge', 'cr8v_shp_plat', 'Platform 1 Badge', 'Liquid // Storefront');
_cr8v_text($wp_customize, 'shp_plat1_title', 'cr8v_shp_plat', 'Platform 1 Title', 'Liquid Storefront Architecture');
_cr8v_textarea($wp_customize, 'shp_plat1_desc', 'cr8v_shp_plat', 'Platform 1 Description', 'Custom Liquid section coding on Dawn starter bases or aggressively customized premium Shopify themes — leveraging built-in features to reduce development costs while maintaining fast mobile speeds.');
_cr8v_text($wp_customize, 'shp_plat2_badge', 'cr8v_shp_plat', 'Platform 2 Badge', 'Apps // Optimization');
_cr8v_text($wp_customize, 'shp_plat2_title', 'cr8v_shp_plat', 'Platform 2 Title', 'Shopify App & Cart Optimization');
_cr8v_textarea($wp_customize, 'shp_plat2_desc', 'cr8v_shp_plat', 'Platform 2 Description', 'Custom slide-out AJAX cart drawers and app curation to eliminate unnecessary monthly subscription costs.');
_cr8v_text($wp_customize, 'shp_plat3_badge', 'cr8v_shp_plat', 'Platform 3 Badge', 'Plus // B2B');
_cr8v_text($wp_customize, 'shp_plat3_title', 'cr8v_shp_plat', 'Platform 3 Title', 'Shopify Plus B2B Setup');
_cr8v_textarea($wp_customize, 'shp_plat3_desc', 'cr8v_shp_plat', 'Platform 3 Description', 'Enterprise wholesale pricing, customized checkout extensions, and multi-region expansion.');
_cr8v_text($wp_customize, 'shp_plat4_badge', 'cr8v_shp_plat', 'Platform 4 Badge', 'API // Headless');
_cr8v_text($wp_customize, 'shp_plat4_title', 'cr8v_shp_plat', 'Platform 4 Title', 'Headless Hydrogen Storefront');
_cr8v_textarea($wp_customize, 'shp_plat4_desc', 'cr8v_shp_plat', 'Platform 4 Description', 'Ultra-fast React frontend powered by Shopify\'s Storefront API for complex WebGL/custom UX.');
_cr8v_textarea($wp_customize, 'shp_plat_footer_note', 'cr8v_shp_plat', 'Footer Note', 'Not sure which one? Tell us what you\'re selling and we\'ll recommend the right Shopify architecture as part of the initial scoping call.');
_cr8v_text($wp_customize, 'shp_plat_cta_text', 'cr8v_shp_plat', 'CTA Button Text', 'Start a Shopify Scoping Call →');
_cr8v_text($wp_customize, 'shp_plat_cta_url', 'cr8v_shp_plat', 'CTA Button URL', '/contact/?model=project&service=shopify');

// Section 7: Project Catalog
$wp_customize->add_section('cr8v_shp_cat', ['title' => __('07. Project Catalog (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_cat_label', 'cr8v_shp_cat', 'Section Label', 'Project Catalog');
_cr8v_text($wp_customize, 'shp_cat_h2', 'cr8v_shp_cat', 'Section Title', 'Every Kind of Shopify Store We Engineer');
_cr8v_textarea($wp_customize, 'shp_cat_desc', 'cr8v_shp_cat', 'Lead Description', 'From DTC beauty brands to omnichannel POS retail hubs — hover to inspect the project stack.');
_cr8v_text($wp_customize, 'shp_cat1_title', 'cr8v_shp_cat', 'Catalog 1 Title', 'DTC Beauty, Cosmetics & Skincare Stores');
_cr8v_textarea($wp_customize, 'shp_cat1_tagline', 'cr8v_shp_cat', 'Catalog 1 Tagline', 'Shade finder quizzes, bundle builders, high-converting product detail pages, and subscription replenishment.');
_cr8v_text($wp_customize, 'shp_cat2_title', 'cr8v_shp_cat', 'Catalog 2 Title', 'High-Volume Consumer Electronics & Gadgets');
_cr8v_textarea($wp_customize, 'shp_cat2_tagline', 'cr8v_shp_cat', 'Catalog 2 Tagline', '3D product rotators, tech spec comparison grids, warranty add-ons, and multi-warehouse stock sync.');
_cr8v_text($wp_customize, 'shp_cat3_title', 'cr8v_shp_cat', 'Catalog 3 Title', 'Health, Wellness & Supplement Brands');
_cr8v_textarea($wp_customize, 'shp_cat3_tagline', 'cr8v_shp_cat', 'Catalog 3 Tagline', 'Nutritional ingredient breakdown popups, recurring subscription delivery, and bulk buy discount tiers.');
_cr8v_text($wp_customize, 'shp_cat4_title', 'cr8v_shp_cat', 'Catalog 4 Title', 'Food, Beverage & Gourmet Subscription Stores');
_cr8v_textarea($wp_customize, 'shp_cat4_tagline', 'cr8v_shp_cat', 'Catalog 4 Tagline', 'Perishable shipping date selectors, recurring box builders, and localized zip-code delivery routing.');
_cr8v_text($wp_customize, 'shp_cat5_title', 'cr8v_shp_cat', 'Catalog 5 Title', 'WooCommerce to Shopify Store Migrations');
_cr8v_textarea($wp_customize, 'shp_cat5_tagline', 'cr8v_shp_cat', 'Catalog 5 Tagline', 'Full store migrations transferring products, order histories, customer accounts, and 301 SEO redirects seamlessly.');

// Section 8: Testimonials
$wp_customize->add_section('cr8v_shp_testi', ['title' => __('08. Testimonials', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_testi_label', 'cr8v_shp_testi', 'Section Label', 'Client Feedback');
_cr8v_text($wp_customize, 'shp_testi_h2_part1', 'cr8v_shp_testi', 'Title Part 1', 'What clients say after ');
_cr8v_text($wp_customize, 'shp_testi_h2_serif', 'cr8v_shp_testi', 'Title Serif', 'launch');
_cr8v_textarea($wp_customize, 'shp_testi1_text', 'cr8v_shp_testi', 'Testimonial 1 Text', 'Our old Shopify theme took nearly 20 seconds to load on mobile phones due to unoptimized app scripts. Rebuilding in custom Liquid dropped mobile load times to 1.4s and boosted our add-to-cart rate by 38%.');
_cr8v_text($wp_customize, 'shp_testi1_author', 'cr8v_shp_testi', 'Testimonial 1 Author', 'Claire Dupont — E-Commerce Brand Director');
_cr8v_textarea($wp_customize, 'shp_testi2_text', 'cr8v_shp_testi', 'Testimonial 2 Text', 'The custom slide-out AJAX cart drawer and bundle builder replaced 8 monthly subscription apps. The site feels instantaneous to shop on.');
_cr8v_text($wp_customize, 'shp_testi2_author', 'cr8v_shp_testi', 'Testimonial 2 Author', 'Tunde Harrison — Growth & CRO Lead');
_cr8v_textarea($wp_customize, 'shp_testi3_text', 'cr8v_shp_testi', 'Testimonial 3 Text', 'Expanding into wholesale B2B with Shopify Plus custom scripts allowed us to manage bulk tiered pricing effortlessly alongside our DTC store.');
_cr8v_text($wp_customize, 'shp_testi3_author', 'cr8v_shp_testi', 'Testimonial 3 Author', 'Elena Rostova — Head of Global Retail Operations');

// Section 9: Pricing & Estimator
$wp_customize->add_section('cr8v_shp_pricing', ['title' => __('09. Pricing & Estimator', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_pricing_label', 'cr8v_shp_pricing', 'Section Label', 'PRICING MODELS');
_cr8v_text($wp_customize, 'shp_pricing_h2_part1', 'cr8v_shp_pricing', 'Title Part 1', 'HOW WE ');
_cr8v_text($wp_customize, 'shp_pricing_h2_serif', 'cr8v_shp_pricing', 'Title Serif', 'WORK TOGETHER');
_cr8v_textarea($wp_customize, 'shp_pricing_desc', 'cr8v_shp_pricing', 'Lead Description', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');
_cr8v_text($wp_customize, 'shp_plan1_type', 'cr8v_shp_pricing', 'Plan 1 Type', 'Ongoing Support');
_cr8v_text($wp_customize, 'shp_plan1_title', 'cr8v_shp_pricing', 'Plan 1 Title', 'Growth Retainer');
_cr8v_text($wp_customize, 'shp_plan1_price', 'cr8v_shp_pricing', 'Plan 1 Price', '$950');
_cr8v_text($wp_customize, 'shp_plan1_period', 'cr8v_shp_pricing', 'Plan 1 Period', '/mo');
_cr8v_textarea($wp_customize, 'shp_plan1_desc', 'cr8v_shp_pricing', 'Plan 1 Description', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.');
_cr8v_text($wp_customize, 'shp_plan2_type', 'cr8v_shp_pricing', 'Plan 2 Type', 'Fixed Scope');
_cr8v_text($wp_customize, 'shp_plan2_title', 'cr8v_shp_pricing', 'Plan 2 Title', 'Fixed Projects');
_cr8v_text($wp_customize, 'shp_plan2_price', 'cr8v_shp_pricing', 'Plan 2 Price', 'From $1,800');
_cr8v_text($wp_customize, 'shp_plan2_period', 'cr8v_shp_pricing', 'Plan 2 Period', ' entry');
_cr8v_textarea($wp_customize, 'shp_plan2_desc', 'cr8v_shp_pricing', 'Plan 2 Description', 'Custom Liquid Shopify storefront engineering focused on conversion UX, instant cart drawers, and zero app bloat.');

// Section 10: FAQ Section
$wp_customize->add_section('cr8v_shp_faq', ['title' => __('10. FAQ Section', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_faq_eyebrow', 'cr8v_shp_faq', 'FAQ Eyebrow', '// COMMON QUESTIONS');
_cr8v_text($wp_customize, 'shp_faq_h2', 'cr8v_shp_faq', 'FAQ Title', 'Shopify Questions, Answered Honestly');
_cr8v_textarea($wp_customize, 'shp_faq_sub', 'cr8v_shp_faq', 'FAQ Subtitle', 'Clear answers to common questions about our custom Liquid theme development, Shopify app auditing, and checkout optimization.');

// Section 11: Related Services
$wp_customize->add_section('cr8v_shp_rel', ['title' => __('11. Related Services', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_rel_label', 'cr8v_shp_rel', 'Section Label', 'Other Ways We Build');
_cr8v_text($wp_customize, 'shp_rel_h2', 'cr8v_shp_rel', 'Section Title', 'Related Services');
_cr8v_textarea($wp_customize, 'shp_rel_desc', 'cr8v_shp_rel', 'Lead Description', 'Shopify Development is one of several services we offer. If a custom Liquid Shopify theme is not what you need, check these out.');
_cr8v_text($wp_customize, 'shp_rel1_title', 'cr8v_shp_rel', 'Related 1 Title', 'WooCommerce Custom Stores');
_cr8v_textarea($wp_customize, 'shp_rel1_desc', 'cr8v_shp_rel', 'Related 1 Description', 'Self-hosted WordPress e-commerce. Custom PHP themes, zero plugin overhead, and payment gateway wiring. Perfect for brands that want full database ownership with no platform licensing fees.');
_cr8v_text($wp_customize, 'shp_rel1_url', 'cr8v_shp_rel', 'Related 1 URL', '/services/woocommerce/');
_cr8v_text($wp_customize, 'shp_rel2_title', 'cr8v_shp_rel', 'Related 2 Title', 'WordPress Themes');
_cr8v_textarea($wp_customize, 'shp_rel2_desc', 'cr8v_shp_rel', 'Related 2 Description', 'Custom Gutenberg block-editor themes without Elementor or Divi. Fast, maintainable, and content-editable by your team — for content-led businesses that need a serious CMS.');
_cr8v_text($wp_customize, 'shp_rel2_url', 'cr8v_shp_rel', 'Related 2 URL', '/services/web-design/');
_cr8v_text($wp_customize, 'shp_rel3_title', 'cr8v_shp_rel', 'Related 3 Title', 'Custom Development');
_cr8v_textarea($wp_customize, 'shp_rel3_desc', 'cr8v_shp_rel', 'Related 3 Description', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.');
_cr8v_text($wp_customize, 'shp_rel3_url', 'cr8v_shp_rel', 'Related 3 URL', '/services/custom-dev/');

// ── GAP FILLS: Images, CTA Links, CDN Logos, FAQ Q&As ──────────────────

// S3 Case Study Photo & Links
_cr8v_img($wp_customize, 'shp_work_cs_img', 'cr8v_shp_work', 'Case Study Photo', 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=800&auto=format&fit=crop');

// S4 Folder Deck — Card Images & CTA links (×5)
_cr8v_img($wp_customize,  'shp_deck1_img',      'cr8v_shp_deck', 'Card 1 Image', 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'shp_deck1_cta_text', 'cr8v_shp_deck', 'Card 1 CTA Text', 'Discuss storefront →');
_cr8v_text($wp_customize, 'shp_deck1_cta_url',  'cr8v_shp_deck', 'Card 1 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'shp_deck2_img',      'cr8v_shp_deck', 'Card 2 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'shp_deck2_cta_text', 'cr8v_shp_deck', 'Card 2 CTA Text', 'Discuss cart →');
_cr8v_text($wp_customize, 'shp_deck2_cta_url',  'cr8v_shp_deck', 'Card 2 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'shp_deck3_img',      'cr8v_shp_deck', 'Card 3 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'shp_deck3_cta_text', 'cr8v_shp_deck', 'Card 3 CTA Text', 'Discuss performance →');
_cr8v_text($wp_customize, 'shp_deck3_cta_url',  'cr8v_shp_deck', 'Card 3 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'shp_deck4_img',      'cr8v_shp_deck', 'Card 4 Image', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'shp_deck4_cta_text', 'cr8v_shp_deck', 'Card 4 CTA Text', 'Discuss wholesaling →');
_cr8v_text($wp_customize, 'shp_deck4_cta_url',  'cr8v_shp_deck', 'Card 4 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'shp_deck5_img',      'cr8v_shp_deck', 'Card 5 Image', 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'shp_deck5_cta_text', 'cr8v_shp_deck', 'Card 5 CTA Text', 'Discuss launch QA →');
_cr8v_text($wp_customize, 'shp_deck5_cta_url',  'cr8v_shp_deck', 'Card 5 CTA URL', '/contact/');

// S5 Process Stage Images (×4)
$wp_customize->add_section('cr8v_shp_proc_imgs', ['title' => __('05b. Process Stage Images', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_img($wp_customize, 'shp_proc1_img', 'cr8v_shp_proc_imgs', 'Stage 1 Image', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'shp_proc2_img', 'cr8v_shp_proc_imgs', 'Stage 2 Image', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'shp_proc3_img', 'cr8v_shp_proc_imgs', 'Stage 3 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'shp_proc4_img', 'cr8v_shp_proc_imgs', 'Stage 4 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop');

// S6 Project Catalog — Tech Badges & CDN Logo URLs (×5)
$wp_customize->add_section('cr8v_shp_cat_logos', ['title' => __('06b. Catalog CDN Logos & Tech', 'cr8v-stacks'), 'panel' => 'cr8v_shp_panel']);
_cr8v_text($wp_customize, 'shp_cat1_tech',  'cr8v_shp_cat_logos', 'Item 1 Tech Badge', 'Beauty & Skincare');
_cr8v_text($wp_customize, 'shp_cat1_logo1', 'cr8v_shp_cat_logos', 'Item 1 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');
_cr8v_text($wp_customize, 'shp_cat1_logo2', 'cr8v_shp_cat_logos', 'Item 1 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg');
_cr8v_text($wp_customize, 'shp_cat2_tech',  'cr8v_shp_cat_logos', 'Item 2 Tech Badge', 'Electronics');
_cr8v_text($wp_customize, 'shp_cat2_logo1', 'cr8v_shp_cat_logos', 'Item 2 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');
_cr8v_text($wp_customize, 'shp_cat2_logo2', 'cr8v_shp_cat_logos', 'Item 2 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg');
_cr8v_text($wp_customize, 'shp_cat3_tech',  'cr8v_shp_cat_logos', 'Item 3 Tech Badge', 'Supplements');
_cr8v_text($wp_customize, 'shp_cat3_logo1', 'cr8v_shp_cat_logos', 'Item 3 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');
_cr8v_text($wp_customize, 'shp_cat3_logo2', 'cr8v_shp_cat_logos', 'Item 3 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/stripe.svg');
_cr8v_text($wp_customize, 'shp_cat4_tech',  'cr8v_shp_cat_logos', 'Item 4 Tech Badge', 'Food & Beverage');
_cr8v_text($wp_customize, 'shp_cat4_logo1', 'cr8v_shp_cat_logos', 'Item 4 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');
_cr8v_text($wp_customize, 'shp_cat4_logo2', 'cr8v_shp_cat_logos', 'Item 4 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/css3.svg');
_cr8v_text($wp_customize, 'shp_cat5_tech',  'cr8v_shp_cat_logos', 'Item 5 Tech Badge', 'Migrations');
_cr8v_text($wp_customize, 'shp_cat5_logo1', 'cr8v_shp_cat_logos', 'Item 5 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');
_cr8v_text($wp_customize, 'shp_cat5_logo2', 'cr8v_shp_cat_logos', 'Item 5 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg');

// S9 Pricing — CTAs & Estimator Links
_cr8v_text($wp_customize, 'shp_plan1_cta_text',  'cr8v_shp_pricing', 'Plan 1 CTA Button Text', 'Secure Retainer Slot');
_cr8v_text($wp_customize, 'shp_plan1_cta_url',   'cr8v_shp_pricing', 'Plan 1 CTA URL', '/contact/?model=retainer');
_cr8v_text($wp_customize, 'shp_plan2_cta_text',  'cr8v_shp_pricing', 'Plan 2 CTA Button Text', 'Start A Project');
_cr8v_text($wp_customize, 'shp_plan2_cta_url',   'cr8v_shp_pricing', 'Plan 2 CTA URL', '/contact/?model=project');
_cr8v_text($wp_customize, 'shp_est_cta_url',     'cr8v_shp_pricing', 'Estimator Submit CTA URL', '/contact/?platform=shopify&est=1800-2200');
_cr8v_text($wp_customize, 'shp_est_calc_url',    'cr8v_shp_pricing', 'Calculator Link URL', '/toolkits/website-cost-calculator/');

// S10 FAQ — CTA Link + 8 Q&A pairs
_cr8v_text($wp_customize,     'shp_faq_cta_text', 'cr8v_shp_faq', 'FAQ CTA Link Text', 'Talk to us');
_cr8v_text($wp_customize,     'shp_faq_cta_url',  'cr8v_shp_faq', 'FAQ CTA Link URL', '/contact/');
_cr8v_text($wp_customize,     'shp_faq1_q', 'cr8v_shp_faq', 'FAQ 1 Question', 'Why choose Shopify over WooCommerce?');
_cr8v_textarea($wp_customize, 'shp_faq1_a', 'cr8v_shp_faq', 'FAQ 1 Answer', 'Shopify provides fully hosted server infrastructure, zero server maintenance overhead, built-in global PCI security compliance, and an effortless app ecosystem for rapid scaling without managing databases or hosting servers.');
_cr8v_text($wp_customize,     'shp_faq2_q', 'cr8v_shp_faq', 'FAQ 2 Question', 'How much does a custom Shopify theme cost?');
_cr8v_textarea($wp_customize, 'shp_faq2_a', 'cr8v_shp_faq', 'FAQ 2 Answer', 'Our fixed-scope custom Shopify builds start from $1,800 for a custom Liquid theme setup, custom AJAX cart drawers, and connecting payment gateways. The price scales with catalog complexity, B2B wholesale needs, or custom app integrations.');
_cr8v_text($wp_customize,     'shp_faq3_q', 'cr8v_shp_faq', 'FAQ 3 Question', 'Why hire an agency like Cr8v Stacks instead of a solo freelancer?');
_cr8v_textarea($wp_customize, 'shp_faq3_a', 'cr8v_shp_faq', 'FAQ 3 Answer', 'Solo freelancers often handle design, Liquid code, and app setups alone, leading to single-point delays. Cr8v Stacks provides a dedicated team — combining e-commerce UI/UX designers, senior Liquid developers, conversion specialists, and SEO leads — backed by milestone SLAs.');
_cr8v_text($wp_customize,     'shp_faq4_q', 'cr8v_shp_faq', 'FAQ 4 Question', 'Do you handle multi-currency, geolocation redirects, and migrations from WooCommerce?');
_cr8v_textarea($wp_customize, 'shp_faq4_a', 'cr8v_shp_faq', 'FAQ 4 Answer', 'Yes. We configure Shopify Markets for multi-currency pricing, automatic IP geolocation redirects, and execute full data migrations from WooCommerce, Magento, or WordPress — transferring products, orders, customers, and 301 SEO redirects seamlessly.');
_cr8v_text($wp_customize,     'shp_faq5_q', 'cr8v_shp_faq', 'FAQ 5 Question', 'How long does a custom Shopify store project take?');
_cr8v_textarea($wp_customize, 'shp_faq5_a', 'cr8v_shp_faq', 'FAQ 5 Answer', 'A standard custom Liquid storefront build takes 3 to 5 weeks from initial design wireframes to live store launch. Complex Shopify Plus B2B implementations or custom app integrations take 5 to 8 weeks.');
_cr8v_text($wp_customize,     'shp_faq6_q', 'cr8v_shp_faq', 'FAQ 6 Question', 'Will my team be able to edit theme sections without needing a page builder like PageFly or Shogun?');
_cr8v_textarea($wp_customize, 'shp_faq6_a', 'cr8v_shp_faq', 'FAQ 6 Answer', 'Yes. We build native Shopify OS 2.0 JSON templates and customizable sections so your team can easily drag, drop, and edit page content directly within the native Shopify Theme Editor without needing heavy third-party page builder plugins like PageFly or Shogun.');
_cr8v_text($wp_customize,     'shp_faq7_q', 'cr8v_shp_faq', 'FAQ 7 Question', 'Will my store load fast if I use Shopify apps?');
_cr8v_textarea($wp_customize, 'shp_faq7_a', 'cr8v_shp_faq', 'FAQ 7 Answer', 'Every app you add to Shopify injects external scripts that can slow down your site. Our approach is to hardcode features (like cart drawers, sticky bars, and bundle offers) directly in Liquid. This keeps your theme lean and guarantees fast mobile load times.');
_cr8v_text($wp_customize,     'shp_faq8_q', 'cr8v_shp_faq', 'FAQ 8 Question', 'What support do I get after my Shopify store goes live?');
_cr8v_textarea($wp_customize, 'shp_faq8_a', 'cr8v_shp_faq', 'FAQ 8 Answer', 'We include 30 days of post-launch development support to cover any adjustments or layout tweaks. We also run a full handover training session with your team. For ongoing help, our Growth Retainer at $950/month provides dedicated hours for custom Liquid edits, app integrations, and regular audits.');
