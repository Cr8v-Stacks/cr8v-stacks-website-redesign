import re

# Read original homepage
with open(r"c:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html", "r", encoding="utf-8") as f:
    html = f.read()

# Define Homepage B 100vh Hero CSS & Paper Grid Puzzle CSS
custom_css_b = """
    /* ═══════════════════════════════════════════════════════════════════════════
       HOMEPAGE B — 100VH HERO SECTION & ARCHITECTURAL PAPER GRID SLIDING PUZZLE
       ═══════════════════════════════════════════════════════════════════════════ */
    .c8-hero-b-full {
      min-height: 92vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 9rem 2rem 5rem;
      position: relative;
      background-color: var(--c8-bg);
      background-image: 
        linear-gradient(to right, rgba(0,0,0,0.03) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(0,0,0,0.03) 1px, transparent 1px);
      background-size: 48px 48px;
      border-bottom: 1px solid var(--c8-line);
      overflow: hidden;
    }

    .c8-hero-b-in {
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      z-index: 10;
    }

    .c8-hero-b-h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.3rem, 4.8vw, 4.2rem);
      font-weight: 700;
      line-height: 1.12;
      letter-spacing: -0.01em;
      text-transform: uppercase;
      color: var(--c8-ink);
      margin-bottom: 1.5rem;
    }

    .c8-hero-b-sub {
      font-family: var(--font-body);
      font-size: clamp(1.05rem, 1.8vw, 1.25rem);
      line-height: 1.65;
      color: var(--c8-muted);
      max-width: 720px;
      margin: 0 auto 2.5rem auto;
    }

    .c8-hero-b-ctas {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1.25rem;
      flex-wrap: wrap;
    }

    .c8-hero-b-proof {
      display: inline-flex;
      align-items: center;
      gap: 1.5rem;
      margin-top: 3.5rem;
      padding: 0.85rem 1.75rem;
      background: #FFFFFF;
      border: 1px solid var(--c8-line);
      border-radius: 4px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    }
    .c8-proof-item {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-family: var(--font-mono);
      font-size: 0.75rem;
      color: var(--c8-ink);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      font-weight: 700;
    }
    .c8-proof-item span {
      color: var(--c8-blue);
    }

    /* Architectural Paper Grid Puzzle Section */
    .c8-puzzle-section {
      padding: 6rem 2rem 8rem;
      max-width: 1400px;
      margin: 0 auto;
      position: relative;
    }

    .c8-puzzle-header {
      margin-bottom: 3rem;
      text-align: left;
    }

    .c8-paper-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(3, minmax(480px, auto));
      position: relative;
      background: var(--c8-line);
      gap: 1px;
      border: 1px solid var(--c8-line);
      border-radius: 4px;
      overflow: hidden;
      touch-action: none;
    }

    .c8-pg-cell {
      position: relative;
      padding: 4rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #FFFFFF !important;
      min-height: 480px;
      transition: background-color 0.3s ease;
      user-select: none;
      touch-action: none;
    }

    .c8-pg-cell.is-text-card {
      cursor: grab;
    }
    .c8-pg-cell.is-text-card:active {
      cursor: grabbing;
    }

    .c8-pg-cell.is-empty-slot {
      cursor: pointer;
    }
    .c8-pg-cell.is-empty-slot:hover {
      background-color: rgba(0, 71, 225, 0.03) !important;
    }

    .c8-drag-grip {
      position: absolute;
      top: 1.25rem;
      right: 1.25rem;
      font-family: var(--font-mono);
      font-size: 0.65rem;
      color: var(--c8-blue);
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
      opacity: 0.85;
      display: flex;
      align-items: center;
      gap: 4px;
      pointer-events: none;
      background: rgba(0, 71, 225, 0.06);
      padding: 4px 10px;
      border-radius: 2px;
      border: 1px solid rgba(0, 71, 225, 0.15);
    }
    .c8-drag-grip::before {
      content: "⋮⋮";
      font-size: 0.9rem;
      line-height: 1;
    }

    .c8-slot-hint {
      position: absolute;
      top: 1.25rem;
      right: 1.25rem;
      font-family: var(--font-mono);
      font-size: 0.65rem;
      color: var(--c8-muted);
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
      opacity: 0.75;
      display: flex;
      align-items: center;
      gap: 4px;
      pointer-events: none;
      background: #FAFAFA;
      padding: 4px 10px;
      border-radius: 2px;
      border: 1px solid var(--c8-line);
      transition: all 0.3s ease;
    }
    .c8-pg-cell.is-empty-slot:hover .c8-slot-hint {
      color: var(--c8-blue);
      border-color: rgba(0, 71, 225, 0.3);
      background: rgba(0, 71, 225, 0.04);
      opacity: 1;
    }

    .c8-pg-h3 {
      font-family: var(--font-heading);
      font-size: clamp(1.1rem, 2vw, 1.35rem) !important;
      font-weight: 700;
      color: var(--c8-ink);
      margin-bottom: 1rem;
      line-height: 1.35;
      text-transform: uppercase;
      letter-spacing: -0.01em;
      pointer-events: none;
    }

    .c8-pg-p {
      font-family: var(--font-body);
      font-size: 0.98rem;
      color: var(--c8-muted);
      line-height: 1.65;
      max-width: 380px;
      pointer-events: none;
    }

    .c8-puzzle-tile {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 2px;
      background: #FFFFFF;
      border: none !important;
      box-shadow: none !important;
      z-index: 20;
      cursor: grab;
      touch-action: none;
      transition: left 0.5s cubic-bezier(0.25, 1, 0.5, 1), 
                  top 0.5s cubic-bezier(0.25, 1, 0.5, 1), 
                  width 0.5s cubic-bezier(0.25, 1, 0.5, 1), 
                  height 0.5s cubic-bezier(0.25, 1, 0.5, 1);
      overflow: hidden;
    }
    .c8-puzzle-tile:active {
      cursor: grabbing;
    }

    .c8-swap-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      opacity: 0;
      transition: opacity 0.4s ease;
      pointer-events: none;
    }
    .c8-swap-img.is-active-img {
      opacity: 1;
    }

    /* Responsive Mobile 2-Column Grid on Screens <= 900px */
    @media (max-width: 900px) {
      .c8-paper-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, minmax(320px, auto));
      }
      .c8-pg-cell {
        min-height: 320px;
        padding: 2.5rem 1.75rem;
      }
    }
"""

# Insert Custom CSS into head
html_b = html.replace("</head>", f"<style>\n{custom_css_b}\n</style>\n</head>")

# Define New Hero HTML & Paper Grid Section HTML
new_hero_b_html = """
  <!-- HOMEPAGE B HERO SECTION (100VH STANDALONE HERO) -->
  <section class="c8-hero-b-full">
    <div class="c8-hero-b-in">
      <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> SCALE WITH AUTHORITY</div>
      <h1 class="c8-hero-b-h1">We build what your business actually runs on.</h1>
      <p class="c8-hero-b-sub">Strategy, design, and liquid performance engineering — built from scratch by one team for ambitious brands.</p>
      
      <div class="c8-hero-b-ctas">
        <a href="https://cr8vstacks.com/contact/" class="c8-btn-primary">Start a Project →</a>
        <a href="#how-we-think" class="btn-secondary">Explore Philosophy ↓</a>
      </div>

      <div class="c8-hero-b-proof">
        <div class="c8-proof-item"><span>★ 98.4%</span> Client Retention</div>
        <div class="c8-proof-item"><span>⚡ Sub-1.2s</span> Speed Milestone</div>
        <div class="c8-proof-item"><span>🛡️ 100%</span> Source Ownership</div>
      </div>
    </div>
  </section>

  <!-- HOMEPAGE B POST-HERO ARCHITECTURAL PAPER GRID SECTION -->
  <section class="c8-puzzle-section" id="how-we-think">
    <div class="c8-puzzle-header">
      <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> CREATIVE AGENCY MINDSET</div>
      <h2 class="c8-hero-b-h1" style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 0.5rem;">How We Think &amp; Create</h2>
      <p style="color: var(--c8-muted); font-size: 1.05rem; max-width: 600px;">Explore how we approach design, leverage AI as our creative partner, and build sustainable growth systems.</p>
    </div>

    <!-- 3x3 Architectural Paper Grid Matrix -->
    <div class="c8-paper-grid" id="main-desk-grid">
      
      <!-- Clean Moving Visual Tile -->
      <div class="c8-puzzle-tile" id="desk-tile" draggable="true">
        <img src="assets/kinetic_grid_showcase.jpg" alt="Design Identity" class="c8-swap-img is-active-img" id="img-row-1">
        <img src="cr8v_ai_workflow.png" alt="AI Creative Partner" class="c8-swap-img" id="img-row-2">
        <img src="cr8v_stack_seo.png" alt="Growth Systems" class="c8-swap-img" id="img-row-3">
      </div>

      <!-- ROW 1 -->
      <div class="c8-pg-cell is-text-card" data-row="0" data-col="0" id="d-r1-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3">Design-Led Brand &amp; Visual Systems</h3>
        <p class="c8-pg-p">Design is our primary foundation. We craft distinct visual identities, digital products, and brand systems that make your business instantly memorable.</p>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="0" data-col="1" data-img-idx="0" id="d-r1-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="0" data-col="2" data-img-idx="0" id="d-r1-c3">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>

      <!-- ROW 2 -->
      <div class="c8-pg-cell is-empty-slot" data-row="1" data-col="0" data-img-idx="1" id="d-r2-c1">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="1" data-col="1" data-img-idx="1" id="d-r2-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-text-card" data-row="1" data-col="2" id="d-r2-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3">AI as Our Creative Partner</h3>
        <p class="c8-pg-p">We leverage AI as a high-speed creative partner—accelerating research, rapid prototyping, and workflow iteration so we can ship elevated design faster.</p>
      </div>

      <!-- ROW 3 -->
      <div class="c8-pg-cell is-text-card" data-row="2" data-col="0" id="d-r3-text">
        <span class="c8-drag-grip">DRAG CARD</span>
        <h3 class="c8-pg-h3">Built-In Growth Engine</h3>
        <p class="c8-pg-p">Stunning design means nothing if it doesn't scale. Our brand systems are built to convert, capture market share, and drive long-term business momentum.</p>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="2" data-col="1" data-img-idx="2" id="d-r3-c2">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>
      <div class="c8-pg-cell is-empty-slot" data-row="2" data-col="2" data-img-idx="2" id="d-r3-c3">
        <span class="c8-slot-hint">CLICK / DRAG SLOT ↑</span>
      </div>

    </div>
  </section>
"""

# Replace Old Hero Section + Scroll Track Canvas Section (lines 891 to 1127) with New Hero B + Paper Grid Section
pattern = re.compile(r'<section class="c8-hero-top">.*?(?=<div class="sw-wrapper" id="selected-work">)', re.DOTALL)

if pattern.search(html_b):
    html_b = pattern.sub(new_hero_b_html, html_b)
    print("Successfully replaced Hero & Scroll Track Canvas with Homepage B Layout!")
else:
    print("Pattern match failed!")

# Include Paper Grid Pointer Engine JS at the end of body
puzzle_js_code = """
  <!-- POINTER EVENT ENGINE & DYNAMIC ROUTE INVERSION FOR HOMEPAGE B -->
  <script>
    (function() {
      function snapTile(gridEl, tileEl, cellEl, pad) {
        if (!gridEl || !tileEl || !cellEl) return;
        var p = pad || 20;
        var gRect = gridEl.getBoundingClientRect();
        var cRect = cellEl.getBoundingClientRect();

        var left = cRect.left - gRect.left + p;
        var top = cRect.top - gRect.top + p;
        var width = cRect.width - (p * 2);
        var height = cRect.height - (p * 2);

        tileEl.style.left = left + 'px';
        tileEl.style.top = top + 'px';
        tileEl.style.width = width + 'px';
        tileEl.style.height = height + 'px';
      }

      function swapImage(imgGroup, activeIdx) {
        imgGroup.forEach(function(img, i) {
          if (i === activeIdx) {
            img.classList.add('is-active-img');
          } else {
            img.classList.remove('is-active-img');
          }
        });
      }

      var dGrid = document.getElementById('main-desk-grid');
      var dTile = document.getElementById('desk-tile');
      var dImgs = [
        document.getElementById('img-row-1'),
        document.getElementById('img-row-2'),
        document.getElementById('img-row-3')
      ];

      var currStateD = -1;
      var isInteractingD = false;
      var interactionTimerD = null;

      function getUniversalAvailableCell(rowIdx, preferredCol) {
        if (!dGrid) return null;
        var rowCells = dGrid.querySelectorAll('.c8-pg-cell[data-row="' + rowIdx + '"]');
        var pref = null;
        var inv1 = null;
        var inv2 = null;

        rowCells.forEach(function(cell) {
          if (cell.classList.contains('is-empty-slot')) {
            var col = parseInt(cell.getAttribute('data-col'));
            if (col === preferredCol) {
              pref = cell;
            } else if (!inv1) {
              inv1 = cell;
            } else {
              inv2 = cell;
            }
          }
        });

        return pref || inv1 || inv2 || rowCells[0];
      }

      function updateUniversalLPath() {
        if (isInteractingD || !dGrid) return;

        var r1Text = dGrid.querySelector('.c8-pg-cell[data-row="0"].is-text-card') || dGrid.children[0];
        var r2Text = dGrid.querySelector('.c8-pg-cell[data-row="1"].is-text-card') || dGrid.children[5];
        var r3Text = dGrid.querySelector('.c8-pg-cell[data-row="2"].is-text-card') || dGrid.children[6];

        if (!r1Text || !r2Text || !r3Text) return;

        var winH = window.innerHeight;
        var r1 = r1Text.getBoundingClientRect();
        var r2 = r2Text.getBoundingClientRect();
        var r3 = r3Text.getBoundingClientRect();

        var trigMid = winH * 0.55;
        var trigEnd = winH * 0.25;

        var newState = 0;
        if (r3.top <= trigEnd) newState = 3;
        else if (r3.top <= trigMid) newState = 2;
        else if (r2.top <= trigMid) newState = 1;
        else newState = 0;

        if (newState !== currStateD) {
          var prevState = currStateD;
          currStateD = newState;

          if (currStateD === 0) {
            var targetCell = getUniversalAvailableCell(0, 2);
            if (prevState === 1) {
              var cMid = getUniversalAvailableCell(0, 1);
              snapTile(dGrid, dTile, cMid, 20);
              setTimeout(function() {
                if (currStateD === 0) {
                  snapTile(dGrid, dTile, targetCell, 20);
                  swapImage(dImgs, 0);
                }
              }, 250);
            } else {
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, 0);
            }
          } 
          else if (currStateD === 1) {
            var targetCell = getUniversalAvailableCell(1, 1);
            if (prevState === 0) {
              var cMid = getUniversalAvailableCell(0, 1);
              snapTile(dGrid, dTile, cMid, 20);
              setTimeout(function() {
                if (currStateD === 1) {
                  snapTile(dGrid, dTile, targetCell, 20);
                  swapImage(dImgs, 1);
                }
              }, 250);
            } else {
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, 1);
            }
          } 
          else if (currStateD === 2) {
            var targetCell = getUniversalAvailableCell(2, 1);
            snapTile(dGrid, dTile, targetCell, 20);
            swapImage(dImgs, 2);
          } 
          else if (currStateD === 3) {
            var targetCell = getUniversalAvailableCell(2, 2);
            snapTile(dGrid, dTile, targetCell, 20);
            swapImage(dImgs, 2);
          }
        }
      }

      var activePointerTarget = null;

      if (dGrid) {
        dGrid.addEventListener('pointerdown', function(e) {
          var textCard = e.target.closest('.is-text-card');
          var emptySlot = e.target.closest('.is-empty-slot');
          var tile = e.target.closest('#desk-tile');

          if (textCard || emptySlot || tile) {
            isInteractingD = true;
            activePointerTarget = textCard || emptySlot || tile;
            clearTimeout(interactionTimerD);
          }
        });

        dGrid.addEventListener('pointerup', function(e) {
          if (!activePointerTarget) return;

          var targetCell = e.target.closest('.c8-pg-cell');
          if (targetCell) {
            if (activePointerTarget.id === 'desk-tile' || activePointerTarget.classList.contains('is-empty-slot')) {
              var imgIdx = parseInt(targetCell.getAttribute('data-img-idx')) || 0;
              snapTile(dGrid, dTile, targetCell, 20);
              swapImage(dImgs, imgIdx);
            } else if (activePointerTarget.classList.contains('is-text-card') && targetCell !== activePointerTarget) {
              var tempHTML = targetCell.innerHTML;
              targetCell.innerHTML = activePointerTarget.innerHTML;
              activePointerTarget.innerHTML = tempHTML;

              var tempClass = targetCell.className;
              targetCell.className = activePointerTarget.className;
              activePointerTarget.className = tempClass;
            }
          }

          activePointerTarget = null;
          interactionTimerD = setTimeout(function() {
            isInteractingD = false;
            currStateD = -1;
            updateUniversalLPath();
          }, 1500);
        });
      }

      window.addEventListener('scroll', updateUniversalLPath, { passive: true });
      window.addEventListener('resize', updateUniversalLPath, { passive: true });

      setTimeout(function() {
        updateUniversalLPath();
      }, 100);
    })();
  </script>
</body>
"""

html_b = html_b.replace("</body>", f"{puzzle_js_code}\n</body>")

# Save as home-b.html
with open(r"c:\Users\HP\Downloads\Mega Menu\home-b.html", "w", encoding="utf-8") as f:
    f.write(html_b)

print("Created home-b.html successfully!")
