<?php
/**
 * CR8V Stacks — 500.php
 * Server Exception / 500 Internal Error Page Template.
 * White paper background, uncontained free mascot video, high-visibility non-blending buttons, and Matrix scramble JS.
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
:root {
  --ink: #080808;
  --paper: #FAFAF7;
  --paper-card: #FFFFFF;
  --blue: #0047E1;
  --blue-mid: #0038C0;
  --blue-hi: #3D6BFF;
  --blue-glow: rgba(0, 71, 225, 0.15);
  --gray: #666666;
  --line: rgba(8, 8, 8, 0.14);
  --font-heading: 'Michroma', sans-serif;
  --font-mono: 'Space Mono', monospace;
  --font-body: 'DM Sans', sans-serif;
  --font-display: 'Bebas Neue', sans-serif;
}

.err-bg-glow {
  position: fixed; inset: 0;
  background: 
    radial-gradient(circle at 15% 15%, rgba(255,85,85,0.08) 0%, transparent 55%),
    radial-gradient(circle at 85% 85%, rgba(0,71,225,0.07) 0%, transparent 55%),
    linear-gradient(to right, rgba(8,8,8,0.06) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(8,8,8,0.06) 1px, transparent 1px);
  background-size: 100% 100%, 100% 100%, 60px 60px, 60px 60px;
  pointer-events: none; z-index: 0;
}
.err-bg-noise {
  position: fixed; inset: 0;
  background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 0.025 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  mix-blend-mode: multiply; pointer-events: none; z-index: 1;
}

.err-hero-container {
  position: relative; z-index: 5; width: 100%; max-width: 1400px; margin: 0 auto;
  padding: 8.5rem 3.5rem 5rem 3.5rem; display: grid; grid-template-columns: 1.1fr 0.9fr; align-items: center; gap: 4rem; min-height: calc(100vh - 100px);
}

.err-content-col { display: flex; flex-direction: column; align-items: flex-start; }
.err-eyebrow {
  font-family: var(--font-mono); font-size: 0.82rem; color: #FF3333;
  letter-spacing: 0.22em; text-transform: uppercase; font-weight: 700;
  margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;
}
.err-eyebrow::before { content: '// '; color: #CC0000; }

.err-big-num {
  font-family: var(--font-display); font-size: clamp(7.5rem, 17vw, 14rem);
  line-height: 0.82; font-weight: 700; color: var(--ink); letter-spacing: 0.02em;
  margin-bottom: 0.85rem; text-shadow: 0 8px 40px rgba(255,85,85,0.2);
}

.err-h1-title {
  font-family: var(--font-heading); font-size: clamp(1.6rem, 3.2vw, 2.5rem);
  font-weight: 700; color: var(--ink); text-transform: uppercase; line-height: 1.2;
  margin-bottom: 1.25rem; letter-spacing: 0.02em;
}

.err-subtitle {
  font-family: var(--font-body); font-size: 1.05rem; color: var(--gray);
  line-height: 1.65; max-width: 580px; margin-bottom: 2.75rem; font-weight: 400;
}

.err-btn-group { display: flex; align-items: center; gap: 1rem; flex-wrap: wrap; }

.c8-matrix-btn-blue {
  background: var(--blue); color: #FFFFFF !important; font-family: var(--font-mono);
  font-size: 0.85rem; font-weight: 700; padding: 1.1rem 2rem; border-radius: 4px !important;
  text-decoration: none; text-transform: uppercase; letter-spacing: 0.1em;
  position: relative; overflow: hidden; border: none; cursor: pointer;
  display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem;
  transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
  box-shadow: 0 4px 20px rgba(0, 71, 225, 0.35);
}
.c8-matrix-btn-blue:hover { background: var(--blue-mid); transform: translateY(-3px); box-shadow: 0 8px 30px rgba(0, 71, 225, 0.5); }

.c8-matrix-btn-dark {
  background: var(--ink); color: #FFFFFF !important; font-family: var(--font-mono);
  font-size: 0.85rem; font-weight: 700; padding: 1.1rem 2rem; border-radius: 4px !important;
  text-decoration: none; text-transform: uppercase; letter-spacing: 0.1em;
  display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem;
  transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
  cursor: pointer; box-shadow: 0 4px 16px rgba(8,8,8,0.2);
}
.c8-matrix-btn-dark:hover { background: #222222; transform: translateY(-3px); box-shadow: 0 8px 24px rgba(8,8,8,0.3); }

.err-mascot-col { display: flex; align-items: center; justify-content: center; position: relative; }
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
  .err-big-num { font-size: 6.5rem; }
  .err-h1-title { font-size: 1.4rem; }
  .err-btn-group { flex-direction: column; width: 100%; }
  .c8-matrix-btn-blue, .c8-matrix-btn-dark { width: 100%; }
}
</style>

<div class="err-bg-glow"></div>
<div class="err-bg-noise"></div>

<main class="err-hero-container">

  <!-- Ambient Error Background Video (Full Width, 100% Opacity) -->
  <video class="err-bg-video" autoplay loop muted playsinline style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 1; pointer-events: none;">
    <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/error_bg.webm'); ?>" type="video/webm">
    <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/error_bg.mp4'); ?>" type="video/mp4">
  </video>
  
  <div class="err-content-col">
    <div class="err-eyebrow">SERVER EXECUTION EXCEPTION</div>
    <div class="err-big-num">500</div>
    <h1 class="err-h1-title">INTERNAL SERVER ERROR</h1>
    <p class="err-subtitle">Our core system encountered an unexpected server exception while attempting to process your request. Our technical team has been notified.</p>

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
