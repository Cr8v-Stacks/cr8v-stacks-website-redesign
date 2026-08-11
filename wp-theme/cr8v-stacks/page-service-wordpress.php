<?php
/**
 * Template Name: Service — WordPress Development
 * Description: WordPress Development Service Page Template with 100% Customizer Control Parity
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
  }
  .faq-cta-link svg {
    stroke: #FFFFFF !important;
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('wpdev_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('wpdev_hero_crumb_child', 'WORDPRESS DEVELOPMENT')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="wpdev_hero_label"><?php echo esc_html(cr8v_mod('wpdev_hero_label', 'Custom WordPress Architecture & Theme Engineering')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="wpdev_hero_h1_part1"><?php echo esc_html(cr8v_mod('wpdev_hero_h1_part1', 'Bespoke WordPress ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_hero_h1_serif"><?php echo esc_html(cr8v_mod('wpdev_hero_h1_serif', 'Themes & Speed')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="wpdev_hero_intro"><?php echo wp_kses_post(cr8v_mod('wpdev_hero_intro', 'Bloat-stripped custom WordPress websites engineered for sub-second page loads, clean organic search visibility, and complete editing autonomy for your team.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('wpdev_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="wpdev_hero_cta1_text"><?php echo esc_html(cr8v_mod('wpdev_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('wpdev_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="wpdev_hero_cta2_text"><?php echo esc_html(cr8v_mod('wpdev_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="wpdev_hero_pill1"><?php echo esc_html(cr8v_mod('wpdev_hero_pill1', 'WordPress')); ?></span>
          <span class="c8isv-pill" data-customizer="wpdev_hero_pill2"><?php echo esc_html(cr8v_mod('wpdev_hero_pill2', 'Elementor')); ?></span>
          <span class="c8isv-pill" data-customizer="wpdev_hero_pill3"><?php echo esc_html(cr8v_mod('wpdev_hero_pill3', 'Gutenberg')); ?></span>
          <span class="c8isv-pill" data-customizer="wpdev_hero_pill4"><?php echo esc_html(cr8v_mod('wpdev_hero_pill4', 'SEO')); ?></span>
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
     SECTION 2: WHY CUSTOM WORDPRESS (Flank Cards Stack)
     Light #F4F6FB
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="wpdev_flank_label"><?php echo esc_html(cr8v_mod('wpdev_flank_label', 'Why Custom WordPress')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wpdev_flank_h2"><?php echo esc_html(cr8v_mod('wpdev_flank_h2', 'WordPress Websites Built For Editing Freedom & Performance')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wpdev_flank1_step"><?php echo esc_html(cr8v_mod('wpdev_flank1_step', 'Editing // Freedom')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wpdev_flank1_title"><?php echo esc_html(cr8v_mod('wpdev_flank1_title', 'Intuitive Page Building')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wpdev_flank1_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_flank1_desc', 'Elementor Pro or Gutenberg layouts for complete visual editing freedom without breaking your site.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wpdev_flank2_step"><?php echo esc_html(cr8v_mod('wpdev_flank2_step', 'Control // 100% Data')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wpdev_flank2_title"><?php echo esc_html(cr8v_mod('wpdev_flank2_title', '100% Content & Data Control')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wpdev_flank2_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_flank2_desc', 'Self-hosted platform independence saving you from monthly platform subscription taxes.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wpdev_flank3_step"><?php echo esc_html(cr8v_mod('wpdev_flank3_step', 'SEO // Built-In')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wpdev_flank3_title"><?php echo esc_html(cr8v_mod('wpdev_flank3_title', 'Built-In SEO Foundations')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wpdev_flank3_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_flank3_desc', 'Clean schema markup, responsive mobile-first typography, and fast page speeds for organic ranking.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 3: PORTFOLIO SPOTLIGHT ZOOM CARD
     Dark #080808
     ══════════════════════════════════════════ -->
<div class="c8isv-portfolio-section">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal is-light" data-customizer="wpdev_work_label"><?php echo esc_html(cr8v_mod('wpdev_work_label', 'FEATURED WORK Spotlight')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal is-light"><span data-customizer="wpdev_work_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_work_h2_part1', 'Engineering The ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_work_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_work_h2_serif', 'Publishion Platform')); ?></span></h2>

    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-media">
        <img src="<?php echo esc_url(cr8v_mod('wpdev_work_cs_img', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop')); ?>" alt="WP Publishion AI Platform" data-customizer="wpdev_work_cs_img">
      </div>
      <div class="c8isv-portfolio-content">
        <span class="c8isv-portfolio-tag" data-customizer="wpdev_work_cs_tag"><?php echo esc_html(cr8v_mod('wpdev_work_cs_tag', 'WP PUBLISHION AI // CUSTOM THEME & PLUGIN ENGINE')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="wpdev_work_cs_title"><?php echo esc_html(cr8v_mod('wpdev_work_cs_title', 'WP Publishion AI Platform')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="wpdev_work_cs_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_work_cs_desc', 'A custom WordPress media platform with automated AI content publishing, custom Gutenberg block suites, and a 98/100 PageSpeed score across desktop and mobile.')); ?></p>
        <a href="<?php echo esc_url(home_url(cr8v_mod('wpdev_work_cs_btn_url', '/case-studies/'))); ?>" class="c8isv-portfolio-btn" data-customizer="wpdev_work_cs_btn_text"><?php echo esc_html(cr8v_mod('wpdev_work_cs_btn_text', 'Explore Case Study →')); ?></a>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 4: CORE CAPABILITIES (Accordion)
     Light #FAFAF7
     ══════════════════════════════════════════ -->
<div class="c8isv-capabilities-section" id="c8isv-services">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="wpdev_cap_label"><?php echo esc_html(cr8v_mod('wpdev_cap_label', 'Capabilities')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wpdev_cap_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_cap_h2_part1', 'WordPress Engineering ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_cap_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_cap_h2_serif', 'Capabilities')); ?></span></h2>

    <div class="c8isv-accordion" data-c8isv-accordion>
      <div class="c8isv-accordion-item is-active">
        <button class="c8isv-accordion-trigger" aria-expanded="true">
          <span class="c8isv-accordion-title" data-customizer="wpdev_cap1_title"><?php echo esc_html(cr8v_mod('wpdev_cap1_title', 'Custom Gutenberg Block Development')); ?></span>
          <span class="c8isv-accordion-icon">+</span>
        </button>
        <div class="c8isv-accordion-panel" style="max-height: 200px;">
          <p class="c8isv-accordion-text" data-customizer="wpdev_cap1_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_cap1_desc', 'Hand-coded React & PHP Gutenberg blocks tailored to your design system so content teams build pixel-perfect pages without third-party page builder overhead.')); ?></p>
        </div>
      </div>

      <div class="c8isv-accordion-item">
        <button class="c8isv-accordion-trigger" aria-expanded="false">
          <span class="c8isv-accordion-title" data-customizer="wpdev_cap2_title"><?php echo esc_html(cr8v_mod('wpdev_cap2_title', 'Speed & Core Web Vitals Optimization')); ?></span>
          <span class="c8isv-accordion-icon">+</span>
        </button>
        <div class="c8isv-accordion-panel">
          <p class="c8isv-accordion-text" data-customizer="wpdev_cap2_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_cap2_desc', 'Eliminating database queries, asset minification, critical CSS extraction, and server-level caching to guarantee sub-1.2s page load speed scores.')); ?></p>
        </div>
      </div>

      <div class="c8isv-accordion-item">
        <button class="c8isv-accordion-trigger" aria-expanded="false">
          <span class="c8isv-accordion-title" data-customizer="wpdev_cap3_title"><?php echo esc_html(cr8v_mod('wpdev_cap3_title', 'ACF Pro & Custom Post Type Architecture')); ?></span>
          <span class="c8isv-accordion-icon">+</span>
        </button>
        <div class="c8isv-accordion-panel">
          <p class="c8isv-accordion-text" data-customizer="wpdev_cap3_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_cap3_desc', 'Bespoke Advanced Custom Fields data models structured around your exact business data — projects, team profiles, pricing tiers, and locations.')); ?></p>
        </div>
      </div>

      <div class="c8isv-accordion-item">
        <button class="c8isv-accordion-trigger" aria-expanded="false">
          <span class="c8isv-accordion-title" data-customizer="wpdev_cap4_title"><?php echo esc_html(cr8v_mod('wpdev_cap4_title', 'Enterprise Migration & Elementor Refactoring')); ?></span>
          <span class="c8isv-accordion-icon">+</span>
        </button>
        <div class="c8isv-accordion-panel">
          <p class="c8isv-accordion-text" data-customizer="wpdev_cap4_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_cap4_desc', 'Migrating legacy WordPress builds, bloated Elementor setups, or external CMS platforms (Webflow, Squarespace) to clean hand-written theme code.')); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5: PROCESS & APPROACH (Slanted Cards)
     Dark #080808
     ══════════════════════════════════════════ -->
<div class="c8isv-approach-section">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal is-light" data-customizer="wpdev_app_label"><?php echo esc_html(cr8v_mod('wpdev_app_label', 'How We Work')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal is-light"><span data-customizer="wpdev_app_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_app_h2_part1', 'Our 4-Stage ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_app_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_app_h2_serif', 'Development Process')); ?></span></h2>

    <div class="c8isv-approach-stack">
      <!-- Stage 1 -->
      <div class="c8isv-approach-wrapper">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-info">
            <span class="c8isv-approach-num" data-customizer="wpdev_stage1_num"><?php echo esc_html(cr8v_mod('wpdev_stage1_num', '01')); ?></span>
            <h3 class="c8isv-approach-title" data-customizer="wpdev_stage1_title"><?php echo esc_html(cr8v_mod('wpdev_stage1_title', 'Architecture & Schema Scoping')); ?></h3>
            <p class="c8isv-approach-desc" data-customizer="wpdev_stage1_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_stage1_desc', 'Mapping custom post types, taxonomy structures, plugin requirements, and URL redirects before writing line one of code.')); ?></p>
          </div>
          <div class="c8isv-approach-media">
            <img src="<?php echo esc_url(cr8v_mod('wpdev_stage1_img', 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop')); ?>" alt="Stage 1" data-customizer="wpdev_stage1_img">
          </div>
        </div>
      </div>

      <!-- Stage 2 -->
      <div class="c8isv-approach-wrapper">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-info">
            <span class="c8isv-approach-num" data-customizer="wpdev_stage2_num"><?php echo esc_html(cr8v_mod('wpdev_stage2_num', '02')); ?></span>
            <h3 class="c8isv-approach-title" data-customizer="wpdev_stage2_title"><?php echo esc_html(cr8v_mod('wpdev_stage2_title', 'Figma To PHP Theme Build')); ?></h3>
            <p class="c8isv-approach-desc" data-customizer="wpdev_stage2_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_stage2_desc', 'Hand-coding responsive HTML5/CSS3 templates, custom PHP theme files, and ACF field groups with 100% fidelity to your Figma designs.')); ?></p>
          </div>
          <div class="c8isv-approach-media">
            <img src="<?php echo esc_url(cr8v_mod('wpdev_stage2_img', 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop')); ?>" alt="Stage 2" data-customizer="wpdev_stage2_img">
          </div>
        </div>
      </div>

      <!-- Stage 3 -->
      <div class="c8isv-approach-wrapper">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-info">
            <span class="c8isv-approach-num" data-customizer="wpdev_stage3_num"><?php echo esc_html(cr8v_mod('wpdev_stage3_num', '03')); ?></span>
            <h3 class="c8isv-approach-title" data-customizer="wpdev_stage3_title"><?php echo esc_html(cr8v_mod('wpdev_stage3_title', 'Performance & SEO Hardening')); ?></h3>
            <p class="c8isv-approach-desc" data-customizer="wpdev_stage3_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_stage3_desc', 'Benchmarking Core Web Vitals, configuring RankMath/Yoast schema markup, image webp compression, and security hardening.')); ?></p>
          </div>
          <div class="c8isv-approach-media">
            <img src="<?php echo esc_url(cr8v_mod('wpdev_stage3_img', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop')); ?>" alt="Stage 3" data-customizer="wpdev_stage3_img">
          </div>
        </div>
      </div>

      <!-- Stage 4 -->
      <div class="c8isv-approach-wrapper">
        <div class="c8isv-approach-card" data-c8isv-approach-card>
          <div class="c8isv-approach-info">
            <span class="c8isv-approach-num" data-customizer="wpdev_stage4_num"><?php echo esc_html(cr8v_mod('wpdev_stage4_num', '04')); ?></span>
            <h3 class="c8isv-approach-title" data-customizer="wpdev_stage4_title"><?php echo esc_html(cr8v_mod('wpdev_stage4_title', 'Client Hand-Off & Training')); ?></h3>
            <p class="c8isv-approach-desc" data-customizer="wpdev_stage4_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_stage4_desc', 'Delivering custom video walkthrough guides so your non-technical marketing team can edit 100% of pages effortlessly.')); ?></p>
          </div>
          <div class="c8isv-approach-media">
            <img src="<?php echo esc_url(cr8v_mod('wpdev_stage4_img', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop')); ?>" alt="Stage 4" data-customizer="wpdev_stage4_img">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: BUILD PLATFORM OPTIONS
     Light #FAFAF7
     ══════════════════════════════════════════ -->
<div class="c8isv-options-section">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="wpdev_opt_label"><?php echo esc_html(cr8v_mod('wpdev_opt_label', 'Development Engines')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wpdev_opt_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_opt_h2_part1', 'Choose Your Preferred ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_opt_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_opt_h2_serif', 'WordPress Setup')); ?></span></h2>

    <div class="c8isv-options-grid">
      <div class="c8isv-option-card">
        <div class="c8isv-option-num">01</div>
        <h3 class="c8isv-option-name" data-customizer="wpdev_opt1_name"><?php echo esc_html(cr8v_mod('wpdev_opt1_name', 'Custom Theme (ACF + Gutenberg)')); ?></h3>
        <p class="c8isv-option-desc" data-customizer="wpdev_opt1_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_opt1_desc', 'Zero page builders. Pure hand-written PHP code, ACF Pro data structures, and lightweight native block layouts for maximum speed.')); ?></p>
      </div>
      <div class="c8isv-option-card">
        <div class="c8isv-option-num">02</div>
        <h3 class="c8isv-option-name" data-customizer="wpdev_opt2_name"><?php echo esc_html(cr8v_mod('wpdev_opt2_name', 'Elementor Pro Custom Theme')); ?></h3>
        <p class="c8isv-option-desc" data-customizer="wpdev_opt2_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_opt2_desc', 'Bespoke Elementor Pro widget suites engineered around your design system for drag-and-drop flexibility without template clutter.')); ?></p>
      </div>
      <div class="c8isv-option-card">
        <div class="c8isv-option-num">03</div>
        <h3 class="c8isv-option-name" data-customizer="wpdev_opt3_name"><?php echo esc_html(cr8v_mod('wpdev_opt3_name', 'Headless WordPress (REST API)')); ?></h3>
        <p class="c8isv-option-desc" data-customizer="wpdev_opt3_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_opt3_desc', 'WordPress back-end as a headless CMS feeding Next.js or Vue front-ends for lightning fast enterprise digital experiences.')); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 7: PROJECT CATALOG
     Light #F4F6FB
     ══════════════════════════════════════════ -->
<div class="c8isv-catalog-section" id="c8isv-catalog">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="wpdev_cat_label"><?php echo esc_html(cr8v_mod('wpdev_cat_label', 'WordPress Solutions')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wpdev_cat_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_cat_h2_part1', 'Types Of WordPress Sites We ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_cat_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_cat_h2_serif', 'Engineer')); ?></span></h2>

    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <div class="c8isv-hoverlist-item c8isv-reveal" data-logo-1="<?php echo esc_url(cr8v_mod('wpdev_tech1_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg')); ?>" data-logo-2="<?php echo esc_url(cr8v_mod('wpdev_tech2_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wpdev_cat1_title"><?php echo esc_html(cr8v_mod('wpdev_cat1_title', 'Corporate & B2B Websites')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wpdev_cat1_tagline"><?php echo wp_kses_post(cr8v_mod('wpdev_cat1_tagline', 'High-converting agency, SaaS, and corporate websites built to turn visitors into sales calls.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right"><span class="c8isv-hoverlist-arrow">→</span></div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-logo-1="<?php echo esc_url(cr8v_mod('wpdev_tech1_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg')); ?>" data-logo-2="<?php echo esc_url(cr8v_mod('wpdev_tech3_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wpdev_cat2_title"><?php echo esc_html(cr8v_mod('wpdev_cat2_title', 'Digital Publications & News')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wpdev_cat2_tagline"><?php echo wp_kses_post(cr8v_mod('wpdev_cat2_tagline', 'High-traffic editorial portals with automated category structures, ad slot management, and newsletter funnels.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right"><span class="c8isv-hoverlist-arrow">→</span></div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-logo-1="<?php echo esc_url(cr8v_mod('wpdev_tech2_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg')); ?>" data-logo-2="<?php echo esc_url(cr8v_mod('wpdev_tech3_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wpdev_cat3_title"><?php echo esc_html(cr8v_mod('wpdev_cat3_title', 'WooCommerce E-Commerce Sites')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wpdev_cat3_tagline"><?php echo wp_kses_post(cr8v_mod('wpdev_cat3_tagline', 'Full custom shopping experiences with custom product filters, multi-currency checkout, and ERP syncing.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right"><span class="c8isv-hoverlist-arrow">→</span></div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-logo-1="<?php echo esc_url(cr8v_mod('wpdev_tech1_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg')); ?>" data-logo-2="<?php echo esc_url(cr8v_mod('wpdev_tech2_logo', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wpdev_cat4_title"><?php echo esc_html(cr8v_mod('wpdev_cat4_title', 'Membership & Portal Platforms')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wpdev_cat4_tagline"><?php echo wp_kses_post(cr8v_mod('wpdev_cat4_tagline', 'Private client dashboards, gated content subscriptions, and course portals built on clean custom code.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right"><span class="c8isv-hoverlist-arrow">→</span></div>
      </div>
    </div>

    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" alt="WordPress"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg" alt="Elementor"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="wpdev_testi_label"><?php echo esc_html(cr8v_mod('wpdev_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wpdev_testi_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_testi_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wpdev_testi1_text"><?php echo wp_kses_post(cr8v_mod('wpdev_testi1_text', 'Our previous theme was plagued by slow page loads and broken plugin updates. Cr8v Stacks rebuilt our WordPress site from scratch in native code — loading times dropped from 6s to 0.9s!')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wpdev_testi1_author"><?php echo esc_html(cr8v_mod('wpdev_testi1_author', 'Marcus Vance — Managing Editor')); ?></div>
      </div>
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wpdev_testi2_text"><?php echo wp_kses_post(cr8v_mod('wpdev_testi2_text', 'The custom Gutenberg blocks give our marketing team total freedom to build landing pages without calling a developer every single week. Highly recommend!')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wpdev_testi2_author"><?php echo esc_html(cr8v_mod('wpdev_testi2_author', 'Sarah Jenkins — Head of Growth')); ?></div>
      </div>
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wpdev_testi3_text"><?php echo wp_kses_post(cr8v_mod('wpdev_testi3_text', 'Migrating our Webflow site to custom WordPress was seamless. Ranking for our core keywords jumped within 30 days of launch thanks to their technical schema setup.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wpdev_testi3_author"><?php echo esc_html(cr8v_mod('wpdev_testi3_author', 'Tunde Adebayo — Operations Director')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 9: PRICING MODELS & ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="wpdev_pricing_label"><?php echo esc_html(cr8v_mod('wpdev_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="wpdev_pricing_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_pricing_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="wpdev_pricing_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Ongoing Support</span>
          <h3 class="c8srv-price-title">Growth Retainer</h3>
          <div class="c8srv-price-amount"><span class="c8srv-price-num">$950</span><span class="c8srv-price-period">/mo</span></div>
        </div>
        <p class="c8srv-price-desc">A monthly block of dedicated design and development hours to keep your website fast, updated, and growing.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature"><span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Dedicated monthly support hours block</span></div>
          <div class="c8srv-price-feature"><span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Monthly speed audits &amp; code optimizations</span></div>
          <div class="c8srv-price-feature"><span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Design tweaks, copy updates &amp; SEO execution</span></div>
        </div>
        <a href="https://cr8vstacks.com/contact/?model=retainer" class="c8srv-price-btn is-light" style="border-color:#080808 !important; color:#080808 !important;">Secure Retainer Slot</a>
      </div>

      <div class="c8srv-price-box is-featured c8srv-reveal">
        <div class="c8srv-price-badge">Most Popular</div>
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" style="color: rgba(255,255,255,0.7) !important;">Fixed-Scope Project</span>
          <h3 class="c8srv-price-title" style="color: #FFFFFF !important;">Custom Website Build</h3>
          <div class="c8srv-price-amount" style="color: #FFFFFF !important;"><span class="c8srv-price-period" style="color: rgba(255,255,255,0.7) !important;">From </span><span class="c8srv-price-num" style="color: #FFFFFF !important;">$1,800</span></div>
        </div>
        <p class="c8srv-price-desc" style="color: rgba(255,255,255,0.8) !important;">End-to-end design, custom theme development, and launch strategy for ambitious brands seeking a high-converting digital platform.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;"><span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Custom UI/UX design in Figma</span></div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;"><span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Custom PHP / Liquid codebase</span></div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;"><span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span><span>Full speed, SEO &amp; analytics setup</span></div>
        </div>
        <a href="https://cr8vstacks.com/contact/?model=project" class="c8srv-price-btn is-primary">Start A Project</a>
      </div>
    </div>

    <!-- Scope Estimator Widget -->
    <div class="c8srv-calc-box c8srv-reveal" style="margin-top: 3.5rem !important;">
      <div style="font-family: 'Space Mono', monospace; font-size: 0.75rem; color: #0047E1; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.5rem;">Interactive Scope Estimator</div>
      <h3 style="font-family: 'Michroma', sans-serif; font-size: 1.35rem; color: #080808; margin-bottom: 1.5rem; font-weight: 700;">Calculate Your Custom Build Budget</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
        <div>
          <label style="display:block; font-family:'DM Sans',sans-serif; font-size:0.85rem; font-weight:600; color:#080808; margin-bottom:0.5rem;">Project Scope</label>
          <select id="est-scope-type" style="width:100%; padding:0.75rem; border:1px solid rgba(8,8,8,0.15); border-radius:4px; font-family:'DM Sans',sans-serif; background:#FFFFFF;">
            <option value="1800">Custom Theme Redesign ($1,800)</option>
            <option value="2800">Full Custom Theme + Gutenberg Blocks ($2,800)</option>
            <option value="4200">Enterprise WordPress + Headless API ($4,200)</option>
          </select>
        </div>
        <div>
          <label style="display:block; font-family:'DM Sans',sans-serif; font-size:0.85rem; font-weight:600; color:#080808; margin-bottom:0.5rem;">Total Page Templates</label>
          <select id="est-page-count" style="width:100%; padding:0.75rem; border:1px solid rgba(8,8,8,0.15); border-radius:4px; font-family:'DM Sans',sans-serif; background:#FFFFFF;">
            <option value="0">1–5 Custom Pages (Base Included)</option>
            <option value="400">6–12 Custom Pages (+$400)</option>
            <option value="900">13–25 Custom Pages (+$900)</option>
          </select>
        </div>
        <div>
          <label style="display:block; font-family:'DM Sans',sans-serif; font-size:0.85rem; font-weight:600; color:#080808; margin-bottom:0.5rem;">Speed &amp; SEO Hardening</label>
          <select id="est-seo-opt" style="width:100%; padding:0.75rem; border:1px solid rgba(8,8,8,0.15); border-radius:4px; font-family:'DM Sans',sans-serif; background:#FFFFFF;">
            <option value="0">Standard Speed Audit (Included)</option>
            <option value="500">Advanced RankMath Schema + 95+ PageSpeed (+$500)</option>
          </select>
        </div>
      </div>
      <div style="background:#FAFAF7; padding:1.5rem; border-radius:4px; border:1px solid rgba(8,8,8,0.08); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
        <div>
          <span style="font-family:'Space Mono',monospace; font-size:0.75rem; color:#6B6B6B; text-transform:uppercase; display:block;">Estimated Total Range</span>
          <span id="est-total-price" style="font-family:'Michroma',sans-serif; font-size:1.6rem; color:#0047E1; font-weight:700;">$1,800 – $2,300</span>
        </div>
        <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top:0!important; margin-bottom:0!important;">Submit Scope Request</a>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 10: FREQUENTLY ASKED QUESTIONS
     Light #FAFAF7
     ══════════════════════════════════════════ -->
<div class="c8srv-faq-section" style="padding: 6rem 0 !important; background: #FAFAF7 !important; border-top: 1px solid rgba(8,8,8,0.06) !important;">
  <div class="c8isv-wrap">
    <div class="c8srv-faq-grid">
      <div class="c8srv-faq-left">
        <div class="c8isv-label c8srv-reveal" data-customizer="wpdev_faq_label"><?php echo esc_html(cr8v_mod('wpdev_faq_label', 'FAQ')); ?></div>
        <h2 class="c8isv-section-title c8srv-reveal"><span data-customizer="wpdev_faq_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_faq_h2_part1', 'Questions About ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_faq_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_faq_h2_serif', 'WordPress Builds')); ?></span></h2>
        <a href="<?php echo esc_url(home_url(cr8v_mod('wpdev_faq_cta_url', '/discovery-call/'))); ?>" class="faq-cta-link" data-customizer="wpdev_faq_cta_text"><?php echo esc_html(cr8v_mod('wpdev_faq_cta_text', 'Talk to us')); ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>

      <div class="c8srv-faq-right">
        <ul class="faq-list">
          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="wpdev_faq1_q"><?php echo esc_html(cr8v_mod('wpdev_faq1_q', 'Will our non-technical marketing team be able to edit the website?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="wpdev_faq1_a"><?php echo wp_kses_post(cr8v_mod('wpdev_faq1_a', 'Yes, 100%. We build custom visual Gutenberg blocks or Elementor Pro field structures so your team can edit all text, images, and pages without writing code or breaking design layouts.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="wpdev_faq2_q"><?php echo esc_html(cr8v_mod('wpdev_faq2_q', 'How do you ensure 95+ PageSpeed scores on WordPress?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="wpdev_faq2_a"><?php echo wp_kses_post(cr8v_mod('wpdev_faq2_a', 'We avoid heavy pre-built templates. We hand-write clean PHP templates, minimize third-party plugins, optimize database queries, implement WEBP image conversion, and configure critical CSS.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="wpdev_faq3_q"><?php echo esc_html(cr8v_mod('wpdev_faq3_q', 'Can you migrate our existing site without losing SEO rankings?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="wpdev_faq3_a"><?php echo wp_kses_post(cr8v_mod('wpdev_faq3_a', 'Absolutely. We perform complete Screaming Frog crawl audits to map all existing URLs, set up 301 redirect matrices, and preserve your metadata, schema, and Google indexing.')); ?></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 11: FOOTER CTA BAR
     Dark #080808
     ══════════════════════════════════════════ -->
<div class="c8isv-cta-section">
  <div class="c8isv-wrap">
    <div class="c8isv-cta-card">
      <span class="c8isv-cta-tag" data-customizer="wpdev_cta_label"><?php echo esc_html(cr8v_mod('wpdev_cta_label', 'READY TO BUILD?')); ?></span>
      <h2 class="c8isv-cta-title"><span data-customizer="wpdev_cta_h2_part1"><?php echo esc_html(cr8v_mod('wpdev_cta_h2_part1', 'Let’s Engineer Your Custom ')); ?></span><span class="c8isv-serif" data-customizer="wpdev_cta_h2_serif"><?php echo esc_html(cr8v_mod('wpdev_cta_h2_serif', 'WordPress Theme')); ?></span></h2>
      <p class="c8isv-cta-desc" data-customizer="wpdev_cta_desc"><?php echo wp_kses_post(cr8v_mod('wpdev_cta_desc', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.')); ?></p>
      <a href="<?php echo esc_url(home_url(cr8v_mod('wpdev_cta_btn_url', '/discovery-call/'))); ?>" class="c8isv-cta-btn" data-customizer="wpdev_cta_btn_text"><?php echo esc_html(cr8v_mod('wpdev_cta_btn_text', 'Book Strategy Call →')); ?></a>
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

  // Accordion Logic
  var accordion = root.querySelector('[data-c8isv-accordion]');
  if (accordion) {
    var accItems = accordion.querySelectorAll('.c8isv-accordion-item');
    accItems.forEach(function(item) {
      var trigger = item.querySelector('.c8isv-accordion-trigger');
      var panel = item.querySelector('.c8isv-accordion-panel');
      if (!trigger || !panel) return;

      trigger.addEventListener('click', function() {
        var isOpen = item.classList.contains('is-active');
        accItems.forEach(function(other) {
          other.classList.remove('is-active');
          var ot = other.querySelector('.c8isv-accordion-trigger');
          var op = other.querySelector('.c8isv-accordion-panel');
          if (ot) ot.setAttribute('aria-expanded', 'false');
          if (op) op.style.maxHeight = null;
        });

        if (!isOpen) {
          item.classList.add('is-active');
          trigger.setAttribute('aria-expanded', 'true');
          panel.style.maxHeight = panel.scrollHeight + 'px';
        }
      });
    });
  }

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
      var isOpen = item.classList.contains('is-active');
      var allItems = root.querySelectorAll('.faq-item');
      allItems.forEach(function(i) {
        i.classList.remove('is-active');
        var t = i.querySelector('.faq-trigger');
        if (t) t.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-active');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Scope Estimator Calculator JS
  var scopeSelect = document.getElementById('est-scope-type');
  var pageSelect = document.getElementById('est-page-count');
  var seoSelect = document.getElementById('est-seo-opt');
  var priceDisplay = document.getElementById('est-total-price');

  function calculateEstimate() {
    if (!scopeSelect || !pageSelect || !seoSelect || !priceDisplay) return;
    var base = parseInt(scopeSelect.value, 10) || 1800;
    var pages = parseInt(pageSelect.value, 10) || 0;
    var seo = parseInt(seoSelect.value, 10) || 0;

    var low = base + pages + seo;
    var high = Math.round(low * 1.25);

    priceDisplay.textContent = '$' + low.toLocaleString() + ' – $' + high.toLocaleString();
  }

  if (scopeSelect && pageSelect && seoSelect) {
    scopeSelect.addEventListener('change', calculateEstimate);
    pageSelect.addEventListener('change', calculateEstimate);
    seoSelect.addEventListener('change', calculateEstimate);
    calculateEstimate();
  }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
