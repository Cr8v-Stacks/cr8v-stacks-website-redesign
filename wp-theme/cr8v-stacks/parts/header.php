<?php
/**
 * CR8V Stacks — parts/header.php
 * Full site header with: transparent scroll header, desktop mega menus,
 * mobile drawer, and WP menu integration.
 *
 * Include in templates with: get_template_part('parts/header');
 */
defined('ABSPATH') || exit;

$cta_text = cr8v_mod('header_cta_text', 'Get an Estimate');
$cta_link = cr8v_mod('header_cta_link', home_url('/discovery-call/'));
$drawer_label = cr8v_mod('header_drawer_label', 'Strategy, Design &amp; Liquid Performance');
?>
<div class="c8hdr-root">
<style>
@import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap');

.c8hdr-root,.c8hdr-root *{box-sizing:border-box!important;}
.c8hdr-root a{text-decoration:none!important;color:inherit!important;}
.c8hdr-root ul{list-style:none!important;margin:0!important;padding:0!important;}
.c8hdr-root button{font-family:'DM Sans',sans-serif!important;}

/* ── Header Shell ── */
.c8hdr-root .c8-header{position:fixed!important;top:0!important;left:0!important;right:0!important;z-index:9500!important;height:68px!important;background:transparent!important;border-bottom:none!important;transition:background .3s ease,box-shadow .3s ease,border-color .3s ease!important;}
.c8hdr-root .c8-header.c8-scrolled{background:#FFFFFF!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;box-shadow:0 4px 30px rgba(0,0,0,0.06)!important;}

/* WordPress Admin Bar offsets */
body.admin-bar .c8hdr-root .c8-header{top:32px!important;}
body.admin-bar .c8hdr-root .c8-md-drawer,body.admin-bar .c8hdr-root .c8-md-overlay{top:32px!important;}
@media(max-width:782px){body.admin-bar .c8hdr-root .c8-header{top:46px!important;}body.admin-bar .c8hdr-root .c8-md-drawer,body.admin-bar .c8hdr-root .c8-md-overlay{top:46px!important;}}

.c8hdr-root .c8hdr-inner{max-width:1440px!important;margin:0 auto!important;height:68px!important;padding:0 3.5rem!important;display:flex!important;align-items:center!important;justify-content:space-between!important;gap:1.5rem!important;}
@media(max-width:1100px){.c8hdr-root .c8hdr-inner{padding:0 1.25rem!important;}}

/* ── Logo ── */
.c8hdr-root .c8-logo{display:flex!important;align-items:center!important;gap:10px!important;flex-shrink:0!important;text-decoration:none!important;}
.c8hdr-root .c8-logo-img{display:block!important;height:44px!important;width:auto!important;max-width:none!important;}
.c8hdr-root .c8-md-hero-logo-img{height:36px!important;width:auto!important;display:block!important;object-fit:contain!important;}

/* ── Primary Nav ── */
.c8hdr-root .c8-pnav{display:flex!important;align-items:center!important;gap:2px!important;background:#F3F2EC!important;padding:4px!important;height:46px!important;border-radius:4px!important;}
.c8hdr-root .c8-pnav-item{position:static!important;}
.c8hdr-root .c8-pnav-link{display:flex!important;align-items:center!important;gap:4px!important;font-size:13px!important;font-weight:500!important;color:#080808!important;padding:0 1rem!important;height:38px!important;letter-spacing:.01em!important;cursor:pointer!important;position:relative!important;border-radius:4px!important;transition:background .2s ease,color .2s ease,box-shadow .2s ease!important;white-space:nowrap!important;user-select:none!important;font-family:'DM Sans',sans-serif!important;}
.c8hdr-root .c8-pnav-link:hover,.c8hdr-root .c8-pnav-link.c8-open{background:#FFFFFF!important;color:#0047E1!important;box-shadow:0 2px 10px rgba(8,8,8,0.07)!important;}
.c8hdr-root .c8-chev{width:11px!important;height:11px!important;opacity:.5!important;transition:transform .22s ease,opacity .2s!important;flex-shrink:0!important;stroke:currentColor!important;}
.c8hdr-root .c8-pnav-link.c8-open .c8-chev{transform:rotate(180deg)!important;opacity:1!important;}
@media(max-width:1100px){.c8hdr-root .c8-pnav{display:none!important;}}

/* ── CTA Button ── */
.c8hdr-root .c8hdr-right{display:flex!important;align-items:center!important;gap:.9rem!important;flex-shrink:0!important;}
.c8hdr-root .c8-btn-cta{position:relative!important;overflow:hidden!important;display:inline-flex!important;align-items:center!important;justify-content:center!important;gap:8px!important;font-family:'Michroma',sans-serif!important;font-size:10.5px!important;font-weight:700!important;color:#FAFAF7!important;background:#0047E1!important;padding:0 1.4rem!important;height:40px!important;border-radius:4px!important;letter-spacing:.04em!important;text-transform:uppercase!important;white-space:nowrap!important;transition:background 0.25s ease,transform 0.2s ease!important;box-shadow:none!important;}
.c8hdr-root .c8-btn-cta::before{content:''!important;position:absolute!important;top:0!important;left:-100%!important;width:60%!important;height:100%!important;background:linear-gradient(90deg,transparent,rgba(255,255,255,0.4),transparent)!important;transform:skewX(-20deg)!important;transition:left 0.65s ease!important;}
.c8hdr-root .c8-btn-cta:hover{background:#0038C0!important;transform:translateY(-1px)!important;box-shadow:none!important;}
.c8hdr-root .c8-btn-cta:hover::before{left:180%!important;}
@media(max-width:1100px){.c8hdr-root .c8-btn-cta{display:none!important;}}

/* ── Hamburger ── */
.c8hdr-root .c8-hbg{display:none!important;flex-direction:column!important;gap:5px!important;padding:10px!important;cursor:pointer!important;background:none!important;border:none!important;margin-left:.25rem!important;}
.c8hdr-root .c8-hbg span{display:block!important;width:22px!important;height:1.5px!important;background:#080808!important;transition:all .25s!important;}
.c8hdr-root .c8-hbg.c8-open span:nth-child(1){transform:rotate(45deg) translate(4.5px,4.5px)!important;}
.c8hdr-root .c8-hbg.c8-open span:nth-child(2){opacity:0!important;transform:scaleX(0)!important;}
.c8hdr-root .c8-hbg.c8-open span:nth-child(3){transform:rotate(-45deg) translate(4.5px,-4.5px)!important;}
@media(max-width:1100px){.c8hdr-root .c8-hbg{display:flex!important;}}

/* ── Mega Menu Backdrop ── */
.c8hdr-root .c8-mega-back{position:fixed!important;top:68px!important;left:0!important;right:0!important;bottom:0!important;background:rgba(8,8,8,0.25)!important;z-index:9400!important;opacity:0!important;visibility:hidden!important;pointer-events:none!important;transition:opacity .25s ease,visibility .25s ease!important;}
.c8hdr-root .c8-mega-back.c8-show{opacity:1!important;visibility:visible!important;pointer-events:auto!important;}

/* ── Mega Menu Shell ── */
.c8hdr-root .c8-mega{position:fixed!important;top:68px!important;left:0!important;right:0!important;z-index:9450!important;display:flex!important;justify-content:center!important;padding-top:14px!important;background:transparent!important;pointer-events:none!important;visibility:hidden!important;opacity:0!important;transform:translateY(-8px)!important;transition:transform .25s cubic-bezier(.4,0,.2,1),opacity .2s ease,visibility .2s ease!important;}
.c8hdr-root .c8-mega.c8-open{transform:translateY(0)!important;opacity:1!important;visibility:visible!important;pointer-events:auto!important;}
@media(max-width:1100px){.c8hdr-root .c8-mega,.c8hdr-root .c8-mega-back{display:none!important;}}

.c8hdr-root .c8-mega-card{background:#FFFFFF!important;width:min(1280px, calc(100% - 4rem))!important;border-radius:4px!important;border:1px solid rgba(8,8,8,0.08)!important;box-shadow:0 24px 60px rgba(8,8,8,0.14)!important;overflow:hidden!important;pointer-events:auto!important;}
.c8hdr-root .c8-mega-grid{display:grid!important;}
.c8hdr-root .c8-mega-grid-services{grid-template-columns:1fr 1fr 1fr!important;}
.c8hdr-root .c8-mega-grid-tools{grid-template-columns:1fr 1.4fr!important;}
.c8hdr-root .c8-mcol-intro,.c8hdr-root .c8-mcol-list,.c8hdr-root .c8-mcol-list-wide{padding:2.2rem 2.2rem!important;border-right:1px solid rgba(8,8,8,0.06)!important;}
.c8hdr-root .c8-mcol-list:last-child,.c8hdr-root .c8-mcol-list-wide{border-right:none!important;}
.c8hdr-root .c8-mcol-eyebrow{font-family:'Space Mono',monospace!important;font-size:9.5px!important;letter-spacing:.28em!important;text-transform:uppercase!important;color:#0047E1!important;margin-bottom:1.1rem!important;display:flex!important;align-items:center!important;gap:8px!important;font-weight:700!important;}
.c8hdr-root .c8-mcol-eyebrow::before{content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:inline-block!important;flex-shrink:0!important;}
.c8hdr-root .c8-mcol-heading{font-family:'Michroma',sans-serif!important;font-size:1.35rem!important;line-height:1.3!important;color:#080808!important;margin-bottom:.8rem!important;letter-spacing:.01em!important;font-weight:700!important;}
.c8hdr-root .c8-mcol-desc{font-family:'DM Sans',sans-serif!important;font-size:12.5px!important;color:#666663!important;line-height:1.65!important;font-weight:400!important;margin-bottom:1.5rem!important;max-width:280px!important;}

/* Highlight / Showcase Card */
.c8hdr-root .c8-highlight-card{display:block!important;background:#0047E1!important;border-radius:4px!important;padding:1.1rem 1.2rem!important;transition:background .2s!important;}
.c8hdr-root .c8-highlight-card:hover{background:#0038C0!important;}
.c8hdr-root .c8-highlight-header-row{display:flex!important;align-items:center!important;gap:10px!important;margin-bottom:.5rem!important;}
.c8hdr-root .c8-highlight-ico{width:30px!important;height:30px!important;background:rgba(255,255,255,0.15)!important;border-radius:4px!important;display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;}
.c8hdr-root .c8-highlight-ico svg{width:14px!important;height:14px!important;stroke:#FFFFFF!important;stroke-width:1.75!important;fill:none!important;}
.c8hdr-root .c8-highlight-title{font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;color:#FFFFFF!important;text-transform:uppercase!important;letter-spacing:.04em!important;}
.c8hdr-root .c8-highlight-desc{font-family:'DM Sans',sans-serif!important;font-size:11.5px!important;color:rgba(255,255,255,0.75)!important;line-height:1.5!important;margin-bottom:.6rem!important;}
.c8hdr-root .c8-highlight-link{font-family:'Space Mono',monospace!important;font-size:10px!important;font-weight:700!important;color:rgba(255,255,255,0.9)!important;}

/* Services row items */
.c8hdr-root .c8-svc2-list{display:flex!important;flex-direction:column!important;gap:0!important;}
.c8hdr-root .c8-svc2-row{display:flex!important;align-items:center!important;gap:12px!important;padding:9px 10px!important;border-radius:4px!important;transition:background .15s!important;}
.c8hdr-root .c8-svc2-row:hover{background:#F3F2EC!important;}
.c8hdr-root .c8-svc2-ico{width:28px!important;height:28px!important;background:#EEF3FF!important;border-radius:4px!important;display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;transition:background .2s!important;}
.c8hdr-root .c8-svc2-row:hover .c8-svc2-ico{background:#0047E1!important;}
.c8hdr-root .c8-svc2-ico svg{width:12px!important;height:12px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;transition:stroke .2s!important;}
.c8hdr-root .c8-svc2-row:hover .c8-svc2-ico svg{stroke:#FFFFFF!important;}
.c8hdr-root .c8-svc2-name{font-family:'DM Sans',sans-serif!important;font-size:13px!important;font-weight:600!important;color:#080808!important;}
.c8hdr-root .c8-svc2-desc{font-family:'DM Sans',sans-serif!important;font-size:11px!important;color:#6B6B6B!important;}

/* Tools row items */
.c8hdr-root .c8-tool2-list{display:flex!important;flex-direction:column!important;gap:4px!important;}
.c8hdr-root .c8-tool2-row{display:flex!important;align-items:flex-start!important;gap:14px!important;padding:12px 10px!important;border-radius:4px!important;transition:background .15s!important;border-bottom:1px solid rgba(8,8,8,0.05)!important;}
.c8hdr-root .c8-tool2-row:last-child{border-bottom:none!important;}
.c8hdr-root .c8-tool2-row:hover{background:#F3F2EC!important;}
.c8hdr-root .c8-tool2-ico{width:32px!important;height:32px!important;background:#EEF3FF!important;border-radius:4px!important;display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;margin-top:2px!important;transition:background .2s!important;}
.c8hdr-root .c8-tool2-row:hover .c8-tool2-ico{background:#0047E1!important;}
.c8hdr-root .c8-tool2-ico svg{width:13px!important;height:13px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;transition:stroke .2s!important;}
.c8hdr-root .c8-tool2-row:hover .c8-tool2-ico svg{stroke:#FFFFFF!important;}
.c8hdr-root .c8-tool2-name{font-family:'DM Sans',sans-serif!important;font-size:13px!important;font-weight:600!important;color:#080808!important;margin-bottom:3px!important;}
.c8hdr-root .c8-tool2-desc{font-family:'DM Sans',sans-serif!important;font-size:11.5px!important;color:#6B6B6B!important;line-height:1.5!important;margin-bottom:4px!important;}
.c8hdr-root .c8-tool2-link{font-family:'Space Mono',monospace!important;font-size:9.5px!important;font-weight:700!important;color:#0047E1!important;}

/* ── Mobile Drawer ── */
.c8hdr-root .c8-md-overlay{position:fixed!important;inset:0!important;z-index:9600!important;background:rgba(8,8,8,0.5)!important;opacity:0!important;pointer-events:none!important;transition:opacity .3s!important;backdrop-filter:blur(3px)!important;}
.c8hdr-root .c8-md-overlay.c8-show{opacity:1!important;pointer-events:auto!important;}
.c8hdr-root .c8-md-drawer{position:fixed!important;top:0!important;right:0!important;bottom:0!important;z-index:9700!important;width:min(340px,92vw)!important;display:flex!important;flex-direction:column!important;transform:translateX(100%)!important;transition:transform .35s cubic-bezier(0.16,1,0.3,1)!important;overflow:hidden!important;}
.c8hdr-root .c8-md-drawer.c8-open{transform:translateX(0)!important;}

/* Drawer Hero */
.c8hdr-root .c8-md-hero{flex-shrink:0!important;background:#080808!important;padding:0!important;position:relative!important;overflow:hidden!important;}
.c8hdr-root .c8-md-hero::before{content:''!important;position:absolute!important;inset:0!important;background:radial-gradient(circle at 85% 15%,rgba(0,71,225,0.55) 0%,transparent 55%),radial-gradient(circle at 10% 90%,rgba(0,56,192,0.25) 0%,transparent 50%)!important;pointer-events:none!important;z-index:0!important;}
.c8hdr-root .c8-md-hero-bar{position:relative!important;z-index:1!important;display:flex!important;align-items:center!important;justify-content:space-between!important;padding:1.1rem 1.25rem 0.75rem!important;}
.c8hdr-root .c8-md-close{background:rgba(255,255,255,0.1)!important;border:1px solid rgba(255,255,255,0.15)!important;border-radius:4px!important;width:32px!important;height:32px!important;cursor:pointer!important;display:flex!important;align-items:center!important;justify-content:center!important;transition:background .2s!important;}
.c8hdr-root .c8-md-close:hover{background:rgba(255,255,255,0.18)!important;}
.c8hdr-root .c8-md-hero-label{position:relative!important;z-index:1!important;font-family:'Space Mono',monospace!important;font-size:9px!important;font-weight:700!important;color:rgba(250,250,247,0.5)!important;letter-spacing:.12em!important;text-transform:uppercase!important;padding:0 1.25rem 1rem!important;}

/* Drawer Body */
.c8hdr-root .c8-md-body{flex:1!important;overflow-y:auto!important;background:#FAFAF7!important;}
.c8hdr-root .c8-md-section-label{font-family:'Space Mono',monospace!important;font-size:9px!important;font-weight:700!important;letter-spacing:.12em!important;text-transform:uppercase!important;color:#0047E1!important;padding:1.1rem 1.25rem .5rem!important;display:flex!important;align-items:center!important;gap:8px!important;}
.c8hdr-root .c8-md-section-label::before{content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:block!important;flex-shrink:0!important;}
.c8hdr-root .c8-md-grid{display:grid!important;grid-template-columns:1fr 1fr!important;gap:8px!important;padding:6px 1.25rem 1rem!important;}
.c8hdr-root .c8-md-card{display:flex!important;flex-direction:column!important;gap:8px!important;padding:12px 10px!important;background:#F4F3EE!important;border:1px solid rgba(8,8,8,0.06)!important;border-radius:4px!important;transition:background .2s,border-color .2s,transform .2s!important;}
.c8hdr-root .c8-md-card:hover{background:rgba(0,71,225,0.05)!important;border-color:rgba(0,71,225,0.25)!important;transform:translateX(3px)!important;}
.c8hdr-root .c8-md-card-ico{width:26px!important;height:26px!important;background:#EEF3FF!important;display:flex!important;align-items:center!important;justify-content:center!important;border-radius:4px!important;transition:background .2s!important;}
.c8hdr-root .c8-md-card:hover .c8-md-card-ico{background:#0047E1!important;}
.c8hdr-root .c8-md-card-ico svg{width:12px!important;height:12px!important;stroke:#0047E1!important;stroke-width:1.75!important;fill:none!important;transition:stroke .2s!important;}
.c8hdr-root .c8-md-card:hover .c8-md-card-ico svg{stroke:#FFFFFF!important;}
.c8hdr-root .c8-md-card-name{font-family:'Michroma',sans-serif!important;font-size:10.5px!important;font-weight:700!important;color:#080808!important;text-transform:uppercase!important;letter-spacing:.01em!important;transition:color .2s!important;}
.c8hdr-root .c8-md-card:hover .c8-md-card-name{color:#0047E1!important;}
.c8hdr-root .c8-md-plain-links{padding:4px 1.25rem 8px!important;}
.c8hdr-root .c8-md-plain-link{display:flex!important;align-items:center!important;justify-content:space-between!important;padding:12px 0!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;font-family:'DM Sans',sans-serif!important;font-size:13.5px!important;font-weight:500!important;color:#080808!important;transition:color .15s,padding-left .15s!important;}
.c8hdr-root .c8-md-plain-link:hover{color:#0047E1!important;padding-left:5px!important;}

/* Drawer Footer */
.c8hdr-root .c8-md-foot{padding:1.1rem 1.25rem 1.5rem!important;border-top:1px solid rgba(255,255,255,0.1)!important;background:#080808!important;flex-shrink:0!important;position:relative!important;overflow:hidden!important;}
.c8hdr-root .c8-md-foot::before{content:''!important;position:absolute!important;inset:0!important;background:radial-gradient(circle at 85% 15%,rgba(0,71,225,0.45) 0%,transparent 55%),radial-gradient(circle at 10% 90%,rgba(0,56,192,0.2) 0%,transparent 50%)!important;pointer-events:none!important;z-index:0!important;}
.c8hdr-root .c8-md-cta{position:relative!important;z-index:1!important;display:flex!important;align-items:center!important;justify-content:center!important;gap:8px!important;width:100%!important;height:48px!important;background:#0047E1!important;color:#FAFAF7!important;font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;letter-spacing:.04em!important;text-transform:uppercase!important;border-radius:4px!important;transition:background .2s!important;}
.c8hdr-root .c8-md-cta:hover{background:#0038C0!important;}

@media(max-width:1200px){.c8hdr-root .c8-mega-grid-services{grid-template-columns:1fr 1fr 1fr!important;}.c8hdr-root .c8-mega-grid-tools{grid-template-columns:1fr 1.2fr!important;}}
</style>

<!-- ── Desktop Backdrop ── -->
<div class="c8-mega-back" id="c8-mega-back"></div>

<!-- ── Main Site Header ── -->
<header class="c8-nav-header" id="c8hdr-root">
  <!-- Left: Brand Logo -->
  <a href="<?php echo esc_url(home_url('/')); ?>" class="c8-logo">
    <?php echo cr8v_logo_img('c8-logo-img'); ?>
  </a>

  <!-- Primary Navigation -->
  <nav>
    <ul class="c8-pnav" id="c8-pnav">

      <!-- Home -->
      <li class="c8-pnav-item">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c8-pnav-link">Home</a>
      </li>

      <!-- Services (mega menu trigger) -->
      <li class="c8-pnav-item" data-mega="c8-mega-services">
        <span class="c8-pnav-link" tabindex="0">Services
          <svg class="c8-chev" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
        </span>
      </li>

      <!-- Case Studies -->
      <li class="c8-pnav-item">
        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8-pnav-link">Case Studies</a>
      </li>

      <!-- Toolkits (mega menu trigger) -->
      <li class="c8-pnav-item" data-mega="c8-mega-toolkits">
        <span class="c8-pnav-link" tabindex="0">Toolkits
          <svg class="c8-chev" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
        </span>
      </li>

      <!-- About -->
      <li class="c8-pnav-item">
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c8-pnav-link">About</a>
      </li>

      <!-- Blog -->
      <li class="c8-pnav-item">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c8-pnav-link">Blog</a>
      </li>
    </ul>
  </nav>

  <!-- Right: CTA + Hamburger -->
  <div class="c8hdr-right">
    <a href="<?php echo esc_url($cta_link); ?>" class="c8-btn-cta">
      <?php echo esc_html($cta_text); ?> →
    </a>
    <button class="c8-hbg" id="c8-hbg" type="button" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- ── MEGA MENU: Services ── -->
<div class="c8-mega" id="c8-mega-services">
  <div class="c8-mega-card">
    <div class="c8-mega-grid c8-mega-grid-services">

      <!-- Col 1: Intro + Featured Case Study -->
      <div class="c8-mcol-intro">
        <div class="c8-mcol-eyebrow">// SERVICES</div>
        <div class="c8-mcol-heading">Full-Stack Builds</div>
        <p class="c8-mcol-desc">Design, development and growth systems — customizable enough to run any kind of business online.</p>
        
        <!-- Showcase Proof of Work -->
        <a href="<?php echo esc_url(home_url('/case-studies/the-duch-apartments/')); ?>" class="c8-highlight-card">
          <div class="c8-highlight-header-row">
            <div class="c8-highlight-ico"><svg viewBox="0 0 24 24"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 16.8l-6.2 4.5 2.4-7.4L2 9.4h7.6z"/></svg></div>
            <div class="c8-highlight-title">The Duch Apartments</div>
          </div>
          <div class="c8-highlight-desc">A bespoke hospitality build with a 100% direct booking engine.</div>
          <span class="c8-highlight-link">Explore case study →</span>
        </a>
      </div>

      <!-- Col 2: Design & Build — driven by WP Services Mega Menu (with fallback) -->
      <div class="c8-mcol-list">
        <div class="c8-mcol-eyebrow">DESIGN &amp; BUILD</div>
        <div class="c8-svc2-list">
          <?php
          if (has_nav_menu('services-mega')) {
              wp_nav_menu([
                  'theme_location' => 'services-mega',
                  'container'      => false,
                  'items_wrap'     => '%3$s',
                  'fallback_cb'    => false,
                  'depth'          => 1,
                  'walker'         => new CR8V_Services_Mega_Walker(),
              ]);
          } else {
          ?>
            <a href="<?php echo esc_url(home_url('/services/web-design/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
              <div><div class="c8-svc2-name">Website Design</div><div class="c8-svc2-desc">Custom UI/UX &amp; Webflow/WP</div></div>
            </a>
            <a href="<?php echo esc_url(home_url('/services/custom-dev/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
              <div><div class="c8-svc2-name">Custom Development</div><div class="c8-svc2-desc">Full-stack web applications</div></div>
            </a>
            <a href="<?php echo esc_url(home_url('/services/ecommerce/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
              <div><div class="c8-svc2-name">E-Commerce</div><div class="c8-svc2-desc">High-converting digital stores</div></div>
            </a>
            <a href="<?php echo esc_url(home_url('/services/shopify/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg></div>
              <div><div class="c8-svc2-name">Shopify</div><div class="c8-svc2-desc">Liquid &amp; Headless storefronts</div></div>
            </a>
            <a href="<?php echo esc_url(home_url('/services/woocommerce/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg></div>
              <div><div class="c8-svc2-name">WooCommerce</div><div class="c8-svc2-desc">Scalable WP shopping systems</div></div>
            </a>
            <a href="<?php echo esc_url(home_url('/services/wordpress/')); ?>" class="c8-svc2-row">
              <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0110 10c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"/></svg></div>
              <div><div class="c8-svc2-name">WordPress</div><div class="c8-svc2-desc">High-performance custom themes</div></div>
            </a>
          <?php } ?>
        </div>
      </div>

      <!-- Col 3: Strategy & Growth (static — edit via WP Admin > Menus > Services Mega Menu) -->
      <div class="c8-mcol-list">
        <div class="c8-mcol-eyebrow">STRATEGY &amp; GROWTH</div>
        <div class="c8-svc2-list">
          <a href="<?php echo esc_url(home_url('/services/ai-mvp/')); ?>" class="c8-svc2-row">
            <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8z"/><circle cx="12" cy="12" r="3"/></svg></div>
            <div><div class="c8-svc2-name">AI MVP</div><div class="c8-svc2-desc">Rapid AI prototyping</div></div>
          </a>
          <a href="<?php echo esc_url(home_url('/services/brand-identity/')); ?>" class="c8-svc2-row">
            <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
            <div><div class="c8-svc2-name">Brand Identity</div><div class="c8-svc2-desc">Logos &amp; design tokens</div></div>
          </a>
          <a href="<?php echo esc_url(home_url('/services/brand-strategy/')); ?>" class="c8-svc2-row">
            <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
            <div><div class="c8-svc2-name">Brand Strategy</div><div class="c8-svc2-desc">Positioning &amp; messaging</div></div>
          </a>
          <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>" class="c8-svc2-row">
            <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
            <div><div class="c8-svc2-name">Digital Marketing</div><div class="c8-svc2-desc">Paid campaigns &amp; CRO</div></div>
          </a>
          <a href="<?php echo esc_url(home_url('/services/seo-content/')); ?>" class="c8-svc2-row">
            <div class="c8-svc2-ico"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
            <div><div class="c8-svc2-name">SEO &amp; Content</div><div class="c8-svc2-desc">Entity SEO &amp; organic authority</div></div>
          </a>
        </div>
      </div>

    </div>
    <!-- Option 3: Full-Width Mega Menu Bottom Navigation Bar -->
    <div class="c8-mega-bar">
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8-mega-bar-link">
        Explore Our Full Services Directory &amp; Pricing Packages <span class="c8-mega-bar-arr">→</span>
      </a>
    </div>
  </div>
</div>

<!-- ── MEGA MENU: Toolkit ── -->
<div class="c8-mega" id="c8-mega-toolkits">
  <div class="c8-mega-card">
    <div class="c8-mega-grid c8-mega-grid-tools">

      <div class="c8-mcol-intro">
        <div class="c8-mcol-eyebrow">// TOOLKIT</div>
        <div class="c8-mcol-heading">Build Smarter</div>
        <p class="c8-mcol-desc">Free interactive tools and references — price your project, explore our work, and browse real client brand assets before you ever book a call.</p>
        <a href="https://cr8vstacks.com/toolkits/website-cost-calculator/" class="c8-highlight-card">
          <div class="c8-highlight-header-row">
            <div class="c8-highlight-ico"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg></div>
            <div class="c8-highlight-title">Instant Cost Estimate</div>
          </div>
          <div class="c8-highlight-desc">Tell us what you need and get a realistic price range — no consultation required.</div>
          <span class="c8-highlight-link">Calculate Your Cost →</span>
        </a>
      </div>

      <div class="c8-mcol-list-wide">
        <div class="c8-mcol-eyebrow">AVAILABLE TOOLS</div>
        <div class="c8-tool2-list">
          <a href="https://cr8vstacks.com/toolkits/brand-directory/" class="c8-tool2-row">
            <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
            <div>
              <div class="c8-tool2-name">Brand Directory</div>
              <div class="c8-tool2-desc">A running library of real client brand assets and design references, organised by industry.</div>
              <span class="c8-tool2-link">Browse the Directory →</span>
            </div>
          </a>
          <a href="<?php echo esc_url(home_url('/#dev-playground')); ?>" class="c8-tool2-row">
            <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
            <div>
              <div class="c8-tool2-name">Dev Playground</div>
              <div class="c8-tool2-desc">A running showcase of custom WordPress plugins and development work — live releases plus what's in production.</div>
              <span class="c8-tool2-link">Visit the Playground →</span>
            </div>
          </a>
          <a href="https://cr8vstacks.com/toolkits/website-cost-calculator/" class="c8-tool2-row">
            <div class="c8-tool2-ico"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg></div>
            <div>
              <div class="c8-tool2-name">Cost Calculator</div>
              <div class="c8-tool2-desc">Tell us what you need and get a realistic price range for your website — no consultation required to start.</div>
              <span class="c8-tool2-link">Calculate Your Cost →</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ── Mobile Drawer ── -->
<div class="c8-md-overlay" id="c8-md-overlay"></div>
<div class="c8-md-drawer" id="c8-md-drawer">

  <div class="c8-md-hero">
    <div class="c8-md-hero-bar">
      <?php echo cr8v_logo_img('c8-md-hero-logo-img'); ?>
      <button class="c8-md-close" id="c8-md-close" type="button" aria-label="Close menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="#FAFAF7" stroke-width="1.75" style="display:block;width:13px;height:13px;stroke:#FAFAF7;"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="c8-md-hero-label"><?php echo esc_html($drawer_label); ?></div>
  </div>

  <div class="c8-md-body">
    <div class="c8-md-section-label">Core Services</div>
    <div class="c8-md-grid">
      <a href="<?php echo esc_url(home_url('/services/web-design/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
        <div class="c8-md-card-name">Website Design</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/custom-dev/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
        <div class="c8-md-card-name">Custom Dev</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/ecommerce/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
        <div class="c8-md-card-name">E-Commerce</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/shopify/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg></div>
        <div class="c8-md-card-name">Shopify</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/woocommerce/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/></svg></div>
        <div class="c8-md-card-name">WooCommerce</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/wordpress/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 00-7.07 17.07l4.07-11.07h6l4.07 11.07A10 10 0 0012 2z"/></svg></div>
        <div class="c8-md-card-name">WordPress</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/seo-content/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
        <div class="c8-md-card-name">SEO & Content</div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>" class="c8-md-card">
        <div class="c8-md-card-ico"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
        <div class="c8-md-card-name">Marketing</div>
      </a>
    </div>

    <div class="c8-md-plain-links">
      <?php
      if (has_nav_menu('mobile-drawer')) {
          wp_nav_menu([
              'theme_location' => 'mobile-drawer',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'fallback_cb'    => false,
              'depth'          => 1,
              'walker'         => new CR8V_Mobile_Plain_Links_Walker(),
          ]);
      } else {
      ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c8-md-plain-link">Home <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8-md-plain-link">Services <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8-md-plain-link">Case Studies <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c8-md-plain-link">About Us <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c8-md-plain-link">Blog <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8-md-plain-link">Contact Us <span>→</span></a>
        <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8-md-plain-link">Discovery Call <span>→</span></a>
      <?php } ?>
    </div>
  </div>

  <div class="c8-md-foot">
    <a href="<?php echo esc_url($cta_link); ?>" class="c8-md-cta"><?php echo esc_html($cta_text); ?> →</a>
  </div>
</div>

<script>
(function(){
  var header=document.getElementById('c8-header');
  var back=document.getElementById('c8-mega-back');
  var active=null,timer=null;
  function open(id){clearTimeout(timer);var panel=document.getElementById(id);if(!panel)return;if(active&&active!==panel){active.classList.remove('c8-open');document.querySelectorAll('#c8-pnav .c8-pnav-link').forEach(function(l){l.classList.remove('c8-open');});}panel.classList.add('c8-open');if(back)back.classList.add('c8-show');active=panel;document.querySelectorAll('[data-mega="'+id+'"] .c8-pnav-link').forEach(function(l){l.classList.add('c8-open');});}
  function close(immediate){clearTimeout(timer);var fn=function(){if(active){active.classList.remove('c8-open');active=null;}if(back)back.classList.remove('c8-show');document.querySelectorAll('#c8-pnav .c8-pnav-link').forEach(function(l){l.classList.remove('c8-open');});};if(immediate)fn();else timer=setTimeout(fn,180);}
  document.querySelectorAll('#c8-pnav .c8-pnav-item[data-mega]').forEach(function(item){var link=item.querySelector('.c8-pnav-link');var id=item.getAttribute('data-mega');link.addEventListener('mouseenter',function(){open(id);});link.addEventListener('click',function(e){if(active&&active.id===id)close(true);else open(id);});item.addEventListener('mouseleave',function(){close(false);});});
  document.querySelectorAll('#c8-mega-services,#c8-mega-toolkits').forEach(function(p){p.addEventListener('mouseenter',function(){clearTimeout(timer);});p.addEventListener('mouseleave',function(){close(false);});});
  if(back)back.addEventListener('click',function(){close(true);});
  document.addEventListener('keydown',function(e){if(e.key==='Escape')close(true);});
  if(header){window.addEventListener('scroll',function(){header.classList.toggle('c8-scrolled',window.scrollY>8);});}
  var hbg=document.getElementById('c8-hbg');
  var drawer=document.getElementById('c8-md-drawer');
  var overlay=document.getElementById('c8-md-overlay');
  var closeBtn=document.getElementById('c8-md-close');
  function toggleDrawer(){var isOpen=drawer.classList.toggle('c8-open');overlay.classList.toggle('c8-show',isOpen);hbg.classList.toggle('c8-open',isOpen);}
  if(hbg&&drawer&&overlay&&closeBtn){hbg.addEventListener('click',toggleDrawer);closeBtn.addEventListener('click',toggleDrawer);overlay.addEventListener('click',toggleDrawer);document.addEventListener('keydown',function(e){if(e.key==='Escape'&&drawer.classList.contains('c8-open'))toggleDrawer();});}
})();
</script>
</div>

<?php
/* ─── CUSTOM WALKER CLASSES ────────────────────────────────────
   These output WP menu items with our exact CSS classes,
   so the design is preserved while content is WP-managed.
──────────────────────────────────────────────────────────────── */

/**
 * Primary nav walker — outputs <li class="c8-pnav-item"><a class="c8-pnav-link">
 */
class CR8V_Primary_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = implode(' ', $item->classes ?? []);
        $active  = in_array('current-menu-item', $item->classes ?? []) ? ' aria-current="page"' : '';
        $output .= '<li class="c8-pnav-item ' . esc_attr($classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '" class="c8-pnav-link"' . $active . '>';
        $output .= esc_html($item->title);
        $output .= '</a></li>';
    }
}

/**
 * Services mega menu walker — outputs <a class="c8-svc2-row">
 * Icon SVG is stored in the menu item's Description field in WP Admin.
 */
class CR8V_Services_Mega_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $desc = $item->description ?: '';
        $slug = sanitize_title($item->title);
        
        $icons = [
            'website-design'     => '<svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
            'custom-development' => '<svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
            'e-commerce'         => '<svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>',
            'shopify'            => '<svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>',
            'woocommerce'        => '<svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>',
            'wordpress'          => '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a10 10 0 0110 10c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"/></svg>',
            'ai-mvp'             => '<svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8z"/><circle cx="12" cy="12" r="3"/></svg>',
            'brand-identity'     => '<svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
            'brand-strategy'    => '<svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
            'digital-marketing'  => '<svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
            'seo-content'        => '<svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>',
        ];

        $icon = $icons[$slug] ?? '<svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>';

        $output .= '<a href="' . esc_url($item->url) . '" class="c8-svc2-row">';
        $output .= '<div class="c8-svc2-ico">' . $icon . '</div>';
        $output .= '<div>';
        $output .= '<div class="c8-svc2-name">' . esc_html($item->title) . '</div>';
        if ($desc) {
            $output .= '<div class="c8-svc2-desc">' . esc_html($desc) . '</div>';
        }
        $output .= '</div></a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // Suppress </li>
    }
}

/**
 * Mobile drawer plain links walker — outputs <a class="c8-md-plain-link">
 */
class CR8V_Mobile_Plain_Links_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="c8-md-plain-link">';
        $output .= esc_html($item->title);
        $output .= ' <span>→</span></a>';
    }
}
