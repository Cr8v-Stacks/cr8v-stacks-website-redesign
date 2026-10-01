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
  'bridgepoint-compliance' => ['bridgepoint-compliance', 'bridgepoint-consulting', 'compliance-analysis', 'compliance-checker'],
  'bridgepoint-advisory'   => ['bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints'],
  'victorias-lane'         => ['victorias-lane', 'victoria-lane', 'victoriaslane'],
  'sweetermen-ng'          => ['sweetermen-ng', 'sweetermen'],
  'stride-plus-media'      => ['stride-plus-media', 'stride-plus', 'strideradio', 'stride'],
  'kiri-city-stays'        => ['kiri-city-stays', 'kiri-city', 'kiricitystays', 'kiri'],
  'crux-nxtion'            => ['crux-nxtion', 'cruxnxtion', 'crux-nation', 'crux'],
  'red-cap-entertainment'  => ['red-cap-entertainment', 'red-cap', 'redcap-entertainment', 'redcap'],
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
    'status'        => 'published',
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
      'Automated Guest Onboarding: Instant direct messaging and email reservation confirmations with check-in access codes.',
      'Local Search Domination: Outranking intermediary listing sites for branded Lekki serviced apartment searches.'
    ],
    'asset_03_img'  => 'duch_asset_03_ecosystem.webp',
    'gallery_label' => 'Guest Experience',
    'gallery_header'=> 'The Engineered Guest Experience in Production',
    'gallery'       => [
      ['img' => 'cs_duch_gallery_01_laptop.webp', 'tag' => 'Guest Discovery UX', 'title' => 'Frictionless Inventory Discovery & Room Tiering'],
      ['img' => 'cs_duch_gallery_02_macro.webp', 'tag' => 'Decision Architecture', 'title' => 'Transparent Rate Architecture & Trust Badging'],
      ['img' => 'cs_duch_gallery_05_calendar.webp', 'tag' => 'Availability API', 'title' => 'Real-Time Multi-Month Date Selection Engine'],
      ['img' => 'cs_duch_gallery_04_living.webp', 'tag' => 'Brand Immersion', 'title' => 'High-Yield Visual Immersion & Rate Justification'],
      ['img' => 'cs_duch_gallery_03_workspace.webp', 'tag' => 'Mobile Ergonomics', 'title' => 'Cross-Device Mobile Booking Parity'],
      ['img' => 'cs_duch_gallery_06_platform.webp', 'tag' => 'System Architecture', 'title' => 'Unified Direct Booking & Acquisition Ecosystem']
    ],
    'metrics'       => [
      ['val' => '+340%', 'lbl' => 'Direct Reservations', 'desc' => 'Surge in high-margin direct guest bookings bypassing third-party OTAs.'],
      ['val' => '0%', 'lbl' => 'OTA Commission Loss', 'desc' => 'Retained 100% of room rate revenues on in-house booking portal reservations.'],
      ['val' => '98.4%', 'lbl' => 'Direct Guest Retention', 'desc' => 'High returning guest engagement via sovereign customer data retention.']
    ],
    'live_url'      => 'https://theduchapartments.com/'
  ],

  'mkenny-properties' => [
    'status'        => 'published',
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
    'overview_p2'   => 'We engineered a bespoke WordPress development catalog: modular Elementor listing widgets, real-time AJAX taxonomy facet filtering across Manchester locations, property status flags (Completed, Ongoing, Investment Highlight), and automated direct broker dispatch.',
    'overview_items'=> [
      ['title' => '01 / Custom Elementor Widget Suite', 'desc' => 'Constructed drag-and-drop property cards and dynamic query loop builders tailored for the client editorial team.'],
      ['title' => '02 / Instant AJAX Facet Filter Matrix', 'desc' => 'Engineered custom query routines delivering instantaneous multi-facet filtering across price, status, and UK locations without page reloads.'],
      ['title' => '03 / Dynamic Manchester Map & Schema', 'desc' => 'Integrated interactive location maps and structured RealEstateListing JSON-LD schema for dominant Manchester property search visibility.'],
      ['title' => '04 / Direct Instant Messaging & Lead Routing', 'desc' => 'Engineered instant property metadata passing into direct broker messaging channels, accelerating UK investor deal conversion.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Design System Tokens & Brand Specification',
    'asset_01_desc' => 'Constructed atomic color tokens (Navy, Royal Blue, Emerald), Plus Jakarta Sans typography scales, property badge states (Completed, Investment Highlight, POA), and precision UI component standards.',
    'asset_01_img'  => 'mkenny_asset_01_design_system.webp',
    'asset_02_meta' => 'Query Engine // Asset 02',
    'asset_02_title'=> 'AJAX Property Filter Matrix',
    'asset_02_desc' => 'Engineered real-time facet filtering for Manchester locations (Stretford, Manchester City Centre), property types (Terraced, Detached), and budget sliders with zero page reloads.',
    'asset_02_img'  => 'mkenny_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Custom Post Architecture & Direct Lead Sovereignty',
    'asset_03_desc' => 'Rather than relying on third-party property portal aggregators that charge exorbitant listing fees and divert UK buyer leads to competing developments, we architected an independent WordPress property catalog pipeline that keeps all buyer data and direct inquiries proprietary to Mkenny.',
    'asset_03_points'=> [
      'Custom Post Type & ACF Schema: Clean property data architecture supporting floor plans, tenure, and development stages.',
      'Optimized Catalog Architecture: Instantaneous response times across high-density development catalogs.',
      'Automated Broker Routing: Dynamic pre-filled instant messaging dispatch connecting prospective buyers directly to the assigned development manager.'
    ],
    'asset_03_img'  => 'mkenny_asset_03_ecosystem.webp',
    'gallery_label' => 'Development Showcase',
    'gallery_header'=> 'Interactive Property Archive & Direct Broker Pipelines',
    'gallery'       => [
      ['img' => 'mkenny_gallery_01.webp', 'tag' => 'Catalog Architecture', 'title' => 'Dynamic Multi-Scheme Property Archive & Faceted Catalog'],
      ['img' => 'mkenny_gallery_02.webp', 'tag' => 'Listing UX', 'title' => 'Single Development Deep-Dive & Investment Specs'],
      ['img' => 'mkenny_gallery_03.webp', 'tag' => 'Mobile Acquisition', 'title' => 'On-Site Direct Messaging & Instant Buyer Dispatch'],
      ['img' => 'mkenny_gallery_04.webp', 'tag' => 'Editorial Tooling', 'title' => 'Custom Elementor Dynamic Loop Widget Controls'],
      ['img' => 'mkenny_gallery_05.webp', 'tag' => 'Geo Intelligence', 'title' => 'Interactive Manchester Neighborhood Amenity Map'],
      ['img' => 'mkenny_gallery_06.webp', 'tag' => 'System Deployment', 'title' => 'Master Real Estate Catalog & Direct Acquisition Engine']
    ],
    'metrics'       => [
      ['val' => '+180%', 'lbl' => 'Qualified Buyer Leads', 'desc' => 'Proprietary lead capture architecture routing UK investor inquiries directly to internal sales brokers.'],
      ['val' => '0%', 'lbl' => 'Portal Dependency', 'desc' => 'Eliminated reliance on third-party aggregator listing fees for direct development sales.'],
      ['val' => '96.8%', 'lbl' => 'First-Touch Lead Capture', 'desc' => 'Direct buyer inquiries retained in internal CRM without third-party lead poaching.']
    ],
    'live_url'      => 'https://mkennyproperties.com/'
  ],

  'wp-publishion-ai' => [
    'status'        => 'published',
    'client_name'   => 'WP Publishion AI',
    'industry'      => 'AI MVP // Autonomous Multi-LLM Content Engine',
    'headline_main' => 'WP Publishion AI: Autonomous Editorial &',
    'headline_serif'=> 'Multi-LLM Engine',
    'lead'          => 'WP Publishion AI is our proprietary AI-powered WordPress publishing application, architected to automate fact-verified, SEO-optimized editorial drafting directly within WordPress core via Claude 3.5, Gemini 1.5 Pro, and OpenAI.',
    'pills'         => ['AI MVP', 'Multi-LLM Pipeline', 'WordPress REST API', 'Brave Search API'],
    'meta_services' => 'AI System Architecture, Full-Stack SaaS Engineering',
    'meta_stack'    => 'WordPress · Python · Claude / OpenAI / Gemini APIs',
    'meta_link_url' => home_url('/dev-playground/wp-publishion-ai/'),
    'meta_link_text'=> 'cr8vstacks.com ↗',
    'hero_img'      => 'case_study_wp_publishion.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Publishers and agencies struggle with generic AI content that hallucinates facts, lacks structured schema markup, and requires extensive manual copy-pasting into CMS workflows.',
    'overview_p2'   => 'We built WP Publishion AI from the ground up: an autonomous multi-LLM orchestration pipeline with integrated Brave Search fact-checking, automated internal linking, and direct REST API block editor publishing.',
    'overview_items'=> [
      ['title' => '01 / Multi-LLM Orchestration', 'desc' => 'Integrated Claude 3.5 Sonnet, OpenAI GPT-4o, and Gemini 1.5 Pro with automatic fallback routing.'],
      ['title' => '02 / Real-Time Fact Verification', 'desc' => 'Connected Brave Search API to verify claims and insert live citations prior to publication.'],
      ['title' => '03 / Native WordPress Core Bridge', 'desc' => 'Direct Gutenberg block generation eliminating all external SaaS copy-pasting.'],
      ['title' => '04 / Automated Schema & Entities', 'desc' => 'Generates Article, FAQPage, and Entity JSON-LD schemas automatically.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Multi-LLM Parameter & UI Token Matrix',
    'asset_01_desc' => 'Constructed atomic color tokens (Obsidian, Slate, Royal Blue, Mint), Space Mono telemetry scales, model selector pills (Claude, Gemini, GPT-4o), and 6-stage workflow components.',
    'asset_01_img'  => 'wp_publishion_asset_01_design_system.webp',
    'asset_02_meta' => 'Internal Linking // Asset 02',
    'asset_02_title'=> 'AI Link Builder & Anchor Optimization Matrix',
    'asset_02_desc' => 'Engineered automated internal link recommendation routines, anchor text passage scoring, and orphaned page detection directly within the WordPress dashboard.',
    'asset_02_img'  => 'wp_publishion_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Autonomous Multi-LLM Content Sovereignty Pipeline',
    'asset_03_desc' => 'Eliminated third-party SaaS subscription markup through direct API orchestration, integrating live Brave Search verification and native Gutenberg core block generation.',
    'asset_03_points'=> [
      'Direct API Token Economics: Reduces per-article drafting costs to $0.0093 compared to recurring $99/mo SaaS tools.',
      'Live Brave Search Grounding: Validates facts and injects real-time citations prior to WordPress draft creation.',
      'Native Gutenberg Core Bridge: 1-click publishing directly to WordPress draft queues as native structured blocks.'
    ],
    'asset_03_img'  => 'wp_publishion_asset_03_ecosystem.webp',
    'gallery_label' => 'Application Ecosystem',
    'gallery_header'=> 'Autonomous Editorial Workflow & Telemetry in Production',
    'gallery'       => [
      ['img' => 'publishion_gallery_01.webp', 'tag' => 'Production Telemetry', 'title' => 'Real-Time Multi-LLM API Spend & Article Dashboard'],
      ['img' => 'publishion_gallery_02.webp', 'tag' => 'Cluster Engine', 'title' => 'Pillar Page Generator & Topic Cluster Planning'],
      ['img' => 'publishion_gallery_03.webp', 'tag' => 'Anchor Optimization', 'title' => 'Anchor Text Optimization & Passage Relevance Engine'],
      ['img' => 'publishion_gallery_04.webp', 'tag' => 'SaaS Economics', 'title' => 'Self-Hosted Zero-Markup API Sovereignty Engine'],
      ['img' => 'publishion_gallery_05.webp', 'tag' => 'Cost Transparency', 'title' => 'Real-Time Token Telemetry & Monthly Spend Scorecard'],
      ['img' => 'publishion_gallery_06.webp', 'tag' => 'System Architecture', 'title' => 'Master Autonomous WordPress AI Publishing Engine']
    ],
    'metrics'       => [
      ['val' => '3', 'lbl' => 'LLMs Integrated', 'desc' => 'Claude 3.5, Gemini 1.5 Pro, and GPT-4o unified in one pipeline.'],
      ['val' => '5.4x', 'lbl' => 'Publishing Velocity', 'desc' => 'Reduction in editorial drafting hours from outline to WordPress block staging.'],
      ['val' => '99.2%', 'lbl' => 'API Reliability', 'desc' => 'Self-hosted API orchestration with automatic model fallback redundancy.']
    ],
    'live_url'      => home_url('/dev-playground/wp-publishion-ai/')
  ],

  'blvck-hair-ng' => [
    'status'        => 'published',
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
    'asset_01_meta' => 'Liquid Storefront Architecture // Asset 01',
    'asset_01_title'=> 'Custom Shopify Liquid Storefront & Product PDP Architecture',
    'asset_01_desc' => 'Engineered a bespoke Shopify Liquid storefront featuring high-converting product detail templates, dynamic variant matrices (length, texture, density), real-time stock availability, and sub-1.2s TTFB mobile performance.',
    'asset_01_img'  => 'blvck_asset_01_design_system.webp',
    'asset_02_meta' => 'Conversion Flow // Asset 02',
    'asset_02_title'=> 'High-Converting Slide-Out Cart & Dynamic Tiered Upsells',
    'asset_02_desc' => 'Engineered an instant AJAX slide-out cart drawer with dynamic bundle cross-sells, dual-currency localization (NGN ₦ / GBP £), free express shipping progress thresholds, and 1-click Paystack checkout.',
    'asset_02_img'  => 'blvck_asset_02_experience.webp',
    'asset_03_meta' => 'Ecosystem Velocity // Asset 03',
    'asset_03_title'=> 'Organic Search Entity Authority & Dual Storefront Architecture',
    'asset_03_desc' => 'Rather than depending on recurring paid social ad burn with rising customer acquisition costs, we architected a dominant organic search entity foundation and localized dual-region storefronts across Nigeria and the United Kingdom.',
    'asset_03_points'=> [
      'Dual-Region Storefronts: Operating localized shopping pipelines in Nigeria and the UK.',
      '+240% Organic Revenue: Generating compounding direct buyer traffic with zero recurring ad dependency.',
      'Top 3 Organic Search Rank: Dominant organic ranking for high-intent protective hair extension keywords.'
    ],
    'asset_03_img'  => 'blvck_asset_03_ecosystem.webp',
    'gallery_header'=> 'Omnichannel Campaign & Conversion Flow in Production',
    'gallery'       => [
      ['img' => 'blvck_gallery_01.webp', 'tag' => 'Mobile UX', 'title' => 'Mobile Storefront Discovery & Multi-Currency Routing'],
      ['img' => 'blvck_gallery_02.webp', 'tag' => 'Collection Matrix', 'title' => 'Curated Collections & Hair Texture Filter Matrix'],
      ['img' => 'blvck_gallery_03.webp', 'tag' => 'Checkout Gateway', 'title' => 'Paystack Multi-Currency Instant Checkout Gateway'],
      ['img' => 'blvck_gallery_04.webp', 'tag' => 'Search Equity', 'title' => 'Entity SEO Architecture & Google SERP Rich Snippets'],
      ['img' => 'blvck_gallery_05.webp', 'tag' => 'Social Proof', 'title' => 'Customer Reviews & Verified UGC Social Proof Engine'],
      ['img' => 'blvck_gallery_06.webp', 'tag' => 'Brand Packaging', 'title' => 'Luxury Satin Packaging & Brand Touchpoint Suite']
    ],
    'metrics'       => [
      ['val' => '2', 'lbl' => 'Regional Storefronts', 'desc' => 'Localized multi-currency Shopify storefronts operating across Nigeria & UK.'],
      ['val' => '+240%', 'lbl' => 'Organic Search Revenue', 'desc' => 'Direct revenue lift generated via organic Google search with zero paid ad burn.'],
      ['val' => 'Top 3', 'lbl' => 'Organic Google Rank', 'desc' => 'Dominant search visibility for high-intent luxury hair queries.']
    ],
    'live_url'      => 'https://blvckhairng.com/'
  ],

  'bridgepoint-compliance' => [
    'status'        => 'published',
    'client_name'   => 'Compliance Analysis Platform',
    'industry'      => 'RegTech // Enterprise FinTech Compliance & Full-Stack Audit Engine',
    'headline_main' => 'Compliance Analysis Platform: Automated',
    'headline_serif'=> 'Regulatory Audit Engine',
    'lead'          => 'A specialized regulatory compliance platform designed to streamline supervisory audits for payment service providers (PSPs) and FinTech platforms. We engineered a secure, full-stack web application featuring a 4-step assessment wizard, multi-document PDF dropzone, automated payment paywalls, and board-ready encrypted audit reports.',
    'pills'         => ['Custom Dev', 'RegTech Web App', 'Payment Paywall API', 'Full-Stack Portal'],
    'meta_services' => 'Custom Development & RegTech Engineering',
    'meta_stack'    => 'React · Node.js · REST API · AES-256',
    'meta_link_url' => '#',
    'meta_link_text'=> 'Enterprise Portal Demo ↗',
    'hero_img'      => 'case_study_bridgepoint_compliance.webp',
    'overview_title'=> 'The Regulatory Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Payment service providers and financial institutions face rigorous operational risk management frameworks and funds safeguarding criteria under tight regulatory compliance deadlines.',
    'overview_p2'   => 'The client required an authoritative, zero-trust digital platform capable of collecting client compliance documents, gating specialist reviews through automated payment paywalls, and generating board-ready audit reports within a guaranteed 72-hour turnaround.',
    'overview_items'=> [
      ['title' => '01 / 4-Step Regulatory Assessment Wizard', 'desc' => 'Engineered a multi-step client onboarding flow with secure multi-file PDF upload dropzones and validation.'],
      ['title' => '02 / Automated Payment Paywall Gateway', 'desc' => 'Integrated frictionless card and corporate wire payment APIs directly gating expert audit reviews.'],
      ['title' => '03 / Supervisory Compliance Rule Matrix', 'desc' => 'Configured comprehensive supervisory gap analysis evaluating ORMF, funds safeguarding, and incident response.'],
      ['title' => '04 / Encrypted PDF Report Generation Engine', 'desc' => 'Engineered automated background workers compiling board-ready executive summaries with cryptographic verification.']
    ],
    'asset_01_meta' => 'Assessment Pipeline // Asset 01',
    'asset_01_title'=> '4-Step Regulatory Assessment & Multi-Document Upload Wizard',
    'asset_01_desc' => 'Engineered a secure client onboarding flow with multi-file PDF dropzones, in-transit AES-256 encryption, and instant policy document validation against supervisory criteria.',
    'asset_01_img'  => 'compliance_asset_01_assessment.webp',
    'asset_02_meta' => 'Commercial Paywall // Asset 02',
    'asset_02_title'=> 'Frictionless Payment Paywall & Secure Checkout Gateway',
    'asset_02_desc' => 'Engineered an enterprise checkout paywall integrating credit card and wire payment gateways with automated invoice dispatch, gating specialist compliance review queues.',
    'asset_02_img'  => 'compliance_asset_02_paywall.webp',
    'asset_03_meta' => 'Full-Stack Architecture // Asset 03',
    'asset_03_title'=> 'RegTech System Architecture & Automated Audit Pipeline',
    'asset_03_desc' => 'The white architectural system board: tactile 3D relief blocks detailing the 4-step intake vault, PCI-DSS paywall gateway, automated policy evaluation engine, and board-ready encrypted PDF compilation with comparative 72-hour delivery metrics.',
    'asset_03_points'=> [
      '72-Hour Delivery SLA: Rapid turnaround reducing manual audit discovery cycles from weeks to 3 business days.',
      '75% Time Reduction: Automated policy intake and gap analysis drastically accelerating compliance readiness.',
      '100% Supervisory Alignment: Purpose-built for Payment Service Provider (PSP) operational risk and safeguarding frameworks.'
    ],
    'asset_03_img'  => 'compliance_asset_03_architecture.webp',
    'gallery_header'=> 'Platform Architecture & Supervisory Engine in Production',
    'gallery'       => [
      ['img' => 'compliance_gallery_01.webp', 'tag' => 'Gap Matrix', 'title' => 'Policy Compliance & Risk Assessment Matrix'],
      ['img' => 'compliance_gallery_02.webp', 'tag' => 'Audit Trail', 'title' => 'Regulatory Audit Log & Review History'],
      ['img' => 'compliance_gallery_03.webp', 'tag' => 'Mobile UX', 'title' => 'Mobile Compliance Assessment & Responsive Intake'],
      ['img' => 'compliance_gallery_04.webp', 'tag' => 'Report Engine', 'title' => 'Automated Encrypted PDF Audit Report Preview'],
      ['img' => 'compliance_gallery_05.webp', 'tag' => 'Security & RBAC', 'title' => 'Multi-Factor Auth & Granular Role Permissions'],
      ['img' => 'compliance_gallery_06.webp', 'tag' => 'Sector Modules', 'title' => 'Tailored Compliance Modules for Regulated Sectors']
    ],
    'metrics'       => [
      ['val' => '72 Hours', 'lbl' => 'Audit Turnaround', 'desc' => 'Guaranteed rapid review turnaround compared to weeks of manual legal review.'],
      ['val' => '75%', 'lbl' => 'Time Reduction', 'desc' => 'Drastic decrease in internal staff hours spent on policy gap discovery.'],
      ['val' => '100%', 'lbl' => 'Supervisory Alignment', 'desc' => 'Full-scope operational risk and funds safeguarding regulatory compliance readiness.']
    ],
    'live_url'      => '#'
  ],

  'bridgepoint-advisory' => [
    'status'        => 'published',
    'client_name'   => 'BridgePoint Advisory Services',
    'industry'      => 'Brand Identity // Corporate Design System & Institutional Governance',
    'headline_main' => 'BridgePoint: Sovereign Vector Identity &',
    'headline_serif'=> 'Corporate Design System',
    'lead'          => 'BridgePoint Advisory Services is a premier financial and strategic management advisory firm in Lagos and London. We engineered an authoritative corporate brand identity rooted in mathematical vector precision (0.5px), curated a multi-tier token design system, audited iterative concept directions, and published a 42-asset brand manual spanning physical stationery to boardroom roadshow presentations.',
    'pills'         => ['Brand Identity', '0.5px Vector Grid', 'Design System', 'Executive Stationery'],
    'meta_services' => 'Corporate Brand Identity & Governance',
    'meta_stack'    => 'Vector Architecture · Figma · Print & Digital Collateral',
    'meta_link_url' => 'https://bridgepoints.ng/',
    'meta_link_text'=> 'bridgepoints.ng ↗',
    'hero_img'      => 'case_study_bridgepoint_advisory.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'BridgePoint Advisory Services required an authoritative corporate visual identity capable of commanding trust in high-stakes boardrooms, institutional capital syndications, and cross-border M&A transactions across West Africa and global financial centers.',
    'overview_p2'   => 'We conducted a comprehensive concept iteration audit—testing and rejecting early letterform-integrated monograms in favor of a monumental soaring suspension arch emblem—backed by strict vector clear-space rules, digital token ramps, and luxury physical stationery.',
    'overview_items'=> [
      ['title' => '01 / Vector Precision Architecture', 'desc' => 'Engineered a 0.5px grid-aligned suspension arch emblem symbolizing a trusted conduit between capital, corporate strategy, and sustainable growth.'],
      ['title' => '02 / Concept Evolution & Diagnostic Audit', 'desc' => 'Subjected iterative prototypes to micro-scale legibility and foil stamping tests, rigorously documenting why letterform pier monograms failed print reproduction.'],
      ['title' => '03 / Comprehensive Design System Matrix', 'desc' => 'Formulated a full multi-tone color ramp (Midnight Navy #131A24, Advisory Cyan #0091C9, Petrol Teal #0B3A4A), typography ladder, spacing scale, and live client portal UI states.'],
      ['title' => '04 / Luxury Boardroom Collateral Suite', 'desc' => 'Designed 600gsm duplexed business cards with electric cyan painted edge gilding, executive letterhead, and 16:9 investor pitch deck architectures.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Corporate Design System Tokens & Component Library Matrix',
    'asset_01_desc' => 'Engineered an institutional design system specification comprising 16 typography styles (Michroma bold headlines, DM Sans body), 40 multi-shade color ramps, mathematical spacing scale tokens, and auto-layout button/badge components applied directly to a client briefing intake portal.',
    'asset_01_img'  => 'bridgepoints_asset_01_design_system.webp',
    'asset_02_meta' => 'Concept Audit // Asset 02',
    'asset_02_title'=> 'Concept Evolution — Iteration 02 Monogram vs Soaring Arch Mark',
    'asset_02_desc' => 'An authentic diagnostic case audit contrasting the rejected Iteration 02 (pier and cable monogram integrated into letterform stems, rejected due to micro-scale legibility collapse below 32px and ink-spread during hot-stamping) against the approved monumental suspension arch delivering flawless multi-scale authority.',
    'asset_02_img'  => 'bridgepoints_asset_02_stationery.webp',
    'asset_03_meta' => 'Platform Architecture // Asset 03',
    'asset_03_title'=> 'Brand Identity Architecture & Institutional Governance Model',
    'asset_03_desc' => 'Showcases the physical brand governance architecture model standing on an executive boardroom table: tactile 3D modules codifying Core Vector Geometry (0.5px), Typography Tokens, Corporate Brand Manual (42+ Multi-Channel Standards), and comparative 3D bar blocks demonstrating +98% executive alignment versus unbranded visual disconnect.',
    'asset_03_points'=> [
      '0.5px Vector Precision: Absolute mathematical alignment across Bezier arcs and wordmark baseline kerning.',
      '42+ Multi-Channel Assets: Standardized collateral spanning blind debossed stationery to responsive web avatars.',
      '+98% Executive Alignment: Unanimous boardroom adoption and rapid multi-market rollout with zero downtime.'
    ],
    'asset_03_img'  => 'bridgepoints_asset_03_growth.webp',
    'gallery_header'=> 'Brand Identity Standards & Corporate Touchpoints in Production',
    'gallery'       => [
      ['img' => 'bridgepoints_gallery_01.webp', 'tag' => 'Identity Standards', 'title' => 'Master Identity Variations Matrix (Primary Navy, Inverted Alabaster, Petrol Blue, Metallic Foil)'],
      ['img' => 'bridgepoints_gallery_02.webp', 'tag' => 'Stationery Suite', 'title' => 'Executive Stationery Suite — 120gsm Letterhead & 600gsm Duplexed Business Cards with Cyan Painted Edges'],
      ['img' => 'bridgepoints_gallery_03.webp', 'tag' => 'Pitch Architecture', 'title' => '16:9 Boardroom Presentation Suite — Cover Slide, Advisory Framework & Performance Telemetry'],
      ['img' => 'bridgepoints_gallery_04.webp', 'tag' => 'Digital Identity', 'title' => 'Digital Identity Architecture & Multi-Scale Favicon Ladder (16px to 512px App Icon)'],
      ['img' => 'bridgepoints_gallery_05.webp', 'tag' => 'Governance CRO', 'title' => 'Executive Stakeholder Alignment & Governance Scorecard (+98% Unanimous Adoption)'],
      ['img' => 'bridgepoints_gallery_06.webp', 'tag' => 'Luxury Collateral', 'title' => 'Photorealistic Luxury Stationery Suite — Debossed Arch Letterhead, Presentation Folder & Foil Cards']
    ],
    'metrics'       => [
      ['val' => '0.5px', 'lbl' => 'Vector Precision', 'desc' => 'Sub-pixel geometry alignment across digital displays, high-DPI viewports, and corporate signage.'],
      ['val' => '42+', 'lbl' => 'Brand Assets', 'desc' => 'Comprehensive multi-channel design tokens, stationery templates, pitch decks, and digital favicons.'],
      ['val' => '98%', 'lbl' => 'Board Consensus', 'desc' => 'Unanimous executive stakeholder approval achieved on Milestone 3 with zero brand fragmentation.']
    ],
    'live_url'      => 'https://bridgepoints.ng/'
  ],

  'victorias-lane' => [
    'status'        => 'published',
    'client_name'   => "Victoria's Lane",
    'industry'      => 'Fashion // Handcrafted Statement Bags & Shopify Liquid Storefront',
    'headline_main' => "Victoria's Lane: Handcrafted Beaded Bags &",
    'headline_serif'=> 'Shopify Liquid Dev',
    'lead'          => "Victoria's Lane is an artisanal luxury accessories brand specializing in handcrafted crystal and beaded evening bags with signature solid brass nameplates. Sister brand to @blvckhair_ng with worldwide shipping across Nigeria and the United States, we hand-coded a bespoke Shopify Liquid storefront featuring custom variant swatches, an app-free AJAX slide-out cart drawer, and high-velocity mobile CRO.",
    'pills'         => ['Shopify Liquid', 'Custom Theme', 'AJAX Cart', 'Fashion CRO'],
    'meta_services' => 'Shopify Storefront & CRO',
    'meta_stack'    => 'Shopify · Liquid · JavaScript',
    'meta_link_url' => 'https://victoriaslane.com/',
    'meta_link_text'=> 'victoriaslane.com ↗',
    'hero_img'      => 'case_study_victorias_lane.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => "Victoria's Lane needed a bespoke digital flagship that showcased the intricate brilliance of hand-strung crystal beadwork without falling prey to sluggish commercial theme bloat or recurring third-party Shopify app subscriptions.",
    'overview_p2'   => 'We engineered a bespoke, lightweight Shopify Liquid theme from scratch featuring sub-second AJAX cart slideouts, dynamic free-shipping progress calculators, multi-currency routing (NGN & USD), and targeted Meta editorial acquisition funnels.',
    'overview_items'=> [
      ['title' => '01 / Bespoke Liquid Architecture', 'desc' => 'Engineered a lightweight theme bypassing third-party app dependencies to achieve 0.7s LCP mobile page loads.'],
      ['title' => '02 / App-Free AJAX Cart Drawer', 'desc' => 'Hand-coded sub-second cart slideout with dynamic free-shipping threshold indicators and 1-click Shop Pay checkout.'],
      ['title' => '03 / Handcrafted Visual Experience', 'desc' => 'Designed high-converting PDPs with interactive crystal colorway swatches and craftsmanship spec matrices.'],
      ['title' => '04 / Multi-Currency International Checkout', 'desc' => 'Integrated automated location-based currency conversion (NGN ₦ and USD $) with worldwide express courier delivery hooks.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Haute Couture Accessories System & Craftsmanship Matrix',
    'asset_01_desc' => 'Engineered an editorial luxury design system anchored on warm alabaster studio backgrounds (#F8F6F4), brushed 24k gold accents (#C89E55), dusty rose (#D89299), serif typography, and tactile beadwork spec chips (faceted crystal glass beads, solid brass nameplates, satin lining with card pockets).',
    'asset_01_img'  => 'victorias_lane_asset_01_design_system.webp',
    'asset_02_meta' => 'E-Commerce UX // Asset 02',
    'asset_02_title'=> 'App-Free AJAX Cart Drawer & High-Ticket Upsell Engine',
    'asset_02_desc' => 'Eliminated 4.2s third-party app lag with a native Liquid AJAX slide-out cart drawer featuring dynamic free-shipping progress indicators, cross-sell beaded micro bag modules, and 1-click Shop Pay integration driving a +42% checkout conversion lift.',
    'asset_02_img'  => 'victorias_lane_asset_02_experience.webp',
    'asset_03_meta' => 'Platform Architecture // Asset 03',
    'asset_03_title'=> 'Physical Growth Model & Sovereign Shopify Architecture',
    'asset_03_desc' => 'Architected an integrated physical-to-digital luxury pipeline combining bespoke Shopify Liquid speed, zero recurring SaaS app bloat ($0/mo), and targeted Meta fashion acquisition funnels.',
    'asset_03_points'=> [
      'Zero App Subscriptions: Replaced 6 monthly third-party apps with native Liquid templates and vanilla JS.',
      'Sub-0.7s Mobile LCP: Instantaneous catalog browsing across London, Atlanta, and Nigerian cellular networks.',
      '+42% Checkout Conversion: Frictionless slide-out cart drawer capturing high-ticket impulse fashion purchases.'
    ],
    'asset_03_img'  => 'victorias_lane_asset_03_growth.webp',
    'gallery_header'=> 'Platform Showcase & Production Gallery',
    'gallery'       => [
      ['img' => 'victorias_lane_gallery_01.webp', 'tag' => 'Collection Matrix', 'title' => 'Curated Statement Bags Matrix (Triangle Pouch, Amber Crescent, Butterfly & Micro)'],
      ['img' => 'victorias_lane_gallery_02.webp', 'tag' => 'Mobile CRO', 'title' => 'Mobile Storefront Discovery & Sub-Second AJAX Drawer'],
      ['img' => 'victorias_lane_gallery_03.webp', 'tag' => 'Paid Acquisition', 'title' => 'Meta Feed Ad Creative & 4.8x ROAS Telemetry'],
      ['img' => 'victorias_lane_gallery_04.webp', 'tag' => 'Speed Architecture', 'title' => 'Google PageSpeed Scorecard & Zero App Bloat Benchmark'],
      ['img' => 'victorias_lane_gallery_05.webp', 'tag' => 'Client Social Proof', 'title' => 'Verified Client Reviews & "Our Babes" Community Proof'],
      ['img' => 'victorias_lane_gallery_06.webp', 'tag' => 'Unboxing Experience', 'title' => 'Luxury Presentation Packaging & Certificate of Authenticity']
    ],
    'metrics'       => [
      ['val' => '+42%', 'lbl' => 'Checkout Conversion', 'desc' => 'Increase in completed purchases following bespoke AJAX cart deployment.'],
      ['val' => '$0/mo', 'lbl' => 'App Subscription Bloat', 'desc' => 'Zero monthly SaaS fees by replacing 6 Shopify apps with native Liquid code.'],
      ['val' => '0.7s', 'lbl' => 'Mobile LCP', 'desc' => 'Sub-second mobile rendering across cellular networks in Nigeria, UK, and US.']
    ],
    'live_url'      => 'https://victoriaslane.com/'
  ],

  'sweetermen-ng' => [
    'status'        => 'published',
    'client_name'   => 'SweeterMen NG',
    'industry'      => 'E-Commerce // Luxury Horology & Custom WooCommerce Engine',
    'headline_main' => 'SweeterMen NG: Bespoke Horology &',
    'headline_serif'=> 'WooCommerce Engine',
    'lead'          => "SweeterMen NG is an exclusive luxury horology and men's accessories brand in Lagos. We engineered a high-performance custom WooCommerce storefront with zero plugin bloat, a 1-step checkout drawer, Paystack multi-payment routing, and profitable Meta advertising funnels.",
    'pills'         => ['WooCommerce', 'Custom PHP', 'Paystack Gateway', 'Checkout CRO'],
    'meta_services' => 'WooCommerce Engineering & Paid Growth',
    'meta_stack'    => 'WordPress · WooCommerce · Paystack · Meta Ads',
    'meta_link_url' => 'https://sweetermen.ng/',
    'meta_link_text'=> 'sweetermen.ng ↗',
    'hero_img'      => 'case_study_sweetermen.webp',
    'overview_title'=> 'The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'SweeterMen NG was struggling with high cart abandonment rates and slow page loading times on their legacy WooCommerce setup, losing high-ticket timepiece buyers at the checkout gate.',
    'overview_p2'   => 'We engineered a bespoke, lightweight WooCommerce theme with an AJAX 1-step checkout drawer, direct Paystack authorization, mobile installment calculators, and targeted Meta ad funnels.',
    'overview_items'=> [
      ['title' => '01 / Custom WooCommerce Theme', 'desc' => 'Hand-coded lightweight PHP templates bypassing heavy page builders to achieve sub-0.8s catalog loads.'],
      ['title' => '02 / One-Page Instant Checkout Drawer', 'desc' => 'Engineered a streamlined single-step slideout checkout flow reducing friction for high-ticket impulse buyers.'],
      ['title' => '03 / Mobile-First PDP & Installments', 'desc' => 'High-impact product visual cards with dynamic 3-month Paystack installment calculations (₦483,333/mo).'],
      ['title' => '04 / High-ROAS Meta Ads Funnels', 'desc' => 'Structured lookalike audience segmentation and dynamic product catalog retargeting campaigns achieving 4.2x ROAS.']
    ],
    'asset_01_meta' => 'Design System // Asset 01',
    'asset_01_title'=> 'Luxury Horology Design System & Component Library',
    'asset_01_desc' => 'Engineered a bespoke dark luxury design system anchored on obsidian surfaces (#0B0D10), imperial gold accents (#D4AF37), editorial typography, and high-contrast horology spec chips (Miyota automatic movement, 316L stainless steel, sapphire crystal).',
    'asset_01_img'  => 'sweetermen_asset_01_design_system.webp',
    'asset_02_meta' => 'Checkout CRO // Asset 02',
    'asset_02_title'=> '1-Step Slide-Out Checkout & Express Dispatch Hook',
    'asset_02_desc' => 'Bypassed default multi-page WooCommerce friction with an AJAX slide-out checkout modal featuring 1-click Paystack authorization, bank transfer verification, and Lagos express dispatch routing.',
    'asset_02_img'  => 'sweetermen_asset_02_checkout.webp',
    'asset_03_meta' => 'Ecosystem Architecture // Asset 03',
    'asset_03_title'=> 'Physical Growth Model & Omnichannel Funnel Architecture',
    'asset_03_desc' => 'Architected an integrated physical-to-digital growth pipeline combining bespoke WooCommerce speed, localized Nigerian payment security, and high-ROAS targeted Meta acquisition campaigns.',
    'asset_03_points'=> [
      'Sub-1s Server Response: Hand-coded PHP templates bypassing heavy page builders for sub-0.8s catalog loads.',
      '4.2x Meta Ad ROAS: High-converting video creative funnels driving affluent watch collectors to direct checkout.',
      '+68% Cart Completion: Frictionless 1-step checkout drawer reducing luxury mobile drop-off.'
    ],
    'asset_03_img'  => 'sweetermen_asset_03_growth.webp',
    'gallery_header'=> 'Timepiece Storefront & Acquisition Funnels in Production',
    'gallery'       => [
      ['img' => 'sweetermen_gallery_01.webp', 'tag' => 'Catalog Matrix', 'title' => 'Curated Luxury Timepiece Grid & Specification Chips'],
      ['img' => 'sweetermen_gallery_02.webp', 'tag' => 'Mobile Discovery', 'title' => 'Mobile Storefront & Paystack PayLater Installment Engine'],
      ['img' => 'sweetermen_gallery_03.webp', 'tag' => 'Paid Acquisition', 'title' => 'Meta Feed Ad Creative & 4.2x ROAS Telemetry'],
      ['img' => 'sweetermen_gallery_04.webp', 'tag' => 'Core Web Vitals', 'title' => 'PageSpeed 99/100 Audit & Sub-0.8s Waterfall Benchmark'],
      ['img' => 'sweetermen_gallery_05.webp', 'tag' => 'Social Proof', 'title' => 'Verified Collector Reviews & Horology Trust Architecture'],
      ['img' => 'sweetermen_gallery_06.webp', 'tag' => 'Brand Packaging', 'title' => 'Luxury Unboxing Suite, Warranty Card & Travel Pouch']
    ],
    'metrics'       => [
      ['val' => '4.2x', 'lbl' => 'Paid Ad ROAS', 'desc' => 'Return on ad spend across targeted Meta advertising campaigns.'],
      ['val' => '+68%', 'lbl' => 'Checkout Completion', 'desc' => 'Reduction in mobile cart drop-off following 1-step checkout deployment.'],
      ['val' => '0.8s', 'lbl' => 'Catalog Load Time', 'desc' => 'Sub-second page speeds achieved through hand-coded PHP WooCommerce templates.']
    ],
    'live_url'      => 'https://sweetermen.ng/'
  ],

  'stride-plus-media' => [
    'status'        => 'draft',
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
    'status'        => 'published',
    'client_name'   => 'Kiri City Stays',
    'industry'      => 'Digital Marketing // Google Ads, Tracking Infrastructure & Social Content',
    'headline_main' => 'Kiri City Stays: Attribution &',
    'headline_serif'=> 'Paid Acquisition Launch',
    'lead'          => 'Kiri City Stays operates premium urban serviced apartments in Manchester, United Kingdom (near Old Trafford and MediaCityUK). We engineered their visual brand identity and logo, established Google Ads search campaign architectures, deployed precision Google Tag Manager event attribution triggers, and produced engaging social media campaigns—including multi-slide Instagram carousels and vertical video reels highlighting guest reviews and city culture.',
    'pills'         => ['Digital Marketing', 'Google Ads', 'GTM Attribution', 'Social Media Management', 'Brand Identity'],
    'meta_services' => 'Digital Marketing, Google Ads & Social Content',
    'meta_stack'    => 'Google Ads · GTM · Meta Creative Suite · Analytics',
    'meta_link_url' => '',
    'meta_link_text'=> 'Archived Campaign',
    'hero_img'      => 'case_study_kiri_city_stays.webp',
    'overview_title'=> 'The Growth Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Operating in a competitive UK urban hospitality market, Kiri City Stays needed to capture high-intent travelers visiting Manchester for Premier League football fixtures, corporate business, and city events without relying solely on passive third-party listing platforms.',
    'overview_p2'   => 'Cr8v Stacks executed an end-to-end growth and creative strategy: designing their official brand identity and regal crest logo, building targeted Google Search ad campaigns, establishing rigorous Google Tag Manager conversion attribution triggers, and producing multi-slide Instagram carousel series and vertical video reels that drive direct guest inquiry engagement.',
    'overview_items'=> [
      ['title' => '01 / Brand Identity & Regal Crest Monogram', 'desc' => 'Crafted the official CK monogram with architectural house rooftop crests and authoritative typography.'],
      ['title' => '02 / Google Ads Search Campaign Architecture', 'desc' => 'Structured high-intent search ad groups capturing Manchester United matchday travel, business short-stays, and event accommodation.'],
      ['title' => '03 / GTM Event Tracking & Attribution Engine', 'desc' => 'Deployed Google Tag Manager triggers tracking direct booking button clicks, contact inquiries, and return on ad spend (ROAS).'],
      ['title' => '04 / Social Media Creative Content Engine', 'desc' => 'Produced branded Instagram carousel series, seasonal greeting campaigns, and vertical video reels featuring verified 5-star guest reviews and local Manchester dining highlights.']
    ],
    'asset_01_meta' => 'Brand Identity // Asset 01',
    'asset_01_title'=> 'Brand Identity, Regal Monogram & Social Guidelines',
    'asset_01_desc' => 'Designed the official Kiri City Stays visual identity—featuring the regal CK monogram crowned with architectural rooftop crests, royal blue and deep navy color ramp tokens, and strict social media grid specifications.',
    'asset_01_img'  => 'kiri_asset_01_design_system.webp',
    'asset_02_meta' => 'Search Infrastructure // Asset 02',
    'asset_02_title'=> 'Google Ads Campaign Matrix & GTM Event Attribution Flow',
    'asset_02_desc' => 'Engineered high-converting Google Search ad groups targeting Manchester matchday travelers and business visitors, paired with rigorous GTM event triggers measuring direct inquiries.',
    'asset_02_img'  => 'kiri_asset_02_experience.webp',
    'asset_03_meta' => 'Growth Architecture // Asset 03',
    'asset_03_title'=> 'Platform Architecture: Paid Search & Attribution Engine',
    'asset_03_desc' => 'The white architectural system model board: tactile 3D relief blocks detailing the paid acquisition funnel—from Google Search ad intent targeting and matchday sports tourism geo-acquisition to GTM event triggers and direct booking attribution.',
    'asset_03_points'=> [
      'Google Search & Intent Targeting: High-converting search ad groups capturing Manchester matchday visitors and business travelers.',
      '99.4% Attribution Precision: End-to-end GTM event tagging tracking exact click-to-inquiry conversion paths.',
      '+280% Direct Inquiries: Compounding direct traveler engagement driven by consistent social campaigns and paid search.'
    ],
    'asset_03_img'  => 'kiri_asset_03_ecosystem.webp',
    'social_campaign'=> [
      'label'       => 'Social Media & Content Engine',
      'title'       => 'Instagram Carousel Series & Social Video Content Suite',
      'desc'        => 'A multi-tier social media content engine combining high-converting Instagram carousel slides with vertical 9:16 video reels spotlighting verified UK traveler reviews, Manchester cultural attractions, and matchday travel proximity.',
      'carousel'    => [
        [
          'img'   => 'kiri_carousel_01.webp',
          'tag'   => '01 / Holiday Brand Equity',
          'title' => 'Merry Christmas Greeting',
          'desc'  => 'Strengthening emotional rapport during peak holiday travel by positioning Kiri City Stays as a warm, welcoming home-away-from-home rather than a cold commercial hotel room.'
        ],
        [
          'img'   => 'kiri_carousel_02.webp',
          'tag'   => '02 / Romance Demand Priming',
          'title' => 'Welcome to the Month of Love',
          'desc'  => 'Priming romantic couple interest at the start of February, encouraging advance weekend bookings for anniversary and Valentine getaways in central Manchester.'
        ],
        [
          'img'   => 'kiri_carousel_03.webp',
          'tag'   => '03 / Direct Booking Incentive',
          'title' => 'Book With Us Directly',
          'desc'  => 'Overcoming OTA dependency by communicating clear financial and hospitality advantages when booking directly—guaranteeing best nightly rates and dedicated concierge service.'
        ],
        [
          'img'   => 'kiri_carousel_04.webp',
          'tag'   => '04 / Urban Romance Hook',
          'title' => 'Happy Valentine\'s Day',
          'desc'  => 'Pairing iconic Manchester skyline visuals with tailored couple hospitality packages, tapping into last-minute romantic staycation demand.'
        ],
        [
          'img'   => 'kiri_carousel_05.webp',
          'tag'   => '05 / Seasonal Momentum',
          'title' => 'Hello March — Make Memories',
          'desc'  => 'Transitioning seasonal demand into spring, targeting corporate business travelers, conference attendees, and weekend tourists exploring Manchester.'
        ],
      ],
      'reels'       => [
        [
          'video'  => 'kiri_reel_01_testimonial.mp4',
          'poster' => 'kiri_reel_01_poster.webp',
          'tag'    => 'Social Proof // 9:16 Vertical Reel',
          'title'  => 'Verified Guest Testimonial & Host Review',
          'author' => 'Kate · Codford, United Kingdom',
          'quote'  => 'A very convenient location close to great restaurants, local shops and the tram station. Very responsive helpful host, everything we needed in the apartment for a short business trip.'
        ],
        [
          'video'  => 'kiri_reel_02_matchday.mp4',
          'poster' => 'kiri_reel_02_poster.webp',
          'tag'    => 'Sports Tourism // 9:16 Vertical Reel',
          'title'  => 'Premier League Matchday Accommodation Spotlight',
          'author' => 'Old Trafford & Etihad Stadium Proximity',
          'quote'  => 'Capturing domestic and international football fans traveling to Manchester for Premier League fixtures, offering luxury serviced accommodation near stadium transit corridors.'
        ],
        [
          'video'  => 'kiri_reel_03_couples.mp4',
          'poster' => 'kiri_reel_03_poster.webp',
          'tag'    => 'Leisure & Romance // 9:16 Vertical Reel',
          'title'  => 'Romantic City Breaks & Cultural Dining Getaways',
          'author' => 'Manchester City Center & Dining Proximity',
          'quote'  => 'Targeting high-yield couples and anniversary travelers with tailored weekend getaway packages highlighting fine dining and cultural nightlife.'
        ],
        [
          'video'  => 'kiri_reel_04_holiday.mp4',
          'poster' => 'kiri_reel_04_poster.webp',
          'tag'    => 'Seasonal Campaign // 9:16 Vertical Reel',
          'title'  => 'Festive Seasonal Campaign & Direct Booking Perks',
          'author' => 'Winter Hospitality & Holiday Travel',
          'quote'  => 'Leveraging seasonal holiday warmth to capture winter travel demand, incentivizing direct reservations with festive welcome packages and guaranteed late checkout.'
        ]
      ]
    ],
    'gallery_header'=> 'Campaign Creative Suite & Social Production',
    'gallery_label' => 'Campaign Showcase',
    'gallery'       => [
      ['img' => 'kiri_gallery_01.webp', 'tag' => 'Social Carousel', 'title' => 'Branded Multi-Slide Instagram Carousel Sequence'],
      ['img' => 'kiri_gallery_02.webp', 'tag' => 'Video Reels', 'title' => '9:16 Guest Testimonial & Apartment Showcase Reels'],
      ['img' => 'kiri_gallery_03.webp', 'tag' => 'Event Marketing', 'title' => 'Matchday Accommodation & Event Travel Acquisition'],
      ['img' => 'kiri_gallery_04.webp', 'tag' => 'Google Ads', 'title' => 'Search Campaign Structure & Keyword Match Matrix'],
      ['img' => 'kiri_gallery_05.webp', 'tag' => 'Attribution', 'title' => 'GTM Container Triggers & GA4 Conversion Pipeline'],
      ['img' => 'kiri_gallery_06.webp', 'tag' => 'Seasonal Creative', 'title' => 'Seasonal Brand Campaigns & Holiday Engagement Suite']
    ],
    'metrics'       => [
      ['val' => '+280%', 'lbl' => 'Direct Inquiries', 'desc' => 'Surge in direct guest inquiries generated across targeted Google Search and social campaigns.'],
      ['val' => '99.4%', 'lbl' => 'Attribution Accuracy', 'desc' => 'Rigorous GTM event tracking connecting ad clicks directly to verified guest inquiries.'],
      ['val' => '4.6x', 'lbl' => 'Ad Engagement Lift', 'desc' => 'Elevated interaction and click-through rates driven by tailored matchday and video reel creatives.']
    ],
    'live_url'      => ''
  ],

  'crux-nxtion' => [
    'status'        => 'published',
    'client_name'   => 'Crux Nxtion Ltd',
    'industry'      => 'Web Design // Dual-Wing Brand Platform & Intelligent Switcher Architecture',
    'headline_main' => 'Crux Nxtion: Dual-Wing Platform &',
    'headline_serif'=> 'Intelligent Switcher Architecture',
    'lead'          => 'Crux Nxtion is a prominent Sheffield, UK entertainment and commercial advisory enterprise. Following an expansive brand evolution into executive business consultancy, Cr8v Stacks engineered an innovative dual-wing web architecture uniting high-energy cultural event production with crisp corporate strategy through an intelligent header and mobile sticky switcher, unified 10-service intake routing, and a zero-dependency custom WordPress engine.',
    'pills'         => ['Web Design', 'Dual-Wing Switcher', 'UI/UX Architecture', 'cr8v-inquiries', 'WordPress Engineering'],
    'meta_services' => 'Web Design, Dual-Wing UI/UX Architecture & Custom WordPress Platform',
    'meta_stack'    => 'Custom WordPress · Slanted Parallelogram CSS · Inquiries CPT · 301 Fallback Router',
    'meta_link_url' => 'https://cruxnxtion.co.uk/',
    'meta_link_text'=> 'cruxnxtion.co.uk ↗',
    'hero_img'      => 'case_study_crux_nxtion.webp',
    'hero_vertical_img' => 'cs_crux_nxtion_hero_vertical.webp',
    'client_logo'   => 'crux_logo.webp',
    'overview_title'=> 'The Rebranding Dilemma <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Founded by Olabamidele "Bambad" Badmos in Sheffield, UK, Crux Nxtion faced a critical digital architecture challenge: how to expand from a high-energy UK nightlife and cultural events powerhouse ("WE PLAN IT. WE BOOK IT. WE RUN IT.") into a serious commercial growth consultancy without splitting domain authority across messy subdomains or confusing corporate clients with concert posters.',
    'overview_p2'   => 'Cr8v Stacks engineered a bespoke dual-wing hybrid platform featuring a hardware-accelerated slanted capsule switcher (desktop header + persistent mobile sticky toggle), unified 10-discipline inquiry intake, and coordinated Dark Mode (Events) and Light Mode (Consultancy) design systems.',
    'overview_items'=> [
      ['title' => '01 / Intelligent Dual-Wing Switcher Architecture', 'desc' => 'Engineered a seamless theme and mode switcher enabling visitors to toggle between Crux Events (Dark Mode #0A0F26) and Crux Consultancy (Light Mode #FFFFFF) with zero page reload latency.'],
      ['title' => '02 / Signature Slanted Parallelogram Design System', 'desc' => 'Crafted mathematical CSS polygon clipping tokens (clip-path: polygon) powering custom angled action buttons, segmented badges, and content frames.'],
      ['title' => '03 / Unified 10-Service Routing & Inquiries CPT', 'desc' => 'Consolidated 5 event services and 5 consultancy offerings into a single tabbed inquiry intake engine with automated wing tagging ([EVENTS], [CONSULTANCY], [BOTH]).'],
      ['title' => '04 / Zero-Error Protection & Automated 301 Router', 'desc' => 'Programmed an autonomous URL migration engine redirecting legacy site traffic, coupled with honeypot anti-spam defense and transient IP rate limiting.']
    ],
    'asset_01_meta' => 'Brand Architecture // Asset 01',
    'asset_01_title'=> 'Dual-Wing Design System & Typography Tokens',
    'asset_01_desc' => 'High-contrast Dark Mode (Ink #0A0F26, Brand Blue #002671, Action Red #BA0000, Bebas Neue) for Cultural Live Events paired with Crisp Light Mode (Pure White, Lilac #F3F1FC, Royal Purple #8C7AE6, Space Grotesk) for Corporate Consultancy.',
    'asset_01_img'  => 'crux_asset_01_tokens.webp',
    'asset_02_meta' => 'Interface Engineering // Asset 02',
    'asset_02_title'=> 'Slanted Capsule Switcher & Responsive Mobile Toggle',
    'asset_02_desc' => 'Engineered hardware-accelerated CSS polygon cuts that morph from an elegant desktop header capsule into a persistent thumb-friendly mobile bottom switcher bar with instantaneous view switching.',
    'asset_02_img'  => 'crux_asset_02_switcher.webp',
    'asset_03_meta' => 'Platform Architecture // Asset 03',
    'asset_03_title'=> 'Platform Architecture: WordPress Core Engine & Dual-Wing Ecosystem',
    'asset_03_desc' => 'The white architectural system model board: tactile 3D relief blocks detailing the full-stack WordPress architecture—from the Dual-Wing Domain Sovereignty core branching through slanted polygon scenography, native Customizer token engine, and the universal cr8v-inquiries matrix.',
    'asset_03_points'=> [
      'Native Customizer Token Engine: Direct CSS custom property manipulation via postMessage transport on :root, enabling instant live visual editing with zero page-builder overhead.',
      'Universal cr8v-inquiries CRM: Custom Post Type cr8v_inquiry database with 4-stage pipeline CRM (admin.php?page=cr8v-inquiries), quote value telemetry (£), and 10-discipline smart lead routing.',
      'Dual-Wing Domain Sovereignty: Single domain (cruxnxtion.co.uk) capturing high-intent searches for both live entertainment and executive corporate consulting with zero cannibalization.'
    ],
    'asset_03_img'  => 'crux_asset_03_ecosystem.webp',
    'showcase_suite'=> [
      'label'          => 'Dual-Wing Platform & Enterprise Intake Architecture',
      'title'          => 'Engineered Systems & Workflows',
      'desc'           => 'A comprehensive technical breakdown of the custom systems engineered for Crux Nxtion—unifying two distinct business models under one domain authority with mathematical polygon geometry, zero-bloat Customizer tooling, and enterprise inquiry routing.',
      'carousel_title' => 'System Architecture Carousel Deck // 5 Core Engineering Milestones',
      'carousel'       => [
        [
          'img'   => 'crux_gallery_03_switcher.webp',
          'tag'   => '01 / Switcher Architecture',
          'title' => 'Slanted Parallelogram Switcher Pod',
          'desc'  => 'Constructed with mathematical CSS polygons (clip-path: polygon(8px 0, 100% 0, calc(100% - 8px) 100%, 0 100%)), delivering instantaneous context switching between Events and Consultancy wings with 0ms reload latency.'
        ],
        [
          'img'   => 'crux_gallery_04_inquiries.webp',
          'tag'   => '02 / Intake Matrix',
          'title' => '10-Discipline Service Intake Matrix',
          'desc'  => 'A unified specification intake form spanning 10 discrete offerings (from talent booking to corporate advisory), routing structured briefs directly to the right internal leadership desk.'
        ],
        [
          'img'   => 'crux_gallery_06_customizer.webp',
          'tag'   => '03 / Customizer Core',
          'title' => 'Native Customizer Token Engine',
          'desc'  => 'Direct CSS custom property manipulation via postMessage transport on :root, registering lazy-mode scoped controls based on the actively previewed domain wing.'
        ],
        [
          'img'   => 'crux_gallery_07_production_logistics.webp',
          'tag'   => '04 / Production Logistics',
          'title' => 'Single Event Production Logistics & Talent Lineup',
          'desc'  => 'Structured event docket managing headline DJ procurement, concert-grade line-array sound staging, and on-site VIP floor coordination for major UK cultural activations.'
        ],
        [
          'img'   => 'crux_gallery_02_consultancy.webp',
          'tag'   => '05 / Executive UI',
          'title' => 'Consultancy Wing Enterprise Portal',
          'desc'  => 'Dedicated executive advisory landing environment featuring corporate setup frameworks, brand growth blueprints, and UK Global Talent / Founder Visa guidance.'
        ],
        [
          'img'   => 'crux_gallery_08_executive_dossier.webp',
          'tag'   => '06 / Executive Dispatch',
          'title' => 'Dual-Tier Automated Email Dispatch',
          'desc'  => 'Engineered automated HTML briefing dossiers delivered directly to principal Bambad and lead project managers, formatted with selected discipline tags and client contact parameters.'
        ]
      ],
      'reels_tag'      => 'Mobile Engineering // Responsive Touch Ergonomics',
      'reels_title'    => 'Mobile Switcher & Navigation Ergonomics',
      'reels'          => [
        [
          'img'   => 'crux_gallery_06_mobile_drawer.webp',
          'tag'   => 'Ergonomic UX // Full-Screen Drawer',
          'title' => 'Dual-Wing Mobile Drawer Accordion',
          'desc'  => 'Engineered independent accordion trees for Events and Consultancy, with direct sub-links to booking desks, commercial advisory, and corporate growth strategy.'
        ],
        [
          'img'   => 'crux_gallery_07_mobile_switcher.webp',
          'tag'   => 'Thumb-Zone UX // Fixed Floating Switcher',
          'title' => 'Fixed Bottom Switcher Pod',
          'desc'  => 'On mobile screens below 900px, the slanted switcher docks gracefully to the bottom viewport edge, allowing users to toggle between cultural events and corporate advisory with one thumb tap.'
        ]
      ]
    ],
    'gallery_label' => 'Engineering Showcase Stream',
    'gallery_header'=> 'Platform Infrastructure in Production',
    'gallery'       => [
      ['img' => 'crux_gallery_01_events.webp', 'tag' => 'Events Wing', 'title' => 'Dual-Wing Events Portal Architecture'],
      ['img' => 'crux_gallery_02_consultancy.webp', 'tag' => 'Consultancy Wing', 'title' => 'Corporate Advisory & Strategy Portal'],
      ['img' => 'crux_gallery_03_switcher.webp', 'tag' => 'Switcher Architecture', 'title' => 'Slanted Parallelogram Switcher Pod Architecture'],
      ['img' => 'crux_gallery_04_inquiries.webp', 'tag' => 'Inquiries Engine', 'title' => 'Universal Inquiries CRM Dashboard'],
      ['img' => 'crux_gallery_05_intake_matrix.webp', 'tag' => 'Intake Matrix', 'title' => 'Enterprise 10-Discipline Service Intake Matrix'],
      ['img' => 'crux_gallery_06_customizer.webp', 'tag' => 'Customizer Core', 'title' => 'Native Customizer Token Engine & Scoped Controls'],
      ['img' => 'crux_gallery_07_production_logistics.webp', 'tag' => 'Production Logistics', 'title' => 'Single Event Production Logistics & Talent Roster'],
      ['img' => 'crux_gallery_08_executive_dossier.webp', 'tag' => 'Executive Workflow', 'title' => 'Executive HTML Email Briefing Dossier'],
      ['img' => 'crux_gallery_09_admin_theme.webp', 'tag' => 'Admin Scenography', 'title' => 'Dual-Wing WP Admin Workspace & Management Surface']
    ],
    'metrics'       => [
      ['val' => '2 Wings', 'lbl' => 'Unified Ecosystem', 'desc' => 'Cultural live events and executive business consultancy harmonized under a single digital engine.'],
      ['val' => '100%', 'lbl' => 'Domain Authority', 'desc' => 'Zero fragmented subdomains; complete organic search equity consolidated on cruxnxtion.co.uk.'],
      ['val' => '0.0s', 'lbl' => 'Switch Latency', 'desc' => 'Hardware-accelerated CSS polygon switcher providing instantaneous UI mode transitions.']
    ],
    'live_url'      => 'https://cruxnxtion.co.uk/'
  ],

  'red-cap-entertainment' => [
    'status'        => 'published',
    'client_name'   => 'Red Cap Entertainment',
    'industry'      => 'Live Event Production // Brand Identity, Custom WP Theme & CPT Architecture',
    'headline_main' => 'Red Cap Entertainment: Live Spectacle &',
    'headline_serif'=> 'African Cultural Staging',
    'lead'          => 'Under the creative direction of Farida Atanda (Scream Honours 2026 AFRI-BALL Producer of the Year), Red Cap Entertainment produces live cultural experiences, festivals, visual arts exhibitions, and traditional matrimonial showcases across the UK and internationally ("CULTURE. IN MOTION. WE STAGE NIGHTS PEOPLE NEVER FORGET."). Cr8v Stacks designed Red Cap\'s bold brand identity and logo from scratch, and engineered a bespoke WordPress theme with custom post type event loops, automated upcoming/past date splits, native Schema.org Event JSON-LD, real-time .ics calendar generator, and the universal cr8v-inquiries engine.',
    'pills'         => ['Brand Identity', 'Custom WP Theme', 'Event CPT Loop', 'Dynamic Calendar (.ics)', 'cr8v-inquiries', 'AI-to-Customizer'],
    'meta_services' => 'Brand Identity, Live Spectacle Architecture & Custom WP Engine',
    'meta_stack'    => 'WordPress Customizer · Event CPT · Schema.org JSON-LD · Dynamic .ics',
    'meta_link_url' => 'https://redcapentertainment.co.uk/',
    'meta_link_text'=> 'redcapentertainment.co.uk ↗',
    'hero_img'      => 'case_study_red_cap_entertainment.webp',
    'hero_vertical_img' => 'cs_red_cap_entertainment_hero_vertical.webp',
    'client_logo'   => 'rc_logo-light.webp',
    'overview_title'=> 'The Cultural Staging Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span>',
    'overview_p1'   => 'Under the creative direction of Farida Atanda, Red Cap Entertainment produces major live cultural experiences, festivals, visual arts exhibitions, and traditional matrimonial showcases spanning London, Sheffield, Lagos, and Accra. Operating across sovereign traditions like the Pan-African Royal Nuptials (Alaga Showcase) and institutional museum exhibitions like Beyond the Bronze, the platform required a high-velocity digital presence that captured the grandeur of live African spectacle.',
    'overview_p2'   => 'Rather than wrestling with bloated page-builder JSON that breaks under mobile load, Cr8v Stacks engineered a clean, dependency-free system: converting semantic HTML/CSS directly into a native WordPress Customizer-powered theme, deploying an automated Event CPT docket with real-time past-event calculus, and integrating the universal cr8v-inquiries engine to route high-value production commissions directly into executive briefing dossiers.',
    'overview_items'=> [
      ['title' => '01 / Bespoke Brand Identity & Cultural Seal', 'desc' => 'Designed the complete vector brand identity, typography scale, and circular scalloped rosette emblem embodying live stage energy across London, Sheffield, and Accra.'],
      ['title' => '02 / The Proprietary AI-to-Customizer Pipeline', 'desc' => 'Converted modular semantic HTML into native WP_Customize_Manager controls, enabling real-time visual copy/date updates with 0ms runtime builder overhead.'],
      ['title' => '03 / Custom Post Type Loop & Past-Date Calculus', 'desc' => 'Programmed the informational event docket with automated cr8v_is_event_past() calculus, auto-disabling concluded bookings without manual intervention.'],
      ['title' => '04 / Universal cr8v-inquiries Intake Router', 'desc' => 'Deployed the core companion plugin with a 3-tier anti-spam gate, custom admin inquiries manager, and dual branded HTML email dossier generation.']
    ],
    'asset_01_meta' => 'Brand Identity & Docket Engine // Asset 01',
    'asset_01_title'=> 'Visual Identity System & Cultural Event Docket Loop',
    'asset_01_desc' => 'Crafted the official Red Cap Entertainment vector emblem, Anton display typography, and live event docket loops with real-time upcoming/past status filters.',
    'asset_01_img'  => 'rc_asset_01_brand.webp',
    'asset_02_meta' => 'Proprietary Pipeline // Asset 02',
    'asset_02_title'=> 'The 2026 AI-to-Customizer Rapid Build Architecture',
    'asset_02_desc' => 'Pioneered an agile deployment framework: converting semantic HTML/CSS directly into native WordPress Customizer controls (WP_Customize_Section, selective refresh partials, and postMessage live transports) for instant visual client editing with 0.65s load times.',
    'asset_02_img'  => 'rc_asset_02_customizer.webp',
    'asset_03_meta' => 'Ecosystem Architecture // Asset 03',
    'asset_03_title'=> 'Universal Event Data Core & Dynamic Calendar Calculus',
    'asset_03_desc' => 'The White Architectural System Model Board on Granite: 3D relief blocks detailing the Event CPT data core, automated past-event timestamp filter, native .ics calendar generator, and universal cr8v-inquiries intake router with zero page-builder overhead.',
    'asset_03_points'=> [
      'Event CPT & Customizer Data Core: Structured schema registering title, date, venue, category, and external ticket links with instant live customizer preview.',
      'Dynamic Past-Event Calculus: Automated cr8v_is_event_past() routine that transitions concluded events into archives and disables calendar downloads.',
      'Universal Inquiries & Spam Shield: The cr8v-inquiries companion plugin with honeypot, time-gate, and rate-limiter routing leads into executive HTML email dossiers.'
    ],
    'asset_03_img'  => 'rc_asset_03_ecosystem.webp',
    'showcase_suite'=> [
      'label'          => 'Production Engine & Administrative Architecture',
      'title'          => 'Engineered Systems & Workflows',
      'desc'           => 'A comprehensive technical breakdown of the bespoke systems engineered for Red Cap Entertainment—combining the native Customizer control surface, dynamic event calendar logic, and the universal multi-discipline inquiries engine.',
      'carousel_title' => 'System Architecture Carousel Deck // 5 Core Engineering Milestones',
      'carousel'       => [
        [
          'img'   => 'rc_gallery_04_customizer.webp',
          'tag'   => '01 / Zero-Bloat Control',
          'title' => 'Native Customizer Control Surface',
          'desc'  => 'Registering modular theme settings via selective refresh partials, enabling the client to update event schedules, phone numbers, and hero copy with instant live visual feedback.'
        ],
        [
          'img'   => 'rc_gallery_02_inquiries.webp',
          'tag'   => '02 / Client CRM',
          'title' => '4-Stage Inquiries Pipeline CRM Dashboard',
          'desc'  => 'Bespoke admin.php?page=cr8v-inquiries interface tracking lead lifecycle, quote values (£), and conversion telemetry with zero third-party form plugin dependencies.'
        ],
        [
          'img'   => 'rc_asset_02_customizer.webp',
          'tag'   => '03 / Modular Architecture',
          'title' => 'Multi-Variant Page Template Library',
          'desc'  => 'Native WordPress Page Attributes selector with lazy-mode scoped customizer controls, allowing rapid deployment of new festival layouts from a modular template library.'
        ],
        [
          'img'   => 'rc_gallery_03_single_event.webp',
          'tag'   => '04 / Calendar Calculus',
          'title' => 'Dynamic .ics Calendar Generator',
          'desc'  => 'Generating real-time .ics calendar files directly from event post metadata. Once an event date passes, the download control automatically transforms into a disabled \'Event Concluded\' badge.'
        ],
        [
          'img'   => 'rc_gallery_08_demo_seeder.webp',
          'tag'   => '05 / Rapid Seeding',
          'title' => '1-Click Starter Content Demo Importer',
          'desc'  => 'Bundled demo importer (inc/demo-importer.php) that checks for empty tables upon theme activation and seeds sample cultural festivals spanning 2024 to 2026 instantly.'
        ],
        [
          'img'   => 'rc_gallery_04_email_dossier.webp',
          'tag'   => '06 / Executive Dispatch',
          'title' => 'Dual Executive HTML Email Engine',
          'desc'  => 'Automated generation of dark-mode executive briefing worksheets for internal production staff alongside branded editorial confirmation receipts for commissioning clients.'
        ]
      ],
      'reels_tag'      => 'Mobile Engineering // Responsive Touch Ergonomics',
      'reels_title'    => 'Mobile Navigation & Ticket Interaction',
      'reels'          => [
        [
          'img'   => 'rc_gallery_06_mobile_drawer.webp',
          'tag'   => 'Ergonomic UX // Full-Screen Drawer',
          'title' => 'Dual-Accordion Mobile Menu Architecture',
          'desc'  => 'Engineered independent accordion trees for Productions and Recognition, ensuring deep cultural archives and press credentials remain accessible on mobile viewports without endless scrolling.'
        ],
        [
          'img'   => 'rc_gallery_07_mobile_docket.webp',
          'tag'   => 'Mobile Staging // Ticket Interaction',
          'title' => 'Mobile Event Docket & Ticket Action',
          'desc'  => 'Authentic mobile viewport presentation featuring live African cultural event dockets, dynamic calendar triggers, and ticket stub micro-interactions formatted for thumb ergonomics.'
        ]
      ]
    ],
    'gallery_label' => 'Engineering Showcase Stream',
    'gallery_header'=> 'Platform Infrastructure in Production',
    'gallery'       => [
      ['img' => 'rc_gallery_01_docket.webp', 'tag' => 'CPT Architecture', 'title' => 'Event CPT Archive & Docket Loop'],
      ['img' => 'rc_gallery_02_inquiries.webp', 'tag' => 'Inquiries Engine', 'title' => 'Universal Inquiries CRM Dashboard'],
      ['img' => 'rc_gallery_03_single_event.webp', 'tag' => 'Single Production', 'title' => 'Single Event Production Logistics & .ics Trigger'],
      ['img' => 'rc_gallery_04_email_dossier.webp', 'tag' => 'Executive Workflow', 'title' => 'Executive HTML Email Briefing Worksheet'],
      ['img' => 'rc_gallery_04_customizer.webp', 'tag' => 'Customizer Core', 'title' => 'Native Customizer Live Panel & Selective Refresh'],
      ['img' => 'rc_gallery_06_inquiries_brief.webp', 'tag' => 'Inquiries Matrix', 'title' => 'Production Commissioning Brief & Anti-Spam Triple Gate'],
      ['img' => 'rc_gallery_07_press_portal.webp', 'tag' => 'Credentials Docket', 'title' => 'Press & Award Verification Portal'],
      ['img' => 'rc_gallery_08_demo_seeder.webp', 'tag' => 'Automated Seeder', 'title' => '1-Click Starter Content Demo Importer'],
      ['img' => 'rc_gallery_09_admin_theme.webp', 'tag' => 'Admin Scenography', 'title' => 'Bespoke Deep Obsidian & Crimson WP Admin Theme']
    ],
    'metrics'       => [
      ['val' => '0ms', 'lbl' => 'Page-Builder Runtime Overhead', 'desc' => 'Eliminated Elementor and heavy builder bloat entirely through native Customizer settings and semantic HTML rendering.'],
      ['val' => '100%', 'lbl' => 'Native Customizer Control', 'desc' => 'Every critical headline, event date, phone number, and venue parameter directly manageable via selective refresh partials.'],
      ['val' => '0.65s', 'lbl' => 'Mobile Core Web Vitals LCP', 'desc' => 'Instantaneous responsive delivery across UK mobile networks with zero unminified script dependencies.']
    ],
    'live_url'      => 'https://redcapentertainment.co.uk/'
  ]
];

// Helper to locate theme image safely (delegates to global helper in functions.php)
if (!function_exists('cr8v_cs_img_src')) {
  function cr8v_cs_img_src($filename, $fallback = '') {
    if (empty($filename)) return '';
    if (filter_var($filename, FILTER_VALIDATE_URL)) return $filename;
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $rel = '/assets/img/case_studies/' . ltrim($filename, '/');
    if (file_exists($theme_dir . $rel)) {
      $ver = filemtime($theme_dir . $rel);
      return $theme_uri . $rel . '?v=' . $ver;
    }
    if (!empty($fallback)) {
      $rel_fb = '/assets/img/case_studies/' . ltrim($fallback, '/');
      if (file_exists($theme_dir . $rel_fb)) {
        $ver = filemtime($theme_dir . $rel_fb);
        return $theme_uri . $rel_fb . '?v=' . $ver;
      }
    }
    return $theme_uri . $rel;
  }
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

$is_cs_draft = (($active_data['status'] ?? 'published') === 'draft');
if ($is_cs_draft && !current_user_can('edit_posts')) {
  wp_safe_redirect(home_url('/case-studies/'), 302);
  exit;
}

get_header();
?>

<?php if (!empty($is_cs_draft)): ?>
  <aside style="background: #111111; border-bottom: 2px solid #F59E0B; padding: 14px 24px; color: #F59E0B; font-family: 'Space Mono', monospace; font-size: 11px; text-align: center; letter-spacing: 0.1em; z-index: 9999; position: relative; font-weight: 700;">
    ⚠ DRAFT MODE // ADMIN PREVIEW: This case study is hidden from the public until bespoke visual assets are complete.
  </aside>
<?php endif; ?>

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

  .c8cs-grow-media-wrapper {
    width: 100%;
    padding: 1.5rem 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
    background: transparent;
    overflow: hidden;
  }
  @media (max-width: 768px) { .c8cs-grow-media-wrapper { padding: 1rem 0; gap: 1rem; } }

  .c8cs-hero-switcher {
    display: inline-flex;
    background: #FFFFFF;
    border: 1px solid var(--c8-grid-line);
    border-radius: 4px;
    padding: 4px;
    gap: 4px;
    z-index: 5;
  }
  .c8cs-switch-btn {
    padding: 6px 16px;
    font-family: var(--font-mono);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    background: transparent;
    border: none;
    color: var(--c8-sub);
    cursor: pointer;
    border-radius: 3px;
    transition: all 0.2s ease;
  }
  .c8cs-switch-btn.is-active {
    background: var(--c8-blue);
    color: #FFFFFF;
  }
  .c8cs-hero-img-inner.is-landscape img {
    width: 100%;
    height: auto;
    display: block;
    aspect-ratio: 16 / 9;
    object-fit: cover;
  }
  .c8cs-hero-img-inner.is-vertical {
    display: flex;
    justify-content: center;
    background: #FAFAF7;
    padding: 2rem;
  }
  .c8cs-hero-img-inner.is-vertical img {
    width: 100%;
    max-width: 480px;
    aspect-ratio: 3 / 4;
    height: auto;
    display: block;
    object-fit: cover;
    border-radius: 4px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
  }

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
  /* ── SECTION 5.5: SOCIAL MEDIA CAMPAIGN & CAROUSEL DECK ── */
  .c8cs-social-campaign-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-social-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-social-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-social-header { padding: 1.75rem 1.25rem; } }

  .c8cs-carousel-deck-wrap { border-bottom: 1px solid var(--c8-grid-line); background: #FAFAF7; padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); }
  @media (max-width: 600px) { .c8cs-carousel-deck-wrap { padding: 1.5rem 1rem; } }
  .c8cs-carousel-deck-topbar { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem; }
  .c8cs-carousel-deck-title { display: flex; align-items: center; gap: 8px; font-family: var(--font-mono); font-size: 11px; text-transform: uppercase; color: var(--c8-ink); font-weight: 700; letter-spacing: 0.08em; }
  .c8cs-badge-dot { width: 8px; height: 8px; border-radius: 50%; background: #0072CE; display: inline-block; }
  .c8cs-carousel-nav-controls { display: flex; align-items: center; gap: 10px; }
  .c8cs-deck-nav-btn {
    width: 38px; height: 38px; border-radius: 4px; border: 1px solid var(--c8-grid-line); background: #FFFFFF; color: var(--c8-ink); font-size: 16px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s ease;
  }
  .c8cs-deck-nav-btn:hover { background: var(--c8-blue); color: #FFFFFF; border-color: var(--c8-blue); }
  .c8cs-deck-counter { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--c8-sub); letter-spacing: 0.1em; padding: 0 4px; }
  .c8cs-carousel-deck-track {
    display: flex; gap: 1.5rem; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding-bottom: 1rem; scrollbar-width: thin;
  }
  .c8cs-carousel-deck-track::-webkit-scrollbar { height: 6px; }
  .c8cs-carousel-deck-track::-webkit-scrollbar-track { background: rgba(0,0,0,0.04); border-radius: 3px; }
  .c8cs-carousel-deck-track::-webkit-scrollbar-thumb { background: rgba(0,114,206,0.3); border-radius: 3px; }
  .c8cs-carousel-slide-item {
    flex: 0 0 clamp(260px, 30vw, 360px); scroll-snap-align: start; background: #FFFFFF; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; overflow: hidden; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .c8cs-carousel-slide-item:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.06); }
  .c8cs-slide-media { position: relative; width: 100%; aspect-ratio: 1 / 1; background: #0F172A; overflow: hidden; }
  .c8cs-slide-media img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .c8cs-slide-num-badge {
    position: absolute; top: 10px; right: 10px; background: rgba(15,23,42,0.85); backdrop-filter: blur(4px); color: #FFFFFF; font-family: var(--font-mono); font-size: 9px; font-weight: 700; padding: 4px 8px; border-radius: 4px; letter-spacing: 0.1em; text-transform: uppercase;
  }
  .c8cs-slide-caption { padding: 1.25rem 1.5rem; display: flex; flex-direction: column; gap: 0.35rem; }
  .c8cs-slide-tag { font-family: var(--font-mono); font-size: 8.5px; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; letter-spacing: 0.12em; }
  .c8cs-slide-title { font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; line-height: 1.3; }
  .c8cs-slide-desc { font-size: 13px; color: var(--c8-sub); font-weight: 300; line-height: 1.5; }

  /* 9:16 Video Reels Stage */
  .c8cs-reels-stage-wrap { padding: clamp(2.5rem, 3.5vw, 3.5rem) clamp(1.75rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-reels-stage-wrap { padding: 1.75rem 1.25rem; } }
  .c8cs-reels-stage-header { margin-bottom: 2rem; }
  .c8cs-reels-tag { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; letter-spacing: 0.14em; display: block; margin-bottom: 0.5rem; }
  .c8cs-reels-title { font-family: var(--font-heading); font-size: clamp(1.2rem, 2vw, 1.6rem); font-weight: 700; text-transform: uppercase; color: var(--c8-ink); }
  .c8cs-reels-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
  @media (max-width: 900px) { .c8cs-reels-grid { grid-template-columns: 1fr; } }
  .c8cs-reel-card { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FAFAF7; padding: clamp(1.5rem, 2vw, 2rem); display: grid; grid-template-columns: 240px 1fr; gap: 1.75rem; align-items: center; }
  @media (max-width: 650px) { .c8cs-reel-card { grid-template-columns: 1fr; } }
  .c8cs-phone-frame { width: 100%; max-width: 240px; aspect-ratio: 9 / 16; border-radius: 24px; background: #0F172A; padding: 8px; box-shadow: 0 16px 36px rgba(0,0,0,0.12); border: 2px solid #E2E8F0; position: relative; margin: 0 auto; }
  .c8cs-phone-notch { position: absolute; top: 12px; left: 50%; transform: translateX(-50%); width: 60px; height: 10px; background: #0F172A; border-radius: 6px; z-index: 10; }
  .c8cs-phone-screen { width: 100%; height: 100%; border-radius: 18px; overflow: hidden; position: relative; background: #000000; }
  .c8cs-reel-video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .c8cs-reel-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.25); transition: opacity 0.2s ease; cursor: pointer; }
  .c8cs-reel-card.is-playing .c8cs-reel-overlay { opacity: 0; pointer-events: none; }
  .c8cs-reel-play-btn { width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,0.9); border: none; color: var(--c8-ink); font-size: 18px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.2s ease; padding-left: 4px; }
  .c8cs-reel-play-btn:hover { transform: scale(1.1); }
  .c8cs-reel-details { display: flex; flex-direction: column; gap: 0.75rem; }
  .c8cs-reel-sub { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; letter-spacing: 0.12em; }
  .c8cs-reel-h4 { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); line-height: 1.3; }
  .c8cs-reel-quote-box { background: #FFFFFF; border: 1px solid var(--c8-grid-line); border-radius: 4px; padding: 1.25rem 1.5rem; display: flex; flex-direction: column; gap: 0.5rem; }
  .c8cs-reel-quote { font-size: 13.5px; color: var(--c8-sub); font-style: italic; line-height: 1.6; }
  .c8cs-reel-author { font-family: var(--font-mono); font-size: 10px; font-weight: 700; color: var(--c8-blue); letter-spacing: 0.08em; text-transform: uppercase; }

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

  /* ── INTERACTIVE LIGHTBOX INSPECTOR MODAL ── */
  .c8-lightbox {
    position: fixed; inset: 0; background: rgba(8, 8, 8, 0.94);
    backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
    z-index: 99999; display: none; flex-direction: column;
    align-items: center; justify-content: space-between; padding: 1.5rem;
    opacity: 0; transition: opacity 0.25s ease;
  }
  .c8-lightbox.is-open { display: flex; opacity: 1; }
  .c8-lb-topbar {
    width: 100%; max-width: 1400px; display: flex; align-items: center;
    justify-content: space-between; color: #FFFFFF; padding-bottom: 1rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12); font-family: var(--font-mono); font-size: 11px;
  }
  .c8-lb-title { color: #FFFFFF; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; }
  .c8-lb-actions { display: flex; align-items: center; gap: 1.25rem; }
  .c8-lb-close-btn {
    background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2);
    color: #FFFFFF; padding: 6px 14px; border-radius: 4px; cursor: pointer;
    font-family: var(--font-mono); font-size: 11px; font-weight: 700; transition: background 0.2s ease;
  }
  .c8-lb-close-btn:hover { background: rgba(255, 255, 255, 0.25); }
  .c8-lb-stage {
    position: relative; flex: 1; width: 100%; max-width: 1400px;
    display: flex; align-items: center; justify-content: center; padding: 1.5rem 0; overflow: hidden;
  }
  .c8-lb-stage img {
    max-width: 100%; max-height: 80vh; object-fit: contain; border-radius: 4px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.6); border: 1px solid rgba(255, 255, 255, 0.15);
    cursor: zoom-out; transition: transform 0.2s ease;
  }
  .c8-lb-phone-wrap {
    display: none;
    align-items: center;
    justify-content: center;
    height: 100%;
    max-height: 82vh;
    width: auto;
  }
  .c8-lightbox.is-mobile-view .c8-lb-phone-wrap {
    display: flex;
  }
  .c8-lightbox.is-mobile-view > .c8-lb-stage > img,
  .c8-lightbox.is-mobile-view #c8LbImg {
    display: none !important;
  }
  .c8-lb-phone-frame {
    height: 80vh;
    max-height: 760px;
    width: calc(80vh * 9 / 18.5);
    max-width: 370px;
    border-radius: 42px;
    background: #0B0F19;
    padding: 10px;
    box-shadow: 0 30px 90px rgba(0, 0, 0, 0.85), 0 0 0 1px rgba(255, 255, 255, 0.18), inset 0 0 0 2px #1E293B;
    position: relative;
    display: flex;
    flex-direction: column;
  }
  .c8-lb-phone-notch {
    position: absolute;
    top: 18px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 18px;
    background: #000000;
    border-radius: 10px;
    z-index: 10;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
  }
  .c8-lb-phone-screen {
    width: 100%;
    height: 100%;
    border-radius: 32px;
    overflow-y: auto;
    overflow-x: hidden;
    position: relative;
    background: #000000;
    -webkit-overflow-scrolling: touch;
  }
  .c8-lb-phone-screen img {
    width: 100% !important;
    height: 100% !important;
    max-height: none !important;
    object-fit: cover !important;
    object-position: top center !important;
    display: block !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    border: none !important;
    cursor: default !important;
  }
  [data-inspect-img] { cursor: zoom-in; }
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
          <span class="c8cs-meta-val">
            <?php if (!empty($active_data['meta_link_url'])): ?>
              <a href="<?php echo esc_url($active_data['meta_link_url']); ?>" target="_blank" rel="noopener" style="color: #0047E1; text-decoration: underline;"><?php echo esc_html($active_data['meta_link_text']); ?></a>
            <?php else: ?>
              <span style="color: #64748B; font-weight: 500;"><?php echo esc_html($active_data['meta_link_text'] ?: 'Archived Campaign'); ?></span>
            <?php endif; ?>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Scroll-Grow Media (Conditional) -->
  <?php if (!empty($active_data['hero_img'])): ?>
    <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
      <?php if (!empty($active_data['hero_vertical_img'])): ?>
        <div class="c8cs-hero-switcher">
          <button type="button" class="c8cs-switch-btn is-active" id="btnHeroLandscape" data-target="landscape">Portfolio Landscape (16:9)</button>
          <button type="button" class="c8cs-switch-btn" id="btnHeroVertical" data-target="vertical">Service Page Portrait (3:4)</button>
        </div>
      <?php endif; ?>

      <div class="c8cs-main-img-box" id="c8cs-grow-target">
        <?php if (!empty($active_data['hero_vertical_img'])): ?>
          <!-- Landscape Featured Image -->
          <div class="c8cs-hero-img-inner is-landscape" id="heroBoxLandscape" title="Click to Inspect Full-Resolution Landscape Hero">
            <img src="<?php echo cr8v_cs_img_src($active_data['hero_img']); ?>" alt="<?php echo esc_attr($active_data['client_name']); ?> case study hero showcase" data-inspect-img data-inspect-title="<?php echo esc_attr($active_data['client_name']); ?> - Portfolio Featured Visual (16:9)">
          </div>
          <!-- Vertical Service Page Hero -->
          <div class="c8cs-hero-img-inner is-vertical" id="heroBoxVertical" style="display: none;" title="Click to Inspect Full-Resolution Vertical Hero">
            <img src="<?php echo cr8v_cs_img_src($active_data['hero_vertical_img']); ?>" alt="<?php echo esc_attr($active_data['client_name']); ?> service page vertical hero" data-inspect-img data-inspect-title="<?php echo esc_attr($active_data['client_name']); ?> - Service Page Vertical Hero (3:4)">
          </div>
        <?php else: ?>
          <img src="<?php echo cr8v_cs_img_src($active_data['hero_img']); ?>" alt="<?php echo esc_attr($active_data['client_name']); ?> case study hero showcase">
        <?php endif; ?>
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
                      <img src="<?php echo cr8v_cs_img_src($active_data['asset_01_img']); ?>" alt="<?php echo esc_attr($active_data['asset_01_title']); ?>" data-inspect-img data-inspect-title="<?php echo esc_attr($active_data['asset_01_title']); ?>">
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
                      <img src="<?php echo cr8v_cs_img_src($active_data['asset_02_img']); ?>" alt="<?php echo esc_attr($active_data['asset_02_title']); ?>" data-inspect-img data-inspect-title="<?php echo esc_attr($active_data['asset_02_title']); ?>">
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
                    <img src="<?php echo cr8v_cs_img_src($active_data['asset_03_img']); ?>" alt="<?php echo esc_attr($active_data['asset_03_title']); ?>" data-inspect-img data-inspect-title="<?php echo esc_attr($active_data['asset_03_title']); ?>">
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Section 5.5: Dedicated Engineering Showcase & Creative Suite (Conditional) -->
  <?php 
  $sc = !empty($active_data['showcase_suite']) ? $active_data['showcase_suite'] : (!empty($active_data['social_campaign']) ? $active_data['social_campaign'] : null);
  if (!empty($sc)): 
  ?>
    <section class="c8cs-social-campaign-section">
      <div class="c8cs-wrap">
        <div class="c8cs-social-box">
          
          <!-- Section Header -->
          <div class="c8cs-social-header">
            <div class="c8cs-label"><?php echo esc_html(!empty($sc['label']) ? $sc['label'] : 'Production Engine & Administrative Architecture'); ?></div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0.75rem;"><?php echo esc_html(!empty($sc['title']) ? $sc['title'] : 'Engineered Systems & Workflows'); ?></h2>
            <?php if (!empty($sc['desc'])): ?>
              <p style="font-size: 15px; color: var(--c8-sub); max-width: 820px; line-height: 1.7; font-weight: 300; margin: 0;"><?php echo esc_html($sc['desc']); ?></p>
            <?php endif; ?>
          </div>

          <!-- Component A: 5-Slide Carousel Deck -->
          <?php if (!empty($sc['carousel'])): ?>
            <div class="c8cs-carousel-deck-wrap">
              <div class="c8cs-carousel-deck-topbar">
                <div class="c8cs-carousel-deck-title">
                  <span class="c8cs-badge-dot"></span>
                  <span><?php echo esc_html(!empty($sc['carousel_title']) ? $sc['carousel_title'] : 'System Architecture Carousel Deck // 5 Core Engineering Milestones'); ?></span>
                </div>
                <div class="c8cs-carousel-nav-controls">
                  <button type="button" class="c8cs-deck-nav-btn" data-carousel-btn="prev" aria-label="Previous Slide">&larr;</button>
                  <span class="c8cs-deck-counter" data-carousel-counter>01 / <?php echo sprintf('%02d', count($sc['carousel'])); ?></span>
                  <button type="button" class="c8cs-deck-nav-btn" data-carousel-btn="next" aria-label="Next Slide">&rarr;</button>
                </div>
              </div>

              <div class="c8cs-carousel-deck-track" data-carousel-track>
                <?php foreach ($sc['carousel'] as $c_idx => $c_slide): ?>
                  <div class="c8cs-carousel-slide-item" data-slide-index="<?php echo $c_idx; ?>">
                    <div class="c8cs-slide-media" title="Click to Inspect Slide 0<?php echo $c_idx + 1; ?>">
                      <img src="<?php echo cr8v_cs_img_src($c_slide['img']); ?>" alt="<?php echo esc_attr($c_slide['title'] ?? ''); ?>" loading="lazy" data-inspect-img data-inspect-title="Slide 0<?php echo $c_idx + 1; ?> // <?php echo esc_attr($c_slide['title'] ?? ''); ?>">
                      <span class="c8cs-slide-num-badge">SLIDE 0<?php echo $c_idx + 1; ?></span>
                    </div>
                    <div class="c8cs-slide-caption">
                      <?php if (!empty($c_slide['tag'])): ?>
                        <span class="c8cs-slide-tag"><?php echo esc_html($c_slide['tag']); ?></span>
                      <?php endif; ?>
                      <h4 class="c8cs-slide-title"><?php echo esc_html($c_slide['title']); ?></h4>
                      <?php if (!empty($c_slide['desc'])): ?>
                        <p class="c8cs-slide-desc"><?php echo esc_html($c_slide['desc']); ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

          <!-- Component B: Mobile Ergonomics Inspection Stage / Video Reels -->
          <?php if (!empty($sc['reels'])): ?>
            <div class="c8cs-reels-stage-wrap">
              <div class="c8cs-reels-stage-header">
                <span class="c8cs-reels-tag"><?php echo esc_html(!empty($sc['reels_tag']) ? $sc['reels_tag'] : 'Mobile Engineering // Responsive Touch Ergonomics'); ?></span>
                <h3 class="c8cs-reels-title"><?php echo esc_html(!empty($sc['reels_title']) ? $sc['reels_title'] : 'Mobile Navigation & Interface Inspection'); ?></h3>
              </div>
              <div class="c8cs-reels-grid">
                <?php foreach ($sc['reels'] as $r_idx => $reel): ?>
                  <div class="c8cs-reel-card" <?php if (!empty($reel['video'])) echo 'data-reel-card'; ?>>
                    <div class="c8cs-phone-frame">
                      <div class="c8cs-phone-notch"></div>
                      <div class="c8cs-phone-screen">
                        <?php if (!empty($reel['video'])): ?>
                          <video 
                            class="c8cs-reel-video" 
                            src="<?php echo cr8v_cs_img_src($reel['video']); ?>" 
                            poster="<?php echo !empty($reel['poster']) ? cr8v_cs_img_src($reel['poster']) : ''; ?>"
                            playsinline 
                            loop 
                            preload="metadata">
                          </video>
                          <div class="c8cs-reel-overlay" data-reel-play-trigger title="Click to Play / Pause">
                            <button type="button" class="c8cs-reel-play-btn" aria-label="Play Video">&#9654;</button>
                          </div>
                        <?php elseif (!empty($reel['img'])): ?>
                          <img src="<?php echo cr8v_cs_img_src($reel['img']); ?>" alt="<?php echo esc_attr($reel['title'] ?? ''); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;" data-inspect-img data-is-mobile="true" data-inspect-title="<?php echo esc_attr($reel['title'] ?? ''); ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="c8cs-reel-details">
                      <?php if (!empty($reel['tag'])): ?>
                        <span class="c8cs-reel-sub"><?php echo esc_html($reel['tag']); ?></span>
                      <?php endif; ?>
                      <h4 class="c8cs-reel-h4"><?php echo esc_html($reel['title']); ?></h4>
                      <?php if (!empty($reel['desc'])): ?>
                        <p style="font-size: 13.5px; color: var(--c8-sub); line-height: 1.6; font-weight: 300; margin: 0;"><?php echo esc_html($reel['desc']); ?></p>
                      <?php endif; ?>
                      <?php if (!empty($reel['quote'])): ?>
                        <div class="c8cs-reel-quote-box">
                          <p class="c8cs-reel-quote">&ldquo;<?php echo esc_html($reel['quote']); ?>&rdquo;</p>
                          <?php if (!empty($reel['author'])): ?>
                            <span class="c8cs-reel-author"><?php echo esc_html($reel['author']); ?></span>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
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
            <div class="c8cs-label"><?php echo esc_html(!empty($active_data['gallery_label']) ? $active_data['gallery_label'] : 'Visual Showcase'); ?></div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;"><?php echo esc_html($active_data['gallery_header'] ?: 'Platform Showcase & Production Gallery'); ?></h2>
          </div>

          <div class="c8cs-stream-grid">
            <?php foreach ($active_data['gallery'] as $gItem): ?>
              <div class="c8cs-stream-cell">
                <div class="c8cs-stream-img-box">
                  <img src="<?php echo cr8v_cs_img_src($gItem['img']); ?>" alt="<?php echo esc_attr($gItem['title']); ?>" data-inspect-img data-inspect-title="<?php echo esc_attr($gItem['title']); ?>">
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
          $related_keys = [];
          foreach ($portfolio_data_matrix as $k => $item) {
            if (($item['status'] ?? 'published') === 'published') {
              $related_keys[] = $k;
            }
          }
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

<!-- Lightbox Inspector Modal -->
<div class="c8-lightbox" id="c8Lightbox" role="dialog" aria-modal="true" aria-label="Image Inspector">
  <div class="c8-lb-topbar">
    <span class="c8-lb-title" id="c8LbTitle">Image Inspector</span>
    <button type="button" class="c8-lb-close-btn" id="c8LbClose" aria-label="Close Inspector">Esc / Close &times;</button>
  </div>
  <div class="c8-lb-stage">
    <img src="" alt="" id="c8LbImg">
    <div class="c8-lb-phone-wrap" id="c8LbPhoneWrap">
      <div class="c8-lb-phone-frame">
        <div class="c8-lb-phone-notch"></div>
        <div class="c8-lb-phone-screen">
          <img src="" alt="" id="c8LbPhoneImg">
        </div>
      </div>
    </div>
  </div>
</div>

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

    // Section 5.5: Social Campaign Carousel Track Controls & Counter
    var deckWraps = document.querySelectorAll('.c8cs-carousel-deck-wrap');
    deckWraps.forEach(function (wrap) {
      var track = wrap.querySelector('[data-carousel-track]');
      var counter = wrap.querySelector('[data-carousel-counter]');
      var prevBtn = wrap.querySelector('[data-carousel-btn="prev"]');
      var nextBtn = wrap.querySelector('[data-carousel-btn="next"]');
      var slides = wrap.querySelectorAll('.c8cs-carousel-slide-item');
      if (!track || slides.length === 0) return;

      var totalSlides = slides.length;

      function updateCounter() {
        if (!counter) return;
        var slideWidth = slides[0].offsetWidth + 24;
        var currentIdx = Math.round(track.scrollLeft / slideWidth);
        if (currentIdx < 0) currentIdx = 0;
        if (currentIdx >= totalSlides) currentIdx = totalSlides - 1;
        var num = (currentIdx + 1) < 10 ? '0' + (currentIdx + 1) : (currentIdx + 1);
        var total = totalSlides < 10 ? '0' + totalSlides : totalSlides;
        counter.textContent = num + ' / ' + total;
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', function () {
          var step = slides[0].offsetWidth + 24;
          track.scrollBy({ left: -step, behavior: 'smooth' });
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', function () {
          var step = slides[0].offsetWidth + 24;
          track.scrollBy({ left: step, behavior: 'smooth' });
        });
      }

      var scrollTimer = null;
      track.addEventListener('scroll', function () {
        if (scrollTimer) clearTimeout(scrollTimer);
        scrollTimer = setTimeout(updateCounter, 60);
      }, { passive: true });
    });

    // Section 5.5: 9:16 Video Reel Play/Pause Toggle
    var reelCards = document.querySelectorAll('[data-reel-card]');
    reelCards.forEach(function (card) {
      var video = card.querySelector('.c8cs-reel-video');
      var trigger = card.querySelector('[data-reel-play-trigger]');
      if (!video) return;

      function togglePlay() {
        if (video.paused) {
          // Pause any other playing reels
          document.querySelectorAll('.c8cs-reel-video').forEach(function (v) {
            if (v !== video && !v.paused) {
              v.pause();
              var pCard = v.closest('[data-reel-card]');
              if (pCard) pCard.classList.remove('is-playing');
            }
          });
          video.play().then(function () {
            card.classList.add('is-playing');
          }).catch(function (err) {
            console.log('Video play prevented:', err);
          });
        } else {
          video.pause();
          card.classList.remove('is-playing');
        }
      }

      if (trigger) {
        trigger.addEventListener('click', togglePlay);
      }
      video.addEventListener('click', togglePlay);
      video.addEventListener('pause', function () { card.classList.remove('is-playing'); });
      video.addEventListener('ended', function () { card.classList.remove('is-playing'); });
    });

    // Hero Switcher Logic (Landscape 16:9 vs Vertical 3:4)
    var btnLandscape = document.getElementById('btnHeroLandscape');
    var btnVertical = document.getElementById('btnHeroVertical');
    var boxLandscape = document.getElementById('heroBoxLandscape');
    var boxVertical = document.getElementById('heroBoxVertical');

    if (btnLandscape && btnVertical && boxLandscape && boxVertical) {
      btnLandscape.addEventListener('click', function () {
        btnLandscape.classList.add('is-active');
        btnVertical.classList.remove('is-active');
        boxLandscape.style.display = 'block';
        boxVertical.style.display = 'none';
      });
      btnVertical.addEventListener('click', function () {
        btnVertical.classList.add('is-active');
        btnLandscape.classList.remove('is-active');
        boxLandscape.style.display = 'none';
        boxVertical.style.display = 'block';
      });
    }

    // Interactive Lightbox Inspector Engine
    var lightbox = document.getElementById('c8Lightbox');
    var lbImg = document.getElementById('c8LbImg');
    var lbPhoneImg = document.getElementById('c8LbPhoneImg');
    var lbTitle = document.getElementById('c8LbTitle');
    var lbClose = document.getElementById('c8LbClose');

    if (lightbox && lbImg && lbTitle) {
      var inspectImages = Array.from(document.querySelectorAll('[data-inspect-img]'));
      var currentLbIndex = 0;

      function openLightbox(index) {
        if (index < 0) index = inspectImages.length - 1;
        if (index >= inspectImages.length) index = 0;
        currentLbIndex = index;
        var el = inspectImages[currentLbIndex];
        if (!el) return;
        var title = el.getAttribute('data-inspect-title') || el.alt || 'Asset Inspection';
        var isMobile = el.getAttribute('data-is-mobile') === 'true' || 
                       el.closest('.c8cs-phone-frame') !== null ||
                       el.closest('[data-is-mobile="true"]') !== null;

        if (isMobile && lbPhoneImg) {
          lightbox.classList.add('is-mobile-view');
          lbPhoneImg.src = el.src;
          lbPhoneImg.alt = title;
        } else {
          lightbox.classList.remove('is-mobile-view');
          lbImg.src = el.src;
          lbImg.alt = title;
        }

        lbTitle.textContent = title;
        lightbox.classList.add('is-open');
        document.body.style.overflow = 'hidden';
      }

      function closeLightbox() {
        lightbox.classList.remove('is-open');
        document.body.style.overflow = '';
      }

      inspectImages.forEach(function (imgEl, idx) {
        imgEl.addEventListener('click', function (e) {
          e.preventDefault();
          openLightbox(idx);
        });
      });

      if (lbClose) {
        lbClose.addEventListener('click', closeLightbox);
      }

      lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox || e.target.classList.contains('c8-lb-stage')) {
          closeLightbox();
        }
      });

      document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('is-open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') openLightbox(currentLbIndex - 1);
        if (e.key === 'ArrowRight') openLightbox(currentLbIndex + 1);
      });
    }
  });
</script>

<?php get_footer(); ?>
