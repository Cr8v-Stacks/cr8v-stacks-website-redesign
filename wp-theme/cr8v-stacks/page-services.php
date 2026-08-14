<?php
/**
 * CR8V Stacks — page-services.php
 * Template Name: Services Overview
 */
defined('ABSPATH') || exit;

get_header();
?>

<main id="cr8v-main">
<div class="c8srv-root">
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&display=swap');

/* 
   CR8V STACKS — SERVICES PAGE v2.0
   White bg, cream (#F4F1EA) cards, navy breakouts,
   dashed tear-line dividers throughout.
*/
.c8srv-root, .c8srv-root * { box-sizing: border-box !important; }
.c8srv-root { overflow: visible !important; background: #FFFFFF !important; color: #080808 !important; font-family: 'DM Sans', sans-serif !important; line-height: 1.65 !important; position: relative !important; }
.c8srv-root .c8srv-wrap { padding: 5rem 3.5rem !important; max-width: 1440px !important; margin: 0 auto !important; position: relative !important; z-index: 2 !important; }
@media (max-width: 1100px) { .c8srv-root .c8srv-wrap { padding: 3rem 1.25rem 0px !important; margin-top: 50px !important; } }
.c8srv-root h1, .c8srv-root h2, .c8srv-root h3, .c8srv-root h4 { margin-top: 0 !important; margin-left: 0 !important; margin-right: 0 !important; line-height: 1.1 !important; }
.c8srv-root p { margin: 0 0 1rem 0 !important; }
.c8srv-root p:last-child { margin-bottom: 0 !important; }
.c8srv-root button { font-family: inherit !important; cursor: pointer !important; border: none !important; background: none !important; }
.c8srv-root a { text-decoration: none !important; }

.c8srv-root .c8srv-label { font-family: 'Space Mono', monospace !important; font-size: 10px !important; letter-spacing: .25em !important; text-transform: uppercase !important; color: #0047E1 !important; display: flex !important; align-items: center !important; gap: 10px !important; margin-bottom: 1.75rem !important; }
.c8srv-root .c8srv-label::before { content: '—' !important; color: #0047E1 !important; font-weight: 700 !important; }
.c8srv-root .c8srv-label.is-light { color: #7C93FF !important; }
.c8srv-root .c8srv-label.is-light::before { color: #7C93FF !important; }
.c8srv-root .c8srv-stroke-text { color: transparent !important; -webkit-text-stroke: 1.5px #080808 !important; }

/* ── UNIFIED GLOBAL PRIMARY BUTTON SYSTEM (SHIMMER + MATRIX SCRAMBLE) ── */
.c8srv-root .c8-btn-primary,
.c8srv-root .c8srv-price-btn {
  background: #0047E1 !important;
  color: #FFFFFF !important;
  font-family: 'Space Mono', monospace !important;
  font-size: 0.82rem !important;
  font-weight: 700 !important;
  padding: 0.9rem 2.2rem !important;
  border-radius: 4px !important;
  border: 1px solid transparent !important;
  position: relative !important;
  overflow: hidden !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 0.5rem !important;
  text-decoration: none !important;
  text-transform: uppercase !important;
  cursor: pointer !important;
  transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease !important;
}
.c8srv-root .c8-btn-primary.is-dark { background: #080808 !important; color: #FFFFFF !important; }
.c8srv-root .c8-btn-primary.is-light { background: #FFFFFF !important; color: #080808 !important; border: 1px solid rgba(8,8,8,0.14) !important; }
.c8srv-root .c8-btn-primary.is-dark:hover { background: #0047E1 !important; color: #FFFFFF !important; }
.c8srv-root .c8-btn-primary.is-light:hover { background: #F4F4F4 !important; color: #0047E1 !important; }

.c8srv-root .c8-btn-primary::before,
.c8srv-root .c8srv-price-btn::before {
  content: '' !important;
  position: absolute !important;
  top: -50% !important; left: -100% !important;
  width: 100% !important; height: 200% !important;
  background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), rgba(0, 194, 255, 0.4), transparent) !important;
  transform: rotate(25deg) !important;
  transition: left 0.75s ease !important;
  pointer-events: none !important;
}
.c8srv-root .c8-btn-primary:hover::before,
.c8srv-root .c8srv-price-btn:hover::before { left: 150% !important; }
.c8srv-root .c8-btn-primary:hover,
.c8srv-root .c8srv-price-btn:hover { transform: translateY(-2px) !important; }

.c8srv-root .c8srv-hero-ctas {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 1rem !important;
  margin-top: 2rem !important;
  margin-bottom: 1.5rem !important;
  align-items: center !important;
}

.c8srv-root .c8srv-btn-ghost {
  background: transparent !important;
  color: #080808 !important;
  font-family: 'Space Mono', monospace !important;
  font-size: 11px !important;
  letter-spacing: .08em !important;
  text-transform: uppercase !important;
  padding: 16px 28px !important;
  display: inline-flex !important;
  align-items: center !important;
  gap: 8px !important;
  border: 1px solid rgba(8,8,8,0.2) !important;
  border-radius: 4px !important;
  transition: border-color 0.2s ease, color 0.2s ease !important;
  text-decoration: none !important;
}

.c8srv-root .c8srv-btn-ghost:hover {
  border-color: #0047E1 !important;
  color: #0047E1 !important;
}

/* ── BORDER RADIUS OVERRIDE TO 4PX GLOBALLY ── */
.c8srv-root .c8srv-showcase-card,
.c8srv-root .c8srv-showcase-card-img,
.c8srv-root .c8srv-folder-card,
.c8srv-root .c8srv-folder-card-img,
.c8srv-root .c8srv-flank-card,
.c8srv-root .c8srv-price-box,
.c8srv-root .c8srv-estimator,
.c8srv-root .c8srv-est-result,
.c8srv-root .c8srv-badge,
.c8srv-root .c8srv-pill,
.c8srv-root .c8srv-est-choice {
  border-radius: 4px !important;
}

.c8srv-root .c8srv-serif-text { font-family: 'Georgia', serif !important; font-style: italic !important; text-transform: none !important; font-weight: 400 !important; }
.c8srv-root .c8srv-gradient-text {
  background: linear-gradient(135deg, #0047E1 0%, #00C6FF 100%) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  display: inline-block !important;
}

/* Unified divider */
.c8srv-root .c8srv-tearline { display: flex !important; align-items: center !important; margin: 0 0 5rem 0 !important; position: relative !important; z-index: 2 !important; }
.c8srv-root .c8srv-tearline-dot { width: 9px !important; height: 9px !important; border-radius: 50% !important; background: #080808 !important; flex-shrink: 0 !important; }
.c8srv-root .c8srv-tearline-line { flex: 1 !important; border-top: 1px dashed rgba(8,8,8,0.28) !important; margin: 0 10px !important; }

.c8srv-root .c8srv-reveal { opacity: 0 !important; transform: translateY(24px) !important; transition: opacity 0.7s cubic-bezier(.16,.8,.24,1), transform 0.7s cubic-bezier(.16,.8,.24,1) !important; }
.c8srv-root .c8srv-reveal.is-visible { opacity: 1 !important; transform: translateY(0) !important; }
.c8srv-root .c8srv-reveal-d1 { transition-delay: 0.08s !important; }
.c8srv-root .c8srv-reveal-d2 { transition-delay: 0.16s !important; }
.c8srv-root .c8srv-reveal-d3 { transition-delay: 0.24s !important; }
@media (prefers-reduced-motion: reduce) { .c8srv-root .c8srv-reveal { opacity: 1 !important; transform: none !important; transition: none !important; } }

.c8srv-root .c8srv-explore { font-family: 'Space Mono', monospace !important; font-size: 11px !important; letter-spacing: .08em !important; text-transform: uppercase !important; color: #0047E1 !important; display: inline-flex !important; align-items: center !important; gap: 6px !important; transition: gap 0.2s ease !important; }
.c8srv-root .c8srv-explore:hover { gap: 10px !important; }

.c8srv-root .c8srv-icon-sq { width: 40px !important; height: 40px !important; background: #0047E1 !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important; }
.c8srv-root .c8srv-icon-sq svg { width: 20px !important; height: 20px !important; stroke: #FFFFFF !important; }

/* ── Hero ── */
.c8srv-root .c8srv-hero { position: relative !important; z-index: 2 !important; padding-top: 2rem !important; }
.c8srv-root .c8srv-hero-atmos {
  position: absolute !important; top: 0 !important; left: 0 !important; width: 100% !important; height: 420px !important;
  z-index: 0 !important; pointer-events: none !important; overflow: hidden !important;
}
@media (max-width: 700px) { .c8srv-root .c8srv-hero-atmos { height: 300px !important; } }
.c8srv-root .c8srv-hero-atmos[data-c8srv-atmos] { pointer-events: auto !important; }
.c8srv-root .c8srv-atmos-svg { position: absolute !important; top: -10% !important; left: 0 !important; width: 100% !important; height: 130% !important; }
.c8srv-root .c8srv-atmos-blob { filter: blur(1px) !important; opacity: 0.4 !important; mix-blend-mode: normal !important; }
.c8srv-root .c8srv-atmos-glow {
  position: absolute !important; top: 0 !important; left: 0 !important; width: 340px !important; height: 340px !important; border-radius: 50% !important;
  background: radial-gradient(circle, rgba(0,71,225,0.4) 0%, rgba(0,71,225,0) 70%) !important;
  transform: translate(-50%, -50%) !important; opacity: 0 !important; transition: opacity 0.4s ease !important; will-change: transform !important;
}
.c8srv-root .c8srv-hero-atmos.is-active .c8srv-atmos-glow { opacity: 1 !important; }
@media (prefers-reduced-motion: reduce) { .c8srv-root .c8srv-atmos-svg animate { display: none !important; } .c8srv-root .c8srv-atmos-glow { display: none !important; } }
.c8srv-root .c8srv-hero-content { position: relative !important; z-index: 2 !important; max-width: 760px !important; }
.c8srv-root .c8srv-headline { font-family: 'Michroma', sans-serif !important; font-size: clamp(1.8rem, 4vw, 2.5rem) !important; letter-spacing: 0.02em !important; line-height: 1.2 !important; font-weight: 700 !important; color: #080808 !important; text-transform: uppercase !important; margin-bottom: 1.5rem !important; }
.c8srv-root .c8srv-hero-intro { font-size: 15px !important; font-weight: 300 !important; color: #6B6B6B !important; max-width: 480px !important; margin-top: 1.5rem !important; line-height: 1.6 !important; font-family: 'DM Sans', sans-serif !important; }
.c8srv-root .c8srv-pill-row { display: flex !important; flex-wrap: wrap !important; gap: 0.6rem !important; margin-top: 2.25rem !important; }
.c8srv-root .c8srv-pill { border: 1px solid rgba(8,8,8,0.15) !important; background: #FFFFFF !important; padding: 8px 15px !important; font-size: 12px !important; font-weight: 500 !important; border-radius: 4px !important; font-family: 'Space Mono', monospace !important; letter-spacing: 0.05em !important; }

.c8srv-root .c8srv-section-title { font-family: 'Michroma', sans-serif !important; font-size: clamp(1.4rem, 2.5vw, 2.0rem) !important; font-weight: 700 !important; letter-spacing: 0.02em !important; color: #080808 !important; margin-bottom: 1.25rem !important; text-transform: uppercase !important; }
.c8srv-root .c8srv-lead { font-size: 17px !important; font-weight: 300 !important; color: #6B6B6B !important; max-width: 720px !important; margin-bottom: 0 !important; line-height: 1.6 !important; font-family: 'DM Sans', sans-serif !important; }

/* ── Showcase (Sticky Scroll-to-Tab Navigation) ── */
.c8srv-root .c8srv-showcase {
  display: flex !important;
  gap: 5rem !important;
  align-items: flex-start !important;
  position: relative !important;
  padding: 4rem 0 !important;
  margin-bottom: 0 !important;
}
@media (max-width: 1024px) {
  .c8srv-root .c8srv-showcase {
    flex-direction: column !important;
    gap: 3rem !important;
  }
}
.c8srv-root .c8srv-showcase-sticky-left {
  position: sticky !important;
  top: 100px !important;
  width: 35% !important;
  flex-shrink: 0 !important;
  z-index: 10 !important;
}
@media (max-width: 1024px) {
  .c8srv-root .c8srv-showcase-sticky-left {
    position: relative !important;
    top: 0 !important;
    width: 100% !important;
  }
}
.c8srv-root .c8srv-showcase-nav-list {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.75rem !important;
  margin-top: 3rem !important;
}
@media (max-width: 1024px) {
  .c8srv-root .c8srv-showcase-nav-list {
    flex-direction: row !important;
    flex-wrap: wrap !important;
    gap: 0.5rem !important;
    margin-top: 1.5rem !important;
  }
}
.c8srv-root .c8srv-showcase-nav-item {
  font-family: 'Space Mono', monospace !important;
  font-size: 11px !important;
  letter-spacing: .08em !important;
  text-transform: uppercase !important;
  padding: 12px 18px !important;
  background: #FFFFFF !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  color: #6B6B6B !important;
  text-align: left !important;
  cursor: pointer !important;
  transition: all 0.3s ease !important;
  display: flex !important;
  align-items: center !important;
  gap: 12px !important;
}
.c8srv-root .c8srv-showcase-nav-item .c8srv-nav-num {
  font-size: 9px !important;
  opacity: 0.5 !important;
}
.c8srv-root .c8srv-showcase-nav-item.is-active {
  background: #0047E1 !important;
  color: #FAFAF7 !important;
  border-color: #0047E1 !important;
  padding-left: 24px !important;
}
@media (max-width: 1024px) {
  .c8srv-root .c8srv-showcase-nav-item.is-active {
    padding-left: 18px !important;
  }
}

.c8srv-root .c8srv-showcase-scroll-right {
  width: 65% !important;
  display: flex !important;
  flex-direction: column !important;
  gap: 5rem !important;
  position: relative !important;
}
@media (max-width: 1024px) {
  .c8srv-root .c8srv-showcase-scroll-right {
    width: 100% !important;
    gap: 3rem !important;
  }
}
.c8srv-root .c8srv-showcase-card {
  border: 1px solid rgba(255,255,255,0.08) !important;
  border-radius: 4px !important;
  padding: 2.5rem !important;
  display: grid !important;
  grid-template-columns: 1.15fr 1fr !important;
  gap: 2.5rem !important;
  align-items: center !important;
  box-shadow: 0 10px 40px rgba(8, 8, 8, 0.015) !important;
  position: sticky !important;
  z-index: 2 !important;
  transition: transform 0.4s ease, opacity 0.4s ease !important;
}
.c8srv-root .c8srv-showcase-card:nth-child(1) { top: 100px !important; background: linear-gradient(135deg, #1C2436 0%, #0B111E 100%) !important; }
.c8srv-root .c8srv-showcase-card:nth-child(2) { top: 125px !important; background: linear-gradient(135deg, #1A2E66 0%, #0E1A3D 100%) !important; }
.c8srv-root .c8srv-showcase-card:nth-child(3) { top: 150px !important; background: linear-gradient(135deg, #153C9E 0%, #0B225C 100%) !important; }
.c8srv-root .c8srv-showcase-card:nth-child(4) { top: 175px !important; background: linear-gradient(135deg, #072899 0%, #031352 100%) !important; }
.c8srv-root .c8srv-showcase-card:nth-child(5) { top: 200px !important; background: linear-gradient(135deg, #0047E1 0%, #001B5C 100%) !important; }
.c8srv-root .c8srv-showcase-card:nth-child(6) { top: 225px !important; background: linear-gradient(135deg, #0f38b0 0%, #071c59 100%) !important; }

/* Universal light text styling inside all dark showcase cards */
.c8srv-root .c8srv-showcase-card .c8srv-showcase-card-title { color: #FAFAF7 !important; }
.c8srv-root .c8srv-showcase-card .c8srv-showcase-card-desc { color: rgba(250, 250, 247, 0.8) !important; }
.c8srv-root .c8srv-showcase-card .c8srv-cap-item { color: #FAFAF7 !important; }
.c8srv-root .c8srv-showcase-card .c8srv-cap-dot { background: #FAFAF7 !important; }
.c8srv-root .c8srv-showcase-card .c8srv-explore { color: #FAFAF7 !important; }
.c8srv-root .c8srv-showcase-card .c8srv-showcase-card-img { box-shadow: 8px 8px 0px rgba(255,255,255,0.06) !important; border-color: rgba(255,255,255,0.1) !important; }

@media (max-width: 768px) {
  .c8srv-root .c8srv-showcase-card {
    grid-template-columns: 1fr !important;
    padding: 1.5rem !important;
    gap: 1.5rem !important;
    position: sticky !important;
    top: 80px !important;
    margin-bottom: 60px !important;
  }
}
.c8srv-root .c8srv-showcase-card-img {
  border: 1px solid rgba(8,8,8,0.08) !important;
  background: #FFFFFF !important;
  padding: 8px !important;
  box-shadow: 8px 8px 0px rgba(0,71,225,0.04) !important;
  border-radius: 4px !important;
  width: 100% !important;
  aspect-ratio: 16/11 !important;
  overflow: hidden !important;
}
.c8srv-root .c8srv-showcase-card-img img {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  display: block !important;
  border-radius: 4px !important;
}
.c8srv-root .c8srv-showcase-card-html, html, body {
  overflow-x: clip !important;
  width: 100% !important;
}
body {
  overflow-x: clip !important;
  width: 100% !important;
}
html, body {
  overflow-x: clip !important;
  width: 100% !important;
}
body {
  display: flex !important;
  flex-direction: column !important;
}
.c8srv-root .c8srv-showcase-card-title {
  font-family: 'Michroma', sans-serif !important;
  font-size: clamp(1.1rem, 2vw, 1.4rem) !important;
  font-weight: 700 !important;
  letter-spacing: 0.02em !important;
  color: #080808 !important;
  margin-bottom: 0.75rem !important;
  text-transform: uppercase !important;
}
.c8srv-root .c8srv-showcase-card-desc {
  font-size: 14px !important;
  color: #6B6B6B !important;
  margin-bottom: 1.5rem !important;
  line-height: 1.6 !important;
  font-family: 'DM Sans', sans-serif !important;
}
.c8srv-root .c8srv-cap-list { display: flex !important; flex-direction: column !important; gap: 0.75rem !important; margin-bottom: 1.5rem !important; }
.c8srv-root .c8srv-cap-item { display: flex !important; gap: 10px !important; align-items: center !important; font-size: 13px !important; color: #080808 !important; font-weight: 500 !important; }
.c8srv-root .c8srv-cap-dot { width: 6px !important; height: 6px !important; background: #0047E1 !important; flex-shrink: 0 !important; }

/* New Services: cursor-following preview list */
.c8srv-root .c8srv-hoverlist-section { position: relative !important; z-index: 2 !important; margin-bottom: 0 !important; }
.c8srv-root .c8srv-hoverlist { border-top: 1px solid rgba(8,8,8,0.1) !important; }
.c8srv-root .c8srv-hoverlist-item { display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 2rem !important; padding: 2.1rem 0.5rem !important; border-bottom: 1px solid rgba(8,8,8,0.1) !important; cursor: pointer !important; position: relative !important; transition: padding-left 0.3s ease !important; }
.c8srv-root .c8srv-hoverlist-item:hover { padding-left: 1.25rem !important; }
.c8srv-root .c8srv-hoverlist-left { display: flex !important; align-items: baseline !important; gap: 1.5rem !important; flex: 1 !important; min-width: 0 !important; }
.c8srv-root .c8srv-hoverlist-num { font-family: 'Space Mono', monospace !important; font-size: 12px !important; color: #0047E1 !important; flex-shrink: 0 !important; }
.c8srv-root .c8srv-hoverlist-title { font-family: 'Bebas Neue', sans-serif !important; font-size: clamp(1.8rem, 4vw, 3.2rem) !important; text-transform: uppercase !important; letter-spacing: 0.01em !important; transition: color 0.25s ease !important; }
.c8srv-root .c8srv-hoverlist-item:hover .c8srv-hoverlist-title { color: #0047E1 !important; }
.c8srv-root .c8srv-hoverlist-tagline { font-size: 13px !important; color: #8A8A8A !important; font-weight: 300 !important; display: none !important; }
@media (min-width: 951px) { .c8srv-root .c8srv-hoverlist-tagline { display: block !important; margin-left: 1rem !important; } }
.c8srv-root .c8srv-hoverlist-thumb-mobile { display: none !important; }
@media (max-width: 950px) { .c8srv-root .c8srv-hoverlist-thumb-mobile { display: block !important; width: 56px !important; height: 56px !important; object-fit: cover !important; flex-shrink: 0 !important; border: 1px solid rgba(8,8,8,0.1) !important; } }
.c8srv-root .c8srv-hoverlist-right { display: flex !important; align-items: center !important; gap: 1.5rem !important; flex-shrink: 0 !important; }

@media (prefers-reduced-motion: reduce) { .c8srv-root .c8srv-hoverlist-preview { display: none !important; } }

/* Slanted Card Stack (Growth Layer) */
.c8srv-root .c8srv-folder-section {
  padding: 3rem 0rem !important;
  position: relative !important;
  z-index: 2 !important;
}
.c8srv-root .c8srv-folder-deck {
  position: relative !important;
  display: block !important;
  margin-top: 5rem !important;
  padding-bottom: 120px !important; /* Extra scrollable space for 3rd card to stack fully on desktop */
  margin-bottom: 6rem !important; /* Spacing below the folder deck */
}
.c8srv-root .c8srv-folder-card {
  background: #FAFAF9 !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  border-radius: 4px !important;
  padding: 3rem 3.5rem !important;
  display: grid !important;
  grid-template-columns: 1fr 1.2fr !important;
  gap: 4rem !important;
  align-items: center !important;
  box-shadow: 0 10px 10px rgba(8, 8, 8, 0.01), 0 20px 40px rgba(8, 8, 8, 0) !important;
  position: sticky !important;
  transform-origin: center center !important;
  transition: transform 0.1s ease, box-shadow 0.3s ease !important;
  margin-bottom: 0px !important; /* Set margin-bottom to 0 so sticky cards overlap correctly */
}
.c8srv-root .c8srv-folder-card:nth-child(1) { top: 130px !important; z-index: 10 !important; position: sticky !important; }
.c8srv-root .c8srv-folder-card:nth-child(2) { top: 130px !important; z-index: 20 !important; position: sticky !important; }
.c8srv-root .c8srv-folder-card:nth-child(3) { top: 130px !important; z-index: 30 !important; position: sticky !important; }
.c8srv-root .c8srv-folder-card:nth-child(4) { top: 130px !important; z-index: 40 !important; position: sticky !important; }
.c8srv-root .c8srv-folder-card:nth-child(5) { top: 130px !important; z-index: 50 !important; position: sticky !important; }

@media (max-width: 900px) {
  .c8srv-root .c8srv-folder-deck {
    margin-top: 3rem !important;
    padding-bottom: 100px !important;
    margin-bottom: 0px !important;
  }
  .c8srv-root .c8srv-folder-card {
    grid-template-columns: 1fr !important;
    padding: 2rem 1.5rem !important;
    gap: 1.75rem !important;
    position: sticky !important;
    min-height: 480px !important;
  }
  .c8srv-root .c8srv-folder-card:nth-child(1),
  .c8srv-root .c8srv-folder-card:nth-child(2),
  .c8srv-root .c8srv-folder-card:nth-child(3),
  .c8srv-root .c8srv-folder-card:nth-child(4),
  .c8srv-root .c8srv-folder-card:nth-child(5) {
    top: 100px !important;
    position: sticky !important;
  }
}

.c8srv-root .c8srv-folder-card-left {
  display: flex !important;
  flex-direction: column !important;
}
.c8srv-root .c8srv-folder-card-num {
  font-family: 'Space Mono', monospace !important;
  font-size: 12px !important;
  color: #0047E1 !important;
  margin-bottom: 1rem !important;
}
.c8srv-root .c8srv-folder-card-title {
  font-family: 'Michroma', sans-serif !important;
  font-size: clamp(1.4rem, 2.5vw, 1.8rem) !important;
  font-weight: 700 !important;
  letter-spacing: 0.02em !important;
  color: #080808 !important;
  margin-bottom: 1rem !important;
  text-transform: uppercase !important;
}
.c8srv-root .c8srv-folder-card-desc {
  font-size: 15px !important;
  color: #6B6B6B !important;
  line-height: 1.65 !important;
  margin-bottom: 2rem !important;
  font-family: 'DM Sans', sans-serif !important;
}
.c8srv-root .c8srv-folder-card-right {
  display: flex !important;
  justify-content: flex-end !important;
}
@media (max-width: 900px) {
  .c8srv-root .c8srv-folder-card-right {
    justify-content: flex-start !important;
  }
}
.c8srv-root .c8srv-folder-card-img img {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  border-radius: 6px !important;
  display: block !important;
}
.c8srv-root .c8srv-folder-card-tag {
  font-family: 'Space Mono', monospace !important;
  font-size: 10px !important;
  color: #E24F30 !important;
  letter-spacing: 0.1em !important;
  text-transform: uppercase !important;
  margin-bottom: 0.5rem !important;
}

/* Flanking Cards (Why It Works) */
.c8srv-root .c8srv-flank-section {
  width: 100% !important;
  max-width: 100% !important;
  margin-left: 0 !important;
  transform: none !important;
  left: 0 !important;
  right: 0 !important;
  background: #F4F6FB !important;
  padding: 6rem 0 !important;
  overflow: hidden !important;
  position: relative !important;
  z-index: 2 !important;
}
.c8srv-root .c8srv-flank-inner {
  max-width: 1200px !important;
  margin: 0 auto !important;
  padding: 0 2rem !important;
  text-align: center !important;
}
.c8srv-root .c8srv-flank-container {
  position: relative !important;
  height: 480px !important;
  margin-top: 4rem !important;
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
}
@media (max-width: 768px) {
  .c8srv-root .c8srv-flank-container {
    height: auto !important;
    flex-direction: column !important;
    gap: 2rem !important;
  }
}
.c8srv-root .c8srv-flank-card {
  width: 320px !important;
  height: 380px !important;
  background: #FFFFFF !important;
  border: 1px solid rgba(8,8,8,0.08) !important;
  border-radius: 4px !important;
  padding: 2.5rem 2rem !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: flex-start !important;
  justify-content: flex-start !important;
  text-align: left !important;
  position: absolute !important;
  transition: transform 0.6s cubic-bezier(.16, 1, .3, 1), opacity 0.6s ease !important;
  box-shadow: 0 10px 30px rgba(8, 8, 8, 0.03) !important;
}
@media (max-width: 768px) {
  .c8srv-root .c8srv-flank-card {
    position: relative !important;
    width: 100% !important;
    height: auto !important;
    box-shadow: none !important;
    pointer-events: auto !important;
  }
}
.c8srv-root .c8srv-flank-card.is-center {
  z-index: 5 !important;
  border-color: rgba(0, 71, 225, 0.15) !important;
  box-shadow: 0 15px 40px rgba(0, 71, 225, 0.06) !important;
}
.c8srv-root .c8srv-flank-card.is-left {
  z-index: 3 !important;
  transform: translate3d(0, 15px, 0) scale(0.9) rotate(0deg);
  opacity: 0;
  pointer-events: none;
}
.c8srv-root .c8srv-flank-card.is-right {
  z-index: 3 !important;
  transform: translate3d(0, 15px, 0) scale(0.9) rotate(0deg);
  opacity: 0;
  pointer-events: none;
}
/* Mobile flank cards are animated by JS (handleScrollAnimations) — no CSS override needed here */
.c8srv-root .c8srv-flank-card-quote {
  font-family: 'Georgia', serif !important;
  font-size: 3rem !important;
  line-height: 1 !important;
  color: #0047E1 !important;
  margin-bottom: 0.5rem !important;
}
.c8srv-root .c8srv-flank-card-step {
  font-family: 'Space Mono', monospace !important;
  font-size: 10px !important;
  letter-spacing: 0.1em !important;
  color: #080808 !important;
  text-transform: uppercase !important;
  margin-bottom: 0.5rem !important;
}
.c8srv-root .c8srv-flank-card-divider {
  width: 100% !important;
  height: 1px !important;
  background: rgba(8,8,8,0.12) !important;
  margin-bottom: 1.5rem !important;
}
.c8srv-root .c8srv-flank-card-title {
  font-family: 'Michroma', sans-serif !important;
  font-size: 1.25rem !important;
  font-weight: 700 !important;
  color: #080808 !important;
  margin-bottom: 0.75rem !important;
  text-transform: uppercase !important;
  letter-spacing: 0.01em !important;
}
.c8srv-root .c8srv-flank-card-desc {
  font-size: 13.5px !important;
  color: #6B6B6B !important;
  line-height: 1.6 !important;
  font-family: 'DM Sans', sans-serif !important;
  margin-bottom: 1.5rem !important;
}
.c8srv-root .c8srv-flank-card-icon {
  width: 46px !important;
  height: 46px !important;
  border-radius: 4px !important;
  background: rgba(0, 71, 225, 0.06) !important;
  color: #0047E1 !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  margin-top: auto !important;
  padding: 10px !important;
}
.c8srv-root .c8srv-flank-card-icon svg {
  width: 100% !important;
  height: 100% !important;
  stroke: #0047E1 !important;
  fill: none !important;
}

/* How To Work With Us & Estimate Widget */
.c8srv-root .c8srv-pricing-section {
  padding: 6rem 0 !important;
  position: relative !important;
  z-index: 2 !important;
}
.c8srv-root .c8srv-pricing-split {
  display: grid !important;
  grid-template-columns: 1fr 1fr !important;
  gap: 3.5rem !important;
  margin-top: 4rem !important;
  margin-bottom: 5rem !important;
}
@media (max-width: 900px) {
  .c8srv-root .c8srv-pricing-split {
    grid-template-columns: 1fr !important;
    gap: 2.5rem !important;
  }
}
.c8srv-root .c8srv-price-box {
  background: #FAFAF9 !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  border-radius: 4px !important;
  padding: 3.5rem !important;
  display: flex !important;
  flex-direction: column !important;
  box-shadow: 0 10px 40px rgba(0,0,0,0.02) !important;
  position: relative !important;
}
@media (max-width: 600px) {
  .c8srv-root .c8srv-price-box {
    padding: 2rem !important;
  }
}
.c8srv-root .c8srv-price-box.is-highlight {
  background: #080808 !important;
  border-color: #080808 !important;
  color: #FAFAF7 !important;
}
.c8srv-root .c8srv-price-header {
  margin-bottom: 2rem !important;
}
.c8srv-root .c8srv-price-type {
  font-family: 'Space Mono', monospace !important;
  font-size: 11px !important;
  letter-spacing: 0.1em !important;
  text-transform: uppercase !important;
  color: #0047E1 !important;
  margin-bottom: 0.75rem !important;
}
.c8srv-root .c8srv-price-box.is-highlight .c8srv-price-type {
  color: #7C93FF !important;
}
.c8srv-root .c8srv-price-title {
  font-family: 'Michroma', sans-serif !important;
  font-size: clamp(1.2rem, 2.5vw, 1.8rem) !important;
  font-weight: 700 !important;
  letter-spacing: 0.02em !important;
  margin-bottom: 1rem !important;
  text-transform: uppercase !important;
}
.c8srv-root .c8srv-price-amount {
  font-family: 'DM Sans', sans-serif !important;
  margin-bottom: 1.5rem !important;
  display: flex !important;
  align-items: baseline !important;
  gap: 4px !important;
}
.c8srv-root .c8srv-price-amount .c8srv-price-num {
  font-family: 'DM Sans', sans-serif !important;
  font-size: clamp(2rem, 4vw, 2.8rem) !important;
  font-weight: 700 !important;
  letter-spacing: -0.02em !important;
  color: #0047E1 !important;
  line-height: 1 !important;
}
.c8srv-root .c8srv-price-box.is-highlight .c8srv-price-amount .c8srv-price-num {
  color: #FAFAF7 !important;
}
.c8srv-root .c8srv-price-amount .c8srv-price-period {
  font-size: 14px !important;
  font-weight: 400 !important;
  font-family: 'DM Sans', sans-serif !important;
  color: #6B6B6B !important;
}
.c8srv-root .c8srv-price-box.is-highlight .c8srv-price-amount .c8srv-price-period {
  color: rgba(250, 250, 247, 0.6) !important;
}
.c8srv-root .c8srv-price-desc {
  font-size: 14.5px !important;
  color: #6B6B6B !important;
  line-height: 1.6 !important;
  margin-bottom: 2rem !important;
}
.c8srv-root .c8srv-price-box.is-highlight .c8srv-price-desc {
  color: rgba(250, 250, 247, 0.7) !important;
}
.c8srv-root .c8srv-price-features {
  display: flex !important;
  flex-direction: column !important;
  gap: 1rem !important;
  margin-bottom: 3rem !important;
  margin-top: auto !important;
}
.c8srv-root .c8srv-price-feature {
  display: flex !important;
  align-items: center !important;
  gap: 12px !important;
  font-size: 14px !important;
  font-weight: 500 !important;
}
.c8srv-root .c8srv-price-feature .c8srv-icon-sq {
  width: 24px !important;
  height: 24px !important;
  border-radius: 4px !important;
}
.c8srv-root .c8srv-price-feature .c8srv-icon-sq svg {
  width: 14px !important;
  height: 14px !important;
}
.c8srv-root .c8srv-price-btn {
  font-family: 'Space Mono', monospace !important;
  font-size: 11px !important;
  letter-spacing: 0.1em !important;
  text-transform: uppercase !important;
  padding: 16px 24px !important;
  text-align: center !important;
  font-weight: 700 !important;
  border-radius: 4px !important;
  transition: all 0.3s ease !important;
  display: block !important;
  width: 100% !important;
}
.c8srv-root .c8srv-price-btn.is-primary {
  background: #0047E1 !important;
  color: #FFFFFF !important;
}
.c8srv-root .c8srv-price-btn.is-primary:hover {
  background: #0036ad !important;
}
.c8srv-root .c8srv-price-btn.is-light {
  background: #FFFFFF !important;
  color: #FAFAF7 !important;
  border: 1px solid rgba(255,255,255,0.2) !important;
}
.c8srv-root .c8srv-price-btn.is-light:hover {
  background: rgba(255,255,255,0.05) !important;
}

/* Estimator Widget styling */
.c8srv-root .c8srv-estimator {
  background: #FAFAF9 !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  border-radius: 4px !important;
  padding: 4rem !important;
  box-shadow: 0 10px 40px rgba(0,0,0,0.02) !important;
  margin-top: 4rem !important;
}
@media (max-width: 900px) {
  .c8srv-root .c8srv-estimator {
    padding: 2rem !important;
  }
}
.c8srv-root .c8srv-estimator-grid {
  display: grid !important;
  grid-template-columns: 1.2fr 1fr !important;
  gap: 4rem !important;
}
@media (max-width: 900px) {
  .c8srv-root .c8srv-estimator-grid {
    grid-template-columns: 1fr !important;
    gap: 3rem !important;
  }
}
.c8srv-root .c8srv-est-options {
  display: flex !important;
  flex-direction: column !important;
  gap: 2rem !important;
}
.c8srv-root .c8srv-est-group-title {
  font-family: 'Space Mono', monospace !important;
  font-size: 11px !important;
  letter-spacing: 0.1em !important;
  text-transform: uppercase !important;
  color: #6B6B6B !important;
  margin-bottom: 1rem !important;
  display: block !important;
}
.c8srv-root .c8srv-est-choices {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 0.75rem !important;
}
.c8srv-root .c8srv-est-choice {
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 500 !important;
  font-size: 13.5px !important;
  padding: 10px 18px !important;
  background: #FFFFFF !important;
  border: 1px solid rgba(8,8,8,0.12) !important;
  color: #080808 !important;
  border-radius: 4px !important;
  cursor: pointer !important;
  transition: all 0.25s ease !important;
}
.c8srv-root .c8srv-est-choice.is-active {
  background: #0047E1 !important;
  color: #FFFFFF !important;
  border-color: #0047E1 !important;
  box-shadow: 0 4px 12px rgba(0, 71, 225, 0.15) !important;
}

.c8srv-root .c8srv-est-result {
  background: #FFFFFF !important;
  border: 1px solid rgba(8,8,8,0.08) !important;
  border-radius: 4px !important;
  padding: 3rem !important;
  display: flex !important;
  flex-direction: column !important;
  justify-content: center !important;
  box-shadow: 0 8px 30px rgba(0,0,0,0.01) !important;
}
@media (max-width: 600px) {
  .c8srv-root .c8srv-est-result {
    padding: 2rem 1.5rem !important;
  }
}
.c8srv-root .c8srv-est-range-label {
  font-family: 'Space Mono', monospace !important;
  font-size: 10px !important;
  letter-spacing: 0.1em !important;
  text-transform: uppercase !important;
  color: #6B6B6B !important;
  margin-bottom: 0.5rem !important;
}
.c8srv-root .c8srv-est-range {
  font-family: 'DM Sans', sans-serif !important;
  font-size: 2.6rem !important;
  font-weight: 700 !important;
  color: #0047E1 !important;
  letter-spacing: -0.02em !important;
  margin-bottom: 1.5rem !important;
}
.c8srv-root .c8srv-est-deliverables-title {
  font-size: 12px !important;
  font-weight: 700 !important;
  color: #080808 !important;
  margin-bottom: 1rem !important;
  text-transform: uppercase !important;
  letter-spacing: 0.05em !important;
}
.c8srv-root .c8srv-est-deliverables {
  display: flex !important;
  flex-direction: column !important;
  gap: 0.75rem !important;
  margin-bottom: 2rem !important;
}
.c8srv-root .c8srv-est-item {
  display: flex !important;
  align-items: center !important;
  gap: 8px !important;
  font-size: 13px !important;
  color: #6B6B6B !important;
}
.c8srv-root .c8srv-est-dot {
  width: 5px !important;
  height: 5px !important;
  background: #0047E1 !important;
  border-radius: 50% !important;
}

/* WooCommerce vs Shopify comparison (unchanged) */
.c8srv-root .c8srv-vs { position: relative !important; z-index: 2 !important; margin-bottom: 1rem !important; }
.c8srv-root .c8srv-vs-priority-row { display: flex !important; flex-wrap: wrap !important; gap: 0.6rem !important; margin: 2rem 0 3rem 0 !important; }
.c8srv-root .c8srv-vs-priority-btn { font-family: 'Space Mono', monospace !important; font-size: 11px !important; letter-spacing: .06em !important; text-transform: uppercase !important; padding: 12px 18px !important; background: #FFFFFF !important; border: 1px solid rgba(8,8,8,0.15) !important; color: #080808 !important; }
.c8srv-root .c8srv-vs-priority-btn.is-active { background: #0047E1 !important; color: #FFFFFF !important; border-color: #0047E1 !important; }
.c8srv-root .c8srv-vs-table-wrap { overflow-x: auto !important; }
.c8srv-root .c8srv-vs-table { width: 100% !important; border-collapse: collapse !important; min-width: 640px !important; }
.c8srv-root .c8srv-vs-table th { text-align: left !important; font-family: 'Space Mono', monospace !important; font-size: 10.5px !important; letter-spacing: .08em !important; text-transform: uppercase !important; color: #6B6B6B !important; padding: 1rem 1.25rem !important; border-bottom: 1px solid rgba(8,8,8,0.12) !important; }
.c8srv-root .c8srv-vs-table th:first-child { color: #080808 !important; }
.c8srv-root .c8srv-vs-table td { padding: 1.25rem !important; border-bottom: 1px solid rgba(8,8,8,0.08) !important; font-size: 14px !important; font-weight: 300 !important; color: #6B6B6B !important; vertical-align: top !important; transition: background 0.25s ease !important; }
.c8srv-root .c8srv-vs-table td:first-child { font-weight: 500 !important; color: #080808 !important; }
.c8srv-root .c8srv-vs-table tr[data-c8srv-row].is-highlighted td { background: #F4F1EA !important; }
.c8srv-root .c8srv-vs-winner { font-family: 'Space Mono', monospace !important; font-size: 9.5px !important; letter-spacing: .08em !important; text-transform: uppercase !important; color: #0047E1 !important; display: block !important; margin-top: 4px !important; }
.c8srv-root .c8srv-vs-note { font-size: 12.5px !important; color: #8A8A8A !important; font-weight: 300 !important; margin-top: 1.5rem !important; }
.c8srv-root .c8srv-folder-tab {
  position: absolute !important;
  top: -38px !important;
  height: 38px !important;
  background: #FAFAF9 !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  border-bottom: none !important;
  border-radius: 4px 4px 0 0 !important;
  padding: 8px 20px !important;
  font-family: 'Space Mono', monospace !important;
  font-size: 10.5px !important;
  font-weight: 700 !important;
  color: #0047E1 !important;
  text-transform: uppercase !important;
  letter-spacing: 0.05em !important;
  display: flex !important;
  align-items: center !important;
}
.c8srv-root .c8srv-folder-card:nth-child(1) .c8srv-folder-tab { left: 2.5rem !important; }
.c8srv-root .c8srv-folder-card:nth-child(2) .c8srv-folder-tab { left: 14.9rem !important; }
.c8srv-root .c8srv-folder-card:nth-child(3) .c8srv-folder-tab { left: 26.9rem !important; }
.c8srv-root .c8srv-folder-card:nth-child(4) .c8srv-folder-tab { left: 38.4rem !important; }
.c8srv-root .c8srv-folder-card:nth-child(5) .c8srv-folder-tab { left: 49.4rem !important; }

@media (max-width: 900px) {
  .c8srv-root .c8srv-folder-tab {
    position: absolute !important;
    top: -30px !important;
    left: 1.5rem !important;
    height: 30px !important;
    padding: 0 15px !important;
    background: #FAFAF9 !important;
    border: 1px solid rgba(8,8,8,0.1) !important;
    border-bottom: none !important;
    border-radius: 4px 4px 0 0 !important;
    display: flex !important;
    align-items: center !important;
    margin-bottom: 0 !important;
    width: 220px !important;
    max-width: 80vw !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
  }
  .c8srv-root .c8srv-folder-card:nth-child(1) .c8srv-folder-tab,
  .c8srv-root .c8srv-folder-card:nth-child(2) .c8srv-folder-tab,
  .c8srv-root .c8srv-folder-card:nth-child(3) .c8srv-folder-tab,
  .c8srv-root .c8srv-folder-card:nth-child(4) .c8srv-folder-tab,
  .c8srv-root .c8srv-folder-card:nth-child(5) .c8srv-folder-tab { left: 1.5rem !important; }
}

.c8srv-root .c8srv-folder-card-left { display: flex !important; flex-direction: column !important; height: 100% !important; }
.c8srv-root .c8srv-folder-card-title {
  font-family: 'Michroma', sans-serif !important;
  font-size: clamp(1.2rem, 2vw, 1.6rem) !important;
  font-weight: 700 !important;
  letter-spacing: 0.02em !important;
  color: #080808 !important;
  margin-bottom: 1rem !important;
  text-transform: uppercase !important;
}
.c8srv-root .c8srv-folder-card-desc {
  font-size: 14.5px !important;
  color: #6B6B6B !important;
  line-height: 1.65 !important;
  font-family: 'DM Sans', sans-serif !important;
  margin-top: auto !important;
  margin-bottom: 1.5rem !important;
}
.c8srv-root .c8srv-folder-card-right { display: flex !important; justify-content: center !important; }
.c8srv-root .c8srv-folder-card-img {
  border: 1px solid rgba(8,8,8,0.08) !important;
  background: #FFFFFF !important;
  padding: 8px !important;
  box-shadow: 10px 10px 0px rgba(0,71,225,0.03) !important;
  border-radius: 4px !important;
  width: 100% !important;
  max-width: 440px !important;
  aspect-ratio: 4/3 !important;
  overflow: hidden !important;
}
.c8srv-root .c8srv-folder-card-img img {
  width: 100% !important;
  height: 100% !important;
  object-fit: cover !important;
  border-radius: 6px !important;
  display: block !important;
}

/* ?? Full Catalog Styles (CSS tool popover clouds) ?? */
.c8srv-root .c8srv-catalog-item {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  padding: 2.25rem 0.5rem !important;
  border-bottom: 1px solid rgba(8,8,8,0.1) !important;
  cursor: pointer !important;
  position: relative !important;
  transition: padding-left 0.3s ease !important;
}
.c8srv-root .c8srv-catalog-item:hover {
  padding-left: 1.25rem !important;
}
.c8srv-root .c8srv-catalog-title {
  font-family: 'Bebas Neue', sans-serif !important;
  font-size: clamp(1.8rem, 4vw, 3.2rem) !important;
  text-transform: uppercase !important;
  letter-spacing: 0.01em !important;
  transition: color 0.25s ease !important;
  margin: 0 !important;
}
.c8srv-root .c8srv-catalog-item:hover .c8srv-catalog-title {
  color: #0047E1 !important;
}
.c8srv-root .c8srv-catalog-tagline {
  font-size: 13px !important;
  color: #8A8A8A !important;
  font-weight: 300 !important;
  margin-left: 1.5rem !important;
}
.c8srv-root .c8srv-catalog-badges {
  display: flex !important;
  gap: 0.5rem !important;
  opacity: 0 !important;
  transform: translateX(12px) !important;
  transition: opacity 0.3s ease, transform 0.3s ease !important;
  pointer-events: none !important;
}
@media (max-width: 768px) {
  .c8srv-root .c8srv-catalog-item {
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 1rem !important;
  }
  .c8srv-root .c8srv-catalog-left {
    flex-direction: column !important;
    gap: 0.5rem !important;
  }
  .c8srv-root .c8srv-catalog-tagline {
    margin-left: 0 !important;
  }
  .c8srv-root .c8srv-catalog-badges {
    opacity: 1 !important;
    transform: none !important;
    pointer-events: auto !important;
    flex-wrap: wrap !important;
  }
}
.c8srv-root .c8srv-catalog-item:hover .c8srv-catalog-badges {
  opacity: 1 !important;
  transform: translateX(0) !important;
}
.c8srv-root .c8srv-badge {
  font-family: 'Space Mono', monospace !important;
  font-size: 10px !important;
  background: #080808 !important;
  color: #FAFAF7 !important;
  padding: 0.4rem 0.8rem !important;
  border-radius: 4px !important;
  letter-spacing: 0.05em !important;
  white-space: nowrap !important;
}

/* ?? Code-only 3-Fan Wireframe Card Styles ?? */
/* ── Typography Fan Cards (Stack names) ── */
.c8srv-root .c8srv-hoverlist-preview {
  position: absolute !important;
  width: 310px !important;
  height: 240px !important;
  pointer-events: none !important;
  z-index: 50 !important;
  display: block !important;
  opacity: 0 !important;
  transition: opacity 0.28s ease !important;
  transform: translate(-50%, -50%) !important;
}
.c8srv-root .c8srv-hoverlist-preview.is-active {
  opacity: 1 !important;
}
.c8srv-root .c8srv-fan-card {
  position: absolute !important;
  bottom: 0 !important;
  left: 50% !important;
  width: 118px !important;
  height: 155px !important;
  margin-left: -59px !important;
  border-radius: 4px !important;
  box-shadow: 0 14px 36px rgba(8,8,8,0.22) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  overflow: hidden !important;
  padding: 0 10px !important;
  transition: transform 0.45s cubic-bezier(.16,.8,.24,1), opacity 0.4s ease !important;
}
.c8srv-root .c8srv-fan-left {
  background: #0047E1 !important;
  border: 1px solid rgba(255,255,255,0.12) !important;
  z-index: 10 !important;
  transform: translateX(-105px) translateY(-18px) rotate(-10deg) !important;
}
.c8srv-root .c8srv-fan-center {
  background: #F5F0E8 !important;
  border: 1px solid rgba(8,8,8,0.1) !important;
  z-index: 20 !important;
  transform: translateX(0px) rotate(0deg) !important;
}
.c8srv-root .c8srv-fan-right {
  background: #080808 !important;
  border: 1px solid rgba(255,255,255,0.08) !important;
  z-index: 15 !important;
  transform: translateX(105px) translateY(-18px) rotate(10deg) !important;
}
.c8srv-root .c8srv-fan-word {
  font-family: 'Bebas Neue', sans-serif !important;
  font-size: 36px !important;
  line-height: 1 !important;
  letter-spacing: 0.04em !important;
  text-align: center !important;
  white-space: normal !important;
  word-break: break-word !important;
  overflow: hidden !important;
  width: 100% !important;
  display: block !important;
  transition: opacity 0.18s ease !important;
}
.c8srv-root .c8srv-fan-left .c8srv-fan-word,
.c8srv-root .c8srv-fan-right .c8srv-fan-word { color: #FAFAF7 !important; }
.c8srv-root .c8srv-fan-center .c8srv-fan-word { color: #080808 !important; }

/* Accordion FAQ styles */
.c8srv-root .c8srv-faq-section { padding: 6rem 0 !important; }
.c8srv-root .c8srv-accordion { border-top: 1px solid rgba(8,8,8,0.1) !important; margin-top: 2.5rem !important; }
.c8srv-root .c8srv-accordion-item { border-bottom: 1px solid rgba(8,8,8,0.1) !important; }
.c8srv-root .c8srv-accordion-head { display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 1.5rem !important; padding: 1.6rem 0.25rem !important; cursor: pointer !important; }
.c8srv-root .c8srv-accordion-title { font-family: 'Michroma', sans-serif !important; font-size: clamp(.9rem, 1.4vw, 1.1rem) !important; font-weight: 700 !important; text-transform: uppercase !important; letter-spacing: 0.01em !important; color: #080808 !important; margin: 0 !important; }
.c8srv-root .c8srv-accordion-toggle { width: 26px !important; height: 26px !important; border: 1px solid rgba(8,8,8,0.2) !important; border-radius: 4px !important; display: flex !important; align-items: center !important; justify-content: center !important; flex-shrink: 0 !important; position: relative !important; }
.c8srv-root .c8srv-accordion-toggle::before, .c8srv-root .c8srv-accordion-toggle::after { content: '' !important; position: absolute !important; background: #080808 !important; transition: transform 0.25s ease, opacity 0.25s ease !important; }
.c8srv-root .c8srv-accordion-toggle::before { width: 12px !important; height: 1px !important; }
.c8srv-root .c8srv-accordion-toggle::after { width: 1px !important; height: 12px !important; }
.c8srv-root .c8srv-accordion-item.is-open .c8srv-accordion-toggle::after { transform: rotate(90deg) !important; opacity: 0 !important; }
.c8srv-root .c8srv-accordion-body { display: grid !important; grid-template-rows: 0fr !important; transition: grid-template-rows 0.35s ease !important; }
.c8srv-root .c8srv-accordion-item.is-open .c8srv-accordion-body { grid-template-rows: 1fr !important; }
.c8srv-root .c8srv-accordion-body > div { overflow: hidden !important; }
.c8srv-root .c8srv-accordion-desc { font-size: 14.5px !important; font-weight: 300 !important; color: #6B6B6B !important; max-width: 720px !important; line-height: 1.72 !important; padding: 0 0.25rem 1.75rem 0.25rem !important; }
</style>

<div class="c8srv-hero-atmos" data-c8srv-atmos>
  <svg class="c8srv-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
    <defs>
      <filter id="c8srvGoo" x="-50%" y="-50%" width="200%" height="200%">
        <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="7" result="turb" data-c8srv-turb>
          <animate attributeName="baseFrequency" values="0.008 0.02;0.02 0.05;0.008 0.02" dur="16s" repeatCount="indefinite"/>
        </feTurbulence>
        <feDisplacementMap in="SourceGraphic" in2="turb" scale="42" xChannelSelector="R" yChannelSelector="G"/>
        <feGaussianBlur stdDeviation="4"/>
      </filter>
    </defs>
    <g filter="url(#c8srvGoo)">
      <circle class="c8srv-atmos-blob" cx="80" cy="60" r="70" fill="#0047E1">
        <animate attributeName="cx" values="80;145;55;80" dur="19s" repeatCount="indefinite"/>
        <animate attributeName="cy" values="60;35;95;60" dur="19s" repeatCount="indefinite"/>
      </circle>
      <circle class="c8srv-atmos-blob" cx="220" cy="55" r="55" fill="#3D6BFF">
        <animate attributeName="cx" values="220;165;265;220" dur="23s" repeatCount="indefinite"/>
        <animate attributeName="cy" values="55;95;25;55" dur="23s" repeatCount="indefinite"/>
      </circle>
      <circle class="c8srv-atmos-blob" cx="330" cy="70" r="45" fill="#7C93FF">
        <animate attributeName="cx" values="330;285;365;330" dur="15s" repeatCount="indefinite"/>
        <animate attributeName="cy" values="70;105;45;70" dur="15s" repeatCount="indefinite"/>
      </circle>
    </g>
  </svg>
  <div class="c8srv-atmos-glow" data-c8srv-glow></div>
</div>

<div class="c8srv-wrap">

  <!-- Hero -->
  <div class="c8srv-hero">
    <div class="c8srv-label" data-customizer="srv_hero_eyebrow"><?php echo esc_html(cr8v_mod('srv_hero_eyebrow', 'Services')); ?></div>
    <div class="c8srv-hero-grid" style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 3rem; align-items: center;">
      <div class="c8srv-hero-content">
        <h1 class="c8srv-headline"><span data-customizer="srv_hero_h1_part1"><?php echo esc_html(cr8v_mod('srv_hero_h1_part1', 'Every ')); ?></span><span class="c8srv-serif-text" data-customizer="srv_hero_h1_serif"><?php echo esc_html(cr8v_mod('srv_hero_h1_serif', 'layer')); ?></span><span data-customizer="srv_hero_h1_part2"><?php echo esc_html(cr8v_mod('srv_hero_h1_part2', ' of your presence, ')); ?></span><span class="c8srv-gradient-text" data-customizer="srv_hero_h1_gradient"><?php echo esc_html(cr8v_mod('srv_hero_h1_gradient', 'engineered by Cr8v Stacks.')); ?></span></h1>
        <div class="c8srv-hero-intro c8srv-reveal c8srv-reveal-d1" data-customizer="srv_hero_intro"><?php echo wp_kses_post(cr8v_mod('srv_hero_intro', 'Cr8v Stacks handles every layer of your presence — brand positioning, design, the build itself, and the growth work after launch. Whichever platform your business runs on (WordPress, Shopify, WooCommerce, or a fully custom stack) the build is only one layer. We start with who you\'re competing against and end with the campaigns that bring people to the site we just built.')); ?></div>
        <div class="c8srv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('srv_hero_cta1_url', '#primary-service-6cards')); ?>" class="c8-btn-primary" data-customizer="srv_hero_cta1_text"><?php echo esc_html(cr8v_mod('srv_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_hero_cta2_url', '/discovery-call/'))); ?>" class="c8srv-btn-ghost" data-customizer="srv_hero_cta2_text"><?php echo esc_html(cr8v_mod('srv_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8srv-pill-row">
          <span class="c8srv-pill" data-customizer="srv_hero_pill1"><?php echo esc_html(cr8v_mod('srv_hero_pill1', 'WordPress')); ?></span>
          <span class="c8srv-pill" data-customizer="srv_hero_pill2"><?php echo esc_html(cr8v_mod('srv_hero_pill2', 'Shopify')); ?></span>
          <span class="c8srv-pill" data-customizer="srv_hero_pill3"><?php echo esc_html(cr8v_mod('srv_hero_pill3', 'WooCommerce')); ?></span>
          <span class="c8srv-pill" data-customizer="srv_hero_pill4"><?php echo esc_html(cr8v_mod('srv_hero_pill4', 'Custom Code')); ?></span>
          <span class="c8srv-pill" data-customizer="srv_hero_pill5"><?php echo esc_html(cr8v_mod('srv_hero_pill5', 'AI MVP')); ?></span>
        </div>
      </div>

      <!-- Right Side Hero Visual: Transparent Animated Logo Video -->
      <div class="c8srv-anim-container" id="c8srv-anim-wrapper" style="display: flex; align-items: center; justify-content: center; background: transparent; border: none; box-shadow: none;">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback style="width: 100%; max-width: 520px; height: auto; display: block; object-fit: contain; background: transparent;">
          <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2.webm'); ?>" type="video/webm">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_style2.gif'); ?>" alt="Cr8v Stacks Animated Logo Visual" style="width: 100%; max-width: 520px; height: auto; display: block;">
        </video>
      </div>
    </div>
  </div>
</div>

  <!-- ════════════════════════════════════════════════════════════════ -->
  <!-- PRIMARY SERVICE SHOWCASE — 6-CARD FULL-WIDTH ABOUT US GRID       -->
  <!-- ════════════════════════════════════════════════════════════════ -->
  <section class="c8-about-section" id="primary-service-6cards" style="width: 100% !important; max-width: 100% !important; margin-left: 0 !important; margin-right: 0 !important; left: 0 !important; right: 0 !important; background-color: #080808 !important; background-image: none !important; padding: 6rem 5vw !important; box-sizing: border-box !important; color: #FFFFFF !important; border-radius: 0 !important; margin-top: 3rem !important; margin-bottom: 5rem !important;">
    <div class="c8-about-inner" style="max-width: 1400px; margin: 0 auto; position: relative; z-index: 1;">
      
      <div class="c8-about-header" style="margin-bottom: 4rem; text-align: left;">
        <span class="c8srv-label" style="color: #7C93FF !important;" data-customizer="srv_primary_label"><?php echo esc_html(cr8v_mod('srv_primary_label', 'PRIMARY SERVICE // 01')); ?></span>
        <h2 class="c8-about-h2" style="font-family: 'Michroma', sans-serif; font-size: clamp(2.0rem, 4vw, 3.2rem); font-weight: 700; color: #FFFFFF; line-height: 1.15; text-transform: uppercase; margin-bottom: 1.25rem;"><span data-customizer="srv_primary_h2_part1"><?php echo esc_html(cr8v_mod('srv_primary_h2_part1', 'Web Design &')); ?></span><br><em style="font-style: normal; color: #0047E1;" data-customizer="srv_primary_h2_part2"><?php echo esc_html(cr8v_mod('srv_primary_h2_part2', 'Development Stacks')); ?></em></h2>
        <p class="c8-about-desc" style="font-family: 'DM Sans', sans-serif; font-size: 0.94rem; font-weight: 300; color: rgba(255,255,255,0.8); line-height: 1.85; max-width: 850px;" data-customizer="srv_primary_desc">
          <?php echo wp_kses_post(cr8v_mod('srv_primary_desc', 'One senior engineering team, every modern web stack. Whichever foundation your business runs on — WordPress, Shopify, WooCommerce, or custom PHP/JS — we engineer lightweight, high-speed digital platforms tuned for sub-1.2s speeds and direct revenue conversion.')); ?>
        </p>
      </div>

      <!-- 6-CARD GRID MATRIX (TALLER CARDS PARITY WITH ABOUT-US.HTML) -->
      <div class="c8-about-mockup-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        
        <!-- Card 1: WordPress -->
        <div class="c8-about-card" style="border: 1px solid rgba(255,255,255,0.14); background: #FAFAF7; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 10px 40px rgba(0,0,0,0.15);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card1_num"><?php echo esc_html(cr8v_mod('srv_card1_num', '01 / WORDPRESS')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card1_title"><?php echo esc_html(cr8v_mod('srv_card1_title', 'WORDPRESS, NO-CODE')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card1_desc"><?php echo wp_kses_post(cr8v_mod('srv_card1_desc', 'Fully custom themes built on Elementor and native block engines. Hand-written PHP templates ensure 95+ PageSpeed scores while remaining 100% editable by your non-technical team without touching line one of code.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card1_btn_url', '/services/wordpress/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card1_btn_text"><?php echo esc_html(cr8v_mod('srv_card1_btn_text', 'Explore WordPress →')); ?></a>
        </div>

        <!-- Card 2: Shopify (Blue Highlight) -->
        <div class="c8-about-card is-blue-outline" style="border: 2px solid #0047E1 !important; background: #FFFFFF; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 14px 44px rgba(0, 71, 225, 0.22);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card2_num"><?php echo esc_html(cr8v_mod('srv_card2_num', '02 / SHOPIFY')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card2_title"><?php echo esc_html(cr8v_mod('srv_card2_title', 'SHOPIFY STOREFRONTS')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card2_desc"><?php echo wp_kses_post(cr8v_mod('srv_card2_desc', 'Conversion-focused Liquid storefronts engineered from a blank file. We streamline third-party apps, optimize checkout velocity, and maximize product discovery across all desktop and mobile devices.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card2_btn_url', '/services/shopify/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card2_btn_text"><?php echo esc_html(cr8v_mod('srv_card2_btn_text', 'Explore Shopify →')); ?></a>
        </div>

        <!-- Card 3: WooCommerce -->
        <div class="c8-about-card" style="border: 1px solid rgba(255,255,255,0.14); background: #FAFAF7; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 10px 40px rgba(0,0,0,0.15);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card3_num"><?php echo esc_html(cr8v_mod('srv_card3_num', '03 / WOOCOMMERCE')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card3_title"><?php echo esc_html(cr8v_mod('srv_card3_title', 'WOOCOMMERCE CONTROL')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card3_desc"><?php echo wp_kses_post(cr8v_mod('srv_card3_desc', 'Total e-commerce freedom on your own WordPress hosting. Custom multi-step checkout flows, automated tax logic, multi-currency support, and zero third-party SaaS transaction fees.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card3_btn_url', '/services/woocommerce/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card3_btn_text"><?php echo esc_html(cr8v_mod('srv_card3_btn_text', 'Explore WooCommerce →')); ?></a>
        </div>

        <!-- Card 4: Custom Dev -->
        <div class="c8-about-card" style="border: 1px solid rgba(255,255,255,0.14); background: #FAFAF7; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 10px 40px rgba(0,0,0,0.15);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card4_num"><?php echo esc_html(cr8v_mod('srv_card4_num', '04 / CUSTOM DEV')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card4_title"><?php echo esc_html(cr8v_mod('srv_card4_title', 'BESPOKE SOFTWARE')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card4_desc"><?php echo wp_kses_post(cr8v_mod('srv_card4_desc', 'Tailored web applications, internal dashboards, and custom APIs built from line one without SaaS dependencies — engineered around your business operations with 100% client code ownership.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card4_btn_url', '/services/custom-dev/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card4_btn_text"><?php echo esc_html(cr8v_mod('srv_card4_btn_text', 'Explore Custom Dev →')); ?></a>
        </div>

        <!-- Card 5: AI MVP (Blue Highlight) -->
        <div class="c8-about-card is-blue-outline" style="border: 2px solid #0047E1 !important; background: #FFFFFF; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 14px 44px rgba(0, 71, 225, 0.22);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card5_num"><?php echo esc_html(cr8v_mod('srv_card5_num', '05 / AI MVP')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card5_title"><?php echo esc_html(cr8v_mod('srv_card5_title', 'AI PRODUCT MVPS')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card5_desc"><?php echo wp_kses_post(cr8v_mod('srv_card5_desc', 'Production-grade AI applications built to validate early business concepts with real working software — integrating OpenAI, Claude, and custom model pipelines in weeks, not quarters.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card5_btn_url', '/services/ai-mvp/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card5_btn_text"><?php echo esc_html(cr8v_mod('srv_card5_btn_text', 'Explore AI MVP →')); ?></a>
        </div>

        <!-- Card 6: Redesigns -->
        <div class="c8-about-card" style="border: 1px solid rgba(255,255,255,0.14); background: #FAFAF7; color: #080808; padding: 3.5rem 2.5rem !important; border-radius: 4px; display: flex; flex-direction: column; justify-content: space-between; min-height: 500px !important; box-shadow: 0 10px 40px rgba(0,0,0,0.15);">
          <div>
            <span style="font-family: 'Space Mono', monospace !important; font-size: 0.72rem !important; font-weight: 700 !important; color: #0047E1 !important; display: block !important; margin-bottom: 1.25rem !important; letter-spacing: 0.1em !important;" data-customizer="srv_card6_num"><?php echo esc_html(cr8v_mod('srv_card6_num', '06 / REDESIGNS')); ?></span>
            <h3 style="font-family: 'Michroma', sans-serif !important; font-size: 1.25rem !important; text-transform: uppercase !important; margin-bottom: 0.85rem !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.35 !important;" data-customizer="srv_card6_title"><?php echo esc_html(cr8v_mod('srv_card6_title', 'PLATFORM REDESIGNS')); ?></h3>
          </div>
          <p style="font-family: 'DM Sans', sans-serif !important; font-size: 0.92rem !important; color: #555555 !important; line-height: 1.65 !important; margin-top: auto !important; margin-bottom: 1.5rem !important;" data-customizer="srv_card6_desc"><?php echo wp_kses_post(cr8v_mod('srv_card6_desc', 'Frontend modernization and core code refactoring for slow WordPress sites, proprietary web portals, and template-locked e-commerce storefronts seeking instant speed and conversion boosts.')); ?></p>
          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_card6_btn_url', '/services/web-design/'))); ?>" class="c8-btn-primary" style="align-self: flex-start;" data-customizer="srv_card6_btn_text"><?php echo esc_html(cr8v_mod('srv_card6_btn_text', 'Explore Redesigns →')); ?></a>
        </div>

      </div>
    </div>
  </section>

<!-- ── Growth & Strategy Layer: cursor-following preview list ── -->
<div class="c8srv-hoverlist-section" style="position: relative !important; width: 100% !important;">
  <div class="c8srv-wrap" style="padding-bottom: 0 !important;">    <div class="c8srv-label c8srv-reveal" data-customizer="srv_growth_label"><?php echo esc_html(cr8v_mod('srv_growth_label', 'Growth & Strategy')); ?></div>
    <h2 class="c8srv-section-title c8srv-reveal" data-customizer="srv_growth_h2"><?php echo esc_html(cr8v_mod('srv_growth_h2', 'The Growth & Strategy Layer')); ?></h2>
    <p class="c8srv-lead c8srv-reveal" style="margin-bottom: 3.5rem !important;" data-customizer="srv_growth_desc"><?php echo wp_kses_post(cr8v_mod('srv_growth_desc', 'Positioning, visual identity, technical search, and acquisition funnels — the strategic capabilities that fuel your build.')); ?></p>
  </div>
  <div class="c8srv-wrap" style="padding-top: 0 !important; position: relative !important;">
    <div class="c8srv-hoverlist" data-c8srv-hoverlist style="position: relative !important;">
      <div class="c8srv-hoverlist-item c8srv-reveal" data-c8srv-service-id="1" data-s1="Figma" data-s2="Colors" data-s3="Fonts" onclick="window.location.href='<?php echo esc_url(home_url(cr8v_mod('srv_growth1_url', '/services/brand-identity/'))); ?>'" style="cursor: pointer !important;">
        <div class="c8srv-hoverlist-left">
          <span class="c8srv-hoverlist-num" data-customizer="srv_growth1_num"><?php echo esc_html(cr8v_mod('srv_growth1_num', '01')); ?></span>
          <h3 class="c8srv-hoverlist-title" data-customizer="srv_growth1_title"><?php echo esc_html(cr8v_mod('srv_growth1_title', 'Brand Identity')); ?></h3>
          <span class="c8srv-hoverlist-tagline" data-customizer="srv_growth1_tagline"><?php echo wp_kses_post(cr8v_mod('srv_growth1_tagline', 'Bespoke vector logo systems, curated typography hierarchies, and color guidelines built for scale')); ?></span>
        </div>
        <div class="c8srv-hoverlist-right"><a href="<?php echo esc_url(home_url(cr8v_mod('srv_growth1_url', '/services/brand-identity/'))); ?>" class="c8srv-explore" onclick="event.stopPropagation();" data-customizer="srv_growth1_btn_text"><?php echo esc_html(cr8v_mod('srv_growth1_btn_text', 'Explore →')); ?></a></div>
      </div>
      <div class="c8srv-hoverlist-item c8srv-reveal c8srv-reveal-d1" data-c8srv-service-id="2" data-s1="Audits" data-s2="Message" data-s3="Avatars" onclick="window.location.href='<?php echo esc_url(home_url(cr8v_mod('srv_growth2_url', '/services/brand-strategy/'))); ?>'" style="cursor: pointer !important;">
        <div class="c8srv-hoverlist-left">
          <span class="c8srv-hoverlist-num" data-customizer="srv_growth2_num"><?php echo esc_html(cr8v_mod('srv_growth2_num', '02')); ?></span>
          <h3 class="c8srv-hoverlist-title" data-customizer="srv_growth2_title"><?php echo esc_html(cr8v_mod('srv_growth2_title', 'Brand Strategy')); ?></h3>
          <span class="c8srv-hoverlist-tagline" data-customizer="srv_growth2_tagline"><?php echo wp_kses_post(cr8v_mod('srv_growth2_tagline', 'Market positioning matrices, competitive moat analysis, and messaging frameworks that guide your build')); ?></span>
        </div>
        <div class="c8srv-hoverlist-right"><a href="<?php echo esc_url(home_url(cr8v_mod('srv_growth2_url', '/services/brand-strategy/'))); ?>" class="c8srv-explore" onclick="event.stopPropagation();" data-customizer="srv_growth2_btn_text"><?php echo esc_html(cr8v_mod('srv_growth2_btn_text', 'Explore →')); ?></a></div>
      </div>
      <div class="c8srv-hoverlist-item c8srv-reveal c8srv-reveal-d2" data-c8srv-service-id="3" data-s1="SEO" data-s2="Schema" data-s3="Crawl" onclick="window.location.href='<?php echo esc_url(home_url(cr8v_mod('srv_growth3_url', '/services/seo-content/'))); ?>'" style="cursor: pointer !important;">
        <div class="c8srv-hoverlist-left">
          <span class="c8srv-hoverlist-num" data-customizer="srv_growth3_num"><?php echo esc_html(cr8v_mod('srv_growth3_num', '03')); ?></span>
          <h3 class="c8srv-hoverlist-title" data-customizer="srv_growth3_title"><?php echo esc_html(cr8v_mod('srv_growth3_title', 'SEO & Content')); ?></h3>
          <span class="c8srv-hoverlist-tagline" data-customizer="srv_growth3_tagline"><?php echo wp_kses_post(cr8v_mod('srv_growth3_tagline', 'Technical schema markup, Screaming Frog audits, entity SEO, and semantic keyword architecture')); ?></span>
        </div>
        <div class="c8srv-hoverlist-right"><a href="<?php echo esc_url(home_url(cr8v_mod('srv_growth3_url', '/services/seo-content/'))); ?>" class="c8srv-explore" onclick="event.stopPropagation();" data-customizer="srv_growth3_btn_text"><?php echo esc_html(cr8v_mod('srv_growth3_btn_text', 'Explore →')); ?></a></div>
      </div>
      <div class="c8srv-hoverlist-item c8srv-reveal c8srv-reveal-d3" data-c8srv-service-id="4" data-s1="PPC" data-s2="Funnels" data-s3="ROAS" onclick="window.location.href='<?php echo esc_url(home_url(cr8v_mod('srv_growth4_url', '/services/digital-marketing/'))); ?>'" style="cursor: pointer !important;">
        <div class="c8srv-hoverlist-left">
          <span class="c8srv-hoverlist-num" data-customizer="srv_growth4_num"><?php echo esc_html(cr8v_mod('srv_growth4_num', '04')); ?></span>
          <h3 class="c8srv-hoverlist-title" data-customizer="srv_growth4_title"><?php echo esc_html(cr8v_mod('srv_growth4_title', 'Digital Marketing')); ?></h3>
          <span class="c8srv-hoverlist-tagline" data-customizer="srv_growth4_tagline"><?php echo wp_kses_post(cr8v_mod('srv_growth4_tagline', 'Meta Ads funnels, Google Ads acquisition, Klaviyo email flows, and conversion tracking infrastructure')); ?></span>
        </div>
        <div class="c8srv-hoverlist-right"><a href="<?php echo esc_url(home_url(cr8v_mod('srv_growth4_url', '/services/digital-marketing/'))); ?>" class="c8srv-explore" onclick="event.stopPropagation();" data-customizer="srv_growth4_btn_text"><?php echo esc_html(cr8v_mod('srv_growth4_btn_text', 'Explore →')); ?></a></div>
      </div>
    </div>
    
    <!-- Typography Stack Fan Preview -->
    <div class="c8srv-hoverlist-preview" data-c8srv-preview>
      <!-- Card 1: Left (navy) -->
      <div class="c8srv-fan-card c8srv-fan-left">
        <span class="c8srv-fan-word" data-c8srv-fan-pos="left" data-customizer="srv_fan_left"><?php echo esc_html(cr8v_mod('srv_fan_left', 'Position')); ?></span>
      </div>
      <!-- Card 2: Center (cream) -->
      <div class="c8srv-fan-card c8srv-fan-center">
        <span class="c8srv-fan-word" data-c8srv-fan-pos="center" data-customizer="srv_fan_center"><?php echo esc_html(cr8v_mod('srv_fan_center', 'Schema')); ?></span>
      </div>
      <!-- Card 3: Right (charcoal) -->
      <div class="c8srv-fan-card c8srv-fan-right">
        <span class="c8srv-fan-word" data-c8srv-fan-pos="right" data-customizer="srv_fan_right"><?php echo esc_html(cr8v_mod('srv_fan_right', 'ROAS')); ?></span>
      </div>
    </div>
  </div>
</div>

  <!-- ══════════════════════════════════════════
       SECTION 4: WHAT YOU GET (Folder Deck)
       Cream #FAFAF9
       ══════════════════════════════════════════ -->
  <div class="c8srv-folder-section" id="c8srv-services-folder-deck">
    <div class="c8srv-wrap">
      <div class="c8srv-label c8srv-reveal" data-customizer="srv_deck_label"><?php echo esc_html(cr8v_mod('srv_deck_label', 'Agency Deliverables')); ?></div>
      <h2 class="c8srv-section-title c8srv-reveal"><span data-customizer="srv_deck_h2_part1"><?php echo esc_html(cr8v_mod('srv_deck_h2_part1', 'What You ')); ?></span><span class="c8srv-serif-text" data-customizer="srv_deck_h2_serif"><?php echo esc_html(cr8v_mod('srv_deck_h2_serif', 'Get')); ?></span></h2>
      <p class="c8srv-lead c8srv-reveal" style="margin-bottom:2rem" data-customizer="srv_deck_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck_desc', 'Concrete, high-end agency deliverables engineered for your digital ecosystem — built from scratch by one unified studio.')); ?></p>

      <div class="c8srv-folder-deck" data-c8srv-folder-deck>
        <!-- Card 1 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="srv_deck1_tab"><?php echo esc_html(cr8v_mod('srv_deck1_tab', '01 // Strategy')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="srv_deck1_title"><?php echo esc_html(cr8v_mod('srv_deck1_title', 'Full-Funnel Strategic Positioning & Architecture')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="srv_deck1_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck1_desc', 'Competitor matrix mapping, pricing scoping, customer persona profiling, and messaging frameworks that give your visual identity, codebase, and paid campaigns clear direction before line one of code.')); ?></p>
            <a href="<?php echo esc_url(home_url(cr8v_mod('srv_deck1_url', '/services/brand-strategy/'))); ?>" class="c8srv-explore" style="margin-top: 1.5rem !important;" data-customizer="srv_deck1_link_text"><?php echo esc_html(cr8v_mod('srv_deck1_link_text', 'Explore Strategy Deliverables →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('srv_deck1_img', 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop')); ?>" alt="Strategy Deliverables" data-customizer="srv_deck1_img">
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="srv_deck2_tab"><?php echo esc_html(cr8v_mod('srv_deck2_tab', '02 // Engineering')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="srv_deck2_title"><?php echo esc_html(cr8v_mod('srv_deck2_title', 'High-Converting Liquid & PHP Codebase')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="srv_deck2_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck2_desc', 'Lightweight starter base themes, custom Gutenberg block suites, bespoke Liquid sections, and zero-SaaS custom application code tuned for sub-1.2s load speeds and friction-free user conversions.')); ?></p>
            <a href="<?php echo esc_url(home_url(cr8v_mod('srv_deck2_url', '/services/web-design/'))); ?>" class="c8srv-explore" style="margin-top: 1.5rem !important;" data-customizer="srv_deck2_link_text"><?php echo esc_html(cr8v_mod('srv_deck2_link_text', 'Explore Code Deliverables →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('srv_deck2_img', 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop')); ?>" alt="Code Deliverables" data-customizer="srv_deck2_img">
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="srv_deck3_tab"><?php echo esc_html(cr8v_mod('srv_deck3_tab', '03 // Plugins')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="srv_deck3_title"><?php echo esc_html(cr8v_mod('srv_deck3_title', 'Proprietary Agency Plugins & API Wiring')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="srv_deck3_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck3_desc', 'Custom-coded WordPress and WooCommerce extension plugins built in-house for specialized features, native payment gateway wiring (Stripe, Paystack), and vector AI integrations without third-party plugin overhead.')); ?></p>
            <a href="<?php echo esc_url(home_url(cr8v_mod('srv_deck3_url', '/services/custom-dev/'))); ?>" class="c8srv-explore" style="margin-top: 1.5rem !important;" data-customizer="srv_deck3_link_text"><?php echo esc_html(cr8v_mod('srv_deck3_link_text', 'Explore Plugin Engineering →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('srv_deck3_img', 'https://images.unsplash.com/photo-1472851294608-062f824d29cc?q=80&w=800&auto=format&fit=crop')); ?>" alt="Plugin Deliverables" data-customizer="srv_deck3_img">
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="srv_deck4_tab"><?php echo esc_html(cr8v_mod('srv_deck4_tab', '04 // Organic')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="srv_deck4_title"><?php echo esc_html(cr8v_mod('srv_deck4_title', 'Technical Schema & Semantic Keyword Infrastructure')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="srv_deck4_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck4_desc', 'Screaming Frog crawl auditing, entity SEO optimization, automated XML sitemaps, canonical redirect mapping, and Core Web Vitals tuning for long-term search dominance across Google.')); ?></p>
            <a href="<?php echo esc_url(home_url(cr8v_mod('srv_deck4_url', '/services/seo-content/'))); ?>" class="c8srv-explore" style="margin-top: 1.5rem !important;" data-customizer="srv_deck4_link_text"><?php echo esc_html(cr8v_mod('srv_deck4_link_text', 'Explore Search Infrastructure →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('srv_deck4_img', 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=800&auto=format&fit=crop')); ?>" alt="SEO Infrastructure" data-customizer="srv_deck4_img">
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="c8srv-folder-card">
          <div class="c8srv-folder-tab" data-customizer="srv_deck5_tab"><?php echo esc_html(cr8v_mod('srv_deck5_tab', '05 // Retainer')); ?></div>
          <div class="c8srv-folder-card-left">
            <h3 class="c8srv-folder-card-title" data-customizer="srv_deck5_title"><?php echo esc_html(cr8v_mod('srv_deck5_title', 'Post-Launch Warranty & Active Growth Retainer')); ?></h3>
            <p class="c8srv-folder-card-desc" data-customizer="srv_deck5_desc"><?php echo wp_kses_post(cr8v_mod('srv_deck5_desc', '30-day post-launch code warranty, dedicated monthly developer support hours, continuous speed auditing, security patches, and active ad campaign optimization to keep your platform scaling.')); ?></p>
            <a href="<?php echo esc_url(cr8v_mod('srv_deck5_url', 'https://cr8vstacks.com/contact/?model=retainer')); ?>" class="c8srv-explore" style="margin-top: 1.5rem !important;" data-customizer="srv_deck5_link_text"><?php echo esc_html(cr8v_mod('srv_deck5_link_text', 'Explore Growth Retainers →')); ?></a>
          </div>
          <div class="c8srv-folder-card-right">
            <div class="c8srv-folder-card-img">
              <img src="<?php echo esc_url(cr8v_mod('srv_deck5_img', 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop')); ?>" alt="Retainer Deliverables" data-customizer="srv_deck5_img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navy capability breakout: Flanking Cards (Why It Works) -->
<div class="c8srv-flank-section">
  <div class="c8srv-flank-inner">
    <div class="c8srv-label c8srv-reveal" style="justify-content: center !important;" data-customizer="srv_flank_label"><?php echo esc_html(cr8v_mod('srv_flank_label', 'Why It Works')); ?></div>
    <h2 class="c8srv-section-title c8srv-reveal" style="color: #080808 !important; text-align: center !important;" data-customizer="srv_flank_h2"><?php echo esc_html(cr8v_mod('srv_flank_h2', 'Built around your business, not a template')); ?></h2>
    
    <div class="c8srv-flank-container" data-c8srv-flank-trigger>
      <!-- Left Flanking Card (One Standard) -->
      <div class="c8srv-flank-card is-left" data-c8srv-flank-left>
        <div class="c8srv-flank-card-quote">“</div>
        <span class="c8srv-flank-card-step" data-customizer="srv_flank1_step"><?php echo esc_html(cr8v_mod('srv_flank1_step', 'Any Stack // Standard')); ?></span>
        <div class="c8srv-flank-card-divider"></div>
        <h3 class="c8srv-flank-card-title" data-customizer="srv_flank1_title"><?php echo esc_html(cr8v_mod('srv_flank1_title', 'One Standard')); ?></h3>
        <p class="c8srv-flank-card-desc" data-customizer="srv_flank1_desc"><?php echo wp_kses_post(cr8v_mod('srv_flank1_desc', 'WordPress, Shopify, WooCommerce, or custom — the same high-performance engineering standard applies no matter what it\'s built on.')); ?></p>
        <div class="c8srv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </div>
      </div>

      <!-- Center Card (Performance-First) -->
      <div class="c8srv-flank-card is-center">
        <div class="c8srv-flank-card-quote">“</div>
        <span class="c8srv-flank-card-step" data-customizer="srv_flank2_step"><?php echo esc_html(cr8v_mod('srv_flank2_step', 'Every Build // Speed')); ?></span>
        <div class="c8srv-flank-card-divider"></div>
        <h3 class="c8srv-flank-card-title" data-customizer="srv_flank2_title"><?php echo esc_html(cr8v_mod('srv_flank2_title', 'Performance')); ?></h3>
        <p class="c8srv-flank-card-desc" data-customizer="srv_flank2_desc"><?php echo wp_kses_post(cr8v_mod('srv_flank2_desc', 'Engineered for load speed and search ranking from the first line of code, not optimized after the fact.')); ?></p>
        <div class="c8srv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
        </div>
      </div>

      <!-- Right Flanking Card (Full Ownership) -->
      <div class="c8srv-flank-card is-right" data-c8srv-flank-right>
        <div class="c8srv-flank-card-quote">“</div>
        <span class="c8srv-flank-card-step" data-customizer="srv_flank3_step"><?php echo esc_html(cr8v_mod('srv_flank3_step', 'What You Get // Control')); ?></span>
        <div class="c8srv-flank-card-divider"></div>
        <h3 class="c8srv-flank-card-title" data-customizer="srv_flank3_title"><?php echo esc_html(cr8v_mod('srv_flank3_title', 'Full Ownership')); ?></h3>
        <p class="c8srv-flank-card-desc" data-customizer="srv_flank3_desc"><?php echo wp_kses_post(cr8v_mod('srv_flank3_desc', 'Your code, your hosting, your data. No proprietary lock-in that leaves you stuck if you ever want to move on.')); ?></p>
        <div class="c8srv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="c8srv-wrap">

  <!-- Section: Pricing & Estimator -->
  <div class="c8srv-pricing-section">
    <div class="c8srv-label c8srv-reveal" data-customizer="srv_pricing_label"><?php echo esc_html(cr8v_mod('srv_pricing_label', 'Pricing Models')); ?></div>
    <h2 class="c8srv-section-title c8srv-reveal"><span data-customizer="srv_pricing_h2_part1"><?php echo esc_html(cr8v_mod('srv_pricing_h2_part1', 'How We ')); ?></span><span class="c8srv-serif-text" data-customizer="srv_pricing_h2_serif"><?php echo esc_html(cr8v_mod('srv_pricing_h2_serif', 'Work')); ?></span><span data-customizer="srv_pricing_h2_part2"><?php echo esc_html(cr8v_mod('srv_pricing_h2_part2', ' Together')); ?></span></h2>
    <p class="c8srv-lead c8srv-reveal" data-customizer="srv_pricing_desc"><?php echo wp_kses_post(cr8v_mod('srv_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <!-- Pricing Split Cards -->
    <div class="c8srv-pricing-split">
      <!-- Monthly Growth Partner Model -->
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="srv_plan1_type"><?php echo esc_html(cr8v_mod('srv_plan1_type', 'Ongoing Support')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="srv_plan1_title"><?php echo esc_html(cr8v_mod('srv_plan1_title', 'Growth Retainer')); ?></h3>
          <div class="c8srv-price-amount"><span class="c8srv-price-num" data-customizer="srv_plan1_price"><?php echo esc_html(cr8v_mod('srv_plan1_price', '$950')); ?></span><span class="c8srv-price-period" data-customizer="srv_plan1_period"><?php echo esc_html(cr8v_mod('srv_plan1_period', '/mo')); ?></span></div>
        </div>
        <p class="c8srv-price-desc" data-customizer="srv_plan1_desc"><?php echo wp_kses_post(cr8v_mod('srv_plan1_desc', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.')); ?></p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan1_feat1"><?php echo esc_html(cr8v_mod('srv_plan1_feat1', 'Dedicated monthly support hours block')); ?></span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan1_feat2"><?php echo esc_html(cr8v_mod('srv_plan1_feat2', 'Monthly speed audits & code optimizations')); ?></span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan1_feat3"><?php echo esc_html(cr8v_mod('srv_plan1_feat3', 'Design tweaks, copy updates & SEO execution')); ?></span>
          </div>
        </div>
        <a href="<?php echo esc_url(cr8v_mod('srv_plan1_btn_url', 'https://cr8vstacks.com/contact/?model=retainer')); ?>" class="c8srv-price-btn is-light" style="border-color:#080808 !important; color:#080808 !important;" data-customizer="srv_plan1_btn_text"><?php echo esc_html(cr8v_mod('srv_plan1_btn_text', 'Secure Retainer Slot')); ?></a>
      </div>

      <!-- Fixed Scope Projects -->
      <div class="c8srv-price-box is-highlight c8srv-reveal c8srv-reveal-d2">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="srv_plan2_type"><?php echo esc_html(cr8v_mod('srv_plan2_type', 'Fixed Scope')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="srv_plan2_title"><?php echo esc_html(cr8v_mod('srv_plan2_title', 'Fixed Projects')); ?></h3>
          <div class="c8srv-price-amount"><span class="c8srv-price-num" style="color: #FAFAF7 !important;" data-customizer="srv_plan2_price"><?php echo esc_html(cr8v_mod('srv_plan2_price', '$1,200')); ?></span><span class="c8srv-price-period" style="color: rgba(250, 250, 247, 0.6) !important;" data-customizer="srv_plan2_period"><?php echo esc_html(cr8v_mod('srv_plan2_period', ' start')); ?></span></div>
        </div>
        <p class="c8srv-price-desc" data-customizer="srv_plan2_desc"><?php echo wp_kses_post(cr8v_mod('srv_plan2_desc', 'A deep, focused design & code engagement with transparent scoping, clear milestones, and guaranteed delivery. Best for building a new custom site, e-commerce storefront, or AI MVP prototype.')); ?></p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan2_feat1"><?php echo esc_html(cr8v_mod('srv_plan2_feat1', 'Pre-project positioning & speed audit')); ?></span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan2_feat2"><?php echo esc_html(cr8v_mod('srv_plan2_feat2', 'Guaranteed milestones & delivery timeline')); ?></span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq" style="background:#0047E1 !important; border-radius:4px !important;"><svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span data-customizer="srv_plan2_feat3"><?php echo esc_html(cr8v_mod('srv_plan2_feat3', '95+ PageSpeed & SEO launch configuration')); ?></span>
          </div>
        </div>
        <a href="<?php echo esc_url(cr8v_mod('srv_plan2_btn_url', 'https://cr8vstacks.com/contact/?model=project')); ?>" class="c8srv-price-btn is-primary" data-customizer="srv_plan2_btn_text"><?php echo esc_html(cr8v_mod('srv_plan2_btn_text', 'Start A Project')); ?></a>
      </div>
    </div>

    <!-- Interactive Scope Estimator -->
    <div class="c8srv-estimator c8srv-reveal">
      <div style="margin-bottom: 2.5rem !important;">
        <span class="c8srv-price-type" data-customizer="srv_est_badge"><?php echo esc_html(cr8v_mod('srv_est_badge', 'Project Scope Estimator')); ?></span>
        <h3 class="c8srv-price-title" style="font-size: 1.8rem !important; margin-bottom: 0.5rem !important;" data-customizer="srv_est_title"><?php echo esc_html(cr8v_mod('srv_est_title', 'Build Your Stack Estimate')); ?></h3>
        <p class="c8srv-price-desc" style="margin-bottom: 0 !important;" data-customizer="srv_est_desc"><?php echo wp_kses_post(cr8v_mod('srv_est_desc', 'Select your desired setup below to calculate an immediate starting price range estimate for your project.')); ?></p>
      </div>

      <div class="c8srv-estimator-grid">
        <div class="c8srv-est-options">
          <!-- Step 1: Platform -->
          <div>
            <span class="c8srv-est-group-title">1. Core Architecture</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button class="c8srv-est-choice is-active" data-est-val="wordpress" data-est-price="5000">WordPress No-Code</button>
              <button class="c8srv-est-choice" data-est-val="shopify" data-est-price="8500">Shopify Custom Theme</button>
              <button class="c8srv-est-choice" data-est-val="custom" data-est-price="12000">Custom Dev (PHP/JS)</button>
              <button class="c8srv-est-choice" data-est-val="aimvp" data-est-price="15000">AI MVP Prototype</button>
            </div>
          </div>

          <!-- Step 2: Scale -->
          <div>
            <span class="c8srv-est-group-title">2. Project Scale</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button class="c8srv-est-choice is-active" data-est-val="landing" data-est-multiplier="1.0">Landing Page</button>
              <button class="c8srv-est-choice" data-est-val="core" data-est-multiplier="1.4">Core Site (3-5 pages)</button>
              <button class="c8srv-est-choice" data-est-val="portal" data-est-multiplier="2.0">Full Stack Portal (10+ pages)</button>
            </div>
          </div>

          <!-- Step 3: Growth layer add-on -->
          <div>
            <span class="c8srv-est-group-title">3. Growth Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button class="c8srv-est-choice" data-est-val="seo" data-est-price="2500">SEO Strategy (+ $600)</button>
              <button class="c8srv-est-choice" data-est-val="marketing" data-est-price="5000">Marketing Funnel (+ $950)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display" data-est-range>$5,000 - $6,500</div>
          
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list" data-est-list>
            <!-- Dynamic elements will be inserted here -->
          </div>

          <a href="<?php echo esc_url(home_url(cr8v_mod('srv_est_cta_url', '/discovery-call/'))); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;" data-customizer="srv_est_cta_text"><?php echo esc_html(cr8v_mod('srv_est_cta_text', 'Submit Scope Request')); ?></a>
          <a href="<?php echo esc_url(cr8v_mod('srv_est_calc_url', 'https://cr8vstacks.com/toolkits/website-cost-calculator/')); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;" data-customizer="srv_est_calc_text"><?php echo esc_html(cr8v_mod('srv_est_calc_text', 'Or build a custom stack with our Calculator →')); ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Section: FAQ (HOMEPAGE 2-COLUMN LAYOUT & FONT FAMILY WITH SERVICE FAQS AND WHITE BG) -->
  <section class="faq-section" id="faq" style="background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important;">
    <style>
      .faq-section { background: #FFFFFF !important; padding: clamp(5rem, 10vw, 9rem) 0 !important; }
      .faq-inner { max-width: 1360px !important; margin: 0 auto !important; padding: 0 clamp(1.5rem, 5vw, 5rem) !important; display: grid !important; grid-template-columns: 300px 1fr !important; gap: clamp(3rem, 6vw, 8rem) !important; align-items: start !important; }
      .faq-aside { position: sticky !important; top: 6rem !important; align-self: start !important; }
      .faq-eyebrow { font-family: 'Space Mono', monospace !important; font-size: 0.65rem !important; letter-spacing: 0.14em !important; text-transform: uppercase !important; color: #0047E1 !important; margin-bottom: 1rem !important; font-weight: 700 !important; }
      .faq-h2 { font-family: 'Michroma', sans-serif !important; font-size: clamp(1.6rem, 2.8vw, 2.2rem) !important; font-weight: 700 !important; color: #080808 !important; letter-spacing: 0.02em !important; line-height: 1.2 !important; margin-bottom: 1.5rem !important; }
      .faq-sub { font-family: 'DM Sans', sans-serif !important; font-size: 0.85rem !important; font-weight: 300 !important; color: #555555 !important; line-height: 1.7 !important; margin-bottom: 2rem !important; }
      .faq-cta-link, .faq-cta-link * { font-family: 'Space Mono', monospace !important; font-size: 0.75rem !important; font-weight: 700 !important; color: #FFFFFF !important; background: #0047E1 !important; padding: 0.75rem 1.5rem !important; border-radius: 4px !important; text-transform: uppercase !important; text-decoration: none !important; display: inline-flex !important; align-items: center !important; gap: 0.5rem !important; letter-spacing: 0.08em !important; transition: all 0.2s ease !important; stroke: #FFFFFF !important; }
      .faq-cta-link:hover, .faq-cta-link:hover * { color: #FFFFFF !important; background: #002DB3 !important; stroke: #FFFFFF !important; }
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
        <div class="faq-eyebrow" data-customizer="srv_faq_eyebrow"><span style="color:#0047E1;font-weight:800;font-size:0.85rem;margin-right:2px;">//</span> <?php echo esc_html(cr8v_mod('srv_faq_eyebrow', 'COMMON QUESTIONS')); ?></div>
        <h2 class="faq-h2" data-customizer="srv_faq_h2"><?php echo esc_html(cr8v_mod('srv_faq_h2', 'Questions, Answered Honestly')); ?></h2>
        <p class="faq-sub" data-customizer="srv_faq_sub"><?php echo wp_kses_post(cr8v_mod('srv_faq_sub', 'Clear answers to common questions about our design, development, and marketing processes.')); ?></p>
        <a href="<?php echo esc_url(home_url(cr8v_mod('srv_faq_cta_url', '/discovery-call/'))); ?>" class="faq-cta-link" data-customizer="srv_faq_cta_text"><?php echo esc_html(cr8v_mod('srv_faq_cta_text', 'Talk to us')); ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>

      <ul class="faq-list" id="srv-faq-list">
        <li class="faq-item is-open">
          <button class="faq-trigger" aria-expanded="true">
            <span class="faq-q" data-customizer="srv_faq1_q"><?php echo esc_html(cr8v_mod('srv_faq1_q', 'How much does it cost to build a professional website?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body" style="grid-template-rows: 1fr;">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq1_a"><?php echo wp_kses_post(cr8v_mod('srv_faq1_a', 'Our custom builds start from $1,200 for single-page setups and scale depending on the platform, page count, and feature complexity. We evaluate your scope beforehand to give a firm starting price estimate that matches exactly what you need without hidden fees.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq2_q"><?php echo esc_html(cr8v_mod('srv_faq2_q', 'How long does it take to design and build a website?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq2_a"><?php echo wp_kses_post(cr8v_mod('srv_faq2_a', 'A standard landing page or simple build takes 2 to 3 weeks. Custom portals, high-end e-commerce configurations, or AI MVP builds typically span 4 to 8 weeks. We define clear milestones and release live progress links during each stage so you always know the exact status.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq3_q"><?php echo esc_html(cr8v_mod('srv_faq3_q', 'What web design and development services do you offer?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq3_a"><?php echo wp_kses_post(cr8v_mod('srv_faq3_a', 'We build custom WordPress sites (no-code Gutenberg or custom code blocks), custom Shopify themes, WooCommerce stores, custom PHP/JS applications, and AI MVP prototypes. We also provide brand identity guidelines, technical SEO Audits, and digital marketing retainer setups.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq4_q"><?php echo esc_html(cr8v_mod('srv_faq4_q', 'Do you build websites on WordPress, Shopify, or both?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq4_a"><?php echo wp_kses_post(cr8v_mod('srv_faq4_a', 'We build on both depending on your operational goals. If you need complete design control, hosting ownership, and low long-term software overhead, we build on WordPress (or WooCommerce). If you want hands-off hosted infrastructure, speed of deployment, and a simpler backend out of the box, we build on Shopify using custom Liquid templates.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq5_q"><?php echo esc_html(cr8v_mod('srv_faq5_q', 'Which payment gateways do you integrate into websites?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq5_a"><?php echo wp_kses_post(cr8v_mod('srv_faq5_a', 'We support and integrate all major international and regional payment processors, including Stripe, PayPal, Lemon Squeezy, Paystack, and Flutterwave. The integrations are wired natively at the code level to guarantee clean, secure user experiences.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq6_q"><?php echo esc_html(cr8v_mod('srv_faq6_q', 'Can you redesign or rebuild an existing website?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq6_a"><?php echo wp_kses_post(cr8v_mod('srv_faq6_a', 'Yes. We handle structural migrations and design revamps. We preserve your existing content, customer data, and SEO indexing structures through mapping and redirects so your traffic does not drop upon rebuilding.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq7_q"><?php echo esc_html(cr8v_mod('srv_faq7_q', 'Do you offer SEO as part of the website build?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq7_a"><?php echo wp_kses_post(cr8v_mod('srv_faq7_a', 'Yes. Every project includes basic technical SEO setup: schema mapping, canonical URL structures, semantic coding, sitemap submission, and fast loading performance. We also offer advanced SEO strategy packages covering content strategy and keyword alignment.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq8_q"><?php echo esc_html(cr8v_mod('srv_faq8_q', 'What ongoing support do you offer after a website goes live?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq8_a"><?php echo wp_kses_post(cr8v_mod('srv_faq8_a', 'Every build includes a 30-day post-launch warranty cover window to fix unexpected code issues. Afterward, you can sign up for our monthly Growth Retainer ($950/mo) for dedicated developer hours, technical maintenance, updates, SEO execution, and active copy support.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq9_q"><?php echo esc_html(cr8v_mod('srv_faq9_q', 'Do you work with early-stage startups and new businesses?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq9_a"><?php echo wp_kses_post(cr8v_mod('srv_faq9_a', 'Some of our best work has been with fresh startups that need help articulating what they\'re building before they go to market. If you\'ve got a business or product and need to explain it clearly to customers, investors, or partners, we can help.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq10_q"><?php echo esc_html(cr8v_mod('srv_faq10_q', 'How much does it cost to work with Cr8v Stacks?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq10_a"><?php echo wp_kses_post(cr8v_mod('srv_faq10_a', 'We scope projects individually after learning about your specific requirements and goals, with fixed-scope engagements starting from $1,200. Alternatively, you can engage with us on a Growth Retainer basis starting at $950/month for dedicated design, development, and active growth support.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq11_q"><?php echo esc_html(cr8v_mod('srv_faq11_q', 'What makes our approach different?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq11_a"><?php echo wp_kses_post(cr8v_mod('srv_faq11_a', 'Everything we do comes back to one thing: clarity of communication. We distill complex products and brands down to their essence — what they do, why it matters, and how they help. No jargon, no fluff, just clean, impactful execution.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq12_q"><?php echo esc_html(cr8v_mod('srv_faq12_q', 'What do we think about AI?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq12_a"><?php echo wp_kses_post(cr8v_mod('srv_faq12_a', 'It\'s cool (environmental and ethical issues nonwithstanding). However, it is not a replacement for raw human craftsmanship — it\'s not better than us, but in some instances it helps us work more efficiently and do better work. And if one day it is better than us, we\'ll close up shop.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq13_q"><?php echo esc_html(cr8v_mod('srv_faq13_q', 'Why should I hire Cr8v Stacks over freelancers?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq13_a"><?php echo wp_kses_post(cr8v_mod('srv_faq13_a', 'Freelancers can obviously be great, especially for specific tasks. However, an agency like Cr8v Stacks gives you a full team with diverse expertise — strategy, design, development, and project management — all collaborating under one system. You get consistent availability, quality control, and the capacity to scale quickly. With freelancers, you\'re often coordinating multiple people yourself, which can slow things down and create gaps in accountability.')); ?></p>
            </div>
          </div>
        </li>

        <li class="faq-item">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-q" data-customizer="srv_faq14_q"><?php echo esc_html(cr8v_mod('srv_faq14_q', 'What does "Cr8v Stacks" mean?')); ?></span>
            <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          </button>
          <div class="faq-body">
            <div class="faq-body-inner">
              <p class="faq-a" data-customizer="srv_faq14_a"><?php echo wp_kses_post(cr8v_mod('srv_faq14_a', 'We believe design and engineering should never be separated. "Cr8v" represents our focus on high-fidelity user experience and clear storytelling, while "Stacks" represents our deep technical expertise in full-stack architecture and clean code. Together, it means we build digital products that look stunning and perform flawlessly.')); ?></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <script>
  (function(){
    var list = document.getElementById('srv-faq-list');
    if(!list) return;
    list.addEventListener('click', function(e){
      var trigger = e.target.closest('.faq-trigger');
      if(!trigger) return;
      var item = trigger.closest('.faq-item');
      var isOpen = item.classList.contains('is-open');
      list.querySelectorAll('.faq-item.is-open').forEach(function(el){
        el.classList.remove('is-open');
        var trg = el.querySelector('.faq-trigger');
        if (trg) trg.setAttribute('aria-expanded','false');
      });
      if(!isOpen){
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded','true');
      }
    });
  })();
  </script>

  <!-- WooCommerce vs Shopify (matrix) -->
  <div class="c8srv-vs">
    <div class="c8srv-label c8srv-reveal" data-customizer="srv_vs_label"><?php echo esc_html(cr8v_mod('srv_vs_label', 'Choosing Your Platform')); ?></div>
    <h2 class="c8srv-section-title c8srv-reveal" data-customizer="srv_vs_h2"><?php echo esc_html(cr8v_mod('srv_vs_h2', 'WooCommerce or Shopify?')); ?></h2>
    <p class="c8srv-lead c8srv-reveal" data-customizer="srv_vs_desc"><?php echo wp_kses_post(cr8v_mod('srv_vs_desc', 'Both are excellent platforms. The right one depends on what you\'re optimizing for — pick a priority and we\'ll highlight what matters most.')); ?></p>

    <div class="c8srv-vs-priority-row" data-c8srv-priority-row>
      <button type="button" class="c8srv-vs-priority-btn" data-c8srv-priority="speed" data-customizer="srv_vs_btn1"><?php echo esc_html(cr8v_mod('srv_vs_btn1', 'Speed to Launch')); ?></button>
      <button type="button" class="c8srv-vs-priority-btn" data-c8srv-priority="customization" data-customizer="srv_vs_btn2"><?php echo esc_html(cr8v_mod('srv_vs_btn2', 'Full Customization')); ?></button>
      <button type="button" class="c8srv-vs-priority-btn" data-c8srv-priority="cost" data-customizer="srv_vs_btn3"><?php echo esc_html(cr8v_mod('srv_vs_btn3', 'Lower Ongoing Cost')); ?></button>
      <button type="button" class="c8srv-vs-priority-btn" data-c8srv-priority="scale" data-customizer="srv_vs_btn4"><?php echo esc_html(cr8v_mod('srv_vs_btn4', 'Enterprise Scale')); ?></button>
    </div>

    <div class="c8srv-vs-table-wrap">
      <table class="c8srv-vs-table">
        <thead>
          <tr>
            <th data-customizer="srv_vs_th1"><?php echo esc_html(cr8v_mod('srv_vs_th1', 'Criteria')); ?></th>
            <th data-customizer="srv_vs_th2"><?php echo esc_html(cr8v_mod('srv_vs_th2', 'Shopify')); ?></th>
            <th data-customizer="srv_vs_th3"><?php echo esc_html(cr8v_mod('srv_vs_th3', 'WooCommerce')); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr data-c8srv-row data-c8srv-tags="speed">
            <td data-customizer="srv_vs_r1_c1"><?php echo esc_html(cr8v_mod('srv_vs_r1_c1', 'Setup Speed')); ?></td>
            <td data-customizer="srv_vs_r1_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r1_c2', 'Hosted infrastructure means fewer moving parts to configure before launch.<span class="c8srv-vs-winner">Faster to launch</span>')); ?></td>
            <td data-customizer="srv_vs_r1_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r1_c3', 'Requires hosting, security, and plugin setup before you\'re live.')); ?></td>
          </tr>
          <tr data-c8srv-row data-c8srv-tags="customization">
            <td data-customizer="srv_vs_r2_c1"><?php echo esc_html(cr8v_mod('srv_vs_r2_c1', 'Customization Depth')); ?></td>
            <td data-customizer="srv_vs_r2_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r2_c2', 'Theme and app-level customization within Shopify\'s platform rules.')); ?></td>
            <td data-customizer="srv_vs_r2_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r2_c3', 'Full code access — no ceiling on how deep you can customize.<span class="c8srv-vs-winner">Deepest control</span>')); ?></td>
          </tr>
          <tr data-c8srv-row data-c8srv-tags="customization cost">
            <td data-customizer="srv_vs_r3_c1"><?php echo esc_html(cr8v_mod('srv_vs_r3_c1', 'Hosting & Data Control')); ?></td>
            <td data-customizer="srv_vs_r3_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r3_c2', 'Hosted by Shopify — simple, but your store lives on their infrastructure.')); ?></td>
            <td data-customizer="srv_vs_r3_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r3_c3', 'Self-hosted on infrastructure you choose and fully own.<span class="c8srv-vs-winner">Full ownership</span>')); ?></td>
          </tr>
          <tr data-c8srv-row data-c8srv-tags="cost">
            <td data-customizer="srv_vs_r4_c1"><?php echo esc_html(cr8v_mod('srv_vs_r4_c1', 'Ongoing Platform Cost')); ?></td>
            <td data-customizer="srv_vs_r4_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r4_c2', 'Predictable monthly plan; costs scale with add-on apps.')); ?></td>
            <td data-customizer="srv_vs_r4_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r4_c3', 'No platform fee — costs come from hosting and plugins instead.')); ?></td>
          </tr>
          <tr data-c8srv-row data-c8srv-tags="speed scale">
            <td data-customizer="srv_vs_r5_c1"><?php echo esc_html(cr8v_mod('srv_vs_r5_c1', 'App & Plugin Ecosystem')); ?></td>
            <td data-customizer="srv_vs_r5_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r5_c2', 'Large, polished app store with consistent quality standards.<span class="c8srv-vs-winner">Most mature</span>')); ?></td>
            <td data-customizer="srv_vs_r5_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r5_c3', 'Massive plugin library, with more variance in code quality.')); ?></td>
          </tr>
          <tr data-c8srv-row data-c8srv-tags="scale">
            <td data-customizer="srv_vs_r6_c1"><?php echo esc_html(cr8v_mod('srv_vs_r6_c1', 'Enterprise Scalability')); ?></td>
            <td data-customizer="srv_vs_r6_c2"><?php echo wp_kses_post(cr8v_mod('srv_vs_r6_c2', 'Shopify Plus supports high-volume, multi-storefront operations.')); ?></td>
            <td data-customizer="srv_vs_r6_c3"><?php echo wp_kses_post(cr8v_mod('srv_vs_r6_c3', 'Scales fully custom — the ceiling is whatever we build to.')); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="c8srv-vs-note" data-customizer="srv_vs_note"><?php echo wp_kses_post(cr8v_mod('srv_vs_note', 'Both platforms are genuinely solid choices — the table above highlights trade-offs, not a verdict. We\'ll help you land on the right one during a positioning audit.')); ?></div>
  </div>

</div>

<script>
(function () {
  var root = document.currentScript ? document.currentScript.closest('.c8srv-root') : document.querySelector('.c8srv-root');
  if (!root || root.getAttribute('data-c8srv-init') === '1') return;
  root.setAttribute('data-c8srv-init', '1');

  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

  /* Reveal on scroll */
  var revealEls = root.querySelectorAll('.c8srv-reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* Hero atmosphere glow tracking */
  var atmos = root.querySelector('[data-c8srv-atmos]');
  var glow = root.querySelector('[data-c8srv-glow]');
  if (atmos && glow && canHover && !reduceMotion) {
    atmos.addEventListener('mousemove', function (e) {
      var rect = atmos.getBoundingClientRect();
      glow.style.transform = 'translate(' + (e.clientX - rect.left) + 'px,' + (e.clientY - rect.top) + 'px) translate(-50%,-50%)';
    });
    atmos.addEventListener('mouseenter', function () { atmos.classList.add('is-active'); });
    atmos.addEventListener('mouseleave', function () { atmos.classList.remove('is-active'); });
  }

  /* ---- Showcase Tab Navigation (Primary Service // 01) ---- */
  var navItems = root.querySelectorAll('[data-c8srv-nav]');
  var cards = root.querySelectorAll('.c8srv-showcase-card');
  if (navItems.length && cards.length) {
    if ('IntersectionObserver' in window && !reduceMotion) {
      var observerOptions = {
        root: null,
        rootMargin: '-30% 0px -50% 0px',
        threshold: 0
      };
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var idx = parseInt(entry.target.getAttribute('data-c8srv-card'));
            navItems.forEach(function (btn) { btn.classList.remove('is-active'); });
            var activeNav = root.querySelector('[data-c8srv-nav="' + idx + '"]');
            if (activeNav) activeNav.classList.add('is-active');
          }
        });
      }, observerOptions);
      cards.forEach(function (card) { observer.observe(card); });

      navItems.forEach(function (btn) {
        btn.addEventListener('click', function () {
          var idx = parseInt(btn.getAttribute('data-c8srv-nav'));
          var targetCard = root.querySelector('.c8srv-showcase-card[data-c8srv-card="' + idx + '"]');
          if (targetCard) {
            var isMobile = window.innerWidth < 769;
            var targetStickyTop = isMobile ? 80 : (100 + idx * 25);
            var offset = (targetCard.getBoundingClientRect().top + window.scrollY) - targetStickyTop - 10;
            window.scrollTo({ top: offset, behavior: 'smooth' });
          }
        });
      });
    }
  }

  /* ---- Shared "stack" mechanic: cards start stacked/rotated, un-stack into
     final position as the container ratio increases, reversible both ways ---- */
  function setupScrollStack(container, stack_cards, getTransform) {
    if (!container || !stack_cards.length) return;
    if (reduceMotion) {
      stack_cards.forEach(function (card, i) {
        card.style.transform = 'none';
        card.style.filter = 'none';
      });
      return;
    }
    
    function checkScroll() {
      var rect = container.getBoundingClientRect();
      var viewHeight = window.innerHeight;
      var totalScrollable = rect.height - viewHeight;
      if (totalScrollable <= 0) return;
      var progress = -rect.top / totalScrollable;
      var t = Math.min(1, Math.max(0, progress));
      
      stack_cards.forEach(function (card, i) {
        card.style.transform = getTransform(i, t);
      });
    }
    
    window.addEventListener('scroll', checkScroll);
    window.addEventListener('resize', checkScroll);
    checkScroll();
  }

  /* Showcase cards stacking scale animation */
  var showcaseCards = root.querySelectorAll('.c8srv-showcase-card');
  if (showcaseCards.length) {
    function updateShowcaseStack() {
      if (reduceMotion) {
        showcaseCards.forEach(function (card) {
          card.style.transform = 'none';
          card.style.filter = 'none';
        });
        return;
      }
      showcaseCards.forEach(function (card, i) {
        var rect = card.getBoundingClientRect();
        var isMobile = window.innerWidth < 769;
        var stickyTop = isMobile ? 81 : (100 + i * 25);
        var checkLimit = isMobile ? 85 : (stickyTop + 5);
        if (rect.top <= checkLimit) {
          var nextCardsStacked = 0;
          for (var j = i + 1; j < showcaseCards.length; j++) {
            var nextRect = showcaseCards[j].getBoundingClientRect();
            var nextStickyTop = isMobile ? 81 : (100 + j * 25);
            if (nextRect.top <= nextStickyTop + 5) {
              nextCardsStacked++;
            }
          }
          var targetScale = 1 - (nextCardsStacked * 0.03);
          var targetTranslateY = nextCardsStacked * -8;
          card.style.transform = 'scale(' + targetScale + ') translate3d(0, ' + targetTranslateY + 'px, 0)';
          card.style.filter = 'brightness(' + (1 - (nextCardsStacked * 0.05)) + ')';
        } else {
          card.style.transform = 'none';
          card.style.filter = 'none';
        }
      });
    }
    window.addEventListener('scroll', updateShowcaseStack);
    window.addEventListener('resize', updateShowcaseStack);
    updateShowcaseStack();
  }

  /* Robust Folder Deck stacking animation */
  var folderDeck = root.querySelector('.c8srv-folder-deck');
  var folderCards = root.querySelectorAll('.c8srv-folder-card');
  if (folderDeck && folderCards.length) {
    function updateFolderStack() {
      if (reduceMotion) {
        folderCards.forEach(function (card) {
          card.style.transform = 'none';
          card.style.filter = 'none';
        });
        return;
      }
      folderCards.forEach(function (card, i) {
        var rect = card.getBoundingClientRect();
        var isMobile = window.innerWidth < 900;
        var limit = isMobile ? 101 : 131;
        var checkLimit = isMobile ? 105 : 135;
        if (rect.top <= limit) {
          var nextCardsStacked = 0;
          for (var j = i + 1; j < folderCards.length; j++) {
            var nextRect = folderCards[j].getBoundingClientRect();
            var nextLimit = isMobile ? 101 : 135;
            if (nextRect.top <= nextLimit) {
              nextCardsStacked++;
            }
          }
          var targetScale = 1 - (nextCardsStacked * 0.03);
          var targetTranslateY = nextCardsStacked * -8;
          card.style.transform = 'scale(' + targetScale + ') translate3d(0, ' + targetTranslateY + 'px, 0)';
          card.style.filter = 'brightness(' + (1 - (nextCardsStacked * 0.05)) + ')';
        } else {
          card.style.transform = 'none';
          card.style.filter = 'none';
        }
      });
    }
    window.addEventListener('scroll', updateFolderStack);
    window.addEventListener('resize', updateFolderStack);
    updateFolderStack();
  }

  /* ---- Cursor following 3-fan layout without images ---- */
  var hoverlist = root.querySelector('[data-c8srv-hoverlist]');
  var preview = root.querySelector('[data-c8srv-preview]');
  
  if (hoverlist && preview && canHover && !reduceMotion) {
    var hoverItems = hoverlist.querySelectorAll('.c8srv-hoverlist-item');
    
    hoverlist.addEventListener('mousemove', function (e) {
      var rect = hoverlist.getBoundingClientRect();
      var x = e.clientX - rect.left;
      var y = e.clientY - rect.top;
      preview.style.left = x + 'px';
      preview.style.top = y + 'px';
    });
    
    hoverlist.addEventListener('mouseenter', function () {
      preview.classList.add('is-active');
    });
    
    hoverlist.addEventListener('mouseleave', function () {
      preview.classList.remove('is-active');
    });
    
    hoverItems.forEach(function (item) {
      item.addEventListener('mouseenter', function () {
        var s1 = item.getAttribute('data-s1') || '';
        var s2 = item.getAttribute('data-s2') || '';
        var s3 = item.getAttribute('data-s3') || '';
        var wL = preview.querySelector('[data-c8srv-fan-pos="left"]');
        var wC = preview.querySelector('[data-c8srv-fan-pos="center"]');
        var wR = preview.querySelector('[data-c8srv-fan-pos="right"]');
        if (wL) wL.textContent = s1;
        if (wC) wC.textContent = s2;
        if (wR) wR.textContent = s3;
      });
    });
  }

    /* ---- Why It Works: Flanking Cards animation (IntersectionObserver) ---- */
    var flankContainer = root.querySelector('[data-c8srv-flank-trigger]');
    var flankLeft = root.querySelector('[data-c8srv-flank-left]');
    var flankRight = root.querySelector('[data-c8srv-flank-right]');
    if (flankContainer && flankLeft && flankRight && !reduceMotion) {
      var isMobile = window.innerWidth < 769;
      var spreadX = isMobile ? 90 : 320;
      var scaleVal = isMobile ? 0.94 : 0.92;
      var rotDeg = isMobile ? 5 : 8;

      function revealFlank() {
        flankLeft.style.transition = 'transform 0.65s cubic-bezier(.16,1,.3,1), opacity 0.5s ease';
        flankRight.style.transition = 'transform 0.65s cubic-bezier(.16,1,.3,1), opacity 0.5s ease';
        if (isMobile) {
          flankLeft.style.transform = 'translate3d(0, 0, 0) scale(1) rotate(0deg)';
          flankLeft.style.opacity = '1';
          flankLeft.style.pointerEvents = 'auto';
          flankRight.style.transform = 'translate3d(0, 0, 0) scale(1) rotate(0deg)';
          flankRight.style.opacity = '1';
          flankRight.style.pointerEvents = 'auto';
        } else {
          flankLeft.style.transform = 'translate3d(' + (-spreadX) + 'px, 0, 0) scale(' + scaleVal + ') rotate(' + (-rotDeg) + 'deg)';
          flankLeft.style.opacity = '1';
          flankLeft.style.pointerEvents = 'auto';
          flankRight.style.transform = 'translate3d(' + spreadX + 'px, 0, 0) scale(' + scaleVal + ') rotate(' + rotDeg + 'deg)';
          flankRight.style.opacity = '1';
          flankRight.style.pointerEvents = 'auto';
        }
      }
      function hideFlank() {
        flankLeft.style.transition = 'transform 0.45s cubic-bezier(.16,1,.3,1), opacity 0.35s ease';
        flankRight.style.transition = 'transform 0.45s cubic-bezier(.16,1,.3,1), opacity 0.35s ease';
        if (isMobile) {
          flankLeft.style.transform = 'translate3d(-90px, 20px, 0) scale(0.92) rotate(-6deg)';
          flankLeft.style.opacity = '0';
          flankLeft.style.pointerEvents = 'none';
          flankRight.style.transform = 'translate3d(90px, 20px, 0) scale(0.92) rotate(6deg)';
          flankRight.style.opacity = '0';
          flankRight.style.pointerEvents = 'none';
        } else {
          flankLeft.style.transform = 'translate3d(0, 15px, 0) scale(0.9)';
          flankLeft.style.opacity = '0';
          flankLeft.style.pointerEvents = 'none';
          flankRight.style.transform = 'translate3d(0, 15px, 0) scale(0.9)';
          flankRight.style.opacity = '0';
          flankRight.style.pointerEvents = 'none';
        }
      }
      if ('IntersectionObserver' in window) {
        var flankObs = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) { revealFlank(); } else { hideFlank(); }
          });
        }, { threshold: isMobile ? 0.2 : 0.45 });
        flankObs.observe(flankContainer);
      }
    }

  /* ---- Project Scope Estimator Calculator Widget ---- */
  var estRange = root.querySelector('#est-range-display') || root.querySelector('[data-est-range]');
  var estList = root.querySelector('#est-deliverables-list') || root.querySelector('[data-est-list]');
  var estCta = root.querySelector('#est-cta-link');
  var estChoices = root.querySelectorAll('.c8srv-est-choice');

  var estimatorData = {
    wordpress: {
      price: 1200,
      deliverables: ["Custom theme build & setup", "Lightweight, high-speed asset architecture", "Up to 5 editable layout pages"]
    },
    shopify: {
      price: 1800,
      deliverables: ["Custom Liquid storefront coding", "Cart drawer & upsell conversions built-in", "App-free speed performance tuning"]
    },
    custom: {
      price: 2500,
      deliverables: ["Custom PHP/JS/React framework engineering", "Third-party APIs and custom database queries", "Client dashboard whitelabel panel"]
    },
    aimvp: {
      price: 3500,
      deliverables: ["AI LLM fine-tuning & prompt layer setup", "Brave Search fact-checking API integration", "Immediate working MVP launch in 3 weeks"]
    }
  };
  
  var estimatorAddons = {
    none: { price: 0, deliverables: [] },
    seo: { price: 600, deliverables: ["High-intent keyword matrix mapping", "Technical speed & schema SEO markup setup"] },
    marketing: { price: 950, deliverables: ["Complete email marketing workflow setup", "High-conversion ad-campaign funnel wiring"] }
  };

  function calculateEstimate() {
    if (!estRange || !estList || !estCta) return;
    
    var platformBtn = root.querySelector('[data-est-group="platform"] .c8srv-est-choice.is-active');
    var scaleBtn = root.querySelector('[data-est-group="scale"] .c8srv-est-choice.is-active');
    var growthBtn = root.querySelector('[data-est-group="growth"] .c8srv-est-choice.is-active');
    
    if (!platformBtn || !scaleBtn || !growthBtn) return;
    
    var platform = platformBtn.getAttribute('data-est-val');
    var scale = scaleBtn.getAttribute('data-est-val');
    var growth = growthBtn.getAttribute('data-est-val');
    
    var basePrice = estimatorData[platform].price;
    var scaleMult = parseFloat(scaleBtn.getAttribute('data-est-multiplier'));
    var growthPrice = estimatorAddons[growth].price;
    
    var calculatedStart = Math.round(basePrice * scaleMult + growthPrice);
    var calculatedEnd = Math.round(calculatedStart * 1.25);
    
    estRange.textContent = "$" + calculatedStart.toLocaleString() + " - $" + calculatedEnd.toLocaleString();
    
    estList.innerHTML = "";
    
    estimatorData[platform].deliverables.forEach(function (d) {
      var item = document.createElement('div');
      item.className = 'c8srv-est-item';
      item.innerHTML = '<span>→</span>' + d;
      estList.appendChild(item);
    });
    
    var scaleText = scaleBtn.textContent.trim();
    var scaleItem = document.createElement('div');
    scaleItem.className = 'c8srv-est-item';
    scaleItem.innerHTML = '<span>→</span>Scope: ' + scaleText;
    estList.appendChild(scaleItem);
    
    estimatorAddons[growth].deliverables.forEach(function (d) {
      var item = document.createElement('div');
      item.className = 'c8srv-est-item';
      item.innerHTML = '<span>→</span>' + d;
      estList.appendChild(item);
    });
    
    var query = "?platform=" + platform + "&scale=" + scale + "&growth=" + growth + "&est=" + calculatedStart + "-" + calculatedEnd;
    estCta.href = "https://cr8vstacks.com/contact/" + encodeURI(query);
  }
  
  if (estChoices.length) {
    estChoices.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var group = btn.closest('[data-est-group]');
        group.querySelectorAll('.c8srv-est-choice').forEach(function (b) { b.classList.remove('is-active'); });
        btn.classList.add('is-active');
        calculateEstimate();
      });
    });
    calculateEstimate();
  }

  /* Accordion FAQ Toggle Fix */
  var accordionHeads = root.querySelectorAll('[data-c8srv-accordion-head]');
  accordionHeads.forEach(function (head) {
    head.addEventListener('click', function () {
      var item = head.closest('.c8srv-accordion-item');
      var body = item.querySelector('.c8srv-accordion-body');
      var wasOpen = item.classList.contains('is-open');
      root.querySelectorAll('.c8srv-accordion-item').forEach(function (i) {
        i.classList.remove('is-open');
        var b = i.querySelector('.c8srv-accordion-body');
        if (b) b.style.gridTemplateRows = '0fr';
      });
      if (!wasOpen && body) {
        item.classList.add('is-open');
        body.style.gridTemplateRows = '1fr';
      }
    });
  });

  /* Live Matrix Text Scramble Script */
  var srvMatrixButtons = root.querySelectorAll('.c8-btn-primary, .c8srv-price-btn, .c8srv-explore, .c8isv-explore, .c8isv-btn-ghost, .c8srv-btn-ghost, .faq-cta-link, .c8srv-vs-priority-btn, .c8isv-related-card-link, .c8srv-related-card-link');
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
</div>

<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/shared-folder-stack.js'); ?>"></script>
</main>

<?php get_footer(); ?>
