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

## 3. Professional Copywriting Deliverables
- **High-End Terminology**: Describe deliverables with professional, high-end agency terminology (e.g. *Semantic Keyword Mapping*, *Entity SEO Optimization*, *Liquid performance engineering*) rather than basic descriptions (e.g. *writing product descriptions*, *e-commerce category headers*) that sound amateur.

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

