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
  --c8-paper-bg: #FFFFFF;
  --c8-paper-card: #F2F2F0;
  --c8-ink: #080808;
  --c8-sub: #555555;
  --c8-grid-line: rgba(8, 8, 8, 0.08);
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

.art-body-text img { max-width: 100%; height: auto; border-radius: 4px; }
.art-body-text iframe, .art-body-text embed, .art-body-text video { max-width: 100%; }
.art-body-text table { width: 100%; border-collapse: collapse; margin-bottom: 1.5rem; }
.art-body-text th, .art-body-text td { padding: 0.75rem 1rem; border: 1px solid var(--c8-grid-line); }
.art-body-text th { background: rgba(8,8,8,0.04); font-family: var(--font-mono); font-size: 0.85rem; text-transform: uppercase; }

/* Universal Full-Width Booking Widget Support in Page Content */
.art-body-text iframe[src*="simplybook"],
.art-body-text iframe[id*="sb_"],
.art-body-text iframe[name*="sb_"],
.art-body-text .simplybook-widget,
.art-body-text #sb_widget_container,
.art-body-text .sb-widget-content {
  width: 100% !important;
  min-width: 100% !important;
  max-width: 100% !important;
  display: block !important;
  border: none !important;
  margin: 1.5rem auto !important;
  overflow: visible !important;
}

@media (max-width: 860px) {
  .c8-gen-page-frame { padding: 6.5rem 1.25rem 3.5rem 1.25rem; }
  .c8-gen-body-card { padding: 2rem 1.25rem; }
}
</style>

<?php
$raw_content = get_post_field('post_content', get_the_ID());
$is_raw_html = (
  strpos($raw_content, '<style') !== false ||
  strpos($raw_content, '<section') !== false ||
  strpos($raw_content, 'class="scene"') !== false ||
  strpos($raw_content, 'class="ctc-') !== false
);
?>

<?php if ($is_raw_html) : ?>
  <main class="c8-raw-page-canvas" style="width: 100%; min-height: 100vh; margin: 0; padding: 0; overflow-x: hidden;">
    <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
  </main>
<?php else : ?>
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
  </main>
<?php endif; ?>

<?php get_footer(); ?>
