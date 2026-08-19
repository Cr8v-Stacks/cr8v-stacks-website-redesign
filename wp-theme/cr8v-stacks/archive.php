<?php
/**
 * CR8V Stacks — archive.php
 * Category & Tag Archive Template — 100% exact parity with blog-archive.html prototype.
 * Includes category title headers, subcategory popover dropdowns, 3x3 post grid, date DESC ordering, and ambient mesh gradient non-image fallback cards.
 */

defined('ABSPATH') || exit;

get_header('blog');

$term = get_queried_object();
$archive_title = single_term_title('', false);
$archive_desc = get_the_archive_description();
$is_cat = is_category();
$is_tag = is_tag();
?>

<style>
:root {
  --c8-paper-bg: #F9F9F8;
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

.archive-outer-frame {
  width: 100% !important;
  max-width: 1360px !important;
  margin: 0 auto !important;
  background: var(--c8-paper-card);
  border: 1px solid var(--c8-grid-line);
  padding-top: 6.5rem;
  min-height: 100vh;
  box-sizing: border-box;
}

.archive-hero {
  padding: 3.5rem 4rem;
  border-bottom: 1px solid var(--c8-grid-line);
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 3rem;
}

.archive-hero-content {
  flex: 1;
  min-width: 280px;
}

.archive-hero-visual {
  display: flex;
  align-items: center;
  justify-content: center;
}

.archive-hero-visual video {
  width: 320px;
  max-width: 100%;
  height: auto;
  display: block;
  background: transparent;
}

@media (max-width: 768px) {
  .archive-hero {
    flex-direction: column;
    align-items: flex-start;
    gap: 1.25rem;
  }
  .archive-hero-visual {
    justify-content: flex-start;
    width: 100%;
    overflow: visible !important;
  }
  .archive-hero-visual video {
    width: 280px !important;
    height: 110px !important;
    object-fit: contain !important;
    object-position: left center !important;
    transform: scale(1.35) !important;
    transform-origin: left center !important;
    margin: 1.25rem auto 0 0 !important;
  }
}

.archive-eyebrow {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--c8-blue);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  font-weight: 700;
  margin-bottom: 0.75rem;
}

.archive-h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  color: var(--c8-ink);
  text-transform: uppercase;
  line-height: 1.15;
  margin-bottom: 0.75rem;
}

.archive-sub {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: var(--c8-sub);
  line-height: 1.6;
  max-width: 680px;
}

/* 3x3 GRID FRAME DESIGN */
.archive-grid-frame {
  max-width: 1360px; margin: 0 auto 4rem auto;
  background: var(--c8-paper-card);
  border: 1px solid var(--c8-grid-line);
  border-radius: 4px !important;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
  overflow: hidden;
}

.blog-grid-card {
  border-right: 1px solid var(--c8-grid-line);
  border-bottom: 1px solid var(--c8-grid-line);
  padding: 1.8rem 1.6rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: background 0.2s ease;
}
.blog-grid-card:nth-child(3n) { border-right: none; }
.blog-grid-card:hover { background: #FAFAF7; }

.card-top-meta { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; }
.card-date { font-family: var(--font-mono); font-size: 0.7rem; color: #8A8A8A; font-weight: 400; }
.card-category-pill, .art-cat-pill {
  font-family: var(--font-mono); font-size: 0.62rem; font-weight: 700; text-transform: uppercase;
  color: var(--c8-ink); border: 1px solid rgba(8, 8, 8, 0.3); border-radius: 4px !important;
  padding: 0.2rem 0.65rem; letter-spacing: 0.05em; text-decoration: none;
}

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
  border-radius: 2px !important;
  overflow: hidden;
  background: transparent !important;
  margin-bottom: 1rem;
  border: 1px solid var(--c8-grid-line) !important;
  position: relative;
}
.card-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; display: block; }
.blog-grid-card:hover .card-img { transform: scale(1.03); }

.art-cat-pill, .card-category-pill {
  text-decoration: none !important;
}

.card-fallback-canvas, .card-fallback-canvas *, .fallback-title, .fallback-cat, .card-title, .card-title a, .art-author-name, .art-author-bio, .art-author-link, .art-back-btn, .cta-card-btn, .art-meta-author-link {
  text-decoration: none !important;
  border-bottom: none !important;
}

.blog-pagination-wrapper {
  max-width: 1360px;
  margin: 3.5rem auto 4rem auto;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
  font-family: var(--font-mono);
}

.page-numbers,
.blog-pagination-wrapper a,
.blog-pagination-wrapper span {
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
  text-decoration: none !important;
  transition: all 0.2s ease;
}

.page-numbers.current, .page-numbers:hover,
.blog-pagination-wrapper span.current,
.blog-pagination-wrapper a:hover {
  background: var(--c8-blue);
  color: #FFFFFF !important;
  border-color: var(--c8-blue);
}

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
  display: flex; align-items: center; justify-content: space-between;
}
.card-fallback-canvas .fallback-cat {
  font-family: var(--font-mono); font-size: 8px; font-weight: 700;
  letter-spacing: 0.2em; text-transform: uppercase;
  padding: 3px 8px; border-radius: 4px;
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
.card-title a { color: inherit; text-decoration: none; }
.card-title a:hover { color: var(--c8-blue); }

@media (max-width: 860px) {
  .archive-outer-frame { padding-top: 2rem; }
  .archive-grid-frame { grid-template-columns: 1fr; }
  .blog-grid-card { border-right: none; }
  .archive-hero { padding: 2rem 1.25rem; }
}
</style>

<main class="archive-outer-frame">
  
  <header class="archive-hero">
    <div class="archive-hero-content">
      <div class="archive-eyebrow">// CATEGORY ARCHIVE</div>
      <h1 class="archive-h1"><?php echo esc_html($archive_title); ?></h1>
      <?php if (!empty($archive_desc)) : ?>
        <div class="archive-sub"><?php echo wp_kses_post($archive_desc); ?></div>
      <?php else : ?>
        <div class="archive-sub">Curated technical breakdowns, case studies, and architecture insights published under <?php echo esc_html($archive_title); ?>.</div>
      <?php endif; ?>
    </div>
    <div class="archive-hero-visual">
      <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback poster="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim_poster.webp'); ?>">
        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.webm'); ?>" type="video/webm">
      </video>
    </div>
  </header>

  <div class="archive-grid-frame">
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
                <button class="art-cat-pill" onclick="toggleCatPopover(event, 'arcat-<?php echo $post_idx; ?>')" style="cursor: pointer; background: #0047E1; color: #FFFFFF; border: none; display: inline-flex; align-items: center; gap: 3px; padding: 2px 7px; font-size: 0.72rem; font-weight: 700; font-family: var(--font-mono); border-radius: 4px !important;">
                  +<?php echo (count($cats) - 1); ?> <svg class="cat-dropdown-arrow" viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2.5" fill="none" style="transition: transform 0.25s ease;"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div id="arcat-<?php echo $post_idx; ?>" class="cat-popover-dropdown">
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
                    <span class="fallback-cat"><?php echo esc_html($primary_cat); ?></span>
                    <svg class="fallback-brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                  </div>
                  <div class="fallback-center">
                    <div class="fallback-title"><?php the_title(); ?></div>
                  </div>
                  <div class="fallback-foot">
                    <span>CR8V STACKS ARCHIVE</span>
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
    else :
    ?>
      <div style="grid-column: 1 / -1; padding: 4rem 2rem; text-align: center; font-family: var(--font-body); color: var(--c8-sub);">
        <h3 style="font-family: var(--font-heading); font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--c8-ink);">NO ARTICLES PUBLISHED YET</h3>
        <p>No published articles found in <?php echo esc_html($archive_title); ?>.</p>
      </div>
    <?php endif; ?>
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
