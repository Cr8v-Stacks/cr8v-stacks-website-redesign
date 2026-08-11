<?php
/**
 * CR8V Stacks — inc/customizer/panel-wordpress.php
 * WordPress Development Service Page Customizer Panel (100% Control Parity with index.html)
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

    _cr8v_text($wp_customize, 'wpdev_flank4_step', 'cr8v_wpdev_flank', 'Card 4 Step', 'Security // Protection');
    _cr8v_text($wp_customize, 'wpdev_flank4_title', 'cr8v_wpdev_flank', 'Card 4 Title', 'Plugin Security & Hardening');
    _cr8v_textarea($wp_customize, 'wpdev_flank4_desc', 'cr8v_wpdev_flank', 'Card 4 Description', 'Essential audited security plugins like Wordfence and Sucuri, SSL configuration, and 2FA login protection.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_work', '03. Our Work (Portfolio Showcase)', 'cr8v_wpdev_panel', 30);
    _cr8v_text($wp_customize, 'wpdev_port_label', 'cr8v_wpdev_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'wpdev_port_h2_part1', 'cr8v_wpdev_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'wpdev_port_h2_serif', 'cr8v_wpdev_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'wpdev_port_client', 'cr8v_wpdev_work', 'Client Label', 'Case Study — Mkenny Properties');
    _cr8v_text($wp_customize, 'wpdev_port_title', 'cr8v_wpdev_work', 'Case Study Title', 'Property Platform & Custom Widgets');
    _cr8v_textarea($wp_customize, 'wpdev_port_desc', 'cr8v_wpdev_work', 'Case Study Description', 'Rebuilt Mkenny Properties from a basic landing page into a full property platform: property listing pages, individual property detail pages, blog, and archive pages — all built using custom Elementor widgets developed specifically for this project.');
    _cr8v_img($wp_customize, 'wpdev_port_img', 'cr8v_wpdev_work', 'Case Study Image', 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'wpdev_port_stat1_val', 'cr8v_wpdev_work', 'Stat 1 Value', '4');
    _cr8v_text($wp_customize, 'wpdev_port_stat1_lbl', 'cr8v_wpdev_work', 'Stat 1 Label', 'New Page Types');
    _cr8v_text($wp_customize, 'wpdev_port_stat2_val', 'cr8v_wpdev_work', 'Stat 2 Value', '1');
    _cr8v_text($wp_customize, 'wpdev_port_stat2_lbl', 'cr8v_wpdev_work', 'Stat 2 Label', 'Custom Widget System');
    _cr8v_text($wp_customize, 'wpdev_port_btn_text', 'cr8v_wpdev_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'wpdev_port_btn_url', 'cr8v_wpdev_work', 'Link URL', '/case-studies/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_folder', '04. What You Get (Folder Deck)', 'cr8v_wpdev_panel', 40);
    _cr8v_text($wp_customize, 'wpdev_folder_label', 'cr8v_wpdev_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'wpdev_folder_h2_part1', 'cr8v_wpdev_folder', 'Title Part 1', 'Every layer of your build, ');
    _cr8v_text($wp_customize, 'wpdev_folder_h2_serif', 'cr8v_wpdev_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'wpdev_folder_desc', 'cr8v_wpdev_folder', 'Subtitle', 'Custom WordPress theme builds, intuitive page builders, structured taxonomies, and hardened security engineered for growth.');

    _cr8v_text($wp_customize, 'wpdev_folder1_tab', 'cr8v_wpdev_folder', 'Card 1 Tab', '01 // Theme');
    _cr8v_text($wp_customize, 'wpdev_folder1_title', 'cr8v_wpdev_folder', 'Card 1 Title', 'Tailored WordPress Theme Build');
    _cr8v_textarea($wp_customize, 'wpdev_folder1_desc', 'cr8v_wpdev_folder', 'Card 1 Description', 'Custom WordPress theme development using Elementor Pro or Gutenberg on lightweight starter base themes tailored for your brand.');

    _cr8v_text($wp_customize, 'wpdev_folder2_tab', 'cr8v_wpdev_folder', 'Card 2 Tab', '02 // Builders');
    _cr8v_text($wp_customize, 'wpdev_folder2_title', 'cr8v_wpdev_folder', 'Card 2 Title', 'Custom Page Builders & Block Suites');
    _cr8v_textarea($wp_customize, 'wpdev_folder2_desc', 'cr8v_wpdev_folder', 'Card 2 Description', 'Tailored Elementor Pro or native Gutenberg block layouts empowering your team to create and edit pages visually without breaking layout structures.');

    _cr8v_text($wp_customize, 'wpdev_folder3_tab', 'cr8v_wpdev_folder', 'Card 3 Tab', '03 // Plugins');
    _cr8v_text($wp_customize, 'wpdev_folder3_title', 'cr8v_wpdev_folder', 'Card 3 Title', 'Custom Fields & Workflow Plugins');
    _cr8v_textarea($wp_customize, 'wpdev_folder3_desc', 'cr8v_wpdev_folder', 'Card 3 Description', 'Essential vetted plugins and custom PHP hooks for specialized business logic, custom post types, and ACF Pro fields.');

    _cr8v_text($wp_customize, 'wpdev_folder4_tab', 'cr8v_wpdev_folder', 'Card 4 Tab', '04 // Speed');
    _cr8v_text($wp_customize, 'wpdev_folder4_title', 'cr8v_wpdev_folder', 'Card 4 Title', 'Core Web Vitals & Speed Tuning');
    _cr8v_textarea($wp_customize, 'wpdev_folder4_desc', 'cr8v_wpdev_folder', 'Card 4 Description', 'Optimized MySQL database queries, WebP image pipelines, transient cleanup, and caching for fast mobile rendering.');

    _cr8v_text($wp_customize, 'wpdev_folder5_tab', 'cr8v_wpdev_folder', 'Card 5 Tab', '05 // Security');
    _cr8v_text($wp_customize, 'wpdev_folder5_title', 'cr8v_wpdev_folder', 'Card 5 Title', 'Security Hardening & Retainer Support');
    _cr8v_textarea($wp_customize, 'wpdev_folder5_desc', 'cr8v_wpdev_folder', 'Card 5 Description', 'Wordfence and Sucuri security configuration, SSL setup, admin walkthrough training, and dedicated post-launch support.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_approach', '05. How We Approach It (Process)', 'cr8v_wpdev_panel', 50);
    _cr8v_text($wp_customize, 'wpdev_app_label', 'cr8v_wpdev_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'wpdev_app_h2', 'cr8v_wpdev_approach', 'Section Title', 'How We Approach Custom WordPress Development');
    _cr8v_textarea($wp_customize, 'wpdev_app_sub', 'cr8v_wpdev_approach', 'Subtitle', 'A structured 4-step engineering roadmap designed for custom theme precision, Gutenberg/Elementor autonomy, and sub-second page performance.');

    _cr8v_text($wp_customize, 'wpdev_app1_num', 'cr8v_wpdev_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'wpdev_app1_name', 'cr8v_wpdev_approach', 'Stage 1 Name', 'Discover');
    _cr8v_text($wp_customize, 'wpdev_app1_tags', 'cr8v_wpdev_approach', 'Stage 1 Tags', 'Brand · Competitive · Goals');
    _cr8v_textarea($wp_customize, 'wpdev_app1_desc', 'cr8v_wpdev_approach', 'Stage 1 Description', 'We analyze your brand identity, audit existing assets, map competitive landscapes, and outline conversion targets before wireframing. We understand your users before creating visuals.');

    _cr8v_text($wp_customize, 'wpdev_app2_num', 'cr8v_wpdev_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'wpdev_app2_name', 'cr8v_wpdev_approach', 'Stage 2 Name', 'Design');
    _cr8v_text($wp_customize, 'wpdev_app2_tags', 'cr8v_wpdev_approach', 'Stage 2 Tags', 'UX · Figma · Styling');
    _cr8v_textarea($wp_customize, 'wpdev_app2_desc', 'cr8v_wpdev_approach', 'Stage 2 Description', 'We draft custom layout wireframes and craft high-fidelity interface mockups in Figma, selecting typography and brand colors designed to maximize visual credibility.');

    _cr8v_text($wp_customize, 'wpdev_app3_num', 'cr8v_wpdev_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'wpdev_app3_name', 'cr8v_wpdev_approach', 'Stage 3 Name', 'Engineering');
    _cr8v_text($wp_customize, 'wpdev_app3_tags', 'cr8v_wpdev_approach', 'Stage 3 Tags', 'Grids · Assets · Systems');
    _cr8v_textarea($wp_customize, 'wpdev_app3_desc', 'cr8v_wpdev_approach', 'Stage 3 Description', 'We package design style systems, establish grid guidelines, configure reusable UI component assets, and define responsive layouts for developer delivery.');

    _cr8v_text($wp_customize, 'wpdev_app4_num', 'cr8v_wpdev_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'wpdev_app4_name', 'cr8v_wpdev_approach', 'Stage 4 Name', 'Safe Launch');
    _cr8v_text($wp_customize, 'wpdev_app4_tags', 'cr8v_wpdev_approach', 'Stage 4 Tags', 'Handover · QA · Signoff');
    _cr8v_textarea($wp_customize, 'wpdev_app4_desc', 'cr8v_wpdev_approach', 'Stage 4 Description', 'We audit responsive layouts, test prototype link interactions, and deliver a clean developer-ready handoff package to ensure pixel-perfect deployment.');

    // ── 05.5. WORDPRESS STACK OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_plat', '05.5. WordPress Stack Options', 'cr8v_wpdev_panel', 55);
    _cr8v_text($wp_customize, 'wpdev_plat_label', 'cr8v_wpdev_plat', 'Section Label', 'WordPress Stack Options');
    _cr8v_text($wp_customize, 'wpdev_plat_h2_part1', 'cr8v_wpdev_plat', 'Title Part 1', 'Choosing The Right ');
    _cr8v_text($wp_customize, 'wpdev_plat_h2_serif', 'cr8v_wpdev_plat', 'Title Serif Word', 'WordPress Architecture');

    _cr8v_text($wp_customize, 'wpdev_plat1_badge', 'cr8v_wpdev_plat', 'Option 1 Badge', 'Base // Theme');
    _cr8v_text($wp_customize, 'wpdev_plat1_title', 'cr8v_wpdev_plat', 'Option 1 Title', 'Tailored Elementor Stack');
    _cr8v_textarea($wp_customize, 'wpdev_plat1_desc', 'cr8v_wpdev_plat', 'Option 1 Description', 'If your team prefers Elementor visual editing, built on a lightweight starter base theme with performance-tuned components.');

    _cr8v_text($wp_customize, 'wpdev_plat2_badge', 'cr8v_wpdev_plat', 'Option 2 Badge', 'Editor // Native');
    _cr8v_text($wp_customize, 'wpdev_plat2_title', 'cr8v_wpdev_plat', 'Option 2 Title', 'Native Gutenberg Block Suite');
    _cr8v_textarea($wp_customize, 'wpdev_plat2_desc', 'cr8v_wpdev_plat', 'Option 2 Description', 'If you want native WordPress block editor editing with structured custom blocks.');

    _cr8v_text($wp_customize, 'wpdev_plat3_badge', 'cr8v_wpdev_plat', 'Option 3 Badge', 'Data // Schemas');
    _cr8v_text($wp_customize, 'wpdev_plat3_title', 'cr8v_wpdev_plat', 'Option 3 Title', 'Custom PHP & ACF Pro');
    _cr8v_textarea($wp_customize, 'wpdev_plat3_desc', 'cr8v_wpdev_plat', 'Option 3 Description', 'If you require bespoke database schemas, custom post types, and structured data fields.');

    _cr8v_text($wp_customize, 'wpdev_plat4_badge', 'cr8v_wpdev_plat', 'Option 4 Badge', 'API // Headless');
    _cr8v_text($wp_customize, 'wpdev_plat4_title', 'cr8v_wpdev_plat', 'Option 4 Title', 'Headless WordPress CMS');
    _cr8v_textarea($wp_customize, 'wpdev_plat4_desc', 'cr8v_wpdev_plat', 'Option 4 Description', 'If you want WordPress as a headless content API powering a fast React/Next.js frontend.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_hl', '06. Project Catalog (Hoverlist)', 'cr8v_wpdev_panel', 60);
    _cr8v_text($wp_customize, 'wpdev_hl_label', 'cr8v_wpdev_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'wpdev_hl_h2', 'cr8v_wpdev_hl', 'Section Title', 'Every Kind of WordPress Website We Engineer');
    _cr8v_textarea($wp_customize, 'wpdev_hl_sub', 'cr8v_wpdev_hl', 'Subtitle', 'From SaaS marketing portals to high-frequency publishing hubs — hover to inspect the project stack.');

    _cr8v_text($wp_customize, 'wpdev_hl1_title', 'cr8v_wpdev_hl', 'Item 1 Title', 'Corporate & Enterprise Web Portals');
    _cr8v_textarea($wp_customize, 'wpdev_hl1_tagline', 'cr8v_wpdev_hl', 'Item 1 Tagline', 'High-credibility corporate sites, executive team profiles, investor relations portals, and multi-branch company hubs.');

    _cr8v_text($wp_customize, 'wpdev_hl2_title', 'cr8v_wpdev_hl', 'Item 2 Title', 'SaaS & Tech Platform Marketing Sites');
    _cr8v_textarea($wp_customize, 'wpdev_hl2_tagline', 'cr8v_wpdev_hl', 'Item 2 Tagline', 'Product feature showcases, interactive pricing calculators, API documentation hubs, and high-converting lead funnels.');

    _cr8v_text($wp_customize, 'wpdev_hl3_title', 'cr8v_wpdev_hl', 'Item 3 Title', 'Shopify / Wix to WordPress Migrations');
    _cr8v_textarea($wp_customize, 'wpdev_hl3_tagline', 'cr8v_wpdev_hl', 'Item 3 Tagline', 'Migrating content, custom post types, customer accounts, and 301 redirects to self-hosted WordPress.');

    _cr8v_text($wp_customize, 'wpdev_hl4_title', 'cr8v_wpdev_hl', 'Item 4 Title', 'Professional Services & Legal Practice Sites');
    _cr8v_textarea($wp_customize, 'wpdev_hl4_tagline', 'cr8v_wpdev_hl', 'Item 4 Tagline', 'Law firm case studies, consultancy service matrices, client intake forms, and partner directories.');

    _cr8v_text($wp_customize, 'wpdev_hl5_title', 'cr8v_wpdev_hl', 'Item 5 Title', 'Media, News & Editorial Publishing Hubs');
    _cr8v_textarea($wp_customize, 'wpdev_hl5_tagline', 'cr8v_wpdev_hl', 'Item 5 Tagline', 'High-frequency article archives, paywall integrations, author attribution modules, and ad-monetized layouts.');

    _cr8v_text($wp_customize, 'wpdev_hl6_title', 'cr8v_wpdev_hl', 'Item 6 Title', 'Legacy Site Redesigns & System Upgrades');
    _cr8v_textarea($wp_customize, 'wpdev_hl6_tagline', 'cr8v_wpdev_hl', 'Item 6 Tagline', 'Rebuilding old websites into clean, responsive custom WordPress themes without losing search rankings.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_testi', '07. Client Feedback (Testimonials)', 'cr8v_wpdev_panel', 70);
    _cr8v_text($wp_customize, 'wpdev_testi_label', 'cr8v_wpdev_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'wpdev_testi_h2_part1', 'cr8v_wpdev_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'wpdev_testi_h2_serif', 'cr8v_wpdev_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'wpdev_testi1_text', 'cr8v_wpdev_testi', 'Testimonial 1 Text', 'We needed a property listing platform that didn\'t rely on unoptimized starter layouts. The custom Gutenberg blocks let our content editors publish new listings effortlessly while maintaining fast page speeds.');
    _cr8v_text($wp_customize, 'wpdev_testi1_author', 'cr8v_wpdev_testi', 'Testimonial 1 Author', 'David Sterling — Principal Real Estate Architect');

    _cr8v_textarea($wp_customize, 'wpdev_testi2_text', 'cr8v_wpdev_testi', 'Testimonial 2 Text', 'Refactoring our WordPress architecture dropped our LCP to 450ms while giving our marketing team total freedom to edit pages in Elementor. Organic search traffic doubled within three months.');
    _cr8v_text($wp_customize, 'wpdev_testi2_author', 'cr8v_wpdev_testi', 'Testimonial 2 Author', 'Amina Bello — Digital Marketing Lead');

    _cr8v_textarea($wp_customize, 'wpdev_testi3_text', 'cr8v_wpdev_testi', 'Testimonial 3 Text', 'The custom ACF field system and database security hardening gave us complete peace of mind. Zero update breaks or security vulnerabilities.');
    _cr8v_text($wp_customize, 'wpdev_testi3_author', 'cr8v_wpdev_testi', 'Testimonial 3 Author', 'Richard Coleman — Technical Operations Director');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_pricing', '08. Pricing Models & Estimator', 'cr8v_wpdev_panel', 80);
    _cr8v_text($wp_customize, 'wpdev_pricing_label', 'cr8v_wpdev_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'wpdev_pricing_h2_part1', 'cr8v_wpdev_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'wpdev_pricing_h2_serif', 'cr8v_wpdev_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'wpdev_pricing_desc', 'cr8v_wpdev_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_faq', '09. Frequently Asked Questions', 'cr8v_wpdev_panel', 90);
    _cr8v_text($wp_customize, 'wpdev_faq_eyebrow', 'cr8v_wpdev_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'wpdev_faq_h2', 'cr8v_wpdev_faq', 'Title', 'WordPress Questions, Answered Honestly');
    _cr8v_textarea($wp_customize, 'wpdev_faq_sub', 'cr8v_wpdev_faq', 'Subtitle', 'Clear answers to common questions about our custom WordPress design, Gutenberg block engineering, and site security processes.');

    _cr8v_text($wp_customize, 'wpdev_faq1_q', 'cr8v_wpdev_faq', 'FAQ 1 Question', 'Why build on WordPress instead of Webflow, Framer, or Wix?');
    _cr8v_textarea($wp_customize, 'wpdev_faq1_a', 'cr8v_wpdev_faq', 'FAQ 1 Answer', 'Webflow, Framer, and Wix lock you into proprietary SaaS platforms with limited database functionality, recurring subscription taxes, and zero data portability. WordPress gives you 100% data ownership, self-hosted control, unlimited custom plugins, and total editorial freedom without SaaS platform lock-in.');

    _cr8v_text($wp_customize, 'wpdev_faq2_q', 'cr8v_wpdev_faq', 'FAQ 2 Question', 'How much does a custom WordPress website cost?');
    _cr8v_textarea($wp_customize, 'wpdev_faq2_a', 'cr8v_wpdev_faq', 'FAQ 2 Answer', 'Our fixed-scope WordPress projects start from $1,200 for a custom theme build, responsive layouts, and speed optimization. The final investment scales with the number of page layouts, custom post types, and specialized plugin integrations. We scope every project individually and provide a clear milestone quote.');

    _cr8v_text($wp_customize, 'wpdev_faq3_q', 'cr8v_wpdev_faq', 'FAQ 3 Question', 'Why hire an agency like Cr8v Stacks instead of a solo freelancer?');
    _cr8v_textarea($wp_customize, 'wpdev_faq3_a', 'cr8v_wpdev_faq', 'FAQ 3 Answer', 'Solo freelancers often handle design, code, and security as a single person, leading to missed deadlines or incomplete documentation. Cr8v Stacks provides a dedicated multi-disciplinary team — combining brand strategy, Figma UI/UX, senior PHP engineering, and technical SEO — backed by formal contracts and SLA support.');

    _cr8v_text($wp_customize, 'wpdev_faq4_q', 'cr8v_wpdev_faq', 'FAQ 4 Question', 'Do you handle platform migrations from Wix, Webflow, or Shopify to WordPress?');
    _cr8v_textarea($wp_customize, 'wpdev_faq4_a', 'cr8v_wpdev_faq', 'FAQ 4 Answer', 'Yes. We execute seamless migrations from proprietary platforms like Wix, Webflow, and Shopify over to self-hosted WordPress — transferring all blog posts, pages, media libraries, and setting up precise 301 URL redirect maps to protect your organic search rankings.');

    _cr8v_text($wp_customize, 'wpdev_faq5_q', 'cr8v_wpdev_faq', 'FAQ 5 Question', 'How long does a custom WordPress website project take?');
    _cr8v_textarea($wp_customize, 'wpdev_faq5_a', 'cr8v_wpdev_faq', 'FAQ 5 Answer', 'A standard custom WordPress theme project with 3-5 bespoke page layouts takes approximately 3 to 4 weeks from initial wireframe sign-off to live launch. Complex e-commerce integrations or enterprise portals take 4 to 6 weeks.');

    _cr8v_text($wp_customize, 'wpdev_faq6_q', 'cr8v_wpdev_faq', 'FAQ 6 Question', 'Will I be able to edit page content myself without writing code?');
    _cr8v_textarea($wp_customize, 'wpdev_faq6_a', 'cr8v_wpdev_faq', 'FAQ 6 Answer', 'Yes. We configure Elementor or native WordPress Block Editor (Gutenberg) custom blocks and custom fields (ACF Pro) so your team can easily update headings, text, media, and portfolio showcases through an intuitive dashboard without touching code.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_wpdev_cta', '10. Bottom CTA Section', 'cr8v_wpdev_panel', 100);
    _cr8v_text($wp_customize, 'wpdev_cta_label', 'cr8v_wpdev_cta', 'Section Label', 'READY TO BUILD?');
    _cr8v_text($wp_customize, 'wpdev_cta_h2_part1', 'cr8v_wpdev_cta', 'Title Part 1', 'Let’s Engineer Your Custom ');
    _cr8v_text($wp_customize, 'wpdev_cta_h2_serif', 'cr8v_wpdev_cta', 'Title Serif Word', 'WordPress Theme');
    _cr8v_textarea($wp_customize, 'wpdev_cta_desc', 'cr8v_wpdev_cta', 'Subtitle', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.');
    _cr8v_text($wp_customize, 'wpdev_cta_btn_text', 'cr8v_wpdev_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'wpdev_cta_btn_url', 'cr8v_wpdev_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_wordpress_panel');
