<?php
/**
 * CR8V Stacks — page-about.php
 * Template Name: About Us
 * Tropos Theme About Page (100% full design fidelity & Customizer selective refresh enabled)
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="cr8v-main" class="fylla-outer-frame">
    
    <!-- ── 1. FYLLA STUDIO HERO SECTION ── -->
    <header class="fylla-hero-section">
      <span class="fylla-meta-tag" data-customizer="abt_hero_tag"><?php echo esc_html(cr8v_mod('abt_hero_tag', 'AGENCY PROFILE')); ?></span>
      <h1 class="fylla-hero-h1" data-customizer="abt_hero_headline">
        <?php echo wp_kses_post(cr8v_mod('abt_hero_headline', 'WE DEFY <span class="c8abt-serif-italic">templates.</span><br>WE CODE <span class="c8abt-highlight-text">CONVERSIONS.</span>')); ?>
      </h1>
      
      <p class="fylla-hero-p" data-customizer="abt_hero_p">
        <?php echo esc_html(cr8v_mod('abt_hero_p', 'We are an engineering-first digital agency built for ambitious brands. We don\'t just assemble websites; we architect custom digital environments, brand systems, and organic search acquisition models designed to turn attention into measurable revenue.')); ?>
      </p>

      <div class="fylla-pill-row">
        <span class="fylla-pill">Custom PHP</span>
        <span class="fylla-pill">Elementor-Safe Code</span>
        <span class="fylla-pill">WordPress</span>
        <span class="fylla-pill">Shopify</span>
        <span class="fylla-pill">Conversion UX</span>
        <span class="fylla-pill">Organic SEO</span>
      </div>

      <div class="fylla-hero-img-box">
        <img src="<?php echo esc_url(cr8v_mod('abt_hero_img', get_template_directory_uri() . '/assets/img/wwa_studio_visual.jpg')); ?>" alt="Cr8v Stacks Studio Workspace" class="fylla-hero-img" data-customizer="abt_hero_img">
        <div class="fylla-hud-tag" data-customizer="abt_hero_hud"><?php echo esc_html(cr8v_mod('abt_hero_hud', '// SYSTEM_ACTIVE')); ?></div>
      </div>
    </header>

    <!-- ── 2. FYLLA STUDIO VALUES SECTION (OUR PHILOSOPHY & LARGE ICONS) ── -->
    <section class="fylla-values-section">
      <div class="fylla-values-left">
        <div>
          <span class="fylla-meta-tag" data-customizer="abt_val_eyebrow"><?php echo esc_html(cr8v_mod('abt_val_eyebrow', 'WHAT YOU SHOULD KNOW')); ?></span>
          <h2 class="fylla-values-h2" data-customizer="abt_val_heading"><?php echo esc_html(cr8v_mod('abt_val_heading', 'OUR PHILOSOPHY')); ?></h2>
          
          <p class="fylla-values-p" data-customizer="abt_val_p1"><?php echo esc_html(cr8v_mod('abt_val_p1', 'We bridge the gap between creative visual branding and lightweight, custom-coded web architectures.')); ?></p>
          <p class="fylla-values-p" data-customizer="abt_val_p2"><?php echo wp_kses_post(cr8v_mod('abt_val_p2', 'At <strong>CR8V Stacks</strong>, founded by <strong>Mallami Adekunle</strong>, we approach web development and branding from a performance-first perspective. We don\'t believe in generic page builders and bloated themes that drag down loading speed and make businesses look identical.')); ?></p>
          <p class="fylla-values-p" data-customizer="abt_val_p3"><?php echo esc_html(cr8v_mod('abt_val_p3', 'By keeping our technology stack lightweight and prioritizing custom layouts, we eliminate design bloat and give our clients the technical edge in speed, search ranking, and user experience.')); ?></p>
        </div>

        <a href="<?php echo esc_url(home_url(cr8v_mod('abt_val_cta_url', '/case-studies/'))); ?>" class="c8-btn-primary" data-customizer="abt_val_cta_text"><?php echo esc_html(cr8v_mod('abt_val_cta_text', 'Inspect Case Studies')); ?></a>
      </div>

      <div class="fylla-values-right">
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3" data-customizer="abt_val_v1_title"><?php echo esc_html(cr8v_mod('abt_val_v1_title', 'CODE ARCHITECTURE — ZERO BLOAT')); ?></h3>
            <p class="fylla-value-desc" data-customizer="abt_val_v1_desc"><?php echo esc_html(cr8v_mod('abt_val_v1_desc', 'Bespoke custom themes built from scratch with semantic HTML, CSS, and vanilla JS. No page builders, no unneeded plugins.')); ?></p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3" data-customizer="abt_val_v2_title"><?php echo esc_html(cr8v_mod('abt_val_v2_title', 'LIQUID ENGINEERING — SUB-1.2S SPEED')); ?></h3>
            <p class="fylla-value-desc" data-customizer="abt_val_v2_desc"><?php echo esc_html(cr8v_mod('abt_val_v2_desc', 'Tuned for instant page loads and green Core Web Vitals across every single device, browser, and network condition.')); ?></p>
          </div>
        </div>

        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <div>
            <h3 class="fylla-value-h3" data-customizer="abt_val_v3_title"><?php echo esc_html(cr8v_mod('abt_val_v3_title', 'ENTITY SEO — ORGANIC DOMINANCE')); ?></h3>
            <p class="fylla-value-desc" data-customizer="abt_val_v3_desc"><?php echo esc_html(cr8v_mod('abt_val_v3_desc', 'Structured Schema JSON-LD markup and semantic HTML hierarchy ensuring total search engine clarity and ranking authority.')); ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 3. PERFORMANCE TECH STACK SECTION ── -->
    <section class="tmn-section" id="performance-tech-stack">
      <div class="tmn-header">
        <span class="fylla-meta-tag" data-customizer="abt_ts_eyebrow"><?php echo esc_html(cr8v_mod('abt_ts_eyebrow', 'BUILT FOR SPEED. ENGINEERED TO DOMINATE.')); ?></span>
        <h2 class="tmn-h2">Our Core Technical Stack</h2>
      </div>

      <div class="tmn-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2.5rem;">
        <div class="tmn-card" style="background:#0D0D0D; padding:2.5rem; border:1px solid rgba(255,255,255,0.08); border-radius:4px;">
          <h3 style="font-family:'Michroma',sans-serif; font-size:1.1rem; color:#FFFFFF; margin-bottom:1rem;" data-customizer="abt_ts_c1_title"><?php echo esc_html(cr8v_mod('abt_ts_c1_title', 'WORDPRESS CUSTOM ENGINE')); ?></h3>
          <p style="color:#A0A0A0; font-size:0.95rem; line-height:1.6;" data-customizer="abt_ts_c1_desc"><?php echo esc_html(cr8v_mod('abt_ts_c1_desc', 'Custom WordPress theme builds with zero heavy plugin overhead. Designed for clean client handovers and effortless content publishing.')); ?></p>
        </div>

        <div class="tmn-card" style="background:#0D0D0D; padding:2.5rem; border:1px solid rgba(255,255,255,0.08); border-radius:4px;">
          <h3 style="font-family:'Michroma',sans-serif; font-size:1.1rem; color:#FFFFFF; margin-bottom:1rem;" data-customizer="abt_ts_c2_title"><?php echo esc_html(cr8v_mod('abt_ts_c2_title', 'SHOPIFY LIQUID STOREFRONTS')); ?></h3>
          <p style="color:#A0A0A0; font-size:0.95rem; line-height:1.6;" data-customizer="abt_ts_c2_desc"><?php echo esc_html(cr8v_mod('abt_ts_c2_desc', 'Custom Liquid themes engineered for high-converting e-commerce brands wanting custom design without app bloated slowdowns.')); ?></p>
        </div>

        <div class="tmn-card" style="background:#0D0D0D; padding:2.5rem; border:1px solid rgba(255,255,255,0.08); border-radius:4px;">
          <h3 style="font-family:'Michroma',sans-serif; font-size:1.1rem; color:#FFFFFF; margin-bottom:1rem;" data-customizer="abt_ts_c3_title"><?php echo esc_html(cr8v_mod('abt_ts_c3_title', 'BESPOKE SOFTWARE & WEB APPLICATIONS')); ?></h3>
          <p style="color:#A0A0A0; font-size:0.95rem; line-height:1.6;" data-customizer="abt_ts_c3_desc"><?php echo esc_html(cr8v_mod('abt_ts_c3_desc', 'Custom web applications built with modern frontend frameworks and clean API backends for tools, calculators, and SaaS MVPs.')); ?></p>
        </div>
      </div>
    </section>

    <!-- ── 4. RIGHT FIT / WRONG FIT MATRIX ── -->
    <section class="fylla-fit-section" id="who-we-build-for">
      <div style="text-align:center; margin-bottom:3rem;">
        <span class="fylla-meta-tag" data-customizer="abt_fit_eyebrow"><?php echo esc_html(cr8v_mod('abt_fit_eyebrow', 'RIGHT FIT / WRONG FIT')); ?></span>
        <h2 class="fylla-values-h2" style="margin-top:0.5rem;">Alignment & Mutual Expectation</h2>
      </div>

      <div class="fylla-fit-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div class="fylla-fit-card is-right-fit" style="background:#080808; border:1px solid rgba(0,71,225,0.4); padding:3rem; border-radius:4px;">
          <span style="font-family:'Space Mono',monospace; font-size:0.8rem; color:#0047E1; letter-spacing:0.1em; display:block; margin-bottom:1rem;">// MATCH</span>
          <h3 style="font-family:'Michroma',sans-serif; font-size:1.3rem; color:#FFFFFF; margin-bottom:1.25rem;" data-customizer="abt_fit_c1_title"><?php echo esc_html(cr8v_mod('abt_fit_c1_title', 'WHO WE BUILD FOR')); ?></h3>
          <p style="color:#A0A0A0; font-size:1rem; line-height:1.6;" data-customizer="abt_fit_c1_desc"><?php echo esc_html(cr8v_mod('abt_fit_c1_desc', 'Ambitious founders, growing e-commerce brands, and scaling teams who need custom web architecture, speed authority, and organic acquisition.')); ?></p>
        </div>

        <div class="fylla-fit-card is-wrong-fit" style="background:#080808; border:1px solid rgba(255,60,60,0.3); padding:3rem; border-radius:4px;">
          <span style="font-family:'Space Mono',monospace; font-size:0.8rem; color:#FF4D4D; letter-spacing:0.1em; display:block; margin-bottom:1rem;">// MISMATCH</span>
          <h3 style="font-family:'Michroma',sans-serif; font-size:1.3rem; color:#FFFFFF; margin-bottom:1.25rem;" data-customizer="abt_fit_c2_title"><?php echo esc_html(cr8v_mod('abt_fit_c2_title', 'WHO WE ARE NOT FOR')); ?></h3>
          <p style="color:#A0A0A0; font-size:1rem; line-height:1.6;" data-customizer="abt_fit_c2_desc"><?php echo esc_html(cr8v_mod('abt_fit_c2_desc', 'Projects looking for cheap $200 template setups, un-curated page builder clutter, or teams wanting quick hacks over engineered long-term digital foundations.')); ?></p>
        </div>
      </div>
    </section>

    <!-- ── 5. FOUNDER & LEADERSHIP BIO SECTION ── -->
    <section class="fylla-leadership-section" style="padding: 5rem 0; border-top: 1px solid rgba(255,255,255,0.08);">
      <div class="fylla-leadership-grid" style="display:grid; grid-template-columns: 340px 1fr; gap: 4rem; align-items: start;">
        
        <!-- Left: Founder Image & Contact Links -->
        <div class="fylla-founder-sidebar">
          <div style="position:relative; width:100%; border-radius:4px; overflow:hidden; border:1px solid rgba(0,71,225,0.3);">
            <img src="<?php echo esc_url(cr8v_mod('abt_fnd_avatar', get_template_directory_uri() . '/assets/img/dev_mascot.jpg')); ?>" alt="Mallami Adekunle Founder Avatar" style="width:100%; height:auto; display:block; object-fit:cover;" data-customizer="abt_fnd_avatar">
            <div style="position:absolute; bottom:12px; left:12px; background:rgba(0,71,225,0.9); color:#FFF; font-family:'Space Mono',monospace; font-size:0.75rem; padding:4px 10px; border-radius:2px;" data-customizer="abt_fnd_tag">
              <?php echo esc_html(cr8v_mod('abt_fnd_tag', 'FOUNDER & ARCHITECT')); ?>
            </div>
          </div>

          <div style="margin-top:1.5rem; display:flex; flex-direction:column; gap:0.5rem; font-family:'Space Mono',monospace; font-size:0.85rem;">
            <a href="<?php echo esc_url(cr8v_mod('abt_fnd_linkedin', 'https://linkedin.com/in/mallami-adekunle')); ?>" target="_blank" rel="noopener" style="color:#0047E1; text-decoration:none;">LinkedIn &rarr;</a>
            <a href="<?php echo esc_url(cr8v_mod('abt_fnd_twitter', 'https://twitter.com/mallamiadekunle')); ?>" target="_blank" rel="noopener" style="color:#0047E1; text-decoration:none;">X / Twitter &rarr;</a>
            <a href="<?php echo esc_url(cr8v_mod('abt_fnd_github', 'https://github.com/mallamiadekunle')); ?>" target="_blank" rel="noopener" style="color:#0047E1; text-decoration:none;">GitHub &rarr;</a>
            <a href="mailto:<?php echo esc_attr(cr8v_mod('abt_fnd_email', 'hello@cr8vstacks.com')); ?>" style="color:#A0A0A0; text-decoration:none;" data-customizer="abt_fnd_email"><?php echo esc_html(cr8v_mod('abt_fnd_email', 'hello@cr8vstacks.com')); ?></a>
          </div>
        </div>

        <!-- Right: Bio Content & Founder Quote -->
        <div class="fylla-founder-bio">
          <span class="fylla-meta-tag">LEADERSHIP PROFILE</span>
          <h2 style="font-family:'Michroma',sans-serif; font-size:2.2rem; color:#FFFFFF; margin:0.5rem 0 0.25rem 0;" data-customizer="abt_fnd_name">
            <?php echo esc_html(cr8v_mod('abt_fnd_name', 'Mallami Adekunle')); ?>
          </h2>
          <div style="font-family:'Space Mono',monospace; font-size:1rem; color:#0047E1; margin-bottom:2rem;" data-customizer="abt_fnd_role">
            <?php echo esc_html(cr8v_mod('abt_fnd_role', 'Lead Engineer & Brand Strategist')); ?>
          </div>

          <blockquote style="border-left:3px solid #0047E1; padding-left:1.5rem; margin:0 0 2rem 0; font-family:'Georgia',serif; font-style:italic; font-size:1.25rem; color:#E0E0E0; line-height:1.5;" data-customizer="abt_fnd_quote">
            "<?php echo esc_html(cr8v_mod('abt_fnd_quote', 'We don\'t sell websites. We build custom business infrastructure that compounds in value year after year.')); ?>"
          </blockquote>

          <div style="color:#B0B0B0; font-size:1.05rem; line-height:1.7; display:flex; flex-direction:column; gap:1.25rem;">
            <p data-customizer="abt_fnd_bio1"><?php echo esc_html(cr8v_mod('abt_fnd_bio1', 'Mallami Adekunle is the founder and lead architect behind Cr8v Stacks. With deep technical experience across custom WordPress engineering, Liquid storefront architecture, and technical SEO, Mallami leads every engagement with a strict performance-first discipline.')); ?></p>
            <p data-customizer="abt_fnd_bio2"><?php echo esc_html(cr8v_mod('abt_fnd_bio2', 'Having built custom platforms for scaling e-commerce brands and real estate platforms in both Nigeria and the UK, Mallami advocates for clean code, zero SaaS dependency, and client ownership over all digital assets.')); ?></p>
            <p data-customizer="abt_fnd_bio3"><?php echo esc_html(cr8v_mod('abt_fnd_bio3', 'Under his direction, Cr8v Stacks operates as a concentrated engineering studio where strategy, design, and code run together seamlessly without multi-agency handoff friction.')); ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- ── 6. TECHNICAL DISCIPLINE & STANDARDS ── -->
    <section class="fylla-edu-section" style="padding:4rem 0; border-top:1px solid rgba(255,255,255,0.08);">
      <span class="fylla-meta-tag" data-customizer="abt_edu_tag"><?php echo esc_html(cr8v_mod('abt_edu_tag', 'TECHNICAL RIGOR')); ?></span>
      <h2 class="fylla-values-h2" style="margin:0.5rem 0 2.5rem 0;" data-customizer="abt_edu_heading"><?php echo esc_html(cr8v_mod('abt_edu_heading', 'Engineering Discipline & Standards')); ?></h2>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        <div style="background:#0D0D0D; padding:2rem; border-left:3px solid #0047E1; border-radius:2px;">
          <h3 style="font-family:'Space Mono',monospace; font-size:1rem; color:#FFFFFF; margin-bottom:0.75rem;" data-customizer="abt_edu_c1_title"><?php echo esc_html(cr8v_mod('abt_edu_c1_title', 'Full-Stack Web Engineering')); ?></h3>
          <p style="color:#999; font-size:0.9rem; line-height:1.6;" data-customizer="abt_edu_c1_desc"><?php echo esc_html(cr8v_mod('abt_edu_c1_desc', 'Specialized in PHP, MySQL, Vanilla JavaScript ES6+, HTML5 Semantic Architecture, and Custom WordPress Theme API.')); ?></p>
        </div>

        <div style="background:#0D0D0D; padding:2rem; border-left:3px solid #0047E1; border-radius:2px;">
          <h3 style="font-family:'Space Mono',monospace; font-size:1rem; color:#FFFFFF; margin-bottom:0.75rem;" data-customizer="abt_edu_c2_title"><?php echo esc_html(cr8v_mod('abt_edu_c2_title', 'Technical SEO & Schema Entity Mapping')); ?></h3>
          <p style="color:#999; font-size:0.9rem; line-height:1.6;" data-customizer="abt_edu_c2_desc"><?php echo esc_html(cr8v_mod('abt_edu_c2_desc', 'Advanced JSON-LD Schema implementation, Core Web Vitals optimization, and semantic crawl architecture.')); ?></p>
        </div>

        <div style="background:#0D0D0D; padding:2rem; border-left:3px solid #0047E1; border-radius:2px;">
          <h3 style="font-family:'Space Mono',monospace; font-size:1rem; color:#FFFFFF; margin-bottom:0.75rem;" data-customizer="abt_edu_c3_title"><?php echo esc_html(cr8v_mod('abt_edu_c3_title', 'Liquid & E-Commerce Performance Architecture')); ?></h3>
          <p style="color:#999; font-size:0.9rem; line-height:1.6;" data-customizer="abt_edu_c3_desc"><?php echo esc_html(cr8v_mod('abt_edu_c3_desc', 'Bespoke Shopify Liquid storefront customization and WooCommerce database queries optimization.')); ?></p>
        </div>
      </div>
    </section>

    <!-- ── 7. ABOUT FINAL CTA BANNER ── -->
    <section class="fylla-cta-section" style="padding: 5rem 0; text-align:center; background:linear-gradient(180deg, rgba(0,71,225,0.05) 0%, rgba(8,8,8,1) 100%);">
      <h2 style="font-family:'Michroma',sans-serif; font-size:clamp(1.5rem, 3vw, 2.5rem); color:#FFFFFF; max-width:800px; margin:0 auto 1.5rem auto;" data-customizer="abt_cta_heading">
        <?php echo esc_html(cr8v_mod('abt_cta_heading', 'Ready to build digital infrastructure that actually scales?')); ?>
      </h2>
      <p style="color:#A0A0A0; font-size:1.1rem; max-width:600px; margin:0 auto 2.5rem auto; line-height:1.6;" data-customizer="abt_cta_sub">
        <?php echo esc_html(cr8v_mod('abt_cta_sub', 'Let\'s discuss your project, evaluate your technical requirements, and build a custom stack tailored to your revenue goals.')); ?>
      </p>
      <a href="<?php echo esc_url(home_url(cr8v_mod('abt_cta_btn_url', '/discovery-call/'))); ?>" class="c8-btn-primary" style="display:inline-block; padding:1.25rem 2.5rem; font-size:1rem;" data-customizer="abt_cta_btn_text">
        <?php echo esc_html(cr8v_mod('abt_cta_btn_text', 'Start a Conversation')); ?> &rarr;
      </a>
    </section>

</main>

<?php
get_footer();
