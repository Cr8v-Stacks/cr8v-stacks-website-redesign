<?php
/* Template Name: Service — SEO & Content Strategy */
get_header();
?>
<style>
  /* Portfolio Deliverable Pills */
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
  /* FAQ Section */
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
  .faq-a a { color: #0047E1 !important; text-decoration: underline !important; }
  @media (max-width: 900px) {
    .faq-inner { grid-template-columns: 1fr !important; gap: 2.5rem !important; }
    .faq-aside { position: static !important; }
  }
</style>

<div class="c8isv-root" data-customizer-section="seo-content-page">

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
        <div class="c8isv-breadcrumb"><a href="<?php echo esc_url(home_url('/services/')); ?>">SERVICES</a> <span>/</span> <span class="is-current">SEO &amp; CONTENT STRATEGY</span></div>
        <div class="c8isv-label is-light" data-customizer="seo_hero_eyebrow"><?php echo esc_html(cr8v_mod('seo_hero_eyebrow', 'Search Engine Optimization & Authority Content Engineering')); ?></div>
        <h1 class="c8isv-headline"><span data-customizer="seo_hero_h1_part1"><?php echo esc_html(cr8v_mod('seo_hero_h1_part1', 'Organic Search Dominance ')); ?></span><span class="c8isv-serif" data-customizer="seo_hero_h1_serif"><?php echo esc_html(cr8v_mod('seo_hero_h1_serif', '& Entity SEO')); ?></span></h1>
        <p class="c8isv-hero-intro" data-customizer="seo_hero_intro"><?php echo wp_kses_post(cr8v_mod('seo_hero_intro', 'Technical SEO audits, entity-based search architecture, and semantic keyword clusters engineered to drive compounding organic traffic and revenue without ad spend reliance.')); ?></p>
        <div class="c8isv-hero-ctas">
          <a href="<?php echo esc_url(cr8v_mod('seo_hero_cta1_url', '#c8isv-services')); ?>" class="c8isv-btn-primary" data-customizer="seo_hero_cta1_text"><?php echo esc_html(cr8v_mod('seo_hero_cta1_text', 'See What We Build →')); ?></a>
          <a href="<?php echo esc_url(cr8v_mod('seo_hero_cta2_url', home_url('/contact/'))); ?>" class="c8isv-btn-ghost" data-customizer="seo_hero_cta2_text"><?php echo esc_html(cr8v_mod('seo_hero_cta2_text', 'Get a Quote →')); ?></a>
        </div>
        <div class="c8isv-pill-row">
          <span class="c8isv-pill" data-customizer="seo_hero_pill1"><?php echo esc_html(cr8v_mod('seo_hero_pill1', 'Entity SEO')); ?></span>
          <span class="c8isv-pill" data-customizer="seo_hero_pill2"><?php echo esc_html(cr8v_mod('seo_hero_pill2', 'Technical Audit')); ?></span>
          <span class="c8isv-pill" data-customizer="seo_hero_pill3"><?php echo esc_html(cr8v_mod('seo_hero_pill3', 'Keyword Mapping')); ?></span>
          <span class="c8isv-pill" data-customizer="seo_hero_pill4"><?php echo esc_html(cr8v_mod('seo_hero_pill4', 'Content Strategy')); ?></span>
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
     SECTION 2: WHY SEO & CONTENT (Flank Cards Stack)
     ══════════════════════════════════════════ -->
<div class="c8isv-flank-section">
  <div class="c8isv-flank-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="seo_why_label"><?php echo esc_html(cr8v_mod('seo_why_label', 'Why SEO & Content')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="seo_why_h2"><?php echo esc_html(cr8v_mod('seo_why_h2', 'Sustainable Traffic Infrastructure That Compounds Over Time')); ?></h2>

    <div class="c8isv-flank-container" data-c8isv-flank-trigger>
      <!-- Card 1 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="0">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="seo_why_card1_step"><?php echo esc_html(cr8v_mod('seo_why_card1_step', 'Mapping // Semantic')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="seo_why_card1_title"><?php echo esc_html(cr8v_mod('seo_why_card1_title', 'Semantic Keyword Mapping')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="seo_why_card1_desc"><?php echo wp_kses_post(cr8v_mod('seo_why_card1_desc', 'Aligning page architecture with exact buyer intent vectors across top, middle, and bottom of funnel search queries.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="1">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="seo_why_card2_step"><?php echo esc_html(cr8v_mod('seo_why_card2_step', 'Entity // Authority')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="seo_why_card2_title"><?php echo esc_html(cr8v_mod('seo_why_card2_title', 'Entity SEO & Schema Markup')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="seo_why_card2_desc"><?php echo wp_kses_post(cr8v_mod('seo_why_card2_desc', 'Structuring JSON-LD Schema data to build brand entity authority in Google\'s Knowledge Graph.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="2">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="seo_why_card3_step"><?php echo esc_html(cr8v_mod('seo_why_card3_step', 'Technical // Audit')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="seo_why_card3_title"><?php echo esc_html(cr8v_mod('seo_why_card3_title', 'Technical Crawl Optimization')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="seo_why_card3_desc"><?php echo wp_kses_post(cr8v_mod('seo_why_card3_desc', 'Fixing canonical errors, internal linking debt, page speed bottlenecks, and mobile indexability.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="c8isv-flank-card" data-c8isv-flank-card="3">
        <div class="c8isv-flank-card-quote">"</div>
        <span class="c8isv-flank-card-step" data-customizer="seo_why_card4_step"><?php echo esc_html(cr8v_mod('seo_why_card4_step', 'Content // Revenue')); ?></span>
        <div class="c8isv-flank-card-divider"></div>
        <h3 class="c8isv-flank-card-title" data-customizer="seo_why_card4_title"><?php echo esc_html(cr8v_mod('seo_why_card4_title', 'Revenue-Driven Content Strategy')); ?></h3>
        <p class="c8isv-flank-card-desc" data-customizer="seo_why_card4_desc"><?php echo wp_kses_post(cr8v_mod('seo_why_card4_desc', 'Publishing high-converting buyer guides, product comparisons, and topical authority clusters.')); ?></p>
        <div class="c8isv-flank-card-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 3: OUR WORK (Portfolio Showcase)
     ══════════════════════════════════════════ -->
<div class="c8isv-portfolio-outer">
    <div class="c8isv-portfolio-inner">
      <div class="c8isv-portfolio-head">
        <div class="c8isv-label c8isv-reveal is-center" data-customizer="seo_work_label"><?php echo esc_html(cr8v_mod('seo_work_label', 'Our Work')); ?></div>
        <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="seo_work_h2_part1"><?php echo esc_html(cr8v_mod('seo_work_h2_part1', 'Built for Real Outcomes,')); ?></span><br><span class="c8isv-serif" data-customizer="seo_work_h2_serif"><?php echo esc_html(cr8v_mod('seo_work_h2_serif', 'Not Just Concepts')); ?></span></h2>
      </div>
      <div class="c8isv-portfolio-card" data-c8isv-portfolio-card>
        <div class="c8isv-portfolio-img">
          <img src="<?php echo esc_url(cr8v_mod('seo_work_cs_img', 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop')); ?>" alt="blvck Hair NG — built by Cr8v Stacks" data-customizer="seo_work_cs_img">
        </div>
        <div class="c8isv-portfolio-info">
          <span class="c8isv-portfolio-client" data-customizer="seo_work_cs_client"><?php echo esc_html(cr8v_mod('seo_work_cs_client', 'Case Study — blvck Hair NG')); ?></span>
          <h3 class="c8isv-portfolio-title" data-customizer="seo_work_cs_title"><?php echo esc_html(cr8v_mod('seo_work_cs_title', 'Organic Revenue & Entity Search Architecture')); ?></h3>
          <p class="c8isv-portfolio-desc" data-customizer="seo_work_cs_desc"><?php echo wp_kses_post(cr8v_mod('seo_work_cs_desc', 'blvck Hair NG needed sustainable organic search traffic without relying strictly on paid Instagram ads. We built an entity-mapped keyword strategy, technical schema architecture, and high-converting product buyer guides.')); ?></p>
          <div class="c8isv-portfolio-stats">
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="seo_work_cs_stat1_val"><?php echo esc_html(cr8v_mod('seo_work_cs_stat1_val', '280%')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="seo_work_cs_stat1_lbl"><?php echo esc_html(cr8v_mod('seo_work_cs_stat1_lbl', 'Organic Search Traffic Growth')); ?></span>
            </div>
            <div>
              <span class="c8isv-portfolio-stat-val" data-customizer="seo_work_cs_stat2_val"><?php echo esc_html(cr8v_mod('seo_work_cs_stat2_val', '#1')); ?></span>
              <span class="c8isv-portfolio-stat-lbl" data-customizer="seo_work_cs_stat2_lbl"><?php echo esc_html(cr8v_mod('seo_work_cs_stat2_lbl', 'Rank for Core Product Keywords')); ?></span>
            </div>
          </div>
          <div class="c8isv-portfolio-deliverables" style="grid-column: span 2; margin-top: 0.5rem;">
            <span class="c8isv-portfolio-stat-lbl" style="margin-bottom: 0.5rem; display: block;">Key Deliverables</span>
            <div class="c8isv-portfolio-pills">
              <span class="c8isv-portfolio-pill" data-customizer="seo_work_cs_pill1"><?php echo esc_html(cr8v_mod('seo_work_cs_pill1', 'Semantic Keyword Mapping')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="seo_work_cs_pill2"><?php echo esc_html(cr8v_mod('seo_work_cs_pill2', 'Entity SEO & Schema Architecture')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="seo_work_cs_pill3"><?php echo esc_html(cr8v_mod('seo_work_cs_pill3', 'Technical Site Audit')); ?></span>
              <span class="c8isv-portfolio-pill" data-customizer="seo_work_cs_pill4"><?php echo esc_html(cr8v_mod('seo_work_cs_pill4', 'Content Strategy Engine')); ?></span>
            </div>
          </div>
          <a href="<?php echo esc_url(cr8v_mod('seo_work_cs_btn_url', home_url('/case-studies/blvck-hair-ng/'))); ?>" class="c8isv-explore" style="margin-top: 1.5rem;" data-customizer="seo_work_cs_btn_text"><?php echo esc_html(cr8v_mod('seo_work_cs_btn_text', 'View Case Study →')); ?></a>
        </div>
      </div>
      <div class="c8isv-portfolio-footer">
        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="c8isv-explore">See All Projects &rarr;</a>
      </div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 4: WHAT YOU GET (Folder Deck)
     ══════════════════════════════════════════ -->
<div class="c8srv-folder-section" id="c8isv-services">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="seo_deck_label"><?php echo esc_html(cr8v_mod('seo_deck_label', 'What You Get')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="seo_deck_h2_part1"><?php echo esc_html(cr8v_mod('seo_deck_h2_part1', 'Every layer of your search strategy, ')); ?></span><span class="c8isv-serif" data-customizer="seo_deck_h2_serif"><?php echo esc_html(cr8v_mod('seo_deck_h2_serif', 'engineered by Cr8v Stacks.')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="seo_deck_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck_desc', 'Technical crawl audits, semantic keyword mapping, Schema JSON-LD wiring, topical content clusters, and rank tracking analytics.')); ?></p>

    <div class="c8srv-folder-deck" data-c8srv-folder-deck>
      <!-- Card 1 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="seo_deck1_tab"><?php echo esc_html(cr8v_mod('seo_deck1_tab', '01 // Architecture')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="seo_deck1_title"><?php echo esc_html(cr8v_mod('seo_deck1_title', 'Semantic Keyword & SERP Mapping')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="seo_deck1_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck1_desc', 'Discovering high-value commercial keywords, mapping intent tiers, and structuring site URL hierarchies.')); ?></p>
          <a href="<?php echo esc_url(cr8v_mod('seo_deck1_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="seo_deck1_cta_text"><?php echo esc_html(cr8v_mod('seo_deck1_cta_text', 'Discuss keyword mapping →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="seo_deck1_img">
            <img src="<?php echo esc_url(cr8v_mod('seo_deck1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_deck_mapping.webp')); ?>" alt="Semantic Keyword & SERP Mapping" data-customizer="seo_deck1_img">
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="seo_deck2_tab"><?php echo esc_html(cr8v_mod('seo_deck2_tab', '02 // Technical')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="seo_deck2_title"><?php echo esc_html(cr8v_mod('seo_deck2_title', 'Technical Crawl & Speed Optimization')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="seo_deck2_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck2_desc', 'Eliminating crawl budget waste, fixing indexation errors, and configuring Core Web Vitals performance.')); ?></p>
          <a href="<?php echo esc_url(cr8v_mod('seo_deck2_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="seo_deck2_cta_text"><?php echo esc_html(cr8v_mod('seo_deck2_cta_text', 'Discuss technical SEO →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="seo_deck2_img">
            <img src="<?php echo esc_url(cr8v_mod('seo_deck2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_deck_technical.webp')); ?>" alt="Technical Crawl & Speed Optimization" data-customizer="seo_deck2_img">
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="seo_deck3_tab"><?php echo esc_html(cr8v_mod('seo_deck3_tab', '03 // Schema')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="seo_deck3_title"><?php echo esc_html(cr8v_mod('seo_deck3_title', 'Entity SEO & JSON-LD Schema')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="seo_deck3_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck3_desc', 'Building rich snippet schema for Organization, Product, FAQ, Article, and Local Business entities.')); ?></p>
          <a href="<?php echo esc_url(cr8v_mod('seo_deck3_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="seo_deck3_cta_text"><?php echo esc_html(cr8v_mod('seo_deck3_cta_text', 'Discuss JSON-LD schema →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="seo_deck3_img">
            <img src="<?php echo esc_url(cr8v_mod('seo_deck3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_deck_schema.webp')); ?>" alt="Entity SEO & JSON-LD Schema" data-customizer="seo_deck3_img">
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="seo_deck4_tab"><?php echo esc_html(cr8v_mod('seo_deck4_tab', '04 // Content')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="seo_deck4_title"><?php echo esc_html(cr8v_mod('seo_deck4_title', 'Topical Authority Content Clusters')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="seo_deck4_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck4_desc', 'Writing in-depth buyer guides, industry comparison pages, and hub-and-spoke article structures.')); ?></p>
          <a href="<?php echo esc_url(cr8v_mod('seo_deck4_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="seo_deck4_cta_text"><?php echo esc_html(cr8v_mod('seo_deck4_cta_text', 'Discuss content clusters →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="seo_deck4_img">
            <img src="<?php echo esc_url(cr8v_mod('seo_deck4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_deck_clusters.webp')); ?>" alt="Topical Authority Content Clusters" data-customizer="seo_deck4_img">
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="c8srv-folder-card">
        <div class="c8srv-folder-tab" data-customizer="seo_deck5_tab"><?php echo esc_html(cr8v_mod('seo_deck5_tab', '05 // Analytics')); ?></div>
        <div class="c8srv-folder-card-left">
          <h3 class="c8srv-folder-card-title" data-customizer="seo_deck5_title"><?php echo esc_html(cr8v_mod('seo_deck5_title', 'Google Search Console & Rank Audits')); ?></h3>
          <p class="c8srv-folder-card-desc" data-customizer="seo_deck5_desc"><?php echo wp_kses_post(cr8v_mod('seo_deck5_desc', 'Continuous rank position tracking, backlink audits, and organic revenue attribution dashboards.')); ?></p>
          <a href="<?php echo esc_url(cr8v_mod('seo_deck5_cta_url', home_url('/contact/'))); ?>" class="c8srv-explore" data-customizer="seo_deck5_cta_text"><?php echo esc_html(cr8v_mod('seo_deck5_cta_text', 'Discuss rank tracking →')); ?></a>
        </div>
        <div class="c8srv-folder-card-right">
          <div class="c8srv-folder-card-img" data-customizer="seo_deck5_img">
            <img src="<?php echo esc_url(cr8v_mod('seo_deck5_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_deck_analytics.webp')); ?>" alt="Google Search Console & Rank Audits" data-customizer="seo_deck5_img">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5: HOW WE APPROACH IT (Process)
     ══════════════════════════════════════════ -->
<div class="c8isv-approach-outer">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="seo_proc_label"><?php echo esc_html(cr8v_mod('seo_proc_label', 'How We Approach It')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="seo_proc_h2"><?php echo esc_html(cr8v_mod('seo_proc_h2', 'How We Approach SEO & Content Strategy')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="seo_proc_lead"><?php echo wp_kses_post(cr8v_mod('seo_proc_lead', 'Our milestone-driven design and engineering process delivers clear progress at every phase of your project.')); ?></p>
  </div>
  
  <div class="c8isv-approach-deck" data-c8isv-approach-deck>
    <!-- Stage 1 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="seo_proc1_num"><?php echo esc_html(cr8v_mod('seo_proc1_num', '01')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="seo_proc1_name"><?php echo esc_html(cr8v_mod('seo_proc1_name', 'Audit')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="seo_proc1_tags"><?php echo esc_html(cr8v_mod('seo_proc1_tags', 'Crawl · Keywords · Competitors')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="seo_proc1_desc"><?php echo wp_kses_post(cr8v_mod('seo_proc1_desc', 'We audit existing site health, analyze competitor backlink profiles, and map high-intent commercial keywords.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="seo_proc1_img">
          <img src="<?php echo esc_url(cr8v_mod('seo_proc1_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_proc_audit.webp')); ?>" alt="SEO Audit stage" data-customizer="seo_proc1_img">
        </div>
      </div>
    </div>

    <!-- Stage 2 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="seo_proc2_num"><?php echo esc_html(cr8v_mod('seo_proc2_num', '02')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="seo_proc2_name"><?php echo esc_html(cr8v_mod('seo_proc2_name', 'Structure')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="seo_proc2_tags"><?php echo esc_html(cr8v_mod('seo_proc2_tags', 'URL Hierarchy · Schema · Core Web Vitals')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="seo_proc2_desc"><?php echo wp_kses_post(cr8v_mod('seo_proc2_desc', 'We re-architect site URL hierarchies, implement JSON-LD Schema markup, and optimize Core Web Vitals speed.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="seo_proc2_img">
          <img src="<?php echo esc_url(cr8v_mod('seo_proc2_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_proc_structure.webp')); ?>" alt="SEO structure & schema stage" data-customizer="seo_proc2_img">
        </div>
      </div>
    </div>

    <!-- Stage 3 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="seo_proc3_num"><?php echo esc_html(cr8v_mod('seo_proc3_num', '03')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="seo_proc3_name"><?php echo esc_html(cr8v_mod('seo_proc3_name', 'Produce')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="seo_proc3_tags"><?php echo esc_html(cr8v_mod('seo_proc3_tags', 'Topical Clusters · Guides · Internal Links')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="seo_proc3_desc"><?php echo wp_kses_post(cr8v_mod('seo_proc3_desc', 'We engineer in-depth topical content clusters, publish buyer guides, and build strategic internal links.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="seo_proc3_img">
          <img src="<?php echo esc_url(cr8v_mod('seo_proc3_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_proc_produce.webp')); ?>" alt="SEO content production stage" data-customizer="seo_proc3_img">
        </div>
      </div>
    </div>

    <!-- Stage 4 -->
    <div class="c8isv-approach-wrap">
      <div class="c8isv-approach-card" data-c8isv-approach-card>
        <div class="c8isv-approach-col-num" data-customizer="seo_proc4_num"><?php echo esc_html(cr8v_mod('seo_proc4_num', '04')); ?></div>
        <div class="c8isv-approach-col-name" data-customizer="seo_proc4_name"><?php echo esc_html(cr8v_mod('seo_proc4_name', 'Amplify')); ?></div>
        <div class="c8isv-approach-col-tags" data-customizer="seo_proc4_tags"><?php echo esc_html(cr8v_mod('seo_proc4_tags', 'Rank Tracking · Authority · Optimization')); ?></div>
        <div class="c8isv-approach-col-desc" data-customizer="seo_proc4_desc"><?php echo wp_kses_post(cr8v_mod('seo_proc4_desc', 'We monitor daily SERP rankings, earn authoritative backlinks, and refresh content to maintain top positions.')); ?></div>
        <div class="c8isv-approach-col-img" data-customizer="seo_proc4_img">
          <img src="<?php echo esc_url(cr8v_mod('seo_proc4_img', get_template_directory_uri() . '/assets/img/abstract/cr8v_seo_proc_scale.webp')); ?>" alt="SEO rank tracking amplification stage" data-customizer="seo_proc4_img">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 5.5: WHERE THIS FITS IN (Platform Deck)
     ══════════════════════════════════════════ -->
<div class="c8isv-fits-outer" style="background: #FFFFFF !important; padding: 6rem 0 !important; border-top: 1px solid rgba(8,8,8,0.08) !important;">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal" data-customizer="seo_plat_label"><?php echo esc_html(cr8v_mod('seo_plat_label', 'Search Strategy Options')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" style="margin-bottom: 1.5rem !important;"><span data-customizer="seo_plat_h2_part1"><?php echo esc_html(cr8v_mod('seo_plat_h2_part1', 'Choosing Your ')); ?></span><span class="c8isv-serif" data-customizer="seo_plat_h2_serif"><?php echo esc_html(cr8v_mod('seo_plat_h2_serif', 'Organic Growth Engine')); ?></span></h2>
    <p class="c8isv-lead c8isv-reveal" style="max-width: 720px !important; margin-bottom: 3rem !important;" data-customizer="seo_plat_desc"><?php echo wp_kses_post(cr8v_mod('seo_plat_desc', 'Whether you need a technical SEO audit, topical content expansion, local search dominance, or a monthly organic retainer:')); ?></p>
    
    <div class="c8isv-platform-deck" data-c8isv-platform-trigger>
      <!-- Option 1 -->
      <div class="c8isv-platform-card c8isv-reveal">
        <span class="c8isv-platform-badge" data-customizer="seo_plat1_badge"><?php echo esc_html(cr8v_mod('seo_plat1_badge', 'Stack // Technical')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="seo_plat1_title"><?php echo esc_html(cr8v_mod('seo_plat1_title', 'Technical SEO & Schema Audits')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="seo_plat1_desc"><?php echo wp_kses_post(cr8v_mod('seo_plat1_desc', 'Fixing technical site debt, crawl errors, canonical loops, and structured data schemas.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6z"/></svg>
        </div>
      </div>

      <!-- Option 2 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d1">
        <span class="c8isv-platform-badge" data-customizer="seo_plat2_badge"><?php echo esc_html(cr8v_mod('seo_plat2_badge', 'Stack // Content')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="seo_plat2_title"><?php echo esc_html(cr8v_mod('seo_plat2_title', 'Topical Authority Content')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="seo_plat2_desc"><?php echo wp_kses_post(cr8v_mod('seo_plat2_desc', 'Building comprehensive article hubs and product buying guides that rank for hundreds of long-tail keywords.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
        </div>
      </div>

      <!-- Option 3 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d2">
        <span class="c8isv-platform-badge" data-customizer="seo_plat3_badge"><?php echo esc_html(cr8v_mod('seo_plat3_badge', 'Stack // Local')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="seo_plat3_title"><?php echo esc_html(cr8v_mod('seo_plat3_title', 'Local SEO & Map Pack Optimization')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="seo_plat3_desc"><?php echo wp_kses_post(cr8v_mod('seo_plat3_desc', 'Dominating local search results, Google Maps listings, and localized service queries.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <!-- Option 4 -->
      <div class="c8isv-platform-card c8isv-reveal c8isv-reveal-d3">
        <span class="c8isv-platform-badge" data-customizer="seo_plat4_badge"><?php echo esc_html(cr8v_mod('seo_plat4_badge', 'Stack // Retainer')); ?></span>
        <div class="c8isv-platform-divider"></div>
        <h3 class="c8isv-platform-title" data-customizer="seo_plat4_title"><?php echo esc_html(cr8v_mod('seo_plat4_title', 'Full Organic Growth Retainer')); ?></h3>
        <p class="c8isv-platform-desc" data-customizer="seo_plat4_desc"><?php echo wp_kses_post(cr8v_mod('seo_plat4_desc', 'Continuous keyword expansion, content production, link building, and monthly SERP reporting.')); ?></p>
        <div class="c8isv-platform-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
    </div>

    <p class="c8isv-reveal" style="font-size: 0.95rem !important; color: #6B6B6B !important; max-width: 800px !important; margin: 2rem 0 !important; line-height: 1.7 !important;" data-customizer="seo_plat_footer_note">
      <?php echo wp_kses_post(cr8v_mod('seo_plat_footer_note', 'Not sure which SEO service your site needs first? Tell us your current organic traffic goals and we\'ll run a preliminary search audit during our scoping call.')); ?>
    </p>

    <div class="c8isv-reveal" style="display: flex !important; margin-top: 2rem !important;">
      <a href="<?php echo esc_url(cr8v_mod('seo_plat_cta_url', home_url('/contact/?model=project&service=seo-content'))); ?>" class="c8isv-btn-primary" data-customizer="seo_plat_cta_text"><?php echo esc_html(cr8v_mod('seo_plat_cta_text', 'Start an SEO Scoping Call →')); ?></a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 6: FULL CATALOG HOVERLIST
     ══════════════════════════════════════════ -->
<div class="c8isv-hl-section">
  <div class="c8isv-wrap" style="padding-bottom:0">
    <div class="c8isv-label c8isv-reveal" data-customizer="seo_cat_label"><?php echo esc_html(cr8v_mod('seo_cat_label', 'Project Catalog')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="seo_cat_h2"><?php echo esc_html(cr8v_mod('seo_cat_h2', 'Every Kind of Search Strategy We Engineer')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" style="margin-bottom:2rem" data-customizer="seo_cat_desc"><?php echo wp_kses_post(cr8v_mod('seo_cat_desc', 'From technical site audits to enterprise content hubs — hover to inspect the SEO stack.')); ?></p>
  </div>
  <div class="c8isv-wrap" style="padding-top:0 !important; position:relative">
    <div class="c8isv-hoverlist" data-c8isv-hoverlist>
      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Screaming Frog" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat1_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/screamingfrog.svg')); ?>" data-tech-2="Google Search Console" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat1_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">01</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat1_title"><?php echo esc_html(cr8v_mod('seo_cat1_title', 'Technical SEO & Crawl Optimization')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat1_tagline"><?php echo esc_html(cr8v_mod('seo_cat1_tagline', 'Deep technical audits resolving indexation errors, duplicate content, and slow Core Web Vitals.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat1_tech"><?php echo esc_html(cr8v_mod('seo_cat1_tech', 'Technical SEO')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Ahrefs" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat2_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg')); ?>" data-tech-2="SEMrush" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat2_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">02</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat2_title"><?php echo esc_html(cr8v_mod('seo_cat2_title', 'Semantic Keyword & Intent Mapping')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat2_tagline"><?php echo esc_html(cr8v_mod('seo_cat2_tagline', 'Researching high-converting commercial keywords and mapping them to optimised landing pages.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat2_tech"><?php echo esc_html(cr8v_mod('seo_cat2_tech', 'Keyword Strategy')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d2" data-tech-1="Google Search Console" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat3_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg')); ?>" data-tech-2="Ahrefs" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat3_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">03</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat3_title"><?php echo esc_html(cr8v_mod('seo_cat3_title', 'Entity SEO & Structured Schema Data')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat3_tagline"><?php echo esc_html(cr8v_mod('seo_cat3_tagline', 'Coding custom JSON-LD schema for rich search snippets, FAQs, reviews, and entity recognition.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat3_tech"><?php echo esc_html(cr8v_mod('seo_cat3_tech', 'Entity Schema')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d3" data-tech-1="SEMrush" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat4_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg')); ?>" data-tech-2="Ahrefs" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat4_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">04</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat4_title"><?php echo esc_html(cr8v_mod('seo_cat4_title', 'Topical Content Hubs & Buyer Guides')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat4_tagline"><?php echo esc_html(cr8v_mod('seo_cat4_tagline', 'Publishing authoritative article clusters that position your brand as the industry reference.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat4_tech"><?php echo esc_html(cr8v_mod('seo_cat4_tech', 'Content Clusters')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal" data-tech-1="Screaming Frog" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat5_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/screamingfrog.svg')); ?>" data-tech-2="Google Search Console" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat5_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">05</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat5_title"><?php echo esc_html(cr8v_mod('seo_cat5_title', 'E-Commerce Product & Category SEO')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat5_tagline"><?php echo esc_html(cr8v_mod('seo_cat5_tagline', 'Optimising product descriptions, category page filters, and schema markup for Shopify & WooCommerce.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat5_tech"><?php echo esc_html(cr8v_mod('seo_cat5_tech', 'E-Commerce SEO')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>

      <div class="c8isv-hoverlist-item c8isv-reveal c8isv-reveal-d1" data-tech-1="Google Search Console" data-logo-1="<?php echo esc_url(cr8v_mod('seo_cat6_logo1', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/googlesearchconsole.svg')); ?>" data-tech-2="SEMrush" data-logo-2="<?php echo esc_url(cr8v_mod('seo_cat6_logo2', 'https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg')); ?>">
        <div class="c8isv-hoverlist-left">
          <span class="c8isv-hoverlist-num">06</span>
          <h3 class="c8isv-hoverlist-title" data-customizer="seo_cat6_title"><?php echo esc_html(cr8v_mod('seo_cat6_title', 'Local Business Search & Google Maps')); ?></h3>
          <span class="c8isv-hoverlist-tagline" data-customizer="seo_cat6_tagline"><?php echo esc_html(cr8v_mod('seo_cat6_tagline', 'Optimising Google Business Profiles, localised schema, and geo-targeted landing pages.')); ?></span>
        </div>
        <div class="c8isv-hoverlist-right">
          <span class="c8isv-hoverlist-tech" data-customizer="seo_cat6_tech"><?php echo esc_html(cr8v_mod('seo_cat6_tech', 'Local SEO')); ?></span>
          <span class="c8isv-hoverlist-arrow">→</span>
        </div>
      </div>
    </div>
    <!-- Fan Stack Preview -->
    <div class="c8isv-hoverlist-preview" data-c8isv-preview>
      <div class="c8isv-fan-card c8isv-fan-left"><img class="c8isv-fan-logo" data-c8isv-fan-logo="left" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/ahrefs.svg" alt="Ahrefs"></div>
      <div class="c8isv-fan-card c8isv-fan-right"><img class="c8isv-fan-logo" data-c8isv-fan-logo="right" src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/semrush.svg" alt="SEMrush"></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION 8: CLIENT FEEDBACK (Testimonials)
     ══════════════════════════════════════════ -->
<div class="c8isv-testi-outer">
  <div class="c8isv-testi-inner">
    <div class="c8isv-label c8isv-reveal is-center" data-customizer="seo_testi_label"><?php echo esc_html(cr8v_mod('seo_testi_label', 'Client Feedback')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal"><span data-customizer="seo_testi_h2_part1"><?php echo esc_html(cr8v_mod('seo_testi_h2_part1', 'What clients say after ')); ?></span><span class="c8isv-serif" data-customizer="seo_testi_h2_serif"><?php echo esc_html(cr8v_mod('seo_testi_h2_serif', 'launch')); ?></span></h2>
    <div class="c8isv-testi-grid" data-c8isv-testi-trigger>
      <div class="c8isv-testi-card is-left" data-c8isv-testi-left>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="seo_testi1_text"><?php echo wp_kses_post(cr8v_mod('seo_testi1_text', 'Cr8v Stacks transformed our search presence. We grew organic traffic by 280% and rank #1 for our primary revenue keywords without buying paid ads.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="seo_testi1_author"><?php echo esc_html(cr8v_mod('seo_testi1_author', 'Founder — E-Commerce Retail')); ?></div>
      </div>
      <div class="c8isv-testi-card is-center">
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="seo_testi2_text"><?php echo wp_kses_post(cr8v_mod('seo_testi2_text', 'The technical SEO audit and schema architecture fixed 2 years of indexing issues in 3 weeks. Our organic leads grew 4x within 90 days.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="seo_testi2_author"><?php echo esc_html(cr8v_mod('seo_testi2_author', 'Marcus Vance — Chief Technology Officer')); ?></div>
      </div>
      <div class="c8isv-testi-card is-right" data-c8isv-testi-right>
        <div class="c8isv-testi-quote">"</div>
        <div class="c8isv-testi-divider"></div>
        <p class="c8isv-testi-text" data-customizer="seo_testi3_text"><?php echo wp_kses_post(cr8v_mod('seo_testi3_text', 'Their semantic keyword mapping and content cluster strategy made us the authority in our niche. Our organic traffic compounds month after month.')); ?></p>
        <div class="c8isv-testi-author" data-customizer="seo_testi3_author"><?php echo esc_html(cr8v_mod('seo_testi3_author', 'Elena Rostova — Head of Organic Growth')); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SECTION: PRICING MODELS & PROJECT ESTIMATOR
     ══════════════════════════════════════════ -->
<div class="c8srv-pricing-section" id="pricing-scope">
  <div class="c8isv-wrap" style="text-align: left !important;">
    <div class="c8isv-label c8srv-reveal" style="justify-content: flex-start !important; margin-left: 0 !important; margin-right: auto !important; text-align: left !important;" data-customizer="seo_pricing_label"><?php echo esc_html(cr8v_mod('seo_pricing_label', 'PRICING MODELS')); ?></div>
    <h2 class="c8isv-section-title c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;"><span data-customizer="seo_pricing_h2_part1"><?php echo esc_html(cr8v_mod('seo_pricing_h2_part1', 'HOW WE ')); ?></span><span class="c8isv-serif" data-customizer="seo_pricing_h2_serif"><?php echo esc_html(cr8v_mod('seo_pricing_h2_serif', 'WORK TOGETHER')); ?></span></h2>
    <p class="c8isv-lead c8srv-reveal" style="text-align: left !important; margin-left: 0 !important;" data-customizer="seo_pricing_desc"><?php echo wp_kses_post(cr8v_mod('seo_pricing_desc', 'Whether you need a dedicated extension of your team or a custom design & code project with guaranteed delivery, we have a model to fit.')); ?></p>

    <div class="c8srv-pricing-split">
      <!-- Retainer Card -->
      <div class="c8srv-price-box c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="seo_plan1_type"><?php echo esc_html(cr8v_mod('seo_plan1_type', 'Ongoing Support')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="seo_plan1_title"><?php echo esc_html(cr8v_mod('seo_plan1_title', 'Growth Retainer')); ?></h3>
          <div class="c8srv-price-amount">
            <span class="c8srv-price-num" data-customizer="seo_plan1_price"><?php echo esc_html(cr8v_mod('seo_plan1_price', '$800')); ?></span>
            <span class="c8srv-price-period" data-customizer="seo_plan1_period"><?php echo esc_html(cr8v_mod('seo_plan1_period', '/mo')); ?></span>
          </div>
        </div>
        <p class="c8srv-price-desc" data-customizer="seo_plan1_desc"><?php echo wp_kses_post(cr8v_mod('seo_plan1_desc', 'A monthly block of dedicated design and development hours to keep your website fast, updated, and growing. Perfect for active search marketing, technical SEO, speed tuning, and site edits.')); ?></p>
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
        <a href="<?php echo esc_url(cr8v_mod('seo_plan1_cta_url', home_url('/contact/?model=retainer'))); ?>" class="c8srv-price-btn is-light" data-customizer="seo_plan1_cta_text"><?php echo esc_html(cr8v_mod('seo_plan1_cta_text', 'Secure Retainer Slot')); ?></a>
      </div>

      <!-- Fixed Project Card -->
      <div class="c8srv-price-box is-highlight c8srv-reveal">
        <div class="c8srv-price-header">
          <span class="c8srv-price-type" data-customizer="seo_plan2_type"><?php echo esc_html(cr8v_mod('seo_plan2_type', 'Fixed Scope')); ?></span>
          <h3 class="c8srv-price-title" data-customizer="seo_plan2_title"><?php echo esc_html(cr8v_mod('seo_plan2_title', 'Fixed Projects')); ?></h3>
          <div class="c8srv-price-amount">
            <span class="c8srv-price-num" data-customizer="seo_plan2_price"><?php echo esc_html(cr8v_mod('seo_plan2_price', 'From $1,200')); ?></span>
            <span class="c8srv-price-period" data-customizer="seo_plan2_period"><?php echo esc_html(cr8v_mod('seo_plan2_period', ' entry')); ?></span>
          </div>
        </div>
        <p class="c8srv-price-desc" data-customizer="seo_plan2_desc"><?php echo wp_kses_post(cr8v_mod('seo_plan2_desc', 'A deep, technical search audit &amp; content architecture engagement with transparent scoping, clear milestones, and guaranteed delivery. Best for site crawl auditing, entity schema tuning, and keyword mapping.')); ?></p>
        <div class="c8srv-price-features">
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Semantic keyword mapping &amp; topic cluster architecture</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Screaming Frog technical audit &amp; entity JSON-LD schema</span>
          </div>
          <div class="c8srv-price-feature">
            <span class="c8srv-icon-sq"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>On-page content optimization &amp; Core Web Vitals tuning</span>
          </div>
        </div>
        <a href="<?php echo esc_url(cr8v_mod('seo_plan2_cta_url', home_url('/contact/?model=project'))); ?>" class="c8srv-price-btn is-primary" data-customizer="seo_plan2_cta_text"><?php echo esc_html(cr8v_mod('seo_plan2_cta_text', 'Start A Project')); ?></a>
      </div>
    </div>

    <!-- Scope Estimator -->
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
            <span class="c8srv-est-group-title">1. Core Organic SEO Package</span>
            <div class="c8srv-est-choices" data-est-group="platform">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="techclean" data-est-price="600">Technical SEO Audit &amp; Clean ($600)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="searchengine" data-est-price="1200">Organic Growth Search Engine ($1,200)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="enterpriseseo" data-est-price="1800">Enterprise Technical SEO ($1,800)</button>
            </div>
          </div>

          <!-- Step 2 -->
          <div>
            <span class="c8srv-est-group-title">2. Target Market Reach</span>
            <div class="c8srv-est-choices" data-est-group="scale">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="single" data-est-multiplier="1.0">Single Regional Market</button>
              <button type="button" class="c8srv-est-choice" data-est-val="multi" data-est-multiplier="1.5">Multi-Regional &amp; Global Search</button>
            </div>
          </div>

          <!-- Step 3 -->
          <div>
            <span class="c8srv-est-group-title">3. Content &amp; Speed Add-Ons</span>
            <div class="c8srv-est-choices" data-est-group="growth">
              <button type="button" class="c8srv-est-choice is-active" data-est-val="none" data-est-price="0">No Add-Ons</button>
              <button type="button" class="c8srv-est-choice" data-est-val="clusters" data-est-price="500">Semantic Keyword Topic Clusters (+ $500)</button>
              <button type="button" class="c8srv-est-choice" data-est-val="vitals" data-est-price="400">Core Web Vitals Speed Tuning (+ $400)</button>
            </div>
          </div>
        </div>

        <div class="c8srv-est-result">
          <span class="c8srv-est-range-label">Estimated Starting Investment</span>
          <div class="c8srv-est-range" id="est-range-display">$1,200 - $1,500</div>
          <span class="c8srv-est-deliverables-title">Included Deliverables:</span>
          <div class="c8srv-est-deliverables" id="est-deliverables-list"><div>• Technical Crawl &amp; Speed Audit</div><div>• Semantic Keyword &amp; Intent Mapping</div><div>• Entity SEO &amp; JSON-LD Schema markup setup</div></div>
          <a href="<?php echo esc_url(cr8v_mod('seo_est_cta_url', home_url('/contact/?platform=seo&est=1200-1500'))); ?>" id="est-cta-link" class="c8srv-price-btn is-primary" style="margin-top: 1rem !important; margin-bottom: 1rem !important;">Submit Scope Request</a>
          <a href="<?php echo esc_url(cr8v_mod('seo_est_calc_url', home_url('/toolkits/website-cost-calculator/'))); ?>" class="c8srv-explore" style="justify-content: center !important; font-size: 11px !important; margin-top: 0.5rem !important; display: flex !important; font-family: 'Space Mono', monospace !important; color: #0047E1 !important; text-transform: uppercase !important; font-weight: 700 !important; letter-spacing: 0.05em !important; align-items: center !important; gap: 8px !important;">Or build a custom stack with our Calculator &rarr;</a>
        </div>
      </div>
    </div>
  </div>

<!-- ══════════════════════════════════════════
     SECTION 9: FAQ
     ══════════════════════════════════════════ -->
<section class="faq-section" id="faq">
  <div class="faq-inner">
    <div class="faq-aside">
      <div class="faq-eyebrow" data-customizer="seo_faq_eyebrow"><?php echo esc_html(cr8v_mod('seo_faq_eyebrow', '// COMMON QUESTIONS')); ?></div>
      <h2 class="faq-h2" data-customizer="seo_faq_h2"><?php echo esc_html(cr8v_mod('seo_faq_h2', 'SEO Questions, Answered Honestly')); ?></h2>
      <p class="faq-sub" data-customizer="seo_faq_sub"><?php echo wp_kses_post(cr8v_mod('seo_faq_sub', 'Clear answers to common questions about our technical SEO audits, semantic keyword mapping, and content production processes.')); ?></p>
      <a href="<?php echo esc_url(cr8v_mod('seo_faq_cta_url', home_url('/contact/'))); ?>" class="faq-cta-link" data-customizer="seo_faq_cta_text"><?php echo esc_html(cr8v_mod('seo_faq_cta_text', 'Talk to us')); ?> <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
    </div>

    <ul class="faq-list" id="srv-faq-list">
      <li class="faq-item is-open">
        <button class="faq-trigger" aria-expanded="true">
          <span class="faq-q" data-customizer="seo_faq1_q"><?php echo esc_html(cr8v_mod('seo_faq1_q', 'How long does it take to see results from SEO and Content Strategy?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body" style="grid-template-rows: 1fr;">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq1_a"><?php echo wp_kses_post(cr8v_mod('seo_faq1_a', 'Technical SEO fixes and schema improvements often generate indexing improvements within 2 to 4 weeks. Sustained rank improvements and organic traffic compounding typically take 60 to 90 days as domain authority builds.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq2_q"><?php echo esc_html(cr8v_mod('seo_faq2_q', 'How much does an SEO and Content Strategy project cost?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq2_a"><?php echo wp_kses_post(cr8v_mod('seo_faq2_a', 'Our fixed-scope SEO & Content projects start from $1,200 for a complete technical crawl audit, semantic keyword mapping, and Schema JSON-LD implementation. Ongoing monthly SEO growth retainers start at $800/mo.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq3_q"><?php echo esc_html(cr8v_mod('seo_faq3_q', 'Why hire an agency like Cr8v Stacks for SEO instead of a solo freelancer?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq3_a"><?php echo wp_kses_post(cr8v_mod('seo_faq3_a', 'Solo freelancers often focus on superficial keyword density without understanding technical crawl budgets, server-side performance, or entity schema architecture. Cr8v Stacks combines senior technical SEO engineers, structured data architects, and editorial copywriters into a dedicated execution team.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq4_q"><?php echo esc_html(cr8v_mod('seo_faq4_q', 'Do you guarantee #1 rankings on Google?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq4_a"><?php echo wp_kses_post(cr8v_mod('seo_faq4_a', 'No professional agency can guarantee #1 rankings because search algorithms evolve continuously. However, our entity-mapped schema architectures, technical site optimization, and high-intent content clusters consistently drive client domains onto page one for commercial buyer keywords.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq5_q"><?php echo esc_html(cr8v_mod('seo_faq5_q', 'What is Entity SEO and JSON-LD Schema markup?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq5_a"><?php echo wp_kses_post(cr8v_mod('seo_faq5_a', 'Entity SEO structures your site data so search engines understand your brand as a recognised entity in Google\'s Knowledge Graph, rather than just matching keywords. We use structured JSON-LD code to earn rich search snippets.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq6_q"><?php echo esc_html(cr8v_mod('seo_faq6_q', 'Do you write the content or just provide keyword recommendations?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq6_a"><?php echo wp_kses_post(cr8v_mod('seo_faq6_a', 'We engineer the entire content process — from initial semantic keyword mapping and outline briefs to writing, editing, schema markup, and publishing optimised articles directly on your CMS.')); ?></p>
          </div>
        </div>
      </li>

      <li class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q" data-customizer="seo_faq7_q"><?php echo esc_html(cr8v_mod('seo_faq7_q', 'How do you measure SEO success and ranking improvements?')); ?></span>
          <span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner">
            <p class="faq-a" data-customizer="seo_faq7_a"><?php echo wp_kses_post(cr8v_mod('seo_faq7_a', 'We track position rankings for target keyword clusters, organic search traffic growth in Google Analytics 4, indexing health in Google Search Console, and organic lead/revenue conversions.')); ?></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
</div>

<!-- ══════════════════════════════════════════
     SECTION 10: RELATED SERVICES
     ══════════════════════════════════════════ -->
<div class="c8isv-related-outer">
  <div class="c8isv-wrap">
    <div class="c8isv-label c8isv-reveal is-muted" data-customizer="seo_rel_label"><?php echo esc_html(cr8v_mod('seo_rel_label', 'Other Ways We Build')); ?></div>
    <h2 class="c8isv-section-title c8isv-reveal" data-customizer="seo_rel_h2"><?php echo esc_html(cr8v_mod('seo_rel_h2', 'Related Services')); ?></h2>
    <p class="c8isv-lead c8isv-reveal" data-customizer="seo_rel_desc"><?php echo wp_kses_post(cr8v_mod('seo_rel_desc', 'SEO & Content Strategy is one of several services we offer. If an organic search engagement is not what you need, check these out.')); ?></p>
    <div class="c8isv-related-grid">
      <a href="<?php echo esc_url(cr8v_mod('seo_rel1_url', home_url('/web-design/'))); ?>" class="c8isv-related-card c8isv-reveal">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <span class="c8isv-related-card-platform">01 / Web Design</span>
        <h3 class="c8isv-related-card-title" data-customizer="seo_rel1_title"><?php echo esc_html(cr8v_mod('seo_rel1_title', 'Web Design & UX')); ?></h3>
        <p class="c8isv-related-card-desc" data-customizer="seo_rel1_desc"><?php echo wp_kses_post(cr8v_mod('seo_rel1_desc', 'SEO works best when built on clean code, fast loading speeds, and conversion-oriented layouts engineered from day one.')); ?></p>
        <span class="c8isv-related-card-link">Explore Web Design →</span>
      </a>
      <a href="<?php echo esc_url(cr8v_mod('seo_rel2_url', home_url('/digital-marketing/'))); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d1">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        </div>
        <span class="c8isv-related-card-platform">02 / Digital Marketing</span>
        <h3 class="c8isv-related-card-title">Digital Marketing</h3>
        <p class="c8isv-related-card-desc">Combine organic search dominance with targeted paid ads on Google and Meta to capture 100% of SERP real estate.</p>
        <span class="c8isv-related-card-link">Explore Digital Marketing →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/wordpress-development/')); ?>" class="c8isv-related-card c8isv-reveal c8isv-reveal-d2">
        <div class="c8isv-related-card-icon">
          <svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <span class="c8isv-related-card-platform">03 / WordPress Dev</span>
        <h3 class="c8isv-related-card-title">WordPress Development</h3>
        <p class="c8isv-related-card-desc">Clean theme code, schema markup, and speed performance engineered specifically for search engine indexing and CMS flexibility.</p>
        <span class="c8isv-related-card-link">Explore WordPress Dev →</span>
      </a>
    </div>
  </div>
</div>

</div><!-- /.c8isv-root -->

<script>
<?php
$assets_b64_path = get_template_directory() . '/assets/js/seo-content-assets_b64.js';
if (file_exists($assets_b64_path)) {
  echo file_get_contents($assets_b64_path);
}
?>
</script>
<script>
(function () {
  var root = document.currentScript ? document.currentScript.closest('.c8isv-root') : null; if (!root) root = document.querySelector('.c8isv-root') || document.body;
  if (!root || root.getAttribute('data-c8isv-init') === '1') return;
  root.setAttribute('data-c8isv-init', '1');

  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = window.matchMedia && window.matchMedia('(hover: hover)').matches;

  /* ── Between Breaths Hero Canvas Animation ── */
  (function () {
    if (reduceMotion || window.innerWidth < 1025) return;
    var animWrapper = root.querySelector('#c8isv-anim-wrapper');
    if (!animWrapper) return;
    var IDS = ['c8isv-canvas-bg', 'c8isv-canvas-main', 'c8isv-canvas-noise'];
    var CV = {}, CX = {};
    IDS.forEach(function (id) { CV[id] = root.querySelector('#' + id); if (CV[id]) CX[id] = CV[id].getContext('2d'); });
    if (!CV['c8isv-canvas-bg'] || !CX['c8isv-canvas-bg']) return;
    var W, H, dpr; var grainDirty = true;
    function resize() { dpr = Math.min(window.devicePixelRatio || 1, 3); W = animWrapper.clientWidth; H = animWrapper.clientHeight; IDS.forEach(function (id) { if (!CV[id]) return; CV[id].width = W * dpr; CV[id].height = H * dpr; CV[id].style.width = W + 'px'; CV[id].style.height = H + 'px'; CX[id].setTransform(dpr, 0, 0, dpr, 0, 0); }); grainDirty = true; invalidateLogo(); }
    window.addEventListener('resize', resize);
    var mx = 0, my = 0, sx = 0, sy = 0, hovered = false; var lastSx = 0, lastSy = 0, mouseVel = 0;
    animWrapper.addEventListener('mousemove', function (e) { var r = animWrapper.getBoundingClientRect(); mx = e.clientX - r.left; my = e.clientY - r.top; hovered = true; });
    animWrapper.addEventListener('mouseleave', function () { hovered = false; mouseVel = 0; });
    var bgOC = null, bgReady = false; var bgImg = new Image();
    bgImg.onload = function () { bgOC = document.createElement('canvas'); bgOC.width = bgImg.naturalWidth; bgOC.height = bgImg.naturalHeight; bgOC.getContext('2d').drawImage(bgImg, 0, 0); bgReady = true; };
    bgImg.src = typeof BG_DATA_URL !== 'undefined' ? BG_DATA_URL : '<?php echo get_template_directory_uri(); ?>/assets/img/seo-content-background.jpg';
    function drawBg() { var cx = CX['c8isv-canvas-bg']; if (!cx) return; if (W <= 0 || H <= 0) return; cx.clearRect(0, 0, W, H); if (!bgReady) { cx.fillStyle = '#aee4f0'; cx.fillRect(0, 0, W, H); return; } var iW = bgOC.width, iH = bgOC.height; var scale = Math.max(W / iW, H / iH); var sc = 1 / scale; var srcXBase = (iW - W * sc) / 2; var srcYBase = (iH - H * sc) / 2; var nX = hovered ? (sx / W - 0.5) * 2 : 0; var nY = hovered ? (sy / H - 0.5) * 2 : 0; var ampY = H * 0.04, ampX = W * 0.025; var STRIP = 3; for (var row = 0; row < H; row += STRIP) { var depth = Math.pow(row / H, 2.3); var dy = nY * ampY * depth * 2.6; var dx = nX * ampX * (0.4 + depth * 1.1); var srcY = srcYBase + row * sc + dy * sc; srcY = Math.max(0, Math.min(iH - STRIP * sc - 1, srcY)); var srcX = srcXBase + (dx < 0 ? 0 : dx * sc); var srcW = Math.max(1, W * sc - Math.abs(dx) * sc); cx.drawImage(bgOC, srcX, srcY, srcW, STRIP * sc, 0, row, W, STRIP); } }
    function getLayout() { var fs = W * 0.165; var lh = fs * 1.05; var nX = hovered ? (sx / W - 0.5) * 2 : 0; var nY = hovered ? (sy / H - 0.5) * 2 : 0; var tx = W / 2 - nX * 15; var y1 = H * 0.40 - nY * 8; var y2 = y1 + lh; var logoW = W * 0.285; var logoH = logoReady ? (logoImg.naturalHeight / logoImg.naturalWidth) * logoW : logoW * 0.55; var logoCX = W / 2; var logoCY = y1 + lh * 0.45; var logoX = logoCX - logoW / 2; var logoY = logoCY - logoH / 2; return { fs: fs, lh: lh, tx: tx, y1: y1, y2: y2, logoW: logoW, logoH: logoH, logoCX: logoCX, logoCY: logoCY, logoX: logoX, logoY: logoY }; }
    var logoImg = new Image(); var logoReady = false;
    logoImg.onload = function () { logoReady = true; invalidateLogo(); };
    if (typeof LOGO_DATA_URL !== 'undefined') { logoImg.src = LOGO_DATA_URL; } else { if (window.location.protocol !== 'file:') { logoImg.crossOrigin = 'anonymous'; } logoImg.src = '<?php echo get_template_directory_uri(); ?>/assets/img/logo.png'; }
    var logoPx = null, logoPxW = 0, logoPxH = 0; var logoOutData = null; var logoOutCanvas = null; var smearT = 0; var cellMap = null; var cellDirs = null;
    function invalidateLogo() { logoPx = null; logoOutData = null; logoOutCanvas = null; cellMap = null; cellDirs = null; }
    function ensureLogoPx(sw, sh) { if (logoPx && logoPxW === sw && logoPxH === sh) return true; var sc = document.createElement('canvas'); sc.width = sw; sc.height = sh; var sctx = sc.getContext('2d'); sctx.drawImage(logoImg, 0, 0, sw, sh); try { logoPx = sctx.getImageData(0, 0, sw, sh).data; } catch (e) { console.warn('Logo pixel read blocked:', e.message); return false; } logoPxW = sw; logoPxH = sh; logoOutData = new ImageData(sw, sh); logoOutCanvas = document.createElement('canvas'); logoOutCanvas.width = sw; logoOutCanvas.height = sh; var cols = 12; var rows = 9; var numCells = cols * rows; var centers = []; cellDirs = []; for (var r = 0; r < rows; r++) { for (var c = 0; c < cols; c++) { var cx2 = ((c + 0.5) + (Math.random() - 0.5) * 0.4) * (sw / cols); var cy2 = ((r + 0.5) + (Math.random() - 0.5) * 0.4) * (sh / rows); centers.push({ x: cx2, y: cy2 }); var vx = cx2 - sw / 2; var vy = cy2 - sh / 2; var len = Math.sqrt(vx * vx + vy * vy) || 1; var angle = Math.random() * Math.PI * 2; var dx2 = (vx / len) * 0.70 + Math.cos(angle) * 0.30; var dy2 = (vy / len) * 0.70 + Math.sin(angle) * 0.30; var dlen = Math.sqrt(dx2 * dx2 + dy2 * dy2) || 1; cellDirs.push({ x: dx2 / dlen, y: dy2 / dlen }); } } cellMap = new Int32Array(sw * sh); for (var y = 0; y < sh; y++) { for (var x = 0; x < sw; x++) { var minDist = Infinity; var closestIdx = 0; for (var i = 0; i < numCells; i++) { var dx3 = x - centers[i].x; var dy3 = y - centers[i].y; var dSq = dx3 * dx3 + dy3 * dy3; if (dSq < minDist) { minDist = dSq; closestIdx = i; } } cellMap[y * sw + x] = closestIdx; } } return true; }
    function drawLogo(cx, L) { if (!logoReady) return; var targetSmear = 0; if (hovered) { targetSmear = 0.05; var dx4 = sx - L.logoCX; var dy4 = sy - L.logoCY; var dist = Math.sqrt(dx4 * dx4 + dy4 * dy4); var maxDist = Math.min(W, H) * 0.30; if (dist < maxDist) { var prox = 1 - dist / maxDist; targetSmear = 0.05 + prox * 0.95; if (dist < L.logoW * 0.95) { var pulseFactor = Math.min(1.0, 0.98 + (1.0 - Math.min(mouseVel, 3) / 3) * 0.02); targetSmear *= pulseFactor; } } } smearT += (targetSmear - smearT) * 0.10; var sw = Math.max(1, Math.round(L.logoW)); var sh = Math.max(1, Math.round(L.logoH)); if (!ensureLogoPx(sw, sh)) { cx.drawImage(logoImg, L.logoX, L.logoY, L.logoW, L.logoH); return; } var src = logoPx; var out = logoOutData.data; var maxDisp = L.logoW * 0.285; for (var py = 0; py < sh; py++) { for (var px = 0; px < sw; px++) { var idx = cellMap[py * sw + px]; var dir = cellDirs[idx]; var dx5 = dir.x * smearT * maxDisp; var dy5 = dir.y * smearT * maxDisp; var srcPx = px - dx5; var srcPy = py - dy5; var oi = (py * sw + px) * 4; var r2 = 0, g2 = 0, b2 = 0, alpha = 0; if (srcPx >= 0 && srcPx < sw && srcPy >= 0 && srcPy < sh) { var sxi = Math.floor(srcPx); var syi = Math.floor(srcPy); var si = (syi * sw + sxi) * 4; r2 = src[si]; g2 = src[si + 1]; b2 = src[si + 2]; alpha = src[si + 3]; } out[oi] = r2; out[oi + 1] = g2; out[oi + 2] = b2; out[oi + 3] = alpha; if (smearT > 0.08 && alpha > 0) { out[oi] = Math.min(255, out[oi] + Math.floor(14 * smearT)); out[oi + 1] = Math.min(255, out[oi + 1] + Math.floor(14 * smearT)); out[oi + 2] = Math.min(255, out[oi + 2] + Math.floor(18 * smearT)); } } } logoOutCanvas.getContext('2d').putImageData(logoOutData, 0, 0); cx.drawImage(logoOutCanvas, L.logoX, L.logoY, L.logoW, L.logoH); }
    function drawMain(t) { var cx = CX['c8isv-canvas-main']; if (!cx) return; if (W <= 0 || H <= 0) return; cx.clearRect(0, 0, W, H); var L = getLayout(); var font = '400 ' + L.fs + 'px Michroma, sans-serif'; cx.save(); cx.font = font; cx.textAlign = 'center'; cx.textBaseline = 'middle'; cx.fillStyle = 'rgba(255,255,255,0.42)'; cx.fillText('Cr8v', L.tx, L.y1); cx.fillText('Stacks', L.tx, L.y2); cx.restore(); { var rh = L.lh + L.fs; var rtmp = document.createElement('canvas'); rtmp.width = W; rtmp.height = Math.ceil(rh); var rx = rtmp.getContext('2d'); rx.font = font; rx.textAlign = 'center'; rx.textBaseline = 'middle'; rx.fillStyle = 'rgba(255,255,255,0.06)'; rx.fillText('Cr8v', L.tx, L.fs * 0.5); rx.fillText('Stacks', L.tx, L.fs * 0.5 + L.lh); var rfade = rx.createLinearGradient(0, 0, 0, rh); rfade.addColorStop(0, 'rgba(0,0,0,0.35)'); rfade.addColorStop(1, 'rgba(0,0,0,0)'); rx.globalCompositeOperation = 'destination-in'; rx.fillStyle = rfade; rx.fillRect(0, 0, W, rh); cx.save(); cx.filter = 'blur(2px)'; cx.transform(1, 0, 0, -1, 0, L.y2 + rh + L.fs * 0.05); cx.drawImage(rtmp, 0, 0, W, rh); cx.restore(); } drawLogo(cx, L); if (bgReady) { var iW = bgOC.width, iH = bgOC.height; var scale = Math.max(W / iW, H / iH); var sc = 1 / scale; var srcXBase = (iW - W * sc) / 2; var srcYBase = (iH - H * sc) / 2; var nX = hovered ? (sx / W - 0.5) * 2 : 0; var nY = hovered ? (sy / H - 0.5) * 2 : 0; var ampY = H * 0.04, ampX = W * 0.025; var STRIP = 3; var startRow = Math.floor(H * 0.58); for (var row = startRow; row < H; row += STRIP) { var depth = Math.pow(row / H, 2.3); var dy6 = nY * ampY * depth * 2.6; var dx6 = nX * ampX * (0.4 + depth * 1.1); var srcY = srcYBase + row * sc + dy6 * sc; srcY = Math.max(0, Math.min(iH - STRIP * sc - 1, srcY)); var srcX = srcXBase + (dx6 < 0 ? 0 : dx6 * sc); var srcW = Math.max(1, W * sc - Math.abs(dx6) * sc); cx.drawImage(bgOC, srcX, srcY, srcW, STRIP * sc, 0, row, W, STRIP); } } if (hovered) { var sr = Math.min(W, H) * 0.095; var ftmp = document.createElement('canvas'); ftmp.width = W; ftmp.height = H; var ft = ftmp.getContext('2d'); ft.font = font; ft.textAlign = 'center'; ft.textBaseline = 'middle'; ft.fillStyle = '#ffffff'; ft.fillText('Cr8v', L.tx, L.y1); ft.fillText('Stacks', L.tx, L.y2); var sg = ft.createRadialGradient(sx, sy, sr * 0.0, sx, sy, sr); sg.addColorStop(0, 'rgba(0,0,0,1)'); sg.addColorStop(0.76, 'rgba(0,0,0,1)'); sg.addColorStop(1, 'rgba(0,0,0,0)'); ft.globalCompositeOperation = 'destination-in'; ft.fillStyle = sg; ft.fillRect(0, 0, W, H); cx.save(); cx.globalCompositeOperation = 'lighter'; cx.globalAlpha = 0.95; cx.drawImage(ftmp, 0, 0); cx.restore(); } }
    var GRAIN_SIZE = 256; var grainCanvas = null, grainCtx = null, grainFrame = 0;
    function initGrain() { grainCanvas = document.createElement('canvas'); grainCanvas.width = grainCanvas.height = GRAIN_SIZE; grainCtx = grainCanvas.getContext('2d'); }
    function rebakeGrain(seed) { var idata = grainCtx.createImageData(GRAIN_SIZE, GRAIN_SIZE); var buf = idata.data; for (var i = 0; i < buf.length; i += 4) { seed = (seed * 1664525 + 1013904223) & 0xffffffff; var v = (seed >>> 24) / 255; buf[i] = buf[i + 1] = buf[i + 2] = 255; buf[i + 3] = v < 0.60 ? 0 : Math.floor((v - 0.60) / 0.40 * 10); } grainCtx.putImageData(idata, 0, 0); }
    function drawNoise(t) { var cx = CX['c8isv-canvas-noise']; if (!cx) return; if (W <= 0 || H <= 0) return; cx.clearRect(0, 0, W, H); grainFrame++; if (grainFrame % 2 === 0) rebakeGrain(Math.floor(t * 60) * 997 | 0); var cols = Math.ceil(W / GRAIN_SIZE), rows = Math.ceil(H / GRAIN_SIZE); for (var c = 0; c < cols; c++) { for (var r = 0; r < rows; r++) { cx.drawImage(grainCanvas, c * GRAIN_SIZE, r * GRAIN_SIZE); } } }
    function tick(ts) { var t = ts / 1000; var lastX = sx, lastY = sy; sx += (mx - sx) * 0.09; sy += (my - sy) * 0.09; var dx7 = sx - lastX; var dy7 = sy - lastY; var currentVel = Math.sqrt(dx7 * dx7 + dy7 * dy7); mouseVel += (currentVel - mouseVel) * 0.15; drawBg(); drawMain(t); drawNoise(t); requestAnimationFrame(tick); }
    initGrain(); resize(); sx = mx = W / 2; sy = my = H / 2; requestAnimationFrame(tick);
  })();

  /* ── Hero cursor glow ── */
  var heroWrap = root.querySelector('[data-c8isv-hero]'); var glow = root.querySelector('[data-c8isv-glow]');
  if (heroWrap && glow && canHover && !reduceMotion) { heroWrap.addEventListener('mousemove', function (e) { var r = heroWrap.getBoundingClientRect(); glow.style.left = (e.clientX - r.left) + 'px'; glow.style.top = (e.clientY - r.top) + 'px'; }); heroWrap.addEventListener('mouseenter', function () { heroWrap.classList.add('is-active'); }); heroWrap.addEventListener('mouseleave', function () { heroWrap.classList.remove('is-active'); }); }

  /* ── Reveal on scroll ── */
  var revealEls = root.querySelectorAll('.c8isv-reveal, .c8srv-reveal');
  if ('IntersectionObserver' in window && !reduceMotion) { var io = new IntersectionObserver(function (entries) { entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); } }); }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' }); revealEls.forEach(function (el) { io.observe(el); el.classList.add('is-visible'); }); } else { revealEls.forEach(function (el) { el.classList.add('is-visible'); }); }

  /* ── FAQ Accordion ── */
  var faqTriggers = root.querySelectorAll('.faq-trigger');
  faqTriggers.forEach(function (trigger) { trigger.addEventListener('click', function () { var item = trigger.closest('.faq-item'); if (!item) return; var isOpen = item.classList.contains('is-open'); var list = trigger.closest('.faq-list'); if (list) { list.querySelectorAll('.faq-item').forEach(function (other) { other.classList.remove('is-open'); var btn = other.querySelector('.faq-trigger'); if (btn) btn.setAttribute('aria-expanded', 'false'); }); } if (!isOpen) { item.classList.add('is-open'); trigger.setAttribute('aria-expanded', 'true'); } }); });

  function getElementProgress(el, startOffsetRatio, endOffsetRatio) { if (!el) return 0; var rect = el.getBoundingClientRect(); var viewportH = window.innerHeight; var start = viewportH * (startOffsetRatio || 0.95); var end = viewportH * (endOffsetRatio || 0.2); if (rect.top >= start) return 0; if (rect.top <= end) return 1; return (start - rect.top) / (start - end); }
  function getCardProgress(card, startOffsetRatio, endOffsetRatio) { if (!card) return 0; var rect = card.getBoundingClientRect(); var viewportH = window.innerHeight; var start = viewportH * (startOffsetRatio || 0.95); var end = viewportH * (endOffsetRatio || 0.45); if (rect.top >= start) return 0; if (rect.top <= end) return 1; return (start - rect.top) / (start - end); }

  function handleScrollAnimations() {
    if (reduceMotion) return;
    var flankContainer = root.querySelector('[data-c8isv-flank-trigger]'); var flankCards = root.querySelectorAll('[data-c8isv-flank-card]');
    var portfolioCard = root.querySelector('[data-c8isv-portfolio-card]');
    var approachCards = root.querySelectorAll('[data-c8isv-approach-card]');
    var testiGrid = root.querySelector('[data-c8isv-testi-trigger]'); var testiLeft = root.querySelector('[data-c8isv-testi-left]'); var testiRight = root.querySelector('[data-c8isv-testi-right]');
    if (flankContainer && flankCards.length) { var rect = flankContainer.getBoundingClientRect(); var viewportH = window.innerHeight; var start = viewportH; var end = viewportH * 0.15; var p = 0; if (rect.top < start) { p = (start - rect.top) / (start - end); if (p > 1) p = 1; if (p < 0) p = 0; } flankCards.forEach(function (card, i) { var localT = Math.min(1, Math.max(0, p * 1.5 - i * 0.16)); var isMobile = window.innerWidth < 901; if (isMobile) { var ty = 55 * (1 - localT); var spread = (i === 0 ? -35 : i === 1 ? 0 : 35) * (1 - localT); var rotM = (i === 0 ? -4 : i === 2 ? 4 : 0) * (1 - localT); var scale = 0.94 + 0.06 * localT; card.style.transform = 'translate3d(' + spread + 'px, ' + ty + 'px, 0) scale(' + scale + ') rotate(' + rotM + 'deg)'; } else { var startX = -100 * i; var startRotate = i === 0 ? 0 : (i % 2 === 0 ? -7 : 7); var x = startX * (1 - localT); var rot = startRotate * (1 - localT); var scale = 0.92 + 0.08 * localT; card.style.transform = 'translateX(' + x + '%) rotate(' + rot + 'deg) scale(' + scale + ')'; } card.style.opacity = String(0.35 + 0.65 * localT); }); }
    if (portfolioCard) { var p2 = getElementProgress(portfolioCard, 0.95, 0.3); portfolioCard.style.transform = 'scale(' + (0.75 + 0.25 * p2) + ')'; portfolioCard.style.opacity = 0.5 + 0.5 * p2; }
    if (approachCards.length) { approachCards.forEach(function (card, i) { if (i === 0) { card.style.transform = 'none'; card.style.boxShadow = '0 5px 15px rgba(8,8,8,0.02)'; return; } var p3 = getCardProgress(card.parentElement, 0.95, 0.5); var isMobile = window.innerWidth < 901; var maxSlant = (6 + (i - 1) * 3) * (isMobile ? 0.65 : 1.0); var rot = maxSlant * (1 - p3); var ty = (isMobile ? -55 : -80) * (1 - p3); card.style.transform = 'translate3d(0, ' + ty + 'px, 0) rotate(' + rot + 'deg)'; card.style.opacity = '1'; var shadowY = 15 - 10 * p3; var shadowBlur = 30 - 15 * p3; var shadowAlpha = 0.08 - 0.06 * p3; card.style.boxShadow = '0 ' + shadowY + 'px ' + shadowBlur + 'px rgba(8,8,8,' + shadowAlpha + ')'; }); }
    if (testiGrid && testiLeft && testiRight) { var isMobile = window.innerWidth < 901; if (isMobile) { var pL = getElementProgress(testiLeft, 0.95, 0.3); var pR = getElementProgress(testiRight, 0.95, 0.3); testiLeft.style.transform = 'translate3d(' + (-90 * (1 - pL)) + 'px, ' + (20 * (1 - pL)) + 'px, 0) rotate(' + (-6 * (1 - pL)) + 'deg)'; testiLeft.style.opacity = pL; testiLeft.style.pointerEvents = pL > 0.1 ? 'auto' : 'none'; testiRight.style.transform = 'translate3d(' + (90 * (1 - pR)) + 'px, ' + (20 * (1 - pR)) + 'px, 0) rotate(' + (6 * (1 - pR)) + 'deg)'; testiRight.style.opacity = pR; testiRight.style.pointerEvents = pR > 0.1 ? 'auto' : 'none'; } else { var p4 = getElementProgress(testiGrid, 0.85, 0.3); var tx = p4 * 340; var ty2 = 15 * (1 - p4); var rot2 = p4 * 8; testiLeft.style.transform = 'translate3d(' + (-tx) + 'px, ' + ty2 + 'px, 0) scale(' + (0.9 + 0.1 * p4) + ') rotate(' + (-rot2) + 'deg)'; testiLeft.style.opacity = p4; testiLeft.style.pointerEvents = p4 > 0.1 ? 'auto' : 'none'; testiRight.style.transform = 'translate3d(' + tx + 'px, ' + ty2 + 'px, 0) scale(' + (0.9 + 0.1 * p4) + ') rotate(' + rot2 + 'deg)'; testiRight.style.opacity = p4; testiRight.style.pointerEvents = p4 > 0.1 ? 'auto' : 'none'; } }
  }
  window.addEventListener('scroll', handleScrollAnimations); window.addEventListener('resize', handleScrollAnimations); handleScrollAnimations();

  /* ── Hoverlist fan preview ── */
  var hoverlist = root.querySelector('[data-c8isv-hoverlist]'); var preview = root.querySelector('[data-c8isv-preview]');
  if (hoverlist && preview && canHover && !reduceMotion) { var hoverItems = hoverlist.querySelectorAll('.c8isv-hoverlist-item'); hoverlist.addEventListener('mousemove', function (e) { var rect = hoverlist.getBoundingClientRect(); preview.style.left = (e.clientX - rect.left) + 'px'; preview.style.top = (e.clientY - rect.top) + 'px'; }); hoverlist.addEventListener('mouseenter', function () { preview.classList.add('is-active'); }); hoverlist.addEventListener('mouseleave', function () { preview.classList.remove('is-active'); }); hoverItems.forEach(function (item) { item.addEventListener('mouseenter', function () { var imgL = preview.querySelector('[data-c8isv-fan-logo="left"]'); var imgR = preview.querySelector('[data-c8isv-fan-logo="right"]'); var l1 = item.getAttribute('data-logo-1'); var l2 = item.getAttribute('data-logo-2'); if (imgL && l1) imgL.src = l1; if (imgR && l2) imgR.src = l2; }); }); }

  /* ── Accordion ── */
  root.querySelectorAll('[data-c8isv-accordion-head]').forEach(function (head) { head.addEventListener('click', function () { var item = head.closest('.c8isv-accordion-item'); var wasOpen = item.classList.contains('is-open'); item.parentElement.querySelectorAll('.c8isv-accordion-item').forEach(function (i) { i.classList.remove('is-open'); }); if (!wasOpen) item.classList.add('is-open'); }); });
})();
</script>

<script>
(function () {
  function initEstimator() {
    var root = document.querySelector('.c8isv-root') || document.body;
    var choices = root.querySelectorAll('.c8srv-est-choice');
    var rangeDisplay = root.querySelector('#est-range-display');
    var deliverablesList = root.querySelector('#est-deliverables-list');
    var estCta = root.querySelector('#est-cta-link');
    if (!choices.length || !rangeDisplay) return;

    var platformBases = {
      techclean: { price: 600, name: 'Technical SEO Clean', deliverables: ['Screaming Frog Technical Crawl Audit', 'Entity JSON-LD Structured Data Schema Setup', 'Indexation Optimization & Robots.txt Hardening'] },
      searchengine: { price: 1200, name: 'Organic Search Engine', deliverables: ['Semantic Keyword & Intent Matrix Mapping', 'Topical Cluster Content Architecture Blueprint', 'On-Page Metadata & Header Hierarchy Tuning'] },
      enterpriseseo: { price: 1800, name: 'Enterprise Technical SEO', deliverables: ['Multi-Regional Technical Crawl & Indexation Clean', 'Competitor Keyword Moat & Authority Analysis', 'Continuous Search Visibility & Rank Tracking'] }
    };
    var estimatorAddons = {
      none: { price: 0, deliverables: [] },
      clusters: { price: 500, deliverables: ['High-Intent Keyword Cluster Package & Content Briefs'] },
      vitals: { price: 400, deliverables: ['Core Web Vitals Speed Tuning & Asset Optimization'] }
    };
    var scaleDescriptions = { single: 'Single geographic market search coverage', multi: 'Multi-regional & international multi-language search setup' };

    function updateEstimate() {
      var activePlatformBtn = root.querySelector('[data-est-group="platform"] .c8srv-est-choice.is-active') || choices[0];
      var activeScaleBtn = root.querySelector('[data-est-group="scale"] .c8srv-est-choice.is-active');
      var activeGrowthBtn = root.querySelector('[data-est-group="growth"] .c8srv-est-choice.is-active');
      var platformVal = activePlatformBtn ? activePlatformBtn.getAttribute('data-est-val') : 'techclean';
      var basePrice = platformBases[platformVal] ? platformBases[platformVal].price : 600;
      var scaleMult = activeScaleBtn ? parseFloat(activeScaleBtn.getAttribute('data-est-multiplier')) || 1.0 : 1.0;
      var scaleVal = activeScaleBtn ? activeScaleBtn.getAttribute('data-est-val') || 'single' : 'single';
      var growthVal = activeGrowthBtn ? activeGrowthBtn.getAttribute('data-est-val') || 'none' : 'none';
      var growthPrice = estimatorAddons[growthVal] ? estimatorAddons[growthVal].price : 0;
      var startPrice = Math.round(basePrice * scaleMult + growthPrice);
      var endPrice = Math.round(startPrice * 1.25);
      rangeDisplay.textContent = '$' + startPrice.toLocaleString() + ' - $' + endPrice.toLocaleString();
      if (deliverablesList) {
        deliverablesList.innerHTML = '';
        if (platformBases[platformVal] && platformBases[platformVal].deliverables) { platformBases[platformVal].deliverables.forEach(function (d) { var item = document.createElement('div'); item.textContent = '• ' + d; deliverablesList.appendChild(item); }); }
        if (scaleDescriptions[scaleVal]) { var scaleItem = document.createElement('div'); scaleItem.style.color = '#0047E1'; scaleItem.style.fontWeight = '600'; scaleItem.textContent = '• Scope Tier: ' + scaleDescriptions[scaleVal]; deliverablesList.appendChild(scaleItem); }
        if (estimatorAddons[growthVal] && estimatorAddons[growthVal].deliverables) { estimatorAddons[growthVal].deliverables.forEach(function (d) { var item = document.createElement('div'); item.textContent = '• ' + d; deliverablesList.appendChild(item); }); }
      }
      if (estCta) { estCta.href = '<?php echo home_url('/contact/'); ?>?platform=' + platformVal + '&est=' + startPrice + '-' + endPrice; }
    }

    choices.forEach(function (btn) { btn.addEventListener('click', function (e) { e.preventDefault(); var group = btn.closest('[data-est-group]'); if (group) { group.querySelectorAll('.c8srv-est-choice').forEach(function (b) { b.classList.remove('is-active'); }); btn.classList.add('is-active'); } updateEstimate(); }); });
    updateEstimate();
  }

  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', initEstimator); } else { initEstimator(); }

  /* Matrix Text Scramble */
  var docRoot = document.querySelector('.c8isv-root, .c8srv-root') || document.body;
  var srvMatrixButtons = docRoot.querySelectorAll('.c8-btn-primary, .c8isv-btn-primary, .c8srv-btn-primary, .c8srv-price-btn, .c8isv-price-btn, .c8srv-explore, .c8isv-explore, .c8isv-btn-ghost, .c8srv-btn-ghost, .faq-cta-link, .c8isv-related-card-link, .c8srv-related-card-link');
  var srvMatrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  srvMatrixButtons.forEach(function (btn) { var textNode = Array.from(btn.childNodes).find(function (n) { return n.nodeType === 3 && n.textContent.trim().length > 0; }); var targetObj = textNode ? textNode : btn; var originalText = targetObj.textContent.trim(); var scrambleInterval = null; btn.addEventListener('mouseenter', function () { var iteration = 0; clearInterval(scrambleInterval); scrambleInterval = setInterval(function () { targetObj.textContent = originalText.split('').map(function (char, index) { if (char === ' ' || index < iteration) return originalText[index]; return srvMatrixChars[Math.floor(Math.random() * srvMatrixChars.length)]; }).join(''); if (iteration >= originalText.length) { clearInterval(scrambleInterval); } iteration += 1 / 2; }, 25); }); btn.addEventListener('mouseleave', function () { clearInterval(scrambleInterval); targetObj.textContent = originalText; }); });
})();
</script>

<?php get_footer(); ?>
