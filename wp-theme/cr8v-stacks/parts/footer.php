<?php
/**
 * CR8V Stacks — parts/footer.php
 * Full site footer. Edit via:
 * WP Admin → Appearance → Customize → ⚙️ Global Site Settings → Footer
 */
defined('ABSPATH') || exit;

$tagline   = cr8v_mod('footer_tagline',   'Design, Development & Growth Systems');
$copyright = cr8v_mod('footer_copyright', '© ' . date('Y') . ' CR8V STACKS. All rights reserved.');
$linkedin  = cr8v_mod('footer_linkedin',  'https://www.linkedin.com/company/cr8v-stacks/');
$instagram = cr8v_mod('footer_instagram', 'https://www.instagram.com/cr8v_stacks');
$youtube   = cr8v_mod('footer_youtube',   'https://www.youtube.com/@cr8vstacks');
$facebook  = cr8v_mod('footer_facebook',  'https://www.facebook.com/cr8vstacks');
?>
<!-- ══════════════════════════════════════════════════════════
   CR8V STACKS — FOOTER (Tropos Theme)
   Edit all text: WP Admin → Appearance → Customize → Footer
═══════════════════════════════════════════════════════════ -->
<div class="c8ft-root">
<style>
@import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap');
.c8ft-root{--c8ft-black:#080808;--c8ft-white:#FAFAF7;--c8ft-off:#EFEEE8;--c8ft-blue:#0047E1;--c8ft-blue-mid:#0038C0;--c8ft-blue-hi:#4A9EFF;--c8ft-gray:#8A8A8A;font-family:'DM Sans',sans-serif;background:var(--c8ft-black);overflow:hidden;position:relative;}
.c8ft-root *,.c8ft-root *::before,.c8ft-root *::after{box-sizing:border-box;margin:0;padding:0;}
:where(.c8ft-root) a{text-decoration:none;color:inherit;}
.c8ft-root ul{list-style:none;}

/* Hero CTA Zone */
.c8ft-hero{position:relative;padding:5rem 3.5rem 6rem;overflow:hidden;border-bottom:1px solid rgba(255,255,255,.08);}
.c8ft-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 20% 20%,rgba(0,71,225,.35) 0%,transparent 55%),radial-gradient(circle at 85% 80%,rgba(0,56,192,.25) 0%,transparent 50%);}
.c8ft-hero-ghost{position:absolute;bottom:-2.5rem;left:3rem;font-family:'Michroma',sans-serif;font-size:min(15vw,10rem);line-height:.8;color:rgba(255,255,255,.03);letter-spacing:-.02em;pointer-events:none;z-index:0;white-space:nowrap;}
.c8ft-hero-in{position:relative;z-index:1;max-width:1440px;margin:0 auto;}
.c8ft-hero-tag{font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.3em;text-transform:uppercase;color:var(--c8ft-blue-hi);margin-bottom:1.25rem;display:flex;align-items:center;gap:10px;}
.c8ft-hero-tag::before{content:'';width:20px;height:1px;background:var(--c8ft-blue-hi);}
.c8ft-hero-title{font-family:'Michroma',sans-serif;font-size:clamp(2.5rem,5vw,1.8rem);line-height:1.2;color:var(--c8ft-white);letter-spacing:.01em;max-width:900px;margin-bottom:2.25rem;font-weight:700;}
.c8ft-hero-title span{color:var(--c8ft-blue-hi);}
.c8ft-hero-cta{position:relative;overflow:hidden;display:inline-flex;align-items:center;gap:10px;height:52px;padding:0 2rem;background:var(--c8ft-blue);color:#fff;font-family:'DM Sans',sans-serif;font-size:14px;font-weight:600;border-radius:2px;box-shadow:0 4px 14px rgba(0,71,225,0.3);transition:background .25s ease,transform .2s ease;}
.c8ft-hero-cta::before{content:'';position:absolute;top:0;left:-100%;width:60%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.35),transparent);transform:skewX(-20deg);transition:left 0.65s ease;}
.c8ft-hero-cta:hover{background:var(--c8ft-blue-mid);transform:translateY(-2px);}
.c8ft-hero-cta:hover::before{left:180%;}
.c8ft-hero-cta svg{width:14px;height:14px;stroke:#fff;stroke-width:2;fill:none;}

/* Stack Cards */
.c8ft-stack-zone{max-width:1440px;margin:0 auto;padding:0 3.5rem;position:relative;z-index:1;}
.c8ft-stack{display:grid;grid-template-columns:1.1fr 1.2fr 1fr;gap:2.5rem;margin-top:-3rem;padding-bottom:4rem;align-items:start;}
.c8ft-card{background:var(--c8ft-off);position:relative;padding:2.25rem 2rem;border-radius:4px;}
.c8ft-card-label{font-family:'Space Mono',monospace;font-size:9.5px;letter-spacing:.28em;text-transform:uppercase;color:var(--c8ft-blue);margin-bottom:1.25rem;display:flex;align-items:center;gap:8px;}
.c8ft-card-label::before{content:'';width:14px;height:1px;background:var(--c8ft-blue);}

/* Card 1 — site links */
.c8ft-site-link{display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid rgba(8,8,8,.08);font-family:'DM Sans',sans-serif;font-size:0.95rem;font-weight:500;color:var(--c8ft-black);transition:padding-left .18s,color .18s;}
.c8ft-site-link:last-child{border-bottom:none;}
.c8ft-site-link:hover{padding-left:6px;color:var(--c8ft-blue);}
.c8ft-site-link-arr{font-size:.9rem;opacity:.4;transition:opacity .18s,transform .18s;}
.c8ft-site-link:hover .c8ft-site-link-arr{opacity:1;transform:translateX(4px);color:var(--c8ft-blue);}

/* Card 2 — service chips */
.c8ft-chip-cluster{display:flex;flex-wrap:wrap;gap:.55rem;margin-bottom:1.25rem;}
.c8ft-chip{display:inline-flex;align-items:center;gap:6px;padding:8px 12px;background:var(--c8ft-white);border:1px solid rgba(8,8,8,.1);font-size:12px;font-weight:500;color:var(--c8ft-black);border-radius:3px;transition:background .18s,border-color .18s,color .18s,transform .18s;}
.c8ft-chip:hover{background:var(--c8ft-blue);border-color:var(--c8ft-blue);color:#fff;transform:translateY(-1px);}
.c8ft-card-note{font-size:12px;color:var(--c8ft-gray);font-weight:300;line-height:1.6;}
.c8ft-card-note a{color:var(--c8ft-blue);font-weight:500;}
.c8ft-card-note a:hover{text-decoration:underline;}

/* Card 3 — contact + social */
.c8ft-touch-row{display:flex;flex-direction:column;gap:.9rem;margin-bottom:1.5rem;}
.c8ft-touch-item{display:flex;align-items:flex-start;gap:10px;font-size:13px;color:var(--c8ft-black);}
.c8ft-touch-item strong{display:block;font-family:'Space Mono',monospace;font-size:9px;letter-spacing:.15em;text-transform:uppercase;color:var(--c8ft-gray);font-weight:500;margin-bottom:2px;}
.c8ft-touch-icon{width:28px;height:28px;background:var(--c8ft-white);border:1px solid rgba(8,8,8,.1);display:flex;align-items:center;justify-content:center;flex-shrink:0;border-radius:3px;}
.c8ft-touch-icon svg{width:12px;height:12px;stroke:var(--c8ft-blue);stroke-width:1.8;fill:none;}
.c8ft-social-row{display:flex;gap:.6rem;}
.c8ft-social{width:36px;height:36px;background:var(--c8ft-black);display:flex;align-items:center;justify-content:center;border-radius:3px;transition:background .18s,transform .18s;}
.c8ft-social:hover{background:var(--c8ft-blue);transform:translateY(-2px);}
.c8ft-social svg{width:15px;height:15px;stroke:#fff;fill:none;stroke-width:1.6;}

/* Bottom cap */
.c8ft-cap{border-top:1px solid rgba(255,255,255,.08);padding:1.25rem 3.5rem;position:relative;z-index:1;}
.c8ft-cap-in{max-width:1440px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;}
.c8ft-cap-copy{font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.05em;color:rgba(255,255,255,.4);}
.c8ft-cap-copy span{color:var(--c8ft-blue-hi);}
.c8ft-brand-name{font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.05em;color:rgba(255,255,255,.4);}
.c8ft-totop{display:flex;align-items:center;gap:8px;font-family:'Space Mono',monospace;font-size:9px;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,255,255,.5);transition:color .18s;cursor:pointer;}
.c8ft-totop:hover{color:#fff;}
.c8ft-totop-icon{width:26px;height:26px;border:1px solid rgba(255,255,255,.18);display:flex;align-items:center;justify-content:center;transition:border-color .18s,transform .18s;border-radius:2px;}
.c8ft-totop:hover .c8ft-totop-icon{border-color:#fff;transform:translateY(-2px);}
.c8ft-totop-icon svg{width:11px;height:11px;stroke:#fff;stroke-width:2;fill:none;}

@media(max-width:1024px){.c8ft-hero{padding:4rem 2rem 5.5rem;}.c8ft-stack-zone{padding:0 2rem;}.c8ft-stack{grid-template-columns:1fr 1fr;gap:2rem;}.c8ft-card:last-child{grid-column:1/-1;}}
@media(max-width:768px){.c8ft-hero{padding:3.5rem 1.25rem 4.5rem;}.c8ft-hero-title{font-size:clamp(1.8rem,8vw,2.5rem);}.c8ft-stack-zone{padding:0 1.25rem;}.c8ft-stack{grid-template-columns:1fr;gap:1.75rem;margin-top:-2rem;}.c8ft-cap{padding:1.1rem 1.25rem;}.c8ft-cap-in{justify-content:center;text-align:center;flex-direction:column;}}
</style>

<!-- Hero CTA -->
<div class="c8ft-hero">
  <div class="c8ft-hero-ghost">CR8V</div>
  <div class="c8ft-hero-in">
    <div class="c8ft-hero-tag">// DIGITAL AGENCY ECOSYSTEM</div>
    <div class="c8ft-hero-title">READY TO BUILD WHAT YOUR BUSINESS <span>ACTUALLY RUNS ON?</span></div>
    <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8ft-hero-cta">
      Start Your Discovery Call
      <svg viewBox="0 0 24 24"><path d="M7 17L17 7M7 7h10v10"/></svg>
    </a>
  </div>
</div>

<!-- Stack Cards -->
<div class="c8ft-stack-zone">
  <div class="c8ft-stack">

    <!-- Card 1: Sitemap — driven by WP footer menu (with fallback) -->
    <div class="c8ft-card">
      <div class="c8ft-card-label">// SITEMAP</div>
      <?php
      if (has_nav_menu('footer-col-1')) {
          wp_nav_menu([
              'theme_location' => 'footer-col-1',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'fallback_cb'    => false,
              'depth'          => 1,
              'walker'         => new CR8V_Footer_Link_Walker(),
          ]);
      } else {
      ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c8ft-site-link">Home <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c8ft-site-link">About Us <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8ft-site-link">Services <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8ft-site-link">Case Studies <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c8ft-site-link">Blog <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8ft-site-link">Contact Us <span class="c8ft-site-link-arr">→</span></a>
        <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8ft-site-link">Discovery Call <span class="c8ft-site-link-arr">→</span></a>
      <?php } ?>
    </div>

    <!-- Card 2: Services chips — driven by WP footer services menu (with fallback) -->
    <div class="c8ft-card">
      <div class="c8ft-card-label">// WHAT WE DO</div>
      <div class="c8ft-chip-cluster">
        <?php
        if (has_nav_menu('footer-col-2')) {
            wp_nav_menu([
                'theme_location' => 'footer-col-2',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => false,
                'depth'          => 1,
                'walker'         => new CR8V_Footer_Chip_Walker(),
            ]);
        } else {
        ?>
          <a href="<?php echo esc_url(home_url('/services/web-design/')); ?>" class="c8ft-chip">Website Design</a>
          <a href="<?php echo esc_url(home_url('/services/custom-dev/')); ?>" class="c8ft-chip">Custom Dev</a>
          <a href="<?php echo esc_url(home_url('/services/ecommerce/')); ?>" class="c8ft-chip">E-Commerce</a>
          <a href="<?php echo esc_url(home_url('/services/shopify/')); ?>" class="c8ft-chip">Shopify</a>
          <a href="<?php echo esc_url(home_url('/services/woocommerce/')); ?>" class="c8ft-chip">WooCommerce</a>
          <a href="<?php echo esc_url(home_url('/services/wordpress/')); ?>" class="c8ft-chip">WordPress</a>
          <a href="<?php echo esc_url(home_url('/services/ai-mvp/')); ?>" class="c8ft-chip">AI MVP</a>
          <a href="<?php echo esc_url(home_url('/services/brand-identity/')); ?>" class="c8ft-chip">Brand Identity</a>
          <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>" class="c8ft-chip">Digital Marketing</a>
          <a href="<?php echo esc_url(home_url('/services/seo-content/')); ?>" class="c8ft-chip">SEO &amp; Content</a>
        <?php } ?>
      </div>
      <div class="c8ft-card-note">Need a custom scope? <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>">Calculate instant estimate →</a></div>
    </div>

    <!-- Card 3: Contact info (hardcoded — edit here or extend to Customizer) -->
    <div class="c8ft-card">
      <div class="c8ft-card-label">// GET IN TOUCH</div>
      <div class="c8ft-touch-row">
        <div class="c8ft-touch-item">
          <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M22 6l-10 7L2 6"/></svg></div>
          <div><strong>Email</strong><a href="mailto:info@cr8vstacks.com">info@cr8vstacks.com</a></div>
        </div>
        <div class="c8ft-touch-item">
          <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
          <div><strong>Phone</strong><a href="tel:+2347054963639">0705 496 3639</a></div>
        </div>
        <div class="c8ft-touch-item">
          <div class="c8ft-touch-icon"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.4"/></svg></div>
          <div><strong>Address</strong>Ogudu, Lagos State, Nigeria</div>
        </div>
      </div>
      <div class="c8ft-social-row">
        <?php if ($instagram) : ?>
        <a href="<?php echo esc_url($instagram); ?>" class="c8ft-social" aria-label="Instagram" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
        </a>
        <?php endif; ?>
        <?php if ($linkedin) : ?>
        <a href="<?php echo esc_url($linkedin); ?>" class="c8ft-social" aria-label="LinkedIn" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
        <?php endif; ?>
        <?php if ($youtube) : ?>
        <a href="<?php echo esc_url($youtube); ?>" class="c8ft-social" aria-label="YouTube" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9.5v5l4.5-2.5z" fill="#FFFFFF" stroke="none"/></svg>
        </a>
        <?php endif; ?>
        <?php if ($facebook) : ?>
        <a href="<?php echo esc_url($facebook); ?>" class="c8ft-social" aria-label="Facebook" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
        </a>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>

<!-- Bottom Cap -->
<div class="c8ft-cap">
  <div class="c8ft-cap-in">
    <div class="c8ft-cap-copy c8ft-brand-name" data-customizer="footer_copyright">
      <?php echo esc_html($copyright); ?>
    </div>
    <div class="c8ft-totop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
      Back to Top
      <div class="c8ft-totop-icon"><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></div>
    </div>
  </div>
</div>

</div><!-- /.c8ft-root -->

<?php
/* ── Footer Walker Classes ─────────────────────────────────── */

class CR8V_Footer_Link_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="c8ft-site-link">';
        $output .= esc_html($item->title);
        $output .= ' <span class="c8ft-site-link-arr">→</span></a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // Suppress default Walker_Nav_Menu </li> output
    }
}

class CR8V_Footer_Chip_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="c8ft-chip">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // Suppress default Walker_Nav_Menu </li> output
    }
}
