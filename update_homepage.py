import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Dev Playground Stat Fix
old_dp_stat = """          <div class="dp-stat-item">
            <div class="dp-stat-num">0</div>
            <div class="dp-stat-label">Sign-Ups Needed</div>
          </div>"""

new_dp_stat = """          <div class="dp-stat-item">
            <div class="dp-stat-num">100%</div>
            <div class="dp-stat-label">Instant Access</div>
          </div>"""

if old_dp_stat in content:
    content = content.replace(old_dp_stat, new_dp_stat)
    print("Dev Playground stat updated.")
else:
    # Try regex match for Sign-Ups Needed
    content = re.sub(
        r'<div class="dp-stat-num">\s*0\s*</div>\s*<div class="dp-stat-label">\s*Sign-Ups Needed\s*</div>',
        '<div class="dp-stat-num">100%</div>\n            <div class="dp-stat-label">Instant Access</div>',
        content
    )
    print("Dev Playground stat updated via regex.")

# 2. Add Figma to C4 Tech Pills
c4_target = '<span class="hww-tag"><img src="https://cdn.simpleicons.org/nextdotjs/ffffff" alt="">Next.js</span>'
c4_replacement = '<span class="hww-tag"><img src="https://cdn.simpleicons.org/nextdotjs/ffffff" alt="">Next.js</span>\n            <span class="hww-tag"><img src="https://cdn.simpleicons.org/figma/F24E1E" alt="">Figma</span>'

if 'Figma</span>' not in content and c4_target in content:
    content = content.replace(c4_target, c4_replacement, 1)
    print("Figma added to C4 pills.")

# 3. Overhaul WHO WE ARE Section
old_wwa_pattern = r'<section class="wwa-section" id="who-we-are">.*?</section>'

new_wwa_html = '''  <section class="wwa-section" id="who-we-are">
    <style>
      .wwa-section {
        background: var(--c8-ink);
        padding: clamp(5rem, 9vw, 8rem) 0;
        position: relative;
        overflow: hidden;
      }
      .wwa-inner {
        max-width: 1360px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 5rem);
        position: relative;
        z-index: 1;
      }
      .wwa-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 3rem;
        border-bottom: 1px solid rgba(255,255,255,0.08);
        padding-bottom: 1.5rem;
      }
      .wwa-eyebrow {
        font-family: var(--font-mono);
        font-size: 0.68rem;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--c8-blue);
      }
      .wwa-top-tag {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        letter-spacing: 0.1em;
        color: rgba(255,255,255,0.4);
      }
      .wwa-main-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(2.5rem, 5vw, 5rem);
        align-items: center;
      }
      .wwa-left-col {
        display: flex;
        flex-direction: column;
        gap: 1.8rem;
      }
      .wwa-h2 {
        font-family: var(--font-heading);
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        font-weight: 400;
        color: #fff;
        line-height: 1.15;
      }
      .wwa-h2 em {
        font-style: normal;
        color: var(--c8-blue);
      }
      .wwa-desc {
        font-family: var(--font-body);
        font-size: clamp(0.92rem, 1.4vw, 1.02rem);
        font-weight: 300;
        color: rgba(255,255,255,0.65);
        line-height: 1.8;
      }
      .wwa-visual-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.12);
        box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        margin-top: 0.5rem;
      }
      .wwa-visual-img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
      }
      .wwa-visual-card:hover .wwa-visual-img {
        transform: scale(1.03);
      }
      .wwa-visual-overlay {
        position: absolute;
        bottom: 0; inset-x: 0;
        padding: 1.2rem 1.5rem;
        background: linear-gradient(to top, rgba(15,15,15,0.95), transparent);
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .wwa-visual-caption {
        font-family: var(--font-body);
        font-size: 0.8rem;
        color: rgba(255,255,255,0.85);
        font-weight: 500;
      }
      .wwa-visual-badge {
        font-family: var(--font-mono);
        font-size: 0.62rem;
        color: var(--c8-blue);
        background: rgba(0,71,225,0.15);
        border: 1px solid rgba(0,71,225,0.3);
        padding: 0.25rem 0.6rem;
        border-radius: 4px;
      }
      .wwa-right-col {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }
      .wwa-features {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
      }
      .wwa-feat {
        display: flex;
        gap: 1.2rem;
        align-items: flex-start;
        padding: 1.2rem 1.5rem;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 12px;
        transition: border-color 0.3s, background 0.3s;
      }
      .wwa-feat:hover {
        border-color: rgba(0,71,225,0.4);
        background: rgba(0,71,225,0.04);
      }
      .wwa-feat-num {
        font-family: var(--font-heading);
        font-size: 0.85rem;
        color: var(--c8-blue);
        background: rgba(0,71,225,0.12);
        width: 32px; height: 32px;
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
      }
      .wwa-feat-title {
        font-family: var(--font-body);
        font-size: 0.95rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 0.3rem;
      }
      .wwa-feat-body {
        font-family: var(--font-body);
        font-size: 0.82rem;
        color: rgba(255,255,255,0.55);
        line-height: 1.6;
      }
      .wwa-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255,255,255,0.08);
      }
      .wwa-stat-num {
        font-family: var(--font-heading);
        font-size: 1.5rem;
        color: #fff;
      }
      .wwa-stat-label {
        font-family: var(--font-body);
        font-size: 0.72rem;
        color: rgba(255,255,255,0.4);
        margin-top: 0.2rem;
      }
      @media (max-width: 900px) {
        .wwa-main-grid { grid-template-columns: 1fr; }
      }
    </style>

    <div class="wwa-inner">
      <div class="wwa-top">
        <div class="wwa-eyebrow">About Cr8v Stacks</div>
        <div class="wwa-top-tag">CREATIVE STACKS AGENCY</div>
      </div>

      <div class="wwa-main-grid">
        <div class="wwa-left-col">
          <h2 class="wwa-h2">One team.<br><em>Every layer.</em></h2>
          <p class="wwa-desc">
            Strategy, design, and code — handled by the same team from first call to launch, not handed off between departments who have never spoken to each other. Whether we are validating an AI product MVP, rebuilding a property platform from scratch, or running SEO for a growing brand.
          </p>
          
          <div class="wwa-visual-card">
            <img src="assets/wwa_studio_visual.jpg" alt="Cr8v Stacks Studio Workspace" class="wwa-visual-img">
            <div class="wwa-visual-overlay">
              <span class="wwa-visual-caption">Built for execution, not pitch decks.</span>
              <span class="wwa-visual-badge">IN-HOUSE STUDIO</span>
            </div>
          </div>
        </div>

        <div class="wwa-right-col">
          <div class="wwa-features">
            <div class="wwa-feat">
              <span class="wwa-feat-num">01</span>
              <div>
                <div class="wwa-feat-title">Strategy First</div>
                <div class="wwa-feat-body">Every project begins with understanding your business goals, not just your brief. We scope transparently, then we build.</div>
              </div>
            </div>
            <div class="wwa-feat">
              <span class="wwa-feat-num">02</span>
              <div>
                <div class="wwa-feat-title">Design &amp; Build, Together</div>
                <div class="wwa-feat-body">Design and development do not hand off &mdash; they run together. Less revision back-and-forth. More precision in code.</div>
              </div>
            </div>
            <div class="wwa-feat">
              <span class="wwa-feat-num">03</span>
              <div>
                <div class="wwa-feat-title">You Own Everything</div>
                <div class="wwa-feat-body">Code, domain, asset repos &mdash; yours from day one. No lock-in, no recurring fees just to keep the lights on.</div>
              </div>
            </div>
          </div>

          <div class="wwa-stats">
            <div class="wwa-stat">
              <div class="wwa-stat-num">5+</div>
              <div class="wwa-stat-label">Years Building</div>
            </div>
            <div class="wwa-stat">
              <div class="wwa-stat-num">3</div>
              <div class="wwa-stat-label">Continents Served</div>
            </div>
            <div class="wwa-stat">
              <div class="wwa-stat-num">100%</div>
              <div class="wwa-stat-label">Client Ownership</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>'''

content = re.sub(old_wwa_pattern, new_wwa_html, content, flags=re.DOTALL)
print("WHO WE ARE section replaced.")

# 4. Overhaul TESTIMONIALS Section (Matching Screenshot 1 Layout)
old_tmn_pattern = r'<!-- SECTION: TESTIMONIALS -->.*?</section>'

new_tmn_html = '''<!-- SECTION: TESTIMONIALS -->
  <style>
    .tmn-section {
      background: #F7F8FA;
      padding: clamp(5rem, 9vw, 8rem) 0;
      position: relative;
    }
    .tmn-inner {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 clamp(1.5rem, 5vw, 4rem);
    }
    .tmn-header {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 4rem;
    }
    .tmn-eyebrow {
      font-family: var(--font-mono);
      font-size: 0.7rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #E20025;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      margin-bottom: 1.2rem;
      font-weight: 700;
    }
    .tmn-eyebrow::before {
      content: '/';
      color: #E20025;
      font-weight: 800;
    }
    .tmn-h2 {
      font-family: var(--font-heading);
      font-size: clamp(2rem, 3.8vw, 3rem);
      font-weight: 400;
      color: #111111;
      letter-spacing: -0.01em;
      line-height: 1.2;
      margin-bottom: 1.2rem;
    }
    .tmn-sub {
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 400;
      color: #666666;
      line-height: 1.7;
    }
    
    /* Interactive Layout Grid matching image */
    .tmn-showcase {
      display: grid;
      grid-template-columns: 190px 1fr;
      gap: 2rem;
      align-items: center;
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
      padding: 6px;
      cursor: pointer;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.03);
      transition: all 0.3s ease;
      height: 115px;
      display: block;
    }
    .tmn-thumb-btn img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 14px;
      filter: grayscale(20%);
      transition: filter 0.3s ease, transform 0.3s ease;
    }
    .tmn-thumb-btn:hover img {
      filter: grayscale(0%);
      transform: scale(1.03);
    }
    .tmn-thumb-btn.is-active {
      border-color: #E20025;
      box-shadow: 0 8px 24px rgba(226, 0, 37, 0.2);
    }
    .tmn-thumb-btn.is-active img {
      filter: grayscale(0%);
    }

    /* Primary Quote Card */
    .tmn-card-main {
      background: #FFFFFF;
      border-radius: 28px;
      padding: clamp(2.2rem, 4vw, 3.5rem);
      box-shadow: 0 15px 45px rgba(0,0,0,0.04);
      position: relative;
      overflow: hidden;
      min-height: 320px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .tmn-bg-quote {
      position: absolute;
      top: -1.5rem;
      right: 1.5rem;
      font-size: 15rem;
      line-height: 1;
      font-family: Georgia, serif;
      color: rgba(0, 0, 0, 0.04);
      pointer-events: none;
      user-select: none;
    }
    .tmn-content-wrapper {
      position: relative;
      z-index: 2;
    }
    .tmn-main-quote {
      font-family: var(--font-body);
      font-size: clamp(1.15rem, 1.8vw, 1.45rem);
      font-weight: 500;
      color: #1A1A1A;
      line-height: 1.5;
      margin-bottom: 1rem;
    }
    .tmn-sub-quote {
      font-family: var(--font-body);
      font-size: 0.9rem;
      font-weight: 400;
      color: #777777;
      line-height: 1.6;
      margin-bottom: 2rem;
    }
    .tmn-card-footer {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      border-top: 1px dashed #E5E7EB;
      padding-top: 1.5rem;
    }
    .tmn-author-name {
      font-family: var(--font-body);
      font-size: 1.05rem;
      font-weight: 700;
      color: #111111;
      line-height: 1.3;
    }
    .tmn-author-role {
      font-family: var(--font-body);
      font-size: 0.82rem;
      color: #777777;
      margin-top: 2px;
    }
    .tmn-stars-row {
      display: flex;
      gap: 4px;
      color: #E20025;
    }
    .tmn-star-icon {
      width: 16px;
      height: 16px;
      fill: currentColor;
    }

    /* Bottom CTA Strip */
    .tmn-bottom-callout {
      text-align: center;
      margin-top: 4rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.2rem;
    }
    .tmn-callout-text {
      font-family: var(--font-body);
      font-size: 0.92rem;
      color: #444444;
      font-weight: 500;
    }
    .tmn-schedule-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #111111;
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 1.1rem 2.5rem;
      border-radius: 50px;
      text-decoration: none;
      box-shadow: 0 8px 25px rgba(0,0,0,0.18);
      transition: transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
    }
    .tmn-schedule-btn:hover {
      background: var(--c8-blue);
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(0, 71, 225, 0.3);
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
        width: 90px;
        height: 80px;
      }
    }
  </style>

  <section class="tmn-section" id="testimonials">
    <div class="tmn-inner">
      
      <div class="tmn-header">
        <div class="tmn-eyebrow">WHAT CLIENTS SAY</div>
        <h2 class="tmn-h2">Honest Feedback From Valued Partners</h2>
        <p class="tmn-sub">Real feedback from businesses and teams who trusted Cr8v Stacks to build, refine, and launch their digital products. Their words reflect our impact.</p>
      </div>

      <div class="tmn-showcase">
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
        </div>

        # Main Testimonial Display Card
        <div class="tmn-card-main" id="tmn-card-main">
          <div class="tmn-bg-quote">&rdquo;</div>
          <div class="tmn-content-wrapper">
            <p class="tmn-main-quote" id="tmn-quote-main">
              "Our web platforms finally speak to the right audience with clarity, resulting in direct pipeline growth and seamless user conversion."
            </p>
            <p class="tmn-sub-quote" id="tmn-quote-sub">
              Trust their work &mdash; the design and architecture delivered completely transformed our brand presence and internal workflows.
            </p>
          </div>
          <div class="tmn-card-footer">
            <div>
              <div class="tmn-author-name" id="tmn-author-name">Sarah Whitfield</div>
              <div class="tmn-author-role" id="tmn-author-role">Marketing Director, Ecommerce Brand &mdash; Toronto</div>
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
        <a href="#contact" class="tmn-schedule-btn">SCHEDULE A CALL</a>
      </div>

    </div>
  </section>

  <script>
    (function() {
      var testimonials = [
        {
          mainQuote: '"Our web platforms finally speak to the right audience with clarity, resulting in direct pipeline growth and seamless user conversion."',
          subQuote: 'Trust their work &mdash; the design and architecture delivered completely transformed our brand presence and internal workflows.',
          name: 'Sarah Whitfield',
          role: 'Marketing Director, Ecommerce Brand &mdash; Toronto'
        },
        {
          mainQuote: '"We came in wanting an AI MVP to test an ambitious product concept. What we got was a production-ready application our team is actively expanding."',
          subQuote: 'What stood out wasn&apos;t just the speed &mdash; it was how well they understood technical product requirements without hand-holding.',
          name: 'Daniel Voss',
          role: 'Product Lead, SaaS Startup &mdash; Berlin'
        },
        {
          mainQuote: '"What stood out was having one team handle strategy, custom development, and brand identity without anything getting lost in translation."',
          subQuote: 'They scoped it right, built it cleanly, and stayed committed through every iteration post-launch.',
          name: 'Adaeze Nwosu',
          role: 'Founder &amp; Managing Director &mdash; Lagos'
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

content = re.sub(old_tmn_pattern, new_tmn_html, content, flags=re.DOTALL)
print("TESTIMONIALS section replaced.")

# 5. Overhaul FINAL CTA Section (Matching Screenshot 2 Layout)
old_cta_pattern = r'<!-- SECTION: FINAL CTA -->.*?</section>'

new_cta_html = '''<!-- SECTION: FINAL CTA -->
  <style>
    .cta-section {
      background: #F8F9FA;
      padding: clamp(5rem, 9vw, 8rem) 0;
      position: relative;
      overflow: hidden;
    }
    .cta-inner {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 clamp(1.5rem, 5vw, 4rem);
      text-align: center;
      position: relative;
      z-index: 2;
    }
    .cta-arc-container {
      max-width: 580px;
      margin: 0 auto 2.5rem;
      position: relative;
    }
    .cta-arc-img {
      width: 100%;
      height: auto;
      display: block;
      filter: drop-shadow(0 15px 30px rgba(0,0,0,0.08));
    }
    .cta-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      font-family: var(--font-mono);
      font-size: 0.68rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #555555;
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      padding: 0.4rem 1.1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .cta-h2 {
      font-family: var(--font-heading);
      font-size: clamp(2.2rem, 4.5vw, 3.6rem);
      font-weight: 400;
      color: #111111;
      letter-spacing: -0.02em;
      line-height: 1.15;
      margin-bottom: 1.4rem;
    }
    .cta-h2 em {
      font-style: italic;
      font-family: Georgia, serif;
      font-weight: 400;
      color: var(--c8-blue);
    }
    .cta-desc {
      font-family: var(--font-body);
      font-size: clamp(0.95rem, 1.4vw, 1.05rem);
      font-weight: 400;
      color: #666666;
      line-height: 1.75;
      max-width: 580px;
      margin: 0 auto 2.8rem;
    }
    .cta-btn-pill {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
      background: #111111;
      color: #FFFFFF;
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 600;
      padding: 1.1rem 2.6rem;
      border-radius: 50px;
      text-decoration: none;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      transition: transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
    }
    .cta-btn-pill:hover {
      background: var(--c8-blue);
      transform: translateY(-3px);
      box-shadow: 0 14px 35px rgba(0, 71, 225, 0.3);
    }
    .cta-btn-pill svg {
      transition: transform 0.25s ease;
    }
    .cta-btn-pill:hover svg {
      transform: translateX(4px);
    }
  </style>

  <section class="cta-section" id="contact">
    <div class="cta-inner">
      <!-- Top Arc Image featuring stack logos (Figma, WordPress, Shopify, Next.js, Elementor, Supabase) -->
      <div class="cta-arc-container">
        <img src="assets/cta_stack_arc.jpg" alt="Cr8v Stacks Tech Stack Ecosystem" class="cta-arc-img">
      </div>

      <div class="cta-badge">&#10022; EASY TO EXPLORE</div>
      
      <h2 class="cta-h2">
        A simple approach to building your <em>custom digital stack.</em>
      </h2>

      <p class="cta-desc">
        Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.
      </p>

      <div>
        <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
          Book a Consultation
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
    </div>
  </section>'''

content = re.sub(old_cta_pattern, new_cta_html, content, flags=re.DOTALL)
print("FINAL CTA section replaced.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all changes to homepage_hero_section.html successfully!")
