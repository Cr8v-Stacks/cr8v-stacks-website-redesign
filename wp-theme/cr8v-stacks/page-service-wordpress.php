<?php
/**
 * Template Name: Service — WordPress Development
 * Description: Custom WordPress Theme Development Service Page with 100% Customizer Control Parity & Exact Layout Parity
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
  /* Local overrides & Estimator active state */
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('wp_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('wp_hero_crumb_child', 'WORDPRESS DEVELOPMENT')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="wp_hero_label"><?php echo esc_html(cr8v_mod('wp_hero_label', 'WordPress Theme Engineering & Block Systems')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="wp_hero_h1_part1"><?php echo esc_html(cr8v_mod('wp_hero_h1_part1', 'Custom WordPress ')); ?></span><span class="c8isv-serif" data-customizer="wp_hero_h1_serif"><?php echo esc_html(cr8v_mod('wp_hero_h1_serif', 'Theme Development')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="wp_hero_intro"><?php echo wp_kses_post(cr8v_mod('wp_hero_intro', 'Bespoke PHP themes, Gutenberg block architectures, and database security hardening built for performance, editorial freedom, and sub-1.2s page loads.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('wp_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="wp_hero_cta1_text"><?php echo esc_html(cr8v_mod('wp_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('wp_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="wp_hero_cta2_text"><?php echo esc_html(cr8v_mod('wp_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="wp_hero_pill1"><?php echo esc_html(cr8v_mod('wp_hero_pill1', 'WordPress PHP')); ?></span>
          <span class="c8isv-pill" data-customizer="wp_hero_pill2"><?php echo esc_html(cr8v_mod('wp_hero_pill2', 'Gutenberg Blocks')); ?></span>
          <span class="c8isv-pill" data-customizer="wp_hero_pill3"><?php echo esc_html(cr8v_mod('wp_hero_pill3', 'ACF Pro Schemas')); ?></span>
          <span class="c8isv-pill" data-customizer="wp_hero_pill4"><?php echo esc_html(cr8v_mod('wp_hero_pill4', 'Sub-1.2s Load Speed')); ?></span>
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
     SECTION 2: WHY WORDPRESS (Flank Cards Stack)
     Light #F4F6FB
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="wp_flank_label"><?php echo esc_html(cr8v_mod('wp_flank_label', 'Why Custom WordPress')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wp_flank_h2"><?php echo esc_html(cr8v_mod('wp_flank_h2', 'Zero Bloat, Complete Control, Defensible Security')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wp_flank1_step"><?php echo esc_html(cr8v_mod('wp_flank1_step', 'Performance // Speed')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wp_flank1_title"><?php echo esc_html(cr8v_mod('wp_flank1_title', 'Zero Bloat Theme Code')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wp_flank1_desc"><?php echo wp_kses_post(cr8v_mod('wp_flank1_desc', 'We strip out sluggish page builder plugins like Elementor or Divi, writing lean native PHP and modular CSS that loads in under 1.2 seconds.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wp_flank2_step"><?php echo esc_html(cr8v_mod('wp_flank2_step', 'Editorial // Freedom')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wp_flank2_title"><?php echo esc_html(cr8v_mod('wp_flank2_title', 'Custom Gutenberg Block Suite')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wp_flank2_desc"><?php echo wp_kses_post(cr8v_mod('wp_flank2_desc', 'Tailored Gutenberg block components designed specifically for your marketing team to build new landing pages visually without touching code.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wp_flank3_step"><?php echo esc_html(cr8v_mod('wp_flank3_step', 'Database // Architecture')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wp_flank3_title"><?php echo esc_html(cr8v_mod('wp_flank3_title', 'Advanced ACF Pro Schemas')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wp_flank3_desc"><?php echo wp_kses_post(cr8v_mod('wp_flank3_desc', 'Structured relational custom post types, custom taxonomies, and flexible field schemas built for seamless data management.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="wp_flank4_step"><?php echo esc_html(cr8v_mod('wp_flank4_step', 'Security // Hardening')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="wp_flank4_title"><?php echo esc_html(cr8v_mod('wp_flank4_title', 'Enterprise Security Hardening')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="wp_flank4_desc"><?php echo wp_kses_post(cr8v_mod('wp_flank4_desc', 'Disabling vulnerable REST endpoints, securing WP-Admin login paths, enforcing SSL, and configuring automated cloud backups.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 3: OUR WORK (Portfolio Showcase)
     White Background — Duch Showcase
     ══════════════════════════════════════════ -->
<div class="c8isv-portfolio-outer">
  <div class="c8isv-portfolio-inner">
    <div class="c8isv-portfolio-head">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="wp_port_label"><?php echo esc_html(cr8v_mod('wp_port_label', 'Our Work')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wp_port_h2_part1"><?php echo esc_html(cr8v_mod('wp_port_h2_part1', 'Built for Real Outcomes, ')); ?></span><br><span class="c8isv-serif" data-customizer="wp_port_h2_serif"><?php echo esc_html(cr8v_mod('wp_port_h2_serif', 'Not Just Concepts')); ?></span></h2>
    </div>
    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-img">
        <img src="<?php echo esc_url(cr8v_mod('wp_port_img', get_template_directory_uri() . '/assets/img/case_studies/cs_mkenny_hero_vertical.webp')); ?>" alt="Mkenny Properties — built by Cr8v Stacks" data-customizer="wp_port_img">
      </div>
      <div class="c8isv-portfolio-info">
        <span class="c8isv-portfolio-client" data-customizer="wp_port_client"><?php echo esc_html(cr8v_mod('wp_port_client', 'Case Study — Mkenny Properties')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="wp_port_title"><?php echo esc_html(cr8v_mod('wp_port_title', 'Property Platform & Custom Elementor Widgets')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="wp_port_desc"><?php echo wp_kses_post(cr8v_mod('wp_port_desc', 'Rebuilt Mkenny Properties from a basic landing page into a full property catalog platform: listings catalog, individual property showcases, blog insights, and archive taxonomy templates — all powered by a custom Elementor widget system developed specifically for this project.')); ?></p>
        <div class="c8isv-portfolio-stats">
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="wp_port_stat1_val"><?php echo esc_html(cr8v_mod('wp_port_stat1_val', '4')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="wp_port_stat1_lbl"><?php echo esc_html(cr8v_mod('wp_port_stat1_lbl', 'New Page Types')); ?></span>
          </div>
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="wp_port_stat2_val"><?php echo esc_html(cr8v_mod('wp_port_stat2_val', '1')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="wp_port_stat2_lbl"><?php echo esc_html(cr8v_mod('wp_port_stat2_lbl', 'Custom Widget System')); ?></span>
          </div>
        </div>
        <div class="c8isv-portfolio-deliverables">
          <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
          <div class="c8isv-portfolio-pills">
            <span class="c8isv-portfolio-pill">WordPress CMS</span>
            <span class="c8isv-portfolio-pill">Custom Elementor Widgets</span>
            <span class="c8isv-portfolio-pill">Property Listing Engine</span>
            <span class="c8isv-portfolio-pill">Technical SEO Architecture</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url(cr8v_mod('wp_port_btn_url', '/case-studies/mkenny-properties/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="wp_port_btn_text"><?php echo esc_html(cr8v_mod('wp_port_btn_text', 'View Case Study →')); ?></a>
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
    <div class="c8isv-label c8isv-reveal" data-customizer="wp_folder_label"><?php echo esc_html(cr8v_mod('wp_folder_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wp_folder_h2_part1"><?php echo esc_html(cr8v_mod('wp_folder_h2_part1', 'Every layer of your WordPress stack, ')); ?></span><span class="c8isv-serif" data-customizer="wp_folder_h2_serif"><?php echo esc_html(cr8v_mod('wp_folder_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="wp_folder_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder_desc', 'Custom PHP theme code, Gutenberg block libraries, ACF Pro custom field architectures, speed tuning, and security protocols.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <!-- Card 1 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="wp_folder1_tab"><?php echo esc_html(cr8v_mod('wp_folder1_tab', '01 // Theme')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="wp_folder1_title"><?php echo esc_html(cr8v_mod('wp_folder1_title', 'Bespoke PHP Theme Development')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="wp_folder1_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder1_desc', 'Proprietary WordPress theme code built from clean starter frameworks without bloated third-party parent themes.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss theme builds →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="wp_folder1_img">
            <img src="<?php echo esc_url(cr8v_mod('wp_folder1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_deck_theme.webp')); ?>" alt="Bespoke PHP Theme Development" data-customizer="wp_folder1_img">
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="wp_folder2_tab"><?php echo esc_html(cr8v_mod('wp_folder2_tab', '02 // Blocks')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="wp_folder2_title"><?php echo esc_html(cr8v_mod('wp_folder2_title', 'Custom Gutenberg Block Library')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="wp_folder2_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder2_desc', 'Modular Gutenberg block components allowing team members to drag, drop, and edit page layouts effortlessly.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss block libraries →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="wp_folder2_img">
            <img src="<?php echo esc_url(cr8v_mod('wp_folder2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_deck_blocks.webp')); ?>" alt="Custom Gutenberg Block Library" data-customizer="wp_folder2_img">
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="wp_folder3_tab"><?php echo esc_html(cr8v_mod('wp_folder3_tab', '03 // Fields')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="wp_folder3_title"><?php echo esc_html(cr8v_mod('wp_folder3_title', 'ACF Pro Content Schemas')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="wp_folder3_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder3_desc', 'Intuitive custom field panels configured with ACF Pro for easy text, media, gallery, and testimonial management.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss custom fields →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="wp_folder3_img">
            <img src="<?php echo esc_url(cr8v_mod('wp_folder3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_deck_fields.webp')); ?>" alt="ACF Pro Content Schemas" data-customizer="wp_folder3_img">
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="wp_folder4_tab"><?php echo esc_html(cr8v_mod('wp_folder4_tab', '04 // Speed')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="wp_folder4_title"><?php echo esc_html(cr8v_mod('wp_folder4_title', 'Core Web Vitals Speed Optimization')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="wp_folder4_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder4_desc', 'Configuring WebP image compression, Redis object caching, asset minification, and database indexing.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss speed tuning →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="wp_folder4_img">
            <img src="<?php echo esc_url(cr8v_mod('wp_folder4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_deck_speed.webp')); ?>" alt="Core Web Vitals Speed Optimization" data-customizer="wp_folder4_img">
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="wp_folder5_tab"><?php echo esc_html(cr8v_mod('wp_folder5_tab', '05 // Security')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="wp_folder5_title"><?php echo esc_html(cr8v_mod('wp_folder5_title', 'Security Hardening & Maintenance')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="wp_folder5_desc"><?php echo wp_kses_post(cr8v_mod('wp_folder5_desc', 'Implementing two-factor authentication, login rate-limiting, malware scanning, and automated cloud backups.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss security protocols →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="wp_folder5_img">
            <img src="<?php echo esc_url(cr8v_mod('wp_folder5_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_deck_security.webp')); ?>" alt="Security Hardening & Maintenance" data-customizer="wp_folder5_img">
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
    <div class="c8isv-label c8isv-reveal" data-customizer="wp_app_label"><?php echo esc_html(cr8v_mod('wp_app_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wp_app_h2"><?php echo esc_html(cr8v_mod('wp_app_h2', 'How We Approach WordPress Engineering')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="wp_app_sub"><?php echo wp_kses_post(cr8v_mod('wp_app_sub', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <!-- Stage 1 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="wp_app1_num"><?php echo esc_html(cr8v_mod('wp_app1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="wp_app1_name"><?php echo esc_html(cr8v_mod('wp_app1_name', 'Audit')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="wp_app1_tags"><?php echo wp_kses_post(cr8v_mod('wp_app1_tags', 'Database &middot; Plugins &middot;<br>Performance')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="wp_app1_desc"><?php echo wp_kses_post(cr8v_mod('wp_app1_desc', 'We audit existing WordPress installations, evaluate plugin overhead, and map custom theme requirements.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="wp_app1_img">
          <img src="<?php echo esc_url(cr8v_mod('wp_app1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_proc_audit.webp')); ?>" alt="WordPress Audit stage" data-customizer="wp_app1_img">
        </div>
      </div>
    </div>

    <!-- Stage 2 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="wp_app2_num"><?php echo esc_html(cr8v_mod('wp_app2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="wp_app2_name"><?php echo esc_html(cr8v_mod('wp_app2_name', 'Architecture')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="wp_app2_tags"><?php echo wp_kses_post(cr8v_mod('wp_app2_tags', 'PHP Theme &middot; CPT &middot;<br>ACF Schemas')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="wp_app2_desc"><?php echo wp_kses_post(cr8v_mod('wp_app2_desc', 'We engineer the custom theme base, register Custom Post Types, and build ACF Pro field schemas.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="wp_app2_img">
          <img src="<?php echo esc_url(cr8v_mod('wp_app2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_proc_architecture.webp')); ?>" alt="WordPress Architecture stage" data-customizer="wp_app2_img">
        </div>
      </div>
    </div>

    <!-- Stage 3 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="wp_app3_num"><?php echo esc_html(cr8v_mod('wp_app3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="wp_app3_name"><?php echo esc_html(cr8v_mod('wp_app3_name', 'Block Suite')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="wp_app3_tags"><?php echo wp_kses_post(cr8v_mod('wp_app3_tags', 'Gutenberg &middot; UI Components &middot;<br>CSS Modules')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="wp_app3_desc"><?php echo wp_kses_post(cr8v_mod('wp_app3_desc', 'We construct modular Gutenberg blocks and wire them into front-end CSS design tokens.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="wp_app3_img">
          <img src="<?php echo esc_url(cr8v_mod('wp_app3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_proc_blocks.webp')); ?>" alt="WordPress Block Suite stage" data-customizer="wp_app3_img">
        </div>
      </div>
    </div>

    <!-- Stage 4 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="wp_app4_num"><?php echo esc_html(cr8v_mod('wp_app4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="wp_app4_name"><?php echo esc_html(cr8v_mod('wp_app4_name', 'Optimization')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="wp_app4_tags"><?php echo wp_kses_post(cr8v_mod('wp_app4_tags', 'Web Vitals &middot; Security &middot;<br>Launch')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="wp_app4_desc"><?php echo wp_kses_post(cr8v_mod('wp_app4_desc', 'We run full speed benchmarks, harden security configurations, and deploy to your live production host.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="wp_app4_img">
          <img src="<?php echo esc_url(cr8v_mod('wp_app4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_wp_proc_optimization.webp')); ?>" alt="WordPress Optimization stage" data-customizer="wp_app4_img">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5.5: VISUAL IDENTITY / PLATFORM OPTIONS
     White Background — 4 Platform Cards Deck
     ══════════════════════════════════════════ -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="wp_plat_label"><?php echo esc_html(cr8v_mod('wp_plat_label', 'WordPress Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="wp_plat_h2_part1"><?php echo esc_html(cr8v_mod('wp_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="wp_plat_h2_serif"><?php echo esc_html(cr8v_mod('wp_plat_h2_serif', 'WordPress Stack')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;">Whether you need a custom theme build, a WooCommerce store, or an enterprise headless portal:</p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <!-- Option 1 -->
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="wp_plat1_badge"><?php echo esc_html(cr8v_mod('wp_plat1_badge', 'Stack // Custom Theme')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="wp_plat1_title"><?php echo esc_html(cr8v_mod('wp_plat1_title', 'Custom Gutenberg Theme')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="wp_plat1_desc"><?php echo wp_kses_post(cr8v_mod('wp_plat1_desc', 'For businesses requiring custom brand styling, high speed performance, and flexible block editing.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
      </div>

      <!-- Option 2 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="wp_plat2_badge"><?php echo esc_html(cr8v_mod('wp_plat2_badge', 'Stack // Commerce')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="wp_plat2_title"><?php echo esc_html(cr8v_mod('wp_plat2_title', 'WooCommerce E-Commerce')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="wp_plat2_desc"><?php echo wp_kses_post(cr8v_mod('wp_plat2_desc', 'For retail brands requiring self-hosted online store builds with custom checkout and zero platform fees.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>

      <!-- Option 3 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="wp_plat3_badge"><?php echo esc_html(cr8v_mod('wp_plat3_badge', 'Stack // Headless')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="wp_plat3_title"><?php echo esc_html(cr8v_mod('wp_plat3_title', 'Headless WP & Next.js')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="wp_plat3_desc"><?php echo wp_kses_post(cr8v_mod('wp_plat3_desc', 'For tech scale-ups using WordPress as a GraphQL CMS backend powering a decoupled Next.js front-end.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <!-- Option 4 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="wp_plat4_badge"><?php echo esc_html(cr8v_mod('wp_plat4_badge', 'Stack // Retainer')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="wp_plat4_title"><?php echo esc_html(cr8v_mod('wp_plat4_title', 'WordPress Maintenance Retainer')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="wp_plat4_desc"><?php echo wp_kses_post(cr8v_mod('wp_plat4_desc', 'Ongoing monthly speed tuning, plugin updates, security monitoring, and custom layout additions.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;">
      <strong>Need help deciding between a traditional Gutenberg build or a headless setup?</strong> Schedule an initial scoping call to evaluate your technical requirements.
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">Start a WordPress Scoping Call →</a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: FULL CATALOG HOVERLIST (Project Types)
     White Background — 6 Items Capability Index
     ══════════════════════════════════════════ -->
<div class="c8isv-hl-section" id="c8isv-catalog">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="wp_hl_label"><?php echo esc_html(cr8v_mod('wp_hl_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="wp_hl_h2"><?php echo esc_html(cr8v_mod('wp_hl_h2', 'Every Kind of WordPress Site We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="wp_hl_sub"><?php echo wp_kses_post(cr8v_mod('wp_hl_sub', 'From corporate brand sites to WooCommerce stores — hover to inspect the engineering stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <!-- Item 1 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="WordPress PHP" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" data-tech-2="ACF Pro" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl1_title"><?php echo esc_html(cr8v_mod('wp_hl1_title', 'Corporate & B2B Brand Websites')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl1_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl1_tagline', 'High-converting B2B company sites with custom post types and custom block suites.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Corporate Sites</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="WooCommerce" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/woocommerce.svg" data-tech-2="WordPress PHP" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl2_title"><?php echo esc_html(cr8v_mod('wp_hl2_title', 'WooCommerce Online Stores')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl2_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl2_tagline', 'Fast e-commerce storefronts built on WooCommerce with custom cart drawers and gateway wiring.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">WooCommerce</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="WordPress PHP" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" data-tech-2="MySQL" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mysql.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl3_title"><?php echo esc_html(cr8v_mod('wp_hl3_title', 'Real Estate & Listing Portals')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl3_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl3_tagline', 'Property directory portals with dynamic filtering, custom fields, and interactive maps.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Listing Portals</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="GraphQL" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/graphql.svg" data-tech-2="Next.js" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/nextdotjs.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl4_title"><?php echo esc_html(cr8v_mod('wp_hl4_title', 'Headless WP & Next.js Platforms')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl4_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl4_tagline', 'Decoupled WordPress CMS backends streaming content to Next.js or React front-ends via WPGraphQL.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Headless Stack</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="WordPress PHP" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" data-tech-2="ACF Pro" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl5_title"><?php echo esc_html(cr8v_mod('wp_hl5_title', 'Media & Publishing Hubs')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl5_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl5_tagline', 'Editorial news portals optimized for instant page indexing, RSS feeds, and high traffic spikes.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Publishing Hubs</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="WordPress PHP" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" data-tech-2="Elementor" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/elementor.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="wp_hl6_title"><?php echo esc_html(cr8v_mod('wp_hl6_title', 'Wix / Webflow to WP Migrations')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="wp_hl6_tagline"><?php echo wp_kses_post(cr8v_mod('wp_hl6_tagline', 'Migrating proprietary SaaS websites to self-hosted WordPress with 1:1 design and SEO redirects.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Platform Migration</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <!-- 2-Card Fan Stack Preview with SVG CDN Logos -->
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/wordpress.svg" alt="WordPress"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg" alt="PHP"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     Light #F4F6FB — Fanning Stack Animation
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="wp_testi_label"><?php echo esc_html(cr8v_mod('wp_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="wp_testi_h2_part1"><?php echo esc_html(cr8v_mod('wp_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="wp_testi_h2_serif"><?php echo esc_html(cr8v_mod('wp_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <!-- Left Card -->
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wp_testi1_text"><?php echo wp_kses_post(cr8v_mod('wp_testi1_text', 'We needed a property listing platform that didn’t rely on unoptimized starter layouts. The custom Gutenberg blocks let our content editors publish new listings effortlessly while maintaining fast page speeds.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wp_testi1_author"><?php echo esc_html(cr8v_mod('wp_testi1_author', 'David Sterling — Principal Real Estate Architect')); ?></div>
      </div>
      <!-- Center Card -->
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wp_testi2_text"><?php echo wp_kses_post(cr8v_mod('wp_testi2_text', 'Refactoring our WordPress architecture dropped our LCP to 450ms while giving our marketing team total freedom to edit pages in Elementor. Organic search traffic doubled within three months.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wp_testi2_author"><?php echo esc_html(cr8v_mod('wp_testi2_author', 'Amina Bello — Digital Marketing Lead')); ?></div>
      </div>
      <!-- Right Card -->
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="wp_testi3_text"><?php echo wp_kses_post(cr8v_mod('wp_testi3_text', 'The custom ACF field system and database security hardening gave us complete peace of mind. Zero update breaks or security vulnerabilities.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="wp_testi3_author"><?php echo esc_html(cr8v_mod('wp_testi3_author', 'Richard Coleman — Technical Operations Director')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 9: PRICING MODELS & PROJECT ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="wp_pricing_label"><?php echo esc_html(cr8v_mod('wp_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="wp_pricing_h2_part1"><?php echo esc_html(cr8v_mod('wp_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="wp_pricing_h2_serif"><?php echo esc_html(cr8v_mod('wp_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="wp_pricing_desc"><?php echo wp_kses_post(cr8v_mod('wp_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <!-- Retainer Card -->
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Ongoing Support</span>
          <h3 class="c8srv-price-title">Growth Retainer</h3>
          <div class="c8srv-price-amount">$950<span>/mo</span></div>
        </div>
        <p class="c8srv-price-desc">A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dedicated monthly support hours block</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Monthly speed audits &amp; code optimizations</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Design tweaks, copy updates &amp; SEO execution</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light">Secure Retainer Slot</a>
      </div>

      <!-- Fixed Project Card (Featured Highlight) -->
      <div class="c8srv-price-box is-highlight c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Fixed Scope</span>
          <h3 class="c8srv-price-title">Fixed Projects</h3>
          <div class="c8srv-price-amount">From $1,200<span> entry</span></div>
        </div>
        <p class="c8srv-price-desc">Custom WordPress theme build engineered on bloat-stripped base themes and Gutenberg blocks.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Custom Gutenberg block suite &amp; ACF Pro schemas</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Bloat-stripped base theme &amp; proprietary plugin code</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Sub-1.2s page load speed &amp; security hardening</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=project')); ?>" class="c8srv-price-btn is-primary">Start A Project</a>
      </div>
    </div>

    <!-- Scope Estimator Widget -->
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
            <span class="c8srv-est-group-title">1. Core WordPress Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="wptheme" data-est-price="1200">Custom WP Landing ($1,200)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="wpcoresite" data-est-price="1680">Multi-Page WP Business Site ($1,680)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="wpportal" data-est-price="2400">Enterprise Headless WP Portal ($2,400)</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div>
            <span class="c8srv-est-group-title">2. Content &amp; Data Structure</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="standard" data-est-multiplier="1.0">Standard Page Templates</button>
              <button type="button" class="c8srv-est-choice" data-est-val="cpt" data-est-multiplier="1.4">Custom Post Types &amp; ACF Pro Schemas</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div>
            <span class="c8srv-est-group-title">3. Engineering Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="acf" data-est-price="400">ACF Pro Dynamic Fields (+ $400)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="sec" data-est-price="500">Security &amp; Firewall Hardening (+ $500)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display">$1,200 - $1,500</div>
          
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Custom theme build &amp; setup</div><div>• Zero-bloat optimized speed architecture</div><div>• Up to 5 editable layout pages</div></div>

          <a href="<?php echo esc_url(home_url('/contact/?platform=wordpress&est=1200-1500')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
          <a href="<?php echo esc_url(home_url('/toolkits/website-cost-calculator/')); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 10: FAQ (Sticky 2-Column Layout)
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
      <div class="faq-eyebrow" data-customizer="wp_faq_eyebrow"><?php echo esc_html(cr8v_mod('wp_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
      <h2 class="faq-h2" data-customizer="wp_faq_h2"><?php echo esc_html(cr8v_mod('wp_faq_h2', 'WordPress Questions, Answered Honestly')); ?></h2>
      <p class="faq-sub" data-customizer="wp_faq_sub"><?php echo wp_kses_post(cr8v_mod('wp_faq_sub', 'Clear answers to common questions about our custom WordPress design, Gutenberg block engineering, and site security processes.')); ?></p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
    </div>

    <ul class="faq-list" id="srv-faq-list">
      <li class="faq-item is-open">
        <button class="faq-trigger" aria-expanded="true">
          <span class="faq-q" data-customizer="wp_faq1_q"><?php echo esc_html(cr8v_mod('wp_faq1_q', 'Why build on WordPress instead of Webflow, Framer, or Wix?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body" style="grid-template-rows: 1fr;">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq1_a"><?php echo wp_kses_post(cr8v_mod('wp_faq1_a', 'Webflow, Framer, and Wix lock you into proprietary SaaS platforms with limited database functionality, recurring subscription taxes, and zero data portability. WordPress gives you 100% data ownership, self-hosted control, unlimited custom plugins, and total editorial freedom without SaaS platform lock-in.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="wp_faq2_q"><?php echo esc_html(cr8v_mod('wp_faq2_q', 'How much does a custom WordPress website cost?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq2_a"><?php echo wp_kses_post(cr8v_mod('wp_faq2_a', 'Our fixed-scope WordPress projects start from $1,200 for a custom theme build, responsive layouts, and speed optimization. The final investment scales with the number of page layouts, custom post types, and specialized plugin integrations. We scope every project individually and provide a clear milestone quote.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="wp_faq3_q"><?php echo esc_html(cr8v_mod('wp_faq3_q', 'Why hire an agency like Cr8v Stacks instead of a solo freelancer?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq3_a"><?php echo wp_kses_post(cr8v_mod('wp_faq3_a', 'Solo freelancers often handle design, code, and security as a single person, leading to missed deadlines or incomplete documentation. Cr8v Stacks provides a dedicated multi-disciplinary team — combining brand strategy, Figma UI/UX, senior PHP engineering, and technical SEO — backed by formal contracts and SLA support.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="wp_faq4_q"><?php echo esc_html(cr8v_mod('wp_faq4_q', 'Do you handle platform migrations from Wix, Webflow, or Shopify to WordPress?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq4_a"><?php echo wp_kses_post(cr8v_mod('wp_faq4_a', 'Yes. We execute seamless migrations from proprietary platforms like Wix, Webflow, and Shopify over to self-hosted WordPress — transferring all blog posts, pages, media libraries, and setting up precise 301 URL redirect maps to protect your organic search rankings.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="wp_faq5_q"><?php echo esc_html(cr8v_mod('wp_faq5_q', 'How long does a custom WordPress website project take?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq5_a"><?php echo wp_kses_post(cr8v_mod('wp_faq5_a', 'A standard custom WordPress theme project with 3-5 bespoke page layouts takes approximately 3 to 4 weeks from initial wireframe sign-off to live launch. Complex e-commerce integrations or enterprise portals take 4 to 6 weeks.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="wp_faq6_q"><?php echo esc_html(cr8v_mod('wp_faq6_q', 'Will I be able to edit page content myself without writing code?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="wp_faq6_a"><?php echo wp_kses_post(cr8v_mod('wp_faq6_a', 'Yes. We configure Elementor or native WordPress Block Editor (Gutenberg) custom blocks and custom fields (ACF Pro) so your team can easily update headings, text, media, and portfolio showcases through an intuitive dashboard without touching code.')); ?></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ══════════════════════════════════════════
     SECTION 11: RELATED SERVICES (Dark #080808)
     ══════════════════════════════════════════ -->
<div class="c8isv-related-outer">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal is-muted">Other Ways We Build</div>
    <h2 class="c8isv-section-title c8isv-reveal">Related Services</h2>
    <p class="c8isv-lead c8isv-reveal">WordPress Development is one of several services we offer. If a custom WordPress theme build is not what you need, check these out.</p>
    <div class="c8isv-related-grid">
      <a href="<?php echo esc_url(home_url('/shopify/')); ?>" class="c8isv-related-card c8isv-reveal">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        </div>
        <span class="c8isv-related-card-platform">01 / Shopify</span>
        <h3 class="c8isv-related-card-title">Shopify Storefronts</h3>
        <p class="c8isv-related-card-desc">Custom Liquid theme development. App-free cart and checkout. Shopify-native performance without the template tax — for brands that want speed with Shopify's hosted infrastructure.</p>
        <span class="c8isv-related-card-link">Explore Shopify →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/ecommerce/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">02 / E-Commerce</span>
        <h3 class="c8isv-related-card-title">WooCommerce Custom Stores</h3>
        <p class="c8isv-related-card-desc">Self-hosted WordPress e-commerce. Custom PHP themes, zero plugin overhead, and payment gateway wiring. Perfect for brands that want full database ownership with no platform licensing fees.</p>
        <span class="c8isv-related-card-link">Explore WooCommerce →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/custom-dev/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <span class="c8isv-related-card-platform">03 / Custom Dev</span>
        <h3 class="c8isv-related-card-title">Custom Development</h3>
        <p class="c8isv-related-card-desc">Custom web applications, client portals, and administrative dashboards built precisely from scratch using React, Node.js, and relational SQL databases.</p>
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

  // Folder Stack 3D Animation Script
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

  // Scope Estimator Calculation Engine
  var choices = root.querySelectorAll('.c8srv-est-choice');
  var rangeDisplay = root.querySelector('#est-range-display');
  var deliverablesList = root.querySelector('#est-deliverables-list');
  var estCta = root.querySelector('#est-cta-link');

  var platformBases = {
    wptheme: { price: 1200, deliverables: ["Custom Gutenberg Block Suite Architecture", "Zero-Bloat Base Theme Code (No Page Builders)", "Sub-1.2s PageSpeed Optimization"] },
    wpcoresite: { price: 1680, deliverables: ["Custom Post Types & Taxonomy System", "Advanced Custom Fields (ACF Pro) Integration", "Role-Based Client Admin Access Panel"] },
    wpportal: { price: 2400, deliverables: ["Headless / Enterprise WP Portal Architecture", "Multi-Language & Custom API Endpoint Suite", "Continuous Security & Firewall Hardening"] }
  };

  var estimatorAddons = {
    none: { price: 0, deliverables: [] },
    acf: { price: 400, deliverables: ['ACF Pro Custom Field Schemas & Flexible Blocks'] },
    sec: { price: 500, deliverables: ['WordPress Security Hardening & Firewall Protocol'] }
  };

  var scaleDescriptions = {
    standard: 'Standard page templates with native Gutenberg blocks',
    cpt: 'Custom Post Types (CPT) & advanced relational database schemas'
  };

  function updateEstimate() {
    var activePlatformBtn = root.querySelector('[data-est-group="platform"] .c8srv-est-choice.is-active') || choices[0];
    var activeScaleBtn = root.querySelector('[data-est-group="scale"] .c8srv-est-choice.is-active');
    var activeGrowthBtn = root.querySelector('[data-est-group="growth"] .c8srv-est-choice.is-active');

    var platformVal = activePlatformBtn ? activePlatformBtn.getAttribute('data-est-val') : 'wptheme';
    var basePrice = platformBases[platformVal] ? platformBases[platformVal].price : 1200;
    var scaleMult = activeScaleBtn ? parseFloat(activeScaleBtn.getAttribute('data-est-multiplier')) || 1.0 : 1.0;
    var scaleVal = activeScaleBtn ? activeScaleBtn.getAttribute('data-est-val') || 'standard' : 'standard';
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
