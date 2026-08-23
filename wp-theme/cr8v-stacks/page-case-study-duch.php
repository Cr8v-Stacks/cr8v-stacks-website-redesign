<?php
/**
 * Template Name: Case Study — The Duch Apartments
 * Prototype Parity: Case Studies/the-duch-apartments.html (100% Exact Duplication)
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
  .c8cs-wrap { max-width: 1340px; margin: 0 auto; padding: 2.5rem 2rem 3.5rem; position: relative; z-index: 2; }
  @media (max-width: 768px) { .c8cs-wrap { padding: 1.5rem 1.25rem 2.5rem; } }

  .c8cs-back-btn {
    font-family: var(--font-mono); font-size: 10px; color: #8A8A8A; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 0.08em; transition: color 0.2s ease; text-decoration: none; font-weight: 700; position: relative; z-index: 2;
  }
  .c8cs-back-btn:hover { color: var(--c8-blue); }

  .c8cs-label {
    font-family: var(--font-mono); font-size: 10px; letter-spacing: .25em; text-transform: uppercase; color: var(--c8-blue); display: inline-flex; align-items: center; gap: 10px; margin-bottom: 1.25rem;
  }
  .c8cs-label::before { content: '// '; color: var(--c8-blue); font-weight: 700; }

  .c8cs-headline {
    font-family: var(--font-heading); font-size: clamp(2.2rem, 5vw, 3.8rem); letter-spacing: 0.02em; line-height: 1.15; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 1.5rem;
  }
  .c8cs-serif { font-family: 'Georgia', serif; font-style: italic; text-transform: none; font-weight: 400; color: var(--c8-blue); }

  .c8cs-lead { font-size: 18.5px; font-weight: 300; color: var(--c8-sub); max-width: 860px; margin-bottom: 2.5rem; line-height: 1.7; }

  .fylla-pill-row { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.5rem; margin-bottom: 2.5rem; }
  .fylla-pill {
    border: 1px solid var(--c8-grid-line); background: #FAFAF7; padding: 0.35rem 0.85rem; font-family: var(--font-mono); font-size: 0.72rem; color: var(--c8-ink); font-weight: 700; border-radius: 4px !important; text-transform: uppercase;
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
  @media (max-width: 768px) { .c8cs-meta-grid { grid-template-columns: repeat(2, 1fr); margin-top: 1.5rem; } }

  .c8cs-meta-item { padding: 2rem 2.25rem; border-right: 1px solid var(--c8-grid-line); display: flex; flex-direction: column; justify-content: center; background: transparent; transition: background 0.35s ease; }
  .c8cs-meta-item:hover { background: #FAFAF7; }
  .c8cs-meta-item:last-child { border-right: none; }
  @media (max-width: 768px) {
    .c8cs-meta-item:nth-child(2n) { border-right: none; }
    .c8cs-meta-item:nth-child(1), .c8cs-meta-item:nth-child(2) { border-bottom: 1px solid var(--c8-grid-line); }
  }

  .c8cs-meta-lbl { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.4rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-meta-val { font-size: 14.5px; font-weight: 700; color: var(--c8-ink); }

  .c8cs-grow-media-wrapper { width: 100%; padding: 1.5rem 0; display: flex; justify-content: center; background: transparent; overflow: hidden; }
  @media (max-width: 768px) { .c8cs-grow-media-wrapper { padding: 1rem 0; } }

  .c8cs-main-img-box {
    width: 85%; max-width: 1200px; border-radius: 4px !important; overflow: hidden; box-shadow: 0 20px 50px rgba(8, 8, 8, 0.08); border: 1px solid var(--c8-grid-line); position: relative; z-index: 2; transition: width 0.15s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .c8cs-main-img-box img { width: 100%; height: auto; display: block; object-fit: cover; max-height: 700px; }

  .c8cs-split-section { display: grid; grid-template-columns: 1fr 1.3fr; gap: 0; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; margin: clamp(2.5rem, 4vw, 3.5rem) 0; }
  @media (max-width: 900px) { .c8cs-split-section { grid-template-columns: 1fr; margin: 2rem 0; } }

  .c8cs-split-left { padding: clamp(2.5rem, 3.5vw, 3.75rem) clamp(1.75rem, 3vw, 3.25rem); border-right: 1px solid var(--c8-grid-line); background: #FFFFFF; position: sticky; top: 100px; align-self: start; height: fit-content; }
  @media (max-width: 900px) { .c8cs-split-left { position: relative; top: 0; border-right: none; border-bottom: 1px solid var(--c8-grid-line); padding: 2rem 1.5rem; } }

  .c8cs-split-right { background: #FAFAF7; display: flex; flex-direction: column; }
  .c8cs-split-title { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 700; text-transform: uppercase; letter-spacing: 0.02em; line-height: 1.2; color: var(--c8-ink); margin-bottom: 1.25rem; }
  .c8cs-body-content p { font-size: 15px; color: var(--c8-sub); margin-bottom: 1.25rem; line-height: 1.7; font-weight: 300; }

  .fylla-value-item { padding: clamp(1.75rem, 2.5vw, 2.5rem) clamp(1.5rem, 2.5vw, 2.75rem); border-bottom: 1px solid var(--c8-grid-line); display: flex; gap: 1.5rem; align-items: flex-start; transition: background 0.35s ease; background: #FAFAF7; }
  @media (max-width: 600px) { .fylla-value-item { padding: 1.5rem 1.25rem; gap: 1rem; } }
  .fylla-value-item:hover { background: #FFFFFF; }
  .fylla-value-item:last-child { border-bottom: none; }

  .fylla-value-icon-box {
    width: 44px; height: 44px; border-radius: 4px !important; background: rgba(0, 71, 225, 0.08); border: 1px solid rgba(0, 71, 225, 0.2); display: flex; align-items: center; justify-content: center; color: var(--c8-blue); flex-shrink: 0; margin-top: 0.2rem;
  }
  .fylla-value-icon-box svg { width: 22px; height: 22px; stroke: var(--c8-blue); fill: none; stroke-width: 2; }

  .fylla-value-h3 { font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.5rem; }
  .fylla-value-desc { font-size: 0.9rem; color: var(--c8-sub); line-height: 1.6; }

  /* ── SECTION 3: CORE DELIVERABLES (2-UP 16:9 GRID) ── */
  .c8cs-deliverables-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-deliverables-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-deliverables-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-deliverables-header { padding: 1.75rem 1.25rem; } }
  .c8cs-deliverables-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0; background: var(--c8-grid-line); }
  @media (max-width: 900px) { .c8cs-deliverables-grid { grid-template-columns: 1fr; } }
  .c8cs-deliverable-card { background: #FFFFFF; padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.75rem); display: flex; flex-direction: column; justify-content: space-between; border-right: 1px solid var(--c8-grid-line); border-bottom: 1px solid var(--c8-grid-line); transition: background 0.35s ease; }
  .c8cs-deliverable-card:last-child { border-right: none; }
  @media (max-width: 900px) { .c8cs-deliverable-card { border-right: none; } }
  @media (max-width: 600px) { .c8cs-deliverable-card { padding: 1.75rem 1.25rem; } }
  .c8cs-deliverable-card:hover { background: #FAFAF7; }
  .c8cs-deliverable-meta { font-family: var(--font-mono); font-size: 9px; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.65rem; letter-spacing: 0.14em; font-weight: 700; }
  .c8cs-deliverable-title { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.45rem; letter-spacing: 0.01em; }
  .c8cs-deliverable-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 1.5rem; }
  .c8cs-deliverable-img-box { width: 100%; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); margin-top: auto; background: #080808; aspect-ratio: 16 / 9; }
  .c8cs-deliverable-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform 0.5s ease; }
  .c8cs-deliverable-card:hover .c8cs-deliverable-img-box img { transform: scale(1.02); }

  /* ── SECTION 4: SOVEREIGNTY ARCHITECTURE (3:4 SPLIT) ── */
  .c8cs-sovereignty-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-sovereignty-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-sovereignty-split { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 0; background: var(--c8-grid-line); align-items: stretch; }
  @media (max-width: 960px) { .c8cs-sovereignty-split { grid-template-columns: 1fr; } }
  .c8cs-sovereignty-left { background: #FFFFFF; padding: clamp(2.5rem, 3.5vw, 3.75rem) clamp(1.75rem, 3vw, 3.25rem); display: flex; flex-direction: column; justify-content: center; border-right: 1px solid var(--c8-grid-line); }
  @media (max-width: 960px) { .c8cs-sovereignty-left { border-right: none; border-bottom: 1px solid var(--c8-grid-line); padding: 2rem 1.5rem; } }
  .c8cs-sovereignty-right { background: #FAFAF7; padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); display: flex; align-items: center; justify-content: center; }
  @media (max-width: 960px) { .c8cs-sovereignty-right { padding: 2rem 1.25rem; } }
  .c8cs-sovereignty-img-box { width: 100%; max-width: 440px; aspect-ratio: 3 / 4; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); background: #080808; box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
  .c8cs-sovereignty-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; }

  /* ── SECTION 5: PURE VISUAL GALLERY (CLEAN STREAM — NO SLOP) ── */
  .c8cs-stream-section { padding: 0 0 clamp(2rem, 3.5vw, 3.5rem); background: #FFFFFF; }
  .c8cs-stream-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-stream-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-stream-header { padding: 1.75rem 1.25rem; } }
  .c8cs-stream-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; background: var(--c8-grid-line); }
  @media (max-width: 992px) { .c8cs-stream-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 600px) { .c8cs-stream-grid { grid-template-columns: 1fr; } }
  .c8cs-stream-cell { background: #FFFFFF; padding: clamp(1.25rem, 2vw, 1.75rem); display: flex; flex-direction: column; border-right: 1px solid var(--c8-grid-line); border-bottom: 1px solid var(--c8-grid-line); transition: background 0.35s ease; }
  .c8cs-stream-cell:nth-child(3n) { border-right: none; }
  @media (max-width: 992px) { .c8cs-stream-cell:nth-child(3n) { border-right: 1px solid var(--c8-grid-line); } .c8cs-stream-cell:nth-child(2n) { border-right: none; } }
  @media (max-width: 600px) { .c8cs-stream-cell { border-right: none; padding: 1.25rem 1.25rem 1.5rem; } }
  .c8cs-stream-cell:hover { background: #FAFAF7; }
  .c8cs-stream-img-box { width: 100%; aspect-ratio: 16 / 9; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); background: #080808; margin-bottom: 1rem; }
  .c8cs-stream-img-box img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform 0.5s ease; }
  .c8cs-stream-cell:hover .c8cs-stream-img-box img { transform: scale(1.03); }
  .c8cs-stream-cell-info { display: flex; flex-direction: column; gap: 0.2rem; }
  .c8cs-stream-cell-tag { font-family: var(--font-mono); font-size: 8.5px; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; letter-spacing: 0.12em; }
  .c8cs-stream-cell-title { font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; letter-spacing: 0.01em; }

  .c8cs-metrics-bg { background: #FFFFFF; padding: clamp(3rem, 5vw, 5rem) 0; }
  .c8cs-metrics-outer-box { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-metrics-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-metrics-header { padding: 1.75rem 1.25rem; } }
  .c8cs-metrics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 768px) { .c8cs-metrics-grid { grid-template-columns: 1fr; } }

  .c8cs-metric-card { background: #FAFAF7; border-right: 1px solid var(--c8-grid-line); padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); display: flex; flex-direction: column; transition: background 0.35s ease; }
  .c8cs-metric-card:nth-child(even) { background: #FFFFFF; }
  .c8cs-metric-card:hover { background: #F4F5F7; }
  .c8cs-metric-card:last-child { border-right: none; }
  @media (max-width: 768px) {
    .c8cs-metric-card { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
    .c8cs-metric-card:last-child { border-bottom: none; }
  }

  .c8cs-metric-val { font-family: var(--font-heading); font-size: clamp(2.4rem, 4vw, 3rem); font-weight: 700; color: var(--c8-blue); line-height: 1; margin-bottom: 1rem; }
  .c8cs-metric-lbl { font-family: var(--font-mono); font-size: 9px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.65rem; font-weight: 700; }
  .c8cs-metric-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; }

  .c8cs-status-badge {
    background: rgba(0, 191, 99, 0.04); border: 1px solid rgba(0, 191, 99, 0.25);
    padding: 1rem 1.5rem; border-radius: 4px !important; display: inline-flex; flex-direction: column; align-items: flex-start;
    margin-top: auto; text-decoration: none; transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease; cursor: pointer;
  }
  .c8cs-status-badge:hover { background: rgba(0, 191, 99, 0.08); border-color: rgba(0, 191, 99, 0.4); transform: translateY(-2px); }
  .c8cs-status-lbl { font-family: var(--font-mono); font-size: 8px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px; }
  .c8cs-status-val { font-family: var(--font-heading); font-size: 10.5px; font-weight: 700; color: #00BF63; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 8px; line-height: 1.2; }
  .c8cs-checkmark-circle { display: inline-flex; align-items: center; justify-content: center; width: 16px; height: 16px; border-radius: 50%; background: #00BF63; color: #FFFFFF; font-size: 10px; font-weight: bold; }

  .c8cs-related-paper-outer { background: #FFFFFF; padding: clamp(3rem, 5vw, 5rem) 0; width: 100%; }
  .c8cs-related-matrix-box { max-width: 1340px; margin: 0 auto; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; background: #FFFFFF; overflow: hidden; }
  .c8cs-related-matrix-header { padding: clamp(2rem, 3vw, 3rem) clamp(1.75rem, 3.5vw, 3.5rem); border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
  @media (max-width: 600px) { .c8cs-related-matrix-header { padding: 1.75rem 1.25rem; } }
  .c8cs-related-matrix-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
  @media (max-width: 900px) { .c8cs-related-matrix-grid { grid-template-columns: 1fr; } }

  .c8cs-related-cell { padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem); border-right: 1px solid var(--c8-grid-line); background: #FAFAF7; display: flex; flex-direction: column; justify-content: space-between; text-decoration: none; color: var(--c8-ink); transition: background 0.35s ease; }
  .c8cs-related-cell:nth-child(even) { background: #FFFFFF; }
  .c8cs-related-cell:last-child { border-right: none; }
  .c8cs-related-cell:hover { background: #F4F5F7; }
  @media (max-width: 900px) {
    .c8cs-related-cell { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
    .c8cs-related-cell:last-child { border-bottom: none; }
  }

  .c8cs-related-cell-tag { font-family: var(--font-mono); font-size: 10px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; margin-bottom: 0.65rem; }
  .c8cs-related-cell-title { font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 0.75rem; line-height: 1.3; }
  .c8cs-related-cell-desc { font-size: 14px; color: var(--c8-sub); font-weight: 300; line-height: 1.6; margin-bottom: 1.75rem; }
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
      
      <div class="c8cs-label">Case Study // Real Estate &amp; Hospitality</div>
      <h1 class="c8cs-headline">The Duch Apartments: Direct Booking &amp; <span class="c8cs-serif">Brand Identity</span></h1>
      <p class="c8cs-lead">The Duch Apartments needed a complete digital presence to drive direct room reservations without depending entirely on third-party OTA platforms. We built their brand identity, developed a custom room catalog, and deployed an entity SEO architecture that ranks organically for local Lagos luxury stay queries.</p>
      
      <div class="fylla-pill-row">
        <span class="fylla-pill">Web Design</span>
        <span class="fylla-pill">Entity SEO</span>
        <span class="fylla-pill">WordPress Custom</span>
        <span class="fylla-pill">Brand Identity</span>
      </div>

      <div class="c8cs-meta-grid">
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Client</span>
          <span class="c8cs-meta-val">The Duch Apartments</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Services</span>
          <span class="c8cs-meta-val">Web Design &amp; Entity SEO</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Stack</span>
          <span class="c8cs-meta-val">WordPress · Custom Code</span>
        </div>
        <div class="c8cs-meta-item">
          <span class="c8cs-meta-lbl">Link</span>
          <span class="c8cs-meta-val"><a href="https://theduchapartments.com/" target="_blank" rel="noopener" style="color: #0047E1; text-decoration: underline;">theduchapartments.com ↗</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Scroll Grow Media -->
  <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
    <div class="c8cs-main-img-box" id="c8cs-grow-target">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_hero_landscape.webp" alt="The Duch Apartments direct booking platform showcase — engineered by Cr8v Stacks">
    </div>
  </div>

  <!-- Overview Section -->
  <section class="c8cs-wrap">
    <div class="c8cs-split-section">
      <div class="c8cs-split-left">
        <div class="c8cs-label">Overview</div>
        <h2 class="c8cs-split-title">The Strategic Challenge <br><span class="c8cs-serif">&amp; Engineered Solution</span></h2>
        <div class="c8cs-body-content">
          <p>The Duch Apartments was launching new luxury serviced apartments in Lekki, Lagos. Relying exclusively on third-party OTAs (Booking.com, Airbnb) meant paying high commission fees and losing direct control over guest relationships, brand messaging, and recurring bookings.</p>
          <p>They needed their own direct booking platform with zero template bloat, instant mobile performance, and a clear brand identity system that communicated luxury living.</p>
        </div>
      </div>

      <div class="c8cs-split-right">
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">01 / Brand Strategy &amp; Identity System</h3>
            <p class="fylla-value-desc">Developed a high-trust color token palette (emerald green, warm sand, slate dark), primary logotype, typography scales, and visual guidelines.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">02 / Custom Room Catalog Architecture</h3>
            <p class="fylla-value-desc">Engineered clean custom Gutenberg &amp; Elementor room layout templates with high-res gallery carousels, amenity matrices, and location maps.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">03 / Entity SEO &amp; Schema Integration</h3>
            <p class="fylla-value-desc">Structured Schema.org LocalBusiness and LodgingBusiness JSON-LD code directly into the site header to dominate local search queries.</p>
          </div>
        </div>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">04 / Direct Reservation &amp; Checkout Architecture</h3>
            <p class="fylla-value-desc">Engineered an end-to-end guest booking pipeline with instant date selection, zero intermediary lock-in, and direct WhatsApp payment confirmation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Core Technical Deliverables -->
  <section class="c8cs-deliverables-section">
    <div class="c8cs-wrap">
      <div class="c8cs-deliverables-box">
        <div class="c8cs-deliverables-header">
          <div class="c8cs-label">Design &amp; Engineering</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Core Technical Deliverables</h2>
        </div>

        <div class="c8cs-deliverables-grid">
          <!-- Asset 01: Mini Design System Spec -->
          <div class="c8cs-deliverable-card">
            <div>
              <div class="c8cs-deliverable-meta">Design System // Asset 01</div>
              <h3 class="c8cs-deliverable-title">Semantic Token Architecture</h3>
              <p class="c8cs-deliverable-desc">Constructed an atomic design system with semantic color tokens (Forest Green, Warm Amber, Slate), DM Sans typography scales, and 4px precision radius components mapped directly into the WordPress theme.</p>
            </div>
            <div class="c8cs-deliverable-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/duch_asset_01_design_system.webp" alt="The Duch Apartments Mini Design System Specification">
            </div>
          </div>

          <!-- Asset 02: Direct Reservation Engine -->
          <div class="c8cs-deliverable-card">
            <div>
              <div class="c8cs-deliverable-meta">Booking Engine // Asset 02</div>
              <h3 class="c8cs-deliverable-title">Direct Availability Matrix</h3>
              <p class="c8cs-deliverable-desc">Engineered a custom dual-month availability calendar and real-time room reservation engine that processes guest inquiries directly without third-party OTA commission fees.</p>
            </div>
            <div class="c8cs-deliverable-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/duch_asset_02_experience.webp" alt="The Duch Apartments Availability Engine Macro Detail">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Sovereignty Architecture (3:4 Split) -->
  <section class="c8cs-sovereignty-section">
    <div class="c8cs-wrap">
      <div class="c8cs-sovereignty-box">
        <div class="c8cs-sovereignty-split">
          <!-- Left: Architecture Narrative -->
          <div class="c8cs-sovereignty-left">
            <div class="c8cs-deliverable-meta">Ecosystem Velocity // Asset 03</div>
            <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 1.25rem;">Direct Booking Sovereignty &amp; Revenue Retention</h2>
            <p style="font-size: 15px; color: var(--c8-sub); line-height: 1.7; margin-bottom: 1.5rem; font-weight: 300;">Relying exclusively on third-party OTA intermediaries drained margins by up to 20% per booking while cutting the client off from direct guest communication. We engineered an independent acquisition and reservation architecture that keeps guest data and full transaction value in-house.</p>
            <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 0.5rem;">
              <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                <span style="color: var(--c8-blue); font-weight: 700; font-family: var(--font-mono); font-size: 13px;">01</span>
                <span style="font-size: 14px; color: var(--c8-ink); line-height: 1.5;"><strong>Zero OTA Commission Drain:</strong> Eliminates third-party broker fees on direct room reservations.</span>
              </div>
              <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                <span style="color: var(--c8-blue); font-weight: 700; font-family: var(--font-mono); font-size: 13px;">02</span>
                <span style="font-size: 14px; color: var(--c8-ink); line-height: 1.5;"><strong>100% Owned Guest Database:</strong> Direct retention of guest contact info for repeat rebooking campaigns.</span>
              </div>
              <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                <span style="color: var(--c8-blue); font-weight: 700; font-family: var(--font-mono); font-size: 13px;">03</span>
                <span style="font-size: 14px; color: var(--c8-ink); line-height: 1.5;"><strong>Direct Checkout Verification:</strong> Real-time WhatsApp reservation confirmation pipeline for instant guest onboarding.</span>
              </div>
            </div>
          </div>

          <!-- Right: Native 3:4 Vertical Image Card -->
          <div class="c8cs-sovereignty-right">
            <div class="c8cs-sovereignty-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/duch_asset_03_ecosystem.webp" alt="The Duch Apartments Direct Booking Sovereignty Blueprint">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Project Visual Gallery -->
  <section class="c8cs-stream-section">
    <div class="c8cs-wrap">
      <div class="c8cs-stream-box">
        <div class="c8cs-stream-header">
          <div class="c8cs-label">Visual Gallery</div>
          <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 0;">Platform Showcase &amp; Production Gallery</h2>
        </div>

        <div class="c8cs-stream-grid">
          <!-- Gallery 1 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_01_laptop.webp" alt="Live Room Catalog on MacBook Pro">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Live Interface</span>
              <h3 class="c8cs-stream-cell-title">Responsive Room Catalog</h3>
            </div>
          </div>

          <!-- Gallery 2 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_02_macro.webp" alt="Suite Feature &amp; Pricing Micro-Detail">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Interaction Detail</span>
              <h3 class="c8cs-stream-cell-title">Amenity &amp; Rate Tokens</h3>
            </div>
          </div>

          <!-- Gallery 3 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_05_calendar.webp" alt="Availability Calendar Engine Detail">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Booking Flow</span>
              <h3 class="c8cs-stream-cell-title">Availability Matrix Detail</h3>
            </div>
          </div>

          <!-- Gallery 4 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_04_living.webp" alt="Hospitality Living Context">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Spatial Context</span>
              <h3 class="c8cs-stream-cell-title">Hospitality Living Environment</h3>
            </div>
          </div>

          <!-- Gallery 5 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_03_workspace.webp" alt="Studio Workspace &amp; Catalog Ideation">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Studio Ideation</span>
              <h3 class="c8cs-stream-cell-title">Catalog Architecture Draft</h3>
            </div>
          </div>

          <!-- Gallery 6 -->
          <div class="c8cs-stream-cell">
            <div class="c8cs-stream-img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/cs_duch_gallery_06_platform.webp" alt="Full Oblique Platform View">
            </div>
            <div class="c8cs-stream-cell-info">
              <span class="c8cs-stream-cell-tag">Platform Overview</span>
              <h3 class="c8cs-stream-cell-title">Complete Staged Platform Grid</h3>
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
            <div class="c8cs-metric-val">1</div>
            <div class="c8cs-metric-lbl">Unified Brand System</div>
            <p class="c8cs-metric-desc">We created a cohesive visual identity (logo, color system, typography) that the client uses across all social media and offline campaigns.</p>
          </div>
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-val">100%</div>
            <div class="c8cs-metric-lbl">Direct booking base</div>
            <p class="c8cs-metric-desc">Designed and deployed a custom room-listing catalog and reservation checkout flow entirely hosted on their own website.</p>
          </div>

          <div class="c8cs-metric-card">
            <div class="c8cs-metric-lbl" style="margin-bottom: 1.5rem;">Live Verification</div>
            <a href="https://theduchapartments.com/" target="_blank" rel="noopener" class="c8cs-status-badge">
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
          <a href="<?php echo esc_url(home_url('/portfolio/kiri-city-stays/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">01 / Web Design &amp; Booking</div>
              <h3 class="c8cs-related-cell-title">Kiri City Stays</h3>
              <p class="c8cs-related-cell-desc">Direct booking platform &amp; luxury stay catalog engineered for seamless reservations and local SEO visibility.</p>
            </div>
            <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
          </a>
          <a href="<?php echo esc_url(home_url('/portfolio/bridgepoint-compliance/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">02 / Custom Dev</div>
              <h3 class="c8cs-related-cell-title">Bridgepoint Advisory</h3>
              <p class="c8cs-related-cell-desc">Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.</p>
            </div>
            <span class="c8cs-related-cell-link">Explore Case Study &rarr;</span>
          </a>
          <a href="<?php echo esc_url(home_url('/portfolio/mkenny-properties/')); ?>" class="c8cs-related-cell">
            <div>
              <div class="c8cs-related-cell-tag">03 / WordPress Custom</div>
              <h3 class="c8cs-related-cell-title">Mkenny Properties</h3>
              <p class="c8cs-related-cell-desc">Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.</p>
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
