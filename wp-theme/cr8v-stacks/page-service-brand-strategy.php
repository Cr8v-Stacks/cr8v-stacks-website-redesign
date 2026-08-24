<?php
/**
 * Template Name: Service — Brand Strategy
 * Description: Brand Strategy Service Page Template with 100% Customizer Control Parity & Exact Layout Parity
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

<!-- SECTION 1: HERO -->
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('brstr_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('brstr_hero_crumb_child', 'BRAND STRATEGY')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="brstr_hero_label"><?php echo esc_html(cr8v_mod('brstr_hero_label', 'Market Positioning & Value Messaging')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="brstr_hero_h1_part1"><?php echo esc_html(cr8v_mod('brstr_hero_h1_part1', 'Strategic Brand ')); ?></span><span class="c8isv-serif" data-customizer="brstr_hero_h1_serif"><?php echo esc_html(cr8v_mod('brstr_hero_h1_serif', 'Positioning & Messaging')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="brstr_hero_intro"><?php echo wp_kses_post(cr8v_mod('brstr_hero_intro', 'Market positioning frameworks, target customer buyer personas, core value proposition messaging, and brand architecture built to command premium pricing.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('brstr_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="brstr_hero_cta1_text"><?php echo esc_html(cr8v_mod('brstr_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('brstr_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="brstr_hero_cta2_text"><?php echo esc_html(cr8v_mod('brstr_hero_cta2_text', 'Get a Strategy Session →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="brstr_hero_pill1"><?php echo esc_html(cr8v_mod('brstr_hero_pill1', 'Market Positioning')); ?></span>
          <span class="c8isv-pill" data-customizer="brstr_hero_pill2"><?php echo esc_html(cr8v_mod('brstr_hero_pill2', 'Value Proposition')); ?></span>
          <span class="c8isv-pill" data-customizer="brstr_hero_pill3"><?php echo esc_html(cr8v_mod('brstr_hero_pill3', 'Buyer Personas')); ?></span>
          <span class="c8isv-pill" data-customizer="brstr_hero_pill4"><?php echo esc_html(cr8v_mod('brstr_hero_pill4', 'Brand Messaging')); ?></span>
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

<!-- SECTION 2: WHY BRAND STRATEGY -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="brstr_flank_label"><?php echo esc_html(cr8v_mod('brstr_flank_label', 'Why Brand Strategy')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="brstr_flank_h2"><?php echo esc_html(cr8v_mod('brstr_flank_h2', 'Defensible Positioning That Drives Margin & Loyalty')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="brstr_flank1_step"><?php echo esc_html(cr8v_mod('brstr_flank1_step', 'Positioning // Edge')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="brstr_flank1_title"><?php echo esc_html(cr8v_mod('brstr_flank1_title', 'Market Positioning Framework')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="brstr_flank1_desc"><?php echo wp_kses_post(cr8v_mod('brstr_flank1_desc', 'Carving out an undefendable market position that separates your business from commoditized competitors.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="brstr_flank2_step"><?php echo esc_html(cr8v_mod('brstr_flank2_step', 'Messaging // Hook')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="brstr_flank2_title"><?php echo esc_html(cr8v_mod('brstr_flank2_title', 'Core Value Proposition Matrix')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="brstr_flank2_desc"><?php echo wp_kses_post(cr8v_mod('brstr_flank2_desc', 'Crafting resonant headlines, sub-headlines, and value statements that convert target decision-makers immediately.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="brstr_flank3_step"><?php echo esc_html(cr8v_mod('brstr_flank3_step', 'Audience // Persona')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="brstr_flank3_title"><?php echo esc_html(cr8v_mod('brstr_flank3_title', 'Ideal Customer Profile (ICP) Mapping')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="brstr_flank3_desc"><?php echo wp_kses_post(cr8v_mod('brstr_flank3_desc', 'Mapping key buyer pain points, objections, and buying triggers across your primary customer segments.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="brstr_flank4_step"><?php echo esc_html(cr8v_mod('brstr_flank4_step', 'Architecture // Scale')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="brstr_flank4_title"><?php echo esc_html(cr8v_mod('brstr_flank4_title', 'Brand Architecture & Extension')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="brstr_flank4_desc"><?php echo wp_kses_post(cr8v_mod('brstr_flank4_desc', 'Structuring parent and sub-brand relationships for sub-services, product tiers, and market expansions.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 3: OUR WORK -->
<div class="c8isv-portfolio-outer">
  <div class="c8isv-portfolio-inner">
    <div class="c8isv-portfolio-head">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="brstr_port_label"><?php echo esc_html(cr8v_mod('brstr_port_label', 'Our Work')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="brstr_port_h2_part1"><?php echo esc_html(cr8v_mod('brstr_port_h2_part1', 'Built for Real Outcomes, ')); ?></span><br><span class="c8isv-serif" data-customizer="brstr_port_h2_serif"><?php echo esc_html(cr8v_mod('brstr_port_h2_serif', 'Not Just Concepts')); ?></span></h2>
    </div>
    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-img">
        <img src="<?php echo esc_url(cr8v_mod('brstr_port_img', 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop')); ?>" alt="Mkenny Strategy — built by Cr8v Stacks" data-customizer="brstr_port_img">
      </div>
      <div class="c8isv-portfolio-info">
        <span class="c8isv-portfolio-client" data-customizer="brstr_port_client"><?php echo esc_html(cr8v_mod('brstr_port_client', 'Case Study — Mkenny Real Estate')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="brstr_port_title"><?php echo esc_html(cr8v_mod('brstr_port_title', 'Market Positioning Architecture & Brand Messaging Matrix')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="brstr_port_desc"><?php echo wp_kses_post(cr8v_mod('brstr_port_desc', 'Mkenny needed to reposition their commercial advisory firm to target high-net-worth institutional investors. We built a complete brand strategy framework, value proposition matrix, and pitch book.')); ?></p>
        <div class="c8isv-portfolio-stats">
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="brstr_port_stat1_val"><?php echo esc_html(cr8v_mod('brstr_port_stat1_val', '3.5x')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="brstr_port_stat1_lbl"><?php echo esc_html(cr8v_mod('brstr_port_stat1_lbl', 'Increase in Deal Size Intake')); ?></span>
          </div>
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="brstr_port_stat2_val"><?php echo esc_html(cr8v_mod('brstr_port_stat2_val', '98%')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="brstr_port_stat2_lbl"><?php echo esc_html(cr8v_mod('brstr_port_stat2_lbl', 'Sales Team Messaging Alignment')); ?></span>
          </div>
        </div>
        <div class="c8isv-portfolio-deliverables">
          <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
          <div class="c8isv-portfolio-pills">
            <span class="c8isv-portfolio-pill">Market Positioning Blueprint</span>
            <span class="c8isv-portfolio-pill">ICP Buyer Persona Matrix</span>
            <span class="c8isv-portfolio-pill">Value Proposition Copy</span>
            <span class="c8isv-portfolio-pill">Brand Architecture Blueprint</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url(cr8v_mod('brstr_port_btn_url', '/case-studies/mkenny-real-estate/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="brstr_port_btn_text"><?php echo esc_html(cr8v_mod('brstr_port_btn_text', 'View Case Study →')); ?></a>
      </div>
    </div>
    <div class="c8isv-portfolio-footer">
      <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8isv-explore">See All Projects →</a>
    </div>
  </div>
</div>

<!-- SECTION 4: WHAT YOU GET -->
<div class="c8srv-folder-section" id="c8isv-services">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="brstr_folder_label"><?php echo esc_html(cr8v_mod('brstr_folder_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="brstr_folder_h2_part1"><?php echo esc_html(cr8v_mod('brstr_folder_h2_part1', 'Every layer of your brand strategy, ')); ?></span><span class="c8isv-serif" data-customizer="brstr_folder_h2_serif"><?php echo esc_html(cr8v_mod('brstr_folder_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="brstr_folder_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder_desc', 'Market positioning documents, target customer buyer personas, core value messaging scripts, and sales alignment guides.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="brstr_folder1_tab"><?php echo esc_html(cr8v_mod('brstr_folder1_tab', '01 // Positioning')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="brstr_folder1_title"><?php echo esc_html(cr8v_mod('brstr_folder1_title', 'Market Positioning Framework')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="brstr_folder1_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder1_desc', 'Comprehensive competitive audit establishing your brand’s category claim and unique market stance.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss market positioning →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="brstr_folder1_img">
            <img src="<?php echo esc_url(cr8v_mod('brstr_folder1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_deck_positioning.webp')); ?>" alt="Market Positioning Framework" data-customizer="brstr_folder1_img">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="brstr_folder2_tab"><?php echo esc_html(cr8v_mod('brstr_folder2_tab', '02 // Personas')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="brstr_folder2_title"><?php echo esc_html(cr8v_mod('brstr_folder2_title', 'Ideal Customer Profile (ICP) Guide')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="brstr_folder2_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder2_desc', 'Detailed buyer persona profiles mapping key pain points, decision criteria, and objection handling.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss buyer personas →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="brstr_folder2_img">
            <img src="<?php echo esc_url(cr8v_mod('brstr_folder2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_deck_personas.webp')); ?>" alt="Ideal Customer Profile (ICP) Guide" data-customizer="brstr_folder2_img">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="brstr_folder3_tab"><?php echo esc_html(cr8v_mod('brstr_folder3_tab', '03 // Messaging')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="brstr_folder3_title"><?php echo esc_html(cr8v_mod('brstr_folder3_title', 'Core Value Messaging Matrix')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="brstr_folder3_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder3_desc', 'Structured headlines, sub-headlines, elevator pitches, and brand narrative scripts for marketing copy.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss value messaging →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="brstr_folder3_img">
            <img src="<?php echo esc_url(cr8v_mod('brstr_folder3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_deck_messaging.webp')); ?>" alt="Core Value Messaging Matrix" data-customizer="brstr_folder3_img">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="brstr_folder4_tab"><?php echo esc_html(cr8v_mod('brstr_folder4_tab', '04 // Architecture')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="brstr_folder4_title"><?php echo esc_html(cr8v_mod('brstr_folder4_title', 'Brand Portfolio Architecture')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="brstr_folder4_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder4_desc', 'Mapping product naming conventions, sub-brand structures, and service tier hierarchies.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss brand architecture →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="brstr_folder4_img">
            <img src="<?php echo esc_url(cr8v_mod('brstr_folder4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_deck_architecture.webp')); ?>" alt="Brand Portfolio Architecture" data-customizer="brstr_folder4_img">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="brstr_folder5_tab"><?php echo esc_html(cr8v_mod('brstr_folder5_tab', '05 // Sales')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="brstr_folder5_title"><?php echo esc_html(cr8v_mod('brstr_folder5_title', 'Sales Enablement & Pitch Messaging')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="brstr_folder5_desc"><?php echo wp_kses_post(cr8v_mod('brstr_folder5_desc', 'Aligning sales pitch decks, email outreach sequences, and proposal templates with brand strategy.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss sales enablement →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="brstr_folder5_img">
            <img src="<?php echo esc_url(cr8v_mod('brstr_folder5_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_deck_sales.webp')); ?>" alt="Sales Enablement & Pitch Messaging" data-customizer="brstr_folder5_img">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 5: HOW WE APPROACH IT -->
<div class="c8isv-approach-outer">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="brstr_app_label"><?php echo esc_html(cr8v_mod('brstr_app_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="brstr_app_h2"><?php echo esc_html(cr8v_mod('brstr_app_h2', 'How We Approach Brand Strategy Engineering')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="brstr_app_sub"><?php echo wp_kses_post(cr8v_mod('brstr_app_sub', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="brstr_app1_num"><?php echo esc_html(cr8v_mod('brstr_app1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="brstr_app1_name"><?php echo esc_html(cr8v_mod('brstr_app1_name', 'Audit')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="brstr_app1_tags"><?php echo wp_kses_post(cr8v_mod('brstr_app1_tags', 'Competitors &middot; Customers &middot;<br>Interviews')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="brstr_app1_desc"><?php echo wp_kses_post(cr8v_mod('brstr_app1_desc', 'We interview stakeholders, analyze competitor marketing claims, and survey customer buying signals.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="brstr_app1_img">
          <img src="<?php echo esc_url(cr8v_mod('brstr_app1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_proc_audit.webp')); ?>" alt="Audit stage" data-customizer="brstr_app1_img">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="brstr_app2_num"><?php echo esc_html(cr8v_mod('brstr_app2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="brstr_app2_name"><?php echo esc_html(cr8v_mod('brstr_app2_name', 'Positioning')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="brstr_app2_tags"><?php echo wp_kses_post(cr8v_mod('brstr_app2_tags', 'Category Claim &middot; Edge &middot;<br>ICP')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="brstr_app2_desc"><?php echo wp_kses_post(cr8v_mod('brstr_app2_desc', 'We define your primary brand category claim and construct ideal buyer profile personas.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="brstr_app2_img">
          <img src="<?php echo esc_url(cr8v_mod('brstr_app2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_proc_positioning.webp')); ?>" alt="Positioning stage" data-customizer="brstr_app2_img">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="brstr_app3_num"><?php echo esc_html(cr8v_mod('brstr_app3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="brstr_app3_name"><?php echo esc_html(cr8v_mod('brstr_app3_name', 'Messaging')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="brstr_app3_tags"><?php echo wp_kses_post(cr8v_mod('brstr_app3_tags', 'Headlines &middot; Elevator Pitch &middot;<br>Copy Rules')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="brstr_app3_desc"><?php echo wp_kses_post(cr8v_mod('brstr_app3_desc', 'We write the master brand messaging matrix including web headlines, value statements, and elevator copy.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="brstr_app3_img">
          <img src="<?php echo esc_url(cr8v_mod('brstr_app3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_proc_messaging.webp')); ?>" alt="Messaging stage" data-customizer="brstr_app3_img">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="brstr_app4_num"><?php echo esc_html(cr8v_mod('brstr_app4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="brstr_app4_name"><?php echo esc_html(cr8v_mod('brstr_app4_name', 'Alignment')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="brstr_app4_tags"><?php echo wp_kses_post(cr8v_mod('brstr_app4_tags', 'Sales Deck &middot; Web Spec &middot;<br>Implementation')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="brstr_app4_desc"><?php echo wp_kses_post(cr8v_mod('brstr_app4_desc', 'We deliver the master strategy blueprint and run alignment workshops with your sales and marketing leads.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="brstr_app4_img">
          <img src="<?php echo esc_url(cr8v_mod('brstr_app4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_brstr_proc_alignment.webp')); ?>" alt="Alignment stage" data-customizer="brstr_app4_img">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 5.5: OPTIONS -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="brstr_plat_label"><?php echo esc_html(cr8v_mod('brstr_plat_label', 'Strategy Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="brstr_plat_h2_part1"><?php echo esc_html(cr8v_mod('brstr_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="brstr_plat_h2_serif"><?php echo esc_html(cr8v_mod('brstr_plat_h2_serif', 'Strategy Package')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;">Whether you need a positioning audit, a messaging matrix, or an enterprise brand strategy transformation:</p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="brstr_plat1_badge"><?php echo esc_html(cr8v_mod('brstr_plat1_badge', 'Stack // Sprint')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="brstr_plat1_title"><?php echo esc_html(cr8v_mod('brstr_plat1_title', 'Brand Positioning Sprint')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="brstr_plat1_desc"><?php echo wp_kses_post(cr8v_mod('brstr_plat1_desc', 'For growing companies needing to establish a clear category claim and primary value proposition.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="brstr_plat2_badge"><?php echo esc_html(cr8v_mod('brstr_plat2_badge', 'Stack // Messaging')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="brstr_plat2_title"><?php echo esc_html(cr8v_mod('brstr_plat2_title', 'Value Messaging & Persona Matrix')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="brstr_plat2_desc"><?php echo wp_kses_post(cr8v_mod('brstr_plat2_desc', 'For sales and marketing teams needing aligned messaging scripts across target customer segments.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="brstr_plat3_badge"><?php echo esc_html(cr8v_mod('brstr_plat3_badge', 'Stack // Enterprise')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="brstr_plat3_title"><?php echo esc_html(cr8v_mod('brstr_plat3_title', 'Enterprise Strategy & Architecture')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="brstr_plat3_desc"><?php echo wp_kses_post(cr8v_mod('brstr_plat3_desc', 'Complete brand strategy blueprint, portfolio architecture, and sales pitch deck alignment.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="brstr_plat4_badge"><?php echo esc_html(cr8v_mod('brstr_plat4_badge', 'Stack // Retainer')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="brstr_plat4_title"><?php echo esc_html(cr8v_mod('brstr_plat4_title', 'Fractional CMO Strategy Retainer')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="brstr_plat4_desc"><?php echo wp_kses_post(cr8v_mod('brstr_plat4_desc', 'Ongoing executive brand advisory, sales deck alignment, and campaign messaging reviews.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;">
      <strong>Ready to clarify your brand positioning?</strong> Schedule a brand strategy call to review your target market and value proposition.
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">Start a Strategy Scoping Call →</a>
    </div>
  </div>
</div>

<!-- SECTION 6: CATALOG HOVERLIST -->
<div class="c8isv-hl-section" id="c8isv-catalog">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="brstr_hl_label"><?php echo esc_html(cr8v_mod('brstr_hl_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="brstr_hl_h2"><?php echo esc_html(cr8v_mod('brstr_hl_h2', 'Every Kind of Strategy We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="brstr_hl_sub"><?php echo wp_kses_post(cr8v_mod('brstr_hl_sub', 'From market positioning frameworks to sales pitch enablement — hover to inspect deliverables.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Market Analysis" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/w3c.svg" data-tech-2="Figma" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl1_title"><?php echo esc_html(cr8v_mod('brstr_hl1_title', 'Market Positioning & Category Claims')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl1_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl1_tagline', 'Establishing an undefendable market position that separates your business from competitors.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Positioning</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Markdown" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/markdown.svg" data-tech-2="Notion" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/notion.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl2_title"><?php echo esc_html(cr8v_mod('brstr_hl2_title', 'Value Proposition & Copy Matrix')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl2_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl2_tagline', 'Crafting resonant headlines, sub-headlines, and website copywriting frameworks.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Value Matrix</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="Notion" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/notion.svg" data-tech-2="Figma" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl3_title"><?php echo esc_html(cr8v_mod('brstr_hl3_title', 'Ideal Customer Profile (ICP) Mapping')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl3_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl3_tagline', 'Detailed buyer personas mapping pain points, buying triggers, and objection responses.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Buyer Personas</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="Figma" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg" data-tech-2="W3C" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/w3c.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl4_title"><?php echo esc_html(cr8v_mod('brstr_hl4_title', 'Brand Architecture & Sub-Brands')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl4_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl4_tagline', 'Structuring multi-product portfolios and sub-service tiers for corporate expansion.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Architecture</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="PowerPoint" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/microsoftpowerpoint.svg" data-tech-2="Figma" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl5_title"><?php echo esc_html(cr8v_mod('brstr_hl5_title', 'Sales Pitch Deck Alignment')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl5_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl5_tagline', 'Aligning sales presentation decks and proposal messaging with core brand strategy.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Pitch Decks</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Notion" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/notion.svg" data-tech-2="Markdown" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/markdown.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="brstr_hl6_title"><?php echo esc_html(cr8v_mod('brstr_hl6_title', 'Brand Narrative & Storytelling')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="brstr_hl6_tagline"><?php echo wp_kses_post(cr8v_mod('brstr_hl6_tagline', 'Crafting compelling origin stories, mission statements, and executive team bios.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Brand Story</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/notion.svg" alt="Notion"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/figma.svg" alt="Figma"></div>
    </div>
  </div>
</div>

<!-- SECTION 8: CLIENT FEEDBACK -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="brstr_testi_label"><?php echo esc_html(cr8v_mod('brstr_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="brstr_testi_h2_part1"><?php echo esc_html(cr8v_mod('brstr_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="brstr_testi_h2_serif"><?php echo esc_html(cr8v_mod('brstr_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="brstr_testi1_text"><?php echo wp_kses_post(cr8v_mod('brstr_testi1_text', 'The brand strategy positioning matrix transformed our sales conversations. We immediately started winning deal sizes 3.5x larger than before.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="brstr_testi1_author"><?php echo esc_html(cr8v_mod('brstr_testi1_author', 'Patrick Kenny — Managing Director, Mkenny')); ?></div>
      </div>
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="brstr_testi2_text"><?php echo wp_kses_post(cr8v_mod('brstr_testi2_text', 'Cr8v Stacks brought sharp clarity to our value proposition. Our website bounce rate dropped significantly as visitors instantly got what we do.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="brstr_testi2_author"><?php echo esc_html(cr8v_mod('brstr_testi2_author', 'Elena Rostova — Chief Commercial Officer')); ?></div>
      </div>
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="brstr_testi3_text"><?php echo wp_kses_post(cr8v_mod('brstr_testi3_text', 'The ICP buyer persona guide gave our entire sales team identical objection scripts. Flawless strategic execution.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="brstr_testi3_author"><?php echo esc_html(cr8v_mod('brstr_testi3_author', 'David Sterling — Executive VP')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 9: PRICING MODELS & ESTIMATOR -->
<div class="c8srv-pricing-section" id="pricing-scope">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="brstr_pricing_label"><?php echo esc_html(cr8v_mod('brstr_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="brstr_pricing_h2_part1"><?php echo esc_html(cr8v_mod('brstr_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="brstr_pricing_h2_serif"><?php echo esc_html(cr8v_mod('brstr_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="brstr_pricing_desc"><?php echo wp_kses_post(cr8v_mod('brstr_pricing_desc', 'Whether you need an ongoing monthly strategic CMO advisor or a custom brand positioning sprint with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Ongoing Support</span>
          <h3 class="c8srv-price-title">Growth Retainer</h3>
          <div class="c8srv-price-amount">$950<span>/mo</span></div>
        </div>
        <p class="c8srv-price-desc">A monthly block of dedicated senior brand strategy hours for campaign messaging reviews, sales pitch deck alignment, and executive positioning advisory.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dedicated monthly brand strategy advisory hours</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Sales pitch deck &amp; proposal alignment</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Quarterly positioning reviews &amp; messaging tweaks</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light">Secure Retainer Slot</a>
      </div>

      <div class="c8srv-price-box is-highlight c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Fixed Scope</span>
          <h3 class="c8srv-price-title">Fixed Projects</h3>
          <div class="c8srv-price-amount">From $1,500<span> entry</span></div>
        </div>
        <p class="c8srv-price-desc">A deep, focused brand strategy sprint delivering positioning blueprints, buyer persona guides, and value proposition matrices.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Market positioning &amp; category claim blueprint</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Ideal Customer Profile (ICP) buyer persona guide</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Core value messaging matrix &amp; website copy rules</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=project')); ?>" class="c8srv-price-btn is-primary">Start A Project</a>
      </div>
    </div>

    <div class="c8srv-estimator c8srv-reveal">
      <div style="margin-bottom: 2.5rem !important;">
        <span class="c8srv-price-type">Project Scope Estimator</span>
        <h3 class="c8srv-price-title" style="font-size: 1.8rem !important; margin-bottom: 0.5rem !important;">Build Your Stack Estimate</h3>
        <p class="c8srv-price-desc" style="margin-bottom: 0 !important; margin-left: auto !important; margin-right: auto !important;">Select your desired setup below to calculate an immediate starting price range estimate for your project.</p>
      </div>

      <div class="c8srv-estimator-grid">
        <div class="c8srv-est-options">
          <div>
            <span class="c8srv-est-group-title">1. Primary Strategy Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="sprint" data-est-price="1500">Brand Positioning Sprint ($1,500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="messaging" data-est-price="2200">Value Messaging &amp; ICP Matrix ($2,200)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="enterprise" data-est-price="3000">Enterprise Brand Strategy ($3,000)</button>
            </div>
          </div>

          <div>
            <span class="c8srv-est-group-title">2. Portfolio Complexity</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="single" data-est-multiplier="1.0">Single Product / Service Brand</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multi" data-est-multiplier="1.35">Multi-Product Portfolio Architecture</button>
            </div>
          </div>

          <div>
            <span class="c8srv-est-group-title">3. Strategy Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="pitch" data-est-price="500">Sales Pitch Deck Scripting (+ $500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="workshop" data-est-price="600">Executive Team Alignment Workshop (+ $600)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display">$1,500 - $1,875</div>
          
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Market positioning &amp; category claim document</div><div>• Ideal Customer Profile (ICP) buyer persona guide</div><div>• Core value messaging matrix for website copy</div></div>

          <a href="<?php echo esc_url(home_url('/contact/?platform=brandstrategy&est=1500-1875')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
          <a href="<?php echo esc_url(home_url('/toolkits/website-cost-calculator/')); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 10: FAQ -->
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
    .faq-icon svg { transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important; }
    .faq-item.is-open .faq-icon { background: #0047E1 !important; border-color: #0047E1 !important; }
    .faq-item.is-open .faq-icon svg { transform: rotate(45deg) !important; stroke: #ffffff !important; }
    .faq-body { display: grid !important; grid-template-rows: 0fr !important; transition: grid-template-rows 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important; }
    .faq-item.is-open .faq-body { grid-template-rows: 1fr !important; }
    .faq-body-inner { overflow: hidden !important; }
    .faq-a { font-family: 'DM Sans', sans-serif !important; font-size: 0.88rem !important; font-weight: 300 !important; line-height: 1.75 !important; color: #555555 !important; padding-bottom: 1.4rem !important; }
    @media (max-width: 900px) {
      .faq-inner { grid-template-columns: 1fr !important; gap: 2.5rem !important; }
      .faq-aside { position: static !important; }
    }
  </style>

  <div class="faq-inner">
    <div class="faq-aside">
      <div class="faq-eyebrow" data-customizer="brstr_faq_eyebrow"><?php echo esc_html(cr8v_mod('brstr_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
      <h2 class="faq-h2" data-customizer="brstr_faq_h2"><?php echo esc_html(cr8v_mod('brstr_faq_h2', 'Brand Strategy FAQ')); ?></h2>
      <p class="faq-sub" data-customizer="brstr_faq_sub"><?php echo wp_kses_post(cr8v_mod('brstr_faq_sub', 'Clear answers to common questions about our market positioning frameworks, buyer persona mapping, and value messaging sprints.')); ?></p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
    </div>

    <ul class="faq-list" id="srv-faq-list">
      <li class="faq-item is-open">
        <button class="faq-trigger" aria-expanded="true">
          <span class="faq-q" data-customizer="brstr_faq1_q"><?php echo esc_html(cr8v_mod('brstr_faq1_q', 'Why do I need a formal Brand Strategy before designing a website or logo?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body" style="grid-template-rows: 1fr;">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq1_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq1_a', 'Designing a website or logo without a brand strategy is like building a house without blueprints. Strategy defines WHO your target customer is, WHAT unique value you provide, and WHY they should choose you over competitors.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="brstr_faq2_q"><?php echo esc_html(cr8v_mod('brstr_faq2_q', 'What is included in the Core Value Messaging Matrix?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq2_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq2_a', 'The Value Messaging Matrix includes primary brand headlines, sub-headlines, elevator pitch scripts, feature benefit translations, and objection response copy tailored for website landing pages and sales presentations.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="brstr_faq3_q"><?php echo esc_html(cr8v_mod('brstr_faq3_q', 'How do you determine our market positioning edge?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq3_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq3_a', 'We analyze competitor marketing claims, conduct stakeholder discovery interviews, and identify underserved customer needs to establish a distinct category claim your brand can own exclusively.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="brstr_faq4_q"><?php echo esc_html(cr8v_mod('brstr_faq4_q', 'How does brand strategy impact sales conversions?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq4_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq4_a', 'Clear positioning eliminates customer confusion, aligns sales pitch decks, and gives buyers immediate clarity on why your product is worth premium pricing.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="brstr_faq5_q"><?php echo esc_html(cr8v_mod('brstr_faq5_q', 'How long does a Brand Strategy project take?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq5_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq5_a', 'A standard Brand Strategy sprint takes approximately 2 to 3 weeks from discovery interviews to master blueprint delivery and team alignment workshop.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="brstr_faq6_q"><?php echo esc_html(cr8v_mod('brstr_faq6_q', 'Do you provide Fractional CMO advisory retainers?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="brstr_faq6_a"><?php echo wp_kses_post(cr8v_mod('brstr_faq6_a', 'Yes. We offer monthly executive retainers for ongoing campaign review, pitch deck alignment, and positioning updates as your business scales.')); ?></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- SECTION 11: RELATED SERVICES -->
<div class="c8isv-related-outer">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal is-muted">Other Ways We Build</div>
    <h2 class="c8isv-section-title c8isv-reveal">Related Services</h2>
    <p class="c8isv-lead c8isv-reveal">Brand Strategy is one of several services we offer. If positioning and value messaging is not what you need, check these out.</p>
    <div class="c8isv-related-grid">
      <a href="<?php echo esc_url(home_url('/brand-identity/')); ?>" class="c8isv-related-card c8isv-reveal">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">01 / Identity</span>
        <h3 class="c8isv-related-card-title">Brand Identity Design</h3>
        <p class="c8isv-related-card-desc">Vector logomarks, typography rules, color palette tokens, and PDF brand guide books built for visual recognition.</p>
        <span class="c8isv-related-card-link">Explore Identity →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/digital-marketing/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
        </div>
        <span class="c8isv-related-card-platform">02 / Marketing</span>
        <h3 class="c8isv-related-card-title">Digital &amp; Search Marketing</h3>
        <p class="c8isv-related-card-desc">Technical search engine optimization, content clusters, and conversion rate optimization (CRO) to drive organic growth.</p>
        <span class="c8isv-related-card-link">Explore Marketing →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/custom-dev/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <span class="c8isv-related-card-platform">03 / Custom Dev</span>
        <h3 class="c8isv-related-card-title">Custom Development</h3>
        <p class="c8isv-related-card-desc">Full-stack web applications, client portals, and administrative dashboards built precisely from scratch using React and Node.js.</p>
        <span class="c8isv-related-card-link">Explore Custom Dev →</span>
      </a>
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

  function updateFolderStack() {
    var cards = root.querySelectorAll('.c8srv-folder-card');
    if (!cards.length) return;
    if (reduceMotion) {
      cards.forEach(function(c) {
        c.style.setProperty('transform', 'none', 'important');
        c.style.setProperty('filter', 'none', 'important');
      });
      return;
    }
    var isMobile = window.innerWidth < 900;
    var limit = isMobile ? 101 : 131;
    cards.forEach(function(card, i) {
      var rect = card.getBoundingClientRect();
      if (rect.top <= limit + 4) {
        var stackedAfter = 0;
        for (var j = i + 1; j < cards.length; j++) {
          var nextRect = cards[j].getBoundingClientRect();
          if (nextRect.top <= limit + 4) stackedAfter++;
        }
        var scale = 1 - (stackedAfter * 0.03);
        var lift = stackedAfter * -8;
        card.style.setProperty('transform', 'scale(' + scale + ') translate3d(0,' + lift + 'px,0)', 'important');
        card.style.setProperty('filter', 'brightness(' + (1 - (stackedAfter * 0.05)) + ')', 'important');
      } else {
        card.style.setProperty('transform', 'none', 'important');
        card.style.setProperty('filter', 'none', 'important');
      }
    });
  }
  window.addEventListener('scroll', updateFolderStack, { passive: true });
  window.addEventListener('resize', updateFolderStack);
  updateFolderStack();

  var choices = root.querySelectorAll('.c8srv-est-choice');
  var rangeDisplay = root.querySelector('#est-range-display');
  var deliverablesList = root.querySelector('#est-deliverables-list');
  var estCta = root.querySelector('#est-cta-link');

  var platformBases = {
    sprint: { price: 1500, deliverables: ["Market Positioning Framework Blueprint", "Category Claim Definition & Competitor Matrix", "Primary Value Proposition Statements"] },
    messaging: { price: 2200, deliverables: ["Ideal Customer Profile (ICP) Persona Guide", "Core Value Messaging Matrix for Copywriting", "Sales Pitch Deck Scripting Alignment"] },
    enterprise: { price: 3000, deliverables: ["Enterprise Brand Strategy Blueprint", "Multi-Product Portfolio Brand Architecture", "Executive Alignment Workshop & Handoff"] }
  };

  var estimatorAddons = {
    none: { price: 0, deliverables: [] },
    pitch: { price: 500, deliverables: ['Sales Pitch Deck Copy & Slide Design Alignment'] },
    workshop: { price: 600, deliverables: ['Executive Team Alignment Strategy Workshop'] }
  };

  var scaleDescriptions = {
    single: 'Single product / service brand',
    multi: 'Multi-product portfolio brand architecture'
  };

  function updateEstimate() {
    var activePlatformBtn = root.querySelector('[data-est-group="platform"] .c8srv-est-choice.is-active') || choices[0];
    var activeScaleBtn = root.querySelector('[data-est-group="scale"] .c8srv-est-choice.is-active');
    var activeGrowthBtn = root.querySelector('[data-est-group="growth"] .c8srv-est-choice.is-active');

    var platformVal = activePlatformBtn ? activePlatformBtn.getAttribute('data-est-val') : 'sprint';
    var basePrice = platformBases[platformVal] ? platformBases[platformVal].price : 1500;
    var scaleMult = activeScaleBtn ? parseFloat(activeScaleBtn.getAttribute('data-est-multiplier')) || 1.0 : 1.0;
    var scaleVal = activeScaleBtn ? activeScaleBtn.getAttribute('data-est-val') || 'single' : 'single';
    var growthVal = activeGrowthBtn ? activeGrowthBtn.getAttribute('data-est-val') || 'none' : 'none';
    var growthPrice = estimatorAddons[growthVal] ? estimatorAddons[growthVal].price : 0;

    var startPrice = Math.round(basePrice * scaleMult + growthPrice);
    var endPrice = Math.round(startPrice * 1.25);

    if (rangeDisplay) rangeDisplay.textContent = '$' + startPrice.toLocaleString() + ' - $' + endPrice.toLocaleString();

    if (deliverablesList) {
      deliverablesList.innerHTML = '';
      if (platformBases[platformVal] && platformBases[platformVal].deliverables) {
        platformBases[platformVal].deliverables.forEach(function (d) {
          var item = document.createElement('div');
          item.textContent = '• ' + d;
          deliverablesList.appendChild(item);
        });
      }

      if (scaleDescriptions[scaleVal]) {
        var scaleItem = document.createElement('div');
        scaleItem.style.color = '#0047E1';
        scaleItem.style.fontWeight = '600';
        scaleItem.textContent = '• Scope Tier: ' + scaleDescriptions[scaleVal];
        deliverablesList.appendChild(scaleItem);
      }

      if (estimatorAddons[growthVal] && estimatorAddons[growthVal].deliverables) {
        estimatorAddons[growthVal].deliverables.forEach(function (d) {
          var item = document.createElement('div');
          item.textContent = '• ' + d;
          deliverablesList.appendChild(item);
        });
      }
    }

    if (estCta) {
      estCta.href = "<?php echo esc_url(home_url('/contact/')); ?>?platform=" + platformVal + "&est=" + startPrice + "-" + endPrice;
    }
  }

  choices.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var group = btn.closest('[data-est-group]');
      if (group) {
        group.querySelectorAll('.c8srv-est-choice').forEach(function (b) { b.classList.remove('is-active'); });
        btn.classList.add('is-active');
      }
      updateEstimate();
    });
  });
  updateEstimate();

  /* ── Live Matrix Text Scramble Script ── */
  var srvMatrixButtons = root.querySelectorAll('.c8-btn-primary, .c8isv-btn-primary, .c8srv-btn-primary, .c8srv-price-btn, .c8isv-price-btn, .c8srv-explore, .c8isv-explore, .c8isv-btn-ghost, .c8srv-btn-ghost, .faq-cta-link, .c8srv-vs-priority-btn, .c8isv-related-card-link, .c8srv-related-card-link, .c8isv-cta-btn');
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

<?php wp_footer(); ?>
</body>
</html>
