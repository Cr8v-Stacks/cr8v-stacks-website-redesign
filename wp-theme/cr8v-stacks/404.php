<?php
/**
 * CR8V Stacks — 404.php
 * Error 404 Page — 100% parity with 404.html prototype.
 * Plain white background, bigger uncontained free mascot video, no button shadows, 2 buttons with Matrix scramble animation.
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
:root {
  --ink: #080808;
  --paper: #FFFFFF;
  --blue: #0047E1;
  --blue-mid: #0038C0;
  --gray: #555555;
  --line: rgba(8, 8, 8, 0.14);
  --font-heading: 'Michroma', sans-serif;
  --font-mono: 'Space Mono', monospace;
  --font-body: 'DM Sans', sans-serif;
  --font-display: 'Bebas Neue', sans-serif;
}

body { background: #FFFFFF !important; }

.err-hero-container {
  width: 100%;
  padding: 8.5rem 3.5rem 5rem 3.5rem;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  min-height: calc(100vh - 68px);
  position: relative;
  overflow: hidden;
}

.err-content-col {
  position: relative;
  z-index: 2;
  padding: 3.5rem 4rem;
  max-width: 640px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.err-eyebrow {
  font-family: var(--font-mono); font-size: 0.82rem; color: #7C93FF;
  letter-spacing: 0.22em; text-transform: uppercase; font-weight: 700;
  margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;
}
.err-eyebrow::before { content: '// '; color: #3D6BFF; }

.err-big-num {
  font-family: var(--font-display); font-size: clamp(8rem, 18vw, 15rem);
  line-height: 0.82; font-weight: 700; color: #FFFFFF; letter-spacing: 0.02em;
  margin-bottom: 0.85rem; text-shadow: none !important;
}

.err-h1-title {
  font-family: var(--font-heading); font-size: clamp(1.6rem, 3.2vw, 2.5rem);
  font-weight: 700; color: #FFFFFF; text-transform: uppercase; line-height: 1.2;
  margin-bottom: 1.25rem; letter-spacing: 0.02em; text-shadow: none !important;
}

.err-subtitle {
  font-family: var(--font-body); font-size: 1.05rem; color: rgba(255, 255, 255, 0.85);
  line-height: 1.65; max-width: 580px; margin-bottom: 2.75rem; font-weight: 400;
}

.err-btn-group { display: flex; align-items: center; gap: 1.25rem; flex-wrap: wrap; }

.c8-matrix-btn-blue {
  background: var(--blue); color: #FFFFFF !important; font-family: var(--font-mono);
  font-size: 0.85rem; font-weight: 700; padding: 1.1rem 2.25rem; border-radius: 4px !important;
  text-decoration: none; text-transform: uppercase; letter-spacing: 0.1em;
  position: relative; overflow: hidden; border: none; cursor: pointer;
  display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem;
  transition: background 0.25s ease, transform 0.25s ease; box-shadow: none !important;
}
.c8-matrix-btn-blue::before {
  content: ''; position: absolute; top: -50%; left: -100%; width: 100%; height: 200%;
  background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), transparent);
  transform: rotate(25deg); transition: left 0.75s ease; pointer-events: none;
}
.c8-matrix-btn-blue:hover::before { left: 150%; }
.c8-matrix-btn-blue:hover { background: var(--blue-mid); transform: translateY(-2px); }

.c8-matrix-btn-dark {
  background: var(--ink); color: #FFFFFF !important; font-family: var(--font-mono);
  font-size: 0.85rem; font-weight: 700; padding: 1.1rem 2.25rem; border-radius: 4px !important;
  text-decoration: none; text-transform: uppercase; letter-spacing: 0.1em;
  display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem;
  transition: background 0.25s ease, transform 0.25s ease; cursor: pointer;
  box-shadow: none !important; border: 1px solid rgba(255, 255, 255, 0.25);
}
.c8-matrix-btn-dark:hover { background: #222222; transform: translateY(-2px); }

@media (max-width: 1024px) {
  .err-hero-container { padding: 7rem 2rem 4rem 2rem; justify-content: center; text-align: center; }
  .err-content-col { align-items: center; padding: 2rem 1rem; }
}
@media (max-width: 640px) {
  .err-hero-container { padding: 6rem 1.25rem 3.5rem 1.25rem; }
  .err-big-num { font-size: 7rem; }
  .err-h1-title { font-size: 1.4rem; }
  .err-btn-group { flex-direction: column; width: 100%; }
  .c8-matrix-btn-blue, .c8-matrix-btn-dark { width: 100%; }
}
</style>

<main class="err-hero-container">

  <!-- Ambient Error Background Video (Full Width, 100% Opacity) -->
  <video class="err-bg-video" autoplay loop muted playsinline style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 1; pointer-events: none;">
    <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/error_bg.webm'); ?>" type="video/webm">
    <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/error_bg.mp4'); ?>" type="video/mp4">
  </video>
  
  <div class="err-content-col">
    <div class="err-eyebrow">SYSTEM BLUEPRINT EXCEPTION</div>
    <div class="err-big-num">404</div>
    <h1 class="err-h1-title">BLUEPRINT NOT FOUND</h1>
    <p class="err-subtitle">The requested URL route does not exist in our platform architecture. It may have been moved, renamed, or temporarily taken offline for liquid performance updates.</p>

    <div class="err-btn-group">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c8-matrix-btn-blue">Return to Homepage →</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c8-matrix-btn-dark">Contact Support</a>
    </div>
  </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var matrixBtns = document.querySelectorAll('.c8-matrix-btn-blue, .c8-matrix-btn-dark');
  var matrixChars = '!@#$%^&*()_+-=[]{}|;:,.<>?/0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  matrixBtns.forEach(function(btn) {
    var originalText = btn.innerText.trim();
    var scrambleInterval = null;

    btn.addEventListener('mouseenter', function() {
      var iteration = 0;
      clearInterval(scrambleInterval);

      scrambleInterval = setInterval(function() {
        btn.innerText = originalText.split('')
          .map(function(char, index) {
            if (char === ' ' || index < iteration) return originalText[index];
            return matrixChars[Math.floor(Math.random() * matrixChars.length)];
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
      btn.innerText = originalText;
    });
  });
});
</script>

<?php get_footer(); ?>
