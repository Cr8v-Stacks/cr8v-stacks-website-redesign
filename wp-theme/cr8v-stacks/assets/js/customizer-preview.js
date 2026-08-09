/**
 * CR8V Stacks — Tropos Theme
 * assets/js/customizer-preview.js
 *
 * Binds WP Customizer postMessage transport to live DOM updates.
 * Runs only inside the Customizer preview iframe.
 * Each setting ID maps to a CSS selector + update method.
 */
(function ($) {
    'use strict';

    var api = wp.customize;

    /**
     * Helper: bind a setting to a DOM element's text content.
     * @param {string} settingId  — Customizer setting key
     * @param {string} selector   — CSS selector of the element to update
     */
    function bindText(settingId, selector) {
        api(settingId, function (setting) {
            setting.bind(function (value) {
                $(selector).text(value);
            });
        });
    }

    /**
     * Helper: bind a setting to an element's href attribute.
     */
    function bindHref(settingId, selector) {
        api(settingId, function (setting) {
            setting.bind(function (value) {
                $(selector).attr('href', value);
            });
        });
    }

    /**
     * Helper: bind a setting to an <img> src attribute.
     */
    function bindSrc(settingId, selector) {
        api(settingId, function (setting) {
            setting.bind(function (value) {
                $(selector).attr('src', value);
            });
        });
    }

    // ── HOMEPAGE HERO ────────────────────────────────────────────
    bindText('hero_eyebrow',    '.c8-hero-eyebrow, .dp-eyebrow');
    bindText('hero_headline_1', '.dp-headline .line-1');
    bindText('hero_headline_2', '.dp-headline .line-2');
    bindText('hero_sub',        '.dp-sub, .c8-hero-sub');
    bindText('hero_cta_text',   '.c8-hero-cta-btn, .c8-btn-primary');
    bindHref('hero_cta_link',   '.c8-hero-cta-btn, .c8-btn-primary');

    api('hero_poster_img', function (setting) {
        setting.bind(function (value) {
            // Update video poster or background image
            var $video = $('.dp-hero-video');
            if ($video.length) {
                $video.attr('poster', value);
            } else {
                $('.dp-hero-poster').css('background-image', 'url(' + value + ')');
            }
        });
    });

    // ── HEADER ───────────────────────────────────────────────────
    bindText('header_cta_text',     '.c8hdr-root .c8-btn-cta, .c8hdr-root .c8-md-cta');
    bindHref('header_cta_link',     '.c8hdr-root .c8-btn-cta, .c8hdr-root .c8-md-cta');
    bindText('header_drawer_label', '.c8hdr-root .c8-md-hero-label');

    api('header_logo', function (setting) {
        setting.bind(function (value) {
            $('.c8-logo-img, .c8-md-hero-logo-img').attr('src', value);
        });
    });

    // ── FOOTER ───────────────────────────────────────────────────
    bindText('footer_copyright', '.c8ft-brand-name, .c8ft-cap-copy');

    api('footer_linkedin',  function (s) { s.bind(function (v) { $('.c8ft-social[aria-label="LinkedIn"]').attr('href', v); }); });
    api('footer_instagram', function (s) { s.bind(function (v) { $('.c8ft-social[aria-label="Instagram"]').attr('href', v); }); });
    api('footer_youtube',   function (s) { s.bind(function (v) { $('.c8ft-social[aria-label="YouTube"]').attr('href', v); }); });
    api('footer_facebook',  function (s) { s.bind(function (v) { $('.c8ft-social[aria-label="Facebook"]').attr('href', v); }); });

    // ── TESTIMONIALS ─────────────────────────────────────────────
    bindText('testimonials_eyebrow', '.sw-mono-tag');
    bindText('testimonials_heading', '.sw-testimonial-heading');

    for (var i = 1; i <= 3; i++) {
        (function (idx) {
            bindText('testimonial_' + idx + '_quote', '.sw-testimonial-card:nth-child(' + idx + ') .sw-testimonial-quote');
            bindText('testimonial_' + idx + '_name',  '.sw-testimonial-card:nth-child(' + idx + ') .sw-testimonial-name');
            bindText('testimonial_' + idx + '_role',  '.sw-testimonial-card:nth-child(' + idx + ') .sw-testimonial-role');
            api('testimonial_' + idx + '_avatar', function (s) {
                s.bind(function (v) {
                    $('.sw-testimonial-card:nth-child(' + idx + ') .sw-testimonial-avatar img').attr('src', v);
                });
            });
        })(i);
    }

    // ── MATRIX / STATS ───────────────────────────────────────────
    bindText('matrix_eyebrow', '.sw-matrix-section .sw-mono-tag');
    bindText('matrix_heading', '.sw-matrix-h2');

    for (var j = 1; j <= 4; j++) {
        (function (idx) {
            bindText('matrix_stat_' + idx + '_value', '.sw-matrix-stat:nth-child(' + idx + ') .sw-matrix-stat-floating');
            bindText('matrix_stat_' + idx + '_label', '.sw-matrix-stat:nth-child(' + idx + ') .sw-matrix-stat-label');
        })(j);
    }

}(jQuery));
