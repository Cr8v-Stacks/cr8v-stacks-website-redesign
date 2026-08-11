<?php
/**
 * CR8V Stacks — inc/customizer/panel-seo-content.php
 * Customizer Controls for SEO & Content Strategy Service Page
 * 100% Exhaustive Control Parity with Web Design Panel Workflow
 */

defined('ABSPATH') || exit;

$wp_customize->add_panel('cr8v_seo_panel', [
    'active_callback' => function() { return is_page('seo-content') || is_page('seo-and-content') || is_page_template('page-service-seo-content.php') || is_page_template('page-seo-content.php'); },
    'title'       => __('CR8V Service — SEO & Content Strategy', 'cr8v-stacks'),
    'priority'    => 37,
    'description' => __('Manage all copy, headlines, cards, FAQs, and links for SEO & Content Strategy Service Page.', 'cr8v-stacks'),
]);

// Section 1: Hero
$wp_customize->add_section('cr8v_seo_hero', ['title' => __('01. Hero Section', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_hero_eyebrow', 'cr8v_seo_hero', 'Hero Eyebrow', 'Search Engine Optimization & Authority Content Engineering');
_cr8v_text($wp_customize, 'seo_hero_h1_part1', 'cr8v_seo_hero', 'Headline Part 1', 'Organic Search Dominance ');
_cr8v_text($wp_customize, 'seo_hero_h1_serif', 'cr8v_seo_hero', 'Headline Serif (Italic)', '& Entity SEO');
_cr8v_textarea($wp_customize, 'seo_hero_intro', 'cr8v_seo_hero', 'Hero Intro Paragraph', 'Technical SEO audits, entity-based search architecture, and semantic keyword clusters engineered to drive compounding organic traffic and revenue without ad spend reliance.');
_cr8v_text($wp_customize, 'seo_hero_cta1_text', 'cr8v_seo_hero', 'Primary CTA Button Text', 'See What We Build →');
_cr8v_text($wp_customize, 'seo_hero_cta1_url', 'cr8v_seo_hero', 'Primary CTA URL', '#c8isv-services');
_cr8v_text($wp_customize, 'seo_hero_cta2_text', 'cr8v_seo_hero', 'Secondary CTA Button Text', 'Get a Quote →');
_cr8v_text($wp_customize, 'seo_hero_cta2_url', 'cr8v_seo_hero', 'Secondary CTA URL', 'https://cr8vstacks.com/contact/');
_cr8v_text($wp_customize, 'seo_hero_pill1', 'cr8v_seo_hero', 'Pill 1', 'Entity SEO');
_cr8v_text($wp_customize, 'seo_hero_pill2', 'cr8v_seo_hero', 'Pill 2', 'Technical Audit');
_cr8v_text($wp_customize, 'seo_hero_pill3', 'cr8v_seo_hero', 'Pill 3', 'Keyword Mapping');
_cr8v_text($wp_customize, 'seo_hero_pill4', 'cr8v_seo_hero', 'Pill 4', 'Content Strategy');

// Section 2: Why SEO & Content
$wp_customize->add_section('cr8v_seo_why', ['title' => __('02. Why SEO & Content', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_why_label', 'cr8v_seo_why', 'Section Label', 'Why SEO & Content');
_cr8v_text($wp_customize, 'seo_why_h2', 'cr8v_seo_why', 'Section Title', 'Sustainable Traffic Infrastructure That Compounds Over Time');
_cr8v_text($wp_customize, 'seo_why_card1_step', 'cr8v_seo_why', 'Card 1 Step', 'Mapping // Semantic');
_cr8v_text($wp_customize, 'seo_why_card1_title', 'cr8v_seo_why', 'Card 1 Title', 'Semantic Keyword Mapping');
_cr8v_textarea($wp_customize, 'seo_why_card1_desc', 'cr8v_seo_why', 'Card 1 Description', 'Aligning page architecture with exact buyer intent vectors across top, middle, and bottom of funnel search queries.');
_cr8v_text($wp_customize, 'seo_why_card2_step', 'cr8v_seo_why', 'Card 2 Step', 'Entity // Authority');
_cr8v_text($wp_customize, 'seo_why_card2_title', 'cr8v_seo_why', 'Card 2 Title', 'Entity SEO & Schema Markup');
_cr8v_textarea($wp_customize, 'seo_why_card2_desc', 'cr8v_seo_why', 'Card 2 Description', 'Structuring JSON-LD Schema data to build brand entity authority in Google\'s Knowledge Graph.');
_cr8v_text($wp_customize, 'seo_why_card3_step', 'cr8v_seo_why', 'Card 3 Step', 'Technical // Audit');
_cr8v_text($wp_customize, 'seo_why_card3_title', 'cr8v_seo_why', 'Card 3 Title', 'Technical Crawl Optimization');
_cr8v_textarea($wp_customize, 'seo_why_card3_desc', 'cr8v_seo_why', 'Card 3 Description', 'Fixing canonical errors, internal linking debt, page speed bottlenecks, and mobile indexability.');
_cr8v_text($wp_customize, 'seo_why_card4_step', 'cr8v_seo_why', 'Card 4 Step', 'Content // Revenue');
_cr8v_text($wp_customize, 'seo_why_card4_title', 'cr8v_seo_why', 'Card 4 Title', 'Revenue-Driven Content Strategy');
_cr8v_textarea($wp_customize, 'seo_why_card4_desc', 'cr8v_seo_why', 'Card 4 Description', 'Publishing high-converting buyer guides, product comparisons, and topical authority clusters.');

// Section 3: Our Work Showcase
$wp_customize->add_section('cr8v_seo_work', ['title' => __('03. Case Study Showcase', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_work_label', 'cr8v_seo_work', 'Section Label', 'Our Work');
_cr8v_text($wp_customize, 'seo_work_h2_part1', 'cr8v_seo_work', 'Title Part 1', 'Built for Real Outcomes,');
_cr8v_text($wp_customize, 'seo_work_h2_serif', 'cr8v_seo_work', 'Title Serif', 'Not Just Concepts');
_cr8v_text($wp_customize, 'seo_work_cs_client', 'cr8v_seo_work', 'Case Study Client Tag', 'Case Study — blvck Hair NG');
_cr8v_text($wp_customize, 'seo_work_cs_title', 'cr8v_seo_work', 'Case Study Title', 'Organic Revenue & Entity Search Architecture');
_cr8v_textarea($wp_customize, 'seo_work_cs_desc', 'cr8v_seo_work', 'Case Study Description', 'blvck Hair NG needed sustainable organic search traffic without relying strictly on paid Instagram ads. We built an entity-mapped keyword strategy, technical schema architecture, and high-converting product buyer guides.');
_cr8v_text($wp_customize, 'seo_work_cs_stat1_val', 'cr8v_seo_work', 'Metric 1 Value', '280%');
_cr8v_text($wp_customize, 'seo_work_cs_stat1_lbl', 'cr8v_seo_work', 'Metric 1 Label', 'Organic Search Traffic Growth');
_cr8v_text($wp_customize, 'seo_work_cs_stat2_val', 'cr8v_seo_work', 'Metric 2 Value', '#1');
_cr8v_text($wp_customize, 'seo_work_cs_stat2_lbl', 'cr8v_seo_work', 'Metric 2 Label', 'Rank for Core Product Keywords');
_cr8v_text($wp_customize, 'seo_work_cs_pill1', 'cr8v_seo_work', 'Deliverable Pill 1', 'Semantic Keyword Mapping');
_cr8v_text($wp_customize, 'seo_work_cs_pill2', 'cr8v_seo_work', 'Deliverable Pill 2', 'Entity SEO & Schema Architecture');
_cr8v_text($wp_customize, 'seo_work_cs_pill3', 'cr8v_seo_work', 'Deliverable Pill 3', 'Technical Site Audit');
_cr8v_text($wp_customize, 'seo_work_cs_pill4', 'cr8v_seo_work', 'Deliverable Pill 4', 'Content Strategy Engine');
_cr8v_text($wp_customize, 'seo_work_cs_btn_text', 'cr8v_seo_work', 'Case Study Link Text', 'View Case Study →');
_cr8v_text($wp_customize, 'seo_work_cs_btn_url', 'cr8v_seo_work', 'Case Study Link URL', '/case-studies/blvck-hair-ng/');

// Section 4: Deliverables Deck (What You Get)
$wp_customize->add_section('cr8v_seo_deck', ['title' => __('04. Deliverables Folder Deck', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_deck_label', 'cr8v_seo_deck', 'Section Label', 'What You Get');
_cr8v_text($wp_customize, 'seo_deck_h2_part1', 'cr8v_seo_deck', 'Title Part 1', 'Every layer of your search strategy, ');
_cr8v_text($wp_customize, 'seo_deck_h2_serif', 'cr8v_seo_deck', 'Title Serif', 'engineered by Cr8v Stacks.');
_cr8v_textarea($wp_customize, 'seo_deck_desc', 'cr8v_seo_deck', 'Lead Description', 'Technical crawl audits, semantic keyword mapping, Schema JSON-LD wiring, topical content clusters, and rank tracking analytics.');
_cr8v_text($wp_customize, 'seo_deck1_tab', 'cr8v_seo_deck', 'Card 1 Tab', '01 // Architecture');
_cr8v_text($wp_customize, 'seo_deck1_title', 'cr8v_seo_deck', 'Card 1 Title', 'Semantic Keyword & SERP Mapping');
_cr8v_textarea($wp_customize, 'seo_deck1_desc', 'cr8v_seo_deck', 'Card 1 Description', 'Discovering high-value commercial keywords, mapping intent tiers, and structuring site URL hierarchies.');
_cr8v_text($wp_customize, 'seo_deck2_tab', 'cr8v_seo_deck', 'Card 2 Tab', '02 // Technical');
_cr8v_text($wp_customize, 'seo_deck2_title', 'cr8v_seo_deck', 'Card 2 Title', 'Technical Crawl & Speed Optimization');
_cr8v_textarea($wp_customize, 'seo_deck2_desc', 'cr8v_seo_deck', 'Card 2 Description', 'Eliminating crawl budget waste, fixing indexation errors, and configuring Core Web Vitals performance.');
_cr8v_text($wp_customize, 'seo_deck3_tab', 'cr8v_seo_deck', 'Card 3 Tab', '03 // Schema');
_cr8v_text($wp_customize, 'seo_deck3_title', 'cr8v_seo_deck', 'Card 3 Title', 'Entity SEO & JSON-LD Schema');
_cr8v_textarea($wp_customize, 'seo_deck3_desc', 'cr8v_seo_deck', 'Card 3 Description', 'Building rich snippet schema for Organization, Product, FAQ, Article, and Local Business entities.');
_cr8v_text($wp_customize, 'seo_deck4_tab', 'cr8v_seo_deck', 'Card 4 Tab', '04 // Content');
_cr8v_text($wp_customize, 'seo_deck4_title', 'cr8v_seo_deck', 'Card 4 Title', 'Topical Authority Content Clusters');
_cr8v_textarea($wp_customize, 'seo_deck4_desc', 'cr8v_seo_deck', 'Card 4 Description', 'Writing in-depth buyer guides, industry comparison pages, and hub-and-spoke article structures.');
_cr8v_text($wp_customize, 'seo_deck5_tab', 'cr8v_seo_deck', 'Card 5 Tab', '05 // Analytics');
_cr8v_text($wp_customize, 'seo_deck5_title', 'cr8v_seo_deck', 'Card 5 Title', 'Google Search Console & Rank Audits');
_cr8v_textarea($wp_customize, 'seo_deck5_desc', 'cr8v_seo_deck', 'Card 5 Description', 'Continuous rank position tracking, backlink audits, and organic revenue attribution dashboards.');

// Section 5: Process & Approach
$wp_customize->add_section('cr8v_seo_proc', ['title' => __('05a. Process & Approach (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_proc_label', 'cr8v_seo_proc', 'Section Label', 'How We Approach It');
_cr8v_text($wp_customize, 'seo_proc_h2', 'cr8v_seo_proc', 'Section Title', 'How We Approach SEO & Content Strategy');
_cr8v_textarea($wp_customize, 'seo_proc_desc', 'cr8v_seo_proc', 'Lead Description', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.');
_cr8v_text($wp_customize, 'seo_proc1_num', 'cr8v_seo_proc', 'Stage 1 Number', '01');
_cr8v_text($wp_customize, 'seo_proc1_name', 'cr8v_seo_proc', 'Stage 1 Name', 'Audit');
_cr8v_text($wp_customize, 'seo_proc1_tags', 'cr8v_seo_proc', 'Stage 1 Tags', 'Crawl · Keywords · Competitors');
_cr8v_textarea($wp_customize, 'seo_proc1_desc', 'cr8v_seo_proc', 'Stage 1 Description', 'We audit existing site health, analyze competitor backlink profiles, and map high-intent commercial keywords.');
_cr8v_text($wp_customize, 'seo_proc2_num', 'cr8v_seo_proc', 'Stage 2 Number', '02');
_cr8v_text($wp_customize, 'seo_proc2_name', 'cr8v_seo_proc', 'Stage 2 Name', 'Structure');
_cr8v_text($wp_customize, 'seo_proc2_tags', 'cr8v_seo_proc', 'Stage 2 Tags', 'URL Hierarchy · Schema · Core Web Vitals');
_cr8v_textarea($wp_customize, 'seo_proc2_desc', 'cr8v_seo_proc', 'Stage 2 Description', 'We re-architect site URL hierarchies, implement JSON-LD Schema markup, and optimize Core Web Vitals speed.');
_cr8v_text($wp_customize, 'seo_proc3_num', 'cr8v_seo_proc', 'Stage 3 Number', '03');
_cr8v_text($wp_customize, 'seo_proc3_name', 'cr8v_seo_proc', 'Stage 3 Name', 'Produce');
_cr8v_text($wp_customize, 'seo_proc3_tags', 'cr8v_seo_proc', 'Stage 3 Tags', 'Topical Clusters · Guides · Internal Links');
_cr8v_textarea($wp_customize, 'seo_proc3_desc', 'cr8v_seo_proc', 'Stage 3 Description', 'We engineer in-depth topical content clusters, publish buyer guides, and build strategic internal links.');
_cr8v_text($wp_customize, 'seo_proc4_num', 'cr8v_seo_proc', 'Stage 4 Number', '04');
_cr8v_text($wp_customize, 'seo_proc4_name', 'cr8v_seo_proc', 'Stage 4 Name', 'Amplify');
_cr8v_text($wp_customize, 'seo_proc4_tags', 'cr8v_seo_proc', 'Stage 4 Tags', 'Rank Tracking · Authority · Optimization');
_cr8v_textarea($wp_customize, 'seo_proc4_desc', 'cr8v_seo_proc', 'Stage 4 Description', 'We monitor daily SERP rankings, earn authoritative backlinks, and refresh content to maintain top positions.');

// Section 6: Search Strategy Options
$wp_customize->add_section('cr8v_seo_plat', ['title' => __('06a. Search Strategy Options (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_plat_label', 'cr8v_seo_plat', 'Section Label', 'Search Strategy Options');
_cr8v_text($wp_customize, 'seo_plat_h2_part1', 'cr8v_seo_plat', 'Title Part 1', 'Choosing Your ');
_cr8v_text($wp_customize, 'seo_plat_h2_serif', 'cr8v_seo_plat', 'Title Serif', 'Organic Growth Engine');
_cr8v_textarea($wp_customize, 'seo_plat_desc', 'cr8v_seo_plat', 'Lead Description', 'Whether you need a technical SEO audit, topical content expansion, local search dominance, or a monthly organic retainer:');
_cr8v_text($wp_customize, 'seo_plat1_badge', 'cr8v_seo_plat', 'Option 1 Badge', 'Stack // Technical');
_cr8v_text($wp_customize, 'seo_plat1_title', 'cr8v_seo_plat', 'Option 1 Title', 'Technical SEO & Schema Audits');
_cr8v_textarea($wp_customize, 'seo_plat1_desc', 'cr8v_seo_plat', 'Option 1 Description', 'Fixing technical site debt, crawl errors, canonical loops, and structured data schemas.');
_cr8v_text($wp_customize, 'seo_plat2_badge', 'cr8v_seo_plat', 'Option 2 Badge', 'Stack // Content');
_cr8v_text($wp_customize, 'seo_plat2_title', 'cr8v_seo_plat', 'Option 2 Title', 'Topical Authority Content');
_cr8v_textarea($wp_customize, 'seo_plat2_desc', 'cr8v_seo_plat', 'Option 2 Description', 'Building comprehensive article hubs and product buying guides that rank for hundreds of long-tail keywords.');
_cr8v_text($wp_customize, 'seo_plat3_badge', 'cr8v_seo_plat', 'Option 3 Badge', 'Stack // Local');
_cr8v_text($wp_customize, 'seo_plat3_title', 'cr8v_seo_plat', 'Option 3 Title', 'Local SEO & Map Pack Optimization');
_cr8v_textarea($wp_customize, 'seo_plat3_desc', 'cr8v_seo_plat', 'Option 3 Description', 'Dominating local search results, Google Maps listings, and localized service queries.');
_cr8v_text($wp_customize, 'seo_plat4_badge', 'cr8v_seo_plat', 'Option 4 Badge', 'Stack // Retainer');
_cr8v_text($wp_customize, 'seo_plat4_title', 'cr8v_seo_plat', 'Option 4 Title', 'Full Organic Growth Retainer');
_cr8v_textarea($wp_customize, 'seo_plat4_desc', 'cr8v_seo_plat', 'Option 4 Description', 'Continuous keyword expansion, content production, link building, and monthly SERP reporting.');
_cr8v_textarea($wp_customize, 'seo_plat_footer_note', 'cr8v_seo_plat', 'Footer Note', 'Not sure which SEO service your site needs first? Tell us your current organic traffic goals and we\'ll run a preliminary search audit during our scoping call.');
_cr8v_text($wp_customize, 'seo_plat_cta_text', 'cr8v_seo_plat', 'CTA Button Text', 'Start an SEO Scoping Call →');
_cr8v_text($wp_customize, 'seo_plat_cta_url', 'cr8v_seo_plat', 'CTA Button URL', '/contact/?model=project&service=seo-content');

// Section 7: Project Catalog
$wp_customize->add_section('cr8v_seo_cat', ['title' => __('07. Project Catalog (Copy)', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_cat_label', 'cr8v_seo_cat', 'Section Label', 'Project Catalog');
_cr8v_text($wp_customize, 'seo_cat_h2', 'cr8v_seo_cat', 'Section Title', 'Every Kind of Search Strategy We Engineer');
_cr8v_textarea($wp_customize, 'seo_cat_desc', 'cr8v_seo_cat', 'Lead Description', 'From technical site audits to enterprise content hubs — hover to inspect the SEO stack.');
_cr8v_text($wp_customize, 'seo_cat1_title', 'cr8v_seo_cat', 'Catalog 1 Title', 'Technical SEO & Crawl Optimization');
_cr8v_textarea($wp_customize, 'seo_cat1_tagline', 'cr8v_seo_cat', 'Catalog 1 Tagline', 'Deep technical audits resolving indexation errors, duplicate content, and slow Core Web Vitals.');
_cr8v_text($wp_customize, 'seo_cat2_title', 'cr8v_seo_cat', 'Catalog 2 Title', 'Semantic Keyword & Intent Mapping');
_cr8v_textarea($wp_customize, 'seo_cat2_tagline', 'cr8v_seo_cat', 'Catalog 2 Tagline', 'Researching high-converting commercial keywords and mapping them to optimised landing pages.');
_cr8v_text($wp_customize, 'seo_cat3_title', 'cr8v_seo_cat', 'Catalog 3 Title', 'Entity SEO & Structured Schema Data');
_cr8v_textarea($wp_customize, 'seo_cat3_tagline', 'cr8v_seo_cat', 'Catalog 3 Tagline', 'Coding custom JSON-LD schema for rich search snippets, FAQs, reviews, and entity recognition.');
_cr8v_text($wp_customize, 'seo_cat4_title', 'cr8v_seo_cat', 'Catalog 4 Title', 'Topical Content Hubs & Buyer Guides');
_cr8v_textarea($wp_customize, 'seo_cat4_tagline', 'cr8v_seo_cat', 'Catalog 4 Tagline', 'Publishing authoritative article clusters that position your brand as the industry reference.');
_cr8v_text($wp_customize, 'seo_cat5_title', 'cr8v_seo_cat', 'Catalog 5 Title', 'E-Commerce Product & Category SEO');
_cr8v_textarea($wp_customize, 'seo_cat5_tagline', 'cr8v_seo_cat', 'Catalog 5 Tagline', 'Optimising product descriptions, category page filters, and schema markup for Shopify & WooCommerce.');
_cr8v_text($wp_customize, 'seo_cat6_title', 'cr8v_seo_cat', 'Catalog 6 Title', 'Local Business Search & Google Maps');
_cr8v_textarea($wp_customize, 'seo_cat6_tagline', 'cr8v_seo_cat', 'Catalog 6 Tagline', 'Optimising Google Business Profiles, localised schema, and geo-targeted landing pages.');

// Section 8: Testimonials
$wp_customize->add_section('cr8v_seo_testi', ['title' => __('08. Testimonials', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_testi_label', 'cr8v_seo_testi', 'Section Label', 'Client Feedback');
_cr8v_text($wp_customize, 'seo_testi_h2_part1', 'cr8v_seo_testi', 'Title Part 1', 'What clients say after ');
_cr8v_text($wp_customize, 'seo_testi_h2_serif', 'cr8v_seo_testi', 'Title Serif', 'launch');
_cr8v_textarea($wp_customize, 'seo_testi1_text', 'cr8v_seo_testi', 'Testimonial 1 Text', 'Cr8v Stacks transformed our search presence. We grew organic traffic by 280% and rank #1 for our primary revenue keywords without buying paid ads.');
_cr8v_text($wp_customize, 'seo_testi1_author', 'cr8v_seo_testi', 'Testimonial 1 Author', 'Founder — E-Commerce Retail');
_cr8v_textarea($wp_customize, 'seo_testi2_text', 'cr8v_seo_testi', 'Testimonial 2 Text', 'The technical SEO audit and schema architecture fixed 2 years of indexing issues in 3 weeks. Our organic leads grew 4x within 90 days.');
_cr8v_text($wp_customize, 'seo_testi2_author', 'cr8v_seo_testi', 'Testimonial 2 Author', 'Marcus Vance — Chief Technology Officer');
_cr8v_textarea($wp_customize, 'seo_testi3_text', 'cr8v_seo_testi', 'Testimonial 3 Text', 'Their semantic keyword mapping and content cluster strategy made us the authority in our niche. Our organic traffic compounds month after month.');
_cr8v_text($wp_customize, 'seo_testi3_author', 'cr8v_seo_testi', 'Testimonial 3 Author', 'Elena Rostova — Head of Organic Growth');

// Section 9: Pricing & Estimator
$wp_customize->add_section('cr8v_seo_pricing', ['title' => __('09. Pricing & Estimator', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_pricing_label', 'cr8v_seo_pricing', 'Section Label', 'PRICING MODELS');
_cr8v_text($wp_customize, 'seo_pricing_h2_part1', 'cr8v_seo_pricing', 'Title Part 1', 'HOW WE ');
_cr8v_text($wp_customize, 'seo_pricing_h2_serif', 'cr8v_seo_pricing', 'Title Serif', 'WORK TOGETHER');
_cr8v_textarea($wp_customize, 'seo_pricing_desc', 'cr8v_seo_pricing', 'Lead Description', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.');
_cr8v_text($wp_customize, 'seo_plan1_type', 'cr8v_seo_pricing', 'Plan 1 Type', 'Ongoing Support');
_cr8v_text($wp_customize, 'seo_plan1_title', 'cr8v_seo_pricing', 'Plan 1 Title', 'Growth Retainer');
_cr8v_text($wp_customize, 'seo_plan1_price', 'cr8v_seo_pricing', 'Plan 1 Price', '$800');
_cr8v_text($wp_customize, 'seo_plan1_period', 'cr8v_seo_pricing', 'Plan 1 Period', '/mo');
_cr8v_textarea($wp_customize, 'seo_plan1_desc', 'cr8v_seo_pricing', 'Plan 1 Description', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.');
_cr8v_text($wp_customize, 'seo_plan2_type', 'cr8v_seo_pricing', 'Plan 2 Type', 'Fixed Scope');
_cr8v_text($wp_customize, 'seo_plan2_title', 'cr8v_seo_pricing', 'Plan 2 Title', 'Fixed Projects');
_cr8v_text($wp_customize, 'seo_plan2_price', 'cr8v_seo_pricing', 'Plan 2 Price', 'From $1,200');
_cr8v_text($wp_customize, 'seo_plan2_period', 'cr8v_seo_pricing', 'Plan 2 Period', ' entry');
_cr8v_textarea($wp_customize, 'seo_plan2_desc', 'cr8v_seo_pricing', 'Plan 2 Description', 'A deep, technical search audit & content architecture engagement with transparent scoping, clear milestones, and guaranteed delivery. Best for site crawl auditing, entity schema tuning, and keyword mapping.');

// Section 10: FAQ Section
$wp_customize->add_section('cr8v_seo_faq', ['title' => __('10. FAQ Section', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_faq_eyebrow', 'cr8v_seo_faq', 'FAQ Eyebrow', '// COMMON QUESTIONS');
_cr8v_text($wp_customize, 'seo_faq_h2', 'cr8v_seo_faq', 'FAQ Title', 'SEO Questions, Answered Honestly');
_cr8v_textarea($wp_customize, 'seo_faq_sub', 'cr8v_seo_faq', 'FAQ Subtitle', 'Clear answers to common questions about our technical SEO audits, semantic keyword mapping, and content production processes.');

// Section 11: Related Services
$wp_customize->add_section('cr8v_seo_rel', ['title' => __('11. Related Services', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_rel_label', 'cr8v_seo_rel', 'Section Label', 'Other Ways We Build');
_cr8v_text($wp_customize, 'seo_rel_h2', 'cr8v_seo_rel', 'Section Title', 'Related Services');
_cr8v_textarea($wp_customize, 'seo_rel_desc', 'cr8v_seo_rel', 'Lead Description', 'SEO & Content Strategy is one of several services we offer. If an organic search engagement is not what you need, check these out.');
_cr8v_text($wp_customize, 'seo_rel1_title', 'cr8v_seo_rel', 'Related 1 Title', 'Web Design & UX');
_cr8v_textarea($wp_customize, 'seo_rel1_desc', 'cr8v_seo_rel', 'Related 1 Description', 'SEO works best when built on clean code, fast loading speeds, and conversion-oriented layouts engineered from day one.');
_cr8v_text($wp_customize, 'seo_rel1_url', 'cr8v_seo_rel', 'Related 1 URL', '/web-design/');
_cr8v_text($wp_customize, 'seo_rel2_title', 'cr8v_seo_rel', 'Related 2 Title', 'Digital Marketing');
_cr8v_textarea($wp_customize, 'seo_rel2_desc', 'cr8v_seo_rel', 'Related 2 Description', 'Combine organic search dominance with targeted paid ads on Google and Meta to capture 100% of SERP real estate.');
_cr8v_text($wp_customize, 'seo_rel2_url', 'cr8v_seo_rel', 'Related 2 URL', '/digital-marketing/');
_cr8v_text($wp_customize, 'seo_rel3_title', 'cr8v_seo_rel', 'Related 3 Title', 'WordPress Development');
_cr8v_textarea($wp_customize, 'seo_rel3_desc', 'cr8v_seo_rel', 'Related 3 Description', 'Clean theme code, schema markup, and speed performance engineered specifically for search engine indexing and CMS flexibility.');
_cr8v_text($wp_customize, 'seo_rel3_url', 'cr8v_seo_rel', 'Related 3 URL', '/wordpress-development/');

// ── GAP FILLS: Images, CTA Links, CDN Logos, FAQ Q&As ──────────────────

// S3 Portfolio — Case Study Image
_cr8v_img($wp_customize, 'seo_work_cs_img', 'cr8v_seo_work', 'Case Study Photo', 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop');

// S4 Folder Deck — Card Images & CTA links (×5)
_cr8v_img($wp_customize,  'seo_deck1_img',      'cr8v_seo_deck', 'Card 1 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'seo_deck1_cta_text', 'cr8v_seo_deck', 'Card 1 CTA Text', 'Discuss keyword mapping →');
_cr8v_text($wp_customize, 'seo_deck1_cta_url',  'cr8v_seo_deck', 'Card 1 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'seo_deck2_img',      'cr8v_seo_deck', 'Card 2 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'seo_deck2_cta_text', 'cr8v_seo_deck', 'Card 2 CTA Text', 'Discuss technical SEO →');
_cr8v_text($wp_customize, 'seo_deck2_cta_url',  'cr8v_seo_deck', 'Card 2 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'seo_deck3_img',      'cr8v_seo_deck', 'Card 3 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'seo_deck3_cta_text', 'cr8v_seo_deck', 'Card 3 CTA Text', 'Discuss JSON-LD schema →');
_cr8v_text($wp_customize, 'seo_deck3_cta_url',  'cr8v_seo_deck', 'Card 3 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'seo_deck4_img',      'cr8v_seo_deck', 'Card 4 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'seo_deck4_cta_text', 'cr8v_seo_deck', 'Card 4 CTA Text', 'Discuss content clusters →');
_cr8v_text($wp_customize, 'seo_deck4_cta_url',  'cr8v_seo_deck', 'Card 4 CTA URL', '/contact/');
_cr8v_img($wp_customize,  'seo_deck5_img',      'cr8v_seo_deck', 'Card 5 Image', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop');
_cr8v_text($wp_customize, 'seo_deck5_cta_text', 'cr8v_seo_deck', 'Card 5 CTA Text', 'Discuss rank tracking →');
_cr8v_text($wp_customize, 'seo_deck5_cta_url',  'cr8v_seo_deck', 'Card 5 CTA URL', '/contact/');

// S5 Process — Stage Images (×4)
$wp_customize->add_section('cr8v_seo_proc_imgs', ['title' => __('05b. Process Stage Images', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_img($wp_customize, 'seo_proc1_img', 'cr8v_seo_proc_imgs', 'Stage 1 Image', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'seo_proc2_img', 'cr8v_seo_proc_imgs', 'Stage 2 Image', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'seo_proc3_img', 'cr8v_seo_proc_imgs', 'Stage 3 Image', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop');
_cr8v_img($wp_customize, 'seo_proc4_img', 'cr8v_seo_proc_imgs', 'Stage 4 Image', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop');

// S6 Project Catalog — Tech badges & CDN Logo URLs (×6)
$wp_customize->add_section('cr8v_seo_cat_logos', ['title' => __('06b. Catalog CDN Logos & Tech', 'cr8v-stacks'), 'panel' => 'cr8v_seo_panel']);
_cr8v_text($wp_customize, 'seo_cat1_tech',  'cr8v_seo_cat_logos', 'Item 1 Tech Badge', 'Technical SEO');
_cr8v_text($wp_customize, 'seo_cat1_logo1', 'cr8v_seo_cat_logos', 'Item 1 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/screamingfrog.svg');
_cr8v_text($wp_customize, 'seo_cat1_logo2', 'cr8v_seo_cat_logos', 'Item 1 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg');
_cr8v_text($wp_customize, 'seo_cat2_tech',  'cr8v_seo_cat_logos', 'Item 2 Tech Badge', 'Keyword Strategy');
_cr8v_text($wp_customize, 'seo_cat2_logo1', 'cr8v_seo_cat_logos', 'Item 2 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg');
_cr8v_text($wp_customize, 'seo_cat2_logo2', 'cr8v_seo_cat_logos', 'Item 2 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg');
_cr8v_text($wp_customize, 'seo_cat3_tech',  'cr8v_seo_cat_logos', 'Item 3 Tech Badge', 'Entity Schema');
_cr8v_text($wp_customize, 'seo_cat3_logo1', 'cr8v_seo_cat_logos', 'Item 3 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg');
_cr8v_text($wp_customize, 'seo_cat3_logo2', 'cr8v_seo_cat_logos', 'Item 3 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg');
_cr8v_text($wp_customize, 'seo_cat4_tech',  'cr8v_seo_cat_logos', 'Item 4 Tech Badge', 'Content Clusters');
_cr8v_text($wp_customize, 'seo_cat4_logo1', 'cr8v_seo_cat_logos', 'Item 4 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg');
_cr8v_text($wp_customize, 'seo_cat4_logo2', 'cr8v_seo_cat_logos', 'Item 4 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg');
_cr8v_text($wp_customize, 'seo_cat5_tech',  'cr8v_seo_cat_logos', 'Item 5 Tech Badge', 'E-Commerce SEO');
_cr8v_text($wp_customize, 'seo_cat5_logo1', 'cr8v_seo_cat_logos', 'Item 5 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/screamingfrog.svg');
_cr8v_text($wp_customize, 'seo_cat5_logo2', 'cr8v_seo_cat_logos', 'Item 5 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg');
_cr8v_text($wp_customize, 'seo_cat6_tech',  'cr8v_seo_cat_logos', 'Item 6 Tech Badge', 'Local SEO');
_cr8v_text($wp_customize, 'seo_cat6_logo1', 'cr8v_seo_cat_logos', 'Item 6 Logo 1 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg');
_cr8v_text($wp_customize, 'seo_cat6_logo2', 'cr8v_seo_cat_logos', 'Item 6 Logo 2 CDN URL', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg');

// S9 Pricing — CTA Buttons & Estimator Links
_cr8v_text($wp_customize, 'seo_plan1_cta_text',  'cr8v_seo_pricing', 'Plan 1 CTA Button Text', 'Secure Retainer Slot');
_cr8v_text($wp_customize, 'seo_plan1_cta_url',   'cr8v_seo_pricing', 'Plan 1 CTA URL', '/contact/?model=retainer');
_cr8v_text($wp_customize, 'seo_plan2_cta_text',  'cr8v_seo_pricing', 'Plan 2 CTA Button Text', 'Start A Project');
_cr8v_text($wp_customize, 'seo_plan2_cta_url',   'cr8v_seo_pricing', 'Plan 2 CTA URL', '/contact/?model=project');
_cr8v_text($wp_customize, 'seo_est_cta_url',     'cr8v_seo_pricing', 'Estimator Submit CTA URL', '/contact/?platform=seo&est=1200-1500');
_cr8v_text($wp_customize, 'seo_est_calc_url',    'cr8v_seo_pricing', 'Calculator Link URL', '/toolkits/website-cost-calculator/');

// S10 FAQ — CTA Link + 7 Q&A pairs
_cr8v_text($wp_customize,     'seo_faq_cta_text', 'cr8v_seo_faq', 'FAQ CTA Link Text', 'Talk to us');
_cr8v_text($wp_customize,     'seo_faq_cta_url',  'cr8v_seo_faq', 'FAQ CTA Link URL', '/contact/');
_cr8v_text($wp_customize,     'seo_faq1_q', 'cr8v_seo_faq', 'FAQ 1 Question', 'How long does it take to see results from SEO and Content Strategy?');
_cr8v_textarea($wp_customize, 'seo_faq1_a', 'cr8v_seo_faq', 'FAQ 1 Answer', 'Technical SEO fixes and schema improvements often generate indexing improvements within 2 to 4 weeks. Sustained rank improvements and organic traffic compounding typically take 60 to 90 days as domain authority builds.');
_cr8v_text($wp_customize,     'seo_faq2_q', 'cr8v_seo_faq', 'FAQ 2 Question', 'How much does an SEO and Content Strategy project cost?');
_cr8v_textarea($wp_customize, 'seo_faq2_a', 'cr8v_seo_faq', 'FAQ 2 Answer', 'Our fixed-scope SEO & Content projects start from $1,200 for a complete technical crawl audit, semantic keyword mapping, and Schema JSON-LD implementation. Ongoing monthly SEO growth retainers start at $800/mo.');
_cr8v_text($wp_customize,     'seo_faq3_q', 'cr8v_seo_faq', 'FAQ 3 Question', 'Why hire an agency like Cr8v Stacks for SEO instead of a solo freelancer?');
_cr8v_textarea($wp_customize, 'seo_faq3_a', 'cr8v_seo_faq', 'FAQ 3 Answer', 'Solo freelancers often focus on superficial keyword density without understanding technical crawl budgets, server-side performance, or entity schema architecture. Cr8v Stacks combines senior technical SEO engineers, structured data architects, and editorial copywriters into a dedicated execution team.');
_cr8v_text($wp_customize,     'seo_faq4_q', 'cr8v_seo_faq', 'FAQ 4 Question', 'Do you guarantee #1 rankings on Google?');
_cr8v_textarea($wp_customize, 'seo_faq4_a', 'cr8v_seo_faq', 'FAQ 4 Answer', 'No professional agency can guarantee #1 rankings because search algorithms evolve continuously. However, our entity-mapped schema architectures, technical site optimization, and high-intent content clusters consistently drive client domains onto page one for commercial buyer keywords.');
_cr8v_text($wp_customize,     'seo_faq5_q', 'cr8v_seo_faq', 'FAQ 5 Question', 'What is Entity SEO and JSON-LD Schema markup?');
_cr8v_textarea($wp_customize, 'seo_faq5_a', 'cr8v_seo_faq', 'FAQ 5 Answer', 'Entity SEO structures your site data so search engines understand your brand as a recognised entity in Google\'s Knowledge Graph, rather than just matching keywords. We use structured JSON-LD code to earn rich search snippets.');
_cr8v_text($wp_customize,     'seo_faq6_q', 'cr8v_seo_faq', 'FAQ 6 Question', 'Do you write the content or just provide keyword recommendations?');
_cr8v_textarea($wp_customize, 'seo_faq6_a', 'cr8v_seo_faq', 'FAQ 6 Answer', 'We engineer the entire content process — from initial semantic keyword mapping and outline briefs to writing, editing, schema markup, and publishing optimised articles directly on your CMS.');
_cr8v_text($wp_customize,     'seo_faq7_q', 'cr8v_seo_faq', 'FAQ 7 Question', 'How do you measure SEO success and ranking improvements?');
_cr8v_textarea($wp_customize, 'seo_faq7_a', 'cr8v_seo_faq', 'FAQ 7 Answer', 'We track position rankings for target keyword clusters, organic search traffic growth in Google Analytics 4, indexing health in Google Search Console, and organic lead/revenue conversions.');
