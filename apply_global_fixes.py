import os
import re

root_dir = r"c:\Users\HP\Downloads\Mega Menu"

# 1. Update global grid line color in shared-service-components.css and HTML files
subtle_line = "rgba(8, 8, 8, 0.06)"

print("Step 1: Lightening paper gridlines across codebase...")

for dirpath, dirnames, filenames in os.walk(root_dir):
    # Skip git and agents dirs
    if ".git" in dirpath or ".agents" in dirpath:
        continue
    for filename in filenames:
        if filename.endswith(".html") or filename.endswith(".css"):
            filepath = os.path.join(dirpath, filename)
            try:
                with open(filepath, "r", encoding="utf-8") as f:
                    content = f.read()
                
                new_content = content
                # Replace 0.14 and 0.12 grid line borders with 0.06
                new_content = new_content.replace("rgba(8, 8, 8, 0.14)", "rgba(8, 8, 8, 0.06)")
                new_content = new_content.replace("rgba(8, 8, 8, 0.12)", "rgba(8, 8, 8, 0.06)")
                new_content = new_content.replace("rgba(8,8,8,0.14)", "rgba(8,8,8,0.06)")
                new_content = new_content.replace("rgba(8,8,8,0.12)", "rgba(8,8,8,0.06)")
                new_content = new_content.replace("--c8-line: #E2E8F0;", "--c8-line: rgba(8, 8, 8, 0.06);")
                new_content = new_content.replace("border-color: #E2E8F0;", "border-color: rgba(8, 8, 8, 0.06);")

                if new_content != content:
                    with open(filepath, "w", encoding="utf-8") as f:
                        f.write(new_content)
                    print(f"  Lightened gridlines in: {filename}")
            except Exception as e:
                pass

print("\nStep 2: Fixing home-b.html Selected Work CSS & Structure...")

# Read original homepage_hero_section.html for selected work style block
with open(os.path.join(root_dir, "homepage_hero_section.html"), "r", encoding="utf-8") as f:
    orig_html = f.read()

# Extract sw-matrix style block
sw_style_match = re.search(r'(<style>\s*/\* Global CTA Underline Reset.*?</style>)', orig_html, re.DOTALL)
sw_style_block = sw_style_match.group(1) if sw_style_match else ""

# Rebuild home-b.html with complete CSS and unbroken markup
custom_css_b = """
    /* ═══════════════════════════════════════════════════════════════════════════
       HOMEPAGE B — CLEAN STANDALONE HERO & SUBTLE PAPER GRID SLIDING PUZZLE
       ═══════════════════════════════════════════════════════════════════════════ */
    .c8-hero-b-standalone {
      padding-top: 8.5rem;
      padding-bottom: 5.5rem;
      text-align: center;
      position: relative;
      background: var(--c8-bg);
      border-bottom: 1px solid var(--c8-line);
    }

    /* Paper Grid Section */
    .c8-puzzle-section {
      padding: 6rem 2rem 8rem;
      max-width: 1400px;
      margin: 0 auto;
      position: relative;
    }

    .c8-puzzle-header {
      margin-bottom: 3.5rem;
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
      background-color: rgba(0, 71, 225, 0.02) !important;
    }

    /* ULTRA-SUBTLE INK HINT BADGES */
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
      opacity: 0.35;
      display: flex;
      align-items: center;
      gap: 4px;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }
    .c8-pg-cell.is-text-card:hover .c8-drag-grip {
      opacity: 0.85;
    }
    .c8-drag-grip::before {
      content: "⋮⋮";
      font-size: 0.85rem;
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
      opacity: 0.25;
      display: flex;
      align-items: center;
      gap: 4px;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }
    .c8-pg-cell.is-empty-slot:hover .c8-slot-hint {
      opacity: 0.8;
      color: var(--c8-blue);
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

home_b_html = orig_html.replace("</head>", f"<style>\n{custom_css_b}\n</style>\n</head>")

clean_hero_and_puzzle = f"""
  <!-- HERO WRITTEN CONTENT (CLEAN HOMEPAGE B STANDALONE HERO) -->
  <section class="c8-hero-top c8-hero-b-standalone">
    <div class="c8-hero-in">
      <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> SCALE WITH AUTHORITY</div>
      <h1 class="c8-hero-h1">We build what your business actually runs on.</h1>
      <p class="c8-hero-sub">Strategy, design, and liquid performance engineering — built from scratch by one team for ambitious brands.</p>
      
      <div class="c8-hero-ctas">
        <a href="https://cr8vstacks.com/contact/" class="c8-btn-primary">Start a Project →</a>
        <a href="#how-we-think" class="btn-secondary">Explore Philosophy ↓</a>
      </div>
    </div>
  </section>

  <!-- POST-HERO ARCHITECTURAL PAPER GRID SECTION -->
  <section class="c8-puzzle-section" id="how-we-think">
    <div class="c8-puzzle-header">
      <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> CREATIVE AGENCY MINDSET</div>
      <h2 class="c8-hero-h1" style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 0.5rem;">How We Think &amp; Create</h2>
      <p class="c8-hero-sub" style="margin-bottom: 0; max-width: 650px;">Design is our primary focus, supported by AI as a creative partner and built-in growth systems.</p>
    </div>

    <div class="c8-paper-grid" id="main-desk-grid">
      
      <!-- Moving Visual Tile -->
      <div class="c8-puzzle-tile" id="desk-tile">
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

  {sw_style_block}
"""

pattern = re.compile(r'<section class="c8-hero-top">.*?(?=<div class="sw-wrapper" id="selected-work">)', re.DOTALL)
if pattern.search(home_b_html):
    home_b_html = pattern.sub(clean_hero_and_puzzle, home_b_html)

pointer_js_code = """
  <!-- W3C POINTER EVENT ENGINE & UNIVERSAL ROUTE INVERSION FOR HOMEPAGE B -->
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
"""

home_b_html = home_b_html.replace("</body>", f"{pointer_js_code}\n</body>")

with open(os.path.join(root_dir, "home-b.html"), "w", encoding="utf-8") as f:
    f.write(home_b_html)

print("  home-b.html rebuilt with full CSS and Selected Work intact!")

print("\nStep 3: Updating Asset 01 UI in the-duch-apartments.html...")

duch_path = os.path.join(root_dir, "Case Studies", "the-duch-apartments.html")
if os.path.exists(duch_path):
    with open(duch_path, "r", encoding="utf-8") as f:
        duch_html = f.read()

    # Add CSS so Asset 01 gallery card snaps title/desc to top and swatches to bottom
    asset01_css = """
    /* Asset 01 Layout Snapping: Title & Desc Top, Brand Swatches Bottom */
    .c8cs-gallery-card {
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      min-height: 380px;
    }
    .c8cs-swatch-row {
      margin-top: auto !important;
      padding-top: 1.5rem !important;
    }
"""
    duch_html = duch_html.replace("</head>", f"<style>\n{asset01_css}\n</style>\n</head>")
    with open(duch_path, "w", encoding="utf-8") as f:
        f.write(duch_html)
    print("  Updated Asset 01 layout in the-duch-apartments.html!")

print("\nAll Global Fixes Executed Cleanly!")
