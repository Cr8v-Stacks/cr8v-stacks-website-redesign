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
$posts_per_page = cr8v_mod('blog_posts_per_page', '9');
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
  max-width: 1440px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

.blog-grid-card {
  background: var(--c8-paper-card);
  border: 1px solid var(--c8-grid-line);
  border-radius: 4px !important;
  padding: 1.6rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}

.blog-grid-card:hover {
  transform: translateY(-4px);
  border-color: var(--c8-blue);
  box-shadow: 0 12px 30px rgba(0, 71, 225, 0.08);
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

.card-img-container {
  aspect-ratio: 16 / 10;
  width: 100%;
  border-radius: 4px !important;
  overflow: hidden;
  border: 1px solid var(--c8-grid-line);
  margin-bottom: 1.1rem;
  position: relative;
  background: #FFFFFF;
}

.card-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.35s ease;
}
.blog-grid-card:hover .card-img { transform: scale(1.03); }

/* ── AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARDS (MATCHING USER ATTACHED SPEC 100%) ── */
.card-fallback-canvas {
  width: 100%; height: 100%; min-height: 190px;
  border-radius: 4px !important;
  padding: 1.6rem 1.4rem;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  text-align: center;
  position: relative; overflow: hidden;
  box-sizing: border-box;
  width: 100%; height: 100%;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  padding: 1.25rem; text-align: center; box-sizing: border-box;
}
.card-fallback-canvas.is-light {
  background: linear-gradient(135deg, #E0F2FE 0%, #F0F9FF 45%, #EDE9FE 100%);
  color: #080808; border: 1px solid rgba(8, 8, 8, 0.08);
}
.card-fallback-canvas.is-light .fallback-brand-icon {
  width: 24px; height: 24px; color: #080808; margin-bottom: 0.9rem; stroke-width: 2;
}
.card-fallback-canvas.is-light .fallback-title {
  font-family: var(--font-heading); font-size: 0.9rem; font-weight: 700;
  color: #080808; text-transform: uppercase; line-height: 1.35;
  margin-bottom: 0.9rem; max-width: 90%; letter-spacing: -0.01em;
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
      <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback>
        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.webm'); ?>" type="video/webm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.gif'); ?>" alt="Cr8v Stacks Blog Logo Visual">
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
                <div id="bcat-<?php echo $post_idx; ?>" class="cat-popover-dropdown" style="min-width: 170px;">
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
                <!-- ENHANCED AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARD -->
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

<!-- BOTTOM DISCOVERY CTA SECTION -->
<?php get_template_part('parts/prototype-cta'); ?>

<?php get_footer(); ?>
