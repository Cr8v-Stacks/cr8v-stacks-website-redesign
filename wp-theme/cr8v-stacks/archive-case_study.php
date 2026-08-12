<?php
/**
 * Template Name: Portfolio & Case Studies Archive
 * Description: Case Studies & Portfolio Archive Template with 100% Prototype Parity, Smooth Pagination, and Customizer Integration
 */
defined('ABSPATH') || exit;

get_header();

$crumb_parent = cr8v_mod('cs_hero_crumb_parent', 'Bespoke Engineering Showcase');
$hero_label   = cr8v_mod('cs_hero_label',        'Bespoke Engineering Showcase');
$h1_part1     = cr8v_mod('cs_hero_h1_part1',     'Selected Projects');
$h1_serif     = cr8v_mod('cs_hero_h1_serif',     'Case Studies & Audits');
$hero_intro   = cr8v_mod('cs_hero_intro',        'A detailed trace of brand strategy foundations, custom frontend applications, e-commerce re-engineering, and organic search platforms developed by our team.');
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');

  .c8pf-root {
    position: relative;
    width: 100%;
    background: #FFFFFF;
    color: #080808;
    font-family: 'DM Sans', sans-serif;
  }

  .c8pf-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 6rem 2rem;
    position: relative;
    z-index: 2;
  }

  @media (max-width: 768px) {
    .c8pf-wrap {
      padding: 4rem 1.25rem;
    }
  }

  .c8pf-label {
    font-family: 'Space Mono', monospace;
    font-size: 10px;
    letter-spacing: .25em;
    text-transform: uppercase;
    color: #0047E1;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 1.5rem;
  }

  .c8pf-label::before {
    content: '—';
    color: #0047E1;
    font-weight: 700;
  }

  .c8pf-headline {
    font-family: 'Michroma', sans-serif;
    font-size: clamp(2rem, 5vw, 3.8rem);
    letter-spacing: 0.02em;
    line-height: 1.15;
    font-weight: 700;
    color: #080808;
    text-transform: uppercase;
    margin-bottom: 2rem;
  }

  .c8pf-serif {
    font-family: 'Georgia', serif;
    font-style: italic;
    text-transform: none;
    font-weight: 400;
    color: #0047E1;
  }

  .c8pf-lead {
    font-size: 18px;
    font-weight: 300;
    color: #555555;
    max-width: 850px;
    margin-bottom: 3rem;
  }

  .c8pf-hero {
    padding-top: 5rem;
    padding-bottom: 3rem;
    position: relative;
  }

  .c8pf-hero-atmos {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: auto; overflow: hidden;
  }
  .c8pf-atmos-svg { position: absolute; top: -10%; left: 0; width: 100%; height: 130%; }
  .c8pf-atmos-blob { filter: blur(1px); opacity: 0.35; }
  .c8pf-atmos-glow {
    position: absolute; top: 0; left: 0; width: 320px; height: 320px; border-radius: 50%;
    background: radial-gradient(circle, rgba(0, 71, 225, 0.35) 0%, rgba(0, 71, 225, 0) 70%);
    transform: translate(-50%, -50%); opacity: 0; transition: opacity 0.4s ease; will-change: transform; pointer-events: none;
  }
  .c8pf-hero-atmos.is-active .c8pf-atmos-glow { opacity: 1; }

  .c8pf-filters-container {
    position: relative;
    margin-bottom: 4rem;
    z-index: 5;
  }

  .c8pf-filters-label {
    font-family: 'Space Mono', monospace;
    font-size: 10px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #8A8A8A;
    margin-bottom: 1rem;
  }

  .c8pf-filters-scroll {
    display: flex;
    gap: 0.75rem;
    overflow-x: auto;
    padding-bottom: 1rem;
    scroll-behavior: smooth;
  }

  .c8pf-filter-btn {
    font-family: 'Space Mono', monospace;
    font-size: 11px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    padding: 10px 20px;
    background: #FFFFFF;
    border: 1px solid rgba(8, 8, 8, 0.08);
    border-radius: 4px !important;
    color: #555555;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.3s cubic-bezier(.16,1,.3,1);
  }

  .c8pf-filter-btn:hover {
    border-color: #0047E1;
    color: #0047E1;
    background: rgba(0, 71, 225, 0.02);
  }

  .c8pf-filter-btn.is-active {
    background: #0047E1;
    border-color: #0047E1;
    color: #FFFFFF;
    box-shadow: 0 4px 12px rgba(0, 71, 225, 0.2);
  }

  .c8pf-projects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 3rem;
  }

  @media (max-width: 900px) {
    .c8pf-projects-grid {
      grid-template-columns: 1fr;
      gap: 2.5rem;
    }
  }

  .c8pf-card-outer {
    background: #FFFFFF;
    border: 1px solid rgba(8, 8, 8, 0.08);
    border-radius: 4px !important;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: 0 10px 35px rgba(8, 8, 8, 0.015);
    transition: transform 0.4s cubic-bezier(.16,1,.3,1), border-color 0.3s ease, box-shadow 0.4s ease, opacity 0.4s ease;
    position: relative;
  }

  .c8pf-card-outer.is-hidden {
    display: none !important;
  }

  .c8pf-card-outer:hover {
    transform: translateY(-8px);
    border-color: #0047E1;
    box-shadow: 0 25px 55px rgba(0, 71, 225, 0.035);
  }

  .c8pf-card-media {
    position: relative;
    height: 280px;
    overflow: hidden;
    border-bottom: 1px solid rgba(8, 8, 8, 0.06);
  }

  .c8pf-card-media img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.6s cubic-bezier(.16,1,.3,1);
  }

  .c8pf-card-outer:hover .c8pf-card-media img {
    transform: scale(1.03);
  }

  .c8pf-card-tags {
    position: absolute;
    top: 20px; left: 20px;
    display: flex; flex-wrap: wrap; gap: 6px; z-index: 3;
  }

  .c8pf-tag-badge {
    font-family: 'Space Mono', monospace;
    font-size: 8px;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(8, 8, 8, 0.06);
    color: #080808;
    padding: 4px 10px;
    border-radius: 4px !important;
    backdrop-filter: blur(8px);
  }

  .c8pf-tag-badge.is-service {
    background: rgba(0, 71, 225, 0.9);
    color: #FFFFFF;
    border-color: #0047E1;
  }

  .c8pf-card-details {
    padding: 2.5rem; display: flex; flex-direction: column; flex-grow: 1; background: #FFFFFF;
  }

  .c8pf-card-client {
    font-family: 'Space Mono', monospace; font-size: 10px; letter-spacing: 0.1em; text-transform: uppercase; color: #8A8A8A; margin-bottom: 0.75rem;
  }

  .c8pf-card-title {
    font-family: 'Michroma', sans-serif; font-size: 1.3rem; font-weight: 700; line-height: 1.3; color: #080808; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.01em;
  }

  .c8pf-card-desc {
    font-size: 14.5px; color: #555555; font-weight: 300; line-height: 1.65; margin-bottom: 1.75rem;
  }

  .c8pf-card-deliverables {
    border-top: 1px dashed rgba(8, 8, 8, 0.08); padding-top: 1.25rem; margin-bottom: 1.75rem;
  }

  .c8pf-deliv-title {
    font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: 0.1em; text-transform: uppercase; color: #8A8A8A; margin-bottom: 0.75rem;
  }

  .c8pf-deliv-list { display: flex; flex-wrap: wrap; gap: 0.5rem; }

  .c8pf-deliv-item {
    font-size: 12.5px; color: #6B6B6B; background: #FAFAF9; border: 1px solid rgba(8, 8, 8, 0.04); padding: 4px 10px; border-radius: 4px !important; font-weight: 300;
  }

  .c8pf-card-metrics-row {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; border-top: 1px solid rgba(8, 8, 8, 0.06); padding-top: 1.5rem; margin-top: auto;
  }

  .c8pf-card-metric { text-align: center; }
  .c8pf-card-metric-val { font-family: 'Michroma', sans-serif; font-size: 1.3rem; font-weight: 700; color: #0047E1; line-height: 1.2; margin-bottom: 4px; }
  .c8pf-card-metric-lbl { font-family: 'Space Mono', monospace; font-size: 8px; letter-spacing: 0.05em; text-transform: uppercase; color: #8A8A8A; line-height: 1.3; }

  .c8pf-card-hover-drawer {
    position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(12px); z-index: 4; padding: 3rem 2.5rem; display: flex; flex-direction: column; justify-content: space-between; transform: translateY(100%); transition: transform 0.45s cubic-bezier(.16,1,.3,1); border-top: 1px solid rgba(0, 71, 225, 0.08);
  }

  .c8pf-card-outer:hover .c8pf-card-hover-drawer { transform: translateY(0); }
  .c8pf-drawer-title { font-family: 'Michroma', sans-serif; font-size: 1.05rem; font-weight: 700; text-transform: uppercase; color: #080808; letter-spacing: 0.02em; margin-bottom: 1rem; }
  .c8pf-drawer-body { font-size: 14.5px; color: #555555; line-height: 1.65; font-weight: 300; margin-bottom: 2rem; }
  .c8pf-drawer-footer { display: flex; justify-content: space-between; align-items: center; margin-top: auto; }

  .c8pf-explore-btn {
    font-family: 'Space Mono', monospace; font-size: 10.5px; letter-spacing: 0.08em; text-transform: uppercase; color: #FFFFFF; background: #0047E1; border: none; padding: 14px 28px; border-radius: 4px !important; cursor: pointer; font-weight: 700; display: inline-flex; align-items: center; gap: 6px; text-decoration: none; box-shadow: 0 4px 12px rgba(0, 71, 225, 0.15); transition: all 0.3s ease;
  }
  .c8pf-explore-btn:hover { background: #0036ad; transform: translateY(-2px); box-shadow: 0 6px 18px rgba(0, 71, 225, 0.3); }

  .c8pf-status-indicator { font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: 0.05em; text-transform: uppercase; color: #8A8A8A; display: flex; align-items: center; gap: 6px; }
  .c8pf-status-dot { width: 6px; height: 6px; border-radius: 50%; background: #E5E7EB; }
  .c8pf-status-dot.is-live { background: #10B981; box-shadow: 0 0 8px #10B981; }
  .c8pf-status-dot.is-nda { background: #F59E0B; }
  .c8pf-status-dot.is-playground { background: #8B5CF6; box-shadow: 0 0 8px #8B5CF6; }

  /* ── SMOOTH PAGINATION CONTROL BAR ── */
  .c8pf-pagination-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.75rem;
    margin-top: 4rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(8, 8, 8, 0.06);
  }

  .c8pf-page-num {
    font-family: 'Space Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(8, 8, 8, 0.1);
    border-radius: 4px !important;
    background: #FFFFFF;
    color: #555555;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .c8pf-page-num:hover {
    border-color: #0047E1;
    color: #0047E1;
    background: rgba(0, 71, 225, 0.03);
  }

  .c8pf-page-num.is-active {
    background: #0047E1;
    border-color: #0047E1;
    color: #FFFFFF;
    box-shadow: 0 4px 12px rgba(0, 71, 225, 0.2);
  }

  .c8pf-page-next {
    font-family: 'Space Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 0 24px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(8, 8, 8, 0.1);
    border-radius: 4px !important;
    background: #FFFFFF;
    color: #555555;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .c8pf-page-next:hover {
    border-color: #0047E1;
    color: #0047E1;
    background: rgba(0, 71, 225, 0.03);
  }
</style>

<div class="c8pf-root">
  
  <section class="c8pf-hero">
    <div class="c8pf-hero-atmos" data-c8pf-atmos>
      <svg class="c8pf-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <filter id="c8pfGoo" x="-50%" y="-50%" width="200%" height="200%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="7" result="turb">
              <animate attributeName="baseFrequency" values="0.008 0.02;0.02 0.05;0.008 0.02" dur="16s" repeatCount="indefinite"/>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turb" scale="42" xChannelSelector="R" yChannelSelector="G"/>
            <feGaussianBlur stdDeviation="4"/>
          </filter>
        </defs>
        <g filter="url(#c8pfGoo)">
          <circle class="c8pf-atmos-blob" cx="80" cy="60" r="70" fill="#0047E1">
            <animate attributeName="cx" values="80;145;55;80" dur="19s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="60;35;95;60" dur="19s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8pf-atmos-blob" cx="220" cy="55" r="55" fill="#3D6BFF">
            <animate attributeName="cx" values="220;165;285;220" dur="23s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="55;115;30;55" dur="23s" repeatCount="indefinite"/>
          </circle>
        </g>
      </svg>
      <div class="c8pf-atmos-glow" data-c8pf-glow></div>
    </div>

    <div class="c8pf-wrap">
      <div class="c8pf-label" data-customizer="cs_hero_label"><?php echo esc_html($hero_label); ?></div>
      <h1 class="c8pf-headline"><span data-customizer="cs_hero_h1_part1"><?php echo esc_html($h1_part1); ?></span><br><span class="c8pf-serif" data-customizer="cs_hero_h1_serif"><?php echo esc_html($h1_serif); ?></span></h1>
      <p class="c8pf-lead" data-customizer="cs_hero_intro"><?php echo wp_kses_post($hero_intro); ?></p>
    </div>
  </section>

  <!-- MAIN FILTERING & PROJECTS SECTION -->
  <section class="c8pf-wrap" style="padding-top: 0;">
    
    <!-- INTERACTIVE FILTER BAR -->
    <div class="c8pf-filters-container">
      <div class="c8pf-filters-label">Filter by Engineering Service</div>
      <div class="c8pf-filters-scroll">
        <button class="c8pf-filter-btn is-active" data-c8pf-filter="all">All Works</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="web">Web Design</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="ecommerce">E-Commerce</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="strategy">Brand Strategy</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="brand">Brand Identity</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="dev">Custom Development</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="ai">AI MVP</button>
        <button class="c8pf-filter-btn" data-c8pf-filter="seo">SEO &amp; Content</button>
      </div>
    </div>

    <!-- CREATIVE PROJECT GRID -->
    <div class="c8pf-projects-grid" id="c8pf-grid">

      <!-- Card 1: The Duch Apartments -->
      <div class="c8pf-card-outer" data-c8pf-categories="web seo">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Web Design</span>
            <span class="c8pf-tag-badge">SEO</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_stacks_visual.jpg'); ?>" alt="The Duch Apartments">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">The Duch Apartments</div>
          <h3 class="c8pf-card-title">SEO-Integrated Web Platform</h3>
          <p class="c8pf-card-desc">Designing a high-fidelity website layout for a luxury hospitality operator, combining clean spatial design systems with a custom search ranking foundation.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Responsive UI Mockups</span>
              <span class="c8pf-deliv-item">SEO Layouts Setup</span>
              <span class="c8pf-deliv-item">HTML/CSS Build</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">+340%</div>
              <div class="c8pf-card-metric-lbl">Direct Bookings</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">100%</div>
              <div class="c8pf-card-metric-lbl">Bespoke Design</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">Live</div>
              <div class="c8pf-card-metric-lbl">Launch Status</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">The Duch Apartments</h4>
          <p class="c8pf-drawer-body">The client needed an elegant digital gateway for their luxury serviced apartments. We hand-coded a responsive layout and embedded organic search targets directly into the page code to secure long-term organic authority.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Active Live Link</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/the-duch-apartments/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Bridgepoint Advisory Services (Brand Identity) -->
      <div class="c8pf-card-outer" data-c8pf-categories="brand">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Brand Identity</span>
            <span class="c8pf-tag-badge">Vector Graphic</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_process_layers.jpg'); ?>" alt="Bridgepoint Visual Branding">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Bridgepoint Advisory Services</div>
          <h3 class="c8pf-card-title">Corporate Visual Branding</h3>
          <p class="c8pf-card-desc">Drawing a custom vector logo system, setting brand color swatches, and structuring typography constraints in a print-ready manual book.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Bespoke Vector Logo</span>
              <span class="c8pf-deliv-item">Type Scales Guide</span>
              <span class="c8pf-deliv-item">Brand Style Book</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">1</div>
              <div class="c8pf-card-metric-lbl">Original Logo</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">0</div>
              <div class="c8pf-card-metric-lbl">Templates Used</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">100%</div>
              <div class="c8pf-card-metric-lbl">Vector Assets</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Bridgepoint Advisory</h4>
          <p class="c8pf-drawer-body">Operating in high-tier corporate markets, the client required a visual identity that commanded trust. We built their logo, color system, and spacing guidelines from a blank canvas.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Brand Assets Delivered</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/bridgepoint-compliance/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 3: Bridgepoint Compliance -->
      <div class="c8pf-card-outer" data-c8pf-categories="dev ai">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Custom Dev</span>
            <span class="c8pf-tag-badge">AI MVP</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ai_wp_tree_workflow.jpg'); ?>" alt="Compliance Analysis Checker">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Bridgepoint Compliance</div>
          <h3 class="c8pf-card-title">Compliance Analysis Checker</h3>
          <p class="c8pf-card-desc">Engineering frontend screens, payment gateways, and queue routes for a secure, paywalled compliance auditing application under strict NDA.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Payment Paywall API</span>
              <span class="c8pf-deliv-item">Document Upload UX</span>
              <span class="c8pf-deliv-item">Live Booking Route</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">75%</div>
              <div class="c8pf-card-metric-lbl">Audit Reduction</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">14 Days</div>
              <div class="c8pf-card-metric-lbl">MVP Sprint</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">NDA</div>
              <div class="c8pf-card-metric-lbl">Privacy Code</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Compliance Checker</h4>
          <p class="c8pf-drawer-body">We built a regulatory audit portal. The flow guides users through document submission, payment validation via a secure paywall, backend queue analysis, and automated report exports.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-nda"></span>
              <span>NDA Project (Private Link)</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/bridgepoint-compliance/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 4: Kiri City Stays -->
      <div class="c8pf-card-outer" data-c8pf-categories="marketing brand">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Digital Marketing</span>
            <span class="c8pf-tag-badge">Campaign Setup</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_process_visual.jpg'); ?>" alt="Kiri City Stays">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Kiri City Stays</div>
          <h3 class="c8pf-card-title">Attribution &amp; Ad Funnel Launch</h3>
          <p class="c8pf-card-desc">Establishing visual branding, GTM tag triggers, conversion landing pages, and targeted Google Ads and Facebook campaigns for UK serviced apartments.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Google Tag Triggers</span>
              <span class="c8pf-deliv-item">Landing Pages UI</span>
              <span class="c8pf-deliv-item">Google Search Ads</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">100%</div>
              <div class="c8pf-card-metric-lbl">Tag Accuracy</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">+45%</div>
              <div class="c8pf-card-metric-lbl">Booking Growth</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">1</div>
              <div class="c8pf-card-metric-lbl">Unified Funnel</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Kiri City Stays</h4>
          <p class="c8pf-drawer-body">The client needed to capture high-intent travelers directly. We developed a refined identity system, built high-converting booking landing pages, and executed high-yield Google/Facebook ad campaigns.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Campaign Executed</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/kiri-city-stays/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 5: blvck Hair NG -->
      <div class="c8pf-card-outer" data-c8pf-categories="ecommerce seo">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">E-Commerce</span>
            <span class="c8pf-tag-badge">Shopify</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_tools_creative.jpg'); ?>" alt="blvck Hair NG">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">blvck Hair NG</div>
          <h3 class="c8pf-card-title">Shopify Storefront &amp; SEO</h3>
          <p class="c8pf-card-desc">Executing liquid theme customization, catalog taxonomy structuring, and writing SEO-rich articles to scale organic traffic across regions.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Shopify Liquid Code</span>
              <span class="c8pf-deliv-item">Catalog Taxonomy</span>
              <span class="c8pf-deliv-item">Cart Drawer UX</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">+210%</div>
              <div class="c8pf-card-metric-lbl">Mobile Checkout</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">3.2x</div>
              <div class="c8pf-card-metric-lbl">AOV Growth</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">Live</div>
              <div class="c8pf-card-metric-lbl">Search Status</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">blvck Hair NG</h4>
          <p class="c8pf-drawer-body">The client wanted to capture buyers organically and convert mobile traffic. We overhauled their Shopify theme, mapped high-intent category terms, and published targeted content.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Live Shopify Store</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/blvck-hair-ng/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 6: Victoria's Lane -->
      <div class="c8pf-card-outer" data-c8pf-categories="ecommerce brand">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Shopify Development</span>
            <span class="c8pf-tag-badge">Liquid Code</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/wwa_studio_visual.jpg'); ?>" alt="Victoria's Lane">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Victoria's Lane</div>
          <h3 class="c8pf-card-title">Liquid Storefront Rebuild</h3>
          <p class="c8pf-card-desc">Upgrading a basic Shopify theme base with hand-coded Liquid components, multi-store geolocation tags, Klaviyo integrations, and optimized checkouts.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Shopify Liquid Code</span>
              <span class="c8pf-deliv-item">Klaviyo Campaigns</span>
              <span class="c8pf-deliv-item">Geolocation Tags</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">99.8%</div>
              <div class="c8pf-card-metric-lbl">PageSpeed Score</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">+280%</div>
              <div class="c8pf-card-metric-lbl">Revenue Growth</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">&lt; 0.9s</div>
              <div class="c8pf-card-metric-lbl">Load Speed</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Victoria's Lane</h4>
          <p class="c8pf-drawer-body">The client sought to escape slow templates. We utilized custom liquid code to build product grids, cart drawers, and geolocation tools that streamlined cross-border luxury sales.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Build Completed</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/victorias-lane/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 7: SweeterMen NG -->
      <div class="c8pf-card-outer" data-c8pf-categories="ecommerce dev">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">WooCommerce</span>
            <span class="c8pf-tag-badge">Store Build</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/c4_tools_bg.jpg'); ?>" alt="SweeterMen NG">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">SweeterMen NG</div>
          <h3 class="c8pf-card-title">WooCommerce Build &amp; Ads</h3>
          <p class="c8pf-card-desc">Designing and deploying a luxury watch catalog store on WooCommerce, paired with Google Search ads and Facebook campaigns.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Product Grid Design</span>
              <span class="c8pf-deliv-item">WooCommerce Setup</span>
              <span class="c8pf-deliv-item">Google Search Campaigns</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">1</div>
              <div class="c8pf-card-metric-lbl">Unified Team</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">40+</div>
              <div class="c8pf-card-metric-lbl">Watch Products</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">2.1s</div>
              <div class="c8pf-card-metric-lbl">Mobile Speed</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">SweeterMen NG</h4>
          <p class="c8pf-drawer-body">The client wanted to bypass multi-agency friction. We handled both the WordPress WooCommerce build and the digital marketing campaigns, configuring direct checkout funnels.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Build Completed</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/sweetermen-ng/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 8: Mkenny Properties -->
      <div class="c8pf-card-outer" data-c8pf-categories="web dev strategy">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">WordPress</span>
            <span class="c8pf-tag-badge">Real Estate</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/services_visual_montage.jpg'); ?>" alt="Mkenny Properties">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Mkenny Properties</div>
          <h3 class="c8pf-card-title">Real Estate Directory</h3>
          <p class="c8pf-card-desc">Upgrading a basic corporate landing page into a multi-page dynamic property directory using custom Gutenberg and PHP block widgets built from scratch.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Custom Block Widgets</span>
              <span class="c8pf-deliv-item">Dynamic Listings Grid</span>
              <span class="c8pf-deliv-item">Property Post Types</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">4.8x</div>
              <div class="c8pf-card-metric-lbl">Lead Conversion</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">3.5x</div>
              <div class="c8pf-card-metric-lbl">Deal Intake Size</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">Live</div>
              <div class="c8pf-card-metric-lbl">Site Status</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Mkenny Properties</h4>
          <p class="c8pf-drawer-body">The client wanted to display commercial real estate listings. We developed dynamic post types, taxonomy systems, and search filters, encoding bespoke PHP widgets to give editors easy control.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Active Live Link</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/mkenny-properties/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 9: Stride Plus Media -->
      <div class="c8pf-card-outer" data-c8pf-categories="strategy web">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">Brand Strategy</span>
            <span class="c8pf-tag-badge">SEO Foundation</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_process_layers.jpg'); ?>" alt="Stride Plus Media">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Stride Plus Media</div>
          <h3 class="c8pf-card-title">Brand Positioning &amp; Streaming APIs</h3>
          <p class="c8pf-card-desc">Structuring brand positioning guides, landing pages, and organic SEO paths, collaborating with developers to connect mobile streaming APIs.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Brand Positioning Matrix</span>
              <span class="c8pf-deliv-item">Organic SEO Layout</span>
              <span class="c8pf-deliv-item">API Integration Config</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">1</div>
              <div class="c8pf-card-metric-lbl">Positioning Plan</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">2</div>
              <div class="c8pf-card-metric-lbl">Platforms Built</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">1</div>
              <div class="c8pf-card-metric-lbl">API Integration</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">Stride Plus Media</h4>
          <p class="c8pf-drawer-body">The client wanted to launch Stride Radio. We designed their brand strategy and organic SEO foundations, built their streaming site, and configured backend streaming connections.</p>
          <div class="c8pf-drawer-footer">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-live"></span>
              <span>Build Completed</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/stride-plus-media/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

      <!-- Card 10: WP Publishion AI -->
      <div class="c8pf-card-outer" data-c8pf-categories="ai brand">
        <div class="c8pf-card-media">
          <div class="c8pf-card-tags">
            <span class="c8pf-tag-badge is-service">AI MVP</span>
            <span class="c8pf-tag-badge">Product Design</span>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ai_wp_tree_workflow.jpg'); ?>" alt="WP Publishion AI">
        </div>
        <div class="c8pf-card-details">
          <div class="c8pf-card-client">Cr8v Stacks (Proprietary Product)</div>
          <h3 class="c8pf-card-title">WP Publishion AI</h3>
          <p class="c8pf-card-desc">Designing the visual identity, typography scales, Figma workspace layouts, and active playground sandbox for our WordPress AI drafting tool.</p>
          
          <div class="c8pf-card-deliverables">
            <div class="c8pf-deliv-title">Deliverables</div>
            <div class="c8pf-deliv-list">
              <span class="c8pf-deliv-item">Dashboard Wireframes</span>
              <span class="c8pf-deliv-item">Settings Sidebars UI</span>
              <span class="c8pf-deliv-item">Sandbox Playground</span>
            </div>
          </div>

          <div class="c8pf-card-metrics-row">
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">12</div>
              <div class="c8pf-card-metric-lbl">Layout Modules</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">3</div>
              <div class="c8pf-card-metric-lbl">Logo Concepts</div>
            </div>
            <div class="c8pf-card-metric">
              <div class="c8pf-card-metric-val">Sandbox</div>
              <div class="c8pf-card-metric-lbl">Active Link</div>
            </div>
          </div>
        </div>

        <div class="c8pf-card-hover-drawer">
          <h4 class="c8pf-drawer-title">WP Publishion AI</h4>
          <p class="c8pf-drawer-body">This is our proprietary WordPress AI drafting tool. We designed the workspace layouts, prompt forms, queue widgets, and brand colors, and deployed a sandbox environment.</p>
          <div class="c8pf-drawer-footer" style="gap: 10px;">
            <div class="c8pf-status-indicator">
              <span class="c8pf-status-dot is-playground"></span>
              <span>Active Sandbox</span>
            </div>
            <a href="<?php echo esc_url(home_url('/case-studies/wp-publishion-ai/')); ?>" class="c8pf-explore-btn">Read Case Study →</a>
          </div>
        </div>
      </div>

    </div>

    <!-- SMOOTH PAGINATION CONTROL BAR -->
    <div class="c8pf-pagination-wrap" id="c8pf-pagination">
      <button class="c8pf-page-num is-active" data-page="1">1</button>
      <button class="c8pf-page-num" data-page="2">2</button>
      <button class="c8pf-page-next" data-page="next">Next Page →</button>
    </div>

  </section>

</div><!-- /.c8pf-root -->

<?php get_template_part('parts/prototype-cta'); ?>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var root = document.querySelector('.c8pf-root');
  var atmos = root ? root.querySelector('[data-c8pf-atmos]') : null;
  var glow = root ? root.querySelector('[data-c8pf-glow]') : null;
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

  if (atmos && glow && canHover && !reduceMotion) {
    atmos.addEventListener('mousemove', function (e) {
      var rect = atmos.getBoundingClientRect();
      glow.style.transform = 'translate(' + (e.clientX - rect.left) + 'px,' + (e.clientY - rect.top) + 'px) translate(-50%,-50%)';
    });
    atmos.addEventListener('mouseenter', function () {
      atmos.classList.add('is-active');
    });
    atmos.addEventListener('mouseleave', function () {
      atmos.classList.remove('is-active');
    });
  }

  // Smooth Filtering & Pagination Engine
  var filterButtons = document.querySelectorAll('.c8pf-filter-btn');
  var projectCards = Array.from(document.querySelectorAll('.c8pf-card-outer'));
  var paginationButtons = document.querySelectorAll('.c8pf-page-num, .c8pf-page-next');
  var itemsPerPage = 6;
  var currentPage = 1;
  var currentCategory = 'all';

  function updatePagination() {
    // 1. Get filtered items
    var filteredCards = projectCards.filter(function (card) {
      var categories = card.getAttribute('data-c8pf-categories').split(' ');
      return (currentCategory === 'all' || categories.indexOf(currentCategory) !== -1);
    });

    var totalPages = Math.ceil(filteredCards.length / itemsPerPage) || 1;
    if (currentPage > totalPages) currentPage = totalPages;

    // 2. Hide/Show cards based on current page
    var startIndex = (currentPage - 1) * itemsPerPage;
    var endIndex = startIndex + itemsPerPage;

    projectCards.forEach(function (card) {
      card.classList.add('is-hidden');
    });

    filteredCards.forEach(function (card, index) {
      if (index >= startIndex && index < endIndex) {
        card.classList.remove('is-hidden');
        card.style.opacity = 0;
        card.style.transform = 'scale(0.97) translateY(8px)';
        setTimeout(function () {
          card.style.transition = 'all 0.35s cubic-bezier(.16,1,.3,1)';
          card.style.opacity = 1;
          card.style.transform = 'scale(1) translateY(0)';
        }, 30 * (index - startIndex));
      }
    });

    // 3. Update pagination UI controls
    paginationButtons.forEach(function (btn) {
      var p = btn.getAttribute('data-page');
      if (p === 'next') {
        if (currentPage >= totalPages) {
          btn.style.display = 'none';
        } else {
          btn.style.display = 'inline-flex';
        }
      } else {
        var pageNum = parseInt(p, 10);
        if (pageNum > totalPages) {
          btn.style.display = 'none';
        } else {
          btn.style.display = 'inline-flex';
          if (pageNum === currentPage) {
            btn.classList.add('is-active');
          } else {
            btn.classList.remove('is-active');
          }
        }
      }
    });
  }

  // Filter Buttons Event
  filterButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      filterButtons.forEach(function (btn) { btn.classList.remove('is-active'); });
      button.classList.add('is-active');
      currentCategory = button.getAttribute('data-c8pf-filter');
      currentPage = 1;
      updatePagination();
    });
  });

  // Pagination Event
  paginationButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = btn.getAttribute('data-page');
      if (target === 'next') {
        currentPage++;
      } else {
        currentPage = parseInt(target, 10);
      }
      updatePagination();
      var grid = document.getElementById('c8pf-grid');
      if (grid) {
        grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Matrix scramble animation for portfolio CTA buttons
  var matrixButtons = document.querySelectorAll('.c8pf-explore-btn, .c8pf-playground-btn, .c8pf-btn-primary, .c8pf-filter-btn, .c8cs-back-btn, .c8cs-related-cell-link, .cta-btn-pill');
  var matrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  matrixButtons.forEach(function(btn) {
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
            return matrixChars[Math.floor(Math.random() * matrixChars.length)];
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

  // Initial Run
  updatePagination();
});
</script>

<?php get_footer(); ?>
