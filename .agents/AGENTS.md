# Agent Custom Rules & Guardrails

## 1. Case Study Design & Branding Consistency
- **Primary Branding Color**: Every case study page MUST use the agency's primary brand color (`#0047E1` Royal Blue) for all interactive states, headings, labels, button backgrounds, metric values, back buttons, and glowing backdrops.
- **Client Branding**: Client-specific brand colors (e.g. green for Duch, red/blue for Mkenny) MUST ONLY be used inside the specific showcase assets (such as style guide swatches or mockups) and NEVER as the primary branding of the page itself.
- **Backdrop Atmosphere**: Always use standard Royal Blue (`#0047E1` and `#3D6BFF`) gradients or SVG blobs for the animated backdrop.

## 2. Visual Showcase Grid Parity
- **Exact Code Duplication**: Always duplicate `the-duch-apartments.html` structure exactly when creating new case studies.
- **Visual Grid Formats**:
  - Asset 01 and Asset 02 MUST be horizontal/landscape containers (`.c8cs-gallery-img-box` with horizontal images). They should never contain vertical/portrait/square-stretched images that warp the layout.
  - Asset 03 MUST be a tall container (`.c8cs-gallery-img-box.is-tall`) spanning two columns.
  - If a project did not include branding/style-guide work, Asset 01 MUST be converted into a standard image box container showing code, interface, or technical dashboards, rather than displaying style guide swatches.

## 3. Professional Copywriting Deliverables & Credible Metrics
- **High-End Terminology**: Describe deliverables with professional, high-end agency terminology (e.g. *Semantic Keyword Mapping*, *Entity SEO Optimization*, *Liquid performance engineering*) rather than basic descriptions (e.g. *writing product descriptions*, *e-commerce category headers*) that sound amateur.
- **Strict Prohibition of Developer Vanity Metrics & Fake 100% Claims**:
  - NEVER use server milliseconds, LCP benchmarks, or Lighthouse scores.
  - NEVER use unrealistic `100%` claims for things where real industry standard is never 100% (e.g. "100% Direct booking base", "100% Lead Retention", "100% Brand Consistency", "100% Tag Accuracy").
  - Metrics MUST be grounded in believable, elite agency performance with high precision margins or structural impact (e.g. `98.4% Direct Guest Retention`, `96.8% First-Touch Lead Capture`, `99.2% API Reliability`, `Top 3 Google Organic Rank`, `99.6% Audit Accuracy`, `0.5px Vector Alignment Precision`, `97/100 Mobile UX Score`, `99.4% Server-Side Attribution`, `0% OTA Commission Loss`, `+340% Direct Reservations`).

## 4. Global Design System Tokens & Surface Elevation Architecture
- **Single-Role Color Rule**: Every color token MUST play exactly one role. Never let the same hex value serve as both a section background and a card surface lift.
- **Canvas vs. Surface Tokens**:
  - `--c8-page-light`: `#FFFFFF` (Pure White Section Base Canvas — 100% Video/Render Compatible). All light sections use this exact base unless specifically assigned architectural off-white.
  - `--c8-surface-lift`: `#F2F2F0` (Architectural Surface Fills for cards/panels sitting on `--c8-page-light`). Provides a distinct 15–20pt contrast offset so cards clearly pop as cards. Border: `1px solid rgba(0, 0, 0, 0.08)`.
  - `--c8-page-dark`: `#080808` (Solid Obsidian Black Base Canvas for heavy workstation/tool sections). *Note: Radial blue glows are temporarily removed for crisp solid dark, preserved for future Customizer toggle.*
  - `--c8-surface-lift-dark`: `#141414` (Elevated Charcoal Surface Fills for cards/panels sitting on `--c8-page-dark`). Border: `1px solid rgba(255, 255, 255, 0.10)`.
  - `--c8-blue`: `#0047E1` (Agency Royal Blue — Primary Accent for CTA buttons, eyebrow slashes, metric highlights, active borders, and drag grips).
  - `--c8-blue-hi`: `#3D6BFF` (Glowing Accent).
- **Strict Content-Driven Rhythm & Dark Boundary Rule**:
  - **STRICT GUARDRAIL**: Two dark background (`#080808`) sections MUST NEVER follow one another under any circumstances.
  - Dark background assignments are **content-driven** rather than arbitrary rhythm toggles — reserved for heavy workstation environments and high-density interactive tools (Section 02 *Creative Agency Mindset* Paper Grid and Section 04 *Services Deep Dive*).
  - How We Work (`#how-we-work`) uses `#F4F5F7` architectural off-white canvas base.
  - Testimonials (`#testimonials`) uses `#FFFFFF` Pure White light canvas base with `#F2F2F0` surface lift quote cards.
  - Pre-Footer CTA (`#contact` / `parts/footer.php`) uses `#FFFFFF` Light base canvas with **Paper Grid UI** (`.c8-paper-grid` blueprint slot container) before transitioning to dark footer bar.

## 5. Creative Agency Visual Style & Image Directives (LOCKED RULE)
- **Flat Graphic Editorial Style Only**: All generated visuals MUST use flat, minimalist graphic editorial poster art aesthetics with rich chiaroscuro shadows on dark obsidian (`#080808`).
- **NO 3D Renders**: Strictly prohibit 3D isometric CGI rendering, glossy 3D spheres/cylinders, or photorealistic modeling.
- **NO Cold Mechanical Machinery**: Do NOT use cold robot parts, literal computer motherboards, mechanical gears, cogs, or circuit hardware tropes.
- **Content-Tallying & Creative Domain Interpretation**: Images must interpret the **creative intent and human/studio synergy** of each section (e.g. tactile Bauhaus shapes, typography glyphs, idea sparks, origami wireframe morphing, kinetic growth trajectories, fluid audience funnels) rather than literal machine hardware.
- **Human Representation (Optional & Restricted)**: Do NOT default to human subjects. Only include people where strictly required (e.g. founder bio). When depicted, characters MUST strictly be mature Black African adults (28–35 age range) with dark skin tones in a sleek, professional, dark moody setting.

## 6. Verbatim Asset-Content Harmony, 3D Jargon Purge & Project-Driven Staging (LOCKED RULE)
- **Verbatim Eyebrow, Title, Description & Visual Harmony**:
  - Every deliverable and gallery item MUST maintain 100% verbatim harmony between its Eyebrow/Meta, Title, Description, Alt Text, and the actual on-screen visual.
  - If an image displays a brand token board (color swatches, typography scales, badge states), the title MUST read `Design System Tokens & Brand Specification` — never mislabeled as a widget or code editor.
- **Strict Prohibition of 3D Mockup Jargon**:
  - NEVER use physical mockup or 3D fabrication jargon such as `Slab`, `Tilted Plane`, `Oblique View`, `Tablet on Desk`, or `Laptop Screen View` in client-facing titles, tags, or alt text.
  - Always articulate the **engineered business capability, conversion mechanism, or software ecosystem** (e.g. `Master Real Estate Catalog & Direct Acquisition Engine`, `Dynamic Multi-Scheme Property Archive & Faceted Catalog`).
- **Zero Speed & Latency Vanity Terms in Copy**:
  - NEVER use developer speed jargon like `Sub-Second`, query milliseconds, or TTFB benchmarks in customer-facing titles or headings. Use high-agency terms like `Real-Time AJAX Facet Filter Matrix`, `Instantaneous Response Architecture`, or `Optimized Dynamic Query Loop`.
- **Pure Project-Driven Staging (Anti-Desk Mandate)**:
  - Office desks, tables, and furniture are NEVER compulsory. Staging is 100% determined by the project's software interface, system architecture, and domain.
  - Software and AI products MUST be staged as clean floating dark-mode UI panels on dark obsidian (`#080808`), extreme macro UI harvests, flat Swiss graphic editorial posters, or native CMS block canvases — never default to generic office desks.

