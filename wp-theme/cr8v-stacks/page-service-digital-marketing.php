<?php
/**
 * Template Name: Service — Digital Marketing
 * Description: Digital Marketing Service Page Template with 100% Customizer Control Parity
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">
  <?php wp_head(); ?>
  <style>
  .faq-cta-link {
    background: #0047E1 !important;
    color: #FFFFFF !important;
    padding: 0.85rem 1.6rem !important;
    border-radius: 4px !important;
    stroke: #FFFFFF !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-family: 'Space Mono', monospace !important;
    font-size: 0.85rem !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
    text-decoration: none !important;
  }
  .faq-cta-link svg {
    stroke: #FFFFFF !important;
  }
  /* Scope Estimator Choice Buttons */
  .c8srv-est-choices {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 0.5rem !important;
    margin-top: 0.5rem !important;
    margin-bottom: 1.25rem !important;
  }
  .c8srv-est-choice {
    background: #FFFFFF !important;
    border: 1px solid rgba(8, 8, 8, 0.15) !important;
    color: #080808 !important;
    padding: 0.6rem 1rem !important;
    border-radius: 4px !important;
    font-family: 'DM Sans', sans-serif !important;
    font-size: 0.85rem !important;
    font-weight: 500 !important;
    cursor: pointer !important;
    transition: all 0.2s ease !important;
  }
  .c8srv-est-choice:hover {
    border-color: #0047E1 !important;
    color: #0047E1 !important;
  }
  .c8srv-est-choice.is-active {
    background: #0047E1 !important;
    border-color: #0047E1 !important;
    color: #FFFFFF !important;
    font-weight: 700 !important;
  }
  </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<div class="c8isv-root">
<style>
/* Universal White 4px Case Study Deliverable Pills CSS */
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('digimkt_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('digimkt_hero_crumb_child', 'DIGITAL MARKETING')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="digimkt_hero_label"><?php echo esc_html(cr8v_mod('digimkt_hero_label', 'Performance Acquisition & Paid Campaign Engineering')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="digimkt_hero_h1_part1"><?php echo esc_html(cr8v_mod('digimkt_hero_h1_part1', 'Paid Lead Acquisition ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_hero_h1_serif"><?php echo esc_html(cr8v_mod('digimkt_hero_h1_serif', '& Growth Funnels')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="digimkt_hero_intro"><?php echo wp_kses_post(cr8v_mod('digimkt_hero_intro', 'Multi-channel paid campaigns, server-side conversion tracking, and automated lifecycle marketing funnels engineered to scale customer acquisition and return on ad spend (ROAS).')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('digimkt_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="digimkt_hero_cta1_text"><?php echo esc_html(cr8v_mod('digimkt_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('digimkt_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="digimkt_hero_cta2_text"><?php echo esc_html(cr8v_mod('digimkt_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="digimkt_hero_pill1"><?php echo esc_html(cr8v_mod('digimkt_hero_pill1', 'Meta Ads')); ?></span>
          <span class="c8isv-pill" data-customizer="digimkt_hero_pill2"><?php echo esc_html(cr8v_mod('digimkt_hero_pill2', 'Google Ads')); ?></span>
          <span class="c8isv-pill" data-customizer="digimkt_hero_pill3"><?php echo esc_html(cr8v_mod('digimkt_hero_pill3', 'Klaviyo')); ?></span>
          <span class="c8isv-pill" data-customizer="digimkt_hero_pill4"><?php echo esc_html(cr8v_mod('digimkt_hero_pill4', 'GA4')); ?></span>
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
     SECTION 2: WHY DIGITAL MARKETING (Flank Cards Stack)
     Light #F4F6FB
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="digimkt_flank_label"><?php echo esc_html(cr8v_mod('digimkt_flank_label', 'Why Digital Marketing')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="digimkt_flank_h2"><?php echo esc_html(cr8v_mod('digimkt_flank_h2', 'Acquisition Campaigns Built On Brand Positioning')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="digimkt_flank1_step"><?php echo esc_html(cr8v_mod('digimkt_flank1_step', 'Strategy // Aligned')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="digimkt_flank1_title"><?php echo esc_html(cr8v_mod('digimkt_flank1_title', 'Positioning-Led Ad Creative')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="digimkt_flank1_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_flank1_desc', 'Ad campaigns engineered directly from your Brand Strategy positioning so every impression resonates with high-intent buyers.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="digimkt_flank2_step"><?php echo esc_html(cr8v_mod('digimkt_flank2_step', 'Tracking // Precision')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="digimkt_flank2_title"><?php echo esc_html(cr8v_mod('digimkt_flank2_title', 'Server-side Conversion Tracking')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="digimkt_flank2_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_flank2_desc', 'Precision Google Tag Manager, GA4, and Meta Conversions API (CAPI) wiring for 100% accurate attribution.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="digimkt_flank3_step"><?php echo esc_html(cr8v_mod('digimkt_flank3_step', 'Funnel // Retention')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="digimkt_flank3_title"><?php echo esc_html(cr8v_mod('digimkt_flank3_title', 'Automated Email Lifecycles')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="digimkt_flank3_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_flank3_desc', 'Klaviyo and Mailchimp email autoresponders that nurture leads and maximize customer lifetime value.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="digimkt_flank4_step"><?php echo esc_html(cr8v_mod('digimkt_flank4_step', 'ROI // Transparency')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="digimkt_flank4_title"><?php echo esc_html(cr8v_mod('digimkt_flank4_title', 'ROAS & CAC Optimization')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="digimkt_flank4_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_flank4_desc', 'Continuous creative A/B testing, audience pruning, and bid management focused strictly on profitable customer acquisition.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 3: OUR WORK (Portfolio Showcase)
     White Background — Stride Plus Media Showcase
     ══════════════════════════════════════════ -->
<div class="c8isv-portfolio-outer">
  <div class="c8isv-portfolio-inner">
    <div class="c8isv-portfolio-head">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="digimkt_port_label"><?php echo esc_html(cr8v_mod('digimkt_port_label', 'Our Work')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="digimkt_port_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_port_h2_part1', 'Built for Real Outcomes, ')); ?></span><br><span class="c8isv-serif" data-customizer="digimkt_port_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_port_h2_serif', 'Not Just Concepts')); ?></span></h2>
    </div>
    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-img">
        <img src="<?php echo esc_url(cr8v_mod('digimkt_port_img', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop')); ?>" alt="Stride Plus Media — built by Cr8v Stacks" data-customizer="digimkt_port_img">
      </div>
      <div class="c8isv-portfolio-info">
        <span class="c8isv-portfolio-client" data-customizer="digimkt_port_client"><?php echo esc_html(cr8v_mod('digimkt_port_client', 'Case Study — Stride Plus Media')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="digimkt_port_title"><?php echo esc_html(cr8v_mod('digimkt_port_title', 'One Team Behind Stride Radio\'s Full Acquisition Funnel')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="digimkt_port_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_port_desc', 'Digital marketing for Stride Radio wasn\'t handled separately from the brand or the app — we ran Google Ads, Google Tag conversion tracking, Facebook Ads, and YouTube Ads as one connected funnel, built on the same positioning we defined in the brand strategy phase.')); ?></p>
        <div class="c8isv-portfolio-stats">
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="digimkt_port_stat1_val"><?php echo esc_html(cr8v_mod('digimkt_port_stat1_val', '4')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="digimkt_port_stat1_lbl"><?php echo esc_html(cr8v_mod('digimkt_port_stat1_lbl', 'Ad Channels Run Under One Message')); ?></span>
          </div>
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="digimkt_port_stat2_val"><?php echo esc_html(cr8v_mod('digimkt_port_stat2_val', '0')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="digimkt_port_stat2_lbl"><?php echo esc_html(cr8v_mod('digimkt_port_stat2_lbl', 'Third-party Handoffs')); ?></span>
          </div>
        </div>
        <div class="c8isv-portfolio-deliverables">
          <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
          <div class="c8isv-portfolio-pills">
            <span class="c8isv-portfolio-pill">Multi-Channel Paid Ads</span>
            <span class="c8isv-portfolio-pill">Meta &amp; Google Campaigns</span>
            <span class="c8isv-portfolio-pill">GA4 &amp; GTM Event Tracking</span>
            <span class="c8isv-portfolio-pill">Conversion Funnel Tuning</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url(cr8v_mod('digimkt_port_btn_url', '/case-studies/stride-plus-media/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="digimkt_port_btn_text"><?php echo esc_html(cr8v_mod('digimkt_port_btn_text', 'View Case Study →')); ?></a>
      </div>
    </div>
    <div class="c8isv-portfolio-footer">
      <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8isv-explore">See All Projects →</a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 4: WHAT YOU GET (Folder Deck)
     Cream #FAFAF9
     ══════════════════════════════════════════ -->
<div class="c8srv-folder-section" id="c8isv-services">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="digimkt_folder_label"><?php echo esc_html(cr8v_mod('digimkt_folder_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="digimkt_folder_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_folder_h2_part1', 'Every layer of your marketing funnel, ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_folder_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_folder_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="digimkt_folder_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder_desc', 'Multi-channel paid campaigns, server-side conversion tracking, automated email workflows, landing page CRO, and real-time ROAS reporting.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <!-- Card 1 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="digimkt_folder1_tab"><?php echo esc_html(cr8v_mod('digimkt_folder1_tab', '01 // Paid Ads')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="digimkt_folder1_title"><?php echo esc_html(cr8v_mod('digimkt_folder1_title', 'Google & Meta Ad Campaigns')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="digimkt_folder1_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder1_desc', 'Bespoke search, display, retargeting, and Meta ad campaign setup built around high-intent buyer keywords.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss paid ads →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Google & Meta Ad Campaigns">
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="digimkt_folder2_tab"><?php echo esc_html(cr8v_mod('digimkt_folder2_tab', '02 // Tracking')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="digimkt_folder2_title"><?php echo esc_html(cr8v_mod('digimkt_folder2_title', 'GTM, GA4 & Meta CAPI Setup')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="digimkt_folder2_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder2_desc', 'Server-side Google Tag Manager and Meta Conversions API (CAPI) wiring for complete attribution data.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss conversion tracking →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="GTM, GA4 & Meta CAPI Setup">
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="digimkt_folder3_tab"><?php echo esc_html(cr8v_mod('digimkt_folder3_tab', '03 // Automation')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="digimkt_folder3_title"><?php echo esc_html(cr8v_mod('digimkt_folder3_title', 'Klaviyo & Mailchimp Autoresponders')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="digimkt_folder3_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder3_desc', 'Lifecycle email sequences, welcome flows, abandoned cart triggers, and re-engagement campaigns.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss email automation →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Klaviyo & Mailchimp Autoresponders">
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="digimkt_folder4_tab"><?php echo esc_html(cr8v_mod('digimkt_folder4_tab', '04 // Conversion')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="digimkt_folder4_title"><?php echo esc_html(cr8v_mod('digimkt_folder4_title', 'Landing Page CRO & A/B Testing')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="digimkt_folder4_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder4_desc', 'Optimizing hero headlines, CTA placement, and form friction to increase visitor-to-lead conversion rates.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss CRO &amp; testing →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Landing Page CRO & A/B Testing">
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="digimkt_folder5_tab"><?php echo esc_html(cr8v_mod('digimkt_folder5_tab', '05 // Reporting')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="digimkt_folder5_title"><?php echo esc_html(cr8v_mod('digimkt_folder5_title', 'Real-time ROAS & CAC Analytics')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="digimkt_folder5_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_folder5_desc', 'Transparent performance dashboards monitoring customer acquisition cost (CAC) and return on ad spend (ROAS).')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss reporting analytics →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Real-time ROAS & CAC Analytics">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5: HOW WE APPROACH IT (Process Deck)
     White Background — Slanted Overlapping Cards
     ══════════════════════════════════════════ -->
<div class="c8isv-approach-outer">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="digimkt_app_label"><?php echo esc_html(cr8v_mod('digimkt_app_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="digimkt_app_h2"><?php echo esc_html(cr8v_mod('digimkt_app_h2', 'How We Approach Digital Marketing')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="digimkt_app_sub"><?php echo wp_kses_post(cr8v_mod('digimkt_app_sub', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <!-- Stage 1 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="digimkt_app1_num"><?php echo esc_html(cr8v_mod('digimkt_app1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="digimkt_app1_name"><?php echo esc_html(cr8v_mod('digimkt_app1_name', 'Audit')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="digimkt_app1_tags"><?php echo wp_kses_post(cr8v_mod('digimkt_app1_tags', 'Funnel &middot; Audiences &middot;<br>Tracking')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="digimkt_app1_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_app1_desc', 'We audit existing campaign assets, analyze conversion funnels, map audience personas, and check tracking tag health.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop" alt="Digital Marketing Audit stage">
        </div>
      </div>
    </div>

    <!-- Stage 2 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="digimkt_app2_num"><?php echo esc_html(cr8v_mod('digimkt_app2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="digimkt_app2_name"><?php echo esc_html(cr8v_mod('digimkt_app2_name', 'Build')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="digimkt_app2_tags"><?php echo wp_kses_post(cr8v_mod('digimkt_app2_tags', 'Ad Creative &middot; Copy &middot;<br>Wiring')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="digimkt_app2_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_app2_desc', 'We draft high-converting ad copy, design visual creative assets, build landing pages, and configure GTM tracking pixels.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop" alt="Digital Marketing ad build stage">
        </div>
      </div>
    </div>

    <!-- Stage 3 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="digimkt_app3_num"><?php echo esc_html(cr8v_mod('digimkt_app3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="digimkt_app3_name"><?php echo esc_html(cr8v_mod('digimkt_app3_name', 'Launch')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="digimkt_app3_tags"><?php echo wp_kses_post(cr8v_mod('digimkt_app3_tags', 'Google Ads &middot; Meta &middot;<br>Automations')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="digimkt_app3_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_app3_desc', 'We launch targeted paid campaigns across search and social channels while triggering automated email welcome flows.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop" alt="Digital Marketing campaign launch stage">
        </div>
      </div>
    </div>

    <!-- Stage 4 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="digimkt_app4_num"><?php echo esc_html(cr8v_mod('digimkt_app4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="digimkt_app4_name"><?php echo esc_html(cr8v_mod('digimkt_app4_name', 'Scale')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="digimkt_app4_tags"><?php echo wp_kses_post(cr8v_mod('digimkt_app4_tags', 'Optimization &middot; CAC &middot;<br>ROAS')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="digimkt_app4_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_app4_desc', 'We prune non-performing keywords, A/B test ad variations, scale winning audiences, and optimize CAC efficiency.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" alt="Digital Marketing scale optimization stage">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5.5: ACQUISITION STACK OPTIONS
     White Background — 4 Platform Cards Deck
     ══════════════════════════════════════════ -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="digimkt_plat_label"><?php echo esc_html(cr8v_mod('digimkt_plat_label', 'Marketing Channel Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="digimkt_plat_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_plat_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_plat_h2_serif', 'Acquisition Stack')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;">Whether you need paid search traffic, paid social brand awareness, automated email lifecycles, or full-funnel acquisition:</p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <!-- Option 1 -->
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="digimkt_plat1_badge"><?php echo esc_html(cr8v_mod('digimkt_plat1_badge', 'Stack // Search')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="digimkt_plat1_title"><?php echo esc_html(cr8v_mod('digimkt_plat1_title', 'Google Search & Shopping Ads')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="digimkt_plat1_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_plat1_desc', 'Capturing high-intent buyers searching directly for your products or B2B solutions on Google.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
      </div>

      <!-- Option 2 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="digimkt_plat2_badge"><?php echo esc_html(cr8v_mod('digimkt_plat2_badge', 'Stack // Social')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="digimkt_plat2_title"><?php echo esc_html(cr8v_mod('digimkt_plat2_title', 'Meta & YouTube Paid Ads')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="digimkt_plat2_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_plat2_desc', 'Creating visual brand demand and retargeting engaged audiences across Facebook, Instagram, and YouTube.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>

      <!-- Option 3 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="digimkt_plat3_badge"><?php echo esc_html(cr8v_mod('digimkt_plat3_badge', 'Stack // Lifecycle')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="digimkt_plat3_title"><?php echo esc_html(cr8v_mod('digimkt_plat3_title', 'Klaviyo & Mailchimp Funnels')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="digimkt_plat3_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_plat3_desc', 'Nurturing incoming leads into recurring customers with automated email sequences.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <!-- Option 4 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="digimkt_plat4_badge"><?php echo esc_html(cr8v_mod('digimkt_plat4_badge', 'Stack // Retainer')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="digimkt_plat4_title"><?php echo esc_html(cr8v_mod('digimkt_plat4_title', 'Full-Stack Growth Retainer')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="digimkt_plat4_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_plat4_desc', 'Continuous multi-channel campaign management, conversion rate optimization, and weekly reporting.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;">
      <strong>Not sure which marketing channel fits your budget?</strong> Tell us your target acquisition goals and we'll design a customized media plan during our scoping call.
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">Start a Marketing Scoping Call →</a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: FULL CATALOG HOVERLIST (Project Types)
     White Background — 6 Items Capability Index
     ══════════════════════════════════════════ -->
<div class="c8isv-hl-section" id="c8isv-catalog">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="digimkt_hl_label"><?php echo esc_html(cr8v_mod('digimkt_hl_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="digimkt_hl_h2"><?php echo esc_html(cr8v_mod('digimkt_hl_h2', 'Every Kind of Marketing Funnel We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="digimkt_hl_sub"><?php echo wp_kses_post(cr8v_mod('digimkt_hl_sub', 'From B2B lead generation campaigns to e-commerce customer acquisition — hover to inspect the marketing stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <!-- Item 1 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Meta Ads" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/meta.svg" data-tech-2="Google Ads" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googleads.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl1_title"><?php echo esc_html(cr8v_mod('digimkt_hl1_title', 'B2B Lead Acquisition Funnels')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl1_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl1_tagline', 'Targeted Google Search campaigns and LinkedIn/Meta lead gen forms built to fill sales calendars.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">B2B Funnels</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Meta Ads" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/meta.svg" data-tech-2="Klaviyo" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/klaviyo.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl2_title"><?php echo esc_html(cr8v_mod('digimkt_hl2_title', 'E-Commerce Customer Scaling')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl2_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl2_tagline', 'Meta catalog ads, Google Shopping campaigns, and Klaviyo cart recovery flows for online stores.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">E-Commerce Ads</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="Google Ads" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googleads.svg" data-tech-2="Mailchimp" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mailchimp.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl3_title"><?php echo esc_html(cr8v_mod('digimkt_hl3_title', 'SaaS Free-Trial & Demo Campaigns')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl3_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl3_tagline', 'Retargeting software buyers with product feature ads and automated trial onboarding sequences.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">SaaS Growth</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="Google Ads" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googleads.svg" data-tech-2="Google Analytics" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googleanalytics.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl4_title"><?php echo esc_html(cr8v_mod('digimkt_hl4_title', 'Local & Service Business Marketing')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl4_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl4_tagline', 'Geo-targeted Google Local Services ads, Google Maps optimization, and call-tracking funnels.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Local Search</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Google Tag Manager" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googletagmanager.svg" data-tech-2="Meta Ads" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/meta.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl5_title"><?php echo esc_html(cr8v_mod('digimkt_hl5_title', 'Server-Side Conversion Tracking Cleanup')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl5_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl5_tagline', 'Fixing iOS 14+ tracking loss with Google Tag Manager server-side containers and Meta CAPI.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Tracking Setup</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Klaviyo" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/klaviyo.svg" data-tech-2="Mailchimp" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mailchimp.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="digimkt_hl6_title"><?php echo esc_html(cr8v_mod('digimkt_hl6_title', 'Lifecycle Email & Retainers')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="digimkt_hl6_tagline"><?php echo wp_kses_post(cr8v_mod('digimkt_hl6_tagline', 'Automated win-back flows, broadcast newsletters, and monthly growth retainer management.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Email Lifecycles</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <!-- 2-Card Fan Stack Preview with SVG CDN Logos -->
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/meta.svg" alt="Meta Ads"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googleads.svg" alt="Google Ads"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     Light #F4F6FB — Fanning Stack Animation
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="digimkt_testi_label"><?php echo esc_html(cr8v_mod('digimkt_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="digimkt_testi_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_testi_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <!-- Left Card -->
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="digimkt_testi1_text"><?php echo wp_kses_post(cr8v_mod('digimkt_testi1_text', 'Running our Google Ads, Meta Ads, and YouTube Ads under one consistent brand strategy message completely transformed our funnel performance.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="digimkt_testi1_author"><?php echo esc_html(cr8v_mod('digimkt_testi1_author', 'Marketing Director — Digital Media')); ?></div>
      </div>
      <!-- Center Card -->
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="digimkt_testi2_text"><?php echo wp_kses_post(cr8v_mod('digimkt_testi2_text', 'The GTM server-side tracking setup fixed our attribution gaps instantly. We can finally see exact customer acquisition costs across all paid channels.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="digimkt_testi2_author"><?php echo esc_html(cr8v_mod('digimkt_testi2_author', 'Tunde Oladipo — E-Commerce Growth Manager')); ?></div>
      </div>
      <!-- Right Card -->
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="digimkt_testi3_text"><?php echo wp_kses_post(cr8v_mod('digimkt_testi3_text', 'Cr8v Stacks rebuilt our Klaviyo lifecycle flows alongside our Meta ad campaigns. Our email revenue doubled within 60 days.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="digimkt_testi3_author"><?php echo esc_html(cr8v_mod('digimkt_testi3_author', 'Sarah Jenkins — Head of User Acquisition')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 9: PRICING MODELS & PROJECT ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="digimkt_pricing_label"><?php echo esc_html(cr8v_mod('digimkt_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="digimkt_pricing_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_pricing_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="digimkt_pricing_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <!-- Retainer Card -->
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Ongoing Support</span>
          <h3 class="c8srv-price-title">Growth Retainer</h3>
          <div class="c8srv-price-amount">$800<span>/mo</span></div>
        </div>
        <p class="c8srv-price-desc">A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dedicated monthly support hours block</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Monthly speed audits &amp; code optimizations</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Design tweaks, copy updates &amp; SEO execution</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light" style="border-color:#080808 !important; color:#080808 !important;">Secure Retainer Slot</a>
      </div>

      <!-- Fixed Project Card -->
      <div class="c8srv-price-box is-featured c8srv-reveal">
        <div class="c8srv-price-badge">Most Popular</div>
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" style="color: rgba(255,255,255,0.7) !important;">Fixed Scope</span>
          <h3 class="c8srv-price-title" style="color: #FFFFFF !important;">Fixed Projects</h3>
          <div class="c8srv-price-amount" style="color: #FFFFFF !important;"><span class="c8srv-price-period" style="color: rgba(255,255,255,0.7) !important;">From </span><span class="c8srv-price-num" style="color: #FFFFFF !important;">$1,000</span><span class="c8srv-price-period" style="color: rgba(255,255,255,0.7) !important;"> entry</span></div>
        </div>
        <p class="c8srv-price-desc" style="color: rgba(255,255,255,0.8) !important;">A deep, targeted multi-channel campaign &amp; conversion funnel engagement with transparent scoping, clear milestones, and guaranteed delivery. Best for paid ad campaign setup, email automation, and CRO.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Multi-channel ad campaign setup (Meta, Google, Search)</span>
          </div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Email autoresponders &amp; high-intent lead nurture sequences</span>
          </div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Conversion rate optimization (CRO) &amp; monthly reporting</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=project')); ?>" class="c8srv-price-btn is-primary">Start A Project</a>
      </div>
    </div>

    <!-- Scope Estimator Widget -->
    <div class="c8srv-estimator c8srv-reveal" style="margin-top: 3.5rem !important;">
      <div style="margin-bottom: 2.5rem !important;">
        <span class="c8srv-price-type" style="font-family: 'Space Mono', monospace; font-size: 0.75rem; color: #0047E1; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;">Project Scope Estimator</span>
        <h3 class="c8srv-price-title" style="font-family: 'Michroma', sans-serif; font-size: 1.8rem; color: #080808; margin-top: 0.25rem; margin-bottom: 0.5rem; font-weight: 700;">Build Your Stack Estimate</h3>
        <p class="c8srv-price-desc" style="margin-bottom: 0 !important;">Select your desired setup below to calculate an immediate starting price range estimate for your project.</p>
      </div>

      <div class="c8srv-estimator-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; align-items: start;">
        <div class="c8srv-est-options">
          <!-- Step 1 -->
          <div>
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">1. Core Campaign Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="funnel" data-est-price="1000">Conversion Funnel Setup ($1,000)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multichannel" data-est-price="1500">Multi-Channel Paid Ads ($1,500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="retargeting" data-est-price="2000">Full Retargeting Engine ($2,000)</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div>
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">2. Ad Channel Reach</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="single" data-est-multiplier="1.0">Single Primary Ad Channel</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multi" data-est-multiplier="1.4">Omnichannel Scale (Meta + Google + TikTok)</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div>
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">3. Growth Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="email" data-est-price="600">Klaviyo Automated Email Flows (+ $600)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="cro" data-est-price="800">Landing Page CRO Audit (+ $800)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result" style="background:#FAFAF7; padding:2rem; border-radius:4px; border:1px solid rgba(8,8,8,0.08);">
          <span class="c8srv-est-range-label" style="font-family:'Space Mono',monospace; font-size:0.75rem; color:#6B6B6B; text-transform:uppercase; display:block; margin-bottom:0.3rem;">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display" style="font-family:'Michroma',sans-serif; font-size:1.8rem; color:#0047E1; font-weight:700; margin-bottom:1.5rem;">$1,000 - $1,250</div>
          
          <span class="c8srv-est-deliverables-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.85rem; color:#080808; display:block; margin-bottom:0.5rem;">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list" style="font-family:'DM Sans',sans-serif; font-size:0.85rem; color:#555555; line-height:1.6; margin-bottom:1.5rem;"><div>• Multi-channel Funnel Setup</div><div>• Google &amp; Meta Ad campaign wiring</div><div>• Server-side GTM &amp; GA4 conversion tracking</div></div>

          <a href="<?php echo esc_url(home_url('/contact/?platform=marketing&est=1000-1250')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important; display:block; text-align:center;">Submit Scope Request</a>
          <a href="<?php echo esc_url(home_url('/toolkits/website-cost-calculator/')); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 10: FREQUENTLY ASKED QUESTIONS
     Light #FAFAF7
     ══════════════════════════════════════════ -->
<section class="faq-section" id="faq" style="background: #FAFAF7 !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.06) !important;">
  <div class="c8isv-wrap">
    <div class="c8srv-faq-grid">
      <div class="c8srv-faq-left">
        <div class="c8isv-label c8srv-reveal" data-customizer="digimkt_faq_eyebrow"><?php echo esc_html(cr8v_mod('digimkt_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
        <h2 class="c8isv-section-title c8srv-reveal" data-customizer="digimkt_faq_h2"><?php echo esc_html(cr8v_mod('digimkt_faq_h2', 'Digital Marketing FAQ')); ?></h2>
        <p class="c8isv-lead c8srv-reveal" style="margin-bottom: 2rem !important;" data-customizer="digimkt_faq_sub"><?php echo wp_kses_post(cr8v_mod('digimkt_faq_sub', 'Clear answers to common questions about our paid advertising management, conversion tracking, and email automation.')); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>

      <div class="c8srv-faq-right">
        <ul class="faq-list">
          <li class="faq-item is-open">
            <button class="faq-trigger" aria-expanded="true">
              <span class="faq-q" data-customizer="digimkt_faq1_q"><?php echo esc_html(cr8v_mod('digimkt_faq1_q', 'Which paid ad channels should we start with?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body" style="grid-template-rows: 1fr;">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq1_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq1_a', 'If users are actively searching for your service, Google Search Ads deliver immediate high-intent leads. If your product requires visual demonstration or brand awareness, Meta Ads (Facebook/Instagram) excel. We audit your audience to select the right launch channel.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="digimkt_faq2_q"><?php echo esc_html(cr8v_mod('digimkt_faq2_q', 'How do you track sales and leads accurately after iOS 14 privacy updates?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq2_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq2_a', 'We configure server-side Google Tag Manager (sGTM) containers and Meta Conversions API (CAPI) on your cloud server. This sends purchase events directly from your server to ad networks, bypassing browser ad blockers.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="digimkt_faq3_q"><?php echo esc_html(cr8v_mod('digimkt_faq3_q', 'Do you create the ad graphics, videos, and copywriting?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq3_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq3_a', 'Yes. We handle end-to-end ad creation — copywriting, static visual graphic design, motion assets, and landing page CRO copy aligned with your core brand positioning.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="digimkt_faq4_q"><?php echo esc_html(cr8v_mod('digimkt_faq4_q', 'What email automation platforms do you work with?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq4_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq4_a', 'We engineer custom email lifecycles on Klaviyo, Mailchimp, ActiveCampaign, and HubSpot, setting up automated welcome series, lead nurture flows, and abandoned cart recovery.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="digimkt_faq5_q"><?php echo esc_html(cr8v_mod('digimkt_faq5_q', 'How much ad spend budget do we need to start?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq5_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq5_a', 'We recommend a minimum ad spend test budget of $1,000/month to gather statistical data, test creative variations, and optimize campaign ROAS effectively.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="digimkt_faq6_q"><?php echo esc_html(cr8v_mod('digimkt_faq6_q', 'How do we track our campaign performance?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="digimkt_faq6_a"><?php echo wp_kses_post(cr8v_mod('digimkt_faq6_a', 'We build live Looker Studio / GA4 reporting dashboards showing exact customer acquisition costs (CAC), ad spend, click-through rates (CTR), and return on ad spend (ROAS) updated in real time.')); ?></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     SECTION 11: FOOTER CTA BAR
     Dark #080808
     ══════════════════════════════════════════ -->
<div class="c8isv-cta-section">
  <div class="c8isv-wrap">
    <div class="c8isv-cta-card">
      <span class="c8isv-cta-tag" data-customizer="digimkt_cta_label"><?php echo esc_html(cr8v_mod('digimkt_cta_label', 'READY TO GROW?')); ?></span>
      <h2 class="c8isv-cta-title"><span data-customizer="digimkt_cta_h2_part1"><?php echo esc_html(cr8v_mod('digimkt_cta_h2_part1', 'Let’s Engineer Your Paid ')); ?></span><span class="c8isv-serif" data-customizer="digimkt_cta_h2_serif"><?php echo esc_html(cr8v_mod('digimkt_cta_h2_serif', 'Growth Funnel')); ?></span></h2>
      <p class="c8isv-cta-desc" data-customizer="digimkt_cta_desc"><?php echo wp_kses_post(cr8v_mod('digimkt_cta_desc', 'Tell us about your acquisition targets and get a complete price quote and media plan proposal within 24 hours.')); ?></p>
      <a href="<?php echo esc_url(home_url(cr8v_mod('digimkt_cta_btn_url', '/discovery-call/'))); ?>" class="c8isv-cta-btn" data-customizer="digimkt_cta_btn_text"><?php echo esc_html(cr8v_mod('digimkt_cta_btn_text', 'Book Strategy Call →')); ?></a>
    </div>
  </div>
</div>

</div><!-- /.c8isv-root -->

<?php get_template_part('parts/footer'); ?>

<script>
(function() {
  var root = document.querySelector('.c8isv-root');
  if (!root) return;

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia('(hover: hover)').matches;

  // Reveal elements on load
  var revealEls = root.querySelectorAll('.c8isv-reveal, .c8srv-reveal');
  revealEls.forEach(function(el) { el.classList.add('is-visible'); });

  function getElementProgress(el, startThreshold, endThreshold) {
    if (!el) return 0;
    var rect = el.getBoundingClientRect();
    var vh = window.innerHeight;
    var start = vh * (startThreshold || 0.9);
    var end = vh * (endThreshold || 0.2);
    if (rect.top > start) return 0;
    if (rect.top < end) return 1;
    return (start - rect.top) / (start - end);
  }

  function getCardProgress(el, startThreshold, endThreshold) {
    if (!el) return 0;
    var rect = el.getBoundingClientRect();
    var vh = window.innerHeight;
    var start = vh * (startThreshold || 0.95);
    var end = vh * (endThreshold || 0.5);
    if (rect.top > start) return 0;
    if (rect.top < end) return 1;
    return (start - rect.top) / (start - end);
  }

  var flankContainer = root.querySelector('[data-c8isv-flank-trigger]');
  var flankCards = root.querySelectorAll('.c8isv-flank-card');
  var portfolioCard = root.querySelector('[data-c8isv-portfolio-card]');
  var approachCards = root.querySelectorAll('[data-c8isv-approach-card]');
  var testiGrid = root.querySelector('.c8isv-testi-grid, .c8srv-testimonials-grid, [data-c8isv-testi-trigger]');
  var testiCards = root.querySelectorAll('.c8isv-testi-card, .c8srv-testi-card');
  var testiLeft = root.querySelector('[data-c8isv-testi-left]') || testiCards[0];
  var testiRight = root.querySelector('[data-c8isv-testi-right]') || testiCards[2];

  function handleScrollAnimations() {
    if (reduceMotion) return;

    if (flankContainer && flankCards.length) {
      var rect = flankContainer.getBoundingClientRect();
      var vh = window.innerHeight;
      var start = vh;
      var end = vh * 0.15;
      var p = 0;
      if (rect.top < start) {
        p = (start - rect.top) / (start - end);
        if (p > 1) p = 1;
        if (p < 0) p = 0;
      }

      flankCards.forEach(function(card, i) {
        var localT = Math.min(1, Math.max(0, p * 1.5 - i * 0.16));
        var isMobile = window.innerWidth < 901;
        if (isMobile) {
          var ty = 55 * (1 - localT);
          var spread = (i === 0 ? -35 : (i === 1 ? 0 : 35)) * (1 - localT);
          var rotM = (i === 0 ? -4 : (i === 2 ? 4 : 0)) * (1 - localT);
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

    if (portfolioCard) {
      var p = getElementProgress(portfolioCard, 0.95, 0.3);
      var scale = 0.75 + 0.25 * p;
      portfolioCard.style.transform = 'scale(' + scale + ')';
      portfolioCard.style.opacity = String(0.5 + 0.5 * p);
    }

    if (approachCards.length) {
      approachCards.forEach(function(card, i) {
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

    if (testiGrid && testiLeft && testiRight) {
      var isMobile = window.innerWidth < 901;
      if (isMobile) {
        var pL = getElementProgress(testiLeft, 0.95, 0.3);
        var pR = getElementProgress(testiRight, 0.95, 0.3);
        var txL = -90 * (1 - pL);
        var tyL = 20 * (1 - pL);
        var rotL = -6 * (1 - pL);
        testiLeft.style.transform = 'translate3d(' + txL + 'px, ' + tyL + 'px, 0) rotate(' + rotL + 'deg)';
        testiLeft.style.opacity = String(pL);
        testiLeft.style.pointerEvents = pL > 0.1 ? 'auto' : 'none';

        var txR = 90 * (1 - pR);
        var tyR = 20 * (1 - pR);
        var rotR = 6 * (1 - pR);
        testiRight.style.transform = 'translate3d(' + txR + 'px, ' + tyR + 'px, 0) rotate(' + rotR + 'deg)';
        testiRight.style.opacity = String(pR);
        testiRight.style.pointerEvents = pR > 0.1 ? 'auto' : 'none';
      } else {
        var p = getElementProgress(testiGrid, 0.85, 0.3);
        var tx = p * 340;
        var ty = 15 * (1 - p);
        var rot = p * 8;

        testiLeft.style.transform = 'translate3d(' + (-tx) + 'px, ' + ty + 'px, 0) scale(' + (0.9 + 0.1 * p) + ') rotate(' + (-rot) + 'deg)';
        testiLeft.style.opacity = String(p);
        testiLeft.style.pointerEvents = p > 0.1 ? 'auto' : 'none';

        testiRight.style.transform = 'translate3d(' + tx + 'px, ' + ty + 'px, 0) scale(' + (0.9 + 0.1 * p) + ') rotate(' + rot + 'deg)';
        testiRight.style.opacity = String(p);
        testiRight.style.pointerEvents = p > 0.1 ? 'auto' : 'none';
      }
    }
  }

  window.addEventListener('scroll', handleScrollAnimations, { passive: true });
  window.addEventListener('resize', handleScrollAnimations, { passive: true });
  handleScrollAnimations();

  // Hoverlist 2-Card Fan Cursor Preview
  var hoverlist = root.querySelector('[data-c8isv-hoverlist]');
  var preview = root.querySelector('[data-c8isv-preview]');
  if (hoverlist && preview && canHover && !reduceMotion) {
    var hoverItems = hoverlist.querySelectorAll('.c8isv-hoverlist-item');

    hoverlist.addEventListener('mousemove', function(e) {
      var rect = hoverlist.getBoundingClientRect();
      var x = e.clientX - rect.left;
      var y = e.clientY - rect.top;
      preview.style.left = x + 'px';
      preview.style.top = y + 'px';
    });

    hoverlist.addEventListener('mouseenter', function() {
      preview.classList.add('is-active');
    });

    hoverlist.addEventListener('mouseleave', function() {
      preview.classList.remove('is-active');
    });

    hoverItems.forEach(function(item) {
      item.addEventListener('mouseenter', function() {
        var logo1 = item.getAttribute('data-logo-1');
        var logo2 = item.getAttribute('data-logo-2');
        var fanLeftLogo = preview.querySelector('[data-c8isv-fan-logo="left"]');
        var fanRightLogo = preview.querySelector('[data-c8isv-fan-logo="right"]');

        if (fanLeftLogo && logo1) fanLeftLogo.src = logo1;
        if (fanRightLogo && logo2) fanRightLogo.src = logo2;
      });
    });
  }

  // FAQ Accordion Toggle
  var faqTriggers = root.querySelectorAll('.faq-trigger');
  faqTriggers.forEach(function(trigger) {
    trigger.addEventListener('click', function() {
      var item = trigger.closest('.faq-item');
      var isOpen = item.classList.contains('is-open');
      var allItems = root.querySelectorAll('.faq-item');
      allItems.forEach(function(i) {
        i.classList.remove('is-open');
        var t = i.querySelector('.faq-trigger');
        var b = i.querySelector('.faq-body');
        if (t) t.setAttribute('aria-expanded', 'false');
        if (b) b.style.gridTemplateRows = '0fr';
      });
      if (!isOpen) {
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
        var body = item.querySelector('.faq-body');
        if (body) body.style.gridTemplateRows = '1fr';
      }
    });
  });

  // Scope Estimator Choices Calculation JS
  var estChoices = root.querySelectorAll('.c8srv-est-choice');
  var estRange = document.getElementById('est-range-display');
  var estDeliv = document.getElementById('est-deliverables-list');
  var estLink = document.getElementById('est-cta-link');

  var currentBasePrice = 1000;
  var currentMultiplier = 1.0;
  var currentAddonPrice = 0;
  var currentPlatformCode = 'marketing';

  function updateEstimator() {
    var low = Math.round((currentBasePrice * currentMultiplier) + currentAddonPrice);
    var high = Math.round(low * 1.25);

    if (estRange) estRange.textContent = '$' + low.toLocaleString() + ' - $' + high.toLocaleString();

    if (estDeliv) {
      if (currentPlatformCode === 'retargeting') {
        estDeliv.innerHTML = '<div>• Full omni-channel retargeting engine</div><div>• Custom audience segmentation &amp; dynamic ads</div><div>• sGTM &amp; CAPI server-side event tracking</div>';
      } else if (currentPlatformCode === 'multichannel') {
        estDeliv.innerHTML = '<div>• Google Search &amp; Meta Paid Ad campaigns</div><div>• Landing page CRO copy &amp; ad visual assets</div><div>• Weekly CAC &amp; ROAS reporting dashboard</div>';
      } else {
        estDeliv.innerHTML = '<div>• Multi-channel Funnel Setup</div><div>• Google &amp; Meta Ad campaign wiring</div><div>• Server-side GTM &amp; GA4 conversion tracking</div>';
      }
    }

    if (estLink) {
      estLink.href = '<?php echo esc_url(home_url('/contact/')); ?>?platform=' + currentPlatformCode + '&est=' + low + '-' + high;
    }
  }

  estChoices.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var group = btn.closest('.c8srv-est-choices');
      if (group) {
        group.querySelectorAll('.c8srv-est-choice').forEach(function(b) { b.classList.remove('is-active'); });
      }
      btn.classList.add('is-active');

      if (btn.hasAttribute('data-est-price')) {
        var p = parseInt(btn.getAttribute('data-est-price'), 10);
        if (group && group.getAttribute('data-est-group') === 'platform') {
          currentBasePrice = p;
          currentPlatformCode = btn.getAttribute('data-est-val');
        } else if (group && group.getAttribute('data-est-group') === 'growth') {
          currentAddonPrice = p;
        }
      }
      if (btn.hasAttribute('data-est-multiplier')) {
        currentMultiplier = parseFloat(btn.getAttribute('data-est-multiplier'));
      }

      updateEstimator();
    });
  });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
