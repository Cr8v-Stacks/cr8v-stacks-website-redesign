<?php
/**
 * CR8V Stacks — inc/customizer/panel-woocommerce.php
 * Customizer Controls for WooCommerce Custom Stores Service Page
 * 100% Exhaustive Control Parity with Standard Protocol
 */

defined('ABSPATH') || exit;

$wp_customize->add_panel('cr8v_wc_panel', [
    'active_callback' => function() { return is_page('woocommerce') || is_page('woocommerce-custom-stores') || is_page_template('page-service-woocommerce.php') || is_page_template('page-woocommerce.php'); },
    'title'       => __('CR8V Service — WooCommerce Custom Stores', 'cr8v-stacks'),
    'priority'    => 33,
    'description' => __('Manage all copy, headlines, cards, FAQs, and links for WooCommerce Custom Stores Service Page.', 'cr8v-stacks'),
]);

// Section 1: Hero
$wp_customize->add_section('cr8v_wc_hero', ['title' => __('01. Hero Section', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_hero_eyebrow', 'cr8v_wc_hero', 'Hero Eyebrow', 'Custom E-Commerce Store & Checkout Engineering');
_cr8v_text($wp_customize, 'wc_hero_h1_part1', 'cr8v_wc_hero', 'Headline Part 1', 'Enterprise-Grade ');
_cr8v_text($wp_customize, 'wc_hero_h1_serif', 'cr8v_wc_hero', 'Headline Serif (Italic)', 'WooCommerce');
_cr8v_textarea($wp_customize, 'wc_hero_intro', 'cr8v_wc_hero', 'Hero Intro Paragraph', 'Full-featured WooCommerce online stores built to sell your products seamlessly, handle custom catalog workflows, and give you complete self-hosted control with zero recurring platform subscription taxes.');
_cr8v_text($wp_customize, 'wc_hero_cta1_text', 'cr8v_wc_hero', 'Primary CTA Button Text', 'See What We Build →');
_cr8v_text($wp_customize, 'wc_hero_cta1_url', 'cr8v_wc_hero', 'Primary CTA URL', '#c8isv-services');
_cr8v_text($wp_customize, 'wc_hero_cta2_text', 'cr8v_wc_hero', 'Secondary CTA Button Text', 'Get a Quote →');
_cr8v_text($wp_customize, 'wc_hero_cta2_url', 'cr8v_wc_hero', 'Secondary CTA URL', 'https://cr8vstacks.com/contact/');
_cr8v_text($wp_customize, 'wc_hero_pill1', 'cr8v_wc_hero', 'Pill 1', 'WooCommerce');
_cr8v_text($wp_customize, 'wc_hero_pill2', 'cr8v_wc_hero', 'Pill 2', 'WordPress');
_cr8v_text($wp_customize, 'wc_hero_pill3', 'cr8v_wc_hero', 'Pill 3', 'PHP');
_cr8v_text($wp_customize, 'wc_hero_pill4', 'cr8v_wc_hero', 'Pill 4', 'MySQL');

// Section 2: Why WooCommerce
$wp_customize->add_section('cr8v_wc_why', ['title' => __('02. Why WooCommerce', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_why_label', 'cr8v_wc_why', 'Section Label', 'Why WooCommerce');
_cr8v_text($wp_customize, 'wc_why_h2', 'cr8v_wc_why', 'Section Title', 'WooCommerce Stores Built For Freedom & Sales Growth');
_cr8v_text($wp_customize, 'wc_why_card1_step', 'cr8v_wc_why', 'Card 1 Step', 'Design // Custom');
_cr8v_text($wp_customize, 'wc_why_card1_title', 'cr8v_wc_why', 'Card 1 Title', 'Custom Storefront Design');
_cr8v_textarea($wp_customize, 'wc_why_card1_desc', 'cr8v_wc_why', 'Card 1 Description', 'Tailored WooCommerce store layouts built with Elementor or Gutenberg on clean starter themes, giving you an intuitive shop that reflects your brand.');
_cr8v_text($wp_customize, 'wc_why_card2_step', 'cr8v_wc_why', 'Card 2 Step', 'Global // Geolocation');
_cr8v_text($wp_customize, 'wc_why_card2_title', 'cr8v_wc_why', 'Card 2 Title', 'Global Multi-Currency & Geolocation');
_cr8v_textarea($wp_customize, 'wc_why_card2_desc', 'cr8v_wc_why', 'Card 2 Description', 'Multi-currency switchers, localized payment gateways (Stripe, Paystack, PayPal), and automatic IP geolocation redirects for global buyers.');
_cr8v_text($wp_customize, 'wc_why_card3_step', 'cr8v_wc_why', 'Card 3 Step', 'Control // 100% Data');
_cr8v_text($wp_customize, 'wc_why_card3_title', 'cr8v_wc_why', 'Card 3 Title', '100% Data & Store Ownership');
_cr8v_textarea($wp_customize, 'wc_why_card3_desc', 'cr8v_wc_why', 'Card 3 Description', 'Self-hosted infrastructure with complete data privacy, saving you from monthly platform subscription taxes.');
_cr8v_text($wp_customize, 'wc_why_card4_step', 'cr8v_wc_why', 'Card 4 Step', 'Security // Protection');
_cr8v_text($wp_customize, 'wc_why_card4_title', 'cr8v_wc_why', 'Card 4 Title', 'Plugin Security & Hardening');
_cr8v_textarea($wp_customize, 'wc_why_card4_desc', 'cr8v_wc_why', 'Card 4 Description', 'Essential audited security plugins like Wordfence and Sucuri, SSL configuration, and 2FA login protection.');

// Section 3: Case Study Showcase
$wp_customize->add_section('cr8v_wc_work', ['title' => __('03. Case Study Showcase', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_work_label', 'cr8v_wc_work', 'Section Label', 'Our Work');
_cr8v_text($wp_customize, 'wc_work_h2_part1', 'cr8v_wc_work', 'Title Part 1', 'Built for Real Outcomes, ');
_cr8v_text($wp_customize, 'wc_work_h2_serif', 'cr8v_wc_work', 'Title Serif', 'Not Just Concepts');
_cr8v_text($wp_customize, 'wc_work_cs_client', 'cr8v_wc_work', 'Case Study Client Tag', 'Case Study — SweeterMen NG');
_cr8v_text($wp_customize, 'wc_work_cs_title', 'cr8v_wc_work', 'Case Study Title', 'Full-Stack Watch E-Commerce & Growth');
_cr8v_textarea($wp_customize, 'wc_work_cs_desc', 'cr8v_wc_work', 'Case Study Description', 'We built SweeterMen NG\'s online watch store on WooCommerce with custom checkout hooks, then ran the Google and Meta ad campaigns that drove traffic to it — one team handling both the build and the growth.');
_cr8v_text($wp_customize, 'wc_work_cs_stat1_val', 'cr8v_wc_work', 'Metric 1 Value', '40+');
_cr8v_text($wp_customize, 'wc_work_cs_stat1_lbl', 'cr8v_wc_work', 'Metric 1 Label', 'Products Catalogued');
_cr8v_text($wp_customize, 'wc_work_cs_stat2_val', 'cr8v_wc_work', 'Metric 2 Value', '2.1s');
_cr8v_text($wp_customize, 'wc_work_cs_stat2_lbl', 'cr8v_wc_work', 'Metric 2 Label', 'Mobile Speed');
_cr8v_text($wp_customize, 'wc_work_cs_pill1', 'cr8v_wc_work', 'Deliverable Pill 1', 'WooCommerce Setup');
_cr8v_text($wp_customize, 'wc_work_cs_pill2', 'cr8v_wc_work', 'Deliverable Pill 2', 'Paystack Gateway');
_cr8v_text($wp_customize, 'wc_work_cs_pill3', 'cr8v_wc_work', 'Deliverable Pill 3', 'Product Variant Filters');
_cr8v_text($wp_customize, 'wc_work_cs_pill4', 'cr8v_wc_work', 'Deliverable Pill 4', 'Meta Ad Strategy');
_cr8v_text($wp_customize, 'wc_work_cs_btn_text', 'cr8v_wc_work', 'Case Study Link Text', 'View Case Study →');
_cr8v_text($wp_customize, 'wc_work_cs_btn_url', 'cr8v_wc_work', 'Case Study Link URL', '/case-studies/sweetermen/');
_cr8v_img($wp_customize,  'wc_work_cs_img',     'cr8v_wc_work', 'Case Study Image', 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop');

// Section 4: Deliverables Folder Deck
$wp_customize->add_section('cr8v_wc_deck', ['title' => __('04. Deliverables Folder Deck', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_deck_label', 'cr8v_wc_deck', 'Section Label', 'What You Get');
_cr8v_text($wp_customize, 'wc_deck_h2_part1', 'cr8v_wc_deck', 'Title Part 1', 'Every layer of your store, ');
_cr8v_text($wp_customize, 'wc_deck_h2_serif', 'cr8v_wc_deck', 'Title Serif', 'engineered by Cr8v Stacks.');
_cr8v_textarea($wp_customize, 'wc_deck_desc', 'cr8v_wc_deck', 'Lead Description', 'From storefront design to checkout gateways — built clean, with zero plugin bloat.');
_cr8v_text($wp_customize, 'wc_deck1_tab', 'cr8v_wc_deck', 'Card 1 Tab', '01 // Setup');
_cr8v_text($wp_customize, 'wc_deck1_title', 'cr8v_wc_deck', 'Card 1 Title', 'WooCommerce Storefront Setup');
_cr8v_textarea($wp_customize, 'wc_deck1_desc', 'cr8v_wc_deck', 'Card 1 Description', 'Full installation and configuration of WooCommerce, store currency settings, shipping zones, tax rules, and email notifications customized to your brand.');
_cr8v_text($wp_customize, 'wc_deck1_cta_text', 'cr8v_wc_deck', 'Card 1 CTA Text', 'Discuss storefront →');
_cr8v_text($wp_customize, 'wc_deck1_cta_url',  'cr8v_wc_deck', 'Card 1 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'wc_deck1_img',      'cr8v_wc_deck', 'Card 1 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');

_cr8v_text($wp_customize, 'wc_deck2_tab', 'cr8v_wc_deck', 'Card 2 Tab', '02 // Checkout');
_cr8v_text($wp_customize, 'wc_deck2_title', 'cr8v_wc_deck', 'Card 2 Title', 'Payment & Checkout Integration');
_cr8v_textarea($wp_customize, 'wc_deck2_desc', 'cr8v_wc_deck', 'Card 2 Description', 'Seamless connection to Paystack, Stripe, PayPal, Flutterwave, or custom gateway integrations with one-page checkout optimization to reduce cart abandonment.');
_cr8v_text($wp_customize, 'wc_deck2_cta_text', 'cr8v_wc_deck', 'Card 2 CTA Text', 'Discuss checkout →');
_cr8v_text($wp_customize, 'wc_deck2_cta_url',  'cr8v_wc_deck', 'Card 2 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'wc_deck2_img',      'cr8v_wc_deck', 'Card 2 Image', 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=800&auto=format&fit=crop');

_cr8v_text($wp_customize, 'wc_deck3_tab', 'cr8v_wc_deck', 'Card 3 Tab', '03 // Catalog');
_cr8v_text($wp_customize, 'wc_deck3_title', 'cr8v_wc_deck', 'Card 3 Title', 'Product Catalog & Migration');
_cr8v_textarea($wp_customize, 'wc_deck3_desc', 'cr8v_wc_deck', 'Card 3 Description', 'Structured variable products, product attributes, custom fields, inventory sync, and data migration from Shopify, Wix, or CSV files.');
_cr8v_text($wp_customize, 'wc_deck3_cta_text', 'cr8v_wc_deck', 'Card 3 CTA Text', 'Discuss catalog →');
_cr8v_text($wp_customize, 'wc_deck3_cta_url',  'cr8v_wc_deck', 'Card 3 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'wc_deck3_img',      'cr8v_wc_deck', 'Card 3 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop');

_cr8v_text($wp_customize, 'wc_deck4_tab', 'cr8v_wc_deck', 'Card 4 Tab', '04 // Speed');
_cr8v_text($wp_customize, 'wc_deck4_title', 'cr8v_wc_deck', 'Card 4 Title', 'Speed Optimization & Security');
_cr8v_textarea($wp_customize, 'wc_deck4_desc', 'cr8v_wc_deck', 'Card 4 Description', 'WooCommerce database vacuuming, object caching (Redis/Memcached), image compression, SSL setup, and security hardening to prevent site hacks.');
_cr8v_text($wp_customize, 'wc_deck4_cta_text', 'cr8v_wc_deck', 'Card 4 CTA Text', 'Discuss speed →');
_cr8v_text($wp_customize, 'wc_deck4_cta_url',  'cr8v_wc_deck', 'Card 4 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'wc_deck4_img',      'cr8v_wc_deck', 'Card 4 Image', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop');

_cr8v_text($wp_customize, 'wc_deck5_tab', 'cr8v_wc_deck', 'Card 5 Tab', '05 // Launch');
_cr8v_text($wp_customize, 'wc_deck5_title', 'cr8v_wc_deck', 'Card 5 Title', 'Store Launch QA & Training');
_cr8v_textarea($wp_customize, 'wc_deck5_desc', 'cr8v_wc_deck', 'Card 5 Description', 'Complete order testing, email notification verification, SSL domain cutover, 301 redirect maps, and staff admin dashboard training.');
_cr8v_text($wp_customize, 'wc_deck5_cta_text', 'cr8v_wc_deck', 'Card 5 CTA Text', 'Discuss launch QA →');
_cr8v_text($wp_customize, 'wc_deck5_cta_url',  'cr8v_wc_deck', 'Card 5 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'wc_deck5_img',      'cr8v_wc_deck', 'Card 5 Image', 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop');

// Section 5: Process & Approach
$wp_customize->add_section('cr8v_wc_proc', ['title' => __('05a. Process & Approach (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_proc_label', 'cr8v_wc_proc', 'Section Label', 'How We Approach It');
_cr8v_text($wp_customize, 'wc_proc_h2', 'cr8v_wc_proc', 'Section Title', 'Four stages. No overlap, no shortcuts.');
_cr8v_textarea($wp_customize, 'wc_proc_desc', 'cr8v_wc_proc', 'Lead Description', 'A battle-tested 4-stage WooCommerce storefront development process built for performance, security, and sales growth.');
_cr8v_text($wp_customize, 'wc_proc1_num', 'cr8v_wc_proc', 'Stage 1 Number', '01');
_cr8v_text($wp_customize, 'wc_proc1_name', 'cr8v_wc_proc', 'Stage 1 Name', 'Discover');
_cr8v_text($wp_customize, 'wc_proc1_tags', 'cr8v_wc_proc', 'Stage 1 Tags', 'Audit · Gateways · Catalog');
_cr8v_textarea($wp_customize, 'wc_proc1_desc', 'cr8v_wc_proc', 'Stage 1 Description', 'Product catalog auditing, payment gateway mapping, and technical hosting evaluation to select optimal server configurations.');
_cr8v_text($wp_customize, 'wc_proc2_num', 'cr8v_wc_proc', 'Stage 2 Number', '02');
_cr8v_text($wp_customize, 'wc_proc2_name', 'cr8v_wc_proc', 'Stage 2 Name', 'Design');
_cr8v_text($wp_customize, 'wc_proc2_tags', 'cr8v_wc_proc', 'Stage 2 Tags', 'UX · Cart · Mobile');
_cr8v_textarea($wp_customize, 'wc_proc2_desc', 'cr8v_wc_proc', 'Stage 2 Description', 'Single-product layouts, shop archive filtering UX, mobile checkout drawers, and cart upsell design wireframing.');
_cr8v_text($wp_customize, 'wc_proc3_num', 'cr8v_wc_proc', 'Stage 3 Number', '03');
_cr8v_text($wp_customize, 'wc_proc3_name', 'cr8v_wc_proc', 'Stage 3 Name', 'Build');
_cr8v_text($wp_customize, 'wc_proc3_tags', 'cr8v_wc_proc', 'Stage 3 Tags', 'PHP · WooCommerce · API');
_cr8v_textarea($wp_customize, 'wc_proc3_desc', 'cr8v_wc_proc', 'Stage 3 Description', 'Custom PHP theme coding, custom WooCommerce checkout hooks, gateway SDK wiring, and plugin audit to eliminate slow code.');
_cr8v_text($wp_customize, 'wc_proc4_num', 'cr8v_wc_proc', 'Stage 4 Number', '04');
_cr8v_text($wp_customize, 'wc_proc4_name', 'cr8v_wc_proc', 'Stage 4 Name', 'Launch');
_cr8v_text($wp_customize, 'wc_proc4_tags', 'cr8v_wc_proc', 'Stage 4 Tags', 'Speed · Caching · Handover');
_cr8v_textarea($wp_customize, 'wc_proc4_desc', 'cr8v_wc_proc', 'Stage 4 Description', 'Redis object caching configuration, database optimization, order testing, 301 URL redirects, and staff dashboard training.');

// Section 5b: Process Stage Images
$wp_customize->add_section('cr8v_wc_proc_imgs', ['title' => __('05b. Process Stage Images', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_img($wp_customize, 'wc_proc1_img', 'cr8v_wc_proc_imgs', 'Stage 1 Image', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'wc_proc2_img', 'cr8v_wc_proc_imgs', 'Stage 2 Image', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'wc_proc3_img', 'cr8v_wc_proc_imgs', 'Stage 3 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'wc_proc4_img', 'cr8v_wc_proc_imgs', 'Stage 4 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop');

// Section 6: Build Platform Options
$wp_customize->add_section('cr8v_wc_plat', ['title' => __('06a. WooCommerce Stack Options (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_plat_label', 'cr8v_wc_plat', 'Section Label', 'WooCommerce Stack Options');
_cr8v_text($wp_customize, 'wc_plat_h2_part1', 'cr8v_wc_plat', 'Title Part 1', 'Choosing The Right ');
_cr8v_text($wp_customize, 'wc_plat_h2_serif', 'cr8v_wc_plat', 'Title Serif', 'WooCommerce Architecture');
_cr8v_textarea($wp_customize, 'wc_plat_desc', 'cr8v_wc_plat', 'Lead Description', 'Whether you need rapid theme setup, custom PHP layouts, high-volume speed optimization, or multi-currency setup — we engineer the right WooCommerce configuration for your business:');
_cr8v_text($wp_customize, 'wc_plat1_badge', 'cr8v_wc_plat', 'Platform 1 Badge', 'Custom // Gutenberg');
_cr8v_text($wp_customize, 'wc_plat1_title', 'cr8v_wc_plat', 'Platform 1 Title', 'Custom Theme & Gutenberg Store');
_cr8v_textarea($wp_customize, 'wc_plat1_desc', 'cr8v_wc_plat', 'Platform 1 Description', 'Tailored WooCommerce layouts built on lightweight block-editor starters or Elementor Pro without bloated plugin dependencies.');
_cr8v_text($wp_customize, 'wc_plat2_badge', 'cr8v_wc_plat', 'Platform 2 Badge', 'Gateways // Paystack');
_cr8v_text($wp_customize, 'wc_plat2_title', 'cr8v_wc_plat', 'Platform 2 Title', 'Global & Local Gateway Integration');
_cr8v_textarea($wp_customize, 'wc_plat2_desc', 'cr8v_wc_plat', 'Platform 2 Description', 'Configuring Stripe, Paystack, PayPal, Monnify, or Flutterwave for frictionless multi-currency and local card payments.');
_cr8v_text($wp_customize, 'wc_plat3_badge', 'cr8v_wc_plat', 'Platform 3 Badge', 'Speed // Caching');
_cr8v_text($wp_customize, 'wc_plat3_title', 'cr8v_wc_plat', 'Platform 3 Title', 'High-Speed Database & Caching');
_cr8v_textarea($wp_customize, 'wc_plat3_desc', 'cr8v_wc_plat', 'Platform 3 Description', 'Redis object caching, Cloudflare CDN integration, and MySQL database vacuuming for fast sub-2s mobile load times.');
_cr8v_text($wp_customize, 'wc_plat4_badge', 'cr8v_wc_plat', 'Platform 4 Badge', 'REST API // Headless');
_cr8v_text($wp_customize, 'wc_plat4_title', 'cr8v_wc_plat', 'Platform 4 Title', 'Headless WooCommerce & REST API');
_cr8v_textarea($wp_customize, 'wc_plat4_desc', 'cr8v_wc_plat', 'Platform 4 Description', 'Custom React or Next.js frontends connecting to WooCommerce REST API for bespoke app-like shopping experiences.');
_cr8v_textarea($wp_customize, 'wc_plat_footer_note', 'cr8v_wc_plat', 'Footer Note', 'Not sure which one? Tell us what you\'re selling and we\'ll recommend the right WooCommerce architecture as part of the initial scoping call.');
_cr8v_text($wp_customize, 'wc_plat_cta_text', 'cr8v_wc_plat', 'CTA Button Text', 'Start a WooCommerce Scoping Call →');
_cr8v_text($wp_customize, 'wc_plat_cta_url', 'cr8v_wc_plat', 'CTA Button URL', '/contact/?model=project&service=woocommerce');

// Section 7: Project Catalog
$wp_customize->add_section('cr8v_wc_cat', ['title' => __('07. Project Catalog (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_cat_label', 'cr8v_wc_cat', 'Section Label', 'Project Catalog');
_cr8v_text($wp_customize, 'wc_cat_h2', 'cr8v_wc_cat', 'Section Title', 'Every Kind of WooCommerce Store We Engineer');
_cr8v_textarea($wp_customize, 'wc_cat_desc', 'cr8v_wc_cat', 'Lead Description', 'From fashion boutiques to digital downloads and subscription boxes — hover to inspect the project stack.');
_cr8v_text($wp_customize, 'wc_cat1_title', 'cr8v_wc_cat', 'Catalog 1 Title', 'Fashion, Apparel & Luxury Accessories');
_cr8v_textarea($wp_customize, 'wc_cat1_tagline', 'cr8v_wc_cat', 'Catalog 1 Tagline', 'Size guide popups, color swatch filters, gallery rotators, and checkout upsells.');
_cr8v_text($wp_customize, 'wc_cat2_title', 'cr8v_wc_cat', 'Catalog 2 Title', 'Digital Downloads & Software Licensing');
_cr8v_textarea($wp_customize, 'wc_cat2_tagline', 'cr8v_wc_cat', 'Catalog 2 Tagline', 'Automated license key generation, instant file download access, and account management.');
_cr8v_text($wp_customize, 'wc_cat3_title', 'cr8v_wc_cat', 'Catalog 3 Title', 'Subscription Boxes & Recurring Memberships');
_cr8v_textarea($wp_customize, 'wc_cat3_tagline', 'cr8v_wc_cat', 'Catalog 3 Tagline', 'WooCommerce Subscriptions setup, recurring billing automation, and customer portal management.');
_cr8v_text($wp_customize, 'wc_cat4_title', 'cr8v_wc_cat', 'Catalog 4 Title', 'Multi-Vendor Marketplaces');
_cr8v_textarea($wp_customize, 'wc_cat4_tagline', 'cr8v_wc_cat', 'Catalog 4 Tagline', 'Dokan/WCFM marketplace integration, vendor dashboards, commission split wiring, and review systems.');
_cr8v_text($wp_customize, 'wc_cat5_title', 'cr8v_wc_cat', 'Catalog 5 Title', 'Shopify to WooCommerce Data Migrations');
_cr8v_textarea($wp_customize, 'wc_cat5_tagline', 'cr8v_wc_cat', 'Catalog 5 Tagline', 'Transferring products, orders, customer accounts, and 301 URL redirects to self-hosted WooCommerce seamlessly.');

// Section 6b: Catalog CDN Logos & Tech Badges (×5)
$wp_customize->add_section('cr8v_wc_cat_logos', ['title' => __('06b. Catalog CDN Logos & Tech', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_cat1_tech',  'cr8v_wc_cat_logos', 'Item 1 Tech Badge', 'Apparel');
_cr8v_text($wp_customize, 'wc_cat1_logo1', 'cr8v_wc_cat_logos', 'Item 1 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg');
_cr8v_text($wp_customize, 'wc_cat1_logo2', 'cr8v_wc_cat_logos', 'Item 1 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg');
_cr8v_text($wp_customize, 'wc_cat2_tech',  'cr8v_wc_cat_logos', 'Item 2 Tech Badge', 'Digital Goods');
_cr8v_text($wp_customize, 'wc_cat2_logo1', 'cr8v_wc_cat_logos', 'Item 2 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg');
_cr8v_text($wp_customize, 'wc_cat2_logo2', 'cr8v_wc_cat_logos', 'Item 2 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg');
_cr8v_text($wp_customize, 'wc_cat3_tech',  'cr8v_wc_cat_logos', 'Item 3 Tech Badge', 'Subscriptions');
_cr8v_text($wp_customize, 'wc_cat3_logo1', 'cr8v_wc_cat_logos', 'Item 3 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg');
_cr8v_text($wp_customize, 'wc_cat3_logo2', 'cr8v_wc_cat_logos', 'Item 3 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/stripe.svg');
_cr8v_text($wp_customize, 'wc_cat4_tech',  'cr8v_wc_cat_logos', 'Item 4 Tech Badge', 'Marketplaces');
_cr8v_text($wp_customize, 'wc_cat4_logo1', 'cr8v_wc_cat_logos', 'Item 4 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg');
_cr8v_text($wp_customize, 'wc_cat4_logo2', 'cr8v_wc_cat_logos', 'Item 4 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mysql.svg');
_cr8v_text($wp_customize, 'wc_cat5_tech',  'cr8v_wc_cat_logos', 'Item 5 Tech Badge', 'Migrations');
_cr8v_text($wp_customize, 'wc_cat5_logo1', 'cr8v_wc_cat_logos', 'Item 5 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg');
_cr8v_text($wp_customize, 'wc_cat5_logo2', 'cr8v_wc_cat_logos', 'Item 5 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg');

// Section 8: Testimonials
$wp_customize->add_section('cr8v_wc_testi', ['title' => __('08. Testimonials', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_testi_label', 'cr8v_wc_testi', 'Section Label', 'Client Feedback');
_cr8v_text($wp_customize, 'wc_testi_h2_part1', 'cr8v_wc_testi', 'Title Part 1', 'What clients say after ');
_cr8v_text($wp_customize, 'wc_testi_h2_serif', 'cr8v_wc_testi', 'Title Serif', 'launch');
_cr8v_textarea($wp_customize, 'wc_testi1_text', 'cr8v_wc_testi', 'Testimonial 1 Text', 'Rebuilding our watch store on WooCommerce gave us total database ownership and eliminated $400/mo in recurring SaaS platform app fees while keeping page speeds under 2 seconds.');
_cr8v_text($wp_customize, 'wc_testi1_author', 'cr8v_wc_testi', 'Testimonial 1 Author', 'Tunde Williams — Managing Director, SweeterMen');
_cr8v_textarea($wp_customize, 'wc_testi2_text', 'cr8v_wc_testi', 'Testimonial 2 Text', 'The Paystack and Stripe multi-currency checkout setup quadrupled our international sales without any checkout dropoff.');
_cr8v_text($wp_customize, 'wc_testi2_author', 'cr8v_wc_testi', 'Testimonial 2 Author', 'Amaka Okafor — E-Commerce Manager');
_cr8v_textarea($wp_customize, 'wc_testi3_text', 'cr8v_wc_testi', 'Testimonial 3 Text', 'Database vacuuming and Redis object caching transformed our WooCommerce admin speed. Searching 10,000 orders now takes half a second.');
_cr8v_text($wp_customize, 'wc_testi3_author', 'cr8v_wc_testi', 'Testimonial 3 Author', 'Marcus Vance — Operations Lead');

// Section 9: Pricing & Estimator
$wp_customize->add_section('cr8v_wc_pricing', ['title' => __('09. Pricing & Estimator', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_pricing_label', 'cr8v_wc_pricing', 'Section Label', 'PRICING MODELS');
_cr8v_text($wp_customize, 'wc_pricing_h2_part1', 'cr8v_wc_pricing', 'Title Part 1', 'HOW WE ');
_cr8v_text($wp_customize, 'wc_pricing_h2_serif', 'cr8v_wc_pricing', 'Title Serif', 'WORK TOGETHER');
_cr8v_textarea($wp_customize, 'wc_pricing_desc', 'cr8v_wc_pricing', 'Lead Description', 'Whether you need ongoing site maintenance or a dedicated WooCommerce storefront build, we have a model to fit.');
_cr8v_text($wp_customize, 'wc_plan1_type', 'cr8v_wc_pricing', 'Plan 1 Type', 'Ongoing Support');
_cr8v_text($wp_customize, 'wc_plan1_title', 'cr8v_wc_pricing', 'Plan 1 Title', 'Growth Retainer');
_cr8v_text($wp_customize, 'wc_plan1_price', 'cr8v_wc_pricing', 'Plan 1 Price', '$950');
_cr8v_text($wp_customize, 'wc_plan1_period', 'cr8v_wc_pricing', 'Plan 1 Period', '/mo');
_cr8v_textarea($wp_customize, 'wc_plan1_desc', 'cr8v_wc_pricing', 'Plan 1 Description', 'Dedicated monthly WooCommerce maintenance, plugin updates, speed tuning, and security audits to keep your shop fast and secure.');
_cr8v_text($wp_customize, 'wc_plan1_cta_text', 'cr8v_wc_pricing', 'Plan 1 CTA Text', 'Secure Retainer Slot');
_cr8v_text($wp_customize, 'wc_plan1_cta_url',  'cr8v_wc_pricing', 'Plan 1 CTA URL', '/contact/?model=retainer');

_cr8v_text($wp_customize, 'wc_plan2_type', 'cr8v_wc_pricing', 'Plan 2 Type', 'Fixed Scope');
_cr8v_text($wp_customize, 'wc_plan2_title', 'cr8v_wc_pricing', 'Plan 2 Title', 'Fixed Projects');
_cr8v_text($wp_customize, 'wc_plan2_price', 'cr8v_wc_pricing', 'Plan 2 Price', 'From $1,500');
_cr8v_text($wp_customize, 'wc_plan2_period', 'cr8v_wc_pricing', 'Plan 2 Period', ' entry');
_cr8v_textarea($wp_customize, 'wc_plan2_desc', 'cr8v_wc_pricing', 'Plan 2 Description', 'Custom WooCommerce storefront design, gateway setup, speed tuning, and mobile-first product page engineering.');
_cr8v_text($wp_customize, 'wc_plan2_cta_text', 'cr8v_wc_pricing', 'Plan 2 CTA Text', 'Start A Project');
_cr8v_text($wp_customize, 'wc_plan2_cta_url',  'cr8v_wc_pricing', 'Plan 2 CTA URL', '/contact/?model=project');
_cr8v_text($wp_customize, 'wc_est_cta_url',    'cr8v_wc_pricing', 'Estimator Submit CTA URL', '/contact/?platform=woocommerce&est=1500-1900');
_cr8v_text($wp_customize, 'wc_est_calc_url',   'cr8v_wc_pricing', 'Calculator Link URL', '/toolkits/website-cost-calculator/');

// Section 10: FAQ Section
$wp_customize->add_section('cr8v_wc_faq', ['title' => __('10. FAQ Section', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_faq_eyebrow', 'cr8v_wc_faq', 'FAQ Eyebrow', '// COMMON QUESTIONS');
_cr8v_text($wp_customize, 'wc_faq_h2', 'cr8v_wc_faq', 'FAQ Title', 'WooCommerce Questions, Answered Honestly');
_cr8v_textarea($wp_customize, 'wc_faq_sub', 'cr8v_wc_faq', 'FAQ Subtitle', 'Clear answers to common questions about custom WooCommerce development, payment gateways, and speed optimization.');
_cr8v_text($wp_customize, 'wc_faq_cta_text', 'cr8v_wc_faq', 'FAQ CTA Link Text', 'Talk to us');
_cr8v_text($wp_customize, 'wc_faq_cta_url',  'cr8v_wc_faq', 'FAQ CTA Link URL', '/contact/');

_cr8v_text($wp_customize,     'wc_faq1_q', 'cr8v_wc_faq', 'FAQ 1 Question', 'Why choose WooCommerce over Shopify?');
_cr8v_textarea($wp_customize, 'wc_faq1_a', 'cr8v_wc_faq', 'FAQ 1 Answer', 'WooCommerce provides 100% data ownership, zero transaction fees or platform tax, unlimited customization freedom, and self-hosted control without locked SaaS rules.');
_cr8v_text($wp_customize,     'wc_faq2_q', 'cr8v_wc_faq', 'FAQ 2 Question', 'How much does a custom WooCommerce project cost?');
_cr8v_textarea($wp_customize, 'wc_faq2_a', 'cr8v_wc_faq', 'FAQ 2 Answer', 'Fixed-scope custom WooCommerce builds start from $1,500 for a custom storefront, payment gateway configuration, catalog setup, and speed tuning.');
_cr8v_text($wp_customize,     'wc_faq3_q', 'cr8v_wc_faq', 'FAQ 3 Question', 'Will WooCommerce slow down my WordPress site?');
_cr8v_textarea($wp_customize, 'wc_faq3_a', 'cr8v_wc_faq', 'FAQ 3 Answer', 'Not when engineered properly. We audit plugins, implement Redis object caching, clean database bloat, and use lightweight theme bases to guarantee sub-2s mobile loads.');
_cr8v_text($wp_customize,     'wc_faq4_q', 'cr8v_wc_faq', 'FAQ 4 Question', 'What payment gateways can you integrate?');
_cr8v_textarea($wp_customize, 'wc_faq4_a', 'cr8v_wc_faq', 'FAQ 4 Answer', 'We integrate Stripe, Paystack, PayPal, Flutterwave, Monnify, Klarna, and custom bank transfer checkout hooks with automatic currency switching.');
_cr8v_text($wp_customize,     'wc_faq5_q', 'cr8v_wc_faq', 'FAQ 5 Question', 'Can you migrate my products from Shopify to WooCommerce?');
_cr8v_textarea($wp_customize, 'wc_faq5_a', 'cr8v_wc_faq', 'FAQ 5 Answer', 'Yes. We migrate products, images, categories, customer accounts, order history, and setup 301 URL redirects so your SEO rankings are preserved.');
_cr8v_text($wp_customize,     'wc_faq6_q', 'cr8v_wc_faq', 'FAQ 6 Question', 'Will my team be able to add new products easily?');
_cr8v_textarea($wp_customize, 'wc_faq6_a', 'cr8v_wc_faq', 'FAQ 6 Answer', 'Yes. The standard WordPress/WooCommerce admin panel makes adding products, managing stock, and viewing sales reports straightforward, and we provide video training.');
_cr8v_text($wp_customize,     'wc_faq7_q', 'cr8v_wc_faq', 'FAQ 7 Question', 'Do you handle WooCommerce security and updates?');
_cr8v_textarea($wp_customize, 'wc_faq7_a', 'cr8v_wc_faq', 'FAQ 7 Answer', 'Yes. We configure SSL certificates, firewall rules, 2FA logins, and offer ongoing monthly maintenance retainers to keep plugins and core files safely updated.');
_cr8v_text($wp_customize,     'wc_faq8_q', 'cr8v_wc_faq', 'FAQ 8 Question', 'What post-launch support is provided?');
_cr8v_textarea($wp_customize, 'wc_faq8_a', 'cr8v_wc_faq', 'FAQ 8 Answer', 'We include 30 days of post-launch warranty support for bug fixes and adjustments, alongside full handover documentation and staff training.');

// Section 11: Related Services
$wp_customize->add_section('cr8v_wc_rel', ['title' => __('11. Related Services', 'cr8v-stacks'), 'panel' => 'cr8v_wc_panel']);
_cr8v_text($wp_customize, 'wc_rel_label', 'cr8v_wc_rel', 'Section Label', 'Other Ways We Build');
_cr8v_text($wp_customize, 'wc_rel_h2', 'cr8v_wc_rel', 'Section Title', 'Related Services');
_cr8v_textarea($wp_customize, 'wc_rel_desc', 'cr8v_wc_rel', 'Lead Description', 'WooCommerce Development is one of several services we offer. If a self-hosted WooCommerce store is not what you need, check these out.');
_cr8v_text($wp_customize, 'wc_rel1_title', 'cr8v_wc_rel', 'Related 1 Title', 'Shopify Storefronts');
_cr8v_textarea($wp_customize, 'wc_rel1_desc', 'cr8v_wc_rel', 'Related 1 Description', 'Hosted e-commerce stores on Shopify. Custom Liquid themes, sub-second mobile page loads, and seamless hosted infrastructure.');
_cr8v_text($wp_customize, 'wc_rel1_url', 'cr8v_wc_rel', 'Related 1 URL', '/services/shopify/');
_cr8v_text($wp_customize, 'wc_rel2_title', 'cr8v_wc_rel', 'Related 2 Title', 'WordPress Themes');
_cr8v_textarea($wp_customize, 'wc_rel2_desc', 'cr8v_wc_rel', 'Related 2 Description', 'Custom Gutenberg block-editor themes without Elementor or Divi. Fast, maintainable, and content-editable by your team.');
_cr8v_text($wp_customize, 'wc_rel2_url', 'cr8v_wc_rel', 'Related 2 URL', '/services/web-design/');
_cr8v_text($wp_customize, 'wc_rel3_title', 'cr8v_wc_rel', 'Related 3 Title', 'Custom Development');
_cr8v_textarea($wp_customize, 'wc_rel3_desc', 'cr8v_wc_rel', 'Related 3 Description', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and SQL.');
_cr8v_text($wp_customize, 'wc_rel3_url', 'cr8v_wc_rel', 'Related 3 URL', '/services/custom-dev/');
