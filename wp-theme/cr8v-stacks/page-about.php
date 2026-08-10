<?php
/**
 * CR8V Stacks — page-about.php
 * Template Name: About Us
 * Tropos Theme About Page (100% self-contained styling, exact HTML & interactive JS parity)
 */
defined('ABSPATH') || exit;

get_header();
?>

<style>
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
    
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { background: var(--c8-paper-bg); color: var(--c8-ink); font-family: var(--font-body); -webkit-font-smoothing: antialiased; padding: 0; margin: 0; line-height: 1.65; }
    a, a:hover, a:focus, button { text-decoration: none !important; }

    
    /* Header Offset Fix for About Page */
    .fylla-outer-frame {
      margin-top: 68px !important;
    }
    body.admin-bar .fylla-outer-frame {
      margin-top: 32px !important;
    }

    /* ── FYLLA STUDIO OUTER FRAME ── */
    .fylla-outer-frame {
      background: var(--c8-paper-card);
      border: 1px solid var(--c8-grid-line);
      padding-top: 3.5rem;
      min-height: 100vh;
    }

    /* ── FYLLA MONO META TAG ── */
    .fylla-meta-tag {
      font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700;
      text-transform: uppercase; color: var(--c8-blue); letter-spacing: 0.14em;
      margin-bottom: 1rem; display: block;
    }
    .fylla-meta-tag::before { content: '// '; }

    /* ── UNIFIED GLOBAL PRIMARY BUTTON SYSTEM (HOMEPAGE PARITY) ── */
    .c8-btn-primary,
    .fylla-btn,
    .cta-btn {
      background: var(--c8-blue);
      color: #FFFFFF !important;
      font-family: var(--font-mono);
      font-size: 0.84rem;
      font-weight: 700;
      padding: 0.9rem 2.2rem;
      border-radius: 4px;
      border: 1px solid transparent;
      position: relative;
      overflow: hidden;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      text-decoration: none;
      text-transform: uppercase;
      cursor: pointer;
      transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    /* Button Color Variants */
    .c8-btn-primary.is-dark,
    .cta-btn {
      background: #080808;
      color: #FFFFFF !important;
    }
    .c8-btn-primary.is-light {
      background: #FFFFFF;
      color: var(--c8-ink) !important;
      border: 1px solid var(--c8-grid-line);
    }
    .c8-btn-primary.is-dark:hover,
    .cta-btn:hover {
      background: var(--c8-blue);
      color: #FFFFFF !important;
    }
    .c8-btn-primary.is-light:hover {
      background: #F4F4F4;
      color: var(--c8-blue) !important;
    }

    /* Moving Shimmer Sweep Effect */
    .c8-btn-primary::before,
    .fylla-btn::before,
    .dp-btn-primary::before,
    .cta-btn::before {
      content: '';
      position: absolute;
      top: -50%; left: -100%;
      width: 100%; height: 200%;
      background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), rgba(0, 194, 255, 0.4), transparent);
      transform: rotate(25deg);
      transition: left 0.75s ease;
      pointer-events: none;
    }
    .c8-btn-primary:hover::before,
    .fylla-btn:hover::before,
    .dp-btn-primary:hover::before,
    .cta-btn:hover::before {
      left: 150%;
    }
    .c8-btn-primary:hover,
    .fylla-btn:hover,
    .dp-btn-primary:hover,
    .cta-btn:hover {
      transform: translateY(-2px);
    }

    /* ── SECTION 1: FYLLA STUDIO HERO ── */
    .fylla-hero-section {
      padding: 3.5rem 4rem 4rem 4rem;
      border-bottom: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
    }
    .fylla-hero-h1 {
      font-family: var(--font-heading); font-size: clamp(2rem, 4.5vw, 3.2rem);
      font-weight: 700; text-transform: uppercase; line-height: 1.18;
      color: var(--c8-ink); margin-bottom: 1.5rem; max-width: 960px;
    }
    .c8abt-serif-italic { font-family: Georgia, serif; font-style: italic; font-weight: 300; color: var(--c8-blue); text-transform: lowercase; }
    .c8abt-highlight-text {
      background: linear-gradient(90deg, #0047E1 0%, #00C2FF 100%);
      -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;
    }
    .fylla-hero-p {
      font-size: 1.05rem; color: var(--c8-sub); line-height: 1.65; max-width: 820px;
      margin-bottom: 2rem; font-weight: 400;
    }
    .fylla-pill-row { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 2.5rem; }
    .fylla-pill {
      border: 1px solid var(--c8-grid-line); background: #FAFAF7; padding: 0.4rem 0.9rem;
      font-family: var(--font-mono); font-size: 0.72rem; color: var(--c8-ink); font-weight: 700;
      border-radius: 4px; text-transform: uppercase;
    }
    .fylla-hero-img-box {
      width: 100%; aspect-ratio: 21 / 9; border-radius: 4px; overflow: hidden;
      border: 1px solid var(--c8-grid-line); background: #000000; position: relative;
    }
    .fylla-hero-img { width: 100%; height: 100%; object-fit: cover; }
    .fylla-hud-tag {
      position: absolute; bottom: 20px; right: 20px; background: #080808; color: #FAFAF7;
      font-family: var(--font-mono); font-size: 8.5px; letter-spacing: 0.2em; text-transform: uppercase;
      padding: 6px 12px; border-top: 2px solid var(--c8-blue); z-index: 3;
    }

    /* ── SECTION 2: FYLLA STUDIO VALUES SECTION (OUR PHILOSOPHY & LARGE ICONS) ── */
    .fylla-values-section {
      display: grid; grid-template-columns: 1fr 1fr;
      border-bottom: 1px solid var(--c8-grid-line);
      background: #FFFFFF;
    }
    .fylla-values-left {
      padding: 4.5rem 4rem; border-right: 1px solid var(--c8-grid-line);
      display: flex; flex-direction: column; justify-content: space-between;
    }
    .fylla-values-h2 {
      font-family: var(--font-heading); font-size: clamp(1.4rem, 2.6vw, 2.1rem);
      font-weight: 700; text-transform: uppercase; line-height: 1.25;
      color: var(--c8-ink); margin-bottom: 1.5rem;
    }
    .fylla-values-p { font-size: 0.95rem; color: var(--c8-sub); line-height: 1.7; margin-bottom: 1.25rem; }

    .fylla-values-right {
      background: #FAFAF7; display: flex; flex-direction: column;
    }
    .fylla-value-item {
      padding: 3rem 3.5rem; border-bottom: 1px solid var(--c8-grid-line);
      display: flex; gap: 1.75rem; align-items: flex-start;
    }
    .fylla-value-item:last-child { border-bottom: none; }
    .fylla-value-icon-box {
      width: 48px; height: 48px; border-radius: 6px;
      background: rgba(0, 71, 225, 0.08); border: 1px solid rgba(0, 71, 225, 0.2);
      display: flex; align-items: center; justify-content: center;
      color: var(--c8-blue); flex-shrink: 0; margin-top: 0.2rem;
    }
    .fylla-value-icon-box svg { width: 24px; height: 24px; stroke-width: 2; }
    .fylla-value-h3 {
      font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700;
      color: var(--c8-ink); text-transform: uppercase; margin-bottom: 0.65rem;
    }
    .fylla-value-desc { font-size: 0.92rem; color: var(--c8-sub); line-height: 1.65; }

    /* ── SECTION 3: DEV PLAYGROUND (HOMEPAGE SPLIT SCREEN & MASCOT FIX) ── */
    .dp-section {
      position: relative; overflow: clip; min-height: 680px; display: flex;
      border-bottom: 1px solid var(--c8-grid-line);
    }
    .dp-half-left {
      flex: 1; background: #FFFFFF; position: relative; display: flex;
      align-items: center; padding: 7rem 3.5rem; overflow: visible;
      border-right: none;
    }
    .dp-half-right {
      flex: 1; background: #0047E1; position: relative; display: flex;
      align-items: center; padding: 7rem 3.5rem 7rem 5rem; overflow: visible;
    }
    .dp-left-content { width: 100%; max-width: 480px; position: relative; z-index: 2; }
    .dp-eyebrow {
      font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700;
      letter-spacing: 0.16em; text-transform: uppercase; color: var(--c8-blue);
      margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.35rem;
    }
    .dp-h2 {
      font-family: var(--font-heading); font-size: clamp(1.6rem, 3.2vw, 2.4rem);
      font-weight: 700; color: var(--c8-ink); text-transform: uppercase;
      line-height: 1.15; letter-spacing: 0.01em; margin-bottom: 1.25rem;
    }
    .dp-h2 em { font-style: normal; color: var(--c8-blue); }
    .dp-sub {
      font-family: var(--font-body); font-size: 0.98rem; font-weight: 400;
      color: var(--c8-sub); line-height: 1.7; margin-bottom: 2.5rem;
    }
    .dp-tool-entries { display: flex; flex-direction: column; border-top: 1px solid rgba(8,8,8,0.1); }
    .dp-tool-entry {
      display: grid; grid-template-columns: 28px 1fr auto; align-items: center;
      gap: 1.25rem; padding: 1.1rem 0; border-bottom: 1px solid rgba(8,8,8,0.08);
      text-decoration: none; transition: all 0.25s ease; cursor: pointer;
    }
    .dp-tool-entry:hover { padding-left: 6px; }
    .dp-tool-entry-num { font-family: var(--font-mono); font-size: 0.72rem; color: rgba(8,8,8,0.35); font-weight: 700; }
    .dp-tool-entry-body { flex: 1; }
    .dp-tool-entry-name { font-family: var(--font-body); font-size: 0.95rem; font-weight: 700; color: var(--c8-ink); margin-bottom: 0.15rem; transition: color 0.25s ease; text-transform: uppercase; }
    .dp-tool-entry:hover .dp-tool-entry-name { color: var(--c8-blue); }
    .dp-tool-entry-desc { font-family: var(--font-body); font-size: 0.82rem; font-weight: 400; color: var(--c8-sub); line-height: 1.5; }
    .dp-tool-entry-icon {
      width: 34px; height: 34px; border-radius: 4px; background: rgba(0,71,225,0.08);
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
      color: var(--c8-blue); transition: background 0.25s ease, color 0.25s ease;
    }
    .dp-tool-entry:hover .dp-tool-entry-icon { background: var(--c8-blue); color: #FFFFFF; }

    /* Mascot: straddles split smoothly behind right text content */
    .dp-mascot-wrap {
      position: absolute; right: -260px; bottom: -50px; width: 520px;
      z-index: 1; pointer-events: none;
    }
    .dp-mascot-wrap video {
      width: 100%; height: auto; display: block;
      animation: dpFloat 4.5s ease-in-out infinite; pointer-events: none !important;
    }
    @keyframes dpFloat {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-16px); }
    }

    /* Right half content pushed right to avoid mascot overlap */
    .dp-right-content {
      width: 100%; max-width: 400px; margin-left: auto; position: relative; z-index: 2; color: #FFFFFF;
    }
    .dp-right-eyebrow {
      font-family: var(--font-mono); font-size: 10px; font-weight: 700;
      letter-spacing: 0.2em; text-transform: uppercase; color: rgba(255,255,255,0.7);
      margin-bottom: 2rem; display: flex; align-items: center; gap: 10px;
    }
    .dp-right-eyebrow::before { content: ''; width: 22px; height: 1.5px; background: rgba(255,255,255,0.5); flex-shrink: 0; }
    .dp-stat-pair { display: grid; grid-template-columns: 1fr 1fr; gap: 1.75rem 2.5rem; margin-bottom: 2.5rem; }
    .dp-stat-num { font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.4rem); font-weight: 700; color: #FFFFFF; line-height: 1; margin-bottom: 0.3rem; }
    .dp-stat-label { font-family: var(--font-body); font-size: 0.78rem; font-weight: 500; color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 0.08em; }
    .dp-right-desc { font-family: var(--font-body); font-size: 0.95rem; color: rgba(255,255,255,0.85); line-height: 1.75; margin-bottom: 2.5rem; border-left: 2px solid rgba(255,255,255,0.3); padding-left: 1.25rem; }
    .dp-cta-row { display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap; }
    .dp-btn-primary {
      background: #FFFFFF !important; color: var(--c8-ink) !important; font-family: var(--font-mono);
      font-size: 0.82rem; font-weight: 700; padding: 0.85rem 1.8rem; border-radius: 4px;
      text-decoration: none; text-transform: uppercase; display: inline-flex; align-items: center; gap: 0.5rem;
      position: relative; overflow: hidden;
    }
    .dp-btn-primary:hover { background: #F4F4F4 !important; color: var(--c8-blue) !important; transform: translateY(-2px); }
    .dp-btn-ghost {
      display: inline-flex; align-items: center; gap: 6px; color: rgba(255,255,255,0.85);
      font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; text-transform: uppercase;
      border-bottom: 1px solid rgba(255,255,255,0.4); padding-bottom: 2px; text-decoration: none; transition: color 0.25s, border-color 0.25s;
    }
    .dp-btn-ghost:hover { color: #FFFFFF; border-color: #FFFFFF; }

    /* ── SECTION 4: WHAT WE ACTUALLY DO (SERVICES ACCORDION FROM HOMEPAGE VERBATIM) ── */
    .sdv-section {
      background: #080808; color: #FFFFFF; padding: 6rem 4rem;
      position: relative; overflow: hidden; border-bottom: 1px solid var(--c8-grid-line);
    }
    .sdv-bg-blob { position: absolute; border-radius: 50%; filter: blur(120px); pointer-events: none; opacity: 0.15; }
    .sdv-bg-blob-1 { top: -100px; left: -100px; width: 500px; height: 500px; background: var(--c8-blue); }
    .sdv-bg-blob-2 { bottom: -100px; right: -100px; width: 600px; height: 600px; background: var(--c8-blue-hi); }
    .sdv-inner { max-width: 1360px; margin: 0 auto; position: relative; z-index: 1; }
    .sdv-header { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: flex-end; margin-bottom: 4rem; }
    .sdv-eyebrow { font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 1.25rem; }
    .sdv-h2 { font-family: var(--font-heading); font-size: clamp(1.5rem, 3.2vw, 2.6rem); font-weight: 700; color: #FFFFFF; text-transform: uppercase; line-height: 1.18; letter-spacing: 0.01em; }
    .sdv-h2 em { font-style: normal; color: var(--c8-blue); }
    .sdv-sub { font-family: var(--font-body); font-size: 1.05rem; font-weight: 300; color: rgba(255,255,255,0.6); line-height: 1.7; max-width: 500px; }
    .sdv-layer-row { display: flex; align-items: center; gap: 0; margin-top: 2rem; }
    .sdv-layer-pill { font-family: var(--font-mono); font-size: 0.72rem; letter-spacing: 0.06em; text-transform: uppercase; padding: 6px 16px; border-radius: 4px; white-space: nowrap; }
    .sdv-layer-pill.layer-strategy { background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.5); border: 1px solid rgba(255,255,255,0.1); }
    .sdv-layer-pill.layer-build { background: var(--c8-blue); color: #fff; border: 1px solid var(--c8-blue); }
    .sdv-layer-pill.layer-growth { background: rgba(255,255,255,0.07); color: rgba(255,255,255,0.5); border: 1px solid rgba(255,255,255,0.1); }
    .sdv-arrow { color: rgba(255,255,255,0.25); font-size: 0.85rem; margin: 0 8px; }

    .sdv-accordion { display: flex; flex-direction: column; gap: 0; border-top: 1px solid rgba(255,255,255,0.08); }
    .sdv-item { border-bottom: 1px solid rgba(255,255,255,0.08); overflow: hidden; }
    .sdv-item-trigger {
      width: 100%; display: grid; grid-template-columns: 56px 1fr auto 160px 80px;
      align-items: center; gap: 1.5rem; padding: 2rem 0; background: none; border: none;
      cursor: pointer; text-align: left; transition: all 0.3s ease;
    }
    .sdv-item-trigger:hover .sdv-item-title { color: var(--c8-blue); }
    .sdv-item-num { font-family: var(--font-mono); font-size: 0.78rem; color: rgba(255,255,255,0.3); letter-spacing: 0.1em; }
    .sdv-item-title { font-family: var(--font-heading); font-size: clamp(1rem, 1.8vw, 1.35rem); font-weight: 700; color: #FFFFFF; text-transform: uppercase; letter-spacing: 0.02em; transition: color 0.3s ease; }
    .sdv-item-tag { font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 12px; border-radius: 4px; }
    .sdv-item-tag.tag-build { background: rgba(0, 71, 225, 0.18); color: var(--c8-blue); border: none !important; }
    .sdv-item-tag.tag-growth { background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.45); border: 1px solid rgba(255,255,255,0.1); }
    .sdv-item-thumb { width: 160px; height: 84px; border-radius: 4px; overflow: hidden; opacity: 0.4; transition: opacity 0.35s ease, transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); flex-shrink: 0; }
    .sdv-item-thumb img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .sdv-item-trigger:hover .sdv-item-thumb { opacity: 1; transform: scale(1.22) skewX(-6deg); }
    .sdv-item.is-open .sdv-item-thumb { opacity: 1; transform: scale(1.1) skewX(-3deg); }
    .sdv-item-chevron { display: flex; align-items: center; justify-content: flex-end; color: rgba(255,255,255,0.3); transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), color 0.3s ease; }
    .sdv-item.is-open .sdv-item-chevron { transform: rotate(180deg); color: var(--c8-blue); }
    .sdv-item.is-open .sdv-item-title { color: var(--c8-blue); }

    .sdv-panel { display: grid; grid-template-rows: 0fr; transition: grid-template-rows 0.5s cubic-bezier(0.16, 1, 0.3, 1); }
    .sdv-item.is-open .sdv-panel { grid-template-rows: 1fr; }
    .sdv-panel-inner { overflow: hidden; }
    .sdv-panel-content { display: grid; grid-template-columns: 56px 1fr 1fr; gap: 2rem; padding: 0 0 3rem 0; }
    .sdv-panel-desc { font-family: var(--font-body); font-size: 1rem; font-weight: 300; color: rgba(255,255,255,0.6); line-height: 1.7; }
    .sdv-panel-desc strong { color: #FFFFFF; font-weight: 600; }
    .sdv-panel-right { display: flex; flex-direction: column; gap: 1.25rem; }
    .sdv-deliverable-row { display: flex; align-items: center; gap: 12px; font-family: var(--font-body); font-size: 0.92rem; font-weight: 500; color: rgba(255,255,255,0.7); }
    .sdv-deliverable-row::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--c8-blue); flex-shrink: 0; }
    .sdv-panel-cta { display: inline-flex; align-items: center; gap: 8px; color: var(--c8-blue); font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; margin-top: 1rem; transition: gap 0.3s ease; }
    .sdv-panel-cta:hover { gap: 14px; }
    .sdv-panel-visual { grid-column: 1 / -1; margin-bottom: 2rem; border-radius: 4px; overflow: hidden; height: 200px; position: relative; }
    .sdv-panel-visual img { width: 100%; height: 100%; object-fit: cover; display: block; filter: saturate(0.9) brightness(0.95); transition: transform 0.5s ease, filter 0.3s ease; }
    .sdv-panel-visual:hover img { transform: scale(1.03); filter: saturate(1) brightness(1); }
    .sdv-panel-visual-label { position: absolute; bottom: 0.75rem; left: 0.75rem; font-family: var(--font-mono); font-size: 0.65rem; letter-spacing: 0.1em; text-transform: uppercase; color: #fff; background: rgba(0,71,225,0.85); border-radius: 4px; padding: 3px 10px; }

    /* ── SECTION 5: PILLARS OF GROWTH (HOMEPAGE 6-CARD BENTO GRID & FULL MOBILE RESPONSIVENESS) ── */
    .hww-section { background: #F4F5F7; padding: 6rem 4rem; border-bottom: 1px solid var(--c8-grid-line); }
    .hww-inner { max-width: 1360px; margin: 0 auto; }
    .hww-header { text-align: left; max-width: 780px; margin: 0 0 3rem 0; }
    .hww-eyebrow { font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.35rem; }
    .hww-h2 { font-family: var(--font-heading); font-size: clamp(1.5rem, 3.2vw, 2.4rem); font-weight: 700; color: var(--c8-ink); text-transform: uppercase; line-height: 1.15; letter-spacing: 0.01em; margin-bottom: 1.25rem; }
    .hww-h2 em { font-style: normal; color: var(--c8-blue); }
    .hww-desc { font-family: var(--font-body); font-size: 1.02rem; font-weight: 400; color: var(--c8-sub); line-height: 1.7; }
    .hww-bento { display: grid; grid-template-columns: 0.88fr 1fr 1.15fr 1.1fr; grid-template-rows: 285px 230px; gap: 1rem; margin-top: 2rem; }
    .hww-card { border-radius: 4px; overflow: hidden; position: relative; transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hww-card:hover { transform: translateY(-4px); box-shadow: 0 20px 60px rgba(0,0,0,0.10); }
    .hww-card-white { background: #FFFFFF; border: 1px solid rgba(0,0,0,0.07); padding: 1.75rem; }
    .hww-card-blue { background: var(--c8-blue); padding: 1.75rem; }
    .hww-card-dark { background: #0A0A0A; padding: 1.75rem; }
    .hww-card-light { background: #EAECF5; border: none !important; padding: 1.75rem; }
    .hww-c1 { grid-column: 1; grid-row: 1; }
    .hww-c2 { grid-column: 2; grid-row: 1 / span 2; padding: 0; }
    .hww-c3 { grid-column: 3; grid-row: 1; }
    .hww-c4 { grid-column: 4; grid-row: 1; }
    .hww-c5 { grid-column: 1; grid-row: 2; }
    .hww-c6 { grid-column: 3 / span 2; grid-row: 2; }
    .hww-visual-img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; transition: transform 0.5s ease; }
    .hww-c2:hover .hww-visual-img { transform: scale(1.04); }
    .hww-clabel { font-family: var(--font-body); font-size: 0.68rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 1rem; }
    .hww-clabel-blue { color: var(--c8-blue); }
    .hww-clabel-dim { color: rgba(255,255,255,0.5); }
    .hww-clabel-muted { color: rgba(0,0,0,0.35); }
    .hww-ctitle { font-family: var(--font-heading); font-size: clamp(0.82rem, 1.5vw, 0.95rem); font-weight: 700; text-transform: uppercase; letter-spacing: 0.02em; line-height: 1.3; margin-bottom: 0.6rem; }
    .hww-ctitle-ink { color: var(--c8-ink); }
    .hww-ctitle-white { color: #FFFFFF; }
    .hww-cbody { font-family: var(--font-body); font-size: 0.82rem; font-weight: 400; line-height: 1.6; }
    .hww-cbody-muted { color: var(--c8-sub); }
    .hww-cbody-dim { color: rgba(255,255,255,0.65); }
    .hww-steps { display: flex; flex-direction: column; gap: 0.65rem; margin-top: 0.85rem; }
    .hww-step { display: flex; align-items: center; gap: 0.65rem; }
    .hww-step-n { font-family: var(--font-mono); font-size: 0.6rem; color: rgba(0,0,0,0.35); letter-spacing: 0.04em; min-width: 18px; font-weight: 700; }
    .hww-step-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--c8-blue); flex-shrink: 0; }
    .hww-step-lbl { font-family: var(--font-body); font-size: 0.8rem; font-weight: 600; color: var(--c8-ink); }
    .hww-bnum { font-family: var(--font-heading); font-size: clamp(2.2rem, 4.5vw, 3.6rem); font-weight: 700; line-height: 1; letter-spacing: -0.02em; margin-bottom: 0.5rem; }
    .hww-bnum-white { color: #FFFFFF; }
    .hww-bnum-ink { color: var(--c8-ink); }
    .hww-stat-sub { font-family: var(--font-body); font-size: 0.79rem; font-weight: 400; line-height: 1.55; }
    .hww-stat-sub-white { color: rgba(255,255,255,0.85); }
    .hww-stat-sub-ink { color: var(--c8-sub); }
    .hww-tags { display: flex; flex-wrap: wrap; gap: 0.45rem; margin-top: 0.85rem; }
    .hww-tag { font-family: var(--font-body); font-size: 0.7rem; font-weight: 500; color: rgba(255,255,255,0.85); border: 1px solid rgba(255,255,255,0.2); border-radius: 4px; padding: 4px 9px; display: inline-flex; align-items: center; gap: 5px; }
    .hww-tag img { width: 12px; height: 12px; object-fit: contain; }
    .hww-timeline { display: flex; align-items: flex-start; gap: 2rem; margin-top: 1.25rem; }
    .hww-tl-item { flex: 1; display: flex; flex-direction: column; gap: 0.25rem; }
    .hww-tl-step { font-family: var(--font-mono); font-size: 0.58rem; color: var(--c8-blue); letter-spacing: 0.1em; text-transform: uppercase; font-weight: 700; }
    .hww-tl-label { font-family: var(--font-body); font-size: 0.85rem; font-weight: 600; color: var(--c8-ink); }
    .hww-tl-desc { font-family: var(--font-body); font-size: 0.76rem; font-weight: 400; color: var(--c8-sub); line-height: 1.5; }
    .hww-tl-div { width: 1px; background: rgba(0,71,225,0.18); margin-top: 0.5rem; align-self: stretch; flex-shrink: 0; }

    /* ── SECTION 6: PERFORMANCE & TECH STACK (WHITE BACKGROUND WITH SVG LOGO TABS) ── */
    .tmn-section {
      background: #FFFFFF; padding: 6rem 4rem; position: relative; color: var(--c8-ink);
      border-bottom: 1px solid var(--c8-grid-line); overflow: hidden;
    }
    .tmn-inner { max-width: 1360px; margin: 0 auto; }
    .tmn-header { text-align: left; max-width: 780px; margin-bottom: 3.5rem; }
    .tmn-eyebrow { font-family: var(--font-mono); font-size: 0.72rem; letter-spacing: 0.14em; text-transform: uppercase; color: var(--c8-blue); font-weight: 700; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.35rem; }
    .tmn-h2 { font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem); font-weight: 700; color: var(--c8-ink); text-transform: uppercase; line-height: 1.25; margin-bottom: 1rem; }
    .tmn-h2 em { font-style: normal; color: var(--c8-blue); }
    .tmn-sub { font-family: var(--font-body); font-size: 1rem; font-weight: 400; color: var(--c8-sub); line-height: 1.7; }
    
    .tmn-wrapper-card {
      background: #FAFAF7; border: 1px solid var(--c8-grid-line); border-radius: 6px;
      display: grid; grid-template-columns: 140px 1fr; gap: 0; overflow: hidden; color: var(--c8-ink); min-height: 400px;
    }
    .tmn-thumbs { display: flex; flex-direction: column; background: #FFFFFF; border-right: 1px solid var(--c8-grid-line); }
    .tmn-thumb-btn {
      background: #FFFFFF; border: none; border-bottom: 1px solid var(--c8-grid-line);
      padding: 1.5rem 1rem; cursor: pointer; text-align: center; transition: all 0.3s ease; position: relative; flex: 1;
      display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.5rem;
    }
    .tmn-thumb-btn:last-child { border-bottom: none; }
    .tmn-thumb-btn:hover { background: #FAFAF7; }
    .tmn-thumb-btn.is-active { background: #FAFAF7; box-shadow: inset 4px 0 0 var(--c8-blue); }
    .tmn-thumb-icon { width: 36px; height: 36px; object-fit: contain; filter: grayscale(100%); opacity: 0.5; transition: all 0.3s ease; }
    .tmn-thumb-btn:hover .tmn-thumb-icon,
    .tmn-thumb-btn.is-active .tmn-thumb-icon { filter: grayscale(0%); opacity: 1; transform: scale(1.1); }
    .tmn-thumb-label { font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); }

    .tmn-progress-bar { position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: transparent; overflow: hidden; }
    .tmn-progress-fill { width: 0%; height: 100%; background: var(--c8-blue); }
    .tmn-thumb-btn.is-active .tmn-progress-fill { animation: tmnProgress 6s linear infinite; }
    @keyframes tmnProgress { 0% { width: 0%; } 100% { width: 100%; } }

    .tmn-card-main { padding: 3.5rem; display: flex; flex-direction: column; justify-content: space-between; background: #FAFAF7; }
    .tmn-pane { display: none; flex-direction: column; justify-content: space-between; height: 100%; }
    .tmn-pane.is-active { display: flex; }
    .tmn-pane-h3 { font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; text-transform: uppercase; color: var(--c8-ink); margin-bottom: 1rem; }
    .tmn-pane-p { font-size: 0.98rem; color: var(--c8-sub); line-height: 1.7; margin-bottom: 2rem; max-width: 720px; }
    .tmn-metrics-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; padding-top: 2rem; border-top: 1px solid var(--c8-grid-line); }
    .tmn-metric-item { display: flex; flex-direction: column; }
    .tmn-metric-val { font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--c8-blue); line-height: 1; margin-bottom: 0.35rem; }
    .tmn-metric-lbl { font-family: var(--font-mono); font-size: 0.72rem; color: var(--c8-sub); text-transform: uppercase; letter-spacing: 0.08em; }

    /* ── SECTION 7: ABOUT CR8V STACKS (3-COL GRID + BOTTOM STATS) ── */
    .c8-about-section {
      background-color: #080808 !important;
      background-image: radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;
      padding: 6rem 4rem; position: relative; overflow: hidden; color: #FFFFFF; border-bottom: 1px solid var(--c8-grid-line);
    }
    .c8-about-inner { max-width: 1360px; margin: 0 auto; position: relative; z-index: 1; }
    .c8-about-header { margin-bottom: 3rem; text-align: left; }
    .c8-about-h2 { font-family: var(--font-heading); font-size: clamp(2rem, 3.8vw, 2.8rem); font-weight: 700; color: #FFFFFF; line-height: 1.18; text-transform: uppercase; margin-bottom: 1rem; }
    .c8-about-h2 em { font-style: normal; color: var(--c8-blue); }
    .c8-about-desc { font-family: var(--font-body); font-size: 1.02rem; font-weight: 400; color: rgba(255,255,255,0.78); line-height: 1.8; max-width: 820px; }
    
    .c8-about-mockup-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2.5rem; margin-bottom: 3.5rem; }
    .c8-about-card {
      border: 1px solid rgba(255,255,255,0.12); background: #FAFAF7; color: var(--c8-ink); padding: 2.5rem 2rem;
      border-radius: 4px; transition: transform 0.25s ease, border-color 0.25s ease;
      display: flex; flex-direction: column; justify-content: space-between; min-height: 400px;
    }
    .c8-about-card:hover { transform: translateY(-4px); border-color: var(--c8-blue); }
    .c8-about-card.is-blue-outline { border: 1.5px solid var(--c8-blue) !important; background: #FFFFFF; box-shadow: 0 10px 30px rgba(0, 71, 225, 0.15); }
    .c8-about-card-num { font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700; color: var(--c8-blue); display: block; margin-bottom: 1.25rem; letter-spacing: 0.1em; }
    .c8-about-card-h3 { font-family: var(--font-heading); font-size: 1.2rem; text-transform: uppercase; margin-bottom: 0.85rem; font-weight: 700; color: var(--c8-ink); letter-spacing: 0.02em; }
    .c8-about-card-p { font-size: 0.92rem; color: var(--c8-sub); line-height: 1.65; margin-top: auto; }

    .c8-about-stats-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; padding-top: 2.5rem; border-top: 1px solid rgba(255,255,255,0.12); }
    .c8-about-stat-item { background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 4px; padding: 1.75rem; text-align: center; }
    .c8-about-stat-num { font-family: var(--font-heading); font-size: 2.2rem; color: var(--c8-blue); font-weight: 700; line-height: 1; margin-bottom: 0.5rem; }
    .c8-about-stat-lbl { font-family: var(--font-mono); font-size: 0.72rem; color: rgba(255,255,255,0.7); text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; }

    /* ── SECTION 8: WHO WE BUILD FOR (PREMIUM FIT / NOT FIT MATRIX) ── */
    .fylla-fit-section {
      padding: 6rem 4rem; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF;
    }
    .fylla-fit-grid {
      display: grid; grid-template-columns: 1fr 1fr; gap: 0; margin-top: 2.5rem; border: 1px solid var(--c8-grid-line);
    }
    .fylla-fit-card {
      border: none; padding: 3.5rem 3rem; border-radius: 0; position: relative;
      transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .fylla-fit-card.is-yes { background: #FAFAF7; border-right: 1px solid var(--c8-grid-line); }
    .fylla-fit-card.is-no { background: #FFFFFF; }
    .fylla-fit-card-h3 { font-family: var(--font-heading); font-size: 1.25rem; text-transform: uppercase; margin-bottom: 1.75rem; font-weight: 700; }
    .fylla-fit-list { display: flex; flex-direction: column; gap: 1.5rem; }
    .fylla-fit-item { display: flex; gap: 1rem; align-items: flex-start; font-size: 0.95rem; color: var(--c8-sub); line-height: 1.65; }
    .fylla-fit-item strong { color: var(--c8-ink); }
    .fylla-icon-sq {
      width: 28px; height: 28px; border-radius: 4px; display: inline-flex; align-items: center;
      justify-content: center; font-size: 0.85rem; font-weight: 700; flex-shrink: 0; margin-top: 0.1rem;
    }
    .fylla-icon-sq.is-yes { background: rgba(0, 71, 225, 0.1); color: var(--c8-blue); border: 1px solid rgba(0, 71, 225, 0.25); }
    .fylla-icon-sq.is-no { background: rgba(220, 38, 38, 0.08); color: #DC2626; border: 1px solid rgba(220, 38, 38, 0.2); }

    /* ── SECTION 9: LEADERSHIP & FOUNDER PASS ── */
    .fylla-leadership-section { display: grid; grid-template-columns: 0.9fr 1.1fr; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
    .fylla-lead-left { padding: 6rem 4rem; border-right: 1px solid var(--c8-grid-line); display: flex; align-items: center; justify-content: center; background: #fff; }
    .c8-lead-mascot-box { width: 100%; }
    .c8-lead-mascot-box video, .c8-lead-mascot-box img { width: 100%; height: auto; display: block; }
    .fylla-lead-right { padding: 6rem 4rem; display: flex; flex-direction: column; justify-content: center; background: #FAFAF7; }

    /* SECURE PASS CARD UI */
    .c8abt-founder-pass {
      background: #080808; color: #FAFAF7; border: 1px dashed rgba(255, 255, 255, 0.28);
      padding: 2rem; font-family: var(--font-mono); border-radius: 4px; margin-top: 2rem; position: relative;
    }
    .c8abt-pass-header { border-bottom: 1px dashed rgba(255,255,255,0.15); padding-bottom: 0.75rem; margin-bottom: 1.25rem; display: flex; justify-content: space-between; font-size: 9.5px; color: #7C93FF; font-weight: 700; }
    .c8abt-pass-body { margin-bottom: 1rem; }
    .c8abt-pass-row { margin-bottom: 0.85rem; }
    .c8abt-pass-label { font-size: 8px; color: rgba(255,255,255,0.4); text-transform: uppercase; display: block; margin-bottom: 2px; }
    .c8abt-pass-value { font-size: 12px; color: #FAFAF7; font-weight: 500; }
    .c8abt-pass-barcode-wrap { display: flex; justify-content: space-between; align-items: center; border-top: 1px dashed rgba(255,255,255,0.15); padding-top: 1rem; margin-top: 1rem; }
    .c8abt-pass-barcode { width: 140px; height: 24px; background: repeating-linear-gradient(90deg, #FFFFFF, #FFFFFF 2px, transparent 2px, transparent 5px, #FFFFFF 5px, #FFFFFF 8px, transparent 8px, transparent 10px); opacity: 0.85; }
    .c8abt-pass-stamp { font-size: 9.5px; font-weight: 700; border: 1.5px solid #7C93FF; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #7C93FF; text-transform: uppercase; flex-shrink: 0; }

    /* ── SECTION 10: OPEN SOURCE & EDUCATIONAL TUTORIALS ── */
    .fylla-edu-section { display: grid; grid-template-columns: 1fr 1fr; border-bottom: 1px solid var(--c8-grid-line); background: #FFFFFF; }
    .fylla-edu-col { padding: 4.5rem 4rem; }
    .fylla-edu-col:first-child { border-right: 1px solid var(--c8-grid-line); }
    .fylla-img-frame { width: 100%; aspect-ratio: 16 / 9; border-radius: 4px; overflow: hidden; border: 1px solid var(--c8-grid-line); background: #000000; position: relative; margin-top: 2rem; }
    .fylla-img-frame img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .fylla-play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.15); }
    .fylla-play-btn { width: 64px; height: 64px; background: #FF0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(255,0,0,0.4); }

    /* ── SECTION 11: FYLLA STUDIO CONTACT CTA ── */
    .fylla-cta-section { display: grid; grid-template-columns: 1fr 1fr; background: #FAFAF7; }
    .cta-col-left { padding: 4.5rem 4rem; border-right: 1px solid var(--c8-grid-line); }
    .cta-col-right { padding: 4.5rem 4rem; display: flex; flex-direction: column; justify-content: center; }
    .cta-h2 { font-family: var(--font-heading); font-size: clamp(1.4rem, 2.6vw, 2.1rem); font-weight: 700; text-transform: uppercase; line-height: 1.25; color: var(--c8-ink); }
    .cta-p { font-size: 1rem; color: var(--c8-sub); line-height: 1.65; margin-bottom: 2rem; }

    /* FULL MOBILE RESPONSIVENESS (HOMEPAGE BENTO PARITY) */
    @media (max-width: 1024px) {
      .fylla-outer-frame { margin: 1rem 0.5rem 0rem 0.5rem; padding-top: 2rem; }
      .fylla-hero-section, .fylla-values-left, .sdv-section, .hww-section, .tmn-section, .c8-about-section, .fylla-fit-section, .fylla-lead-left, .fylla-lead-right, .fylla-edu-col, .cta-col-left, .cta-col-right { padding: 2.5rem 1.5rem; }
      .fylla-values-section, .c8-about-mockup-grid, .c8-about-stats-row, .fylla-fit-grid, .fylla-leadership-section, .fylla-edu-section, .fylla-cta-section { grid-template-columns: 1fr; }
      .fylla-values-left, .fylla-lead-left, .fylla-edu-col:first-child, .cta-col-left { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
      .fylla-fit-card.is-yes { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
      .dp-section { flex-direction: column; min-height: auto; }
      .dp-half-left, .dp-half-right { padding: 4rem 1.5rem; border-right: none; }
      .dp-mascot-wrap { z-index: 0; width: 260px; right: -30px; bottom: 0; opacity: 0.22; }
      .dp-right-content { margin-left: 0; max-width: 100%; }
      .sdv-header { grid-template-columns: 1fr; gap: 2rem; margin-bottom: 3rem; }
      .sdv-item-trigger { grid-template-columns: 40px 1fr 80px; }
      .sdv-item-tag, .sdv-item-thumb { display: none; }
      .sdv-panel-content { grid-template-columns: 40px 1fr; }
      .sdv-panel-right { grid-column: 2; }
      .c8abt-pass-barcode-wrap { flex-direction: column; align-items: flex-start; gap: 0.5rem; }
      .tmn-wrapper-card { grid-template-columns: 1fr; min-height: auto; }
      .tmn-thumbs { flex-direction: row; border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
      .tmn-thumb-btn { border-bottom: none; border-right: 1px solid var(--c8-grid-line); flex: 1; text-align: center; align-items: center; }
      .tmn-card-main { padding: 2rem 1.5rem; }
      .tmn-metrics-row { grid-template-columns: 1fr; gap: 1rem; }
    }

    @media (max-width: 900px) {
      .hww-bento { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
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
      .hww-c1, .hww-c2, .hww-c3, .hww-c4, .hww-c5, .hww-c6 { grid-column: 1; grid-row: auto; }
      .hww-c2 { min-height: 300px; }
      .tmn-thumbs { flex-direction: column; }
      .tmn-thumb-btn { border-right: none; border-bottom: 1px solid var(--c8-grid-line); }
    }
  </style>

<main class="fylla-outer-frame">
    
    <!-- ── 1. FYLLA STUDIO HERO SECTION ── -->
    <header class="fylla-hero-section">
      <span class="fylla-meta-tag" data-customizer="abt_hero_tag"><?php echo esc_html(cr8v_mod("abt_hero_tag", "AGENCY PROFILE")); ?></span>
      <h1 class="fylla-hero-h1">
        <?php echo wp_kses_post(cr8v_mod("abt_hero_headline", "WE DEFY <span class='c8abt-serif-italic'>templates.</span><br>WE CODE <span class='c8abt-highlight-text'>CONVERSIONS.</span>")); ?>
      </h1>
      
      <p class="fylla-hero-p">We are an engineering-first digital agency built for ambitious brands. We don't just assemble websites; we architect custom digital environments, brand systems, and organic search acquisition models designed to turn attention into measurable revenue.</p>

      <div class="fylla-pill-row">
        <span class="fylla-pill">Custom PHP</span>
        <span class="fylla-pill">Elementor-Safe Code</span>
        <span class="fylla-pill">WordPress</span>
        <span class="fylla-pill">Shopify</span>
        <span class="fylla-pill">Conversion UX</span>
        <span class="fylla-pill">Organic SEO</span>
      </div>

      <div class="fylla-hero-img-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/wwa_studio_visual.jpg'); ?>" alt="Cr8v Stacks Studio Workspace" class="fylla-hero-img">
        <div class="fylla-hud-tag">// SYSTEM_ACTIVE</div>
      </div>
    </header>

    <!-- ── 2. FYLLA STUDIO VALUES SECTION (OUR PHILOSOPHY & LARGE ICONS) ── -->
    <section class="fylla-values-section">
      <div class="fylla-values-left">
        <div>
          <span class="fylla-meta-tag">WHAT YOU SHOULD KNOW</span>
          <h2 class="fylla-values-h2">OUR PHILOSOPHY</h2>
          
          <p class="fylla-values-p">We bridge the gap between creative visual branding and lightweight, custom-coded web architectures.</p>
          <p class="fylla-values-p">At <strong>CR8V Stacks</strong>, founded by <strong>Mallami Adekunle</strong>, we approach web development and branding from a performance-first perspective. We don't believe in generic page builders and bloated themes that drag down loading speed and make businesses look identical.</p>
          <p class="fylla-values-p">By keeping our technology stack lightweight and prioritizing custom layouts, we eliminate design bloat and give our clients the technical edge in speed, search ranking, and user experience.</p>
        </div>

        <a href="homepage_hero_section.html#case-studies" class="c8-btn-primary">Inspect Case Studies</a>
      </div>

      <div class="fylla-values-right">
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">CODE ARCHITECTURE — ZERO BLOAT</h3>
            <p class="fylla-value-desc">Bespoke custom themes built from scratch with semantic HTML, CSS, and vanilla JS. No page builders, no unneeded plugins.</p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">LIQUID ENGINEERING — SUB-1.2S SPEED</h3>
            <p class="fylla-value-desc">Tuned for instant page loads and green Core Web Vitals across every single device, browser, and network condition.</p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3">ENTITY SEO — ORGANIC DOMINANCE</h3>
            <p class="fylla-value-desc">Structured Schema JSON-LD markup and semantic HTML hierarchy ensuring total search engine clarity and ranking authority.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 3. DEV PLAYGROUND — ALWAYS BUILDING SPLIT SCREEN (CORRECT ABOUT US COPY & MASCOT FIX) ── -->
    <section class="dp-section" id="dev-playground">

      <!-- WHITE LEFT HALF -->
      <div class="dp-half-left">

        <!-- MASCOT: lives inside white half, straddles split safely behind right content -->
        <div class="dp-mascot-wrap">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/download_mascot.mp4'); ?>" type="video/mp4">
          </video>
        </div>

        <div class="dp-left-content">
          <div class="dp-eyebrow">// ALWAYS BUILDING</div>
          <h2 class="dp-h2">BUILT BY US.<br><em>BUILT TO BE USEFUL.</em></h2>
          <p class="dp-sub">
            Internal agency software utilities built out of real client necessity to eliminate slow loading speeds, bloated dependencies, and notice banners on WordPress and Shopify.
          </p>

          <div class="dp-tool-entries">
            <a href="https://cr8vstacks.com/dev-playground/wp-publishion-ai/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">01</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">WP Publishion AI</div>
                <div class="dp-tool-entry-desc">Draft fact-checked, SEO-rich articles directly inside your block editor. Integrates Claude, Gemini &amp; OpenAI.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/nativus-dashboard-pro/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">02</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">Nativus Dashboard Pro</div>
                <div class="dp-tool-entry-desc">A clean, custom whitelabeled WordPress admin interface built to hide plugin notice banners safely.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/alttext-buddy/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">03</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">AltText Buddy</div>
                <div class="dp-tool-entry-desc">Automatically generate descriptive image alt text for your media library using 5 AI vision models.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/lumicode-syntax-highlighter/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">04</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">LumiCode</div>
                <div class="dp-tool-entry-desc">VS Code-style syntax-highlighted code blocks on WordPress with line numbers and copy utility.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
            </a>

            <a href="https://cr8vstacks.com/dev-playground/" class="dp-tool-entry">
              <span class="dp-tool-entry-num">05</span>
              <div class="dp-tool-entry-body">
                <div class="dp-tool-entry-name">Cost Calculator Pro</div>
                <div class="dp-tool-entry-desc">Instant interactive web project estimator delivering itemized scope breakdowns in under 60 seconds.</div>
              </div>
              <div class="dp-tool-entry-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M8 18h.01M12 18h.01"/></svg>
              </div>
            </a>
          </div>

          <div style="margin-top: 2rem;">
            <a href="https://cr8vstacks.com/dev-playground/" class="c8-btn-primary">Visit Dev Playground →</a>
          </div>
        </div>
      </div>

      <!-- BLUE RIGHT HALF -->
      <div class="dp-half-right">
        <div class="dp-right-content">
          <div class="dp-right-eyebrow">NO GIMMICKS // OPEN ACCESS</div>

          <div class="dp-stat-pair">
            <div class="dp-stat-item">
              <div class="dp-stat-num">5</div>
              <div class="dp-stat-label">Tools Available</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">100%</div>
              <div class="dp-stat-label">Instant Access</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">60s</div>
              <div class="dp-stat-label">Avg Setup Time</div>
            </div>
            <div class="dp-stat-item">
              <div class="dp-stat-num">∞</div>
              <div class="dp-stat-label">No Builder Bloat</div>
            </div>
          </div>

          <p class="dp-right-desc">
            Every tool in our playground is built out of necessity for real client builds. No corporate fluff, no bloated codebases — just lightweight, high-performance utilities designed to keep your WordPress and Shopify sites running lightning fast.
          </p>

          <div class="dp-cta-row">
            <a href="https://cr8vstacks.com/dev-playground/" class="dp-btn-primary">
              Inspect Tool Blueprints
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="discovery-call.html" class="dp-btn-ghost">
              Book A Discovery Call
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      </div>

    </section>

    <!-- ── 4. WHAT WE ACTUALLY DO (SERVICES ACCORDION FROM HOMEPAGE VERBATIM) ── -->
    <section class="sdv-section" id="services-deep-dive">
      <!-- Backdrop Glow Blobs -->
      <div class="sdv-bg-blob sdv-bg-blob-1"></div>
      <div class="sdv-bg-blob sdv-bg-blob-2"></div>

      <div class="sdv-inner">

        <!-- Section Header -->
        <div class="sdv-header">
          <div class="sdv-header-left">
            <div class="sdv-eyebrow"><span class="c8-eyebrow-slash">//</span> WHAT WE ACTUALLY DO</div>
            <h2 class="sdv-h2">Every Layer.<br>One <em>Studio.</em></h2>

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
              <span class="sdv-item-title">Website Design</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_duch_apartments.jpg'); ?>" alt="Website Design Preview">
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
                    <strong>High-converting digital experiences</strong> engineered for speed, search authority, and seamless user conversions. We design across every platform your business runs on &mdash; once the Figma design is approved, it gets handed to whichever build stack fits: WordPress, Shopify, WooCommerce, or fully custom code.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Custom Figma UI Architecture</div>
                    <div class="sdv-deliverable-row">WordPress Builds &amp; Elementor Systems</div>
                    <div class="sdv-deliverable-row">Shopify Liquid Storefronts</div>
                    <div class="sdv-deliverable-row">WooCommerce Custom Stores</div>
                    <div class="sdv-deliverable-row">Built-in SEO from Line One</div>
                    <a href="web-design.html" class="sdv-panel-cta">
                      Explore Web Design
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_duch_apartments.jpg'); ?>" alt="Website Design Work">
                  <span class="sdv-panel-visual-label">Live Client Work</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 02 — Custom Development -->
          <div class="sdv-item" id="sdv-custom-dev">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-custom-dev">
              <span class="sdv-item-num">02</span>
              <span class="sdv-item-title">Custom Development</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_bridgepoint.jpg'); ?>" alt="Custom Dev Preview">
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
                    <strong>Tailored software architectures</strong> built from a blank file, engineered around your exact workflow. No templates, no SaaS dependencies, no monthly tool fees eating into your margin. When nothing off-the-shelf fits what you're building &mdash; this is where it starts.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Bespoke Web Applications</div>
                    <div class="sdv-deliverable-row">Custom APIs &amp; Third-Party Integrations</div>
                    <div class="sdv-deliverable-row">Internal Business Tools &amp; Dashboards</div>
                    <div class="sdv-deliverable-row">100% Client-Owned Codebase</div>
                    <div class="sdv-deliverable-row">0 Third-Party SaaS Dependencies</div>
                    <a href="custom-dev.html" class="sdv-panel-cta">
                      Explore Custom Dev
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_bridgepoint.jpg'); ?>" alt="Custom Development Work">
                  <span class="sdv-panel-visual-label">Live Client Work</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 03 — AI MVP Products -->
          <div class="sdv-item" id="sdv-ai-mvp">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-ai-mvp">
              <span class="sdv-item-num">03</span>
              <span class="sdv-item-title">AI MVP Products</span>
              <span class="sdv-item-tag tag-build">Build Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dev_mascot.jpg'); ?>" alt="AI MVP Preview" style="object-position: center top;">
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
                    <strong>Production-ready AI applications</strong> built to validate core business ideas with real users &mdash; not slide decks. We build AI-integrated products fast enough to get genuine market signal before you over-invest. When the idea validates, it hands directly into a full Custom Dev engagement.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">LLM-Integrated Web Applications</div>
                    <div class="sdv-deliverable-row">AI-Powered Internal Tools</div>
                    <div class="sdv-deliverable-row">Rapid Prototyping &amp; Market Validation</div>
                    <div class="sdv-deliverable-row">Custom Model Pipelines</div>
                    <div class="sdv-deliverable-row">Fully Functional &mdash; Not a Demo</div>
                    <a href="ai-mvp.html" class="sdv-panel-cta">
                      Explore AI MVP
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
                <div class="sdv-panel-visual">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dev_mascot.jpg'); ?>" alt="AI MVP Build" style="object-position: center top;">
                  <span class="sdv-panel-visual-label">AI-Powered Build</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 04 — Brand Strategy -->
          <div class="sdv-item" id="sdv-brand-strategy">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-brand-strategy">
              <span class="sdv-item-num">04</span>
              <span class="sdv-item-title">Brand Strategy</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_victorias_lane.jpg'); ?>" alt="Brand Strategy Preview">
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
                    <strong>Competitor analysis, pricing scoping, and messaging frameworks</strong> that give the rest of the build direction before a single pixel is designed. This is also the foundation every ad campaign and piece of content we run for you is built on &mdash; get this right first, and everything downstream gets easier and cheaper.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Market Positioning &amp; Competitor Mapping</div>
                    <div class="sdv-deliverable-row">Messaging Frameworks &amp; Brand Voice</div>
                    <div class="sdv-deliverable-row">Pricing Scoping &amp; Value Proposition</div>
                    <div class="sdv-deliverable-row">Customer Profile Architecture</div>
                    <div class="sdv-deliverable-row">Brand Identity Design (optional next step)</div>
                    <a href="brand-strategy.html" class="sdv-panel-cta">
                      Explore Brand Strategy
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 05 — SEO & Content -->
          <div class="sdv-item" id="sdv-seo">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-seo">
              <span class="sdv-item-num">05</span>
              <span class="sdv-item-title">SEO &amp; Content</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_blvck_hair.jpg'); ?>" alt="SEO & Content Preview">
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
                    <strong>Technical search work and content architecture</strong> that gets the site found. We fold SEO into every build from line one &mdash; but for sites that already exist, we audit, fix, and build the content layer that compounds over time. Paid acquisition works better once your organic foundation is solid.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Semantic Keyword Mapping</div>
                    <div class="sdv-deliverable-row">Entity SEO Optimization</div>
                    <div class="sdv-deliverable-row">Technical SEO Audits &amp; Core Web Vitals</div>
                    <div class="sdv-deliverable-row">Content Architecture &amp; Cluster Strategy</div>
                    <div class="sdv-deliverable-row">E-Commerce Category &amp; Product SEO</div>
                    <a href="seo.html" class="sdv-panel-cta">
                      Explore SEO &amp; Content
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 06 — Digital Marketing -->
          <div class="sdv-item" id="sdv-digital-marketing">
            <button class="sdv-item-trigger" aria-expanded="false" data-sdv-toggle="sdv-digital-marketing">
              <span class="sdv-item-num">06</span>
              <span class="sdv-item-title">Digital Marketing</span>
              <span class="sdv-item-tag tag-growth">Growth Layer</span>
              <div class="sdv-item-thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/case_studies/case_study_mkenny_properties.jpg'); ?>" alt="Digital Marketing Preview">
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
                    <strong>Multi-channel campaigns and lead acquisition retainers</strong> built on the positioning your Brand Strategy work defined. If you haven't done positioning work with us yet, we fold a lightweight version into campaign setup &mdash; but a full Brand Strategy engagement first means faster, cheaper testing.
                  </div>
                  <div class="sdv-panel-right">
                    <div class="sdv-deliverable-row">Paid Social &amp; Search Campaign Management</div>
                    <div class="sdv-deliverable-row">Email Autoresponders &amp; Nurture Sequences</div>
                    <div class="sdv-deliverable-row">Conversion Rate Audits</div>
                    <div class="sdv-deliverable-row">Target Audience &amp; Funnel Mapping</div>
                    <div class="sdv-deliverable-row">Monthly Retainer &amp; Performance Reporting</div>
                    <a href="digital-marketing.html" class="sdv-panel-cta">
                      Explore Digital Marketing
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /sdv-accordion -->

      </div><!-- /sdv-inner -->
    </section>

    <!-- ── 5. PILLARS OF GROWTH (HOMEPAGE 6-CARD BENTO GRID & FULL MOBILE RESPONSIVENESS) ── -->
    <section class="hww-section" id="pillars-of-growth">
      <div class="hww-inner">

        <div class="hww-header">
          <div class="hww-eyebrow"><span class="c8-eyebrow-slash">//</span> OUR PILLARS OF GROWTH</div>
          <h2 class="hww-h2">ENGINEERED FOR SCALABILITY. <em>BUILT FOR PERFORMANCE.</em></h2>
          <p class="hww-desc">
            A full-spectrum digital framework designed to scale ambitious brands sustainably — from brand positioning and lightweight custom web engineering to entity search dominance.
          </p>
        </div>

        <div class="hww-bento">

          <!-- C1: Process Steps (white card) -->
          <div class="hww-card hww-card-white hww-c1">
            <div class="hww-clabel hww-clabel-blue">Growth Architecture</div>
            <div class="hww-ctitle hww-ctitle-ink">Core Pillars.<br>Zero Bloat.</div>
            <div class="hww-steps">
              <div class="hww-step">
                <span class="hww-step-n">01</span>
                <span class="hww-step-dot"></span>
                <span class="hww-step-lbl">Brand Positioning</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">02</span>
                <span class="hww-step-dot" style="opacity:0.65;"></span>
                <span class="hww-step-lbl">Web Architecture</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">03</span>
                <span class="hww-step-dot" style="opacity:0.4;"></span>
                <span class="hww-step-lbl">Digital Marketing</span>
              </div>
              <div class="hww-step">
                <span class="hww-step-n">04</span>
                <span class="hww-step-dot" style="opacity:0.2;"></span>
                <span class="hww-step-lbl">Entity SEO Dominance</span>
              </div>
            </div>
          </div>

          <!-- C2: Stacks visual (tall image card) -->
          <div class="hww-card hww-c2">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_stacks_visual.jpg'); ?>" alt="CR8V Stacks Visual Architecture" class="hww-visual-img">
          </div>

          <!-- C3: Sprint Stat (blue card) -->
          <div class="hww-card hww-card-blue hww-c3">
            <div class="hww-clabel hww-clabel-dim">Speed Benchmark</div>
            <div class="hww-bnum hww-bnum-white">95+<span style="font-size:0.42em;opacity:0.6;"> PageSpeed</span></div>
            <p class="hww-stat-sub hww-stat-sub-white">
              Sub-1.2 second instantaneous loading speeds across mobile and desktop devices.
            </p>
          </div>

          <!-- C4: Tech Stack Tags (dark card) -->
          <div class="hww-card hww-card-dark hww-c4">
            <div class="hww-clabel hww-clabel-dim">Technology Stack</div>
            <div class="hww-ctitle hww-ctitle-white">Clean Engineering.<br>Zero Fluff.</div>
            <div class="hww-tags">
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/wordpress/ffffff" alt="">WordPress</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/shopify/ffffff" alt="">Shopify</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/php/ffffff" alt="">Custom PHP</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/figma/F24E1E" alt="">Figma UI</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/html5/E34F26" alt="">HTML5</span>
              <span class="hww-tag"><img src="https://cdn.simpleicons.org/css3/1572B6" alt="">CSS3</span>
              <span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg" alt="OpenAI">OpenAI</span>
              <span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg" alt="Claude">Claude</span>
            </div>
          </div>

          <!-- C5: Ownership Stat (white card) -->
          <div class="hww-card hww-card-white hww-c5">
            <div class="hww-clabel hww-clabel-muted">Client Ownership</div>
            <div class="hww-bnum hww-bnum-ink" style="font-size:clamp(1.6rem,3vw,2.4rem);">100%</div>
            <p class="hww-stat-sub hww-stat-sub-ink">
              You own all code, repositories, and data. Zero vendor lock-in or recurring monthly code fees.
            </p>
          </div>

          <!-- C6: What Ships With Every Project (light card spanning 2 cols) -->
          <div class="hww-card hww-card-light hww-c6" style="position:relative;overflow:hidden;">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/c4_tools_bg.jpg'); ?>" alt="" aria-hidden="true" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;mix-blend-mode:multiply;opacity:0.08;pointer-events:none;">
            <div style="position:relative;z-index:1;">
              <div class="hww-clabel hww-clabel-blue">What Ships With Every Project</div>
              <div class="hww-timeline">
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Brand Strategy</span>
                  <span class="hww-tl-label">Positioning &amp; UX</span>
                  <span class="hww-tl-desc">High-intent keyword mapping and bespoke wireframes to command immediate trust.</span>
                </div>
                <div class="hww-tl-div"></div>
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Web Design</span>
                  <span class="hww-tl-label">Lightweight Code</span>
                  <span class="hww-tl-desc">Sub-1.2s loading speeds with custom PHP, HTML5, and scoped vanilla CSS.</span>
                </div>
                <div class="hww-tl-div"></div>
                <div class="hww-tl-item">
                  <span class="hww-tl-step">Organic SEO</span>
                  <span class="hww-tl-label">Entity Dominance</span>
                  <span class="hww-tl-desc">JSON-LD schema hierarchy ensuring total search engine clarity and rank authority.</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── 6. PERFORMANCE & TECH STACK (WHITE BACKGROUND WITH SVG LOGO TABS) ── -->
    <section class="tmn-section" id="performance-tech-stack">
      <div class="tmn-inner">
        <div class="tmn-header">
          <div class="tmn-eyebrow"><span class="tmn-eyebrow-slash">//</span> PERFORMANCE &amp; TECH STACK</div>
          <h2 class="tmn-h2">BUILT FOR SPEED. <em>ENGINEERED TO DOMINATE.</em></h2>
          <p class="tmn-sub">Explore our core technology stacks and performance benchmarks across WordPress, Shopify, custom software, and AI-accelerated workflows.</p>
        </div>

        <div class="tmn-wrapper-card">
          <!-- Left Logo Tabs Row -->
          <div class="tmn-thumbs">
            <button class="tmn-thumb-btn is-active" data-tmn-tab="tmn-pane-1">
              <img src="https://cdn.simpleicons.org/wordpress/0047E1" alt="WordPress Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">WordPress</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-2">
              <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">Shopify</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-3">
              <img src="https://cdn.simpleicons.org/php/777BB4" alt="Custom Code Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">Custom Dev</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
            <button class="tmn-thumb-btn" data-tmn-tab="tmn-pane-4">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg" alt="AI Models Logo" class="tmn-thumb-icon">
              <span class="tmn-thumb-label">AI Workflows</span>
              <div class="tmn-progress-bar"><div class="tmn-progress-fill"></div></div>
            </button>
          </div>

          <!-- Main Content Area -->
          <div class="tmn-card-main">
            <!-- Pane 1: WordPress -->
            <div class="tmn-pane is-active" id="tmn-pane-1">
              <div>
                <h3 class="tmn-pane-h3">WORDPRESS CUSTOM ENGINE</h3>
                <p class="tmn-pane-p">We architect custom WordPress themes and Elementor-safe code systems that bypass typical builder bloat. Hand-written PHP templates, optimized asset loading, and clean database queries ensure sub-1.2s page loads.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">95%+</div>
                  <div class="tmn-metric-lbl">PageSpeed Score</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">&lt; 1.2s</div>
                  <div class="tmn-metric-lbl">Page Load Time</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">100%</div>
                  <div class="tmn-metric-lbl">Code Ownership</div>
                </div>
              </div>
            </div>

            <!-- Pane 2: Shopify -->
            <div class="tmn-pane" id="tmn-pane-2">
              <div>
                <h3 class="tmn-pane-h3">SHOPIFY LIQUID STOREFRONTS</h3>
                <p class="tmn-pane-p">Bespoke Liquid storefronts designed to maximize mobile checkout speed, product discovery, and store conversion velocity — giving your e-commerce brand a distinct competitive edge.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">3.5x</div>
                  <div class="tmn-metric-lbl">Conversion Rate</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">&lt; 1.5s</div>
                  <div class="tmn-metric-lbl">Mobile Load Speed</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Liquid</div>
                  <div class="tmn-metric-lbl">Performance Standard</div>
                </div>
              </div>
            </div>

            <!-- Pane 3: Custom Dev -->
            <div class="tmn-pane" id="tmn-pane-3">
              <div>
                <h3 class="tmn-pane-h3">BESPOKE SOFTWARE &amp; WEB APPLICATIONS</h3>
                <p class="tmn-pane-p">Tailored software engineering beyond conventional websites — including web applications, custom APIs, internal dashboards, and complex business logic built specifically around your operating workflow.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">100%</div>
                  <div class="tmn-metric-lbl">Bespoke Architecture</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Zero</div>
                  <div class="tmn-metric-lbl">Vendor Lock-in</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">∞</div>
                  <div class="tmn-metric-lbl">Scale Potential</div>
                </div>
              </div>
            </div>

            <!-- Pane 4: AI Workflows -->
            <div class="tmn-pane" id="tmn-pane-4">
              <div>
                <h3 class="tmn-pane-h3">HUMAN-LED, AI-ACCELERATED WORKFLOWS</h3>
                <p class="tmn-pane-p">AI makes us faster, but human engineering and strategy drive every decision. We leverage AI pipelines to accelerate research, prototyping, and development while keeping software quality uncompromisingly high.</p>
              </div>
              <div class="tmn-metrics-row">
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">3.5x</div>
                  <div class="tmn-metric-lbl">Execution Velocity</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Human</div>
                  <div class="tmn-metric-lbl">Strategy &amp; Oversight</div>
                </div>
                <div class="tmn-metric-item">
                  <div class="tmn-metric-val">Production</div>
                  <div class="tmn-metric-lbl">Grade Deliverables</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ── 7. ABOUT CR8V STACKS (3-COL GRID + BOTTOM STATS) ── -->
    <section class="c8-about-section" id="about-cr8v-stacks">
      <div class="c8-about-inner">
        <div class="c8-about-header">
          <span class="fylla-meta-tag" style="color: #7C93FF;">ABOUT CR8V STACKS</span>
          <h2 class="c8-about-h2">One team.<br><em>Every layer.</em></h2>
          <p class="c8-about-desc">
            Strategy, design, and code — handled by the same developer-led team from first discovery call to launch. We don't hand off project briefs to isolated departments who have never spoken to each other.
          </p>
        </div>

        <div class="c8-about-mockup-grid">
          <div class="c8-about-card">
            <div>
              <span class="c8-about-card-num">01 / STRATEGY</span>
              <h3 class="c8-about-card-h3">DEVELOPER-LED STRATEGY</h3>
            </div>
            <p class="c8-about-card-p">Every engagement begins with real technical and positioning analysis. We scope transparently with fixed pricing, then we execute.</p>
          </div>

          <div class="c8-about-card is-blue-outline">
            <div>
              <span class="c8-about-card-num">02 / WORKFLOW</span>
              <h3 class="c8-about-card-h3">DESIGN &amp; BUILD TOGETHER</h3>
            </div>
            <p class="c8-about-card-p">Visual UI design and frontend code performance run simultaneously. Less revision back-and-forth, maximum precision in code.</p>
          </div>

          <div class="c8-about-card">
            <div>
              <span class="c8-about-card-num">03 / FREEDOM</span>
              <h3 class="c8-about-card-h3">COMPLETE CLIENT OWNERSHIP</h3>
            </div>
            <p class="c8-about-card-p">Codebase, domain, and data repositories are 100% yours from day one. No lock-in fees or dependencies to keep your site running.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 8. WHO WE BUILD FOR (PREMIUM FIT / NOT FIT MATRIX) ── -->
    <section class="fylla-fit-section" id="who-we-build-for">
      <span class="fylla-meta-tag">WHO WE BUILD FOR</span>
      <h2 class="fylla-values-h2">WE'RE NOT A FIT FOR EVERYONE</h2>
      <p class="fylla-values-p" style="max-width: 680px">That's on purpose. Here's how to tell if your brand is ready for custom engineering.</p>

      <div class="fylla-fit-grid">
        <div class="fylla-fit-card is-yes">
          <div class="fylla-status-pill is-yes" style="margin-bottom: 1rem;">IDEAL PARTNER PROFILE</div>
          <h3 class="fylla-fit-card-h3" style="color: var(--c8-blue);">You're in the right place if</h3>
          <div class="fylla-fit-list">
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>No More Plugin Dependency:</strong> You're tired of being told to "just install another plugin" every time you need a new feature.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Integrated Developer Workflow:</strong> You want a designer and a developer thinking about your site architecture at the same time, not in sequence.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Speed &amp; Performance Priority:</strong> You care about your PageSpeed score and Core Web Vitals as much as your visual branding.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-yes">✓</span>
              <span><strong>Long-Term Brand Value:</strong> You're building a digital asset you intend to scale for years, not a temporary page you'll discard next quarter.</span>
            </div>
          </div>
        </div>

        <div class="fylla-fit-card is-no">
          <div class="fylla-status-pill is-no" style="margin-bottom: 1rem;">DISQUALIFIERS</div>
          <h3 class="fylla-fit-card-h3" style="color: var(--c8-ink);">We're probably not your agency if</h3>
          <div class="fylla-fit-list">
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Quick Theme Installs:</strong> You want the cheapest pre-made template installed by Friday with zero custom code or optimization.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Passive Site Maintenance:</strong> You're looking for someone to quietly "manage" an existing bloated site without auditing or fixing it.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Gimmicks Over Metrics:</strong> Design trends matter more to your organization than page load times, search ranking, and conversion data.</span>
            </div>
            <div class="fylla-fit-item">
              <span class="fylla-icon-sq is-no">✕</span>
              <span><strong>Transactional Vendors:</strong> You want a set-and-forget outsourced vendor rather than an active technical engineering partner.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 9. LEADERSHIP & FOUNDER PASS ── -->
    <section class="fylla-leadership-section">
      <div class="fylla-lead-left">
        <div class="c8-lead-mascot-box">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/download_mascot.mp4'); ?>" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="fylla-lead-right">
        <span class="fylla-meta-tag">LEADERSHIP</span>
        <h2 class="fylla-values-h2">FOUNDER &amp; DEV-LED CULTURE</h2>
        <p class="fylla-values-p" style="font-weight: 500; color: var(--c8-ink);">Bridging the gap between creative visual architecture and clean, lightweight code.</p>
        <p class="fylla-values-p">Founded by <strong>Mallami Adekunle</strong>, a digital architect and strategist, CR8V Stacks was established to combat the slow, template-stuffed sites typical of corporate digital agencies. Observing how heavy WordPress configurations and generic page templates cost companies traffic and conversions, Mallami assembled a team of developer-first designers.</p>
        <p class="fylla-values-p">At CR8V Stacks, our designers are trained in performance optimization, and our developers are trained in conversion-focused UI/UX — so we never sacrifice speed for looks.</p>

        <!-- SECURE PASS CARD UI -->
        <div class="c8abt-founder-pass c8abt-reveal is-visible">
          <div class="c8abt-pass-header">
            <span class="c8abt-pass-title">CR8V STACKS // SECURE PASS</span>
            <span class="c8abt-pass-meta">ID: 080-MA</span>
          </div>
          <div class="c8abt-pass-body">
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Holder Name</span>
              <span class="c8abt-pass-value">Mallami Adekunle</span>
            </div>
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Designation</span>
              <span class="c8abt-pass-value">Founder &amp; Principal Architect</span>
            </div>
            <div class="c8abt-pass-row">
              <span class="c8abt-pass-label">Core Stacks</span>
              <span class="c8abt-pass-value">WordPress, Shopify, Figma, HTML5, CSS3, JS, PHP</span>
            </div>
          </div>
          <div class="c8abt-pass-barcode-wrap">
            <div class="c8abt-pass-barcode"></div>
            <div class="c8abt-pass-stamp">M.A.</div>
          </div>
        </div>
      </div>
    </section>

        <!-- ── 10. OPEN SOURCE & EDUCATIONAL TUTORIALS ── -->
    <section class="fylla-edu-section">
      <div class="fylla-edu-col">
        <span class="fylla-meta-tag" data-customizer="abt_edu_tag1"><?php echo esc_html(cr8v_mod('abt_edu_tag1', 'OPEN SOURCE & EDUCATION')); ?></span>
        <h2 class="fylla-values-h2" data-customizer="abt_edu_title1"><?php echo esc_html(cr8v_mod('abt_edu_title1', 'ADVANCED ELEMENTOR TUTORIALS')); ?></h2>
        <p class="fylla-values-p" data-customizer="abt_edu_desc1"><?php echo esc_html(cr8v_mod('abt_edu_desc1', 'We run a dedicated learning channel under the handle @cr8vstacks, helping web developers write native CSS and JavaScript directly inside Elementor without compromising Google PageSpeed scores.')); ?></p>
        
        <div class="fylla-img-frame">
          <a href="https://www.youtube.com/@cr8vstacks" target="_blank" style="display: block; width: 100%; height: 100%;">
            <img src="<?php echo esc_url(cr8v_mod('abt_edu_img1', get_template_directory_uri() . '/assets/img/hww_process_layers.jpg')); ?>" alt="CR8V Stacks Elementor Tutorial Video Mockup" data-customizer="abt_edu_img1">
            <div class="fylla-play-overlay">
              <div class="fylla-play-btn">
                <svg viewBox="0 0 24 24" fill="#FFFFFF" style="width: 24px; height: 24px; margin-left: 3px;"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="fylla-edu-col">
        <span class="fylla-meta-tag" data-customizer="abt_edu_tag2"><?php echo esc_html(cr8v_mod('abt_edu_tag2', 'WORKFLOW AUTOMATION')); ?></span>
        <h2 class="fylla-values-h2" data-customizer="abt_edu_title2"><?php echo esc_html(cr8v_mod('abt_edu_title2', 'AI-TO-WORDPRESS WORKFLOWS')); ?></h2>
        <p class="fylla-values-p" data-customizer="abt_edu_desc2"><?php echo esc_html(cr8v_mod('abt_edu_desc2', 'We teach developers how to leverage advanced AI models (like Claude, Gemini, and ChatGPT) to generate custom code structures and automatically translate those mockups into live, pixel-perfect Elementor sections.')); ?></p>
        
        <div class="fylla-img-frame">
          <img src="<?php echo esc_url(cr8v_mod('abt_edu_img2', get_template_directory_uri() . '/assets/img/ai_wp_tree_workflow.jpg')); ?>" alt="CR8V Stacks AI-to-WordPress Structural Tree Workflow" data-customizer="abt_edu_img2">
        </div>
      </div>
    </section>

    <!-- ── 11. FYLLA STUDIO CONTACT CTA ── -->
    <section class="fylla-cta-section">
      <div class="cta-col-left">
        <span class="fylla-meta-tag">CONTACT</span>
        <h2 class="cta-h2">LET'S BRING YOUR BRAND TO THE NEXT LEVEL</h2>
      </div>

      <div class="cta-col-right">
        <p class="cta-p">Together, let's elevate your brand to new heights by unleashing its full potential and captivating your target audience with custom zero-plugin architecture.</p>
        <a href="discovery-call.html" class="c8-btn-primary is-dark">Book A Discovery Call</a>
      </div>
    </section>

  </main>

  <!-- SCRIPTS CONTROLLER -->
  <script>
  (function () {
    // Services Accordion Script
    document.querySelectorAll('[data-sdv-toggle]').forEach(function (trigger) {
      trigger.addEventListener('click', function () {
        var targetId = trigger.getAttribute('data-sdv-toggle');
        var item = document.getElementById(targetId);
        var isOpen = item.classList.contains('is-open');

        document.querySelectorAll('.sdv-item').forEach(function (i) {
          i.classList.remove('is-open');
          var tr = i.querySelector('[data-sdv-toggle]');
          if (tr) tr.setAttribute('aria-expanded', 'false');
        });

        if (!isOpen) {
          item.classList.add('is-open');
          trigger.setAttribute('aria-expanded', 'true');
        }
      });
    });

    // Performance & Tech Stack Auto-Proceed Tab Controller
    var techTabs = Array.from(document.querySelectorAll('[data-tmn-tab]'));
    var techPanes = document.querySelectorAll('.tmn-pane');
    var techCurrentIndex = 0;
    var techTimer = null;

    function activateTechTab(idx) {
      if (!techTabs[idx]) return;
      techCurrentIndex = idx;
      techTabs.forEach(function (t) {
        t.classList.remove('is-active');
        var fill = t.querySelector('.tmn-progress-fill');
        if (fill) {
          fill.style.animation = 'none';
          void fill.offsetWidth;
          fill.style.animation = '';
        }
      });
      techPanes.forEach(function (p) { p.classList.remove('is-active'); });

      techTabs[idx].classList.add('is-active');
      var targetPaneId = techTabs[idx].getAttribute('data-tmn-tab');
      var targetPane = document.getElementById(targetPaneId);
      if (targetPane) targetPane.classList.add('is-active');
    }

    function startTechAutoProceed() {
      stopTechAutoProceed();
      techTimer = setInterval(function () {
        var nextIdx = (techCurrentIndex + 1) % techTabs.length;
        activateTechTab(nextIdx);
      }, 6000);
    }

    function stopTechAutoProceed() {
      if (techTimer) { clearInterval(techTimer); techTimer = null; }
    }

    techTabs.forEach(function (btn, index) {
      btn.addEventListener('click', function () {
        activateTechTab(index);
        startTechAutoProceed();
      });
    });

    var techWrapper = document.querySelector('.tmn-wrapper-card');
    if (techWrapper) {
      techWrapper.addEventListener('mouseenter', stopTechAutoProceed);
      techWrapper.addEventListener('mouseleave', startTechAutoProceed);
    }

    startTechAutoProceed();

    // Live Matrix Text Scramble Script
    function initMatrixScramble() {
      var matrixButtons = document.querySelectorAll('.c8-btn-primary, .fylla-btn, .dp-btn-primary, .cta-btn, .dp-btn-ghost, .sdv-panel-cta, .c8-text-cta, .stage-link, .ab-btn-primary, .c8srv-explore, .c8isv-explore, .c8srv-price-btn, .c8isv-btn-primary, .faq-cta-link');
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
  })();
  </script>

<?php
get_footer();
