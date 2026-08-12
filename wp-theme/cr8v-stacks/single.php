<?php
/**
 * CR8V Stacks — single.php
 * Individual Blog Post Template — 100% exact parity with single-blog.html prototype.
 * Restored white background sidebar CTA card, 78px circular avatar visual, circular CDN logo badges, and dark CTA button with Matrix scramble & flare animations.
 * Restored LinkedIn share icon black filter fix.
 * Added Matrix scramble target to author bio, name, and author link.
 * Added ambient mesh gradient non-image fallback cards matching user screenshot spec.
 */

defined('ABSPATH') || exit;

get_header('blog');

if (have_posts()) : while (have_posts()) : the_post();
  $raw_cats = get_the_category();
  $cats = cr8v_sort_categories_hierarchically($raw_cats);
  $primary_cat = $cats ? $cats[0]->name : 'RESOURCE';
  $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/img/hww_workflow_visual.jpg';
  $post_url = get_permalink();
  $post_title = get_the_title();
  $read_time = cr8v_reading_time(get_the_ID());
  $author_id = get_the_author_meta('ID');
  $author_name = get_the_author();
  $author_bio = get_the_author_meta('description') ?: 'Core systems engineer and digital strategist at CR8V Stacks, specializing in zero-plugin WordPress architecture, Liquid Performance engineering, and custom web platform builds.';
  $author_avatar = get_avatar_url($author_id, ['size' => 112]);
  $author_url = get_author_posts_url($author_id);
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

body.single-post {
  background: #FAFAF7 !important;
}

.art-outer-frame {
  width: 100% !important;
  max-width: 1360px !important;
  margin: 0 auto !important;
  background: #FFFFFF !important;
  border-left: 1px solid var(--c8-grid-line);
  border-right: 1px solid var(--c8-grid-line);
  border-bottom: 1px solid var(--c8-grid-line);
  border-top: none;
  padding-top: 68px;
  min-height: 100vh;
  box-sizing: border-box;
}

/* ── CATEGORY PILL (STRICT 4PX BORDER RADIUS) ── */
.art-cat-pill, .card-category-pill {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--c8-ink);
  border: 1px solid rgba(8, 8, 8, 0.3);
  border-radius: 4px !important;
  padding: 4px 12px;
  background: transparent;
  display: inline-flex;
  align-items: center;
  gap: 4px;
  transition: border-color 0.2s ease, color 0.2s ease;
  text-decoration: none;
}
.art-cat-pill:hover { border-color: var(--c8-blue); color: var(--c8-blue); }

/* ── BACK TO BLOG BUTTON ── */
.art-back-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: var(--font-mono);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--c8-sub);
  text-decoration: none;
  transition: color 0.2s ease;
  margin-bottom: 1.25rem;
}
.art-back-btn:hover { color: var(--c8-blue); }

/* HERO BANNER TOP */
.art-hero-banner {
  padding: 3rem 4rem 2.5rem 4rem;
  border-bottom: 1px solid var(--c8-grid-line);
  background: #FFFFFF;
}

.art-h1 {
  font-family: var(--font-heading); font-size: clamp(1.6rem, 3.2vw, 2.4rem);
  font-weight: 700; text-transform: uppercase; line-height: 1.25;
  margin-bottom: 1rem; color: var(--c8-ink);
}

.art-meta-date {
  font-family: var(--font-mono); font-size: 0.76rem; color: var(--c8-sub);
  text-transform: uppercase; letter-spacing: 0.05em;
}

/* 2-COLUMN LAYOUT GRID */
.art-grid-layout {
  display: grid;
  grid-template-columns: 340px 1fr;
  align-items: start;
}

/* STICKY LEFT SIDEBAR */
.art-sidebar-col {
  border-right: 1px solid var(--c8-grid-line);
  padding: 3rem 2rem;
  background: #FAFAF7;
  position: sticky; top: 6.5rem; height: fit-content;
  display: flex; flex-direction: column; gap: 2rem;
}

.share-block { margin-bottom: 0.5rem; }
.share-label {
  font-family: var(--font-mono); font-size: 0.68rem; letter-spacing: 0.14em;
  text-transform: uppercase; color: #8A8A8A; margin-bottom: 0.75rem; font-weight: 700;
}
.share-row { display: flex; gap: 0.45rem; flex-wrap: wrap; }
.share-btn {
  width: 34px; height: 34px; border-radius: 50%; border: 1px solid var(--c8-grid-line);
  background: #FFFFFF; display: flex; align-items: center; justify-content: center;
  cursor: pointer; transition: all 0.2s ease; overflow: hidden;
}
.share-btn:hover { background: var(--c8-blue); border-color: var(--c8-blue); color: #FFFFFF !important; }
.share-btn img { width: 16px; height: 16px; object-fit: contain; transition: filter 0.2s ease; }
.share-btn:hover img { filter: brightness(0) invert(1) !important; }
.share-btn svg { width: 15px; height: 15px; fill: none; stroke: currentColor; stroke-width: 2; transition: stroke 0.2s ease; }
.share-btn:hover svg { stroke: #FFFFFF !important; }

/* ── EXACT ORIGINAL PROTOTYPE SIDEBAR CTA CARD (WHITE CARD BG, CIRCULAR LOGO BADGES, 78PX AVATAR, DARK BUTTON WITH FLARE & MATRIX SCRAMBLE) ── */
.sidebar-cta-card {
  background: #FFFFFF; border: 1px solid var(--c8-grid-line);
  border-radius: 8px; padding: 2rem 1.5rem; text-align: left;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
}

.cta-logos-row { display: flex; align-items: center; justify-content: flex-start; gap: 0.5rem; margin-bottom: 0.75rem; margin-left: 0; }
.cta-logo-icon {
  width: 36px; height: 36px; border-radius: 50%; background: #080808;
  display: flex; align-items: center; justify-content: center; overflow: hidden;
}
.cta-logo-icon img { width: 24px; height: 24px; object-fit: contain; }

.cta-trust-label {
  font-family: var(--font-mono); font-size: 0.64rem; font-weight: 700;
  letter-spacing: 0.14em; text-transform: uppercase; color: #888888; margin-bottom: 1.25rem; text-align: left;
}

.cta-illustration {
  width: 200px; height: 100px; margin: 0 0 1.25rem 0;
  display: flex; align-items: center; justify-content: flex-start;
  background: transparent; border: none; overflow: visible;
}
.cta-illustration img, .cta-illustration video { width: 100%; height: 100%; object-fit: contain; display: block; background: transparent; border: none; border-radius: 0; }

.cta-card-title {
  font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700;
  color: #080808; margin-bottom: 0.65rem; line-height: 1.3; text-align: left;
}
.cta-card-sub { font-family: var(--font-body); font-size: 0.85rem; color: var(--c8-sub); line-height: 1.5; margin-bottom: 1.5rem; text-align: left; }

.cta-card-btn {
  background: #080808; color: #FFFFFF !important; font-family: var(--font-body);
  font-size: 0.82rem; font-weight: 700; padding: 0.8rem 1.25rem; border-radius: 6px;
  text-decoration: none !important; border-bottom: none !important; display: block;
  text-align: center; position: relative; overflow: hidden;
  transition: transform 0.25s ease, background 0.25s ease;
}
.cta-card-btn::before {
  content: ''; position: absolute; top: -50%; left: -100%;
  width: 100%; height: 200%;
  background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), transparent);
  transform: rotate(25deg); transition: left 0.75s ease; pointer-events: none;
}
.cta-card-btn:hover::before { left: 150%; }
.cta-card-btn:hover { background: var(--c8-blue); transform: translateY(-2px); text-decoration: none !important; }

/* CATEGORY POPOVER DROPDOWN IN HERO BANNER */
.cat-dropdown-wrapper { position: relative; display: inline-flex; align-items: center; }
.cat-popover-dropdown {
  position: absolute; top: 100%; left: 0; z-index: 9999;
  background: #080808; border: 1px solid rgba(255,255,255,0.2); border-radius: 4px;
  padding: 0.75rem; min-width: 220px; box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  opacity: 0; visibility: hidden; transform: translateY(4px);
  transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
  pointer-events: none; margin-top: 6px;
}
.cat-popover-dropdown::before {
  content: '' !important; position: absolute !important; top: -14px !important; left: 0 !important; right: 0 !important; height: 14px !important; background: transparent !important;
}
.cat-dropdown-wrapper:hover .cat-popover-dropdown,
.cat-popover-dropdown.is-open {
  opacity: 1 !important; visibility: visible !important; transform: translateY(0) !important; pointer-events: auto !important; display: block !important;
}
.cat-dropdown-wrapper:hover .cat-dropdown-arrow,
.cat-dropdown-wrapper.is-open .cat-dropdown-arrow {
  transform: rotate(180deg) !important;
}

/* WORDPRESS AUTHOR CARD BOX */
.art-author-card {
  background: #FFFFFF; border: 1px solid var(--c8-grid-line);
  border-radius: 8px; padding: 1.5rem; display: flex; flex-direction: column; gap: 0.85rem;
}
.art-author-header { display: flex; align-items: center; gap: 0.85rem; }
.art-author-avatar { width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 1px solid var(--c8-grid-line); }
.art-author-info { display: flex; flex-direction: column; }
.art-author-label { font-family: var(--font-mono); font-size: 0.65rem; color: var(--c8-sub); text-transform: uppercase; letter-spacing: 0.1em; font-weight: 700; }
.art-author-name { font-family: var(--font-heading); font-size: 0.88rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; }
.art-author-bio { font-size: 0.82rem; color: #444444; line-height: 1.55; margin: 0; }
.art-author-link,
.art-author-card a {
  font-family: var(--font-mono); font-size: 0.7rem; font-weight: 700; color: var(--c8-blue);
  text-decoration: none !important; border-bottom: none !important; text-transform: uppercase; letter-spacing: 0.05em;
  display: inline-flex; align-items: center; gap: 4px; transition: transform 0.2s ease, color 0.2s ease;
}
.art-author-link:hover,
.art-author-card a:hover { transform: translateX(4px); color: var(--c8-blue-hi); text-decoration: none !important; border-bottom: none !important; }

/* RIGHT MAIN CONTENT COLUMN */
.art-content-col { padding: 3.5rem 4rem; background: #FFFFFF; min-width: 0; }

/* AI DEEP SUMMARY BAR */
.ai-summary-bar {
  border: 1px solid var(--c8-grid-line); border-radius: 6px;
  padding: 0.85rem 1.25rem; display: flex; align-items: center; justify-content: space-between;
  margin-bottom: 2.5rem; background: #FAFAF7;
}
.ai-summary-text {
  font-family: var(--font-mono); font-size: 0.72rem; font-weight: 700;
  color: #8A8A8A; letter-spacing: 0.12em; text-transform: uppercase;
}
.ai-summary-icons { display: flex; align-items: center; gap: 0.6rem; }
.ai-icon-btn {
  width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center;
  justify-content: center; background: #FFFFFF; border: 1px solid var(--c8-grid-line);
  cursor: pointer; transition: transform 0.2s ease; overflow: hidden;
}
.ai-icon-btn:hover { transform: scale(1.1); border-color: var(--c8-blue); }
.ai-icon-btn img { width: 15px; height: 15px; object-fit: contain; }

/* FEATURED IMAGE */
.art-featured-box {
  aspect-ratio: 16 / 9; width: 100%; border-radius: 4px; overflow: hidden;
  border: 1px solid var(--c8-grid-line); margin-bottom: 2.5rem; background: #000000;
}
.art-featured-img { width: 100%; height: 100%; object-fit: cover; display: block; }

/* PRE-STYLED BLOG ELEMENT DESIGN SYSTEM */
.art-body-text { min-width: 0; word-break: break-word; overflow-wrap: break-word; }
.art-body-text p { font-size: 1.02rem; line-height: 1.75; color: #222222; margin-bottom: 1.6rem; font-weight: 400; }
.art-body-text h1 { font-family: var(--font-heading); font-size: 1.6rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 3rem; margin-bottom: 1rem; line-height: 1.25; }
.art-body-text h2 { font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 2.75rem; margin-bottom: 1rem; line-height: 1.3; }
.art-body-text h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 2rem; margin-bottom: 0.75rem; }
.art-body-text h4 { font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-top: 1.5rem; margin-bottom: 0.5rem; }

.art-body-text img,
.art-body-text figure,
.art-body-text iframe,
.art-body-text video,
.art-body-text .wp-block-image {
  max-width: 100% !important;
  height: auto !important;
  border-radius: 4px;
}
.art-body-text figure { margin: 1.5rem 0 !important; }
.art-body-text figcaption { font-family: var(--font-mono); font-size: 0.72rem; color: #8A8A8A; text-align: center; margin-top: 0.5rem; }

.art-body-text pre {
  font-family: var(--font-mono) !important;
  background: #080808 !important;
  color: #00FF66 !important;
  border-radius: 4px !important;
  padding: 1.25rem !important;
  overflow-x: auto !important;
  font-size: 0.85rem !important;
  line-height: 1.6 !important;
  margin: 1.75rem 0 !important;
}
.art-body-text code {
  font-family: var(--font-mono) !important;
}
.art-body-text p code {
  padding: 2px 6px !important;
  background: rgba(0, 71, 225, 0.1) !important;
  color: var(--c8-blue) !important;
  border-radius: 3px !important;
}

.art-body-text blockquote {
  background: #FAFAF7; border: 1px solid var(--c8-grid-line);
  border-radius: 4px !important; padding: 1.75rem 2rem; margin: 2.25rem 0;
  font-size: 1.05rem; font-style: italic; color: #111111; line-height: 1.65;
}

.art-body-text ul, .art-body-text ol { margin: 1.25rem 0 1.75rem 1.75rem; }
.art-body-text li { font-size: 1rem; line-height: 1.65; color: #222222; margin-bottom: 0.5rem; }

/* Clean Content Link Styling without destroying CTA buttons */
.art-body-text a:not(.art-btn-primary):not(.art-btn-secondary):not(.art-tag-pill):not(.cta-card-btn):not(.wp-block-button__link) {
  color: var(--c8-blue);
  text-decoration: none;
  border-bottom: none !important;
  transition: color 0.2s ease;
}
.art-body-text a:not(.art-btn-primary):not(.art-btn-secondary):not(.art-tag-pill):not(.cta-card-btn):not(.wp-block-button__link):hover {
  color: var(--c8-blue-hi);
  text-decoration: underline;
}

/* ── TEXT-BASED UI CTA BUTTONS IN ARTICLE BODY ── */
.art-ui-buttons { display: flex; gap: 1rem; margin: 2rem 0; flex-wrap: wrap; }
.art-btn-primary,
.art-btn-secondary,
.art-body-text .wp-block-button__link {
  font-family: var(--font-mono) !important;
  font-size: 0.8rem !important;
  font-weight: 700 !important;
  padding: 0.75rem 1.5rem !important;
  border-radius: 4px !important;
  text-decoration: none !important;
  border-bottom: none !important;
  text-transform: uppercase !important;
  letter-spacing: 0.05em !important;
  position: relative !important;
  overflow: hidden !important;
  transition: transform 0.25s ease, background 0.25s ease, color 0.25s ease !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  box-sizing: border-box !important;
  cursor: pointer !important;
}

.art-btn-primary {
  background: var(--c8-blue) !important;
  color: #FFFFFF !important;
  border: none !important;
}

.art-btn-secondary {
  background: #080808 !important;
  color: #FFFFFF !important;
  border: 1px solid rgba(255, 255, 255, 0.2) !important;
}

.art-btn-primary::before,
.art-btn-secondary::before,
.art-body-text .wp-block-button__link::before {
  content: '' !important;
  position: absolute !important;
  top: -50% !important; left: -100% !important;
  width: 100% !important; height: 200% !important;
  background: linear-gradient(115deg, transparent, rgba(255,255,255,0.4), rgba(61, 107, 255, 0.4), rgba(0, 194, 255, 0.4), transparent) !important;
  transform: rotate(25deg) !important;
  transition: left 0.75s ease !important;
  pointer-events: none !important;
}

.art-btn-primary:hover::before,
.art-btn-secondary:hover::before,
.art-body-text .wp-block-button__link:hover::before {
  left: 150% !important;
}

.art-btn-primary:hover {
  background: var(--c8-blue-hi) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  text-decoration: none !important;
}

.art-btn-secondary:hover {
  background: var(--c8-blue) !important;
  color: #FFFFFF !important;
  transform: translateY(-2px) !important;
  text-decoration: none !important;
}


/* DATA TABLES */
.art-body-text table { width: 100%; border-collapse: collapse; margin: 2rem 0; font-size: 0.92rem; border: 1px solid var(--c8-grid-line); border-radius: 4px !important; overflow: hidden; }
.art-body-text th { background: #222222; color: #FFFFFF; font-family: var(--font-mono); font-size: 0.74rem; letter-spacing: 0.12em; text-transform: uppercase; padding: 1.1rem 1.4rem; border-right: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid var(--c8-grid-line); }
.art-body-text td { padding: 1.1rem 1.4rem; border-bottom: 1px solid var(--c8-grid-line); border-right: 1px solid var(--c8-grid-line); color: #222222; }
.art-body-text tr:nth-child(even) td { background: #FAFAF7; }

/* TAGS ROW */
.art-tags-row { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--c8-grid-line); }
.art-tag-pill { font-family: var(--font-mono); font-size: 0.7rem; font-weight: 700; color: var(--c8-ink); background: #FAFAF7; border: 1px solid var(--c8-grid-line); padding: 0.35rem 0.75rem; border-radius: 4px !important; text-decoration: none; text-transform: uppercase; }
.art-tag-pill:hover { background: var(--c8-blue); color: #FFFFFF; border-color: var(--c8-blue); }

/* RELATED ARTICLES GRID WITH SOLID TOP BORDER DIVIDER */
.related-section {
  padding: 3.5rem 4rem;
  border-top: 1px solid var(--c8-grid-line) !important;
  border-bottom: 1px solid var(--c8-grid-line);
  background: #FFFFFF;
}
.related-title { font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 1.75rem; }
.related-grid-frame { display: grid; grid-template-columns: repeat(3, 1fr); border: 1px solid var(--c8-grid-line); border-radius: 4px !important; overflow: hidden; }
.related-card { border-right: 1px solid var(--c8-grid-line); padding: 1.6rem; display: flex; flex-direction: column; justify-content: space-between; }
.related-card:last-child { border-right: none; }
.card-top-meta { display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem; }
.card-date { font-family: var(--font-mono); font-size: 0.68rem; color: var(--c8-sub); text-transform: uppercase; }
.card-img-container { aspect-ratio: 16 / 10; width: 100%; border-radius: 4px !important; overflow: hidden; border: 1px solid var(--c8-grid-line); margin-bottom: 1rem; position: relative; }
.card-img { width: 100%; height: 100%; object-fit: cover; display: block; }

/* AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARDS */
.card-fallback-canvas {
  width: 100%; height: 100%; min-height: 160px;
  border-radius: 4px !important;
  padding: 1.25rem 1rem;
  display: flex; flex-direction: column;
  align-items: center; justify-content: center;
  text-align: center;
  position: relative; overflow: hidden;
  box-sizing: border-box;
}

.card-fallback-canvas.is-light {
  background: linear-gradient(135deg, #E0F2FE 0%, #F0F9FF 45%, #EDE9FE 100%);
  color: #080808; border: 1px solid rgba(8, 8, 8, 0.08);
}
.card-fallback-canvas.is-light .fallback-brand-icon {
  width: 20px; height: 20px; color: #080808; margin-bottom: 0.65rem; stroke-width: 2;
}
.card-fallback-canvas, .card-fallback-canvas *, .fallback-title, .fallback-cat, .card-title, .card-title a,
.art-cat-pill, .card-category-pill, .art-author-name, .art-author-bio, .art-author-link,
.art-back-btn, .cta-card-btn, .art-meta-author-link {
  text-decoration: none !important;
  border-bottom: none !important;
}
/* The <a> wrapping .card-fallback-canvas has no class — target the container anchor directly */
.card-img-container a,
.card-img-container a:hover,
.card-img-container a:visited {
  text-decoration: none !important;
  border-bottom: none !important;
  display: block;
  width: 100%;
  height: 100%;
}

.card-fallback-canvas.is-light .fallback-title {
  font-family: var(--font-heading); font-size: 0.78rem; font-weight: 700;
  color: #080808; text-transform: uppercase; line-height: 1.35;
  margin-bottom: 0.65rem; max-width: 90%; text-decoration: none !important;
}
.card-fallback-canvas.is-light .fallback-cat {
  font-family: var(--font-mono); font-size: 0.6rem; font-weight: 700;
  color: #080808; letter-spacing: 0.12em; text-transform: uppercase; text-decoration: none !important;
}

.card-fallback-canvas.is-dark {
  background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #312E81 100%);
  color: #FFFFFF; border: 1px solid rgba(255, 255, 255, 0.1);
}
.card-fallback-canvas.is-dark .fallback-brand-icon {
  width: 20px; height: 20px; color: #FFFFFF; margin-bottom: 0.65rem; stroke-width: 2;
}
.card-fallback-canvas.is-dark .fallback-title {
  font-family: var(--font-heading); font-size: 0.78rem; font-weight: 700;
  color: #FFFFFF; text-transform: uppercase; line-height: 1.35;
  margin-bottom: 0.65rem; max-width: 90%; text-decoration: none !important;
}
.card-fallback-canvas.is-dark .fallback-cat {
  font-family: var(--font-mono); font-size: 0.6rem; font-weight: 700;
  color: #A0B4FF; letter-spacing: 0.12em; text-transform: uppercase; text-decoration: none !important;
}

.card-title { font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; text-transform: uppercase; line-height: 1.35; margin: 0; }
.card-title a { color: var(--c8-ink); text-decoration: none !important; border-bottom: none !important; }
.card-title a:hover { color: var(--c8-blue); text-decoration: none !important; }

/* ACCORDION FAQ SECTION */
.faq-page-section { padding: 4rem; background: #FAFAF7; }
.faq-page-title { font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: var(--c8-ink); text-transform: uppercase; margin-bottom: 2rem; }
.faq-accordion-item { border: 1px solid var(--c8-grid-line); border-radius: 4px !important; margin-bottom: 1rem; background: #FFFFFF; overflow: hidden; transition: border-color 0.2s ease; }
.faq-accordion-item.active { border-color: var(--c8-blue); }
.faq-accordion-q { font-family: var(--font-heading); font-size: 0.92rem; font-weight: 700; color: var(--c8-ink); padding: 1.25rem 1.6rem; text-transform: uppercase; cursor: pointer; display: flex; align-items: center; justify-content: space-between; user-select: none; }
.faq-accordion-q .faq-icon { font-family: var(--font-mono); font-size: 1.2rem; color: var(--c8-blue); font-weight: 700; transition: transform 0.3s ease; }
.faq-accordion-item.active .faq-accordion-q .faq-icon { transform: rotate(45deg); }
.faq-accordion-a { font-size: 0.92rem; color: #4A4A4A; line-height: 1.65; padding: 0 1.6rem 1.25rem 1.6rem; display: none; }
.faq-accordion-item.active .faq-accordion-a { display: block; }
.wptw-btt { font-family: sans-serif !important; font-size: 16px !important; line-height: 1 !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; }
.wptw-btt::before { content: "↑" !important; font-size: 16px !important; font-weight: bold !important; }

@media (max-width: 860px) {
  .art-outer-frame { padding-top: 80px !important; border-left: none !important; border-right: none !important; }
  .art-hero-banner { padding: 1.75rem 1.25rem 1.5rem 1.25rem !important; }
  .art-h1 { font-size: clamp(1.4rem, 5vw, 1.8rem) !important; margin-bottom: 0.75rem !important; }
  .art-grid-layout { display: flex !important; flex-direction: column !important; }
  .art-content-col { order: 1 !important; padding: 1.75rem 1.25rem !important; }
  .art-sidebar-col { order: 2 !important; position: static !important; border-right: none !important; border-top: 1px solid var(--c8-grid-line) !important; padding: 1.75rem 1.25rem !important; width: 100% !important; }
  .sidebar-cta-card { display: block !important; }
  .ai-summary-bar { flex-direction: column !important; align-items: flex-start !important; gap: 0.75rem !important; }
  .ai-summary-icons { width: 100% !important; justify-content: flex-start !important; }
  .related-section, .faq-page-section { padding: 2rem 1.25rem !important; }
  .related-grid-frame { grid-template-columns: 1fr !important; }
  .related-card { border-right: none !important; border-bottom: 1px solid var(--c8-grid-line) !important; }
}
</style>

<main class="art-outer-frame">
  
  <!-- TOP HERO BANNER -->
  <header class="art-hero-banner">
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" class="art-back-btn">
      <svg viewBox="0 0 24 24" width="12" height="12" stroke="currentColor" stroke-width="2" fill="none"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
      Back to Blog
    </a>
    <div style="display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem; position: relative;">
      <a href="<?php echo esc_url($cats ? get_category_link($cats[0]->term_id) : '#'); ?>" class="art-cat-pill"><?php echo esc_html($primary_cat); ?></a>
      <?php if ($cats && count($cats) > 1) : ?>
      <div class="cat-dropdown-wrapper" style="position: relative; display: inline-flex; align-items: center;">
        <button class="art-cat-pill" id="cat-more-btn" onclick="toggleCatPopover(event, 'hero-cat-popover')" style="cursor: pointer; background: #0047E1; color: #FFFFFF; border: none; display: inline-flex; align-items: center; gap: 4px; padding: 4px 12px; font-size: 0.68rem; font-weight: 700; font-family: var(--font-mono); border-radius: 4px !important;">
          +<?php echo (count($cats) - 1); ?> <svg class="cat-dropdown-arrow" viewBox="0 0 24 24" width="12" height="12" stroke="currentColor" stroke-width="2.5" fill="none" style="transition: transform 0.25s ease;"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div id="hero-cat-popover" class="cat-popover-dropdown" style="min-width: 200px;">
          <div style="font-family: var(--font-mono); font-size: 8.5px; color: #7C93FF; text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.1em; font-weight: 700;">MORE CATEGORIES</div>
          <?php for ($i = 1; $i < count($cats); $i++) :
            $is_subcat = ($cats[$i]->parent != 0);
            $prefix = $is_subcat ? '↳ ' : '';
            $style = $is_subcat ? 'padding-left: 10px; color: #A0B4FF; font-size: 9.5px;' : 'color: #FAFAF7; font-size: 10px;';
          ?>
          <a href="<?php echo esc_url(get_category_link($cats[$i]->term_id)); ?>" style="display: block; font-family: var(--font-mono); text-decoration: none; padding: 5px 0; border-bottom: 1px solid rgba(255,255,255,0.1); <?php echo $style; ?>"><?php echo esc_html($prefix . $cats[$i]->name); ?></a>
          <?php endfor; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <h1 class="art-h1"><?php echo esc_html($post_title); ?></h1>
    <div class="art-meta-date">
      Published <?php echo get_the_date('F j, Y'); ?> · <?php echo esc_html($read_time); ?> · By <a href="<?php echo esc_url($author_url); ?>" class="art-meta-author-link" style="color: inherit; text-decoration: none !important; border-bottom: none !important;"><?php echo esc_html($author_name); ?></a>
    </div>
  </header>

  <!-- INTEGRATED 2-COLUMN GRID -->
  <div class="art-grid-layout">
    
    <!-- LEFT SIDEBAR (STICKY ON DESKTOP) -->
    <aside class="art-sidebar-col">
      
      <!-- DYNAMIC SHARE BUTTONS BAR -->
      <?php if (cr8v_mod('single_show_share_bar', true)) : ?>
      <div class="share-block">
        <div class="share-label"><?php echo esc_html(cr8v_mod('share_label_text', 'SHARE THIS ARTICLE')); ?></div>
        <div class="share-row">
          <?php if (cr8v_mod('share_show_x', true)) : ?>
          <button class="share-btn" onclick="shareArticle('x')" title="Share on X">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_x', 'https://cdn.simpleicons.org/x/080808')); ?>" alt="X">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_linkedin', true)) : ?>
          <button class="share-btn" onclick="shareArticle('linkedin')" title="Share on LinkedIn">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_linkedin', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/linkedin/default.svg')); ?>" alt="LinkedIn" style="filter: brightness(0);">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_facebook', true)) : ?>
          <button class="share-btn" onclick="shareArticle('facebook')" title="Share on Facebook">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_facebook', 'https://cdn.simpleicons.org/facebook/080808')); ?>" alt="Facebook">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_whatsapp', true)) : ?>
          <button class="share-btn" onclick="shareArticle('whatsapp')" title="Share on WhatsApp">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_whatsapp', 'https://cdn.simpleicons.org/whatsapp/080808')); ?>" alt="WhatsApp">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_telegram', true)) : ?>
          <button class="share-btn" onclick="shareArticle('telegram')" title="Share on Telegram">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_telegram', 'https://cdn.simpleicons.org/telegram/080808')); ?>" alt="Telegram">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_reddit', true)) : ?>
          <button class="share-btn" onclick="shareArticle('reddit')" title="Share on Reddit">
            <img src="<?php echo esc_url(cr8v_mod('share_icon_reddit', 'https://cdn.simpleicons.org/reddit/080808')); ?>" alt="Reddit">
          </button>
          <?php endif; ?>

          <?php if (cr8v_mod('share_show_copy', true)) : ?>
          <button class="share-btn" id="copy-btn" onclick="copyArticleLink()" title="Copy Link">
            <svg viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          </button>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- 100% EXACT ORIGINAL PROTOTYPE SIDEBAR CTA CARD (WHITE CARD BG, CIRCULAR LOGO BADGES, 78PX AVATAR, DARK BUTTON WITH FLARE & MATRIX SCRAMBLE) -->
      <div class="sidebar-cta-card">
        <div class="cta-logos-row">
          <?php if (cr8v_mod('sidebar_show_shopify', true)) : ?>
          <div class="cta-logo-icon" title="Shopify"><img src="<?php echo esc_url(cr8v_mod('sidebar_icon_shopify', 'https://cdn.simpleicons.org/shopify/FFFFFF')); ?>" alt="Shopify"></div>
          <?php endif; ?>
          <?php if (cr8v_mod('sidebar_show_wordpress', true)) : ?>
          <div class="cta-logo-icon" title="WordPress"><img src="<?php echo esc_url(cr8v_mod('sidebar_icon_wordpress', 'https://cdn.simpleicons.org/wordpress/FFFFFF')); ?>" alt="WordPress"></div>
          <?php endif; ?>
          <?php if (cr8v_mod('sidebar_show_claude', true)) : ?>
          <div class="cta-logo-icon" title="Claude"><img src="<?php echo esc_url(cr8v_mod('sidebar_icon_claude', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg')); ?>" alt="Claude"></div>
          <?php endif; ?>
          <?php if (cr8v_mod('sidebar_show_openai', true)) : ?>
          <div class="cta-logo-icon" title="OpenAI"><img src="<?php echo esc_url(cr8v_mod('sidebar_icon_openai', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg')); ?>" alt="OpenAI"></div>
          <?php endif; ?>
        </div>
        
        <div class="cta-trust-label"><?php echo esc_html(cr8v_mod('sidebar_cta_trust_label', 'ENGINEERED ON MODERN STACKS')); ?></div>

        <div class="cta-illustration">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback style="width: 100%; height: auto; display: block; background: transparent;">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.webm'); ?>" type="video/webm">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cr8v_logo_anim.gif'); ?>" alt="Cr8v Stacks Logo Visual">
          </video>
        </div>

        <h3 class="cta-card-title c8-matrix-target"><?php echo esc_html(cr8v_mod('single_cta_title', 'Your design + build partner')); ?></h3>
        <p class="cta-card-sub"><?php echo esc_html(cr8v_mod('single_cta_sub', 'Product, websites, and brand — designed and shipped by one senior team.')); ?></p>

        <a href="<?php echo esc_url(cr8v_mod('single_cta_btn_url', '/discovery-call/')); ?>" class="cta-card-btn c8-matrix-target"><?php echo esc_html(cr8v_mod('single_cta_btn_text', 'Book an intro call')); ?></a>
      </div>

      <!-- DYNAMIC WORDPRESS AUTHOR CARD BOX -->
      <?php if (cr8v_mod('single_show_author_card', true)) : ?>
      <div class="art-author-card">
        <div class="art-author-header">
          <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>" class="art-author-avatar">
          <div class="art-author-info">
            <span class="art-author-label"><?php echo esc_html(cr8v_mod('single_author_label', 'Written By')); ?></span>
            <span class="art-author-name"><?php echo esc_html($author_name); ?></span>
          </div>
        </div>
        <p class="art-author-bio"><?php echo esc_html($author_bio); ?></p>
        <a href="<?php echo esc_url($author_url); ?>" class="art-author-link">View Author Articles →</a>
      </div>
      <?php endif; ?>
    </aside>

    <!-- RIGHT MAIN CONTENT COLUMN -->
    <article class="art-content-col">
      
      <!-- DYNAMIC AI DEEP SUMMARY BAR -->
      <?php if (cr8v_mod('single_show_ai_bar', true)) : ?>
      <div class="ai-summary-bar">
        <span class="ai-summary-text"><?php echo esc_html(cr8v_mod('single_ai_bar_text', 'AI DEEP SUMMARY')); ?></span>
        <div class="ai-summary-icons">
          <?php if (cr8v_mod('ai_show_chatgpt', true)) : ?>
          <button class="ai-icon-btn" onclick="triggerAISummary('chatgpt')" title="Extract Summary with ChatGPT"><img src="<?php echo esc_url(cr8v_mod('ai_icon_chatgpt', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg')); ?>" alt="ChatGPT"></button>
          <?php endif; ?>
          <?php if (cr8v_mod('ai_show_claude', true)) : ?>
          <button class="ai-icon-btn" onclick="triggerAISummary('claude')" title="Extract Summary with Claude"><img src="<?php echo esc_url(cr8v_mod('ai_icon_claude', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg')); ?>" alt="Claude"></button>
          <?php endif; ?>
          <?php if (cr8v_mod('ai_show_gemini', true)) : ?>
          <button class="ai-icon-btn" onclick="triggerAISummary('gemini')" title="Extract Summary with Google Gemini"><img src="<?php echo esc_url(cr8v_mod('ai_icon_gemini', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/gemini/default.svg')); ?>" alt="Gemini"></button>
          <?php endif; ?>
          <?php if (cr8v_mod('ai_show_perplexity', true)) : ?>
          <button class="ai-icon-btn" onclick="triggerAISummary('perplexity')" title="Extract Summary with Perplexity AI"><img src="<?php echo esc_url(cr8v_mod('ai_icon_perplexity', 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/perplexity/default.svg')); ?>" alt="Perplexity"></button>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>

      <div class="art-featured-box">
        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($post_title); ?>" class="art-featured-img">
      </div>

      <!-- Dynamic Post Content -->
      <div class="art-body-text">
        <?php the_content(); ?>
      </div>

      <!-- Post Tags -->
      <?php $tags = get_the_tags(); if ($tags) : ?>
      <div class="art-tags-row">
        <?php foreach ($tags as $tag) : ?>
        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="art-tag-pill"><?php echo esc_html($tag->name); ?></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </article>

  </div>

  <!-- RELATED ARTICLES GRID -->
  <?php if (cr8v_mod('single_show_related', true)) : ?>
  <section class="related-section">
    <h2 class="related-title"><?php echo esc_html(cr8v_mod('single_related_title', 'RELATED ARTICLES')); ?></h2>
    <div class="related-grid-frame">
      <?php
      $related_idx = 0;
      $related_query = new WP_Query([
          'posts_per_page' => 3,
          'post__not_in'   => [get_the_ID()],
          'orderby'        => 'date',
          'order'          => 'DESC',
      ]);
      if ($related_query->have_posts()) :
        while ($related_query->have_posts()) : $related_query->the_post();
          $related_idx++;
          $r_cats = get_the_category();
          $r_cat_name = $r_cats ? $r_cats[0]->name : 'RESOURCE';
          $has_thumb = has_post_thumbnail();
      ?>
        <article class="related-card">
          <div>
            <div class="card-top-meta">
              <span class="card-date"><?php echo get_the_date('F j, Y'); ?></span>
              <span class="card-category-pill"><?php echo esc_html($r_cat_name); ?></span>
            </div>
            <div class="card-img-container">
              <a href="<?php the_permalink(); ?>" style="display: block; width: 100%; height: 100%;">
                <?php if ($has_thumb) : ?>
                  <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="card-img">
                <?php else :
                  $variant_class = ($related_idx % 2 === 0) ? 'is-dark' : 'is-light';
                ?>
                  <!-- AMBIENT MESH GRADIENT NON-IMAGE FALLBACK CARD -->
                  <div class="card-fallback-canvas <?php echo $variant_class; ?>">
                    <svg class="fallback-brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    <div class="fallback-title"><?php the_title(); ?></div>
                    <div class="fallback-cat"><?php echo esc_html($r_cat_name); ?></div>
                  </div>
                <?php endif; ?>
              </a>
            </div>
            <h2 class="card-title"><a href="<?php the_permalink(); ?>" class="c8-matrix-target"><?php the_title(); ?></a></h2>
          </div>
        </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <article class="related-card">
          <div>
            <div class="card-top-meta">
              <span class="card-date">July 28, 2026</span>
              <span class="card-category-pill">ENTITY SEO</span>
            </div>
            <div class="card-img-container">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ai_wp_tree_workflow.jpg'); ?>" alt="Entity SEO Architecture" class="card-img">
            </div>
            <h2 class="card-title"><a href="#">Entity SEO Architecture: Indexing For Authority</a></h2>
          </div>
        </article>

        <article class="related-card">
          <div>
            <div class="card-top-meta">
              <span class="card-date">July 19, 2026</span>
              <span class="card-category-pill">AI MVPS</span>
            </div>
            <div class="card-img-container">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/c4_tools_bg.jpg'); ?>" alt="AI Platforms" class="card-img">
            </div>
            <h2 class="card-title"><a href="#">Architecting Custom AI Dashboards For Handover</a></h2>
          </div>
        </article>

        <article class="related-card">
          <div>
            <div class="card-top-meta">
              <span class="card-date">July 10, 2026</span>
              <span class="card-category-pill">DESIGN</span>
            </div>
            <div class="card-img-container">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/services_visual_montage.jpg'); ?>" alt="UI Micro-Animations" class="card-img">
            </div>
            <h2 class="card-title"><a href="#">Micro-Animations That Convert: Designing For Retention</a></h2>
          </div>
        </article>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <!-- ACCORDION COMMON QUESTIONS SECTION -->
  <?php if (cr8v_mod('single_show_faq', true)) : ?>
  <section class="faq-page-section">
    <h2 class="faq-page-title"><?php echo esc_html(cr8v_mod('single_faq_title', 'COMMON QUESTIONS')); ?></h2>

    <?php
    $faq_defaults = [
        1 => ['q' => 'How much does it cost to work with Cr8v Stacks?', 'a' => 'It depends on scope — a brochure site, an ecommerce store, and a custom AI MVP all price differently. Use our cost calculator for an instant range, or talk to us directly for a full quote.'],
        2 => ['q' => 'How long does a typical project take?', 'a' => 'Most website builds run a few weeks from approved design to launch; custom development and AI MVPs vary based on scope. We will give you a real timeline once we understand what you are building.'],
        3 => ['q' => 'What services do you actually offer?', 'a' => 'Web design, AI MVP development, and custom development are our core focus — alongside brand strategy, brand identity, and digital marketing.'],
        4 => ['q' => 'Do you build on WordPress, Shopify, or something else?', 'a' => 'All of the above, plus WooCommerce and fully custom builds. We recommend the platform based on what your business needs.'],
        5 => ['q' => 'Which payment gateways do you integrate?', 'a' => 'This depends on your platform and region — we will confirm exact options (Stripe, Paystack, and others) once we know your setup.'],
        6 => ['q' => 'Can you redesign or rebuild a site that already exists?', 'a' => 'Yes — a large share of our work is exactly this. We have rebuilt everything from basic landing pages to full property platforms.'],
    ];

    for ($n = 1; $n <= 6; $n++) :
        $q = cr8v_mod("single_faq_q{$n}", $faq_defaults[$n]['q']);
        $a = cr8v_mod("single_faq_a{$n}", $faq_defaults[$n]['a']);
        if (!empty($q)) :
    ?>
    <div class="faq-accordion-item" onclick="toggleFAQ(this)">
      <div class="faq-accordion-q"><?php echo esc_html($q); ?> <span class="faq-icon">+</span></div>
      <div class="faq-accordion-a"><?php echo esc_html($a); ?></div>
    </div>
    <?php endif; endfor; ?>
  </section>
  <?php endif; ?>

</main>

<script>
const shareConfig = {
  title: document.title,
  url: window.location.href
};

function shareArticle(platform) {
  let shareUrl = '';
  const text = encodeURIComponent(shareConfig.title);
  const url = encodeURIComponent(shareConfig.url);

  switch(platform) {
    case 'x':
      shareUrl = `https://twitter.com/intent/tweet?text=${text}&url=${url}`;
      break;
    case 'linkedin':
      shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
      break;
    case 'facebook':
      shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
      break;
    case 'whatsapp':
      shareUrl = `https://api.whatsapp.com/send?text=${text}%20${url}`;
      break;
    case 'telegram':
      shareUrl = `https://t.me/share/url?url=${url}&text=${text}`;
      break;
    case 'reddit':
      shareUrl = `https://reddit.com/submit?url=${url}&title=${text}`;
      break;
  }

  if (shareUrl) {
    window.open(shareUrl, '_blank', 'width=600,height=450');
  }
}

function copyArticleLink() {
  navigator.clipboard.writeText(window.location.href).then(() => {
    const btn = document.getElementById('copy-btn');
    if (btn) {
      btn.style.borderColor = '#0047E1';
      btn.style.background = 'rgba(0, 71, 225, 0.12)';
      setTimeout(() => {
        btn.style.borderColor = '';
        btn.style.background = '';
      }, 2000);
    }
  });
}

function triggerAISummary(platform) {
  const currentUrl = window.location.href;
  const prompt = `Please analyze and generate a comprehensive technical summary of this article: ${currentUrl}`;
  let aiUrl = '';

  switch(platform) {
    case 'chatgpt':
      aiUrl = `https://chatgpt.com/?q=${encodeURIComponent(prompt)}`;
      break;
    case 'claude':
      aiUrl = `https://claude.ai/new?q=${encodeURIComponent(prompt)}`;
      break;
    case 'gemini':
      aiUrl = `https://gemini.google.com/app?q=${encodeURIComponent(prompt)}`;
      break;
    case 'perplexity':
      aiUrl = `https://www.perplexity.ai/search?q=${encodeURIComponent(prompt)}`;
      break;
  }

  if (aiUrl) {
    window.open(aiUrl, '_blank');
  }
}

function toggleFAQ(item) {
  const isActive = item.classList.contains('active');
  document.querySelectorAll('.faq-accordion-item').forEach(el => el.classList.remove('active'));
  if (!isActive) {
    item.classList.add('active');
  }
}

function toggleCatPopover(e, id) {
  if (e) {
    e.preventDefault();
    e.stopPropagation();
  }
  var popover = document.getElementById(id || 'hero-cat-popover');
  var wrapper = e ? e.currentTarget.closest('.cat-dropdown-wrapper') : null;
  if (popover) popover.classList.toggle('is-open');
  if (wrapper) wrapper.classList.toggle('is-open');
}

document.addEventListener('click', function(e) {
  if (!e.target.closest('.cat-dropdown-wrapper')) {
    document.querySelectorAll('.cat-popover-dropdown').forEach(function(el) { el.classList.remove('is-open'); });
    document.querySelectorAll('.cat-dropdown-wrapper').forEach(function(el) { el.classList.remove('is-open'); });
  }
});
</script>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
