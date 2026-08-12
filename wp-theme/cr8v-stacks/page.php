<?php
/**
 * CR8V Stacks — page.php
 * Generic Default Page Template for any custom page created in WP Admin.
 * 100% Agency design system parity with hero banner, high-contrast typography, and Discovery CTA section.
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
:root {
  --c8-paper-bg: #F9F9F8;
  --c8-paper-card: #FFFFFF;
  --c8-ink: #080808;
  --c8-sub: #555555;
  --c8-grid-line: rgba(8, 8, 8, 0.14);
  --c8-blue: #0047E1;
  --font-body: 'DM Sans', sans-serif;
  --font-mono: 'Space Mono', monospace;
  --font-heading: 'Michroma', sans-serif;
}

.c8-gen-page-frame {
  width: 100% !important;
  max-width: 100% !important;
  margin: 0 !important;
  background: var(--c8-paper-bg);
  padding: 8.5rem 3.5rem 5rem 3.5rem;
  min-height: 100vh;
  box-sizing: border-box;
}

.c8-gen-header { max-width: 1200px; margin: 0 auto 3rem auto; }
.c8-gen-eyebrow { font-family: var(--font-mono); font-size: 0.75rem; color: var(--c8-blue); text-transform: uppercase; letter-spacing: 0.14em; font-weight: 700; margin-bottom: 0.5rem; }
.c8-gen-eyebrow::before { content: '// '; }
.c8-gen-h1 { font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.4rem) !important; font-weight: 700; color: var(--c8-ink); letter-spacing: 0.01em; text-transform: uppercase; margin-bottom: 0.65rem; }

.c8-gen-body-card {
  max-width: 1200px; margin: 0 auto 4rem auto;
  background: var(--c8-paper-card);
  border: 1px solid var(--c8-grid-line);
  border-radius: 4px !important;
  padding: 3.5rem 4rem;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
}

.art-body-text p { font-size: 1.02rem; line-height: 1.75; color: #222222; margin-bottom: 1.6rem; font-weight: 400; }
.art-body-text h1 { font-family: var(--font-heading); font-size: 1.6rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 2.5rem; margin-bottom: 1rem; }
.art-body-text h2 { font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 2.25rem; margin-bottom: 1rem; }
.art-body-text h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 1.75rem; margin-bottom: 0.75rem; }
.art-body-text ul, .art-body-text ol { margin: 1.25rem 0 1.75rem 1.75rem; }
.art-body-text li { font-size: 1rem; line-height: 1.65; color: #222222; margin-bottom: 0.5rem; }
.art-body-text a { color: var(--c8-blue); text-decoration: none; border-bottom: 1px solid var(--c8-blue); }
.art-body-text a:hover { color: #3D6BFF; }

.blog-cta-section {
  max-width: 1200px; margin: 0 auto; text-align: center; padding: 5rem 0 3rem 0;
  border-top: 1px solid var(--c8-grid-line) !important;
}
.blog-cta-inner { max-width: 760px; margin: 0 auto; }
.cta-eyebrow { font-family: var(--font-mono); font-size: 0.72rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--c8-blue); margin-bottom: 0.75rem; font-weight: 700; }
.cta-h2 { font-family: var(--font-heading); font-size: clamp(1.4rem, 2.5vw, 1.8rem); font-weight: 700; text-transform: uppercase; line-height: 1.25; margin-bottom: 0.85rem; color: var(--c8-ink); }
.cta-sub { font-size: 0.9rem; color: var(--c8-sub); line-height: 1.6; margin-bottom: 2rem; }

@media (max-width: 860px) {
  .c8-gen-page-frame { padding: 6.5rem 1.25rem 3.5rem 1.25rem; }
  .c8-gen-body-card { padding: 2rem 1.25rem; }
}
</style>

<main class="c8-gen-page-frame">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <header class="c8-gen-header">
      <div class="c8-gen-eyebrow">PAGE</div>
      <h1 class="c8-gen-h1"><?php the_title(); ?></h1>
    </header>

    <article class="c8-gen-body-card art-body-text">
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; ?>

  <section class="blog-cta-section">
    <div class="blog-cta-inner">
      <div class="cta-eyebrow">↳ READY TO SCALE YOUR PLATFORM?</div>
      <h2 class="cta-h2">Book A Discovery Call</h2>
      <p class="cta-sub">Speak directly with our technical architecture team to scope your custom website build, WooCommerce system, or AI platform integration.</p>
      
      <div class="cta-embed-box">
        <?php echo do_shortcode('[sb_booking_form]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
