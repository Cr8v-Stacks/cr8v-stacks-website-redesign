import os

filepath = r"c:\Users\HP\Downloads\Mega Menu\Case Studies\the-duch-apartments.html"

prototype_html = """<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Study: The Duch Apartments | Cr8v Stacks</title>
  <meta name="description" content="Read how Cr8v Stacks built the brand identity and custom booking platform from scratch for The Duch Apartments, maximizing direct bookings with custom local SEO.">
  <link rel="stylesheet" href="../shared-service-components.css">
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

    /* CSS Reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: #FFFFFF;
      color: var(--c8-ink);
      font-family: var(--font-body);
      line-height: 1.65;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    .c8cs-root {
      position: relative;
      width: 100%;
    }

    .c8cs-wrap {
      max-width: 1240px;
      margin: 0 auto;
      padding: 6rem 2rem;
      position: relative;
      z-index: 2;
    }

    @media (max-width: 768px) {
      .c8cs-wrap {
        padding: 4rem 1.25rem;
      }
    }

    /* Common Design Elements */
    .c8cs-label {
      font-family: var(--font-mono);
      font-size: 10px;
      letter-spacing: .25em;
      text-transform: uppercase;
      color: var(--c8-blue);
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 1.5rem;
    }

    .c8cs-label::before {
      content: '—';
      color: var(--c8-blue);
      font-weight: 700;
    }

    .c8cs-headline {
      font-family: var(--font-heading);
      font-size: clamp(2.2rem, 5vw, 3.8rem);
      letter-spacing: 0.02em;
      line-height: 1.15;
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      margin-bottom: 1.75rem;
    }

    .c8cs-serif {
      font-family: 'Georgia', serif;
      font-style: italic;
      text-transform: none;
      font-weight: 400;
    }

    .c8cs-lead {
      font-size: 18.5px;
      font-weight: 300;
      color: var(--c8-sub);
      max-width: 860px;
      margin-bottom: 2.5rem;
      line-height: 1.7;
    }

    /* Hero Section */
    .c8cs-hero {
      padding-top: 8rem;
      padding-bottom: 4rem;
      position: relative;
      background: #FFFFFF;
      border-bottom: 1px solid var(--c8-grid-line);
    }

    /* Hero Atmosphere & Glow Animation */
    .c8cs-hero-atmos {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      pointer-events: auto;
      overflow: hidden;
    }
    .c8cs-atmos-svg {
      position: absolute;
      top: -10%;
      left: 0;
      width: 100%;
      height: 130%;
    }
    .c8cs-atmos-blob {
      filter: blur(1px);
      opacity: 0.35;
    }
    .c8cs-atmos-glow {
      position: absolute;
      top: 0;
      left: 0;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 71, 225, 0.35) 0%, rgba(0, 71, 225, 0) 70%);
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.4s ease;
      will-change: transform;
      pointer-events: none;
    }
    .c8cs-hero-atmos.is-active .c8cs-atmos-glow {
      opacity: 1;
    }

    .c8cs-meta-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2rem;
      border-top: 1px solid var(--c8-grid-line);
      border-bottom: 1px solid var(--c8-grid-line);
      padding: 2.25rem 0;
      margin-top: 3.5rem;
      position: relative;
      z-index: 2;
      background: #FFFFFF;
    }

    @media (max-width: 768px) {
      .c8cs-meta-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
      }
    }

    .c8cs-meta-item span {
      display: block;
    }

    .c8cs-meta-lbl {
      font-family: var(--font-mono);
      font-size: 9px;
      text-transform: uppercase;
      color: #8A8A8A;
      margin-bottom: 0.5rem;
      letter-spacing: 0.12em;
    }

    .c8cs-meta-val {
      font-size: 15px;
      font-weight: 600;
      color: var(--c8-ink);
    }

    /* ── SCROLL-GROW FULL-WIDTH SHOWCASE MEDIA ── */
    .c8cs-grow-media-wrapper {
      width: 100%;
      padding: 5rem 0;
      display: flex;
      justify-content: center;
      background: var(--c8-paper-bg);
      border-bottom: 1px solid var(--c8-grid-line);
      overflow: hidden;
    }

    .c8cs-main-img-box {
      width: 85%;
      max-width: 1100px;
      border-radius: 4px;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(8, 8, 8, 0.08);
      border: 1px solid var(--c8-grid-line);
      position: relative;
      z-index: 2;
      transition: width 0.15s cubic-bezier(0.16, 1, 0.3, 1), max-width 0.15s cubic-bezier(0.16, 1, 0.3, 1);
      will-change: width, max-width;
    }

    .c8cs-main-img-box img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      max-height: 700px;
    }

    /* Project Split Section with Paper Grid Aesthetics */
    .c8cs-split-section {
      display: grid;
      grid-template-columns: 1fr 1.5fr;
      gap: 5rem;
      padding: 6rem 0;
      border-bottom: 1px solid var(--c8-grid-line);
      align-items: start;
    }

    @media (max-width: 900px) {
      .c8cs-split-section {
        grid-template-columns: 1fr;
        gap: 3rem;
      }
    }

    .c8cs-sticky-title {
      position: sticky;
      top: 100px;
    }

    .c8cs-split-title {
      font-family: var(--font-heading);
      font-size: 1.9rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      line-height: 1.2;
      color: var(--c8-ink);
    }

    .c8cs-body-content p {
      font-size: 16px;
      color: #4A4A4A;
      margin-bottom: 1.75rem;
      line-height: 1.75;
      font-weight: 300;
    }

    .c8cs-body-content h4 {
      font-family: var(--font-heading);
      font-size: 1.15rem;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--c8-ink);
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      letter-spacing: 0.01em;
    }

    /* Approach timeline with Paper Grid Lines */
    .c8cs-approach-list {
      margin-top: 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .c8cs-approach-step {
      display: grid;
      grid-template-columns: 80px 1fr;
      gap: 1.5rem;
      align-items: start;
      padding: 1.75rem;
      background: var(--c8-paper-bg);
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      transition: border-color 0.25s ease;
    }

    .c8cs-approach-step:hover {
      border-color: var(--c8-blue);
    }

    .c8cs-step-num {
      font-family: var(--font-mono);
      font-size: 12px;
      font-weight: 700;
      color: var(--c8-blue);
      border: 1px solid rgba(0, 71, 225, 0.25);
      padding: 6px 12px;
      border-radius: 4px;
      text-align: center;
      background: rgba(0, 71, 225, 0.04);
    }

    .c8cs-step-content h5 {
      font-family: var(--font-heading);
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      letter-spacing: 0.02em;
      color: var(--c8-ink);
    }

    .c8cs-step-content p {
      font-size: 14.5px;
      color: #6B6B6B;
      margin-bottom: 0;
    }

    /* Interface & Design Gallery Section */
    .c8cs-gallery-section {
      padding: 6rem 0;
      background: #FFFFFF;
      border-bottom: 1px solid var(--c8-grid-line);
    }

    .c8cs-gallery-grid {
      display: grid;
      grid-template-columns: 1.25fr 1fr;
      gap: 2.5rem;
      margin-top: 2.5rem;
    }

    @media (max-width: 900px) {
      .c8cs-gallery-grid {
        grid-template-columns: 1fr;
        gap: 2.5rem;
      }
    }

    .c8cs-gallery-card {
      background: var(--c8-paper-bg);
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      padding: 2.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      transition: transform 0.4s cubic-bezier(.16,1,.3,1), border-color 0.3s ease;
    }

    .c8cs-gallery-card:hover {
      transform: translateY(-4px);
      border-color: var(--c8-blue);
    }

    .c8cs-gallery-meta {
      font-family: var(--font-mono);
      font-size: 9px;
      text-transform: uppercase;
      color: #8A8A8A;
      margin-bottom: 0.75rem;
      letter-spacing: 0.12em;
    }

    .c8cs-gallery-title {
      font-family: var(--font-heading);
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--c8-ink);
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      letter-spacing: 0.01em;
    }

    .c8cs-gallery-desc {
      font-size: 14px;
      color: #6B6B6B;
      font-weight: 300;
      line-height: 1.5;
      margin-bottom: 1.5rem;
    }

    .c8cs-gallery-img-box {
      width: 100%;
      border-radius: 4px;
      overflow: hidden;
      border: 1px solid var(--c8-grid-line);
      margin-top: auto;
    }

    .c8cs-gallery-img-box.is-tall {
      max-height: 500px !important;
      height: 500px !important;
    }

    .c8cs-gallery-img-box img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .c8cs-gallery-card:hover .c8cs-gallery-img-box img {
      transform: scale(1.03);
    }

    .c8cs-swatch-row {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
    }

    .c8cs-swatch {
      flex: 1;
      height: 110px;
      border-radius: 4px;
      border: 1px solid var(--c8-grid-line);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 12px;
    }

    .c8cs-swatch-hex {
      font-family: var(--font-mono);
      font-size: 9px;
      font-weight: 700;
      background: rgba(255, 255, 255, 0.9);
      padding: 2px 6px;
      border-radius: 4px;
      align-self: flex-start;
      color: var(--c8-ink);
    }

    /* Metrics Dashboard */
    .c8cs-metrics-bg {
      background: var(--c8-paper-bg);
      border-bottom: 1px solid var(--c8-grid-line);
      padding: 6rem 0;
    }

    .c8cs-metrics-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2.5rem;
    }

    @media (max-width: 768px) {
      .c8cs-metrics-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
    }

    .c8cs-metric-card {
      background: #FFFFFF;
      border: 1px solid var(--c8-grid-line);
      border-radius: 4px;
      padding: 2.5rem 2rem;
      box-shadow: 0 8px 25px rgba(8, 8, 8, 0.015);
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .c8cs-metric-val {
      font-family: var(--font-heading);
      font-size: 2.6rem;
      font-weight: 700;
      color: var(--c8-blue);
      line-height: 1;
      margin-bottom: 1rem;
    }

    .c8cs-metric-lbl {
      font-family: var(--font-mono);
      font-size: 9px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #8A8A8A;
      margin-bottom: 0.75rem;
      line-height: 1.4;
    }

    .c8cs-metric-desc {
      font-size: 13.5px;
      color: #6B6B6B;
      font-weight: 300;
      line-height: 1.5;
    }

    /* Bespoke Status Badge */
    .c8cs-status-badge {
      background: rgba(0, 191, 99, 0.04);
      border: 1px solid rgba(0, 191, 99, 0.25);
      padding: 1.25rem 1.75rem;
      border-radius: 4px;
      display: inline-flex;
      flex-direction: column;
      align-items: flex-start;
      margin-top: auto;
      text-decoration: none;
      transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
      cursor: pointer;
    }
    .c8cs-status-badge:hover {
      background: rgba(0, 191, 99, 0.08);
      border-color: rgba(0, 191, 99, 0.4);
      transform: translateY(-2px);
    }

    .c8cs-status-lbl {
      font-family: var(--font-mono);
      font-size: 8px;
      font-weight: 700;
      color: #00BF63;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }

    .c8cs-status-val {
      font-family: var(--font-heading);
      font-size: 10.5px;
      font-weight: 700;
      color: #00BF63;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      line-height: 1.2;
    }
    .c8cs-checkmark-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: #00BF63;
      color: #FFFFFF;
      font-size: 10px;
      font-weight: bold;
    }

    .c8cs-btn-primary {
      font-family: var(--font-mono);
      font-size: 11px;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      background: var(--c8-blue);
      color: #FFFFFF;
      padding: 18px 36px;
      border-radius: 4px;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
      margin-top: 1rem;
      text-decoration: none;
      box-shadow: 0 4px 14px rgba(0, 71, 225, 0.2);
    }

    .c8cs-btn-primary:hover {
      background: #0036ad;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 71, 225, 0.35);
    }

    /* Back Button */
    .c8cs-back-btn {
      font-family: var(--font-mono);
      font-size: 10px;
      color: #8A8A8A;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 2.5rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      transition: color 0.2s ease;
      text-decoration: none;
      position: relative;
      z-index: 2;
      font-weight: 700;
    }

    .c8cs-back-btn:hover {
      color: var(--c8-blue);
    }
  </style>
</head>
<body>

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
        <a href="../portfolio/" class="c8cs-back-btn">&larr; Back to Portfolio</a>
        
        <div class="c8cs-label">Case Study // Real Estate &amp; Hospitality</div>
        <h1 class="c8cs-headline">The Duch Apartments: Direct Booking &amp; <span class="c8cs-serif">Brand Identity</span></h1>
        <p class="c8cs-lead">The Duch Apartments needed a complete digital presence to drive direct room reservations without depending entirely on third-party OTA platforms. We built their brand identity, developed a custom room catalog, and deployed an entity SEO architecture that ranks organically for local Lagos luxury stay queries.</p>
        
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

    <!-- ── SCROLL-GROW FULL-WIDTH SHOWCASE MEDIA ── -->
    <div class="c8cs-grow-media-wrapper" id="c8cs-grow-trigger">
      <div class="c8cs-main-img-box" id="c8cs-grow-target">
        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=1600&auto=format&fit=crop" alt="The Duch Apartments showcase — built by Cr8v Stacks">
      </div>
    </div>

    <!-- Split Problem & Solution Section -->
    <section class="c8cs-wrap">
      <div class="c8cs-split-section">
        <div class="c8cs-sticky-title">
          <div class="c8cs-label">Overview</div>
          <h2 class="c8cs-split-title">The Challenge <br><span class="c8cs-serif">&amp; Solution</span></h2>
        </div>

        <div class="c8cs-body-content">
          <h4>The Problem</h4>
          <p>The Duch Apartments was launching new luxury serviced apartments in Lekki, Lagos. Relying exclusively on third-party OTAs (Booking.com, Airbnb) meant paying high commission fees and losing direct control over guest relationships, brand messaging, and recurring bookings.</p>
          <p>They needed their own direct booking platform with zero template bloat, instant mobile performance, and a clear brand identity system that communicated luxury living.</p>

          <h4>Our Approach</h4>
          <p>We designed the brand identity and hand-coded a custom WordPress site architecture built specifically around direct apartment discovery, room gallery filters, and instant booking inquiries.</p>

          <div class="c8cs-approach-list">
            <div class="c8cs-approach-step">
              <div class="c8cs-step-num">01</div>
              <div class="c8cs-step-content">
                <h5>Brand Strategy &amp; Identity System</h5>
                <p>Developed a high-trust color token palette (emerald green, warm sand, slate dark), primary logotype, typography scales, and visual guidelines.</p>
              </div>
            </div>

            <div class="c8cs-approach-step">
              <div class="c8cs-step-num">02</div>
              <div class="c8cs-step-content">
                <h5>Custom Room Catalog Architecture</h5>
                <p>Engineered clean custom Gutenberg &amp; Elementor room layout templates with high-res gallery carousels, amenity matrices, and location maps.</p>
              </div>
            </div>

            <div class="c8cs-approach-step">
              <div class="c8cs-step-num">03</div>
              <div class="c8cs-step-content">
                <h5>Entity SEO &amp; Schema Integration</h5>
                <p>Structured Schema.org LocalBusiness and LodgingBusiness JSON-LD code directly into the site header to dominate local search queries.</p>
              </div>
            </div>

            <div class="c8cs-approach-step">
              <div class="c8cs-step-num">04</div>
              <div class="c8cs-step-content">
                <h5>Speed &amp; Conversion Optimization</h5>
                <p>Tuned asset loading pipelines to achieve sub-2 second mobile page loads and seamless WhatsApp / direct reservation conversion paths.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interface & Design Gallery Section -->
    <section class="c8cs-gallery-section">
      <div class="c8cs-wrap" style="padding-top: 0; padding-bottom: 0;">
        <div class="c8cs-label">Showcase</div>
        <h2 class="c8cs-headline" style="font-size: 2.2rem;">Visual Showcase &amp; Systems</h2>

        <div class="c8cs-gallery-grid">
          <!-- Asset 01: Horizontal Container -->
          <div class="c8cs-gallery-card">
            <div class="c8cs-gallery-meta">Brand Identity // Asset 01</div>
            <h3 class="c8cs-gallery-title">Color System &amp; Palette</h3>
            <p class="c8cs-gallery-desc">Curating primary brand accents, dark backgrounds, and neutral tones that convey hospitality elegance.</p>
            
            <div class="c8cs-swatch-row">
              <div class="c8cs-swatch" style="background: #0D2818; color: #FFFFFF;">
                <span class="c8cs-swatch-hex">#0D2818</span>
              </div>
              <div class="c8cs-swatch" style="background: #0047E1; color: #FFFFFF;">
                <span class="c8cs-swatch-hex">#0047E1</span>
              </div>
              <div class="c8cs-swatch" style="background: #F4F6FB; color: #080808;">
                <span class="c8cs-swatch-hex" style="background: rgba(8,8,8,0.1);">#F4F6FB</span>
              </div>
            </div>
          </div>

          <!-- Asset 02: Horizontal Container -->
          <div class="c8cs-gallery-card">
            <div class="c8cs-gallery-meta">Interface // Asset 02</div>
            <h3 class="c8cs-gallery-title">Apartment Detail Page</h3>
            <p class="c8cs-gallery-desc">Designing custom room specs, pricing breakdowns, and direct reservation triggers.</p>
            <div class="c8cs-gallery-img-box">
              <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=800&auto=format&fit=crop" alt="Apartment detail page screenshot">
            </div>
          </div>

          <!-- Asset 03: Tall Container Spanning 2 Columns -->
          <div class="c8cs-gallery-card" style="grid-column: span 2;">
            <div class="c8cs-gallery-meta">Mobile UI // Asset 03</div>
            <h3 class="c8cs-gallery-title">Mobile Direct Reservation Flow</h3>
            <p class="c8cs-gallery-desc">Optimizing touch targets and instant contact forms for mobile users discovering The Duch on Google.</p>
            <div class="c8cs-gallery-img-box is-tall">
              <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop" alt="Mobile reservation flow screenshot">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Outcomes / Metrics Dashboard -->
    <section class="c8cs-metrics-bg">
      <div class="c8cs-wrap" style="padding-top: 0; padding-bottom: 0;">
        <div class="c8cs-label">Outcomes</div>
        <h2 class="c8cs-headline" style="font-size: 2.2rem; margin-bottom: 2.5rem;">Bespoke Performance Metrics</h2>
        
        <div class="c8cs-metrics-grid">
          <!-- Metric 1 -->
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-val">1</div>
            <div class="c8cs-metric-lbl">Unified Brand System</div>
            <p class="c8cs-metric-desc">We created a cohesive visual identity (logo, color system, typography) that the client uses across all social media and offline campaigns.</p>
          </div>

          <!-- Metric 2 -->
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-val">100%</div>
            <div class="c8cs-metric-lbl">Direct booking base</div>
            <p class="c8cs-metric-desc">Designed and deployed a custom room-listing catalog and reservation checkout flow entirely hosted on their own website.</p>
          </div>

          <!-- Metric 3 -->
          <div class="c8cs-metric-card">
            <div class="c8cs-metric-lbl" style="margin-bottom: 1.5rem;">Live Verification</div>
            <a href="https://theduchapartments.com/" target="_blank" rel="noopener" class="c8cs-status-badge">
              <span class="c8cs-status-lbl">Launch Status</span>
              <span class="c8cs-status-val">
                <span class="c8cs-checkmark-circle">✓</span> Visit Live Site ↗
              </span>
            </a>
            <p class="c8cs-metric-desc" style="margin-top: 1.5rem;">The platform is live. Click the button above to view their custom listing structure and attractions indexing.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION 6: STANDALONE RELATED PROJECTS DECK (Service Page UI Baseline)
         ══════════════════════════════════════════ -->
    <div class="c8isv-related-outer">
      <div class="c8isv-wrap">
        <div class="c8isv-label c8isv-reveal is-muted">More Case Studies</div>
        <h2 class="c8isv-section-title c8isv-reveal">Explore Related Projects</h2>
        <p class="c8isv-lead c8isv-reveal">Discover how we engineered custom platforms, brand identities, and growth funnels for other industry leaders.</p>
        <div class="c8isv-related-grid">
          <a href="kiri-city-stays.html" class="c8isv-related-card c8isv-reveal">
            <div class="c8isv-related-card-icon">
              <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
            <span class="c8isv-related-card-platform">01 / Web Design &amp; Booking</span>
            <h3 class="c8isv-related-card-title">Kiri City Stays</h3>
            <p class="c8isv-related-card-desc">Direct booking platform &amp; luxury stay catalog engineered for seamless reservations and local SEO visibility.</p>
            <span class="c8isv-related-card-link">Explore Case Study &rarr;</span>
          </a>
          <a href="bridgepoint-consulting.html" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
            <div class="c8isv-related-card-icon">
              <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
            <span class="c8isv-related-card-platform">02 / Custom Dev</span>
            <h3 class="c8isv-related-card-title">Bridgepoint Advisory</h3>
            <p class="c8isv-related-card-desc">Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.</p>
            <span class="c8isv-related-card-link">Explore Case Study &rarr;</span>
          </a>
          <a href="mkenny-properties.html" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
            <div class="c8isv-related-card-icon">
              <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
            </div>
            <span class="c8isv-related-card-platform">03 / WordPress Custom</span>
            <h3 class="c8isv-related-card-title">Mkenny Properties</h3>
            <p class="c8isv-related-card-desc">Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.</p>
            <span class="c8isv-related-card-link">Explore Case Study &rarr;</span>
          </a>
        </div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════
         SECTION 7: HOMEPAGE CTA SECTION
         ══════════════════════════════════════════ -->
    <style>
      .cta-section {
        background: #FFFFFF !important;
        padding: clamp(5rem, 9vw, 8rem) 0 !important;
        position: relative !important;
        overflow: hidden !important;
        border-top: 1px solid rgba(8,8,8,0.08) !important;
      }
      .cta-inner {
        max-width: 860px !important;
        margin: 0 auto !important;
        padding: 0 clamp(1.5rem, 5vw, 4rem) !important;
        text-align: center !important;
        position: relative !important;
        z-index: 2 !important;
      }
      .cta-arc-container {
        width: 100% !important;
        max-width: 780px !important;
        margin: 0 auto 0 !important;
        display: flex !important;
        justify-content: center !important;
      }
      .cta-arc-video {
        width: 100% !important;
        max-width: 780px !important;
        height: auto !important;
        display: block !important;
        object-fit: contain !important;
        pointer-events: none !important;
        user-select: none !important;
      }
      .cta-content-group {
        margin-top: -6.5rem !important;
        position: relative !important;
        z-index: 5 !important;
      }
      @media (max-width: 768px) {
        .cta-content-group {
          margin-top: -3.5rem !important;
        }
      }
      .cta-badge {
        display: inline-flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        font-family: 'Space Mono', monospace !important;
        font-size: 0.68rem !important;
        letter-spacing: 0.12em !important;
        text-transform: uppercase !important;
        color: #0047E1 !important;
        background: transparent !important;
        border: none !important;
        padding: 0.4rem 1.1rem !important;
        border-radius: 4px !important;
        margin-bottom: 1.5rem !important;
      }
      .cta-h2 {
        font-family: 'Michroma', sans-serif !important;
        font-size: clamp(1.9rem, 4.2vw, 3rem) !important;
        font-weight: 400 !important;
        color: #080808 !important;
        letter-spacing: 0.01em !important;
        line-height: 1.25 !important;
        max-width: 780px !important;
        margin: 0 auto 1.4rem !important;
      }
      .cta-h2 em {
        font-style: normal !important;
        color: #0047E1 !important;
      }
      .cta-desc {
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.95rem !important;
        font-weight: 300 !important;
        color: #555555 !important;
        line-height: 1.7 !important;
        max-width: 620px !important;
        margin: 0 auto 2.5rem !important;
      }
      .cta-btn-pill {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 0.8rem !important;
        background: #0047E1 !important;
        color: #FFFFFF !important;
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        padding: 1rem 2.2rem !important;
        border-radius: 4px !important;
        text-decoration: none !important;
        box-shadow: 0 10px 28px rgba(0, 71, 225, 0.28) !important;
        transition: all 0.25s ease !important;
      }
      .cta-btn-pill:hover {
        background: #0037B5 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 14px 35px rgba(0, 71, 225, 0.38) !important;
      }
      .cta-btn-arrow {
        background: rgba(255,255,255,0.2) !important;
        width: 26px !important;
        height: 26px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 0.85rem !important;
        transition: transform 0.25s ease !important;
      }
      .cta-btn-pill:hover .cta-btn-arrow {
        transform: translateX(4px) !important;
      }
    </style>

    <section class="cta-section" id="contact">
      <div class="cta-inner">
        <div class="cta-arc-container">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
            <source src="../assets/download.mp4" type="video/mp4">
            <source src="../assets/seven_circular_badges.webm" type="video/webm">
          </video>
        </div>

        <div class="cta-content-group">
          <div class="cta-badge"><span style="color:#0047E1;font-weight:800;margin-right:4px;">//</span> START A PROJECT</div>
          
          <h2 class="cta-h2">
            Ready to launch your <em>custom digital platform?</em>
          </h2>

          <p class="cta-desc">
            Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.
          </p>

          <div>
            <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
              Book a Scoping Call <span class="cta-btn-arrow">&rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </section>

  </div><!-- End c8cs-root -->

  <!-- Hero background & Scroll-Grow Image Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var root = document.querySelector('.c8cs-root');
      var atmos = root.querySelector('[data-c8cs-atmos]');
      var glow = root.querySelector('[data-c8cs-glow]');
      var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

      /* Hero Atmosphere Glow */
      if (atmos && glow && canHover && !reduceMotion) {
        atmos.addEventListener('mousemove', function (e) {
          var r = atmos.getBoundingClientRect();
          glow.style.left = (e.clientX - r.left) + 'px';
          glow.style.top = (e.clientY - r.top) + 'px';
        });
        atmos.addEventListener('mouseenter', function () { atmos.classList.add('is-active'); });
        atmos.addEventListener('mouseleave', function () { atmos.classList.remove('is-active'); });
      }

      /* ── Scroll-Grow Full-Width Showcase Media Animation ── */
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
          var maxWVal = 1100 + ((window.innerWidth - 1100) * progress);

          growTarget.style.width = widthVal + '%';
          growTarget.style.maxWidth = maxWVal + 'px';
        }

        window.addEventListener('scroll', handleGrowScroll);
        window.addEventListener('resize', handleGrowScroll);
        handleGrowScroll();
      }

      /* ── Live Matrix Text Scramble Script ── */
      var srvMatrixButtons = document.querySelectorAll('.c8-btn-primary, .c8cs-btn-primary, .cta-btn-pill, .c8isv-related-card-link, .c8cs-back-btn');
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
    });
  </script>
</body>
</html>
"""

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(prototype_html)

print("Full-width paper grid prototype rebuilt successfully!")
