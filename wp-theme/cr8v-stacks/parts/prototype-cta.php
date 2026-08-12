<?php
/**
 * Prototype CTA Section — Matches Case Studies & Portfolio prototype HTML files exactly
 * Includes circular badges video, .cta-badge, .cta-h2, .cta-desc, .cta-btn-pill & matrix scramble hover effect
 */
defined('ABSPATH') || exit;

$cta_badge = cr8v_mod('cs_cta_badge', '// START A PROJECT');
$cta_title = cr8v_mod('cs_cta_title', 'Ready to launch your <em>custom digital platform?</em>');
$cta_desc  = cr8v_mod('cs_cta_desc',  'Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.');
$cta_text  = cr8v_mod('cs_cta_btn_text', 'Book a Scoping Call');
$cta_url   = cr8v_mod('cs_cta_btn_url', home_url('/discovery-call/'));
$video_url = get_template_directory_uri() . '/assets/img/download.mp4';
?>
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
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
      </video>
    </div>

    <div class="cta-content-group">
      <div class="cta-badge" data-customizer="cs_cta_badge"><span style="color:#0047E1;font-weight:800;margin-right:4px;">//</span> <?php echo esc_html(str_replace('//', '', $cta_badge)); ?></div>
      
      <h2 class="cta-h2" data-customizer="cs_cta_title">
        <?php echo wp_kses_post($cta_title); ?>
      </h2>

      <p class="cta-desc" data-customizer="cs_cta_desc">
        <?php echo esc_html($cta_desc); ?>
      </p>

      <div>
        <a href="<?php echo esc_url($cta_url); ?>" class="cta-btn-pill">
          <span data-customizer="cs_cta_btn_text"><?php echo esc_html($cta_text); ?></span> <span class="cta-btn-arrow">&rarr;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<script>
(function initCTAMatrix() {
  function setup() {
    var srvMatrixButtons = document.querySelectorAll('.c8-btn-primary, .c8cs-btn-primary, .cta-btn-pill, .c8isv-related-card-link, .c8cs-back-btn, .c8cs-related-cell-link');
    var srvMatrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    srvMatrixButtons.forEach(function(btn) {
      if (btn.dataset.matrixInited) return;
      btn.dataset.matrixInited = 'true';

      var textNode = btn.querySelector('[data-customizer="cs_cta_btn_text"]') || Array.from(btn.childNodes).find(function(n) { return n.nodeType === 3 && n.textContent.trim().length > 0; }) || btn;
      var originalText = textNode.textContent.trim();
      var scrambleInterval = null;

      btn.addEventListener('mouseenter', function() {
        var iteration = 0;
        clearInterval(scrambleInterval);

        scrambleInterval = setInterval(function() {
          textNode.textContent = originalText.split('')
            .map(function(char, index) {
              if (char === ' ' || index < iteration) return originalText[index];
              return srvMatrixChars[Math.floor(Math.random() * srvMatrixChars.length)];
            })
            .join('');

          if (iteration >= originalText.length) {
            clearInterval(scrambleInterval);
            textNode.textContent = originalText;
          }
          iteration += 1 / 2;
        }, 25);
      });

      btn.addEventListener('mouseleave', function() {
        clearInterval(scrambleInterval);
        textNode.textContent = originalText;
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', setup);
  } else {
    setup();
  }
})();
</script>
