import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update font link to include Playfair Display
font_old = '<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Michroma&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">'
font_new = '<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Michroma&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">'

if font_old in content:
    content = content.replace(font_old, font_new)
    print("Font link updated with Playfair Display.")

# 2. Overhaul TESTIMONIALS section to match media__1785736744000.jpg exactly
old_tmn_pattern = r'<!-- SECTION: TESTIMONIALS -->.*?</section>\s*<script>.*?</script>'

new_tmn_code = '''<!-- SECTION: TESTIMONIALS -->
  <style>
    .tmn-section {
      background: #F8F9FA;
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
      max-width: 650px;
      margin: 0 auto 3.8rem;
    }
    .tmn-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.72rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #333333;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      margin-bottom: 1.1rem;
      font-weight: 700;
    }
    .tmn-eyebrow-slash {
      color: #E20025;
      font-weight: 800;
      font-size: 0.9rem;
      margin-right: 2px;
    }
    .tmn-h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2.2rem, 4.2vw, 3.2rem);
      font-weight: 400;
      color: #111111;
      letter-spacing: -0.01em;
      line-height: 1.2;
      margin-bottom: 1.1rem;
    }
    .tmn-sub {
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 400;
      color: #666666;
      line-height: 1.65;
    }

    /* Showcase 2-Column Grid matching reference */
    .tmn-showcase {
      display: grid;
      grid-template-columns: 160px 1fr;
      gap: 2.2rem;
      align-items: center;
      max-width: 1040px;
      margin: 0 auto;
    }
    .tmn-thumbs {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }
    .tmn-thumb-btn {
      background: #FFFFFF;
      border: 2px solid transparent;
      border-radius: 20px;
      padding: 4px;
      cursor: pointer;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.03);
      transition: all 0.3s ease;
      height: 120px;
      width: 150px;
      display: block;
    }
    .tmn-thumb-btn img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 16px;
      transition: filter 0.3s ease, transform 0.3s ease;
    }
    .tmn-thumb-btn.is-active {
      border-color: #E20025;
      box-shadow: 0 8px 24px rgba(226, 0, 37, 0.2);
    }

    /* Big White Card matching reference */
    .tmn-card-main {
      background: #FFFFFF;
      border-radius: 28px;
      padding: clamp(2.5rem, 4.5vw, 3.8rem);
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
      font-size: 15rem;
      line-height: 1;
      font-family: Georgia, serif;
      color: rgba(0, 0, 0, 0.045);
      pointer-events: none;
      user-select: none;
    }
    .tmn-content-wrapper {
      position: relative;
      z-index: 2;
    }
    .tmn-main-quote {
      font-family: var(--font-body);
      font-size: clamp(1.25rem, 2vw, 1.6rem);
      font-weight: 400;
      color: #1A1A1A;
      line-height: 1.45;
      margin-bottom: 0.9rem;
    }
    .tmn-sub-quote {
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 400;
      color: #666666;
      line-height: 1.6;
      margin-bottom: 2.2rem;
    }
    .tmn-card-footer {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      border-top: 1px dashed #E5E7EB;
      padding-top: 1.5rem;
    }
    .tmn-author-name {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.15rem;
      font-weight: 600;
      color: #111111;
      line-height: 1.3;
    }
    .tmn-author-role {
      font-family: var(--font-body);
      font-size: 0.85rem;
      color: #777777;
      margin-top: 3px;
    }
    .tmn-stars-row {
      display: flex;
      gap: 3px;
      color: #E20025;
    }
    .tmn-star-icon {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    /* Bottom Callout & Button matching reference */
    .tmn-bottom-callout {
      text-align: center;
      margin-top: 4rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.2rem;
    }
    .tmn-callout-text {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 1.05rem;
      color: #222222;
      font-weight: 400;
    }
    .tmn-schedule-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #181818;
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 1.1rem 2.8rem;
      border-radius: 12px;
      text-decoration: none;
      box-shadow: 0 10px 25px rgba(226, 0, 37, 0.22);
      border: 1px solid rgba(226, 0, 37, 0.3);
      transition: all 0.25s ease;
    }
    .tmn-schedule-btn:hover {
      background: #E20025;
      transform: translateY(-3px);
      box-shadow: 0 14px 30px rgba(226, 0, 37, 0.35);
    }

    @media (max-width: 768px) {
      .tmn-showcase {
        grid-template-columns: 1fr;
      }
      .tmn-thumbs {
        flex-direction: row;
        justify-content: center;
      }
      .tmn-thumb-btn {
        width: 100px;
        height: 90px;
      }
    }
  </style>

  <section class="tmn-section" id="testimonials">
    <div class="tmn-inner">
      
      <div class="tmn-header">
        <div class="tmn-eyebrow"><span class="tmn-eyebrow-slash">/</span> WHAT CLIENTS SAY</div>
        <h2 class="tmn-h2">Honest Feedback From Valued People</h2>
        <p class="tmn-sub">Real feedback from businesses and individuals who trusted my content to elevate their brands. Their words reflect the impact of my work.</p>
      </div>

      <div class="tmn-showcase">
        <!-- Thumbnails Column -->
        <div class="tmn-thumbs" id="tmn-thumbs">
          <button class="tmn-thumb-btn" data-index="0" aria-label="View testimony by Sarah Whitfield">
            <img src="assets/tmn_avatar_euro_male.jpg" alt="Sarah Whitfield">
          </button>
          <button class="tmn-thumb-btn is-active" data-index="1" aria-label="View testimony by Kathrine Katija">
            <img src="assets/tmn_avatar_female.jpg" alt="Kathrine Katija">
          </button>
          <button class="tmn-thumb-btn" data-index="2" aria-label="View testimony by Daniel Voss">
            <img src="assets/tmn_avatar_bearded.jpg" alt="Daniel Voss">
          </button>
        </div>

        <!-- Main Display Card -->
        <div class="tmn-card-main" id="tmn-card-main">
          <div class="tmn-bg-quote">&rdquo;</div>
          <div class="tmn-content-wrapper">
            <p class="tmn-main-quote" id="tmn-quote-main">
              Our ad campaigns finally speak to the right audience with clarity resulting in high CTR and ROI.
            </p>
            <p class="tmn-sub-quote" id="tmn-quote-sub">
              Trust her work, that the words that she delivered completely transformed our brand presence.
            </p>
          </div>
          <div class="tmn-card-footer">
            <div>
              <div class="tmn-author-name" id="tmn-author-name">Kathrine Katija</div>
              <div class="tmn-author-role" id="tmn-author-role">Marketing Manager, ABC Ad Services</div>
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
        <div class="tmn-callout-text">See how impactful content makes a difference?</div>
        <a href="#contact" class="tmn-schedule-btn">SCHEDULE A CALL</a>
      </div>

    </div>
  </section>

  <script>
    (function() {
      var testimonials = [
        {
          mainQuote: "Our web platforms finally speak to the right audience with clarity resulting in high conversion and customer engagement.",
          subQuote: "Trust their work &mdash; the technical architecture and interface design delivered completely transformed our digital presence.",
          name: "Sarah Whitfield",
          role: "Founder, Ecommerce Brand &mdash; Toronto"
        },
        {
          mainQuote: "Our ad campaigns finally speak to the right audience with clarity resulting in high CTR and ROI.",
          subQuote: "Trust her work, that the words that she delivered completely transformed our brand presence.",
          name: "Kathrine Katija",
          role: "Marketing Manager, ABC Ad Services"
        },
        {
          mainQuote: "What stood out was having one team handle strategy, custom development, and brand design without anything getting lost in translation.",
          subQuote: "They scoped it right, built it cleanly, and stayed committed through every iteration post-launch.",
          name: "Daniel Voss",
          role: "Product Lead, SaaS Startup &mdash; Berlin"
        }
      ];

      var thumbBtns = document.querySelectorAll('#tmn-thumbs .tmn-thumb-btn');
      var quoteMain = document.getElementById('tmn-quote-main');
      var quoteSub = document.getElementById('tmn-quote-sub');
      var authorName = document.getElementById('tmn-author-name');
      var authorRole = document.getElementById('tmn-author-role');

      thumbBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          var idx = parseInt(btn.getAttribute('data-index'), 10);
          if (isNaN(idx) || !testimonials[idx]) return;

          thumbBtns.forEach(function(b) { b.classList.remove('is-active'); });
          btn.classList.add('is-active');

          var data = testimonials[idx];
          quoteMain.innerHTML = data.mainQuote;
          quoteSub.innerHTML = data.subQuote;
          authorName.innerHTML = data.name;
          authorRole.innerHTML = data.role;
        });
      });
    })();
  </script>'''

content = re.sub(old_tmn_pattern, new_tmn_code, content, flags=re.DOTALL)
print("TESTIMONIALS updated to match media__1785736744000.jpg.")

# 3. Overhaul FINAL CTA section to match media__1785736744111.jpg with transparent PNG & matching width
old_cta_pattern = r'<!-- SECTION: FINAL CTA -->.*?</section>'

new_cta_code = '''<!-- SECTION: FINAL CTA -->
  <style>
    .cta-section {
      background: #F9F9FA;
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
    }
    .cta-arc-img {
      width: 100%;
      height: auto;
      display: block;
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
      color: #666666;
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      padding: 0.4rem 1.1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .cta-h2 {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: clamp(2.2rem, 4.8vw, 3.6rem);
      font-weight: 400;
      color: #111111;
      letter-spacing: -0.02em;
      line-height: 1.18;
      max-width: 780px;
      margin: 0 auto 1.4rem;
    }
    .cta-h2 em {
      font-style: italic;
      font-weight: 400;
      color: #444444;
    }
    .cta-desc {
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 400;
      color: #666666;
      line-height: 1.65;
      max-width: 620px;
      margin: 0 auto 2.5rem;
    }
    .cta-btn-pill {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.8rem;
      background: #181818;
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.9rem;
      font-weight: 600;
      padding: 0.85rem 1.6rem 0.85rem 2.2rem;
      border-radius: 50px;
      text-decoration: none;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
      border: 1px solid rgba(255,255,255,0.1);
      transition: all 0.25s ease;
    }
    .cta-btn-pill:hover {
      background: var(--c8-blue);
      transform: translateY(-3px);
      box-shadow: 0 14px 35px rgba(0, 71, 225, 0.3);
    }
    .cta-btn-arrow {
      background: rgba(255,255,255,0.18);
      width: 28px;
      height: 28px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
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
        A simple approach to the complex world of <em>custom digital stacks</em>
      </h2>

      <p class="cta-desc">
        Cr8v Stacks requires no guesswork. Transparent scoping, fixed timelines, and high-performance delivery accessible to any growing brand.
      </p>

      <div>
        <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
          Learn more <span class="cta-btn-arrow">&rarr;</span>
        </a>
      </div>
    </div>
  </section>'''

content = re.sub(old_cta_pattern, new_cta_code, content, flags=re.DOTALL)
print("FINAL CTA section updated with transparent PNG and exact matching width.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all updates to homepage_hero_section.html!")
