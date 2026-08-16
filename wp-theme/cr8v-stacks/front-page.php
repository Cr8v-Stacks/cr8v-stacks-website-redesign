<?php
/**
 * CR8V Stacks — front-page.php
 * Tropos Theme Homepage (100% full design fidelity from home-b.html)
 * Customizer editable: WP Admin → Appearance → Customize → Homepage
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- 3D TETRIS HERO CALIBRATED SYSTEM STYLING -->
  <style>
/* 3D TETRIS HERO DIRECT DOM STYLING */

    :root {
      /* Studio-Grade Palette Extracted Directly From Master Prompt */
      --block-obsidian: #141414;      /* OpenAI, Shopify, Claude */
      --block-royal-blue: #0D52E0;    /* Custom Development, Next.js, AI MVP */
      --block-light-grey: #E5E4DE;    /* Web Design, WordPress */
      --block-purple: #5C32BD;        /* WooCommerce Purple Step/L Filler */
      --block-terracotta: #E85A1C;    /* Elementor */
      --block-golden-yellow: #EAB308;/* Golden Yellow L Filler */
      --block-forest-green: #1E7D34;  /* Figma */
      --block-lime-green: #6E9C26;    /* Structural Tetris Step/L Filler */
      --block-sand-beige: #D9C5A0;    /* Python Sand Beige */
      
      --c8-blue: #0047E1;
      --c8-ink: #080808;
      --c8-sub: #666666;
      
      --font-body: 'DM Sans', sans-serif;
      --font-heading: 'Michroma', sans-serif;
      --font-mono: 'Space Mono', monospace;
      
      --u: 56px;            /* Standardized 1x1 Tetris Module Scale */
      --block-radius: 0px;  /* ZERO CORNER RADIUS */
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #FAFAF7;
      color: var(--c8-ink);
      font-family: var(--font-body);
      line-height: 1.5;
      overflow-x: hidden;
    }

    /* Page Header */
    .catalog-header {
      max-width: 1240px;
      margin: 0 auto;
      padding: 2.5rem 1.5rem 1.5rem 1.5rem;
      text-align: center;
    }

    .catalog-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--c8-blue);
      letter-spacing: 0.16em;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
    }

    .catalog-h1 {
      font-family: var(--font-heading);
      font-size: 1.8rem;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      color: #111111;
    }

    .catalog-desc {
      color: var(--c8-sub);
      font-size: 0.95rem;
      max-width: 840px;
      margin: 0 auto;
    }

    /* Motion Controller Bar */
    .motion-controller {
      max-width: 1240px;
      margin: 0 auto 1.5rem auto;
      background: #FFFFFF;
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 40px;
      padding: 0.5rem;
      display: flex;
      justify-content: center;
      gap: 0.75rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    .state-btn {
      background: transparent;
      border: none;
      padding: 0.6rem 1.4rem;
      border-radius: 30px;
      font-family: var(--font-mono);
      font-size: 0.8rem;
      font-weight: 700;
      color: #555;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .state-btn.active {
      background: var(--c8-blue);
      color: #FFFFFF;
      box-shadow: 0 4px 14px rgba(0, 71, 225, 0.3);
    }

    /* Source of Truth Reference Box */
    .reference-box {
      max-width: 1240px;
      margin: 0 auto 2.5rem auto;
      background: #FFFFFF;
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 12px;
      padding: 1.25rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
      text-align: center;
    }

    .reference-box h2 {
      font-size: 0.8rem;
      font-family: var(--font-mono);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #666;
      margin-bottom: 0.75rem;
    }

    .reference-img {
      width: 100%;
      max-height: 360px;
      object-fit: contain;
      border-radius: 0px;
    }

    /* ════════════════════════════════════════════════════════════════
       3D TETRIS PUZZLE ENGINE (MASTER Z-INDEX & PRONOUNCED BLOCK SEPARATION)
       ════════════════════════════════════════════════════════════════ */

    .t-piece {
      display: inline-grid;
      position: relative;
      user-select: none;
      background: transparent !important; /* 100% TRANSPARENT CONTAINER BOUNDING */
      transition: transform 0.2s ease, filter 0.2s ease, opacity 0.3s ease;
      cursor: grab;
      touch-action: none;
    }

    /* ════════════════════════════════════════════════════════════════
       EXPLICIT MASTER Z-INDEX CHAIN (CUSTOM DEV, SHOPIFY & FIGMA ABOVE AI MVP, WORDPRESS & ELEMENTOR)
       ════════════════════════════════════════════════════════════════ */
    .t-piece[data-name="Purple WooCommerce L-Piece"]  { z-index: 20 !important; }
    .t-piece[data-name="Airborne Purple WooCommerce"] { z-index: 300 !important; }
    
    .t-piece[data-name="OpenAI"]                      { z-index: 30 !important; }
    .t-piece[data-name="Next.js"]                     { z-index: 40 !important; } /* Next.js (40) > OpenAI (30) */
    .t-piece[data-name="Airborne Next.js"]            { z-index: 350 !important; }
    
    /* MIDDLE/UPPER ROW BLOCKS HELD LOW AT Z-INDEX 50 */
    .t-piece[data-name="Web Design"]                  { z-index: 50 !important; }
    .t-piece[data-name="AI MVP"]                      { z-index: 50 !important; }
    .t-piece[data-name="Golden Yellow L"]             { z-index: 50 !important; }
    .t-piece[data-name="Airborne Golden Yellow L"]    { z-index: 300 !important; }
    .t-piece[data-name="WordPress"]                   { z-index: 50 !important; }
    .t-piece[data-name="Python"]                      { z-index: 50 !important; }
    .t-piece[data-name="Elementor"]                   { z-index: 50 !important; }
    
    /* CUSTOM DEV, SHOPIFY, FIGMA (BOTTOM FLOOR BLOCKS) SIT HIGH ABOVE AI MVP, WORDPRESS, ELEMENTOR */
    .t-piece[data-name="Custom Development"]         { z-index: 100 !important; } /* Custom Dev (100) > AI MVP, WP, Elementor (50) */
    .t-piece[data-name="Shopify"]                     { z-index: 110 !important; } /* Shopify (110) > Custom Dev (100) & AI MVP, WP, Elementor (50) */
    .t-piece[data-name="Figma"]                       { z-index: 120 !important; } /* Figma (120) > Shopify (110) & AI MVP, WP, Elementor (50) */
    
    .t-piece[data-name="Claude"]                      { z-index: 130 !important; }
    .t-piece[data-name="Lime Green Lemon Z"]          { z-index: 140 !important; }
    .t-piece[data-name="Airborne Lime Green Z"]       { z-index: 300 !important; }

    /* Tone-Specific Outer 3D Extrusions + Sharp Outer Boundary Separation (ZERO Internal Lines) */
    .t-piece.tone-obsidian {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.85))
        drop-shadow(3px 5px 0px #000000)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.35));
    }
    .t-piece.tone-royal-blue {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #062E8A)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.30));
    }
    .t-piece.tone-light-grey {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.65))
        drop-shadow(3px 5px 0px #A09F96)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.25));
    }
    .t-piece.tone-purple {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #381B7B)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.30));
    }
    .t-piece.tone-terracotta {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #9C3205)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.30));
    }
    .t-piece.tone-golden-yellow {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #8C6902)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.28));
    }
    .t-piece.tone-forest-green {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #0D481C)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.30));
    }
    .t-piece.tone-lime-green {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.75))
        drop-shadow(3px 5px 0px #3E5C12)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.30));
    }
    .t-piece.tone-sand-beige {
      filter: 
        drop-shadow(0 0 1px rgba(0, 0, 0, 0.65))
        drop-shadow(3px 5px 0px #85724E)
        drop-shadow(5px 14px 24px rgba(0, 0, 0, 0.25));
    }

    .t-shape-body {
      position: relative;
      width: 100%;
      height: 100%;
      border-radius: 0px !important;
      box-shadow: none !important; /* ZERO INTERNAL BOX LINES — 100% FLUSH UNBROKEN SURFACE */
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .t-piece.is-dragging {
      cursor: grabbing !important;
      z-index: 1000 !important;
      filter: drop-shadow(4px 14px 30px rgba(0, 71, 225, 0.45)) brightness(1.06) !important;
    }

    .t-piece.is-selected {
      outline: 2px dashed var(--c8-blue);
      outline-offset: 4px;
      border-radius: 0px;
    }

    /* Red Collision Alert Highlight */
    .t-piece.is-colliding {
      outline: 2px dashed #E53935 !important;
      outline-offset: 4px !important;
      filter: drop-shadow(0 0 20px rgba(229, 57, 53, 0.85)) brightness(1.1) !important;
    }

    /* Floating Handle Overlay Triggers */
    .t-handle {
      position: absolute;
      width: 26px;
      height: 26px;
      background: var(--c8-blue);
      color: #FFFFFF;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 71, 225, 0.4);
      z-index: 30;
      opacity: 0;
      transform: scale(0.8);
      transition: all 0.2s ease;
    }

    .t-piece:hover .t-handle,
    .t-piece.is-selected .t-handle {
      opacity: 1;
      transform: scale(1);
    }

    .t-handle:hover {
      background: #0030A0;
      transform: scale(1.18) !important;
    }

    .t-rotate-handle { top: -12px; right: -12px; }
    .t-fliph-handle  { top: -12px; left: -12px; }
    .t-flipv-handle  { bottom: -12px; left: -12px; }

    .t-cell {
      width: var(--u, 56px);
      height: var(--u, 56px);
      position: relative;
      box-sizing: border-box;
      background: transparent;
    }

    .t-shape-body {
      position: relative;
      width: 100%;
      height: 100%;
      border-radius: 0px !important;
      box-shadow: none !important; /* ZERO INTERNAL BOX LINES — 100% FLUSH UNBROKEN SURFACE */
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    /* High-Performance Hardware-Accelerated Tactile Noise Overlay */
    .t-shape-body::after {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
      opacity: 0.05;
      mix-blend-mode: overlay;
      pointer-events: none;
      z-index: 2;
    }

    /* Clean Seamless Color Tone Surfaces */
    .tone-obsidian { background: var(--block-obsidian); color: #FFFFFF; }
    .tone-royal-blue { background: var(--block-royal-blue); color: #FFFFFF; }
    .tone-light-grey { background: var(--block-light-grey); color: #111111; }
    .tone-purple { background: var(--block-purple); color: #FFFFFF; }
    .tone-terracotta { background: var(--block-terracotta); color: #FFFFFF; }
    .tone-golden-yellow { background: var(--block-golden-yellow); color: #111111; }
    .tone-forest-green { background: var(--block-forest-green); color: #FFFFFF; }
    .tone-lime-green { background: var(--block-lime-green); color: #FFFFFF; }
    .tone-sand-beige { background: var(--block-sand-beige); color: #111111; }

    /* Internal Seam Lines REMOVED */
    .t-seam-h, .t-seam-v {
      display: none !important;
    }

    /* Text & Logo Label Overlay */
    .t-label {
      position: absolute;
      z-index: 5;
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      white-space: nowrap;
      text-transform: uppercase;
      pointer-events: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 4px;
    }

    .t-cdn-logo {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }

    .t-cdn-logo.is-white {
      filter: brightness(0) invert(1);
    }

    /* Live Coordinate HUD Status Bar */
    .matrix-hud {
      max-width: 1320px;
      margin: -2.5rem auto 2rem auto;
      background: #141414;
      color: #FFFFFF;
      border-radius: 8px;
      padding: 0.65rem 1.25rem;
      font-family: var(--font-mono);
      font-size: 0.78rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .hud-title { color: #888888; text-transform: uppercase; letter-spacing: 0.08em; }
    .hud-status { color: #3D6BFF; font-weight: 700; }
    .hud-hint { color: #AAAAAA; font-size: 0.72rem; }

    /* ════════════════════════════════════════════════════════════════
       MAIN HERO SECTION PREVIEW (HERO TEXT + INTERLOCKING PUZZLE MATRIX)
       ════════════════════════════════════════════════════════════════ */
    .hero-arena-section {
      max-width: 1360px;
      margin: 0 auto 4rem auto;
      background: #FFFFFF;
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 16px;
      padding: 3rem 1.5rem;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.05);
      position: relative;
      overflow: hidden;
    }

    .hero-arena-container {
      width: 100%;
      height: 680px;
      background: #FAFAF7;
      border-radius: 12px;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(0,0,0,0.06);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }

    /* Embedded Hero Written Content Overlay (Upper-Center Space) */
    .hero-content-overlay {
      position: absolute;
      top: 2.25rem;
      left: 50%;
      transform: translateX(-50%);
      width: 100%;
      max-width: 820px;
      text-align: center;
      z-index: 20;
      padding: 0 1.5rem;
      pointer-events: none;
    }

    .hero-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--c8-blue);
      margin-bottom: 0.75rem;
    }

    .hero-h1 {
      font-family: var(--font-heading);
      font-size: clamp(1.6rem, 3.2vw, 2.6rem);
      font-weight: 700;
      line-height: 1.2;
      text-transform: uppercase;
      color: var(--c8-ink);
      margin-bottom: 0.85rem;
    }

    .hero-sub {
      font-family: var(--font-body);
      font-size: 0.95rem;
      color: #4A4A4A;
      max-width: 640px;
      margin: 0 auto 1.25rem auto;
      line-height: 1.6;
    }

    .hero-ctas {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      pointer-events: auto;
    }

    .btn-primary-c8 {
      background: var(--c8-blue);
      color: #FFFFFF;
      font-family: var(--font-mono);
      font-size: 0.82rem;
      font-weight: 700;
      padding: 0.75rem 1.75rem;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.25s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-primary-c8:hover {
      background: #0038C0;
      transform: translateY(-2px);
    }

    .btn-secondary-c8 {
      background: #FFFFFF;
      color: var(--c8-ink);
      border: 1px solid rgba(8, 8, 8, 0.15);
      font-family: var(--font-mono);
      font-size: 0.82rem;
      font-weight: 700;
      padding: 0.75rem 1.75rem;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.25s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-secondary-c8:hover {
      border-color: var(--c8-blue);
      color: var(--c8-blue);
      transform: translateY(-2px);
    }

    /* 2D Matrix Floor Arena (17 cols x 7 rows - Exact Screenshot Matrix) */
    .matrix-floor-wrapper {
      width: 100%;
      position: absolute;
      bottom: 0; left: 0; right: 0;
      display: flex;
      justify-content: center;
      z-index: 500 !important; /* Elevated above airborne-layer so OpenAI, Shopify, Figma stack on top */
    }

    .matrix-arena {
      display: grid;
      grid-template-columns: repeat(17, var(--u, 56px));
      grid-template-rows: repeat(7, var(--u, 56px));
      gap: 0;
      position: relative;
    }

    /* Airborne Layer at 70% In-Motion Mode */
    .airborne-layer {
      position: absolute;
      inset: 0;
      pointer-events: none;
      z-index: 10 !important; /* Placed below floor wrapper so OpenAI & Shopify sit on top */
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .airborne-layer .t-piece {
      pointer-events: auto;
    }

    /* State A Airborne Floating Coordinates */
    .air-wp-purple   { position: absolute; left: 30px;  top: 40px;  transform: rotate(-10deg); }
    .air-nextjs      { position: absolute; left: 180px; top: 180px; transform: rotate(-16deg); z-index: 600 !important; }
    .air-green-z     { position: absolute; right: 100px; top: 30px;  transform: rotate(12deg); }
    .air-amber-l     { position: absolute; right: 30px;  top: 190px; transform: rotate(22deg); }

    /* ════════════════════════════════════════════════════════════════
       EXACT MASTER PROMPT DUAL-STATE RULES
       ════════════════════════════════════════════════════════════════ */
    body.mode-70 .docked-socket {
      opacity: 0 !important;
      transform: translateY(-80px) scale(0.9) !important;
      pointer-events: none !important;
    }

    body.mode-70 .airborne-layer {
      display: block !important;
      opacity: 1 !important;
      pointer-events: auto !important;
    }

    body.mode-100 .airborne-layer {
      display: block !important;
      opacity: 0 !important;
      pointer-events: none !important;
      transition: opacity 0.3s ease;
    }

    body.mode-100 .docked-socket {
      opacity: 1 !important;
      transform: translateY(0) scale(1) !important;
      pointer-events: auto !important;
    }

    /* ════════════════════════════════════════════════════════════════
       ISOLATED STANDARDIZED COMPONENT CATALOG (11 ISOLATED CARDS)
       ════════════════════════════════════════════════════════════════ */
    .catalog-grid {
      max-width: 1240px;
      margin: 0 auto 4rem auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
      gap: 2rem;
    }

    .piece-card {
      background: #FFFFFF;
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 12px;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    .piece-card-header {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.25rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .piece-title { font-size: 0.88rem; font-weight: 700; color: #111; }
    .piece-color-tag { font-size: 0.72rem; color: #555; font-weight: 600; background: #F4F4F0; padding: 0.25rem 0.65rem; border-radius: 4px; }
    .piece-stage { width: 100%; height: 220px; background: #F5F5F2; border-radius: 8px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }

  
  
    /* ════════════════════════════════════════════════════════════════
       UNIFIED 100VH HERO SECTION & TETRIS FLOOR ANCHOR SYSTEM
       ════════════════════════════════════════════════════════════════ */
    .c8-hero-top.c8-hero-b-standalone,
    .c8-hero-b-standalone {
      position: relative !important;
      overflow: hidden !important;
      min-height: 100vh !important;
      height: 100vh !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      align-items: center !important;
      background-color: #FFFFFF !important;
      background-image: none !important;
      padding-top: 5rem !important;
      padding-bottom: 0 !important;
      box-sizing: border-box !important;
    }

    .c8-hero-top .c8-hero-in,
    .c8-hero-in {
      position: relative !important;
      z-index: 200 !important;
      text-align: center !important;
      width: 100% !important;
      max-width: 820px !important;
      margin: 0 auto !important;
      padding: 0 1.5rem !important;
      pointer-events: auto !important;
    }

    .c8-hero-top .c8-hero-h1,
    .c8-hero-in .c8-hero-h1 {
      font-size: clamp(1.6rem, 3.2vw, 2.4rem) !important;
      line-height: 1.18 !important;
      margin-bottom: 0.85rem !important;
      max-width: 820px !important;
      margin-left: auto !important;
      margin-right: auto !important;
    }

    .c8-hero-top .c8-hero-sub,
    .c8-hero-in .c8-hero-sub {
      font-size: clamp(0.92rem, 1.3vw, 1.05rem) !important;
      line-height: 1.55 !important;
      max-width: 600px !important;
      margin: 0 auto 1.5rem auto !important;
    }

    .c8-hero-top .c8-eyebrow,
    .c8-hero-in .c8-eyebrow {
      margin-bottom: 1rem !important;
    }

    .c8-hero-top .c8-hero-ctas,
    .c8-hero-in .c8-hero-ctas {
      margin-bottom: 1.5rem !important;
    }

    .c8-hero-top .matrix-floor-wrapper {
      position: absolute !important;
      bottom: 0 !important;
      left: 50% !important;
      transform: translateX(-50%) !important;
      z-index: 100 !important;
      margin: 0 !important;
      width: 952px !important;
      height: 392px !important;
    }

    .c8-hero-top .airborne-layer {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      pointer-events: none !important;
      z-index: 500 !important;
    }

    .c8-hero-top .airborne-layer .t-piece {
      pointer-events: auto !important;
      cursor: grab !important;
    }
    .c8-hero-top .airborne-layer .t-piece:active {
      cursor: grabbing !important;
    }

  </style>
</head>
<body <?php body_class('cr8v-homepage mode-70'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">
                <section class="c8-hero-top c8-hero-b-standalone">

    <!-- Live Floating Viewport Path Calibrator HUD -->
    <div id="floatingCalibHUD" style="position: fixed; top: 90px; right: 20px; z-index: 999999; background: #141414; color: #FFFFFF; padding: 14px 18px; border-radius: 8px; font-family: monospace; font-size: 0.75rem; box-shadow: 0 8px 30px rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.15);">
      <div style="font-weight: 700; color: #3D6BFF; margin-bottom: 8px; display: flex; justify-content: space-between; align-items: center; gap: 12px;">
        <span>LIVE HOMEPAGE PATH CALIBRATOR</span>
        <button onclick="document.getElementById('floatingCalibHUD').style.display='none'" style="background:none; border:none; color:#AAA; cursor:pointer; font-size:0.9rem;">✕</button>
      </div>
      <div id="hudWooVal" style="margin-bottom: 4px; color: #E0E0E0;">Woo: dX: 148px | dY: 469px</div>
      <div id="hudNextVal" style="margin-bottom: 4px; color: #E0E0E0;">Next: dX: 168px | dY: 332px</div>
      <div id="hudYellowVal" style="margin-bottom: 4px; color: #E0E0E0;">Yellow: dX: -540px | dY: 320px</div>
      <div id="hudGreenVal" style="margin-bottom: 8px; color: #E0E0E0;">Green: dX: -75px | dY: 425px</div>
      <div style="font-size: 0.68rem; color: #888888; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 6px;">
        Drag floating cards to position. Press [R] to Rotate 90°, [F] to Flip.
      </div>
    </div>

    <div class="c8-hero-in">
      <div class="c8-eyebrow" data-customizer="hero_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('hero_eyebrow', 'SCALE WITH AUTHORITY')); ?></div>
      <h1 class="c8-hero-h1" data-customizer="hero_headline_1"><?php echo esc_html(cr8v_mod('hero_headline_1', 'We build what your business actually runs on.')); ?></h1>
      <p class="c8-hero-sub" data-customizer="hero_sub"><?php echo esc_html(cr8v_mod('hero_sub', 'Strategy, design, and liquid performance engineering — built from scratch by one team for ambitious brands.')); ?></p>
      
      <div class="c8-hero-ctas">
        <a href="<?php echo esc_url(home_url(cr8v_mod('hero_cta_primary_url', '/discovery-call/'))); ?>" class="c8-btn-primary" data-customizer="hero_cta_primary_text">
          <?php echo esc_html(cr8v_mod('hero_cta_primary_text', 'Start a Project →')); ?>
        </a>
        <a href="<?php echo esc_url(cr8v_mod('hero_cta_secondary_url', '#how-we-think')); ?>" class="btn-secondary" data-customizer="hero_cta_secondary_text">
          <?php echo esc_html(cr8v_mod('hero_cta_secondary_text', 'Explore Philosophy ↓')); ?>
        </a>
      </div>
    </div>

    <!-- 3D Tetris Matrix Grid Arena (Complete 15 Blocks) -->
    <div class="matrix-floor-wrapper">
        <div class="matrix-arena" id="matrixArena">

          <!-- 1. OpenAI (Base Floor Block - Cols 2-3, Rows 6-7 - Row 7 Z-Index 70 > Woo) -->
          <div class="t-piece tone-obsidian" data-name="OpenAI" data-col="2" data-row="7" style="grid-column: 2 / span 2; grid-row: 6 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; flex-direction: column; justify-content: center; align-items: center; gap: 6px;">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/default.svg" alt="OpenAI CDN Logo" class="t-cdn-logo">
              <span style="font-size: 0.65rem; color: #FFF;">OPENAI</span>
            </div>
          </div>

          <!-- 2. Web Design (Base Floor Block - Cols 5-6, Rows 5-6 - Row 6 Z-Index 60) -->
          <div class="t-piece tone-light-grey" data-name="Web Design" data-col="5" data-row="6" style="grid-column: 5 / span 2; grid-row: 5 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; align-items: center; justify-content: center; color: #111; font-size: 0.72rem;">WEB DESIGN</div>
          </div>

          <!-- 3. Custom Development (Base Floor Block - Cols 5-8, Row 7 - Row 7 Z-Index 70) -->
          <div class="t-piece tone-royal-blue" data-name="Custom Development" data-col="5" data-row="7" style="grid-column: 5 / span 4; grid-row: 7; display:grid; grid-template-columns: repeat(4, var(--u)); grid-template-rows: var(--u);">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 2;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 3;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 4;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; font-size: 0.68rem; align-items: center; justify-content: center; color: #FFFFFF;">CUSTOM DEVELOPMENT</div>
          </div>

          <!-- 4. AI MVP (Base Floor Block - Cols 7-8, Rows 5-6 - Row 6 Z-Index 60) -->
          <div class="t-piece tone-royal-blue" data-name="AI MVP" data-col="7" data-row="6" style="grid-column: 7 / span 2; grid-row: 5 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; align-items: center; justify-content: center; color: #FFFFFF;">AI MVP</div>
          </div>

          <!-- 5. Shopify (Base Floor Block - Cols 9-11, Row 7 - Row 7 Z-Index 70) -->
          <div class="t-piece tone-obsidian" data-name="Shopify" data-col="9" data-row="7" style="grid-column: 9 / span 3; grid-row: 7; display:grid; grid-template-columns: repeat(3, var(--u)); grid-template-rows: var(--u);">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-column: 2;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-column: 3;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; flex-direction: row; gap: 8px; align-items: center; justify-content: center; color: #FFFFFF;">
              <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/shopify.svg" alt="Shopify CDN Logo" class="t-cdn-logo" style="filter: brightness(0) invert(1);">
              <span style="color: #FFFFFF;">SHOPIFY</span>
            </div>
          </div>

          <!-- 6. WordPress (Base Floor Block - Cols 11-12, Rows 5-6 - Row 6 Z-Index 60) -->
          <div class="t-piece tone-light-grey" data-name="WordPress" data-col="11" data-row="6" style="grid-column: 11 / span 2; grid-row: 5 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-light-grey"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; flex-direction: column; justify-content: center; align-items: center; gap: 6px;">
              <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/wordpress.svg" alt="WordPress CDN Logo" class="t-cdn-logo">
              <span style="font-size: 0.65rem; color: #111111;">WORDPRESS</span>
            </div>
          </div>

          <!-- 7. Python (Base Floor Block - Cols 13-14, Rows 4-5 - Row 5 Z-Index 50 < Elementor 60) -->
          <div class="t-piece tone-sand-beige" data-name="Python" data-col="13" data-row="5" style="grid-column: 13 / span 2; grid-row: 4 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-sand-beige"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-sand-beige"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-sand-beige"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-sand-beige"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; font-size: 0.68rem; flex-direction: column; gap: 4px; align-items: center; justify-content: center; color: #111;">
              <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg" alt="Python CDN Logo" class="t-cdn-logo" style="width: 24px; height: 24px;">
              <span>PYTHON</span>
            </div>
          </div>

          <!-- 8. Elementor (Base Floor Block - Cols 13-14, Row 6 - Row 6 Z-Index 60 > Python 50) -->
          <div class="t-piece tone-terracotta" data-name="Elementor" data-col="13" data-row="6" style="grid-column: 13 / span 2; grid-row: 6; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: var(--u);">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;">
              <div class="t-shape-body tone-terracotta">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/elementor.svg" alt="Elementor CDN Logo" class="t-cdn-logo" style="filter: brightness(0) invert(1);">
              </div>
            </div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-terracotta"></div></div>
          </div>

          <!-- 9. Figma (Base Floor Block - Cols 12-14, Row 7 - Row 7 Z-Index 70) -->
          <div class="t-piece tone-forest-green" data-name="Figma" data-col="12" data-row="7" style="grid-column: 12 / span 3; grid-row: 7; display:grid; grid-template-columns: repeat(3, var(--u)); grid-template-rows: var(--u);">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1;"><div class="t-shape-body tone-forest-green"></div></div>
            <div class="t-cell" style="grid-column: 2;"><div class="t-shape-body tone-forest-green"></div></div>
            <div class="t-cell" style="grid-column: 3;"><div class="t-shape-body tone-forest-green"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; flex-direction: row; gap: 8px; align-items: center; justify-content: center; font-size: 0.68rem; color: #FFF;">
              <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/figma.svg" alt="Figma CDN Logo" class="t-cdn-logo" style="filter: brightness(0) invert(1);">
              <span>FIGMA</span>
            </div>
          </div>

          <!-- 10. Claude (Base Floor Block - Col 15, Rows 6-7 - Row 7 Z-Index 70) -->
          <div class="t-piece tone-obsidian" data-name="Claude" data-col="15" data-row="7" style="grid-column: 15; grid-row: 6 / span 2; display:grid; grid-template-columns: var(--u); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-row: 1;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-cell" style="grid-row: 2;"><div class="t-shape-body tone-obsidian"></div></div>
            <div class="t-label" style="left: 0; right: 0; top: 0; bottom: 0; flex-direction: column; justify-content: center; align-items: center; gap: 6px;">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg" alt="Claude Verified CDN Logo" class="t-cdn-logo">
              <span style="font-size: 0.65rem; color: #FFFFFF;">CLAUDE</span>
            </div>
          </div>

          <!-- ════════════════════════════════════════════════════════════
               THE 4 DOCKED SOCKETS
               ════════════════════════════════════════════════════════════ -->

          <!-- Docked Socket 1: Purple WooCommerce Flipped 2x3 L-Piece - Starts at Row 5, Z-Index 50 < OpenAI 70 -->
          <div class="t-piece tone-purple docked-socket" data-name="Purple WooCommerce L-Piece" data-col="1" data-row="5" style="grid-column: 1 / span 2; grid-row: 5 / span 3; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(3, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-purple"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;">
              <div class="t-shape-body tone-purple">
                <img src="https://cdn.jsdelivr.net/gh/selfhst/icons/svg/woocommerce-light.svg" alt="WooCommerce Light Logo" class="t-cdn-logo">
              </div>
            </div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-purple"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 3;"><div class="t-shape-body tone-purple"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 3;"><!-- PURE TRANSPARENT CUTOUT --></div>
            <div class="t-label" style="left: 0; width: var(--u); top: 0; bottom: 0; flex-direction: column; justify-content: center; align-items: center; gap: 4px; color: #FFFFFF; font-size: 0.65rem;">
              <span>W</span><span>O</span><span>O</span>
            </div>
          </div>

          <!-- Docked Socket 2: Next.js -->
          <div class="t-piece tone-royal-blue docked-socket" data-name="Next.js" data-col="4" data-row="5" style="grid-column: 4; grid-row: 5 / span 3; display:grid; grid-template-columns: var(--u); grid-template-rows: repeat(3, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-row: 1;">
              <div class="t-shape-body tone-royal-blue"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nextdotjs.svg" alt="Next.js CDN Logo" class="t-cdn-logo is-white"></div>
            </div>
            <div class="t-cell" style="grid-row: 2;"><div class="t-shape-body tone-royal-blue"></div></div>
            <div class="t-cell" style="grid-row: 3;"><div class="t-shape-body tone-royal-blue"></div></div>
          </div>

          <!-- Docked Socket 3: Golden Yellow L-Piece -->
          <div class="t-piece tone-golden-yellow docked-socket" data-name="Golden Yellow L" data-col="9" data-row="5" style="grid-column: 9 / span 2; grid-row: 5 / span 2; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-golden-yellow"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-golden-yellow"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-golden-yellow"></div></div>
          </div>

          <!-- Docked Socket 4: Lime Green Lemon Z-Piece -->
          <div class="t-piece tone-lime-green docked-socket" data-name="Lime Green Lemon Z" data-col="16" data-row="4" style="grid-column: 16 / span 2; grid-row: 4 / span 4; display:grid; grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(4, var(--u));">
            <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
            <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
            <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
            <div class="t-cell" style="grid-column: 1; grid-row: 1;"><!-- PURE TRANSPARENT CUTOUT --></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-lime-green"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-lime-green"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 3;"><div class="t-shape-body tone-lime-green"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 3;"><div class="t-shape-body tone-lime-green"></div></div>
            <div class="t-cell" style="grid-column: 1; grid-row: 4;"><div class="t-shape-body tone-lime-green"></div></div>
            <div class="t-cell" style="grid-column: 2; grid-row: 4;"><!-- PURE TRANSPARENT CUTOUT --></div>
          </div>

        </div>
      </div>

      <!-- 70% In-Motion Floating Layer (THE 4 AIRBORNE FLOATING HERO BLOCKS IN STATE A) -->
      <div class="airborne-layer">
        <!-- 1. Airborne Flipped Purple WooCommerce L-Piece -->
        <div class="t-piece tone-purple air-wp-purple" data-name="Airborne Purple WooCommerce" style="grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(3, var(--u)); display:grid;">
          <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
          <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
          <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
          <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-purple"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 1;">
            <div class="t-shape-body tone-purple"><img src="https://cdn.jsdelivr.net/gh/selfhst/icons/svg/woocommerce-light.svg" alt="WooCommerce Light" class="t-cdn-logo"></div>
          </div>
          <div class="t-cell" style="grid-column: 1; grid-row: 2;"><div class="t-shape-body tone-purple"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
          <div class="t-cell" style="grid-column: 1; grid-row: 3;"><div class="t-shape-body tone-purple"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 3;"><!-- PURE TRANSPARENT CUTOUT --></div>
          <div class="t-label" style="left: 0; width: var(--u); top: 0; bottom: 0; flex-direction: column; justify-content: center; align-items: center; gap: 4px; color: #FFFFFF; font-size: 0.65rem;">
            <span>W</span><span>O</span><span>O</span>
          </div>
        </div>

        <!-- 2. Airborne Next.js Blue 1x3 Bar -->
        <div class="t-piece tone-royal-blue air-nextjs" data-name="Airborne Next.js" style="grid-template-columns: var(--u); grid-template-rows: repeat(3, var(--u)); display:grid;">
          <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
          <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
          <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
          <div class="t-cell" style="grid-row: 1;">
            <div class="t-shape-body tone-royal-blue"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nextdotjs.svg" alt="Next.js" class="t-cdn-logo is-white"></div>
          </div>
          <div class="t-cell" style="grid-row: 2;"><div class="t-shape-body tone-royal-blue"></div></div>
          <div class="t-cell" style="grid-row: 3;"><div class="t-shape-body tone-royal-blue"></div></div>
        </div>

        <!-- 3. Airborne Lime Green Lemon Z-Piece -->
        <div class="t-piece tone-lime-green air-green-z" data-name="Airborne Lime Green Z" style="grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(4, var(--u)); display:grid;">
          <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
          <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
          <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
          <div class="t-cell" style="grid-column: 1; grid-row: 1;"><!-- PURE TRANSPARENT CUTOUT --></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-lime-green"></div></div>
          <div class="t-cell" style="grid-column: 1; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-lime-green"></div></div>
          <div class="t-cell" style="grid-column: 1; grid-row: 3;"><div class="t-shape-body tone-lime-green"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 3;"><div class="t-shape-body tone-lime-green"></div></div>
          <div class="t-cell" style="grid-column: 1; grid-row: 4;"><div class="t-shape-body tone-lime-green"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 4;"><!-- PURE TRANSPARENT CUTOUT --></div>
        </div>

        <!-- 4. Airborne Golden Yellow L-Piece -->
        <div class="t-piece tone-golden-yellow air-amber-l" data-name="Airborne Golden Yellow L" style="grid-template-columns: repeat(2, var(--u)); grid-template-rows: repeat(2, var(--u)); display:grid;">
          <div class="t-handle t-rotate-handle" title="Rotate 90°">↺</div>
          <div class="t-handle t-fliph-handle" title="Flip Horizontal (F)">⇄</div>
          <div class="t-handle t-flipv-handle" title="Flip Vertical (V)">⇅</div>
          <div class="t-cell" style="grid-column: 1; grid-row: 1;"><div class="t-shape-body tone-golden-yellow"></div></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 1;"><div class="t-shape-body tone-golden-yellow"></div></div>
          <div class="t-cell" style="grid-column: 1; grid-row: 2;"><!-- PURE TRANSPARENT CUTOUT --></div>
          <div class="t-cell" style="grid-column: 2; grid-row: 2;"><div class="t-shape-body tone-golden-yellow"></div></div>
        </div>
  </section>

  <!-- POST-HERO ARCHITECTURAL PAPER GRID SECTION (CREATIVE AGENCY MINDSET) -->
  <style>
    .c8-puzzle-section {
      width: 100% !important;
      max-width: none !important;
      margin: 0 !important;
      background-color: #080808 !important;
      background-image: none !important;
      padding: 6rem 3.5rem 8rem !important;
      position: relative !important;
      overflow: hidden !important;
    }
    .c8-puzzle-section .c8-hero-h1 { color: #FFFFFF !important; }
    .c8-puzzle-section .c8-hero-sub { color: rgba(255, 255, 255, 0.65) !important; }
    .c8-paper-grid {
      background: rgba(255, 255, 255, 0.08) !important;
      border: 1px solid rgba(255, 255, 255, 0.12) !important;
    }
    .c8-pg-cell {
      background: #111111 !important;
      border: 1px solid rgba(255, 255, 255, 0.06) !important;
      color: #FFFFFF !important;
    }
    .c8-pg-cell .c8-pg-h3 { color: #FFFFFF !important; }
    .c8-pg-cell .c8-pg-p { color: rgba(255, 255, 255, 0.65) !important; }
    .c8-pg-cell.is-empty-slot {
      background-color: #0D0D0D !important;
    }
    .c8-pg-cell.is-empty-slot:hover {
      background-color: #040404 !important;
    }
    .c8-slot-hint { color: rgba(255, 255, 255, 0.4) !important; }
    .c8-drag-grip { color: #0047E1 !important; border-color: rgba(0, 71, 225, 0.4) !important; }
  </style>

  <section class="c8-puzzle-section" id="how-we-think">
    <div class="c8-grain-overlay"></div>
    <div class="c8-puzzle-header">
      <div class="c8-eyebrow" data-customizer="paper_grid_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('paper_grid_eyebrow', 'CREATIVE AGENCY MINDSET')); ?></div>
      <h2 class="c8-hero-h1" style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 0.5rem;" data-customizer="paper_grid_heading"><?php echo esc_html(cr8v_mod('paper_grid_heading', 'How We Think & Create')); ?></h2>
      <p class="c8-hero-sub" style="margin-bottom: 0; max-width: 650px;" data-customizer="paper_grid_sub"><?php echo esc_html(cr8v_mod('paper_grid_sub', 'Design is our primary focus, supported by AI as a creative partner and built-in growth systems.')); ?></p>
    </div>

    <div class="c8-paper-grid" id="main-desk-grid">
      
      <!-- Moving Visual Tile -->
      <div class="c8-puzzle-tile" id="desk-tile">
        <img src="<?php echo esc_url(cr8v_mod('pg_tile_img_1', get_template_directory_uri() . '/assets/img/abstract/cr8v_mindset_design_system.jpg')); ?>" alt="Design Identity" class="c8-swap-img is-active-img" id="img-row-1">
        <img src="<?php echo esc_url(cr8v_mod('pg_tile_img_2', get_template_directory_uri() . '/assets/img/abstract/cr8v_mindset_ai_partner.jpg')); ?>" alt="AI Creative Partner" class="c8-swap-img" id="img-row-2">
        <img src="<?php echo esc_url(cr8v_mod('pg_tile_img_3', get_template_directory_uri() . '/assets/img/abstract/cr8v_mindset_growth_engine.jpg')); ?>" alt="Growth Systems" class="c8-swap-img" id="img-row-3">
      </div>

      <!-- ROW 1 -->
      <div class="c8-pg-cell is-text-card" data-row="0" data-col="0" id="d-r1-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3" data-customizer="pg_card_1_title"><?php echo esc_html(cr8v_mod('pg_card_1_title', 'Design-Led Brand & Visual Systems')); ?></h3>
        <p class="c8-pg-p" data-customizer="pg_card_1_desc"><?php echo esc_html(cr8v_mod('pg_card_1_desc', 'Design is our primary foundation. We craft distinct visual identities, digital products, and brand systems that make your business instantly memorable.')); ?></p>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="0" data-col="1" data-img-idx="0" id="d-r1-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="0" data-col="2" data-img-idx="0" id="d-r1-c3">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>

      <!-- ROW 2 -->
      <div class="c8-pg-cell is-empty-slot" data-row="1" data-col="0" data-img-idx="1" id="d-r2-c1">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="1" data-col="1" data-img-idx="1" id="d-r2-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-text-card" data-row="1" data-col="2" id="d-r2-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3" data-customizer="pg_card_2_title"><?php echo esc_html(cr8v_mod('pg_card_2_title', 'AI as Our Creative Partner')); ?></h3>
        <p class="c8-pg-p" data-customizer="pg_card_2_desc"><?php echo esc_html(cr8v_mod('pg_card_2_desc', 'We leverage AI as a high-speed creative partner—accelerating research, rapid prototyping, and workflow iteration so we can ship elevated design faster.')); ?></p>
      </div>

      <!-- ROW 3 -->
      <div class="c8-pg-cell is-text-card" data-row="2" data-col="0" id="d-r3-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3" data-customizer="pg_card_3_title"><?php echo esc_html(cr8v_mod('pg_card_3_title', 'Built-In Growth Engine')); ?></h3>
        <p class="c8-pg-p" data-customizer="pg_card_3_desc"><?php echo esc_html(cr8v_mod('pg_card_3_desc', 'Stunning design means nothing if it doesn\'t scale. Our brand systems are built to convert, capture market share, and drive long-term business momentum.')); ?></p>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="2" data-col="1" data-img-idx="2" id="d-r3-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="2" data-col="2" data-img-idx="2" id="d-r3-c3">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>

    </div>
  </section>

  <style>
    /* Global CTA Underline Reset & Text CTA Standard */
    a, a:hover, a:focus, .c8-btn-primary, .dp-btn-ghost, .stage-link, .c8srv-explore, .sw-play-btn, .c8-text-cta {
      text-decoration: none !important;
    }

    /* Architectural Cell Matrix Container */
    .sw-matrix-wrapper {
      max-width: 1360px;
      margin: 4rem auto 6rem auto;
      border: 1px solid rgba(8, 8, 8, 0.06);
      background: #FFFFFF;
    }

    .sw-matrix-cell {
      display: grid;
      grid-template-columns: 1fr 1fr;
      border-bottom: 1px solid rgba(8, 8, 8, 0.06);
    }
    .sw-matrix-cell:last-child {
      border-bottom: none;
    }

    .sw-matrix-left {
      padding: 4rem 3.5rem !important;
      border-right: 1px solid rgba(0, 0, 0, 0.08);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background: var(--c8-surface-lift);
    }

    .sw-matrix-right {
      padding: 4rem 3.5rem !important;
      background: var(--c8-surface-lift);
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }

    .sw-matrix-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #0047E1;
      margin-bottom: 1rem;
    }

    .sw-matrix-h2 {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(1.1rem, 2.6vw, 1.1rem);
      font-weight: 700;
      color: #080808;
      text-transform: uppercase;
      line-height: 1.25;
      margin-bottom: 1.25rem;
    }

    .sw-matrix-sub {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.95rem;
      font-weight: 300;
      color: #555555;
      line-height: 1.7;
      margin-bottom: 2rem;
    }

    .sw-matrix-img-box {
      width: 100%;
      aspect-ratio: 16/10;
      border: 1px solid rgba(8, 8, 8, 0.06);
      overflow: hidden;
      position: relative;
    }

    .sw-matrix-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .sw-matrix-img-box:hover .sw-matrix-img {
      transform: scale(1.03);
    }

    .sw-matrix-stat-floating {
      position: absolute;
      top: 4.25rem;
      right: 1.25rem;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(8, 8, 8, 0.06);
      padding: 0.6rem 1.2rem;
      z-index: 3;
    }

    .sw-matrix-stat-val {
      font-family: 'Michroma', sans-serif;
      font-size: 0.8rem;
      font-weight: 700;
      color: #0047E1;
    }

    .sw-matrix-stat-lbl {
      font-family: 'Space Mono', monospace;
      font-size: 0.65rem;
      font-weight: 700;
      text-transform: uppercase;
      color: #555555;
    }

    /* Standardized Text CTA UI (dp-btn-ghost baseline) */
    .c8-text-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: #0047E1;
      font-family: 'Space Mono', monospace;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      text-decoration: none !important;
      border-bottom: 1px solid rgba(0, 71, 225, 0.35);
      padding-bottom: 3px;
      transition: color 0.25s ease, border-color 0.25s ease, gap 0.25s ease;
    }

    .c8-text-cta:hover {
      color: #0037B5;
      border-color: #0047E1;
      gap: 12px;
      text-decoration: none !important;
    }

    @media (max-width: 900px) {
      .sw-matrix-cell {
        grid-template-columns: 1fr;
      }
      .sw-matrix-left {
        border-right: none;
        border-bottom: 1px solid rgba(8, 8, 8, 0.06);
        padding: 2.5rem 1.5rem;
      }
      .sw-matrix-right {
        padding: 1.5rem;
      }
    }
  </style>

  <div class="sw-wrapper" id="selected-work">
    <style>
      /* ── SELECTED WORK REDESIGN (Architectural Blueprint Style) ── */
      .sw-wrapper {
        width: 100%;
        background: #FFFFFF;
        padding: 6rem 3.5rem 8rem;
      }
      .sw-matrix-wrapper {
        max-width: 1280px;
        margin: 0 auto;
        border-top: 1px solid rgba(8, 8, 8, 0.12);
        border-bottom: 1px solid rgba(8, 8, 8, 0.12);
      }
      .sw-matrix-intro-cell {
        display: flex;
        gap: 4rem;
        align-items: flex-start;
        padding: 3.5rem 3.5rem;
        border-bottom: 1px solid rgba(8, 8, 8, 0.12);
      }
      .sw-matrix-intro-left { flex: 1; }
      .sw-matrix-intro-right { flex: 1; align-self: flex-end; }

      .sw-matrix-cell {
        display: flex;
        position: relative;
        border-bottom: 1px solid rgba(8, 8, 8, 0.12);
      }
      .sw-matrix-cell:last-child { border-bottom: none; }
      .sw-matrix-cell.flip { flex-direction: row-reverse; }

      /* Corner crosshair blueprint marks */
      .sw-matrix-cell::before, .sw-matrix-cell::after {
        content: '+';
        position: absolute;
        font-size: 14px;
        font-family: var(--font-mono);
        color: rgba(8, 8, 8, 0.25);
        line-height: 1;
        z-index: 10;
      }
      .sw-matrix-cell::before { top: -7px; left: -7px; }
      .sw-matrix-cell::after { bottom: -7px; right: -7px; }

      .sw-matrix-left {
        flex: 1;
        padding: 4rem 3.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: transparent;
        border-right: none;
      }
      .sw-matrix-right {
        flex: 1;
        padding: 4rem 3.5rem;
        border-left: 1px solid rgba(8, 8, 8, 0.12);
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: transparent;
      }
      .sw-matrix-cell.flip .sw-matrix-left {
        padding: 4rem 3.5rem;
      }
      .sw-matrix-cell.flip .sw-matrix-right {
        padding: 4rem 3.5rem;
        border-left: none;
        border-right: 1px solid rgba(8, 8, 8, 0.12);
      }

      .sw-quote-box {
        margin: 0 0 1.75rem 0;
        padding: 4px 0 4px 18px;
        border-left: 2px solid #0047E1;
      }
      .sw-quote-box p {
        font-family: var(--font-body);
        font-style: italic;
        font-size: 0.95rem;
        line-height: 1.7;
        color: #33332F;
        margin: 0;
      }
      .sw-chip-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-family: var(--font-mono);
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        color: #555555;
        margin-bottom: 1.75rem;
      }
      .sw-chip-icon {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        background: rgba(0, 71, 225, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: #0047E1;
        font-weight: 700;
        font-family: var(--font-mono);
        flex-shrink: 0;
      }

      /* Media Frame & Floating Badge Overlays */
      .sw-media-frame {
        position: relative;
        width: 100%;
        aspect-ratio: 16/10;
        overflow: hidden;
        border: 1px solid rgba(8, 8, 8, 0.12);
      }
      .sw-media-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
      }
      .sw-media-frame:hover img {
        transform: scale(1.04);
      }

      .sw-corner-label {
        position: absolute;
        top: 14px;
        left: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 4;
        background: rgba(8, 8, 8, 0.75);
        backdrop-filter: blur(6px);
        padding: 5px 10px;
        border-radius: 4px;
      }
      .sw-dot-grid {
        display: grid;
        grid-template-columns: repeat(2, 3px);
        grid-template-rows: repeat(3, 3px);
        gap: 2px;
      }
      .sw-dot-grid span { width: 3px; height: 3px; background: rgba(255, 255, 255, 0.65); }
      .sw-corner-text {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.85);
      }

      .sw-floating-badge {
        position: absolute;
        top: 14px;
        right: 14px;
        background: #FFFFFF;
        border: 1px solid rgba(8, 8, 8, 0.12);
        padding: 8px 14px;
        z-index: 4;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      }
      .sw-floating-badge .b1 {
        font-family: var(--font-heading);
        font-size: 0.78rem;
        font-weight: 700;
        color: #0047E1;
        line-height: 1.3;
      }
      .sw-floating-badge .b2 {
        font-family: var(--font-mono);
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: #555555;
        line-height: 1.4;
      }

      @media (max-width: 900px) {
        .sw-matrix-intro-cell { flex-direction: column; gap: 1.5rem; }
        .sw-matrix-cell, .sw-matrix-cell.flip { flex-direction: column; }
        .sw-matrix-left, .sw-matrix-right,
        .sw-matrix-cell.flip .sw-matrix-left,
        .sw-matrix-cell.flip .sw-matrix-right {
          padding: 2.5rem 0;
          border: none;
        }
      }
    </style>

    <div class="sw-matrix-wrapper">

      <!-- ── MATRIX INTRO HEADER CELL ── -->
      <div class="sw-matrix-intro-cell">
        <div class="sw-matrix-intro-left">
          <div class="sw-matrix-eyebrow" data-customizer="work_matrix_eyebrow">// <?php echo esc_html(cr8v_mod('work_matrix_eyebrow', 'SELECTED WORK')); ?></div>
          <h2 class="sw-matrix-h2" style="font-size: clamp(1.6rem, 3.5vw, 2.5rem); margin-bottom: 0;" data-customizer="work_matrix_heading"><?php echo esc_html(cr8v_mod('work_matrix_heading', 'WORK THAT\'S VERIFIABLY LIVE.')); ?></h2>
        </div>
        <div class="sw-matrix-intro-right">
          <p class="sw-matrix-sub" style="margin-bottom:0;" data-customizer="work_matrix_sub">
            <?php echo esc_html(cr8v_mod('work_matrix_sub', 'These aren\'t concept projects or fictitious mockups. Every case study below is a live engagement — search the clients on Google and see the work for yourself. We only show projects we\'re allowed to talk about.')); ?>
          </p>
        </div>
      </div>

      <!-- ── CASE 1: BLVCK HAIR NG ── -->
      <div class="sw-matrix-cell" id="cs-blvck-hair">
        <div class="sw-matrix-left">
          <div>
            <div class="sw-matrix-eyebrow" data-customizer="cs1_eyebrow">// <?php echo esc_html(cr8v_mod('cs1_eyebrow', 'ORGANIC ACQUISITION ENGINE')); ?></div>
            <h2 class="sw-matrix-h2" data-customizer="cs1_heading"><?php echo esc_html(cr8v_mod('cs1_heading', 'Organic E-Commerce Growth From The Ground Up')); ?></h2>
            <p class="sw-matrix-sub" data-customizer="cs1_sub">
              <?php echo esc_html(cr8v_mod('cs1_sub', 'Full-stack SEO architecture and multi-market e-commerce scaling for blvck Hair NG — growing from a single early storefront to active revenue-generating stores in both Nigeria and the UK.')); ?>
            </p>
          </div>

          <div class="sw-quote-box">
            <p data-customizer="cs1_quote"><?php echo esc_html(cr8v_mod('cs1_quote', 'We handled their SEO end-to-end — keyword mapping, page architecture, and content — from the ground up. Both storefronts are now ranking and converting independently.')); ?></p>
          </div>

          <div class="sw-chip-tag">
            <span class="sw-chip-icon">S</span>
            <span data-customizer="cs1_role"><?php echo esc_html(cr8v_mod('cs1_role', 'SEO & E-Commerce · Nigeria & UK')); ?></span>
          </div>

          <div>
            <a href="<?php echo esc_url(home_url(cr8v_mod('cs1_link', '/case-studies/blvck-hair-ng/'))); ?>" class="c8-text-cta">
              <span>Explore Case Study</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>

        <div class="sw-matrix-right">
          <div class="sw-media-frame">
            <div class="sw-corner-label">
              <span class="sw-dot-grid"><span></span><span></span><span></span><span></span><span></span><span></span></span>
              <span class="sw-corner-text">// P.01 — Live</span>
            </div>
            <div class="sw-floating-badge">
              <div class="b1" data-customizer="cs1_stat_val"><?php echo esc_html(cr8v_mod('cs1_stat_val', '2 Active Stores')); ?></div>
              <div class="b2" data-customizer="cs1_stat_lbl"><?php echo esc_html(cr8v_mod('cs1_stat_lbl', 'UK & NG Growth')); ?></div>
            </div>
            <img src="<?php echo esc_url(cr8v_mod('cs1_img', get_template_directory_uri() . '/assets/img/case_studies/case_study_blvck_hair.jpg')); ?>" alt="blvck Hair NG" class="sw-matrix-img">
          </div>
        </div>
      </div>

      <!-- ── CASE 2: THE DUCH APARTMENTS (FLIP ROW) ── -->
      <div class="sw-matrix-cell flip" id="cs-duch-apartments">
        <div class="sw-matrix-left">
          <div>
            <div class="sw-matrix-eyebrow" data-customizer="cs2_eyebrow">// <?php echo esc_html(cr8v_mod('cs2_eyebrow', 'BUILT-IN SEO ARCHITECTURE')); ?></div>
            <h2 class="sw-matrix-h2" data-customizer="cs2_heading"><?php echo esc_html(cr8v_mod('cs2_heading', 'Website Design With SEO Folded In From Day One')); ?></h2>
            <p class="sw-matrix-sub" data-customizer="cs2_sub">
              <?php echo esc_html(cr8v_mod('cs2_sub', 'Bespoke website design for The Duch Apartments — engineered with search engine optimization folded directly into the code structure from line one rather than patched after launch.')); ?>
            </p>
          </div>

          <div class="sw-quote-box">
            <p data-customizer="cs2_quote"><?php echo esc_html(cr8v_mod('cs2_quote', 'Custom layout, zero template base, with SEO architecture coded in before a single page went live. Direct booking integration maximised their direct revenue channel from day one.')); ?></p>
          </div>

          <div class="sw-chip-tag">
            <span class="sw-chip-icon">W</span>
            <span data-customizer="cs2_role"><?php echo esc_html(cr8v_mod('cs2_role', 'Web Design & Technical SEO · Lagos, Nigeria')); ?></span>
          </div>

          <div>
            <a href="<?php echo esc_url(home_url(cr8v_mod('cs2_link', '/case-studies/the-duch-apartments/'))); ?>" class="c8-text-cta">
              <span>Explore Case Study</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>

        <div class="sw-matrix-right">
          <div class="sw-media-frame">
            <div class="sw-corner-label">
              <span class="sw-dot-grid"><span></span><span></span><span></span><span></span><span></span><span></span></span>
              <span class="sw-corner-text">// P.02 — Live</span>
            </div>
            <div class="sw-floating-badge">
              <div class="b1" data-customizer="cs2_stat_val"><?php echo esc_html(cr8v_mod('cs2_stat_val', '100% Custom')); ?></div>
              <div class="b2" data-customizer="cs2_stat_lbl"><?php echo esc_html(cr8v_mod('cs2_stat_lbl', 'Design & SEO Day 1')); ?></div>
            </div>
            <img src="<?php echo esc_url(cr8v_mod('cs2_img', get_template_directory_uri() . '/assets/img/case_studies/case_study_duch_apartments.jpg')); ?>" alt="The Duch Apartments" class="sw-matrix-img">
          </div>
        </div>
      </div>

      <!-- ── CASE 3: WP PUBLISHION AI ── -->
      <div class="sw-matrix-cell" id="cs-nativus-dashboard">
        <div class="sw-matrix-left">
          <div>
            <div class="sw-matrix-eyebrow" data-customizer="cs3_eyebrow">// <?php echo esc_html(cr8v_mod('cs3_eyebrow', 'PROPRIETARY AI MVP PLATFORM')); ?></div>
            <h2 class="sw-matrix-h2" data-customizer="cs3_heading"><?php echo esc_html(cr8v_mod('cs3_heading', 'WP Publishion AI — Automated Publishing Architecture')); ?></h2>
            <p class="sw-matrix-sub" data-customizer="cs3_sub">
              <?php echo esc_html(cr8v_mod('cs3_sub', 'Our in-house flagship AI platform: OpenAI and Claude API orchestration, vector embedding search indexes, automated content generation pipelines, and multi-site publishing workflows.')); ?>
            </p>
          </div>

          <div class="sw-quote-box">
            <p data-customizer="cs3_quote"><?php echo esc_html(cr8v_mod('cs3_quote', 'Engineered as our in-house flagship AI platform: OpenAI API orchestration, vector embedding indexes, automated content generation pipelines, and multi-site WordPress publishing workflows.')); ?></p>
          </div>

          <div class="sw-chip-tag">
            <span class="sw-chip-icon">A</span>
            <span data-customizer="cs3_role"><?php echo esc_html(cr8v_mod('cs3_role', 'OpenAI & Claude AI MVP · In-House Platform')); ?></span>
          </div>

          <div>
            <a href="<?php echo esc_url(home_url(cr8v_mod('cs3_link', '/case-studies/wp-publishion-ai/'))); ?>" class="c8-text-cta">
              <span>Explore Case Study</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>

        <div class="sw-matrix-right">
          <div class="sw-media-frame">
            <div class="sw-corner-label">
              <span class="sw-dot-grid"><span></span><span></span><span></span><span></span><span></span><span></span></span>
              <span class="sw-corner-text">// P.03 — In-House</span>
            </div>
            <div class="sw-floating-badge">
              <div class="b1" data-customizer="cs3_stat_val"><?php echo esc_html(cr8v_mod('cs3_stat_val', 'AI MVP Engine')); ?></div>
              <div class="b2" data-customizer="cs3_stat_lbl"><?php echo esc_html(cr8v_mod('cs3_stat_lbl', 'Proprietary Build')); ?></div>
            </div>
            <img src="<?php echo esc_url(cr8v_mod('cs3_img', get_template_directory_uri() . '/assets/img/case_studies/case_study_bridgepoint_compliance.jpg')); ?>" alt="WP Publishion AI" class="sw-matrix-img">
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

<!-- High-Performance 60FPS Continuous Canvas Controller -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const canvas = document.getElementById('c8-canvas');
      const ctx = canvas.getContext('2d');
      const track = document.getElementById('scroll-track');
      const wrapper = document.getElementById('canvas-wrapper');

      const totalFrames = 449;
      const images = [];

      canvas.width = 1920;
      canvas.height = 1080;

      // Preload 449 frames into memory
      for (let i = 1; i <= totalFrames; i++) {
        const img = new Image();
        const num = String(i).padStart(5, '0');
        img.src = `hero_sequence/${num}.jpg`;
        images.push(img);
      }

      // Smooth LERP Variables
      let targetProgress = 0;
      let currentProgress = 0;
      let isExpandedState = false;

      // Stage Box Elements
      const t1 = document.getElementById('trigger-1-web-design');
      const t2 = document.getElementById('trigger-2-custom-dev');
      const t3Left = document.getElementById('trigger-3-ai-mvp-left');
      const t3Right = document.getElementById('trigger-3-ai-mvp-right');

      // Helper function to safely render frame with 404 fallback
      function renderFrame(index) {
        let img = images[index];
        
        // 404 Safeguard fallback if specific image is missing or incomplete
        if (!img || !img.complete || img.naturalWidth === 0) {
          // Fallback to adjacent valid frame
          img = images[Math.max(0, index - 1)] || images[Math.min(totalFrames - 1, index + 1)];
        }

        if (img && img.complete && img.naturalWidth !== 0) {
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          
          // FULL WIDTH COVER SCALE DRAWING
          const hRatio = canvas.width / img.width;
          const vRatio = canvas.height / img.height;
          const ratio = Math.max(hRatio, vRatio);
          const centerShiftX = (canvas.width - img.width * ratio) / 2;
          const centerShiftY = (canvas.height - img.height * ratio) / 2;

          ctx.drawImage(
            img, 0, 0, img.width, img.height,
            centerShiftX, centerShiftY, img.width * ratio, img.height * ratio
          );
        }
      }

      // Scroll Event Listener
      window.addEventListener('scroll', () => {
        const trackRect = track.getBoundingClientRect();
        const maxScroll = trackRect.height - window.innerHeight;
        const currentScroll = Math.max(0, -trackRect.top);
        targetProgress = Math.min(1, Math.max(0, currentScroll / maxScroll));
      });

      // Continuous 60fps Render Loop with LERP
      function renderLoop() {
        // LERP interpolation
        currentProgress += (targetProgress - currentProgress) * 0.08;

        // Calculate continuous frame index (1 to 448) - NO MANUAL FRAME SKIPPING!
        const frameIndex = Math.min(totalFrames - 1, Math.max(0, Math.floor(currentProgress * totalFrames)));

        // Render target frame cleanly
        renderFrame(frameIndex);

        // Smooth Hero Card Expansion (Triggered ONCE on state boundary to prevent 60fps repaints)
        if (currentProgress >= 0.03 && !isExpandedState) {
          isExpandedState = true;
          wrapper.className = 'c8-bg-canvas-wrapper is-expanded';
        } else if (currentProgress < 0.03 && isExpandedState) {
          isExpandedState = false;
          wrapper.className = 'c8-bg-canvas-wrapper is-boxed';
        }

        // ═════════════════════════════════════════════════════════════════════
        // NEW SCROLL SEQUENCE ORDER:
        // 1. TRIGGER 1 — WEB DESIGN (30% to 40%)
        // 2. TRIGGER 2 — AI MVP (60% to 70%)
        // 3. TRIGGER 3 — CUSTOM DEVELOPMENT (88% to 100% / frame 449)
        // ═════════════════════════════════════════════════════════════════════

        // Trigger 1: Web Design (30% to 40%)
        if (currentProgress >= 0.30 && currentProgress <= 0.40) {
          t1.classList.add('active');
        } else {
          t1.classList.remove('active');
        }

        // Trigger 2: Custom Dev (60% to 70%)
        if (currentProgress >= 0.60 && currentProgress <= 0.70) {
          t2.classList.add('active');
        } else {
          t2.classList.remove('active');
        }

        // Trigger 3: AI MVP (88% to 100%)
        if (currentProgress >= 0.88 && currentProgress <= 1.0) {
          t3Left.classList.add('active');
          t3Right.classList.add('active');
        } else {
          t3Left.classList.remove('active');
          t3Right.classList.remove('active');
        }

        requestAnimationFrame(renderLoop);
      }

      // Start 60fps Loop
      requestAnimationFrame(renderLoop);

      // ═════════════════════════════════════════════════════════════════════
      // MULTI-SECTION SELECTED WORK & STICKY AVATAR DOCK CONTROLLER
      // 1. 3 Best Primary Case Studies (blvck Hair, The Duch, Mkenny).
      // 2. Compact 38px Avatar dock starts EMBEDDED inside Card 1.
      // 3. Smoothly transitions to STICKY AT SCREEN BOTTOM as user scrolls.
      // 4. Subtle scroll-reveal motion animation for each section.
      // ═════════════════════════════════════════════════════════════════════
      const avatarDock = document.getElementById('sw-avatar-dock');
      const card1 = document.getElementById('sw-card-1');
      const selectedWorkWrapper = document.getElementById('selected-work');
      const caseSections = document.querySelectorAll('.sw-case-section');
      const avatarBtns = document.querySelectorAll('.sw-avatar-btn');

      // Click to smooth-scroll to corresponding case section
      avatarBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          const targetId = btn.getAttribute('data-target');
          const targetEl = document.getElementById(targetId);
          if (targetEl) {
            targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        });
      });

      // Intersection Observer for Active Avatar Highlighting & Scroll Reveal Motion
      const sectionObserverOptions = {
        root: null,
        rootMargin: '-25% 0px -25% 0px',
        threshold: 0.15
      };

      const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Trigger Subtle Motion Reveal
            entry.target.classList.add('is-in-view');

            // Highlight Active Avatar Button
            const activeId = entry.target.id;
            avatarBtns.forEach(btn => {
              if (btn.getAttribute('data-target') === activeId) {
                btn.classList.add('active');
              } else {
                btn.classList.remove('active');
              }
            });
          }
        });
      }, sectionObserverOptions);

      caseSections.forEach(section => sectionObserver.observe(section));

      // Scroll Listener for Smooth Dock Position State Transition (Embedded -> Sticky -> Hidden)
      let isDockSticky = false;

      window.addEventListener('scroll', () => {
        if (!card1 || !avatarDock || !selectedWorkWrapper) return;

        const card1Rect = card1.getBoundingClientRect();
        const wrapperRect = selectedWorkWrapper.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        // When Card 1 bottom is still within view -> Dock sits EMBEDDED inside Card 1
        if (card1Rect.bottom > viewportHeight - 100) {
          if (isDockSticky) {
            isDockSticky = false;
            avatarDock.classList.remove('is-sticky', 'is-hidden');
            avatarDock.classList.add('is-embedded');
            card1.appendChild(avatarDock); // Re-attach inside card 1
          }
        } 
        // When inside Selected Work block (sections 1 to 3) -> STICKY AT SCREEN BOTTOM
        else if (wrapperRect.bottom > viewportHeight - 80 && wrapperRect.top < viewportHeight - 100) {
          if (!isDockSticky) {
            isDockSticky = true;
            avatarDock.classList.remove('is-embedded', 'is-hidden');
            avatarDock.classList.add('is-sticky');
            document.body.appendChild(avatarDock); // Pin to body for fixed positioning
          }
        } 
        // When scrolled past Selected Work block -> HIDE DOCK
        else {
          avatarDock.classList.remove('is-embedded', 'is-sticky');
          avatarDock.classList.add('is-hidden');
          isDockSticky = false;
        }
      });

    });
  </script>

  <!-- ════════════════════════════════════════════════════════════════
       SECTION 6: SERVICES DEEP DIVE
       ════════════════════════════════════════════════════════════════ -->
  <style>
    /* ──────────────────────────────────────────────────────────────
       SERVICES DEEP DIVE — ACCORDION EXPANSION LAYOUT
    ────────────────────────────────────────────────────────────── */
    .sdv-section {
      background-color: #080808 !important;
      background-image: none !important;
      padding: 9rem 3.5rem !important;
      position: relative !important;
      overflow: hidden !important;
    }

    /* Subtle backdrop glow blobs */
    .sdv-bg-blob { display: none !important; opacity: 0 !important; }
    .sdv-bg-blob-1 {
      width: 600px; height: 600px;
      background: #0047E1;
      top: -100px; left: -150px;
    }
    .sdv-bg-blob-2 {
      width: 400px; height: 400px;
      background: #3D6BFF;
      bottom: 0; right: -100px;
    }

    .sdv-inner {
      max-width: 1360px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }

    .sdv-header {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: end;
      margin-bottom: 6rem;
    }

    .sdv-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--c8-blue);
      margin-bottom: 1.25rem;
    }

    .sdv-h2 {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(1.5rem, 3.2vw, 2.6rem);
      font-weight: 700;
      color: #FFFFFF;
      text-transform: uppercase;
      line-height: 1.18;
      letter-spacing: 0.01em;
    }

    .sdv-h2 em {
      font-style: normal;
      color: var(--c8-blue);
    }

    .sdv-header-right {
      padding-bottom: 0.5rem;
    }

    .sdv-sub {
      font-family: 'DM Sans', sans-serif;
      font-size: 1.05rem;
      font-weight: 300;
      color: rgba(255,255,255,0.6);
      line-height: 1.7;
      max-width: 500px;
    }

    /* Architecture Layers Pill Row */
    .sdv-layer-row {
      display: flex;
      align-items: center;
      gap: 0;
      margin-top: 2rem;
    }

    .sdv-layer-pill {
      font-family: 'Space Mono', monospace;
      font-size: 0.72rem;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 6px 16px;
      border-radius: 4px;
      white-space: nowrap;
    }

    .sdv-layer-pill.layer-strategy {
      background: rgba(255,255,255,0.07);
      color: rgba(255,255,255,0.5);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .sdv-layer-pill.layer-build {
      background: var(--c8-blue);
      color: #fff;
      border: 1px solid var(--c8-blue);
    }

    .sdv-layer-pill.layer-growth {
      background: rgba(255,255,255,0.07);
      color: rgba(255,255,255,0.5);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .sdv-arrow {
      color: rgba(255,255,255,0.25);
      font-size: 0.85rem;
      margin: 0 8px;
    }

    /* Accordion Grid */
    .sdv-accordion {
      display: flex;
      flex-direction: column;
      gap: 0;
      border-top: 1px solid rgba(255,255,255,0.08);
    }

    .sdv-item {
      border-bottom: 1px solid rgba(255,255,255,0.08);
      overflow: hidden;
    }

    .sdv-item-trigger {
      width: 100%;
      display: grid;
      grid-template-columns: 56px 1fr auto 160px 80px;
      align-items: center;
      gap: 1.5rem;
      padding: 2rem 0;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      transition: all 0.3s ease;
    }

    .sdv-item-trigger:hover .sdv-item-title {
      color: var(--c8-blue);
    }

    .sdv-item-num {
      font-family: 'Space Mono', monospace;
      font-size: 0.78rem;
      color: rgba(255,255,255,0.3);
      letter-spacing: 0.1em;
    }

    .sdv-item-title {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(1rem, 1.8vw, 1.35rem);
      font-weight: 700;
      color: #FFFFFF;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      transition: color 0.3s ease;
    }

    .sdv-item-tag {
      font-family: 'Space Mono', monospace;
      font-size: 0.68rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 4px 12px;
      border-radius: 4px;
    }

    .sdv-item-tag.tag-build {
      background: rgba(0, 71, 225, 0.18);
      color: var(--c8-blue);
      border: none !important;
    }

    .sdv-item-tag.tag-growth {
      background: rgba(255,255,255,0.06);
      color: rgba(255,255,255,0.45);
      border: 1px solid rgba(255,255,255,0.1);
    }

    /* ── Trigger Row Preview Thumbnail ── */
    .sdv-item-thumb {
      width: 160px;
      height: 84px;
      border-radius: 4px;
      overflow: hidden;
      opacity: 0.4;
      transition: opacity 0.35s ease, transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
      flex-shrink: 0;
    }

    .sdv-item-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .sdv-item-trigger:hover .sdv-item-thumb {
      opacity: 1;
      transform: scale(1.22) skewX(-6deg);
    }

    .sdv-item.is-open .sdv-item-thumb {
      opacity: 1;
      transform: scale(1.1) skewX(-3deg);
    }

    .sdv-item-chevron {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      color: rgba(255,255,255,0.3);
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), color 0.3s ease;
    }

    .sdv-item.is-open .sdv-item-chevron {
      transform: rotate(180deg);
      color: var(--c8-blue);
    }

    .sdv-item.is-open .sdv-item-title {
      color: var(--c8-blue);
    }

    /* Accordion Panel */
    .sdv-panel {
      display: grid;
      grid-template-rows: 0fr;
      transition: grid-template-rows 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .sdv-item.is-open .sdv-panel {
      grid-template-rows: 1fr;
    }

    .sdv-panel-inner {
      overflow: hidden;
    }

    .sdv-panel-content {
      display: grid;
      grid-template-columns: 56px 1fr 1fr;
      gap: 2rem;
      padding: 0 0 3rem 0;
    }

    .sdv-panel-spacer { /* Column 1 spacer to align with title */ }

    .sdv-panel-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 1rem;
      font-weight: 300;
      color: rgba(255,255,255,0.6);
      line-height: 1.7;
    }

    .sdv-panel-desc strong {
      color: #FFFFFF;
      font-weight: 600;
    }

    .sdv-panel-right {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    .sdv-deliverable-row {
      display: flex;
      align-items: center;
      gap: 12px;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.92rem;
      font-weight: 500;
      color: rgba(255,255,255,0.7);
    }

    .sdv-deliverable-row::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--c8-blue);
      flex-shrink: 0;
    }

    .sdv-panel-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: var(--c8-blue);
      font-family: 'Space Mono', monospace;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      margin-top: 1rem;
      transition: gap 0.3s ease;
    }

    .sdv-panel-cta:hover {
      gap: 14px;
    }

    /* Mobile responsive */
    @media (max-width: 900px) {
      .sdv-section { padding: 6rem 1.5rem; }
      .sdv-header { grid-template-columns: 1fr; gap: 2rem; margin-bottom: 4rem; }
      .sdv-item-trigger { grid-template-columns: 40px 1fr 80px; }
      .sdv-item-tag { display: none; }
      .sdv-item-thumb { display: none; }
      .sdv-panel-content { grid-template-columns: 40px 1fr; }
      .sdv-panel-right { grid-column: 2; }
    }

    /* ── Accordion panel visual thumbnail ── */
    .sdv-panel-visual {
      grid-column: 1 / -1;
      margin-bottom: 2rem;
      border-radius: 4px;
      overflow: hidden;
      height: 200px;
      position: relative;
    }

    .sdv-panel-visual img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: saturate(0.9) brightness(0.95);
      transition: transform 0.5s ease, filter 0.3s ease;
    }

    .sdv-panel-visual:hover img {
      transform: scale(1.03);
      filter: saturate(1) brightness(1);
    }

    .sdv-panel-visual-label {
      position: absolute;
      bottom: 0.75rem;
      left: 0.75rem;
      font-family: 'Space Mono', monospace;
      font-size: 0.65rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #fff;
      background: rgba(0,71,225,0.85);
      border-radius: 4px;
      padding: 3px 10px;
    }
  </style>

  <section class="sdv-section" id="services-deep-dive">
    <!-- Backdrop Glow Blobs -->
    <div class="sdv-bg-blob sdv-bg-blob-1"></div>
    <div class="sdv-bg-blob sdv-bg-blob-2"></div>

    <div class="sdv-inner">

      <!-- Section Header -->
      <div class="sdv-header">
        <div class="sdv-header-left">
          <div class="sdv-eyebrow" data-customizer="sdv_eyebrow"><span class="c8-eyebrow-slash">//</span> WHAT WE ACTUALLY DO</div>
          <h2 class="sdv-h2" data-customizer="sdv_heading">Every Layer.<br>One <em>Studio.</em></h2>

          <div class="sdv-layer-row">
            <span class="sdv-layer-pill layer-strategy">Strategy</span>
            <span class="sdv-arrow">&rarr;</span>
            <span class="sdv-layer-pill layer-build">Design &amp; Build</span>
            <span class="sdv-arrow">&rarr;</span>
            <span class="sdv-layer-pill layer-growth">Growth</span>
          </div>
        </div>

        <div class="sdv-header-right">
          <p class="sdv-sub">
            We start with who you're competing against and end with the campaigns that bring people to the site we just built. Whichever platform your business runs on &mdash; the build is only one layer.
          </p>
        </div>
      </div>

      <!-- Accordion: Services -->
      <div class="sdv-accordion">

        <!-- 01 — Website Design -->
        <div class="sdv-item is-open" id="sdv-web-design">
          <button class="sdv-item-trigger" aria-expanded="true" data-sdv-toggle="sdv-web-design">
            <span class="sdv-item-num">01</span>
            <span class="sdv-item-title" data-customizer="sdv_1_title"><?php echo esc_html(cr8v_mod("sdv_1_title", "Website Design")); ?></span>
            <span class="sdv-item-tag tag-build sdv-badge-blue">Build Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_webdesign.jpg'); ?>" alt="Website Design Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc" data-customizer="sdv_1_desc"><?php echo esc_html(cr8v_mod("sdv_1_desc", "High-converting digital experiences engineered for speed, search authority, and seamless user conversions. We design across every platform your business runs on — once the Figma design is approved, it gets handed to whichever build stack fits: WordPress, Shopify, WooCommerce, or fully custom code.")); ?></div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row" data-customizer="sdv_1_deliv_1"><?php echo esc_html(cr8v_mod("sdv_1_deliv_1", "Custom Figma UI Architecture")); ?></div>
                  <div class="sdv-deliverable-row">WordPress Builds &amp; Elementor Systems</div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_1_deliv_3"><?php echo esc_html(cr8v_mod("sdv_1_deliv_3", "Shopify Liquid Storefronts")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_1_deliv_4"><?php echo esc_html(cr8v_mod("sdv_1_deliv_4", "WooCommerce Custom Stores")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_1_deliv_5"><?php echo esc_html(cr8v_mod("sdv_1_deliv_5", "Built-in SEO from Line One")); ?></div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_1_cta_url", "/services/web-design/"))); ?>" class="sdv-panel-cta" data-customizer="sdv_1_cta_text"><?php echo esc_html(cr8v_mod("sdv_1_cta_text", "Explore Web Design")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_webdesign.jpg'); ?>" alt="Website Design Work">
                <span class="sdv-panel-visual-label sdv-badge-blue">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 02 — Custom Development -->
        <div class="sdv-item" id="sdv-custom-dev">
          <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-custom-dev">
            <span class="sdv-item-num">02</span>
            <span class="sdv-item-title" data-customizer="sdv_2_title"><?php echo esc_html(cr8v_mod("sdv_2_title", "Custom Development")); ?></span>
            <span class="sdv-item-tag tag-build sdv-badge-red">Build Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_customdev.jpg'); ?>" alt="Custom Dev Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc" data-customizer="sdv_2_desc"><?php echo esc_html(cr8v_mod("sdv_2_desc", "Tailored software architectures built from a blank file, engineered around your exact workflow. No templates, no SaaS dependencies, no monthly tool fees eating into your margin. When nothing off-the-shelf fits what you're building — this is where it starts.")); ?></div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row" data-customizer="sdv_2_deliv_1"><?php echo esc_html(cr8v_mod("sdv_2_deliv_1", "Bespoke Web Applications")); ?></div>
                  <div class="sdv-deliverable-row">Custom APIs &amp; Third-Party Integrations</div>
                  <div class="sdv-deliverable-row">Internal Business Tools &amp; Dashboards</div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_2_deliv_4"><?php echo esc_html(cr8v_mod("sdv_2_deliv_4", "100% Client-Owned Codebase")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_2_deliv_5"><?php echo esc_html(cr8v_mod("sdv_2_deliv_5", "0 Third-Party SaaS Dependencies")); ?></div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_2_cta_url", "/services/custom-dev/"))); ?>" class="sdv-panel-cta"><?php echo esc_html(cr8v_mod("sdv_2_cta_text", "Explore Custom Dev")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_customdev.jpg'); ?>" alt="Custom Development Work">
                <span class="sdv-panel-visual-label sdv-badge-red">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 03 — AI MVP Products -->
        <div class="sdv-item" id="sdv-ai-mvp">
          <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-ai-mvp">
            <span class="sdv-item-num">03</span>
            <span class="sdv-item-title" data-customizer="sdv_3_title"><?php echo esc_html(cr8v_mod("sdv_3_title", "AI MVP Products")); ?></span>
            <span class="sdv-item-tag tag-build sdv-badge-gold">Build Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_aimvp.jpg'); ?>" alt="AI MVP Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc" data-customizer="sdv_3_desc"><?php echo esc_html(cr8v_mod("sdv_3_desc", "Production-ready AI applications built to validate core business ideas with real users — not slide decks. We build AI-integrated products fast enough to get genuine market signal before you over-invest. When the idea validates, it hands directly into a full Custom Dev engagement.")); ?></div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row" data-customizer="sdv_3_deliv_1"><?php echo esc_html(cr8v_mod("sdv_3_deliv_1", "LLM-Integrated Web Applications")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_3_deliv_2"><?php echo esc_html(cr8v_mod("sdv_3_deliv_2", "AI-Powered Internal Tools")); ?></div>
                  <div class="sdv-deliverable-row">Rapid Prototyping &amp; Market Validation</div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_3_deliv_4"><?php echo esc_html(cr8v_mod("sdv_3_deliv_4", "Custom Model Pipelines")); ?></div>
                  <div class="sdv-deliverable-row">Fully Functional &mdash; Not a Demo</div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_3_cta_url", "/services/ai-mvp/"))); ?>" class="sdv-panel-cta"><?php echo esc_html(cr8v_mod("sdv_3_cta_text", "Explore AI MVP")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_aimvp.jpg'); ?>" alt="AI MVP Build">
                <span class="sdv-panel-visual-label sdv-badge-gold">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 04 — Brand Strategy -->
        <div class="sdv-item" id="sdv-brand-strategy">
          <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-brand-strategy">
            <span class="sdv-item-num">04</span>
            <span class="sdv-item-title" data-customizer="sdv_4_title"><?php echo esc_html(cr8v_mod("sdv_4_title", "Brand Strategy")); ?></span>
            <span class="sdv-item-tag tag-growth sdv-badge-white">Growth Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_brandstrategy.jpg'); ?>" alt="Brand Strategy Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc">
                  <strong>Competitor analysis, pricing scoping, and messaging frameworks</strong> that give the rest of the build direction before a single pixel is designed. This is also the foundation every ad campaign and piece of content we run for you is built on — get this right first, and everything downstream gets easier and cheaper.
                </div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row">Market Positioning &amp; Competitor Mapping</div>
                  <div class="sdv-deliverable-row">Messaging Frameworks &amp; Brand Voice</div>
                  <div class="sdv-deliverable-row">Pricing Scoping &amp; Value Proposition</div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_4_deliv_4"><?php echo esc_html(cr8v_mod("sdv_4_deliv_4", "Customer Profile Architecture")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_4_deliv_5"><?php echo esc_html(cr8v_mod("sdv_4_deliv_5", "Brand Identity Design (optional next step)")); ?></div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_4_cta_url", "/services/brand-strategy/"))); ?>" class="sdv-panel-cta"><?php echo esc_html(cr8v_mod("sdv_4_cta_text", "Explore Brand Strategy")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_brandstrategy.jpg'); ?>" alt="Brand Strategy Work">
                <span class="sdv-panel-visual-label sdv-badge-white">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 05 — SEO & Content -->
        <div class="sdv-item" id="sdv-seo">
          <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-seo">
            <span class="sdv-item-num">05</span>
            <span class="sdv-item-title" data-customizer="sdv_5_title"><?php echo esc_html(cr8v_mod("sdv_5_title", "SEO & Content")); ?></span>
            <span class="sdv-item-tag tag-growth sdv-badge-blue">Growth Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_seocontent.jpg'); ?>" alt="SEO & Content Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc">
                  <strong>Technical search work and content architecture</strong> that gets the site found. We fold SEO into every build from line one — but for sites that already exist, we audit, fix, and build the content layer that compounds over time. Paid acquisition works better once your organic foundation is solid.
                </div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row" data-customizer="sdv_5_deliv_1"><?php echo esc_html(cr8v_mod("sdv_5_deliv_1", "Semantic Keyword Mapping")); ?></div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_5_deliv_2"><?php echo esc_html(cr8v_mod("sdv_5_deliv_2", "Entity SEO Optimization")); ?></div>
                  <div class="sdv-deliverable-row">Technical SEO Audits &amp; Core Web Vitals</div>
                  <div class="sdv-deliverable-row">Content Architecture &amp; Cluster Strategy</div>
                  <div class="sdv-deliverable-row">E-Commerce Category &amp; Product SEO</div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_5_cta_url", "/services/seo-content/"))); ?>" class="sdv-panel-cta"><?php echo esc_html(cr8v_mod("sdv_5_cta_text", "Explore SEO & Content")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_seocontent.jpg'); ?>" alt="SEO Architecture Work">
                <span class="sdv-panel-visual-label sdv-badge-blue">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 06 — Digital Marketing -->
        <div class="sdv-item" id="sdv-digital-marketing">
          <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-digital-marketing">
            <span class="sdv-item-num">06</span>
            <span class="sdv-item-title" data-customizer="sdv_6_title"><?php echo esc_html(cr8v_mod("sdv_6_title", "Digital Marketing")); ?></span>
            <span class="sdv-item-tag tag-growth sdv-badge-red">Growth Layer</span>
            <div class="sdv-item-thumb">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_digimkt.jpg'); ?>" alt="Digital Marketing Preview">
            </div>
            <span class="sdv-item-chevron">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </span>
          </button>
          <div class="sdv-panel">
            <div class="sdv-panel-inner">
              <div class="sdv-panel-content">
                <div class="sdv-panel-spacer"></div>
                <div class="sdv-panel-desc">
                  <strong>Multi-channel campaigns and lead acquisition retainers</strong> built on the positioning your Brand Strategy work defined. If you haven't done positioning work with us yet, we fold a lightweight version into campaign setup — but a full Brand Strategy engagement first means faster, cheaper testing.
                </div>
                <div class="sdv-panel-right">
                  <div class="sdv-deliverable-row">Paid Social &amp; Search Campaign Management</div>
                  <div class="sdv-deliverable-row">Email Autoresponders &amp; Nurture Sequences</div>
                  <div class="sdv-deliverable-row" data-customizer="sdv_6_deliv_3"><?php echo esc_html(cr8v_mod("sdv_6_deliv_3", "Conversion Rate Audits")); ?></div>
                  <div class="sdv-deliverable-row">Target Audience &amp; Funnel Mapping</div>
                  <div class="sdv-deliverable-row">Monthly Retainer &amp; Performance Reporting</div>
                  <a href="<?php echo esc_url(home_url(cr8v_mod("sdv_6_cta_url", "/services/digital-marketing/"))); ?>" class="sdv-panel-cta"><?php echo esc_html(cr8v_mod("sdv_6_cta_text", "Explore Digital Marketing")); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </a>
                </div>
              </div>
              <div class="sdv-panel-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_home_sdv_digimkt.jpg'); ?>" alt="Digital Marketing Campaign Work">
                <span class="sdv-panel-visual-label sdv-badge-red">Capability Layer</span>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /sdv-accordion -->

    </div><!-- /sdv-inner -->
  </section>

  <script>
    // Services Deep Dive — Accordion Controller
    document.querySelectorAll('[data-sdv-toggle]').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const targetId = trigger.getAttribute('data-sdv-toggle');
        const item = document.getElementById(targetId);
        const isOpen = item.classList.contains('is-open');

        // Close all
        document.querySelectorAll('.sdv-item').forEach(i => {
          i.classList.remove('is-open');
          i.querySelector('[data-sdv-toggle]').setAttribute('aria-expanded', 'false');
        });

        // Open clicked (toggle)
        if (!isOpen) {
          item.classList.add('is-open');
          trigger.setAttribute('aria-expanded', 'true');
        }
      });
    });
  </script>

  <!-- ════════════════════════════════════════════════════════════════
       SECTION 7: DEV PLAYGROUND + FREE TOOLS
       White left / Brand Blue right split · Fox mascot straddles divide
       ════════════════════════════════════════════════════════════════ -->
  <style>
    /* ─────────────────────────────────────────────────────────────────
       DEV PLAYGROUND — WHITE / BRAND BLUE SPLIT
    ───────────────────────────────────────────────────────────────── */
    .dp-section {
      position: relative;
      overflow: clip;
      min-height: 680px;
      display: flex;
      background: #FFFFFF !important;
    }

    /* Left half: white */
    .dp-half-left {
      flex: 1;
      background: #FFFFFF !important;
      position: relative;
      display: flex;
      align-items: center;
      padding: 7rem 3.5rem 7rem 3.5rem;
      overflow: visible;
    }

    /* Right half: white with solid left border to break sections */
    .dp-half-right {
      flex: 1 !important;
      background-color: #FFFFFF !important;
      background-image: none !important;
      border-left: 1px solid rgba(8, 8, 8, 0.08) !important;
      position: relative !important;
      display: flex !important;
      align-items: center !important;
      padding: 7rem 3.5rem 7rem 5rem !important;
      overflow: visible !important;
      color: #080808 !important;
    }


    /* ── Left content ── */
    .dp-left-content {
      width: 100%;
      max-width: 480px;
      position: relative;
      z-index: 5 !important;
    }

    .dp-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--c8-blue);
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.35rem;
    }

    .dp-h2 {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(1.6rem, 3.2vw, 2.6rem);
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      line-height: 1.12;
      letter-spacing: 0.01em;
      margin-bottom: 1.25rem;
    }

    .dp-h2 em {
      font-style: normal;
      color: var(--c8-blue);
    }

    .dp-sub {
      font-family: 'DM Sans', sans-serif;
      font-size: 1rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.7;
      margin-bottom: 3rem;
    }

    /* Editorial numbered tool listing */
    .dp-tool-entries {
      display: flex;
      flex-direction: column;
      border-top: 1px solid rgba(8,8,8,0.1);
    }

    .dp-tool-entry {
      display: grid;
      grid-template-columns: 28px 1fr auto;
      align-items: center;
      gap: 1.25rem;
      padding: 1rem 0;
      border-bottom: 1px solid rgba(8,8,8,0.08);
      text-decoration: none;
      transition: all 0.25s ease;
      cursor: pointer;
    }

    .dp-tool-entry:hover { padding-left: 4px; }

    .dp-tool-entry-num {
      font-family: 'Space Mono', monospace;
      font-size: 0.68rem;
      color: rgba(8,8,8,0.25);
      letter-spacing: 0.06em;
    }

    .dp-tool-entry-body {
      flex: 1;
    }

    .dp-tool-entry-name {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--c8-ink);
      margin-bottom: 0.1rem;
      transition: color 0.25s ease;
    }

    .dp-tool-entry:hover .dp-tool-entry-name {
      color: var(--c8-blue);
    }

    .dp-tool-entry-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.78rem;
      font-weight: 300;
      color: var(--c8-muted);
    }

    .dp-tool-entry-icon {
      width: 32px;
      height: 32px;
      border-radius: 4px;
      background: rgba(0,71,225,0.07);
      border: none !important;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--c8-blue);
      transition: background 0.25s ease;
    }

    .dp-tool-entry:hover .dp-tool-entry-icon {
      background: var(--c8-blue);
      color: #fff;
    }

    /* ── Mascot: lives inside dp-half-left, overflows right to straddle split ── */
    .dp-mascot-wrap {
      position: absolute;
      right: -260px;
      bottom: -50px;
      width: 520px;
      z-index: 2;
      pointer-events: none;
    }

    .dp-mascot-wrap img,
    .dp-mascot-wrap video {
      width: 100%;
      height: auto;
      display: block;
      animation: dpFloat 4.5s ease-in-out infinite;
      pointer-events: none !important;
      user-select: none !important;
      -webkit-user-select: none !important;
    }

    @keyframes dpFloat {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-16px); }
    }

    /* ── Right content ── */
    .dp-right-content {
      width: 100%;
      max-width: 400px;
      margin-left: auto;
      position: relative;
      z-index: 2;
    }

    .dp-right-eyebrow {
      font-family: 'DM Sans', sans-serif;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: #0047E1 !important;
      margin-bottom: 2.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .dp-right-eyebrow::before {
      content: '';
      width: 22px;
      height: 1.5px;
      background: #0047E1 !important;
      flex-shrink: 0;
    }

    .dp-stat-pair {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem 2.5rem;
      margin-bottom: 3rem;
    }

    .dp-stat-item {}

    .dp-stat-num {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(2rem, 4vw, 2rem);
      font-weight: 700;
      color: #080808 !important;
      line-height: 1;
      margin-bottom: 0.3rem;
    }

    .dp-stat-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.78rem;
      font-weight: 400;
      color: #555555 !important;
      text-transform: uppercase;
      letter-spacing: 0.08em;
    }

    .dp-right-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.95rem;
      font-weight: 300;
      color: #333333 !important;
      line-height: 1.75;
      margin-bottom: 2.5rem;
      border-left: 2px solid #0047E1 !important;
      padding-left: 1.25rem;
    }

    .dp-cta-row {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    .dp-btn-ghost {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #0047E1 !important;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.85rem;
      font-weight: 500;
      border-bottom: 1px solid rgba(0, 71, 225, 0.35) !important;
      padding-bottom: 2px;
      transition: color 0.25s ease, border-color 0.25s ease;
    }

    .dp-btn-ghost:hover {
      color: #0037B5 !important;
      border-color: #0047E1 !important;
    }

    /* ── Mobile ── */
    @media (max-width: 900px) {
      .dp-section {
        flex-direction: column;
        min-height: auto;
        position: relative;
      }
      .dp-half-left {
        padding: 4rem 1.5rem 4rem 1.5rem;
      }
      .dp-half-right {
        padding: 4rem 1.5rem 4rem 1.5rem;
        overflow: hidden;
      }
      /* Mascot: behind content on mobile via z-index */
      .dp-mascot-wrap {
        z-index: 0;
        width: 260px;
        right: -30px;
        bottom: 0;
        opacity: 0.22;
      }
      .dp-right-content {
        margin-left: 0;
        max-width: 100%;
      }
      .dp-stat-pair {
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
      }
    }
  </style>

  <section class="dp-section" id="dev-playground">

    <!-- WHITE LEFT HALF -->
    <div class="dp-half-left">

      <!-- MASCOT: lives inside white half, overflows right to straddle the split on desktop -->
      <div class="dp-mascot-wrap">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dev_mascot_video.webm'); ?>" type="video/webm">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dev_mascot_video.mp4'); ?>" type="video/mp4">
          </video>
        </div>

      <div class="dp-left-content" style="position:relative;z-index:2;">
        <div class="dp-eyebrow" data-customizer="dp_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('dp_eyebrow', 'ALWAYS BUILDING')); ?></div>
        <h2 class="dp-h2" data-customizer="dp_heading"><?php echo esc_html(cr8v_mod('dp_heading', 'Built by us. Built to be useful.')); ?></h2>
        <p class="dp-sub" data-customizer="dp_sub">
          <?php echo esc_html(cr8v_mod('dp_sub', "Custom WordPress plugins and AI MVP tools we've built and use every day — some shipped, some still in progress. If we can build our own tools from scratch, we can build yours.")); ?>
        </p>

        <div class="dp-tool-entries">
          <a href="https://cr8vstacks.com/toolkits/website-cost-calculator/" class="dp-tool-entry">
            <span class="dp-tool-entry-num">01</span>
            <div class="dp-tool-entry-body">
              <div class="dp-tool-entry-name">Cost Calculator</div>
              <div class="dp-tool-entry-desc">Answer a few questions and get a realistic price range — before you ever book a call</div>
            </div>
            <div class="dp-tool-entry-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
          </a>

          <a href="/tools/stack-directory" class="dp-tool-entry">
            <span class="dp-tool-entry-num">02</span>
            <div class="dp-tool-entry-body">
              <div class="dp-tool-entry-name">The Stack Directory</div>
              <div class="dp-tool-entry-desc">Curated index of the best business tools across AI, design, dev, and ecommerce — all searchable from one place</div>
            </div>
            <div class="dp-tool-entry-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            </div>
          </a>

          <a href="https://cr8vstacks.com/dev-playground/" class="dp-tool-entry">
            <span class="dp-tool-entry-num">03</span>
            <div class="dp-tool-entry-body">
              <div class="dp-tool-entry-name"><?php echo esc_html(cr8v_mod("dp_t3_name", "Nativus Dashboard Pro")); ?></div>
              <div class="dp-tool-entry-desc"><?php echo esc_html(cr8v_mod("dp_t3_desc", "A custom WordPress admin dashboard plugin built for cleaner client handovers")); ?></div>
            </div>
            <div class="dp-tool-entry-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="4"></rect><rect x="3" y="10" width="7" height="11"></rect><rect x="13" y="3" width="8" height="11"></rect><rect x="13" y="17" width="8" height="4"></rect></svg>
            </div>
          </a>

          <a href="https://cr8vstacks.com/dev-playground/" class="dp-tool-entry">
            <span class="dp-tool-entry-num">04</span>
            <div class="dp-tool-entry-body">
              <div class="dp-tool-entry-name">WP Publishion AI</div>
              <div class="dp-tool-entry-desc">AI-assisted WordPress publishing — drafts, meta, and scheduling from one panel</div>
            </div>
            <div class="dp-tool-entry-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
            </div>
          </a>

          <a href="https://cr8vstacks.com/dev-playground/" class="dp-tool-entry">
            <span class="dp-tool-entry-num">05</span>
            <div class="dp-tool-entry-body">
              <div class="dp-tool-entry-name">LumiCode Syntax Highlighter</div>
              <div class="dp-tool-entry-desc">Lightweight code display plugin for WordPress — clean, themeable, zero dependencies</div>
            </div>
            <div class="dp-tool-entry-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- BLUE RIGHT HALF -->
    <div class="dp-half-right">
      <div class="dp-right-content">
        <div class="dp-right-eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod("dp_right_eyebrow", "NO GIMMICKS")); ?></div>

        <div class="dp-stat-pair">
          <div class="dp-stat-item">
            <div class="dp-stat-num" data-customizer="dp_stat_1_val"><?php echo esc_html(cr8v_mod("dp_stat_1_val", "5")); ?></div>
            <div class="dp-stat-label" data-customizer="dp_stat_1_lbl"><?php echo esc_html(cr8v_mod("dp_stat_1_lbl", "Tools Available")); ?></div>
          </div>
          <div class="dp-stat-item">
            <div class="dp-stat-num" data-customizer="dp_stat_2_val"><?php echo esc_html(cr8v_mod("dp_stat_2_val", "100%")); ?></div>
            <div class="dp-stat-label" data-customizer="dp_stat_2_lbl"><?php echo esc_html(cr8v_mod("dp_stat_2_lbl", "Instant Access")); ?></div>
          </div>
          <div class="dp-stat-item">
            <div class="dp-stat-num" data-customizer="dp_stat_3_val"><?php echo esc_html(cr8v_mod("dp_stat_3_val", "60s")); ?></div>
            <div class="dp-stat-label" data-customizer="dp_stat_3_lbl"><?php echo esc_html(cr8v_mod("dp_stat_3_lbl", "Avg. Time to Result")); ?></div>
          </div>
          <div class="dp-stat-item">
            <div class="dp-stat-num">&infin;</div>
            <div class="dp-stat-label">No Usage Limit</div>
          </div>
        </div>

        <p class="dp-right-desc"><?php echo esc_html(cr8v_mod("dp_right_desc", "These aren't lead magnets in disguise. Every tool runs in your browser. Take the output. No email capture, no follow-up sequence. We add tools regularly whenever something we built internally proves useful enough to open up.")); ?></p>

        <div class="dp-cta-row">
          <a href="<?php echo esc_url(cr8v_mod("dp_btn_primary_url", "https://cr8vstacks.com/dev-playground/")); ?>" class="dp-btn-primary" target="_blank" rel="noopener"><?php echo esc_html(cr8v_mod("dp_btn_primary_text", "Visit the Dev Playground")); ?>
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="dp-btn-ghost">
            Start a Project instead
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
    </div>

  </section>

  <!-- ════════════════════════════════════════════════════════════════
       SECTION 8: HOW WE WORK — Bento Grid Layout
       ════════════════════════════════════════════════════════════════ -->
  <style>
    /* ── HOW WE WORK ── */
    .hww-section {
      background: #F4F5F7 !important;
      padding: 7rem 3.5rem;
    }
    .hww-inner { max-width: 1360px; margin: 0 auto; }

    /* Header */
    .hww-header { text-align: left; max-width: 780px; margin: 0 0 3.5rem 0; }

    .hww-eyebrow {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--c8-blue);
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 0.35rem;
}

    .hww-h2 {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(1.5rem, 3.2vw, 2.6rem);
      font-weight: 700; color: var(--c8-ink);
      text-transform: uppercase; line-height: 1.1;
      letter-spacing: 0.01em; margin-bottom: 1.5rem;
    }
    .hww-h2 em { font-style: normal; color: var(--c8-blue); }

    .hww-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 1.05rem; font-weight: 300;
      color: var(--c8-muted); line-height: 1.85;
    }

    /* Bento Grid */
    .hww-bento {
      display: grid;
      grid-template-columns: 0.88fr 1fr 1.15fr 1.1fr;
      grid-template-rows: 285px 230px;
      gap: 1rem;
      border: none !important;
      background: transparent !important;
    }

    /* Cards base */
    .hww-card {
      border-radius: 4px !important;
      overflow: hidden;
      position: relative;
      border: none !important;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hww-card:hover { transform: translateY(-4px) !important; box-shadow: 0 20px 60px rgba(0,0,0,0.10) !important; }

    .hww-card-white  { background: var(--c8-surface-lift) !important; border: 1px solid rgba(0,0,0,0.08) !important; padding: 1.75rem; }
    .hww-card-blue   { background: var(--c8-blue); padding: 1.75rem; }
    .hww-card-dark   { background: #0A0A0A; padding: 1.75rem; }
    .hww-card-light  { background: #EAECF5; border: none !important; padding: 1.75rem; }

    /* Grid placement */
    .hww-c1 { grid-column: 1; grid-row: 1; }
    .hww-c2 { grid-column: 2; grid-row: 1 / span 2; padding: 0; }
    .hww-c3 { grid-column: 3; grid-row: 1; }
    .hww-c4 { grid-column: 4; grid-row: 1; }
    .hww-c5 { grid-column: 1; grid-row: 2; }
    .hww-c6 { grid-column: 3 / span 2; grid-row: 2; }

    /* Visual card image */
    .hww-visual-img {
      width: 100%; height: 100%;
      object-fit: cover; object-position: center top;
      display: block; transition: transform 0.5s ease;
    }
    .hww-c2:hover .hww-visual-img { transform: scale(1.04); }

    /* Card typography */
    .hww-clabel {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.68rem; font-weight: 700;
      letter-spacing: 0.18em; text-transform: uppercase;
      margin-bottom: 1rem;
    }
    .hww-clabel-blue  { color: var(--c8-blue); }
    .hww-clabel-dim   { color: rgba(255,255,255,0.4); }
    .hww-clabel-muted { color: rgba(0,0,0,0.35); }

    .hww-ctitle {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(0.82rem, 1.5vw, 0.95rem);
      font-weight: 700; text-transform: uppercase;
      letter-spacing: 0.02em; line-height: 1.3; margin-bottom: 0.6rem;
    }
    .hww-ctitle-ink   { color: var(--c8-ink); }
    .hww-ctitle-white { color: #FFFFFF; }

    .hww-cbody { font-family: 'DM Sans', sans-serif; font-size: 0.8rem; font-weight: 300; line-height: 1.6; }
    .hww-cbody-muted  { color: var(--c8-muted); }
    .hww-cbody-dim    { color: rgba(255,255,255,0.55); }

    /* Step list */
    .hww-steps { display: flex; flex-direction: column; gap: 0.65rem; margin-top: 0.85rem; }
    .hww-step  { display: flex; align-items: center; gap: 0.65rem; }
    .hww-step-n {
      font-family: 'Space Mono', monospace; font-size: 0.6rem;
      color: rgba(0,0,0,0.25); letter-spacing: 0.04em; min-width: 18px;
    }
    .hww-step-dot {
      width: 6px; height: 6px; border-radius: 50%;
      background: var(--c8-blue); flex-shrink: 0;
    }
    .hww-step-lbl {
      font-family: 'DM Sans', sans-serif; font-size: 0.8rem;
      font-weight: 500; color: var(--c8-ink);
    }

    /* Big number */
    .hww-bnum {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(2.2rem, 4.5vw, 3.6rem);
      font-weight: 700; line-height: 1; letter-spacing: -0.02em;
      margin-bottom: 0.5rem;
    }
    .hww-bnum-white { color: #FFFFFF; }
    .hww-bnum-ink   { color: var(--c8-ink); }

    .hww-stat-sub {
      font-family: 'DM Sans', sans-serif; font-size: 0.79rem;
      font-weight: 300; line-height: 1.55;
    }
    .hww-stat-sub-white { color: rgba(255,255,255,0.58); }
    .hww-stat-sub-ink   { color: var(--c8-muted); }

    /* Tech tags */
    .hww-tags { display: flex; flex-wrap: wrap; gap: 0.45rem; margin-top: 0.85rem; }
    .hww-tag {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.7rem; font-weight: 500;
      color: rgba(255,255,255,0.75);
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: 4px; padding: 4px 9px; letter-spacing: 0.02em;
      transition: color 0.2s, border-color 0.2s, background 0.2s;
      display: inline-flex; align-items: center; gap: 5px;
    }
    .hww-tag img { width: 12px; height: 12px; object-fit: contain; flex-shrink: 0; }
    .hww-tag:hover { color: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.35); background: rgba(255,255,255,0.07); }
    .hww-tag-framer { border-color: rgba(0,85,255,0.5); color: #7799FF; }
    .hww-tag-framer:hover { border-color: #0055FF; background: rgba(0,85,255,0.12); color: #99BBFF; }

    /* Timeline row */
    .hww-timeline { display: flex; align-items: flex-start; gap: 2rem; margin-top: 1.25rem; }
    .hww-tl-item  { flex: 1; display: flex; flex-direction: column; gap: 0.25rem; }
    .hww-tl-step  {
      font-family: 'Space Mono', monospace; font-size: 0.58rem;
      color: var(--c8-blue); letter-spacing: 0.1em; text-transform: uppercase;
    }
    .hww-tl-label {
      font-family: 'DM Sans', sans-serif; font-size: 0.85rem;
      font-weight: 600; color: var(--c8-ink);
    }
    .hww-tl-desc {
      font-family: 'DM Sans', sans-serif; font-size: 0.76rem;
      font-weight: 300; color: var(--c8-muted); line-height: 1.5;
    }
    .hww-tl-div {
      width: 1px; background: rgba(0,71,225,0.18); margin-top: 0.5rem;
      align-self: stretch; flex-shrink: 0;
    }

    /* Mobile */
    @media (max-width: 900px) {
      .hww-section { padding: 5rem 1.5rem; }
      .hww-bento {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
      }
      .hww-c1 { grid-column: 1; grid-row: auto; }
      .hww-c2 { grid-column: 2; grid-row: auto; min-height: 280px; }
      .hww-c3 { grid-column: 1; grid-row: auto; }
      .hww-c4 { grid-column: 2; grid-row: auto; }
      .hww-c5 { grid-column: 1; grid-row: auto; }
      .hww-c6 { grid-column: 1 / span 2; grid-row: auto; }
      .hww-timeline { flex-wrap: wrap; gap: 1.5rem; }
      .hww-tl-div { display: none; }
    }
    @media (max-width: 540px) {
      .hww-bento { grid-template-columns: 1fr; }
      .hww-c1, .hww-c2, .hww-c3, .hww-c4, .hww-c5, .hww-c6 {
        grid-column: 1; grid-row: auto;
      }
      .hww-c2 { min-height: 300px; }
    }
  </style>

  <section class="hww-section" id="how-we-work">
    <div class="c8-grain-overlay"></div>
    <div class="hww-inner">

      <div class="hww-header">
        <div class="hww-eyebrow" data-customizer="hww_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('hww_eyebrow', 'HOW WE WORK')); ?></div>
        <h2 class="hww-h2" data-customizer="hww_heading"><?php echo esc_html(cr8v_mod('hww_heading', "AI helps us move faster. It doesn't make the decisions.")); ?></h2>
        <p class="hww-desc" data-customizer="hww_sub">
          <?php echo esc_html(cr8v_mod('hww_sub', 'We use Claude, Gemini, ChatGPT, and Perplexity throughout our process — for research, drafting, and speeding up repetitive work. But direction, judgment, and quality control stay with our team on every project.')); ?>
        </p>
      </div>

      <div class="hww-bento">

        <!-- C1: Process Steps -->
        <div class="hww-card hww-card-white hww-c1">
          <div class="hww-clabel hww-clabel-blue">Sprint Model</div>
          <div class="hww-ctitle hww-ctitle-ink">Clear Steps.<br>Zero Surprises.</div>
          <div class="hww-steps">
            <div class="hww-step">
              <span class="hww-step-n">01</span>
              <span class="hww-step-dot"></span>
              <span class="hww-step-lbl">Discovery &amp; Brief</span>
            </div>
            <div class="hww-step">
              <span class="hww-step-n">02</span>
              <span class="hww-step-dot" style="opacity:0.65;"></span>
              <span class="hww-step-lbl">Architecture &amp; Design</span>
            </div>
            <div class="hww-step">
              <span class="hww-step-n">03</span>
              <span class="hww-step-dot" style="opacity:0.4;"></span>
              <span class="hww-step-lbl">Build &amp; Iterate</span>
            </div>
            <div class="hww-step">
              <span class="hww-step-n">04</span>
              <span class="hww-step-dot" style="opacity:0.2;"></span>
              <span class="hww-step-lbl">Launch &amp; Handover</span>
            </div>
          </div>
        </div>

        <!-- C2: Stacks visual (System 1 Chiaroscuro Beam) -->
        <div class="hww-card hww-c2">
          <img src="<?php echo esc_url(cr8v_mod("hww_c2_img", get_template_directory_uri() . "/assets/img/abstract/cr8v_hww_chiaroscuro_beam.jpg")); ?>" alt="Tech stack visualization" class="hww-visual-img" data-customizer="hww_c2_img">
        </div>

        <!-- C3: Sprint Stat (blue) -->
        <div class="hww-card hww-card-blue hww-c3">
          <div class="hww-clabel hww-clabel-dim">First Build Sprint</div>
          <div class="hww-bnum hww-bnum-white" data-customizer="hww_c3_stat"><?php echo esc_html(cr8v_mod("hww_c3_stat", "14 days")); ?></div>
          <p class="hww-stat-sub hww-stat-sub-white">
            <?php echo esc_html(cr8v_mod("hww_c3_sub", "From an approved brief to a working prototype your team can review, test, and give real feedback on.")); ?>
          </p>
        </div>

        <!-- C4: What Shapes Every Project (dark) -->
        <div class="hww-card hww-card-dark hww-c4">
          <div class="hww-clabel hww-clabel-dim">What Shapes Every Project</div>
          <div class="hww-ctitle hww-ctitle-white">No Black Boxes.<br>Just Craft.</div>
          <div class="hww-tags">
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/wordpress/ffffff" alt="">WordPress</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/shopify/ffffff" alt="">Shopify</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/nextdotjs/ffffff" alt="">Next.js</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/figma/F24E1E" alt="">Figma</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/react/61DAFB" alt="">React</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/python/ffffff" alt="">Python</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/elementor/E20025" alt="">Elementor</span>
            <span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg" alt="OpenAI">OpenAI</span>
            <span class="hww-tag"><img src="https://cdn.simpleicons.org/supabase/3ECF8E" alt="">Supabase</span>
            <span class="hww-tag hww-tag-framer"><img src="https://cdn.simpleicons.org/framer/6699FF" alt="">Framer</span>
          </div>
        </div>


        <!-- C5: Ownership Stat (white) -->
        <div class="hww-card hww-card-white hww-c5">
          <div class="hww-clabel hww-clabel-muted">Ownership</div>
          <div class="hww-bnum hww-bnum-ink" style="font-size:clamp(1.6rem,3vw,2.4rem);">100%</div>
          <p class="hww-stat-sub hww-stat-sub-ink">
            <?php echo esc_html(cr8v_mod("hww_c5_sub", "You own the code, domain, and data. No SaaS lock-in, no dependency on us to keep the lights on.")); ?>
          </p>
        </div>

        <!-- C6: What Ships With Every Project (light, spans 2 cols) -->
        <div class="hww-card hww-card-light hww-c6" style="position:relative;overflow:hidden;">
          <!-- Faint constellation texture bg -->
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/'); ?>c4_tools_bg.jpg" alt="" aria-hidden="true"
            style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;mix-blend-mode:multiply;opacity:0.08;pointer-events:none;">
          <div style="position:relative;z-index:1;">
            <div class="hww-clabel hww-clabel-blue">What Ships With Every Project</div>
            <div class="hww-timeline">
              <div class="hww-tl-item">
                <span class="hww-tl-step" data-customizer="hww_c6_i1_step"><?php echo esc_html(cr8v_mod("hww_c6_i1_step", "Brief")); ?></span>
                <span class="hww-tl-label">Scoped &amp; Signed</span>
                <span class="hww-tl-desc" data-customizer="hww_c6_i1_desc"><?php echo esc_html(cr8v_mod("hww_c6_i1_desc", "Fixed scope, fixed price. No surprise invoices mid-build or scope creep that costs you extra.")); ?></span>
              </div>
              <div class="hww-tl-div"></div>
              <div class="hww-tl-item">
                <span class="hww-tl-step" data-customizer="hww_c6_i2_step"><?php echo esc_html(cr8v_mod("hww_c6_i2_step", "Build")); ?></span>
                <span class="hww-tl-label" data-customizer="hww_c6_i2_lbl"><?php echo esc_html(cr8v_mod("hww_c6_i2_lbl", "Fully Documented")); ?></span>
                <span class="hww-tl-desc" data-customizer="hww_c6_i2_desc"><?php echo esc_html(cr8v_mod("hww_c6_i2_desc", "Technical handover docs included. Your team can pick it up from day one without needing us.")); ?></span>
              </div>
              <div class="hww-tl-div"></div>
              <div class="hww-tl-item">
                <span class="hww-tl-step" data-customizer="hww_c6_i3_step"><?php echo esc_html(cr8v_mod("hww_c6_i3_step", "Post-Launch")); ?></span>
                <span class="hww-tl-label" data-customizer="hww_c6_i3_lbl"><?php echo esc_html(cr8v_mod("hww_c6_i3_lbl", "30-Day Support")); ?></span>
                <span class="hww-tl-desc" data-customizer="hww_c6_i3_desc"><?php echo esc_html(cr8v_mod("hww_c6_i3_desc", "Every project includes a 30-day post-launch support window. No extra charge, no conditions.")); ?></span>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /hww-bento -->
    </div><!-- /hww-inner -->
  </section>

  <!-- ══════════════════════════════════════════════════
       SECTION 8: WHO WE ARE
  ══════════════════════════════════════════════════ -->
  <section class="wwa-section" id="who-we-are">
    <style>
      .wwa-section {
        background-color: #FFFFFF !important;
        background-image: none !important;
        padding: clamp(4rem, 7vw, 6rem) 0;
        position: relative;
        overflow: hidden;
        border-top: 1px solid rgba(8, 8, 8, 0.06);
        border-bottom: 1px solid rgba(8, 8, 8, 0.06);
      }
      .wwa-inner {
        max-width: 1360px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 5rem);
        position: relative;
        z-index: 1;
      }
      .wwa-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 2.5rem;
        border-bottom: 1px solid rgba(8,8,8,0.06);
        padding-bottom: 1.25rem;
      }
      .wwa-eyebrow {
        font-family: var(--font-mono);
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #0047E1;
      }
      .wwa-top-tag {
        font-family: var(--font-mono);
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        color: #555555;
      }
      .wwa-main-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        border: 1px solid rgba(8, 8, 8, 0.06);
        background: #FFFFFF;
      }
      .wwa-left-col {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 3.5rem;
        background: var(--c8-surface-lift);
        border-right: 1px solid rgba(8, 8, 8, 0.06);
      }
      .wwa-h2 {
        font-family: 'Michroma', sans-serif;
        font-size: clamp(1.8rem, 3.2vw, 2.6rem);
        font-weight: 700;
        color: #080808;
        line-height: 1.2;
        text-transform: uppercase;
        margin-bottom: 1.25rem;
      }
      .wwa-h2 em {
        font-style: normal;
        color: #0047E1;
      }
      .wwa-desc {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.98rem;
        font-weight: 300;
        color: #555555;
        line-height: 1.8;
        margin-bottom: 2rem;
      }
      .wwa-visual-card {
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid rgba(8,8,8,0.06);
        margin-top: 1rem;
        background: #FFFFFF;
      }
      .wwa-visual-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
      }
      .wwa-visual-card:hover .wwa-visual-img {
        transform: scale(1.02);
      }
      .wwa-visual-overlay {
        position: absolute;
        bottom: 0; inset-x: 0;
        padding: 1rem 1.25rem;
        background: rgba(255,255,255,0.92);
        backdrop-filter: blur(6px);
        border-top: 1px solid rgba(8,8,8,0.06);
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .wwa-visual-caption {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.8rem;
        color: #080808;
        font-weight: 500;
      }
      .wwa-visual-badge {
        font-family: 'Space Mono', monospace;
        font-size: 0.65rem;
        font-weight: 700;
        color: #0047E1;
        background: rgba(0,71,225,0.1);
        border: 1px solid rgba(0,71,225,0.2) !important;
        padding: 0.25rem 0.6rem;
        border-radius: 4px;
      }
      .wwa-right-col {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 3.5rem;
        background: var(--c8-surface-lift);
      }
      .wwa-features {
        display: flex;
        flex-direction: column;
        gap: 0;
        border: 1px solid rgba(8, 8, 8, 0.06);
        margin-bottom: 2rem;
      }
      .wwa-feat {
        display: flex;
        gap: 1.2rem;
        align-items: flex-start;
        padding: 1.5rem;
        background: var(--c8-surface-lift);
        border-bottom: 1px solid rgba(8,8,8,0.06);
        transition: background 0.3s ease;
      }
      .wwa-feat:last-child {
        border-bottom: none;
      }
      .wwa-feat:hover {
        background: #FFFFFF;
      }
      .wwa-feat-num {
        font-family: 'Space Mono', monospace;
        font-size: 0.85rem;
        font-weight: 700;
        color: #0047E1;
        background: rgba(0,71,225,0.1);
        width: 32px; height: 32px;
        border-radius: 4px;
        border: 1px solid rgba(0,71,225,0.2);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
      }
      .wwa-feat-title {
        font-family: 'Michroma', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #080808;
        text-transform: uppercase;
        margin-bottom: 0.35rem;
      }
      .wwa-feat-body {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.85rem;
        color: #555555;
        line-height: 1.6;
      }
      .wwa-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0;
        border: 1px solid rgba(8,8,8,0.06);
        background: var(--c8-surface-lift);
      }
      .wwa-stat {
        padding: 1.25rem 1rem;
        text-align: center;
        border-right: 1px solid rgba(8,8,8,0.06);
      }
      .wwa-stat:last-child {
        border-right: none;
      }
      .wwa-stat-num {
        font-family: 'Michroma', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        color: #0047E1;
      }
      .wwa-stat-label {
        font-family: 'Space Mono', monospace;
        font-size: 0.68rem;
        font-weight: 700;
        color: #555555;
        text-transform: uppercase;
        margin-top: 0.2rem;
      }
      @media (max-width: 900px) {
        .wwa-main-grid { grid-template-columns: 1fr; }
        .wwa-left-col { border-right: none; border-bottom: 1px solid rgba(8, 8, 8, 0.06); padding: 2.5rem 1.5rem; }
        .wwa-right-col { padding: 2.5rem 1.5rem; }
      }
    </style>

    <div class="wwa-inner">
      <div class="wwa-top">
        <div class="wwa-eyebrow" data-customizer="wwa_eyebrow"><span class="c8-eyebrow-slash">//</span> ABOUT CR8V STACKS</div>
        <div class="wwa-top-tag">CREATIVE STACKS AGENCY</div>
      </div>

      <div class="wwa-main-grid">
        <div class="wwa-left-col">
          <div>
            <h2 class="wwa-h2" data-customizer="wwa_heading">One team.<br><em>Every layer.</em></h2>
            <p class="wwa-desc">
              Strategy, design, and code — handled by the same team from first call to launch, not handed off between departments who have never spoken to each other. Whether we are validating an AI product MVP, rebuilding a property platform from scratch, or running SEO for a growing brand.
            </p>
          </div>
          
          <div class="wwa-visual-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/abstract/cr8v_about_negative_space.jpg'); ?>" alt="Cr8v Stacks Studio Workspace" class="wwa-visual-img">
            <div class="wwa-visual-overlay">
              <span class="wwa-visual-caption" data-customizer="wwa_caption"><?php echo esc_html(cr8v_mod("wwa_caption", "Built for execution, not pitch decks.")); ?></span>
              <span class="wwa-visual-badge" data-customizer="wwa_badge"><?php echo esc_html(cr8v_mod("wwa_badge", "IN-HOUSE STUDIO")); ?></span>
            </div>
          </div>
        </div>

        <div class="wwa-right-col">
          <div class="wwa-features">
            <div class="wwa-feat">
              <span class="wwa-feat-num">01</span>
              <div>
                <div class="wwa-feat-title" data-customizer="wwa_f1_title"><?php echo esc_html(cr8v_mod("wwa_f1_title", "Strategy First")); ?></div>
                <div class="wwa-feat-body">Every project begins with understanding your business goals, not just your brief. We scope transparently, then we build.</div>
              </div>
            </div>
            <div class="wwa-feat">
              <span class="wwa-feat-num">02</span>
              <div>
                <div class="wwa-feat-title" data-customizer="wwa_f2_title"><?php echo esc_html(cr8v_mod("wwa_f2_title", "Design & Build, Together")); ?></div>
                <div class="wwa-feat-body">Design and development do not hand off &mdash; they run together. Less revision back-and-forth. More precision in code.</div>
              </div>
            </div>
            <div class="wwa-feat">
              <span class="wwa-feat-num">03</span>
              <div>
                <div class="wwa-feat-title" data-customizer="wwa_f3_title"><?php echo esc_html(cr8v_mod("wwa_f3_title", "You Own Everything")); ?></div>
                <div class="wwa-feat-body">Code, domain, asset repos &mdash; yours from day one. No lock-in, no recurring fees just to keep the lights on.</div>
              </div>
            </div>
          </div>

          <div class="wwa-stats">
            <div class="wwa-stat">
              <div class="wwa-stat-num">5+</div>
              <div class="wwa-stat-label">Years Building</div>
            </div>
            <div class="wwa-stat">
              <div class="wwa-stat-num">3</div>
              <div class="wwa-stat-label">Continents Served</div>
            </div>
            <div class="wwa-stat">
              <div class="wwa-stat-num">100%</div>
              <div class="wwa-stat-label">Client Ownership</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ── GLOBAL SCROLL ANIMATIONS ── -->
  <style>
    /* Base state: invisible, slightly below */
    .anim-ready {
      opacity: 0;
      transform: translateY(28px);
      transition:
        opacity  0.7s cubic-bezier(0.16, 1, 0.3, 1),
        transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }
    /* Slide from left */
    .anim-ready.from-left  { transform: translateX(-36px); }
    /* Slide from right */
    .anim-ready.from-right { transform: translateX(36px); }
    /* Revealed state */
    .anim-ready.anim-in {
      opacity: 1;
      transform: none !important;
    }
    /* Ensure elements above the fold don't flash */
    .no-anim { opacity: 1 !important; transform: none !important; }
  </style>

  <script>
  (function () {
    'use strict';

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          /* Restore stagger delay on entry */
          var stored = entry.target.dataset.animDelay;
          if (stored) entry.target.style.transitionDelay = stored;
          entry.target.classList.add('anim-in');
        } else {
          /* Instant reverse — no delay when leaving viewport */
          entry.target.style.transitionDelay = '0ms';
          entry.target.classList.remove('anim-in');
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

    function register(el, extraClass, delay) {
      el.classList.add('anim-ready');
      if (extraClass) el.classList.add(extraClass);
      if (delay) {
        el.style.transitionDelay = delay + 'ms';
        el.dataset.animDelay = delay + 'ms'; /* Store for re-entry */
      }
      /* Skip elements already in viewport on load */
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        el.classList.add('no-anim');
        return;
      }
      observer.observe(el);
    }

    document.addEventListener('DOMContentLoaded', function () {

      /* ── How We Work bento cards — staggered ── */
      document.querySelectorAll('.hww-card').forEach(function (card, i) {
        register(card, null, i * 90);
      });

      /* ── HWW header ── */
      var hwwHeader = document.querySelector('.hww-header');
      if (hwwHeader) register(hwwHeader);

      /* ── Portfolio case sections — image slides from its side ── */
      document.querySelectorAll('.sw-case-section').forEach(function (sec, i) {
        var imgCol  = sec.querySelector('.sw-img-col');
        var copyCol = sec.querySelector('.sw-copy-col');
        var isEven  = i % 2 === 0;
        if (imgCol)  register(imgCol,  isEven ? 'from-right' : 'from-left', 0);
        if (copyCol) register(copyCol, isEven ? 'from-left'  : 'from-right', 120);
      });

      /* ── Services accordion rows ── */
      document.querySelectorAll('.sdv-item').forEach(function (item, i) {
        register(item, null, i * 60);
      });

      /* ── Dev Playground halves ── */
      var dpLeft  = document.querySelector('.dp-left-content');
      var dpRight = document.querySelector('.dp-right-content');
      if (dpLeft)  register(dpLeft,  'from-left');
      if (dpRight) register(dpRight, 'from-right', 150);

      /* ── Intro / Portfolio header ── */
      document.querySelectorAll('.sw-intro, .c8-eyebrow').forEach(function (el) {
        register(el);
      });

      /* ── Who We Are ── */
      var wwaCopy   = document.querySelector('.wwa-copy');
      var wwaVisual = document.querySelector('.wwa-visual');
      if (wwaCopy)   register(wwaCopy,   'from-left');
      if (wwaVisual) register(wwaVisual, 'from-right', 150);

    });
  })();
  </script>


  <!-- SECTION: TESTIMONIALS -->
  <style>
    .tmn-section {
      background: var(--c8-bg);
      padding: clamp(5rem, 9vw, 8rem) 0;
      position: relative;
    }
    .tmn-inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 clamp(1.5rem, 5vw, 4rem);
    }
    .tmn-header { text-align: left; max-width: 680px; margin: 0 0 3rem 0; }
    .tmn-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.68rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--c8-blue);
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      margin-bottom: 1.1rem;
      font-weight: 700;
    }
    .tmn-eyebrow-slash {
      color: var(--c8-blue);
      font-weight: 800;
      font-size: 0.85rem;
      margin-right: 2px;
    }
    .tmn-h2 {
      font-family: var(--font-heading);
      font-size: clamp(1.8rem, 3.5vw, 2.6rem);
      font-weight: 700;
      color: var(--c8-ink);
      letter-spacing: 0.02em;
      line-height: 1.25;
      margin-bottom: 1.1rem;
    }
    .tmn-sub {
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.7;
    }

    /* Seamless White Outer Wrapper Card */
    .tmn-wrapper-card {
      background: #FFFFFF;
      border: 1px solid var(--c8-line);
      border-radius: 4px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.04);
      display: grid;
      grid-template-columns: 110px 1fr;
      gap: 0;
      overflow: hidden;
      max-width: 1040px;
      margin: 0 auto;
      min-height: 480px;
    }
    .tmn-thumbs {
      display: flex;
      flex-direction: column;
      gap: 0;
      background: #F4F5F8;
      border-right: 1px solid var(--c8-line);
    }
    .tmn-thumb-btn {
      background: #F4F5F8;
      border: none;
      border-bottom: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 0;
      padding: 0;
      cursor: pointer;
      overflow: hidden;
      transition: all 0.3s ease;
      height: 25%;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .tmn-thumb-btn:last-child {
      border-bottom: none;
    }
    .tmn-thumb-btn:hover {
      background: #EAECEF;
    }
    .tmn-thumb-btn.is-active {
      background: #FFFFFF;
      box-shadow: inset -3px 0 0 var(--c8-blue);
    }
    .tmn-thumb-logo-img {
      width: 38px;
      height: 38px;
      object-fit: contain;
      transition: transform 0.3s ease, filter 0.3s ease;
      filter: grayscale(25%);
    }
    .tmn-thumb-btn:hover .tmn-thumb-logo-img,
    .tmn-thumb-btn.is-active .tmn-thumb-logo-img {
      filter: grayscale(0%);
      transform: scale(1.12);
    }

    /* Auto-Scroll Loading Progress Bar */
    .tmn-progress-bar {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: transparent;
      overflow: hidden;
    }
    .tmn-progress-fill {
      width: 0%;
      height: 100%;
      background: var(--c8-blue);
    }
    .tmn-thumb-btn.is-active .tmn-progress-fill {
      animation: tmnProgress 6s linear infinite;
    }
    @keyframes tmnProgress {
      0% { width: 0%; }
      100% { width: 100%; }
    }

    /* Main Card inside outer white wrapper */
    .tmn-card-main {
      background: #FFFFFF;
      border: none;
      border-radius: 0;
      padding: clamp(2.2rem, 4vw, 3.5rem);
      position: relative;
      overflow: hidden;
      min-height: 480px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .tmn-bg-quote {
      position: absolute;
      top: -4.5rem;
      right: 1.5rem;
      font-size: 40rem;
      line-height: 1;
      font-family: Georgia, serif;
      color: rgba(0, 71, 225, 0.035);
      pointer-events: none;
      user-select: none;
    }
    .tmn-content-wrapper {
      position: relative;
      z-index: 2;
    }
    .tmn-main-quote {
      font-family: var(--font-body);
      font-size: clamp(1.2rem, 1.8vw, 1.5rem);
      font-weight: 500;
      color: var(--c8-ink);
      line-height: 1.5;
      margin-bottom: 0.9rem;
    }
    .tmn-sub-quote {
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.65;
      margin-bottom: 2rem;
    }
    .tmn-card-footer {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      border-top: 1px dashed var(--c8-line);
      padding-top: 1.4rem;
    }
    .tmn-author-name {
      font-family: var(--font-body);
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--c8-ink);
      line-height: 1.3;
    }
    .tmn-author-role {
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 300;
      color: var(--c8-muted);
      margin-top: 2px;
    }
    .tmn-stars-row {
      display: flex;
      gap: 3px;
      color: var(--c8-blue);
    }
    .tmn-star-icon {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    /* Bottom Callout & Button matching Royal Blue Brand Color */
    .tmn-bottom-callout {
      text-align: center;
      margin-top: 3.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.2rem;
    }
    .tmn-callout-text {
      font-family: var(--font-body);
      font-size: 0.95rem;
      color: var(--c8-ink);
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .tmn-showcase {
        grid-template-columns: 1fr;
      }
      .tmn-thumbs {
        flex-direction: row;
        justify-content: center;
        flex-wrap: nowrap;
        gap: 0.4rem;
      }
      .tmn-thumb-btn {
        width: 78px;
        height: 75px;
        padding: 0.3rem;
      }
      .tmn-wrapper-card {
        grid-template-columns: 1fr;
        border-radius: 4px;
      }
      .tmn-tech-icon { font-size: 1.1rem; }
      .tmn-tech-label { font-size: 0.58rem; }
      .tmn-tech-tag { font-size: 0.5rem; }

      .hww-section {
        text-align: left;
      }
      .hww-header, .wwa-header {
        text-align: left;
      }
    }
  </style>

  <section class="tmn-section" id="testimonials">
    <div class="tmn-inner">
      
      <div class="tmn-header">
        <div class="tmn-eyebrow" data-customizer="testimonials_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('testimonials_eyebrow', 'WHAT CLIENTS SAY')); ?></div>
        <h2 class="tmn-h2" data-customizer="testimonials_heading"><?php echo esc_html(cr8v_mod('testimonials_heading', 'Real Feedback From Real Projects')); ?></h2>
        <p class="tmn-sub" data-customizer="testimonials_sub"><?php echo esc_html(cr8v_mod('testimonials_sub', 'Direct feedback from founders and engineering leaders who trusted Cr8v Stacks to build, optimize, and launch their custom digital platforms.')); ?></p>
      </div>

      <!-- Outer White Wrapper Container -->
      <div class="tmn-wrapper-card" id="tmn-showcase-container">
        <!-- Thumbnails Column: Official CDN Logos without text -->
        <div class="tmn-thumbs" id="tmn-thumbs">
          <button class="tmn-thumb-btn is-active" data-index="0" aria-label="View Shopify Ecommerce testimony">
            <img src="<?php echo esc_url(cr8v_mod("tmn_1_logo", "https://cdn.simpleicons.org/shopify/95BF47")); ?>" alt="Shopify" class="tmn-thumb-logo-img">
            <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
          </button>
          <button class="tmn-thumb-btn" data-index="1" aria-label="View Next.js SaaS testimony">
            <img src="<?php echo esc_url(cr8v_mod("tmn_2_logo", "https://cdn.simpleicons.org/nextdotjs/000000")); ?>" alt="Next.js" class="tmn-thumb-logo-img">
            <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
          </button>
          <button class="tmn-thumb-btn" data-index="2" aria-label="View OpenAI AI MVP testimony">
            <img src="<?php echo esc_url(cr8v_mod("tmn_3_logo", "https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg")); ?>" alt="OpenAI" class="tmn-thumb-logo-img">
            <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
          </button>
          <button class="tmn-thumb-btn" data-index="3" aria-label="View WordPress Custom Stack testimony">
            <img src="<?php echo esc_url(cr8v_mod("tmn_4_logo", "https://cdn.simpleicons.org/wordpress/21759B")); ?>" alt="WordPress" class="tmn-thumb-logo-img">
            <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
          </button>
        </div>

        <!-- Main Display Card -->
        <div class="tmn-card-main" id="tmn-card-main">
          <div class="tmn-bg-quote">&rdquo;</div>
          <div class="tmn-content-wrapper">
            <p class="tmn-main-quote" id="tmn-quote-main">
              "<?php echo esc_html(cr8v_mod('tmn_1_quote', 'They redesigned our entire site without ever making it feel like a redesign — it just felt like the version that should have existed from day one.')); ?>"
            </p>
            <p class="tmn-sub-quote" id="tmn-quote-sub">
              <?php echo esc_html(cr8v_mod('tmn_1_sub', 'Rebuilt cleanly with streamlined plugin architecture — our site performance and checkout conversion improved immediately after launch.')); ?>
            </p>
          </div>
          <div class="tmn-card-footer">
            <div>
              <div class="tmn-author-name" id="tmn-author-name"><?php echo esc_html(cr8v_mod('tmn_1_name', 'Sarah Whitfield')); ?></div>
              <div class="tmn-author-role" id="tmn-author-role"><?php echo esc_html(cr8v_mod('tmn_1_role', 'Founder, Ecommerce Brand — Toronto, Canada')); ?></div>
            </div>
            <div class="tmn-stars-row">
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="tmn-bottom-callout">
        <div class="tmn-callout-text" data-customizer="tmn_callout_text"><?php echo esc_html(cr8v_mod("tmn_callout_text", "See how impactful custom stacks make a difference?")); ?></div>
        <a href="<?php echo esc_url(home_url(cr8v_mod("tmn_callout_btn_url", "/discovery-call/"))); ?>" class="tmn-schedule-btn" data-customizer="tmn_callout_btn_text"><?php echo esc_html(cr8v_mod("tmn_callout_btn_text", "Schedule a Consultation")); ?></a>
      </div>

    </div>
  </section>

  <script>
    (function() {
      var testimonials = [
        {
          mainQuote: '"<?php echo esc_js(cr8v_mod('tmn_1_quote', 'They redesigned our entire site without ever making it feel like a redesign — it just felt like the version that should have existed from day one.')); ?>"',
          subQuote: '<?php echo esc_js(cr8v_mod('tmn_1_sub', 'Rebuilt cleanly with streamlined plugin architecture — our site performance and checkout conversion improved immediately after launch.')); ?>',
          name: '<?php echo esc_js(cr8v_mod('tmn_1_name', 'Sarah Whitfield')); ?>',
          role: '<?php echo esc_js(cr8v_mod('tmn_1_role', 'Founder, Ecommerce Brand — Toronto, Canada')); ?>'
        },
        {
          mainQuote: '"<?php echo esc_js(cr8v_mod('tmn_2_quote', 'The speed and attention to detail were unmatched. Our web application loads in under 0.6s globally.')); ?>"',
          subQuote: '<?php echo esc_js(cr8v_mod('tmn_2_sub', 'Clean component architecture and liquid motion engineering delivered exactly what our product team needed.')); ?>',
          name: '<?php echo esc_js(cr8v_mod('tmn_2_name', 'David Vance')); ?>',
          role: '<?php echo esc_js(cr8v_mod('tmn_2_role', 'VP of Product, SaaS Platform — Austin, TX')); ?>'
        },
        {
          mainQuote: '"<?php echo esc_js(cr8v_mod('tmn_3_quote', 'Cr8v Stacks took our raw AI model workflow and turned it into a polished, high-converting customer MVP in weeks.')); ?>"',
          subQuote: '<?php echo esc_js(cr8v_mod('tmn_3_sub', 'Their understanding of both AI integrations and conversion UI gave us an incredible competitive edge.')); ?>',
          name: '<?php echo esc_js(cr8v_mod('tmn_3_name', 'Marcus Chen')); ?>',
          role: '<?php echo esc_js(cr8v_mod('tmn_3_role', 'Co-Founder, AI Tech Studio — San Francisco, CA')); ?>'
        },
        {
          mainQuote: '"<?php echo esc_js(cr8v_mod('tmn_4_quote', 'Our booking conversion jumped 340% within 90 days of launching our custom platform.')); ?>"',
          subQuote: '<?php echo esc_js(cr8v_mod('tmn_4_sub', 'Bespoke hospitality architecture with zero bloat and 99.8% performance score.')); ?>',
          name: '<?php echo esc_js(cr8v_mod('tmn_4_name', 'Mark Duchesne')); ?>',
          role: '<?php echo esc_js(cr8v_mod('tmn_4_role', 'Founder, The Duch Apartments — London, UK')); ?>'
        }
      ];

      var currentIndex = 0;
      var autoScrollInterval = null;

      var thumbBtns = document.querySelectorAll('#tmn-thumbs .tmn-thumb-btn');
      var quoteMain = document.getElementById('tmn-quote-main');
      var quoteSub = document.getElementById('tmn-quote-sub');
      var authorName = document.getElementById('tmn-author-name');
      var authorRole = document.getElementById('tmn-author-role');
      var showcaseContainer = document.getElementById('tmn-showcase-container');

      function activateTestimonial(idx) {
        if (isNaN(idx) || !testimonials[idx]) return;
        currentIndex = idx;

        thumbBtns.forEach(function(b) {
          b.classList.remove('is-active');
          var fill = b.querySelector('.tmn-progress-fill');
          if (fill) {
            fill.style.animation = 'none';
            void fill.offsetWidth; // Force DOM reflow to restart CSS progress animation cleanly
            fill.style.animation = '';
          }
        });
        if (thumbBtns[idx]) thumbBtns[idx].classList.add('is-active');

        var data = testimonials[idx];
        quoteMain.innerHTML = data.mainQuote;
        quoteSub.innerHTML = data.subQuote;
        authorName.innerHTML = data.name;
        authorRole.innerHTML = data.role;
      }

      function startAutoScroll() {
        stopAutoScroll();
        autoScrollInterval = setInterval(function() {
          var nextIdx = (currentIndex + 1) % testimonials.length;
          activateTestimonial(nextIdx);
        }, 6000);
      }

      function stopAutoScroll() {
        if (autoScrollInterval) {
          clearInterval(autoScrollInterval);
          autoScrollInterval = null;
        }
      }

      thumbBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          var idx = parseInt(btn.getAttribute('data-index'), 10);
          activateTestimonial(idx);
          startAutoScroll(); // Reset timer on manual click
        });
      });

      if (showcaseContainer) {
        showcaseContainer.addEventListener('mouseenter', stopAutoScroll);
        showcaseContainer.addEventListener('mouseleave', startAutoScroll);
      }

      startAutoScroll();
    })();
  </script>

  <!-- SECTION: FAQ -->
  <section class="faq-section" id="faq">
    <div class="faq-inner">
      <div class="faq-aside">
        <div class="faq-eyebrow" data-customizer="faq_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('faq_eyebrow', 'COMMON QUESTIONS')); ?></div>
        <h2 class="faq-h2" data-customizer="faq_heading"><?php echo esc_html(cr8v_mod('faq_heading', 'Before You Reach Out')); ?></h2>
        <p class="faq-sub" data-customizer="faq_sub"><?php echo esc_html(cr8v_mod('faq_sub', 'Can\'t find what you\'re looking for? Just ask — no sales script, no pitch.')); ?></p>
        <a href="<?php echo esc_url(home_url(cr8v_mod('faq_cta_url', '/contact/'))); ?>" class="faq-cta-link" data-customizer="faq_cta_text">
          <?php echo esc_html(cr8v_mod('faq_cta_text', 'Talk to us')); ?>
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
      <ul class="faq-list" id="faq-list">
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_1_q", "How much does it cost to work with Cr8v Stacks?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod('faq_1_a', 'It depends on scope — a brochure site, an ecommerce store, and a custom AI MVP all price differently. Use our <a href="https://cr8vstacks.com/toolkits/website-cost-calculator/">cost calculator</a> for an instant range, or talk to us directly for a full quote.')); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_2_q", "How long does a typical project take?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_2_a", "Most website builds run a few weeks from approved design to launch; custom development and AI MVPs vary based on scope. We will give you a real timeline once we understand what you are building.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_3_q", "What services do you actually offer?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod('faq_3_a', 'Web design, AI MVP development, and custom development are our core focus — alongside brand strategy, brand identity, and digital marketing. See the full breakdown on our <a href="/services">Services page</a>.')); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_4_q", "Do you build on WordPress, Shopify, or something else?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_4_a", "All of the above, plus WooCommerce and fully custom builds. We recommend the platform based on what your business needs, not what is easiest for us.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_5_q", "Which payment gateways do you integrate?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_5_a", "This depends on your platform and region — we will confirm exact options (Stripe, Paystack, and others) once we know your setup.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_6_q", "Can you redesign or rebuild a site that already exists?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_6_a", "Yes — a large share of our work is exactly this. We have rebuilt everything from basic landing pages to full property platforms.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_7_q", "Is SEO included in a website build?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_7_a", "We build with SEO in mind from day one rather than bolting it on afterward, and we also offer SEO as a standalone service if your site already exists.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_8_q", "What support do you offer after launch?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_8_a", "Support scope varies by project — we will define exactly what is included before you sign off on anything, so there is no ambiguity post-launch.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_9_q", "Do you work with early-stage startups?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_9_a", "Yes, including AI MVP work specifically built to validate an early idea before a larger investment.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_10_q", "What is your take on AI?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_10_a", "We use AI to move faster on research and repetitive work. Direction, judgment, and quality control stay with our team on every project — AI does not lead the work, we do.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_11_q", "Why hire an agency instead of a freelancer?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_11_a", "A freelancer is one person covering every discipline. We are a team where design, development, and strategy each get real, dedicated expertise instead of one person doing their best across all of them.")); ?></p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q"><?php echo esc_html(cr8v_mod("faq_12_q", "What does Cr8v Stacks mean?")); ?></span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a"><?php echo wp_kses_post(cr8v_mod("faq_12_a", "Creative Stacks. Every project is built from different stacks of expertise — strategy, design, development, and marketing — layered together rather than handled by one generalist.")); ?></p></div></div></li>
      </ul>
    </div>
  </section>
  <script>
  (function(){
    var list=document.getElementById('faq-list');
    if(!list)return;
    list.addEventListener('click',function(e){
      var trigger=e.target.closest('.faq-trigger');
      if(!trigger)return;
      var item=trigger.closest('.faq-item');
      var isOpen=item.classList.contains('is-open');
      list.querySelectorAll('.faq-item.is-open').forEach(function(el){
        el.classList.remove('is-open');
        el.querySelector('.faq-trigger').setAttribute('aria-expanded','false');
      });
      if(!isOpen){item.classList.add('is-open');trigger.setAttribute('aria-expanded','true');}
    });
  })();
  </script>

  <!-- SECTION: FINAL CTA -->
  <section class="cta-section" id="contact">
    <div class="cta-inner">
      <div class="cta-arc-container">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
          <source src="<?php echo esc_url(cr8v_mod("cta_video_mp4", get_template_directory_uri() . "/assets/img/download.mp4")); ?>" type="video/mp4">
          <source src="<?php echo esc_url(cr8v_mod("cta_video_webm", get_template_directory_uri() . "/assets/img/seven_circular_badges.webm")); ?>" type="video/webm">
        </video>
      </div>

      <div class="cta-content-group">
        <div class="cta-badge" data-customizer="cta_eyebrow"><span class="c8-eyebrow-slash">//</span> <?php echo esc_html(cr8v_mod('cta_eyebrow', 'EASY TO EXPLORE')); ?></div>
        
        <h2 class="cta-h2" data-customizer="cta_heading">
          <?php echo esc_html(cr8v_mod('cta_heading', 'A simple approach to building your custom digital stacks.')); ?>
        </h2>

        <p class="cta-desc" data-customizer="cta_sub">
          <?php echo esc_html(cr8v_mod('cta_sub', 'Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.')); ?>
        </p>

        <div>
          <a href="<?php echo esc_url(home_url(cr8v_mod('cta_button_url', '/discovery-call/'))); ?>" class="cta-btn-pill" target="_blank" rel="noopener" data-customizer="cta_button_text">
            <?php echo esc_html(cr8v_mod('cta_button_text', 'Book a Consultation')); ?> <span class="cta-btn-arrow">&rarr;</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <script>
    // Live Matrix Text Scramble Script
    function initMatrixScramble() {
      var matrixButtons = document.querySelectorAll('.c8-btn-primary, .c8isv-btn-primary, .c8srv-btn-primary, .c8srv-price-btn, .c8isv-price-btn, .c8srv-explore, .c8isv-explore, .dp-btn-primary, .cta-btn-pill, .tmn-schedule-btn, .faq-cta-link, .btn-secondary, .dp-btn-ghost, .sdv-panel-cta, .c8-text-cta, .stage-link, a.is-primary, .c8srv-vs-priority-btn');
      var matrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      matrixButtons.forEach(function(btn) {
        if (btn._scrambleInitialized) return;
        btn._scrambleInitialized = true;

        btn.addEventListener('mouseenter', function() {
          var targetObj = btn.querySelector('span') || Array.from(btn.childNodes).find(function(n) { return n.nodeType === 3 && n.textContent.trim().length > 0; }) || btn;
          if (!btn.getAttribute('data-original-text')) {
            btn.setAttribute('data-original-text', targetObj.textContent.trim());
          }
          var originalText = btn.getAttribute('data-original-text');
          var iteration = 0;
          clearInterval(btn._scrambleTimer);

          btn._scrambleTimer = setInterval(function() {
            targetObj.textContent = originalText.split('')
              .map(function(char, index) {
                if (char === ' ' || index < iteration) return originalText[index];
                return matrixChars[Math.floor(Math.random() * matrixChars.length)];
              })
              .join('');

            if (iteration >= originalText.length) {
              clearInterval(btn._scrambleTimer);
              targetObj.textContent = originalText;
            }
            iteration += 1 / 2;
          }, 25);
        });

        btn.addEventListener('mouseleave', function() {
          var targetObj = btn.querySelector('span') || Array.from(btn.childNodes).find(function(n) { return n.nodeType === 3 && n.textContent.trim().length > 0; }) || btn;
          var originalText = btn.getAttribute('data-original-text');
          clearInterval(btn._scrambleTimer);
          if (originalText) {
            targetObj.textContent = originalText;
          }
        });
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initMatrixScramble);
    } else {
      initMatrixScramble();
    }
  </script>


  <!-- W3C POINTER EVENT ENGINE & UNIVERSAL ROUTE INVERSION FOR HOMEPAGE B -->
  <script>
    (function() {
      function snapTile(gridEl, tileEl, cellEl, pad) {
        if (!gridEl || !tileEl || !cellEl) return;
        var p = pad || 20;
        var gRect = gridEl.getBoundingClientRect();
        var cRect = cellEl.getBoundingClientRect();

        var left = cRect.left - gRect.left + p;
        var top = cRect.top - gRect.top + p;
        var width = cRect.width - (p * 2);
        var height = cRect.height - (p * 2);

        tileEl.style.left = left + 'px';
        tileEl.style.top = top + 'px';
        tileEl.style.width = width + 'px';
        tileEl.style.height = height + 'px';
      }

      function swapImage(imgGroup, activeIdx) {
        imgGroup.forEach(function(img, i) {
          if (i === activeIdx) {
            img.classList.add('is-active-img');
          } else {
            img.classList.remove('is-active-img');
          }
        });
      }

      var dGrid = document.getElementById('main-desk-grid');
      var dTile = document.getElementById('desk-tile');
      var dImgs = [
        document.getElementById('img-row-1'),
        document.getElementById('img-row-2'),
        document.getElementById('img-row-3')
      ];

      var currStateD = -1;
      var isInteractingD = false;
      var interactionTimerD = null;

      function getUniversalAvailableCell(rowIdx, preferredCol) {
        if (!dGrid) return null;
        var rowCells = dGrid.querySelectorAll('.c8-pg-cell[data-row="' + rowIdx + '"]');
        var pref = null;
        var inv1 = null;
        var inv2 = null;

        rowCells.forEach(function(cell) {
          if (cell.classList.contains('is-empty-slot')) {
            var col = parseInt(cell.getAttribute('data-col'));
            if (col === preferredCol) {
              pref = cell;
            } else if (!inv1) {
              inv1 = cell;
            } else {
              inv2 = cell;
            }
          }
        });

        return pref || inv1 || inv2 || rowCells[0];
      }

      function updateUniversalLPath() {
        if (isInteractingD || !dGrid) return;

        var r1Text = dGrid.querySelector('.c8-pg-cell[data-row="0"].is-text-card') || dGrid.children[0];
        var r2Text = dGrid.querySelector('.c8-pg-cell[data-row="1"].is-text-card') || dGrid.children[5];
        var r3Text = dGrid.querySelector('.c8-pg-cell[data-row="2"].is-text-card') || dGrid.children[6];

        if (!r1Text || !r2Text || !r3Text) return;

        var winH = window.innerHeight;
        var r1 = r1Text.getBoundingClientRect();
        var r2 = r2Text.getBoundingClientRect();
        var r3 = r3Text.getBoundingClientRect();

        var trigMid = winH * 0.55;
        var trigEnd = winH * 0.25;

        var newState = 0;
        if (r3.top <= trigEnd) newState = 3;
        else if (r3.top <= trigMid) newState = 2;
        else if (r2.top <= trigMid) newState = 1;
        else newState = 0;

        if (newState !== currStateD) {
          var prevState = currStateD;
          currStateD = newState;

          if (currStateD === 0) {
            var targetCell = getUniversalAvailableCell(0, 2);
            if (prevState === 1) {
              var cMid = getUniversalAvailableCell(0, 1);
              snapTile(dGrid, dTile, cMid, 20);
              setTimeout(function() {
                if (currStateD === 0) {
                  snapTile(dGrid, dTile, targetCell, 20);
                  swapImage(dImgs, 0);
                }
              }, 250);
            } else {
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, 0);
            }
          } 
          else if (currStateD === 1) {
            var targetCell = getUniversalAvailableCell(1, 1);
            if (prevState === 0) {
              var cMid = getUniversalAvailableCell(0, 1);
              snapTile(dGrid, dTile, cMid, 20);
              setTimeout(function() {
                if (currStateD === 1) {
                  snapTile(dGrid, dTile, targetCell, 20);
                  swapImage(dImgs, 1);
                }
              }, 250);
            } else {
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, 1);
            }
          } 
          else if (currStateD === 2) {
            var targetCell = getUniversalAvailableCell(2, 1);
            snapTile(dGrid, dTile, targetCell, 20);
            swapImage(dImgs, 2);
          } 
          else if (currStateD === 3) {
            var targetCell = getUniversalAvailableCell(2, 2);
            snapTile(dGrid, dTile, targetCell, 20);
            swapImage(dImgs, 2);
          }
        }
      }

      var activePointerTarget = null;

      if (dGrid) {
        dGrid.addEventListener('pointerdown', function(e) {
          var textCard = e.target.closest('.is-text-card');
          var emptySlot = e.target.closest('.is-empty-slot');
          var tile = e.target.closest('#desk-tile');

          if (textCard || emptySlot || tile) {
            isInteractingD = true;
            activePointerTarget = textCard || emptySlot || tile;
            clearTimeout(interactionTimerD);
          }
        });

        dGrid.addEventListener('pointerup', function(e) {
          if (!activePointerTarget) return;

          var targetCell = e.target.closest('.c8-pg-cell');
          if (targetCell) {
            if (activePointerTarget.id === 'desk-tile' || activePointerTarget.classList.contains('is-empty-slot')) {
              var imgIdx = parseInt(targetCell.getAttribute('data-img-idx')) || 0;
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, imgIdx);
            } else if (activePointerTarget.classList.contains('is-text-card') && targetCell !== activePointerTarget) {
              var tempHTML = targetCell.innerHTML;
              targetCell.innerHTML = activePointerTarget.innerHTML;
              activePointerTarget.innerHTML = tempHTML;

              var tempClass = targetCell.className;
              targetCell.className = activePointerTarget.className;
              activePointerTarget.className = tempClass;
            }
          }

          activePointerTarget = null;
          interactionTimerD = setTimeout(function() {
            isInteractingD = false;
            currStateD = -1;
            updateUniversalLPath();
          }, 1500);
        });
      }

      window.addEventListener('scroll', updateUniversalLPath, { passive: true });
      window.addEventListener('resize', updateUniversalLPath, { passive: true });
      document.addEventListener('DOMContentLoaded', updateUniversalLPath);
      window.addEventListener('load', updateUniversalLPath);

      setTimeout(function() {
        updateUniversalLPath();
      }, 100);
    })();
  </script>

<!-- MASTER MODERNIZED AGENCY FOOTER -->
  <!-- MASTER MODERNIZED AGENCY FOOTER -->
  
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>

  <!-- 3D TETRIS HERO MOTION ENGINE -->
  <script>

    let activePiece = null;

    function setMode(mode) {
      document.body.className = 'mode-' + mode;
      const btns = document.querySelectorAll('.state-btn');
      btns.forEach(btn => btn.classList.remove('active'));
      if (mode === '70') btns[0].classList.add('active');
      if (mode === '100') btns[1].classList.add('active');
      
      const status = document.getElementById('hudStatus');
      if (status) {
        status.textContent = mode === '70' ? 
          'STATE A (70% IN-MOTION): BASE FLOOR BLOCKS RESTING + 4 AIRBORNE BLOCKS FLOATING ABOVE MATRIX' : 
          'STATE B (100% ASSEMBLED): ALL 4 AIRBORNE BLOCKS DOCKED FLUSH INTO MATRIX MATCHING SCREENSHOT (INPUT_FILE_0.PNG)';
      }
    }

    // ════════════════════════════════════════════════════════════════
    // REAL-TIME CELL COLLISION DETECTION & ANTI-OVERLAY ENGINE
    // ════════════════════════════════════════════════════════════════
    document.addEventListener('DOMContentLoaded', () => {
      const pieces = document.querySelectorAll('.t-piece');
      const hudStatus = document.getElementById('hudStatus');

      function getOccupiedMatrix(movingPiece) {
        const matrix = Array.from({length: 18}, () => Array(8).fill(false));
        const mode = document.body.className.includes('mode-100') ? '100' : '70';
        
        pieces.forEach(p => {
          if (p === movingPiece) return;
          
          if (mode === '70' && p.classList.contains('docked-socket')) return;
          if (mode === '100' && p.closest('.airborne-layer')) return;
          if (p.offsetWidth === 0 || p.offsetHeight === 0) return;

          const style = window.getComputedStyle(p);
          const colStart = parseInt(p.dataset.col || style.gridColumnStart || '1');
          const rowStart = parseInt(p.dataset.row || style.gridRowStart || '1');

          const dX = Math.round((p._translateX || 0) / 56);
          const dY = Math.round((p._translateY || 0) / 56);

          const finalCol = colStart + dX;
          const finalRow = rowStart + dY;

          const cells = p.querySelectorAll('.t-cell');
          cells.forEach(cell => {
            if (cell.querySelector('.t-shape-body')) {
              const cellColOffset = (parseInt(cell.style.gridColumn || '1') - 1);
              const cellRowOffset = (parseInt(cell.style.gridRow || '1') - 1);

              const c = finalCol + cellColOffset;
              const r = finalRow + cellRowOffset;

              if (c >= 1 && c <= 17 && r >= 1 && r <= 7) {
                matrix[c][r] = true;
              }
            }
          });
        });

        return matrix;
      }

      function checkCollision(piece, tx, ty) {
        const matrix = getOccupiedMatrix(piece);
        const style = window.getComputedStyle(piece);
        const colStart = parseInt(piece.dataset.col || style.gridColumnStart || '1');
        const rowStart = parseInt(piece.dataset.row || style.gridRowStart || '1');

        const dX = Math.round(tx / 56);
        const dY = Math.round(ty / 56);

        const targetCol = colStart + dX;
        const targetRow = rowStart + dY;

        let hasCollision = false;

        const cells = piece.querySelectorAll('.t-cell');
        cells.forEach(cell => {
          if (cell.querySelector('.t-shape-body')) {
            const cellColOffset = (parseInt(cell.style.gridColumn || '1') - 1);
            const cellRowOffset = (parseInt(cell.style.gridRow || '1') - 1);

            const c = targetCol + cellColOffset;
            const r = targetRow + cellRowOffset;

            if (c < 1 || c > 17 || r < 1 || r > 7 || matrix[c][r]) {
              hasCollision = true;
            }
          }
        });

        return hasCollision;
      }

      pieces.forEach(piece => {
        if (!piece.dataset.rotation) piece.dataset.rotation = '0';
        if (!piece.dataset.flipX) piece.dataset.flipX = '1';
        if (!piece.dataset.flipY) piece.dataset.flipY = '1';

        let isDragging = false;
        let startX, startY;
        let currentTranslateX = 0, currentTranslateY = 0;
        let lastValidX = 0, lastValidY = 0;

        const rotateBtn = piece.querySelector('.t-rotate-handle');
        if (rotateBtn) {
          rotateBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            rotatePiece(piece);
          });
        }

        const flipHBtn = piece.querySelector('.t-fliph-handle');
        if (flipHBtn) {
          flipHBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            flipPieceHorizontal(piece);
          });
        }

        const flipVBtn = piece.querySelector('.t-flipv-handle');
        if (flipVBtn) {
          flipVBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            flipPieceVertical(piece);
          });
        }

        piece.addEventListener('dblclick', (e) => {
          if (e.target.classList.contains('t-handle')) return;
          e.stopPropagation();
          rotatePiece(piece);
        });

        piece.addEventListener('pointerdown', (e) => {
          if (e.target.classList.contains('t-handle')) return;
          
          pieces.forEach(p => p.classList.remove('is-selected', 'is-colliding'));
          piece.classList.add('is-selected');
          activePiece = piece;

          isDragging = true;
          piece.classList.add('is-dragging');
          piece.setPointerCapture(e.pointerId);

          startX = e.clientX - currentTranslateX;
          startY = e.clientY - currentTranslateY;

          updateHudState(piece, 'DRAGGING...');
        });

        piece.addEventListener('pointermove', (e) => {
          if (!isDragging) return;
          currentTranslateX = e.clientX - startX;
          currentTranslateY = e.clientY - startY;

          const isColliding = checkCollision(piece, currentTranslateX, currentTranslateY);

          if (isColliding) {
            piece.classList.add('is-colliding');
            if (hudStatus) {
              const name = (piece.dataset.name || 'Block').toUpperCase();
              hudStatus.textContent = `WARNING: [${name}] COLLISION DETECTED — REJECTED (SOLID BLOCK BOUNDARY)`;
            }
          } else {
            piece.classList.remove('is-colliding');
            lastValidX = currentTranslateX;
            lastValidY = currentTranslateY;
            updateHudState(piece, 'DRAGGING...');
          }

          applyPieceTransform(
            piece, 
            currentTranslateX, 
            currentTranslateY, 
            parseInt(piece.dataset.rotation || '0'),
            parseInt(piece.dataset.flipX || '1'),
            parseInt(piece.dataset.flipY || '1')
          );
        });

        const endDrag = (e) => {
          if (!isDragging) return;
          isDragging = false;
          piece.classList.remove('is-dragging');
          try { piece.releasePointerCapture(e.pointerId); } catch(err) {}

          const isColliding = checkCollision(piece, currentTranslateX, currentTranslateY);

          if (isColliding) {
            currentTranslateX = lastValidX;
            currentTranslateY = lastValidY;
            applyPieceTransform(
              piece, 
              currentTranslateX, 
              currentTranslateY, 
              parseInt(piece.dataset.rotation || '0'),
              parseInt(piece.dataset.flipX || '1'),
              parseInt(piece.dataset.flipY || '1')
            );
            piece.classList.remove('is-colliding');
            if (hudStatus) {
              const name = (piece.dataset.name || 'Block').toUpperCase();
              hudStatus.textContent = `PHYSICS SNAP: [${name}] LANDED ON SOLID SURFACE (OVERLAP PREVENTED)`;
            }
          } else {
            updateHudState(piece, 'LANDED');
          }
        };

        piece.addEventListener('pointerup', endDrag);
        piece.addEventListener('pointercancel', endDrag);
      });

      document.addEventListener('keydown', (e) => {
        if (!activePiece) return;
        const key = e.key.toLowerCase();

        if (key === 'r' || key === ' ') {
          e.preventDefault();
          rotatePiece(activePiece);
        } else if (key === 'f' || key === 'h') {
          e.preventDefault();
          flipPieceHorizontal(activePiece);
        } else if (key === 'v') {
          e.preventDefault();
          flipPieceVertical(activePiece);
        }
      });

      function rotatePiece(piece) {
        let currentRot = parseInt(piece.dataset.rotation || '0');
        let newRot = (currentRot + 90) % 360;
        piece.dataset.rotation = newRot.toString();

        applyPieceTransform(
          piece, 
          piece._translateX || 0, 
          piece._translateY || 0, 
          newRot,
          parseInt(piece.dataset.flipX || '1'),
          parseInt(piece.dataset.flipY || '1')
        );
        updateHudState(piece, 'ROTATED 90°');
      }

      function flipPieceHorizontal(piece) {
        let currentFlipX = parseInt(piece.dataset.flipX || '1');
        let newFlipX = currentFlipX * -1;
        piece.dataset.flipX = newFlipX.toString();

        applyPieceTransform(
          piece, 
          piece._translateX || 0, 
          piece._translateY || 0, 
          parseInt(piece.dataset.rotation || '0'),
          newFlipX,
          parseInt(piece.dataset.flipY || '1')
        );
        updateHudState(piece, 'HORIZONTALLY FLIPPED');
      }

      function flipPieceVertical(piece) {
        let currentFlipY = parseInt(piece.dataset.flipY || '1');
        let newFlipY = currentFlipY * -1;
        piece.dataset.flipY = newFlipY.toString();

        applyPieceTransform(
          piece, 
          piece._translateX || 0, 
          piece._translateY || 0, 
          parseInt(piece.dataset.rotation || '0'),
          parseInt(piece.dataset.flipX || '1'),
          newFlipY
        );
        updateHudState(piece, 'VERTICALLY FLIPPED');
      }

      function applyPieceTransform(piece, tx, ty, rot, fx, fy) {
        piece._translateX = tx;
        piece._translateY = ty;
        piece.style.transform = `translate3d(${tx}px, ${ty}px, 0) rotate(${rot}deg) scale(${fx}, ${fy})`;
      }

      function updateHudState(piece, actionText) {
        if (!hudStatus) return;
        const name = (piece.dataset.name || 'Block').toUpperCase();
        const rot = piece.dataset.rotation || '0';
        const fx = piece.dataset.flipX === '-1' ? 'H-FLIPPED' : 'NORMAL-H';
        const fy = piece.dataset.flipY === '-1' ? 'V-FLIPPED' : 'NORMAL-V';
        hudStatus.textContent = `ACTIVE: [${name}] | ROTATION: ${rot}° | FLIP: ${fx} / ${fy} | ACTION: ${actionText}`;
      }

      // ════════════════════════════════════════════════════════════════
      // DIRECT DOM SCROLL & PLAY ANIMATION ENGINE
      // ════════════════════════════════════════════════════════════════
      const btnStateA = document.getElementById('btnStateA');
      const btnStateB = document.getElementById('btnStateB');
      const btnPlayDOM = document.getElementById('btnPlayDOM');

      const airWoo = document.querySelector('.air-wp-purple');
      const airNext = document.querySelector('.air-nextjs');
      const airYellow = document.querySelector('.air-amber-l');
      const airGreen = document.querySelector('.air-green-z');

      const sockWoo = document.querySelector('.docked-socket[data-name="Purple WooCommerce L-Piece"]');
      const sockNext = document.querySelector('.docked-socket[data-name="Next.js"]');
      const sockYellow = document.querySelector('.docked-socket[data-name="Golden Yellow L"]');
      const sockGreen = document.querySelector('.docked-socket[data-name="Lime Green Lemon Z"]');

      // User-Calibrated 2D Trajectory Keyframe Vectors (Exact Visual Calibrator Output)
      const vectorTargets = {
        woo:    { dX: 148,  dY: 469, rot: 0,  flipX: 1 },   // Socket 1 (Purple WooCommerce L)
        next:   { dX: 168,  dY: 332, rot: 0,  flipX: 1 },   // Socket 2 (Next.js 1x3 Bar)
        yellow: { dX: -540, dY: 320, rot: 90, flipX: -1 },  // Socket 3 (Golden Yellow L)
        green:  { dX: -75,  dY: 425, rot: 0,  flipX: 1 }    // Socket 4 (Lime Green Lemon Z)
      };
      let isPlayingAnim = false;

      function calculateVectorTargets() {
        // Constant exact grid cell vectors, no DOM measurement needed
      }

      function updateScrollProgress(p) {
        const progress = Math.min(1, Math.max(0, p));
        const pct = Math.round(progress * 100);

        if (btnStateA && btnStateB) {
          btnStateA.classList.toggle('active', pct === 0);
          btnStateB.classList.toggle('active', pct === 100);
        }

        if (!vectorTargets) calculateVectorTargets();

        // WAVE 1 (0% -> 50% Scroll Progress): Next.js Bar & Golden Yellow L (Nearest Pair)
        const tWave1 = Math.min(1, Math.max(0, progress / 0.5));

        // 1. Next.js Bar (Wave 1)
        if (airNext && vectorTargets.next) {
          const xNext = tWave1 * vectorTargets.next.dX;
          const yNext = tWave1 * vectorTargets.next.dY;
          const rotNext = -16 * (1 - tWave1);
          airNext.style.transform = `translate3d(${xNext}px, ${yNext}px, 0) rotate(${rotNext}deg)`;
        }

        // 2. Golden Yellow L-Piece (Wave 1 - Mid-air rotation past CTA zone)
        if (airYellow && vectorTargets.yellow) {
          const xYellow = tWave1 * vectorTargets.yellow.dX;
          const yYellow = tWave1 * vectorTargets.yellow.dY;
          let rotYellow = 0;
          let flipX = 1;

          if (tWave1 <= 0.40) {
            // Mid-air spin & flip as it glides past CTA buttons (22° -> 90°)
            const norm = tWave1 / 0.40;
            rotYellow = 22 + (norm * 68);
            flipX = 1 - (norm * 2);
          } else {
            // Settles smoothly into Socket 3 (90° -> 0°)
            const norm = (tWave1 - 0.40) / 0.60;
            rotYellow = 90 * (1 - norm);
            flipX = -1 + (norm * 2);
          }
          airYellow.style.transform = `translate3d(${xYellow}px, ${yYellow}px, 0) rotate(${rotYellow}deg) scaleX(${flipX})`;
        }

        // WAVE 2 (50% -> 100% Scroll Progress): WooCommerce L & Lime Green Z
        const tWave2 = Math.min(1, Math.max(0, (progress - 0.5) / 0.5));

        // 3. WooCommerce Purple L-Piece (Wave 2)
        if (airWoo && vectorTargets.woo) {
          const xWoo = tWave2 * vectorTargets.woo.dX;
          const yWoo = tWave2 * vectorTargets.woo.dY;
          const rotWoo = -10 * (1 - tWave2);
          airWoo.style.transform = `translate3d(${xWoo}px, ${yWoo}px, 0) rotate(${rotWoo}deg)`;
        }

        // 4. Lime Green Lemon Z-Piece (Wave 2)
        if (airGreen && vectorTargets.green) {
          const xGreen = tWave2 * vectorTargets.green.dX;
          const yGreen = tWave2 * vectorTargets.green.dY;
          const rotGreen = 12 * (1 - tWave2);
          airGreen.style.transform = `translate3d(${xGreen}px, ${yGreen}px, 0) rotate(${rotGreen}deg)`;
        }

        // Handle Docked Sockets Opacity at 100%
        const isFullyAssembled = progress >= 0.99;
        [sockWoo, sockNext, sockYellow, sockGreen].forEach(s => {
          if (!s) return;
          s.style.opacity = isFullyAssembled ? '1' : '0';
        });

        if (hudStatus) {
          if (progress === 0) {
            hudStatus.textContent = 'STATE A (0% SCROLL): 4 AIRBORNE FLOATING BLOCKS HOVERING IN SPACE';
          } else if (progress < 0.5) {
            hudStatus.textContent = `📜 WAVE 1 SCROLL (${pct}%): NEXT.JS & GOLDEN YELLOW L GLIDING... MID-AIR ROTATION PAST CTA ZONE!`;
          } else if (progress < 1.0) {
            hudStatus.textContent = `📜 WAVE 2 SCROLL (${pct}%): WOOCOMMERCE & LIME GREEN Z DESCENDING INTO RESTING SOCKETS...`;
          } else {
            hudStatus.textContent = 'STATE B (100% SCROLL): ALL 4 BLOCKS DOCKED FLUSH INTO MATRIX RESTING SOCKETS!';
          }
        }
      }

      // Bind Page Scroll Directly to Animate DOM Blocks
      window.addEventListener('scroll', () => {
        if (isPlayingAnim) return;
        const track = document.getElementById('heroScrollTrack');
        if (!track) return;
        const rect = track.getBoundingClientRect();
        const winH = window.innerHeight;
        const totalDist = rect.height - winH;
        if (totalDist <= 0) return;
        const scrolled = -rect.top;
        const p = Math.min(1, Math.max(0, scrolled / totalDist));
        updateScrollProgress(p);
      });

      // Play Direct DOM Motion Function (Smooth 2.5s Auto Play)
      window.playDirectDOMAnimation = function() {
        if (isPlayingAnim) return;
        isPlayingAnim = true;
        
        let startVal = 0;
        const duration = 2400; // 2.4 seconds smooth ease
        const startTime = performance.now();

        function step(now) {
          const elapsed = now - startTime;
          const p = Math.min(1, elapsed / duration);
          // Smooth Easing (cubic-bezier easeInOut)
          const easeP = p < 0.5 ? 2 * p * p : 1 - Math.pow(-2 * p + 2, 2) / 2;
          updateScrollProgress(easeP);

          if (p < 1) {
            requestAnimationFrame(step);
          } else {
            isPlayingAnim = false;
          }
        }

        requestAnimationFrame(step);
      };

      // Window Resize Listener
      window.addEventListener('resize', () => {
        calculateVectorTargets();
        updateScrollProgress(0);
      });

      // Override global setMode to update progress directly
      window.setMode = function(mode) {
        document.body.className = mode === '100' ? 'mode-100' : 'mode-70';
        const targetP = mode === '100' ? 1.0 : 0.0;
        updateScrollProgress(targetP);
      };

      // Toggle Floating Viewport Path Calibrator HUD
      window.toggleCalibratorHUD = function() {
        const hud = document.getElementById('floatingCalibHUD');
        if (hud) {
          const isHidden = hud.style.display === 'none';
          hud.style.display = isHidden ? 'block' : 'none';
        }
      };

      // ════════════════════════════════════════════════════════════════
      // INTERACTIVE MOUSE DRAG & LIVE PATH CALIBRATOR ENGINE
      // ════════════════════════════════════════════════════════════════
      let activeDragPiece = null;
      let dragStartX = 0, dragStartY = 0;
      let initialPieceX = 0, initialPieceY = 0;

      const liveCalibData = {
        woo:    { dX: 148,  dY: 469, rot: 0,  flipX: 1 },
        next:   { dX: 168,  dY: 332, rot: 0,  flipX: 1 },
        yellow: { dX: -540, dY: 320, rot: 90, flipX: -1 },
        green:  { dX: -75,  dY: 425, rot: 0,  flipX: 1 }
      };

      function updateLiveHUDDisplay() {
        const hudNext = document.getElementById('hudNextVal');
        const hudYellow = document.getElementById('hudYellowVal');
        const hudWoo = document.getElementById('hudWooVal');
        const hudGreen = document.getElementById('hudGreenVal');

        if (hudNext) hudNext.textContent = `dX: ${Math.round(liveCalibData.next.dX)}px | dY: ${Math.round(liveCalibData.next.dY)}px | Rot: ${liveCalibData.next.rot}°`;
        if (hudYellow) hudYellow.textContent = `dX: ${Math.round(liveCalibData.yellow.dX)}px | dY: ${Math.round(liveCalibData.yellow.dY)}px | Rot: ${liveCalibData.yellow.rot}° | Flip: ${liveCalibData.yellow.flipX}`;
        if (hudWoo) hudWoo.textContent = `dX: ${Math.round(liveCalibData.woo.dX)}px | dY: ${Math.round(liveCalibData.woo.dY)}px | Rot: ${liveCalibData.woo.rot}°`;
        if (hudGreen) hudGreen.textContent = `dX: ${Math.round(liveCalibData.green.dX)}px | dY: ${Math.round(liveCalibData.green.dY)}px | Rot: ${liveCalibData.green.rot}°`;
      }

      function getKeyForPiece(piece) {
        if (piece === airNext) return 'next';
        if (piece === airYellow) return 'yellow';
        if (piece === airWoo) return 'woo';
        if (piece === airGreen) return 'green';
        return null;
      }

      [airWoo, airNext, airYellow, airGreen].forEach(piece => {
        if (!piece) return;

        piece.addEventListener('mousedown', (e) => {
          activeDragPiece = piece;
          dragStartX = e.clientX;
          dragStartY = e.clientY;

          const key = getKeyForPiece(piece);
          if (key) {
            initialPieceX = liveCalibData[key].dX;
            initialPieceY = liveCalibData[key].dY;
          }

          document.body.style.userSelect = 'none';
          e.preventDefault();
        });
      });

      window.addEventListener('mousemove', (e) => {
        if (!activeDragPiece) return;

        const deltaX = e.clientX - dragStartX;
        const deltaY = e.clientY - dragStartY;

        const key = getKeyForPiece(activeDragPiece);
        if (!key) return;

        const newDX = initialPieceX + deltaX;
        const newDY = initialPieceY + deltaY;

        liveCalibData[key].dX = newDX;
        liveCalibData[key].dY = newDY;

        const rot = liveCalibData[key].rot || 0;
        const flipX = liveCalibData[key].flipX || 1;

        activeDragPiece.style.transform = `translate3d(${newDX}px, ${newDY}px, 0) rotate(${rot}deg) scaleX(${flipX})`;
        updateLiveHUDDisplay();
      });

      window.addEventListener('mouseup', () => {
        if (activeDragPiece) {
          activeDragPiece = null;
          document.body.style.userSelect = '';
        }
      });

      // Hotkey listeners: [R] to Rotate 90°, [F] to Flip Horizontally
      window.addEventListener('keydown', (e) => {
        if (!activeDragPiece) return;
        const key = getKeyForPiece(activeDragPiece);
        if (!key) return;

        if (e.key === 'r' || e.key === 'R') {
          liveCalibData[key].rot = (liveCalibData[key].rot + 90) % 360;
        } else if (e.key === 'f' || e.key === 'F') {
          liveCalibData[key].flipX = liveCalibData[key].flipX * -1;
        }

        const dX = liveCalibData[key].dX;
        const dY = liveCalibData[key].dY;
        const rot = liveCalibData[key].rot;
        const flipX = liveCalibData[key].flipX;

        activeDragPiece.style.transform = `translate3d(${dX}px, ${dY}px, 0) rotate(${rot}deg) scaleX(${flipX})`;
        updateLiveHUDDisplay();
      });

      // Export live coordinates JSON
      window.copyCalibratedCoordinates = function() {
        const text = JSON.stringify(liveCalibData, null, 2);
        navigator.clipboard.writeText(text).then(() => {
          alert('Live calibrated trajectory keyframes copied to clipboard!\n\n' + text);
        }).catch(() => {
          alert('Live calibrated coordinates:\n\n' + text);
        });
      };

      // ════════════════════════════════════════════════════════════════
      // OPTION A: FREE-FORM DRAG & AUTO-SNAP BACK ON SCROLL ENGINE
      // ════════════════════════════════════════════════════════════════
      const userDragOffset = {
        woo:    { x: 0, y: 0 },
        next:   { x: 0, y: 0 },
        yellow: { x: 0, y: 0 },
        green:  { x: 0, y: 0 }
      };

      // ════════════════════════════════════════════════════════════════
      // UNIVERSAL MAGNETIC HOVER MICRO-INTERACTION ENGINE
      // ════════════════════════════════════════════════════════════════
      const allHoverPieces = document.querySelectorAll('.t-piece, .docked-socket');
      allHoverPieces.forEach(piece => {
        piece.addEventListener('mousemove', (e) => {
          if (document.body.classList.contains('calibrator-active')) return;
          const rect = piece.getBoundingClientRect();
          const centerX = rect.left + rect.width / 2;
          const centerY = rect.top + rect.height / 2;
          
          const deltaX = (e.clientX - centerX) * 0.16; // Magnetic pull X
          const deltaY = (e.clientY - centerY) * 0.16; // Magnetic pull Y

          piece.style.transform = `translate3d(${deltaX}px, ${deltaY}px, 0) scale(1.03)`;
          piece.style.boxShadow = '0 12px 32px rgba(0, 71, 225, 0.28)';
          piece.style.transition = 'transform 0.1s ease-out, box-shadow 0.2s ease-out';
        });

        piece.addEventListener('mouseleave', () => {
          if (document.body.classList.contains('calibrator-active')) return;
          piece.style.transform = '';
          piece.style.boxShadow = '';
          piece.style.transition = 'transform 0.4s ease-out, box-shadow 0.4s ease-out';
        });
      });

      // Initial Setup
      setTimeout(() => {
        calculateVectorTargets();
        updateScrollProgress(0);
        updateLiveHUDDisplay();
      }, 300);
    });
  
  </script>

  
  <script>
    (function() {
      document.addEventListener('DOMContentLoaded', function() {
        const airWoo = document.querySelector('.air-wp-purple');
        const airNext = document.querySelector('.air-nextjs');
        const airGreen = document.querySelector('.air-green-z');
        const airYellow = document.querySelector('.air-amber-l');

        if (!airWoo || !airNext || !airGreen || !airYellow) return;

        const liveCalibData = {
          woo:    { dX: 148,  dY: 469, rot: 0,  flipX: 1 },
          next:   { dX: 168,  dY: 332, rot: 0,  flipX: 1 },
          yellow: { dX: -540, dY: 320, rot: 90, flipX: -1 },
          green:  { dX: -75,  dY: 425, rot: 0,  flipX: 1 }
        };

        function updateHUDDisplay() {
          const hudWoo = document.getElementById('hudWooVal');
          const hudNext = document.getElementById('hudNextVal');
          const hudYellow = document.getElementById('hudYellowVal');
          const hudGreen = document.getElementById('hudGreenVal');

          if (hudWoo) hudWoo.textContent = `Woo: dX: ${Math.round(liveCalibData.woo.dX)}px | dY: ${Math.round(liveCalibData.woo.dY)}px | Rot: ${liveCalibData.woo.rot}°`;
          if (hudNext) hudNext.textContent = `Next: dX: ${Math.round(liveCalibData.next.dX)}px | dY: ${Math.round(liveCalibData.next.dY)}px | Rot: ${liveCalibData.next.rot}°`;
          if (hudYellow) hudYellow.textContent = `Yellow: dX: ${Math.round(liveCalibData.yellow.dX)}px | dY: ${Math.round(liveCalibData.yellow.dY)}px | Rot: ${liveCalibData.yellow.rot}° | Flip: ${liveCalibData.yellow.flipX}`;
          if (hudGreen) hudGreen.textContent = `Green: dX: ${Math.round(liveCalibData.green.dX)}px | dY: ${Math.round(liveCalibData.green.dY)}px | Rot: ${liveCalibData.green.rot}°`;
        }

        function renderPositions() {
          const pieces = [
            { el: airWoo, key: 'woo' },
            { el: airNext, key: 'next' },
            { el: airYellow, key: 'yellow' },
            { el: airGreen, key: 'green' }
          ];

          pieces.forEach(item => {
            if (!item.el) return;
            const c = liveCalibData[item.key];
            const rot = c.rot || 0;
            const flip = c.flipX || 1;
            item.el.style.transform = `translate3d(${c.dX}px, ${c.dY}px, 0) rotate(${rot}deg) scaleX(${flip})`;
          });
          updateHUDDisplay();
        }

        // Mouse Drag Engine
        let activePiece = null;
        let dragStartX = 0, dragStartY = 0;
        let initialDX = 0, initialDY = 0;

        function getKey(el) {
          if (el === airWoo) return 'woo';
          if (el === airNext) return 'next';
          if (el === airYellow) return 'yellow';
          if (el === airGreen) return 'green';
          return null;
        }

        [airWoo, airNext, airYellow, airGreen].forEach(piece => {
          piece.addEventListener('mousedown', function(e) {
            activePiece = piece;
            dragStartX = e.clientX;
            dragStartY = e.clientY;
            const k = getKey(piece);
            if (k) {
              initialDX = liveCalibData[k].dX;
              initialDY = liveCalibData[k].dY;
            }
            document.body.style.userSelect = 'none';
            e.preventDefault();
          });
        });

        window.addEventListener('mousemove', function(e) {
          if (!activePiece) return;
          const k = getKey(activePiece);
          if (!k) return;

          const deltaX = e.clientX - dragStartX;
          const deltaY = e.clientY - dragStartY;

          liveCalibData[k].dX = initialDX + deltaX;
          liveCalibData[k].dY = initialDY + deltaY;
          renderPositions();
        });

        window.addEventListener('mouseup', function() {
          if (activePiece) {
            activePiece = null;
            document.body.style.userSelect = '';
          }
        });

        // Hotkeys [R] and [F]
        window.addEventListener('keydown', function(e) {
          if (!activePiece) return;
          const k = getKey(activePiece);
          if (!k) return;

          if (e.key === 'r' || e.key === 'R') {
            liveCalibData[k].rot = (liveCalibData[k].rot + 90) % 360;
            renderPositions();
          } else if (e.key === 'f' || e.key === 'F') {
            liveCalibData[k].flipX = liveCalibData[k].flipX * -1;
            renderPositions();
          }
        });

        renderPositions(); // Initial layout render
      });
    })();
  </script>


</body>
</html>

