<?php
/**
 * CR8V Stacks — inc/customizer/panel-custom-dev.php
 * Custom Development Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_custom_dev_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_cdev_panel', [
        'title'           => 'Serv Page: Custom Dev',
        'priority'        => 206,
        'active_callback' => function() {
            return is_page_template('page-service-custom-dev.php') || is_page('custom-dev') || is_page('custom-development');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_cdev_hero', '01. Hero Section', 'cr8v_cdev_panel', 10);
    _cr8v_text($wp_customize, 'cdev_hero_crumb_parent', 'cr8v_cdev_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'cdev_hero_crumb_child', 'cr8v_cdev_hero', 'Breadcrumb Child', 'CUSTOM DEVELOPMENT');
    _cr8v_text($wp_customize, 'cdev_hero_label', 'cr8v_cdev_hero', 'Section Label', 'Bespoke Application & Software Architecture');
    _cr8v_text($wp_customize, 'cdev_hero_h1_part1', 'cr8v_cdev_hero', 'Headline Part 1', 'Custom Web Applications ');
    _cr8v_text($wp_customize, 'cdev_hero_h1_serif', 'cr8v_cdev_hero', 'Headline Serif Word', '& Bespoke Software');
    _cr8v_textarea($wp_customize, 'cdev_hero_intro', 'cr8v_cdev_hero', 'Hero Subtitle', 'Bespoke web applications, interactive portals, and administrative dashboards engineered with custom React, Next.js, PHP, and SQL databases — tailored precisely to your complex business logic and scalability needs.');
    _cr8v_text($wp_customize, 'cdev_hero_cta1_text', 'cr8v_cdev_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'cdev_hero_cta1_url', 'cr8v_cdev_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'cdev_hero_cta2_text', 'cr8v_cdev_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'cdev_hero_cta2_url', 'cr8v_cdev_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'cdev_hero_pill1', 'cr8v_cdev_hero', 'Pill 1', 'React');
    _cr8v_text($wp_customize, 'cdev_hero_pill2', 'cr8v_cdev_hero', 'Pill 2', 'Next.js');
    _cr8v_text($wp_customize, 'cdev_hero_pill3', 'cr8v_cdev_hero', 'Pill 3', 'PHP');
    _cr8v_text($wp_customize, 'cdev_hero_pill4', 'cr8v_cdev_hero', 'Pill 4', 'Node.js');

    // ── 02. WHY CUSTOM DEVELOPMENT (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_flank', '02. Why Custom Development (Flank Cards)', 'cr8v_cdev_panel', 20);
    _cr8v_text($wp_customize, 'cdev_flank_label', 'cr8v_cdev_flank', 'Section Label', 'Why Custom Development');
    _cr8v_text($wp_customize, 'cdev_flank_h2', 'cr8v_cdev_flank', 'Section Title', 'Software Built Around Your Business Logic, Not SaaS Limits');

    _cr8v_text($wp_customize, 'cdev_flank1_step', 'cr8v_cdev_flank', 'Card 1 Step', 'Ownership // 100% Data');
    _cr8v_text($wp_customize, 'cdev_flank1_title', 'cr8v_cdev_flank', 'Card 1 Title', '100% Code & Data Ownership');
    _cr8v_textarea($wp_customize, 'cdev_flank1_desc', 'cr8v_cdev_flank', 'Card 1 Description', 'You own your entire codebase, database schema, and intellectual property with zero ongoing SaaS platform taxes.');

    _cr8v_text($wp_customize, 'cdev_flank2_step', 'cr8v_cdev_flank', 'Card 2 Step', 'Scale // Unlimited');
    _cr8v_text($wp_customize, 'cdev_flank2_title', 'cr8v_cdev_flank', 'Card 2 Title', 'Bespoke Business Logic');
    _cr8v_textarea($wp_customize, 'cdev_flank2_desc', 'cr8v_cdev_flank', 'Card 2 Description', 'Custom database relationships, proprietary workflows, and automated pipelines designed specifically for your operational needs.');

    _cr8v_text($wp_customize, 'cdev_flank3_step', 'cr8v_cdev_flank', 'Card 3 Step', 'Security // Enterprise');
    _cr8v_text($wp_customize, 'cdev_flank3_title', 'cr8v_cdev_flank', 'Card 3 Title', 'Hardened Custom Security');
    _cr8v_textarea($wp_customize, 'cdev_flank3_desc', 'cr8v_cdev_flank', 'Card 3 Description', 'Clean custom-coded backends built with explicit input validation, SQL injection prevention, role-based access control, and strict API authentication.');

    _cr8v_text($wp_customize, 'cdev_flank4_step', 'cr8v_cdev_flank', 'Card 4 Step', 'API // Integration');
    _cr8v_text($wp_customize, 'cdev_flank4_title', 'cr8v_cdev_flank', 'Card 4 Title', 'Seamless API Integrations');
    _cr8v_textarea($wp_customize, 'cdev_flank4_desc', 'cr8v_cdev_flank', 'Card 4 Description', 'Connecting third-party webhooks, payment providers, AI models, and internal tools into unified web dashboards.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_work', '03. Our Work (Portfolio Showcase)', 'cr8v_cdev_panel', 30);
    _cr8v_text($wp_customize, 'cdev_port_label', 'cr8v_cdev_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'cdev_port_h2_part1', 'cr8v_cdev_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'cdev_port_h2_serif', 'cr8v_cdev_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'cdev_port_client', 'cr8v_cdev_work', 'Client Label', 'Case Study — Bridgepoint Consulting Services');
    _cr8v_text($wp_customize, 'cdev_port_title', 'cr8v_cdev_work', 'Case Study Title', 'Compliance Analysis Checker');
    _cr8v_textarea($wp_customize, 'cdev_port_desc', 'cr8v_cdev_work', 'Case Study Description', 'A custom-built compliance analysis and checking application, delivered end-to-end by our team for a real business use case. Client project under NDA — architecture engineered with custom PHP and SQL data models.');
    _cr8v_img($wp_customize, 'cdev_port_img', 'cr8v_cdev_work', 'Case Study Image', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'cdev_port_stat1_val', 'cr8v_cdev_work', 'Stat 1 Value', '1');
    _cr8v_text($wp_customize, 'cdev_port_stat1_lbl', 'cr8v_cdev_work', 'Stat 1 Label', 'Full App Delivered Independently');
    _cr8v_text($wp_customize, 'cdev_port_stat2_val', 'cr8v_cdev_work', 'Stat 2 Value', '100%');
    _cr8v_text($wp_customize, 'cdev_port_stat2_lbl', 'cr8v_cdev_work', 'Stat 2 Label', 'Client-Owned Code & Data');
    _cr8v_text($wp_customize, 'cdev_port_btn_text', 'cr8v_cdev_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'cdev_port_btn_url', 'cr8v_cdev_work', 'Link URL', '/case-studies/bridgepoint-consulting/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_folder', '04. What You Get (Folder Deck)', 'cr8v_cdev_panel', 40);
    _cr8v_text($wp_customize, 'cdev_folder_label', 'cr8v_cdev_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'cdev_folder_h2_part1', 'cr8v_cdev_folder', 'Title Part 1', 'Every layer of your web app, ');
    _cr8v_text($wp_customize, 'cdev_folder_h2_serif', 'cr8v_cdev_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'cdev_folder_desc', 'cr8v_cdev_folder', 'Subtitle', 'Custom frontend user interfaces, relational SQL schemas, API integrations, admin dashboards, and production server deployments.');

    _cr8v_text($wp_customize, 'cdev_folder1_tab', 'cr8v_cdev_folder', 'Card 1 Tab', '01 // Architecture');
    _cr8v_text($wp_customize, 'cdev_folder1_title', 'cr8v_cdev_folder', 'Card 1 Title', 'Custom Application Architecture');
    _cr8v_textarea($wp_customize, 'cdev_folder1_desc', 'cr8v_cdev_folder', 'Card 1 Description', 'Bespoke database schemas, server architecture, and application wireframes built for high-throughput security.');

    _cr8v_text($wp_customize, 'cdev_folder2_tab', 'cr8v_cdev_folder', 'Card 2 Tab', '02 // Frontend');
    _cr8v_text($wp_customize, 'cdev_folder2_title', 'cr8v_cdev_folder', 'Card 2 Title', 'React & Next.js Frontend');
    _cr8v_textarea($wp_customize, 'cdev_folder2_desc', 'cr8v_cdev_folder', 'Card 2 Description', 'High-performance dynamic client interfaces with real-time state management and zero unnecessary library overhead.');

    _cr8v_text($wp_customize, 'cdev_folder3_tab', 'cr8v_cdev_folder', 'Card 3 Tab', '03 // Backend');
    _cr8v_text($wp_customize, 'cdev_folder3_title', 'cr8v_cdev_folder', 'Card 3 Title', 'PHP & Node.js Backend APIs');
    _cr8v_textarea($wp_customize, 'cdev_folder3_desc', 'cr8v_cdev_folder', 'Card 3 Description', 'Clean RESTful and GraphQL API endpoints, background worker jobs, and secure user authentication systems.');

    _cr8v_text($wp_customize, 'cdev_folder4_tab', 'cr8v_cdev_folder', 'Card 4 Tab', '04 // Database');
    _cr8v_text($wp_customize, 'cdev_folder4_title', 'cr8v_cdev_folder', 'Card 4 Title', 'Relational SQL Data Modeling');
    _cr8v_textarea($wp_customize, 'cdev_folder4_desc', 'cr8v_cdev_folder', 'Card 4 Description', 'Normalized MySQL and PostgreSQL database architectures optimized for sub-second query performance.');

    _cr8v_text($wp_customize, 'cdev_folder5_tab', 'cr8v_cdev_folder', 'Card 5 Tab', '05 // Deployment');
    _cr8v_text($wp_customize, 'cdev_folder5_title', 'cr8v_cdev_folder', 'Card 5 Title', 'Server Deployment & Maintenance');
    _cr8v_textarea($wp_customize, 'cdev_folder5_desc', 'cr8v_cdev_folder', 'Card 5 Description', 'CI/CD pipeline configuration, SSL setup, cloud hosting deployment, and post-launch maintenance retainers.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_approach', '05. How We Approach It (Process)', 'cr8v_cdev_panel', 50);
    _cr8v_text($wp_customize, 'cdev_app_label', 'cr8v_cdev_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'cdev_app_h2', 'cr8v_cdev_approach', 'Section Title', 'How We Approach Custom Development');
    _cr8v_textarea($wp_customize, 'cdev_app_sub', 'cr8v_cdev_approach', 'Subtitle', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');

    _cr8v_text($wp_customize, 'cdev_app1_num', 'cr8v_cdev_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'cdev_app1_name', 'cr8v_cdev_approach', 'Stage 1 Name', 'Discover');
    _cr8v_text($wp_customize, 'cdev_app1_tags', 'cr8v_cdev_approach', 'Stage 1 Tags', 'Specs · Architecture · Schemas');
    _cr8v_textarea($wp_customize, 'cdev_app1_desc', 'cr8v_cdev_approach', 'Stage 1 Description', 'We audit business requirements, map database entities, define API contracts, and establish technical architecture blueprints.');

    _cr8v_text($wp_customize, 'cdev_app2_num', 'cr8v_cdev_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'cdev_app2_name', 'cr8v_cdev_approach', 'Stage 2 Name', 'Build');
    _cr8v_text($wp_customize, 'cdev_app2_tags', 'cr8v_cdev_approach', 'Stage 2 Tags', 'Frontend · Backend · APIs');
    _cr8v_textarea($wp_customize, 'cdev_app2_desc', 'cr8v_cdev_approach', 'Stage 2 Description', 'We write clean, modular frontend code in React/Next.js and secure backend logic in PHP or Node.js with strict type verification.');

    _cr8v_text($wp_customize, 'cdev_app3_num', 'cr8v_cdev_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'cdev_app3_name', 'cr8v_cdev_approach', 'Stage 3 Name', 'Integration');
    _cr8v_text($wp_customize, 'cdev_app3_tags', 'cr8v_cdev_approach', 'Stage 3 Tags', 'Databases · Webhooks · Security');
    _cr8v_textarea($wp_customize, 'cdev_app3_desc', 'cr8v_cdev_approach', 'Stage 3 Description', 'We wire up SQL databases, integrate third-party APIs, write automated test cases, and execute security audits.');

    _cr8v_text($wp_customize, 'cdev_app4_num', 'cr8v_cdev_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'cdev_app4_name', 'cr8v_cdev_approach', 'Stage 4 Name', 'Deploy');
    _cr8v_text($wp_customize, 'cdev_app4_tags', 'cr8v_cdev_approach', 'Stage 4 Tags', 'CI/CD · Server · Handoff');
    _cr8v_textarea($wp_customize, 'cdev_app4_desc', 'cr8v_cdev_approach', 'Stage 4 Description', 'We configure production server environments, execute staging QA verification, and deploy your custom web app securely.');

    // ── 05.5. CUSTOM STACK OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_cdev_plat', '05.5. Custom Stack Options', 'cr8v_cdev_panel', 55);
    _cr8v_text($wp_customize, 'cdev_plat_label', 'cr8v_cdev_plat', 'Section Label', 'Custom Stack Engineering Options');
    _cr8v_text($wp_customize, 'cdev_plat_h2_part1', 'cr8v_cdev_plat', 'Title Part 1', 'Choosing Your ');
    _cr8v_text($wp_customize, 'cdev_plat_h2_serif', 'cr8v_cdev_plat', 'Title Serif Word', 'Custom Architecture');

    _cr8v_text($wp_customize, 'cdev_plat1_badge', 'cr8v_cdev_plat', 'Option 1 Badge', 'Stack // React');
    _cr8v_text($wp_customize, 'cdev_plat1_title', 'cr8v_cdev_plat', 'Option 1 Title', 'React & Next.js Applications');
    _cr8v_textarea($wp_customize, 'cdev_plat1_desc', 'cr8v_cdev_plat', 'Option 1 Description', 'For dynamic SaaS web applications requiring fast, real-time client-side interactivity.');

    _cr8v_text($wp_customize, 'cdev_plat2_badge', 'cr8v_cdev_plat', 'Option 2 Badge', 'Stack // PHP');
    _cr8v_text($wp_customize, 'cdev_plat2_title', 'cr8v_cdev_plat', 'Option 2 Title', 'Custom PHP & MySQL Portals');
    _cr8v_textarea($wp_customize, 'cdev_plat2_desc', 'cr8v_cdev_plat', 'Option 2 Description', 'For high-security corporate portals, database systems, and custom administrative platforms.');

    _cr8v_text($wp_customize, 'cdev_plat3_badge', 'cr8v_cdev_plat', 'Option 3 Badge', 'Stack // Node');
    _cr8v_text($wp_customize, 'cdev_plat3_title', 'cr8v_cdev_plat', 'Option 3 Title', 'Node.js & Express Microservices');
    _cr8v_textarea($wp_customize, 'cdev_plat3_desc', 'cr8v_cdev_plat', 'Option 3 Description', 'For high-concurrency event-driven backends, webhook processors, and API services.');

    _cr8v_text($wp_customize, 'cdev_plat4_badge', 'cr8v_cdev_plat', 'Option 4 Badge', 'Stack // Hybrid');
    _cr8v_text($wp_customize, 'cdev_plat4_title', 'cr8v_cdev_plat', 'Option 4 Title', 'Full-Stack Hybrid Architecture');
    _cr8v_textarea($wp_customize, 'cdev_plat4_desc', 'cr8v_cdev_plat', 'Option 4 Description', 'Combining custom web frontends with existing WordPress or headless CMS backends.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_hl', '06. Project Catalog (Hoverlist)', 'cr8v_cdev_panel', 60);
    _cr8v_text($wp_customize, 'cdev_hl_label', 'cr8v_cdev_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'cdev_hl_h2', 'cr8v_cdev_hl', 'Section Title', 'Every Kind of Custom Software We Engineer');
    _cr8v_textarea($wp_customize, 'cdev_hl_sub', 'cr8v_cdev_hl', 'Subtitle', 'From SaaS web platforms to internal admin tools — hover to inspect the technology stack.');

    _cr8v_text($wp_customize, 'cdev_hl1_title', 'cr8v_cdev_hl', 'Item 1 Title', 'Custom SaaS Platforms & Web Apps');
    _cr8v_textarea($wp_customize, 'cdev_hl1_tagline', 'cr8v_cdev_hl', 'Item 1 Tagline', 'Multi-tenant SaaS products, user subscriptions, usage metering, and real-time dashboard platforms.');

    _cr8v_text($wp_customize, 'cdev_hl2_title', 'cr8v_cdev_hl', 'Item 2 Title', 'Enterprise Portals & Admin Tools');
    _cr8v_textarea($wp_customize, 'cdev_hl2_tagline', 'cr8v_cdev_hl', 'Item 2 Tagline', 'Internal business management tools, staff dashboards, reporting engines, and role-based access portals.');

    _cr8v_text($wp_customize, 'cdev_hl3_title', 'cr8v_cdev_hl', 'Item 3 Title', 'Custom API & Webhook Integrations');
    _cr8v_textarea($wp_customize, 'cdev_hl3_tagline', 'cr8v_cdev_hl', 'Item 3 Tagline', 'Bespoke middleware, payment gateway logic, CRM sync tools, and third-party API orchestrations.');

    _cr8v_text($wp_customize, 'cdev_hl4_title', 'cr8v_cdev_hl', 'Item 4 Title', 'Compliance & Data Checking Apps');
    _cr8v_textarea($wp_customize, 'cdev_hl4_tagline', 'cr8v_cdev_hl', 'Item 4 Tagline', 'Automated compliance verification systems, document parsing engines, and auditing dashboards.');

    _cr8v_text($wp_customize, 'cdev_hl5_title', 'cr8v_cdev_hl', 'Item 5 Title', 'Headless CMS & React Frontends');
    _cr8v_textarea($wp_customize, 'cdev_hl5_tagline', 'cr8v_cdev_hl', 'Item 5 Tagline', 'Decoupled web applications utilizing WordPress or Strapi as a headless content API powering Next.js.');

    _cr8v_text($wp_customize, 'cdev_hl6_title', 'cr8v_cdev_hl', 'Item 6 Title', 'Legacy System Refactoring & Migrations');
    _cr8v_textarea($wp_customize, 'cdev_hl6_tagline', 'cr8v_cdev_hl', 'Item 6 Tagline', 'Rewriting outdated legacy codebases into modern, scalable React/PHP architectures.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_cdev_testi', '07. Client Feedback (Testimonials)', 'cr8v_cdev_panel', 70);
    _cr8v_text($wp_customize, 'cdev_testi_label', 'cr8v_cdev_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'cdev_testi_h2_part1', 'cr8v_cdev_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'cdev_testi_h2_serif', 'cr8v_cdev_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'cdev_testi1_text', 'cr8v_cdev_testi', 'Testimonial 1 Text', 'Our organization required a secure, custom compliance analysis application with zero third-party software dependencies. Cr8v Stacks delivered the entire solution flawlessly on time.');
    _cr8v_text($wp_customize, 'cdev_testi1_author', 'cr8v_cdev_testi', 'Testimonial 1 Author', 'Senior Technical Architect');

    _cr8v_textarea($wp_customize, 'cdev_testi2_text', 'cr8v_cdev_testi', 'Testimonial 2 Text', 'The custom PHP and SQL database architecture built by Cr8v Stacks handles our high-volume operational data effortlessly. Clean code and excellent documentation.');
    _cr8v_text($wp_customize, 'cdev_testi2_author', 'cr8v_cdev_testi', 'Testimonial 2 Author', 'Marcus Vance — Chief Technology Officer');

    _cr8v_textarea($wp_customize, 'cdev_testi3_text', 'cr8v_cdev_testi', 'Testimonial 3 Text', 'Decoupling our frontend into Next.js and building a custom backend API completely transformed our application speed. Outstanding custom development team.');
    _cr8v_text($wp_customize, 'cdev_testi3_author', 'cr8v_cdev_testi', 'Testimonial 3 Author', 'Elena Rostova — VP of Product');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_cdev_pricing', '08. Pricing Models & Estimator', 'cr8v_cdev_panel', 80);
    _cr8v_text($wp_customize, 'cdev_pricing_label', 'cr8v_cdev_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'cdev_pricing_h2_part1', 'cr8v_cdev_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'cdev_pricing_h2_serif', 'cr8v_cdev_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'cdev_pricing_desc', 'cr8v_cdev_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_cdev_faq', '09. Frequently Asked Questions', 'cr8v_cdev_panel', 90);
    _cr8v_text($wp_customize, 'cdev_faq_eyebrow', 'cr8v_cdev_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'cdev_faq_h2', 'cr8v_cdev_faq', 'Title', 'Custom Development Questions, Answered Honestly');
    _cr8v_textarea($wp_customize, 'cdev_faq_sub', 'cr8v_cdev_faq', 'Subtitle', 'Clear answers to common questions about our web application engineering, database schema design, and deployment processes.');

    _cr8v_text($wp_customize, 'cdev_faq1_q', 'cr8v_cdev_faq', 'FAQ 1 Question', 'Why choose custom software development over existing SaaS platforms?');
    _cr8v_textarea($wp_customize, 'cdev_faq1_a', 'cr8v_cdev_faq', 'FAQ 1 Answer', 'Existing SaaS platforms lock you into fixed feature sets, monthly subscription taxes per user, and zero data control. Custom software gives you 100% intellectual property ownership, tailored database logic, and freedom to scale without monthly per-user fees.');

    _cr8v_text($wp_customize, 'cdev_faq2_q', 'cr8v_cdev_faq', 'FAQ 2 Question', 'How much does a custom web application cost?');
    _cr8v_textarea($wp_customize, 'cdev_faq2_a', 'cr8v_cdev_faq', 'FAQ 2 Answer', 'Fixed-scope custom development projects start from $2,500 for MVP web applications. The investment scales based on backend API complexity, user authentication requirements, database schemas, and third-party integrations.');

    _cr8v_text($wp_customize, 'cdev_faq3_q', 'cr8v_cdev_faq', 'FAQ 3 Question', 'Do we own 100% of the code and intellectual property?');
    _cr8v_textarea($wp_customize, 'cdev_faq3_a', 'cr8v_cdev_faq', 'FAQ 3 Answer', 'Yes, absolutely. Upon final project delivery and milestone sign-off, full intellectual property rights, database schemas, and Git repositories are transferred entirely to your company with zero royalty fees.');

    _cr8v_text($wp_customize, 'cdev_faq4_q', 'cr8v_cdev_faq', 'FAQ 4 Question', 'What tech stack do you recommend for custom web apps?');
    _cr8v_textarea($wp_customize, 'cdev_faq4_a', 'cr8v_cdev_faq', 'FAQ 4 Answer', 'We engineer frontends in React or Next.js for fluid interactivity, coupled with robust PHP, Node.js, or Python backends and MySQL/PostgreSQL databases. We tailor the stack to your specific throughput requirements.');

    _cr8v_text($wp_customize, 'cdev_faq5_q', 'cr8v_cdev_faq', 'FAQ 5 Question', 'How do you handle application maintenance and security updates?');
    _cr8v_textarea($wp_customize, 'cdev_faq5_a', 'cr8v_cdev_faq', 'FAQ 5 Answer', 'We provide dedicated monthly Growth Retainers covering server security patches, API dependency updates, feature iterations, database backups, and SLA support.');

    _cr8v_text($wp_customize, 'cdev_faq6_q', 'cr8v_cdev_faq', 'FAQ 6 Question', 'Can you integrate third-party APIs and webhooks into our app?');
    _cr8v_textarea($wp_customize, 'cdev_faq6_a', 'cr8v_cdev_faq', 'FAQ 6 Answer', 'Yes. We regularly build custom integrations with payment gateways (Stripe, PayPal), CRM systems (HubSpot, Salesforce), AI models (OpenAI, Anthropic), and internal enterprise databases.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_cdev_cta', '10. Bottom CTA Section', 'cr8v_cdev_panel', 100);
    _cr8v_text($wp_customize, 'cdev_cta_label', 'cr8v_cdev_cta', 'Section Label', 'READY TO BUILD?');
    _cr8v_text($wp_customize, 'cdev_cta_h2_part1', 'cr8v_cdev_cta', 'Title Part 1', 'Let’s Engineer Your Custom ');
    _cr8v_text($wp_customize, 'cdev_cta_h2_serif', 'cr8v_cdev_cta', 'Title Serif Word', 'Web Application');
    _cr8v_textarea($wp_customize, 'cdev_cta_desc', 'cr8v_cdev_cta', 'Subtitle', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.');
    _cr8v_text($wp_customize, 'cdev_cta_btn_text', 'cr8v_cdev_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'cdev_cta_btn_url', 'cr8v_cdev_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_custom_dev_panel');
