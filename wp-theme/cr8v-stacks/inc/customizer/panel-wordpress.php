<?php
/**
 * CR8V Stacks — inc/customizer/panel-wordpress.php
 * WordPress Development Service Page Customizer Panel (100% Control Parity)
 */
defined('ABSPATH') || exit;

function cr8v_register_wordpress_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_wpdev_panel', [
        'title'           => 'Serv Page: WordPress Dev',
        'priority'        => 205,
        'active_callback' => function() {
            return is_page_template('page-service-wordpress.php') || is_page('wordpress') || is_page('wordpress-development');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_hero', '01. Hero Section', 'cr8v_wpdev_panel', 10);
    _cr8v_text($wp_customize, 'wpdev_hero_crumb_parent', 'cr8v_wpdev_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'wpdev_hero_crumb_child', 'cr8v_wpdev_hero', 'Breadcrumb Child', 'WORDPRESS DEVELOPMENT');
    _cr8v_text($wp_customize, 'wpdev_hero_label', 'cr8v_wpdev_hero', 'Section Label', 'Custom WordPress Architecture & Theme Engineering');
    _cr8v_text($wp_customize, 'wpdev_hero_h1_part1', 'cr8v_wpdev_hero', 'Headline Part 1', 'Bespoke WordPress ');
    _cr8v_text($wp_customize, 'wpdev_hero_h1_serif', 'cr8v_wpdev_hero', 'Headline Serif Word', 'Themes & Speed');
    _cr8v_textarea($wp_customize, 'wpdev_hero_intro', 'cr8v_wpdev_hero', 'Hero Subtitle', 'Bloat-stripped custom WordPress websites engineered for sub-second page loads, clean organic search visibility, and complete editing autonomy for your team.');
    _cr8v_text($wp_customize, 'wpdev_hero_cta1_text', 'cr8v_wpdev_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'wpdev_hero_cta1_url', 'cr8v_wpdev_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'wpdev_hero_cta2_text', 'cr8v_wpdev_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'wpdev_hero_cta2_url', 'cr8v_wpdev_hero', 'CTA 2 Link URL', '/discovery-call/');

    _cr8v_text($wp_customize, 'wpdev_hero_pill1', 'cr8v_wpdev_hero', 'Pill 1', 'WordPress');
    _cr8v_text($wp_customize, 'wpdev_hero_pill2', 'cr8v_wpdev_hero', 'Pill 2', 'Elementor');
    _cr8v_text($wp_customize, 'wpdev_hero_pill3', 'cr8v_wpdev_hero', 'Pill 3', 'Gutenberg');
    _cr8v_text($wp_customize, 'wpdev_hero_pill4', 'cr8v_wpdev_hero', 'Pill 4', 'SEO');

    // ── 02. WHY CUSTOM WORDPRESS (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_flank', '02. Why Custom WordPress (Flank Cards)', 'cr8v_wpdev_panel', 20);
    _cr8v_text($wp_customize, 'wpdev_flank_label', 'cr8v_wpdev_flank', 'Section Label', 'Why Custom WordPress');
    _cr8v_text($wp_customize, 'wpdev_flank_h2', 'cr8v_wpdev_flank', 'Section Title', 'WordPress Websites Built For Editing Freedom & Performance');

    _cr8v_text($wp_customize, 'wpdev_flank1_step', 'cr8v_wpdev_flank', 'Card 1 Step', 'Editing // Freedom');
    _cr8v_text($wp_customize, 'wpdev_flank1_title', 'cr8v_wpdev_flank', 'Card 1 Title', 'Intuitive Page Building');
    _cr8v_textarea($wp_customize, 'wpdev_flank1_desc', 'cr8v_wpdev_flank', 'Card 1 Description', 'Elementor Pro or Gutenberg layouts for complete visual editing freedom without breaking your site.');

    _cr8v_text($wp_customize, 'wpdev_flank2_step', 'cr8v_wpdev_flank', 'Card 2 Step', 'Control // 100% Data');
    _cr8v_text($wp_customize, 'wpdev_flank2_title', 'cr8v_wpdev_flank', 'Card 2 Title', '100% Content & Data Control');
    _cr8v_textarea($wp_customize, 'wpdev_flank2_desc', 'cr8v_wpdev_flank', 'Card 2 Description', 'Self-hosted platform independence saving you from monthly platform subscription taxes.');

    _cr8v_text($wp_customize, 'wpdev_flank3_step', 'cr8v_wpdev_flank', 'Card 3 Step', 'SEO // Built-In');
    _cr8v_text($wp_customize, 'wpdev_flank3_title', 'cr8v_wpdev_flank', 'Card 3 Title', 'Built-In SEO Foundations');
    _cr8v_textarea($wp_customize, 'wpdev_flank3_desc', 'cr8v_wpdev_flank', 'Card 3 Description', 'Clean schema markup, responsive mobile-first typography, and fast page speeds for organic ranking.');

    // ── 03. FEATURED CASE STUDY ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_work', '03. Featured Portfolio Case Study', 'cr8v_wpdev_panel', 30);
    _cr8v_text($wp_customize, 'wpdev_work_label', 'cr8v_wpdev_work', 'Section Label', 'FEATURED WORK Spotlight');
    _cr8v_text($wp_customize, 'wpdev_work_h2_part1', 'cr8v_wpdev_work', 'Title Part 1', 'Engineering The ');
    _cr8v_text($wp_customize, 'wpdev_work_h2_serif', 'cr8v_wpdev_work', 'Title Serif Word', 'Publishion Platform');
    _cr8v_text($wp_customize, 'wpdev_work_cs_tag', 'cr8v_wpdev_work', 'Case Study Tag', 'WP PUBLISHION AI // CUSTOM THEME & PLUGIN ENGINE');
    _cr8v_text($wp_customize, 'wpdev_work_cs_title', 'cr8v_wpdev_work', 'Case Study Title', 'WP Publishion AI Platform');
    _cr8v_textarea($wp_customize, 'wpdev_work_cs_desc', 'cr8v_wpdev_work', 'Case Study Description', 'A custom WordPress media platform with automated AI content publishing, custom Gutenberg block suites, and a 98/100 PageSpeed score across desktop and mobile.');
    _cr8v_text($wp_customize, 'wpdev_work_cs_btn_text', 'cr8v_wpdev_work', 'Button Text', 'Explore Case Study →');
    _cr8v_text($wp_customize, 'wpdev_work_cs_btn_url', 'cr8v_wpdev_work', 'Link URL', '/case-studies/');
    _cr8v_img($wp_customize, 'wpdev_work_cs_img', 'cr8v_wpdev_work', 'Featured Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop');

    // ── 04. CORE CAPABILITIES (Accordion) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_cap', '04. Core Capabilities (Accordion)', 'cr8v_wpdev_panel', 40);
    _cr8v_text($wp_customize, 'wpdev_cap_label', 'cr8v_wpdev_cap', 'Section Label', 'Capabilities');
    _cr8v_text($wp_customize, 'wpdev_cap_h2_part1', 'cr8v_wpdev_cap', 'Title Part 1', 'WordPress Engineering ');
    _cr8v_text($wp_customize, 'wpdev_cap_h2_serif', 'cr8v_wpdev_cap', 'Title Serif Word', 'Capabilities');

    _cr8v_text($wp_customize, 'wpdev_cap1_title', 'cr8v_wpdev_cap', 'Item 1 Title', 'Custom Gutenberg Block Development');
    _cr8v_textarea($wp_customize, 'wpdev_cap1_desc', 'cr8v_wpdev_cap', 'Item 1 Description', 'Hand-coded React & PHP Gutenberg blocks tailored to your design system so content teams build pixel-perfect pages without third-party page builder overhead.');

    _cr8v_text($wp_customize, 'wpdev_cap2_title', 'cr8v_wpdev_cap', 'Item 2 Title', 'Speed & Core Web Vitals Optimization');
    _cr8v_textarea($wp_customize, 'wpdev_cap2_desc', 'cr8v_wpdev_cap', 'Item 2 Description', 'Eliminating database queries, asset minification, critical CSS extraction, and server-level caching to guarantee sub-1.2s page load speed scores.');

    _cr8v_text($wp_customize, 'wpdev_cap3_title', 'cr8v_wpdev_cap', 'Item 3 Title', 'ACF Pro & Custom Post Type Architecture');
    _cr8v_textarea($wp_customize, 'wpdev_cap3_desc', 'cr8v_wpdev_cap', 'Item 3 Description', 'Bespoke Advanced Custom Fields data models structured around your exact business data — projects, team profiles, pricing tiers, and locations.');

    _cr8v_text($wp_customize, 'wpdev_cap4_title', 'cr8v_wpdev_cap', 'Item 4 Title', 'Enterprise Migration & Elementor Refactoring');
    _cr8v_textarea($wp_customize, 'wpdev_cap4_desc', 'cr8v_wpdev_cap', 'Item 4 Description', 'Migrating legacy WordPress builds, bloated Elementor setups, or external CMS platforms (Webflow, Squarespace) to clean hand-written theme code.');

    // ── 05a. PROCESS & APPROACH (Copy) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_approach', '05a. Process & Approach (Copy)', 'cr8v_wpdev_panel', 50);
    _cr8v_text($wp_customize, 'wpdev_app_label', 'cr8v_wpdev_approach', 'Section Label', 'How We Work');
    _cr8v_text($wp_customize, 'wpdev_app_h2_part1', 'cr8v_wpdev_approach', 'Title Part 1', 'Our 4-Stage ');
    _cr8v_text($wp_customize, 'wpdev_app_h2_serif', 'cr8v_wpdev_approach', 'Title Serif Word', 'Development Process');

    _cr8v_text($wp_customize, 'wpdev_stage1_num', 'cr8v_wpdev_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'wpdev_stage1_title', 'cr8v_wpdev_approach', 'Stage 1 Title', 'Architecture & Schema Scoping');
    _cr8v_textarea($wp_customize, 'wpdev_stage1_desc', 'cr8v_wpdev_approach', 'Stage 1 Description', 'Mapping custom post types, taxonomy structures, plugin requirements, and URL redirects before writing line one of code.');

    _cr8v_text($wp_customize, 'wpdev_stage2_num', 'cr8v_wpdev_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'wpdev_stage2_title', 'cr8v_wpdev_approach', 'Stage 2 Title', 'Figma To PHP Theme Build');
    _cr8v_textarea($wp_customize, 'wpdev_stage2_desc', 'cr8v_wpdev_approach', 'Stage 2 Description', 'Hand-coding responsive HTML5/CSS3 templates, custom PHP theme files, and ACF field groups with 100% fidelity to your Figma designs.');

    _cr8v_text($wp_customize, 'wpdev_stage3_num', 'cr8v_wpdev_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'wpdev_stage3_title', 'cr8v_wpdev_approach', 'Stage 3 Title', 'Performance & SEO Hardening');
    _cr8v_textarea($wp_customize, 'wpdev_stage3_desc', 'cr8v_wpdev_approach', 'Stage 3 Description', 'Benchmarking Core Web Vitals, configuring RankMath/Yoast schema markup, image webp compression, and security hardening.');

    _cr8v_text($wp_customize, 'wpdev_stage4_num', 'cr8v_wpdev_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'wpdev_stage4_title', 'cr8v_wpdev_approach', 'Stage 4 Title', 'Client Hand-Off & Training');
    _cr8v_textarea($wp_customize, 'wpdev_stage4_desc', 'cr8v_wpdev_approach', 'Stage 4 Description', 'Delivering custom video walkthrough guides so your non-technical marketing team can edit 100% of pages effortlessly.');

    // ── 05b. PROCESS STAGE IMAGES ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_approach_img', '05b. Process Stage Images', 'cr8v_wpdev_panel', 55);
    _cr8v_img($wp_customize, 'wpdev_stage1_img', 'cr8v_wpdev_approach_img', 'Stage 1 Image', 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'wpdev_stage2_img', 'cr8v_wpdev_approach_img', 'Stage 2 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'wpdev_stage3_img', 'cr8v_wpdev_approach_img', 'Stage 3 Image', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop');
    _cr8v_img($wp_customize, 'wpdev_stage4_img', 'cr8v_wpdev_approach_img', 'Stage 4 Image', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop');

    // ── 06a. BUILD PLATFORM OPTIONS (Copy) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_options', '06a. Build Platform Options (Copy)', 'cr8v_wpdev_panel', 60);
    _cr8v_text($wp_customize, 'wpdev_opt_label', 'cr8v_wpdev_options', 'Section Label', 'Development Engines');
    _cr8v_text($wp_customize, 'wpdev_opt_h2_part1', 'cr8v_wpdev_options', 'Title Part 1', 'Choose Your Preferred ');
    _cr8v_text($wp_customize, 'wpdev_opt_h2_serif', 'cr8v_wpdev_options', 'Title Serif Word', 'WordPress Setup');

    _cr8v_text($wp_customize, 'wpdev_opt1_name', 'cr8v_wpdev_options', 'Option 1 Name', 'Custom Theme (ACF + Gutenberg)');
    _cr8v_textarea($wp_customize, 'wpdev_opt1_desc', 'cr8v_wpdev_options', 'Option 1 Description', 'Zero page builders. Pure hand-written PHP code, ACF Pro data structures, and lightweight native block layouts for maximum speed.');

    _cr8v_text($wp_customize, 'wpdev_opt2_name', 'cr8v_wpdev_options', 'Option 2 Name', 'Elementor Pro Custom Theme');
    _cr8v_textarea($wp_customize, 'wpdev_opt2_desc', 'cr8v_wpdev_options', 'Option 2 Description', 'Bespoke Elementor Pro widget suites engineered around your design system for drag-and-drop flexibility without template clutter.');

    _cr8v_text($wp_customize, 'wpdev_opt3_name', 'cr8v_wpdev_options', 'Option 3 Name', 'Headless WordPress (REST API)');
    _cr8v_textarea($wp_customize, 'wpdev_opt3_desc', 'cr8v_wpdev_options', 'Option 3 Description', 'WordPress back-end as a headless CMS feeding Next.js or Vue front-ends for lightning fast enterprise digital experiences.');

    // ── 06b. CATALOG CDN LOGOS & TECH ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_options_tech', '06b. Catalog CDN Logos & Tech', 'cr8v_wpdev_panel', 65);
    _cr8v_text($wp_customize, 'wpdev_tech1_logo', 'cr8v_wpdev_options_tech', 'Tech 1 Logo URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg');
    _cr8v_text($wp_customize, 'wpdev_tech2_logo', 'cr8v_wpdev_options_tech', 'Tech 2 Logo URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg');
    _cr8v_text($wp_customize, 'wpdev_tech3_logo', 'cr8v_wpdev_options_tech', 'Tech 3 Logo URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg');

    // ── 07. PROJECT CATALOG (Copy) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_cat', '07. Project Catalog (Copy)', 'cr8v_wpdev_panel', 70);
    _cr8v_text($wp_customize, 'wpdev_cat_label', 'cr8v_wpdev_cat', 'Section Label', 'WordPress Solutions');
    _cr8v_text($wp_customize, 'wpdev_cat_h2_part1', 'cr8v_wpdev_cat', 'Title Part 1', 'Types Of WordPress Sites We ');
    _cr8v_text($wp_customize, 'wpdev_cat_h2_serif', 'cr8v_wpdev_cat', 'Title Serif Word', 'Engineer');

    _cr8v_text($wp_customize, 'wpdev_cat1_title', 'cr8v_wpdev_cat', 'Cat 1 Title', 'Corporate & B2B Websites');
    _cr8v_textarea($wp_customize, 'wpdev_cat1_tagline', 'cr8v_wpdev_cat', 'Cat 1 Tagline', 'High-converting agency, SaaS, and corporate websites built to turn visitors into sales calls.');

    _cr8v_text($wp_customize, 'wpdev_cat2_title', 'cr8v_wpdev_cat', 'Cat 2 Title', 'Digital Publications & News');
    _cr8v_textarea($wp_customize, 'wpdev_cat2_tagline', 'cr8v_wpdev_cat', 'Cat 2 Tagline', 'High-traffic editorial portals with automated category structures, ad slot management, and newsletter funnels.');

    _cr8v_text($wp_customize, 'wpdev_cat3_title', 'cr8v_wpdev_cat', 'Cat 3 Title', 'WooCommerce E-Commerce Sites');
    _cr8v_textarea($wp_customize, 'wpdev_cat3_tagline', 'cr8v_wpdev_cat', 'Cat 3 Tagline', 'Full custom shopping experiences with custom product filters, multi-currency checkout, and ERP syncing.');

    _cr8v_text($wp_customize, 'wpdev_cat4_title', 'cr8v_wpdev_cat', 'Cat 4 Title', 'Membership & Portal Platforms');
    _cr8v_textarea($wp_customize, 'wpdev_cat4_tagline', 'cr8v_wpdev_cat', 'Cat 4 Tagline', 'Private client dashboards, gated content subscriptions, and course portals built on clean custom code.');

    // ── 08. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_testi', '08. Client Feedback (Testimonials)', 'cr8v_wpdev_panel', 80);
    _cr8v_text($wp_customize, 'wpdev_testi_label', 'cr8v_wpdev_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'wpdev_testi_h2_part1', 'cr8v_wpdev_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'wpdev_testi_h2_serif', 'cr8v_wpdev_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'wpdev_testi1_text', 'cr8v_wpdev_testi', 'Testimonial 1 Text', 'Our previous theme was plagued by slow page loads and broken plugin updates. Cr8v Stacks rebuilt our WordPress site from scratch in native code — loading times dropped from 6s to 0.9s!');
    _cr8v_text($wp_customize, 'wpdev_testi1_author', 'cr8v_wpdev_testi', 'Testimonial 1 Author', 'Marcus Vance — Managing Editor');

    _cr8v_textarea($wp_customize, 'wpdev_testi2_text', 'cr8v_wpdev_testi', 'Testimonial 2 Text', 'The custom Gutenberg blocks give our marketing team total freedom to build landing pages without calling a developer every single week. Highly recommend!');
    _cr8v_text($wp_customize, 'wpdev_testi2_author', 'cr8v_wpdev_testi', 'Testimonial 2 Author', 'Sarah Jenkins — Head of Growth');

    _cr8v_textarea($wp_customize, 'wpdev_testi3_text', 'cr8v_wpdev_testi', 'Testimonial 3 Text', 'Migrating our Webflow site to custom WordPress was seamless. Ranking for our core keywords jumped within 30 days of launch thanks to their technical schema setup.');
    _cr8v_text($wp_customize, 'wpdev_testi3_author', 'cr8v_wpdev_testi', 'Testimonial 3 Author', 'Tunde Adebayo — Operations Director');

    // ── 09. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_pricing', '09. Pricing Models & Estimator', 'cr8v_wpdev_panel', 90);
    _cr8v_text($wp_customize, 'wpdev_pricing_label', 'cr8v_wpdev_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'wpdev_pricing_h2_part1', 'cr8v_wpdev_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'wpdev_pricing_h2_serif', 'cr8v_wpdev_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'wpdev_pricing_desc', 'cr8v_wpdev_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 10. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_faq', '10. Frequently Asked Questions', 'cr8v_wpdev_panel', 100);
    _cr8v_text($wp_customize, 'wpdev_faq_label', 'cr8v_wpdev_faq', 'Section Label', 'FAQ');
    _cr8v_text($wp_customize, 'wpdev_faq_h2_part1', 'cr8v_wpdev_faq', 'Title Part 1', 'Questions About ');
    _cr8v_text($wp_customize, 'wpdev_faq_h2_serif', 'cr8v_wpdev_faq', 'Title Serif Word', 'WordPress Builds');
    _cr8v_text($wp_customize, 'wpdev_faq_cta_text', 'cr8v_wpdev_faq', 'CTA Link Text', 'Talk to us');
    _cr8v_text($wp_customize, 'wpdev_faq_cta_url', 'cr8v_wpdev_faq', 'CTA Link URL', '/discovery-call/');

    _cr8v_text($wp_customize, 'wpdev_faq1_q', 'cr8v_wpdev_faq', 'FAQ 1 Question', 'Will our non-technical marketing team be able to edit the website?');
    _cr8v_textarea($wp_customize, 'wpdev_faq1_a', 'cr8v_wpdev_faq', 'FAQ 1 Answer', 'Yes, 100%. We build custom visual Gutenberg blocks or Elementor Pro field structures so your team can edit all text, images, and pages without writing code or breaking design layouts.');

    _cr8v_text($wp_customize, 'wpdev_faq2_q', 'cr8v_wpdev_faq', 'FAQ 2 Question', 'How do you ensure 95+ PageSpeed scores on WordPress?');
    _cr8v_textarea($wp_customize, 'wpdev_faq2_a', 'cr8v_wpdev_faq', 'FAQ 2 Answer', 'We avoid heavy pre-built templates. We hand-write clean PHP templates, minimize third-party plugins, optimize database queries, implement WEBP image conversion, and configure critical CSS.');

    _cr8v_text($wp_customize, 'wpdev_faq3_q', 'cr8v_wpdev_faq', 'FAQ 3 Question', 'Can you migrate our existing site without losing SEO rankings?');
    _cr8v_textarea($wp_customize, 'wpdev_faq3_a', 'cr8v_wpdev_faq', 'FAQ 3 Answer', 'Absolutely. We perform complete Screaming Frog crawl audits to map all existing URLs, set up 301 redirect matrices, and preserve your metadata, schema, and Google indexing.');

    // ── 11. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_cta', '11. Bottom CTA Section', 'cr8v_wpdev_panel', 110);
    _cr8v_text($wp_customize, 'wpdev_cta_label', 'cr8v_wpdev_cta', 'Section Label', 'READY TO BUILD?');
    _cr8v_text($wp_customize, 'wpdev_cta_h2_part1', 'cr8v_wpdev_cta', 'Title Part 1', 'Let’s Engineer Your Custom ');
    _cr8v_text($wp_customize, 'wpdev_cta_h2_serif', 'cr8v_wpdev_cta', 'Title Serif Word', 'WordPress Theme');
    _cr8v_textarea($wp_customize, 'wpdev_cta_desc', 'cr8v_wpdev_cta', 'Subtitle', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.');
    _cr8v_text($wp_customize, 'wpdev_cta_btn_text', 'cr8v_wpdev_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'wpdev_cta_btn_url', 'cr8v_wpdev_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_wordpress_panel');
