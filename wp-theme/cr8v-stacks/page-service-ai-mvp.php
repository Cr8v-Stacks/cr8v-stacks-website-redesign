<?php
/**
 * Template Name: Service — AI MVP Engineering
 * Description: AI MVP Engineering Service Page Template with 100% Customizer Control Parity & Exact Layout Parity
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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html(cr8v_mod('aimvp_hero_crumb_parent', 'SERVICES')); ?></a> <span>/</span> <span class="is-current"><?php echo esc_html(cr8v_mod('aimvp_hero_crumb_child', 'AI MVP ENGINEERING')); ?></span></div>
        <div class="c8isv-label is-light" data-customizer="aimvp_hero_label"><?php echo esc_html(cr8v_mod('aimvp_hero_label', 'Rapid AI Product Development & Prototyping')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="aimvp_hero_h1_part1"><?php echo esc_html(cr8v_mod('aimvp_hero_h1_part1', 'AI MVP Development ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_hero_h1_serif"><?php echo esc_html(cr8v_mod('aimvp_hero_h1_serif', '& LLM Engineering')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="aimvp_hero_intro"><?php echo wp_kses_post(cr8v_mod('aimvp_hero_intro', 'Turn your artificial intelligence concepts into market-ready SaaS products in 14 days with custom OpenAI/Claude integrations, RAG vector pipelines, and autonomous agent workflows.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('aimvp_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="aimvp_hero_cta1_text"><?php echo esc_html(cr8v_mod('aimvp_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('aimvp_hero_cta2_url', '/discovery-call/'))); ?>" class="c8isv-btn-ghost" data-customizer="aimvp_hero_cta2_text"><?php echo esc_html(cr8v_mod('aimvp_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill1"><?php echo esc_html(cr8v_mod('aimvp_hero_pill1', 'OpenAI & Claude API')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill2"><?php echo esc_html(cr8v_mod('aimvp_hero_pill2', 'LangChain & LlamaIndex')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill3"><?php echo esc_html(cr8v_mod('aimvp_hero_pill3', 'Pinecone Vector DB')); ?></span>
          <span class="c8isv-pill" data-customizer="aimvp_hero_pill4"><?php echo esc_html(cr8v_mod('aimvp_hero_pill4', '14-Day Sprint')); ?></span>
        </div>
      </div>
      
      <!-- Right Side Hero Visual: Transparent Animated Logo Video -->
      <div class="c8isv-anim-container" id="c8isv-anim-wrapper" style="display: flex; align-items: center; justify-content: center; background: transparent; border: none; box-shadow: none;">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback style="width: 100%; max-width: 440px; height: auto; display: block; object-fit: contain; background: transparent;">
          <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2.webm'); ?>" type="video/webm">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2.gif'); ?>" alt="Cr8v Stacks Animated Logo Visual" style="width: 100%; max-width: 440px; height: auto; display: block;">
        </video>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 2: WHY AI MVP -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_flank_label"><?php echo esc_html(cr8v_mod('aimvp_flank_label', 'Why AI MVP Engineering')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_flank_h2"><?php echo esc_html(cr8v_mod('aimvp_flank_h2', 'Ship Functional AI Products Before Your Competitors')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank1_step"><?php echo esc_html(cr8v_mod('aimvp_flank1_step', 'Velocity // Launch')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank1_title"><?php echo esc_html(cr8v_mod('aimvp_flank1_title', '14-Day Rapid Production Sprint')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank1_desc', 'We skip endless slide decks and build working production prototypes connected to LLM APIs in just two weeks.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank2_step"><?php echo esc_html(cr8v_mod('aimvp_flank2_step', 'RAG // Search')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank2_title"><?php echo esc_html(cr8v_mod('aimvp_flank2_title', 'Custom RAG Vector Search')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank2_desc', 'Connecting Pinecone or Qdrant vector databases to ground AI model responses in your proprietary business data.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank3_step"><?php echo esc_html(cr8v_mod('aimvp_flank3_step', 'Agents // Automation')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank3_title"><?php echo esc_html(cr8v_mod('aimvp_flank3_title', 'Autonomous Agent Workflows')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank3_desc', 'Engineering multi-step agent chains with LangChain and AutoGen to execute complex task sequences autonomously.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg></div>
      </div>
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="aimvp_flank4_step"><?php echo esc_html(cr8v_mod('aimvp_flank4_step', 'Monetization // SaaS')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="aimvp_flank4_title"><?php echo esc_html(cr8v_mod('aimvp_flank4_title', 'Production SaaS Integration')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="aimvp_flank4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_flank4_desc', 'Integrating Stripe usage metering, user authentication, and rate limiting so you can start charging users immediately.')); ?></p>
        <div class="c8isv-flank-card-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 3: OUR WORK -->
<div class="c8isv-portfolio-outer">
  <div class="c8isv-portfolio-inner">
    <div class="c8isv-portfolio-head">
      <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_port_label"><?php echo esc_html(cr8v_mod('aimvp_port_label', 'Our Work')); ?></div>
      <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_port_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_port_h2_part1', 'Built for Real Outcomes, ')); ?></span><br><span class="c8isv-serif" data-customizer="aimvp_port_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_port_h2_serif', 'Not Just Concepts')); ?></span></h2>
    </div>
    <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
      <div class="c8isv-portfolio-img">
        <img src="<?php echo esc_url(cr8v_mod('aimvp_port_img', 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop')); ?>" alt="Cognitive AI Engine — built by Cr8v Stacks" data-customizer="aimvp_port_img">
      </div>
      <div class="c8isv-portfolio-info">
        <span class="c8isv-portfolio-client" data-customizer="aimvp_port_client"><?php echo esc_html(cr8v_mod('aimvp_port_client', 'Case Study — Cognitive AI Search Engine')); ?></span>
        <h3 class="c8isv-portfolio-title" data-customizer="aimvp_port_title"><?php echo esc_html(cr8v_mod('aimvp_port_title', 'LLM RAG Vector Search & Autonomous Agent System')); ?></h3>
        <p class="c8isv-portfolio-desc" data-customizer="aimvp_port_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_port_desc', 'Cognitive AI needed a production MVP to present to seed investors. In 14 days, we built a Next.js front-end connected to OpenAI GPT-4 and Pinecone vector search for automated document synthesis.')); ?></p>
        <div class="c8isv-portfolio-stats">
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="aimvp_port_stat1_val"><?php echo esc_html(cr8v_mod('aimvp_port_stat1_val', '14 Days')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="aimvp_port_stat1_lbl"><?php echo esc_html(cr8v_mod('aimvp_port_stat1_lbl', 'Idea to Live Seed Demo')); ?></span>
          </div>
          <div>
            <span class="c8isv-portfolio-stat-val" data-customizer="aimvp_port_stat2_val"><?php echo esc_html(cr8v_mod('aimvp_port_stat2_val', '100k+')); ?></span>
            <span class="c8isv-portfolio-stat-lbl" data-customizer="aimvp_port_stat2_lbl"><?php echo esc_html(cr8v_mod('aimvp_port_stat2_lbl', 'Vector Embeddings Indexed')); ?></span>
          </div>
        </div>
        <div class="c8isv-portfolio-deliverables">
          <span class="c8isv-portfolio-stat-lbl">Key Deliverables</span>
          <div class="c8isv-portfolio-pills">
            <span class="c8isv-portfolio-pill">Next.js AI Interface</span>
            <span class="c8isv-portfolio-pill">OpenAI GPT-4 Integration</span>
            <span class="c8isv-portfolio-pill">Pinecone Vector Database</span>
            <span class="c8isv-portfolio-pill">Stripe SaaS Billing</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url(cr8v_mod('aimvp_port_btn_url', '/case-studies/cognitive-ai/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="aimvp_port_btn_text"><?php echo esc_html(cr8v_mod('aimvp_port_btn_text', 'View Case Study →')); ?></a>
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
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_folder_label"><?php echo esc_html(cr8v_mod('aimvp_folder_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_folder_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_folder_h2_part1', 'Every layer of your AI stack, ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_folder_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_folder_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="aimvp_folder_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder_desc', 'Custom LLM prompt pipelines, vector embedding databases, user interfaces, Stripe subscription metering, and production hosting setup.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder1_tab"><?php echo esc_html(cr8v_mod('aimvp_folder1_tab', '01 // Interface')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder1_title"><?php echo esc_html(cr8v_mod('aimvp_folder1_title', 'Next.js AI Product Front-End')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder1_desc', 'Responsive Chat UI, streaming text responses, and document upload interfaces built with Next.js and Tailwind.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss AI interfaces →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Next.js AI Product Front-End">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder2_tab"><?php echo esc_html(cr8v_mod('aimvp_folder2_tab', '02 // Models')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder2_title"><?php echo esc_html(cr8v_mod('aimvp_folder2_title', 'OpenAI & Claude LLM Wiring')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder2_desc', 'Connecting GPT-4o and Anthropic Claude APIs with system prompt engineering and token usage optimizations.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss LLM wiring →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="OpenAI & Claude LLM Wiring">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder3_tab"><?php echo esc_html(cr8v_mod('aimvp_folder3_tab', '03 // Vector DB')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder3_title"><?php echo esc_html(cr8v_mod('aimvp_folder3_title', 'Pinecone & Qdrant Vector Pipelines')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder3_desc', 'Embedding unstructured PDF, text, and database data for similarity search and ground truth generation.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss vector databases →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Pinecone & Qdrant Vector Pipelines">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder4_tab"><?php echo esc_html(cr8v_mod('aimvp_folder4_tab', '04 // Monetization')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder4_title"><?php echo esc_html(cr8v_mod('aimvp_folder4_title', 'Stripe Token Billing & Auth')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder4_desc', 'Integrating Clerk/Supabase user auth and Stripe usage-based pricing models for token consumption.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss token billing →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Stripe Token Billing & Auth">
          </div>
        </div>
      </div>

      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="aimvp_folder5_tab"><?php echo esc_html(cr8v_mod('aimvp_folder5_tab', '05 // Hosting')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="aimvp_folder5_title"><?php echo esc_html(cr8v_mod('aimvp_folder5_title', 'Vercel & Supabase Cloud Deployment')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="aimvp_folder5_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_folder5_desc', 'Zero-downtime deployment setup on Vercel with automated CI/CD and Supabase database backend.')); ?></p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8srv-explore">Discuss cloud deployments →</a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Vercel & Supabase Cloud Deployment">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 5: HOW WE APPROACH IT -->
<div class="c8isv-approach-outer">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_app_label"><?php echo esc_html(cr8v_mod('aimvp_app_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_app_h2"><?php echo esc_html(cr8v_mod('aimvp_app_h2', 'How We Approach AI MVP Engineering')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="aimvp_app_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_app_sub', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app1_num"><?php echo esc_html(cr8v_mod('aimvp_app1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app1_name"><?php echo esc_html(cr8v_mod('aimvp_app1_name', 'Scope')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app1_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app1_tags', 'Prompts &middot; Wireframes &middot;<br>Model Selection')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app1_desc', 'We map core AI product features, select optimal LLM foundation models, and design wireframes.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=600&auto=format&fit=crop" alt="Scope stage">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app2_num"><?php echo esc_html(cr8v_mod('aimvp_app2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app2_name"><?php echo esc_html(cr8v_mod('aimvp_app2_name', 'Pipeline')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app2_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app2_tags', 'Embeddings &middot; RAG &middot;<br>Vector Search')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app2_desc', 'We construct vector database indexes, write system prompts, and build RAG document retrieval pipelines.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=600&auto=format&fit=crop" alt="Pipeline stage">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app3_num"><?php echo esc_html(cr8v_mod('aimvp_app3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app3_name"><?php echo esc_html(cr8v_mod('aimvp_app3_name', 'Interface')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app3_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app3_tags', 'Next.js &middot; Streaming &middot;<br>Stripe Auth')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app3_desc', 'We build responsive Next.js front-end components with token streaming and Stripe subscription metering.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop" alt="Interface stage">
        </div>
      </div>
    </div>

    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="aimvp_app4_num"><?php echo esc_html(cr8v_mod('aimvp_app4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="aimvp_app4_name"><?php echo esc_html(cr8v_mod('aimvp_app4_name', 'Launch')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="aimvp_app4_tags"><?php echo wp_kses_post(cr8v_mod('aimvp_app4_tags', 'Vercel &middot; Live Demo &middot;<br>Analytics')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="aimvp_app4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_app4_desc', 'We deploy to production cloud hosting, verify API token limits, and deliver your live AI product demo.')); ?></div>
        <div class="c8isv-approach-col-img">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" alt="Launch stage">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 5.5: OPTIONS -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_plat_label"><?php echo esc_html(cr8v_mod('aimvp_plat_label', 'AI Stack Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="aimvp_plat_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_plat_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_plat_h2_serif', 'AI Architecture')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;">Whether you need an AI prototype, a vector search engine, or an enterprise AI SaaS:</p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat1_badge"><?php echo esc_html(cr8v_mod('aimvp_plat1_badge', 'Stack // Prototype')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat1_title"><?php echo esc_html(cr8v_mod('aimvp_plat1_title', 'Rapid AI Prototype')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat1_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat1_desc', 'For founders needing a quick 14-day production prototype to validate AI concepts with real users.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat2_badge"><?php echo esc_html(cr8v_mod('aimvp_plat2_badge', 'Stack // Vector')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat2_title"><?php echo esc_html(cr8v_mod('aimvp_plat2_title', 'RAG Vector Search Engine')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat2_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat2_desc', 'For businesses connecting LLMs to internal document databases and proprietary knowledge bases.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat3_badge"><?php echo esc_html(cr8v_mod('aimvp_plat3_badge', 'Stack // SaaS')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat3_title"><?php echo esc_html(cr8v_mod('aimvp_plat3_title', 'Full AI SaaS Platform')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat3_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat3_desc', 'Complete AI web product with user accounts, token billing, team workspaces, and custom model fine-tuning.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
      </div>

      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="aimvp_plat4_badge"><?php echo esc_html(cr8v_mod('aimvp_plat4_badge', 'Stack // Retainer')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="aimvp_plat4_title"><?php echo esc_html(cr8v_mod('aimvp_plat4_title', 'AI Model Tuning Retainer')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="aimvp_plat4_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_plat4_desc', 'Ongoing prompt engineering, model upgrades, vector index rebalancing, and API cost tuning.')); ?></p>
        <div class="c8isv-platform-icon"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;">
      <strong>Ready to build an AI product in 14 days?</strong> Schedule an AI scoping call to review model selection and vector database requirements.
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">Start an AI MVP Scoping Call →</a>
    </div>
  </div>
</div>

<!-- SECTION 6: CATALOG HOVERLIST -->
<div class="c8isv-hl-section" id="c8isv-catalog">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="aimvp_hl_label"><?php echo esc_html(cr8v_mod('aimvp_hl_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="aimvp_hl_h2"><?php echo esc_html(cr8v_mod('aimvp_hl_h2', 'Every Kind of AI Product We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="aimvp_hl_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_hl_sub', 'From LLM chatbots to autonomous agent platforms — hover to inspect the AI engineering stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="OpenAI" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg" data-tech-2="Next.js" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/nextdotjs.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl1_title"><?php echo esc_html(cr8v_mod('aimvp_hl1_title', 'LLM Conversational Interfaces')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl1_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl1_tagline', 'Custom AI chat interfaces with token streaming, prompt memory, and user workspace management.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Chat AI</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Pinecone" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/pinecone.svg" data-tech-2="LangChain" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/langchain.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl2_title"><?php echo esc_html(cr8v_mod('aimvp_hl2_title', 'RAG Document Synthesis Engines')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl2_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl2_tagline', 'Vector search pipelines indexing PDFs, databases, and internal knowledge bases for accurate AI answers.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">RAG Engines</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="LangChain" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/langchain.svg" data-tech-2="Python" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl3_title"><?php echo esc_html(cr8v_mod('aimvp_hl3_title', 'Autonomous AI Agents')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl3_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl3_tagline', 'Multi-step autonomous agent chains executing web scraping, research, and data synthesis automatically.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">AI Agents</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="OpenAI" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg" data-tech-2="Stripe" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/stripe.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl4_title"><?php echo esc_html(cr8v_mod('aimvp_hl4_title', 'AI Image & Media Generation SaaS')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl4_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl4_tagline', 'Generative media web applications powered by DALL-E 3, Midjourney API, and Stable Diffusion.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Generative AI</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Python" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/python.svg" data-tech-2="FastAPI" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/fastapi.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl5_title"><?php echo esc_html(cr8v_mod('aimvp_hl5_title', 'Fine-Tuned Model APIs')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl5_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl5_tagline', 'Domain-specific fine-tuned LLMs deployed as private microservice endpoints for specialized tasks.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">Fine-Tuning</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Vercel" data-logo-1="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/vercel.svg" data-tech-2="Supabase" data-logo-2="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/supabase.svg">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="aimvp_hl6_title"><?php echo esc_html(cr8v_mod('aimvp_hl6_title', 'AI SaaS Token Subscription Systems')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="aimvp_hl6_tagline"><?php echo wp_kses_post(cr8v_mod('aimvp_hl6_tagline', 'Complete SaaS infrastructure with Stripe token tiers, team seats, and API billing management.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech">AI SaaS Stack</span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/openai.svg" alt="OpenAI"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/nextdotjs.svg" alt="Next.js"></div>
    </div>
  </div>
</div>

<!-- SECTION 8: CLIENT FEEDBACK -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="aimvp_testi_label"><?php echo esc_html(cr8v_mod('aimvp_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="aimvp_testi_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_testi_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi1_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi1_text', 'Cr8v Stacks turned our raw RAG concept into a live working prototype in just 12 days. We closed our pre-seed round 2 weeks later.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi1_author"><?php echo esc_html(cr8v_mod('aimvp_testi1_author', 'Jonathan Mercer — Founder & CEO')); ?></div>
      </div>
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi2_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi2_text', 'The Pinecone vector search integration and prompt engineering gave our document synthesis product incredible accuracy. Speed of execution was unmatched.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi2_author"><?php echo esc_html(cr8v_mod('aimvp_testi2_author', 'Dr. Sarah Lin — Chief Scientist')); ?></div>
      </div>
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="aimvp_testi3_text"><?php echo wp_kses_post(cr8v_mod('aimvp_testi3_text', 'From OpenAI token billing to Vercel deployment, everything was production-grade from day one. Best AI development agency.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="aimvp_testi3_author"><?php echo esc_html(cr8v_mod('aimvp_testi3_author', 'Kofi Mensah — Technical Product Lead')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION 9: PRICING MODELS & ESTIMATOR -->
<div class="c8srv-pricing-section" id="pricing-scope" style="padding: 6rem 0 !important; position: relative !important; z-index: 5 !important; background: #FFFFFF !important; display: block !important;">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="aimvp_pricing_label"><?php echo esc_html(cr8v_mod('aimvp_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="aimvp_pricing_h2_part1"><?php echo esc_html(cr8v_mod('aimvp_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="aimvp_pricing_h2_serif"><?php echo esc_html(cr8v_mod('aimvp_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="aimvp_pricing_desc"><?php echo wp_kses_post(cr8v_mod('aimvp_pricing_desc', 'Whether you need a dedicated extension of your team or a custom AI build with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Ongoing Support</span>
          <h3 class="c8srv-price-title">Growth Retainer</h3>
          <div class="c8srv-price-amount">$950<span>/mo</span></div>
        </div>
        <p class="c8srv-price-desc">A monthly block of dedicated senior AI engineering hours for continuous model prompt tuning, vector index updates, model fine-tuning, and feature releases.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Dedicated monthly AI developer hours block</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Vector database rebalancing &amp; prompt tuning</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Model API upgrade migrations (e.g. GPT-4o)</span>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light">Secure Retainer Slot</a>
      </div>

      <div class="c8srv-price-box is-highlight c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type">Fixed Scope</span>
          <h3 class="c8srv-price-title">Fixed Projects</h3>
          <div class="c8srv-price-amount">From $2,500<span> entry</span></div>
        </div>
        <p class="c8srv-price-desc">A 14-day rapid AI product production sprint with transparent scoping, clear milestone deliverables, and full IP source code ownership.</p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Next.js AI user interface with streaming responses</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>OpenAI GPT-4 / Claude API wiring &amp; system prompts</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Pinecone vector DB setup &amp; Stripe token billing</span>
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
            <span class="c8srv-est-group-title">1. Core AI Product Tier</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="chat" data-est-price="2500">LLM Chat MVP ($2,500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="rag" data-est-price="3400">RAG Vector Search Engine ($3,400)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="saas" data-est-price="4500">Full AI SaaS Platform ($4,500)</button>
            </div>
          </div>

          <div>
            <span class="c8srv-est-group-title">2. Model &amp; Data Pipeline</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="single" data-est-multiplier="1.0">Single Model Integration (OpenAI)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multi" data-est-multiplier="1.35">Multi-Model &amp; Autonomous Agents</button>
            </div>
          </div>

          <div>
            <span class="c8srv-est-group-title">3. Add-On Engineering</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="stripe" data-est-price="400">Stripe Token Metering (+ $400)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="finetune" data-est-price="800">Custom Fine-Tuned Model Pipeline (+ $800)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display">$2,500 - $3,125</div>
          
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Next.js AI product front-end</div><div>• OpenAI GPT-4 / Claude API integration</div><div>• 14-day live production deployment</div></div>

          <a href="<?php echo esc_url(home_url('/contact/?platform=aimvp&est=2500-3125')); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
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
      <div class="faq-eyebrow" data-customizer="aimvp_faq_eyebrow"><?php echo esc_html(cr8v_mod('aimvp_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
      <h2 class="faq-h2" data-customizer="aimvp_faq_h2"><?php echo esc_html(cr8v_mod('aimvp_faq_h2', 'AI MVP Engineering FAQ')); ?></h2>
      <p class="faq-sub" data-customizer="aimvp_faq_sub"><?php echo wp_kses_post(cr8v_mod('aimvp_faq_sub', 'Clear answers to common questions about our 14-day AI MVP production sprints, vector search setups, and LLM integrations.')); ?></p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
    </div>

    <ul class="faq-list" id="srv-faq-list">
      <li class="faq-item is-open">
        <button class="faq-trigger" aria-expanded="true">
          <span class="faq-q" data-customizer="aimvp_faq1_q"><?php echo esc_html(cr8v_mod('aimvp_faq1_q', 'How can an AI MVP be built and launched in 14 days?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body" style="grid-template-rows: 1fr;">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq1_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq1_a', 'We leverage battle-tested modular starter architectures, pre-configured vector search connectors, and rapid Next.js UI component libraries to skip repetitive setup and focus 100% on your core AI product logic.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="aimvp_faq2_q"><?php echo esc_html(cr8v_mod('aimvp_faq2_q', 'Which AI models and APIs do you support?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq2_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq2_a', 'We integrate OpenAI GPT-4o, Anthropic Claude 3.5, Google Gemini Pro, Llama 3 open-source models, and DALL-E image models, selecting the optimal foundation model for your performance and cost requirements.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="aimvp_faq3_q"><?php echo esc_html(cr8v_mod('aimvp_faq3_q', 'What is RAG and why is it necessary for AI web products?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq3_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq3_a', 'Retrieval-Augmented Generation (RAG) connects foundation LLMs directly to your business data (PDFs, databases, docs), allowing the AI model to answer queries using your exact company information with zero hallucinations.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="aimvp_faq4_q"><?php echo esc_html(cr8v_mod('aimvp_faq4_q', 'Will I be able to charge users and monetize the AI MVP immediately?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq4_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq4_a', 'Yes. We include full Stripe subscription billing integration with token consumption metering and user authentication, allowing you to launch and accept customer payments immediately.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="aimvp_faq5_q"><?php echo esc_html(cr8v_mod('aimvp_faq5_q', 'Who owns the intellectual property of the AI product?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq5_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq5_a', 'You own 100% of the custom source code, vector index configurations, prompt templates, and repository IP upon final project payment.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="aimvp_faq6_q"><?php echo esc_html(cr8v_mod('aimvp_faq6_q', 'What happens after the initial 14-day launch?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="aimvp_faq6_a"><?php echo wp_kses_post(cr8v_mod('aimvp_faq6_a', 'We provide post-launch support and offer dedicated monthly retainers for ongoing prompt optimization, feature iterations, and AI model API upgrades.')); ?></p>
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
    <p class="c8isv-lead c8isv-reveal">AI MVP Engineering is one of several services we offer. If an AI product prototype is not what you need, check these out.</p>
    <div class="c8isv-related-grid">
      <a href="<?php echo esc_url(home_url('/custom-dev/')); ?>" class="c8isv-related-card c8isv-reveal">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <span class="c8isv-related-card-platform">01 / Custom Dev</span>
        <h3 class="c8isv-related-card-title">Custom Development</h3>
        <p class="c8isv-related-card-desc">Full-stack web applications, client portals, and administrative dashboards built precisely from scratch using React and Node.js.</p>
        <span class="c8isv-related-card-link">Explore Custom Dev →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/wordpress/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">02 / WordPress</span>
        <h3 class="c8isv-related-card-title">WordPress Development</h3>
        <p class="c8isv-related-card-desc">Custom PHP theme code, Gutenberg block libraries, and sub-1.2s speed tuning for content-driven marketing sites.</p>
        <span class="c8isv-related-card-link">Explore WordPress →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/ecommerce/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">03 / E-Commerce</span>
        <h3 class="c8isv-related-card-title">E-Commerce Solutions</h3>
        <p class="c8isv-related-card-desc">Custom WooCommerce and Shopify online storefronts built for high conversion rates and high volume catalog sales.</p>
        <span class="c8isv-related-card-link">Explore E-Commerce →</span>
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
    chat: { price: 2500, deliverables: ["Next.js AI Product User Interface", "OpenAI / Claude LLM API Wiring", "14-Day Production Launch Sprint"] },
    rag: { price: 3400, deliverables: ["Pinecone / Qdrant Vector Search Setup", "PDF & Document Embedding Pipeline", "Custom Ground-Truth Prompt Architecture"] },
    saas: { price: 4500, deliverables: ["Full Multi-Tenant AI SaaS Architecture", "Stripe Token Consumption Metering", "Vercel & Supabase Cloud Deployment"] }
  };

  var estimatorAddons = {
    none: { price: 0, deliverables: [] },
    stripe: { price: 400, deliverables: ['Stripe Usage-Based Token Billing System'] },
    finetune: { price: 800, deliverables: ['Custom Fine-Tuned Model Training Pipeline'] }
  };

  var scaleDescriptions = {
    single: 'Single foundation model integration (OpenAI GPT-4o)',
    multi: 'Multi-model routing & autonomous AI agent workflows'
  };

  function updateEstimate() {
    var activePlatformBtn = root.querySelector('[data-est-group="platform"] .c8srv-est-choice.is-active') || choices[0];
    var activeScaleBtn = root.querySelector('[data-est-group="scale"] .c8srv-est-choice.is-active');
    var activeGrowthBtn = root.querySelector('[data-est-group="growth"] .c8srv-est-choice.is-active');

    var platformVal = activePlatformBtn ? activePlatformBtn.getAttribute('data-est-val') : 'chat';
    var basePrice = platformBases[platformVal] ? platformBases[platformVal].price : 2500;
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
