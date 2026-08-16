# MASTER PROMPT: 3D TETRIS MODULAR HERO SYSTEM FOR CR8V STACKS

> **Instructions for the AI Assistant**: Read, digest, and enforce every directive, rule, and design constraint in this master prompt before taking any action. You MUST discuss and obtain user approval before writing code.

---

## 🎯 PROJECT VISION & ROLE
You are pair-programming with the lead designer/developer of **CR8V Stacks** (a high-end digital product agency). 
The goal is to build an exact, studio-grade **3D Tetris Modular Hero System** for the agency website hero section, with scroll-driven physics (State A: 70% In-Motion -> State B: 100% Fully Assembled Resting State).

**Primary Visual Source of Truth**:  
`c:\Users\HP\Downloads\Mega Menu\recreate_this_exact_design_202608151817.jpeg`

---

## 📐 CORE DESIGN SYSTEM & BRAND RULES

1. **Border Radius Rule**:  
   Strict `border-radius: 2px` across all Tetris block units and sub-cells (`--block-radius: 2px`).

2. **Standard Module Unit Scale**:  
   Enforce a standard 1×1 module scale (`--u: 56px`) forming a 15-column × 7-row discrete 2D/3D CSS Grid matrix (`grid-template-columns: repeat(15, var(--u)); grid-template-rows: repeat(7, var(--u));`).

3. **Exact Studio Color Palette**:
   - **Obsidian Black (`#141414`)**: OpenAI, Shopify, Claude.
   - **Royal Blue (`#0D52E0`)**: Custom Development, Next.js, AI MVP.
   - **Light Off-White (`#E5E4DE`)**: Web Design, WordPress.
   - **Terracotta (`#E85A1C`)**: Elementor.
   - **Forest Green (`#1E7D34`)**: Figma.
   - **Sand Beige (`#D9C5A0`)**: Content Writing.
   - **Purple (`#5C32BD`), Lime Green (`#6E9C26`), Golden Yellow (`#EAB308`)**: Structural Tetris step/L filler blocks.

4. **Verified CDN Logo Links (STRICT)**:
   - **Claude**: `https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg`
   - **OpenAI**: `https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/default.svg`
   - **Next.js**: `https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nextdotjs.svg`
   - **Shopify**: `https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/shopify.svg`
   - **Elementor**: `https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/elementor.svg`
   - **WordPress**: `https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/wordpress.svg`

---

## 🧱 INTERLOCKING GEOMETRY & TETRIS DYNAMICS

- **Authentic Puzzle Geometry**: Blocks MUST use authentic interlocking Tetris shapes (L-pieces, step-pieces, Z-pieces, long bars, corner steps) so they fit flush like a real puzzle wall. NEVER reduce pieces to generic square/rectangular box monotony.
- **Strict Grid Physics**: Every block occupies **discrete, non-overlapping grid cells** (`grid-column`, `grid-row`). Zero pixel overlaps, zero z-index clashing, zero border bleeding.

---

## ✍️ HERO CONTENT OVERLAY & SAFETY CLEARANCE

The upper-center space of the Hero Arena contains the live agency written copy:
- **Eyebrow**: `// CRAFTED FOR HIGH-GROWTH BRANDS`
- **Headline (`h1`)**: `WE BUILD DIGITAL PRODUCTS THAT SCALE BRANDS`
- **Subtitle**: `From strategy and high-converting platforms to custom Next.js applications and AI MVP integrations — engineered for liquid performance.`
- **CTA Buttons**: `[START A PROJECT →]` and `[EXPLORE SERVICES ↓]`

**Safety Clearance Zone**:  
Columns 4 to 12 in Rows 1 to 5 must remain 100% CLEAR of any blocks in the 100% resting state to ensure >30% breathing space around the CTA buttons. The resting matrix forms a U-shaped stadium contour along the bottom floor and side flanks.

---

## 🔄 DUAL-STATE MOTION ENGINE

1. **State A: 70% In-Motion (Screenshot Parity)**:  
   Base blocks rest along the bottom floor while 4 airborne blocks (Purple WP L-piece, Blue Next.js bar, Green Z-piece, Yellow L-piece) float at angles above the matrix.
2. **State B: 100% Fully Assembled (Resting State)**:  
   All 4 airborne blocks dock smoothly into dedicated sockets along the floor and outer side flanks, framing the Hero text cleanly.

---

## ⚠️ WORKFLOW & INTERACTION PROTOCOL (CRITICAL)

1. **DISCUSS FIRST — DO NOT CODE IMMEDIATELY**:  
   Whenever the user requests a change, first break down what you understand, present an ASCII grid architectural map in chat, discuss design trade-offs, and wait for the user to explicitly say `"proceed"` before touching any files.
2. **NEVER REMOVE SECTIONS OR STUBS**:  
   Keep the page header, motion toggle bar, source reference box, hero arena, and **all 11 isolated component catalog cards** fully intact below the hero section.
3. **PRESERVE YOUTUBE TUTORIAL BACKUPS**:  
   Before editing `tetris-hero-scroll-prototype.html`, always write a full 800+ line step backup file (e.g. `_BACKUP_tetris-hero-scroll-prototype_StepX.html`).

---

## 📁 KEY FILE PATHS
- **Prototype File**: `c:\Users\HP\Downloads\Mega Menu\tetris-hero-scroll-prototype.html`
- **Master Prompt File**: `c:\Users\HP\Downloads\Mega Menu\TETRIS_HERO_MASTER_PROMPT.md`
- **Reference Image**: `c:\Users\HP\Downloads\Mega Menu\recreate_this_exact_design_202608151817.jpeg`
