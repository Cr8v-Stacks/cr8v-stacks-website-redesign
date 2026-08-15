# MASTER PROMPT: 3D TETRIS HERO SCROLL ASSEMBLY ENGINE

## 📌 TASK OBJECTIVE
Build an authentic, interactive, scroll-driven **3D Tetris Assembly Hero Section** for the CR8V Stacks agency homepage. The Tetris blocks must fall sequentially, rotate mid-air, and lock into an unbroken baseline foundation as the user scrolls down, and reverse smoothly when scrolling back up.

---

## 🎯 SOURCE OF TRUTH REFERENCE FILES
- **Primary Reference Image (100% Visual Parity)**:
  `c:\Users\HP\Downloads\Mega Menu\wp-theme\cr8v-stacks\assets\img\cr8v_home_hero_bg.png`
- **Standalone Interactive Prototype File**:
  `c:\Users\HP\Downloads\Mega Menu\tetris-hero-scroll-prototype.html`
- **Master Theme Directory**:
  `c:\Users\HP\Downloads\Mega Menu\wp-theme\cr8v-stacks`

---

## 🎨 VISUAL DESIGN SYSTEM & BLOCK PARITY SPECIFICATIONS

Each Tetris block must be rendered with **100% visual fidelity** to `cr8v_home_hero_bg.png`:

1. **3D Matte Texture & Bevels**:
   - Soft rounded corners (`border-radius: 10px - 14px`).
   - Matte foam / wooden tactile finish (no glossy reflections).
   - Inset light bevel highlights on top-left (`inset 2px 2px 3px rgba(255,255,255,0.35)`).
   - Soft bottom-right inner shadow bevels (`inset -2px -2px 3px rgba(0,0,0,0.25)`).
   - Soft ambient floor drop shadows (`box-shadow: 0 10px 24px rgba(0,0,0,0.12)`).

2. **Studio-Grade Muted Color Palette**:
   - **Soft Slate Blue / Periwinkle (`#8CAAD8`)**: `Web Design`, `AI MVP`, `Web App`
   - **Dark Charcoal Slate (`#3A3C3E`)**: `Next.js`, `WordPress`, `API`
   - **Muted Sage Green (`#94B598`)**: `Figma`, `UX/UI`
   - **Warm Terracotta / Burnt Orange (`#D98858`)**: `Elementor`, `Shopify`, `E-com`
   - **Deep Midnight Blue (`#243B54`)**: `Custom Development`, `Digital Marketing`
   - **Muted Sand Beige (`#D9CFBD`)**: `SEO`

3. **Typography & Debossed Labels**:
   - Font Family: `DM Sans` / `Inter` (medium weight, offset debossed text styling).
   - Clean whitespace around text; no text clipping or overlap errors.

---

## 🛠️ STEP-BY-STEP IMPLEMENTATION ROADMAP

### Step 1: Component Style Locking
Lock down each isolated 3D Tetris block component in `tetris-hero-scroll-prototype.html` until it matches `cr8v_home_hero_bg.png` 100%.

### Step 2: Finished Assembled Position (100% Scroll)
Lock down the exact 2D/3D resting grid coordinates for the $100\%$ assembled state. Ensure ZERO overlaps, ZERO clipping bugs, and zero floating anomalies.

### Step 3: Sequential Scroll-Driven Entrance Physics (0% → 100% Scroll)
- **Initial Load ($0\%$ scroll)**: Centered hero box (Eyebrow, Headline, Subtitle, 2 Buttons) clean in upper space. Airborne pieces (`Web App`, `API`, `UX/UI`, `E-com`) peek into top-left and top-right margins.
- **Sequential Fall Motion**: Floor tier rises up from below (`translateY(+250px)` $\rightarrow$ `0px`); Middle tier drops from above with rotation (`translateY(-400px)` + `rotate(45deg)` $\rightarrow$ `0px`); Airborne tier swoops into top margins.
- **Reverse Scroll**: Un-stacks step-by-step in exact reverse order when scrolling back up.

---

## 🔒 AGENCY BRAND GUARDRAILS
- **Primary Accent**: `#0047E1` Royal Blue (Buttons, Eyebrow `//`, active highlights).
- **Solid Obsidian Canvas**: `#080808` (Dark sections).
- **Surface Lift**: `#F2F2F0` (Cards).
- **Canvas Base**: `#FFFFFF` Pure White (Light sections).
