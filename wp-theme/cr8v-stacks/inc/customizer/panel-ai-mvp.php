<?php
/**
 * CR8V Stacks — inc/customizer/panel-ai-mvp.php
 * AI MVP Service Page Customizer Panel (100% Control Parity with index.html)
 */
defined('ABSPATH') || exit;

function cr8v_register_ai_mvp_panel($wp_customize) {
    if (!class_exists('WP_Customize_Control')) return;

    // MASTER PANEL
    $wp_customize->add_panel('cr8v_aimvp_panel', [
        'title'           => 'Serv Page: AI MVP',
        'priority'        => 207,
        'active_callback' => function() {
            return is_page_template('page-service-ai-mvp.php') || is_page('ai-mvp') || is_page('ai-mvp-development');
        },
    ]);

    // ── 01. HERO SECTION ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_hero', '01. Hero Section', 'cr8v_aimvp_panel', 10);
    _cr8v_text($wp_customize, 'aimvp_hero_crumb_parent', 'cr8v_aimvp_hero', 'Breadcrumb Parent', 'SERVICES');
    _cr8v_text($wp_customize, 'aimvp_hero_crumb_child', 'cr8v_aimvp_hero', 'Breadcrumb Child', 'AI MVP DEVELOPMENT');
    _cr8v_text($wp_customize, 'aimvp_hero_label', 'cr8v_aimvp_hero', 'Section Label', 'Autonomous AI Systems & LLM Application Engineering');
    _cr8v_text($wp_customize, 'aimvp_hero_h1_part1', 'cr8v_aimvp_hero', 'Headline Part 1', 'Launchable AI MVPs ');
    _cr8v_text($wp_customize, 'aimvp_hero_h1_serif', 'cr8v_aimvp_hero', 'Headline Serif Word', '& LLM Prototypes');
    _cr8v_textarea($wp_customize, 'aimvp_hero_intro', 'cr8v_aimvp_hero', 'Hero Subtitle', 'Rapid prototype engineering for AI-powered web products. We integrate OpenAI, Claude, Gemini, Supabase, and vector databases into production-ready MVPs in 3 weeks.');
    _cr8v_text($wp_customize, 'aimvp_hero_cta1_text', 'cr8v_aimvp_hero', 'CTA 1 Text', 'See What We Build →');
    _cr8v_text($wp_customize, 'aimvp_hero_cta1_url', 'cr8v_aimvp_hero', 'CTA 1 Link URL', '#c8isv-services');
    _cr8v_text($wp_customize, 'aimvp_hero_cta2_text', 'cr8v_aimvp_hero', 'CTA 2 Text', 'Get a Quote →');
    _cr8v_text($wp_customize, 'aimvp_hero_cta2_url', 'cr8v_aimvp_hero', 'CTA 2 Link URL', '/discovery-call/');
    _cr8v_text($wp_customize, 'aimvp_hero_pill1', 'cr8v_aimvp_hero', 'Pill 1', 'Python');
    _cr8v_text($wp_customize, 'aimvp_hero_pill2', 'cr8v_aimvp_hero', 'Pill 2', 'OpenAI API');
    _cr8v_text($wp_customize, 'aimvp_hero_pill3', 'cr8v_aimvp_hero', 'Pill 3', 'Claude');
    _cr8v_text($wp_customize, 'aimvp_hero_pill4', 'cr8v_aimvp_hero', 'Pill 4', 'Supabase');

    // ── 02. WHY CUSTOM AI MVP (Flank Cards) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_flank', '02. Why Custom AI MVP (Flank Cards)', 'cr8v_aimvp_panel', 20);
    _cr8v_text($wp_customize, 'aimvp_flank_label', 'cr8v_aimvp_flank', 'Section Label', 'Why Custom AI MVP');
    _cr8v_text($wp_customize, 'aimvp_flank_h2', 'cr8v_aimvp_flank', 'Section Title', 'Build Real Product Value, Not Temporary SaaS Wrappers');

    _cr8v_text($wp_customize, 'aimvp_flank1_step', 'cr8v_aimvp_flank', 'Card 1 Step', 'Strategy // Risk Reduction');
    _cr8v_text($wp_customize, 'aimvp_flank1_title', 'cr8v_aimvp_flank', 'Card 1 Title', 'De-Risk Product Innovation');
    _cr8v_textarea($wp_customize, 'aimvp_flank1_desc', 'cr8v_aimvp_flank', 'Card 1 Description', 'Test core generative features and user adoption with a live, functional prototype before committing massive capital to full-scale software development.');

    _cr8v_text($wp_customize, 'aimvp_flank2_step', 'cr8v_aimvp_flank', 'Card 2 Step', 'Efficiency // Custom Pipelines');
    _cr8v_text($wp_customize, 'aimvp_flank2_title', 'cr8v_aimvp_flank', 'Card 2 Title', 'Proprietary Workflow Automation');
    _cr8v_textarea($wp_customize, 'aimvp_flank2_desc', 'cr8v_aimvp_flank', 'Card 2 Description', 'Automate high-friction operational tasks, internal document search, or content drafting workflows engineered specifically for your business logic.');

    _cr8v_text($wp_customize, 'aimvp_flank3_step', 'cr8v_aimvp_flank', 'Card 3 Step', 'Security // Confidential APIs');
    _cr8v_text($wp_customize, 'aimvp_flank3_title', 'cr8v_aimvp_flank', 'Card 3 Title', 'Confidential Data Pipelines');
    _cr8v_textarea($wp_customize, 'aimvp_flank3_desc', 'cr8v_aimvp_flank', 'Card 3 Description', 'Configure enterprise API endpoints with strict Zero-Data-Retention privacy policies, keeping user inputs and internal company data completely private.');

    _cr8v_text($wp_customize, 'aimvp_flank4_step', 'cr8v_aimvp_flank', 'Card 4 Step', 'Ownership // 100% Code');
    _cr8v_text($wp_customize, 'aimvp_flank4_title', 'cr8v_aimvp_flank', 'Card 4 Title', '100% Intellectual Property');
    _cr8v_textarea($wp_customize, 'aimvp_flank4_desc', 'cr8v_aimvp_flank', 'Card 4 Description', 'Own your custom system prompts, vector database schemas, and frontend source code outright without relying on restrictive third-party SaaS tools.');

    // ── 03. OUR WORK (Portfolio Showcase) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_work', '03. Our Work (Portfolio Showcase)', 'cr8v_aimvp_panel', 30);
    _cr8v_text($wp_customize, 'aimvp_port_label', 'cr8v_aimvp_work', 'Section Label', 'Our Work');
    _cr8v_text($wp_customize, 'aimvp_port_h2_part1', 'cr8v_aimvp_work', 'Title Part 1', 'Built for Real Outcomes, ');
    _cr8v_text($wp_customize, 'aimvp_port_h2_serif', 'cr8v_aimvp_work', 'Title Serif Word', 'Not Just Concepts');
    _cr8v_text($wp_customize, 'aimvp_port_client', 'cr8v_aimvp_work', 'Client Label', 'Case Study — WP Publishion AI');
    _cr8v_text($wp_customize, 'aimvp_port_title', 'cr8v_aimvp_work', 'Case Study Title', 'Our Own AI Product, Built In-House');
    _cr8v_textarea($wp_customize, 'aimvp_port_desc', 'cr8v_aimvp_work', 'Case Study Description', 'WP Publishion AI is our own AI content-writing tool for WordPress, built to draft fact-checked, SEO-rich articles directly inside the block editor — integrating Claude, Gemini, and OpenAI with Brave Search fact-verification.');
    _cr8v_img($wp_customize, 'aimvp_port_img', 'cr8v_aimvp_work', 'Case Study Image', 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop');
    _cr8v_text($wp_customize, 'aimvp_port_stat1_val', 'cr8v_aimvp_work', 'Stat 1 Value', '3');
    _cr8v_text($wp_customize, 'aimvp_port_stat1_lbl', 'cr8v_aimvp_work', 'Stat 1 Label', 'LLMs Integrated (Claude, Gemini, OpenAI)');
    _cr8v_text($wp_customize, 'aimvp_port_stat2_val', 'cr8v_aimvp_work', 'Stat 2 Value', '1');
    _cr8v_text($wp_customize, 'aimvp_port_stat2_lbl', 'cr8v_aimvp_work', 'Stat 2 Label', 'Built In-House By Our Team');
    _cr8v_text($wp_customize, 'aimvp_port_btn_text', 'cr8v_aimvp_work', 'Button Text', 'View Case Study →');
    _cr8v_text($wp_customize, 'aimvp_port_btn_url', 'cr8v_aimvp_work', 'Link URL', '/case-studies/wp-publishion-ai/');

    // ── 04. WHAT YOU GET (Folder Deck) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_folder', '04. What You Get (Folder Deck)', 'cr8v_aimvp_panel', 40);
    _cr8v_text($wp_customize, 'aimvp_folder_label', 'cr8v_aimvp_folder', 'Section Label', 'What You Get');
    _cr8v_text($wp_customize, 'aimvp_folder_h2_part1', 'cr8v_aimvp_folder', 'Title Part 1', 'Every layer of your AI product, ');
    _cr8v_text($wp_customize, 'aimvp_folder_h2_serif', 'cr8v_aimvp_folder', 'Title Serif Word', 'engineered by Cr8v Stacks.');
    _cr8v_textarea($wp_customize, 'aimvp_folder_desc', 'cr8v_aimvp_folder', 'Subtitle', 'LLM API orchestration, prompt engineering pipelines, vector memory stores, user authentication, and web interface frontends.');

    _cr8v_text($wp_customize, 'aimvp_folder1_tab', 'cr8v_aimvp_folder', 'Card 1 Tab', '01 // LLM Pipeline');
    _cr8v_text($wp_customize, 'aimvp_folder1_title', 'cr8v_aimvp_folder', 'Card 1 Title', 'Multi-Model API Orchestration');
    _cr8v_textarea($wp_customize, 'aimvp_folder1_desc', 'cr8v_aimvp_folder', 'Card 1 Description', 'Wiring OpenAI, Claude, and Gemini APIs with structured JSON output schemas and fallback error handling.');

    _cr8v_text($wp_customize, 'aimvp_folder2_tab', 'cr8v_aimvp_folder', 'Card 2 Tab', '02 // Memory Store');
    _cr8v_text($wp_customize, 'aimvp_folder2_title', 'cr8v_aimvp_folder', 'Card 2 Title', 'Vector DB & RAG Integration');
    _cr8v_textarea($wp_customize, 'aimvp_folder2_desc', 'cr8v_aimvp_folder', 'Card 2 Description', 'Setting up Supabase pgvector or Pinecone embeddings for intelligent context retrieval and document search.');

    _cr8v_text($wp_customize, 'aimvp_folder3_tab', 'cr8v_aimvp_folder', 'Card 3 Tab', '03 // Interface');
    _cr8v_text($wp_customize, 'aimvp_folder3_title', 'cr8v_aimvp_folder', 'Card 3 Title', 'React & Next.js AI Interface');
    _cr8v_textarea($wp_customize, 'aimvp_folder3_desc', 'cr8v_aimvp_folder', 'Card 3 Description', 'Building responsive chat, document generator, and workflow dashboards with stream response rendering.');

    _cr8v_text($wp_customize, 'aimvp_folder4_tab', 'cr8v_aimvp_folder', 'Card 4 Tab', '04 // Verification');
    _cr8v_text($wp_customize, 'aimvp_folder4_title', 'cr8v_aimvp_folder', 'Card 4 Title', 'Real-time Fact Verification');
    _cr8v_textarea($wp_customize, 'aimvp_folder4_desc', 'cr8v_aimvp_folder', 'Card 4 Description', 'Connecting Brave Search API or Tavily web search engines to ground AI responses against live internet data.');

    _cr8v_text($wp_customize, 'aimvp_folder5_tab', 'cr8v_aimvp_folder', 'Card 5 Tab', '05 // Auth & Scale');
    _cr8v_text($wp_customize, 'aimvp_folder5_title', 'cr8v_aimvp_folder', 'Card 5 Title', 'User Auth & API Token Metering');
    _cr8v_textarea($wp_customize, 'aimvp_folder5_desc', 'cr8v_aimvp_folder', 'Card 5 Description', 'Configuring Supabase Auth, user token usage limits, Stripe API subscription metering, and rate controls.');

    // ── 05. HOW WE APPROACH IT (Process Deck) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_approach', '05. How We Approach It (Process)', 'cr8v_aimvp_panel', 50);
    _cr8v_text($wp_customize, 'aimvp_app_label', 'cr8v_aimvp_approach', 'Section Label', 'How We Approach It');
    _cr8v_text($wp_customize, 'aimvp_app_h2', 'cr8v_aimvp_approach', 'Section Title', 'Our Engineering Roadmap');
    _cr8v_textarea($wp_customize, 'aimvp_app_sub', 'cr8v_aimvp_approach', 'Subtitle', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');

    _cr8v_text($wp_customize, 'aimvp_app1_num', 'cr8v_aimvp_approach', 'Stage 1 Number', '01');
    _cr8v_text($wp_customize, 'aimvp_app1_name', 'cr8v_aimvp_approach', 'Stage 1 Name', 'Discover');
    _cr8v_text($wp_customize, 'aimvp_app1_tags', 'cr8v_aimvp_approach', 'Stage 1 Tags', 'Prompts · Workflows · Model Choice');
    _cr8v_textarea($wp_customize, 'aimvp_app1_desc', 'cr8v_aimvp_approach', 'Stage 1 Description', 'We map product requirements, select target LLM models, define system prompts, and architect user interaction flows.');

    _cr8v_text($wp_customize, 'aimvp_app2_num', 'cr8v_aimvp_approach', 'Stage 2 Number', '02');
    _cr8v_text($wp_customize, 'aimvp_app2_name', 'cr8v_aimvp_approach', 'Stage 2 Name', 'Prototype');
    _cr8v_text($wp_customize, 'aimvp_app2_tags', 'cr8v_aimvp_approach', 'Stage 2 Tags', 'API Pipeline · Prompts · RAG');
    _cr8v_textarea($wp_customize, 'aimvp_app2_desc', 'cr8v_aimvp_approach', 'Stage 2 Description', 'We build the core AI backend, test prompt responses against edge cases, and integrate retrieval vector stores.');

    _cr8v_text($wp_customize, 'aimvp_app3_num', 'cr8v_aimvp_approach', 'Stage 3 Number', '03');
    _cr8v_text($wp_customize, 'aimvp_app3_name', 'cr8v_aimvp_approach', 'Stage 3 Name', 'Interface');
    _cr8v_text($wp_customize, 'aimvp_app3_tags', 'cr8v_aimvp_approach', 'Stage 3 Tags', 'React UI · Streaming · Auth');
    _cr8v_textarea($wp_customize, 'aimvp_app3_desc', 'cr8v_aimvp_approach', 'Stage 3 Description', 'We design and code a polished client interface with streaming token response rendering and user authentication.');

    _cr8v_text($wp_customize, 'aimvp_app4_num', 'cr8v_aimvp_approach', 'Stage 4 Number', '04');
    _cr8v_text($wp_customize, 'aimvp_app4_name', 'cr8v_aimvp_approach', 'Stage 4 Name', 'Launch');
    _cr8v_text($wp_customize, 'aimvp_app4_tags', 'cr8v_aimvp_approach', 'Stage 4 Tags', 'QA · Testing · Deployment');
    _cr8v_textarea($wp_customize, 'aimvp_app4_desc', 'cr8v_aimvp_approach', 'Stage 4 Description', 'We execute prompt security audits, test rate limits, and deploy your working AI MVP to production servers.');

    // ── 05.5. AI STACK OPTIONS ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_plat', '05.5. AI Stack Options', 'cr8v_aimvp_panel', 55);
    _cr8v_text($wp_customize, 'aimvp_plat_label', 'cr8v_aimvp_plat', 'Section Label', 'AI Stack Engineering Options');
    _cr8v_text($wp_customize, 'aimvp_plat_h2_part1', 'cr8v_aimvp_plat', 'Title Part 1', 'Choosing Your ');
    _cr8v_text($wp_customize, 'aimvp_plat_h2_serif', 'cr8v_aimvp_plat', 'Title Serif Word', 'AI Architecture');

    _cr8v_text($wp_customize, 'aimvp_plat1_badge', 'cr8v_aimvp_plat', 'Option 1 Badge', 'Stack // Generative');
    _cr8v_text($wp_customize, 'aimvp_plat1_title', 'cr8v_aimvp_plat', 'Option 1 Title', 'Generative Content Engines');
    _cr8v_textarea($wp_customize, 'aimvp_plat1_desc', 'cr8v_aimvp_plat', 'Option 1 Description', 'For automated article drafting, copy generation, or asset creation tools powered by Claude and GPT-4.');

    _cr8v_text($wp_customize, 'aimvp_plat2_badge', 'cr8v_aimvp_plat', 'Option 2 Badge', 'Stack // RAG');
    _cr8v_text($wp_customize, 'aimvp_plat2_title', 'cr8v_aimvp_plat', 'Option 2 Title', 'RAG & Knowledge Agents');
    _cr8v_textarea($wp_customize, 'aimvp_plat2_desc', 'cr8v_aimvp_plat', 'Option 2 Description', 'For querying PDF documents, internal database knowledge bases, or policy archives with vector search.');

    _cr8v_text($wp_customize, 'aimvp_plat3_badge', 'cr8v_aimvp_plat', 'Option 3 Badge', 'Stack // Chat');
    _cr8v_text($wp_customize, 'aimvp_plat3_title', 'cr8v_aimvp_plat', 'Option 3 Title', 'Conversational AI Interfaces');
    _cr8v_textarea($wp_customize, 'aimvp_plat3_desc', 'cr8v_aimvp_plat', 'Option 3 Description', 'For real-time streaming chat assistants, customer onboarding bots, or domain-specific advisors.');

    _cr8v_text($wp_customize, 'aimvp_plat4_badge', 'cr8v_aimvp_plat', 'Option 4 Badge', 'Stack // Workflow');
    _cr8v_text($wp_customize, 'aimvp_plat4_title', 'cr8v_aimvp_plat', 'Option 4 Title', 'Autonomous Workflow Agents');
    _cr8v_textarea($wp_customize, 'aimvp_plat4_desc', 'cr8v_aimvp_plat', 'Option 4 Description', 'For multi-step background task processing, data extraction, and API automation pipelines.');

    // ── 06. PROJECT CATALOG (Hoverlist) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_hl', '06. Project Catalog (Hoverlist)', 'cr8v_aimvp_panel', 60);
    _cr8v_text($wp_customize, 'aimvp_hl_label', 'cr8v_aimvp_hl', 'Section Label', 'Project Catalog');
    _cr8v_text($wp_customize, 'aimvp_hl_h2', 'cr8v_aimvp_hl', 'Section Title', 'Every Kind of AI Product We Engineer');
    _cr8v_textarea($wp_customize, 'aimvp_hl_sub', 'cr8v_aimvp_hl', 'Subtitle', 'From generative content engines to intelligent document agents — hover to inspect the AI stack.');

    _cr8v_text($wp_customize, 'aimvp_hl1_title', 'cr8v_aimvp_hl', 'Item 1 Title', 'Generative Content & Writing Tools');
    _cr8v_textarea($wp_customize, 'aimvp_hl1_tagline', 'cr8v_aimvp_hl', 'Item 1 Tagline', 'AI content generators, SEO article drafters, and marketing copy tools with fact-checking.');

    _cr8v_text($wp_customize, 'aimvp_hl2_title', 'cr8v_aimvp_hl', 'Item 2 Title', 'RAG Document Search & Knowledge Bots');
    _cr8v_textarea($wp_customize, 'aimvp_hl2_tagline', 'cr8v_aimvp_hl', 'Item 2 Tagline', 'Searching and summarizing large PDF archives, technical manuals, and corporate databases.');

    _cr8v_text($wp_customize, 'aimvp_hl3_title', 'cr8v_aimvp_hl', 'Item 3 Title', 'Intelligent Chatbots & Conversational UX');
    _cr8v_textarea($wp_customize, 'aimvp_hl3_tagline', 'cr8v_aimvp_hl', 'Item 3 Tagline', 'Streaming conversational interfaces with persistent memory, user session history, and custom system prompts.');

    _cr8v_text($wp_customize, 'aimvp_hl4_title', 'cr8v_aimvp_hl', 'Item 4 Title', 'AI Workflow Automation & Data Extractors');
    _cr8v_textarea($wp_customize, 'aimvp_hl4_tagline', 'cr8v_aimvp_hl', 'Item 4 Tagline', 'Automated data extraction from invoices, emails, and unstructured web content into structured JSON.');

    _cr8v_text($wp_customize, 'aimvp_hl5_title', 'cr8v_aimvp_hl', 'Item 5 Title', 'AI Image & Asset Generation Portals');
    _cr8v_textarea($wp_customize, 'aimvp_hl5_tagline', 'cr8v_aimvp_hl', 'Item 5 Tagline', 'Integrating Midjourney API, Flux, or Stable Diffusion for bespoke image generation dashboards.');

    _cr8v_text($wp_customize, 'aimvp_hl6_title', 'cr8v_aimvp_hl', 'Item 6 Title', 'WordPress & CMS AI Integrations');
    _cr8v_textarea($wp_customize, 'aimvp_hl6_tagline', 'cr8v_aimvp_hl', 'Item 6 Tagline', 'Building custom plugins that bring AI content generation and automated translation inside CMS dashboards.');

    // ── 07. CLIENT FEEDBACK (Testimonials) ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_testi', '07. Client Feedback (Testimonials)', 'cr8v_aimvp_panel', 70);
    _cr8v_text($wp_customize, 'aimvp_testi_label', 'cr8v_aimvp_testi', 'Section Label', 'Client Feedback');
    _cr8v_text($wp_customize, 'aimvp_testi_h2_part1', 'cr8v_aimvp_testi', 'Title Part 1', 'What clients say after ');
    _cr8v_text($wp_customize, 'aimvp_testi_h2_serif', 'cr8v_aimvp_testi', 'Title Serif Word', 'launch');

    _cr8v_textarea($wp_customize, 'aimvp_testi1_text', 'cr8v_aimvp_testi', 'Testimonial 1 Text', 'Cr8v Stacks took our prompt workflow concept and turned it into a working AI prototype in just 3 weeks. The streaming UI and vector search integration exceeded our expectations.');
    _cr8v_text($wp_customize, 'aimvp_testi1_author', 'cr8v_aimvp_testi', 'Testimonial 1 Author', 'Principal Founder — AI Product Suite');

    _cr8v_textarea($wp_customize, 'aimvp_testi2_text', 'cr8v_aimvp_testi', 'Testimonial 2 Text', 'Integrating Claude and Supabase vector embeddings was handled with incredible speed. We validated our product idea with real users ahead of schedule.');
    _cr8v_text($wp_customize, 'aimvp_testi2_author', 'cr8v_aimvp_testi', 'Testimonial 2 Author', 'Siddharth Rao — Senior Product Lead');

    _cr8v_textarea($wp_customize, 'aimvp_testi3_text', 'cr8v_aimvp_testi', 'Testimonial 3 Text', 'The multi-LLM routing setup reduced our API costs by 40% while maintaining fast response times. Outstanding AI engineering capability.');
    _cr8v_text($wp_customize, 'aimvp_testi3_author', 'cr8v_aimvp_testi', 'Testimonial 3 Author', 'Chloe Bennett — Chief Technology Officer');

    // ── 08. PRICING MODELS & ESTIMATOR ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_pricing', '08. Pricing Models & Estimator', 'cr8v_aimvp_panel', 80);
    _cr8v_text($wp_customize, 'aimvp_pricing_label', 'cr8v_aimvp_pricing', 'Section Label', 'PRICING MODELS');
    _cr8v_text($wp_customize, 'aimvp_pricing_h2_part1', 'cr8v_aimvp_pricing', 'Title Part 1', 'HOW WE ');
    _cr8v_text($wp_customize, 'aimvp_pricing_h2_serif', 'cr8v_aimvp_pricing', 'Title Serif Word', 'WORK TOGETHER');
    _cr8v_textarea($wp_customize, 'aimvp_pricing_desc', 'cr8v_aimvp_pricing', 'Section Subtitle', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');

    // ── 09. FREQUENTLY ASKED QUESTIONS ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_faq', '09. Frequently Asked Questions', 'cr8v_aimvp_panel', 90);
    _cr8v_text($wp_customize, 'aimvp_faq_eyebrow', 'cr8v_aimvp_faq', 'Eyebrow', '// COMMON QUESTIONS');
    _cr8v_text($wp_customize, 'aimvp_faq_h2', 'cr8v_aimvp_faq', 'Title', 'AI MVP Questions, Answered Honestly');
    _cr8v_textarea($wp_customize, 'aimvp_faq_sub', 'cr8v_aimvp_faq', 'Subtitle', 'Clear answers to common questions about our AI prototype engineering, vector databases, and LLM API integrations.');

    _cr8v_text($wp_customize, 'aimvp_faq1_q', 'cr8v_aimvp_faq', 'FAQ 1 Question', 'How fast can you build and launch a working AI MVP?');
    _cr8v_textarea($wp_customize, 'aimvp_faq1_a', 'cr8v_aimvp_faq', 'FAQ 1 Answer', 'Our standard AI MVP rapid prototype sprint delivers a functional, production-ready web application with LLM integration, user authentication, and streaming UI in 14 to 21 business days.');

    _cr8v_text($wp_customize, 'aimvp_faq2_q', 'cr8v_aimvp_faq', 'FAQ 2 Question', 'Which LLM models do you integrate into custom AI apps?');
    _cr8v_textarea($wp_customize, 'aimvp_faq2_a', 'cr8v_aimvp_faq', 'FAQ 2 Answer', 'We integrate leading LLM providers including OpenAI (GPT-4o), Anthropic (Claude 3.5 Sonnet), Google Gemini 1.5, and open-source models hosted via Replicate or HuggingFace.');

    _cr8v_text($wp_customize, 'aimvp_faq3_q', 'cr8v_aimvp_faq', 'FAQ 3 Question', 'How do you keep our company data and user prompts confidential?');
    _cr8v_textarea($wp_customize, 'aimvp_faq3_a', 'cr8v_aimvp_faq', 'FAQ 3 Answer', 'We configure enterprise zero-data-retention API endpoints, private vector databases in Supabase or Pinecone, and strict client-side encryption so user data is never used to train public LLM models.');

    _cr8v_text($wp_customize, 'aimvp_faq4_q', 'cr8v_aimvp_faq', 'FAQ 4 Question', 'What is RAG (Retrieval-Augmented Generation) and do we need it?');
    _cr8v_textarea($wp_customize, 'aimvp_faq4_a', 'cr8v_aimvp_faq', 'FAQ 4 Answer', 'RAG allows AI models to read your internal PDF files, database records, and custom knowledge documents before generating answers. It is essential if your AI tool needs to provide accurate, factual responses based on your proprietary business data.');

    _cr8v_text($wp_customize, 'aimvp_faq5_q', 'cr8v_aimvp_faq', 'FAQ 5 Question', 'How much does an AI MVP development project cost?');
    _cr8v_textarea($wp_customize, 'aimvp_faq5_a', 'cr8v_aimvp_faq', 'FAQ 5 Answer', 'Our fixed-scope AI MVP development sprints start from $3,500 for a 14-day working prototype. Pricing scales based on vector database complexity, multi-model API orchestration, and user subscription payment gateways.');

    _cr8v_text($wp_customize, 'aimvp_faq6_q', 'cr8v_aimvp_faq', 'FAQ 6 Question', 'Who owns the AI MVP codebase and system prompts?');
    _cr8v_textarea($wp_customize, 'aimvp_faq6_a', 'cr8v_aimvp_faq', 'FAQ 6 Answer', 'You own 100% of the frontend code, backend API scripts, system prompts, vector database schemas, and intellectual property upon final project delivery.');

    // ── 10. BOTTOM CTA SECTION ──
    _cr8v_section($wp_customize, 'cr8v_aimvp_cta', '10. Bottom CTA Section', 'cr8v_aimvp_panel', 100);
    _cr8v_text($wp_customize, 'aimvp_cta_label', 'cr8v_aimvp_cta', 'Section Label', 'READY TO BUILD?');
    _cr8v_text($wp_customize, 'aimvp_cta_h2_part1', 'cr8v_aimvp_cta', 'Title Part 1', 'Let’s Engineer Your Custom ');
    _cr8v_text($wp_customize, 'aimvp_cta_h2_serif', 'cr8v_aimvp_cta', 'Title Serif Word', 'AI MVP');
    _cr8v_textarea($wp_customize, 'aimvp_cta_desc', 'cr8v_aimvp_cta', 'Subtitle', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.');
    _cr8v_text($wp_customize, 'aimvp_cta_btn_text', 'cr8v_aimvp_cta', 'Button Text', 'Book Strategy Call →');
    _cr8v_text($wp_customize, 'aimvp_cta_btn_url', 'cr8v_aimvp_cta', 'Button Link URL', '/discovery-call/');
}
add_action('customize_register', 'cr8v_register_ai_mvp_panel');
