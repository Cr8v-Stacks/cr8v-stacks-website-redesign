$file = "C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
$content = Get-Content $file -Raw -Encoding UTF8

# 1. Fix WHO WE ARE observer selectors
$content = $content -replace "var wwaCopy\s+=\s+document\.querySelector\('\.wwa-copy'\);`r?`n\s+var wwaVisual\s+=\s+document\.querySelector\('\.wwa-visual'\);`r?`n\s+if \(wwaCopy\)\s+register\(wwaCopy,\s+'from-left'\);`r?`n\s+if \(wwaVisual\)\s+register\(wwaVisual,\s+'from-right', 150\);", @"
      /* -- Who We Are -- */
      var wwaLeft  = document.querySelector('.wwa-left');
      var wwaFeats = document.querySelector('.wwa-features');
      var wwaStats = document.querySelector('.wwa-stats');
      if (wwaLeft)  register(wwaLeft,  'from-left');
      if (wwaFeats) register(wwaFeats, 'from-right', 120);
      if (wwaStats) register(wwaStats, null, 200);

      /* -- Testimonials -- */
      document.querySelectorAll('.tmn-card').forEach(function (card, i) {
        register(card, null, i * 100);
      });

      /* -- FAQ items -- */
      document.querySelectorAll('.faq-item').forEach(function (item, i) {
        register(item, null, i * 40);
      });

      /* -- Final CTA -- */
      var ctaBlock = document.querySelector('.cta-block');
      if (ctaBlock) register(ctaBlock);"@

# 2. Build the new HTML block
$newSections = @'

  <!-- SECTION: TESTIMONIALS -->
  <style>
    .tmn-section{background:var(--c8-ink);padding:clamp(5rem,10vw,9rem) 0;position:relative;overflow:hidden}
    .tmn-section::before{content:'';position:absolute;bottom:-100px;right:-100px;width:600px;height:600px;background:radial-gradient(circle,rgba(0,71,225,.1) 0%,transparent 65%);pointer-events:none}
    .tmn-inner{max-width:1360px;margin:0 auto;padding:0 clamp(1.5rem,5vw,5rem);position:relative;z-index:1}
    .tmn-header{margin-bottom:3.5rem}
    .tmn-eyebrow{font-family:var(--font-mono);font-size:.65rem;letter-spacing:.14em;text-transform:uppercase;color:var(--c8-blue);margin-bottom:1rem}
    .tmn-h2{font-family:var(--font-heading);font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:400;color:#fff;letter-spacing:.02em}
    .tmn-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.07);border-radius:16px;overflow:hidden}
    .tmn-card{background:#0F0F0F;padding:clamp(1.8rem,3vw,2.6rem);display:flex;flex-direction:column;gap:1.5rem;transition:background .3s}
    .tmn-card:hover{background:#141414}
    .tmn-stars{display:flex;gap:3px}
    .tmn-star{width:12px;height:12px;background:var(--c8-blue);clip-path:polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%)}
    .tmn-quote{font-family:var(--font-body);font-size:clamp(.88rem,1.3vw,.97rem);font-weight:300;line-height:1.8;color:rgba(255,255,255,.62);flex:1;font-style:italic}
    .tmn-quote::before{content:'\201C'}.tmn-quote::after{content:'\201D'}
    .tmn-author{display:flex;align-items:center;gap:.85rem;padding-top:1.2rem;border-top:1px solid rgba(255,255,255,.07)}
    .tmn-avatar{width:38px;height:38px;border-radius:50%;background:var(--c8-blue);display:flex;align-items:center;justify-content:center;font-family:var(--font-heading);font-size:.68rem;color:#fff;flex-shrink:0;letter-spacing:.05em}
    .tmn-name{font-family:var(--font-body);font-size:.82rem;font-weight:600;color:#fff;line-height:1.3}
    .tmn-role{font-family:var(--font-body);font-size:.72rem;font-weight:300;color:rgba(255,255,255,.35);margin-top:2px}
    @media(max-width:700px){.tmn-grid{grid-template-columns:1fr}}
  </style>
  <section class="tmn-section" id="testimonials">
    <div class="tmn-inner">
      <div class="tmn-header">
        <div class="tmn-eyebrow">What Clients Say</div>
        <h2 class="tmn-h2">Real Feedback From Real Projects</h2>
      </div>
      <div class="tmn-grid">
        <div class="tmn-card">
          <div class="tmn-stars"><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span></div>
          <p class="tmn-quote">They redesigned our entire site without ever making it feel like a redesign &mdash; it just felt like the version that should&apos;ve existed from day one.</p>
          <div class="tmn-author"><div class="tmn-avatar">SW</div><div><div class="tmn-name">Sarah Whitfield</div><div class="tmn-role">Founder, Ecommerce Brand &mdash; Toronto, Canada</div></div></div>
        </div>
        <div class="tmn-card">
          <div class="tmn-stars"><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span></div>
          <p class="tmn-quote">We came in wanting an MVP to test an idea. What we got was a working product our own team is still building on top of.</p>
          <div class="tmn-author"><div class="tmn-avatar">DV</div><div><div class="tmn-name">Daniel Voss</div><div class="tmn-role">Product Lead, SaaS Startup &mdash; Berlin, Germany</div></div></div>
        </div>
        <div class="tmn-card">
          <div class="tmn-stars"><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span></div>
          <p class="tmn-quote">What stood out wasn&apos;t the design or the code individually &mdash; it was that one team handled strategy, build, and marketing without anything getting lost in translation.</p>
          <div class="tmn-author"><div class="tmn-avatar">AN</div><div><div class="tmn-name">Adaeze Nwosu</div><div class="tmn-role">Marketing Director &mdash; Lagos, Nigeria</div></div></div>
        </div>
        <div class="tmn-card">
          <div class="tmn-stars"><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span><span class="tmn-star"></span></div>
          <p class="tmn-quote">Custom development, done properly, is rare. They scoped it right, built it right, and didn&apos;t disappear after launch.</p>
          <div class="tmn-author"><div class="tmn-avatar">MF</div><div><div class="tmn-name">Marco Ferreira</div><div class="tmn-role">Operations Manager &mdash; Lisbon, Portugal</div></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: FAQ -->
  <style>
    .faq-section{background:var(--c8-bg);padding:clamp(5rem,10vw,9rem) 0}
    .faq-inner{max-width:1360px;margin:0 auto;padding:0 clamp(1.5rem,5vw,5rem);display:grid;grid-template-columns:300px 1fr;gap:clamp(3rem,6vw,8rem);align-items:start}
    .faq-aside{position:sticky;top:5rem}
    .faq-eyebrow{font-family:var(--font-mono);font-size:.65rem;letter-spacing:.14em;text-transform:uppercase;color:var(--c8-blue);margin-bottom:1rem}
    .faq-h2{font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.2rem);font-weight:400;color:var(--c8-ink);letter-spacing:.02em;line-height:1.2;margin-bottom:1.5rem}
    .faq-sub{font-family:var(--font-body);font-size:.85rem;font-weight:300;color:var(--c8-muted);line-height:1.7;margin-bottom:2rem}
    .faq-cta-link{display:inline-flex;align-items:center;gap:.4rem;font-family:var(--font-body);font-size:.82rem;font-weight:600;color:var(--c8-blue);text-decoration:none;transition:gap .2s}
    .faq-cta-link:hover{gap:.7rem}
    .faq-list{list-style:none}
    .faq-item{border-bottom:1px solid var(--c8-line)}
    .faq-item:first-child{border-top:1px solid var(--c8-line)}
    .faq-trigger{width:100%;background:none;border:none;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;padding:1.4rem 0;text-align:left}
    .faq-q{font-family:var(--font-body);font-size:clamp(.88rem,1.3vw,.95rem);font-weight:500;color:var(--c8-ink);line-height:1.4}
    .faq-icon{width:28px;height:28px;border-radius:50%;border:1px solid var(--c8-line);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:background .25s,border-color .25s}
    .faq-icon svg{transition:transform .35s cubic-bezier(.16,1,.3,1)}
    .faq-item.is-open .faq-icon{background:var(--c8-blue);border-color:var(--c8-blue)}
    .faq-item.is-open .faq-icon svg{transform:rotate(45deg);stroke:#fff}
    .faq-body{display:grid;grid-template-rows:0fr;transition:grid-template-rows .4s cubic-bezier(.16,1,.3,1)}
    .faq-item.is-open .faq-body{grid-template-rows:1fr}
    .faq-body-inner{overflow:hidden}
    .faq-a{font-family:var(--font-body);font-size:.88rem;font-weight:300;line-height:1.75;color:var(--c8-muted);padding-bottom:1.4rem}
    .faq-a a{color:var(--c8-blue);text-decoration:underline}
    @media(max-width:900px){.faq-inner{grid-template-columns:1fr;gap:2.5rem}.faq-aside{position:static}}
  </style>
  <section class="faq-section" id="faq">
    <div class="faq-inner">
      <div class="faq-aside">
        <div class="faq-eyebrow">Common Questions</div>
        <h2 class="faq-h2">Before You Reach Out</h2>
        <p class="faq-sub">Can&apos;t find what you&apos;re looking for? Just ask &mdash; no sales script, no pitch.</p>
        <a href="/contact" class="faq-cta-link">Talk to us <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
      </div>
      <ul class="faq-list" id="faq-list">
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">How much does it cost to work with Cr8v Stacks?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">It depends on scope &mdash; a brochure site, an ecommerce store, and a custom AI MVP all price differently. Use our <a href="/tools/cost-calculator">cost calculator</a> for an instant range, or talk to us directly for a full quote.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">How long does a typical project take?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Most website builds run a few weeks from approved design to launch; custom development and AI MVPs vary based on scope. We&apos;ll give you a real timeline once we understand what you&apos;re building.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">What services do you actually offer?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Web design, AI MVP development, and custom development are our core focus &mdash; alongside brand strategy, brand identity, and digital marketing. See the full breakdown on our <a href="/services">Services page</a>.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Do you build on WordPress, Shopify, or something else?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">All of the above, plus WooCommerce and fully custom builds. We recommend the platform based on what your business needs, not what&apos;s easiest for us.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Which payment gateways do you integrate?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">This depends on your platform and region &mdash; we&apos;ll confirm exact options (Stripe, Paystack, and others) once we know your setup.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Can you redesign or rebuild a site that already exists?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Yes &mdash; a large share of our work is exactly this. We&apos;ve rebuilt everything from basic landing pages to full property platforms.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Is SEO included in a website build?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">We build with SEO in mind from day one rather than bolting it on afterward, and we also offer SEO as a standalone service if your site already exists.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">What support do you offer after launch?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Support scope varies by project &mdash; we&apos;ll define exactly what&apos;s included before you sign off on anything, so there&apos;s no ambiguity post-launch.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Do you work with early-stage startups?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Yes, including AI MVP work specifically built to validate an early idea before a larger investment.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">What&apos;s your take on AI?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">We use AI to move faster on research and repetitive work. Direction, judgment, and quality control stay with our team on every project &mdash; AI doesn&apos;t lead the work, we do.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Why hire an agency instead of a freelancer?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">A freelancer is one person covering every discipline. We&apos;re a team where design, development, and strategy each get real, dedicated expertise instead of one person doing their best across all of them.</p></div></div></li>
        <li class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">What does &ldquo;Cr8v Stacks&rdquo; mean?</span><span class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span></button><div class="faq-body"><div class="faq-body-inner"><p class="faq-a">Exactly what it says &mdash; Creative Stacks. Every project is built from different stacks of expertise &mdash; strategy, design, development, and marketing &mdash; layered together rather than handled by one generalist.</p></div></div></li>
      </ul>
    </div>
  </section>
  <script>
  (function(){
    var list=document.getElementById('faq-list');
    if(!list)return;
    list.addEventListener('click',function(e){
      var trigger=e.target.closest('.faq-trigger');
      if(!trigger)return;
      var item=trigger.closest('.faq-item');
      var isOpen=item.classList.contains('is-open');
      list.querySelectorAll('.faq-item.is-open').forEach(function(el){
        el.classList.remove('is-open');
        el.querySelector('.faq-trigger').setAttribute('aria-expanded','false');
      });
      if(!isOpen){item.classList.add('is-open');trigger.setAttribute('aria-expanded','true');}
    });
  })();
  </script>

  <!-- SECTION: FINAL CTA -->
  <style>
    .cta-section{background:var(--c8-blue);padding:clamp(5rem,10vw,8rem) 0;position:relative;overflow:hidden}
    .cta-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 20% 50%,rgba(255,255,255,.06) 0%,transparent 55%),radial-gradient(ellipse at 80% 30%,rgba(0,0,0,.15) 0%,transparent 60%);pointer-events:none}
    .cta-section::after{content:'';position:absolute;top:-80px;right:-80px;width:440px;height:440px;border-radius:50%;border:1px solid rgba(255,255,255,.08);pointer-events:none}
    .cta-inner{max-width:860px;margin:0 auto;padding:0 clamp(1.5rem,5vw,5rem);text-align:center;position:relative;z-index:1}
    .cta-eyebrow{font-family:var(--font-mono);font-size:.65rem;letter-spacing:.14em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:1.4rem}
    .cta-h2{font-family:var(--font-heading);font-size:clamp(2.2rem,5vw,4rem);font-weight:400;color:#fff;letter-spacing:.02em;line-height:1.1;margin-bottom:1.2rem}
    .cta-desc{font-family:var(--font-body);font-size:clamp(.95rem,1.5vw,1.05rem);font-weight:300;color:rgba(255,255,255,.7);line-height:1.75;margin:0 auto 2.8rem;max-width:520px}
    .cta-btns{display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap}
    .cta-btn-primary{display:inline-flex;align-items:center;gap:.5rem;font-family:var(--font-body);font-size:.9rem;font-weight:600;color:var(--c8-blue);background:#fff;border-radius:10px;padding:.9rem 2rem;text-decoration:none;transition:transform .2s,box-shadow .2s;box-shadow:0 4px 20px rgba(0,0,0,.15)}
    .cta-btn-primary:hover{transform:translateY(-3px);box-shadow:0 10px 32px rgba(0,0,0,.2)}
    .cta-btn-primary svg{transition:transform .2s}.cta-btn-primary:hover svg{transform:translateX(3px)}
    .cta-btn-ghost{display:inline-flex;align-items:center;gap:.5rem;font-family:var(--font-body);font-size:.9rem;font-weight:500;color:rgba(255,255,255,.8);background:transparent;border:1px solid rgba(255,255,255,.25);border-radius:10px;padding:.9rem 2rem;text-decoration:none;transition:border-color .2s,color .2s,transform .2s}
    .cta-btn-ghost:hover{border-color:rgba(255,255,255,.6);color:#fff;transform:translateY(-2px)}
    .cta-footnote{margin-top:2.2rem;font-family:var(--font-body);font-size:.75rem;color:rgba(255,255,255,.38)}
  </style>
  <section class="cta-section" id="contact">
    <div class="cta-inner">
      <div class="cta-block">
        <div class="cta-eyebrow">Schedule a Consultation</div>
        <h2 class="cta-h2">Let&apos;s talk about your project.</h2>
        <p class="cta-desc">No sales script &mdash; just a straight conversation about what your project needs and what it would cost.</p>
        <div class="cta-btns">
          <a href="/contact" class="cta-btn-primary">Book a Consultation <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
          <a href="/services" class="cta-btn-ghost">View All Services</a>
        </div>
        <p class="cta-footnote">Usually responds within 24 hours &nbsp;&middot;&nbsp; No commitment required</p>
      </div>
    </div>
  </section>

'@

# 3. Inject new sections before </body>
$content = $content -replace '</body>', ($newSections + '</body>')

# 4. Save
[System.IO.File]::WriteAllText($file, $content, [System.Text.Encoding]::UTF8)
Write-Host "Done. Sections injected."
