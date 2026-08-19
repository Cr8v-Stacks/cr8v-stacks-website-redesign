<?php
/**
 * CR8V Stacks — page-service-web-design.php
 * Template Name: Service — Web Design & UX
 */
defined('ABSPATH') || exit;

get_header();
?>

<main id="cr8v-main">
<div class="c8isv-root c8srv-root" style="width: 100% !important; max-width: 100% !important; overflow: visible !important;">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');
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
      font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important;
      text-transform: uppercase !important; letter-spacing: 0.04em !important; background: #FFFFFF !important;
      color: #4A4A4A !important; border: 1px solid rgba(8, 8, 8, 0.14) !important; padding: 0.35rem 0.85rem !important;
      border-radius: 4px !important; display: inline-flex !important; align-items: center !important;
      white-space: nowrap !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .c8isv-portfolio-pill:hover, .c8srv-portfolio-pill:hover {
      background: #0047E1 !important; color: #FFFFFF !important; border-color: #0047E1 !important;
      transform: translateY(-1px) !important; box-shadow: 0 4px 12px rgba(0, 71, 225, 0.2) !important;
    }
    /* Base resets & bounds safety */
    .c8isv-root, .c8isv-root * { box-sizing: border-box !important; }
    .c8isv-root { width: 100% !important; max-width: 100% !important; overflow: visible !important; background: #FFFFFF !important; color: #080808 !important; font-family: 'DM Sans', sans-serif !important; }
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>">SERVICES</a> <span>/</span> <span class="is-current">WEB DESIGN &amp; UX</span></div>
        <div class="c8isv-label is-light" data-customizer="swd_hero_eyebrow"><?php echo esc_html(cr8v_mod('swd_hero_eyebrow', 'Strategic Interface & User Experience Engineering')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="swd_hero_h1_part1"><?php echo esc_html(cr8v_mod('swd_hero_h1_part1', 'Conversion-Driven ')); ?></span><span class="c8isv-serif" data-customizer="swd_hero_h1_serif"><?php echo esc_html(cr8v_mod('swd_hero_h1_serif', 'Web Design & UX')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="swd_hero_intro"><?php echo wp_kses_post(cr8v_mod('swd_hero_intro', 'Bespoke website design and development engineered for B2B, SaaS, and e-commerce brands. From initial visual architecture to custom WordPress, Shopify, and WooCommerce builds, we engineer fast, search-optimized web platforms built for long-term growth.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('swd_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="swd_hero_cta1_text"><?php echo esc_html(cr8v_mod('swd_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(cr8v_mod('swd_hero_cta2_url', 'https://cr8vstacks.com/contact/')); ?>" class="c8isv-btn-ghost" data-customizer="swd_hero_cta2_text"><?php echo esc_html(cr8v_mod('swd_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="swd_hero_pill1"><?php echo esc_html(cr8v_mod('swd_hero_pill1', 'WordPress')); ?></span>
          <span class="c8isv-pill" data-customizer="swd_hero_pill2"><?php echo esc_html(cr8v_mod('swd_hero_pill2', 'Elementor')); ?></span>
          <span class="c8isv-pill" data-customizer="swd_hero_pill3"><?php echo esc_html(cr8v_mod('swd_hero_pill3', 'Figma')); ?></span>
          <span class="c8isv-pill" data-customizer="swd_hero_pill4"><?php echo esc_html(cr8v_mod('swd_hero_pill4', 'SEO')); ?></span>
        </div>
      </div>
      
      <!-- Right Side Hero Visual: Transparent Animated Logo Video -->
      <div class="c8isv-anim-container" id="c8isv-anim-wrapper" style="display: flex; align-items: center; justify-content: center; background: transparent; border: none; box-shadow: none;">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback style="width: 100%; max-width: 440px; height: auto; display: block; object-fit: contain; background: transparent;" poster="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2_poster.webp'); ?>">
          <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2.webm'); ?>" type="video/webm">
        </video>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 2: WHY CUSTOM WEB DESIGN (Flank Cards Stack)
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section" style="width: 100% !important; max-width: 100% !important; margin-left: 0 !important; transform: none !important;">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="swd_why_label"><?php echo esc_html(cr8v_mod('swd_why_label', 'Why Custom Web Design')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="swd_why_h2"><?php echo esc_html(cr8v_mod('swd_why_h2', 'Websites Designed For Conversion & Brand Authority')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="swd_why_card1_step"><?php echo esc_html(cr8v_mod('swd_why_card1_step', 'Strategy // First')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="swd_why_card1_title"><?php echo esc_html(cr8v_mod('swd_why_card1_title', 'Positioning-Led Interface Design')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="swd_why_card1_desc"><?php echo wp_kses_post(cr8v_mod('swd_why_card1_desc', 'Every layout is engineered around your market positioning, brand identity, and conversion goals before writing a single line of code.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="swd_why_card2_step"><?php echo esc_html(cr8v_mod('swd_why_card2_step', 'UX // Optimization')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="swd_why_card2_title"><?php echo esc_html(cr8v_mod('swd_why_card2_title', 'Frictionless User Journeys')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="swd_why_card2_desc"><?php echo wp_kses_post(cr8v_mod('swd_why_card2_desc', 'Intuitive navigation, responsive viewports, and clear content hierarchies engineered across desktop and mobile devices.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="swd_why_card3_step"><?php echo esc_html(cr8v_mod('swd_why_card3_step', 'System // Scalability')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="swd_why_card3_title"><?php echo esc_html(cr8v_mod('swd_why_card3_title', 'Multi-Platform Architecture')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="swd_why_card3_desc"><?php echo wp_kses_post(cr8v_mod('swd_why_card3_desc', 'Built seamlessly across WordPress, Elementor, Shopify, WooCommerce, or custom PHP/React frameworks to match your tech stack.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="swd_why_card4_step"><?php echo esc_html(cr8v_mod('swd_why_card4_step', 'SEO // Native')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="swd_why_card4_title"><?php echo esc_html(cr8v_mod('swd_why_card4_title', 'Built-In Technical SEO & Speed')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="swd_why_card4_desc"><?php echo wp_kses_post(cr8v_mod('swd_why_card4_desc', 'Clean semantic HTML markup, schema structures, and GTmetrix speed tuning folded directly into the design process.')); ?></p>
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
        <div class="c8isv-label c8isv-reveal is-center" data-customizer="swd_work_label"><?php echo esc_html(cr8v_mod('swd_work_label', 'Our Work')); ?></div>
        <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="swd_work_h2_part1"><?php echo esc_html(cr8v_mod('swd_work_h2_part1', 'Built for Real Outcomes,')); ?></span><br><span class="c8isv-serif" data-customizer="swd_work_h2_serif"><?php echo esc_html(cr8v_mod('swd_work_h2_serif', 'Not Just Concepts')); ?></span></h2>
      </div>
      <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
        <div class="c8isv-portfolio-img" data-customizer="swd_work_cs_img">
          <img src="<?php echo esc_url(cr8v_mod('swd_work_cs_img', 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop')); ?>" alt="The Duch Apartments — built by Cr8v Stacks">
        </div>
        <div class="c8isv-portfolio-info">
          <span class="c8isv-portfolio-client" data-customizer="swd_work_cs_client"><?php echo esc_html(cr8v_mod('swd_work_cs_client', 'Case Study — The Duch Apartments')); ?></span>
          <h3 class="c8isv-portfolio-title" data-customizer="swd_work_cs_title"><?php echo esc_html(cr8v_mod('swd_work_cs_title', 'Website Design With SEO Built In From Day One')); ?></h3>
          <p class="c8isv-portfolio-desc" data-customizer="swd_work_cs_desc"><?php echo wp_kses_post(cr8v_mod('swd_work_cs_desc', 'A full website design for The Duch Apartments, a Nigeria-based service apartment company — with SEO folded into the build from the start rather than added afterward.')); ?></p>
          <div class="c8isv-portfolio-stats">
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="swd_work_cs_stat1_val"><?php echo esc_html(cr8v_mod('swd_work_cs_stat1_val', '1')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="swd_work_cs_stat1_lbl"><?php echo esc_html(cr8v_mod('swd_work_cs_stat1_lbl', 'Design & SEO Handled As One')); ?></span>
            </div>
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="swd_work_cs_stat2_val"><?php echo esc_html(cr8v_mod('swd_work_cs_stat2_val', '100%')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="swd_work_cs_stat2_lbl"><?php echo esc_html(cr8v_mod('swd_work_cs_stat2_lbl', 'Custom Layout Base')); ?></span>
            </div>
          </div>
          <div class="c8isv-portfolio-deliverables" style="grid-column: span 2; margin-top: 0.5rem;">
            <span class="c8isv-portfolio-stat-lbl" style="margin-bottom: 0.5rem; display: block;">Key Deliverables</span>
            <div class="c8isv-portfolio-pills">
              <span class="c8isv-portfolio-pill" data-customizer="swd_work_cs_pill1"><?php echo esc_html(cr8v_mod('swd_work_cs_pill1', 'Apartment Catalog')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="swd_work_cs_pill2"><?php echo esc_html(cr8v_mod('swd_work_cs_pill2', 'Direct Booking Engine')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="swd_work_cs_pill3"><?php echo esc_html(cr8v_mod('swd_work_cs_pill3', 'Entity SEO Structure')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="swd_work_cs_pill4"><?php echo esc_html(cr8v_mod('swd_work_cs_pill4', 'Local Search Optimization')); ?></span>
            </div>
          </div>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_work_cs_btn_url', '/case-study/the-duch-apartments/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="swd_work_cs_btn_text"><?php echo esc_html(cr8v_mod('swd_work_cs_btn_text', 'View Case Study →')); ?></a>
        </div>
      </div>
      <div class="c8isv-portfolio-footer">
        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8isv-explore">See All Projects →</a>
      </div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 4: WHAT YOU GET (Folder Deck)
     ══════════════════════════════════════════ -->
<div class="c8srv-folder-section" id="c8isv-services">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="swd_deck_label"><?php echo esc_html(cr8v_mod('swd_deck_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="swd_deck_h2_part1"><?php echo esc_html(cr8v_mod('swd_deck_h2_part1', 'Every layer of your website, ')); ?></span><span class="c8isv-serif" data-customizer="swd_deck_h2_serif"><?php echo esc_html(cr8v_mod('swd_deck_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="swd_deck_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck_desc', 'Custom site layouts, drag-and-drop page builders, responsive frontend engineering, and search-optimized architectures.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <!-- Card 1 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="swd_deck1_tab"><?php echo esc_html(cr8v_mod('swd_deck1_tab', '01 // Strategy & UX')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="swd_deck1_title"><?php echo esc_html(cr8v_mod('swd_deck1_title', 'User Flow & Layout Blueprint')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="swd_deck1_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck1_desc', 'Information architecture, visual hierarchy mapping, and wireframe layouts engineered for high conversion rates.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_deck1_cta_url', '/discovery-call/'))); ?>" class="c8srv-explore" data-customizer="swd_deck1_cta_text"><?php echo esc_html(cr8v_mod('swd_deck1_cta_text', 'Discuss layout strategy →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="swd_deck1_img">
            <img src="<?php echo esc_url(cr8v_mod('swd_deck1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_deck_blueprint.webp')); ?>" alt="User Flow & Layout Blueprint">
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="swd_deck2_tab"><?php echo esc_html(cr8v_mod('swd_deck2_tab', '02 // Visual UI')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="swd_deck2_title"><?php echo esc_html(cr8v_mod('swd_deck2_title', 'High-Fidelity Interface Design')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="swd_deck2_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck2_desc', 'Bespoke typography, color palettes, custom UI components, and brand assets crafted for instant authority.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_deck2_cta_url', '/discovery-call/'))); ?>" class="c8srv-explore" data-customizer="swd_deck2_cta_text"><?php echo esc_html(cr8v_mod('swd_deck2_cta_text', 'Discuss visual UI →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="swd_deck2_img">
            <img src="<?php echo esc_url(cr8v_mod('swd_deck2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_deck_ui.webp')); ?>" alt="High-Fidelity Interface Design">
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="swd_deck3_tab"><?php echo esc_html(cr8v_mod('swd_deck3_tab', '03 // Multi-Platform')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="swd_deck3_title"><?php echo esc_html(cr8v_mod('swd_deck3_title', 'Custom CMS & Platform Buildout')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="swd_deck3_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck3_desc', 'Flawless implementation across WordPress, Elementor, Shopify, or WooCommerce tailored precisely to your team\'s workflow.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_deck3_cta_url', '/discovery-call/'))); ?>" class="c8srv-explore" data-customizer="swd_deck3_cta_text"><?php echo esc_html(cr8v_mod('swd_deck3_cta_text', 'Discuss platform builds →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="swd_deck3_img">
            <img src="<?php echo esc_url(cr8v_mod('swd_deck3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_deck_platform.webp')); ?>" alt="Custom CMS & Platform Buildout">
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="swd_deck4_tab"><?php echo esc_html(cr8v_mod('swd_deck4_tab', '04 // Performance')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="swd_deck4_title"><?php echo esc_html(cr8v_mod('swd_deck4_title', 'Core Web Vitals & Technical SEO')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="swd_deck4_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck4_desc', 'Image asset pipeline optimization, semantic HTML markup, fast mobile rendering, and GTmetrix speed tuning.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_deck4_cta_url', '/discovery-call/'))); ?>" class="c8srv-explore" data-customizer="swd_deck4_cta_text"><?php echo esc_html(cr8v_mod('swd_deck4_cta_text', 'Discuss performance →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="swd_deck4_img">
            <img src="<?php echo esc_url(cr8v_mod('swd_deck4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_deck_speed.webp')); ?>" alt="Core Web Vitals & Technical SEO">
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="swd_deck5_tab"><?php echo esc_html(cr8v_mod('swd_deck5_tab', '05 // Autonomy')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="swd_deck5_title"><?php echo esc_html(cr8v_mod('swd_deck5_title', 'Drag-and-Drop Admin Autonomy')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="swd_deck5_desc"><?php echo wp_kses_post(cr8v_mod('swd_deck5_desc', 'Intuitive page editing setup and visual builder configuration so your team can edit content effortlessly without touching code.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_deck5_cta_url', '/discovery-call/'))); ?>" class="c8srv-explore" data-customizer="swd_deck5_cta_text"><?php echo esc_html(cr8v_mod('swd_deck5_cta_text', 'Discuss editing autonomy →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="swd_deck5_img">
            <img src="<?php echo esc_url(cr8v_mod('swd_deck5_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_deck_admin.webp')); ?>" alt="Drag-and-Drop Admin Autonomy">
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
    <div class="c8isv-label c8isv-reveal" data-customizer="swd_proc_label"><?php echo esc_html(cr8v_mod('swd_proc_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="swd_proc_h2"><?php echo esc_html(cr8v_mod('swd_proc_h2', 'How We Approach Web Design & UX')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="swd_proc_desc"><?php echo wp_kses_post(cr8v_mod('swd_proc_desc', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <!-- Stage 1 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="swd_proc1_num"><?php echo esc_html(cr8v_mod('swd_proc1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="swd_proc1_name"><?php echo esc_html(cr8v_mod('swd_proc1_name', 'Discover')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="swd_proc1_tags"><?php echo esc_html(cr8v_mod('swd_proc1_tags', 'Audits · Competitors · Goals')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="swd_proc1_desc"><?php echo wp_kses_post(cr8v_mod('swd_proc1_desc', 'We audit your brand positioning, study competitive landscapes, and map conversion targets before designing layouts. We understand your users before creating visuals.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="swd_proc1_img">
          <img src="<?php echo esc_url(cr8v_mod('swd_proc1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_proc_discover.webp')); ?>" alt="Web Design Discovery stage">
        </div>
      </div>
    </div>

    <!-- Stage 2 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="swd_proc2_num"><?php echo esc_html(cr8v_mod('swd_proc2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="swd_proc2_name"><?php echo esc_html(cr8v_mod('swd_proc2_name', 'Design')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="swd_proc2_tags"><?php echo esc_html(cr8v_mod('swd_proc2_tags', 'UX · Figma · Styling')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="swd_proc2_desc"><?php echo wp_kses_post(cr8v_mod('swd_proc2_desc', 'We craft custom Figma wireframes and high-fidelity interface mockups, pairing typography and brand colors for maximum visual credibility.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="swd_proc2_img">
          <img src="<?php echo esc_url(cr8v_mod('swd_proc2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_proc_design.webp')); ?>" alt="Web Design Figma design stage">
        </div>
      </div>
    </div>

    <!-- Stage 3 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="swd_proc3_num"><?php echo esc_html(cr8v_mod('swd_proc3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="swd_proc3_name"><?php echo esc_html(cr8v_mod('swd_proc3_name', 'Engineering')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="swd_proc3_tags"><?php echo esc_html(cr8v_mod('swd_proc3_tags', 'WordPress · Shopify · WooCommerce')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="swd_proc3_desc"><?php echo wp_kses_post(cr8v_mod('swd_proc3_desc', 'We build the live website across your target CMS (WordPress, Elementor, Shopify, WooCommerce, or Custom React/PHP) with clean code.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="swd_proc3_img">
          <img src="<?php echo esc_url(cr8v_mod('swd_proc3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_proc_engineering.webp')); ?>" alt="Web Design component system setup stage">
        </div>
      </div>
    </div>
    <!-- Stage 4 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="swd_proc4_num"><?php echo esc_html(cr8v_mod('swd_proc4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="swd_proc4_name"><?php echo esc_html(cr8v_mod('swd_proc4_name', 'Audit & Launch')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="swd_proc4_tags"><?php echo esc_html(cr8v_mod('swd_proc4_tags', 'Speed · SEO 301s · Go Live')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="swd_proc4_desc"><?php echo wp_kses_post(cr8v_mod('swd_proc4_desc', 'We run Core Web Vitals speed tests, audit mobile responsiveness, set up SEO 301 redirects, and execute a tested live launch.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="swd_proc4_img">
          <img src="<?php echo esc_url(cr8v_mod('swd_proc4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wd_proc_launch.webp')); ?>" alt="Web Design visual signoff stage">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5.5: WHERE THIS FITS IN (Platform Deck)
     ══════════════════════════════════════════ -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="swd_plat_label"><?php echo esc_html(cr8v_mod('swd_plat_label', 'Build Platform Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="swd_plat_h2_part1"><?php echo esc_html(cr8v_mod('swd_plat_h2_part1', 'Where Web Design ')); ?></span><span class="c8isv-serif" data-customizer="swd_plat_h2_serif"><?php echo esc_html(cr8v_mod('swd_plat_h2_serif', 'Flows Into Code')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;" data-customizer="swd_plat_desc"><?php echo wp_kses_post(cr8v_mod('swd_plat_desc', 'Web design is the foundational blueprint of your digital platform. Once your visual architecture is locked, we build it directly on the platform that fits your business model:')); ?></p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <!-- Option 1 -->
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="swd_plat1_badge"><?php echo esc_html(cr8v_mod('swd_plat1_badge', 'Platform // WordPress')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="swd_plat1_title"><?php echo esc_html(cr8v_mod('swd_plat1_title', 'WordPress Development')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="swd_plat1_desc"><?php echo wp_kses_post(cr8v_mod('swd_plat1_desc', 'If your team needs to edit content easily without touching code.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
      </div>

      <!-- Option 2 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="swd_plat2_badge"><?php echo esc_html(cr8v_mod('swd_plat2_badge', 'Platform // Shopify')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="swd_plat2_title"><?php echo esc_html(cr8v_mod('swd_plat2_title', 'Shopify Storefronts')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="swd_plat2_desc"><?php echo wp_kses_post(cr8v_mod('swd_plat2_desc', 'If you\'re selling physical or digital products and want hosted infrastructure.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>

      <!-- Option 3 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="swd_plat3_badge"><?php echo esc_html(cr8v_mod('swd_plat3_badge', 'Platform // WooCommerce')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="swd_plat3_title"><?php echo esc_html(cr8v_mod('swd_plat3_title', 'WooCommerce Stores')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="swd_plat3_desc"><?php echo wp_kses_post(cr8v_mod('swd_plat3_desc', 'If you want full ownership of your store\'s data, hosting, and custom plugins.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <!-- Option 4 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="swd_plat4_badge"><?php echo esc_html(cr8v_mod('swd_plat4_badge', 'Platform // Custom')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="swd_plat4_title"><?php echo esc_html(cr8v_mod('swd_plat4_title', 'Custom Bespoke App')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="swd_plat4_desc"><?php echo wp_kses_post(cr8v_mod('swd_plat4_desc', 'If nothing off-the-shelf fits what you\'re building and you need custom PHP/React.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;" data-customizer="swd_plat_footer_note">
      <?php echo wp_kses_post(cr8v_mod('swd_plat_footer_note', '<strong>Not sure which one?</strong> That\'s a normal question at this stage — tell us what you\'re building and we\'ll recommend the right platform as part of the design engagement.')); ?>
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(cr8v_mod('swd_plat_cta_url', 'https://cr8vstacks.com/contact/?model=project&service=web-design')); ?>" class="c8isv-btn-primary" data-customizer="swd_plat_cta_text"><?php echo esc_html(cr8v_mod('swd_plat_cta_text', 'Start a Design Scoping Call →')); ?></a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: FULL CATALOG HOVERLIST (Project Types)
     ══════════════════════════════════════════ -->
<div class="c8isv-hl-section">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="swd_cat_label"><?php echo esc_html(cr8v_mod('swd_cat_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="swd_cat_h2"><?php echo esc_html(cr8v_mod('swd_cat_h2', 'Every Kind of Web Design & UX We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="swd_cat_desc"><?php echo wp_kses_post(cr8v_mod('swd_cat_desc', 'From SaaS product landing pages to enterprise web portals — hover to inspect the design stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <!-- Item 1 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="<?php echo esc_attr(cr8v_mod('swd_cat1_tech', 'Corporate')); ?>" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat1_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="HTML5" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat1_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat1_title"><?php echo esc_html(cr8v_mod('swd_cat1_title', 'B2B & Enterprise Web Design')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat1_tagline"><?php echo esc_html(cr8v_mod('swd_cat1_tagline', 'High-credibility corporate sites, executive team profiles, investor relations portals, and multi-branch company hubs.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat1_tech"><?php echo esc_html(cr8v_mod('swd_cat1_tech', 'Corporate')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Figma" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat2_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="React" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat2_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat2_title"><?php echo esc_html(cr8v_mod('swd_cat2_title', 'SaaS & Product Landing Pages')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat2_tagline"><?php echo esc_html(cr8v_mod('swd_cat2_tagline', 'Product feature showcases, interactive pricing calculators, API documentation hubs, and high-converting lead funnels.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat2_tech"><?php echo esc_html(cr8v_mod('swd_cat2_tech', 'SaaS / Tech')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="Figma" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat3_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="CSS3" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat3_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/css3.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat3_title"><?php echo esc_html(cr8v_mod('swd_cat3_title', 'E-Commerce Storefront UI Design')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat3_tagline"><?php echo esc_html(cr8v_mod('swd_cat3_tagline', 'Bespoke Shopify and WooCommerce product pages, checkout flows, and collection grid designs.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat3_tech"><?php echo esc_html(cr8v_mod('swd_cat3_tech', 'E-Commerce')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="Figma" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat4_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="JavaScript" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat4_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat4_title"><?php echo esc_html(cr8v_mod('swd_cat4_title', 'Custom Web App Interface Design')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat4_tagline"><?php echo esc_html(cr8v_mod('swd_cat4_tagline', 'SaaS dashboards, admin portals, onboarding workflows, and complex web app interfaces.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat4_tech"><?php echo esc_html(cr8v_mod('swd_cat4_tech', 'Web Apps')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Figma" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat5_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="HTML5" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat5_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat5_title"><?php echo esc_html(cr8v_mod('swd_cat5_title', 'Media, Editorial & Content Hubs')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat5_tagline"><?php echo esc_html(cr8v_mod('swd_cat5_tagline', 'High-frequency article archives, publication layouts, and content-first web designs.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat5_tech"><?php echo esc_html(cr8v_mod('swd_cat5_tech', 'Media / Editorial')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Figma" data-logo-1="<?php echo esc_url(cr8v_mod('swd_cat6_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" data-tech-2="React" data-logo-2="<?php echo esc_url(cr8v_mod('swd_cat6_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="swd_cat6_title"><?php echo esc_html(cr8v_mod('swd_cat6_title', 'Website Redesign & System Refactoring')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="swd_cat6_tagline"><?php echo esc_html(cr8v_mod('swd_cat6_tagline', 'Rebuilding outdated site designs into modern, high-converting digital experiences without losing search rankings.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="swd_cat6_tech"><?php echo esc_html(cr8v_mod('swd_cat6_tech', 'Redesign & Refactor')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <!-- 2-Card Fan Stack Preview -->
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="<?php echo esc_url(cr8v_mod('swd_cat1_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg')); ?>" alt="Figma"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="<?php echo esc_url(cr8v_mod('swd_cat1_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg')); ?>" alt="React"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="swd_testi_label"><?php echo esc_html(cr8v_mod('swd_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="swd_testi_h2_part1"><?php echo esc_html(cr8v_mod('swd_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="swd_testi_h2_serif"><?php echo esc_html(cr8v_mod('swd_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <!-- Left Card -->
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="swd_testi1_text"><?php echo wp_kses_post(cr8v_mod('swd_testi1_text', 'The Duch Apartments site design gave our luxury listings the elevated visual identity they deserved. The layout flows naturally and converted far more inquiries from day one.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="swd_testi1_author"><?php echo esc_html(cr8v_mod('swd_testi1_author', 'David Sterling — Principal Real Estate Architect')); ?></div>
      </div>
      <!-- Center Card -->
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="swd_testi2_text"><?php echo wp_kses_post(cr8v_mod('swd_testi2_text', 'Cr8v Stacks handled our design system in Figma with extreme precision. Handing off the designs to our development team was completely seamless.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="swd_testi2_author"><?php echo esc_html(cr8v_mod('swd_testi2_author', 'Amina Bello — Digital Marketing Lead')); ?></div>
      </div>
      <!-- Right Card -->
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="swd_testi3_text"><?php echo wp_kses_post(cr8v_mod('swd_testi3_text', 'The wireframing and user journey mapping completely transformed how visitors interact with our services. High quality work delivered on schedule.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="swd_testi3_author"><?php echo esc_html(cr8v_mod('swd_testi3_author', 'Richard Coleman — Technical Operations Director')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 9: PRICING MODELS & ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="swd_pricing_label"><?php echo esc_html(cr8v_mod('swd_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="swd_pricing_h2_part1"><?php echo esc_html(cr8v_mod('swd_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="swd_pricing_h2_serif"><?php echo esc_html(cr8v_mod('swd_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="swd_pricing_desc"><?php echo wp_kses_post(cr8v_mod('swd_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <!-- Retainer Card -->
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="swd_plan1_type"><?php echo esc_html(cr8v_mod('swd_plan1_type', 'Ongoing Support')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="swd_plan1_title"><?php echo esc_html(cr8v_mod('swd_plan1_title', 'Growth Retainer')); ?></h3>
          <div class="c8srv-price-amount"><span class="c8srv-price-num" data-customizer="swd_plan1_price"><?php echo esc_html(cr8v_mod('swd_plan1_price', '$950')); ?></span><span class="c8srv-price-period" data-customizer="swd_plan1_period"><?php echo esc_html(cr8v_mod('swd_plan1_period', '/mo')); ?></span></div>
        </div>
        <p class="c8srv-price-desc" data-customizer="swd_plan1_desc"><?php echo wp_kses_post(cr8v_mod('swd_plan1_desc', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.')); ?></p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dedicated monthly support hours block</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Monthly speed audits &amp; code optimizations</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Design tweaks, copy updates &amp; SEO execution</span>
          </div>
        </div>
        <a href="<?php echo esc_url(cr8v_mod('swd_plan1_cta_url', 'https://cr8vstacks.com/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light" style="border-color:#080808 !important; color:#080808 !important;" data-customizer="swd_plan1_cta_text"><?php echo esc_html(cr8v_mod('swd_plan1_cta_text', 'Secure Retainer Slot')); ?></a>
      </div>

      <!-- Fixed Project Card -->
      <div class="c8srv-price-box is-highlight c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="swd_plan2_type"><?php echo esc_html(cr8v_mod('swd_plan2_type', 'Fixed Scope')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="swd_plan2_title"><?php echo esc_html(cr8v_mod('swd_plan2_title', 'Fixed Projects')); ?></h3>
          <div class="c8srv-price-amount"><span class="c8srv-price-num" style="color: #FAFAF7 !important;" data-customizer="swd_plan2_price"><?php echo esc_html(cr8v_mod('swd_plan2_price', 'From $1,200')); ?></span><span class="c8srv-price-period" style="color: rgba(250, 250, 247, 0.6) !important;" data-customizer="swd_plan2_period"><?php echo esc_html(cr8v_mod('swd_plan2_period', ' entry')); ?></span></div>
        </div>
        <p class="c8srv-price-desc" data-customizer="swd_plan2_desc"><?php echo wp_kses_post(cr8v_mod('swd_plan2_desc', 'Complete visual website design & layout architecture engineered for brand authority, intuitive user journeys, and seamless developer handoff.')); ?></p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Custom visual website design &amp; page layout architecture</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Responsive desktop, tablet, and mobile UI design system</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Developer-ready design handoff (Figma, assets, &amp; CSS tokens)</span>
          </div>
        </div>
        <a href="<?php echo esc_url(cr8v_mod('swd_plan2_cta_url', 'https://cr8vstacks.com/contact/?model=project')); ?>" class="c8srv-price-btn is-primary" data-customizer="swd_plan2_cta_text"><?php echo esc_html(cr8v_mod('swd_plan2_cta_text', 'Start A Project')); ?></a>
      </div>
    </div>

    <!-- Scope Estimator -->
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
            <span class="c8srv-est-group-title">1. Core Design Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="landingdesign" data-est-price="1200">Landing Page Design ($1,200)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="coresitedesign" data-est-price="1680">Multi-Page Website Design ($1,680)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="portaldesign" data-est-price="2400">Design System &amp; Portal ($2,400)</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div>
            <span class="c8srv-est-group-title">2. Layout Complexity</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="standard" data-est-multiplier="1.0">Standard Site Layouts</button>
              <button type="button" class="c8srv-est-choice" data-est-val="complex" data-est-multiplier="1.4">Complex Bespoke Layouts</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div>
            <span class="c8srv-est-group-title">3. Design Handoff Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="interactive" data-est-price="500">Interactive Figma Prototype (+ $500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="cmshandoff" data-est-price="600">CMS Developer Handoff (+ $600)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display">$1,200 - $1,500</div>
          
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Custom Figma interface design file</div><div>• Responsive mobile &amp; desktop component layout</div><div>• Up to 5 editable layout pages</div></div>

          <a href="<?php echo esc_url(cr8v_mod('swd_est_cta_url', 'https://cr8vstacks.com/contact/?platform=webdesign&est=1200-1500')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('swd_est_calc_url', '/discovery-call/'))); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 10: FAQ
     ══════════════════════════════════════════ -->
<section class="faq-section" id="faq" style="background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important; position: relative !important; z-index: 5 !important; border-top: 1px solid rgba(8,8,8,0.12) !important;">
  <style>
    .faq-section { background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important; position: relative !important; z-index: 5 !important; border-top: 1px solid rgba(8,8,8,0.12) !important; }
    .faq-inner { max-width: 1360px !important; margin: 0 auto !important; padding: 0 clamp(1.5rem, 5vw, 5rem) !important; display: grid !important; grid-template-columns: 300px 1fr !important; gap: clamp(3rem, 6vw, 8rem) !important; align-items: start !important; }
    .faq-aside { position: sticky !important; top: 6rem !important; align-self: start !important; }
    .faq-eyebrow { font-family: 'Space Mono', monospace !important; font-size: 0.65rem !important; letter-spacing: 0.14em !important; text-transform: uppercase !important; color: #0047E1 !important; margin-bottom: 1rem !important; font-weight: 700 !important; }
    .faq-h2 { font-family: 'Michroma', sans-serif !important; font-size: clamp(1.6rem, 2.8vw, 2.2rem) !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.2 !important; margin-bottom: 1.5rem !important; }
    .faq-sub { font-family: 'DM Sans', sans-serif !important; font-size: 0.85rem !important; font-weight: 300 !important; color: #555555 !important; line-height: 1.7 !important; margin-bottom: 2rem !important; }
    .faq-cta-link { background: #0047E1 !important; color: #FFFFFF !important; font-family: 'Space Mono', monospace !important; font-size: 0.75rem !important; font-weight: 700 !important; text-transform: uppercase !important; text-decoration: none !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; gap: 0.5rem !important; padding: 0.85rem 1.6rem !important; border-radius: 4px !important; letter-spacing: 0.08em !important; transition: all 0.25s ease !important; box-shadow: 0 4px 14px rgba(0, 71, 225, 0.25) !important; }
    .faq-cta-link:hover { background: #0037B5 !important; color: #FFFFFF !important; transform: translateY(-2px) !important; box-shadow: 0 6px 20px rgba(0, 71, 225, 0.35) !important; }
    .faq-list { list-style: none !important; padding: 0 !important; margin: 0 !important; }
    .faq-item { border-bottom: 1px solid rgba(8,8,8,0.1) !important; }
    .faq-item:first-child { border-top: 1px solid rgba(8,8,8,0.1) !important; }
    .faq-trigger { width: 100% !important; background: none !important; border: none !important; cursor: pointer !important; display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 1.5rem !important; padding: 1.4rem 0 !important; text-align: left !important; }
    .faq-q { font-family: 'DM Sans', sans-serif !important; font-size: clamp(0.88rem, 1.3vw, 0.95rem) !important; font-weight: 400 !important; color: #080808 !important; line-height: 1.4 !important; }
    .faq-icon { width: 28px !important; height: 28px !important; border-radius: 50% !important; border: 1px solid rgba(8,8,8,0.14) !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important; transition: background 0.25s, border-color 0.25s !important; }
    .faq-icon svg { transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important; }
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
      <div class="faq-eyebrow" data-customizer="swd_faq_eyebrow"><?php echo esc_html(cr8v_mod('swd_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
      <h2 class="faq-h2" data-customizer="swd_faq_h2"><?php echo esc_html(cr8v_mod('swd_faq_h2', 'Web Design Questions, Answered Honestly')); ?></h2>
      <p class="faq-sub" data-customizer="swd_faq_sub"><?php echo wp_kses_post(cr8v_mod('swd_faq_sub', 'Clear answers to common questions about our custom web design, Figma UI/UX prototyping, and conversion optimization processes.')); ?></p>
      <a href="<?php echo esc_url(cr8v_mod('swd_faq_cta_url', 'https://cr8vstacks.com/contact/')); ?>" class="faq-cta-link" data-customizer="swd_faq_cta_text"><?php echo esc_html(cr8v_mod('swd_faq_cta_text', 'Talk to us')); ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
    </div>

    <ul class="faq-list" id="srv-faq-list">
      <li class="faq-item is-open">
        <button class="faq-trigger" aria-expanded="true">
          <span class="faq-q" data-customizer="swd_faq1_q"><?php echo esc_html(cr8v_mod('swd_faq1_q', 'Why invest in custom Web Design & UX instead of using a generic pre-made template?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body" style="grid-template-rows: 1fr;">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq1_a"><?php echo wp_kses_post(cr8v_mod('swd_faq1_a', 'Generic templates force your brand into rigid pre-existing layouts, contain heavy bloat code that slows page speed, and make your business look like thousands of competitors. Custom web design builds a tailored user experience around your specific market positioning, increasing conversion rates and brand trust.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq2_q"><?php echo esc_html(cr8v_mod('swd_faq2_q', 'What platforms do you build custom web design projects on?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq2_a"><?php echo wp_kses_post(cr8v_mod('swd_faq2_a', "We build across custom WordPress (Gutenberg / Elementor), Shopify storefronts, WooCommerce stores, and bespoke PHP or React web applications depending on your team's technical preferences and operational goals.")); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq3_q"><?php echo esc_html(cr8v_mod('swd_faq3_q', 'How much does a custom Web Design project cost?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq3_a"><?php echo wp_kses_post(cr8v_mod('swd_faq3_a', 'Our fixed-scope Web Design and development projects start from $1,200 for a custom layout architecture, responsive page builds, and speed tuning. The final investment scales with the number of unique page layouts and specialized feature integrations.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq4_q"><?php echo esc_html(cr8v_mod('swd_faq4_q', 'Why hire an agency like Cr8v Stacks for Web Design instead of a solo freelancer?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq4_a"><?php echo wp_kses_post(cr8v_mod('swd_faq4_a', 'Solo freelancers often handle strategy, UI design, frontend code, and SEO as a single person, leading to missed technical deadlines or security gaps. Cr8v Stacks provides a dedicated multi-disciplinary team — combining brand strategists, UI/UX designers, senior frontend engineers, and technical SEO specialists — backed by formal contracts and support.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq5_q"><?php echo esc_html(cr8v_mod('swd_faq5_q', 'Do you handle website redesigns and 301 URL SEO redirects?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq5_a"><?php echo wp_kses_post(cr8v_mod('swd_faq5_a', 'Yes. When redesigning existing websites, we audit all existing URL structures and configure precise 301 redirect mapping to ensure your domain authority, search engine indexation, and organic rankings remain fully intact during launch.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq6_q"><?php echo esc_html(cr8v_mod('swd_faq6_q', 'How long does a complete Web Design and build project take?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq6_a"><?php echo wp_kses_post(cr8v_mod('swd_faq6_a', 'A standard custom web design and build project for a core 3–5 page site takes approximately 3 to 4 weeks from discovery kick-off to live tested launch. Complex web platforms or multi-language sites take 4 to 6 weeks.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq7_q"><?php echo esc_html(cr8v_mod('swd_faq7_q', 'Will I be able to edit page content myself without writing code?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq7_a"><?php echo wp_kses_post(cr8v_mod('swd_faq7_a', 'Yes. We configure visual page builders (Elementor or Gutenberg) and intuitive admin dashboards so your marketing team can publish blog posts, edit text, upload images, and add new landing pages easily without touching code.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="swd_faq8_q"><?php echo esc_html(cr8v_mod('swd_faq8_q', 'Do I get full ownership of design source files and site code?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="swd_faq8_a"><?php echo wp_kses_post(cr8v_mod('swd_faq8_a', '100% yes. Upon final payment, you own all Figma design source files, custom theme codebase, graphics, and database assets with zero ongoing licensing fees or platform lock-in.')); ?></p>
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
    <div class="c8isv-label c8isv-reveal is-muted" data-customizer="swd_rel_label"><?php echo esc_html(cr8v_mod('swd_rel_label', 'Other Ways We Build')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="swd_rel_h2"><?php echo esc_html(cr8v_mod('swd_rel_h2', 'Related Services')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="swd_rel_desc"><?php echo wp_kses_post(cr8v_mod('swd_rel_desc', 'Web Design & UX is one of several services we offer. If a standalone web design engagement is not what you need, check these out.')); ?></p>
    <div class="c8isv-related-grid">
      <a href="<?php echo esc_url(home_url(cr8v_mod('swd_rel1_url', '/service/wordpress/'))); ?>" class="c8isv-related-card c8isv-reveal">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">01 / WordPress</span>
        <h3 class="c8isv-related-card-title" data-customizer="swd_rel1_title"><?php echo esc_html(cr8v_mod('swd_rel1_title', 'WordPress Development')); ?></h3>
        <p class="c8isv-related-card-desc" data-customizer="swd_rel1_desc"><?php echo wp_kses_post(cr8v_mod('swd_rel1_desc', 'Lightweight, custom-coded WordPress themes built for sub-second page loads, clean organic search visibility, and editing autonomy for your team.')); ?></p>
        <span class="c8isv-related-card-link">Explore WordPress →</span>
      </a>
      <a href="<?php echo esc_url(home_url(cr8v_mod('swd_rel2_url', '/service/brand-strategy/'))); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">02 / Brand Strategy</span>
        <h3 class="c8isv-related-card-title" data-customizer="swd_rel2_title"><?php echo esc_html(cr8v_mod('swd_rel2_title', 'Brand Strategy & Positioning')); ?></h3>
        <p class="c8isv-related-card-desc" data-customizer="swd_rel2_desc"><?php echo wp_kses_post(cr8v_mod('swd_rel2_desc', 'Competitor analysis, pricing scoping, and messaging frameworks that give your website design clear strategic direction before a single pixel is designed.')); ?></p>
        <span class="c8isv-related-card-link">Explore Brand Strategy →</span>
      </a>
      <a href="<?php echo esc_url(home_url(cr8v_mod('swd_rel3_url', '/service/custom-dev/'))); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <span class="c8isv-related-card-platform">03 / Custom Dev</span>
        <h3 class="c8isv-related-card-title" data-customizer="swd_rel3_title"><?php echo esc_html(cr8v_mod('swd_rel3_title', 'Custom Development')); ?></h3>
        <p class="c8isv-related-card-desc" data-customizer="swd_rel3_desc"><?php echo wp_kses_post(cr8v_mod('swd_rel3_desc', 'Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.')); ?></p>
        <span class="c8isv-related-card-link">Explore Custom Dev →</span>
      </a>
    </div>
  </div>
</div>

</div><!-- /.c8isv-root -->
</main>

<script>
(function () {
  var root = document.querySelector('.c8isv-root') || document.body;
  if (!root || root.getAttribute('data-c8isv-init') === '1') return;
  root.setAttribute('data-c8isv-init', '1');

  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

  /* ── Hero cursor glow ── */
  var heroWrap = root.querySelector('[data-c8isv-hero]');
  var glow = root.querySelector('[data-c8isv-glow]');
  if (heroWrap && glow && !reduceMotion) {
    heroWrap.addEventListener('mousemove', function (e) {
      var r = heroWrap.getBoundingClientRect();
      glow.style.left = (e.clientX - r.left) + 'px';
      glow.style.top = (e.clientY - r.top) + 'px';
    });
    heroWrap.addEventListener('mouseenter', function () { heroWrap.classList.add('is-active'); });
    heroWrap.addEventListener('mouseleave', function () { heroWrap.classList.remove('is-active'); });
  }

  /* ── Reveal on scroll ── */
  var revealEls = root.querySelectorAll('.c8isv-reveal, .c8srv-reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
    revealEls.forEach(function (el) { io.observe(el); el.classList.add('is-visible'); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ── FAQ Accordion Toggle ── */
  var faqTriggers = root.querySelectorAll('.faq-trigger');
  faqTriggers.forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      var item = trigger.closest('.faq-item');
      if (!item) return;
      var isOpen = item.classList.contains('is-open');
      var list = trigger.closest('.faq-list');
      if (list) {
        list.querySelectorAll('.faq-item').forEach(function (other) {
          other.classList.remove('is-open');
          var btn = other.querySelector('.faq-trigger');
          if (btn) btn.setAttribute('aria-expanded', 'false');
          var body = other.querySelector('.faq-body');
          if (body) body.style.gridTemplateRows = '0fr';
        });
      }
      if (!isOpen) {
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
        var body = item.querySelector('.faq-body');
        if (body) body.style.gridTemplateRows = '1fr';
      }
    });
  });

  /* Helpers for scroll progress */
  function getElementProgress(el, startOffsetRatio, endOffsetRatio) {
    if (!el) return 0;
    var rect = el.getBoundingClientRect();
    var viewportH = window.innerHeight;
    var start = viewportH * (startOffsetRatio || 0.95);
    var end = viewportH * (endOffsetRatio || 0.2);
    if (rect.top >= start) return 0;
    if (rect.top <= end) return 1;
    return (start - rect.top) / (start - end);
  }

  function getCardProgress(card, startOffsetRatio, endOffsetRatio) {
    if (!card) return 0;
    var rect = card.getBoundingClientRect();
    var viewportH = window.innerHeight;
    var start = viewportH * (startOffsetRatio || 0.95);
    var end = viewportH * (endOffsetRatio || 0.45);
    if (rect.top >= start) return 0;
    if (rect.top <= end) return 1;
    return (start - rect.top) / (start - end);
  }

  /* ── Scroll handling scroll-linked animations ── */
  function handleScrollAnimations() {
    var flankContainer = root.querySelector('[data-c8isv-flank-trigger]');
    var flankCards = root.querySelectorAll('[data-c8isv-flank-card]');
    var portfolioCard = root.querySelector('[data-c8isv-portfolio-card]');
    var approachCards = root.querySelectorAll('[data-c8isv-approach-card]');
    var testiGrid = root.querySelector('[data-c8isv-testi-trigger]');
    var testiLeft = root.querySelector('[data-c8isv-testi-left]');
    var testiRight = root.querySelector('[data-c8isv-testi-right]');

    // 1. Flank Cards Stack Lay-Down
    if (flankContainer && flankCards.length) {
      var rect = flankContainer.getBoundingClientRect();
      var viewportH = window.innerHeight;
      var start = viewportH;
      var end = viewportH * 0.15;
      
      var p = 0;
      if (rect.top < start) {
        p = (start - rect.top) / (start - end);
        if (p > 1) p = 1;
        if (p < 0) p = 0;
      }

      flankCards.forEach(function (card, i) {
        var localT = Math.min(1, Math.max(0, p * 1.5 - i * 0.16));
        var isMobile = window.innerWidth < 901;
        if (isMobile) {
          var ty = 55 * (1 - localT);
          var spread = (i === 0 ? -35 : i === 1 ? 0 : 35) * (1 - localT);
          var rotM = (i === 0 ? -4 : i === 2 ? 4 : 0) * (1 - localT);
          var scale = 0.94 + 0.06 * localT;
          card.style.transform = 'translate3d(' + spread + 'px, ' + ty + 'px, 0) scale(' + scale + ') rotate(' + rotM + 'deg)';
        } else {
          var startX = -100 * i;
          var startRotate = i === 0 ? 0 : (i % 2 === 0 ? -7 : 7);
          var x = startX * (1 - localT);
          var rot = startRotate * (1 - localT);
          var scale = 0.92 + 0.08 * localT;
          card.style.transform = 'translateX(' + x + '%) rotate(' + rot + 'deg) scale(' + scale + ')';
        }
        card.style.opacity = String(0.35 + 0.65 * localT);
      });
    }

    // 2. Our Work Zoom Card
    if (portfolioCard) {
      var p = getElementProgress(portfolioCard, 0.95, 0.3);
      var scale = 0.75 + 0.25 * p;
      portfolioCard.style.transform = 'scale(' + scale + ')';
      portfolioCard.style.opacity = 0.5 + 0.5 * p;
    }

    // 3. How We Approach It Slanted cards
    if (approachCards.length) {
      approachCards.forEach(function (card, i) {
        if (i === 0) {
          card.style.transform = 'none';
          card.style.boxShadow = '0 5px 15px rgba(8, 8, 8, 0.02)';
          return;
        }
        var p = getCardProgress(card.parentElement, 0.95, 0.5);
        var isMobile = window.innerWidth < 901;
        var maxSlant = (6 + (i - 1) * 3) * (isMobile ? 0.65 : 1.0);
        var rot = maxSlant * (1 - p);
        var ty = (isMobile ? -55 : -80) * (1 - p);
        
        card.style.transform = 'translate3d(0, ' + ty + 'px, 0) rotate(' + rot + 'deg)';
        card.style.opacity = '1';
        
        var shadowY = 15 - 10 * p;
        var shadowBlur = 30 - 15 * p;
        var shadowAlpha = 0.08 - 0.06 * p;
        card.style.boxShadow = '0 ' + shadowY + 'px ' + shadowBlur + 'px rgba(8, 8, 8, ' + shadowAlpha + ')';
      });
    }

    // 4. Client Feedback Testimonials Fan Out
    if (testiGrid && testiLeft && testiRight) {
      var isMobile = window.innerWidth < 901;
      if (isMobile) {
        var pL = getElementProgress(testiLeft, 0.95, 0.3);
        var pR = getElementProgress(testiRight, 0.95, 0.3);
        var txL = -90 * (1 - pL);
        var tyL = 20 * (1 - pL);
        var rotL = -6 * (1 - pL);
        testiLeft.style.transform = 'translate3d(' + txL + 'px, ' + tyL + 'px, 0) rotate(' + rotL + 'deg)';
        testiLeft.style.opacity = pL;
        testiLeft.style.pointerEvents = pL > 0.1 ? 'auto' : 'none';
        var txR = 90 * (1 - pR);
        var tyR = 20 * (1 - pR);
        var rotR = 6 * (1 - pR);
        testiRight.style.transform = 'translate3d(' + txR + 'px, ' + tyR + 'px, 0) rotate(' + rotR + 'deg)';
        testiRight.style.opacity = pR;
        testiRight.style.pointerEvents = pR > 0.1 ? 'auto' : 'none';
      } else {
        var p = getElementProgress(testiGrid, 0.85, 0.3);
        var tx = p * 340;
        var ty = 15 * (1 - p);
        var rot = p * 8;
        testiLeft.style.transform = 'translate3d(' + (-tx) + 'px, ' + ty + 'px, 0) scale(' + (0.9 + 0.1 * p) + ') rotate(' + (-rot) + 'deg)';
        testiLeft.style.opacity = p;
        testiLeft.style.pointerEvents = p > 0.1 ? 'auto' : 'none';

        testiRight.style.transform = 'translate3d(' + tx + 'px, ' + ty + 'px, 0) scale(' + (0.9 + 0.1 * p) + ') rotate(' + rot + 'deg)';
        testiRight.style.opacity = p;
        testiRight.style.pointerEvents = p > 0.1 ? 'auto' : 'none';
      }
    }
  }

  window.addEventListener('scroll', handleScrollAnimations, { passive: true });
  window.addEventListener('resize', handleScrollAnimations);
  handleScrollAnimations();

  /* ── Hoverlist 2-card fan preview stack ── */
  var hoverlist = root.querySelector('[data-c8isv-hoverlist]');
  var preview = root.querySelector('[data-c8isv-preview]');
  if (hoverlist && preview && !reduceMotion) {
    var hoverItems = hoverlist.querySelectorAll('.c8isv-hoverlist-item');
    hoverlist.addEventListener('mousemove', function (e) {
      var rect = hoverlist.getBoundingClientRect();
      preview.style.left = (e.clientX - rect.left) + 'px';
      preview.style.top = (e.clientY - rect.top) + 'px';
    });
    hoverlist.addEventListener('mouseenter', function () { preview.classList.add('is-active'); });
    hoverlist.addEventListener('mouseleave', function () { preview.classList.remove('is-active'); });
    hoverItems.forEach(function (item) {
      item.addEventListener('mouseenter', function () {
        var imgL = preview.querySelector('[data-c8isv-fan-logo="left"]');
        var imgR = preview.querySelector('[data-c8isv-fan-logo="right"]');
        var l1 = item.getAttribute('data-logo-1');
        var l2 = item.getAttribute('data-logo-2');
        if (imgL && l1) imgL.src = l1;
        if (imgR && l2) imgR.src = l2;
      });
    });
  }

  /* ── Scope Estimator Interactive Calculator ── */
  var estButtons = root.querySelectorAll('.c8srv-est-choice');
  var estRangeDisplay = root.querySelector('#est-range-display');
  var estDeliverablesList = root.querySelector('#est-deliverables-list');
  var estCtaLink = root.querySelector('#est-cta-link');

  if (estButtons.length > 0 && estRangeDisplay) {
    function recalculateEstimate() {
      var basePrice = 1200;
      var multiplier = 1.0;
      var addonPrice = 0;
      var deliverables = [];

      var activePlatform = root.querySelector('[data-est-group="platform"] .is-active');
      if (activePlatform) {
        basePrice = parseInt(activePlatform.getAttribute('data-est-price') || '1200', 10);
        var val = activePlatform.getAttribute('data-est-val');
        if (val === 'landingdesign') {
          deliverables.push('• Custom landing page wireframe & UI layout');
          deliverables.push('• Mobile & desktop responsive styling');
        } else if (val === 'coresitedesign') {
          deliverables.push('• Up to 5 core page visual layouts');
          deliverables.push('• Complete Figma design system tokens');
        } else {
          deliverables.push('• Complete design system & component UI portal');
          deliverables.push('• Comprehensive brand architecture & layouts');
        }
      }

      var activeScale = root.querySelector('[data-est-group="scale"] .is-active');
      if (activeScale) {
        multiplier = parseFloat(activeScale.getAttribute('data-est-multiplier') || '1.0');
      }

      var activeAddon = root.querySelector('[data-est-group="growth"] .is-active');
      if (activeAddon) {
        addonPrice = parseInt(activeAddon.getAttribute('data-est-price') || '0', 10);
        var addonVal = activeAddon.getAttribute('data-est-val');
        if (addonVal === 'interactive') {
          deliverables.push('• Clickable interactive Figma prototype');
        } else if (addonVal === 'cmshandoff') {
          deliverables.push('• CMS developer handoff & code specs');
        }
      }

      var lowEnd = Math.round((basePrice * multiplier) + addonPrice);
      var highEnd = Math.round(lowEnd * 1.25);

      estRangeDisplay.textContent = '$' + lowEnd.toLocaleString() + ' - $' + highEnd.toLocaleString();
      
      if (estDeliverablesList && deliverables.length > 0) {
        estDeliverablesList.innerHTML = deliverables.map(function(d) { return '<div>' + d + '</div>'; }).join('');
      }

      if (estCtaLink) {
        estCtaLink.href = 'https://cr8vstacks.com/contact/?platform=webdesign&est=' + lowEnd + '-' + highEnd;
      }
    }

    estButtons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var group = this.closest('.c8srv-est-choices');
        if (group) {
          group.querySelectorAll('.c8srv-est-choice').forEach(function(b) { b.classList.remove('is-active'); });
          this.classList.add('is-active');
          recalculateEstimate();
        }
      });
    });

    recalculateEstimate();
  }

  /* ── Live Matrix Text Scramble Effect ── */
  var srvMatrixButtons = root.querySelectorAll('.c8-btn-primary, .c8isv-btn-primary, .c8srv-btn-primary, .c8srv-price-btn, .c8isv-price-btn, .c8srv-explore, .c8isv-explore, .c8isv-btn-ghost, .c8srv-btn-ghost, .faq-cta-link, .c8srv-vs-priority-btn, .c8isv-related-card-link, .c8srv-related-card-link');
  var srvMatrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  srvMatrixButtons.forEach(function(btn) {
    var textNode = Array.from(btn.childNodes).find(function(n) { return n.nodeType === 3 && n.textContent.trim().length > 0; });
    var targetObj = textNode ? textNode : btn;
    var originalText = targetObj.textContent.trim();
    var scrambleInterval = null;

    btn.addEventListener('mouseenter', function() {
      var iteration = 0;
      clearInterval(scrambleInterval);

      scrambleInterval = setInterval(function() {
        targetObj.textContent = originalText.split('')
          .map(function(char, index) {
            if (char === ' ' || index < iteration) return originalText[index];
            return srvMatrixChars[Math.floor(Math.random() * srvMatrixChars.length)];
          })
          .join('');

        if (iteration >= originalText.length) {
          clearInterval(scrambleInterval);
        }
        iteration += 1 / 2;
      }, 25);
    });

    btn.addEventListener('mouseleave', function() {
      clearInterval(scrambleInterval);
      targetObj.textContent = originalText;
    });
  });
})();
</script>

<?php get_footer(); ?>
