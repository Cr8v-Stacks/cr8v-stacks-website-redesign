<?php
/**
 * CR8V Stacks — inc/customizer/panel-ecommerce.php
 * E-Commerce Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_ecommerce_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_ecom_panel', [
        'title'           => 'Serv Page: E-Commerce',
        'priority'        => 208,
        'active_callback' => function() {
            return is_page_template('page-service-ecommerce.php') || is_page('e-commerce') || is_page('ecommerce') || is_page('e-commerce-development');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_ecom_hero', '01. Hero Section', 'cr8v_ecom_panel', 10);
    _cr8v_text($wp_customize, 'ecom_hero_crumb_parent', 'cr8v_ecom_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'ecom_hero_crumb_child', 'cr8v_ecom_hero', 'Breadcrumb Child', 'E-COMMERCE DEVELOPMENT');
    _cr8v_text($wp_customize, 'ecom_hero_label', 'cr8v_ecom_hero', 'Section Label', 'Shopify & WooCommerce Architecture');
    _cr8v_text($wp_customize, 'ecom_hero_h1_part1', 'cr8v_ecom_hero', 'Headline Part 1', 'Shopify & WooCommerce ');
    _cr8v_text($wp_customize, 'ecom_hero_h1_serif', 'cr8v_ecom_hero', 'Headline Serif Word', 'Stores That Sell.');
    _cr8v_textarea($wp_customize, 'ecom_hero_intro', 'cr8v_ecom_hero', 'Hero Subtitle', 'We engineer bespoke e-commerce stores on both Shopify and WooCommerce — custom Liquid development, WooCommerce PHP extensions, performance-tuned checkout flows, and conversion architectures built to generate revenue from day one.');
    _cr8v_text($wp_customize, 'ecom_hero_cta1_text', 'cr8v_ecom_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'ecom_hero_cta1_url', 'cr8v_ecom_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'ecom_hero_cta2_text', 'cr8v_ecom_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'ecom_hero_cta2_url', 'cr8v_ecom_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'ecom_hero_pill1', 'cr8v_ecom_hero', 'Pill 1', 'Shopify');
    _cr8v_text($wp_customize, 'ecom_hero_pill2', 'cr8v_ecom_hero', 'Pill 2', 'WooCommerce');
    _cr8v_text($wp_customize, 'ecom_hero_pill3', 'cr8v_ecom_hero', 'Pill 3', 'Liquid');
    _cr8v_text($wp_customize, 'ecom_hero_pill4', 'cr8v_ecom_hero', 'Pill 4', 'PHP');
    _cr8v_text($wp_customize, 'ecom_hero_pill5', 'cr8v_ecom_hero', 'Pill 5', 'Checkout');
    _cr8v_text($wp_customize, 'ecom_hero_pill6', 'cr8v_ecom_hero', 'Pill 6', 'Headless');

    // ── 02. WHY CUSTOM E-COMMERCE (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_flank', '02. Why Custom E-Commerce (Flank Cards)', 'cr8v_ecom_panel', 20);
    _cr8v_text($wp_customize, 'ecom_flank_label', 'cr8v_ecom_flank', 'Section Label', 'Why Custom E-Commerce');
    _cr8v_text($wp_customize, 'ecom_flank_h2', 'cr8v_ecom_flank', 'Section Title', 'The Store Is The Business');
    _cr8v_textarea($wp_customize, 'ecom_flank_sub', 'cr8v_ecom_flank', 'Subtitle', 'Most e-commerce stores are drag-and-drop templates with 30+ plugins — slow, leaky, and impossible to scale. We build the infrastructure behind a store that actually converts.');

    _cr8v_text($wp_customize, 'ecom_flank1_step', 'cr8v_ecom_flank', 'Card 1 Step', 'Speed // Revenue');
    _cr8v_text($wp_customize, 'ecom_flank1_title', 'cr8v_ecom_flank', 'Card 1 Title', 'Speed Is Revenue');
    _cr8v_textarea($wp_customize, 'ecom_flank1_desc', 'cr8v_ecom_flank', 'Card 1 Description', 'Every 100ms of load time costs conversions. Sub-second page speeds, zero plugin lag, and native Liquid & PHP asset compilation keep users buying.');

    _cr8v_text($wp_customize, 'ecom_flank2_step', 'cr8v_ecom_flank', 'Card 2 Step', 'Checkout // CRO');
    _cr8v_text($wp_customize, 'ecom_flank2_title', 'cr8v_ecom_flank', 'Card 2 Title', 'Frictionless Checkout');
    _cr8v_textarea($wp_customize, 'ecom_flank2_desc', 'cr8v_ecom_flank', 'Card 2 Description', 'Custom AJAX cart drawers, 1-click express payment buttons, dynamic upsells, and streamlined multi-currency checkout architectures.');

    _cr8v_text($wp_customize, 'ecom_flank3_step', 'cr8v_ecom_flank', 'Card 3 Step', 'Code // Native');
    _cr8v_text($wp_customize, 'ecom_flank3_title', 'cr8v_ecom_flank', 'Card 3 Title', 'Platform Native Tech');
    _cr8v_textarea($wp_customize, 'ecom_flank3_desc', 'cr8v_ecom_flank', 'Card 3 Description', 'Bespoke Shopify Liquid code and native WooCommerce PHP theme modules built without bloated app store subscriptions.');

    _cr8v_text($wp_customize, 'ecom_flank4_step', 'cr8v_ecom_flank', 'Card 4 Step', 'Security // Gateways');
    _cr8v_text($wp_customize, 'ecom_flank4_title', 'cr8v_ecom_flank', 'Card 4 Title', 'Gateway & PCI Hardening');
    _cr8v_textarea($wp_customize, 'ecom_flank4_desc', 'cr8v_ecom_flank', 'Card 4 Description', 'Secure Stripe, Apple Pay, and PayPal API wiring, PCI compliance, transaction error logging, and malware prevention.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_work', '03. Our Work (Portfolio Showcase)', 'cr8v_ecom_panel', 30);
    _cr8v_text($wp_customize, 'ecom_port_label', 'cr8v_ecom_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'ecom_port_h2_part1', 'cr8v_ecom_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'ecom_port_h2_serif', 'cr8v_ecom_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'ecom_port_client', 'cr8v_ecom_work', 'Client Label', 'Case Study — SweeterMen NG');
    _cr8v_text($wp_customize, 'ecom_port_title', 'cr8v_ecom_work', 'Case Study Title', 'Full-Stack Watch E-Commerce & Growth');
    _cr8v_textarea($wp_customize, 'ecom_port_desc', 'cr8v_ecom_work', 'Case Study Description', 'We built SweeterMen NG\'s online watch store on WooCommerce with custom checkout hooks, then ran the Google and Meta ad campaigns that drove traffic to it — one team handling both the build and the growth.');
    _cr8v_img($wp_customize, 'ecom_port_img', 'cr8v_ecom_work', 'Case Study Image', 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'ecom_port_stat1_val', 'cr8v_ecom_work', 'Stat 1 Value', '40+');
    _cr8v_text($wp_customize, 'ecom_port_stat1_lbl', 'cr8v_ecom_work', 'Stat 1 Label', 'Products Catalogued');
    _cr8v_text($wp_customize, 'ecom_port_stat2_val', 'cr8v_ecom_work', 'Stat 2 Value', '2.1s');
    _cr8v_text($wp_customize, 'ecom_port_stat2_lbl', 'cr8v_ecom_work', 'Stat 2 Label', 'Mobile Speed');
    _cr8v_text($wp_customize, 'ecom_port_btn_text', 'cr8v_ecom_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'ecom_port_btn_url', 'cr8v_ecom_work', 'Link URL', '/case-studies/sweetermen-ng/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_folder', '04. What You Get (Folder Deck)', 'cr8v_ecom_panel', 40);
    _cr8v_text($wp_customize, 'ecom_folder_label', 'cr8v_ecom_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'ecom_folder_h2_part1', 'cr8v_ecom_folder', 'Title Part 1', 'Every layer of your store, ');
    _cr8v_text($wp_customize, 'ecom_folder_h2_serif', 'cr8v_ecom_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'ecom_folder_desc', 'cr8v_ecom_folder', 'Subtitle', 'Custom Liquid and WooCommerce PHP architectures engineered for sub-second load speeds and maximum conversion.');

    _cr8v_text($wp_customize, 'ecom_folder1_tab', 'cr8v_ecom_folder', 'Card 1 Tab', '01 // Storefronts');
    _cr8v_text($wp_customize, 'ecom_folder1_title', 'cr8v_ecom_folder', 'Card 1 Title', 'Custom Storefront Engineering');
    _cr8v_textarea($wp_customize, 'ecom_folder1_desc', 'cr8v_ecom_folder', 'Card 1 Description', 'Performance-tuned Shopify Liquid or WooCommerce PHP storefronts built on clean starter or premium bases, giving your team full visual editing freedom without sacrificing speed.');

    _cr8v_text($wp_customize, 'ecom_folder2_tab', 'cr8v_ecom_folder', 'Card 2 Tab', '02 // Apps');
    _cr8v_text($wp_customize, 'ecom_folder2_title', 'cr8v_ecom_folder', 'Card 2 Title', 'App & Plugin Consolidation');
    _cr8v_textarea($wp_customize, 'ecom_folder2_desc', 'cr8v_ecom_folder', 'Card 2 Description', 'Hardcoding features like AJAX cart drawers, mega menus, sticky add-to-cart bars, and product reviews natively to eliminate $300+/mo in monthly app fees.');

    _cr8v_text($wp_customize, 'ecom_folder3_tab', 'cr8v_ecom_folder', 'Card 3 Tab', '03 // CRO');
    _cr8v_text($wp_customize, 'ecom_folder3_title', 'cr8v_ecom_folder', 'Card 3 Title', 'Conversion Rate Optimization');
    _cr8v_textarea($wp_customize, 'ecom_folder3_desc', 'cr8v_ecom_folder', 'Card 3 Description', 'Optimizing customer purchase flows, 1-click express checkouts, dynamic cart upsells, and trust-building product page layouts to maximize AOV.');

    _cr8v_text($wp_customize, 'ecom_folder4_tab', 'cr8v_ecom_folder', 'Card 4 Tab', '04 // Integrations');
    _cr8v_text($wp_customize, 'ecom_folder4_title', 'cr8v_ecom_folder', 'Card 4 Title', 'Custom Integrations & APIs');
    _cr8v_textarea($wp_customize, 'ecom_folder4_desc', 'cr8v_ecom_folder', 'Card 4 Description', 'Wiring ERP systems, inventory management software, CRM pipelines, and custom payment gateways directly into your e-commerce backend.');

    _cr8v_text($wp_customize, 'ecom_folder5_tab', 'cr8v_ecom_folder', 'Card 5 Tab', '05 // Growth');
    _cr8v_text($wp_customize, 'ecom_folder5_title', 'cr8v_ecom_folder', 'Card 5 Title', 'Growth & Ongoing Store Support');
    _cr8v_textarea($wp_customize, 'ecom_folder5_desc', 'cr8v_ecom_folder', 'Card 5 Description', 'Post-launch performance monitoring, security patches, conversion optimization, and dedicated retainer support to keep your store scaling smoothly.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_approach', '05. How We Approach It (Process)', 'cr8v_ecom_panel', 50);
    _cr8v_text($wp_customize, 'ecom_app_label', 'cr8v_ecom_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'ecom_app_h2', 'cr8v_ecom_approach', 'Section Title', 'How We Engineer High-Converting E-Commerce Stores');
    _cr8v_textarea($wp_customize, 'ecom_app_sub', 'cr8v_ecom_approach', 'Subtitle', 'Each stage is structured to guarantee speed, conversion, and operational stability.');

    _cr8v_text($wp_customize, 'ecom_app1_num', 'cr8v_ecom_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'ecom_app1_name', 'cr8v_ecom_approach', 'Stage 1 Name', 'Scoping');
    _cr8v_text($wp_customize, 'ecom_app1_tags', 'cr8v_ecom_approach', 'Stage 1 Tags', 'Brand · Catalog · Architecture');
    _cr8v_textarea($wp_customize, 'ecom_app1_desc', 'cr8v_ecom_approach', 'Stage 1 Description', 'We audit your SKU catalog, customer purchase funnels, and operational backend to define the exact platform strategy before writing a line of code.');

    _cr8v_text($wp_customize, 'ecom_app2_num', 'cr8v_ecom_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'ecom_app2_name', 'cr8v_ecom_approach', 'Stage 2 Name', 'UX & Wireframing');
    _cr8v_text($wp_customize, 'ecom_app2_tags', 'cr8v_ecom_approach', 'Stage 2 Tags', 'Figma · Checkout · Funnels');
    _cr8v_textarea($wp_customize, 'ecom_app2_desc', 'cr8v_ecom_approach', 'Stage 2 Description', 'We craft high-contrast mobile product pages, cart drawers, and streamlined checkout interfaces in Figma, removing friction at every step.');

    _cr8v_text($wp_customize, 'ecom_app3_num', 'cr8v_ecom_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'ecom_app3_name', 'cr8v_ecom_approach', 'Stage 3 Name', 'Native Engineering');
    _cr8v_text($wp_customize, 'ecom_app3_tags', 'cr8v_ecom_approach', 'Stage 3 Tags', 'Liquid · PHP · APIs');
    _cr8v_textarea($wp_customize, 'ecom_app3_desc', 'cr8v_ecom_approach', 'Stage 3 Description', 'We construct custom Liquid sections or WooCommerce PHP layouts on flexible starter or premium themes, wiring payment gateways and inventory APIs natively.');

    _cr8v_text($wp_customize, 'ecom_app4_num', 'cr8v_ecom_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'ecom_app4_name', 'cr8v_ecom_approach', 'Stage 4 Name', 'Audit & Launch');
    _cr8v_text($wp_customize, 'ecom_app4_tags', 'cr8v_ecom_approach', 'Stage 4 Tags', 'PageSpeed · QA · Growth');
    _cr8v_textarea($wp_customize, 'ecom_app4_desc', 'cr8v_ecom_approach', 'Stage 4 Description', 'We conduct Core Web Vitals stress tests, audit checkout security, map 301 redirects, and execute a zero-downtime store launch.');

    // ── 05.5. E-COMMERCE ENGINE OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_ecom_plat', '05.5. E-Commerce Engine Options', 'cr8v_ecom_panel', 55);
    _cr8v_text($wp_customize, 'ecom_plat_label', 'cr8v_ecom_plat', 'Section Label', 'Platform Selection');
    _cr8v_text($wp_customize, 'ecom_plat_h2_part1', 'cr8v_ecom_plat', 'Title Part 1', 'Choosing The Right ');
    _cr8v_text($wp_customize, 'ecom_plat_h2_serif', 'cr8v_ecom_plat', 'Title Serif Word', 'E-Commerce Engine');

    _cr8v_text($wp_customize, 'ecom_plat1_badge', 'cr8v_ecom_plat', 'Option 1 Badge', 'CMS // WordPress');
    _cr8v_text($wp_customize, 'ecom_plat1_title', 'cr8v_ecom_plat', 'Option 1 Title', 'WordPress CMS');
    _cr8v_textarea($wp_customize, 'ecom_plat1_desc', 'cr8v_ecom_plat', 'Option 1 Description', 'If your team needs to manage content, articles, and custom Gutenberg blocks effortlessly without touching code.');

    _cr8v_text($wp_customize, 'ecom_plat2_badge', 'cr8v_ecom_plat', 'Option 2 Badge', 'Storefront // Liquid');
    _cr8v_text($wp_customize, 'ecom_plat2_title', 'cr8v_ecom_plat', 'Option 2 Title', 'Shopify Plus');
    _cr8v_textarea($wp_customize, 'ecom_plat2_desc', 'cr8v_ecom_plat', 'Option 2 Description', 'If you want hosted, hands-off infrastructure with native Shop Pay 1-click checkout and zero server maintenance.');

    _cr8v_text($wp_customize, 'ecom_plat3_badge', 'cr8v_ecom_plat', 'Option 3 Badge', 'Ecommerce // Data');
    _cr8v_text($wp_customize, 'ecom_plat3_title', 'cr8v_ecom_plat', 'Option 3 Title', 'WooCommerce');
    _cr8v_textarea($wp_customize, 'ecom_plat3_desc', 'cr8v_ecom_plat', 'Option 3 Description', 'If you want complete custom ownership of your store\'s data, hosting, and PHP extensions without platform licensing fees.');

    _cr8v_text($wp_customize, 'ecom_plat4_badge', 'cr8v_ecom_plat', 'Option 4 Badge', 'Framework // Custom');
    _cr8v_text($wp_customize, 'ecom_plat4_title', 'cr8v_ecom_plat', 'Option 4 Title', 'Custom Dev');
    _cr8v_textarea($wp_customize, 'ecom_plat4_desc', 'cr8v_ecom_plat', 'Option 4 Description', 'If nothing off-the-shelf fits what you are building and you need custom APIs, portals, or React frameworks.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_hl', '06. Project Catalog (Hoverlist)', 'cr8v_ecom_panel', 60);
    _cr8v_text($wp_customize, 'ecom_hl_label', 'cr8v_ecom_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'ecom_hl_h2', 'cr8v_ecom_hl', 'Section Title', 'Every Kind of E-Commerce Store We Engineer');
    _cr8v_textarea($wp_customize, 'ecom_hl_sub', 'cr8v_ecom_hl', 'Subtitle', 'From DTC fashion brands to enterprise subscription platforms — hover to inspect the project stack.');

    _cr8v_text($wp_customize, 'ecom_hl1_title', 'cr8v_ecom_hl', 'Item 1 Title', 'DTC Fashion & Apparel Flagship Stores');
    _cr8v_textarea($wp_customize, 'ecom_hl1_tagline', 'cr8v_ecom_hl', 'Item 1 Tagline', 'High-contrast product galleries, AJAX color swatches, sticky cart drawers, and instant mobile checkout');

    _cr8v_text($wp_customize, 'ecom_hl2_title', 'cr8v_ecom_hl', 'Item 2 Title', 'Subscription & Recurring Revenue Storefronts');
    _cr8v_textarea($wp_customize, 'ecom_hl2_tagline', 'cr8v_ecom_hl', 'Item 2 Tagline', 'Automated recurring billing, self-serve portal management, and custom product bundle builders');

    _cr8v_text($wp_customize, 'ecom_hl3_title', 'cr8v_ecom_hl', 'Item 3 Title', 'High-AOV Luxury & Jewellery Boutiques');
    _cr8v_textarea($wp_customize, 'ecom_hl3_tagline', 'cr8v_ecom_hl', 'Item 3 Tagline', 'Bespoke visual storytelling, high-resolution zoom engines, and VIP concierge consultation booking');

    _cr8v_text($wp_customize, 'ecom_hl4_title', 'cr8v_ecom_hl', 'Item 4 Title', 'B2B Wholesale & Distributor Portals');
    _cr8v_textarea($wp_customize, 'ecom_hl4_tagline', 'cr8v_ecom_hl', 'Item 4 Tagline', 'Tiered bulk pricing matrices, quick-order CSV uploads, custom net-30 invoicing, and ERP inventory sync');

    _cr8v_text($wp_customize, 'ecom_hl5_title', 'cr8v_ecom_hl', 'Item 5 Title', 'Global Multi-Currency & Localization Stores');
    _cr8v_textarea($wp_customize, 'ecom_hl5_tagline', 'cr8v_ecom_hl', 'Item 5 Tagline', 'Automatic geo-IP currency conversion, localized tax calculation, and multi-language storefront routing');

    _cr8v_text($wp_customize, 'ecom_hl6_title', 'cr8v_ecom_hl', 'Item 6 Title', 'High-SKU Enterprise Catalog Migrations');
    _cr8v_textarea($wp_customize, 'ecom_hl6_tagline', 'cr8v_ecom_hl', 'Item 6 Tagline', 'Migrating 50,000+ SKU databases, customer order histories, and 301 SEO redirects with zero downtime');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_ecom_testi', '07. Client Feedback (Testimonials)', 'cr8v_ecom_panel', 70);
    _cr8v_text($wp_customize, 'ecom_testi_label', 'cr8v_ecom_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'ecom_testi_h2_part1', 'cr8v_ecom_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'ecom_testi_h2_serif', 'cr8v_ecom_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'ecom_testi1_text', 'cr8v_ecom_testi', 'Testimonial 1 Text', 'Our previous store checkout was bleeding mobile sales. Rebuilding natively with custom checkout hooks brought conversion up by +38% within the first 60 days.');
    _cr8v_text($wp_customize, 'ecom_testi1_author', 'cr8v_ecom_testi', 'Testimonial 1 Author', 'Sarah Jenkins — Head of E-Commerce & Growth');

    _cr8v_textarea($wp_customize, 'ecom_testi2_text', 'cr8v_ecom_testi', 'Testimonial 2 Text', 'We were paying over $350/month in Shopify app fees just for cart drawers and bundle widgets. Cr8v Stacks hardcoded everything natively into Liquid and cut our page load times under 1 second.');
    _cr8v_text($wp_customize, 'ecom_testi2_author', 'cr8v_ecom_testi', 'Testimonial 2 Author', 'Emeka Okafor — Director of Digital Operations');

    _cr8v_textarea($wp_customize, 'ecom_testi3_text', 'cr8v_ecom_testi', 'Testimonial 3 Text', 'The multi-currency payment gateway routing and inventory sync were wired without a single plugin conflict. The cleanest codebase we\'ve ever launched.');
    _cr8v_text($wp_customize, 'ecom_testi3_author', 'cr8v_ecom_testi', 'Testimonial 3 Author', 'Marcus Vance — Lead Product Experience Manager');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_ecom_pricing', '08. Pricing Models & Estimator', 'cr8v_ecom_panel', 80);
    _cr8v_text($wp_customize, 'ecom_pricing_label', 'cr8v_ecom_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'ecom_pricing_h2_part1', 'cr8v_ecom_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'ecom_pricing_h2_serif', 'cr8v_ecom_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'ecom_pricing_desc', 'cr8v_ecom_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_ecom_faq', '09. Frequently Asked Questions', 'cr8v_ecom_panel', 90);
    _cr8v_text($wp_customize, 'ecom_faq_eyebrow', 'cr8v_ecom_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'ecom_faq_h2', 'cr8v_ecom_faq', 'Title', 'E-Commerce Development FAQ');
    _cr8v_textarea($wp_customize, 'ecom_faq_sub', 'cr8v_ecom_faq', 'Subtitle', 'Clear answers to common questions about our Shopify and WooCommerce development, migration, and checkout speed optimization.');

    _cr8v_text($wp_customize, 'ecom_faq1_q', 'cr8v_ecom_faq', 'FAQ 1 Question', 'Should we choose Shopify or WooCommerce for our store?');
    _cr8v_textarea($wp_customize, 'ecom_faq1_a', 'cr8v_ecom_faq', 'FAQ 1 Answer', 'Shopify is best if you want fully hosted, low-maintenance infrastructure with native Shop Pay checkout. WooCommerce is ideal if you require 100% data ownership, custom PHP backend extensions, and zero recurring platform fees. We build and optimize natively on both platforms.');

    _cr8v_text($wp_customize, 'ecom_faq2_q', 'cr8v_ecom_faq', 'FAQ 2 Question', 'How do you speed up a slow e-commerce site with lots of apps?');
    _cr8v_textarea($wp_customize, 'ecom_faq2_a', 'cr8v_ecom_faq', 'FAQ 2 Answer', 'We audit your app subscriptions, then hardcode high-friction app features (such as AJAX cart drawers, sticky purchase bars, mega menus, and product swatches) natively into theme Liquid or PHP. This eliminates third-party JavaScript bloat and brings load times under 1 second.');

    _cr8v_text($wp_customize, 'ecom_faq3_q', 'cr8v_ecom_faq', 'FAQ 3 Question', 'Can you migrate our existing store from Magento or WooCommerce to Shopify without losing SEO ranking?');
    _cr8v_textarea($wp_customize, 'ecom_faq3_a', 'cr8v_ecom_faq', 'FAQ 4 Answer', 'Yes. We handle end-to-end database migration for products, customer accounts, and order history, while mapping strict 1:1 301 URL redirect structures so your domain retains full search engine organic authority.');

    _cr8v_text($wp_customize, 'ecom_faq4_q', 'cr8v_ecom_faq', 'FAQ 4 Question', 'Do you integrate custom payment gateways and local currencies?');
    _cr8v_textarea($wp_customize, 'ecom_faq4_a', 'cr8v_ecom_faq', 'FAQ 4 Answer', 'Absolutely. We configure global and regional payment gateways including Stripe, Paystack, Flutterwave, Apple Pay, and PayPal with multi-currency geo-location pricing routing.');

    _cr8v_text($wp_customize, 'ecom_faq5_q', 'cr8v_ecom_faq', 'FAQ 5 Question', 'How long does a custom e-commerce store build take?');
    _cr8v_textarea($wp_customize, 'ecom_faq5_a', 'cr8v_ecom_faq', 'FAQ 5 Answer', 'Our fixed-scope storefront builds typically take between 2 to 4 weeks depending on SKU count, custom API integrations, and catalog complexity.');

    _cr8v_text($wp_customize, 'ecom_faq6_q', 'cr8v_ecom_faq', 'FAQ 6 Question', 'Will our internal marketing team be able to edit products and banners easily?');
    _cr8v_textarea($wp_customize, 'ecom_faq6_a', 'cr8v_ecom_faq', 'FAQ 6 Answer', 'Yes. We structure all custom Shopify Liquid sections and WooCommerce layouts to be 100% editable inside the native platform theme customizer without requiring developer assistance for day-to-day updates.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_ecom_cta', '10. Bottom CTA Section', 'cr8v_ecom_panel', 100);
    _cr8v_text($wp_customize, 'ecom_cta_label', 'cr8v_ecom_cta', 'Section Label', 'READY TO SCALE?');
    _cr8v_text($wp_customize, 'ecom_cta_h2_part1', 'cr8v_ecom_cta', 'Title Part 1', 'Let’s Engineer Your High-Converting ');
    _cr8v_text($wp_customize, 'ecom_cta_h2_serif', 'cr8v_ecom_cta', 'Title Serif Word', 'E-Commerce Store');
    _cr8v_textarea($wp_customize, 'ecom_cta_desc', 'cr8v_ecom_cta', 'Subtitle', 'Tell us about your product catalog and store goals to receive a complete price quote and timeline proposal within 24 hours.');
    _cr8v_text($wp_customize, 'ecom_cta_btn_text', 'cr8v_ecom_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'ecom_cta_btn_url', 'cr8v_ecom_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_ecommerce_panel');
