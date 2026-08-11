<?php
/**
 * CR8V Stacks — parts/header-blog.php
 * Master Blog Header template — from blog header.html
 * Features:
 * - Modern Transparent Header & Floating Card Mega Menu
 * - Live WP REST API AJAX Search Popover Engine
 * - Live WP Category Counters
 * - Brand-Colored Category Accordion Drawer Layout for Mobile
 */
defined('ABSPATH') || exit;
?>
<div class="c8bm-root">
<style>
@import url('https://fonts.googleapis.com/css2?family=Michroma&family=Space+Mono:wght@400;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap');

.c8bm-root, .c8bm-root * {box-sizing:border-box!important;}
.c8bm-root a {text-decoration:none!important;color:inherit!important;}
.c8bm-root ul {list-style:none!important;margin:0!important;padding:0!important;}
.c8bm-root button {font-family:'Michroma',sans-serif!important;}

/* ── Header Shell — Transparent Default, Fixed ── */
.c8bm-root .c8bm-header {
  position:fixed!important;top:0!important;left:0!important;right:0!important;
  z-index:9500!important;height:68px!important;
  background:transparent!important;border-bottom:none!important;
  transition:background .3s ease,box-shadow .3s ease,border-color .3s ease!important;
}
.c8bm-root .c8bm-header.c8bm-scrolled {
  background:#FAFAF7!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;
  box-shadow:0 4px 40px rgba(0,0,0,0.07)!important;
}

body.admin-bar .c8bm-root .c8bm-header {top:32px!important;}
body.admin-bar .c8bm-root .c8bm-mega, body.admin-bar .c8bm-root .c8bm-mega-back {top:calc(68px + 32px)!important;}
body.admin-bar .c8bm-root .c8bm-drawer, body.admin-bar .c8bm-root .c8bm-drawer-overlay {top:32px!important;}
@media (max-width:782px){
  body.admin-bar .c8bm-root .c8bm-header {top:46px!important;}
  body.admin-bar .c8bm-root .c8bm-drawer, body.admin-bar .c8bm-root .c8bm-drawer-overlay {top:46px!important;}
}

.c8bm-root .c8bm-bar {
  max-width:1440px!important;margin:0 auto!important;height:68px!important;
  padding:0 3.5rem!important;display:flex!important;align-items:center!important;
  justify-content:space-between!important;gap:1.2rem!important;
}
@media (max-width:1100px){ .c8bm-root .c8bm-bar {padding:0 1.25rem!important;} }

/* ── Logo ── */
.c8bm-root .c8bm-logo {display:flex!important;align-items:center!important;gap:10px!important;flex-shrink:0!important;}
.c8bm-root .c8bm-logo-img {display:block!important;height:44px!important;width:auto!important;}

/* ── Desktop Nav ── */
.c8bm-root .c8bm-pnav {
  display:flex!important;align-items:center!important;gap:2px!important;
  background:#F3F2EC!important;padding:4px!important;height:46px!important;
  border-radius:4px!important;
}
.c8bm-root .c8bm-pnav-item {position:static!important;}
.c8bm-root .c8bm-pnav-link {
  display:flex!important;align-items:center!important;gap:4px!important;
  font-size:12.5px!important;font-weight:500!important;color:#080808!important;
  padding:0 .9rem!important;height:38px!important;letter-spacing:.01em!important;
  cursor:pointer!important;position:relative!important;border-radius:4px!important;
  transition:background .2s ease,color .2s ease,box-shadow .2s ease!important;
  white-space:nowrap!important;user-select:none!important;font-family:'DM Sans',sans-serif!important;
}
.c8bm-root .c8bm-pnav-link:hover, .c8bm-root .c8bm-pnav-link.c8bm-open {
  background:#FFFFFF!important;color:#0047E1!important;box-shadow:0 2px 10px rgba(8,8,8,0.07)!important;
}
.c8bm-root .c8bm-chev {width:10px!important;height:10px!important;opacity:.5!important;transition:transform .22s ease,opacity .2s!important;flex-shrink:0!important;stroke:currentColor!important;}
.c8bm-root .c8bm-pnav-link.c8bm-open .c8bm-chev {transform:rotate(180deg)!important;opacity:1!important;}
@media (max-width:1100px){ .c8bm-root .c8bm-pnav {display:none!important;} }

/* ── Header Right ── */
.c8bm-root .c8bm-right {display:flex!important;align-items:center!important;gap:.75rem!important;flex-shrink:0!important;}
.c8bm-root .c8bm-search-btn {
  width:36px!important;height:36px!important;display:flex!important;align-items:center!important;justify-content:center!important;
  border:1px solid rgba(8,8,8,0.08)!important;background:#F4F3EE!important;border-radius:4px!important;
  transition:background .2s,border-color .2s!important;cursor:pointer!important;
}
.c8bm-root .c8bm-search-btn:hover {background:#EEF3FF!important;border-color:#0047E1!important;}
.c8bm-root .c8bm-search-btn svg {width:14px!important;height:14px!important;stroke:#6B6B6B!important;stroke-width:1.75!important;fill:none!important;}

.c8bm-root .c8bm-btn-cta {
  position:relative!important;overflow:hidden!important;
  display:inline-flex!important;align-items:center!important;justify-content:center!important;
  gap:8px!important;font-family:'Michroma',sans-serif!important;
  font-size:10.5px!important;font-weight:700!important;color:#FAFAF7!important;
  background:#0047E1!important;padding:0 1.3rem!important;height:40px!important;
  border-radius:4px!important;letter-spacing:.04em!important;text-transform:uppercase!important;
  white-space:nowrap!important;transition:background 0.25s ease, transform 0.2s ease!important;
  box-shadow:none!important;
}
.c8bm-root .c8bm-btn-cta::before {
  content:''!important;position:absolute!important;top:0!important;left:-100%!important;
  width:60%!important;height:100%!important;
  background:linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent)!important;
  transform:skewX(-20deg)!important;
  transition:left 0.65s ease!important;
}
.c8bm-root .c8bm-btn-cta:hover {
  background:#0038C0!important;transform:translateY(-1px)!important;
  box-shadow:none!important;
}
.c8bm-root .c8bm-btn-cta:hover::before { left:180%!important; }
@media (max-width:1100px){ .c8bm-root .c8bm-btn-cta {display:none!important;} }

.c8bm-root .c8bm-hbg {display:none!important;flex-direction:column!important;gap:5px!important;padding:10px!important;cursor:pointer!important;background:none!important;border:none!important;}
.c8bm-root .c8bm-hbg span {display:block!important;width:22px!important;height:1.5px!important;background:#080808!important;transition:all .25s!important;}
.c8bm-root .c8bm-hbg.c8bm-open span:nth-child(1){transform:rotate(45deg) translate(4.5px,4.5px)!important;}
.c8bm-root .c8bm-hbg.c8bm-open span:nth-child(2){opacity:0!important;transform:scaleX(0)!important;}
.c8bm-root .c8bm-hbg.c8bm-open span:nth-child(3){transform:rotate(-45deg) translate(4.5px,-4.5px)!important;}
@media (max-width:1100px){ .c8bm-root .c8bm-hbg {display:flex!important;} }

/* ── Mega Backdrop & Floating Card Shell ── */
.c8bm-root .c8bm-mega-back {
  position:fixed!important;top:68px!important;left:0!important;right:0!important;bottom:0!important;
  background:rgba(8,8,8,0.25)!important;z-index:9400!important;
  opacity:0!important;visibility:hidden!important;pointer-events:none!important;
  transition:opacity .25s ease,visibility .25s ease!important;
}
.c8bm-root .c8bm-mega-back.c8bm-show {opacity:1!important;visibility:visible!important;pointer-events:auto!important;}

.c8bm-root .c8bm-mega {
  position:fixed!important;top:68px!important;left:0!important;right:0!important;z-index:9450!important;
  display:flex!important;justify-content:center!important;padding-top:14px!important;
  background:transparent!important;pointer-events:none!important;
  visibility:hidden!important;opacity:0!important;transform:translateY(-8px)!important;
  transition:transform .25s cubic-bezier(.4,0,.2,1),opacity .2s ease,visibility .2s ease!important;
}
.c8bm-root .c8bm-mega.c8bm-open {transform:translateY(0)!important;opacity:1!important;visibility:visible!important;pointer-events:auto!important;}
@media (max-width:1100px){ .c8bm-root .c8bm-mega, .c8bm-root .c8bm-mega-back {display:none!important;} }

.c8bm-root .c8bm-mega-card {
  background:#FFFFFF!important;width:min(1280px, calc(100% - 4rem))!important;
  border-radius:4px!important;border:1px solid rgba(8,8,8,0.08)!important;
  box-shadow:0 24px 60px rgba(8,8,8,0.14)!important;overflow:hidden!important;pointer-events:auto!important;
}

.c8bm-root .c8bm-mega-grid {display:grid!important;grid-template-columns:1.1fr 1.3fr 1.1fr!important;}
.c8bm-root .c8bm-mcol {padding:2.2rem 2.2rem!important;border-right:1px solid rgba(8,8,8,0.06)!important;}
.c8bm-root .c8bm-mcol:last-child {border-right:none!important;}

.c8bm-root .c8bm-mcol-eyebrow {
  font-family:'Space Mono',monospace!important;font-size:9.5px!important;letter-spacing:.28em!important;
  text-transform:uppercase!important;color:#0047E1!important;margin-bottom:1.1rem!important;
  display:flex!important;align-items:center!important;gap:8px!important;font-weight:700!important;
}
.c8bm-root .c8bm-mcol-eyebrow::before {content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:inline-block!important;flex-shrink:0!important;}

.c8bm-root .c8bm-mcol-heading {
  font-family:'Michroma',sans-serif!important;font-size:1.35rem!important;line-height:1.3!important;
  color:#080808!important;margin-bottom:.8rem!important;letter-spacing:.01em!important;font-weight:700!important;
}
.c8bm-root .c8bm-mcol-desc {
  font-family:'DM Sans',sans-serif!important;font-size:12.5px!important;color:#666663!important;
  line-height:1.65!important;font-weight:400!important;margin-bottom:1.2rem!important;
}

.c8bm-root .c8bm-sublink {
  display:flex!important;align-items:center!important;justify-content:space-between!important;gap:10px!important;
  padding:8px 10px!important;margin:0 -10px!important;font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;
  color:#080808!important;letter-spacing:.02em!important;text-transform:uppercase!important;
  border-bottom:1px solid rgba(8,8,8,0.05)!important;border-radius:4px!important;
  transition:color .15s,background .15s,padding-left .15s!important;
}
.c8bm-root .c8bm-sublink:last-of-type {border-bottom:none!important;}
.c8bm-root .c8bm-sublink:hover {color:#0047E1!important;background:rgba(0,71,225,0.05)!important;padding-left:14px!important;}
.c8bm-root .c8bm-count {font-family:'Space Mono',monospace!important;font-size:10px!important;color:#0047E1!important;background:rgba(0,71,225,0.08)!important;padding:2px 7px!important;border-radius:4px!important;font-weight:700!important;}

.c8bm-root .c8bm-upsell {
  background:#080808!important;border-radius:4px!important;padding:1.75rem 1.6rem!important;
  display:flex!important;flex-direction:column!important;position:relative!important;overflow:hidden!important;
  height:100%!important;border:1px solid rgba(255,255,255,0.08)!important;
}
.c8bm-root .c8bm-upsell::before {
  content:''!important;position:absolute!important;inset:0!important;
  background:radial-gradient(circle at 80% 15%,rgba(0,71,225,0.5) 0%,transparent 60%)!important;
}
.c8bm-root .c8bm-upsell-header-row {
  display:flex!important;align-items:center!important;gap:10px!important;margin-bottom:8px!important;position:relative!important;z-index:1!important;
}
.c8bm-root .c8bm-upsell-ico {
  width:28px!important;height:28px!important;background:#0047E1!important;border-radius:4px!important;
  display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important;
}
.c8bm-root .c8bm-upsell-ico svg {width:14px!important;height:14px!important;stroke:#FFFFFF!important;stroke-width:1.8!important;fill:none!important;}
.c8bm-root .c8bm-upsell-title {font-family:'Michroma',sans-serif!important;font-size:1.15rem!important;line-height:1.25!important;color:#FAFAF7!important;margin:0!important;position:relative!important;z-index:1!important;font-weight:700!important;}
.c8bm-root .c8bm-upsell-desc {font-family:'DM Sans',sans-serif!important;font-size:12px!important;color:rgba(255,255,255,0.65)!important;line-height:1.55!important;margin-bottom:1.2rem!important;position:relative!important;z-index:1!important;}
.c8bm-root .c8bm-upsell-link {
  display:inline-flex!important;align-items:center!important;justify-content:center!important;gap:8px!important;
  font-family:'Michroma',sans-serif!important;font-size:10.5px!important;font-weight:700!important;letter-spacing:.04em!important;text-transform:uppercase!important;
  color:#FFFFFF!important;background:#0047E1!important;
  padding:10px 16px!important;border-radius:4px!important;position:relative!important;z-index:1!important;margin-top:auto!important;
  transition:background .2s ease!important;box-shadow:none!important;
}
.c8bm-root .c8bm-upsell-link:hover {background:#0038C0!important;}

.c8bm-root .c8bm-post-item {
  display:flex!important;gap:12px!important;align-items:flex-start!important;
  padding:8px 10px!important;margin:0 -10px!important;border-bottom:1px solid rgba(8,8,8,0.05)!important;
  border-radius:4px!important;transition:background .18s ease!important;
}
.c8bm-root .c8bm-post-item:last-of-type {border-bottom:none!important;}
.c8bm-root .c8bm-post-item:hover {background:rgba(0,71,225,0.05)!important;}
.c8bm-root .c8bm-post-num {font-family:'Space Mono',monospace!important;font-size:12px!important;font-weight:700!important;color:#0047E1!important;line-height:1.2!important;flex-shrink:0!important;}
.c8bm-root .c8bm-post-tag {font-family:'Space Mono',monospace!important;font-size:8.5px!important;letter-spacing:.2em!important;color:#0047E1!important;text-transform:uppercase!important;margin-bottom:2px!important;}
.c8bm-root .c8bm-post-title {font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;color:#080808!important;line-height:1.45!important;letter-spacing:.01em!important;text-transform:uppercase!important;transition:color .18s!important;}
.c8bm-root .c8bm-post-item:hover .c8bm-post-title {color:#0047E1!important;}

/* ── Live WordPress AJAX Search Modal ── */
.c8bm-root .c8bm-search-modal {
  position:fixed!important;inset:0!important;z-index:9800!important;
  background:rgba(8,8,8,0.75)!important;backdrop-filter:blur(8px)!important;
  display:flex!important;align-items:flex-start!important;justify-content:center!important;
  padding-top:5rem!important;opacity:0!important;visibility:hidden!important;pointer-events:none!important;
  transition:opacity .25s ease,visibility .25s ease!important;
}
.c8bm-root .c8bm-search-modal.c8bm-active {opacity:1!important;visibility:visible!important;pointer-events:auto!important;}

.c8bm-root .c8bm-search-card {
  background:#FFFFFF!important;width:min(680px, calc(100% - 2rem))!important;
  border-radius:4px!important;border:1px solid rgba(8,8,8,0.1)!important;
  box-shadow:0 30px 80px rgba(0,0,0,0.3)!important;overflow:hidden!important;
}
.c8bm-root .c8bm-search-top {
  display:flex!important;align-items:center!important;gap:12px!important;
  padding:1rem 1.25rem!important;border-bottom:1px solid rgba(8,8,8,0.08)!important;
  background:#FAFAF7!important;
}
.c8bm-root .c8bm-search-top svg {width:18px!important;height:18px!important;stroke:#0047E1!important;stroke-width:2!important;fill:none!important;flex-shrink:0!important;}
.c8bm-root .c8bm-search-input {
  flex:1!important;border:none!important;background:transparent!important;outline:none!important;
  font-family:'DM Sans',sans-serif!important;font-size:15px!important;color:#080808!important;
}
.c8bm-root .c8bm-search-close {
  background:rgba(8,8,8,0.06)!important;border:none!important;border-radius:4px!important;
  padding:4px 10px!important;font-family:'Space Mono',monospace!important;font-size:10px!important;
  color:#686868!important;cursor:pointer!important;text-transform:uppercase!important;
}
.c8bm-root .c8bm-search-close:hover {background:#0047E1!important;color:#FFFFFF!important;}

.c8bm-root .c8bm-search-results {
  max-height:420px!important;overflow-y:auto!important;padding:1rem 1.25rem!important;
}
.c8bm-root .c8bm-search-result-item {
  display:block!important;padding:10px 12px!important;border-radius:4px!important;
  border-bottom:1px solid rgba(8,8,8,0.04)!important;transition:background .15s ease!important;
}
.c8bm-root .c8bm-search-result-item:hover {background:rgba(0,71,225,0.05)!important;}
.c8bm-root .c8bm-sres-title {font-family:'Michroma',sans-serif!important;font-size:11.5px!important;font-weight:700!important;color:#080808!important;margin-bottom:3px!important;text-transform:uppercase!important;}
.c8bm-root .c8bm-search-result-item:hover .c8bm-sres-title {color:#0047E1!important;}
.c8bm-root .c8bm-sres-meta {font-family:'Space Mono',monospace!important;font-size:9px!important;color:#0047E1!important;letter-spacing:.1em!important;text-transform:uppercase!important;}

/* ── MOBILE DRAWER LAYOUT WITH ROYAL BLUE RADIAL ATMOSPHERE GLOW ── */
.c8bm-root .c8bm-drawer-overlay {position:fixed!important;inset:0!important;background:rgba(8,8,8,0.5)!important;z-index:9600!important;opacity:0!important;visibility:hidden!important;pointer-events:none!important;transition:opacity .3s,visibility .3s!important;}
.c8bm-root .c8bm-drawer-overlay.c8bm-show {opacity:1!important;visibility:visible!important;pointer-events:auto!important;}
.c8bm-root .c8bm-drawer {
  position:fixed!important;inset:0!important;z-index:9700!important;
  background:#FAFAF7!important;transform:translateX(100%)!important;
  transition:transform .38s cubic-bezier(.4,0,.2,1)!important;
  display:flex!important;flex-direction:column!important;overflow:hidden!important;
}
.c8bm-root .c8bm-drawer.c8bm-open {transform:translateX(0)!important;}

.c8bm-root .c8bm-bd-top {background:#080808!important;flex-shrink:0!important;position:relative!important;overflow:hidden!important;padding-bottom:1rem!important;}
.c8bm-root .c8bm-bd-top::before {
  content:''!important;position:absolute!important;inset:0!important;
  background:radial-gradient(circle at 85% 15%,rgba(0,71,225,0.45) 0%,transparent 55%),radial-gradient(circle at 10% 90%,rgba(0,56,192,0.2) 0%,transparent 50%)!important;
  pointer-events:none!important;z-index:0!important;
}
.c8bm-root .c8bm-bd-top-bar {
  height:60px!important;padding:0 1.25rem!important;display:flex!important;align-items:center!important;justify-content:space-between!important;
  border-bottom:1px solid rgba(255,255,255,0.1)!important;position:relative!important;z-index:1!important;
}
.c8bm-root .c8bm-bd-logo-img {display:block!important;height:38px!important;width:auto!important;}
.c8bm-root .c8bm-bd-close {
  width:34px!important;height:34px!important;display:flex!important;align-items:center!important;justify-content:center!important;
  background:rgba(255,255,255,0.08)!important;border:1px solid rgba(255,255,255,0.15)!important;cursor:pointer!important;
  flex-shrink:0!important;padding:0!important;line-height:0!important;border-radius:4px!important;
  transition:background .2s,border-color .2s!important;
}
.c8bm-root .c8bm-bd-close:hover {background:#0047E1!important;border-color:#0047E1!important;}
.c8bm-root .c8bm-bd-intro {padding:1rem 1.25rem 0!important;position:relative!important;z-index:1!important;}
.c8bm-root .c8bm-bd-intro-tag {font-family:'Space Mono',monospace!important;font-size:8.5px!important;letter-spacing:.28em!important;text-transform:uppercase!important;color:#4A9EFF!important;margin-bottom:4px!important;}
.c8bm-root .c8bm-bd-intro-title {font-family:'Michroma',sans-serif!important;font-size:1.15rem!important;line-height:1.2!important;color:#FAFAF7!important;font-weight:700!important;}

.c8bm-root .c8bm-bd-body {flex:1!important;overflow-y:auto!important;background:#FAFAF7!important;}
.c8bm-root .c8bm-bd-section-label {
  font-family:'Space Mono',monospace!important;font-size:9px!important;letter-spacing:.32em!important;text-transform:uppercase!important;
  color:#0047E1!important;padding:1.1rem 1.25rem .5rem!important;display:flex!important;align-items:center!important;gap:8px!important;font-weight:700!important;
}
.c8bm-root .c8bm-bd-section-label::before {content:''!important;width:14px!important;height:1px!important;background:#0047E1!important;display:block!important;flex-shrink:0!important;}

.c8bm-root .c8bm-bd-cat-list {padding:0 1.25rem!important;}
.c8bm-root .c8bm-bd-cat-item {display:flex!important;align-items:center!important;padding:12px 10px!important;margin:0 -10px!important;border-bottom:1px solid rgba(8,8,8,0.06)!important;cursor:pointer!important;border-radius:4px!important;transition:background .15s!important;}
.c8bm-root .c8bm-bd-cat-item:hover {background:rgba(0,71,225,0.04)!important;}
.c8bm-root .c8bm-bdc-inner {display:flex!important;align-items:center!important;justify-content:space-between!important;flex:1!important;}
.c8bm-root .c8bm-bdc-left {display:flex!important;flex-direction:column!important;gap:2px!important;}
.c8bm-root .c8bm-bdc-name {font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;color:#080808!important;text-transform:uppercase!important;letter-spacing:.01em!important;}
.c8bm-root .c8bm-bdc-subs {font-family:'DM Sans',sans-serif!important;font-size:11.5px!important;color:#7A7A75!important;font-weight:400!important;}
.c8bm-root .c8bm-bdc-right {display:flex!important;align-items:center!important;gap:8px!important;}
.c8bm-root .c8bm-bdc-count {font-family:'Space Mono',monospace!important;font-size:10px!important;color:#0047E1!important;background:rgba(0,71,225,0.08)!important;padding:2px 8px!important;border-radius:4px!important;font-weight:700!important;}
.c8bm-root .c8bm-bdc-chev {width:12px!important;height:12px!important;color:#0047E1!important;opacity:.5!important;transition:transform .2s!important;}
.c8bm-root .c8bm-bd-cat-item.c8bm-bdc-active .c8bm-bdc-chev {transform:rotate(180deg)!important;opacity:1!important;}

.c8bm-root .c8bm-bdc-sub {display:none!important;background:#F4F3EE!important;padding:6px 1.25rem 10px!important;border-radius:4px!important;margin:4px 0!important;}
.c8bm-root .c8bm-bdc-sub-open {display:block!important;}
.c8bm-root .c8bm-bdc-sub-link {display:flex!important;align-items:center!important;gap:8px!important;padding:8px 0!important;font-family:'DM Sans',sans-serif!important;font-size:12.5px!important;color:#080808!important;transition:color .15s!important;}
.c8bm-root .c8bm-bdc-sub-link:hover {color:#0047E1!important;}
.c8bm-root .c8bm-bdc-sub-link::before {content:''!important;width:4px!important;height:4px!important;border-radius:50%!important;background:#0047E1!important;}

/* Mobile Drawer Footer with Royal Blue Radial Atmosphere Glow */
.c8bm-root .c8bm-bd-foot {
  padding:1.1rem 1.25rem 1.5rem!important;border-top:1px solid rgba(255,255,255,0.1)!important;
  background:#080808!important;flex-shrink:0!important;position:relative!important;overflow:hidden!important;
}
.c8bm-root .c8bm-bd-foot::before {
  content:''!important;position:absolute!important;inset:0!important;
  background:radial-gradient(circle at 85% 15%,rgba(0,71,225,0.45) 0%,transparent 55%),radial-gradient(circle at 10% 90%,rgba(0,56,192,0.2) 0%,transparent 50%)!important;
  pointer-events:none!important;z-index:0!important;
}
.c8bm-root .c8bm-bd-services {
  position:relative!important;z-index:1!important;
  display:flex!important;align-items:center!important;justify-content:center!important;gap:8px!important;width:100%!important;height:48px!important;
  background:#0047E1!important;color:#FAFAF7!important;font-family:'Michroma',sans-serif!important;font-size:11px!important;font-weight:700!important;letter-spacing:.04em!important;text-transform:uppercase!important;
  border-radius:4px!important;box-shadow:none!important;transition:background .2s!important;
}
.c8bm-root .c8bm-bd-services:hover {background:#0038C0!important;}
</style>

<!-- ── Desktop Backdrop ── -->
<div class="c8bm-mega-back" id="c8bmMegaBack"></div>

<!-- ── Live WP AJAX Search Modal ── -->
<div class="c8bm-search-modal" id="c8bmSearchModal">
  <div class="c8bm-search-card">
    <div class="c8bm-search-top">
      <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input type="text" class="c8bm-search-input" id="c8bmSearchInput" placeholder="Search articles, guides &amp; case studies..." autocomplete="off">
      <button class="c8bm-search-close" id="c8bmSearchCloseBtn" type="button">ESC</button>
    </div>
    <div class="c8bm-search-results" id="c8bmSearchResults">
      <div style="font-family:'Space Mono',monospace;font-size:10px;color:#8A8A8A;text-align:center;padding:1.5rem 0;">Type to search live articles via WordPress API...</div>
    </div>
  </div>
</div>

<!-- ── Modernized Blog Header ── -->
<header class="c8bm-header" id="c8bmHeader">
  <div class="c8bm-bar">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="c8bm-logo">
      <?php echo cr8v_logo_img('c8bm-logo-img'); ?>
    </a>

    <nav>
      <ul class="c8bm-pnav" id="c8bmPnav">
        <li class="c8bm-pnav-item">
          <a class="c8bm-pnav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        </li>
        <li class="c8bm-pnav-item">
          <a class="c8bm-pnav-link" href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
        </li>
        <li class="c8bm-pnav-item">
          <a class="c8bm-pnav-link" href="<?php echo esc_url(home_url('/case-studies/')); ?>">Case Studies</a>
        </li>
        <li class="c8bm-pnav-item">
          <a class="c8bm-pnav-link" href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
        </li>
        <li class="c8bm-pnav-item">
          <a class="c8bm-pnav-link" href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
        </li>
      </ul>
    </nav>

    <div class="c8bm-right">
      <button class="c8bm-search-btn" id="c8bmSearchTrigger" type="button" aria-label="Search">
        <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      </button>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8bm-btn-cta">
        Our Services →
      </a>
      <button class="c8bm-hbg" id="c8bmHbg" type="button" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- ── MOBILE DRAWER ── -->
<div class="c8bm-drawer-overlay" id="c8bmDrawerOverlay"></div>
<div class="c8bm-drawer" id="c8bmDrawer">
  <div class="c8bm-bd-top">
    <div class="c8bm-bd-top-bar">
      <?php echo cr8v_logo_img('c8bm-bd-logo-img'); ?>
      <button class="c8bm-bd-close" id="c8bmBdClose" type="button" aria-label="Close menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="#FAFAF7" stroke-width="1.75" style="display:block;width:13px;height:13px;stroke:#FAFAF7;"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="c8bm-bd-intro">
      <div class="c8bm-bd-intro-tag">// CR8V INSIGHTS</div>
      <div class="c8bm-bd-intro-title">Strategy, Design &amp; Code</div>
    </div>
  </div>

  <div class="c8bm-bd-body">
    <div class="c8bm-bd-section-label">Navigation</div>
    <div class="c8bm-bd-cat-list">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">Home</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">Services</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
      <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">Case Studies</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
      <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">Scope Estimator</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">About</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c8bm-bd-cat-item">
        <div class="c8bm-bdc-inner">
          <div class="c8bm-bdc-left"><span class="c8bm-bdc-name">Blog Archive</span></div>
          <div class="c8bm-bdc-right"><span class="c8bm-bdc-count">→</span></div>
        </div>
      </a>
    </div>
  </div>

  <div class="c8bm-bd-foot">
    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="c8bm-bd-services">Explore Our Services →</a>
  </div>
</div>

<script>
(function(){
  // Mobile drawer toggle
  var hbg = document.getElementById('c8bmHbg');
  var drawer = document.getElementById('c8bmDrawer');
  var overlay = document.getElementById('c8bmDrawerOverlay');
  var closeBtn = document.getElementById('c8bmBdClose');

  function toggleDrawer(){
    if (!drawer) return;
    var isOpen = drawer.classList.toggle('c8bm-open');
    if (overlay) overlay.classList.toggle('c8bm-show', isOpen);
    if (hbg) hbg.classList.toggle('c8bm-open', isOpen);
  }

  if (hbg) hbg.addEventListener('click', toggleDrawer);
  if (closeBtn) closeBtn.addEventListener('click', toggleDrawer);
  if (overlay) overlay.addEventListener('click', toggleDrawer);

  // Desktop Scroll Transparent -> Solid
  var header = document.getElementById('c8bmHeader');
  if (header) {
    window.addEventListener('scroll', function(){
      header.classList.toggle('c8bm-scrolled', window.scrollY > 8);
    });
  }

  // Live WP AJAX Search Engine
  var searchTrigger = document.getElementById('c8bmSearchTrigger');
  var searchModal = document.getElementById('c8bmSearchModal');
  var searchInput = document.getElementById('c8bmSearchInput');
  var searchCloseBtn = document.getElementById('c8bmSearchCloseBtn');
  var searchResults = document.getElementById('c8bmSearchResults');
  var debounceTimer = null;

  function openSearchModal(){
    if (!searchModal) return;
    searchModal.classList.add('c8bm-active');
    if (searchInput){
      searchInput.value = '';
      setTimeout(function(){ searchInput.focus(); }, 100);
    }
  }
  function closeSearchModal(){
    if (searchModal) searchModal.classList.remove('c8bm-active');
  }

  if (searchTrigger) searchTrigger.addEventListener('click', openSearchModal);
  if (searchCloseBtn) searchCloseBtn.addEventListener('click', closeSearchModal);
  if (searchModal) {
    searchModal.addEventListener('click', function(e){
      if (e.target === searchModal) closeSearchModal();
    });
    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape' && searchModal.classList.contains('c8bm-active')) closeSearchModal();
    });
  }

  if (searchInput && searchResults) {
    searchInput.addEventListener('input', function(){
      var q = searchInput.value.trim();
      clearTimeout(debounceTimer);
      if (q.length < 2) {
        searchResults.innerHTML = '<div style="font-family:\'Space Mono\',monospace;font-size:10px;color:#8A8A8A;text-align:center;padding:1.5rem 0;">Type to search live articles via WordPress API...</div>';
        return;
      }
      searchResults.innerHTML = '<div style="font-family:\'Space Mono\',monospace;font-size:10px;color:#0047E1;text-align:center;padding:1.5rem 0;">Searching...</div>';
      debounceTimer = setTimeout(function(){
        fetch('<?php echo esc_url(rest_url('wp/v2/posts')); ?>?search=' + encodeURIComponent(q) + '&per_page=5')
          .then(function(r){ return r.json(); })
          .then(function(posts){
            if (!Array.isArray(posts) || !posts.length) {
              searchResults.innerHTML = '<div style="font-family:\'Space Mono\',monospace;font-size:10px;color:#8A8A8A;text-align:center;padding:1.5rem 0;">No matching articles found.</div>';
              return;
            }
            var html = '';
            posts.forEach(function(p){
              var title = p.title ? (p.title.rendered || p.title) : 'Untitled';
              html += '<a href="' + p.link + '" class="c8bm-search-result-item">' +
                '<div class="c8bm-sres-title">' + title + '</div>' +
                '<div class="c8bm-sres-meta">READ ARTICLE →</div>' +
                '</a>';
            });
            searchResults.innerHTML = html;
          })
          .catch(function(){
            searchResults.innerHTML = '<div style="font-family:\'Space Mono\',monospace;font-size:10px;color:#D32F2F;text-align:center;padding:1.5rem 0;">Error fetching search results.</div>';
          });
      }, 300);
    });
  }
})();
</script>
</div>
