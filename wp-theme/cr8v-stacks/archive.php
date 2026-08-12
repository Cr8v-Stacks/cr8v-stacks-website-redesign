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

.cat-dropdown-wrapper { position: relative; display: inline-flex; align-items: center; }
.cat-popover-dropdown {
  position: absolute; top: 100%; right: 0; z-index: 100;
  background: #080808; border: 1px solid rgba(255,255,255,0.2); border-radius: 4px !important;
  padding: 0.75rem; min-width: 200px; box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  opacity: 0; visibility: hidden; transform: translateY(4px);
  transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
  pointer-events: none; margin-top: 6px;
}
.cat-popover-dropdown.is-open {
  opacity: 1 !important; visibility: visible !important; transform: translateY(0) !important; pointer-events: auto !important;
}

.card-img-container {
  aspect-ratio: 16 / 10;
  border-radius: 4px !important;
  overflow: hidden;
  background: #FAFAF7;
  margin-bottom: 1rem;
  border: 1px solid var(--c8-grid-line) !important;
  position: relative;
}
.card-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; display: block; }
.blog-grid-card:hover .card-img { transform: scale(1.03); }

/* AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARDS */
.card-fallback-canvas {
  width: 100%; height: 100%; min-height: 190px;
  border-radius: 4px !important;
  padding: 1.6rem 1.4rem;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  text-align: center;
  position: relative; overflow: hidden;
  box-sizing: border-box;
}

.card-fallback-canvas.is-light {
  background: 
    radial-gradient(circle at 10% 90%, rgba(186, 230, 253, 0.9) 0%, transparent 60%),
    radial-gradient(circle at 90% 10%, rgba(221, 214, 254, 0.9) 0%, transparent 60%),
    linear-gradient(135deg, #F0F9FF 0%, #FFFFFF 50%, #F5F3FF 100%);
  color: #080808; border: 1px solid rgba(8, 8, 8, 0.08);
}
.card-fallback-canvas.is-light .fallback-brand-icon {
  width: 22px; height: 22px; color: #080808; margin-bottom: 0.9rem; stroke-width: 2.2;
}
.card-fallback-canvas.is-light .fallback-title {
  font-family: var(--font-heading); font-size: 0.9rem; font-weight: 700;
  color: #080808; text-transform: uppercase; line-height: 1.35;
  margin-bottom: 0.9rem; max-width: 90%; letter-spacing: -0.01em;
}
.card-fallback-canvas.is-light .fallback-cat {
  font-family: var(--font-mono); font-size: 0.62rem; font-weight: 700;
  color: #080808; letter-spacing: 0.14em; text-transform: uppercase;
}

.card-fallback-canvas.is-dark {
  background: 
    radial-gradient(circle at 90% 10%, rgba(99, 102, 241, 0.4) 0%, transparent 60%),
    radial-gradient(circle at 10% 90%, rgba(14, 165, 233, 0.3) 0%, transparent 60%),
    linear-gradient(135deg, #070A12 0%, #0F172A 50%, #1E1B4B 100%);
  color: #FFFFFF; border: 1px solid rgba(255, 255, 255, 0.1);
}
.card-fallback-canvas.is-dark .fallback-brand-icon {
  width: 22px; height: 22px; color: #FFFFFF; margin-bottom: 0.9rem; stroke-width: 2.2;
}
.card-fallback-canvas.is-dark .fallback-title {
  font-family: var(--font-heading); font-size: 0.9rem; font-weight: 700;
  color: #FFFFFF; text-transform: uppercase; line-height: 1.35;
  margin-bottom: 0.9rem; max-width: 90%; letter-spacing: -0.01em;
}
.card-fallback-canvas.is-dark .fallback-cat {
  font-family: var(--font-mono); font-size: 0.62rem; font-weight: 700;
  color: #A0B4FF; letter-spacing: 0.14em; text-transform: uppercase;
}

.card-title { font-family: var(--font-heading) !important; font-size: 0.8rem !important; font-weight: 700; color: var(--c8-ink); line-height: 1.4; text-transform: uppercase; margin: 0; }
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
  
  <header class="archive-hero" style="display: flex; align-items: center; justify-content: space-between; gap: 3rem; flex-wrap: wrap;">
    <div class="archive-hero-content" style="flex: 1; min-width: 280px;">
      <div class="archive-eyebrow">// CATEGORY ARCHIVE</div>
      <h1 class="archive-h1"><?php echo esc_html($archive_title); ?></h1>
      <?php if (!empty($archive_desc)) : ?>
        <div class="archive-sub"><?php echo wp_kses_post($archive_desc); ?></div>
      <?php else : ?>
        <div class="archive-sub">Curated technical breakdowns, case studies, and architecture insights published under <?php echo esc_html($archive_title); ?>.</div>
      <?php endif; ?>
    </div>
    <div class="archive-hero-visual" style="display: flex; align-items: center; justify-content: center;">
      <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback style="width: 200px; max-width: 100%; height: auto; display: block; background: transparent;">
        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.webm'); ?>" type="video/webm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.gif'); ?>" alt="Cr8v Stacks Archive Logo Visual">
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
              <div class="cat-dropdown-wrapper">
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
                $variant_class = ($post_idx % 2 === 0) ? 'is-dark' : 'is-light';
              ?>
                <!-- AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARD -->
                <div class="card-fallback-canvas <?php echo $variant_class; ?>">
                  <svg class="fallback-brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                  </svg>
                  <div class="fallback-title"><?php the_title(); ?></div>
                  <div class="fallback-cat"><?php echo esc_html($primary_cat); ?></div>
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

  <div style="display:flex; justify-content:center; gap:0.5rem; margin-bottom: 4rem;">
    <?php
    echo paginate_links([
        'prev_text' => '← Prev',
        'next_text' => 'Next →',
        'type'      => 'plain',
    ]);
    ?>
  </div>

</main>

<?php get_footer(); ?>
