import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Ensure Playfair Display is REMOVED from Google font link and brand variables used
font_old = '<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Michroma&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">'
font_clean = '<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Michroma&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">'

if font_old in content:
    content = content.replace(font_old, font_clean)
    print("Cleaned up font links to strictly use Michroma, Space Mono, and DM Sans.")

# 2. Overhaul TESTIMONIALS section to strictly follow Rule 1 & Rule 2
# - Michroma for Headings
# - Space Mono for Eyebrows
# - DM Sans for Body
# - Royal Blue (#0047E1) for accent slash, active border, stars, and buttons
# - Standardized border-radius: 16px
# - Auto-scroll functionality with pause on hover

old_tmn_pattern = r'<!-- SECTION: TESTIMONIALS -->.*?</section>\s*<script>.*?</script>'

new_tmn_code = '''<!-- SECTION: TESTIMONIALS -->
  <style>
    .tmn-section {
      background: var(--c8-bg);
      padding: clamp(5rem, 9vw, 8rem) 0;
      position: relative;
    }
    .tmn-inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 clamp(1.5rem, 5vw, 4rem);
    }
    .tmn-header {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 3.5rem;
    }
    .tmn-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.68rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--c8-blue);
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      margin-bottom: 1.1rem;
      font-weight: 700;
    }
    .tmn-eyebrow-slash {
      color: var(--c8-blue);
      font-weight: 800;
      font-size: 0.85rem;
      margin-right: 2px;
    }
    .tmn-h2 {
      font-family: var(--font-heading);
      font-size: clamp(1.8rem, 3.5vw, 2.6rem);
      font-weight: 400;
      color: var(--c8-ink);
      letter-spacing: 0.02em;
      line-height: 1.25;
      margin-bottom: 1.1rem;
    }
    .tmn-sub {
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.7;
    }

    /* Showcase 2-Column Grid matching reference layout */
    .tmn-showcase {
      display: grid;
      grid-template-columns: 160px 1fr;
      gap: 2rem;
      align-items: center;
      max-width: 1040px;
      margin: 0 auto;
    }
    .tmn-thumbs {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    .tmn-thumb-btn {
      background: #FFFFFF;
      border: 2px solid transparent;
      border-radius: 12px;
      padding: 4px;
      cursor: pointer;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.03);
      transition: all 0.3s ease;
      height: 110px;
      width: 150px;
      display: block;
    }
    .tmn-thumb-btn img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 9px;
      filter: grayscale(25%);
      transition: filter 0.3s ease, transform 0.3s ease;
    }
    .tmn-thumb-btn:hover img {
      filter: grayscale(0%);
    }
    .tmn-thumb-btn.is-active {
      border-color: var(--c8-blue);
      box-shadow: 0 8px 24px rgba(0, 71, 225, 0.2);
    }
    .tmn-thumb-btn.is-active img {
      filter: grayscale(0%);
    }

    /* Big Card matching standardized 16px radius */
    .tmn-card-main {
      background: #FFFFFF;
      border: 1px solid var(--c8-line);
      border-radius: 16px;
      padding: clamp(2.2rem, 4vw, 3.5rem);
      box-shadow: 0 10px 40px rgba(0,0,0,0.03);
      position: relative;
      overflow: hidden;
      min-height: 310px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .tmn-bg-quote {
      position: absolute;
      top: -1.5rem;
      right: 2rem;
      font-size: 14rem;
      line-height: 1;
      font-family: Georgia, serif;
      color: rgba(0, 71, 225, 0.04);
      pointer-events: none;
      user-select: none;
    }
    .tmn-content-wrapper {
      position: relative;
      z-index: 2;
    }
    .tmn-main-quote {
      font-family: var(--font-body);
      font-size: clamp(1.2rem, 1.8vw, 1.5rem);
      font-weight: 500;
      color: var(--c8-ink);
      line-height: 1.5;
      margin-bottom: 0.9rem;
    }
    .tmn-sub-quote {
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.65;
      margin-bottom: 2rem;
    }
    .tmn-card-footer {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      border-top: 1px dashed var(--c8-line);
      padding-top: 1.4rem;
    }
    .tmn-author-name {
      font-family: var(--font-body);
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--c8-ink);
      line-height: 1.3;
    }
    .tmn-author-role {
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 300;
      color: var(--c8-muted);
      margin-top: 2px;
    }
    .tmn-stars-row {
      display: flex;
      gap: 3px;
      color: var(--c8-blue);
    }
    .tmn-star-icon {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    /* Bottom Callout & Button matching Royal Blue Brand Color */
    .tmn-bottom-callout {
      text-align: center;
      margin-top: 3.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.2rem;
    }
    .tmn-callout-text {
      font-family: var(--font-body);
      font-size: 0.95rem;
      color: var(--c8-ink);
      font-weight: 500;
    }
    .tmn-schedule-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--c8-blue);
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 1.1rem 2.6rem;
      border-radius: 12px;
      text-decoration: none;
      box-shadow: 0 8px 25px rgba(0, 71, 225, 0.25);
      transition: all 0.25s ease;
    }
    .tmn-schedule-btn:hover {
      background: #0037B5;
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(0, 71, 225, 0.35);
    }

    @media (max-width: 768px) {
      .tmn-showcase {
        grid-template-columns: 1fr;
      }
      .tmn-thumbs {
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
      }
      .tmn-thumb-btn {
        width: 110px;
        height: 85px;
      }
    }
  </style>

  <section class="tmn-section" id="testimonials">
    <div class="tmn-inner">
      
      <div class="tmn-header">
        <div class="tmn-eyebrow"><span class="tmn-eyebrow-slash">/</span> WHAT CLIENTS SAY</div>
        <h2 class="tmn-h2">Real Feedback From Real Projects</h2>
        <p class="tmn-sub">Direct feedback from founders and engineering leaders who trusted Cr8v Stacks to build, optimize, and launch their custom digital platforms.</p>
      </div>

      <div class="tmn-showcase" id="tmn-showcase-container">
        <!-- Thumbnails Column -->
        <div class="tmn-thumbs" id="tmn-thumbs">
          <button class="tmn-thumb-btn is-active" data-index="0" aria-label="View testimony by Sarah Whitfield">
            <img src="assets/tmn_avatar_female.jpg" alt="Sarah Whitfield">
          </button>
          <button class="tmn-thumb-btn" data-index="1" aria-label="View testimony by Daniel Voss">
            <img src="assets/tmn_avatar_euro_male.jpg" alt="Daniel Voss">
          </button>
          <button class="tmn-thumb-btn" data-index="2" aria-label="View testimony by Adaeze Nwosu">
            <img src="assets/tmn_avatar_bearded.jpg" alt="Adaeze Nwosu">
          </button>
          <button class="tmn-thumb-btn" data-index="3" aria-label="View testimony by Marcus Vance">
            <img src="assets/tmn_avatar_euro_male.jpg" alt="Marcus Vance">
          </button>
        </div>

        <!-- Main Display Card -->
        <div class="tmn-card-main" id="tmn-card-main">
          <div class="tmn-bg-quote">&rdquo;</div>
          <div class="tmn-content-wrapper">
            <p class="tmn-main-quote" id="tmn-quote-main">
              "They redesigned our entire site without ever making it feel like a redesign &mdash; it just felt like the version that should have existed from day one."
            </p>
            <p class="tmn-sub-quote" id="tmn-quote-sub">
              Rebuilt cleanly with zero unnecessary plugin bloat &mdash; our site performance and checkout conversion improved immediately after launch.
            </p>
          </div>
          <div class="tmn-card-footer">
            <div>
              <div class="tmn-author-name" id="tmn-author-name">Sarah Whitfield</div>
              <div class="tmn-author-role" id="tmn-author-role">Founder, Ecommerce Brand &mdash; Toronto, Canada</div>
            </div>
            <div class="tmn-stars-row">
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              <svg class="tmn-star-icon" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="tmn-bottom-callout">
        <div class="tmn-callout-text">See how impactful custom stacks make a difference?</div>
        <a href="#contact" class="tmn-schedule-btn">Schedule a Consultation</a>
      </div>

    </div>
  </section>

  <script>
    (function() {
      var testimonials = [
        {
          mainQuote: '"They redesigned our entire site without ever making it feel like a redesign &mdash; it just felt like the version that should have existed from day one."',
          subQuote: 'Rebuilt cleanly with zero unnecessary plugin bloat &mdash; our site performance and checkout conversion improved immediately after launch.',
          name: 'Sarah Whitfield',
          role: 'Founder, Ecommerce Brand &mdash; Toronto, Canada'
        },
        {
          mainQuote: '"We came in wanting an MVP to test an idea. What we got was a production-ready application our own team is still building on top of."',
          subQuote: 'Our mobile load time went from 4.1 seconds to under half a second. Biggest ROI we have seen on any development spend.',
          name: 'Daniel Voss',
          role: 'Product Lead, SaaS Startup &mdash; Berlin, Germany'
        },
        {
          mainQuote: '"What stood out wasn&apos;t the design or the code individually &mdash; it was that one team handled strategy, build, and marketing without anything getting lost in translation."',
          subQuote: 'They scoped it right, built it right, and did not disappear after launch.',
          name: 'Adaeze Nwosu',
          role: 'Marketing Director &mdash; Lagos, Nigeria'
        },
        {
          mainQuote: '"Custom development, done properly, is rare. The code is clean, fully documented, and our internal team has 100% ownership of everything built."',
          subQuote: 'All payment logic and custom subscription workflows wired seamlessly without third-party dependencies.',
          name: 'Marcus Vance',
          role: 'Operations Lead &mdash; Lisbon, Portugal'
        }
      ];

      var currentIndex = 0;
      var autoScrollInterval = null;

      var thumbBtns = document.querySelectorAll('#tmn-thumbs .tmn-thumb-btn');
      var quoteMain = document.getElementById('tmn-quote-main');
      var quoteSub = document.getElementById('tmn-quote-sub');
      var authorName = document.getElementById('tmn-author-name');
      var authorRole = document.getElementById('tmn-author-role');
      var showcaseContainer = document.getElementById('tmn-showcase-container');

      function activateTestimonial(idx) {
        if (isNaN(idx) || !testimonials[idx]) return;
        currentIndex = idx;

        thumbBtns.forEach(function(b) { b.classList.remove('is-active'); });
        if (thumbBtns[idx]) thumbBtns[idx].classList.add('is-active');

        var data = testimonials[idx];
        quoteMain.innerHTML = data.mainQuote;
        quoteSub.innerHTML = data.subQuote;
        authorName.innerHTML = data.name;
        authorRole.innerHTML = data.role;
      }

      function startAutoScroll() {
        stopAutoScroll();
        autoScrollInterval = setInterval(function() {
          var nextIdx = (currentIndex + 1) % testimonials.length;
          activateTestimonial(nextIdx);
        }, 4500);
      }

      function stopAutoScroll() {
        if (autoScrollInterval) {
          clearInterval(autoScrollInterval);
          autoScrollInterval = null;
        }
      }

      thumbBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          var idx = parseInt(btn.getAttribute('data-index'), 10);
          activateTestimonial(idx);
          startAutoScroll(); // Reset timer on manual click
        });
      });

      if (showcaseContainer) {
        showcaseContainer.addEventListener('mouseenter', stopAutoScroll);
        showcaseContainer.addEventListener('mouseleave', startAutoScroll);
      }

      startAutoScroll();
    })();
  </script>'''

content = re.sub(old_tmn_pattern, new_tmn_code, content, flags=re.DOTALL)
print("TESTIMONIALS overhauled with brand system, standardized radius, and auto-scroll.")

# 3. Overhaul FINAL CTA section to strictly follow Rule 1 & Rule 2
# - Michroma for Heading
# - Space Mono for Badge
# - DM Sans for Body & CTA button
# - Royal Blue (#0047E1) brand accenting
# - Transparent PNG Arc (cta_stack_arc.png) matched 100% to title width
# - Standardized border-radius: 16px / 12px

old_cta_pattern = r'<!-- SECTION: FINAL CTA -->.*?</section>'

new_cta_code = '''<!-- SECTION: FINAL CTA -->
  <style>
    .cta-section {
      background: var(--c8-bg);
      padding: clamp(5rem, 9vw, 8rem) 0;
      position: relative;
      overflow: hidden;
    }
    .cta-inner {
      max-width: 860px;
      margin: 0 auto;
      padding: 0 clamp(1.5rem, 5vw, 4rem);
      text-align: center;
      position: relative;
      z-index: 2;
    }
    .cta-arc-container {
      width: 100%;
      max-width: 780px;
      margin: 0 auto 2.2rem;
      display: flex;
      justify-content: center;
    }
    .cta-arc-img {
      width: 100%;
      max-width: 780px;
      height: auto;
      display: block;
      object-fit: contain;
      filter: drop-shadow(0 15px 30px rgba(0,0,0,0.06));
    }
    .cta-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      font-family: var(--font-mono);
      font-size: 0.68rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--c8-blue);
      background: rgba(0, 71, 225, 0.06);
      border: 1px solid rgba(0, 71, 225, 0.2);
      padding: 0.4rem 1.1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
    }
    .cta-h2 {
      font-family: var(--font-heading);
      font-size: clamp(1.9rem, 4.2vw, 3rem);
      font-weight: 400;
      color: var(--c8-ink);
      letter-spacing: 0.01em;
      line-height: 1.25;
      max-width: 780px;
      margin: 0 auto 1.4rem;
    }
    .cta-h2 em {
      font-style: normal;
      color: var(--c8-blue);
    }
    .cta-desc {
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 300;
      color: var(--c8-muted);
      line-height: 1.7;
      max-width: 620px;
      margin: 0 auto 2.5rem;
    }
    .cta-btn-pill {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.8rem;
      background: var(--c8-blue);
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.9rem;
      font-weight: 600;
      padding: 1rem 2.2rem;
      border-radius: 12px;
      text-decoration: none;
      box-shadow: 0 10px 28px rgba(0, 71, 225, 0.28);
      transition: all 0.25s ease;
    }
    .cta-btn-pill:hover {
      background: #0037B5;
      transform: translateY(-2px);
      box-shadow: 0 14px 35px rgba(0, 71, 225, 0.38);
    }
    .cta-btn-arrow {
      background: rgba(255,255,255,0.2);
      width: 26px;
      height: 26px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.85rem;
      transition: transform 0.25s ease;
    }
    .cta-btn-pill:hover .cta-btn-arrow {
      transform: translateX(4px);
    }
  </style>

  <section class="cta-section" id="contact">
    <div class="cta-inner">
      <!-- Transparent PNG Arc image matching title width -->
      <div class="cta-arc-container">
        <img src="assets/cta_stack_arc.png" alt="Cr8v Stacks Tech Stack Ecosystem" class="cta-arc-img">
      </div>

      <div class="cta-badge">&#10022; EASY TO EXPLORE</div>
      
      <h2 class="cta-h2">
        A simple approach to building your <em>custom digital stacks.</em>
      </h2>

      <p class="cta-desc">
        Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.
      </p>

      <div>
        <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
          Book a Consultation <span class="cta-btn-arrow">&rarr;</span>
        </a>
      </div>
    </div>
  </section>'''

content = re.sub(old_cta_pattern, new_cta_code, content, flags=re.DOTALL)
print("FINAL CTA section overhauled with brand system and transparent PNG.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all design system fixes to homepage_hero_section.html!")
