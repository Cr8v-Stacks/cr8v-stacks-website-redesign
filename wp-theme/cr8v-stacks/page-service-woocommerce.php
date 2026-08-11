<?php
/**
 * Template Name: Service — WooCommerce Custom Stores
 * Description: WooCommerce Custom Stores service page template with interactive Scope Estimator and Customizer integration.
 *
 * @package CR8V_Stacks
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">

<div class="c8isv-root">
  <style>
  .c8isv-portfolio-deliverables, .c8srv-portfolio-deliverables {
    grid-column: 1 / -1 !important;
    margin-top: 1.25rem !important;
    padding-top: 1.25rem !important;
    border-top: 1px solid rgba(8, 8, 8, 0.08) !important;
  }
  .c8isv-portfolio-pills, .c8srv-portfolio-pills {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 0.5rem !important;
    align-items: center !important;
    margin-top: 0.4rem !important;
  }
  .c8isv-portfolio-pill, .c8srv-portfolio-pill {
    font-family: 'Space Mono', monospace !important;
    font-size: 0.72rem !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.04em !important;
    background: #FFFFFF !important;
    color: #4A4A4A !important;
    border: 1px solid rgba(8, 8, 8, 0.14) !important;
    padding: 0.35rem 0.85rem !important;
    border-radius: 4px !important;
    display: inline-flex !important;
    align-items: center !important;
    white-space: nowrap !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
  }
  .c8isv-portfolio-pill:hover, .c8srv-portfolio-pill:hover {
    background: #0047E1 !important;
    color: #FFFFFF !important;
    border-color: #0047E1 !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 4px 12px rgba(0, 71, 225, 0.2) !important;
  }
  </style>

  <!-- ══════════════════════════════════════════
       SECTION 1: HERO (Dark)
       ══════════════════════════════════════════ -->
  <div class="c8isv-hero-wrap" data-c8isv-hero>
    <div class="c8isv-hero-atmos">
      <svg class="c8isv-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <filter id="c8isvGoo" x="-50%" y="-50%" width="200%" height="200%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="9" result="turb">
              <animate attributeName="baseFrequency" values="0.008 0.02;0.022 0.048;0.008 0.02" dur="18s" repeatCount="indefinite"/>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turb" scale="44" xChannelSelector="R" yChannelSelector="G"/>
            <feGaussianBlur stdDeviation="5"/>
          </filter>
        </defs>
        <g filter="url(#c8isvGoo)">
          <circle class="c8isv-atmos-blob" cx="80" cy="60" r="75" fill="#0047E1">
            <animate attributeName="cx" values="80;165;55;80" dur="21s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="60;28;110;60" dur="21s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8isv-atmos-blob" cx="290" cy="140" r="55" fill="#3D6BFF">
            <animate attributeName="cx" values="290;175;320;290" dur="17s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="140;88;162;140" dur="17s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8isv-atmos-blob" cx="200" cy="80" r="42" fill="#0A1A6E">
            <animate attributeName="cx" values="200;330;145;200" dur="24s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="80;160;48;80" dur="24s" repeatCount="indefinite"/>
          </circle>
        </g>
      </svg>
    </div>
    <div class="c8isv-hero-glow" data-c8isv-glow></div>
    <div class="c8isv-wrap">
      <div class="c8isv-hero-grid">
        <div class="c8isv-hero-content">
          <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>">SERVICES</a> <span>/</span> <span class="is-current">WOOCOMMERCE DEVELOPMENT</span></div>
          <div class="c8isv-label is-light" data-customizer="wc_hero_eyebrow"><?php echo esc_html(cr8v_mod('wc_hero_eyebrow', 'Custom E-Commerce Store & Checkout Engineering')); ?></div>
          <h1 class="c8isv-headline">
            <span data-customizer="wc_hero_h1_part1"><?php echo esc_html(cr8v_mod('wc_hero_h1_part1', 'Enterprise-Grade ')); ?></span>
            <span class="c8isv-serif" data-customizer="wc_hero_h1_serif"><?php echo esc_html(cr8v_mod('wc_hero_h1_serif', 'WooCommerce')); ?></span>
          </h1>
          <p class="c8isv-hero-intro" data-customizer="wc_hero_intro"><?php echo esc_html(cr8v_mod('wc_hero_intro', 'Full-featured WooCommerce online stores built to sell your products seamlessly, handle custom catalog workflows, and give you complete self-hosted control with zero recurring platform subscription taxes.')); ?></p>
          <div class="c8isv-hero-ctas">
            <a href="<?php echo esc_url(cr8v_mod('wc_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="wc_hero_cta1_text"><?php echo esc_html(cr8v_mod('wc_hero_cta1_text', 'See What We Build →')); ?></a>
            <a href="<?php echo esc_url(cr8v_mod('wc_hero_cta2_url', home_url('/contact/'))); ?>" class="c8isv-btn-ghost" data-customizer="wc_hero_cta2_text"><?php echo esc_html(cr8v_mod('wc_hero_cta2_text', 'Get a Quote →')); ?></a>
          </div>
          <div class="c8isv-pill-row">
            <span class="c8isv-pill" data-customizer="wc_hero_pill1"><?php echo esc_html(cr8v_mod('wc_hero_pill1', 'WooCommerce')); ?></span>
            <span class="c8isv-pill" data-customizer="wc_hero_pill2"><?php echo esc_html(cr8v_mod('wc_hero_pill2', 'WordPress')); ?></span>
            <span class="c8isv-pill" data-customizer="wc_hero_pill3"><?php echo esc_html(cr8v_mod('wc_hero_pill3', 'PHP')); ?></span>
            <span class="c8isv-pill" data-customizer="wc_hero_pill4"><?php echo esc_html(cr8v_mod('wc_hero_pill4', 'MySQL')); ?></span>
          </div>
        </div>
        
        <!-- Right Side Parallax Shatter Animation -->
        <div class="c8isv-anim-container" id="c8isv-anim-wrapper">
          <canvas id="c8isv-canvas-bg"></canvas>
          <canvas id="c8isv-canvas-main"></canvas>
          <canvas id="c8isv-canvas-noise"></canvas>
          <div id="c8isv-anim-fog"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 2: WHY WOOCOMMERCE (Flank Cards Stack)
       ══════════════════════════════════════════ -->
  <div class="c8isv-flank-section">
    <div class="c8isv-flank-inner">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="wc_why_label"><?php echo esc_html(cr8v_mod('wc_why_label', 'Why WooCommerce')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wc_why_h2"><?php echo esc_html(cr8v_mod('wc_why_h2', 'WooCommerce Stores Built For Freedom & Sales Growth')); ?></h2>

      <div class="c8isv-flank-container" data-c8isv-flank-trigger>
        <!-- Card 1 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="0">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="wc_why_card1_step"><?php echo esc_html(cr8v_mod('wc_why_card1_step', 'Design // Custom')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="wc_why_card1_title"><?php echo esc_html(cr8v_mod('wc_why_card1_title', 'Custom Storefront Design')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="wc_why_card1_desc"><?php echo esc_html(cr8v_mod('wc_why_card1_desc', 'Tailored WooCommerce store layouts built with Elementor or Gutenberg on clean starter themes, giving you an intuitive shop that reflects your brand.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="1">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="wc_why_card2_step"><?php echo esc_html(cr8v_mod('wc_why_card2_step', 'Global // Geolocation')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="wc_why_card2_title"><?php echo esc_html(cr8v_mod('wc_why_card2_title', 'Global Multi-Currency & Geolocation')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="wc_why_card2_desc"><?php echo esc_html(cr8v_mod('wc_why_card2_desc', 'Multi-currency switchers, localized payment gateways (Stripe, Paystack, PayPal), and automatic IP geolocation redirects for global buyers.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="2">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="wc_why_card3_step"><?php echo esc_html(cr8v_mod('wc_why_card3_step', 'Control // 100% Data')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="wc_why_card3_title"><?php echo esc_html(cr8v_mod('wc_why_card3_title', '100% Data & Store Ownership')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="wc_why_card3_desc"><?php echo esc_html(cr8v_mod('wc_why_card3_desc', 'Self-hosted infrastructure with complete data privacy, saving you from monthly platform subscription taxes.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="3">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="wc_why_card4_step"><?php echo esc_html(cr8v_mod('wc_why_card4_step', 'Security // Protection')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="wc_why_card4_title"><?php echo esc_html(cr8v_mod('wc_why_card4_title', 'Plugin Security & Hardening')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="wc_why_card4_desc"><?php echo esc_html(cr8v_mod('wc_why_card4_desc', 'Essential audited security plugins like Wordfence and Sucuri, SSL configuration, and 2FA login protection.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 3: OUR WORK (Portfolio Showcase)
       ══════════════════════════════════════════ -->
  <div class="c8isv-portfolio-outer">
    <div class="c8isv-portfolio-inner">
      <div class="c8isv-portfolio-head">
        <div class="c8isv-label c8isv-reveal is-center" data-customizer="wc_work_label"><?php echo esc_html(cr8v_mod('wc_work_label', 'Our Work')); ?></div>
        <h2 class="c8isv-section-title c8isv-reveal">
          <span data-customizer="wc_work_h2_part1"><?php echo esc_html(cr8v_mod('wc_work_h2_part1', 'Built for Real Outcomes, ')); ?></span><br>
          <span class="c8isv-serif" data-customizer="wc_work_h2_serif"><?php echo esc_html(cr8v_mod('wc_work_h2_serif', 'Not Just Concepts')); ?></span>
        </h2>
      </div>
      <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
        <div class="c8isv-portfolio-img">
          <img src="<?php echo esc_url(cr8v_mod('wc_work_cs_img', 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop')); ?>" alt="SweeterMen NG WooCommerce store — built by Cr8v Stacks" data-customizer="wc_work_cs_img">
        </div>
        <div class="c8isv-portfolio-info">
          <span class="c8isv-portfolio-client" data-customizer="wc_work_cs_client"><?php echo esc_html(cr8v_mod('wc_work_cs_client', 'Case Study — SweeterMen NG')); ?></span>
          <h3 class="c8isv-portfolio-title" data-customizer="wc_work_cs_title"><?php echo esc_html(cr8v_mod('wc_work_cs_title', 'Full-Stack Watch E-Commerce & Growth')); ?></h3>
          <p class="c8isv-portfolio-desc" data-customizer="wc_work_cs_desc"><?php echo esc_html(cr8v_mod('wc_work_cs_desc', 'We built SweeterMen NG\'s online watch store on WooCommerce with custom checkout hooks, then ran the Google and Meta ad campaigns that drove traffic to it — one team handling both the build and the growth.')); ?></p>
          <div class="c8isv-portfolio-stats">
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="wc_work_cs_stat1_val"><?php echo esc_html(cr8v_mod('wc_work_cs_stat1_val', '40+')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="wc_work_cs_stat1_lbl"><?php echo esc_html(cr8v_mod('wc_work_cs_stat1_lbl', 'Products Catalogued')); ?></span>
            </div>
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="wc_work_cs_stat2_val"><?php echo esc_html(cr8v_mod('wc_work_cs_stat2_val', '2.1s')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="wc_work_cs_stat2_lbl"><?php echo esc_html(cr8v_mod('wc_work_cs_stat2_lbl', 'Mobile Speed')); ?></span>
            </div>
          </div>
          <div class="c8isv-portfolio-deliverables">
            <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
            <div class="c8isv-portfolio-pills">
              <span class="c8isv-portfolio-pill" data-customizer="wc_work_cs_pill1"><?php echo esc_html(cr8v_mod('wc_work_cs_pill1', 'WooCommerce Setup')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="wc_work_cs_pill2"><?php echo esc_html(cr8v_mod('wc_work_cs_pill2', 'Paystack Gateway')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="wc_work_cs_pill3"><?php echo esc_html(cr8v_mod('wc_work_cs_pill3', 'Product Variant Filters')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="wc_work_cs_pill4"><?php echo esc_html(cr8v_mod('wc_work_cs_pill4', 'Meta Ad Strategy')); ?></span>
            </div>
          </div>
          <a href="<?php echo esc_url(cr8v_mod('wc_work_cs_btn_url', home_url('/case-studies/sweetermen/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="wc_work_cs_btn_text"><?php echo esc_html(cr8v_mod('wc_work_cs_btn_text', 'View Case Study →')); ?></a>
        </div>
      </div>
      <div class="c8isv-portfolio-footer">
        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8isv-explore">See All Projects &rarr;</a>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 4: WHAT YOU GET (Folder Deck)
       ══════════════════════════════════════════ -->
  <div class="c8srv-folder-section" id="c8isv-services">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal" data-customizer="wc_deck_label"><?php echo esc_html(cr8v_mod('wc_deck_label', 'What You Get')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal">
        <span data-customizer="wc_deck_h2_part1"><?php echo esc_html(cr8v_mod('wc_deck_h2_part1', 'Every layer of your store, ')); ?></span>
        <span class="c8isv-serif" data-customizer="wc_deck_h2_serif"><?php echo esc_html(cr8v_mod('wc_deck_h2_serif', 'engineered by Cr8v Stacks.')); ?></span>
      </h2>
      <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="wc_deck_desc"><?php echo esc_html(cr8v_mod('wc_deck_desc', 'From storefront design to checkout gateways — built clean, with zero plugin bloat.')); ?></p>

      <div class="c8srv-folder-deck" data-c8srv-folder-deck>
        <!-- Card 1 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="wc_deck1_tab"><?php echo esc_html(cr8v_mod('wc_deck1_tab', '01 // Setup')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="wc_deck1_title"><?php echo esc_html(cr8v_mod('wc_deck1_title', 'WooCommerce Storefront Setup')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="wc_deck1_desc"><?php echo esc_html(cr8v_mod('wc_deck1_desc', 'Full installation and configuration of WooCommerce, store currency settings, shipping zones, tax rules, and email notifications customized to your brand.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('wc_deck1_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="wc_deck1_cta_text"><?php echo esc_html(cr8v_mod('wc_deck1_cta_text', 'Discuss storefront →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('wc_deck1_img', 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop')); ?>" alt="WooCommerce storefront setup" data-customizer="wc_deck1_img">
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="wc_deck2_tab"><?php echo esc_html(cr8v_mod('wc_deck2_tab', '02 // Checkout')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="wc_deck2_title"><?php echo esc_html(cr8v_mod('wc_deck2_title', 'Payment & Checkout Integration')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="wc_deck2_desc"><?php echo esc_html(cr8v_mod('wc_deck2_desc', 'Seamless connection to Paystack, Stripe, PayPal, Flutterwave, or custom gateway integrations with one-page checkout optimization to reduce cart abandonment.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('wc_deck2_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="wc_deck2_cta_text"><?php echo esc_html(cr8v_mod('wc_deck2_cta_text', 'Discuss checkout →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('wc_deck2_img', 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=800&auto=format&fit=crop')); ?>" alt="WooCommerce payment checkout integration" data-customizer="wc_deck2_img">
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="wc_deck3_tab"><?php echo esc_html(cr8v_mod('wc_deck3_tab', '03 // Catalog')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="wc_deck3_title"><?php echo esc_html(cr8v_mod('wc_deck3_title', 'Product Catalog & Migration')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="wc_deck3_desc"><?php echo esc_html(cr8v_mod('wc_deck3_desc', 'Structured variable products, product attributes, custom fields, inventory sync, and data migration from Shopify, Wix, or CSV files.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('wc_deck3_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="wc_deck3_cta_text"><?php echo esc_html(cr8v_mod('wc_deck3_cta_text', 'Discuss catalog →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('wc_deck3_img', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop')); ?>" alt="WooCommerce catalog management" data-customizer="wc_deck3_img">
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="wc_deck4_tab"><?php echo esc_html(cr8v_mod('wc_deck4_tab', '04 // Speed')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="wc_deck4_title"><?php echo esc_html(cr8v_mod('wc_deck4_title', 'Speed Optimization & Security')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="wc_deck4_desc"><?php echo esc_html(cr8v_mod('wc_deck4_desc', 'WooCommerce database vacuuming, object caching (Redis/Memcached), image compression, SSL setup, and security hardening to prevent site hacks.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('wc_deck4_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="wc_deck4_cta_text"><?php echo esc_html(cr8v_mod('wc_deck4_cta_text', 'Discuss speed →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('wc_deck4_img', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop')); ?>" alt="WooCommerce speed tuning" data-customizer="wc_deck4_img">
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="wc_deck5_tab"><?php echo esc_html(cr8v_mod('wc_deck5_tab', '05 // Launch')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="wc_deck5_title"><?php echo esc_html(cr8v_mod('wc_deck5_title', 'Store Launch QA & Training')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="wc_deck5_desc"><?php echo esc_html(cr8v_mod('wc_deck5_desc', 'Complete order testing, email notification verification, SSL domain cutover, 301 redirect maps, and staff admin dashboard training.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('wc_deck5_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="wc_deck5_cta_text"><?php echo esc_html(cr8v_mod('wc_deck5_cta_text', 'Discuss launch QA →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('wc_deck5_img', 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop')); ?>" alt="WooCommerce launch QA" data-customizer="wc_deck5_img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 5: PROCESS & APPROACH
       ══════════════════════════════════════════ -->
  <div class="c8isv-approach-outer">
    <div class="c8isv-wrap" style="padding-bottom: 0;">
      <div class="c8isv-label c8isv-reveal" data-customizer="wc_proc_label"><?php echo esc_html(cr8v_mod('wc_proc_label', 'How We Approach It')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wc_proc_h2"><?php echo esc_html(cr8v_mod('wc_proc_h2', 'Four stages. No overlap, no shortcuts.')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" style="margin-bottom: 3rem;" data-customizer="wc_proc_desc"><?php echo esc_html(cr8v_mod('wc_proc_desc', 'A battle-tested 4-stage WooCommerce storefront development process built for performance, security, and sales growth.')); ?></p>
    </div>
    <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
      <!-- Stage 1 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="wc_proc1_num"><?php echo esc_html(cr8v_mod('wc_proc1_num', '01')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="wc_proc1_name"><?php echo esc_html(cr8v_mod('wc_proc1_name', 'Discover')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="wc_proc1_tags"><?php echo esc_html(cr8v_mod('wc_proc1_tags', 'Audit · Gateways · Catalog')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="wc_proc1_desc"><?php echo esc_html(cr8v_mod('wc_proc1_desc', 'Product catalog auditing, payment gateway mapping, and technical hosting evaluation to select optimal server configurations.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="<?php echo esc_url(cr8v_mod('wc_proc1_img', 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop')); ?>" alt="Discovery audit stage" data-customizer="wc_proc1_img">
          </div>
        </div>
      </div>

      <!-- Stage 2 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="wc_proc2_num"><?php echo esc_html(cr8v_mod('wc_proc2_num', '02')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="wc_proc2_name"><?php echo esc_html(cr8v_mod('wc_proc2_name', 'Design')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="wc_proc2_tags"><?php echo esc_html(cr8v_mod('wc_proc2_tags', 'UX · Cart · Mobile')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="wc_proc2_desc"><?php echo esc_html(cr8v_mod('wc_proc2_desc', 'Single-product layouts, shop archive filtering UX, mobile checkout drawers, and cart upsell design wireframing.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="<?php echo esc_url(cr8v_mod('wc_proc2_img', 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop')); ?>" alt="Store UX design stage" data-customizer="wc_proc2_img">
          </div>
        </div>
      </div>

      <!-- Stage 3 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="wc_proc3_num"><?php echo esc_html(cr8v_mod('wc_proc3_num', '03')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="wc_proc3_name"><?php echo esc_html(cr8v_mod('wc_proc3_name', 'Build')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="wc_proc3_tags"><?php echo esc_html(cr8v_mod('wc_proc3_tags', 'PHP · WooCommerce · API')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="wc_proc3_desc"><?php echo esc_html(cr8v_mod('wc_proc3_desc', 'Custom PHP theme coding, custom WooCommerce checkout hooks, gateway SDK wiring, and plugin audit to eliminate slow code.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="<?php echo esc_url(cr8v_mod('wc_proc3_img', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop')); ?>" alt="Custom PHP theme coding stage" data-customizer="wc_proc3_img">
          </div>
        </div>
      </div>

      <!-- Stage 4 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="wc_proc4_num"><?php echo esc_html(cr8v_mod('wc_proc4_num', '04')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="wc_proc4_name"><?php echo esc_html(cr8v_mod('wc_proc4_name', 'Launch')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="wc_proc4_tags"><?php echo esc_html(cr8v_mod('wc_proc4_tags', 'Speed · Caching · Handover')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="wc_proc4_desc"><?php echo esc_html(cr8v_mod('wc_proc4_desc', 'Redis object caching configuration, database optimization, order testing, 301 URL redirects, and staff dashboard training.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="<?php echo esc_url(cr8v_mod('wc_proc4_img', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop')); ?>" alt="WooCommerce speed and launch stage" data-customizer="wc_proc4_img">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 5.5: WOOCOMMERCE BUILD STACK DECK
       ══════════════════════════════════════════ -->
  <div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal" data-customizer="wc_plat_label"><?php echo esc_html(cr8v_mod('wc_plat_label', 'WooCommerce Stack Options')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;">
        <span data-customizer="wc_plat_h2_part1"><?php echo esc_html(cr8v_mod('wc_plat_h2_part1', 'Choosing The Right ')); ?></span>
        <span class="c8isv-serif" data-customizer="wc_plat_h2_serif"><?php echo esc_html(cr8v_mod('wc_plat_h2_serif', 'WooCommerce Architecture')); ?></span>
      </h2>
      <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;" data-customizer="wc_plat_desc"><?php echo esc_html(cr8v_mod('wc_plat_desc', 'Whether you need rapid theme setup, custom PHP layouts, high-volume speed optimization, or multi-currency setup — we engineer the right WooCommerce configuration for your business:')); ?></p>
      
      <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
        <!-- Option 1 -->
        <div class="c8isv-platform-card c8isv-reveal">
          <span class="c8isv-platform-badge" data-customizer="wc_plat1_badge"><?php echo esc_html(cr8v_mod('wc_plat1_badge', 'Custom // Gutenberg')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="wc_plat1_title"><?php echo esc_html(cr8v_mod('wc_plat1_title', 'Custom Theme & Gutenberg Store')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="wc_plat1_desc"><?php echo esc_html(cr8v_mod('wc_plat1_desc', 'Tailored WooCommerce layouts built on lightweight block-editor starters or Elementor Pro without bloated plugin dependencies.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </div>
        </div>

        <!-- Option 2 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
          <span class="c8isv-platform-badge" data-customizer="wc_plat2_badge"><?php echo esc_html(cr8v_mod('wc_plat2_badge', 'Gateways // Paystack')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="wc_plat2_title"><?php echo esc_html(cr8v_mod('wc_plat2_title', 'Global & Local Gateway Integration')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="wc_plat2_desc"><?php echo esc_html(cr8v_mod('wc_plat2_desc', 'Configuring Stripe, Paystack, PayPal, Monnify, or Flutterwave for frictionless multi-currency and local card payments.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
        </div>

        <!-- Option 3 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
          <span class="c8isv-platform-badge" data-customizer="wc_plat3_badge"><?php echo esc_html(cr8v_mod('wc_plat3_badge', 'Speed // Caching')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="wc_plat3_title"><?php echo esc_html(cr8v_mod('wc_plat3_title', 'High-Speed Database & Caching')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="wc_plat3_desc"><?php echo esc_html(cr8v_mod('wc_plat3_desc', 'Redis object caching, Cloudflare CDN integration, and MySQL database vacuuming for fast sub-2s mobile load times.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
        </div>

        <!-- Option 4 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
          <span class="c8isv-platform-badge" data-customizer="wc_plat4_badge"><?php echo esc_html(cr8v_mod('wc_plat4_badge', 'REST API // Headless')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="wc_plat4_title"><?php echo esc_html(cr8v_mod('wc_plat4_title', 'Headless WooCommerce & REST API')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="wc_plat4_desc"><?php echo esc_html(cr8v_mod('wc_plat4_desc', 'Custom React or Next.js frontends connecting to WooCommerce REST API for bespoke app-like shopping experiences.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
          </div>
        </div>
      </div>

      <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;" data-customizer="wc_plat_footer_note">
        <?php echo esc_html(cr8v_mod('wc_plat_footer_note', 'Not sure which one? Tell us what you\'re selling and we\'ll recommend the right WooCommerce architecture as part of the initial scoping call.')); ?>
      </p>

      <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
        <a href="<?php echo esc_url(cr8v_mod('wc_plat_cta_url', home_url('/contact/?model=project&service=woocommerce'))); ?>" class="c8isv-btn-primary" data-customizer="wc_plat_cta_text"><?php echo esc_html(cr8v_mod('wc_plat_cta_text', 'Start a WooCommerce Scoping Call →')); ?></a>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 6: FULL CATALOG HOVERLIST
       ══════════════════════════════════════════ -->
  <div class="c8isv-hl-section">
    <div class="c8isv-wrap" style="padding-bottom:0">
      <div class="c8isv-label c8isv-reveal" data-customizer="wc_cat_label"><?php echo esc_html(cr8v_mod('wc_cat_label', 'Project Catalog')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wc_cat_h2"><?php echo esc_html(cr8v_mod('wc_cat_h2', 'Every Kind of WooCommerce Store We Engineer')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="wc_cat_desc"><?php echo esc_html(cr8v_mod('wc_cat_desc', 'From fashion boutiques to digital downloads and subscription boxes — hover to inspect the project stack.')); ?></p>
    </div>
    <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
      <div class="c8isv-hoverlist" data-c8isv-hoverlist>
        <!-- Item 1 -->
        <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="WooCommerce" data-logo-1="<?php echo esc_url(cr8v_mod('wc_cat1_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg')); ?>" data-tech-2="WordPress" data-logo-2="<?php echo esc_url(cr8v_mod('wc_cat1_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg')); ?>">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">01</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="wc_cat1_title"><?php echo esc_html(cr8v_mod('wc_cat1_title', 'Fashion, Apparel & Luxury Accessories')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="wc_cat1_tagline"><?php echo esc_html(cr8v_mod('wc_cat1_tagline', 'Size guide popups, color swatch filters, gallery rotators, and checkout upsells.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech" data-customizer="wc_cat1_tech"><?php echo esc_html(cr8v_mod('wc_cat1_tech', 'Apparel')); ?></span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="WooCommerce" data-logo-1="<?php echo esc_url(cr8v_mod('wc_cat2_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg')); ?>" data-tech-2="PHP" data-logo-2="<?php echo esc_url(cr8v_mod('wc_cat2_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg')); ?>">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">02</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="wc_cat2_title"><?php echo esc_html(cr8v_mod('wc_cat2_title', 'Digital Downloads & Software Licensing')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="wc_cat2_tagline"><?php echo esc_html(cr8v_mod('wc_cat2_tagline', 'Automated license key generation, instant file download access, and account management.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech" data-customizer="wc_cat2_tech"><?php echo esc_html(cr8v_mod('wc_cat2_tech', 'Digital Goods')); ?></span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="WooCommerce" data-logo-1="<?php echo esc_url(cr8v_mod('wc_cat3_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg')); ?>" data-tech-2="Stripe" data-logo-2="<?php echo esc_url(cr8v_mod('wc_cat3_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/stripe.svg')); ?>">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">03</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="wc_cat3_title"><?php echo esc_html(cr8v_mod('wc_cat3_title', 'Subscription Boxes & Recurring Memberships')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="wc_cat3_tagline"><?php echo esc_html(cr8v_mod('wc_cat3_tagline', 'WooCommerce Subscriptions setup, recurring billing automation, and customer portal management.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech" data-customizer="wc_cat3_tech"><?php echo esc_html(cr8v_mod('wc_cat3_tech', 'Subscriptions')); ?></span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="WooCommerce" data-logo-1="<?php echo esc_url(cr8v_mod('wc_cat4_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg')); ?>" data-tech-2="MySQL" data-logo-2="<?php echo esc_url(cr8v_mod('wc_cat4_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mysql.svg')); ?>">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">04</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="wc_cat4_title"><?php echo esc_html(cr8v_mod('wc_cat4_title', 'Multi-Vendor Marketplaces')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="wc_cat4_tagline"><?php echo esc_html(cr8v_mod('wc_cat4_tagline', 'Dokan/WCFM marketplace integration, vendor dashboards, commission split wiring, and review systems.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech" data-customizer="wc_cat4_tech"><?php echo esc_html(cr8v_mod('wc_cat4_tech', 'Marketplaces')); ?></span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="WooCommerce" data-logo-1="<?php echo esc_url(cr8v_mod('wc_cat5_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg')); ?>" data-tech-2="Shopify" data-logo-2="<?php echo esc_url(cr8v_mod('wc_cat5_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg')); ?>">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">05</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="wc_cat5_title"><?php echo esc_html(cr8v_mod('wc_cat5_title', 'Shopify to WooCommerce Data Migrations')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="wc_cat5_tagline"><?php echo esc_html(cr8v_mod('wc_cat5_tagline', 'Transferring products, orders, customer accounts, and 301 URL redirects to self-hosted WooCommerce seamlessly.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech" data-customizer="wc_cat5_tech"><?php echo esc_html(cr8v_mod('wc_cat5_tech', 'Migrations')); ?></span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 8: TESTIMONIALS
       ══════════════════════════════════════════ -->
  <div class="c8srv-testimonials-outer">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="wc_testi_label"><?php echo esc_html(cr8v_mod('wc_testi_label', 'Client Feedback')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" style="text-align:center !important">
        <span data-customizer="wc_testi_h2_part1"><?php echo esc_html(cr8v_mod('wc_testi_h2_part1', 'What clients say after ')); ?></span>
        <span class="c8isv-serif" data-customizer="wc_testi_h2_serif"><?php echo esc_html(cr8v_mod('wc_testi_h2_serif', 'launch')); ?></span>
      </h2>
      <div class="c8srv-testimonials-grid">
        <div class="c8srv-testi-card c8isv-reveal">
          <p class="c8srv-testi-text" data-customizer="wc_testi1_text"><?php echo esc_html(cr8v_mod('wc_testi1_text', 'Rebuilding our watch store on WooCommerce gave us total database ownership and eliminated $400/mo in recurring SaaS platform app fees while keeping page speeds under 2 seconds.')); ?></p>
          <div class="c8srv-testi-author" data-customizer="wc_testi1_author"><?php echo esc_html(cr8v_mod('wc_testi1_author', 'Tunde Williams — Managing Director, SweeterMen')); ?></div>
        </div>
        <div class="c8srv-testi-card c8isv-reveal c8isv-reveal-d1">
          <p class="c8srv-testi-text" data-customizer="wc_testi2_text"><?php echo esc_html(cr8v_mod('wc_testi2_text', 'The Paystack and Stripe multi-currency checkout setup quadrupled our international sales without any checkout dropoff.')); ?></p>
          <div class="c8srv-testi-author" data-customizer="wc_testi2_author"><?php echo esc_html(cr8v_mod('wc_testi2_author', 'Amaka Okafor — E-Commerce Manager')); ?></div>
        </div>
        <div class="c8srv-testi-card c8isv-reveal c8isv-reveal-d2">
          <p class="c8srv-testi-text" data-customizer="wc_testi3_text"><?php echo esc_html(cr8v_mod('wc_testi3_text', 'Database vacuuming and Redis object caching transformed our WooCommerce admin speed. Searching 10,000 orders now takes half a second.')); ?></p>
          <div class="c8srv-testi-author" data-customizer="wc_testi3_author"><?php echo esc_html(cr8v_mod('wc_testi3_author', 'Marcus Vance — Operations Lead')); ?></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 9: PRICING & ESTIMATOR
       ══════════════════════════════════════════ -->
  <div class="c8srv-pricing-outer" id="pricing">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="wc_pricing_label"><?php echo esc_html(cr8v_mod('wc_pricing_label', 'PRICING MODELS')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" style="text-align: center !important;">
        <span data-customizer="wc_pricing_h2_part1"><?php echo esc_html(cr8v_mod('wc_pricing_h2_part1', 'HOW WE ')); ?></span>
        <span class="c8isv-serif" data-customizer="wc_pricing_h2_serif"><?php echo esc_html(cr8v_mod('wc_pricing_h2_serif', 'WORK TOGETHER')); ?></span>
      </h2>
      <p class="c8isv-lead c8isv-reveal" style="text-align: center !important; margin-left: auto !important; margin-right: auto !important; margin-bottom: 3.5rem !important;" data-customizer="wc_pricing_desc"><?php echo esc_html(cr8v_mod('wc_pricing_desc', 'Whether you need ongoing site maintenance or a dedicated WooCommerce storefront build, we have a model to fit.')); ?></p>

      <div class="c8srv-pricing-grid">
        <!-- Growth Retainer Card -->
        <div class="c8srv-price-box c8srv-reveal">
          <div class="c8srv-price-header">
            <span class="c8srv-price-type" data-customizer="wc_plan1_type"><?php echo esc_html(cr8v_mod('wc_plan1_type', 'Ongoing Support')); ?></span>
            <h3 class="c8srv-price-title" data-customizer="wc_plan1_title"><?php echo esc_html(cr8v_mod('wc_plan1_title', 'Growth Retainer')); ?></h3>
            <div class="c8srv-price-amount">
              <span class="c8srv-price-num" data-customizer="wc_plan1_price"><?php echo esc_html(cr8v_mod('wc_plan1_price', '$950')); ?></span>
              <span class="c8srv-price-period" data-customizer="wc_plan1_period"><?php echo esc_html(cr8v_mod('wc_plan1_period', '/mo')); ?></span>
            </div>
          </div>
          <p class="c8srv-price-desc" data-customizer="wc_plan1_desc"><?php echo esc_html(cr8v_mod('wc_plan1_desc', 'Dedicated monthly WooCommerce maintenance, plugin updates, speed tuning, and security audits to keep your shop fast and secure.')); ?></p>
          <div class="c8srv-price-features">
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Dedicated monthly development &amp; design hours</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Plugin updates, database vacuums &amp; security hardening</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Conversion optimization &amp; mobile checkout tweaks</span>
            </div>
          </div>
          <a href="<?php echo esc_url(cr8v_mod('wc_plan1_cta_url', home_url('/contact/?model=retainer'))); ?>" class="c8srv-price-btn is-light" data-customizer="wc_plan1_cta_text"><?php echo esc_html(cr8v_mod('wc_plan1_cta_text', 'Secure Retainer Slot')); ?></a>
        </div>

        <!-- Fixed Project Card -->
        <div class="c8srv-price-box is-highlight c8srv-reveal">
          <div class="c8srv-price-header">
            <span class="c8srv-price-type" data-customizer="wc_plan2_type"><?php echo esc_html(cr8v_mod('wc_plan2_type', 'Fixed Scope')); ?></span>
            <h3 class="c8srv-price-title" data-customizer="wc_plan2_title"><?php echo esc_html(cr8v_mod('wc_plan2_title', 'Fixed Projects')); ?></h3>
            <div class="c8srv-price-amount">
              <span class="c8srv-price-num" data-customizer="wc_plan2_price"><?php echo esc_html(cr8v_mod('wc_plan2_price', 'From $1,500')); ?></span>
              <span class="c8srv-price-period" data-customizer="wc_plan2_period"><?php echo esc_html(cr8v_mod('wc_plan2_period', ' entry')); ?></span>
            </div>
          </div>
          <p class="c8srv-price-desc" data-customizer="wc_plan2_desc"><?php echo esc_html(cr8v_mod('wc_plan2_desc', 'Custom WooCommerce storefront design, gateway setup, speed tuning, and mobile-first product page engineering.')); ?></p>
          <div class="c8srv-price-features">
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Custom storefront architecture &amp; checkout UX</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Stripe / Paystack / PayPal gateway integration</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Redis caching &amp; sub-2s mobile speed tuning</span>
            </div>
          </div>
          <a href="<?php echo esc_url(cr8v_mod('wc_plan2_cta_url', home_url('/contact/?model=project'))); ?>" class="c8srv-price-btn is-primary" data-customizer="wc_plan2_cta_text"><?php echo esc_html(cr8v_mod('wc_plan2_cta_text', 'Start A Project')); ?></a>
        </div>
      </div>

      <!-- Interactive Scope Estimator -->
      <div class="c8srv-estimator c8srv-reveal">
        <div style="margin-bottom: 2.5rem !important;">
          <span class="c8srv-price-type">Project Scope Estimator</span>
          <h3 class="c8srv-price-title" style="font-size: 1.8rem !important; margin-bottom: 0.5rem !important;">Build Your Stack Estimate</h3>
          <p class="c8srv-price-desc" style="margin-bottom: 0 !important; margin-left: auto !important; margin-right: auto !important;">Select your desired setup below to calculate an immediate starting price range estimate for your project.</p>
        </div>

        <div class="c8srv-estimator-grid">
          <div class="c8srv-est-options">
            <!-- Step 1 -->
            <div>
              <span class="c8srv-est-group-title">1. Core WooCommerce Package</span>
              <div class="c8srv-est-choices" data-est-group="platform">
                <button type="button" class="c8srv-est-choice is-active" data-est-val="wccore" data-est-price="1500">Custom Storefront ($1,500)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="wcfull" data-est-price="2100">Full Store &amp; Gateways ($2,100)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="wcmulti" data-est-price="3100">Multi-Currency / Marketplace ($3,100)</button>
              </div>
            </div>

            <!-- Step 2 -->
            <div>
              <span class="c8srv-est-group-title">2. Product Catalog Scale</span>
              <div class="c8srv-est-choices" data-est-group="scale">
                <button type="button" class="c8srv-est-choice is-active" data-est-val="standard" data-est-multiplier="1.0">Standard Product Catalog</button>
                <button type="button" class="c8srv-est-choice" data-est-val="customcatalog" data-est-multiplier="1.4">Large Catalog &amp; Multi-Variant</button>
              </div>
            </div>

            <!-- Step 3 -->
            <div>
              <span class="c8srv-est-group-title">3. Performance &amp; Gateways</span>
              <div class="c8srv-est-choices" data-est-group="growth">
                <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
                <button type="button" class="c8srv-est-choice" data-est-val="rediscache" data-est-price="400">Redis Cache &amp; Speed Setup (+ $400)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="migration" data-est-price="500">Shopify to WC Data Migration (+ $500)</button>
              </div>
            </div>
          </div>

          <div class="c8srv-est-result">
            <span class="c8srv-est-range-label">Estimated Starting Investment</span>
            <div class="c8srv-est-range" id="est-range-display">$1,500 - $1,900</div>
            
            <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
            <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Custom WooCommerce theme build &amp; setup</div><div>• Zero-bloat speed architecture &amp; gateway wiring</div><div>• Up to 5 editable layout pages</div></div>

            <a href="<?php echo esc_url(cr8v_mod('wc_est_cta_url', home_url('/contact/?platform=woocommerce&est=1500-1900'))); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
            <a href="<?php echo esc_url(cr8v_mod('wc_est_calc_url', home_url('/toolkits/website-cost-calculator/'))); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 10: FAQ ACCORDION
       ══════════════════════════════════════════ -->
  <section class="faq-section" id="faq" style="background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important;">
    <style>
      .faq-section { background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important; position: relative !important; z-index: 5 !important; border-top: 1px solid rgba(8,8,8,0.12) !important; }
      .faq-inner { max-width: 1360px !important; margin: 0 auto !important; padding: 0 clamp(1.5rem, 5vw, 5rem) !important; display: grid !important; grid-template-columns: 300px 1fr !important; gap: clamp(3rem, 6vw, 8rem) !important; align-items: start !important; }
      .faq-aside { position: sticky !important; top: 6rem !important; align-self: start !important; }
      .faq-eyebrow { font-family: 'Space Mono', monospace !important; font-size: 0.65rem !important; letter-spacing: 0.14em !important; text-transform: uppercase !important; color: #0047E1 !important; margin-bottom: 1rem !important; font-weight: 700 !important; }
      .faq-h2 { font-family: 'Michroma', sans-serif !important; font-size: clamp(1.6rem, 2.8vw, 2.2rem) !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.2 !important; margin-bottom: 1.5rem !important; }
      .faq-sub { font-family: 'DM Sans', sans-serif !important; font-size: 0.85rem !important; font-weight: 300 !important; color: #555555 !important; line-height: 1.7 !important; margin-bottom: 2rem !important; }
      .faq-cta-link { font-family: 'Space Mono', monospace !important; font-size: 0.75rem !important; font-weight: 700 !important; color: #0047E1 !important; text-transform: uppercase !important; text-decoration: none !important; display: inline-flex !important; align-items: center !important; gap: 0.5rem !important; letter-spacing: 0.08em !important; transition: color 0.2s ease !important; }
      .faq-cta-link:hover { color: #0037B5 !important; }
      .faq-list { list-style: none !important; padding: 0 !important; margin: 0 !important; }
      .faq-item { border-bottom: 1px solid rgba(8,8,8,0.1) !important; }
      .faq-item:first-child { border-top: 1px solid rgba(8,8,8,0.1) !important; }
      .faq-trigger { width: 100% !important; background: none !important; border: none !important; cursor: pointer !important; display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 1.5rem !important; padding: 1.4rem 0 !important; text-align: left !important; }
      .faq-q { font-family: 'DM Sans', sans-serif !important; font-size: clamp(0.88rem, 1.3vw, 0.95rem) !important; font-weight: 400 !important; color: #080808 !important; line-height: 1.4 !important; }
      .faq-icon { width: 28px !important; height: 28px !important; border-radius: 50% !important; border: 1px solid rgba(8,8,8,0.14) !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important; transition: background 0.25s, border-color 0.25s !important; }
      .faq-icon svg { transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important; stroke: #080808 !important; }
      .faq-item.is-open .faq-icon { background: #0047E1 !important; border-color: #0047E1 !important; }
      .faq-item.is-open .faq-icon svg { transform: rotate(45deg) !important; stroke: #ffffff !important; }
      .faq-body { display: grid !important; grid-template-rows: 0fr !important; transition: grid-template-rows 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important; }
      .faq-item.is-open .faq-body { grid-template-rows: 1fr !important; }
      .faq-body-inner { overflow: hidden !important; }
      .faq-a { font-family: 'DM Sans', sans-serif !important; font-size: 0.88rem !important; font-weight: 300 !important; line-height: 1.75 !important; color: #555555 !important; padding-bottom: 1.4rem !important; }
      .faq-a a { color: #0047E1 !important; text-decoration: underline !important; }
      @media (max-width: 900px) {
        .faq-inner { grid-template-columns: 1fr !important; gap: 2.5rem !important; }
        .faq-aside { position: static !important; }
      }
    </style>

    <div class="faq-inner">
      <div class="faq-aside">
        <div class="faq-eyebrow" data-customizer="wc_faq_eyebrow"><?php echo esc_html(cr8v_mod('wc_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
        <h2 class="faq-h2" data-customizer="wc_faq_h2"><?php echo esc_html(cr8v_mod('wc_faq_h2', 'WooCommerce Questions, Answered Honestly')); ?></h2>
        <p class="faq-sub" data-customizer="wc_faq_sub"><?php echo esc_html(cr8v_mod('wc_faq_sub', 'Clear answers to common questions about custom WooCommerce development, payment gateways, and speed optimization.')); ?></p>
        <a href="<?php echo esc_url(cr8v_mod('wc_faq_cta_url', home_url('/contact/'))); ?>" class="faq-cta-link" data-customizer="wc_faq_cta_text"><?php echo esc_html(cr8v_mod('wc_faq_cta_text', 'Talk to us')); ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12" 5 19 12 12 19"></polyline></svg></a>
      </div>

      <ul class="faq-list" id="srv-faq-list">
        <li class="faq-item is-open">
          <button class="faq-trigger" aria-expanded="true">
            <span class="faq-q" data-customizer="wc_faq1_q"><?php echo esc_html(cr8v_mod('wc_faq1_q', 'Why choose WooCommerce over Shopify?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body" style="grid-template-rows: 1fr;">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq1_a"><?php echo wp_kses_post(cr8v_mod('wc_faq1_a', 'WooCommerce provides 100% data ownership, zero transaction fees or platform tax, unlimited customization freedom, and self-hosted control without locked SaaS rules.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq2_q"><?php echo esc_html(cr8v_mod('wc_faq2_q', 'How much does a custom WooCommerce project cost?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq2_a"><?php echo wp_kses_post(cr8v_mod('wc_faq2_a', 'Fixed-scope custom WooCommerce builds start from $1,500 for a custom storefront, payment gateway configuration, catalog setup, and speed tuning.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq3_q"><?php echo esc_html(cr8v_mod('wc_faq3_q', 'Will WooCommerce slow down my WordPress site?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq3_a"><?php echo wp_kses_post(cr8v_mod('wc_faq3_a', 'Not when engineered properly. We audit plugins, implement Redis object caching, clean database bloat, and use lightweight theme bases to guarantee sub-2s mobile loads.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq4_q"><?php echo esc_html(cr8v_mod('wc_faq4_q', 'What payment gateways can you integrate?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq4_a"><?php echo wp_kses_post(cr8v_mod('wc_faq4_a', 'We integrate Stripe, Paystack, PayPal, Flutterwave, Monnify, Klarna, and custom bank transfer checkout hooks with automatic currency switching.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq5_q"><?php echo esc_html(cr8v_mod('wc_faq5_q', 'Can you migrate my products from Shopify to WooCommerce?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq5_a"><?php echo wp_kses_post(cr8v_mod('wc_faq5_a', 'Yes. We migrate products, images, categories, customer accounts, order history, and setup 301 URL redirects so your SEO rankings are preserved.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq6_q"><?php echo esc_html(cr8v_mod('wc_faq6_q', 'Will my team be able to add new products easily?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq6_a"><?php echo wp_kses_post(cr8v_mod('wc_faq6_a', 'Yes. The standard WordPress/WooCommerce admin panel makes adding products, managing stock, and viewing sales reports straightforward, and we provide video training.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq7_q"><?php echo esc_html(cr8v_mod('wc_faq7_q', 'Do you handle WooCommerce security and updates?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq7_a"><?php echo wp_kses_post(cr8v_mod('wc_faq7_a', 'Yes. We configure SSL certificates, firewall rules, 2FA logins, and offer ongoing monthly maintenance retainers to keep plugins and core files safely updated.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="wc_faq8_q"><?php echo esc_html(cr8v_mod('wc_faq8_q', 'What post-launch support is provided?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="wc_faq8_a"><?php echo wp_kses_post(cr8v_mod('wc_faq8_a', 'We include 30 days of post-launch warranty support for bug fixes and adjustments, alongside full handover documentation and staff training.')); ?></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
       SECTION 11: RELATED SERVICES (Alternatives)
       ══════════════════════════════════════════ -->
  <div class="c8isv-related-outer">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal is-muted" data-customizer="wc_rel_label"><?php echo esc_html(cr8v_mod('wc_rel_label', 'Other Ways We Build')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wc_rel_h2"><?php echo esc_html(cr8v_mod('wc_rel_h2', 'Related Services')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" data-customizer="wc_rel_desc"><?php echo esc_html(cr8v_mod('wc_rel_desc', 'WooCommerce Development is one of several services we offer. If a self-hosted WooCommerce store is not what you need, check these out.')); ?></p>
      <div class="c8isv-related-grid">
        <a href="<?php echo esc_url(cr8v_mod('wc_rel1_url', home_url('/services/shopify/'))); ?>" class="c8isv-related-card c8isv-reveal">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </div>
          <span class="c8isv-related-card-platform">02 / Shopify</span>
          <h3 class="c8isv-related-card-title" data-customizer="wc_rel1_title"><?php echo esc_html(cr8v_mod('wc_rel1_title', 'Shopify Storefronts')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="wc_rel1_desc"><?php echo esc_html(cr8v_mod('wc_rel1_desc', 'Hosted e-commerce stores on Shopify. Custom Liquid themes, sub-second mobile page loads, and seamless hosted infrastructure.')); ?></p>
          <span class="c8isv-related-card-link">Explore Shopify →</span>
        </a>
        <a href="<?php echo esc_url(cr8v_mod('wc_rel2_url', home_url('/services/web-design/'))); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <span class="c8isv-related-card-platform">01 / Web Design</span>
          <h3 class="c8isv-related-card-title" data-customizer="wc_rel2_title"><?php echo esc_html(cr8v_mod('wc_rel2_title', 'WordPress Themes')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="wc_rel2_desc"><?php echo esc_html(cr8v_mod('wc_rel2_desc', 'Custom Gutenberg block-editor themes without Elementor or Divi. Fast, maintainable, and content-editable by your team.')); ?></p>
          <span class="c8isv-related-card-link">Explore Web Design →</span>
        </a>
        <a href="<?php echo esc_url(cr8v_mod('wc_rel3_url', home_url('/services/custom-dev/'))); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <span class="c8isv-related-card-platform">03 / Custom Dev</span>
          <h3 class="c8isv-related-card-title" data-customizer="wc_rel3_title"><?php echo esc_html(cr8v_mod('wc_rel3_title', 'Custom Development')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="wc_rel3_desc"><?php echo esc_html(cr8v_mod('wc_rel3_desc', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and SQL.')); ?></p>
          <span class="c8isv-related-card-link">Explore Custom Dev →</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Interactive Estimator & FAQ Accordion Scripts -->
<script>
(function() {
  var root = document.querySelector('.c8isv-root');
  if (!root) return;

  var choices = root.querySelectorAll('.c8srv-est-choice');
  var display = root.querySelector('#est-range-display');
  var deliverables = root.querySelector('#est-deliverables-list');
  var ctaLink = root.querySelector('#est-cta-link');

  var state = {
    platformPrice: 1500,
    multiplier: 1.0,
    growthPrice: 0,
    platformVal: 'wccore',
    scaleVal: 'standard',
    growthVal: 'none'
  };

  var delivMap = {
    wccore: ['• Custom WooCommerce theme build & setup', '• Zero-bloat speed architecture & gateway wiring', '• Up to 5 editable layout pages'],
    wcfull: ['• Full WooCommerce store & multi-gateway setup', '• One-page checkout & cart upsell engineering', '• Security hardening, SSL & payment testing'],
    wcmulti: ['• Multi-currency & IP geolocation switching', '• Dokan/WCFM multi-vendor marketplace portal', '• Custom gateway SDK integration & API sync']
  };

  function updateEstimate() {
    var base = (state.platformPrice * state.multiplier) + state.growthPrice;
    var low = Math.round(base);
    var high = Math.round(base * 1.25);
    
    if (display) display.textContent = '$' + low.toLocaleString() + ' - $' + high.toLocaleString();
    if (ctaLink) ctaLink.href = '<?php echo esc_url(home_url('/contact/')); ?>?platform=woocommerce&est=' + low + '-' + high;

    if (deliverables && delivMap[state.platformVal]) {
      deliverables.innerHTML = delivMap[state.platformVal].map(function(item) {
        return '<div>' + item + '</div>';
      }).join('');
    }
  }

  choices.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var group = btn.closest('.c8srv-est-choices');
      if (!group) return;
      var groupName = group.getAttribute('data-est-group');

      group.querySelectorAll('.c8srv-est-choice').forEach(function(b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');

      if (groupName === 'platform') {
        state.platformPrice = parseFloat(btn.getAttribute('data-est-price')) || 1500;
        state.platformVal = btn.getAttribute('data-est-val');
      } else if (groupName === 'scale') {
        state.multiplier = parseFloat(btn.getAttribute('data-est-multiplier')) || 1.0;
        state.scaleVal = btn.getAttribute('data-est-val');
      } else if (groupName === 'growth') {
        state.growthPrice = parseFloat(btn.getAttribute('data-est-price')) || 0;
        state.growthVal = btn.getAttribute('data-est-val');
      }

      updateEstimate();
    });
  });

  // FAQ Accordion
  var faqTriggers = root.querySelectorAll('.faq-trigger');
  faqTriggers.forEach(function(trig) {
    trig.addEventListener('click', function() {
      var item = trig.closest('.faq-item');
      var isOpen = item.classList.contains('is-open');

      root.querySelectorAll('.faq-item').forEach(function(i) {
        i.classList.remove('is-open');
        var btn = i.querySelector('.faq-trigger');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        item.classList.add('is-open');
        trig.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();
</script>

<?php
get_footer();
