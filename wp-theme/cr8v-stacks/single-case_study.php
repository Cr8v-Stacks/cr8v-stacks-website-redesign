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
$active_slug = 'the-duch-apartments'; // default fallback
$all_slug_checks = [$post_slug, $uri_slug, $raw_uri, $post_title, $query_var_name];

$slug_match_rules = [
  'the-duch-apartments'    => ['duch', 'the-duch', 'the-duch-apartments'],
  'mkenny-properties'      => ['mkenny', 'mkenny-properties', 'mkennyproperties'],
  'wp-publishion-ai'       => ['wp-publishion', 'publishion', 'wp-publishion-ai'],
  'blvck-hair-ng'          => ['blvck', 'blvck-hair', 'blvck-hair-ng', 'blvckhair'],
  'bridgepoint-compliance' => ['bridgepoint-compliance', 'bridgepoint-consulting', 'compliance-analysis'],
  'bridgepoint-advisory'   => ['bridgepoint-advisory', 'bridgepoint-brand', 'bridgepoints'],
  'victorias-lane'         => ['victorias-lane', 'victoria-lane', 'victoriaslane'],
  'sweetermen-ng'          => ['sweetermen', 'sweetermen-ng'],
  'stride-plus-media'      => ['stride', 'stride-plus', 'stride-plus-media', 'strideradio'],
  'kiri-city-stays'        => ['kiri', 'kiri-city', 'kiri-city-stays', 'kiricitystays'],
];

foreach ($slug_match_rules as $canonical_key => $patterns) {
  foreach ($patterns as $pat) {
    foreach ($all_slug_checks as $check_str) {
      if (!empty($check_str) && stripos($check_str, $pat) !== false) {
        $active_slug = $canonical_key;
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
    'asset_03_desc' => 'By architecting a proprietary guest acquisition and payment pipeline, The Duch Apartments reclaimed full pricing sovereignty, eliminated OTA commission leakages, and retained 100% of guest reservation data.',
    'asset_03_points'=> [
      'Zero Third-Party Commission: Direct guest transactions retain 100% of room revenue.',
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
      ['val' => '+340%', 'lbl' => 'Direct Revenue Growth', 'desc' => 'Massive shift from OTA dependency to direct guest website reservations in the first 90 days.'],
      ['val' => '0%', 'lbl' => 'Commission Leakage', 'desc' => 'Zero intermediary fees paid on direct website bookings, protecting bottom-line hospitality margins.'],
      ['val' => '100%', 'lbl' => 'Guest Data Ownership', 'desc' => 'Proprietary customer booking profiles retained directly in client CRM for repeat direct stays.']
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
      ['val' => '100%', 'lbl' => 'Lead Retention', 'desc' => 'Proprietary lead capture architecture routing 100% of UK investor and buyer inquiries directly to internal sales brokers.'],
      ['val' => '0%', 'lbl' => 'Portal Commission Leakage', 'desc' => 'Eliminated reliance on third-party aggregator listing fees for direct development sales.'],
      ['val' => '100%', 'lbl' => 'Editorial Autonomy', 'desc' => 'Custom Elementor widget suite allows internal team to publish new schemes in minutes.']
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
    'asset_03_desc' => '100% in-house AI engine eliminating subscription lock-in and keeping all training data and editorial content proprietary.',
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
      ['val' => '0', 'lbl' => 'SaaS Lock-in', 'desc' => '100% client-owned infrastructure with zero per-seat subscription markup.'],
      ['val' => '100%', 'lbl' => 'In-House Build', 'desc' => 'Designed, engineered, and operated entirely by Cr8v Stacks.']
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
      ['val' => '2', 'lbl' => 'Active Storefronts', 'desc' => 'Expanded from single location to live storefronts in Nigeria & UK.'],
      ['val' => '100s', 'lbl' => 'Customer Reviews', 'desc' => 'Accumulated across both regional operations.'],
      ['val' => '100%', 'lbl' => 'Organic Verification', 'desc' => 'Verifiable live right now on Google search.']
    ],
    'live_url'      => 'https://blvckhairng.com/'
  ]
];

// Helper to locate theme image safely
function cr8v_cs_img_src($filename, $fallback = 'case_study_duch_apartments.webp') {
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  if (!empty($filename) && file_exists($theme_dir . '/assets/img/case_studies/' . $filename)) {
    return $theme_uri . '/assets/img/case_studies/' . esc_attr($filename);
  }
  if (!empty($fallback) && file_exists($theme_dir . '/assets/img/case_studies/' . $fallback)) {
    return $theme_uri . '/assets/img/case_studies/' . esc_attr($fallback);
  }
  return $theme_uri . '/assets/img/case_studies/' . esc_attr($filename);
}

// Fallback for remaining slugs
$active_data = $portfolio_data_matrix[$active_slug] ?? $portfolio_data_matrix['the-duch-apartments'];

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

  <!-- Section 2: Scroll-Grow Media -->
  <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
    <div class="c8cs-main-img-box" id="c8cs-grow-target">
      <img src="<?php echo cr8v_cs_img_src($active_data['hero_img'], 'case_study_duch_apartments.webp'); ?>" alt="<?php echo esc_attr($active_data['client_name']); ?> case study hero showcase">
    </div>
  </div>

  <!-- Section 3: Strategic Overview -->
  <section class="c8cs-wrap">
    <div class="c8cs-split-section">
      <div class="c8cs-split-left">
        <div class="c8cs-label">Overview</div>
        <h2 class="c8cs-split-title"><?php echo wp_kses_post($active_data['overview_title']); ?></h2>
        <div class="c8cs-body-content">
          <p><?php echo esc_html($active_data['overview_p1']); ?></p>
          <p><?php echo esc_html($active_data['overview_p2']); ?></p>
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

  <!-- Section 4: Core Technical Deliverables (2-Up Grid) -->
  <section class="c8cs-deliverables-section">
    <div class="c8cs-wrap">
      <div class="c8cs-deliverables-box">
        <div class="c8cs-deliverables-header">
          <div class="c8cs-label">Design &amp; Engineering</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Core Technical Deliverables</h2>
        </div>

        <div class="c8cs-deliverables-grid">
          <!-- Asset 01 -->
          <div class="c8cs-deliverable-card">
            <div>
              <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_01_meta']); ?></div>
              <h3 class="c8cs-deliverable-title"><?php echo esc_html($active_data['asset_01_title']); ?></h3>
              <p class="c8cs-deliverable-desc"><?php echo esc_html($active_data['asset_01_desc']); ?></p>
            </div>
            <div class="c8cs-deliverable-img-box">
              <img src="<?php echo cr8v_cs_img_src($active_data['asset_01_img'], 'duch_asset_01_design_system.webp'); ?>" alt="<?php echo esc_attr($active_data['asset_01_title']); ?>">
            </div>
          </div>

          <!-- Asset 02 -->
          <div class="c8cs-deliverable-card">
            <div>
              <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_02_meta']); ?></div>
              <h3 class="c8cs-deliverable-title"><?php echo esc_html($active_data['asset_02_title']); ?></h3>
              <p class="c8cs-deliverable-desc"><?php echo esc_html($active_data['asset_02_desc']); ?></p>
            </div>
            <div class="c8cs-deliverable-img-box">
              <img src="<?php echo cr8v_cs_img_src($active_data['asset_02_img'], 'duch_asset_02_experience.webp'); ?>" alt="<?php echo esc_attr($active_data['asset_02_title']); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Sovereignty Architecture Split (3:4) -->
  <section class="c8cs-sovereignty-section">
    <div class="c8cs-wrap">
      <div class="c8cs-sovereignty-box">
        <div class="c8cs-sovereignty-split">
          <!-- Left: Narrative -->
          <div class="c8cs-sovereignty-left">
            <div class="c8cs-deliverable-meta"><?php echo esc_html($active_data['asset_03_meta']); ?></div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 1.25rem;"><?php echo esc_html($active_data['asset_03_title']); ?></h2>
            <p style="font-size: 15px; color: var(--c8-sub); line-height: 1.7; margin-bottom: 1.5rem; font-weight: 300;"><?php echo esc_html($active_data['asset_03_desc']); ?></p>
            <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 0.5rem;">
              <?php foreach ($active_data['asset_03_points'] as $idx => $pt): ?>
                <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                  <span style="color: var(--c8-blue); font-weight: 700; font-family: var(--font-mono); font-size: 13px;">0<?php echo $idx + 1; ?></span>
                  <span style="font-size: 14px; color: var(--c8-ink); line-height: 1.5;"><?php echo esc_html($pt); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Right: 3:4 Native Vertical Asset -->
          <div class="c8cs-sovereignty-right">
            <div class="c8cs-sovereignty-img-box">
              <img src="<?php echo cr8v_cs_img_src($active_data['asset_03_img'], 'duch_asset_03_ecosystem.webp'); ?>" alt="<?php echo esc_attr($active_data['asset_03_title']); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Pure Visual Gallery Stream -->
  <section class="c8cs-stream-section">
    <div class="c8cs-wrap">
      <div class="c8cs-stream-box">
        <div class="c8cs-stream-header">
          <div class="c8cs-label">Visual Gallery</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;"><?php echo esc_html($active_data['gallery_header']); ?></h2>
        </div>

        <div class="c8cs-stream-grid">
          <?php foreach ($active_data['gallery'] as $gItem): ?>
            <div class="c8cs-stream-cell">
              <div class="c8cs-stream-img-box">
                <img src="<?php echo cr8v_cs_img_src($gItem['img'], 'cs_duch_gallery_01_laptop.webp'); ?>" alt="<?php echo esc_attr($gItem['title']); ?>">
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

  <!-- Section 7: Outcomes Metrics Matrix -->
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
              <p class="c8cs-metric-desc" <?php if ($mIdx === count($active_data['metrics']) - 1) echo 'style="margin-bottom: 1.5rem;"'; ?>><?php echo esc_html($m['desc']); ?></p>
              
              <?php if ($mIdx === count($active_data['metrics']) - 1): ?>
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
          $related_keys = ['the-duch-apartments', 'mkenny-properties', 'wp-publishion-ai', 'blvck-hair-ng'];
          $rendered = 0;
          foreach ($related_keys as $rKey):
            if ($rKey === $active_slug) continue;
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
