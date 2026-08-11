<?php
/**
 * Template Name: Service — AI MVP Development
 * Description: AI MVP Development Service Page Template with 100% Customizer Control Parity
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('aimvp_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('aimvp_hero_crumb_child', 'AI MVP DEVELOPMENT')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="aimvp_hero_label"><?php echo esc_html(cr8v_mod('aimvp_hero_label', 'Autonomous AI Systems & LLM Application Engineering')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="aimvp_hero_h1_part1"><?php echo esc_html(cr8v_mod('aimvp_hero_h1_part1', 'Launchable AI MVPs ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_hero_h1_serif"><?php echo esc_html(cr8v_mod('aimvp_hero_h1_serif', '& LLM Prototypes')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="aimvp_hero_intro"><?php echo wp_kses_post(cr8v_mod('aimvp_hero_intro', 'Rapid prototype engineering for AI-powered web products. We integrate OpenAI, Claude, Gemini, Supabase, and vector databases into production-ready MVPs in 3 weeks.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('aimvp_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="aimvp_hero_cta1_text"><?php echo esc_html(cr8v_mod('aimvp_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('aimvp_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="aimvp_hero_cta2_text"><?php echo esc_html(cr8v_mod('aimvp_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill1"><?php echo esc_html(cr8v_mod('aimvp_hero_pill1', 'Python')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill2"><?php echo esc_html(cr8v_mod('aimvp_hero_pill2', 'OpenAI API')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill3"><?php echo esc_html(cr8v_mod('aimvp_hero_pill3', 'Claude')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill4"><?php echo esc_html(cr8v_mod('aimvp_hero_pill4', 'Supabase')); ?></span>
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
     SECTION 2: WHY CUSTOM AI MVP (Flank Cards Stack)
     Light #F4F6FB
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_flank_label"><?php echo esc_html(cr8v_mod('aimvp_flank_label', 'Why Custom AI MVP')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_flank_h2"><?php echo esc_html(cr8v_mod('aimvp_flank_h2', 'Build Real Product Value, Not Temporary SaaS Wrappers')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank1_step"><?php echo esc_html(cr8v_mod('aimvp_flank1_step', 'Strategy // Risk Reduction')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank1_title"><?php echo esc_html(cr8v_mod('aimvp_flank1_title', 'De-Risk Product Innovation')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank1_desc', 'Test core generative features and user adoption with a live, functional prototype before committing massive capital to full-scale software development.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank2_step"><?php echo esc_html(cr8v_mod('aimvp_flank2_step', 'Efficiency // Custom Pipelines')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank2_title"><?php echo esc_html(cr8v_mod('aimvp_flank2_title', 'Proprietary Workflow Automation')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank2_desc', 'Automate high-friction operational tasks, internal document search, or content drafting workflows engineered specifically for your business logic.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank3_step"><?php echo esc_html(cr8v_mod('aimvp_flank3_step', 'Security // Confidential APIs')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank3_title"><?php echo esc_html(cr8v_mod('aimvp_flank3_title', 'Confidential Data Pipelines')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank3_desc', 'Configure enterprise API endpoints with strict Zero-Data-Retention privacy policies, keeping user inputs and internal company data completely private.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank4_step"><?php echo esc_html(cr8v_mod('aimvp_flank4_step', 'Ownership // 100% Code')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank4_title"><?php echo esc_html(cr8v_mod('aimvp_flank4_title', '100% Intellectual Property')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank4_desc', 'Own your custom system prompts, vector database schemas, and frontend source code outright without relying on restrictive third-party SaaS tools.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 3: OUR WORK (Portfolio Showcase)
     White Background — WP Publishion AI Showcase
     ══════════════════════════════════════════ -->
<div class="c8isv-portfolio-outer">
  <div class="c8isv-portfolio-inner">
    <div class="c8isv-portfolio-head">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_port_label"><?php echo esc_html(cr8v_mod('aimvp_port_label', 'Our Work')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_port_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_port_h2_part1', 'Built for Real Outcomes, ')); ?></span><br><span class="c8isv-serif" data-customizer="aimvp_port_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_port_h2_serif', 'Not Just Concepts')); ?></span></h2>
    </div>
    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-img">
        <img src="<?php echo esc_url(cr8v_mod('aimvp_port_img', 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop')); ?>" alt="WP Publishion AI — built by Cr8v Stacks" data-customizer="aimvp_port_img">
      </div>
      <div class="c8isv-portfolio-info">
        <span class="c8isv-portfolio-client" data-customizer="aimvp_port_client"><?php echo esc_html(cr8v_mod('aimvp_port_client', 'Case Study — WP Publishion AI')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="aimvp_port_title"><?php echo esc_html(cr8v_mod('aimvp_port_title', 'Our Own AI Product, Built In-House')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="aimvp_port_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_port_desc', 'WP Publishion AI is our own AI content-writing tool for WordPress, built to draft fact-checked, SEO-rich articles directly inside the block editor — integrating Claude, Gemini, and OpenAI with Brave Search fact-verification.')); ?></p>
        <div class="c8isv-portfolio-stats">
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="aimvp_port_stat1_val"><?php echo esc_html(cr8v_mod('aimvp_port_stat1_val', '3')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="aimvp_port_stat1_lbl"><?php echo esc_html(cr8v_mod('aimvp_port_stat1_lbl', 'LLMs Integrated (Claude, Gemini, OpenAI)')); ?></span>
          </div>
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="aimvp_port_stat2_val"><?php echo esc_html(cr8v_mod('aimvp_port_stat2_val', '1')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="aimvp_port_stat2_lbl"><?php echo esc_html(cr8v_mod('aimvp_port_stat2_lbl', 'Built In-House By Our Team')); ?></span>
          </div>
        </div>
        <div class="c8isv-portfolio-deliverables">
          <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
          <div class="c8isv-portfolio-pills">
            <span class="c8isv-portfolio-pill">Python FastAPI Backend</span>
            <span class="c8isv-portfolio-pill">Claude &amp; OpenAI APIs</span>
            <span class="c8isv-portfolio-pill">Brave Search Fact-Checker</span>
            <span class="c8isv-portfolio-pill">Vector Database Engine</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url(cr8v_mod('aimvp_port_btn_url', '/case-studies/wp-publishion-ai/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="aimvp_port_btn_text"><?php echo esc_html(cr8v_mod('aimvp_port_btn_text', 'View Case Study →')); ?></a>
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
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_folder_label"><?php echo esc_html(cr8v_mod('aimvp_folder_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_folder_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_folder_h2_part1', 'Every layer of your AI product, ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_folder_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_folder_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="aimvp_folder_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder_desc', 'LLM API orchestration, prompt engineering pipelines, vector memory stores, user authentication, and web interface frontends.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <!-- Card 1 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder1_tab"><?php echo esc_html(cr8v_mod('aimvp_folder1_tab', '01 // LLM Pipeline')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder1_title"><?php echo esc_html(cr8v_mod('aimvp_folder1_title', 'Multi-Model API Orchestration')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder1_desc', 'Wiring OpenAI, Claude, and Gemini APIs with structured JSON output schemas and fallback error handling.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss LLM pipelines →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Multi-Model API Orchestration">
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder2_tab"><?php echo esc_html(cr8v_mod('aimvp_folder2_tab', '02 // Memory Store')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder2_title"><?php echo esc_html(cr8v_mod('aimvp_folder2_title', 'Vector DB & RAG Integration')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder2_desc', 'Setting up Supabase pgvector or Pinecone embeddings for intelligent context retrieval and document search.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss vector memory →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Vector DB & RAG Integration">
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder3_tab"><?php echo esc_html(cr8v_mod('aimvp_folder3_tab', '03 // Interface')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder3_title"><?php echo esc_html(cr8v_mod('aimvp_folder3_title', 'React & Next.js AI Interface')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder3_desc', 'Building responsive chat, document generator, and workflow dashboards with stream response rendering.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss AI interfaces →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="React & Next.js AI Interface">
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder4_tab"><?php echo esc_html(cr8v_mod('aimvp_folder4_tab', '04 // Verification')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder4_title"><?php echo esc_html(cr8v_mod('aimvp_folder4_title', 'Real-time Fact Verification')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder4_desc', 'Connecting Brave Search API or Tavily web search engines to ground AI responses against live internet data.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss fact verification →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Real-time Fact Verification">
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder5_tab"><?php echo esc_html(cr8v_mod('aimvp_folder5_tab', '05 // Auth & Scale')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder5_title"><?php echo esc_html(cr8v_mod('aimvp_folder5_title', 'User Auth & API Token Metering')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder5_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder5_desc', 'Configuring Supabase Auth, user token usage limits, Stripe API subscription metering, and rate controls.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss auth & metering →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="User Auth & API Token Metering">
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
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_app_label"><?php echo esc_html(cr8v_mod('aimvp_app_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_app_h2"><?php echo esc_html(cr8v_mod('aimvp_app_h2', 'Our Engineering Roadmap')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="aimvp_app_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_app_sub', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <!-- Stage 1 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app1_num"><?php echo esc_html(cr8v_mod('aimvp_app1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app1_name"><?php echo esc_html(cr8v_mod('aimvp_app1_name', 'Discover')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app1_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app1_tags', 'Prompts &middot; Workflows &middot;<br>Model Choice')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app1_desc', 'We map product requirements, select target LLM models, define system prompts, and architect user interaction flows.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop" alt="AI MVP Discovery stage">
        </div>
      </div>
    </div>

    <!-- Stage 2 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app2_num"><?php echo esc_html(cr8v_mod('aimvp_app2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app2_name"><?php echo esc_html(cr8v_mod('aimvp_app2_name', 'Prototype')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app2_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app2_tags', 'API Pipeline &middot; Prompts &middot;<br>RAG')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app2_desc', 'We build the core AI backend, test prompt responses against edge cases, and integrate retrieval vector stores.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop" alt="AI MVP prototyping stage">
        </div>
      </div>
    </div>

    <!-- Stage 3 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app3_num"><?php echo esc_html(cr8v_mod('aimvp_app3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app3_name"><?php echo esc_html(cr8v_mod('aimvp_app3_name', 'Interface')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app3_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app3_tags', 'React UI &middot; Streaming &middot;<br>Auth')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app3_desc', 'We design and code a polished client interface with streaming token response rendering and user authentication.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop" alt="AI MVP interface setup stage">
        </div>
      </div>
    </div>

    <!-- Stage 4 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app4_num"><?php echo esc_html(cr8v_mod('aimvp_app4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app4_name"><?php echo esc_html(cr8v_mod('aimvp_app4_name', 'Launch')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app4_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app4_tags', 'QA &middot; Testing &middot;<br>Deployment')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app4_desc', 'We execute prompt security audits, test rate limits, and deploy your working AI MVP to production servers.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" alt="AI MVP launch deployment stage">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5.5: AI STACK OPTIONS
     White Background — 4 Platform Cards Deck
     ══════════════════════════════════════════ -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_plat_label"><?php echo esc_html(cr8v_mod('aimvp_plat_label', 'AI Stack Engineering Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="aimvp_plat_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_plat_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_plat_h2_serif', 'AI Architecture')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;">Whether you need a generative content tool, a specialized RAG document agent, a chat interface, or a workflow automation tool:</p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <!-- Option 1 -->
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat1_badge"><?php echo esc_html(cr8v_mod('aimvp_plat1_badge', 'Stack // Generative')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat1_title"><?php echo esc_html(cr8v_mod('aimvp_plat1_title', 'Generative Content Engines')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat1_desc', 'For automated article drafting, copy generation, or asset creation tools powered by Claude and GPT-4.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
      </div>

      <!-- Option 2 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat2_badge"><?php echo esc_html(cr8v_mod('aimvp_plat2_badge', 'Stack // RAG')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat2_title"><?php echo esc_html(cr8v_mod('aimvp_plat2_title', 'RAG & Knowledge Agents')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat2_desc', 'For querying PDF documents, internal database knowledge bases, or policy archives with vector search.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>

      <!-- Option 3 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat3_badge"><?php echo esc_html(cr8v_mod('aimvp_plat3_badge', 'Stack // Chat')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat3_title"><?php echo esc_html(cr8v_mod('aimvp_plat3_title', 'Conversational AI Interfaces')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat3_desc', 'For real-time streaming chat assistants, customer onboarding bots, or domain-specific advisors.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <!-- Option 4 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat4_badge"><?php echo esc_html(cr8v_mod('aimvp_plat4_badge', 'Stack // Workflow')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat4_title"><?php echo esc_html(cr8v_mod('aimvp_plat4_title', 'Autonomous Workflow Agents')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat4_desc', 'For multi-step background task processing, data extraction, and API automation pipelines.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;">
      <strong>Not sure which model architecture fits your idea?</strong> Tell us your vision and we'll recommend the right LLM pipeline during our initial scoping call.
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">Start an AI Scoping Call →</a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: FULL CATALOG HOVERLIST (Project Types)
     White Background — 6 Items Capability Index
     ══════════════════════════════════════════ -->
<div class="c8isv-hl-section" id="c8isv-catalog">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_hl_label"><?php echo esc_html(cr8v_mod('aimvp_hl_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_hl_h2"><?php echo esc_html(cr8v_mod('aimvp_hl_h2', 'Every Kind of AI Product We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="aimvp_hl_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_hl_sub', 'From generative content engines to intelligent document agents — hover to inspect the AI stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <!-- Item 1 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Python" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg" data-tech-2="OpenAI API" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl1_title"><?php echo esc_html(cr8v_mod('aimvp_hl1_title', 'Generative Content & Writing Tools')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl1_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl1_tagline', 'AI content generators, SEO article drafters, and marketing copy tools with fact-checking.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Generative AI</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Supabase" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/supabase.svg" data-tech-2="Claude" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/anthropic.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl2_title"><?php echo esc_html(cr8v_mod('aimvp_hl2_title', 'RAG Document Search & Knowledge Bots')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl2_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl2_tagline', 'Searching and summarizing large PDF archives, technical manuals, and corporate databases.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">RAG Search</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="React" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg" data-tech-2="OpenAI API" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl3_title"><?php echo esc_html(cr8v_mod('aimvp_hl3_title', 'Intelligent Chatbots & Conversational UX')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl3_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl3_tagline', 'Streaming conversational interfaces with persistent memory, user session history, and custom system prompts.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Chat UI</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="Python" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg" data-tech-2="Supabase" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/supabase.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl4_title"><?php echo esc_html(cr8v_mod('aimvp_hl4_title', 'AI Workflow Automation & Data Extractors')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl4_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl4_tagline', 'Automated data extraction from invoices, emails, and unstructured web content into structured JSON.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Workflows</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="React" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/react.svg" data-tech-2="Python" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl5_title"><?php echo esc_html(cr8v_mod('aimvp_hl5_title', 'AI Image & Asset Generation Portals')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl5_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl5_tagline', 'Integrating Midjourney API, Flux, or Stable Diffusion for bespoke image generation dashboards.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Image AI</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="PHP" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg" data-tech-2="OpenAI API" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl6_title"><?php echo esc_html(cr8v_mod('aimvp_hl6_title', 'WordPress & CMS AI Integrations')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl6_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl6_tagline', 'Building custom plugins that bring AI content generation and automated translation inside CMS dashboards.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">CMS Integrations</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <!-- 2-Card Fan Stack Preview with SVG CDN Logos -->
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg" alt="Python"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg" alt="OpenAI API"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     Light #F4F6FB — Fanning Stack Animation
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_testi_label"><?php echo esc_html(cr8v_mod('aimvp_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_testi_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_testi_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <!-- Left Card -->
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi1_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi1_text', 'Cr8v Stacks took our prompt workflow concept and turned it into a working AI prototype in just 3 weeks. The streaming UI and vector search integration exceeded our expectations.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi1_author"><?php echo esc_html(cr8v_mod('aimvp_testi1_author', 'Principal Founder — AI Product Suite')); ?></div>
      </div>
      <!-- Center Card -->
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi2_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi2_text', 'Integrating Claude and Supabase vector embeddings was handled with incredible speed. We validated our product idea with real users ahead of schedule.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi2_author"><?php echo esc_html(cr8v_mod('aimvp_testi2_author', 'Siddharth Rao — Senior Product Lead')); ?></div>
      </div>
      <!-- Right Card -->
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi3_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi3_text', 'The multi-LLM routing setup reduced our API costs by 40% while maintaining fast response times. Outstanding AI engineering capability.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi3_author"><?php echo esc_html(cr8v_mod('aimvp_testi3_author', 'Chloe Bennett — Chief Technology Officer')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 9: PRICING MODELS & PROJECT ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="aimvp_pricing_label"><?php echo esc_html(cr8v_mod('aimvp_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="aimvp_pricing_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_pricing_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="aimvp_pricing_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

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
          <div class="c8srv-price-amount" style="color: #FFFFFF !important;"><span class="c8srv-price-period" style="color: rgba(255,255,255,0.7) !important;">From </span><span class="c8srv-price-num" style="color: #FFFFFF !important;">$3,500</span><span class="c8srv-price-period" style="color: rgba(255,255,255,0.7) !important;"> entry</span></div>
        </div>
        <p class="c8srv-price-desc" style="color: rgba(255,255,255,0.8) !important;">Production-ready AI software sprint delivering a working product prototype to market in 14 business days.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Multi-LLM API orchestration (OpenAI, Claude, &amp; Gemini)</span>
          </div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Vector search index &amp; RAG document pipeline</span>
          </div>
          <div class="c8srv-price-feature" style="color: #FFFFFF !important;">
            <span class="c8srv-icon-sq" style="background:#FFFFFF !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0047E1" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>14-day rapid market-validation prototype</span>
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
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">1. Core AI MVP Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="prototype" data-est-price="3500">14-Day AI Prototype ($3,500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="fullapp" data-est-price="4900">Full AI Web Application ($4,900)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="enterprise" data-est-price="7000">Enterprise AI Platform ($7,000)</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div>
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">2. Product Workflow Scale</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="single" data-est-multiplier="1.0">Single User Flow</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multirole" data-est-multiplier="1.4">Multi-Role Platform Architecture</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div>
            <span class="c8srv-est-group-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.9rem; color:#080808; display:block; margin-bottom:0.4rem;">3. Advanced Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="rag" data-est-price="1200">Vector Search RAG Pipeline (+ $1,200)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="dbauth" data-est-price="800">Supabase DB &amp; User Auth (+ $800)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result" style="background:#FAFAF7; padding:2rem; border-radius:4px; border:1px solid rgba(8,8,8,0.08);">
          <span class="c8srv-est-range-label" style="font-family:'Space Mono',monospace; font-size:0.75rem; color:#6B6B6B; text-transform:uppercase; display:block; margin-bottom:0.3rem;">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display" style="font-family:'Michroma',sans-serif; font-size:1.8rem; color:#0047E1; font-weight:700; margin-bottom:1.5rem;">$3,500 - $4,375</div>
          
          <span class="c8srv-est-deliverables-title" style="font-family:'DM Sans',sans-serif; font-weight:700; font-size:0.85rem; color:#080808; display:block; margin-bottom:0.5rem;">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list" style="font-family:'DM Sans',sans-serif; font-size:0.85rem; color:#555555; line-height:1.6; margin-bottom:1.5rem;"><div>• AI LLM fine-tuning &amp; prompt layer setup</div><div>• Brave Search fact-checking API integration</div><div>• Immediate working MVP launch in 3 weeks</div></div>

          <a href="<?php echo esc_url(home_url('/contact/?platform=aimvp&est=3500-4375')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important; display:block; text-align:center;">Submit Scope Request</a>
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
        <div class="c8isv-label c8srv-reveal" data-customizer="aimvp_faq_eyebrow"><?php echo esc_html(cr8v_mod('aimvp_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
        <h2 class="c8isv-section-title c8srv-reveal" data-customizer="aimvp_faq_h2"><?php echo esc_html(cr8v_mod('aimvp_faq_h2', 'AI MVP Questions, Answered Honestly')); ?></h2>
        <p class="c8isv-lead c8srv-reveal" style="margin-bottom: 2rem !important;" data-customizer="aimvp_faq_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_faq_sub', 'Clear answers to common questions about our AI prototype engineering, vector databases, and LLM API integrations.')); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>

      <div class="c8srv-faq-right">
        <ul class="faq-list">
          <li class="faq-item is-open">
            <button class="faq-trigger" aria-expanded="true">
              <span class="faq-q" data-customizer="aimvp_faq1_q"><?php echo esc_html(cr8v_mod('aimvp_faq1_q', 'How fast can you build and launch a working AI MVP?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body" style="grid-template-rows: 1fr;">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq1_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq1_a', 'Our standard AI MVP rapid prototype sprint delivers a functional, production-ready web application with LLM integration, user authentication, and streaming UI in 14 to 21 business days.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="aimvp_faq2_q"><?php echo esc_html(cr8v_mod('aimvp_faq2_q', 'Which LLM models do you integrate into custom AI apps?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq2_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq2_a', 'We integrate leading LLM providers including OpenAI (GPT-4o), Anthropic (Claude 3.5 Sonnet), Google Gemini 1.5, and open-source models hosted via Replicate or HuggingFace.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="aimvp_faq3_q"><?php echo esc_html(cr8v_mod('aimvp_faq3_q', 'How do you keep our company data and user prompts confidential?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq3_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq3_a', 'We configure enterprise zero-data-retention API endpoints, private vector databases in Supabase or Pinecone, and strict client-side encryption so user data is never used to train public LLM models.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="aimvp_faq4_q"><?php echo esc_html(cr8v_mod('aimvp_faq4_q', 'What is RAG (Retrieval-Augmented Generation) and do we need it?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq4_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq4_a', 'RAG allows AI models to read your internal PDF files, database records, and custom knowledge documents before generating answers. It is essential if your AI tool needs to provide accurate, factual responses based on your proprietary business data.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="aimvp_faq5_q"><?php echo esc_html(cr8v_mod('aimvp_faq5_q', 'How much does an AI MVP development project cost?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq5_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq5_a', 'Our fixed-scope AI MVP development sprints start from $3,500 for a 14-day working prototype. Pricing scales based on vector database complexity, multi-model API orchestration, and user subscription payment gateways.')); ?></p>
              </div>
            </div>
          </li>

          <li class="faq-item">
            <button class="faq-trigger" aria-expanded="false">
              <span class="faq-q" data-customizer="aimvp_faq6_q"><?php echo esc_html(cr8v_mod('aimvp_faq6_q', 'Who owns the AI MVP codebase and system prompts?')); ?></span>
              <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
            </button>
            <div class="faq-body">
              <div class="faq-body-inner">
                <p class="faq-a" data-customizer="aimvp_faq6_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq6_a', 'You own 100% of the frontend code, backend API scripts, system prompts, vector database schemas, and intellectual property upon final project delivery.')); ?></p>
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
      <span class="c8isv-cta-tag" data-customizer="aimvp_cta_label"><?php echo esc_html(cr8v_mod('aimvp_cta_label', 'READY TO BUILD?')); ?></span>
      <h2 class="c8isv-cta-title"><span data-customizer="aimvp_cta_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_cta_h2_part1', 'Let’s Engineer Your Custom ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_cta_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_cta_h2_serif', 'AI MVP')); ?></span></h2>
      <p class="c8isv-cta-desc" data-customizer="aimvp_cta_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_cta_desc', 'Tell us about your project requirements and get a complete price quote and timeline proposal within 24 hours.')); ?></p>
      <a href="<?php echo esc_url(home_url(cr8v_mod('aimvp_cta_btn_url', '/discovery-call/'))); ?>" class="c8isv-cta-btn" data-customizer="aimvp_cta_btn_text"><?php echo esc_html(cr8v_mod('aimvp_cta_btn_text', 'Book Strategy Call →')); ?></a>
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

  var currentBasePrice = 3500;
  var currentMultiplier = 1.0;
  var currentAddonPrice = 0;
  var currentPlatformCode = 'aimvp';

  function updateEstimator() {
    var low = Math.round((currentBasePrice * currentMultiplier) + currentAddonPrice);
    var high = Math.round(low * 1.25);

    if (estRange) estRange.textContent = '$' + low.toLocaleString() + ' - $' + high.toLocaleString();

    if (estDeliv) {
      if (currentPlatformCode === 'enterprise') {
        estDeliv.innerHTML = '<div>• Enterprise multi-LLM orchestration platform</div><div>• Custom vector database index &amp; fine-tuning</div><div>• High-throughput API gateway &amp; user auth</div>';
      } else if (currentPlatformCode === 'fullapp') {
        estDeliv.innerHTML = '<div>• Full React / Next.js AI web application</div><div>• OpenAI / Claude streaming API backend</div><div>• User token usage limits &amp; Stripe metering</div>';
      } else {
        estDeliv.innerHTML = '<div>• AI LLM fine-tuning &amp; prompt layer setup</div><div>• Brave Search fact-checking API integration</div><div>• Immediate working MVP launch in 3 weeks</div>';
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
