<?php
/**
 * Universal Single Case Study Controller Template
 * Framework: Dynamic Data-Driven 7-Section Master Blueprint
 * Parity Reference: Case Studies/the-duch-apartments.html (100% Exact Parity)
 */
defined('ABSPATH') || exit;

global $post, $wp_query;

$queried_obj = get_queried_object();
$post_slug   = '';
$post_title  = '';

if ($post instanceof WP_Post) {
  $post_slug  = $post->post_name;
  $post_title = $post->post_title;
} elseif ($queried_obj instanceof WP_Post) {
  $post_slug  = $queried_obj->post_name;
  $post_title = $queried_obj->post_title;
}

$raw_uri   = strtolower(trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/'));
$uri_parts = !empty($raw_uri) ? explode('/', $raw_uri) : [];
$uri_slug  = !empty($uri_parts) ? end($uri_parts) : '';
$query_var_name = get_query_var('case_study') ?: get_query_var('name') ?: get_query_var('pagename') ?: '';

// Resolve active case study key
$matched_slug = null;
$all_slug_checks = array_filter([$post_slug, $uri_slug, $raw_uri, $post_title, $query_var_name]);

$slug_match_rules = [
  'the-duch-apartments'    => ['the-duch-apartments', 'duch-apartments', 'the-duch', 'duch'],
  'mkenny-properties'      => ['mkenny-properties', 'mkennyproperties', 'mkenny'],
  'wp-publishion-ai'       => ['wp-publishion-ai', 'wp-publishion', 'publishion'],
  'blvck-hair-ng'          => ['blvck-hair-ng', 'blvck-hair', 'blvckhair', 'blvck'],
  'bridgepoint-compliance' => ['bridgepoint-compliance', 'bridgepoint-consulting', 'compliance-analysis'],
  'bridgepoint-advisory'   => ['bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints'],
  'victorias-lane'         => ['victorias-lane', 'victoria-lane', 'victoriaslane'],
  'sweetermen-ng'          => ['sweetermen-ng', 'sweetermen'],
  'stride-plus-media'      => ['stride-plus-media', 'stride-plus', 'strideradio', 'stride'],
  'kiri-city-stays'        => ['kiri-city-stays', 'kiri-city', 'kiricitystays', 'kiri'],
];

foreach ($slug_match_rules as $canonical_key => $patterns) {
  foreach ($patterns as $pat) {
    foreach ($all_slug_checks as $check_str) {
      if (!empty($check_str) && stripos($check_str, $pat) !== false) {
        $matched_slug = $canonical_key;
        break 3;
      }
    }
  }
}

// Canonical Data Matrix for all 10 Portfolio Projects
$portfolio_data_matrix = [
  'the-duch-apartments' => [
    'client_name'   => 'The Duch Apartments',
    'industry'      => 'Hospitality // Direct Booking & Web Engineering',
    'headline_main' => 'The Duch Apartments: Direct Booking &',
    'headline_serif'=> 'Digital Ecosystem',
    'lead'          => 'The Duch Apartments is a premier luxury boutique serviced apartment residence in Lekki Phase 1, Lagos. We engineered an independent direct booking engine, custom room availability calendar, and entity SEO architecture that reduced reliance on high-commission third-party OTAs.',
    'pills'         => ['Web Design', 'Custom Booking Engine', 'Entity SEO', 'Hospitality UI'],
    'meta_services' => 'Web Design, Direct Booking Engine & SEO',
    'meta_stack'    => 'WordPress · Custom PHP · Availability API',
    'meta_link_url' => 'https://theduchapartments.com/',
    'meta_link_text'=> 'theduchapartments.com ↗',
    'hero_img'      => 'cs_duch_hero_landscape.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'The Duch Apartments was losing substantial margin on room night reservations through third-party OTA commission structures (15-25% per booking) while lacking a branded guest booking touchpoint.',
    'overview_p2'   => 'Cr8v Stacks engineered a bespoke hospitality web platform featuring an in-house dual-month availability calendar, instant date-selection workflows, real-time Paystack and foreign currency payment settlement, and structured schema markup.',
    'overview_items'=> [
      ['title' => '01 / Custom Availability Calendar Engine', 'desc' => 'Engineered a dual-month real-time reservation system with instant date blocking and dynamic rate calculation.'],
      ['title' => '02 / High-Trust Brand & Digital Experience', 'desc' => 'Designed a refined hospitality visual identity utilizing Forest Green (#1B4D3E), Warm Amber (#E5A93C), and Carrara marble textures.'],
      ['title' => '03 / Multi-Currency Payment Architecture', 'desc' => 'Integrated secure checkout pipelines supporting Paystack, automated wire confirmations, and direct booking receipt dispatch.'],
      ['title' => '04 / Entity SEO & Structured Hotel Schema', 'desc' => 'Embedded rich Hotel, LodgingBusiness, and FAQ JSON-LD schemas to capture high-intent direct booking search traffic in Lagos.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Hospitality Design System & Tokens',
    'asset_01_desc' => 'Curated brand color ramps (Forest Green, Warm Amber), DM Sans typography scale rules, 4px component corners, and custom amenity line glyphs.',
    'asset_01_img'  => 'duch_asset_01_design_system.webp',
    'asset_02_meta' => 'Experience // Asset 02',
    'asset_02_title'=> 'Direct Booking & Availability Engine',
    'asset_02_desc' => 'Interactive dual-month calendar date picker with instant room tier availability checks, price previews, and 1-click reservation triggers.',
    'asset_02_img'  => 'duch_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Direct Booking Autonomy & OTA Disintermediation',
    'asset_03_desc' => 'By architecting a proprietary guest acquisition and payment pipeline, The Duch Apartments reclaimed full pricing sovereignty, eliminated OTA commission leakages, and retained complete guest reservation data sovereignty.',
    'asset_03_points'=> [
      'Zero Third-Party Commission: Direct guest transactions retain full room revenue with zero OTA cuts.',
      'Automated Guest Onboarding: Instant WhatsApp and email reservation confirmations with check-in access codes.',
      'Local Search Domination: Outranking intermediary listing sites for branded Lekki serviced apartment searches.'
    ],
    'asset_03_img'  => 'duch_asset_03_ecosystem.webp',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'cs_duch_gallery_01_laptop.webp', 'tag' => 'Live Interface', 'title' => 'Responsive Suite Catalog'],
      ['img' => 'cs_duch_gallery_02_macro.webp', 'tag' => 'Macro Interaction', 'title' => 'Room Suite Card Detail'],
      ['img' => 'cs_duch_gallery_05_calendar.webp', 'tag' => 'Engine Detail', 'title' => 'Dual-Month Availability Calendar'],
      ['img' => 'cs_duch_gallery_04_living.webp', 'tag' => 'Atmosphere', 'title' => 'Luxury Penthouse Living Space'],
      ['img' => 'cs_duch_gallery_03_workspace.webp', 'tag' => 'Workstation Staging', 'title' => 'Studio Review & Responsive Tablet'],
      ['img' => 'cs_duch_gallery_06_platform.webp', 'tag' => 'Platform Staging', 'title' => 'Oblique UI Slab Showcase']
    ],
    'metrics'       => [
      ['val' => '+340%', 'lbl' => 'Direct Reservations', 'desc' => 'Surge in high-margin direct guest bookings bypassing third-party OTAs.'],
      ['val' => '0%', 'lbl' => 'OTA Commission Loss', 'desc' => 'Retained 100% of room rate revenues on in-house booking portal reservations.'],
      ['val' => '98.4%', 'lbl' => 'Direct Guest Retention', 'desc' => 'High returning guest engagement via sovereign customer data retention.']
    ],
    'live_url'      => 'https://theduchapartments.com/'
  ],

  'mkenny-properties' => [
    'client_name'   => 'Mkenny Properties',
    'industry'      => 'Real Estate // Manchester UK Property Development & WordPress Widgets',
    'headline_main' => 'Mkenny Properties: Property Archive &',
    'headline_serif'=> 'Widget Engine',
    'lead'          => 'Mkenny Properties Ltd is a trusted UK property development firm based in Manchester, specializing in residential, commercial, and urban regeneration developments across the UK. We engineered bespoke Elementor dynamic query loop widgets, sub-second AJAX facet filtering, and direct broker lead routing.',
    'pills'         => ['WordPress Custom', 'Elementor Widgets', 'Manchester UK Real Estate', 'Query Pipelines'],
    'meta_services' => 'WordPress Custom Widgets, UX & Property Schema',
    'meta_stack'    => 'WordPress · Elementor · Custom PHP · UK Property Schema',
    'meta_link_url' => 'https://mkennyproperties.com/',
    'meta_link_text'=> 'mkennyproperties.com ↗',
    'hero_img'      => 'case_study_mkenny_properties.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Mkenny Properties required a scalable digital development portfolio to showcase active residential schemes (such as 6 Short Avenue, Manchester and Cromwell Road, Stretford) to UK property investors and home buyers without generic real estate plugin bloat.',
    'overview_p2'   => 'We engineered a bespoke WordPress development catalog: modular Elementor listing widgets, sub-second AJAX taxonomy facet filtering across Manchester locations, property status flags (Completed, Ongoing, Investment Highlight), and automated direct broker dispatch.',
    'overview_items'=> [
      ['title' => '01 / Custom Elementor Widget Suite', 'desc' => 'Constructed drag-and-drop property cards and dynamic query loop builders tailored for the client editorial team.'],
      ['title' => '02 / High-Velocity AJAX Query Engine', 'desc' => 'Engineered lightweight custom SQL query routines delivering instantaneous multi-facet filtering across price, status, and UK locations.'],
      ['title' => '03 / Dynamic Manchester Map & Schema', 'desc' => 'Integrated interactive location maps and structured RealEstateListing JSON-LD schema for dominant Manchester property search visibility.'],
      ['title' => '04 / Direct Broker WhatsApp & Lead Routing', 'desc' => 'Engineered instant property metadata passing into direct broker WhatsApp inquiries, accelerating UK investor deal conversion.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Custom Elementor Widget Suite & Token Spec',
    'asset_01_desc' => 'Constructed reusable UI components, property badge states (Completed, Investment Highlight, POA), typography tokens (Plus Jakarta Sans, Space Mono), and 4px card templates.',
    'asset_01_img'  => 'mkenny_asset_01_design_system.webp',
    'asset_02_meta' => 'Query Engine // Asset 02',
    'asset_02_title'=> 'AJAX Property Filter Matrix',
    'asset_02_desc' => 'Engineered sub-second facet filtering for Manchester locations (Stretford, Manchester City Centre), property types (Terraced, Detached), and budget sliders with zero page reloads.',
    'asset_02_img'  => 'mkenny_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Custom Post Architecture & Direct Lead Sovereignty',
    'asset_03_desc' => 'Rather than relying on third-party property portal aggregators that charge exorbitant listing fees and divert UK buyer leads to competing developments, we architected an independent WordPress property catalog pipeline that keeps all buyer data and direct inquiries proprietary to Mkenny.',
    'asset_03_points'=> [
      'Custom Post Type & ACF Schema: Clean property data architecture supporting floor plans, tenure, and development stages.',
      'Cached WP_Query Optimization: Instantaneous database response times across high-density image catalogs.',
      'Automated Broker Routing: Dynamic pre-filled WhatsApp lead dispatch connecting prospective buyers directly to the assigned development manager.'
    ],
    'asset_03_img'  => 'mkenny_asset_03_ecosystem.webp',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'mkenny_gallery_01.webp', 'tag' => 'Live Interface', 'title' => 'Responsive Property Archive Grid'],
      ['img' => 'mkenny_gallery_02.webp', 'tag' => 'Catalog Engine', 'title' => 'Single Property Master Showcase'],
      ['img' => 'mkenny_gallery_03.webp', 'tag' => 'Editorial Tools', 'title' => 'Custom Elementor Widget Controls'],
      ['img' => 'mkenny_gallery_04.webp', 'tag' => 'Conversion Flow', 'title' => 'Direct WhatsApp Broker Dispatch'],
      ['img' => 'mkenny_gallery_05.webp', 'tag' => 'Geo Architecture', 'title' => 'Interactive Manchester Amenity Map'],
      ['img' => 'mkenny_gallery_06.webp', 'tag' => 'Catalog Architecture', 'title' => 'Master Development Staging Slab']
    ],
    'metrics'       => [
      ['val' => '+180%', 'lbl' => 'Qualified Buyer Leads', 'desc' => 'Proprietary lead capture architecture routing UK investor inquiries directly to internal sales brokers.'],
      ['val' => '0%', 'lbl' => 'Portal Dependency', 'desc' => 'Eliminated reliance on third-party aggregator listing fees for direct development sales.'],
      ['val' => '96.8%', 'lbl' => 'First-Touch Lead Capture', 'desc' => 'Direct buyer inquiries retained in internal CRM without third-party lead poaching.']
    ],
    'live_url'      => 'https://mkennyproperties.com/'
  ],

  'wp-publishion-ai' => [
    'client_name'   => 'WP Publishion AI',
    'industry'      => 'AI MVP // Autonomous Multi-LLM Content Engine',
    'headline_main' => 'WP Publishion AI: Autonomous Editorial &',
    'headline_serif'=> 'Multi-LLM Engine',
    'lead'          => 'WP Publishion AI is our proprietary AI-powered WordPress publishing application, architected to automate fact-verified, SEO-optimized editorial drafting directly within WordPress core via Claude 3.5, Gemini 1.5 Pro, and OpenAI.',
    'pills'         => ['AI MVP', 'Multi-LLM Pipeline', 'WordPress REST API', 'Brave Search API'],
    'meta_services' => 'AI System Architecture, Full-Stack SaaS Engineering',
    'meta_stack'    => 'WordPress · Python · Claude / OpenAI / Gemini APIs',
    'meta_link_url' => 'https://wppublishion.com/',
    'meta_link_text'=> 'wppublishion.com ↗',
    'hero_img'      => 'case_study_wp_publishion.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Publishers and agencies struggle with generic AI content that hallucinates facts, lacks structured schema markup, and requires extensive manual copy-pasting into CMS workflows.',
    'overview_p2'   => 'We built WP Publishion AI from the ground up: an autonomous multi-LLM orchestration pipeline with integrated Brave Search fact-checking, automated internal linking, and direct REST API block editor publishing.',
    'overview_items'=> [
      ['title' => '01 / Multi-LLM Orchestration', 'desc' => 'Integrated Claude 3.5 Sonnet, OpenAI GPT-4o, and Gemini 1.5 Pro with automatic fallback routing.'],
      ['title' => '02 / Real-Time Fact Verification', 'desc' => 'Connected Brave Search API to verify claims and insert live citations prior to publication.'],
      ['title' => '03 / Native WordPress Core Bridge', 'desc' => 'Direct Gutenberg block generation eliminating all external SaaS copy-pasting.'],
      ['title' => '04 / Automated Schema & Entities', 'desc' => 'Generates Article, FAQPage, and Entity JSON-LD schemas automatically.'],
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'AI Telemetry & Model Token Spec',
    'asset_01_desc' => 'Modular developer interface tokens, model status indicators (Claude, GPT, Gemini), and prompt parameter control components.',
    'asset_01_img'  => 'wp_publishion_asset_01_design_system.webp',
    'asset_02_meta' => 'Experience // Asset 02',
    'asset_02_title'=> 'Real-Time Fact Engine & Editor',
    'asset_02_desc' => 'Live drafting canvas with automated claim validation, citation injections, and readability telemetry.',
    'asset_02_img'  => 'wp_publishion_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Proprietary Content Sovereignty Pipeline',
    'asset_03_desc' => 'Fully autonomous in-house AI engine eliminating subscription lock-in and keeping all training data and editorial content proprietary.',
    'asset_03_points'=> [
      'Zero SaaS Dependency: Self-hosted API orchestration with private key management.',
      'Instant Block Generation: 1-click publishing directly to WordPress draft queues.',
      'Automated Semantic SEO: Pre-configured entity graphs and structured metadata.'
    ],
    'asset_03_img'  => 'wp_publishion_asset_03_ecosystem.webp',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'publishion_gallery_01.webp', 'tag' => 'Editor Workspace', 'title' => 'Multi-LLM Drafting Canvas'],
      ['img' => 'publishion_gallery_02.webp', 'tag' => 'Verification', 'title' => 'Live Search Fact Checker'],
      ['img' => 'publishion_gallery_03.webp', 'tag' => 'API Pipeline', 'title' => 'REST API Webhook Telemetry'],
      ['img' => 'publishion_gallery_04.webp', 'tag' => 'CMS Integration', 'title' => 'Gutenberg Block Injection'],
      ['img' => 'publishion_gallery_05.webp', 'tag' => 'Model Routing', 'title' => 'LLM Parameter Controls'],
      ['img' => 'publishion_gallery_06.webp', 'tag' => 'Telemetry', 'title' => 'System Execution Staging Slab']
    ],
    'metrics'       => [
      ['val' => '3', 'lbl' => 'LLMs Integrated', 'desc' => 'Claude 3.5, Gemini 1.5 Pro, and GPT-4o unified in one pipeline.'],
      ['val' => '5.4x', 'lbl' => 'Publishing Velocity', 'desc' => 'Reduction in editorial drafting hours from outline to WordPress block staging.'],
      ['val' => '99.2%', 'lbl' => 'API Reliability', 'desc' => 'Self-hosted API orchestration with automatic model fallback redundancy.']
    ],
    'live_url'      => 'https://wppublishion.com/'
  ],

  'blvck-hair-ng' => [
    'client_name'   => 'BLVCK Hair NG',
    'industry'      => 'E-Commerce // Luxury Hair Extensions & Organic Search Domination',
    'headline_main' => 'BLVCK Hair NG: Luxury Storefront &',
    'headline_serif'=> 'Entity SEO Engine',
    'lead'          => 'BLVCK Hair NG is a luxury hair extension brand that scaled from early-stage organic search presence to running active commercial storefronts across Nigeria and the United Kingdom. We engineered high-converting Shopify Liquid templates, Paystack integration, and organic SEO authority.',
    'pills'         => ['Shopify Liquid', 'Entity SEO', 'Paystack Multi-Currency', 'E-Commerce UX'],
    'meta_services' => 'Shopify Engineering, Entity SEO & Conversion Design',
    'meta_stack'    => 'Shopify · Liquid · Paystack · Schema JSON-LD',
    'meta_link_url' => 'https://blvckhairng.com/',
    'meta_link_text'=> 'blvckhairng.com ↗',
    'hero_img'      => 'case_study_blvck_hair.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'BLVCK Hair NG needed to expand from a single local boutique into an international luxury direct-to-consumer brand with dominant search visibility for high-intent hair extension queries.',
    'overview_p2'   => 'We engineered a bespoke Shopify Liquid storefront with instant slide-out cart drawers, seamless Paystack multi-currency checkout, structured Product JSON-LD schema, and high-velocity mobile UX.',
    'overview_items'=> [
      ['title' => '01 / Bespoke Shopify Liquid Storefront', 'desc' => 'Engineered high-performance templates tailored for luxury product photography and mobile shoppers.'],
      ['title' => '02 / Entity SEO & Keyword Mapping', 'desc' => 'Mapped competitive search terms to category hubs, capturing high-intent organic buyer traffic.'],
      ['title' => '03 / Frictionless Checkout Pipeline', 'desc' => 'Integrated Paystack and international payment gateways with automated SMS/email order tracking.'],
      ['title' => '04 / Multi-Store International Scale', 'desc' => 'Architected dual-storefront currency localization supporting Nigerian and UK shoppers.'],
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Luxury Fashion Design System & Tokens',
    'asset_01_desc' => 'Editorial typography tokens, jet black and champagne gold color ramps, and product badge components.',
    'asset_01_img'  => 'blvck_asset_01_design_system.webp',
    'asset_02_meta' => 'Experience // Asset 02',
    'asset_02_title'=> 'Slide-Out Cart & Bundle Builder',
    'asset_02_desc' => 'Instant slide-out cart drawer with dynamic bundle upsells and 1-click Paystack checkout.',
    'asset_02_img'  => 'blvck_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Organic Acquisition Sovereignty',
    'asset_03_desc' => 'Building long-term organic search equity that generates continuous buyer traffic without continuous ad spend.',
    'asset_03_points'=> [
      '2 Live Storefronts: Operating in Nigeria and the UK.',
      '100s of Verified Customer Reviews: Building strong social proof and brand equity.',
      'Top 3 Search Rankings: Outranking competitors for luxury hair extension keywords.'
    ],
    'asset_03_img'  => 'blvck_asset_03_ecosystem.webp',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'blvck_gallery_01.webp', 'tag' => 'Mobile UX', 'title' => 'Responsive Product Showcase'],
      ['img' => 'blvck_gallery_02.webp', 'tag' => 'Product Detail', 'title' => 'Custom Bundle Builder'],
      ['img' => 'blvck_gallery_03.webp', 'tag' => 'Checkout', 'title' => 'Paystack Instant Payment'],
      ['img' => 'blvck_gallery_04.webp', 'tag' => 'Brand Review', 'title' => 'Social Proof Matrix'],
      ['img' => 'blvck_gallery_05.webp', 'tag' => 'Search Growth', 'title' => 'Organic Visibility Chart'],
      ['img' => 'blvck_gallery_06.webp', 'tag' => 'Catalog Staging', 'title' => 'Luxury Storefront Staging Slab']
    ],
    'metrics'       => [
      ['val' => '2', 'lbl' => 'Live Storefronts', 'desc' => 'Expanded from single location to live commercial storefronts in Nigeria & UK.'],
      ['val' => '450+', 'lbl' => 'Customer Reviews', 'desc' => 'Accumulated across both regional operations.'],
      ['val' => 'Top 3', 'lbl' => 'Organic Google Rank', 'desc' => 'Dominant search visibility for high-intent luxury hair queries.']
    ],
    'live_url'      => 'https://blvckhairng.com/'
  ],

  'bridgepoint-compliance' => [
    'client_name'   => 'Bridgepoint Advisory',
    'industry'      => 'Corporate // Compliance & Relational Database App',
    'headline_main' => 'Bridgepoint Advisory: Custom Compliance',
    'headline_serif'=> '& SQL App',
    'lead'          => 'Bridgepoint Advisory Services required a high-security internal compliance web portal to streamline corporate auditing. We engineered a zero-template React and Node.js solution with custom relational database queries and role-based data encryption.',
    'pills'         => ['Custom Dev', 'React & Node', 'PostgreSQL', 'Data Security'],
    'meta_services' => 'Custom Development',
    'meta_stack'    => 'React · Node.js · SQL',
    'meta_link_url' => 'https://bridgepoints.ng/',
    'meta_link_text'=> 'bridgepoints.ng ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Operating in high-tier financial consulting, Bridgepoint faced major bottlenecks managing client compliance audits using manual spreadsheets and generic cloud forms.',
    'overview_p2'   => 'They needed a dedicated internal compliance portal capable of parsing complex financial data models securely while maintaining zero latency across multi-user sessions.',
    'overview_items'=> [
      ['title' => '01 / Relational Database Architecture', 'desc' => 'Designed normalized PostgreSQL relational schemas optimized for high-speed audit record indexing.'],
      ['title' => '02 / Secure Authentication & RBAC', 'desc' => 'Configured JWT multi-factor authentication with granular role-based access control for corporate compliance officers.'],
      ['title' => '03 / Custom Frontend Dashboard', 'desc' => 'Hand-coded a dark glassmorphic React admin interface featuring real-time data visualizers.'],
      ['title' => '04 / Automated Audit Reporting', 'desc' => 'Engineered background worker threads to automatically generate encrypted PDF compliance reports.']
    ],
    'asset_01_meta' => 'Backend Architecture // Asset 01',
    'asset_01_title'=> 'Engineered Database & Compliance System',
    'asset_01_desc' => 'Custom SQL database queries, data security encryption, and automated audit logging dashboard.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'Interface // Asset 02',
    'asset_02_title'=> 'Platform Experience Page',
    'asset_02_desc' => 'Designing custom user interfaces, pricing breakdowns, and direct conversion triggers.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Mobile Flow // Asset 03',
    'asset_03_title'=> 'Responsive Mobile Flow',
    'asset_03_desc' => 'Optimizing touch targets and instant contact forms for mobile users discovering the platform online.',
    'asset_03_points'=> [
      'Multi-Factor Auth: Enterprise JWT security with automated session expiry.',
      'Sub-Second Audits: Optimized PostgreSQL queries across 10,000+ compliance records.',
      'Automated Encrypted PDF: Instant one-click audit report generation.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop', 'tag' => 'Database Architecture', 'title' => 'PostgreSQL Query Pipeline'],
      ['img' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop', 'tag' => 'Admin Interface', 'title' => 'Real-Time Compliance Visualizer'],
      ['img' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Mobile Flow', 'title' => 'Responsive Auditor Interface']
    ],
    'metrics'       => [
      ['val' => '99.6%', 'lbl' => 'Audit Accuracy', 'desc' => 'Flawless record verification across enterprise client portfolios.'],
      ['val' => '0', 'lbl' => 'Security Incidents', 'desc' => 'Role-based access control and token encryption safeguarding sensitive corporate filings.'],
      ['val' => '85%', 'lbl' => 'Time Saved', 'desc' => 'Reduction in manual compliance auditing hours per quarterly cycle.']
    ],
    'live_url'      => 'https://bridgepoints.ng/'
  ],

  'bridgepoint-advisory' => [
    'client_name'   => 'Bridgepoint Advisory',
    'industry'      => 'Brand Identity // Vector Design & Corporate Guidelines',
    'headline_main' => 'BridgePoints: Corporate Visual',
    'headline_serif'=> 'Brand Identity',
    'lead'          => 'Bridgepoint Advisory Services needed a visual identity system that commanded authority in corporate financial markets. We crafted an original vector logo mark, set color swatch tokens, and compiled a comprehensive brand manual for digital and print collateral.',
    'pills'         => ['Brand Identity', 'Vector Logo', 'Design Tokens', 'Brand Manual'],
    'meta_services' => 'Brand Identity Design',
    'meta_stack'    => 'Figma · Vector Assets',
    'meta_link_url' => 'https://bridgepoints.ng/',
    'meta_link_text'=> 'bridgepoints.ng ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Bridgepoint Advisory Services required a modern, institutional corporate visual identity to distinguish itself in competitive advisory markets.',
    'overview_p2'   => 'Cr8v Stacks crafted an authoritative vector emblem, complete typography hierarchy guidelines, digital color ramps, and corporate stationeries.',
    'overview_items'=> [
      ['title' => '01 / Geometric Logo System', 'desc' => 'Engineered a precision vector mark conveying stability, strategic growth, and corporate precision.'],
      ['title' => '02 / Brand Manual & Token Rules', 'desc' => 'Documented exact spacing parameters, minimum clear space, and typography scale hierarchies.'],
      ['title' => '03 / Color System Architecture', 'desc' => 'Curated a bespoke institutional color palette pairing Royal Blue with warm architectural neutrals.'],
      ['title' => '04 / Corporate Collateral Suite', 'desc' => 'Designed print-ready stationery, executive pitch decks, and digital media assets.']
    ],
    'asset_01_meta' => 'Brand Identity // Asset 01',
    'asset_01_title'=> 'Corporate Brand Guidelines & Token Swatches',
    'asset_01_desc' => 'Vector geometry, typography scale rules, and institutional color token scales.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'Identity // Asset 02',
    'asset_02_title'=> 'Vector Precision & Logo Construction',
    'asset_02_desc' => 'Grid-aligned vector construction ensuring legibility across corporate signage and app icons.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Collateral // Asset 03',
    'asset_03_title'=> 'Executive Stationery & Pitch Architecture',
    'asset_03_desc' => 'Consistent brand collateral projecting institutional authority in high-stakes investor meetings.',
    'asset_03_points'=> [
      'Comprehensive Brand Manual: Complete usage rules across print and digital media.',
      'Vector Precision: Scalable SVG assets optimized for high-DPI displays.',
      'Institutional Authority: Unified typography and color systems across corporate presentations.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1542744094-3a31f272c490?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop', 'tag' => 'Brand Manual', 'title' => 'Design System Specification'],
      ['img' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop', 'tag' => 'Vector Geometry', 'title' => 'Logo Grid Construction'],
      ['img' => 'https://images.unsplash.com/photo-1542744094-3a31f272c490?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Collateral', 'title' => 'Executive Presentation Suite']
    ],
    'metrics'       => [
      ['val' => '0.5px', 'lbl' => 'Vector Precision', 'desc' => 'Pixel-perfect geometry across every digital and print touchpoint.'],
      ['val' => '42+', 'lbl' => 'Brand Assets', 'desc' => 'Comprehensive design tokens, icon sets, and presentation slide templates.'],
      ['val' => '98%', 'lbl' => 'Executive Alignment', 'desc' => 'Seamless executive stakeholder alignment and immediate brand rollout.']
    ],
    'live_url'      => 'https://bridgepoints.ng/'
  ],

  'victorias-lane' => [
    'client_name'   => "Victoria's Lane",
    'industry'      => 'Fashion // Luxury Leather & Shopify Liquid Storefront',
    'headline_main' => "Victoria's Lane: Shopify Storefront",
    'headline_serif'=> '& Liquid Dev',
    'lead'          => "Victoria's Lane is an exclusive luxury handbag brand. We hand-coded a bespoke Shopify Liquid storefront featuring custom product filters, an app-free AJAX cart drawer, and high-converting PDP visual showcases.",
    'pills'         => ['Shopify Liquid', 'Custom Theme', 'AJAX Cart', 'Fashion CRO'],
    'meta_services' => 'Shopify Storefront & CRO',
    'meta_stack'    => 'Shopify · Liquid · JavaScript',
    'meta_link_url' => 'https://victoriaslane.com/',
    'meta_link_text'=> 'victoriaslane.com ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => "Victoria's Lane needed a storefront that reflected high fashion elegance without falling into generic Shopify theme templates or app bloat fees.",
    'overview_p2'   => 'They required custom Liquid template logic for variant swatches, high-resolution product video showcases, and instant cart drawer slideouts.',
    'overview_items'=> [
      ['title' => '01 / Custom Liquid Architecture', 'desc' => 'Engineered a bespoke theme from scratch with zero recurring third-party Shopify app subscription fees.'],
      ['title' => '02 / App-Free AJAX Cart Drawer', 'desc' => 'Hand-coded sub-second cart slideout with dynamic free-shipping progress indicators.'],
      ['title' => '03 / Luxury PDP Visual Experience', 'desc' => 'Designed high-converting product pages with zoomable leather textures and variant color chips.'],
      ['title' => '04 / Multi-Currency International Checkout', 'desc' => 'Integrated automated location-based currency conversion for global luxury shoppers.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Haute Couture Design System & Tokens',
    'asset_01_desc' => 'Curated editorial typography, rich neutral color ramps, and minimalist luxury product badges.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'E-Commerce UX // Asset 02',
    'asset_02_title'=> 'AJAX Slide-Out Cart & Upsell Engine',
    'asset_02_desc' => 'Instant cart drawer with cross-sell recommendation modules and 1-click checkout trigger.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Conversion // Asset 03',
    'asset_03_title'=> 'High-Converting PDP & Variant Selector',
    'asset_03_desc' => 'Mobile-optimized product page architecture capturing luxury buyer intent with zero lag.',
    'asset_03_points'=> [
      'Zero App Subscriptions: Pure native Liquid architecture eliminating app conflicts.',
      'Sub-Second Load Times: Optimized asset loading across international mobile networks.',
      '+42% Mobile Conversion: Seamless slideout cart driving immediate checkout completion.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=800&auto=format&fit=crop', 'tag' => 'Product Page', 'title' => 'Luxury Handbag Detail View'],
      ['img' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?q=80&w=800&auto=format&fit=crop', 'tag' => 'Mobile Checkout', 'title' => 'AJAX Slideout Cart Drawer'],
      ['img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Collection Grid', 'title' => 'Responsive Lookbook Archive']
    ],
    'metrics'       => [
      ['val' => '+42%', 'lbl' => 'Checkout Conversion', 'desc' => 'Increase in completed purchases following bespoke AJAX cart deployment.'],
      ['val' => '$0/mo', 'lbl' => 'App Subscription Bloat', 'desc' => 'Zero monthly SaaS fees by replacing 6 Shopify apps with native Liquid code.'],
      ['val' => '97/100', 'lbl' => 'Mobile UX Score', 'desc' => 'Flawless responsive browsing across iOS and Android luxury shoppers.']
    ],
    'live_url'      => 'https://victoriaslane.com/'
  ],

  'sweetermen-ng' => [
    'client_name'   => 'SweeterMen NG',
    'industry'      => 'E-Commerce // Luxury Horology & WooCommerce Custom Theme',
    'headline_main' => 'SweeterMen NG: Full-Stack',
    'headline_serif'=> 'WooCommerce Store',
    'lead'          => "SweeterMen NG required a high-conversion e-commerce platform for luxury men's accessories. We engineered a custom WooCommerce theme with zero plugin bloat, custom checkout hooks, and integrated paid Meta ad campaigns.",
    'pills'         => ['WooCommerce', 'Custom PHP', 'Paid Growth', 'Checkout CRO'],
    'meta_services' => 'WooCommerce & Paid Ads',
    'meta_stack'    => 'WordPress · WooCommerce · Meta Ads',
    'meta_link_url' => 'https://sweetermen.ng/',
    'meta_link_text'=> 'sweetermen.ng ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'SweeterMen NG was struggling with high cart abandonment rates and slow page loading times on their legacy WooCommerce setup.',
    'overview_p2'   => 'They needed a sleek custom storefront with an app-free 1-step checkout drawer, seamless mobile payment gateway wiring, and targeted ad funnels.',
    'overview_items'=> [
      ['title' => '01 / Custom WooCommerce Theme', 'desc' => 'Hand-coded lightweight PHP templates with zero third-party page builder bloat.'],
      ['title' => '02 / One-Page Instant Checkout', 'desc' => 'Engineered a streamlined single-step checkout flow reducing friction for impulse buyers.'],
      ['title' => '03 / Mobile-First PDP Layouts', 'desc' => 'High-impact product visual cards with dynamic installment payment calculations.'],
      ['title' => '04 / High-ROAS Meta Ads Funnels', 'desc' => 'Structured lookalike audience segmentation and dynamic product catalog retargeting campaigns.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Luxury Horology Design System',
    'asset_01_desc' => 'Dark obsidian surfaces, refined serif headers, and high-contrast gold price callouts.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'Checkout CRO // Asset 02',
    'asset_02_title'=> '1-Step Checkout Engine',
    'asset_02_desc' => 'Fast single-page checkout modal with instant Paystack payment triggers.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1508615039623-a25605d2b022?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Growth // Asset 03',
    'asset_03_title'=> 'Multi-Channel Paid Acquisition Engine',
    'asset_03_desc' => 'Targeted Meta and Google ad funnels generating consistent profitable ROAS for watch collections.',
    'asset_03_points'=> [
      'Sub-1s Load Time: Lightweight custom WooCommerce code accelerating checkout.',
      '4.2x ROAS: Profitable paid Meta campaigns targeting luxury timepiece buyers.',
      '+68% Cart Completion: Frictionless single-step mobile checkout.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=800&auto=format&fit=crop', 'tag' => 'Timepiece Showcase', 'title' => 'Luxury Watch Catalog Detail'],
      ['img' => 'https://images.unsplash.com/photo-1508615039623-a25605d2b022?q=80&w=800&auto=format&fit=crop', 'tag' => 'Checkout Flow', 'title' => 'Instant Mobile Checkout'],
      ['img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Ad Funnel', 'title' => 'Paid Acquisition Campaign']
    ],
    'metrics'       => [
      ['val' => '4.2x', 'lbl' => 'Paid Ad ROAS', 'desc' => 'Return on ad spend across targeted Meta advertising campaigns.'],
      ['val' => '+68%', 'lbl' => 'Checkout Completion', 'desc' => 'Reduction in mobile cart drop-off following 1-step checkout deployment.'],
      ['val' => '0.8s', 'lbl' => 'Page Load Speed', 'desc' => 'Instantaneous product catalog browsing with lightweight custom PHP code.']
    ],
    'live_url'      => 'https://sweetermen.ng/'
  ],

  'stride-plus-media' => [
    'client_name'   => 'Stride Radio',
    'industry'      => 'Media // Digital Marketing & Broadcast Growth',
    'headline_main' => 'Stride Plus Media: Brand Strategy',
    'headline_serif'=> '& Paid Acquisition',
    'lead'          => 'Stride Plus Media needed to expand listener acquisition for Stride Radio. We architected a multi-channel digital marketing engine combining targeted Meta Ads, Google Ads search campaigns, and conversion tracking to scale audience retention.',
    'pills'         => ['Digital Marketing', 'Meta Ads', 'Google Ads', 'Conversion Funnels'],
    'meta_services' => 'Digital Marketing & Strategy',
    'meta_stack'    => 'Meta Ads · Google Ads · GTM',
    'meta_link_url' => 'https://strideradio.ng/',
    'meta_link_text'=> 'strideradio.ng ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Stride Radio was looking to break through noisy digital media markets and capture loyal daily listeners without wasting budget on broad, un-targeted ad impressions.',
    'overview_p2'   => 'They needed server-side tracking infrastructure, high-converting ad creative copy, and audience segment funnels tailored to music and broadcast enthusiasts.',
    'overview_items'=> [
      ['title' => '01 / Full-Funnel Audience Strategy', 'desc' => 'Constructed multi-tiered ad sets capturing listeners across interest, genre, and demographic segments.'],
      ['title' => '02 / Server-Side Conversion Tracking', 'desc' => 'Configured Meta Conversions API and Google Tag Manager for high-precision stream telemetry.'],
      ['title' => '03 / High-Converting Audio Creative', 'desc' => 'Produced video teasers and audio snippets optimized for Instagram Reels and TikTok ad placements.'],
      ['title' => '04 / Retention & Re-Engagement Funnels', 'desc' => 'Automated remarketing workflows driving one-time visitors into daily active radio listeners.']
    ],
    'asset_01_meta' => 'Strategy // Asset 01',
    'asset_01_title'=> 'Paid Growth Campaign Architecture',
    'asset_01_desc' => 'Multi-channel ad funnels scaling daily active broadcast listeners.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'Analytics // Asset 02',
    'asset_02_title'=> 'Real-Time Telemetry & Listener Tracking',
    'asset_02_desc' => 'Custom Google Tag Manager container tracking audio player duration and retention events.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Scale // Asset 03',
    'asset_03_title'=> 'Broadcast Audience Expansion Engine',
    'asset_03_desc' => 'Proprietary marketing funnel driving sustained listener growth and commercial sponsor value.',
    'asset_03_points'=> [
      '+210% Stream Listenership: Massive surge in active broadcast listening hours.',
      '99.4% Attribution Precision: Server-side Conversions API bypassing browser ad blockers.',
      '3.8x Audience Retention: Retargeting funnels turning listeners into subscribers.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=800&auto=format&fit=crop', 'tag' => 'Campaign Matrix', 'title' => 'Paid Acquisition Strategy'],
      ['img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop', 'tag' => 'Telemetry', 'title' => 'Listener Analytics Dashboard'],
      ['img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Broadcast Studio', 'title' => 'Live Radio Studio Staging']
    ],
    'metrics'       => [
      ['val' => '+210%', 'lbl' => 'Active Listeners', 'desc' => 'Growth in daily digital broadcast streams in the first 60 days of campaign rollout.'],
      ['val' => '5.2x', 'lbl' => 'Ad Click-Through', 'desc' => 'High CTR achieved through bespoke video and audio teaser creatives.'],
      ['val' => '99.4%', 'lbl' => 'Attribution Precision', 'desc' => 'Server-side data attribution ensuring zero wasted ad expenditure.']
    ],
    'live_url'      => 'https://strideradio.ng/'
  ],

  'kiri-city-stays' => [
    'client_name'   => 'Kiri City Stays',
    'industry'      => 'Hospitality // Urban Short-Let & Direct Booking Platform',
    'headline_main' => 'Kiri City Stays: Direct Booking',
    'headline_serif'=> '& Luxury Stays',
    'lead'          => 'Kiri City Stays is a premier short-let apartment management agency. We engineered their direct booking web application, created their visual identity, and integrated local SEO frameworks to capture direct guest bookings.',
    'pills'         => ['Web Design', 'Booking Engine', 'Local SEO', 'Hospitality'],
    'meta_services' => 'Web Design & Booking',
    'meta_stack'    => 'WordPress · Custom Code',
    'meta_link_url' => 'https://kiricitystays.com/',
    'meta_link_text'=> 'kiricitystays.com ↗',
    'hero_img'      => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1600&auto=format&fit=crop',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Kiri City Stays wanted to reduce reliance on third-party OTA booking platforms and build a premium direct reservation portal for executive guests.',
    'overview_p2'   => 'They needed a clean mobile-first catalog showcasing luxury short-let suites, transparent night rates, and instant booking reservation forms.',
    'overview_items'=> [
      ['title' => '01 / Bespoke Direct Booking Portal', 'desc' => 'Engineered an in-house room reservation pipeline with instant availability checks.'],
      ['title' => '02 / High-Trust Brand Identity', 'desc' => 'Crafted an urban luxury aesthetic with dark slate tones and crisp typography.'],
      ['title' => '03 / Multi-Property Dynamic Catalog', 'desc' => 'Constructed responsive suite showcase pages with floor plan layouts and amenity filters.'],
      ['title' => '04 / Local SEO & Map Integration', 'desc' => 'Embedded Google Business schema and localized neighborhood guides driving organic searches.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Urban Hospitality Design Tokens',
    'asset_01_desc' => 'Slate grey, warm gold, and crisp bone white color ramps with modern typography.',
    'asset_01_img'  => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop',
    'asset_02_meta' => 'Booking Engine // Asset 02',
    'asset_02_title'=> 'Instant Suite Reservation Engine',
    'asset_02_desc' => 'Interactive date picker and real-time room availability calendar.',
    'asset_02_img'  => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop',
    'asset_03_meta' => 'Autonomy // Asset 03',
    'asset_03_title'=> 'Direct Booking Sovereignty Pipeline',
    'asset_03_desc' => 'Reclaiming pricing power and guest relationship data from third-party booking intermediaries.',
    'asset_03_points'=> [
      'Zero OTA Commissions: Maximized retained room margin with zero intermediary cuts.',
      'Automated Check-In: Instant WhatsApp confirmation with digital keycard access.',
      'Local Dominance: Top 3 search visibility for executive Lagos short-lets.'
    ],
    'asset_03_img'  => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200&auto=format&fit=crop',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop', 'tag' => 'Suite Showcase', 'title' => 'Executive Short-Let Living Room'],
      ['img' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop', 'tag' => 'Booking Engine', 'title' => 'Mobile Date Selection Flow'],
      ['img' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200&auto=format&fit=crop', 'tag' => 'Property Overview', 'title' => 'Responsive Suite Archive']
    ],
    'metrics'       => [
      ['val' => '+280%', 'lbl' => 'Direct Reservations', 'desc' => 'Shift toward direct website bookings within 90 days of launch.'],
      ['val' => '0%', 'lbl' => 'OTA Commission Loss', 'desc' => 'Zero intermediary fees on direct website customer transactions.'],
      ['val' => '94.8%', 'lbl' => 'Direct Guest Retention', 'desc' => 'Full guest contact details captured for automated repeat booking offers.']
    ],
    'live_url'      => 'https://kiricitystays.com/'
  ]
];

// Helper to locate theme image safely
function cr8v_cs_img_src($filename, $fallback = '') {
  if (empty($filename)) return '';
  if (filter_var($filename, FILTER_VALIDATE_URL)) return $filename;
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  if (file_exists($theme_dir . '/assets/img/case_studies/' . $filename)) {
    return $theme_uri . '/assets/img/case_studies/' . esc_attr($filename);
  }
  if (!empty($fallback) && file_exists($theme_dir . '/assets/img/case_studies/' . $fallback)) {
    return $theme_uri . '/assets/img/case_studies/' . esc_attr($fallback);
  }
  return $theme_uri . '/assets/img/case_studies/' . esc_attr($filename);
}

// Fallback for unconfigured or dynamic slugs — NEVER DUMP DUCH DATA ON OTHER POSTS
$curr_post_id = ($post instanceof WP_Post) ? $post->ID : (is_numeric(get_the_ID()) ? get_the_ID() : 0);
$curr_title   = ($post instanceof WP_Post) ? $post->post_title : (!empty($post_title) ? $post_title : 'Portfolio Case Study');
$curr_excerpt = ($post instanceof WP_Post && has_excerpt($curr_post_id)) ? get_the_excerpt($curr_post_id) : '';
$curr_thumb   = $curr_post_id ? (get_the_post_thumbnail_url($curr_post_id, 'full') ?: '') : '';

if ($matched_slug && isset($portfolio_data_matrix[$matched_slug])) {
  $active_data = $portfolio_data_matrix[$matched_slug];
} else {
  $active_data = [
    'client_name'   => $curr_title,
    'industry'      => 'Portfolio // Case Study',
    'headline_main' => $curr_title,
    'headline_serif'=> '',
    'lead'          => $curr_excerpt,
    'pills'         => [],
    'meta_services' => ($curr_post_id ? get_post_meta($curr_post_id, 'case_study_services', true) : '') ?: 'Design & Engineering',
    'meta_stack'    => ($curr_post_id ? get_post_meta($curr_post_id, 'case_study_stack', true) : '') ?: 'WordPress',
    'meta_link_url' => $curr_post_id ? get_post_meta($curr_post_id, 'case_study_link_url', true) : '',
    'meta_link_text'=> $curr_post_id ? get_post_meta($curr_post_id, 'case_study_link_text', true) : '',
    'hero_img'      => $curr_thumb,
    'overview_title'=> '',
    'overview_p1'   => '',
    'overview_p2'   => '',
    'overview_items'=> [],
    'asset_01_meta' => '',
    'asset_01_title'=> '',
    'asset_01_desc' => '',
    'asset_01_img'  => '',
    'asset_02_meta' => '',
    'asset_02_title'=> '',
    'asset_02_desc' => '',
    'asset_02_img'  => '',
    'asset_03_meta' => '',
    'asset_03_title'=> '',
    'asset_03_desc' => '',
    'asset_03_points'=> [],
    'asset_03_img'  => '',
    'gallery_header'=> '',
    'gallery'       => [],
    'metrics'       => [],
    'live_url'      => $curr_post_id ? get_post_meta($curr_post_id, 'case_study_live_url', true) : ''
  ];
}

get_header();
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');

  :root {
    --c8-paper-bg: #F9F9F8;
    --c8-paper-card: #FFFFFF;
    --c8-ink: #080808;
    --c8-sub: #555555;
    --c8-grid-line: rgba(8, 8, 8, 0.14);
    --c8-blue: #0047E1;
    --c8-blue-hi: #3D6BFF;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'Space Mono', monospace;
    --font-heading: 'Michroma', sans-serif;
  }

  .c8cs-root { position: relative; width: 100%; background: #FFFFFF; color: var(--c8-ink); font-family: var(--font-body); }
  .c8cs-wrap { max-width: 1340px; margin: 0 auto; padding: 2.5rem 2rem 3.5rem; position: relative; z-index: 2; }
  @media (max-width: 768px) { .c8cs-wrap { padding: 1.5rem 1.25rem 2.5rem; } }

  .c8cs-back-btn {
    font-family: var(--font-mono); font-size: 10px; color: #8A8A8A; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 0.08em; transition: color 0.2s ease; text-decoration: none; font-weight: 700; position: relative; z-index: 2;
  }
  .c8cs-back-btn:hover { color: var(--c8-blue); }

  .c8cs-label {
    font-family: var(--font-mono); font-size: 10px; letter-spacing: .25em; text-transform: uppercase; color: var(--c8-blue); display: inline-flex; align-items: center; gap: 10px; margin-bottom: 1.25rem;
  }
  .c8cs-label::before { content: '// '; color: var(--c8-blue); font-weight: 700; }

  .c8cs-headline {
    font-family: var(--font-heading);
    font-size: clamp(1.5rem, 5vw, 2.6rem);
    letter-spacing: 0.02em;
    line-height: 1.15;
    font-weight: 700;
    color: var(--c8-ink);
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    max-width: 1000px;
  }
  .c8cs-serif { font-family: var(--font-body); font-style: italic; text-transform: none; font-weight: 400; color: var(--c8-blue); }

  .c8cs-lead {
    font-size: 16px;
    font-weight: 300;
    color: var(--c8-sub);
    max-width: 860px;
    margin-bottom: 2.5rem;
    line-height: 1.7;
  }

  .fylla-pill-row { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.5rem; margin-bottom: 2.5rem; }
  .fylla-pill {
    border: 1px solid var(--c8-grid-line); background: #FAFAF7; padding: 0.4rem 0.9rem; font-family: var(--font-mono); font-size: 0.72rem; color: var(--c8-ink); font-weight: 700; border-radius: 4px !important; text-transform: uppercase;
  }

  .c8cs-hero { padding-top: 7rem; padding-bottom: 4rem; position: relative; background: #FFFFFF; border-bottom: 1px solid var(--c8-grid-line); }

  .c8cs-hero-atmos {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: auto; overflow: hidden;
  }
  .c8cs-atmos-svg { position: absolute; top: -10%; left: 0; width: 100%; height: 130%; }
  .c8cs-atmos-blob { filter: blur(1px); opacity: 0.35; }
  .c8cs-atmos-glow {
    position: absolute; top: 0; left: 0; width: 320px; height: 320px; border-radius: 50%;
    background: radial-gradient(circle, rgba(0, 71, 225, 0.35) 0%, rgba(0, 71, 225, 0) 70%);
    transform: translate(-50%, -50%); opacity: 0; transition: opacity 0.4s ease; will-change: transform; pointer-events: none;
  }
  .c8cs-hero-atmos.is-active .c8cs-atmos-glow { opacity: 1; }

  .c8cs-meta-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: transparent; margin-top: 3.5rem; position: relative; z-index: 2; overflow: hidden;
  }
  @media (max-width: 768px) { .c8cs-meta-grid { grid-template-columns: repeat(2, 1fr); margin-top: 1.5rem; } }

  .c8cs-meta-item { padding: 2rem 2.25rem; border-right: 1px solid var(--c8-grid-line); display: flex; flex-direction: column; justify-content: center; background: transparent; transition: background 0.35s ease; }
  .c8cs-meta-item:hover { background: #FAFAF7; }
  .c8cs-meta-item:last-child { border-right: none; }
  @media (max-width: 768px) {
    .c8cs-meta-item:nth-child(2n) { border-right: none; }
    .c8cs-meta-item:nth-child(1), .c8cs-meta-item:nth-child(2) { border-bottom: 1px solid var(--c8-grid-line); }
  }

  .c8cs-meta-lbl { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.4rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-meta-val { font-size: 14.5px; font-weight: 700; color: var(--c8-ink); }

  .c8cs-grow-media-wrapper { width: 100%; padding: 1.5rem 0; display: flex; justify-content: center; background: transparent; overflow: hidden; }
  @media (max-width: 768px) { .c8cs-grow-media-wrapper { padding: 1rem 0; } }

  .c8cs-main-img-box {
    width: 85%; max-width: 1200px; border-radius: 4px !important; overflow: hidden; box-shadow: 0 20px 50px rgba(8, 8, 8, 0.08); border: 1px solid var(--c8-grid-line); position: relative; z-index: 2; transition: width 0.15s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .c8cs-main-img-box img { width: 100%; height: auto; display: block; object-fit: cover; max-height: 700px; }

  .c8cs-split-section { display: grid; grid-template-columns: 1fr 1.3fr; gap: 0; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; margin: clamp(2.5rem, 4vw, 3.5rem) 0; }
  @media (max-width: 900px) { .c8cs-split-section { grid-template-columns: 1fr; margin: 2rem 0; } }

  .c8cs-split-left { padding: clamp(2.5rem, 3.5vw, 3.75rem) clamp(1.75rem, 3vw, 3.25rem); border-right: 1px solid var(--c8-grid-line); background: #FFFFFF; position: sticky; top: 100px; align-self: start; height: fit-content; }
  @media (max-width: 900px) { .c8cs-split-left { position: relative; top: 0; border-right: none; border-bottom: 1px solid var(--c8-grid-line); padding: 2rem 1.5rem; } }

  .c8cs-split-right { background: #FAFAF7; display: flex; flex-direction: column; }
  .c8cs-split-title { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 700; text-transform: uppercase; letter-spacing: 0.02em; line-height: 1.2; color: var(--c8-ink); margin-bottom: 1.25rem; }
  .c8cs-body-content p { font-size: 15px; color: var(--c8-sub); margin-bottom: 1.25rem; line-height: 1.7; font-weight: 300; }

  .fylla-value-item { padding: clamp(1.75rem, 2.5vw, 2.5rem) clamp(1.5rem, 2.5vw, 2.75rem); border-bottom: 1px solid var(--c8-grid-line); display: flex; gap: 1.5rem; align-items: flex-start; transition: background 0.35s ease; background: #FAFAF7; }
  @media (max-width: 600px) { .fylla-value-item { padding: 1.5rem 1.25rem; gap: 1rem; } }
  .fylla-value-item:hover { background: #FFFFFF; }
  .fylla-value-item:last-child { border-bottom: none; }

  .fylla-value-icon-box {
    width: 44px; height: 44px; border-radius: 4px !important; background: rgba(0, 71, 225, 0.08); border: 1px solid rgba(0, 71, 225, 0.2); display: flex; align-items: center; justify-content: center; color: var(--c8-blue); flex-shrink: 0; margin-top: 0.2rem;
  }
  .fylla-value-icon-box svg { width: 22px; height: 22px; stroke: var(--c8-blue); fill: none; stroke-width: 2; }

  .fylla-value-h3 { font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.5rem; }
  .fylla-value-desc { font-size: 0.9rem; color: var(--c8-sub); line-height: 1.6; }

  /* ── SECTION 4: CORE DELIVERABLES (2-UP 16:9 GRID) ── */
  .c8cs-deliverables-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-deliverables-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-deliverables-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-deliverables-header { padding: 1.75rem 1.25rem; } }
  .c8cs-deliverables-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0; background: var(--c8-grid-line); }
  @media (max-width: 900px) { .c8cs-deliverables-grid { grid-template-columns: 1fr; } }
  .c8cs-deliverable-card { background: #FFFFFF; padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); display: flex; flex-direction: column; justify-content: space-between; border-right: 1px solid var(--c8-grid-line); border-bottom: 1px solid var(--c8-grid-line); transition: background 0.35s ease; }
  .c8cs-deliverable-card:last-child { border-right: none; }
  @media (max-width: 900px) { .c8cs-deliverable-card { border-right: none; } }
  @media (max-width: 600px) { .c8cs-deliverable-card { padding: 1.75rem 1.25rem; } }
  .c8cs-deliverable-card:hover { background: #FAFAF7; }
  .c8cs-deliverable-meta { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.65rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-deliverable-title { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.45rem; letter-spacing: 0.01em; }
  .c8cs-deliverable-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 1.5rem; }
  .c8cs-deliverable-img-box { width: 100%; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); margin-top: auto; background: #080808; aspect-ratio: 16 / 9; }
  .c8cs-deliverable-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform 0.5s ease; }
  .c8cs-deliverable-card:hover .c8cs-deliverable-img-box img { transform: scale(1.02); }

  /* ── SECTION 5: SOVEREIGNTY ARCHITECTURE (3:4 SPLIT) ── */
  .c8cs-sovereignty-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-sovereignty-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-sovereignty-split { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 0; background: var(--c8-grid-line); align-items: stretch; }
  @media (max-width: 960px) { .c8cs-sovereignty-split { grid-template-columns: 1fr; } }
  .c8cs-sovereignty-left { background: #FFFFFF; padding: clamp(2.5rem, 3.5vw, 3.75rem) clamp(1.75rem, 3vw, 3.25rem); display: flex; flex-direction: column; justify-content: center; border-right: 1px solid var(--c8-grid-line); }
  @media (max-width: 960px) { .c8cs-sovereignty-left { border-right: none; border-bottom: 1px solid var(--c8-grid-line); padding: 2rem 1.5rem; } }
  .c8cs-sovereignty-right { background: #FAFAF7; padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); display: flex; align-items: center; justify-content: center; }
  @media (max-width: 960px) { .c8cs-sovereignty-right { padding: 2rem 1.25rem; } }
  .c8cs-sovereignty-img-box { width: 100%; max-width: 440px; aspect-ratio: 3 / 4; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); background: #080808; box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
  .c8cs-sovereignty-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; }

  /* ── SECTION 6: PURE VISUAL GALLERY (CLEAN STREAM — NO SLOP) ── */
  .c8cs-stream-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-stream-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-stream-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-stream-header { padding: 1.75rem 1.25rem; } }
  .c8cs-stream-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; background: var(--c8-grid-line); }
  @media (max-width: 992px) { .c8cs-stream-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .c8cs-stream-grid { grid-template-columns: 1fr; } }
  .c8cs-stream-cell { background: #FFFFFF; padding: clamp(1.25rem, 2vw, 1.75rem); display: flex; flex-direction: column; border-right: 1px solid var(--c8-grid-line); border-bottom: 1px solid var(--c8-grid-line); transition: background 0.35s ease; }
  .c8cs-stream-cell:nth-child(3n) { border-right: none; }
  @media (max-width: 992px) { .c8cs-stream-cell:nth-child(3n) { border-right: 1px solid var(--c8-grid-line); } .c8cs-stream-cell:nth-child(2n) { border-right: none; } }
  @media (max-width: 600px) { .c8cs-stream-cell { border-right: none; padding: 1.25rem 1.25rem 1.5rem; } }
  .c8cs-stream-cell:hover { background: #FAFAF7; }
  .c8cs-stream-img-box { width: 100%; aspect-ratio: 16 / 9; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); background: #080808; margin-bottom: 1rem; }
  .c8cs-stream-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform 0.5s ease; }
  .c8cs-stream-cell:hover .c8cs-stream-img-box img { transform: scale(1.03); }
  .c8cs-stream-cell-info { display: flex; flex-direction: column; gap: 0.2rem; }
  .c8cs-stream-cell-tag { font-family: var(--font-mono); font-size: 8.5px; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; letter-spacing: 0.12em; }
  .c8cs-stream-cell-title { font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; letter-spacing: 0.01em; }

  .c8cs-metrics-bg { background: #FFFFFF; padding: clamp(3rem, 5vw, 5rem) 0; }
  .c8cs-metrics-outer-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-metrics-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-metrics-header { padding: 1.75rem 1.25rem; } }
  .c8cs-metrics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 768px) { .c8cs-metrics-grid { grid-template-columns: 1fr; } }

  .c8cs-metric-card { background: #FAFAF7; border-right: 1px solid var(--c8-grid-line); padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); display: flex; flex-direction: column; transition: background 0.35s ease; }
  .c8cs-metric-card:nth-child(even) { background: #FFFFFF; }
  .c8cs-metric-card:hover { background: #F4F5F7; }
  .c8cs-metric-card:last-child { border-right: none; }
  @media (max-width: 768px) {
    .c8cs-metric-card { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
    .c8cs-metric-card:last-child { border-bottom: none; }
  }

  .c8cs-metric-val { font-family: var(--font-heading); font-size: clamp(2.4rem, 4vw, 3rem); font-weight: 700; color: var(--c8-blue); line-height: 1; margin-bottom: 1rem; }
  .c8cs-metric-lbl { font-family: var(--font-mono); font-size: 9px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.65rem; font-weight: 700; }
  .c8cs-metric-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; }

  .c8cs-status-badge {
    background: rgba(0, 191, 99, 0.04); border: 1px solid rgba(0, 191, 99, 0.25);
    padding: 1rem 1.5rem; border-radius: 4px !important; display: inline-flex; flex-direction: column; align-items: flex-start;
    margin-top: auto; text-decoration: none; transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease; cursor: pointer;
  }
  .c8cs-status-badge:hover { background: rgba(0, 191, 99, 0.08); border-color: rgba(0, 191, 99, 0.4); transform: translateY(-2px); }
  .c8cs-status-lbl { font-family: var(--font-mono); font-size: 8px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px; }
  .c8cs-status-val { font-family: var(--font-heading); font-size: 10.5px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 8px; line-height: 1.2; }
  .c8cs-checkmark-circle { display: inline-flex; align-items: center; justify-content: center; width: 16px; height: 16px; border-radius: 50%; background: #00BF63; color: #FFFFFF; font-size: 10px; font-weight: bold; }

  .c8cs-related-paper-outer { background: #FFFFFF; padding: clamp(3rem, 5vw, 5rem) 0; width: 100%; }
  .c8cs-related-matrix-box { max-width: 1340px; margin: 0 auto; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-related-matrix-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-related-matrix-header { padding: 1.75rem 1.25rem; } }
  .c8cs-related-matrix-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 900px) { .c8cs-related-matrix-grid { grid-template-columns: 1fr; } }

  .c8cs-related-cell { padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); border-right: 1px solid var(--c8-grid-line); background: #FAFAF7; display: flex; flex-direction: column; justify-content: space-between; text-decoration: none; color: var(--c8-ink); transition: background 0.35s ease; }
  .c8cs-related-cell:nth-child(even) { background: #FFFFFF; }
  .c8cs-related-cell:last-child { border-right: none; }
  .c8cs-related-cell:hover { background: #F4F5F7; }
  @media (max-width: 900px) {
    .c8cs-related-cell { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
    .c8cs-related-cell:last-child { border-bottom: none; }
  }

  .c8cs-related-cell-tag { font-family: var(--font-mono); font-size: 10px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; margin-bottom: 0.65rem; }
  .c8cs-related-cell-title { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.75rem; line-height: 1.3; }
  .c8cs-related-cell-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 1.75rem; }
  .c8cs-related-cell-link { font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.2s ease; }
  .c8cs-related-cell:hover .c8cs-related-cell-link { gap: 10px; }
</style>

<div class="c8cs-root">
  <!-- Section 1: Hero Section -->
  <section class="c8cs-hero">
    <div class="c8cs-hero-atmos" data-c8cs-atmos>
      <svg class="c8cs-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <filter id="c8csGoo" x="-50%" y="-50%" width="200%" height="200%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="7" result="turb">
              <animate attributeName="baseFrequency" values="0.008 0.02;0.02 0.05;0.008 0.02" dur="16s" repeatCount="indefinite"/>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turb" scale="42" xChannelSelector="R" yChannelSelector="G"/>
            <feGaussianBlur stdDeviation="4"/>
          </filter>
        </defs>
        <g filter="url(#c8csGoo)">
          <circle class="c8cs-atmos-blob" cx="80" cy="60" r="70" fill="#0047E1">
            <animate attributeName="cx" values="80;145;55;80" dur="19s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="60;35;95;60" dur="19s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8cs-atmos-blob" cx="220" cy="55" r="55" fill="#3D6BFF">
            <animate attributeName="cx" values="220;165;265;220" dur="23s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="55;95;25;55" dur="23s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8cs-atmos-blob" cx="330" cy="70" r="45" fill="#7C93FF">
            <animate attributeName="cx" values="330;285;365;330" dur="15s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="70;105;45;70" dur="15s" repeatCount="indefinite"/>
          </circle>
        </g>
      </svg>
    </div>
    <div class="c8cs-atmos-glow" data-c8cs-glow></div>

    <div class="c8cs-wrap" style="padding-top: 1rem; padding-bottom: 2rem;">
      <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8cs-back-btn">&larr; Back to Portfolio</a>
      
      <div class="c8cs-label">Case Study // <?php echo esc_html($active_data['industry']); ?></div>
      <h1 class="c8cs-headline"><?php echo esc_html($active_data['headline_main']); ?> <span class="c8cs-serif"><?php echo esc_html($active_data['headline_serif']); ?></span></h1>
      <p class="c8cs-lead"><?php echo esc_html($active_data['lead']); ?></p>
      
      <div class="fylla-pill-row">
        <?php foreach ($active_data['pills'] as $pill): ?>
          <span class="fylla-pill"><?php echo esc_html($pill); ?></span>
        <?php endforeach; ?>
      </div>

      <div class="c8cs-meta-grid">
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Client</span>
          <span class="c8cs-meta-val"><?php echo esc_html($active_data['client_name']); ?></span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Services</span>
          <span class="c8cs-meta-val"><?php echo esc_html($active_data['meta_services']); ?></span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Stack</span>
          <span class="c8cs-meta-val"><?php echo esc_html($active_data['meta_stack']); ?></span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Link</span>
          <span class="c8cs-meta-val"><a href="<?php echo esc_url($active_data['meta_link_url']); ?>" target="_blank" rel="noopener" style="color: #0047E1; text-decoration: underline;"><?php echo esc_html($active_data['meta_link_text']); ?></a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Scroll-Grow Media (Conditional) -->
  <?php if (!empty($active_data['hero_img'])): ?>
    <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
      <div class="c8cs-main-img-box" id="c8cs-grow-target">
        <img src="<?php echo cr8v_cs_img_src($active_data['hero_img']); ?>" alt="<?php echo esc_attr($active_data['client_name']); ?> case study hero showcase">
      </div>
    </div>
  <?php endif; ?>

  <!-- Section 3: Strategic Overview (Conditional) -->
  <?php if (!empty($active_data['overview_items']) || !empty($active_data['overview_p1'])): ?>
    <section class="c8cs-wrap">
      <div class="c8cs-split-section">
        <div class="c8cs-split-left">
          <div class="c8cs-label">Overview</div>
          <h2 class="c8cs-split-title"><?php echo wp_kses_post($active_data['overview_title'] ?: 'The Strategic Challenge'); ?></h2>
          <div class="c8cs-body-content">
            <?php if (!empty($active_data['overview_p1'])): ?><p><?php echo esc_html($active_data['overview_p1']); ?></p><?php endif; ?>
            <?php if (!empty($active_data['overview_p2'])): ?><p><?php echo esc_html($active_data['overview_p2']); ?></p><?php endif; ?>
          </div>
        </div>

        <div class="c8cs-split-right">
          <?php foreach ($active_data['overview_items'] as $item): ?>
            <div class="fylla-value-item">
              <div class="fylla-value-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
              <div>
                <h3 class="fylla-value-h3"><?php echo esc_html($item['title']); ?></h3>
                <p class="fylla-value-desc"><?php echo esc_html($item['desc']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Section 4: Core Technical Deliverables (Unified Suite 01, 02, 03) -->
  <?php if (!empty($active_data['asset_01_title']) || !empty($active_data['asset_02_title']) || !empty($active_data['asset_03_title'])): ?>
    <section class="c8cs-deliverables-section">
      <div class="c8cs-wrap">
        <div class="c8cs-deliverables-box">
          <div class="c8cs-deliverables-header">
            <div class="c8cs-label">Design &amp; Engineering</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Core Technical Deliverables</h2>
          </div>

          <?php if (!empty($active_data['asset_01_title']) || !empty($active_data['asset_02_title'])): ?>
            <div class="c8cs-deliverables-grid">
              <?php if (!empty($active_data['asset_01_title'])): ?>
                <div class="c8cs-deliverable-card">
                  <div>
                    <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_01_meta']); ?></div>
                    <h3 class="c8cs-deliverable-title"><?php echo esc_html($active_data['asset_01_title']); ?></h3>
                    <p class="c8cs-deliverable-desc"><?php echo esc_html($active_data['asset_01_desc']); ?></p>
                  </div>
                  <?php if (!empty($active_data['asset_01_img'])): ?>
                    <div class="c8cs-deliverable-img-box">
                      <img src="<?php echo cr8v_cs_img_src($active_data['asset_01_img']); ?>" alt="<?php echo esc_attr($active_data['asset_01_title']); ?>">
                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <?php if (!empty($active_data['asset_02_title'])): ?>
                <div class="c8cs-deliverable-card">
                  <div>
                    <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_02_meta']); ?></div>
                    <h3 class="c8cs-deliverable-title"><?php echo esc_html($active_data['asset_02_title']); ?></h3>
                    <p class="c8cs-deliverable-desc"><?php echo esc_html($active_data['asset_02_desc']); ?></p>
                  </div>
                  <?php if (!empty($active_data['asset_02_img'])): ?>
                    <div class="c8cs-deliverable-img-box">
                      <img src="<?php echo cr8v_cs_img_src($active_data['asset_02_img']); ?>" alt="<?php echo esc_attr($active_data['asset_02_title']); ?>">
                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($active_data['asset_03_title'])): ?>
            <div class="c8cs-sovereignty-split" style="border-top: 1px solid var(--c8-grid-line);">
              <div class="c8cs-sovereignty-left">
                <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_03_meta']); ?></div>
                <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 1.25rem;"><?php echo esc_html($active_data['asset_03_title']); ?></h2>
                <p style="font-size: 15px; color: var(--c8-sub); line-height: 1.7; margin-bottom: 1.5rem; font-weight: 300;"><?php echo esc_html($active_data['asset_03_desc']); ?></p>
                <?php if (!empty($active_data['asset_03_points'])): ?>
                  <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 0.5rem;">
                    <?php foreach ($active_data['asset_03_points'] as $idx => $pt): ?>
                      <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span style="color: var(--c8-blue); font-weight: 700; font-family: var(--font-mono); font-size: 13px;">0<?php echo $idx + 1; ?></span>
                        <span style="font-size: 14px; color: var(--c8-ink); line-height: 1.5;"><?php echo esc_html($pt); ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>

              <?php if (!empty($active_data['asset_03_img'])): ?>
                <div class="c8cs-sovereignty-right">
                  <div class="c8cs-sovereignty-img-box">
                    <img src="<?php echo cr8v_cs_img_src($active_data['asset_03_img']); ?>" alt="<?php echo esc_attr($active_data['asset_03_title']); ?>">
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Section 6: Pure Visual Gallery Stream (Conditional) -->
  <?php if (!empty($active_data['gallery'])): ?>
    <section class="c8cs-stream-section">
      <div class="c8cs-wrap">
        <div class="c8cs-stream-box">
          <div class="c8cs-stream-header">
            <div class="c8cs-label">Visual Gallery</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;"><?php echo esc_html($active_data['gallery_header'] ?: 'Production Gallery'); ?></h2>
          </div>

          <div class="c8cs-stream-grid">
            <?php foreach ($active_data['gallery'] as $gItem): ?>
              <div class="c8cs-stream-cell">
                <div class="c8cs-stream-img-box">
                  <img src="<?php echo cr8v_cs_img_src($gItem['img']); ?>" alt="<?php echo esc_attr($gItem['title']); ?>">
                </div>
                <div class="c8cs-stream-cell-info">
                  <span class="c8cs-stream-cell-tag"><?php echo esc_html($gItem['tag']); ?></span>
                  <h3 class="c8cs-stream-cell-title"><?php echo esc_html($gItem['title']); ?></h3>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Section 7: Outcomes Metrics Matrix (Conditional) -->
  <?php if (!empty($active_data['metrics'])): ?>
    <section class="c8cs-metrics-bg">
      <div class="c8cs-wrap">
        <div class="c8cs-metrics-outer-box">
          <div class="c8cs-metrics-header">
            <div class="c8cs-label">Impact</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Measured Outcomes &amp; System Performance</h2>
          </div>

          <div class="c8cs-metrics-grid">
            <?php foreach ($active_data['metrics'] as $mIdx => $m): ?>
              <div class="c8cs-metric-card">
                <div class="c8cs-metric-val"><?php echo esc_html($m['val']); ?></div>
                <div class="c8cs-metric-lbl"><?php echo esc_html($m['lbl']); ?></div>
                <p class="c8cs-metric-desc" <?php if ($mIdx === count($active_data['metrics']) - 1 && !empty($active_data['live_url'])) echo 'style="margin-bottom: 1.5rem;"'; ?>><?php echo esc_html($m['desc']); ?></p>
                
                <?php if ($mIdx === count($active_data['metrics']) - 1 && !empty($active_data['live_url'])): ?>
                  <a href="<?php echo esc_url($active_data['live_url']); ?>" target="_blank" rel="noopener" class="c8cs-status-badge">
                    <div class="c8cs-status-lbl">Production Verification</div>
                    <div class="c8cs-status-val">
                      <span class="c8cs-checkmark-circle">&#10003;</span>
                      <span>Visit Live Site &rarr;</span>
                    </div>
                  </a>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Standard Post Content Fallback for unconfigured cases -->
  <?php if (empty($matched_slug) && have_posts()): ?>
    <div class="c8cs-wrap">
      <div class="c8cs-standard-body">
        <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- Section 8: Related Projects Matrix -->
  <section class="c8cs-related-paper-outer">
    <div class="c8cs-wrap">
      <div class="c8cs-related-matrix-box">
        <div class="c8cs-related-matrix-header">
          <div class="c8cs-label">Selected Work</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Explore Related Case Studies</h2>
        </div>

        <div class="c8cs-related-matrix-grid">
          <?php
          $related_keys = ['the-duch-apartments', 'mkenny-properties', 'wp-publishion-ai', 'blvck-hair-ng', 'bridgepoint-compliance', 'victorias-lane'];
          $rendered = 0;
          foreach ($related_keys as $rKey):
            if ($rKey === $matched_slug) continue;
            if ($rendered >= 3) break;
            $rData = $portfolio_data_matrix[$rKey] ?? null;
            if (!$rData) continue;
            $rendered++;
          ?>
            <a href="<?php echo esc_url(home_url('/portfolio/' . $rKey . '/')); ?>" class="c8cs-related-cell">
              <div>
                <div class="c8cs-related-cell-tag"><?php echo esc_html($rData['industry']); ?></div>
                <h3 class="c8cs-related-cell-title"><?php echo esc_html($rData['client_name']); ?></h3>
                <p class="c8cs-related-cell-desc"><?php echo esc_html(wp_trim_words($rData['lead'], 18)); ?></p>
              </div>
              <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Homepage Pre-Footer CTA Part -->
  <?php get_template_part('parts/prototype-cta'); ?>

</div><!-- End c8cs-root -->

<!-- Parity JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var root = document.querySelector('.c8cs-root');
    var atmos = root ? root.querySelector('[data-c8cs-atmos]') : null;
    var glow = root ? root.querySelector('[data-c8cs-glow]') : null;
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

    if (atmos && glow && canHover && !reduceMotion) {
      atmos.addEventListener('mousemove', function (e) {
        var r = atmos.getBoundingClientRect();
        glow.style.left = (e.clientX - r.left) + 'px';
        glow.style.top = (e.clientY - r.top) + 'px';
      });
      atmos.addEventListener('mouseenter', function () { atmos.classList.add('is-active'); });
      atmos.addEventListener('mouseleave', function () { atmos.classList.remove('is-active'); });
    }

    var growTarget = document.getElementById('c8cs-grow-target');
    var growTrigger = document.getElementById('c8cs-grow-trigger');

    if (growTarget && growTrigger && !reduceMotion) {
      function handleGrowScroll() {
        var rect = growTrigger.getBoundingClientRect();
        var viewportH = window.innerHeight;
        var start = viewportH * 0.9;
        var end = viewportH * 0.2;
        var progress = 0;
        if (rect.top < start) {
          progress = (start - rect.top) / (start - end);
          if (progress > 1) progress = 1;
          if (progress < 0) progress = 0;
        }
        var widthVal = 85 + (15 * progress);
        var maxWVal = 1200 + ((window.innerWidth - 1200) * progress);
        growTarget.style.width = widthVal + '%';
        growTarget.style.maxWidth = maxWVal + 'px';
      }
      window.addEventListener('scroll', handleGrowScroll);
      window.addEventListener('resize', handleGrowScroll);
      handleGrowScroll();
    }
  });
</script>

<?php get_footer(); ?>
