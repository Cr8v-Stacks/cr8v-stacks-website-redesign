<?php
/**
 * CR8V Stacks — home.php
 * Main Blog Posts Index Page Template — 100% exact parity with blog.html prototype.
 * Includes interactive category popovers, subcategory indents, 3x3 post grid capacity, date DESC ordering, and ambient mesh gradient non-image fallback cards.
 */

defined('ABSPATH') || exit;

get_header('blog');

$eyebrow = cr8v_mod('blog_eyebrow', '// TECHNICAL JOURNAL');
$title = cr8v_mod('blog_h1', 'ENGINEERING & DESIGN INSIGHTS');
$subtitle = cr8v_mod('blog_subtitle', 'Technical breakdowns, platform engineering guides, and custom plugin case studies from our core team.');
?>

<style>
:root {
  --c8-paper-bg: #FAFAF7;
  --c8-paper-card: #FFFFFF;
  --c8-ink: #080808;
  --c8-sub: #555555;
  --c8-grid-line: rgba(8, 8, 8, 0.14);
  --c8-blue: #0047E1;
  --c8-blue-hi: #3D6BFF;
  --font-body: 'DM Sans', sans-serif;
  --font-mono: 'Space Mono', monospace;
  --font-heading: 'Michroma', sans-serif;
}

.card-fallback-canvas, .card-fallback-canvas *, .fallback-title, .fallback-cat, .card-title, .card-title a, .art-author-name, .art-author-bio, .art-author-link, .art-back-btn, .cta-card-btn, .art-meta-author-link {
    text-decoration: none !important;
    border-bottom: none !important;
}

.blog-hero-outer {
  width: 100%;
  border-bottom: 1px solid var(--c8-grid-line);
  background: var(--c8-paper-card);
  padding: 8.5rem 3.5rem 4rem 3.5rem;
  box-sizing: border-box;
}

.blog-hero-inner {
  max-width: 1440px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr auto;
  gap: 3rem;
  align-items: center;
}

.blog-hero-visual {
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog-hero-visual video {
  width: 340px;
  max-width: 100%;
  height: auto;
  display: block;
  background: transparent;
}

@media (max-width: 768px) {
  .blog-hero-inner {
    grid-template-columns: 1fr;
    gap: 1.25rem;
  }
  .blog-hero-visual {
    justify-content: flex-start;
    overflow: visible !important;
  }
  .blog-hero-visual video {
    width: 280px !important;
    height: 110px !important;
    object-fit: contain !important;
    object-position: left center !important;
    transform: scale(1.35) !important;
    transform-origin: left center !important;
    margin: 1.25rem auto 0 0 !important;
  }
}

.blog-eyebrow {
  font-family: var(--font-mono);
  font-size: 0.8rem;
  color: var(--c8-blue);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  font-weight: 700;
  margin-bottom: 0.75rem;
}

.blog-h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--c8-ink);
  text-transform: uppercase;
  line-height: 1.15;
  margin-bottom: 1rem;
  letter-spacing: -0.01em;
}

.blog-sub {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: var(--c8-sub);
  line-height: 1.6;
  max-width: 720px;
  margin-bottom: 0;
}

/* ── 3x3 GRID FRAME DESIGN SYSTEM ── */
.blog-grid-section {
  padding: 4rem 3.5rem 6rem 3.5rem;
  background: var(--c8-paper-bg);
}

.blog-grid-frame {
  max-width: 1360px;
  margin: 0 auto 4rem auto;
  background: var(--c8-paper-card);
  border: 1px solid var(--c8-grid-line);
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
  gap: 0 !important;
}

.blog-grid-card {
  border-right: 1px solid var(--c8-grid-line) !important;
  border-bottom: 1px solid var(--c8-grid-line) !important;
  border-left: none !important;
  border-top: none !important;
  border-radius: 0 !important;
  box-shadow: none !important;
  padding: 1.8rem 1.6rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: background 0.2s ease;
  transform: none !important;
}
.blog-grid-card:nth-child(3n) { border-right: none !important; }

.blog-grid-card:hover {
  background: #FAFAF7 !important;
  transform: none !important;
  border-color: var(--c8-grid-line) !important;
  box-shadow: none !important;
}

.card-top-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.85rem;
}

.card-date {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--c8-sub);
  text-transform: uppercase;
}

.card-category-pill {
  font-family: var(--font-mono);
  font-size: 0.65rem;
  font-weight: 700;
  text-transform: uppercase;
  color: var(--c8-ink);
  border: 1px solid rgba(8, 8, 8, 0.3);
  border-radius: 4px !important;
  padding: 3px 9px;
  text-decoration: none;
  transition: border-color 0.2s ease, color 0.2s ease;
}
.card-category-pill:hover { border-color: var(--c8-blue); color: var(--c8-blue); }

.cat-popover-dropdown {
  position: absolute; top: 100%; right: 0; z-index: 100;
  background: #080808; border: 1px solid rgba(255,255,255,0.2); border-radius: 4px !important;
  padding: 0.75rem; min-width: 190px; box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  opacity: 0; visibility: hidden; transform: translateY(4px);
  transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
  pointer-events: none; margin-top: 6px;
}
.cat-popover-dropdown.is-open {
  opacity: 1 !important; visibility: visible !important; transform: translateY(0) !important; pointer-events: auto !important;
}

.card-img-container {
  aspect-ratio: 16 / 10;
  width: 100%;
  border-radius: 2px !important;
  overflow: hidden;
  border: 1px solid var(--c8-grid-line);
  margin-bottom: 1.1rem;
  position: relative;
  background: transparent !important;
}

.art-cat-pill, .card-category-pill {
  text-decoration: none !important;
}

.card-fallback-canvas, .card-fallback-canvas *, .fallback-title, .fallback-cat, .card-title, .card-title a, .art-author-name, .art-author-bio, .art-author-link, .art-back-btn, .cta-card-btn, .art-meta-author-link {
  text-decoration: none !important;
  border-bottom: none !important;
}

.card-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.35s ease;
}
.blog-grid-card:hover .card-img { transform: scale(1.03); }

/* ── SYSTEM 1: HIGH-CONTRAST CHIAROSCURO SILHOUETTE & SHADOW BEAMS (3-COLOR ROTATION) ── */
.card-fallback-canvas {
  width: 100%; height: 100%; min-height: 200px;
  border-radius: 4px !important;
  padding: 1.4rem 1.25rem;
  display: flex; flex-direction: column;
  align-items: center; justify-content: space-between;
  text-align: center;
  position: relative; overflow: hidden;
  box-sizing: border-box;
  background: #080808;
  border: 1px solid rgba(255, 255, 255, 0.12);
  transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}
.card-fallback-canvas::before {
  content: '';
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 1;
}
.card-fallback-canvas::after {
  content: '';
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 1;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140' viewBox='0 0 140 140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='140' height='140' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
}

/* ── COLOR 1: COBALT / ROYAL BLUE (#0047E1) ── */
.card-fallback-canvas.is-variant-cobalt,
.card-fallback-canvas.is-variant-a,
.card-fallback-canvas.is-dark {
  background: linear-gradient(135deg, rgba(0, 71, 225, 0.40) 0%, rgba(0, 71, 225, 0.08) 35%, #080808 70%), #080808;
}
.card-fallback-canvas.is-variant-cobalt::before,
.card-fallback-canvas.is-variant-a::before,
.card-fallback-canvas.is-dark::before {
  background: linear-gradient(45deg, transparent 32%, rgba(255, 255, 255, 0.07) 48%, rgba(0, 71, 225, 0.25) 50%, rgba(255, 255, 255, 0.07) 52%, transparent 68%);
}
.card-fallback-canvas.is-variant-cobalt .fallback-cat,
.card-fallback-canvas.is-variant-a .fallback-cat,
.card-fallback-canvas.is-dark .fallback-cat {
  background: rgba(0, 71, 225, 0.25); border: 1px solid rgba(0, 71, 225, 0.5); color: #FAFAF7;
}
.card-fallback-canvas.is-variant-cobalt .fallback-brand-icon,
.card-fallback-canvas.is-variant-a .fallback-brand-icon,
.card-fallback-canvas.is-dark .fallback-brand-icon {
  color: #0047E1;
}
.card-fallback-canvas.is-variant-cobalt .fallback-foot::before,
.card-fallback-canvas.is-variant-a .fallback-foot::before,
.card-fallback-canvas.is-dark .fallback-foot::before {
  content: '—'; color: #0047E1; font-weight: 700;
}
.card-fallback-canvas.is-variant-cobalt:hover,
.card-fallback-canvas.is-variant-a:hover,
.card-fallback-canvas.is-dark:hover {
  border-color: #0047E1;
  box-shadow: 0 12px 30px rgba(0, 71, 225, 0.22);
}

/* ── COLOR 2: CRIMSON / FLAME RED (#E20025) ── */
.card-fallback-canvas.is-variant-crimson {
  background: linear-gradient(135deg, rgba(226, 0, 37, 0.38) 0%, rgba(226, 0, 37, 0.08) 35%, #080808 70%), #080808;
}
.card-fallback-canvas.is-variant-crimson::before {
  background: linear-gradient(45deg, transparent 32%, rgba(255, 255, 255, 0.07) 48%, rgba(226, 0, 37, 0.25) 50%, rgba(255, 255, 255, 0.07) 52%, transparent 68%);
}
.card-fallback-canvas.is-variant-crimson .fallback-cat {
  background: rgba(226, 0, 37, 0.25); border: 1px solid rgba(226, 0, 37, 0.5); color: #FAFAF7;
}
.card-fallback-canvas.is-variant-crimson .fallback-brand-icon {
  color: #E20025;
}
.card-fallback-canvas.is-variant-crimson .fallback-foot::before {
  content: '—'; color: #E20025; font-weight: 700;
}
.card-fallback-canvas.is-variant-crimson:hover {
  border-color: #E20025;
  box-shadow: 0 12px 30px rgba(226, 0, 37, 0.22);
}

/* ── COLOR 3: AMBER / GOLD (#FFB800) ── */
.card-fallback-canvas.is-variant-amber,
.card-fallback-canvas.is-variant-b,
.card-fallback-canvas.is-light {
  background: linear-gradient(135deg, rgba(255, 184, 0, 0.35) 0%, rgba(255, 184, 0, 0.07) 35%, #080808 70%), #080808;
}
.card-fallback-canvas.is-variant-amber::before,
.card-fallback-canvas.is-variant-b::before,
.card-fallback-canvas.is-light::before {
  background: linear-gradient(45deg, transparent 32%, rgba(255, 255, 255, 0.07) 48%, rgba(255, 184, 0, 0.22) 50%, rgba(255, 255, 255, 0.07) 52%, transparent 68%);
}
.card-fallback-canvas.is-variant-amber .fallback-cat,
.card-fallback-canvas.is-variant-b .fallback-cat,
.card-fallback-canvas.is-light .fallback-cat {
  background: rgba(255, 184, 0, 0.22); border: 1px solid rgba(255, 184, 0, 0.45); color: #FAFAF7;
}
.card-fallback-canvas.is-variant-amber .fallback-brand-icon,
.card-fallback-canvas.is-variant-b .fallback-brand-icon,
.card-fallback-canvas.is-light .fallback-brand-icon {
  color: #FFB800;
}
.card-fallback-canvas.is-variant-amber .fallback-foot::before,
.card-fallback-canvas.is-variant-b .fallback-foot::before,
.card-fallback-canvas.is-light .fallback-foot::before {
  content: '—'; color: #FFB800; font-weight: 700;
}
.card-fallback-canvas.is-variant-amber:hover,
.card-fallback-canvas.is-variant-b:hover,
.card-fallback-canvas.is-light:hover {
  border-color: #FFB800;
  box-shadow: 0 12px 30px rgba(255, 184, 0, 0.22);
}

.card-fallback-canvas .fallback-top {
  position: relative; z-index: 2; width: 100%;
  display: flex; align-items: center; justify-content: flex-end;
}
.card-fallback-canvas .fallback-brand-icon {
  width: 18px; height: 18px; stroke-width: 2.2;
}

.card-fallback-canvas .fallback-center {
  position: relative; z-index: 2; padding: 0.6rem 0;
}
.card-fallback-canvas .fallback-title {
  font-family: var(--font-heading); font-size: 0.88rem; font-weight: 700;
  color: #FAFAF7; text-transform: uppercase; line-height: 1.35;
  letter-spacing: 0.02em; margin: 0 auto;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
}

.card-fallback-canvas .fallback-foot {
  position: relative; z-index: 2; width: 100%;
  font-family: var(--font-mono); font-size: 7.5px; font-weight: 700;
  color: rgba(250, 250, 247, 0.45); letter-spacing: 0.25em; text-transform: uppercase;
  display: flex; align-items: center; justify-content: center; gap: 6px;
}

.card-title { font-family: var(--font-heading) !important; font-size: 0.95rem !important; font-weight: 700; color: var(--c8-ink); line-height: 1.4; text-transform: uppercase; margin: 0; }
.card-title a { color: inherit; text-decoration: none; transition: color 0.2s ease; }
.card-title a:hover { color: var(--c8-blue); }

.blog-pagination-wrapper {
  max-width: 1440px;
  margin: 3.5rem auto 0 auto;
  display: flex;
  justify-content: center;
  gap: 0.5rem;
}

.page-numbers {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 40px;
  height: 40px;
  padding: 0 14px;
  border: 1px solid var(--c8-grid-line);
  background: var(--c8-paper-card);
  color: var(--c8-ink);
  font-family: var(--font-mono);
  font-size: 0.8rem;
  font-weight: 700;
  border-radius: 4px !important;
  text-decoration: none;
  transition: all 0.2s ease;
}
.page-numbers.current, .page-numbers:hover {
  background: var(--c8-blue);
  color: #FFFFFF;
  border-color: var(--c8-blue);
}

@media (max-width: 1100px) {
  .blog-grid-frame { grid-template-columns: repeat(2, 1fr); }
  .blog-hero-outer, .blog-grid-section { padding-left: 1.5rem; padding-right: 1.5rem; }
}
@media (max-width: 700px) {
  .blog-grid-frame { grid-template-columns: 1fr; }
  .blog-hero-outer { padding-top: 6.5rem; }
}
</style>

<!-- BLOG HERO SECTION -->
<section class="blog-hero-outer">
  <div class="blog-hero-inner">
    <div class="blog-hero-content">
      <div class="blog-eyebrow" data-customizer="blog_eyebrow"><?php echo esc_html($eyebrow); ?></div>
      <h1 class="blog-h1" data-customizer="blog_h1"><?php echo esc_html($title); ?></h1>
      <p class="blog-sub" data-customizer="blog_subtitle"><?php echo esc_html($subtitle); ?></p>
    </div>
    <div class="blog-hero-visual">
      <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback poster="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_poster.webp'); ?>">
        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.webm'); ?>" type="video/webm">
      </video>
    </div>
  </div>
</section>

<!-- BLOG 3x3 GRID SECTION -->
<main class="blog-grid-section">
  <div class="blog-grid-frame">
    <?php
    $post_idx = 0;
    if (have_posts()) :
      while (have_posts()) : the_post();
        $post_idx++;
        $raw_cats = get_the_category();
        $cats = cr8v_sort_categories_hierarchically($raw_cats);
        $primary_cat = $cats ? $cats[0]->name : 'RESOURCE';
        $has_thumb = has_post_thumbnail();
    ?>
      <article class="blog-grid-card">
        <div>
          <div class="card-top-meta">
            <span class="card-date"><?php echo get_the_date('F j, Y'); ?></span>
            <div style="display: flex; align-items: center; gap: 0.35rem;">
              <a href="<?php echo esc_url($cats ? get_category_link($cats[0]->term_id) : '#'); ?>" class="card-category-pill"><?php echo esc_html($primary_cat); ?></a>
              <?php if (count($cats) > 1) : ?>
              <div class="cat-dropdown-wrapper" style="position: relative; display: inline-flex; align-items: center;">
                <button class="art-cat-pill" onclick="toggleCatPopover(event, 'bcat-<?php echo $post_idx; ?>')" style="cursor: pointer; background: #0047E1; color: #FFFFFF; border: none; display: inline-flex; align-items: center; gap: 3px; padding: 2px 7px; font-size: 0.72rem; font-weight: 700; font-family: var(--font-mono); border-radius: 4px !important;">
                  +<?php echo (count($cats) - 1); ?> <svg class="cat-dropdown-arrow" viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2.5" fill="none" style="transition: transform 0.25s ease;"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div id="bcat-<?php echo $post_idx; ?>" class="cat-popover-dropdown">
                  <div style="font-family: var(--font-mono); font-size: 8.5px; color: #7C93FF; text-transform: uppercase; margin-bottom: 0.4rem; letter-spacing: 0.1em; font-weight: 700;">MORE CATEGORIES</div>
                  <?php for ($i = 1; $i < count($cats); $i++) :
                    $is_subcat = ($cats[$i]->parent != 0);
                    $prefix = $is_subcat ? '↳ ' : '';
                    $style = $is_subcat ? 'padding-left: 10px; color: #A0B4FF; font-size: 9.5px;' : 'color: #FAFAF7; font-size: 10px;';
                  ?>
                  <a href="<?php echo esc_url(get_category_link($cats[$i]->term_id)); ?>" style="display: block; font-family: var(--font-mono); text-decoration: none; padding: 4px 0; border-bottom: 1px solid rgba(255,255,255,0.1); <?php echo $style; ?>"><?php echo esc_html($prefix . $cats[$i]->name); ?></a>
                  <?php endfor; ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="card-img-container">
            <a href="<?php the_permalink(); ?>" style="display: block; width: 100%; height: 100%;">
              <?php if ($has_thumb) : ?>
                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="card-img">
              <?php else :
                $c_mod = $post_idx % 3;
                $variant_class = ($c_mod === 0) ? 'is-variant-cobalt' : (($c_mod === 1) ? 'is-variant-crimson' : 'is-variant-amber');
              ?>
                <div class="card-fallback-canvas <?php echo $variant_class; ?>">
                  <div class="fallback-top">
                    <svg class="fallback-brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                  </div>
                  <div class="fallback-center">
                    <div class="fallback-title"><?php the_title(); ?></div>
                  </div>
                  <div class="fallback-foot">
                    <span>CR8V STACKS EDITORIAL</span>
                  </div>
                </div>
              <?php endif; ?>
            </a>
          </div>
          <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
      </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>

  <!-- PAGINATION -->
  <div class="blog-pagination-wrapper">
    <?php
    echo paginate_links([
        'prev_text' => '← Prev',
        'next_text' => 'Next →',
        'type'      => 'plain',
    ]);
    ?>
  </div>
</main>

<script>
function toggleCatPopover(e, id) {
  e.stopPropagation();
  e.preventDefault();
  var el = document.getElementById(id);
  if (!el) return;
  var isOpen = el.classList.contains('is-open');
  document.querySelectorAll('.cat-popover-dropdown').forEach(function(d) {
    d.classList.remove('is-open');
  });
  if (!isOpen) {
    el.classList.add('is-open');
  }
}
document.addEventListener('click', function() {
  document.querySelectorAll('.cat-popover-dropdown').forEach(function(d) {
    d.classList.remove('is-open');
  });
});
</script>

<!-- BOTTOM DISCOVERY CTA SECTION -->
<?php get_template_part('parts/prototype-cta'); ?>

<?php get_footer(); ?>
