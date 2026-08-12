<?php
/**
 * CR8V Stacks — search.php
 * Search Results Template — 100% design parity with blog archive grid.
 */

defined('ABSPATH') || exit;

get_header('blog');

$search_query = get_search_query();
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

.search-outer-frame {
  width: 100% !important;
  max-width: 100% !important;
  margin: 0 !important;
  padding: 8.5rem 3.5rem 5rem 3.5rem;
  background: #FAFAF7;
  min-height: 80vh;
  box-sizing: border-box;
}

.search-header {
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid var(--c8-grid-line);
}

.search-eyebrow {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  font-weight: 700;
  color: var(--c8-blue);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: 0.75rem;
}

.search-title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  color: var(--c8-ink);
  text-transform: uppercase;
  line-height: 1.2;
}

.search-grid-frame {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

@media (max-width: 1024px) {
  .search-grid-frame { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .search-grid-frame { grid-template-columns: 1fr; }
  .search-outer-frame { padding: 7rem 1.25rem 3rem 1.25rem; }
}

.search-card {
  background: #FFFFFF;
  border: 1px solid var(--c8-grid-line);
  border-radius: 4px !important;
  padding: 1.6rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.search-card-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.75rem;
}

.search-card-date {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  color: var(--c8-sub);
  text-transform: uppercase;
}

.search-card-pill {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  font-weight: 700;
  color: var(--c8-ink);
  border: 1px solid rgba(8, 8, 8, 0.3);
  border-radius: 4px !important;
  padding: 2px 8px;
}

.search-card-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.35;
  color: var(--c8-ink);
  margin-top: 0.5rem;
}

.search-card-title a {
  color: inherit;
  text-decoration: none !important;
}

.search-card-title a:hover {
  color: var(--c8-blue);
}
</style>

<div class="search-outer-frame">
  <div class="search-header">
    <div class="search-eyebrow">// SEARCH RESULTS</div>
    <h1 class="search-title">Query: "<?php echo esc_html($search_query); ?>"</h1>
  </div>

  <?php if (have_posts()) : ?>
    <div class="search-grid-frame">
      <?php while (have_posts()) : the_post();
        $cats = get_the_category();
        $cat_name = $cats ? $cats[0]->name : get_post_type();
      ?>
        <article class="search-card">
          <div>
            <div class="search-card-meta">
              <span class="search-card-date"><?php echo get_the_date('F j, Y'); ?></span>
              <span class="search-card-pill"><?php echo esc_html($cat_name); ?></span>
            </div>
            <h2 class="search-card-title">
              <a href="<?php the_permalink(); ?>" class="c8-matrix-target"><?php the_title(); ?></a>
            </h2>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
    
    <div style="margin-top: 3rem; text-align: center;">
      <?php the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => '← Prev',
        'next_text' => 'Next →',
      ]); ?>
    </div>

  <?php else : ?>
    <div style="padding: 4rem 0; text-align: center;">
      <h2 style="font-family: var(--font-heading); font-size: 1.5rem; margin-bottom: 1rem;">No Results Found</h2>
      <p style="font-family: var(--font-body); color: var(--c8-sub); max-width: 500px; margin: 0 auto 2rem;">
        We couldn't find any articles or pages matching "<?php echo esc_html($search_query); ?>". Try searching for another keyword.
      </p>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c8-btn-primary" style="display: inline-flex; padding: 0.75rem 1.5rem; text-decoration: none !important;">Return to Blog →</a>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
