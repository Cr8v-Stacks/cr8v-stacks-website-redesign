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
.c8ct-wrap::before { content:''; position:absolute; inset:0; background:none !important; pointer-events:none; }
.c8ct-wrap::after { content:''; position:absolute; inset:0; background-image:url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.04 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); background-size:140px 140px; mix-blend-mode:screen; pointer-events:none; }

.c8ct-card { position:relative; z-index:1; width: 100%; max-width:720px; margin:0 auto; background:var(--paper); padding:4.5rem; overflow:visible; border-radius:4px !important; transition: max-width 0.3s ease; }
.c8ct-card.has-wide-form,
.c8ct-card:has(iframe),
.c8ct-card:has([id*="sb_"]),
.c8ct-card:has(.simplybook-widget),
.c8ct-card:has(#sb_widget_container) {
  max-width: 1140px !important;
  padding: clamp(2rem, 4vw, 3.5rem) !important;
}
.c8ct-card::before, .c8ct-card::after { content:''; position:absolute; left:8px; right:8px; background:rgba(255,255,255,.05); z-index:-1; }
.c8ct-card::before { bottom:-10px; left:20px; right:20px; background:rgba(255,255,255,.08); }
.c8ct-card::after { bottom:-20px; left:32px; right:32px; background:rgba(255,255,255,.045); }

.c8ct-stamp { position:absolute; top:2.75rem; right:2.75rem; width:152px; height:152px; border:1.5px dashed rgba(8,8,8,.32); border-radius:50%; display:flex; align-items:center; justify-content:center; transform:rotate(-9deg); text-align:center; }
.c8ct-stamp span { display: block; font-family: 'Space Mono', monospace !important; font-size: 18px; letter-spacing: .1em; text-transform: uppercase; color: var(--blue); line-height: 1.35; font-weight: 700; }

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

.c8ct-form-container { width: 100% !important; max-width: 100% !important; text-align: center; }
.c8ct-form-container iframe,
.c8ct-form-container .simplybook-widget,
.c8ct-form-container #sb_widget_container,
.c8ct-form-container .sb-widget-content {
  width: 100% !important;
  min-width: 100% !important;
  max-width: 100% !important;
  display: block !important;
  border: none !important;
  margin: 0 auto !important;
  overflow: visible !important;
}

/* ── Complete Ticket Stub Contact Form Styling ── */
.c8ct-form-container .wpcf7 form p {
  margin: 0 !important;
  padding: 0 !important;
}
.c8ct-form-container .wpcf7 form br {
  display: none !important;
}

.c8cf-root {
  --c8cf-ink: #080808; 
  --c8cf-gray: #8A8A8A; 
  --c8cf-line: rgba(8,8,8,.2);
  --c8cf-blue: #0047E1; 
  --c8cf-blue-mid: #0038C0; 
  --c8cf-red: #C4291F;
  font-family: 'DM Sans', sans-serif;
  text-align: left;
}

.c8cf-row {
  display: flex !important;
  gap: 1.75rem !important;
}
.c8cf-field {
  margin-bottom: 1.75rem !important;
  flex: 1 !important;
  text-align: left !important;
}

.c8cf-flabel {
  font-family: 'Space Mono', monospace !important;
  font-size: 9px !important;
  letter-spacing: .16em !important;
  text-transform: uppercase !important;
  color: var(--c8cf-gray) !important;
  margin-bottom: 8px !important;
  display: block !important;
  font-weight: 700 !important;
}

.c8cf-root .wpcf7-form-control-wrap {
  display: block !important;
  width: 100% !important;
}

.c8cf-root input.c8cf-input,
.c8cf-root input.wpcf7-text,
.c8cf-root input.wpcf7-email,
.c8cf-root input.wpcf7-tel,
.c8cf-root textarea.c8cf-textarea,
.c8cf-root textarea.wpcf7-textarea {
  width: 100% !important;
  background: transparent !important;
  border: none !important;
  border-bottom: 1.5px solid var(--c8cf-line) !important;
  color: var(--c8cf-ink) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-size: 15px !important;
  font-weight: 400 !important;
  padding: 8px 2px !important;
  outline: none !important;
  transition: border-color .2s !important;
  box-sizing: border-box !important;
  border-radius: 0 !important;
}

.c8cf-root textarea.c8cf-textarea,
.c8cf-root textarea.wpcf7-textarea {
  min-height: 88px !important;
  resize: vertical !important;
}

.c8cf-root input::placeholder,
.c8cf-root textarea::placeholder {
  color: rgba(8,8,8,.32) !important;
}

.c8cf-root input:focus,
.c8cf-root textarea:focus {
  border-color: var(--c8cf-blue) !important;
}

.c8cf-root input.wpcf7-not-valid,
.c8cf-root textarea.wpcf7-not-valid {
  border-color: var(--c8cf-red) !important;
}

.c8cf-root .wpcf7-not-valid-tip {
  display: block !important;
  font-size: 11px !important;
  color: var(--c8cf-red) !important;
  margin-top: 6px !important;
  font-weight: 500 !important;
  font-family: 'Space Mono', monospace !important;
}

/* ── Interactive Multi-Select Service Pills ── */
.c8cf-root .c8cf-services,
.c8cf-root .wpcf7-checkbox {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 8px !important;
  margin-top: 6px !important;
}

.c8cf-root .c8cf-services .wpcf7-list-item,
.c8cf-root .wpcf7-checkbox .wpcf7-list-item {
  display: inline-flex !important;
  align-items: center !important;
  position: relative !important;
  cursor: pointer !important;
  border: 1px solid var(--c8cf-line) !important;
  background: transparent !important;
  padding: 9px 14px !important;
  font-size: 13px !important;
  color: var(--c8cf-ink) !important;
  transition: all .2s ease !important;
  user-select: none !important;
  margin: 0 !important;
  border-radius: 2px !important;
}

.c8cf-root .c8cf-services .wpcf7-list-item input[type="checkbox"],
.c8cf-root .wpcf7-checkbox input[type="checkbox"] {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  width: 100% !important;
  height: 100% !important;
  opacity: 0 !important;
  cursor: pointer !important;
  margin: 0 !important;
  z-index: 2 !important;
}

.c8cf-root .c8cf-services .wpcf7-list-item:hover,
.c8cf-root .wpcf7-checkbox .wpcf7-list-item:hover {
  border-color: var(--c8cf-blue) !important;
  color: var(--c8cf-blue) !important;
}

.c8cf-root .c8cf-services .wpcf7-list-item:has(input:checked),
.c8cf-root .wpcf7-checkbox .wpcf7-list-item:has(input:checked),
.c8cf-root .c8cf-services .wpcf7-list-item.is-checked,
.c8cf-root .wpcf7-checkbox .wpcf7-list-item.is-checked {
  background: var(--c8cf-ink) !important;
  border-color: var(--c8cf-ink) !important;
  color: #FFFFFF !important;
}

.c8cf-root .c8cf-services .wpcf7-list-item:has(input:checked) .wpcf7-list-item-label,
.c8cf-root .wpcf7-checkbox .wpcf7-list-item:has(input:checked) .wpcf7-list-item-label,
.c8cf-root .c8cf-services .wpcf7-list-item.is-checked .wpcf7-list-item-label,
.c8cf-root .wpcf7-checkbox .wpcf7-list-item.is-checked .wpcf7-list-item-label {
  color: #FFFFFF !important;
}

/* ── Submit Button ── */
.c8cf-submit-row {
  margin-top: 1rem !important;
}

.c8cf-root input.c8cf-submit,
.c8cf-root input.wpcf7-submit {
  width: 100% !important;
  height: 54px !important;
  background: var(--c8cf-ink) !important;
  border: 1px solid var(--c8cf-ink) !important;
  color: #FFFFFF !important;
  font-family: 'Michroma', sans-serif !important;
  font-size: 15px !important;
  letter-spacing: .06em !important;
  cursor: pointer !important;
  transition: all .2s ease !important;
  text-transform: uppercase !important;
  border-radius: 2px !important;
  display: block !important;
}

.c8cf-root input.c8cf-submit:hover,
.c8cf-root input.wpcf7-submit:hover {
  background: var(--c8cf-blue) !important;
  border-color: var(--c8cf-blue) !important;
  transform: translateY(-1px) !important;
  box-shadow: 0 4px 14px rgba(0, 71, 225, 0.25) !important;
}

.c8cf-root .wpcf7-response-output {
  margin: 1.5rem 0 0 0 !important;
  padding: 12px 16px !important;
  border: 1px solid var(--c8cf-line) !important;
  border-radius: 3px !important;
  font-size: 13px !important;
  text-align: center !important;
}

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

@media (max-width: 640px) {
  .c8cf-row {
    flex-direction: column !important;
    gap: 0 !important;
  }
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

<?php
$contact_form_code = cr8v_mod('contact_form_shortcode', '[contact-form-7 id="70c8d19" title="Contact Page"]');
$is_wide_booking   = (stripos($contact_form_code, 'booking') !== false || stripos($contact_form_code, 'simplybook') !== false);
?>
<div class="c8ct-wrap">
  <div class="c8ct-card <?php echo $is_wide_booking ? 'has-wide-form' : ''; ?>">
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
      <?php echo do_shortcode($contact_form_code); ?>
    </div>
  </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Ensure booking widget or iframe dynamically expands contact card to full desktop width
  function checkWideBookingForm() {
    var formBox = document.querySelector('.c8ct-form-container');
    var card = document.querySelector('.c8ct-card');
    if (formBox && card) {
      if (formBox.querySelector('iframe, [id*="sb_"], .simplybook-widget, #sb_widget_container')) {
        card.classList.add('has-wide-form');
      }
    }
  }
  checkWideBookingForm();
  setTimeout(checkWideBookingForm, 400);
  setTimeout(checkWideBookingForm, 1200);
  setTimeout(checkWideBookingForm, 2500);

  // Multi-select service pill checkbox toggle (fallback for browsers alongside CSS :has)
  document.querySelectorAll('.c8cf-root .wpcf7-list-item input[type="checkbox"]:checked').forEach(function(cb) {
    var item = cb.closest('.wpcf7-list-item');
    if (item) item.classList.add('is-checked');
  });
  document.addEventListener('change', function(e) {
    if (e.target && e.target.matches('.c8cf-root .wpcf7-list-item input[type="checkbox"]')) {
      var item = e.target.closest('.wpcf7-list-item');
      if (item) {
        if (e.target.checked) {
          item.classList.add('is-checked');
        } else {
          item.classList.remove('is-checked');
        }
      }
    }
  });

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
