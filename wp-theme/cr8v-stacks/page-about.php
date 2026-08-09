<?php
/**
 * CR8V Stacks — page-about.php
 * Template Name: About Us
 * Tropos Theme About Page (100% full design fidelity from about-us.html)
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-about'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">
<main class="fylla-outer-frame">
    
    <!-- ── 1. FYLLA STUDIO HERO SECTION ── -->
    <header class="fylla-hero-section">
      <span class="fylla-meta-tag">AGENCY PROFILE</span>
      <h1 class="fylla-hero-h1">
        WE DEFY <span class="c8abt-serif-italic">templates.</span><br>
        WE CODE <span class="c8abt-highlight-text">CONVERSIONS.</span>
      </h1>
      
      <p class="fylla-hero-p">We are an engineering-first digital agency built for ambitious brands. We don't just assemble websites; we architect custom digital environments, brand systems, and organic search acquisition models designed to turn attention into measurable revenue.</p>

      <div class="fylla-pill-row">
        <span class="fylla-pill">Custom PHP</span>
        <span class="fylla-pill">Elementor-Safe Code</span>
        <span class="fylla-pill">WordPress</span>
        <span class="fylla-pill">Shopify</span>
        <span class="fylla-pill">Conversion UX</span>
        <span class="fylla-pill">Organic SEO</span>
      </div>

      <div class="fylla-hero-img-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>wwa_studio_visual.jpg" alt="Cr8v Stacks Studio Workspace" class="fylla-hero-img">
        <div class="fylla-hud-tag">// SYSTEM_ACTIVE</div>
      </div>
    </header>

    <!-- ── 2. FYLLA STUDIO VALUES SECTION (OUR PHILOSOPHY & LARGE ICONS) ── -->
    <section class="fylla-values-section">
      <div class="fylla-values-left">
        <div>
          <span class="fylla-meta-tag">WHAT YOU SHOULD KNOW</span>
          <h2 class="fylla-values-h2">OUR PHILOSOPHY</h2>
          
          <p class="fylla-values-p">We bridge the gap between creative visual branding and lightweight, custom-coded web architectures.</p>
          <p class="fylla-values-p">At <strong>CR8V Stacks</strong>, founded by <strong>Mallami Adekunle</strong>, we approach web development and branding from a performance-first perspective. We don't believe in generic page builders and bloated themes that drag down loading speed and make businesses look identical.</p>
          <p class="fylla-values-p">By keeping our technology stack lightweight and prioritizing custom layouts, we eliminate design bloat and give our clients the technical edge in speed, search ranking, and user experience.</p>
        </div>

        <a href="homepage_hero_section.html#case-studies" class="c8-btn-primary">Inspect Case Studies</a>
      </div>

      <div class="fylla-values-right">
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">CODE ARCHITECTURE — ZERO BLOAT</h3>
            <p class="fylla-value-desc">Bespoke custom themes built from scratch with semantic HTML, CSS, and vanilla JS. No page builders, no unneeded plugins.</p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">LIQUID ENGINEERING — SUB-1.2S SPEED</h3>
            <p class="fylla-value-desc">Tuned for instant page loads and green Core Web Vitals across every single device, browser, and network condition.</p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">ENTITY SEO — ORGANIC DOMINANCE</h3>
            <p class="fylla-value-desc">Structured Schema JSON-LD markup and semantic HTML hierarchy ensuring total search engine clarity and ranking authority.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 3. DEV PLAYGROUND — ALWAYS BUILDING SPLIT SCREEN (CORRECT ABOUT US COPY & MASCOT FIX) ── -->
    <section class="dp-section" id="dev-playground">

      <!-- WHITE LEFT HALF -->
      <div class="dp-half-left">

        <!-- MASCOT: lives inside white half, straddles split safely behind right content -->
        <div class="dp-mascot-wrap">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>download_mascot.mp4" type="video/mp4">
          </video>
        </div>

        <div class="dp-left-content">
          <div class="dp-eyebrow">// ALWAYS BUILDING</div>
          <h2 class="dp-h2">BUILT BY US.<br><em>BUILT TO BE USEFUL.</em></h2>
          <p class="dp-sub">
            Internal agency software utilities built out of real client necessity to eliminate slow loading speeds, bloated dependencies, and notice banners on WordPress and Shopify.
          </p>

          <div class="dp-tool-entries">
            <a href="https://cr8vstacks.com/dev-playground/wp-publishion-ai/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">01</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">WP Publishion AI</div>
                <div class="dp-tool-entry-desc">Draft fact-checked, SEO-rich articles directly inside your block editor. Integrates Claude, Gemini &amp; OpenAI.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/nativus-dashboard-pro/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">02</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">Nativus Dashboard Pro</div>
                <div class="dp-tool-entry-desc">A clean, custom whitelabeled WordPress admin interface built to hide plugin notice banners safely.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/alttext-buddy/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">03</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">AltText Buddy</div>
                <div class="dp-tool-entry-desc">Automatically generate descriptive image alt text for your media library using 5 AI vision models.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/lumicode-syntax-highlighter/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">04</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">LumiCode</div>
                <div class="dp-tool-entry-desc">VS Code-style syntax-highlighted code blocks on WordPress with line numbers and copy utility.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">05</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">Cost Calculator Pro</div>
                <div class="dp-tool-entry-desc">Instant interactive web project estimator delivering itemized scope breakdowns in under 60 seconds.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M8 18h.01M12 18h.01"/></svg>
              </div>
            </a>
          </div>

          <div style="margin-top: 2rem;">
            <a href="https://cr8vstacks.com/dev-playground/" class="c8-btn-primary">Visit Dev Playground →</a>
          </div>
        </div>
      </div>

      <!-- BLUE RIGHT HALF -->
      <div class="dp-half-right">
        <div class="dp-right-content">
          <div class="dp-right-eyebrow">NO GIMMICKS // OPEN ACCESS</div>

          <div class="dp-stat-pair">
            <div class="dp-stat-item">
              <div class="dp-stat-num">5</div>
              <div class="dp-stat-label">Tools Available</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">100%</div>
              <div class="dp-stat-label">Instant Access</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">60s</div>
              <div class="dp-stat-label">Avg Setup Time</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">∞</div>
              <div class="dp-stat-label">No Builder Bloat</div>
            </div>
          </div>

          <p class="dp-right-desc">
            Every tool in our playground is built out of necessity for real client builds. No corporate fluff, no bloated codebases — just lightweight, high-performance utilities designed to keep your WordPress and Shopify sites running lightning fast.
          </p>

          <div class="dp-cta-row">
            <a href="https://cr8vstacks.com/dev-playground/" class="dp-btn-primary">
              Inspect Tool Blueprints
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="discovery-call.html" class="dp-btn-ghost">
              Book A Discovery Call
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      </div>

    </section>

    <!-- ── 4. WHAT WE ACTUALLY DO (SERVICES ACCORDION FROM HOMEPAGE VERBATIM) ── -->
    <section class="sdv-section" id="services-deep-dive">
      <!-- Backdrop Glow Blobs -->
      <div class="sdv-bg-blob sdv-bg-blob-1"></div>
      <div class="sdv-bg-blob sdv-bg-blob-2"></div>

      <div class="sdv-inner">

        <!-- Section Header -->
        <div class="sdv-header">
          <div class="sdv-header-left">
            <div class="sdv-eyebrow"><span class="c8-eyebrow-slash">//</span> WHAT WE ACTUALLY DO</div>
            <h2 class="sdv-h2">Every Layer.<br>One <em>Studio.</em></h2>

            <div class="sdv-layer-row">
              <span class="sdv-layer-pill layer-strategy">Strategy</span>
              <span class="sdv-arrow">&rarr;</span>
              <span class="sdv-layer-pill layer-build">Design &amp; Build</span>
              <span class="sdv-arrow">&rarr;</span>
              <span class="sdv-layer-pill layer-growth">Growth</span>
            </div>
          </div>

          <div class="sdv-header-right">
            <p class="sdv-sub">
              We start with who you're competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on &mdash; the build is only one layer.
            </p>
          </div>
        </div>

        <!-- Accordion: Services -->
        <div class="sdv-accordion">

          <!-- 01 — Website Design -->
          <div class="sdv-item is-open" id="sdv-web-design">
            <button class="sdv-item-trigger" aria-expanded="true" data-sdv-toggle="sdv-web-design">
              <span class="sdv-item-num">01</span>
              <span class="sdv-item-title">Website Design</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_duch_apartments.jpg" alt="Website Design Preview">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>High-converting digital experiences</strong> engineered for speed, search authority, and seamless user conversions. We design across every platform your business runs on &mdash; once the Figma design is approved, it gets handed to whichever build stack fits: WordPress, Shopify, WooCommerce, or fully custom code.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Custom Figma UI Architecture</div>
                    <div class="sdv-deliverable-row">WordPress Builds &amp; Elementor Systems</div>
                    <div class="sdv-deliverable-row">Shopify Liquid Storefronts</div>
                    <div class="sdv-deliverable-row">WooCommerce Custom Stores</div>
                    <div class="sdv-deliverable-row">Built-in SEO from Line One</div>
                    <a href="web-design.html" class="sdv-panel-cta">
                      Explore Web Design
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_duch_apartments.jpg" alt="Website Design Work">
                  <span class="sdv-panel-visual-label">Live Client Work</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 02 — Custom Development -->
          <div class="sdv-item" id="sdv-custom-dev">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-custom-dev">
              <span class="sdv-item-num">02</span>
              <span class="sdv-item-title">Custom Development</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_bridgepoint.jpg" alt="Custom Dev Preview">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>Tailored software architectures</strong> built from a blank file, engineered around your exact workflow. No templates, no SaaS dependencies, no monthly tool fees eating into your margin. When nothing off-the-shelf fits what you're building &mdash; this is where it starts.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Bespoke Web Applications</div>
                    <div class="sdv-deliverable-row">Custom APIs &amp; Third-Party Integrations</div>
                    <div class="sdv-deliverable-row">Internal Business Tools &amp; Dashboards</div>
                    <div class="sdv-deliverable-row">100% Client-Owned Codebase</div>
                    <div class="sdv-deliverable-row">0 Third-Party SaaS Dependencies</div>
                    <a href="custom-dev.html" class="sdv-panel-cta">
                      Explore Custom Dev
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_bridgepoint.jpg" alt="Custom Development Work">
                  <span class="sdv-panel-visual-label">Live Client Work</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 03 — AI MVP Products -->
          <div class="sdv-item" id="sdv-ai-mvp">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-ai-mvp">
              <span class="sdv-item-num">03</span>
              <span class="sdv-item-title">AI MVP Products</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>dev_mascot.jpg" alt="AI MVP Preview" style="object-position: center top;">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>Production-ready AI applications</strong> built to validate core business ideas with real users &mdash; not slide decks. We build AI-integrated products fast enough to get genuine market signal before you over-invest. When the idea validates, it hands directly into a full Custom Dev engagement.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">LLM-Integrated Web Applications</div>
                    <div class="sdv-deliverable-row">AI-Powered Internal Tools</div>
                    <div class="sdv-deliverable-row">Rapid Prototyping &amp; Market Validation</div>
                    <div class="sdv-deliverable-row">Custom Model Pipelines</div>
                    <div class="sdv-deliverable-row">Fully Functional &mdash; Not a Demo</div>
                    <a href="ai-mvp.html" class="sdv-panel-cta">
                      Explore AI MVP
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>dev_mascot.jpg" alt="AI MVP Build" style="object-position: center top;">
                  <span class="sdv-panel-visual-label">AI-Powered Build</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 04 — Brand Strategy -->
          <div class="sdv-item" id="sdv-brand-strategy">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-brand-strategy">
              <span class="sdv-item-num">04</span>
              <span class="sdv-item-title">Brand Strategy</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_victorias_lane.jpg" alt="Brand Strategy Preview">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>Competitor analysis, pricing scoping, and messaging frameworks</strong> that give the rest of the build direction before a single pixel is designed. This is also the foundation every ad campaign and piece of content we run for you is built on &mdash; get this right first, and everything downstream gets easier and cheaper.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Market Positioning &amp; Competitor Mapping</div>
                    <div class="sdv-deliverable-row">Messaging Frameworks &amp; Brand Voice</div>
                    <div class="sdv-deliverable-row">Pricing Scoping &amp; Value Proposition</div>
                    <div class="sdv-deliverable-row">Customer Profile Architecture</div>
                    <div class="sdv-deliverable-row">Brand Identity Design (optional next step)</div>
                    <a href="brand-strategy.html" class="sdv-panel-cta">
                      Explore Brand Strategy
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 05 — SEO & Content -->
          <div class="sdv-item" id="sdv-seo">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-seo">
              <span class="sdv-item-num">05</span>
              <span class="sdv-item-title">SEO &amp; Content</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_blvck_hair.jpg" alt="SEO & Content Preview">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>Technical search work and content architecture</strong> that gets the site found. We fold SEO into every build from line one &mdash; but for sites that already exist, we audit, fix, and build the content layer that compounds over time. Paid acquisition works better once your organic foundation is solid.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Semantic Keyword Mapping</div>
                    <div class="sdv-deliverable-row">Entity SEO Optimization</div>
                    <div class="sdv-deliverable-row">Technical SEO Audits &amp; Core Web Vitals</div>
                    <div class="sdv-deliverable-row">Content Architecture &amp; Cluster Strategy</div>
                    <div class="sdv-deliverable-row">E-Commerce Category &amp; Product SEO</div>
                    <a href="seo.html" class="sdv-panel-cta">
                      Explore SEO &amp; Content
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 06 — Digital Marketing -->
          <div class="sdv-item" id="sdv-digital-marketing">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-digital-marketing">
              <span class="sdv-item-num">06</span>
              <span class="sdv-item-title">Digital Marketing</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>case_studies/case_study_mkenny_properties.jpg" alt="Digital Marketing Preview">
              </div>
              <span class="sdv-item-chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="sdv-panel">
              <div class="sdv-panel-inner">
                <div class="sdv-panel-content">
                  <div class="sdv-panel-spacer"></div>
                  <div class="sdv-panel-desc">
                    <strong>Multi-channel campaigns and lead acquisition retainers</strong> built on the positioning your Brand Strategy work defined. If you haven't done positioning work with us yet, we fold a lightweight version into campaign setup &mdash; but a full Brand Strategy engagement first means faster, cheaper testing.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Paid Social &amp; Search Campaign Management</div>
                    <div class="sdv-deliverable-row">Email Autoresponders &amp; Nurture Sequences</div>
                    <div class="sdv-deliverable-row">Conversion Rate Audits</div>
                    <div class="sdv-deliverable-row">Target Audience &amp; Funnel Mapping</div>
                    <div class="sdv-deliverable-row">Monthly Retainer &amp; Performance Reporting</div>
                    <a href="digital-marketing.html" class="sdv-panel-cta">
                      Explore Digital Marketing
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /sdv-accordion -->

      </div><!-- /sdv-inner -->
    </section>

    <!-- ── 5. PILLARS OF GROWTH (HOMEPAGE 6-CARD BENTO GRID & FULL MOBILE RESPONSIVENESS) ── -->
    <section class="hww-section" id="pillars-of-growth">
      <div class="hww-inner">

        <div class="hww-header">
          <div class="hww-eyebrow"><span class="c8-eyebrow-slash">//</span> OUR PILLARS OF GROWTH</div>
          <h2 class="hww-h2">ENGINEERED FOR SCALABILITY. <em>BUILT FOR PERFORMANCE.</em></h2>
          <p class="hww-desc">
            A full-spectrum digital framework designed to scale ambitious brands sustainably — from brand positioning and lightweight custom web engineering to entity search dominance.
          </p>
        </div>

        <div class="hww-bento">

          <!-- C1: Process Steps (white card) -->
          <div class="hww-card hww-card-white hww-c1">
            <div class="hww-clabel hww-clabel-blue">Growth Architecture</div>
            <div class="hww-ctitle hww-ctitle-ink">Core Pillars.<br>Zero Bloat.</div>
            <div class="hww-steps">
              <div class="hww-step">
                <span class="hww-step-n">01</span>
                <span class="hww-step-dot"></span>
                <span class="hww-step-lbl">Brand Positioning</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">02</span>
                <span class="hww-step-dot" style="opacity:0.65;"></span>
                <span class="hww-step-lbl">Web Architecture</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">03</span>
                <span class="hww-step-dot" style="opacity:0.4;"></span>
                <span class="hww-step-lbl">Digital Marketing</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">04</span>
                <span class="hww-step-dot" style="opacity:0.2;"></span>
                <span class="hww-step-lbl">Entity SEO Dominance</span>
              </div>
            </div>
          </div>

          <!-- C2: Stacks visual (tall image card) -->
          <div class="hww-card hww-c2">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>hww_stacks_visual.jpg" alt="CR8V Stacks Visual Architecture" class="hww-visual-img">
          </div>

          <!-- C3: Sprint Stat (blue card) -->
          <div class="hww-card hww-card-blue hww-c3">
            <div class="hww-clabel hww-clabel-dim">Speed Benchmark</div>
            <div class="hww-bnum hww-bnum-white">95+<span style="font-size:0.42em;opacity:0.6;"> PageSpeed</span></div>
            <p class="hww-stat-sub hww-stat-sub-white">
              Sub-1.2 second instantaneous loading speeds across mobile and desktop devices.
            </p>
          </div>

          <!-- C4: Tech Stack Tags (dark card) -->
          <div class="hww-card hww-card-dark hww-c4">
            <div class="hww-clabel hww-clabel-dim">Technology Stack</div>
            <div class="hww-ctitle hww-ctitle-white">Clean Engineering.<br>Zero Fluff.</div>
            <div class="hww-tags">
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/wordpress/ffffff" alt="">WordPress</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/shopify/ffffff" alt="">Shopify</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/php/ffffff" alt="">Custom PHP</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/figma/F24E1E" alt="">Figma UI</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/html5/E34F26" alt="">HTML5</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/css3/1572B6" alt="">CSS3</span>
              <span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg" alt="OpenAI">OpenAI</span>
              <span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg" alt="Claude">Claude</span>
            </div>
          </div>

          <!-- C5: Ownership Stat (white card) -->
          <div class="hww-card hww-card-white hww-c5">
            <div class="hww-clabel hww-clabel-muted">Client Ownership</div>
            <div class="hww-bnum hww-bnum-ink" style="font-size:clamp(1.6rem,3vw,2.4rem);">100%</div>
            <p class="hww-stat-sub hww-stat-sub-ink">
              You own all code, repositories, and data. Zero vendor lock-in or recurring monthly code fees.
            </p>
          </div>

          <!-- C6: What Ships With Every Project (light card spanning 2 cols) -->
          <div class="hww-card hww-card-light hww-c6" style="position:relative;overflow:hidden;">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>c4_tools_bg.jpg" alt="" aria-hidden="true" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;mix-blend-mode:multiply;opacity:0.08;pointer-events:none;">
            <div style="position:relative;z-index:1;">
              <div class="hww-clabel hww-clabel-blue">What Ships With Every Project</div>
              <div class="hww-timeline">
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Brand Strategy</span>
                  <span class="hww-tl-label">Positioning &amp; UX</span>
                  <span class="hww-tl-desc">High-intent keyword mapping and bespoke wireframes to command immediate trust.</span>
                </div>
                <div class="hww-tl-div"></div>
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Web Design</span>
                  <span class="hww-tl-label">Lightweight Code</span>
                  <span class="hww-tl-desc">Sub-1.2s loading speeds with custom PHP, HTML5, and scoped vanilla CSS.</span>
                </div>
                <div class="hww-tl-div"></div>
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Organic SEO</span>
                  <span class="hww-tl-label">Entity Dominance</span>
                  <span class="hww-tl-desc">JSON-LD schema hierarchy ensuring total search engine clarity and rank authority.</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── 6. PERFORMANCE & TECH STACK (WHITE BACKGROUND WITH SVG LOGO TABS) ── -->
    <section class="tmn-section" id="performance-tech-stack">
      <div class="tmn-inner">
        <div class="tmn-header">
          <div class="tmn-eyebrow"><span class="tmn-eyebrow-slash">//</span> PERFORMANCE &amp; TECH STACK</div>
          <h2 class="tmn-h2">BUILT FOR SPEED. <em>ENGINEERED TO DOMINATE.</em></h2>
          <p class="tmn-sub">Explore our core technology stacks and performance benchmarks across WordPress, Shopify, custom software, and AI-accelerated workflows.</p>
        </div>

        <div class="tmn-wrapper-card">
          <!-- Left Logo Tabs Row -->
          <div class="tmn-thumbs">
            <button class="tmn-thumb-btn is-active" data-tmn-tab="tmn-pane-1">
              <img src="https://cdn.simpleicons.org/wordpress/0047E1" alt="WordPress Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">WordPress</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-2">
              <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">Shopify</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-3">
              <img src="https://cdn.simpleicons.org/php/777BB4" alt="Custom Code Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">Custom Dev</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-4">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg" alt="AI Models Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">AI Workflows</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
          </div>

          <!-- Main Content Area -->
          <div class="tmn-card-main">
            <!-- Pane 1: WordPress -->
            <div class="tmn-pane is-active" id="tmn-pane-1">
              <div>
                <h3 class="tmn-pane-h3">WORDPRESS CUSTOM ENGINE</h3>
                <p class="tmn-pane-p">We architect custom WordPress themes and Elementor-safe code systems that bypass typical builder bloat. Hand-written PHP templates, optimized asset loading, and clean database queries ensure sub-1.2s page loads.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">95%+</div>
                  <div class="tmn-metric-lbl">PageSpeed Score</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">&lt; 1.2s</div>
                  <div class="tmn-metric-lbl">Page Load Time</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">100%</div>
                  <div class="tmn-metric-lbl">Code Ownership</div>
                </div>
              </div>
            </div>

            <!-- Pane 2: Shopify -->
            <div class="tmn-pane" id="tmn-pane-2">
              <div>
                <h3 class="tmn-pane-h3">SHOPIFY LIQUID STOREFRONTS</h3>
                <p class="tmn-pane-p">Bespoke Liquid storefronts designed to maximize mobile checkout speed, product discovery, and store conversion velocity — giving your e-commerce brand a distinct competitive edge.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">3.5x</div>
                  <div class="tmn-metric-lbl">Conversion Rate</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">&lt; 1.5s</div>
                  <div class="tmn-metric-lbl">Mobile Load Speed</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Liquid</div>
                  <div class="tmn-metric-lbl">Performance Standard</div>
                </div>
              </div>
            </div>

            <!-- Pane 3: Custom Dev -->
            <div class="tmn-pane" id="tmn-pane-3">
              <div>
                <h3 class="tmn-pane-h3">BESPOKE SOFTWARE &amp; WEB APPLICATIONS</h3>
                <p class="tmn-pane-p">Tailored software engineering beyond conventional websites — including web applications, custom APIs, internal dashboards, and complex business logic built specifically around your operating workflow.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">100%</div>
                  <div class="tmn-metric-lbl">Bespoke Architecture</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Zero</div>
                  <div class="tmn-metric-lbl">Vendor Lock-in</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">∞</div>
                  <div class="tmn-metric-lbl">Scale Potential</div>
                </div>
              </div>
            </div>

            <!-- Pane 4: AI Workflows -->
            <div class="tmn-pane" id="tmn-pane-4">
              <div>
                <h3 class="tmn-pane-h3">HUMAN-LED, AI-ACCELERATED WORKFLOWS</h3>
                <p class="tmn-pane-p">AI makes us faster, but human engineering and strategy drive every decision. We leverage AI pipelines to accelerate research, prototyping, and development while keeping software quality uncompromisingly high.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">3.5x</div>
                  <div class="tmn-metric-lbl">Execution Velocity</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Human</div>
                  <div class="tmn-metric-lbl">Strategy &amp; Oversight</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Production</div>
                  <div class="tmn-metric-lbl">Grade Deliverables</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ── 7. ABOUT CR8V STACKS (3-COL GRID + BOTTOM STATS) ── -->
    <section class="c8-about-section" id="about-cr8v-stacks">
      <div class="c8-about-inner">
        <div class="c8-about-header">
          <span class="fylla-meta-tag" style="color: #7C93FF;">ABOUT CR8V STACKS</span>
          <h2 class="c8-about-h2">One team.<br><em>Every layer.</em></h2>
          <p class="c8-about-desc">
            Strategy, design, and code — handled by the same developer-led team from first discovery call to launch. We don't hand off project briefs to isolated departments who have never spoken to each other.
          </p>
        </div>

        <div class="c8-about-mockup-grid">
          <div class="c8-about-card">
            <div>
              <span class="c8-about-card-num">01 / STRATEGY</span>
              <h3 class="c8-about-card-h3">DEVELOPER-LED STRATEGY</h3>
            </div>
            <p class="c8-about-card-p">Every engagement begins with real technical and positioning analysis. We scope transparently with fixed pricing, then we execute.</p>
          </div>

          <div class="c8-about-card is-blue-outline">
            <div>
              <span class="c8-about-card-num">02 / WORKFLOW</span>
              <h3 class="c8-about-card-h3">DESIGN &amp; BUILD TOGETHER</h3>
            </div>
            <p class="c8-about-card-p">Visual UI design and frontend code performance run simultaneously. Less revision back-and-forth, maximum precision in code.</p>
          </div>

          <div class="c8-about-card">
            <div>
              <span class="c8-about-card-num">03 / FREEDOM</span>
              <h3 class="c8-about-card-h3">COMPLETE CLIENT OWNERSHIP</h3>
            </div>
            <p class="c8-about-card-p">Codebase, domain, and data repositories are 100% yours from day one. No lock-in fees or dependencies to keep your site running.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 8. WHO WE BUILD FOR (PREMIUM FIT / NOT FIT MATRIX) ── -->
    <section class="fylla-fit-section" id="who-we-build-for">
      <span class="fylla-meta-tag">WHO WE BUILD FOR</span>
      <h2 class="fylla-values-h2">WE'RE NOT A FIT FOR EVERYONE</h2>
      <p class="fylla-values-p" style="max-width: 680px">That's on purpose. Here's how to tell if your brand is ready for custom engineering.</p>

      <div class="fylla-fit-grid">
        <div class="fylla-fit-card is-yes">
          <div class="fylla-status-pill is-yes" style="margin-bottom: 1rem;">IDEAL PARTNER PROFILE</div>
          <h3 class="fylla-fit-card-h3" style="color: var(--c8-blue);">You're in the right place if</h3>
          <div class="fylla-fit-list">
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>No More Plugin Dependency:</strong> You're tired of being told to "just install another plugin" every time you need a new feature.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Integrated Developer Workflow:</strong> You want a designer and a developer thinking about your site architecture at the same time, not in sequence.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Speed &amp; Performance Priority:</strong> You care about your PageSpeed score and Core Web Vitals as much as your visual branding.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Long-Term Brand Value:</strong> You're building a digital asset you intend to scale for years, not a temporary page you'll discard next quarter.</span>
            </div>
          </div>
        </div>

        <div class="fylla-fit-card is-no">
          <div class="fylla-status-pill is-no" style="margin-bottom: 1rem;">DISQUALIFIERS</div>
          <h3 class="fylla-fit-card-h3" style="color: var(--c8-ink);">We're probably not your agency if</h3>
          <div class="fylla-fit-list">
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Quick Theme Installs:</strong> You want the cheapest pre-made template installed by Friday with zero custom code or optimization.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Passive Site Maintenance:</strong> You're looking for someone to quietly "manage" an existing bloated site without auditing or fixing it.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Gimmicks Over Metrics:</strong> Design trends matter more to your organization than page load times, search ranking, and conversion data.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Transactional Vendors:</strong> You want a set-and-forget outsourced vendor rather than an active technical engineering partner.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 9. LEADERSHIP & FOUNDER PASS ── -->
    <section class="fylla-leadership-section">
      <div class="fylla-lead-left">
        <div class="c8-lead-mascot-box">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>download_mascot.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="fylla-lead-right">
        <span class="fylla-meta-tag">LEADERSHIP</span>
        <h2 class="fylla-values-h2">FOUNDER &amp; DEV-LED CULTURE</h2>
        <p class="fylla-values-p" style="font-weight: 500; color: var(--c8-ink);">Bridging the gap between creative visual architecture and clean, lightweight code.</p>
        <p class="fylla-values-p">Founded by <strong>Mallami Adekunle</strong>, a digital architect and strategist, CR8V Stacks was established to combat the slow, template-stuffed sites typical of corporate digital agencies. Observing how heavy WordPress configurations and generic page templates cost companies traffic and conversions, Mallami assembled a team of developer-first designers.</p>
        <p class="fylla-values-p">At CR8V Stacks, our designers are trained in performance optimization, and our developers are trained in conversion-focused UI/UX — so we never sacrifice speed for looks.</p>

        <!-- SECURE PASS CARD UI -->
        <div class="c8abt-founder-pass c8abt-reveal is-visible">
          <div class="c8abt-pass-header">
            <span class="c8abt-pass-title">CR8V STACKS // SECURE PASS</span>
            <span class="c8abt-pass-meta">ID: 080-MA</span>
          </div>
          <div class="c8abt-pass-body">
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Holder Name</span>
              <span class="c8abt-pass-value">Mallami Adekunle</span>
            </div>
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Designation</span>
              <span class="c8abt-pass-value">Founder &amp; Principal Architect</span>
            </div>
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Core Stacks</span>
              <span class="c8abt-pass-value">WordPress, Shopify, Figma, HTML5, CSS3, JS, PHP</span>
            </div>
          </div>
          <div class="c8abt-pass-barcode-wrap">
            <div class="c8abt-pass-barcode"></div>
            <div class="c8abt-pass-stamp">M.A.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 10. OPEN SOURCE & EDUCATIONAL TUTORIALS ── -->
    <section class="fylla-edu-section">
      <div class="fylla-edu-col">
        <span class="fylla-meta-tag">OPEN SOURCE &amp; EDUCATION</span>
        <h2 class="fylla-values-h2">ADVANCED ELEMENTOR TUTORIALS</h2>
        <p class="fylla-values-p">We run a dedicated learning channel under the handle <strong>@cr8vstacks</strong>, helping web developers write native CSS and JavaScript directly inside Elementor without compromising Google PageSpeed scores.</p>
        
        <div class="fylla-img-frame">
          <a href="https://www.youtube.com/@cr8vstacks" target="_blank" style="display: block; width: 100%; height: 100%;">
            <img src="https://cr8vstacks.com/wp-content/uploads/2026/07/cr8v_youtube_mockup.jpg" alt="CR8V Stacks Elementor Tutorial Video Mockup" onerror="this.src='assets/hww_process_layers.jpg'">
            <div class="fylla-play-overlay">
              <div class="fylla-play-btn">
                <svg viewBox="0 0 24 24" fill="#FFFFFF" style="width: 24px; height: 24px; margin-left: 3px;"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="fylla-edu-col">
        <span class="fylla-meta-tag">WORKFLOW AUTOMATION</span>
        <h2 class="fylla-values-h2">AI-TO-WORDPRESS WORKFLOWS</h2>
        <p class="fylla-values-p">We teach developers how to leverage advanced AI models (like Claude, Gemini, and ChatGPT) to generate custom code structures and automatically translate those mockups into live, pixel-perfect Elementor sections.</p>
        
        <div class="fylla-img-frame">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>ai_wp_tree_workflow.jpg" alt="CR8V Stacks AI-to-WordPress Structural Tree Workflow">
        </div>
      </div>
    </section>

    <!-- ── 11. FYLLA STUDIO CONTACT CTA ── -->
    <section class="fylla-cta-section">
      <div class="cta-col-left">
        <span class="fylla-meta-tag">CONTACT</span>
        <h2 class="cta-h2">LET'S BRING YOUR BRAND TO THE NEXT LEVEL</h2>
      </div>

      <div class="cta-col-right">
        <p class="cta-p">Together, let's elevate your brand to new heights by unleashing its full potential and captivating your target audience with custom zero-plugin architecture.</p>
        <a href="discovery-call.html" class="c8-btn-primary is-dark">Book A Discovery Call</a>
      </div>
    </section>

  
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
