# CR8V STACKS — Case Studies Overhaul & Tracking Master Plan
> **Active Tracking Document**: Crux Nxtion & Red Cap Entertainment (Black & White Craft)  
> **Status**: Crux Nxtion Round 3 Fixes Applied (User Review Pending) // Red Cap Ready for Implementation  
> **Last Updated**: 2026-10-01 (15:40 UTC)

---

## 1. Core Directives & Invariants
- [x] **NO Live Theme Modifications**: Never touch `wp-theme/cr8v-stacks/` or any live theme files. All work is strictly inside `crux-nxtion.html` and `red-cap-entertainment.html`.
- [x] **Strict Layout Isolation Guarantee**:
  - Distinct layouts between Kiri City, Crux Nxtion, Red Cap, and older case studies will **NEVER break the layout of other pages**.
  - All page-specific styles are encapsulated inside dedicated per-project parent wrappers (e.g. `.cs-page-crux-nxtion`, `.cs-page-red-cap`, `.cs-page-kiri-city`).
  - Shared global containers retain master 1320px grid widths and typography hierarchies (`Plus Jakarta Sans`, `Space Mono`, `Michroma`), ensuring aesthetic harmony without CSS leaks.
- [x] **Mandatory Reference Reading**: Always read all reference `.md` files thoroughly before taking any action (`CASE_STUDY_RULES.md`, `CASE_STUDIES_OVERHAUL_TRACKER.md`, `wordpress_conversion_strategy.md`).
- [x] **Native WP Customizer Definition**:
  - The Customizer referenced is WordPress's **default, native core Customizer (`wp-admin/customize.php`)**, NOT a custom plugin settings page.
  - Leverages native `WP_Customize_Manager`, `$wp_customize->add_setting()`, `$wp_customize->add_control()`, `customize_preview_init`, and `postMessage` `:root` CSS custom property transport.
- [x] **Crux Nxtion Strategic Narrative (The Duality Headache)**:
  - Intro problem section explicitly contrasts naive solutions:
    - Multiple separate top-level domains (`cruxnxtionevents.com` vs `cruxnxtionconsulting.com` — splits SEO, doubles hosting, fragments brand).
    - Subdomains (`consultancy.cruxnxtion.com` — siloes sessions, fragments user journey, dilutes root domain equity).
    - Multisite / Addon domains — introduces heavy maintenance overhead and admin complexity.
  - Why we creatively engineered the **Runtime Duality on a Single Apex Domain**:
    - Centralized domain authority and SEO equity.
    - Unified WordPress CPT Inquiries CRM pipeline across both wings.
    - Zero page-reload runtime state switcher via the ergonomic floating pod (`.msw`).
- [x] **Strict Anti-Duplication Rule**: No feature, visual, or concept repeated or stylishly repeated across sections. The intro is a balanced mix of service deliverables; each showcase has a strictly distinct role.
- [x] **Authentic Color Systems (No Generic Black Backgrounds)**:
  - **Crux Nxtion**: Midnight (`#0A0F26`), Navy (`#002671`), Action Red (`#BA0000`), Consultancy Crisp White (`#FFFFFF`), Soft Technical Slate (`#F8FAFD`), Royal Purple (`#8C7AE6`).
  - **Red Cap Entertainment / BWC**: Crimson (`#B4282D`), Warm Gold (`#D19228`), Obsidian (`#121212`), Warm Studio Ivory/Charcoal accents.
- [x] **Image Ratio Quota (Rule 2 of CASE_STUDY_RULES.md)**:
  - **Maximum 2 to 3 AI-generated images** per case study (strictly for hero composite / atmospheric staging).
  - **7 to 8 self-generated / real UI composited / code-rendered assets** (real scrolled screenshots, HTML/CSS component recreations, tactile architectural models).
- [x] **Aspect Ratio Strict Alignment**:
  - Vertical containers = strictly vertical assets (3:4 or 9:16).
  - Horizontal containers = strictly horizontal assets (16:9).
- [x] **Factual Client Accuracy**:
  - Red Cap / Black & White Craft is **NOT** a ticket-selling platform. It is a live spectacle production and commissioning agency (promenade theatre, socially engaged art, cross-continental creative direction).
  - No client commercial work (no shopfitting, retail sourcing, exhibition scenography). Only Cr8v Stacks agency engineering.

---

## 2. Section Architecture & Structure Matrix

| Section # | Crux Nxtion Direction (Duality Focus) [COMPLETED] | Red Cap / BWC Direction (Tactile Staging Focus) [QUEUED] | Anti-Duplication Guarantee |
|---|---|---|---|
| **00. Intro & Deliverables** | **The Duality Headache & Solution**: Solving the multi-domain / subdomain dilemma. High-level service mix: Asset 01 (Desktop 16:9), Asset 02 (Secondary Core Interface - NOT Mobile), Asset 03 (WordPress Core Board). | **The Cultural Staging Challenge & Solution**: Managing multi-national cultural spectacle. High-level service mix: Asset 01 (Desktop 16:9), Asset 02 (Secondary Core Interface - NOT Mobile), Asset 03 (WordPress Core Board). | High-level service mix: Brand standards, visual systems, and technical scope. |
| **Showcase 1: Visual Showcase of Site Itself** | **Real Scrolled Website Screenshots**: Scrolled Events Lineup Grid, Scrolled Consultancy Advisory Portal, Single Event Detail View, Dual-Wing Contact Intake. | **Real Scrolled Website Screenshots**: Scrolled Cultural Staging Docket, Curatorial Capabilities Grid, Single Event Production View, Commissioning Intake Portal. | Pure visual showcase of the websites beyond the hero section. |
| **Showcase 2: Engineered Systems & Workflows (WordPress Core Engine)** | **Interactive HTML/CSS Recreations of Most Impressive WordPress Feats**: <br>1. Duality Runtime State Machine & Class Decoupler<br>2. 5-Stage CPT Inquiries Pipeline CRM<br>3. Dual-Wing Native Customizer Engine (`:root` injection)<br>4. Dynamic `.ics` Calendar Calculus Engine<br>5. Dual Executive HTML Email Dossier Engine<br>6. 1-Click Starter Content Demo Importer. | **Interactive HTML/CSS Recreations of Most Impressive WordPress Feats**: <br>1. Universal Inquiries 100% Bespoke White Studio Dashboard (`admin.php?page=cr8v-inquiries`)<br>2. Event CPT Loop & Timestamp Calculus (Upcoming vs Archive)<br>3. Dynamic `.ics` RFC 5545 Response Stream<br>4. Triple-Gate Anti-Spam Commissioning Architecture<br>5. Native Customizer Live Scoped Panel<br>6. Automated Executive HTML Briefing Dossier. | Dedicated to backend WordPress engineering, pipeline workflows, and custom plugin code. |
| **Showcase 3: Interaction & Ergonomics** | **Mobile Switcher & Navigation Ergonomics**: Isolated Fixed Bottom Switcher Pod (`.msw`), Dual-Wing Drawer Accordion, Immersive Mobile Modal. | **Tactile Editorial Interaction System**: Centerpiece Pinned Visual Card with Paperclip & Stamp Badge, 5-Discipline Filter Bar, Hole-Punched Spec Cards, Immersive Commissioning Modal. | Crux focuses on mobile dual-wing ergonomics; Red Cap focuses on tactile editorial UI mechanics. |
| **Showcase 4: Engineering Showcase Stream** | **Deep Technical Deep-Dive (WordPress Code Level)**: 7-item stream covering CPT query loops, transient caching, AJAX state handlers, Customizer sanitize callbacks, and taxonomy schema. | **Deep Technical Deep-Dive (WordPress Code Level)**: Flexible 6–9 item stream covering event timestamp filtering, custom DB query routing, direct HTTP calendar streaming, admin styling, and modular core plugin decoupling. | Pure technical architecture, database calculus, hooks, and security gates. |

---

## 3. Visual Assets & Production Plan

### Crux Nxtion Asset Roster [100% GENERATED, RE-ENGINEERED & VERIFIED]
- [x] **Hero Landscape** (`assets/case_studies/case_study_crux_nxtion.webp`, 16:9): AI-generated dark cinematic studio scene with floating glowing tech stack logos (WordPress, PHP, JS, CSS).
- [x] **Hero Vertical** (`assets/case_studies/cs_crux_nxtion_hero_vertical.webp`, 3:4): Dedicated vertical card with dual-personality tablet interface and floating stack icons for service page Section 3.
- [x] **Asset 01** (`assets/case_studies/crux_nxtion_asset_01.webp`, 16:9): Dual-Wing Design System & Typography Tokens (Michroma + Plus Jakarta Sans + Space Mono + Color ramps + Parallelogram button specs).
- [x] **Asset 02** (`assets/case_studies/crux_nxtion_asset_02.webp`, 16:9): Secondary Core Interface / Multi-Wing Corporate Intake & Routing Engine (captured from fresh live site with user's fixed UI — NO MORE duplication with consultancy portal!).
- [x] **Asset 03** (`assets/case_studies/crux_nxtion_asset_03.webp`, 3:4): WordPress Core Architectural Board on Granite (Single-Apex Duality Engine & CPT Pipeline CRM vs Subdomain dilution).
- [x] **Showcase 1 Captures** (16:9):
  - `assets/case_studies/crux_showcase_01_events_grid.webp`: Scrolled Live Events Lineup & Ticket Docket Grid.
  - `assets/case_studies/crux_showcase_02_consultancy_portal.webp`: Strategic Advisory & Corporate Restructuring Framework.
  - `assets/case_studies/crux_showcase_03_single_event_specs.webp`: Single Event Production Dossier & Technical Specs (REPLACED the generic 10-discipline services matrix!).
  - `assets/case_studies/crux_showcase_04_contact_intake.webp`: Corporate Intake & Intelligent Lead Router (with user's fixed UI).
- [x] **Showcase 2 HTML/CSS Components**: 6-slide expansive carousel with slanted container + buttons (clip-path on BOTH), natural-width pipeline stepper, polished WP Customizer panel with 3 color tokens + variable names, RFC 5545 calendar preview, dual-dispatch email pane (admin dossier + client receipt from actual codebase), WP Admin seeder log with real event names.
- [x] **Showcase 3 Interaction Design**: 3-Mode Contact Intake Switcher (interactive Events/Consultancy/Sponsorship tabs with dynamic field chips), Authentic Crux Nxtion Ticket Stub Architecture (`.ticket-stub` with circular cutout notches, dashed tear lines, and Eventbrite ticketing hooks), Zero-404 Legacy URL Prevention Engine (25+ real redirect rules from prevent-errors.php in dark console view). Zero mobile drawer, zero accent left borders.
- [x] **Showcase 4 Engineering Deep Dive**: 9-cell grid (3×3) equipped with bespoke, interactive inline HTML/CSS telemetry & validation widgets (AJAX Nonce validator, Transients API cache meter, Parallelogram polygon angle tester, CPT taxonomy chips, IntersectionObserver threshold trigger, Customizer hex sanitizer, Eventbrite ticket hook, GDPR consent toggle, WCAG 2.1 contrast ratio scorecard). Zero code dump images, zero AI slop borders. Zero duplication with Showcase 02.

### Red Cap Entertainment (Black & White Craft) Asset Roster [COMPLETED & VERIFIED]
- [x] **Hero Landscape** (`assets/case_studies/case_study_red_cap_entertainment.webp`, 16:9): Flagship staging hero with authentic pinned visual slider.
- [x] **Hero Vertical** (`assets/case_studies/cs_red_cap_entertainment_hero_vertical.webp`, 3:4): Dedicated vertical card for service page.
- [x] **Asset 01** (`assets/case_studies/rc_asset_01_brand.webp`, 16:9): Curatorial Brand Standards & Vector Identity.
- [x] **Asset 02** (`assets/case_studies/rc_asset_02_customizer.webp`, 16:9): Staging Capabilities & Production Docket (No mobile screenshots).
- [x] **Asset 03** (`assets/case_studies/rc_asset_03_ecosystem.webp`, 3:4): WordPress Core Plugin Architecture Board (`cr8v-events-core`).
- [x] **Showcase 1 Captures**: Scrolled Events docket, 5 Disciplines grid, Single Event production specs, Project Brief intake.
- [x] **Showcase 2 HTML/CSS Components**: White Studio Inquiries CRM Dashboard (`#F8FAFC`), Event CPT past/upcoming toggle, `.ics` RFC 5545 generator, Triple-gate anti-spam visualizer, Native Customizer panel, Dual Executive email dispatch.
- [x] **Showcase 3 Ergonomics**: Pinned visual slider with paperclip & stamp badge, interactive 5-discipline filter pills, hole-punched spec cards, Brief configurator.
- [x] **Showcase 4 Stream Cards**: 9 deep technical cards focused on WordPress hooks, transients, and database architecture.

### Kiri City Stays [COMPLETED & VERIFIED]
- [x] **Canonical Line-Grid Split Overview**: Section 00 with sticky acquisition mandates column (>600px pinned travel), 4-segment traveler matrix, and live interactive GTM attribution simulator.
- [x] **Layout Isolation**: Dedicated `.cs-page-kiri-city` parent wrapper ensuring zero CSS leakage.
- [x] **Creative Suite**: 5-slide Instagram carousel deck, 4-reel 9:16 vertical video suite, and 6-item campaign gallery.

---

## 4. Execution Checkpoints
- [x] Step 1: Create and commit master tracking markdown file.
- [x] Step 2: User review and approval of the revised blueprint.
- [x] Step 3: Source authentic screenshot variations from local themes and live sites.
- [x] Step 4: Generate new, approved Crux Nxtion visual assets under strict quota ratio.
- [x] Step 5: Implement overhauled Crux Nxtion presentation page (`crux-nxtion.html`).
- [x] Step 6: Overhaul Red Cap Entertainment presentation page (`red-cap-entertainment.html`).
- [x] Step 7: Overhaul Kiri City Stays presentation page (`kiri-city-stays.html`).
- [x] Step 8: Push all clean commits and assets to remote GitHub repository.

