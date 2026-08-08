import os
import re

case_studies_dir = r"c:\Users\HP\Downloads\Mega Menu\Case Studies"

all_case_studies = {
    "the-duch-apartments.html": {
        "title": "The Duch Apartments",
        "tagline": "Case Study // Real Estate & Hospitality",
        "h1": "The Duch Apartments: Direct Booking & <span class=\"c8cs-serif\">Brand Identity</span>",
        "lead": "The Duch Apartments needed a complete digital presence to drive direct room reservations without depending entirely on third-party OTA platforms. We built their brand identity, developed a custom room catalog, and deployed an entity SEO architecture that ranks organically for local Lagos luxury stay queries.",
        "pills": ["Web Design", "Entity SEO", "WordPress Custom", "Brand Identity"],
        "client": "The Duch Apartments",
        "services": "Web Design & Entity SEO",
        "stack": "WordPress · Custom Code",
        "link_label": "theduchapartments.com ↗",
        "link_url": "https://theduchapartments.com/",
        "img_main": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "The Duch Apartments was launching new luxury serviced apartments in Lekki, Lagos. Relying exclusively on third-party OTAs (Booking.com, Airbnb) meant paying high commission fees and losing direct control over guest relationships, brand messaging, and recurring bookings.",
        "problem_p2": "They needed their own direct booking platform with zero template bloat, instant mobile performance, and a clear brand identity system that communicated luxury living.",
        "steps": [
            ("01 / Brand Strategy & Identity System", "Developed a high-trust color token palette (emerald green, warm sand, slate dark), primary logotype, typography scales, and visual guidelines."),
            ("02 / Custom Room Catalog Architecture", "Engineered clean custom Gutenberg & Elementor room layout templates with high-res gallery carousels, amenity matrices, and location maps."),
            ("03 / Entity SEO & Schema Integration", "Structured Schema.org LocalBusiness and LodgingBusiness JSON-LD code directly into the site header to dominate local search queries."),
            ("04 / Speed & Conversion Optimization", "Tuned asset loading pipelines to achieve sub-2 second mobile page loads and seamless WhatsApp / direct reservation conversion paths.")
        ],
        "metrics": [
            ("1", "Unified Brand System", "We created a cohesive visual identity (logo, color system, typography) that the client uses across all social media and offline campaigns."),
            ("100%", "Direct booking base", "Designed and deployed a custom room-listing catalog and reservation checkout flow entirely hosted on their own website.")
        ],
        "related": [
            ("01 / Web Design & Booking", "Kiri City Stays", "Direct booking platform & luxury stay catalog engineered for seamless reservations and local SEO visibility.", "kiri-city-stays.html"),
            ("02 / Custom Dev", "Bridgepoint Advisory", "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.", "bridgepoint-consulting.html"),
            ("03 / WordPress Custom", "Mkenny Properties", "Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.", "mkenny-properties.html")
        ]
    },
    "bridgepoint-consulting.html": {
        "title": "Bridgepoint Advisory",
        "tagline": "Case Study // Corporate & Custom Dev",
        "h1": "Bridgepoint Advisory: Custom Compliance <span class=\"c8cs-serif\">&amp; SQL App</span>",
        "lead": "Bridgepoint Advisory Services required a high-security internal compliance web portal to streamline corporate auditing. We engineered a zero-template React and Node.js solution with custom relational database queries and role-based data encryption.",
        "pills": ["Custom Dev", "React & Node", "PostgreSQL", "Data Security"],
        "client": "Bridgepoint Advisory",
        "services": "Custom Development",
        "stack": "React · Node.js · SQL",
        "link_label": "bridgepoints.ng ↗",
        "link_url": "https://bridgepoints.ng/",
        "img_main": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Operating in high-tier financial consulting, Bridgepoint faced major bottlenecks managing client compliance audits using manual spreadsheets and generic cloud forms.",
        "problem_p2": "They needed a dedicated internal compliance portal capable of parsing complex financial data models securely while maintaining zero latency across multi-user sessions.",
        "steps": [
            ("01 / Relational Database Architecture", "Designed normalized PostgreSQL relational schemas optimized for high-speed audit record indexing."),
            ("02 / Secure Authentication & RBAC", "Configured JWT multi-factor authentication with granular role-based access control for corporate compliance officers."),
            ("03 / Custom Frontend Dashboard", "Hand-coded a dark glassmorphic React admin interface featuring real-time data visualizers."),
            ("04 / Automated Audit Reporting", "Engineered background worker threads to automatically generate encrypted PDF compliance reports.")
        ],
        "metrics": [
            ("4x", "Audit Review Velocity", "Accelerated corporate compliance file verification turnaround times from 5 business days down to 24 hours."),
            ("0%", "Template Overhead", "Built 100% from scratch with zero third-party plugin dependencies or security vulnerabilities.")
        ],
        "related": [
            ("01 / AI MVP Development", "WP Publishion AI", "Autonomous AI content engine powered by Python FastAPI, Claude API, OpenAI, and vector database retrieval.", "wp-publishion-ai.html"),
            ("02 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("03 / Brand Identity Design", "BridgePoints Brand Identity", "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.", "bridgepoints.html")
        ]
    },
    "bridgepoints.html": {
        "title": "BridgePoints Brand Identity",
        "tagline": "Case Study // Brand Identity & Vector Design",
        "h1": "BridgePoints: Corporate Visual <span class=\"c8cs-serif\">Brand Identity</span>",
        "lead": "Bridgepoint Advisory Services needed a visual identity system that commanded authority in corporate financial markets. We crafted an original vector logo mark, set color swatch tokens, and compiled a comprehensive brand manual for digital and print collateral.",
        "pills": ["Brand Identity", "Vector Logo", "Design Tokens", "Brand Manual"],
        "client": "Bridgepoint Advisory",
        "services": "Brand Identity Design",
        "stack": "Figma · Vector Assets",
        "link_label": "bridgepoints.ng ↗",
        "link_url": "https://bridgepoints.ng/",
        "img_main": "https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "As Bridgepoint expanded its corporate advisory portfolio, their legacy visual assets lacked the premium polish required for high-stakes enterprise presentations.",
        "problem_p2": "They needed a flexible vector design system that maintained absolute consistency across dark web UIs, executive pitch decks, and large-scale print collateral.",
        "steps": [
            ("01 / Geometric Logo Exploration", "Hand-sketched and vectorized modern geometric logotypes representing structural stability and corporate growth."),
            ("02 / Color & Typography Tokenization", "Curated a high-contrast corporate palette (#0047E1 Royal Blue, Obsidian Slate) and paired precision sans-serif typography."),
            ("03 / Brand Guidelines Manual", "Compiled a 40-page digital brand book defining clear spacing grids, clear-space boundaries, and color usage rules."),
            ("04 / Production Asset Package", "Delivered complete SVG, EPS, PNG, and PDF asset packages optimized for print resolution and web UI performance.")
        ],
        "metrics": [
            ("100%", "Original Vector System", "Hand-crafted vector marks created entirely from scratch with zero stock templates or pre-made icons."),
            ("1", "Unified Style Guide", "Delivered a single source of truth for all external marketing, web development, and executive presentation design.")
        ],
        "related": [
            ("01 / Digital Marketing", "Stride Plus Media", "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.", "stride-plus-media.html"),
            ("02 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("03 / Shopify Storefront", "Victoria's Lane", "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.", "victorias-lane.html")
        ]
    },
    "wp-publishion-ai.html": {
        "title": "WP Publishion AI",
        "tagline": "Case Study // Artificial Intelligence & SaaS",
        "h1": "WP Publishion AI: Autonomous Content <span class=\"c8cs-serif\">Engine SaaS</span>",
        "lead": "WP Publishion AI is a cutting-edge SaaS platform that automates high-authority editorial publishing. We built the full AI MVP combining Python FastAPI backend pipelines, Claude & OpenAI API routing, and Supabase pgvector database retrieval.",
        "pills": ["AI MVP Dev", "FastAPI & Python", "Supabase Vector", "Multi-LLM"],
        "client": "WP Publishion AI",
        "services": "AI MVP Development",
        "stack": "Python · FastAPI · Supabase",
        "link_label": "Sandbox Playground ↗",
        "link_url": "https://cr8vstacks.com/dev-playground/wp-publishion-ai/",
        "img_main": "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Traditional content creation workflows suffer from bottlenecked production times and high agency costs. The client envisioned an AI engine capable of generating research-backed, SEO-ready articles automatically.",
        "problem_p2": "The system required multi-model fallback logic (Claude 3.5 Sonnet + GPT-4o), vector database RAG grounding, and automatic WordPress REST API posting.",
        "steps": [
            ("01 / Python FastAPI Architecture", "Engineered asynchronous API backend services capable of processing complex prompt pipelines concurrently."),
            ("02 / Vector Embeddings & RAG", "Integrated Supabase pgvector to store domain-specific context embeddings for accurate model retrieval."),
            ("03 / Multi-LLM Model Routing", "Built intelligent router logic to select optimal LLMs based on task complexity, token limits, and speed requirements."),
            ("04 / Automated WordPress Integration", "Connected webhooks to automatically format markdown content and publish directly into client WordPress sites.")
        ],
        "metrics": [
            ("10x", "Publishing Velocity", "Reduced article generation and publishing times from hours down to under 60 seconds."),
            ("100%", "Proprietary IP", "Client owns every line of backend Python code, custom system prompts, and vector pipeline configurations.")
        ],
        "related": [
            ("01 / Custom Dev", "Bridgepoint Advisory", "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.", "bridgepoint-consulting.html"),
            ("02 / SEO & Content Strategy", "blvck Hair NG", "Organic revenue growth powered by semantic keyword mapping and entity search architecture.", "blvck-hair-ng.html"),
            ("03 / Digital Marketing", "Stride Plus Media", "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.", "stride-plus-media.html")
        ]
    },
    "stride-plus-media.html": {
        "title": "Stride Plus Media",
        "tagline": "Case Study // Media & Paid Growth",
        "h1": "Stride Plus Media: Brand Strategy <span class=\"c8cs-serif\">&amp; Paid Acquisition</span>",
        "lead": "Stride Plus Media needed to expand listener acquisition for Stride Radio. We architected a multi-channel digital marketing engine combining targeted Meta Ads, Google Ads search campaigns, and conversion tracking to scale audience retention.",
        "pills": ["Digital Marketing", "Meta Ads", "Google Ads", "Conversion Funnels"],
        "client": "Stride Radio",
        "services": "Digital Marketing & Strategy",
        "stack": "Meta Ads · Google Ads · GTM",
        "link_label": "strideradio.ng ↗",
        "link_url": "https://strideradio.ng/",
        "img_main": "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Stride Radio was looking to break through noisy digital media markets and capture loyal daily listeners without wasting budget on broad, un-targeted ad impressions.",
        "problem_p2": "They needed server-side tracking infrastructure, high-converting ad creative copy, and audience segment funnels tailored to music and broadcast enthusiasts.",
        "steps": [
            ("01 / Audience Persona & Market Mapping", "Identified primary listener demographics, micro-interests, and media consumption habits across key regions."),
            ("02 / Multi-Channel Paid Ad Setup", "Configured hyper-targeted Google Search and Meta Video ad campaigns with strict CPA caps."),
            ("03 / Server-Side Tracking & GTM", "Deployed Google Tag Manager server-side tracking to capture 100% of conversion signals past iOS restrictions."),
            ("04 / Creative A/B Testing Engine", "Tested audio snippets, video teasers, and static display copy to optimize click-through rates (CTR).")
        ],
        "metrics": [
            ("+320%", "Monthly Listener Growth", "Scaled verified streaming sessions across broadcast channels within 90 days of campaign launch."),
            ("2.4x", "Ad Spend Efficiency", "Reduced acquisition cost per listener through continuous creative and audience bid optimization.")
        ],
        "related": [
            ("01 / WooCommerce & Paid Ads", "SweeterMen NG", "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.", "sweetermen-ng.html"),
            ("02 / Brand Identity Design", "BridgePoints Brand Identity", "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.", "bridgepoints.html"),
            ("03 / SEO & Content Strategy", "blvck Hair NG", "Organic revenue growth powered by semantic keyword mapping and entity search architecture.", "blvck-hair-ng.html")
        ]
    },
    "blvck-hair-ng.html": {
        "title": "blvck Hair NG",
        "tagline": "Case Study // E-Commerce & Organic Search",
        "h1": "blvck Hair NG: Organic Revenue <span class=\"c8cs-serif\">&amp; Entity SEO</span>",
        "lead": "blvck Hair NG is a premier hair extension brand in Nigeria. We implemented an Entity SEO architecture, optimized technical crawl efficiency, and engineered semantic content clusters that drove a 400% surge in organic Google search traffic.",
        "pills": ["SEO & Content", "Entity Schema", "Keyword Mapping", "E-Commerce SEO"],
        "client": "blvck Hair NG",
        "services": "SEO & Content Strategy",
        "stack": "WordPress · WooCommerce · JSON-LD",
        "link_label": "blvckhair.ng ↗",
        "link_url": "https://blvckhair.ng/",
        "img_main": "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "In a fiercely competitive e-commerce niche, blvck Hair NG was paying steep ad acquisition costs to acquire customers on social media platforms.",
        "problem_p2": "They needed a sustainable organic search engine channel to rank on Google Page 1 for high-intent commercial keywords like 'human hair extensions Lagos'.",
        "steps": [
            ("01 / Technical SEO Audit & Crawl Fixes", "Resolved crawl budget bottlenecks, fixed broken internal links, and accelerated mobile LCP page load speed."),
            ("02 / Semantic Keyword & Entity Mapping", "Mapped high-intent commercial search queries to dedicated category archives and product detail pages."),
            ("03 / Schema JSON-LD Structured Data", "Injected Product, Offer, and Organization JSON-LD schema markup directly into page headers."),
            ("04 / Authority Content Clusters", "Published comprehensive hair care guides and buying manuals to establish topical domain authority.")
        ],
        "metrics": [
            ("+400%", "Organic Search Growth", "Engineered rank velocity pushing top commercial keywords into Google top 3 organic positions."),
            ("3.8x", "Organic Return on Investment", "Generated consistent monthly revenue without ongoing ad spend reliance.")
        ],
        "related": [
            ("01 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("02 / Digital Marketing", "Stride Plus Media", "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.", "stride-plus-media.html"),
            ("03 / WooCommerce & Paid Ads", "SweeterMen NG", "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.", "sweetermen-ng.html")
        ]
    },
    "sweetermen-ng.html": {
        "title": "SweeterMen NG",
        "tagline": "Case Study // Luxury E-Commerce & WooCommerce",
        "h1": "SweeterMen NG: Full-Stack <span class=\"c8cs-serif\">WooCommerce Store</span>",
        "lead": "SweeterMen NG required a high-conversion e-commerce platform for luxury men's accessories. We engineered a custom WooCommerce theme with zero plugin bloat, custom checkout hooks, and integrated paid Meta ad campaigns.",
        "pills": ["WooCommerce", "Custom PHP", "Paid Growth", "Checkout CRO"],
        "client": "SweeterMen NG",
        "services": "WooCommerce & Paid Ads",
        "stack": "WordPress · WooCommerce · Meta Ads",
        "link_label": "sweetermen.ng ↗",
        "link_url": "https://sweetermen.ng/",
        "img_main": "https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "SweeterMen NG was struggling with high cart abandonment rates and slow page loading times on their legacy WooCommerce setup.",
        "problem_p2": "They needed a sleek custom storefront with an app-free 1-step checkout drawer, seamless mobile payment gateway wiring, and targeted ad funnels.",
        "steps": [
            ("01 / Custom WooCommerce Theme Code", "Hand-coded a responsive PHP theme eliminating 15+ heavy third-party plugins for sub-1.5s load speeds."),
            ("02 / AJAX Cart & Quick Checkout Drawer", "Built a custom AJAX slide-out cart drawer with instant quantity updates and express payment options."),
            ("03 / Payment Gateway Optimization", "Integrated Paystack & Flutterwave secure checkout webhooks with automated order confirmation triggers."),
            ("04 / Dynamic Meta Conversion Retargeting", "Deployed Meta Pixel event triggers to retarget cart abandoners with dynamic product ad sets.")
        ],
        "metrics": [
            ("+45%", "Cart Checkout Conversion", "Increased completed order velocity through streamlined 1-step mobile checkout paths."),
            ("1.4s", "Average Mobile Page Load", "Achieved lightning-fast loading speeds on mobile devices for seamless shopping UX.")
        ],
        "related": [
            ("01 / Shopify Storefront", "Victoria's Lane", "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.", "victorias-lane.html"),
            ("02 / Digital Marketing", "Stride Plus Media", "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.", "stride-plus-media.html"),
            ("03 / SEO & Content Strategy", "blvck Hair NG", "Organic revenue growth powered by semantic keyword mapping and entity search architecture.", "blvck-hair-ng.html")
        ]
    },
    "victorias-lane.html": {
        "title": "Victoria's Lane",
        "tagline": "Case Study // Fashion & Shopify Liquid",
        "h1": "Victoria's Lane: Shopify Storefront <span class=\"c8cs-serif\">&amp; Liquid Dev</span>",
        "lead": "Victoria's Lane is an exclusive luxury handbag brand. We hand-coded a bespoke Shopify Liquid storefront featuring custom product filters, an app-free AJAX cart drawer, and high-converting PDP visual showcases.",
        "pills": ["Shopify Liquid", "Custom Theme", "AJAX Cart", "Fashion CRO"],
        "client": "Victoria's Lane",
        "services": "Shopify Storefront & CRO",
        "stack": "Shopify · Liquid · JavaScript",
        "link_label": "victoriaslane.com ↗",
        "link_url": "https://victoriaslane.com/",
        "img_main": "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Victoria's Lane needed a storefront that reflected high fashion elegance without falling into generic Shopify theme templates or app bloat fees.",
        "problem_p2": "They required custom Liquid template logic for variant swatches, high-resolution product video showcases, and instant cart drawer slideouts.",
        "steps": [
            ("01 / Custom Shopify Liquid Architecture", "Hand-coded custom Liquid templates from a blank canvas with zero third-party page builder plugins."),
            ("02 / Custom Variant Swatch Engine", "Built dynamic JS color swatch selectors updating PDP imagery instantly without page reloads."),
            ("03 / AJAX Slide-Out Cart Drawer", "Engineered an app-free cart drawer with upsell triggers and free shipping threshold meters."),
            ("04 / Mobile Performance & Speed Tuning", "Optimized Liquid asset loading to achieve top-tier Google PageSpeed scores across mobile viewports.")
        ],
        "metrics": [
            ("98/100", "Google PageSpeed Score", "Hand-coded Liquid architecture delivering ultra-fast shopping performance without template bloat."),
            ("+38%", "Average Order Value (AOV)", "Increased cart value via automated cross-sell prompts inside the custom AJAX cart drawer.")
        ],
        "related": [
            ("01 / WooCommerce & Paid Ads", "SweeterMen NG", "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.", "sweetermen-ng.html"),
            ("02 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("03 / Brand Identity Design", "BridgePoints Brand Identity", "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.", "bridgepoints.html")
        ]
    },
    "mkenny-properties.html": {
        "title": "Mkenny Properties",
        "tagline": "Case Study // Real Estate & WordPress Widgets",
        "h1": "Mkenny Properties: Real Estate <span class=\"c8cs-serif\">Widget Engine</span>",
        "lead": "Mkenny Properties needed a robust real estate catalog platform. We developed custom Elementor & Gutenberg widgets, property filter query engines, and interactive listing maps tailored for property buyers.",
        "pills": ["WordPress Custom", "Property Engine", "Custom Widgets", "Real Estate"],
        "client": "Mkenny Properties",
        "services": "WordPress Custom Widgets",
        "stack": "WordPress · Elementor · PHP",
        "link_label": "mkennyproperties.com ↗",
        "link_url": "https://mkennyproperties.com/",
        "img_main": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Mkenny Properties was limited by standard real estate themes that were rigid, hard to customize, and slowed down by heavy database queries.",
        "problem_p2": "They needed custom property archive filters (location, price range, bedrooms), interactive floorplan viewers, and instant WhatsApp inquiry widgets.",
        "steps": [
            ("01 / Custom Elementor & PHP Widgets", "Engineered bespoke Elementor widgets allowing the client team to build custom property pages effortlessly."),
            ("02 / High-Speed Property Query Engine", "Optimized WordPress WP_Query database calls for instant filtering across hundreds of active listings."),
            ("03 / Interactive Map & Location Integration", "Embedded Google Maps API boundaries highlighting neighborhood amenities and transport hubs."),
            ("04 / Direct WhatsApp Inquiry Webhooks", "Built one-click lead capture buttons connecting interested buyers directly to sales agents.")
        ],
        "metrics": [
            ("100%", "Custom Elementor Widgets", "Delivered tailored drag-and-drop property widgets giving the client total design control."),
            ("+250%", "Property Inquiry Velocity", "Streamlined mobile buyer contact pathways directly connecting interested clients to real estate agents.")
        ],
        "related": [
            ("01 / Web Design & Booking", "Kiri City Stays", "Direct booking platform & luxury stay catalog engineered for seamless reservations and local SEO visibility.", "kiri-city-stays.html"),
            ("02 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("03 / Custom Dev", "Bridgepoint Advisory", "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.", "bridgepoint-consulting.html")
        ]
    },
    "kiri-city-stays.html": {
        "title": "Kiri City Stays",
        "tagline": "Case Study // Hospitality & Booking Platform",
        "h1": "Kiri City Stays: Direct Booking <span class=\"c8cs-serif\">&amp; Luxury Stays</span>",
        "lead": "Kiri City Stays is a premier short-let apartment management agency. We engineered their direct booking web application, created their visual identity, and integrated local SEO frameworks to capture direct guest bookings.",
        "pills": ["Web Design", "Booking Engine", "Local SEO", "Hospitality"],
        "client": "Kiri City Stays",
        "services": "Web Design & Booking",
        "stack": "WordPress · Custom Code",
        "link_label": "kiricitystays.com ↗",
        "link_url": "https://kiricitystays.com/",
        "img_main": "https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1600&auto=format&fit=crop",
        "problem_p1": "Kiri City Stays wanted to reduce reliance on third-party OTA booking platforms and build a premium direct reservation portal for executive guests.",
        "problem_p2": "They needed a clean mobile-first catalog showcasing luxury short-let suites, transparent night rates, and instant booking reservation forms.",
        "steps": [
            ("01 / Brand & UI System Design", "Created a refined hospitality visual brand system with clean typography and luxury neutral swatches."),
            ("02 / Direct Booking Catalog Engine", "Built responsive property listing archives with real-time availability status indicators and pricing grids."),
            ("03 / Local SEO & Schema Integration", "Engineered Schema.org LodgingBusiness markup to maximize Google Maps and local search visibility."),
            ("04 / Instant Reservation Webhooks", "Connected direct booking forms to WhatsApp and email notifications for immediate reservation processing.")
        ],
        "metrics": [
            ("+180%", "Direct Reservation Volume", "Grew commission-free direct room bookings within the first 60 days of launch."),
            ("100%", "Mobile UX Optimization", "Delivered lightning-fast mobile reservation paths for travelers booking stays on the go.")
        ],
        "related": [
            ("01 / Web Design & SEO", "The Duch Apartments", "Brand identity and direct booking platform engineered with SEO architecture built in from day one.", "the-duch-apartments.html"),
            ("02 / WordPress Custom", "Mkenny Properties", "Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.", "mkenny-properties.html"),
            ("03 / Shopify Storefront", "Victoria's Lane", "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.", "victorias-lane.html")
        ]
    }
}

def generate_case_study_html(filename):
    data = all_case_studies[filename]
    
    pills_html = "".join([f'<span class="fylla-pill">{pill}</span>\n' for pill in data["pills"]])
    
    steps_html = ""
    for tag, desc in data["steps"]:
        steps_html += f"""
          <div class="fylla-value-item">
            <div class="fylla-value-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
            <div>
              <h3 class="fylla-value-h3">{tag}</h3>
              <p class="fylla-value-desc">{desc}</p>
            </div>
          </div>"""
          
    metrics_html = ""
    for val, lbl, desc in data["metrics"]:
        metrics_html += f"""
            <div class="c8cs-metric-card">
              <div class="c8cs-metric-val">{val}</div>
              <div class="c8cs-metric-lbl">{lbl}</div>
              <p class="c8cs-metric-desc">{desc}</p>
            </div>"""

    related_html = ""
    for tag, title, desc, url in data["related"]:
        related_html += f"""
            <a href="{url}" class="c8cs-related-cell">
              <div>
                <div class="c8cs-related-cell-tag">{tag}</div>
                <h3 class="c8cs-related-cell-title">{title}</h3>
                <p class="c8cs-related-cell-desc">{desc}</p>
              </div>
              <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
            </a>"""

    html = f"""<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Study: {data['title']} | Cr8v Stacks</title>
  <meta name="description" content="Read how Cr8v Stacks engineered {data['title']} with custom web design, high-performance architecture, and growth systems.">
  <link rel="stylesheet" href="../shared-service-components.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');

    :root {{
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
    }}

    * {{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }}

    body {{
      background: #FFFFFF;
      color: var(--c8-ink);
      font-family: var(--font-body);
      line-height: 1.65;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }}

    .c8cs-root {{
      position: relative;
      width: 100%;
    }}

    .c8cs-wrap {{
      max-width: 1340px;
      margin: 0 auto;
      padding: 5rem 2rem;
      position: relative;
      z-index: 2;
    }}

    @media (max-width: 768px) {{
      .c8cs-wrap {{
        padding: 3.5rem 1.25rem;
      }}
    }}

    .c8cs-label {{
      font-family: var(--font-mono);
      font-size: 10px;
      letter-spacing: .25em;
      text-transform: uppercase;
      color: var(--c8-blue);
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 1.5rem;
    }}

    .c8cs-label::before {{
      content: '// ';
      color: var(--c8-blue);
      font-weight: 700;
    }}

    .c8cs-headline {{
      font-family: var(--font-heading);
      font-size: clamp(2.2rem, 5vw, 3.8rem);
      letter-spacing: 0.02em;
      line-height: 1.15;
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      margin-bottom: 1.75rem;
    }}

    .c8cs-serif {{
      font-family: 'Georgia', serif;
      font-style: italic;
      text-transform: none;
      font-weight: 400;
      color: var(--c8-blue);
    }}

    .c8cs-lead {{
      font-size: 18.5px;
      font-weight: 300;
      color: var(--c8-sub);
      max-width: 860px;
      margin-bottom: 2.5rem;
      line-height: 1.7;
    }}

    .fylla-pill-row {{
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 1.5rem;
      margin-bottom: 2.5rem;
    }}
    .fylla-pill {{
      border: 1px solid var(--c8-grid-line);
      background: #FAFAF7;
      padding: 0.4rem 0.9rem;
      font-family: var(--font-mono);
      font-size: 0.72rem;
      color: var(--c8-ink);
      font-weight: 700;
      border-radius: 4px;
      text-transform: uppercase;
    }}

    .c8cs-hero {{
      padding-top: 7rem;
      padding-bottom: 4rem;
      position: relative;
      background: #FFFFFF;
      border-bottom: 1px solid var(--c8-grid-line);
    }}

    .c8cs-hero-atmos {{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      pointer-events: auto;
      overflow: hidden;
    }}
    .c8cs-atmos-svg {{
      position: absolute;
      top: -10%;
      left: 0;
      width: 100%;
      height: 130%;
    }}
    .c8cs-atmos-blob {{
      filter: blur(1px);
      opacity: 0.35;
    }}
    .c8cs-atmos-glow {{
      position: absolute;
      top: 0;
      left: 0;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 71, 225, 0.35) 0%, rgba(0, 71, 225, 0) 70%);
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.4s ease;
      will-change: transform;
      pointer-events: none;
    }}
    .c8cs-hero-atmos.is-active .c8cs-atmos-glow {{
      opacity: 1;
    }}

    /* ── TRANSPARENT HERO META GRID WITH SUBTLE HOVER ANIMATION ── */
    .c8cs-meta-grid {{
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      background: transparent;
      margin-top: 3.5rem;
      position: relative;
      z-index: 2;
      overflow: hidden;
    }}

    @media (max-width: 768px) {{
      .c8cs-meta-grid {{
        grid-template-columns: repeat(2, 1fr);
      }}
    }}

    .c8cs-meta-item {{
      padding: 2rem 2.25rem;
      border-right: 1px solid var(--c8-grid-line);
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: transparent;
      transition: background 0.35s ease, border-color 0.35s ease;
    }}

    .c8cs-meta-item:hover {{
      background: #FAFAF7;
    }}

    .c8cs-meta-item:last-child {{
      border-right: none;
    }}

    @media (max-width: 768px) {{
      .c8cs-meta-item:nth-child(2) {{
        border-right: none;
      }}
      .c8cs-meta-item:nth-child(1), .c8cs-meta-item:nth-child(2) {{
        border-bottom: 1px solid var(--c8-grid-line);
      }}
    }}

    .c8cs-meta-lbl {{
      font-family: var(--font-mono);
      font-size: 9px;
      text-transform: uppercase;
      color: var(--c8-blue);
      margin-bottom: 0.5rem;
      letter-spacing: 0.14em;
      font-weight: 700;
    }}

    .c8cs-meta-val {{
      font-size: 15px;
      font-weight: 700;
      color: var(--c8-ink);
    }}

    /* ── SCROLL-GROW SHOWCASE MEDIA (NO GRAY BG, NO EXTRA PADDING) ── */
    .c8cs-grow-media-wrapper {{
      width: 100%;
      padding: 1.5rem 0;
      display: flex;
      justify-content: center;
      background: transparent;
      border-bottom: 1px solid var(--c8-grid-line);
      overflow: hidden;
    }}

    .c8cs-main-img-box {{
      width: 85%;
      max-width: 1200px;
      border-radius: 4px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(8, 8, 8, 0.08);
      border: 1px solid var(--c8-grid-line);
      position: relative;
      z-index: 2;
      transition: width 0.15s cubic-bezier(0.16, 1, 0.3, 1), max-width 0.15s cubic-bezier(0.16, 1, 0.3, 1);
      will-change: width, max-width;
    }}

    .c8cs-main-img-box img {{
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      max-height: 700px;
    }}

    /* ── OVERVIEW SPLIT SECTION (STICKY LEFT & HOVER ANIMATION) ── */
    .c8cs-split-section {{
      display: grid;
      grid-template-columns: 1fr 1.3fr;
      gap: 0;
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      background: #FFFFFF;
      margin: 4rem 0;
    }}

    @media (max-width: 900px) {{
      .c8cs-split-section {{
        grid-template-columns: 1fr;
      }}
    }}

    .c8cs-split-left {{
      padding: 4.5rem 4rem;
      border-right: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
      position: sticky;
      top: 100px;
      align-self: start;
      height: fit-content;
    }}

    @media (max-width: 900px) {{
      .c8cs-split-left {{
        position: relative;
        top: 0;
        border-right: none;
        border-bottom: 1px solid var(--c8-grid-line);
        padding: 3rem 2rem;
      }}
    }}

    .c8cs-split-right {{
      background: #FAFAF7;
      display: flex;
      flex-direction: column;
    }}

    .c8cs-split-title {{
      font-family: var(--font-heading);
      font-size: clamp(1.6rem, 3vw, 2.2rem);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      line-height: 1.2;
      color: var(--c8-ink);
      margin-bottom: 1.5rem;
    }}

    .c8cs-body-content p {{
      font-size: 15.5px;
      color: var(--c8-sub);
      margin-bottom: 1.5rem;
      line-height: 1.75;
      font-weight: 300;
    }}

    .fylla-value-item {{
      padding: 3rem 3.5rem;
      border-bottom: 1px solid var(--c8-grid-line);
      display: flex;
      gap: 1.75rem;
      align-items: flex-start;
      transition: background 0.35s ease;
      background: #FAFAF7;
    }}
    .fylla-value-item:hover {{
      background: #FFFFFF;
    }}
    .fylla-value-item:last-child {{
      border-bottom: none;
    }}
    @media (max-width: 768px) {{
      .fylla-value-item {{
        padding: 2rem;
      }}
    }}

    .fylla-value-icon-box {{
      width: 48px;
      height: 48px;
      border-radius: 4px;
      background: rgba(0, 71, 225, 0.08);
      border: 1px solid rgba(0, 71, 225, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--c8-blue);
      flex-shrink: 0;
      margin-top: 0.2rem;
    }}
    .fylla-value-icon-box svg {{
      width: 24px;
      height: 24px;
      stroke-width: 2;
    }}

    .fylla-value-h3 {{
      font-family: var(--font-heading);
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      margin-bottom: 0.65rem;
    }}
    .fylla-value-desc {{
      font-size: 0.92rem;
      color: var(--c8-sub);
      line-height: 1.65;
    }}

    /* ── ARCHITECTURAL PAPER GRID SHOWCASE GALLERY ── */
    .c8cs-gallery-section {{
      padding: 6rem 0;
      background: #FFFFFF;
      border-bottom: 1px solid var(--c8-grid-line);
    }}

    .c8cs-gallery-outer-box {{
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      background: #FFFFFF;
      overflow: hidden;
    }}

    .c8cs-gallery-header {{
      padding: 3.5rem 4rem;
      border-bottom: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
    }}

    .c8cs-gallery-grid {{
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      background: var(--c8-grid-line);
    }}

    @media (max-width: 900px) {{
      .c8cs-gallery-grid {{
        grid-template-columns: 1fr;
      }}
    }}

    .c8cs-gallery-card {{
      background: #FFFFFF;
      padding: 3.5rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border-right: 1px solid var(--c8-grid-line);
      border-bottom: 1px solid var(--c8-grid-line);
      transition: background 0.35s ease;
    }}

    .c8cs-gallery-card:hover {{
      background: #FAFAF7;
    }}

    .c8cs-gallery-card.is-full {{
      grid-column: 1 / -1;
      border-right: none;
      border-bottom: none;
      background: #FAFAF7;
    }}

    .c8cs-gallery-meta {{
      font-family: var(--font-mono);
      font-size: 9px;
      text-transform: uppercase;
      color: var(--c8-blue);
      margin-bottom: 0.75rem;
      letter-spacing: 0.14em;
      font-weight: 700;
    }}

    .c8cs-gallery-title {{
      font-family: var(--font-heading);
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      letter-spacing: 0.01em;
    }}

    .c8cs-gallery-desc {{
      font-size: 14.5px;
      color: var(--c8-sub);
      font-weight: 300;
      line-height: 1.6;
      margin-bottom: 2rem;
    }}

    .c8cs-gallery-img-box {{
      width: 100%;
      border-radius: 4px;
      overflow: hidden;
      border: 1px solid var(--c8-grid-line);
      margin-top: auto;
      background: #000000;
    }}

    .c8cs-gallery-img-box.is-tall {{
      max-height: 520px !important;
      height: 520px !important;
    }}

    .c8cs-gallery-img-box img {{
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform 0.5s ease;
    }}

    .c8cs-gallery-card:hover .c8cs-gallery-img-box img {{
      transform: scale(1.03);
    }}

    .c8cs-swatch-row {{
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
    }}

    .c8cs-swatch {{
      flex: 1;
      height: 110px;
      border-radius: 4px;
      border: 1px solid var(--c8-grid-line);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 12px;
    }}

    .c8cs-swatch-hex {{
      font-family: var(--font-mono);
      font-size: 9px;
      font-weight: 700;
      background: rgba(255, 255, 255, 0.9);
      padding: 2px 6px;
      border-radius: 4px;
      align-self: flex-start;
      color: var(--c8-ink);
    }}

    /* ── ARCHITECTURAL PAPER GRID OUTCOMES METRICS MATRIX ── */
    .c8cs-metrics-bg {{
      background: #FFFFFF;
      border-bottom: 1px solid var(--c8-grid-line);
      padding: 6rem 0;
    }}

    .c8cs-metrics-outer-box {{
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      background: #FFFFFF;
      overflow: hidden;
    }}

    .c8cs-metrics-header {{
      padding: 3.5rem 4rem;
      border-bottom: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
    }}

    .c8cs-metrics-grid {{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
    }}

    @media (max-width: 768px) {{
      .c8cs-metrics-grid {{
        grid-template-columns: 1fr;
      }}
    }}

    .c8cs-metric-card {{
      background: #FAFAF7;
      border-right: 1px solid var(--c8-grid-line);
      padding: 3.5rem 3rem;
      display: flex;
      flex-direction: column;
      position: relative;
      transition: background 0.35s ease;
    }}

    .c8cs-metric-card:nth-child(even) {{
      background: #FFFFFF;
    }}

    .c8cs-metric-card:hover {{
      background: #F4F5F7;
    }}

    .c8cs-metric-card:last-child {{
      border-right: none;
    }}

    @media (max-width: 768px) {{
      .c8cs-metric-card {{
        border-right: none;
        border-bottom: 1px solid var(--c8-grid-line);
      }}
    }}

    .c8cs-metric-val {{
      font-family: var(--font-heading);
      font-size: 3rem;
      font-weight: 700;
      color: var(--c8-blue);
      line-height: 1;
      margin-bottom: 1.25rem;
    }}

    .c8cs-metric-lbl {{
      font-family: var(--font-mono);
      font-size: 9px;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--c8-ink);
      margin-bottom: 0.75rem;
      font-weight: 700;
    }}

    .c8cs-metric-desc {{
      font-size: 14px;
      color: var(--c8-sub);
      font-weight: 300;
      line-height: 1.6;
    }}

    .c8cs-status-badge {{
      background: rgba(0, 191, 99, 0.04);
      border: 1px solid rgba(0, 191, 99, 0.25);
      padding: 1.25rem 1.75rem;
      border-radius: 4px;
      display: inline-flex;
      flex-direction: column;
      align-items: flex-start;
      margin-top: auto;
      text-decoration: none;
      transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
      cursor: pointer;
    }}
    .c8cs-status-badge:hover {{
      background: rgba(0, 191, 99, 0.08);
      border-color: rgba(0, 191, 99, 0.4);
      transform: translateY(-2px);
    }}

    .c8cs-status-lbl {{
      font-family: var(--font-mono);
      font-size: 8px;
      font-weight: 700;
      color: #00BF63;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }}

    .c8cs-status-val {{
      font-family: var(--font-heading);
      font-size: 10.5px;
      font-weight: 700;
      color: #00BF63;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      line-height: 1.2;
    }}
    .c8cs-checkmark-circle {{
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: #00BF63;
      color: #FFFFFF;
      font-size: 10px;
      font-weight: bold;
    }}

    .c8cs-back-btn {{
      font-family: var(--font-mono);
      font-size: 10px;
      color: #8A8A8A;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 2.5rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      transition: color 0.2s ease;
      text-decoration: none;
      position: relative;
      z-index: 2;
      font-weight: 700;
    }}

    .c8cs-back-btn:hover {{
      color: var(--c8-blue);
    }}

    /* ── SHIMMER SWEEP EFFECT ON ALL CTA BUTTONS ── */
    .cta-btn-pill,
    .c8cs-btn-primary,
    .c8-btn-primary {{
      position: relative;
      overflow: hidden;
    }}

    .cta-btn-pill::before,
    .c8cs-btn-primary::before,
    .c8-btn-primary::before {{
      content: '';
      position: absolute;
      top: -50%; left: -100%;
      width: 100%; height: 200%;
      background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), rgba(0, 194, 255, 0.4), transparent);
      transform: rotate(25deg);
      transition: left 0.75s ease;
      pointer-events: none;
    }}

    .cta-btn-pill:hover::before,
    .c8cs-btn-primary:hover::before,
    .c8-btn-primary:hover::before {{
      left: 150%;
    }}

    /* ── FULL-WIDTH ARCHITECTURAL PAPER GRID RELATED PROJECTS MATRIX ── */
    .c8cs-related-paper-outer {{
      background: #FFFFFF;
      padding: 6rem 0;
      border-bottom: 1px solid var(--c8-grid-line);
      width: 100%;
    }}
    .c8cs-related-matrix-box {{
      max-width: 1340px;
      margin: 0 auto;
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      background: #FFFFFF;
      overflow: hidden;
    }}
    .c8cs-related-matrix-header {{
      padding: 3.5rem 4rem;
      border-bottom: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
    }}
    .c8cs-related-matrix-grid {{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
    }}
    @media (max-width: 900px) {{
      .c8cs-related-matrix-grid {{
        grid-template-columns: 1fr;
      }}
    }}
    .c8cs-related-cell {{
      padding: 3.5rem 3rem;
      border-right: 1px solid var(--c8-grid-line);
      background: #FAFAF7;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      text-decoration: none;
      color: var(--c8-ink);
      transition: background 0.35s ease;
    }}
    .c8cs-related-cell:nth-child(even) {{
      background: #FFFFFF;
    }}
    .c8cs-related-cell:last-child {{
      border-right: none;
    }}
    @media (max-width: 900px) {{
      .c8cs-related-cell {{
        border-right: none;
        border-bottom: 1px solid var(--c8-grid-line);
      }}
    }}
    .c8cs-related-cell:hover {{
      background: #F4F5F7;
    }}
    .c8cs-related-cell-tag {{
      font-family: var(--font-mono);
      font-size: 10px;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--c8-blue);
      font-weight: 700;
      margin-bottom: 0.75rem;
    }}
    .c8cs-related-cell-title {{
      font-family: var(--font-heading);
      font-size: 1.2rem;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--c8-ink);
      margin-bottom: 0.85rem;
      line-height: 1.3;
    }}
    .c8cs-related-cell-desc {{
      font-size: 14px;
      color: var(--c8-sub);
      font-weight: 300;
      line-height: 1.6;
      margin-bottom: 2rem;
    }}
    .c8cs-related-cell-link {{
      font-family: var(--font-mono);
      font-size: 11px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--c8-blue);
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: gap 0.2s ease;
    }}
    .c8cs-related-cell:hover .c8cs-related-cell-link {{
      gap: 10px;
    }}
  </style>
</head>
<body>

  <div class="c8cs-root">
    
    <!-- Hero Section -->
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
        <a href="../portfolio/" class="c8cs-back-btn">&larr; Back to Portfolio</a>
        
        <div class="c8cs-label">{data['tagline']}</div>
        <h1 class="c8cs-headline">{data['h1']}</h1>
        <p class="c8cs-lead">{data['lead']}</p>
        
        <div class="fylla-pill-row">
          {pills_html}
        </div>

        <div class="c8cs-meta-grid">
          <div class="c8cs-meta-item">
            <span class="c8cs-meta-lbl">Client</span>
            <span class="c8cs-meta-val">{data['client']}</span>
          </div>
          <div class="c8cs-meta-item">
            <span class="c8cs-meta-lbl">Services</span>
            <span class="c8cs-meta-val">{data['services']}</span>
          </div>
          <div class="c8cs-meta-item">
            <span class="c8cs-meta-lbl">Stack</span>
            <span class="c8cs-meta-val">{data['stack']}</span>
          </div>
          <div class="c8cs-meta-item">
            <span class="c8cs-meta-lbl">Link</span>
            <span class="c8cs-meta-val"><a href="{data['link_url']}" target="_blank" rel="noopener" style="color: #0047E1; text-decoration: underline;">{data['link_label']}</a></span>
          </div>
        </div>
      </div>
    </section>

    <!-- ── SCROLL-GROW SHOWCASE MEDIA (TRANSPARENT BG & CLEAN PADDING) ── -->
    <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
      <div class="c8cs-main-img-box" id="c8cs-grow-target">
        <img src="{data['img_main']}" alt="{data['title']} showcase — built by Cr8v Stacks">
      </div>
    </div>

    <!-- Split Problem & Solution Section (Sticky Left Column & Zero-Gap Cell Tiling) -->
    <section class="c8cs-wrap">
      <div class="c8cs-split-section">
        <div class="c8cs-split-left">
          <div class="c8cs-label">Overview</div>
          <h2 class="c8cs-split-title">The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span></h2>
          <div class="c8cs-body-content">
            <p>{data['problem_p1']}</p>
            <p>{data['problem_p2']}</p>
          </div>
        </div>

        <div class="c8cs-split-right">
          {steps_html}
        </div>
      </div>
    </section>

    <!-- ── ARCHITECTURAL PAPER GRID SHOWCASE GALLERY ── -->
    <section class="c8cs-gallery-section">
      <div class="c8cs-wrap">
        <div class="c8cs-gallery-outer-box">
          <div class="c8cs-gallery-header">
            <div class="c8cs-label">Showcase</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Visual Showcase &amp; Systems</h2>
          </div>

          <div class="c8cs-gallery-grid">
            <!-- Asset 01: Horizontal Cell -->
            <div class="c8cs-gallery-card">
              <div class="c8cs-gallery-meta">Brand Identity // Asset 01</div>
              <h3 class="c8cs-gallery-title">Color System &amp; Palette</h3>
              <p class="c8cs-gallery-desc">Curating primary brand accents, dark backgrounds, and neutral tones that convey luxury elegance.</p>
              
              <div class="c8cs-swatch-row">
                <div class="c8cs-swatch" style="background: #080808; color: #FFFFFF;">
                  <span class="c8cs-swatch-hex">#080808</span>
                </div>
                <div class="c8cs-swatch" style="background: #0047E1; color: #FFFFFF;">
                  <span class="c8cs-swatch-hex">#0047E1</span>
                </div>
                <div class="c8cs-swatch" style="background: #F4F6FB; color: #080808;">
                  <span class="c8cs-swatch-hex" style="background: rgba(8,8,8,0.1);">#F4F6FB</span>
                </div>
              </div>
            </div>

            <!-- Asset 02: Horizontal Cell -->
            <div class="c8cs-gallery-card">
              <div class="c8cs-gallery-meta">Interface // Asset 02</div>
              <h3 class="c8cs-gallery-title">Platform Experience Page</h3>
              <p class="c8cs-gallery-desc">Designing custom user interfaces, pricing breakdowns, and direct conversion triggers.</p>
              <div class="c8cs-gallery-img-box">
                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="{data['title']} interface detail screenshot">
              </div>
            </div>

            <!-- Asset 03: Full Width Cell Spanning Matrix -->
            <div class="c8cs-gallery-card is-full">
              <div class="c8cs-gallery-meta">Mobile UI // Asset 03</div>
              <h3 class="c8cs-gallery-title">Responsive Mobile Flow</h3>
              <p class="c8cs-gallery-desc">Optimizing touch targets and instant contact forms for mobile users discovering the platform online.</p>
              <div class="c8cs-gallery-img-box is-tall">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop" alt="{data['title']} mobile experience flow">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── ARCHITECTURAL PAPER GRID OUTCOMES METRICS MATRIX ── -->
    <section class="c8cs-metrics-bg">
      <div class="c8cs-wrap">
        <div class="c8cs-metrics-outer-box">
          <div class="c8cs-metrics-header">
            <div class="c8cs-label">Outcomes</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Bespoke Performance Metrics</h2>
          </div>

          <div class="c8cs-metrics-grid">
            {metrics_html}

            <!-- Metric 3 -->
            <div class="c8cs-metric-card">
              <div class="c8cs-metric-lbl" style="margin-bottom: 1.5rem;">Live Verification</div>
              <a href="{data['link_url']}" target="_blank" rel="noopener" class="c8cs-status-badge">
                <span class="c8cs-status-lbl">Launch Status</span>
                <span class="c8cs-status-val">
                  <span class="c8cs-checkmark-circle">✓</span> Visit Live Site ↗
                </span>
              </a>
              <p class="c8cs-metric-desc" style="margin-top: 1.5rem;">The platform is active and live. Click the button above to view their custom site architecture.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION 6: ARCHITECTURAL PAPER GRID RELATED PROJECTS MATRIX
         ══════════════════════════════════════════ -->
    <div class="c8cs-related-paper-outer">
      <div class="c8cs-wrap" style="padding-top:0; padding-bottom:0;">
        <div class="c8cs-related-matrix-box">
          <div class="c8cs-related-matrix-header">
            <div class="c8cs-label">More Case Studies</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Explore Related Projects</h2>
          </div>

          <div class="c8cs-related-matrix-grid">
            {related_html}
          </div>
        </div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════
         SECTION 7: HOMEPAGE CTA SECTION
         ══════════════════════════════════════════ -->
    <style>
      .cta-section {{
        background: #FFFFFF !important;
        padding: clamp(5rem, 9vw, 8rem) 0 !important;
        position: relative !important;
        overflow: hidden !important;
        border-top: 1px solid rgba(8,8,8,0.08) !important;
      }}
      .cta-inner {{
        max-width: 860px !important;
        margin: 0 auto !important;
        padding: 0 clamp(1.5rem, 5vw, 4rem) !important;
        text-align: center !important;
        position: relative !important;
        z-index: 2 !important;
      }}
      .cta-arc-container {{
        width: 100% !important;
        max-width: 780px !important;
        margin: 0 auto 0 !important;
        display: flex !important;
        justify-content: center !important;
      }}
      .cta-arc-video {{
        width: 100% !important;
        max-width: 780px !important;
        height: auto !important;
        display: block !important;
        object-fit: contain !important;
        pointer-events: none !important;
        user-select: none !important;
      }}
      .cta-content-group {{
        margin-top: -6.5rem !important;
        position: relative !important;
        z-index: 5 !important;
      }}
      @media (max-width: 768px) {{
        .cta-content-group {{
          margin-top: -3.5rem !important;
        }}
      }}
      .cta-badge {{
        display: inline-flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        font-family: 'Space Mono', monospace !important;
        font-size: 0.68rem !important;
        letter-spacing: 0.12em !important;
        text-transform: uppercase !important;
        color: #0047E1 !important;
        background: transparent !important;
        border: none !important;
        padding: 0.4rem 1.1rem !important;
        border-radius: 4px !important;
        margin-bottom: 1.5rem !important;
      }}
      .cta-h2 {{
        font-family: 'Michroma', sans-serif !important;
        font-size: clamp(1.9rem, 4.2vw, 3rem) !important;
        font-weight: 400 !important;
        color: #080808 !important;
        letter-spacing: 0.01em !important;
        line-height: 1.25 !important;
        max-width: 780px !important;
        margin: 0 auto 1.4rem !important;
      }}
      .cta-h2 em {{
        font-style: normal !important;
        color: #0047E1 !important;
      }}
      .cta-desc {{
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.95rem !important;
        font-weight: 300 !important;
        color: #555555 !important;
        line-height: 1.7 !important;
        max-width: 620px !important;
        margin: 0 auto 2.5rem !important;
      }}
      .cta-btn-pill {{
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 0.8rem !important;
        background: #0047E1 !important;
        color: #FFFFFF !important;
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        padding: 1rem 2.2rem !important;
        border-radius: 4px !important;
        text-decoration: none !important;
        box-shadow: 0 10px 28px rgba(0, 71, 225, 0.28) !important;
        transition: all 0.25s ease !important;
      }}
      .cta-btn-pill:hover {{
        background: #0037B5 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 14px 35px rgba(0, 71, 225, 0.38) !important;
      }}
      .cta-btn-arrow {{
        background: rgba(255,255,255,0.2) !important;
        width: 26px !important;
        height: 26px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 0.85rem !important;
        transition: transform 0.25s ease !important;
      }}
      .cta-btn-pill:hover .cta-btn-arrow {{
        transform: translateX(4px) !important;
      }}
    </style>

    <section class="cta-section" id="contact">
      <div class="cta-inner">
        <div class="cta-arc-container">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
            <source src="../assets/download.mp4" type="video/mp4">
            <source src="../assets/seven_circular_badges.webm" type="video/webm">
          </video>
        </div>

        <div class="cta-content-group">
          <div class="cta-badge"><span style="color:#0047E1;font-weight:800;margin-right:4px;">//</span> START A PROJECT</div>
          
          <h2 class="cta-h2">
            Ready to launch your <em>custom digital platform?</em>
          </h2>

          <p class="cta-desc">
            Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.
          </p>

          <div>
            <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
              Book a Scoping Call <span class="cta-btn-arrow">&rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </section>

  </div><!-- End c8cs-root -->

  <!-- Hero background & Scroll-Grow Image Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {{
      var root = document.querySelector('.c8cs-root');
      var atmos = root.querySelector('[data-c8cs-atmos]');
      var glow = root.querySelector('[data-c8cs-glow]');
      var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

      if (atmos && glow && canHover && !reduceMotion) {{
        atmos.addEventListener('mousemove', function (e) {{
          var r = atmos.getBoundingClientRect();
          glow.style.left = (e.clientX - r.left) + 'px';
          glow.style.top = (e.clientY - r.top) + 'px';
        }});
        atmos.addEventListener('mouseenter', function () {{ atmos.classList.add('is-active'); }});
        atmos.addEventListener('mouseleave', function () {{ atmos.classList.remove('is-active'); }});
      }}

      var growTarget = document.getElementById('c8cs-grow-target');
      var growTrigger = document.getElementById('c8cs-grow-trigger');

      if (growTarget && growTrigger && !reduceMotion) {{
        function handleGrowScroll() {{
          var rect = growTrigger.getBoundingClientRect();
          var viewportH = window.innerHeight;
          
          var start = viewportH * 0.9;
          var end = viewportH * 0.2;
          
          var progress = 0;
          if (rect.top < start) {{
            progress = (start - rect.top) / (start - end);
            if (progress > 1) progress = 1;
            if (progress < 0) progress = 0;
          }}

          var widthVal = 85 + (15 * progress);
          var maxWVal = 1200 + ((window.innerWidth - 1200) * progress);

          growTarget.style.width = widthVal + '%';
          growTarget.style.maxWidth = maxWVal + 'px';
        }}

        window.addEventListener('scroll', handleGrowScroll);
        window.addEventListener('resize', handleGrowScroll);
        handleGrowScroll();
      }}

      var srvMatrixButtons = document.querySelectorAll('.c8-btn-primary, .c8cs-btn-primary, .cta-btn-pill, .c8isv-related-card-link, .c8cs-back-btn, .c8cs-related-cell-link');
      var srvMatrixChars = '!@#$%^&*()_+-=[]{{}}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      srvMatrixButtons.forEach(function(btn) {{
        var textNode = Array.from(btn.childNodes).find(function(n) {{ return n.nodeType === 3 && n.textContent.trim().length > 0; }});
        var targetObj = textNode ? textNode : btn;
        var originalText = targetObj.textContent.trim();
        var scrambleInterval = null;

        btn.addEventListener('mouseenter', function() {{
          var iteration = 0;
          clearInterval(scrambleInterval);

          scrambleInterval = setInterval(function() {{
            targetObj.textContent = originalText.split('')
              .map(function(char, index) {{
                if (char === ' ' || index < iteration) return originalText[index];
                return srvMatrixChars[Math.floor(Math.random() * srvMatrixChars.length)];
              }})
              .join('');

            if (iteration >= originalText.length) {{
              clearInterval(scrambleInterval);
            }}
            iteration += 1 / 2;
          }}, 25);
        }});

        btn.addEventListener('mouseleave', function() {{
          clearInterval(scrambleInterval);
          targetObj.textContent = originalText;
        }});
      }});
    }});
  </script>
</body>
</html>
"""
    return html

for filename in all_case_studies:
    out_path = os.path.join(case_studies_dir, filename)
    code = generate_case_study_html(filename)
    with open(out_path, 'w', encoding='utf-8') as f:
        f.write(code)
    print(f"Successfully ported gold-standard paper grid UI to {filename}")

print("All 10 single case study pages ported successfully!")
