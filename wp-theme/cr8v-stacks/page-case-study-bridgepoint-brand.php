<?php
/**
 * Template Name: Case Study — BridgePoints Brand Identity
 * Prototype Parity: Case Studies/bridgepoints.html (100% Exact Duplication)
 */
defined('ABSPATH') || exit;

get_header();
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');

  :root {
    --c8-paper-bg: #F9F9F8;
    --c8-paper-card: #FFFFFF;
    --c8-ink: #080808;
    --c8-sub: #555555;
    --c8-grid-line: rgba(8, 8, 8, 0.14);
    --c8-blue: #0047E1;
    --c8-blue-hi: #3D6BFF;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'Space Mono', monospace;
    --font-heading: 'Michroma', sans-serif;
  }

  .c8cs-root { position: relative; width: 100%; background: #FFFFFF; color: var(--c8-ink); font-family: var(--font-body); }
  .c8cs-wrap { max-width: 1340px; margin: 0 auto; padding: 3rem 2rem 5rem; position: relative; z-index: 2; }
  @media (max-width: 768px) { .c8cs-wrap { padding: 3.5rem 1.25rem; } }

  .c8cs-label {
    font-family: var(--font-mono); font-size: 10px; letter-spacing: .25em; text-transform: uppercase; color: var(--c8-blue); display: inline-flex; align-items: center; gap: 10px; margin-bottom: 1.5rem;
  }
  .c8cs-label::before { content: '// '; color: var(--c8-blue); font-weight: 700; }

  .c8cs-headline {
    font-family: var(--font-heading); font-size: clamp(2.2rem, 5vw, 3.8rem); letter-spacing: 0.02em; line-height: 1.15; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 1.75rem;
  }
  .c8cs-serif { font-family: 'Georgia', serif; font-style: italic; text-transform: none; font-weight: 400; color: var(--c8-blue); }

  .c8cs-lead { font-size: 18.5px; font-weight: 300; color: var(--c8-sub); max-width: 860px; margin-bottom: 2.5rem; line-height: 1.7; }

  .fylla-pill-row { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.5rem; margin-bottom: 2.5rem; }
  .fylla-pill {
    border: 1px solid var(--c8-grid-line); background: #FAFAF7; padding: 0.4rem 0.9rem; font-family: var(--font-mono); font-size: 0.72rem; color: var(--c8-ink); font-weight: 700; border-radius: 4px !important; text-transform: uppercase;
  }

  .c8cs-hero { padding-top: 7rem; padding-bottom: 4rem; position: relative; background: #FFFFFF; border-bottom: 1px solid var(--c8-grid-line); }

  .c8cs-hero-atmos {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: auto; overflow: hidden;
  }
  .c8cs-atmos-svg { position: absolute; top: -10%; left: 0; width: 100%; height: 130%; }
  .c8cs-atmos-blob { filter: blur(1px); opacity: 0.35; }
  .c8cs-atmos-glow {
    position: absolute; top: 0; left: 0; width: 320px; height: 320px; border-radius: 50%;
    background: radial-gradient(circle, rgba(0, 71, 225, 0.35) 0%, rgba(0, 71, 225, 0) 70%);
    transform: translate(-50%, -50%); opacity: 0; transition: opacity 0.4s ease; will-change: transform; pointer-events: none;
  }
  .c8cs-hero-atmos.is-active .c8cs-atmos-glow { opacity: 1; }

  .c8cs-meta-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: transparent; margin-top: 3.5rem; position: relative; z-index: 2; overflow: hidden;
  }
  @media (max-width: 768px) { .c8cs-meta-grid { grid-template-columns: repeat(2, 1fr); } }

  .c8cs-meta-item { padding: 2rem 2.25rem; border-right: 1px solid var(--c8-grid-line); display: flex; flex-direction: column; justify-content: center; background: transparent; transition: background 0.35s ease; }
  .c8cs-meta-item:hover { background: #FAFAF7; }
  .c8cs-meta-item:last-child { border-right: none; }

  .c8cs-meta-lbl { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.5rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-meta-val { font-size: 15px; font-weight: 700; color: var(--c8-ink); }

  .c8cs-grow-media-wrapper { width: 100%; padding: 1.5rem 0; display: flex; justify-content: center; background: transparent; border-bottom: 1px solid var(--c8-grid-line); overflow: hidden; }

  .c8cs-main-img-box {
    width: 85%; max-width: 1200px; border-radius: 4px !important; overflow: hidden; box-shadow: 0 20px 50px rgba(8, 8, 8, 0.08); border: 1px solid var(--c8-grid-line); position: relative; z-index: 2; transition: width 0.15s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .c8cs-main-img-box img { width: 100%; height: auto; display: block; object-fit: cover; max-height: 700px; }

  .c8cs-split-section { display: grid; grid-template-columns: 1fr 1.3fr; gap: 0; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; margin: 4rem 0; }
  @media (max-width: 900px) { .c8cs-split-section { grid-template-columns: 1fr; } }

  .c8cs-split-left { padding: 4.5rem 4rem; border-right: 1px solid var(--c8-grid-line); background: #FFFFFF; position: sticky; top: 100px; align-self: start; height: fit-content; }
  @media (max-width: 900px) { .c8cs-split-left { position: relative; top: 0; border-right: none; border-bottom: 1px solid var(--c8-grid-line); padding: 3rem 2rem; } }

  .c8cs-split-right { background: #FAFAF7; display: flex; flex-direction: column; }
  .c8cs-split-title { font-family: var(--font-heading); font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 700; text-transform: uppercase; letter-spacing: 0.02em; line-height: 1.2; color: var(--c8-ink); margin-bottom: 1.5rem; }
  .c8cs-body-content p { font-size: 15.5px; color: var(--c8-sub); margin-bottom: 1.5rem; line-height: 1.75; font-weight: 300; }

  .fylla-value-item { padding: 3rem 3.5rem; border-bottom: 1px solid var(--c8-grid-line); display: flex; gap: 1.75rem; align-items: flex-start; transition: background 0.35s ease; background: #FAFAF7; }
  .fylla-value-item:hover { background: #FFFFFF; }
  .fylla-value-item:last-child { border-bottom: none; }

  .fylla-value-icon-box {
    width: 48px; height: 48px; border-radius: 4px !important; background: rgba(0, 71, 225, 0.08); border: 1px solid rgba(0, 71, 225, 0.2); display: flex; align-items: center; justify-content: center; color: var(--c8-blue); flex-shrink: 0; margin-top: 0.2rem;
  }
  .fylla-value-icon-box svg { width: 24px; height: 24px; stroke: var(--c8-blue); fill: none; stroke-width: 2; }

  .fylla-value-h3 { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.65rem; }
  .fylla-value-desc { font-size: 0.92rem; color: var(--c8-sub); line-height: 1.65; }

  .c8cs-gallery-section { padding: 0 0 3rem; background: #FFFFFF; border-bottom: 1px solid var(--c8-grid-line); }
  .c8cs-gallery-outer-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-gallery-header { padding: 3.5rem 4rem; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  .c8cs-gallery-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0; background: var(--c8-grid-line); }
  @media (max-width: 900px) { .c8cs-gallery-grid { grid-template-columns: 1fr; } }

  .c8cs-gallery-card { background: #FFFFFF; padding: 3.5rem 3rem; display: flex; flex-direction: column; justify-content: space-between; border-right: 1px solid var(--c8-grid-line); border-bottom: 1px solid var(--c8-grid-line); transition: background 0.35s ease; }
  .c8cs-gallery-card:hover { background: #FAFAF7; }
  .c8cs-gallery-card.is-full { grid-column: 1 / -1; border-right: none; border-bottom: none; background: #FAFAF7; }
  .c8cs-gallery-card-top { margin-bottom: 2rem; }
  .c8cs-gallery-card-bottom { margin-top: auto; display: flex; flex-direction: column; }

  .c8cs-gallery-meta { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.75rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-gallery-title { font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.01em; }
  .c8cs-gallery-desc { font-size: 14.5px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 2rem; }

  .c8cs-gallery-img-box { width: 100%; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); margin-top: auto; background: #000000; }
  .c8cs-gallery-img-box.is-tall { max-height: 520px !important; height: 520px !important; }
  .c8cs-gallery-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform 0.5s ease; }
  .c8cs-gallery-card:hover .c8cs-gallery-img-box img { transform: scale(1.03); }

  .c8cs-swatch-row { display: flex; gap: 1rem; margin-top: 2rem; }
  .c8cs-swatch { flex: 1; height: 110px; border-radius: 4px !important; border: 1px solid var(--c8-grid-line); display: flex; flex-direction: column; justify-content: flex-end; padding: 12px; }
  .c8cs-swatch-hex { font-family: var(--font-mono); font-size: 9px; font-weight: 700; background: rgba(255, 255, 255, 0.9); padding: 2px 6px; border-radius: 4px !important; align-self: flex-start; color: var(--c8-ink); }

  .c8cs-metrics-bg { background: #FFFFFF; border-bottom: 1px solid var(--c8-grid-line); padding: 6rem 0; }
  .c8cs-metrics-outer-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-metrics-header { padding: 3.5rem 4rem; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  .c8cs-metrics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 768px) { .c8cs-metrics-grid { grid-template-columns: 1fr; } }

  .c8cs-metric-card { background: #FAFAF7; border-right: 1px solid var(--c8-grid-line); padding: 3.5rem 3rem; display: flex; flex-direction: column; transition: background 0.35s ease; }
  .c8cs-metric-card:nth-child(even) { background: #FFFFFF; }
  .c8cs-metric-card:hover { background: #F4F5F7; }
  .c8cs-metric-card:last-child { border-right: none; }

  .c8cs-metric-val { font-family: var(--font-heading); font-size: 3rem; font-weight: 700; color: var(--c8-blue); line-height: 1; margin-bottom: 1.25rem; }
  .c8cs-metric-lbl { font-family: var(--font-mono); font-size: 9px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.75rem; font-weight: 700; }
  .c8cs-metric-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; }

  .c8cs-status-badge {
    background: rgba(0, 191, 99, 0.04); border: 1px solid rgba(0, 191, 99, 0.25);
    padding: 1.25rem 1.75rem; border-radius: 4px !important; display: inline-flex; flex-direction: column; align-items: flex-start;
    margin-top: auto; text-decoration: none; transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease; cursor: pointer;
  }
  .c8cs-status-badge:hover { background: rgba(0, 191, 99, 0.08); border-color: rgba(0, 191, 99, 0.4); transform: translateY(-2px); }
  .c8cs-status-lbl { font-family: var(--font-mono); font-size: 8px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px; }
  .c8cs-status-val { font-family: var(--font-heading); font-size: 10.5px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 8px; line-height: 1.2; }
  .c8cs-checkmark-circle { display: inline-flex; align-items: center; justify-content: center; width: 16px; height: 16px; border-radius: 50%; background: #00BF63; color: #FFFFFF; font-size: 10px; font-weight: bold; }

  .c8cs-back-btn { font-family: var(--font-mono); font-size: 10px; color: #8A8A8A; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 2.5rem; text-transform: uppercase; letter-spacing: 0.08em; transition: color 0.2s ease; text-decoration: none; position: relative; z-index: 2; font-weight: 700; }
  .c8cs-back-btn:hover { color: var(--c8-blue); }

  .c8cs-related-paper-outer { background: #FFFFFF; padding: 6rem 0; border-bottom: 1px solid var(--c8-grid-line); width: 100%; }
  .c8cs-related-matrix-box { max-width: 1340px; margin: 0 auto; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-related-matrix-header { padding: 3.5rem 4rem; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  .c8cs-related-matrix-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 900px) { .c8cs-related-matrix-grid { grid-template-columns: 1fr; } }

  .c8cs-related-cell { padding: 3.5rem 3rem; border-right: 1px solid var(--c8-grid-line); background: #FAFAF7; display: flex; flex-direction: column; justify-content: space-between; text-decoration: none; color: var(--c8-ink); transition: background 0.35s ease; }
  .c8cs-related-cell:nth-child(even) { background: #FFFFFF; }
  .c8cs-related-cell:last-child { border-right: none; }
  .c8cs-related-cell:hover { background: #F4F5F7; }

  .c8cs-related-cell-tag { font-family: var(--font-mono); font-size: 10px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; margin-bottom: 0.75rem; }
  .c8cs-related-cell-title { font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.85rem; line-height: 1.3; }
  .c8cs-related-cell-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 2rem; }
  .c8cs-related-cell-link { font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.2s ease; }
  .c8cs-related-cell:hover .c8cs-related-cell-link { gap: 10px; }
</style>

<div class="c8cs-root">
  <!-- Hero Section -->
  <section class="c8cs-hero">
    <div class="c8cs-hero-atmos" data-c8cs-atmos>
      <svg class="c8cs-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <filter id="c8csGoo" x="-50%" y="-50%" width="200%" height="200%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="7" result="turb">
              <animate attributeName="baseFrequency" values="0.008 0.02;0.02 0.05;0.008 0.02" dur="16s" repeatCount="indefinite"/>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turb" scale="42" xChannelSelector="R" yChannelSelector="G"/>
            <feGaussianBlur stdDeviation="4"/>
          </filter>
        </defs>
        <g filter="url(#c8csGoo)">
          <circle class="c8cs-atmos-blob" cx="80" cy="60" r="70" fill="#0047E1">
            <animate attributeName="cx" values="80;145;55;80" dur="19s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="60;35;95;60" dur="19s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8cs-atmos-blob" cx="220" cy="55" r="55" fill="#3D6BFF">
            <animate attributeName="cx" values="220;165;265;220" dur="23s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="55;95;25;55" dur="23s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8cs-atmos-blob" cx="330" cy="70" r="45" fill="#7C93FF">
            <animate attributeName="cx" values="330;285;365;330" dur="15s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="70;105;45;70" dur="15s" repeatCount="indefinite"/>
          </circle>
        </g>
      </svg>
    </div>
    <div class="c8cs-atmos-glow" data-c8cs-glow></div>

    <div class="c8cs-wrap" style="padding-top: 1rem; padding-bottom: 2rem;">
      <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8cs-back-btn">&larr; Back to Portfolio</a>
      
      <div class="c8cs-label">Case Study // Brand Identity &amp; Vector Design</div>
      <h1 class="c8cs-headline">BridgePoints: Corporate Visual <span class="c8cs-serif">Brand Identity</span></h1>
      <p class="c8cs-lead">Bridgepoint Advisory Services needed a visual identity system that commanded authority in corporate financial markets. We crafted an original vector logo mark, set color swatch tokens, and compiled a comprehensive brand manual for digital and print collateral.</p>
      
      <div class="fylla-pill-row">
        <span class="fylla-pill">Brand Identity</span>
        <span class="fylla-pill">Vector Logo</span>
        <span class="fylla-pill">Design Tokens</span>
        <span class="fylla-pill">Brand Manual</span>
      </div>

      <div class="c8cs-meta-grid">
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Client</span>
          <span class="c8cs-meta-val">Bridgepoint Advisory</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Services</span>
          <span class="c8cs-meta-val">Brand Identity Design</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Stack</span>
          <span class="c8cs-meta-val">Figma · Vector Assets</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Link</span>
          <span class="c8cs-meta-val"><a href="https://bridgepoints.ng/" target="_blank" rel="noopener" style="color: #0047E1; text-decoration: underline;">bridgepoints.ng ↗</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Scroll Grow Media -->
  <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
    <div class="c8cs-main-img-box" id="c8cs-grow-target">
      <img src="https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=1600&auto=format&fit=crop" alt="BridgePoints Brand Identity showcase — built by Cr8v Stacks">
    </div>
  </div>

  <!-- Overview Section -->
  <section class="c8cs-wrap">
    <div class="c8cs-split-section">
      <div class="c8cs-split-left">
        <div class="c8cs-label">Overview</div>
        <h2 class="c8cs-split-title">The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span></h2>
        <div class="c8cs-body-content">
          <p>As Bridgepoint expanded its corporate advisory portfolio, their legacy visual assets lacked the premium polish required for high-stakes enterprise presentations.</p>
          <p>They needed a flexible vector design system that maintained absolute consistency across dark web UIs, executive pitch decks, and large-scale print collateral.</p>
        </div>
      </div>

      <div class="c8cs-split-right">
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">01 / Geometric Logo Exploration</h3>
            <p class="fylla-value-desc">Hand-sketched and vectorized modern geometric logotypes representing structural stability and corporate growth.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">02 / Color &amp; Typography Tokenization</h3>
            <p class="fylla-value-desc">Curated a high-contrast corporate palette (#0047E1 Royal Blue, Obsidian Slate) and paired precision sans-serif typography.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">03 / Brand Guidelines Manual</h3>
            <p class="fylla-value-desc">Compiled a 40-page digital brand book defining clear spacing grids, clear-space boundaries, and color usage rules.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">04 / Production Asset Package</h3>
            <p class="fylla-value-desc">Delivered complete SVG, EPS, PNG, and PDF asset packages optimized for print resolution and web UI performance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase Gallery -->
  <section class="c8cs-gallery-section">
    <div class="c8cs-wrap">
      <div class="c8cs-gallery-outer-box">
        <div class="c8cs-gallery-header">
          <div class="c8cs-label">Showcase</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Visual Showcase &amp; Systems</h2>
        </div>

        <div class="c8cs-gallery-grid">
          <div class="c8cs-gallery-card">
            <div class="c8cs-gallery-card-top">
              <div class="c8cs-gallery-meta">Brand Identity // Asset 01</div>
              <h3 class="c8cs-gallery-title">Color System &amp; Palette</h3>
            </div>
            <div class="c8cs-gallery-card-bottom">
              <p class="c8cs-gallery-desc">Curating primary brand accents, dark backgrounds, and neutral tones that convey luxury elegance.</p>
              <div class="c8cs-swatch-row">
                <div class="c8cs-swatch" style="background: #080808; color: #FFFFFF;">
                  <span class="c8cs-swatch-hex">#080808</span>
                </div>
                <div class="c8cs-swatch" style="background: #0047E1; color: #FFFFFF;">
                  <span class="c8cs-swatch-hex">#0047E1</span>
                </div>
                <div class="c8cs-swatch" style="background: #F4F6FB; color: #080808;">
                  <span class="c8cs-swatch-hex" style="background: rgba(8,8,8,0.1);">#F4F6FB</span>
                </div>
              </div>
            </div>
          </div>

          <div class="c8cs-gallery-card">
            <div class="c8cs-gallery-card-top">
              <div class="c8cs-gallery-meta">Interface // Asset 02</div>
              <h3 class="c8cs-gallery-title">Platform Experience Page</h3>
            </div>
            <div class="c8cs-gallery-card-bottom">
              <p class="c8cs-gallery-desc">Designing custom user interfaces, pricing breakdowns, and direct conversion triggers.</p>
              <div class="c8cs-gallery-img-box">
                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="BridgePoints Brand Identity interface detail screenshot">
              </div>
            </div>
          </div>

          <div class="c8cs-gallery-card is-full">
            <div class="c8cs-gallery-card-top">
              <div class="c8cs-gallery-meta">Mobile UI // Asset 03</div>
              <h3 class="c8cs-gallery-title">Responsive Mobile Flow</h3>
            </div>
            <div class="c8cs-gallery-card-bottom">
              <p class="c8cs-gallery-desc">Optimizing touch targets and instant contact forms for mobile users discovering the platform online.</p>
              <div class="c8cs-gallery-img-box is-tall">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop" alt="BridgePoints Brand Identity mobile experience flow">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Outcomes Metrics Matrix -->
  <section class="c8cs-metrics-bg">
    <div class="c8cs-wrap">
      <div class="c8cs-metrics-outer-box">
        <div class="c8cs-metrics-header">
          <div class="c8cs-label">Outcomes</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Bespoke Performance Metrics</h2>
        </div>

        <div class="c8cs-metrics-grid">
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-val">100%</div>
            <div class="c8cs-metric-lbl">Original Vector System</div>
            <p class="c8cs-metric-desc">Hand-crafted vector marks created entirely from scratch with zero stock templates or pre-made icons.</p>
          </div>
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-val">1</div>
            <div class="c8cs-metric-lbl">Unified Style Guide</div>
            <p class="c8cs-metric-desc">Delivered a single source of truth for all external marketing, web development, and executive presentation design.</p>
          </div>

          <div class="c8cs-metric-card">
            <div class="c8cs-metric-lbl" style="margin-bottom: 1.5rem;">Live Verification</div>
            <a href="https://bridgepoints.ng/" target="_blank" rel="noopener" class="c8cs-status-badge">
              <span class="c8cs-status-lbl">Launch Status</span>
              <span class="c8cs-status-val">
                <span class="c8cs-checkmark-circle">✓</span> Visit Live Site ↗
              </span>
            </a>
            <p class="c8cs-metric-desc" style="margin-top: 1.5rem;">The platform is active and live. Click the button above to view their custom site architecture.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Projects Matrix -->
  <div class="c8cs-related-paper-outer">
    <div class="c8cs-wrap" style="padding-top:0; padding-bottom:0;">
      <div class="c8cs-related-matrix-box">
        <div class="c8cs-related-matrix-header">
          <div class="c8cs-label">More Case Studies</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Explore Related Projects</h2>
        </div>

        <div class="c8cs-related-matrix-grid">
          <a href="<?php echo esc_url(home_url('/portfolio/stride-plus-media/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">01 / Digital Marketing</div>
              <h3 class="c8cs-related-cell-title">Stride Plus Media</h3>
              <p class="c8cs-related-cell-desc">Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.</p>
            </div>
            <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
          </a>
          <a href="<?php echo esc_url(home_url('/portfolio/the-duch-apartments/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">02 / Web Design &amp; SEO</div>
              <h3 class="c8cs-related-cell-title">The Duch Apartments</h3>
              <p class="c8cs-related-cell-desc">Brand identity and direct booking platform engineered with SEO architecture built in from day one.</p>
            </div>
            <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
          </a>
          <a href="<?php echo esc_url(home_url('/portfolio/victorias-lane/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">03 / Shopify Storefront</div>
              <h3 class="c8cs-related-cell-title">Victoria's Lane</h3>
              <p class="c8cs-related-cell-desc">Luxury storefront with hand-coded Liquid components and 99.8% PageSpeed score.</p>
            </div>
            <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Homepage CTA -->
  <?php get_template_part('parts/prototype-cta'); ?>

</div><!-- End c8cs-root -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var root = document.querySelector('.c8cs-root');
    var atmos = root.querySelector('[data-c8cs-atmos]');
    var glow = root.querySelector('[data-c8cs-glow]');
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

    if (atmos && glow && canHover && !reduceMotion) {
      atmos.addEventListener('mousemove', function (e) {
        var r = atmos.getBoundingClientRect();
        glow.style.left = (e.clientX - r.left) + 'px';
        glow.style.top = (e.clientY - r.top) + 'px';
      });
      atmos.addEventListener('mouseenter', function () { atmos.classList.add('is-active'); });
      atmos.addEventListener('mouseleave', function () { atmos.classList.remove('is-active'); });
    }

    var growTarget = document.getElementById('c8cs-grow-target');
    var growTrigger = document.getElementById('c8cs-grow-trigger');

    if (growTarget && growTrigger && !reduceMotion) {
      function handleGrowScroll() {
        var rect = growTrigger.getBoundingClientRect();
        var viewportH = window.innerHeight;
        var start = viewportH * 0.9;
        var end = viewportH * 0.2;
        var progress = 0;
        if (rect.top < start) {
          progress = (start - rect.top) / (start - end);
          if (progress > 1) progress = 1;
          if (progress < 0) progress = 0;
        }
        var widthVal = 85 + (15 * progress);
        var maxWVal = 1200 + ((window.innerWidth - 1200) * progress);
        growTarget.style.width = widthVal + '%';
        growTarget.style.maxWidth = maxWVal + 'px';
      }
      window.addEventListener('scroll', handleGrowScroll);
      window.addEventListener('resize', handleGrowScroll);
      handleGrowScroll();
    }
  });
</script>

<?php get_footer(); ?>
