# 🎨 CR8V STACKS — MASTER DESIGN SYSTEM & FORENSIC TYPOGRAPHY AUDIT
**Cumulative Section-by-Section Typographic, Component, & Architectural Ecosystem Inventory**  
*Document Version: 5.0 — The Comprehensive Master Source of Truth (SSOT)*

---

## 🧭 Executive Overview & Audit Purpose
This master document is the unified, cumulative Single Source of Truth (SSOT) reverse-engineering the complete design system across every page of the CR8V Stacks ecosystem. By methodically dissecting every section on every page contextually—rather than blindly scraping tags—we identify design inconsistencies, rogue font sizes, color drifts, button variations, and establish canonical design tokens for the agency.

---

# 🌐 PART 1: GLOBAL FONT FAMILY RELATIONS & SYSTEM TOPOLOGY

The CR8V Stacks design language is structured around four distinct typefaces, each assigned a strict, non-overlapping functional role:

```
┌──────────────────────────────────────────────────────────────────────────────────────────┐
│                             CR8V STACKS TYPOGRAPHY ECOSYSTEM                             │
├───────────────────┬──────────────────────────────┬───────────────────────────────────────┤
│ Typeface          │ Primary Functional Role      │ Applied Elements & Anatomy            │
├───────────────────┼──────────────────────────────┼───────────────────────────────────────┤
│ 1. MICHROMA       │ Primary Brand & Headings     │ • Hero H1 Headings                    │
│    (Geometric)    │ Display Authority            │ • Section H2 Headers                  │
│                   │                              │ • Card & Bento H3 Titles              │
│                   │                              │ • Big Metric Stat Numbers             │
│                   │                              │ • Primary Header Brand CTA (.c8-btn-cta) │
├───────────────────┼──────────────────────────────┼───────────────────────────────────────┤
│ 2. SPACE MONO     │ Technical Monospace & UI     │ • Section Eyebrows & Badges (// )    │
│    (Monospace)    │ Terminal Precision           │ • Deliverable Tag Pills (.fylla-pill) │
│                   │                              │ • Metadata Labels & Micro HUD Tags    │
│                   │                              │ • Number Counters (01, 02, 03)        │
│                   │                              │ • Primary & Secondary Terminal Action │
│                   │                              │   Buttons (.c8-btn-primary, etc.)     │
│                   │                              │ • Tertiary Text-Based Link CTAs       │
├───────────────────┼──────────────────────────────┼───────────────────────────────────────┤
│ 3. DM SANS        │ Human Editorial & Narrative  │ • Hero Lead Paragraphs                │
│    (Neo-Grotesque)│ Longform Readability         │ • Section Subtitles & Body Copy       │
│                   │                              │ • Card Descriptions & Tool Summaries  │
│                   │                              │ • Accordion Questions & Answers       │
│                   │                              │ • Client Quotes & Testimonial Bodies  │
│                   │                              │ • Primary Navigation Bar Links        │
├───────────────────┼──────────────────────────────┼───────────────────────────────────────┤
│ 4. BEBAS NEUE     │ Big Display & Numbers        │ • 404 Large Display Numbers           │
│    (Condensed)    │ Kinetic Impact               │ • Interactive Services Hoverlist Items│
└───────────────────┴──────────────────────────────┴───────────────────────────────────────┘
```

---

# 📦 PART 2: HOMEPAGE FORENSIC SECTION-BY-SECTION AUDIT (`front-page.php` / `home-b.html`)

We establish our baseline typography and component standards from the **Hero Section**, then walk through every subsequent section sequentially, cross-checking Headings, Paragraphs/Body, Eyebrows, and Buttons against the benchmark.

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                       HOMEPAGE BENCHMARK STANDARDS                          │
├─────────────────────────────────────────────────────────────────────────────┤
│  Primary Heading (H1) │ Michroma clamp(2rem, 4.5vw, 2.6rem) 700 Uppercase   │
│  Lead Paragraph (P)   │ DM Sans 1rem (16px) 400 Line-height 1.65 #4A4A4A    │
│  Eyebrow Tag          │ Space Mono 0.75rem (12px) 700 // in #0047E1         │
│  Primary Button       │ Space Mono 0.82rem 700 Solid #0047E1 Radius 4px     │
│  Secondary Button     │ Space Mono 0.82rem 700 1.5px Solid Border Radius 4px │
│  Tertiary CTA         │ Space Mono 0.78rem 700 Text + Border-Bottom + Arrow │
└─────────────────────────────────────────────────────────────────────────────┘
```

---

### Section 01: Hero (`#cr8v-hero` / `.c8-hero-top`) — THE BENCHMARK
* **Canvas Surface**: Light Canvas `#FFFFFF` with 3D Tetris Matrix Arena.
* **Eyebrow**: `.c8-eyebrow` -> `Space Mono`, `0.75rem` (12px), `700`, uppercase, `letter-spacing: 0.16em`, color `--c8-blue` (`#0047E1`), prefix `<span class="c8-eyebrow-slash">//</span> `.
* **Primary Heading (H1)**: `.c8-hero-h1` -> `'Michroma', sans-serif`, `clamp(2rem, 4.5vw, 2.6rem)`, `700`, uppercase, line-height `1.15`, letter-spacing `0.01em`, color `var(--c8-ink)` (`#080808`).
* **Lead Paragraph (P)**: `.c8-hero-sub` -> `'DM Sans', sans-serif`, `1rem` (16px), `400`, line-height `1.65`, color `#4A4A4A` (`!important`).
* **Buttons**:
  * **Primary Solid CTA** (`.c8-btn-primary` / `.btn-primary-c8`): `Space Mono`, `0.82rem` (13.1px), `700`, uppercase, letter-spacing `0.04em`, background `--c8-blue` (`#0047E1`), text `#FFFFFF`, padding `0.75rem 1.75rem`, border-radius `4px`, border `none`. Hover: `#0038C0`, `translateY(-2px)`, shimmer linear sweep (`115deg`) via `::before`.
  * **Secondary Outline CTA** (`.btn-secondary`): `Space Mono`, `0.82rem`, `700`, uppercase, background `#FFFFFF`, border `1.5px solid rgba(8, 8, 8, 0.22)`, text `#080808`, border-radius `4px`, padding `0.75rem 1.75rem`, shadow `0 2px 10px rgba(0,0,0,0.05)`. Hover: border `#0047E1`, text `#0047E1`, `translateY(-2px)`.

---

### Section 02: Creative Agency Mindset (`#how-we-think` / `.c8-puzzle-section`)
* **Canvas Surface**: Solid Obsidian Black Canvas `#080808` (Heavy Workstation).
* **Eyebrow**: `.c8-eyebrow` -> `Space Mono`, `0.75rem`, `700`, `// ` in `#0047E1`. *(Status: 100% Match to Benchmark)*.
* **Section Heading**: Reuses `<h2 class="c8-hero-h1" style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 0.5rem;">`.
  * *Discrepancy*: Reuses H1 class `.c8-hero-h1` on an `<h2>` element with an inline clamp override instead of a dedicated section H2 class.
* **Body / Paragraphs**:
  * Section Subtitle: `.c8-hero-sub` -> `DM Sans 1rem 400 line-height 1.65 rgba(255, 255, 255, 0.65)`. *(Status: Match)*.
  * Grid Card Body: `.c8-pg-p` -> `DM Sans 0.98rem 400 line-height 1.65 rgba(255, 255, 255, 0.65)`. *(Status: Match)*.
* **Card Headings (H3)**: `.c8-pg-h3` -> `Michroma clamp(1.1rem, 2vw, 1.35rem) 700 uppercase line-height 1.35 #FFFFFF`.
* **Buttons / Interactive**: No buttons; uses `.c8-drag-grip` (`Space Mono`, `--c8-blue`) and `.c8-slot-hint` (`Space Mono`).

---

### Section 03: Selected Work Case Studies (`#selected-work` / `.sw-matrix-wrapper`)
* **Canvas Surface**: Pure White Canvas `#FFFFFF`.
* **Eyebrow**: `.sw-matrix-eyebrow` -> `Space Mono 0.72rem 700 uppercase // `.
  * *Discrepancy*: Font size drops to `0.72rem` (11.5px) vs Hero `0.75rem` (12px).
* **Section Heading**: Uses `<h2 class="sw-matrix-h2" style="font-size: clamp(1.6rem, 3.5vw, 2.5rem); margin-bottom: 0;">`.
  * *Discrepancy*: Conflates section header and card title under `.sw-matrix-h2` class.
* **Case Study Card Headings**: Uses `<h2 class="sw-matrix-h2">` -> Base font `clamp(1.1rem, 2.6vw, 1.1rem)`.
  * *CRITICAL ANOMALY*: **Semantic Tag Error**. Case study cards are tagged as `<h2>` instead of `<h3>`, creating an invalid heading structure under the section H2.
* **Body / Paragraphs**:
  * Intro Subtitle & Card Description: `.sw-matrix-sub` -> `DM Sans 0.95rem 300 #555555 line-height 1.7`.
  * *CRITICAL ANOMALY*: **Weight & Size Drift**. Drops to font-weight `300` (Light) and `0.95rem` (15.2px) vs Hero baseline `400` (Normal) and `1rem` (16px).
  * Quote Box: `.sw-quote-box p` -> `DM Sans 0.95rem italic #33332F`, border-left `2px solid #0047E1`.
* **Button / Interactive**:
  * Class: `.c8-text-cta` -> **Tertiary Button**: `Space Mono 0.78rem 700 uppercase`, color `#0047E1`, `border-bottom: 1px solid rgba(0, 71, 225, 0.35)`, `padding-bottom: 3px`, inline SVG arrow. *(Status: Verified in CSS line 1420)*.

---

### Section 04: Services Deep Dive (`#services-deep-dive` / `.sdv-section`)
* **Canvas Surface**: Solid Obsidian Black Canvas `#080808`.
* **Eyebrow**: `.sdv-eyebrow` -> `Space Mono 0.72rem 700 // ` in `--c8-blue`.
* **Section Heading (H2)**: `.sdv-h2` -> `Michroma clamp(1.5rem, 3.2vw, 2.6rem) 700 line-height 1.18 #FFFFFF` (with `em` in `--c8-blue`). *(Status: Match)*.
* **Body / Paragraphs**:
  * Section Subtitle: `.sdv-sub` -> `DM Sans 1.05rem 300 rgba(255,255,255,0.6) line-height 1.7`.
    * *Discrepancy*: Subtitle size increases to `1.05rem` (16.8px) with `300` light weight.
  * Accordion Panel Desc: `.sdv-panel-desc` -> `DM Sans 0.92rem 300 line-height 1.7`.
* **Card / Accordion Headings (H3)**: `.sdv-item-title` -> `Michroma clamp(1rem, 1.8vw, 1.35rem) 700 uppercase`.
* **Button / Interactive**:
  * Class: `.sdv-panel-cta` -> **Tertiary Button**: `Space Mono 0.78rem 700 uppercase`, color `--c8-blue`, arrow icon.
  * *Discrepancy*: Has **NO** `border-bottom` underline (unlike `.c8-text-cta` in Selected Work).

---

### Section 05: Dev Playground (`#dev-playground` / `.dp-section`)
* **Canvas Surface**: Split Left (`#FFFFFF`) & Right (`#F2F2F0` / `#080808`) Canvas.
* **Eyebrows**: `.dp-eyebrow` & `.dp-right-eyebrow` -> `Space Mono 0.72rem 700 // `.
* **Section Heading (H2)**: `.dp-h2` -> `Michroma clamp(1.6rem, 3.2vw, 2.6rem) 700 line-height 1.12 #080808`.
* **Body / Paragraphs**:
  * Section Subtitle: `.dp-sub` -> `DM Sans 1rem 300 #555555 line-height 1.7` (Weight drift: `300` vs `400`).
  * Tool Desc: `.dp-tool-entry-desc` -> `DM Sans 0.78rem 300`.
  * Right Panel Desc: `.dp-right-desc` -> `DM Sans 0.88rem 300`.
* **Card / Tool Headings (H3)**:
  * Class: `.dp-tool-entry-name` -> `DM Sans 0.95rem 600 #080808`.
  * *CRITICAL ANOMALY*: **Font Family Drift**. Uses `DM Sans` (sans-serif) instead of `Michroma` for tool headings.
* **Buttons / Interactive**:
  * **Primary Solid CTA**: `.dp-btn-primary` -> `Space Mono 0.82rem 700`, background `--c8-blue`, text `#FFFFFF`, radius `4px`. *(Status: 100% Match)*.
  * **Secondary / Ghost CTA**: `.dp-btn-ghost` -> `DM Sans 0.85rem 500`, `border-bottom: 1px solid rgba(0, 71, 225, 0.35) !important`.
    * *CRITICAL ANOMALY*: **Font Family Drift**. Uses `DM Sans 500` instead of `Space Mono 700`, breaking button consistency.

---

### Section 06: How We Work (`#how-we-work` / `.hww-section`)
* **Canvas Surface**: Architectural Off-White Canvas `#F4F5F7`.
* **Eyebrow**: `.hww-eyebrow` -> `Space Mono 0.72rem 700 // ` in `--c8-blue`.
* **Section Heading (H2)**: `.hww-h2` -> `Michroma clamp(1.5rem, 3.2vw, 2.6rem) 700 line-height 1.1 #080808`.
* **Body / Paragraphs**:
  * Subtitle: `.hww-desc` -> `DM Sans 1.05rem 300 #555555 line-height 1.85`.
  * Bento Body: `.hww-cbody` -> `DM Sans 0.8rem 300 line-height 1.6`.
* **Card / Bento Headings (H3)**: `.hww-ctitle` -> `Michroma clamp(0.82rem, 1.5vw, 0.95rem) 700 uppercase`.
  * *Discrepancy*: Under-scaled card headings (as small as `0.82rem` / 13.1px).
* **Card Eyebrows / Labels**: `.hww-clabel` -> `DM Sans 0.68rem 700 uppercase letter-spacing 0.18em`.
  * *CRITICAL ANOMALY*: **Font Family Drift**. Uses `DM Sans` for eyebrow labels instead of `Space Mono`!
* **Big Metric Callouts**: `.hww-bnum` -> `Michroma clamp(2.2rem, 4.5vw, 3.6rem) 700 line-height 1`.

---

### Section 07: Who We Are (`#who-we-are` / `.wwa-section`)
* **Canvas Surface**: Pure White Canvas `#FFFFFF`.
* **Eyebrow**: `.wwa-eyebrow` -> `Space Mono 0.72rem 700 #0047E1`.
  * *CRITICAL ANOMALY*: **Missing Syntax Prefix**. Completely lacks the `// ` prefix seen on all other sections.
* **Section Heading (H2)**: `.wwa-h2` -> `Michroma clamp(1.8rem, 3.2vw, 2.6rem) 700 line-height 1.2 #080808`.
* **Body / Paragraphs**: `.wwa-desc` -> `DM Sans 0.98rem 300 #555555 line-height 1.8`.
* **Card / Pillar Headings (H3)**: `.wwa-feat-title` -> `Michroma 0.95rem 700 uppercase #080808`.
* **Pillar Numbers**: `.wwa-feat-num` -> `Space Mono 0.85rem 700 #0047E1` inside `32x32px` square.

---

### Section 08: Testimonials (`#testimonials` / `.tmn-section`)
* **Canvas Surface**: Pure White Canvas `#FFFFFF` with `#F2F2F0` Surface Lift Cards.
* **Eyebrow**: `.tmn-eyebrow` -> `Space Mono 0.72rem 700 // ` in `--c8-blue`.
* **Section Heading (H2)**: `.tmn-h2` -> `Michroma clamp(1.8rem, 3.5vw, 2.6rem) 700 line-height 1.25 #080808`.
* **Body / Paragraphs**:
  * Main Quote: `.tmn-main-quote` -> `DM Sans clamp(1.2rem, 1.8vw, 1.5rem) 500 line-height 1.5 #080808`.
  * Sub Quote: `.tmn-sub-quote` -> `DM Sans 0.92rem 300 #555555 line-height 1.65`.
  * Author Name / Role: `DM Sans 1.05rem 700` / `DM Sans 0.82rem 300 #555555`.
* **Button / Interactive**:
  * **Primary Button**: `.tmn-schedule-btn` -> `Space Mono 0.82rem 700`, background `--c8-blue`, text `#FFFFFF`, radius `4px`. *(Status: 100% Match)*.

---

### Section 09: FAQ Section (`#faq` / `.faq-section`)
* **Canvas Surface**: Pure White Canvas `#FFFFFF`.
* **Eyebrow**: `.faq-eyebrow` -> `Space Mono 0.72rem 700 // ` in `--c8-blue`.
* **Section Heading (H2)**: `.faq-h2` -> `Michroma clamp(1.6rem, 3vw, 2.4rem) 700 #080808`.
* **Body / Paragraphs**: Subtitle `DM Sans 0.95rem 300`, Answers `.faq-answer-p` `DM Sans 0.95rem 300 line-height 1.75`.
* **Question Triggers**: `.faq-trigger-btn` -> `DM Sans 1rem 600 #080808`.
* **Buttons / Interactive**:
  * **Primary Button** (Pre-footer): `.c8-btn-primary` -> `Space Mono 0.84rem 700`, background `--c8-blue`, radius `4px`.
  * **Tertiary CTA**: `.faq-cta-link` -> `Space Mono 0.75rem 700 uppercase`, color `#0047E1`, text + arrow, NO bottom border.

---

### Section 10: Pre-Footer Conversion CTA (`#contact` / `.cta-section`)
* **Canvas Surface**: Pure White Canvas `#FFFFFF` with Paper Grid styling.
* **Badge / Eyebrow**: `.cta-badge` -> `Space Mono 0.72rem 700 // ` in `--c8-blue`.
* **Heading (H2)**: `.cta-h2` -> `Michroma clamp(1.6rem, 3.2vw, 2.5rem) 700 line-height 1.2 #080808`.
* **Description (P)**: `.cta-desc` -> `DM Sans 0.98rem 300 #555555 line-height 1.7`.
* **Button / Interactive**:
  * **Primary Button**: `.cta-btn-pill` / `.c8-btn-primary` -> `Space Mono 0.84rem 700 uppercase`, background `--c8-blue`, text `#FFFFFF`, radius `4px`, padding `0.9rem 2.2rem`.

---

### Section 11: Global Header Shell (`header.html` / `parts/header.php`)
* **Primary Navigation Links**: `.c8-pnav-link` -> `DM Sans 13px 500 #080808`.
* **Header CTA Button**: `.c8-btn-cta` -> `Michroma 10.5px 700 uppercase`, background `#0047E1`, text `#FAFAF7`, radius `4px`.
  * *Design Rationale*: Correctly applies `Michroma` as the primary brand display greeting button aligned with top-level agency identity.

---

### Section 12: Global Footer Shell (`footer.html` / `parts/footer.php`)
* **Footer Eyebrow**: `.c8ft-hero-tag` -> `Space Mono 10px letter-spacing 0.3em`, color `--c8ft-blue-hi` (`#4A9EFF`).
  * *CRITICAL ANOMALY*: **Prefix Syntax Deviation**. Uses a custom `20x1px` solid line instead of `// `.
* **Footer Hero Heading**: `.c8ft-hero-title` -> `Michroma clamp(2.5rem, 5vw, 1.8rem) 700`.
  * *CRITICAL ANOMALY*: **Inverted Clamp Syntax Error**. Min (`2.5rem`) > Max (`1.8rem`), breaking responsive scaling.
* **Footer CTA Button**: `.c8ft-hero-cta` -> `DM Sans 14px 600`, background `#0047E1`, text `#FFFFFF`, radius `2px`.
  * *CRITICAL ANOMALY*: **Triple Deviation**. Uses `DM Sans` (not `Space Mono`), weight `600` (not `700`), and radius `2px` (not `4px`).

---

# 📦 PART 3: ABOUT US / STUDIO FORENSIC AUDIT (`about-us.html`)

### 01. Studio Hero (`.fylla-hero-section`)
* **Eyebrow**: `.fylla-meta-tag` (`Space Mono`, `0.72rem`, `700`, uppercase, `--c8-blue`, prefix `// `).
* **H1 Title**: `.fylla-hero-h1` (`Michroma`, `clamp(2rem, 4.5vw, 3.2rem)`, `700`, uppercase, line-height `1.18`, `#080808`).
  * Italic Serif Accent: `.c8abt-serif-italic` (`Georgia`, `italic`, `300`, `--c8-blue`, lowercase).
  * Gradient Highlight: `.c8abt-highlight-text` (Linear gradient `#0047E1` to `#00C2FF`, `800`).
* **Body / Intro**: `.fylla-hero-p` (`DM Sans`, `1.05rem`, `400`, `#555555`, line-height `1.65`).
* **Pill Badges**: `.fylla-pill` (`Space Mono`, `0.72rem`, `700`, uppercase, background `#FAFAF7`, border `1px solid rgba(8,8,8,0.14)`, radius `4px`).
* **Visual HUD Tag**: `.fylla-hud-tag` (`Space Mono`, `8.5px`, letter-spacing `0.2em`, `#FAFAF7` on `#080808`, border-top `2px solid #0047E1`).

### 02. Values & Philosophy (`.fylla-values-section`)
* **Left Narrative**: Eyebrow `.fylla-meta-tag`, Section Title (H2) `.fylla-values-h2` (`Michroma clamp(1.4rem, 2.6vw, 2.1rem) 700`), Body `.fylla-values-p` (`DM Sans 0.95rem 400 #555555 line-height 1.7`), CTA `.c8-btn-primary` (`Space Mono 0.84rem 700 #FFFFFF on #0047E1 radius 4px`).
* **Right Values Items**: Card Title (H3) `.fylla-value-h3` (`Michroma 1.05rem 700 uppercase #080808`), Desc `.fylla-value-desc` (`DM Sans 0.92rem 300 #555555 line-height 1.65`), Icon Box `48x48px` background `rgba(0, 71, 225, 0.08)`.

### 03. Who We Build For (`.fylla-fit-section`)
* **Section Title (H2)**: `Michroma clamp(1.5rem, 3vw, 2.2rem) 700 #080808`.
* **Card Titles (H3)**: `Michroma 1.05rem 700 uppercase #080808`.
* **Card Descriptions**: `DM Sans 0.92rem 300 #555555 line-height 1.65`.

### 04. Leadership & Founder Bio (`.fylla-leadership-section`)
* **Section Title (H2)**: `Michroma clamp(1.5rem, 3vw, 2.2rem) 700 #080808`.
* **Founder Name**: `Michroma 1.2rem 700 uppercase #080808`.
* **Founder Role**: `Space Mono 0.75rem 700 uppercase --c8-blue`.
* **Bio Copy**: `DM Sans 0.95rem 400 #555555 line-height 1.75`.

---

# 📦 PART 4: CONVERSION PAGES FORENSIC AUDIT (CONTACT, DISCOVERY, FAQ, 404)

### 01. Contact Us (`Contact_us.html`)
* **Canvas**: Solid Obsidian `#080808` Backdrop with Paper Ticket Surface `#F2F1EC`.
* **Stamp**: `.c8ct-stamp span` -> `Space Mono 8.5px 700 uppercase --blue (#0047E1)`.
* **Eyebrow**: `.c8ct-tag` -> `Space Mono 9px (0.56rem) 700 letter-spacing 0.28em uppercase --blue` with custom `16x1px solid line`.
  * *Discrepancy*: Micro `9px` size and solid line prefix instead of standard `0.75rem // `.
* **Headline (H1)**: `.c8ct-h1` -> `Michroma 2.2rem (35px) 700 line-height 1.15 #080808` (Non-responsive fixed font).
* **Body / Lede**: `.c8ct-lede` -> `DM Sans 14.5px (0.90rem) 300 line-height 1.6 #4A4A4A`.
* **Submit CTA**: `.c8cf-submit` -> `Space Mono 0.84rem 700 uppercase background #0047E1 text #FFFFFF radius 4px`.

### 02. Discovery Call (`discovery-call.html`)
* **Stamp**: `.c8dc-stamp span` -> `Space Mono 8px 700 --blue (#0047E1)`.
* **Eyebrow**: `.c8dc-tag` -> `Space Mono 9.5px 700 letter-spacing 0.26em --blue` with custom `16x1px solid line`.
* **Headline (H1)**: `.c8dc-h1` -> `Michroma clamp(1.6rem, 3.2vw, 2.4rem) 700 #080808` (Under-scaled H1).
* **Body / Lede**: `.c8dc-lede` -> `DM Sans 14.5px 300 line-height 1.6 #4A4A4A`.
* **Pillars List**: `.c8dc-pillar-num` `Space Mono 10px 700`, Item title `DM Sans 0.88rem 700`, Desc `DM Sans 0.80rem 400`.

### 03. Standalone FAQ Page (`faq.html`)
* **Hero Eyebrow**: `Space Mono 0.72rem 700 uppercase // ` in `--c8-blue`.
* **Primary Title (H1)**: `Michroma clamp(2rem, 4vw, 3.2rem) 700 uppercase #080808`.
* **Subtitle**: `DM Sans 1.05rem 300 #555555 line-height 1.8`.
* **Category Tabs**: `.faq-tab-btn` -> `Space Mono 0.75rem 700 uppercase`, active background `#0047E1`, text `#FFFFFF`, radius `4px`.
* **Accordion Rows**: Question `DM Sans 1rem 600 #080808`, Tag `Space Mono 0.65rem 700`, Answer `DM Sans 0.95rem 300 line-height 1.75`.

### 04. 404 Error Page (`404.html`)
* **Status Pill**: `.err-status-pill` -> `Space Mono 0.72rem 700 uppercase letter-spacing 0.12em --c8-blue`.
* **Eyebrow**: `.err-eyebrow` -> `Space Mono 0.82rem 700 uppercase letter-spacing 0.22em // `.
* **Big Display Number**: `.err-big-num` -> `Bebas Neue clamp(8rem, 18vw, 15rem) 700 line-height 0.82 #080808`.
* **Headline (H1)**: `.err-h1-title` -> `Michroma clamp(1.6rem, 3.2vw, 2.5rem) 700 uppercase #080808`.
* **Action CTAs**: Primary `.c8-matrix-btn-blue` (`Space Mono 0.85rem 700 #FFFFFF on #0047E1 radius 4px`), Secondary `.c8-matrix-btn-dark` (`Space Mono 0.85rem 700 #FFFFFF on #080808 radius 4px`).

---

# 📦 PART 5: PORTFOLIO & CASE STUDY FORENSIC CROSS-AUDIT (ALL 10 CASE STUDIES)

---

## 1. The Deliverables Section Heading Hierarchy Clash (Asset 01 vs 02 vs 03)

In Section 4 of `the-duch-apartments.html` and `mkenny-properties.html`:

```
SECTION 4: CORE TECHNICAL DELIVERABLES (.c8cs-deliverables-section)
│
├── Section Header: [H2] "Core Technical Deliverables"
│   └── Font: Michroma 2.2rem (35.2px) 700 Uppercase Color: #080808
│
├── 2-Up Grid Container:
│   ├── Asset 01 Card: [H3] "Semantic Token Architecture"
│   │   ├── Eyebrow: Space Mono 9px 700 "Design System // Asset 01"
│   │   ├── Heading: Michroma 1.15rem (18.4px) 700 Uppercase  <── H3 CARD LEVEL
│   │   └── Image: 16:9 Horizontal Image Container
│   │
│   └── Asset 02 Card: [H3] "Direct Availability Matrix"
│       ├── Eyebrow: Space Mono 9px 700 "Booking Engine // Asset 02"
│       ├── Heading: Michroma 1.15rem (18.4px) 700 Uppercase  <── H3 CARD LEVEL
│       └── Image: 16:9 Horizontal Image Container
│
└── Integrated Sovereignty Split (.c8cs-sovereignty-split):
    └── Asset 03 Block: [H2] "Direct Booking Sovereignty & Revenue Retention"
        ├── Eyebrow: Space Mono 9px 700 "Ecosystem Velocity // Asset 03"
        ├── Heading: Michroma 2.2rem (35.2px) 700 Uppercase   <── ⚠️ H2 CLASH! (91% Larger)
        ├── 3 Numbered Bullets: Space Mono 13px + DM Sans 14px
        └── Image: 3:4 Vertical Image Container (.c8cs-sovereignty-img-box)
```

### 🚨 Forensic Breakdown:
1. **The Semantic Inversion**: Asset 01 and Asset 02 are styled with `<h3>` tags and sized at `1.15rem` (18.4px).
2. Asset 03—which is part of the **exact same deliverables group inside Section 4**—is tagged with `<h2>` and styled at `2.2rem` (35.2px), matching the top-level section header `Core Technical Deliverables`!
3. **Resolution**: Standardize Asset 03's heading to `<h3>` styled at `clamp(1.25rem, 2.2vw, 1.45rem)` to preserve visual weight without breaking the semantic heading tree.

---

## 2. Comparative Audit: All 10 Case Study Pages

| Case Study File | Status | Section 4 Asset 01 | Section 4 Asset 02 | Section 4 Asset 03 | Section 5 Stream Gallery (6 Cells) |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `the-duch-apartments.html` | 🟢 **Locked Gold Standard** | `H3` `1.15rem`<br>`Semantic Token Architecture`<br>16:9 Image Box | `H3` `1.15rem`<br>`Direct Availability Matrix`<br>16:9 Image Box | `H2` `2.2rem` *(Hierarchy Clash)*<br>`Direct Booking Sovereignty...`<br>3:4 Vertical Split (3 Bullets) | ✅ **Present** (6 production cells) |
| `mkenny-properties.html` | 🟢 **Duch Parity** | `H3` `1.15rem`<br>`Design System Tokens...`<br>16:9 Image Box | `H3` `1.15rem`<br>`AJAX Property Filter Matrix`<br>16:9 Image Box | `H2` `2.2rem` *(Hierarchy Clash)*<br>`Custom Post Architecture...`<br>3:4 Vertical Split (3 Bullets) | ✅ **Present** (6 real estate cells) |
| `blvck-hair-ng.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic `#080808`, `#0047E1` color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow" (`is-tall` cell, No 3-bullet split)* | ❌ **Missing** (No `.c8cs-stream-section`) |
| `bridgepoint-consulting.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `bridgepoints.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `kiri-city-stays.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `stride-plus-media.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `sweetermen-ng.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `victorias-lane.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |
| `wp-publishion-ai.html` | 🔴 **Legacy Deviation** | `H3` `1.15rem`<br>⚠️ *Generic color swatches* | `H3` `1.15rem`<br>⚠️ *Generic "Platform Experience Page"* | `H3` `1.15rem`<br>⚠️ *Generic "Responsive Mobile Flow"* | ❌ **Missing** |

---

# 📦 PART 6: SERVICES HUB & 11 SPECIALIZED SERVICE PAGES

*Master Reference File*: `shared-service-components.css`

### The 10 Universal Service Sections:
1. **Hero**: Eyebrow `.c8srv-label` (`Space Mono 10px 700 // `), H1 `.c8srv-h1` (`Michroma clamp(2rem, 4.5vw, 4.0rem) 700`), Subtitle `.c8srv-sub` (`DM Sans 17px 300`), Primary CTA `.c8-btn-primary` (`Space Mono 0.82rem 700`).
2. **Capability / Philosophy Split**: Left H2 `.c8srv-split-title` (`Michroma clamp(1.4rem, 2.5vw, 2.0rem) 700`), Right H3 `.c8srv-feat-title` (`Michroma 1.15rem 700`).
3. **Visual Hoverlist**: Item H2 `.c8srv-hoverlist-item` (`Bebas Neue clamp(2rem, 4vw, 3.2rem)` or `Michroma 1.6rem`), Tag (`Space Mono 10.5px 700`).
4. **Bento Workflow**: Section H2 (`Michroma clamp(1.5rem, 3vw, 2.4rem)`), Bento H3 `.c8srv-bento-title` (`Michroma clamp(0.95rem, 1.8vw, 1.2rem)`), Stat `.c8srv-bento-stat` (`Michroma clamp(2.4rem, 4.5vw, 3.8rem)`).
5. **Case Studies**: Card H3 (`Michroma 1.25rem 700`), Pills `.c8srv-portfolio-pill` (`Space Mono 0.72rem 700 background #FFFFFF border 1px solid rgba(8,8,8,0.14) radius 4px`).
6. **VS Matrix**: Category H3 `.c8srv-vs-cat-title` (`Michroma 1.2rem 700 uppercase`), Feature row `DM Sans 14px 600`.
7. **Live Tool / Workstation**: Title `.c8srv-tool-title` (`Michroma clamp(1.2rem, 2vw, 1.6rem) 700`), Labels `Space Mono 0.8rem 700`.
8. **Deliverables**: Title `.c8srv-deliv-title` (`Michroma 1.15rem 700 uppercase`), Bullets `DM Sans 14px 400` with blue checkmark icons.
9. **Pricing Tiers**: Tier name `.c8srv-price-name` (`Michroma 1.4rem 700`), Amount `.c8srv-price-amount` (`Michroma 2.6rem 700`), CTA `.c8srv-price-btn` (`Space Mono 0.82rem 700 #FFFFFF on #0047E1 radius 4px`).
10. **FAQ & CTA**: Question `DM Sans 1rem 600`, Answer `DM Sans 0.92rem 300`, CTA `.faq-cta-link` (`Space Mono 0.75rem 700 uppercase #0047E1 text + arrow`).

---

# 📦 PART 7: BLOG ECOSYSTEM AUDIT (`blog.html`, `single-blog.html`)

### 01. Blog Hub & Archive (`blog.html`)
* **Eyebrow**: `.blog-eyebrow` -> `Space Mono 0.75rem 700 uppercase // ` in `--c8-blue`.
* **Header Title (H1)**: `.blog-title-h1` -> `Michroma clamp(1.8rem, 3.5vw, 1.6rem) !important` *(Syntax Error: clamp min 1.8rem > max 1.6rem)*.
* **Subtitle**: `.blog-subtitle` -> `DM Sans 0.95rem 400 #555555 line-height 1.55`.
* **Post Cards**: Date `Space Mono 0.7rem`, Category Pill `Space Mono 0.62rem 700 border-radius: 12px` (Radius drift: should be `4px`), Title (H3) `Michroma 0.80rem 700 uppercase line-height 1.4`.

### 02. Single Blog Post (`single-blog.html`)
* **Back Button**: `.art-back-btn` -> `Space Mono 0.68rem 700 uppercase`.
* **Category Pill**: `.art-cat-pill` -> `Space Mono 0.68rem 700 uppercase radius 4px`.
* **Article Title (H1)**: `.art-h1` -> `Michroma clamp(1.6rem, 3.2vw, 2.4rem) 700 uppercase line-height 1.25 #080808`.
* **Sidebar CTA Card**: Title `.cta-card-title` (`Michroma 1.05rem 700`), Button `.cta-card-btn` (`DM Sans 0.82rem 700 radius 6px` — Radius and font drift).
* **Article Body**: Body copy `DM Sans 1.0rem 400 line-height 1.8 #333333`, Headings H2 `Michroma 1.4rem 700`, Quotes `DM Sans 1.15rem italic border-left 3px solid #0047E1`.

---

# 🔬 PART 8: MASTER BUTTON & INTERACTIVE LINK MATRIX

| Location / Element | Button Role | Font Family | Size / Weight | Background / Border | Radius | Border-Bottom Underline? | Hover State & Animation | Discrepancy Status |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Hero Primary** (`front-page.php`) | Primary Solid | `Space Mono` | `0.82rem` / `700` | `#0047E1` / None | `4px` | None | `#0038C0`, `translateY(-2px)`, shimmer sweep (`115deg`) | 🟢 **BENCHMARK STANDARD** |
| **Hero Secondary** (`front-page.php`) | Secondary Outline | `Space Mono` | `0.82rem` / `700` | `#FFFFFF` / `1.5px solid rgba(8,8,8,0.22)` | `4px` | None | Border `#0047E1`, Text `#0047E1`, `translateY(-2px)` | 🟢 **BENCHMARK STANDARD** |
| **Dev Playground Primary** | Primary Solid | `Space Mono` | `0.82rem` / `700` | `#0047E1` / None | `4px` | None | `#0038C0`, shimmer sweep | 🟢 Pass |
| **Dev Playground Ghost** | Secondary Ghost | `DM Sans` | `0.85rem` / `500` | Transparent / None | N/A | `1px solid rgba(0, 71, 225, 0.35)` | Color `#0037B5`, Border `#0047E1` | 🔴 **Font Family Drift: DM Sans 500 instead of Space Mono 700** |
| **Testimonials CTA** | Primary Solid | `Space Mono` | `0.82rem` / `700` | `#0047E1` / None | `4px` | None | `#0038C0`, `translateY(-2px)` | 🟢 Pass |
| **Pre-Footer CTA** | Primary Solid | `Space Mono` | `0.84rem` / `700` | `#0047E1` / None | `4px` | None | `#0038C0`, `translateY(-2px)` | 🟢 Pass |
| **Header CTA** (`header.html`) | Primary Brand | `Michroma` | `10.5px` / `700` | `#0047E1` / None | `4px` | None | Shimmer sweep, `translateY(-1px)` | 🟢 **Intentional Brand Identity CTA** |
| **Footer CTA** (`footer.html`) | Primary Solid | `DM Sans` | `14px` / `600` | `#0047E1` / None | `2px` | None | Shimmer sweep | 🔴 **Triple Drift: DM Sans font, 600 weight, 2px radius** |
| **Selected Work CTA** (`.c8-text-cta`) | Tertiary Link | `Space Mono` | `0.78rem` / `700` | Transparent / None | N/A | `1px solid rgba(0, 71, 225, 0.35)` | Color `#0037B5`, Gap 12px | 🟢 **BENCHMARK TERTIARY LINK** |
| **Services Deep Dive CTA** (`.sdv-panel-cta`) | Tertiary Link | `Space Mono` | `0.78rem` / `700` | Transparent / None | N/A | **None** | Gap expansion 8px -> 14px | 🟡 **Missing border-bottom underline** |
| **FAQ CTA** (`.faq-cta-link`) | Tertiary Link | `Space Mono` | `0.75rem` / `700` | Transparent / None | N/A | **None** | Color `#0037B5` | 🟡 **Missing border-bottom underline** |
| **Single Blog Sidebar CTA** | Sidebar Action | `DM Sans` | `0.82rem` / `700` | `#080808` / None | `6px` | None | Background `#0047E1` | 🔴 **Radius Drift: 6px vs canonical 4px** |
| **Pricing Tier Buttons** | Primary Solid | `Space Mono` | `0.82rem` / `700` | `#0047E1` / None | `4px` | None | `#0038C0` | 🟢 Pass |

---

# 🔬 PART 9: MASTER EYEBROW & PREFIX SYNTAX AUDIT

| Location / Section | HTML Class | Prefix Syntax | Font Family | Size | Weight | Letter Spacing | Color | Discrepancy Status |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **Hero** (`front-page.php`) | `.c8-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.75rem` | `700` | `0.16em` | `#0047E1` | 🟢 **BENCHMARK STANDARD** |
| **Mindset Grid** | `.c8-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.75rem` | `700` | `0.16em` | `#0047E1` | 🟢 Pass |
| **Selected Work** | `.sw-matrix-eyebrow` | `// ` (plain text) | `Space Mono` | `0.72rem` | `700` | `0.14em` | `#0047E1` | 🟡 `0.72rem` vs `0.75rem` |
| **Services Deep Dive** | `.sdv-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.72rem` | `700` | `0.14em` | `#0047E1` | 🟡 `0.72rem` |
| **Dev Playground** | `.dp-eyebrow` | `// ` | `Space Mono` | `0.72rem` | `700` | `0.14em` | `#0047E1` | 🟡 `0.72rem` |
| **How We Work** | `.hww-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.72rem` | `700` | `0.16em` | `#0047E1` | 🟡 `0.72rem` |
| **Who We Are** | `.wwa-eyebrow` | **None** | `Space Mono` | `0.72rem` | `700` | `0.14em` | `#0047E1` | 🔴 **Missing `// ` prefix** |
| **Testimonials** | `.tmn-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.72rem` | `700` | `0.14em` | `#0047E1` | 🟡 `0.72rem` |
| **FAQ** | `.faq-eyebrow` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.72rem` | `700` | `0.18em` | `#0047E1` | 🟡 `0.72rem` |
| **Pre-Footer CTA** | `.cta-badge` | `<span class="c8-eyebrow-slash">//</span> ` | `Space Mono` | `0.72rem` | `700` | `0.16em` | `#0047E1` | 🟡 `0.72rem` |
| **Case Studies** | `.c8cs-label` | `// ` | `Space Mono` | `10px` (0.625rem) | `700` | `0.25em` | `#0047E1` | 🟡 `10px` (Micro-scaling) |
| **Services Hub** | `.c8srv-label` | `— ` (Em-dash) | `Space Mono` | `10px` | `700` | `0.25em` | `#0047E1` | 🔴 **Syntax Drift: `—` instead of `// `** |
| **Contact Us** | `.c8ct-tag` | `16x1px solid line` | `Space Mono` | `9px` (0.56rem) | `700` | `0.28em` | `#0047E1` | 🔴 **Syntax Drift: 9px + Solid line** |
| **Discovery Call** | `.c8dc-tag` | `16x1px solid line` | `Space Mono` | `9.5px` | `700` | `0.26em` | `#0047E1` | 🔴 **Syntax Drift: 9.5px + Solid line** |
| **Global Footer** | `.c8ft-hero-tag` | `20x1px solid line` | `Space Mono` | `10px` | `400` | `0.30em` | `#4A9EFF` | 🔴 **Syntax Drift: 10px + Solid line** |

---

# 🏛️ CANONICAL DESIGN SYSTEM TOKENS (THE SSOT STANDARD)

```css
:root {
  /* ── FONT FAMILIES ── */
  --font-heading: 'Michroma', sans-serif;
  --font-mono:    'Space Mono', monospace;
  --font-body:    'DM Sans', sans-serif;
  --font-display: 'Bebas Neue', sans-serif;

  /* ── HEADINGS (MICHROMA) ── */
  --text-display:       clamp(3.5rem, 8vw, 6.0rem);  /* 404 big numbers & massive hero callouts */
  --text-h1-hero:       clamp(2.0rem, 4.5vw, 2.8rem); /* Main page greeting titles (line-height: 1.15) */
  --text-h2-section:    clamp(1.6rem, 3.2vw, 2.5rem); /* Primary section headers (line-height: 1.18) */
  --text-h3-card:       clamp(1.05rem, 1.8vw, 1.25rem); /* Bento, deliverable & grid cards (line-height: 1.3) */
  --text-h4-sub:        0.95rem;                      /* Small card titles, accordion items */

  /* ── BODY & EDITORIAL (DM SANS) ── */
  --text-body-lead:     1.00rem; /* 16.0px - Line-height: 1.65 - Weight: 400 - Color: #4A4A4A */
  --text-body-base:     0.95rem; /* 15.2px - Line-height: 1.65 - Weight: 400 - Color: #555555 */
  --text-body-small:    0.85rem; /* 13.6px - Line-height: 1.55 - Weight: 400 - Color: #777777 */

  /* ── EYEBROWS, TAGS & METADATA (SPACE MONO) ── */
  --text-eyebrow:       0.75rem; /* 12.0px - 700 - Letter-spacing: 0.16em - Uppercase - Color: #0047E1 */
  --text-tag-pill:      0.70rem; /* 11.2px - 700 - Letter-spacing: 0.06em - Uppercase - Radius: 4px */
  --text-micro-hud:     0.58rem; /* 9.2px  - 700 - Letter-spacing: 0.20em - Uppercase */
  
  /* ── METRICS & STATS ── */
  --text-stat-number:   clamp(2.2rem, 4.5vw, 3.6rem); /* Michroma - 700 - Line-height: 1 */
  --text-stat-label:    0.68rem;                      /* Space Mono - 700 - Uppercase */

  /* ── BUTTON TOKENS ── */
  --btn-primary-bg:     #0047E1;
  --btn-primary-text:   #FFFFFF;
  --btn-primary-font:   'Space Mono', monospace;
  --btn-primary-size:   0.82rem;
  --btn-primary-weight: 700;
  --btn-radius:         4px;
}
```

---

# 🚨 MASTER CROSS-SYSTEM DISCREPANCY & RECTIFICATION MATRIX

| # | Location | Component / Element | Current Rogue Style | Target Canonical Standard | Action Required |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01** | `the-duch-apartments.html`<br>`mkenny-properties.html` | Section 4 Asset 03 Heading | `<h2>` `Michroma 2.2rem` (35.2px) | `<h3>` `Michroma clamp(1.25rem, 2.2vw, 1.45rem)` | Fix semantic hierarchy clash where Asset 03 is sized 91% larger than sibling Assets 01/02 and uses an H2 tag |
| **02** | `Case Studies (8 files)` | Asset 01, 02, 03 Structure | Legacy `.c8cs-gallery-section` with generic color swatches & Unsplash placeholders | Port to Duch Standard: `.c8cs-deliverables-section` with 2-up grid (Asset 01/02) + 3:4 Sovereignty Split (Asset 03) | Eliminate hardcoded color swatches for non-branding projects and add real 3-bullet capabilities |
| **03** | `Case Studies (8 files)` | Visual Stream Gallery | Missing Section 5 (`.c8cs-stream-section`) | Add 6-card Stream Gallery (3x2 grid) with project-specific capability tags and titles | Elevate all 8 case studies to 100% Duch parity |
| **04** | `front-page.php` | Selected Work Card Headings | `<h2 class="sw-matrix-h2">` | `<h3 class="sw-matrix-h3">` | Fix semantic tag error where cards use `<h2>` under the section's `<h2>` header |
| **05** | `front-page.php` | Dev Playground Tool Names | `DM Sans 0.95rem 600` | `Michroma 0.95rem 700 uppercase` | Fix font family drift (uses body font instead of heading font) |
| **06** | `front-page.php` | Dev Playground Ghost Button | `DM Sans 0.85rem 500` | `Space Mono 0.78rem 700 uppercase` | Fix font family drift on tertiary link CTA |
| **07** | `front-page.php` | Services Deep Dive CTA | `.sdv-panel-cta` (No underline) | Add `border-bottom: 1px solid rgba(0, 71, 225, 0.35)` | Standardize tertiary link underline to match `.c8-text-cta` |
| **08** | `front-page.php` | How We Work Bento Labels | `DM Sans 0.68rem 700 uppercase` | `Space Mono 0.70rem 700 uppercase` | Fix font family drift on eyebrow label |
| **09** | `front-page.php` | Who We Are Eyebrow | `.wwa-eyebrow` (No prefix) | Add `<span class="c8-eyebrow-slash">//</span> ` prefix | Add missing agency slash prefix |
| **10** | `footer.html` | CTA Button (`.c8ft-hero-cta`) | `DM Sans 14px 600`, `radius: 2px` | `Space Mono 0.82rem 700`, `radius: 4px` | Fix font, weight, and radius drift |
| **11** | `footer.html` | Hero Title (`.c8ft-hero-title`) | `clamp(2.5rem, 5vw, 1.8rem)` | `Michroma clamp(1.8rem, 4vw, 2.6rem)` | Fix inverted min/max clamp syntax error |
| **12** | `footer.html` | Eyebrow Tag (`.c8ft-hero-tag`) | `Space Mono 10px` + `20x1px solid line` | `Space Mono 0.75rem 700` + `// ` | Fix eyebrow prefix syntax |
| **13** | `blog.html` | Hero Title (`.blog-title-h1`) | `clamp(1.8rem, 3.5vw, 1.6rem) !important` | `Michroma clamp(2.0rem, 4.5vw, 2.8rem)` | Fix inverted min/max clamp syntax error |
| **14** | `blog.html` | Category Pill (`.card-category-pill`) | `border-radius: 12px` | `border-radius: 4px` | Unify pill radius to canonical 4px |
| **15** | `Contact_us.html` | Eyebrow Tag (`.c8ct-tag`) | `Space Mono 9px` + custom `16x1px solid line` | `Space Mono 0.75rem 700` + `// ` | Fix micro 9px font and replace line with double-slash |
| **16** | `discovery-call.html` | Eyebrow Tag (`.c8dc-tag`) | `Space Mono 9.5px` + custom `16x1px solid line` | `Space Mono 0.75rem 700` + `// ` | Fix micro 9.5px font and replace line with double-slash |
| **17** | `Contact_us.html` | Headline (`.c8ct-h1`) | Fixed `2.2rem` font | `Michroma clamp(2.0rem, 4.5vw, 2.8rem)` | Fix non-responsive fixed font on contact headline |
| **18** | `discovery-call.html` | Headline (`.c8dc-h1`) | `clamp(1.6rem, 3.2vw, 2.4rem)` | `Michroma clamp(2.0rem, 4.5vw, 2.8rem)` | Fix under-scaled H1 on discovery booking page |
| **19** | `single-blog.html` | Sidebar CTA Button | `DM Sans 0.82rem 700`, `radius: 6px` | `Space Mono 0.82rem 700`, `radius: 4px` | Fix font and radius drift |
| **20** | `Main Service Page` | Eyebrow Prefix (`.c8srv-label`) | Content prefix `—` (Em-dash) | `// ` (Double-slash) | Fix eyebrow prefix syntax |
