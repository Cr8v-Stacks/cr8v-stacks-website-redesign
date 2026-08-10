<?php
/**
 * Template Name: Service — Shopify Storefronts
 * Description: High-conversion Shopify Plus & custom Liquid storefront page with interactive Scope Estimator and Customizer integration.
 *
 * @package CR8V_Stacks
 */

get_header();
?>

<div class="c8isv-root" style="width: 100% !important; max-width: 100% !important; overflow-x: hidden !important;">
  <style>
    .c8isv-root { width: 100% !important; max-width: 100% !important; margin: 0 !important; padding: 0 !important; }
    .c8isv-flank-section, .c8srv-folder-section, .c8isv-approach-outer, .c8isv-fits-outer, .c8isv-hl-section, .c8isv-testi-outer, .c8srv-pricing-section, .c8isv-related-outer {
      width: 100% !important; max-width: 100% !important; margin-left: 0 !important; left: 0 !important; right: 0 !important; transform: none !important;
    }
    .c8isv-portfolio-deliverables, .c8srv-portfolio-deliverables {
      grid-column: 1 / -1 !important; margin-top: 1.25rem !important; padding-top: 1.25rem !important; border-top: 1px solid rgba(8, 8, 8, 0.08) !important;
    }
    .c8isv-portfolio-pills, .c8srv-portfolio-pills {
      display: flex !important; flex-wrap: wrap !important; gap: 0.5rem !important; align-items: center !important; margin-top: 0.4rem !important;
    }
    .c8isv-portfolio-pill, .c8srv-portfolio-pill {
      font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; text-transform: uppercase !important; letter-spacing: 0.04em !important; background: #FFFFFF !important; color: #4A4A4A !important; border: 1px solid rgba(8, 8, 8, 0.14) !important; padding: 0.35rem 0.85rem !important; border-radius: 4px !important; display: inline-flex !important; align-items: center !important; white-space: nowrap !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important; transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .c8isv-portfolio-pill:hover, .c8srv-portfolio-pill:hover {
      background: #0047E1 !important; color: #FFFFFF !important; border-color: #0047E1 !important; transform: translateY(-1px) !important; box-shadow: 0 4px 12px rgba(0, 71, 225, 0.2) !important;
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
          <div class="c8isv-breadcrumb">
            <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a><span>/</span><span class="is-current">Shopify Development</span>
          </div>
          <div class="c8isv-label is-light" data-customizer="shp_hero_eyebrow"><?php echo esc_html(cr8v_mod('shp_hero_eyebrow', 'Shopify Plus & Custom Storefront Engineering')); ?></div>
          <h1 class="c8isv-headline">
            <span data-customizer="shp_hero_h1_part1"><?php echo esc_html(cr8v_mod('shp_hero_h1_part1', 'Shopify Stores Built for ')); ?></span>
            <span class="c8isv-serif" data-customizer="shp_hero_h1_serif"><?php echo esc_html(cr8v_mod('shp_hero_h1_serif', 'High Conversion')); ?></span>
          </h1>
          <p class="c8isv-hero-intro" data-customizer="shp_hero_intro"><?php echo esc_html(cr8v_mod('shp_hero_intro', 'Purpose-built Shopify storefronts crafted for high add-to-cart conversion, friction-free mobile checkouts, and scalable hosted infrastructure.')); ?></p>
          <div class="c8isv-hero-ctas">
            <a href="<?php echo esc_url(cr8v_mod('shp_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="shp_hero_cta1_text"><?php echo esc_html(cr8v_mod('shp_hero_cta1_text', 'See What We Build →')); ?></a>
            <a href="<?php echo esc_url(cr8v_mod('shp_hero_cta2_url', 'https://cr8vstacks.com/contact/')); ?>" class="c8isv-btn-ghost" data-customizer="shp_hero_cta2_text"><?php echo esc_html(cr8v_mod('shp_hero_cta2_text', 'Get a Quote →')); ?></a>
          </div>
          <div class="c8isv-pill-row">
            <span class="c8isv-pill" data-customizer="shp_hero_pill1"><?php echo esc_html(cr8v_mod('shp_hero_pill1', 'Shopify')); ?></span>
            <span class="c8isv-pill" data-customizer="shp_hero_pill2"><?php echo esc_html(cr8v_mod('shp_hero_pill2', 'Liquid')); ?></span>
            <span class="c8isv-pill" data-customizer="shp_hero_pill3"><?php echo esc_html(cr8v_mod('shp_hero_pill3', 'CSS')); ?></span>
            <span class="c8isv-pill" data-customizer="shp_hero_pill4"><?php echo esc_html(cr8v_mod('shp_hero_pill4', 'Shopify Plus')); ?></span>
          </div>
        </div>
        
        <!-- Right Side Canvas Shatter Animation -->
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
       SECTION 2: WHY SHOPIFY (Flank Cards Stack)
       ══════════════════════════════════════════ -->
  <div class="c8isv-flank-section">
    <div class="c8isv-flank-inner">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="shp_why_label"><?php echo esc_html(cr8v_mod('shp_why_label', 'Why Shopify')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="shp_why_h2"><?php echo esc_html(cr8v_mod('shp_why_h2', 'Shopify Storefronts Built For Sales Growth & Scalability')); ?></h2>

      <div class="c8isv-flank-container" data-c8isv-flank-trigger>
        <!-- Card 1 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="0">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="shp_why_card1_step"><?php echo esc_html(cr8v_mod('shp_why_card1_step', 'Theme // Custom')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="shp_why_card1_title"><?php echo esc_html(cr8v_mod('shp_why_card1_title', 'Bespoke Liquid Storefronts')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="shp_why_card1_desc"><?php echo esc_html(cr8v_mod('shp_why_card1_desc', 'Tailored sections built for high add-to-cart conversion and brand credibility without template constraints.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="1">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="shp_why_card2_step"><?php echo esc_html(cr8v_mod('shp_why_card2_step', 'Checkout // Mobile')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="shp_why_card2_title"><?php echo esc_html(cr8v_mod('shp_why_card2_title', 'Fast Mobile Checkout')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="shp_why_card2_desc"><?php echo esc_html(cr8v_mod('shp_why_card2_desc', 'Optimized AJAX cart drawers, dynamic filters, and smooth mobile buying flows that keep visitors buying.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="2">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="shp_why_card3_step"><?php echo esc_html(cr8v_mod('shp_why_card3_step', 'Apps // Curation')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="shp_why_card3_title"><?php echo esc_html(cr8v_mod('shp_why_card3_title', 'App Stack Curation')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="shp_why_card3_desc"><?php echo esc_html(cr8v_mod('shp_why_card3_desc', 'Audited essential Shopify apps to prevent store slowdown, unnecessary app fees, and script clutter.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="c8isv-flank-card" data-c8isv-flank-card="3">
          <div class="c8isv-flank-card-quote">"</div>
          <span class="c8isv-flank-card-step" data-customizer="shp_why_card4_step"><?php echo esc_html(cr8v_mod('shp_why_card4_step', 'Global // Sales')); ?></span>
          <div class="c8isv-flank-card-divider"></div>
          <h3 class="c8isv-flank-card-title" data-customizer="shp_why_card4_title"><?php echo esc_html(cr8v_mod('shp_why_card4_title', 'Global Multi-Currency Sales')); ?></h3>
          <p class="c8isv-flank-card-desc" data-customizer="shp_why_card4_desc"><?php echo esc_html(cr8v_mod('shp_why_card4_desc', 'Shopify Markets and international gateway configuration for effortless worldwide brand expansion.')); ?></p>
          <div class="c8isv-flank-card-icon">
            <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
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
        <div class="c8isv-label c8isv-reveal is-center" data-customizer="shp_work_label"><?php echo esc_html(cr8v_mod('shp_work_label', 'Our Work')); ?></div>
        <h2 class="c8isv-section-title c8isv-reveal">
          <span data-customizer="shp_work_h2_part1"><?php echo esc_html(cr8v_mod('shp_work_h2_part1', 'Built for Real Outcomes,')); ?></span><br>
          <span class="c8isv-serif" data-customizer="shp_work_h2_serif"><?php echo esc_html(cr8v_mod('shp_work_h2_serif', 'Not Just Concepts')); ?></span>
        </h2>
      </div>
      <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
        <div class="c8isv-portfolio-img">
          <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=800&auto=format&fit=crop" alt="Victoria's Lane Shopify storefront — built by Cr8v Stacks">
        </div>
        <div class="c8isv-portfolio-info">
          <span class="c8isv-portfolio-client" data-customizer="shp_work_cs_client"><?php echo esc_html(cr8v_mod('shp_work_cs_client', 'Case Study — Victoria\'s Lane')); ?></span>
          <h3 class="c8isv-portfolio-title" data-customizer="shp_work_cs_title"><?php echo esc_html(cr8v_mod('shp_work_cs_title', 'Handbag & Purse E-Commerce, Rebuilt on Shopify')); ?></h3>
          <p class="c8isv-portfolio-desc" data-customizer="shp_work_cs_desc"><?php echo esc_html(cr8v_mod('shp_work_cs_desc', 'Victoria\'s Lane came to us running on a generic, slow theme that wasn\'t built for how people actually shop for luxury handbags online. We rebuilt the entire storefront in Shopify, hand-coded in Liquid, with a checkout designed around impulse and gift-buying behavior.')); ?></p>
          <div class="c8isv-portfolio-stats">
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="shp_work_cs_stat1_val"><?php echo esc_html(cr8v_mod('shp_work_cs_stat1_val', '1.4s')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="shp_work_cs_stat1_lbl"><?php echo esc_html(cr8v_mod('shp_work_cs_stat1_lbl', 'Mobile Load Time')); ?></span>
            </div>
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="shp_work_cs_stat2_val"><?php echo esc_html(cr8v_mod('shp_work_cs_stat2_val', '+38%')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="shp_work_cs_stat2_lbl"><?php echo esc_html(cr8v_mod('shp_work_cs_stat2_lbl', 'Add-to-Cart Rate')); ?></span>
            </div>
          </div>
          <div class="c8isv-portfolio-deliverables">
            <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
            <div class="c8isv-portfolio-pills">
              <span class="c8isv-portfolio-pill" data-customizer="shp_work_cs_pill1"><?php echo esc_html(cr8v_mod('shp_work_cs_pill1', 'Shopify Liquid Theme')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="shp_work_cs_pill2"><?php echo esc_html(cr8v_mod('shp_work_cs_pill2', 'Custom JSON Templates')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="shp_work_cs_pill3"><?php echo esc_html(cr8v_mod('shp_work_cs_pill3', 'Cart & Checkout Tuning')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="shp_work_cs_pill4"><?php echo esc_html(cr8v_mod('shp_work_cs_pill4', 'Sub-Second Mobile Load')); ?></span>
            </div>
          </div>
          <a href="<?php echo esc_url(cr8v_mod('shp_work_cs_btn_url', home_url('/case-studies/victorias-lane/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="shp_work_cs_btn_text"><?php echo esc_html(cr8v_mod('shp_work_cs_btn_text', 'View Case Study →')); ?></a>
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
      <div class="c8isv-label c8isv-reveal" data-customizer="shp_deck_label"><?php echo esc_html(cr8v_mod('shp_deck_label', 'What You Get')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal">
        <span data-customizer="shp_deck_h2_part1"><?php echo esc_html(cr8v_mod('shp_deck_h2_part1', 'Every layer of your store, ')); ?></span>
        <span class="c8isv-serif" data-customizer="shp_deck_h2_serif"><?php echo esc_html(cr8v_mod('shp_deck_h2_serif', 'engineered by Cr8v Stacks.')); ?></span>
      </h2>
      <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="shp_deck_desc"><?php echo esc_html(cr8v_mod('shp_deck_desc', 'From theme design to background sync — built custom, with zero shortcuts.')); ?></p>

      <div class="c8srv-folder-deck" data-c8srv-folder-deck>
        <!-- Card 1 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="shp_deck1_tab"><?php echo esc_html(cr8v_mod('shp_deck1_tab', '01 // Theme')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="shp_deck1_title"><?php echo esc_html(cr8v_mod('shp_deck1_title', 'Custom Theme Coding')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="shp_deck1_desc"><?php echo esc_html(cr8v_mod('shp_deck1_desc', 'A fully custom-designed Shopify theme built using Shopify CLI and native JSON templates. No pre-made templates, no heavy page builder plugins like PageFly, and 100% custom Liquid code.')); ?></p>
            <a href="https://cr8vstacks.com/contact/" class="c8srv-explore">Discuss storefront &rarr;</a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=800&auto=format&fit=crop" alt="Shopify custom store design">
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="shp_deck2_tab"><?php echo esc_html(cr8v_mod('shp_deck2_tab', '02 // AJAX Cart')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="shp_deck2_title"><?php echo esc_html(cr8v_mod('shp_deck2_title', 'App-Free Cart & Checkout')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="shp_deck2_desc"><?php echo esc_html(cr8v_mod('shp_deck2_desc', 'Custom slide-out AJAX cart drawers, native product bundles, and custom tier discounts coded directly to replace 10+ slow apps and eliminate recurring monthly app subscription fees.')); ?></p>
            <a href="https://cr8vstacks.com/contact/" class="c8srv-explore">Discuss cart &rarr;</a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Shopify cart and checkout integration">
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="shp_deck3_tab"><?php echo esc_html(cr8v_mod('shp_deck3_tab', '03 // Performance')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="shp_deck3_title"><?php echo esc_html(cr8v_mod('shp_deck3_title', 'Performance & SEO')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="shp_deck3_desc"><?php echo esc_html(cr8v_mod('shp_deck3_desc', 'Sub-1s page load speeds achieved natively. Structured product schema, optimized lazy-loading assets, and clean WebP asset pipelines configured directly for fast search indexing.')); ?></p>
            <a href="https://cr8vstacks.com/contact/" class="c8srv-explore">Discuss performance &rarr;</a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="Shopify speed and SEO engineering">
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="shp_deck4_tab"><?php echo esc_html(cr8v_mod('shp_deck4_tab', '04 // Scale')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="shp_deck4_title"><?php echo esc_html(cr8v_mod('shp_deck4_title', 'Plus & B2B Wholesale')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="shp_deck4_desc"><?php echo esc_html(cr8v_mod('shp_deck4_desc', 'Scaling enterprise brands with Shopify Plus customization, multi-region local currencies, wholesaling expansions, and native integrations for clean ERP/inventory syncing.')); ?></p>
            <a href="https://cr8vstacks.com/contact/" class="c8srv-explore">Discuss wholesaling &rarr;</a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop" alt="Shopify Plus Operations Scale">
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="shp_deck5_tab"><?php echo esc_html(cr8v_mod('shp_deck5_tab', '05 // Launch')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="shp_deck5_title"><?php echo esc_html(cr8v_mod('shp_deck5_title', 'Store Launch QA & Training')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="shp_deck5_desc"><?php echo esc_html(cr8v_mod('shp_deck5_desc', 'Complete payment gateway testing, domain cutover, 301 redirect mapping, and staff training on the Shopify admin dashboard.')); ?></p>
            <a href="https://cr8vstacks.com/contact/?model=project&amp;service=shopify" class="c8srv-explore">Discuss launch QA &rarr;</a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop" alt="Store Launch QA and Training">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 5: HOW WE APPROACH IT (Process)
       ══════════════════════════════════════════ -->
  <div class="c8isv-approach-outer">
    <div class="c8isv-wrap" style="padding-bottom:0">
      <div class="c8isv-label c8isv-reveal" data-customizer="shp_proc_label"><?php echo esc_html(cr8v_mod('shp_proc_label', 'How We Approach It')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="shp_proc_h2"><?php echo esc_html(cr8v_mod('shp_proc_h2', 'Four stages. No overlap, no shortcuts.')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" data-customizer="shp_proc_desc"><?php echo esc_html(cr8v_mod('shp_proc_desc', 'A battle-tested 4-stage Liquid storefront development process crafted for brand storytelling, app curation, and mobile sales velocity.')); ?></p>
    </div>
    
    <div class="c8isv-approach-deck" data-c8isv-approach-deck>
      <!-- Stage 1 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="shp_proc1_num"><?php echo esc_html(cr8v_mod('shp_proc1_num', '01')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="shp_proc1_name"><?php echo esc_html(cr8v_mod('shp_proc1_name', 'Discover')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="shp_proc1_tags"><?php echo esc_html(cr8v_mod('shp_proc1_tags', 'Audit · Apps · Catalog')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="shp_proc1_desc"><?php echo esc_html(cr8v_mod('shp_proc1_desc', 'Catalog mapping, Shopify app audits, and performance baselines. We identify which slow apps can be hardcoded and what features need custom Liquid layout setup.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop" alt="Discovery audit stage">
          </div>
        </div>
      </div>

      <!-- Stage 2 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="shp_proc2_num"><?php echo esc_html(cr8v_mod('shp_proc2_num', '02')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="shp_proc2_name"><?php echo esc_html(cr8v_mod('shp_proc2_name', 'Design')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="shp_proc2_tags"><?php echo esc_html(cr8v_mod('shp_proc2_tags', 'UX · Layout · Branding')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="shp_proc2_desc"><?php echo esc_html(cr8v_mod('shp_proc2_desc', 'AJAX cart drawer flows, responsive product page UX, custom checkout branding, and navigation hierarchies. Every pixel is custom-designed before coding begins.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop" alt="Store UX design stage">
          </div>
        </div>
      </div>

      <!-- Stage 3 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="shp_proc3_num"><?php echo esc_html(cr8v_mod('shp_proc3_num', '03')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="shp_proc3_name"><?php echo esc_html(cr8v_mod('shp_proc3_name', 'Build')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="shp_proc3_tags"><?php echo esc_html(cr8v_mod('shp_proc3_tags', 'Liquid · CLI · API')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="shp_proc3_desc"><?php echo esc_html(cr8v_mod('shp_proc3_desc', 'Custom theme development using Shopify CLI and native JSON templates. AJAX scripts for cart drawers and native Shopify API connections are coded without slow plug-and-play apps.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop" alt="Custom Liquid theme coding stage">
          </div>
        </div>
      </div>

      <!-- Stage 4 -->
      <div class="c8isv-approach-wrap">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-col-num" data-customizer="shp_proc4_num"><?php echo esc_html(cr8v_mod('shp_proc4_num', '04')); ?></div>
          <div class="c8isv-approach-col-name" data-customizer="shp_proc4_name"><?php echo esc_html(cr8v_mod('shp_proc4_name', 'Launch')); ?></div>
          <div class="c8isv-approach-col-tags" data-customizer="shp_proc4_tags"><?php echo esc_html(cr8v_mod('shp_proc4_tags', 'Speed · SEO · Handover')); ?></div>
          <div class="c8isv-approach-col-desc" data-customizer="shp_proc4_desc"><?php echo esc_html(cr8v_mod('shp_proc4_desc', 'Speed optimization, 301 URL redirect maps, structured SEO metadata schema setup, and standard admin training. We launch your new custom Shopify store with zero downtime.')); ?></div>
          <div class="c8isv-approach-col-img">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" alt="Shopify storefront speed and launch stage">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 5.5: SHOPIFY BUILD STACK DECK
       ══════════════════════════════════════════ -->
  <div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
    <div class="c8isv-wrap">
      <div class="c8isv-label c8isv-reveal" data-customizer="shp_plat_label"><?php echo esc_html(cr8v_mod('shp_plat_label', 'Shopify Stack Options')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;">
        <span data-customizer="shp_plat_h2_part1"><?php echo esc_html(cr8v_mod('shp_plat_h2_part1', 'Choosing The Right ')); ?></span>
        <span class="c8isv-serif" data-customizer="shp_plat_h2_serif"><?php echo esc_html(cr8v_mod('shp_plat_h2_serif', 'Shopify Architecture')); ?></span>
      </h2>
      <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;" data-customizer="shp_plat_desc"><?php echo esc_html(cr8v_mod('shp_plat_desc', 'Whether you need rapid theme setup, custom Liquid layouts, enterprise Plus features, or headless React — we engineer the right setup for your brand:')); ?></p>
      
      <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
        <!-- Option 1 -->
        <div class="c8isv-platform-card c8isv-reveal">
          <span class="c8isv-platform-badge" data-customizer="shp_plat1_badge"><?php echo esc_html(cr8v_mod('shp_plat1_badge', 'Liquid // Storefront')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="shp_plat1_title"><?php echo esc_html(cr8v_mod('shp_plat1_title', 'Liquid Storefront Architecture')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="shp_plat1_desc"><?php echo esc_html(cr8v_mod('shp_plat1_desc', 'Custom Liquid section coding on Dawn starter bases or aggressively customized premium Shopify themes — leveraging built-in features to reduce development costs while maintaining fast mobile speeds.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </div>
        </div>

        <!-- Option 2 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
          <span class="c8isv-platform-badge" data-customizer="shp_plat2_badge"><?php echo esc_html(cr8v_mod('shp_plat2_badge', 'Apps // Optimization')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="shp_plat2_title"><?php echo esc_html(cr8v_mod('shp_plat2_title', 'Shopify App & Cart Optimization')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="shp_plat2_desc"><?php echo esc_html(cr8v_mod('shp_plat2_desc', 'Custom slide-out AJAX cart drawers and app curation to eliminate unnecessary monthly subscription costs.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
        </div>

        <!-- Option 3 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
          <span class="c8isv-platform-badge" data-customizer="shp_plat3_badge"><?php echo esc_html(cr8v_mod('shp_plat3_badge', 'Plus // B2B')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="shp_plat3_title"><?php echo esc_html(cr8v_mod('shp_plat3_title', 'Shopify Plus B2B Setup')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="shp_plat3_desc"><?php echo esc_html(cr8v_mod('shp_plat3_desc', 'Enterprise wholesale pricing, customized checkout extensions, and multi-region expansion.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
        </div>

        <!-- Option 4 -->
        <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
          <span class="c8isv-platform-badge" data-customizer="shp_plat4_badge"><?php echo esc_html(cr8v_mod('shp_plat4_badge', 'API // Headless')); ?></span>
          <div class="c8isv-platform-divider"></div>
          <h3 class="c8isv-platform-title" data-customizer="shp_plat4_title"><?php echo esc_html(cr8v_mod('shp_plat4_title', 'Headless Hydrogen Storefront')); ?></h3>
          <p class="c8isv-platform-desc" data-customizer="shp_plat4_desc"><?php echo esc_html(cr8v_mod('shp_plat4_desc', 'Ultra-fast React frontend powered by Shopify\'s Storefront API for complex WebGL/custom UX.')); ?></p>
          <div class="c8isv-platform-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
          </div>
        </div>
      </div>

      <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;" data-customizer="shp_plat_footer_note">
        <?php echo esc_html(cr8v_mod('shp_plat_footer_note', 'Not sure which one? Tell us what you\'re selling and we\'ll recommend the right Shopify architecture as part of the initial scoping call.')); ?>
      </p>

      <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
        <a href="<?php echo esc_url(cr8v_mod('shp_plat_cta_url', 'https://cr8vstacks.com/contact/?model=project&service=shopify')); ?>" class="c8isv-btn-primary" data-customizer="shp_plat_cta_text"><?php echo esc_html(cr8v_mod('shp_plat_cta_text', 'Start a Shopify Scoping Call →')); ?></a>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 6: FULL CATALOG HOVERLIST
       ══════════════════════════════════════════ -->
  <div class="c8isv-hl-section">
    <div class="c8isv-wrap" style="padding-bottom:0">
      <div class="c8isv-label c8isv-reveal" data-customizer="shp_cat_label"><?php echo esc_html(cr8v_mod('shp_cat_label', 'Project Catalog')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="shp_cat_h2"><?php echo esc_html(cr8v_mod('shp_cat_h2', 'Every Kind of Shopify Store We Engineer')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="shp_cat_desc"><?php echo esc_html(cr8v_mod('shp_cat_desc', 'From DTC beauty brands to omnichannel POS retail hubs — hover to inspect the project stack.')); ?></p>
    </div>
    <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
      <div class="c8isv-hoverlist" data-c8isv-hoverlist>
        <!-- Item 1 -->
        <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Shopify" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" data-tech-2="JavaScript" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">01</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="shp_cat1_title"><?php echo esc_html(cr8v_mod('shp_cat1_title', 'DTC Beauty, Cosmetics & Skincare Stores')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="shp_cat1_tagline"><?php echo esc_html(cr8v_mod('shp_cat1_tagline', 'Shade finder quizzes, bundle builders, high-converting product detail pages, and subscription replenishment.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech">Beauty &amp; Skincare</span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Shopify" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" data-tech-2="HTML5" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">02</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="shp_cat2_title"><?php echo esc_html(cr8v_mod('shp_cat2_title', 'High-Volume Consumer Electronics & Gadgets')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="shp_cat2_tagline"><?php echo esc_html(cr8v_mod('shp_cat2_tagline', '3D product rotators, tech spec comparison grids, warranty add-ons, and multi-warehouse stock sync.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech">Electronics</span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="Shopify" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" data-tech-2="Stripe" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/stripe.svg">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">03</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="shp_cat3_title"><?php echo esc_html(cr8v_mod('shp_cat3_title', 'Health, Wellness & Supplement Brands')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="shp_cat3_tagline"><?php echo esc_html(cr8v_mod('shp_cat3_tagline', 'Nutritional ingredient breakdown popups, recurring subscription delivery, and bulk buy discount tiers.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech">Supplements</span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="Shopify" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" data-tech-2="CSS3" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/css3.svg">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">04</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="shp_cat4_title"><?php echo esc_html(cr8v_mod('shp_cat4_title', 'Food, Beverage & Gourmet Subscription Stores')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="shp_cat4_tagline"><?php echo esc_html(cr8v_mod('shp_cat4_tagline', 'Perishable shipping date selectors, recurring box builders, and localized zip-code delivery routing.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech">Food &amp; Beverage</span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Shopify" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" data-tech-2="WordPress" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg">
          <div class="c8isv-hoverlist-left">
            <span class="c8isv-hoverlist-num">05</span>
            <h3 class="c8isv-hoverlist-title" data-customizer="shp_cat5_title"><?php echo esc_html(cr8v_mod('shp_cat5_title', 'WooCommerce to Shopify Store Migrations')); ?></h3>
            <span class="c8isv-hoverlist-tagline" data-customizer="shp_cat5_tagline"><?php echo esc_html(cr8v_mod('shp_cat5_tagline', 'Full store migrations transferring products, order histories, customer accounts, and 301 SEO redirects seamlessly.')); ?></span>
          </div>
          <div class="c8isv-hoverlist-right">
            <span class="c8isv-hoverlist-tech">Migrations</span>
            <span class="c8isv-hoverlist-arrow">→</span>
          </div>
        </div>
      </div>
      <!-- 2-Card Fan Stack Preview -->
      <div class="c8isv-hoverlist-preview" data-c8isv-preview>
        <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/shopify.svg" alt="Shopify"></div>
        <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg" alt="JavaScript"></div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 8: CLIENT FEEDBACK (Testimonials)
       ══════════════════════════════════════════ -->
  <div class="c8isv-testi-outer">
    <div class="c8isv-testi-inner">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="shp_testi_label"><?php echo esc_html(cr8v_mod('shp_testi_label', 'Client Feedback')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal">
        <span data-customizer="shp_testi_h2_part1"><?php echo esc_html(cr8v_mod('shp_testi_h2_part1', 'What clients say after ')); ?></span>
        <span class="c8isv-serif" data-customizer="shp_testi_h2_serif"><?php echo esc_html(cr8v_mod('shp_testi_h2_serif', 'launch')); ?></span>
      </h2>
      <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
        <!-- Left Card -->
        <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
          <div class="c8isv-testi-quote">"</div>
          <div class="c8isv-testi-divider"></div>
          <p class="c8isv-testi-text" data-customizer="shp_testi1_text"><?php echo esc_html(cr8v_mod('shp_testi1_text', 'Our old Shopify theme took nearly 20 seconds to load on mobile phones due to unoptimized app scripts. Rebuilding in custom Liquid dropped mobile load times to 1.4s and boosted our add-to-cart rate by 38%.')); ?></p>
          <div class="c8isv-testi-author" data-customizer="shp_testi1_author"><?php echo esc_html(cr8v_mod('shp_testi1_author', 'Claire Dupont — E-Commerce Brand Director')); ?></div>
        </div>
        <!-- Center Card -->
        <div class="c8isv-testi-card is-center">
          <div class="c8isv-testi-quote">"</div>
          <div class="c8isv-testi-divider"></div>
          <p class="c8isv-testi-text" data-customizer="shp_testi2_text"><?php echo esc_html(cr8v_mod('shp_testi2_text', 'The custom slide-out AJAX cart drawer and bundle builder replaced 8 monthly subscription apps. The site feels instantaneous to shop on.')); ?></p>
          <div class="c8isv-testi-author" data-customizer="shp_testi2_author"><?php echo esc_html(cr8v_mod('shp_testi2_author', 'Tunde Harrison — Growth & CRO Lead')); ?></div>
        </div>
        <!-- Right Card -->
        <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
          <div class="c8isv-testi-quote">"</div>
          <div class="c8isv-testi-divider"></div>
          <p class="c8isv-testi-text" data-customizer="shp_testi3_text"><?php echo esc_html(cr8v_mod('shp_testi3_text', 'Expanding into wholesale B2B with Shopify Plus custom scripts allowed us to manage bulk tiered pricing effortlessly alongside our DTC store.')); ?></p>
          <div class="c8isv-testi-author" data-customizer="shp_testi3_author"><?php echo esc_html(cr8v_mod('shp_testi3_author', 'Elena Rostova — Head of Global Retail Operations')); ?></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       SECTION 9: PRICING MODELS & ESTIMATOR
       ══════════════════════════════════════════ -->
  <div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
    <div class="c8isv-wrap" style="text-align: left !important;">
      <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="shp_pricing_label"><?php echo esc_html(cr8v_mod('shp_pricing_label', 'PRICING MODELS')); ?></div>
      <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;">
        <span data-customizer="shp_pricing_h2_part1"><?php echo esc_html(cr8v_mod('shp_pricing_h2_part1', 'HOW WE ')); ?></span>
        <span class="c8isv-serif" data-customizer="shp_pricing_h2_serif"><?php echo esc_html(cr8v_mod('shp_pricing_h2_serif', 'WORK TOGETHER')); ?></span>
      </h2>
      <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="shp_pricing_desc"><?php echo esc_html(cr8v_mod('shp_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

      <div class="c8srv-pricing-split">
        <!-- Retainer Card -->
        <div class="c8srv-price-box c8srv-reveal">
          <div class="c8srv-price-header">
            <span class="c8srv-price-type" data-customizer="shp_plan1_type"><?php echo esc_html(cr8v_mod('shp_plan1_type', 'Ongoing Support')); ?></span>
            <h3 class="c8srv-price-title" data-customizer="shp_plan1_title"><?php echo esc_html(cr8v_mod('shp_plan1_title', 'Growth Retainer')); ?></h3>
            <div class="c8srv-price-amount">
              <span class="c8srv-price-num" data-customizer="shp_plan1_price"><?php echo esc_html(cr8v_mod('shp_plan1_price', '$950')); ?></span>
              <span class="c8srv-price-period" data-customizer="shp_plan1_period"><?php echo esc_html(cr8v_mod('shp_plan1_period', '/mo')); ?></span>
            </div>
          </div>
          <p class="c8srv-price-desc" data-customizer="shp_plan1_desc"><?php echo esc_html(cr8v_mod('shp_plan1_desc', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.')); ?></p>
          <div class="c8srv-price-features">
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Dedicated monthly support hours block</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Monthly speed audits &amp; code optimizations</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Design tweaks, copy updates &amp; SEO execution</span>
            </div>
          </div>
          <a href="https://cr8vstacks.com/contact/?model=retainer" class="c8srv-price-btn is-light">Secure Retainer Slot</a>
        </div>

        <!-- Fixed Project Card -->
        <div class="c8srv-price-box is-highlight c8srv-reveal">
          <div class="c8srv-price-header">
            <span class="c8srv-price-type" data-customizer="shp_plan2_type"><?php echo esc_html(cr8v_mod('shp_plan2_type', 'Fixed Scope')); ?></span>
            <h3 class="c8srv-price-title" data-customizer="shp_plan2_title"><?php echo esc_html(cr8v_mod('shp_plan2_title', 'Fixed Projects')); ?></h3>
            <div class="c8srv-price-amount">
              <span class="c8srv-price-num" data-customizer="shp_plan2_price"><?php echo esc_html(cr8v_mod('shp_plan2_price', 'From $1,800')); ?></span>
              <span class="c8srv-price-period" data-customizer="shp_plan2_period"><?php echo esc_html(cr8v_mod('shp_plan2_period', ' entry')); ?></span>
            </div>
          </div>
          <p class="c8srv-price-desc" data-customizer="shp_plan2_desc"><?php echo esc_html(cr8v_mod('shp_plan2_desc', 'Custom Liquid Shopify storefront engineering focused on conversion UX, instant cart drawers, and zero app bloat.')); ?></p>
          <div class="c8srv-price-features">
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Custom Liquid 2.0 storefront &amp; OS 2.0 section architecture</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>Slide-out cart drawer, dynamic upsells &amp; checkout UX</span>
            </div>
            <div class="c8srv-price-feature">
              <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
              <span>App-free speed performance tuning &amp; Liquid optimization</span>
            </div>
          </div>
          <a href="https://cr8vstacks.com/contact/?model=project" class="c8srv-price-btn is-primary">Start A Project</a>
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
              <span class="c8srv-est-group-title">1. Core Shopify Package</span>
              <div class="c8srv-est-choices" data-est-group="platform">
                <button type="button" class="c8srv-est-choice is-active" data-est-val="shopifycore" data-est-price="1800">Custom Liquid 2.0 Theme ($1,800)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="shopifyfull" data-est-price="2520">Full Shopify Store ($2,520)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="shopifyplus" data-est-price="3600">Shopify Plus Enterprise ($3,600)</button>
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
              <span class="c8srv-est-group-title">3. Conversion Add-Ons</span>
              <div class="c8srv-est-choices" data-est-group="growth">
                <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
                <button type="button" class="c8srv-est-choice" data-est-val="cartdrawer" data-est-price="500">Slide-Out Cart &amp; Upsells (+ $500)</button>
                <button type="button" class="c8srv-est-choice" data-est-val="klaviyo" data-est-price="600">Klaviyo E-Commerce Setup (+ $600)</button>
              </div>
            </div>
          </div>

          <div class="c8srv-est-result">
            <span class="c8srv-est-range-label">Estimated Starting Investment</span>
            <div class="c8srv-est-range" id="est-range-display">$1,800 - $2,200</div>
            
            <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
            <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Custom theme build &amp; setup</div><div>• Zero-bloat optimized speed architecture</div><div>• Up to 5 editable layout pages</div></div>

            <a href="https://cr8vstacks.com/contact/?platform=shopify&amp;est=1800-2200" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
            <a href="https://cr8vstacks.com/toolkits/website-cost-calculator/" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator &rarr;</a>
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
        <div class="faq-eyebrow" data-customizer="shp_faq_eyebrow"><?php echo esc_html(cr8v_mod('shp_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
        <h2 class="faq-h2" data-customizer="shp_faq_h2"><?php echo esc_html(cr8v_mod('shp_faq_h2', 'Shopify Questions, Answered Honestly')); ?></h2>
        <p class="faq-sub" data-customizer="shp_faq_sub"><?php echo esc_html(cr8v_mod('shp_faq_sub', 'Clear answers to common questions about our custom Liquid theme development, Shopify app auditing, and checkout optimization.')); ?></p>
        <a href="https://cr8vstacks.com/contact/" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>

      <ul class="faq-list" id="srv-faq-list">
        <li class="faq-item is-open">
          <button class="faq-trigger" aria-expanded="true">
            <span class="faq-q">Why choose Shopify over WooCommerce?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body" style="grid-template-rows: 1fr;">
            <div class="faq-body-inner">
              <p class="faq-a">Shopify provides fully hosted server infrastructure, zero server maintenance overhead, built-in global PCI security compliance, and an effortless app ecosystem for rapid scaling without managing databases or hosting servers.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">How much does a custom Shopify theme cost?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">Our fixed-scope custom Shopify builds start from $1,800 for a custom Liquid theme setup, custom AJAX cart drawers, and connecting payment gateways. The price scales with catalog complexity, B2B wholesale needs, or custom app integrations. We scope every project individually and give you a firm number within 24 hours.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">Why hire an agency like Cr8v Stacks instead of a solo freelancer?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">Solo freelancers often handle design, Liquid code, and app setups alone, leading to single-point delays. Cr8v Stacks provides a dedicated team — combining e-commerce UI/UX designers, senior Liquid developers, conversion specialists, and SEO leads — backed by milestone SLAs.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">Do you handle multi-currency, geolocation redirects, and migrations from WooCommerce?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">Yes. We configure Shopify Markets for multi-currency pricing, automatic IP geolocation redirects, and execute full data migrations from WooCommerce, Magento, or WordPress — transferring products, orders, customers, and 301 SEO redirects seamlessly.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">How long does a custom Shopify store project take?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">A standard custom Liquid storefront build takes 3 to 5 weeks from initial design wireframes to live store launch. Complex Shopify Plus B2B implementations or custom app integrations take 5 to 8 weeks.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">Will my team be able to edit theme sections without needing a page builder like PageFly or Shogun?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">Yes. We build native Shopify OS 2.0 JSON templates and customizable sections so your team can easily drag, drop, and edit page content directly within the native Shopify Theme Editor without needing heavy third-party page builder plugins like PageFly or Shogun.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">Will my store load fast if I use Shopify apps?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">Every app you add to Shopify injects external scripts that can slow down your site. Our approach is to hardcode features (like cart drawers, sticky bars, and bundle offers) directly in Liquid. This keeps your theme lean and guarantees fast mobile load times.</p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q">What support do I get after my Shopify store goes live?</span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a">We include 30 days of post-launch development support to cover any adjustments or layout tweaks. We also run a full handover training session with your team. For ongoing help, our Growth Retainer at $950/month provides dedicated hours for custom Liquid edits, app integrations, and regular audits.</p>
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
      <div class="c8isv-label c8isv-reveal is-muted" data-customizer="shp_rel_label"><?php echo esc_html(cr8v_mod('shp_rel_label', 'Other Ways We Build')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal" data-customizer="shp_rel_h2"><?php echo esc_html(cr8v_mod('shp_rel_h2', 'Related Services')); ?></h2>
      <p class="c8isv-lead c8isv-reveal" data-customizer="shp_rel_desc"><?php echo esc_html(cr8v_mod('shp_rel_desc', 'Shopify Development is one of several services we offer. If a custom Liquid Shopify theme is not what you need, check these out.')); ?></p>
      <div class="c8isv-related-grid">
        <a href="<?php echo esc_url(home_url('/services/woocommerce/')); ?>" class="c8isv-related-card c8isv-reveal">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
          </div>
          <span class="c8isv-related-card-platform">02 / WooCommerce</span>
          <h3 class="c8isv-related-card-title" data-customizer="shp_rel1_title"><?php echo esc_html(cr8v_mod('shp_rel1_title', 'WooCommerce Custom Stores')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="shp_rel1_desc"><?php echo esc_html(cr8v_mod('shp_rel1_desc', 'Self-hosted WordPress e-commerce. Custom PHP themes, zero plugin overhead, and payment gateway wiring. Perfect for brands that want full database ownership with no platform licensing fees.')); ?></p>
          <span class="c8isv-related-card-link">Explore WooCommerce →</span>
        </a>
        <a href="<?php echo esc_url(home_url('/services/web-design/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
          </div>
          <span class="c8isv-related-card-platform">01 / Web Design</span>
          <h3 class="c8isv-related-card-title" data-customizer="shp_rel2_title"><?php echo esc_html(cr8v_mod('shp_rel2_title', 'WordPress Themes')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="shp_rel2_desc"><?php echo esc_html(cr8v_mod('shp_rel2_desc', 'Custom Gutenberg block-editor themes without Elementor or Divi. Fast, maintainable, and content-editable by your team — for content-led businesses that need a serious CMS.')); ?></p>
          <span class="c8isv-related-card-link">Explore Web Design →</span>
        </a>
        <a href="<?php echo esc_url(home_url('/services/custom-dev/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <span class="c8isv-related-card-platform">03 / Custom Dev</span>
          <h3 class="c8isv-related-card-title" data-customizer="shp_rel3_title"><?php echo esc_html(cr8v_mod('shp_rel3_title', 'Custom Development')); ?></h3>
          <p class="c8isv-related-card-desc" data-customizer="shp_rel3_desc"><?php echo esc_html(cr8v_mod('shp_rel3_desc', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.')); ?></p>
          <span class="c8isv-related-card-link">Explore Custom Dev →</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Interactive Estimator & FAQ Accordion Scripts -->
<script>
(function() {
  // Scope Estimator Logic
  var root = document.querySelector('.c8isv-root');
  if (!root) return;

  var choices = root.querySelectorAll('.c8srv-est-choice');
  var display = root.querySelector('#est-range-display');
  var deliverables = root.querySelector('#est-deliverables-list');
  var ctaLink = root.querySelector('#est-cta-link');

  var state = {
    platformPrice: 1800,
    multiplier: 1.0,
    growthPrice: 0,
    platformVal: 'shopifycore',
    scaleVal: 'standard',
    growthVal: 'none'
  };

  var delivMap = {
    shopifycore: ['• Custom Liquid 2.0 theme build & setup', '• Zero-bloat optimized speed architecture', '• Up to 5 editable layout pages'],
    shopifyfull: ['• Full Shopify store development & catalog import', '• Slide-out AJAX cart drawer & upsell features', '• Payment gateway, domain cutover & launch QA'],
    shopifyplus: ['• Shopify Plus enterprise architecture & scripts', '• Multi-currency & B2B wholesale pricing portal', '• Custom app integrations & ERP inventory syncing']
  };

  function updateEstimate() {
    var base = (state.platformPrice * state.multiplier) + state.growthPrice;
    var low = Math.round(base);
    var high = Math.round(base * 1.22);
    
    if (display) display.textContent = '$' + low.toLocaleString() + ' - $' + high.toLocaleString();
    if (ctaLink) ctaLink.href = 'https://cr8vstacks.com/contact/?platform=shopify&est=' + low + '-' + high;

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
      group.querySelectorAll('.c8srv-est-choice').forEach(function(b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');

      var gName = group.getAttribute('data-est-group');
      if (gName === 'platform') {
        state.platformPrice = parseFloat(btn.getAttribute('data-est-price')) || 1800;
        state.platformVal = btn.getAttribute('data-est-val');
      } else if (gName === 'scale') {
        state.multiplier = parseFloat(btn.getAttribute('data-est-multiplier')) || 1.0;
        state.scaleVal = btn.getAttribute('data-est-val');
      } else if (gName === 'growth') {
        state.growthPrice = parseFloat(btn.getAttribute('data-est-price')) || 0;
        state.growthVal = btn.getAttribute('data-est-val');
      }
      updateEstimate();
    });
  });

  // FAQ Accordion Logic
  var faqItems = root.querySelectorAll('.faq-item');
  faqItems.forEach(function(item) {
    var trigger = item.querySelector('.faq-trigger');
    if (!trigger) return;
    trigger.addEventListener('click', function() {
      var isOpen = item.classList.contains('is-open');
      faqItems.forEach(function(i) {
        i.classList.remove('is-open');
        var tr = i.querySelector('.faq-trigger');
        if (tr) tr.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();
</script>

<?php
get_footer();
