<?php
/**
 * Template Name: Contact Us
 * CR8V Stacks — page-contact.php
 * Ticket Stub Contact Page — 100% exact parity with Contact_us.html prototype.
 */

defined('ABSPATH') || exit;

get_header();

$eyebrow    = cr8v_mod('contact_eyebrow', '↳ Contact');
$heading    = cr8v_mod('contact_heading', "SO, WHAT'S THE PROJECT?");
$subtitle   = cr8v_mod('contact_subtitle', 'Fill this in — we read every one and reply within a day.');
$stamp_text = cr8v_mod('contact_stamp_text', '8+ Yrs<br>Experience');
$location   = cr8v_mod('contact_location', 'Ogudu, Lagos State, Nigeria');
$phone      = cr8v_mod('contact_phone', '0705 496 3639');
$form_label = cr8v_mod('contact_form_label', 'FILL OUT THE PROJECT FORM BELOW');
?>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=Michroma&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<div class="c8ct-root c8cf-root">
<style>
.c8ct-root {
  --ink:#080808; --paper:#F2F1EC; --paper-hi:#FAFAF7;
  --blue:#0047E1; --blue-mid:#0038C0; --blue-hi:#4A9EFF;
  --gray:#8A8A8A; --line:rgba(8,8,8,.14);
  font-family:'DM Sans',sans-serif;
}
.c8ct-root *, .c8ct-root *::before, .c8ct-root *::after { box-sizing:border-box; }
.c8ct-root a, .c8ct-root a:hover, .c8ct-root a:focus, .c8ct-root button { text-decoration: none !important; }

.c8ct-wrap { position:relative; background:var(--ink); overflow:hidden; padding:7.5rem 2.5rem 5rem 2.5rem; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
.c8ct-wrap::before { content:''; position:absolute; inset:0; background:radial-gradient(circle at 15% 15%,rgba(0,71,225,.4) 0%,transparent 50%),radial-gradient(circle at 90% 85%,rgba(0,56,192,.25) 0%,transparent 50%); pointer-events:none; }
.c8ct-wrap::after { content:''; position:absolute; inset:0; background-image:url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.04 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); background-size:140px 140px; mix-blend-mode:screen; pointer-events:none; }

.c8ct-card { position:relative; z-index:1; width: 100%; max-width:720px; margin:0 auto; background:var(--paper); padding:4.5rem; overflow:visible; border-radius:4px !important; }
.c8ct-card::before, .c8ct-card::after { content:''; position:absolute; left:8px; right:8px; background:rgba(255,255,255,.05); z-index:-1; }
.c8ct-card::before { bottom:-10px; left:20px; right:20px; background:rgba(255,255,255,.08); }
.c8ct-card::after { bottom:-20px; left:32px; right:32px; background:rgba(255,255,255,.045); }

.c8ct-stamp { position:absolute; top:2.75rem; right:2.75rem; width:78px; height:78px; border:1.5px dashed rgba(8,8,8,.32); border-radius:50%; display:flex; align-items:center; justify-content:center; transform:rotate(-9deg); text-align:center; }
.c8ct-stamp span { display: block; font-family: 'Space Mono', monospace !important; font-size: 8.5px; letter-spacing: .1em; text-transform: uppercase; color: var(--blue); line-height: 1.5; font-weight: 700; }

.c8ct-tag { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .28em; text-transform: uppercase; color: var(--blue); margin-bottom: 16px; display: flex; align-items: center; gap: 8px; font-weight: 700; }
.c8ct-tag::before { content:''; width:16px; height:1px; background:var(--blue); }
.c8ct-h1 { font-family: 'Michroma', sans-serif !important; font-size: 2.2rem; line-height: 1.15; color: var(--ink); letter-spacing: .01em; max-width: 18ch; margin-bottom: .85rem; font-weight: 700; text-transform: uppercase; }
.c8ct-lede { font-family: 'DM Sans', sans-serif !important; font-size: 14.5px; line-height: 1.6; color: #4a4a4a; font-weight: 300; max-width: 38ch; }

.c8ct-meta { display:flex; gap:2.5rem; margin-top:2rem; padding-top:1.75rem; border-top:1px solid var(--line); }
.c8ct-meta-item { flex:1; }
.c8ct-meta-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 6px; font-weight: 700; }
.c8ct-meta-value { font-size:14px; color:var(--ink); font-family:'DM Sans',sans-serif; }
.c8ct-meta-value a { color:inherit; text-decoration:none; border-bottom:1px solid var(--line); }
.c8ct-meta-value a:hover { color:var(--blue); border-color:var(--blue); }

.c8ct-tear { position:relative; margin:2.75rem -4.5rem; border-top:2px dashed rgba(8,8,8,.28); }
.c8ct-tear::before, .c8ct-tear::after { content:''; position:absolute; top:50%; transform:translateY(-50%); width:34px; height:34px; border-radius:50%; background:var(--ink); }
.c8ct-tear::before { left:-17px; }
.c8ct-tear::after { right:-17px; }

.c8ct-form-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 1.5rem; font-weight: 700; }

.c8ct-form-container { width: 100%; text-align: center; }

/* Custom CF7 Success Confirmation Card */
.c8cf-success-card {
  background: #FAFAF7;
  border: 1px solid rgba(8,8,8,0.15);
  border-left: 4px solid #0047E1;
  border-radius: 4px;
  padding: 2rem;
  margin-top: 1.5rem;
  animation: c8cfFadeUp 0.4s ease forwards;
}
.c8cf-success-tag {
  font-family: 'Space Mono', monospace;
  font-size: 9px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: #0047E1;
  font-weight: 700;
  margin-bottom: 0.75rem;
  display: block;
}
.c8cf-success-card h3 {
  font-family: 'Michroma', sans-serif;
  font-size: 1.1rem;
  color: #080808;
  margin-bottom: 0.5rem;
  text-transform: uppercase;
}
.c8cf-success-card p {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.92rem;
  color: #4A4A4A;
  line-height: 1.6;
  margin: 0;
}
@keyframes c8cfFadeUp {
  from { opacity: 0; transform: translateY(12px); }
  to { opacity: 1; transform: translateY(0); }
}

.c8cf-submit.is-sending {
  opacity: 0.8;
  pointer-events: none;
  position: relative;
}
.c8cf-submit.is-sending::after {
  content: '';
  width: 14px;
  height: 14px;
  border: 2px solid #FFFFFF;
  border-top-color: transparent;
  border-radius: 50%;
  display: inline-block;
  margin-left: 8px;
  animation: c8cfSpin 0.7s linear infinite;
  vertical-align: middle;
}
@keyframes c8cfSpin {
  to { transform: rotate(360deg); }
}

@media (max-width:768px){
  .c8ct-wrap { padding:5.5rem 1.25rem 3.5rem 1.25rem; }
  .c8ct-card { padding:3rem 2rem; }
  .c8ct-tear { margin:2.25rem -2rem; }
  .c8ct-h1 { font-size: 1.8rem; }
  .c8ct-stamp { width:60px; height:60px; top:1.75rem; right:1.75rem; }
  .c8ct-meta { flex-direction:column; gap:1.25rem; }
}
@media (max-width:480px){
  .c8ct-wrap { padding:4.5rem .9rem 2.5rem .9rem; }
  .c8ct-card { padding:2.5rem 1.5rem; }
  .c8ct-tear { margin:2rem -1.5rem; }
  .c8ct-stamp { display:none; }
}
</style>

<div class="c8ct-wrap">
  <div class="c8ct-card">
    <div class="c8ct-stamp"><span><?php echo wp_kses_post($stamp_text); ?></span></div>

    <div class="c8ct-tag"><?php echo esc_html($eyebrow); ?></div>
    <h1 class="c8ct-h1"><?php echo esc_html($heading); ?></h1>
    <p class="c8ct-lede"><?php echo esc_html($subtitle); ?></p>

    <div class="c8ct-meta">
      <div class="c8ct-meta-item">
        <div class="c8ct-meta-label">Location</div>
        <div class="c8ct-meta-value"><?php echo esc_html($location); ?></div>
      </div>
      <div class="c8ct-meta-item">
        <div class="c8ct-meta-label">Line</div>
        <div class="c8ct-meta-value"><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></div>
      </div>
    </div>

    <div class="c8ct-tear"></div>

    <div class="c8ct-form-label"><?php echo esc_html($form_label); ?></div>

    <div class="c8ct-form-container">
      <?php echo do_shortcode(cr8v_mod('contact_form_shortcode', '[contact-form-7 id="70c8d19" title="Contact Page"]')); ?>
    </div>
  </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.addEventListener('wpcf7beforesubmit', function(e) {
    const btn = e.target.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.add('is-sending');
      btn.value = 'SENDING BRIEF...';
    }
  });

  document.addEventListener('wpcf7mailsent', function(e) {
    const form = e.target;
    const btn = form.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.remove('is-sending');
      btn.value = 'BRIEF RECEIVED ✓';
      btn.style.background = '#0047E1';
    }

    const responseBox = form.querySelector('.wpcf7-response-output');
    if (responseBox) responseBox.style.display = 'none';

    let successCard = form.querySelector('.c8cf-success-card');
    if (!successCard) {
      successCard = document.createElement('div');
      successCard.className = 'c8cf-success-card';
      successCard.innerHTML = `
        <span class="c8cf-success-tag">↳ ENQUIRY CONFIRMED</span>
        <h3>TICKET #CR8V-9402 RECEIVED</h3>
        <p>Thank you for submitting your project brief. Our team has received your information and will review your scope within 24 hours.</p>
      `;
      form.appendChild(successCard);
    }
  });

  document.addEventListener('wpcf7invalid', function(e) {
    const btn = e.target.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.remove('is-sending');
      btn.value = 'PLEASE FILL REQUIRED FIELDS ✕';
      setTimeout(() => { btn.value = 'Send Message'; }, 3500);
    }
  });
});
</script>

<?php get_footer(); ?>
