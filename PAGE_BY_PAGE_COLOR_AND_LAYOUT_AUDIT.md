# 🚀 CR8V STACKS — REFINED PAGE-BY-PAGE COLOR, SURFACE ELEVATION & LAYOUT AUDIT
*Generated: August 14, 2026*

---

## 🎯 Core Design Tokens & Architectural Rules

1. **Obsidian Black Base Canvas (`#080808`)**:
   - All dark section backgrounds across all page templates MUST use exact `#080808` Solid Obsidian Dark. Plain black (`#000000`) or off-black (`#111111`) are updated to `#080808`.
   - Radial blue ambient gradients (`radial-gradient(...)`) are removed across all templates for crisp solid darks, preserved as Customizer toggles.
2. **Strict Content-Driven Rhythm**:
   - Dark background assignments (`#080808`) are reserved strictly for high-density workstation/tool sections (Mindset Paper Grid `#how-we-think`, Services Deep Dive `#services-deep-dive`, Tech Stack Bento).
   - Editorial, storytelling, process, proof, and enquiry sections use light canvases (`#FFFFFF` Pure White or `#F4F5F7` Architectural Off-White).
   - **STRICT GUARDRAIL**: Two dark background (`#080808`) sections MUST NEVER follow one another under any circumstances.
3. **Elevated Surface Fills**:
   - Light Canvases (`#FFFFFF` / `#F4F5F7`) use elevated `#F2F2F0` Surface Lift cards (`1px solid rgba(0, 0, 0, 0.08)`).
   - Dark Canvases (`#080808`) use `#141414` Elevated Charcoal cards (`1px solid rgba(255, 255, 255, 0.10)`).
4. **Header Navigation Pill**:
   - `.c8hdr-root .c8-pnav` background is standardized to `#F2F2F0` (`--c8-surface-lift`).

---

# 📋 BATCH 1: CORE INSTITUTIONAL & CONVERSION PAGES

## 1. Homepage (`front-page.php`) — [COMPLETED & LOCKED]

| # | Section Name & HTML ID | Canvas Base Color | Internal Surface / Card Fill | Separator & Border Spec | Accent & Highlight Tokens | Rationale & Status |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| **00** | **Header Navigation** | `#FFFFFF` (Pure White + Blur) | `#F2F2F0` Nav Pill (`.c8-pnav`) | `border-bottom: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | Fixed transparent overlay bar |
| **01** | **Hero Section** (`#cr8v-hero`) | `#FFFFFF` (Pure White) | Architectural Canvas Base | `border-bottom: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | Primary agency greeting canvas |
| **02** | **Creative Agency Mindset** (`#how-we-think`) | `#080808` (Solid Obsidian Dark) | `#141414` (Elevated Charcoal Slots) | `border: 1px solid rgba(255,255,255,0.10)` | `--c8-blue` & `--c8-blue-hi` | **Content-Driven Dark**: Lofi paper grid workstation |
| **03** | **Selected Work** (`#selected-work`) | `#FFFFFF` (Pure White) | `#F2F2F0` (Off-White Cells) | Symmetrical `4rem 3.5rem` cell padding + `+` marks | `--c8-blue` (`#0047E1`) | Symmetrical architectural case study matrix |
| **04** | **Services Deep Dive** (`#services-deep-dive`) | `#080808` (Solid Obsidian Dark) | `#141414` (Elevated Charcoal Accordions) | `border-bottom: 1px solid rgba(255,255,255,0.10)` | Palette Accent Rotation (Blue, Red, Gold, Ivory) | **Content-Driven Dark**: Service cards (Blobs hidden) |
| **05** | **Dev Playground** (`#dev-playground`) | `#FFFFFF` (Full White Canvas) | `#FFFFFF` Left & Right Panels (`border-left: 1px solid rgba(8,8,8,0.08)`) | Center split divider line | `--c8-blue` Eyebrow, `#080808` Stats, `#555555` Labels | Full White split canvas; Mascot `z-index: 2` |
| **06** | **How We Work** (`#how-we-work`) | `#F4F5F7` (Off-White Base Canvas) | `#F2F2F0` Bento Cards + Royal Blue card | `border: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | Process clarity & 14-day sprint model showcase |
| **07** | **Who We Are** (`#who-we-are`) | `#FFFFFF` (Pure White) | `#F2F2F0` (Off-White Pillar Cards) | `border: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | Agency philosophy & core team pillars |
| **08** | **Testimonials** (`#testimonials`) | `#FFFFFF` (Pure White) | `#F2F2F0` (Elevated Quote Cards) | `border: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | **Light Canvas**: Editorial social proof |
| **09** | **FAQ Accordion** (`#faq`) | `#FFFFFF` (Pure White) | `#F2F2F0` (Off-White Cards) | `border-bottom: 1px solid rgba(0,0,0,0.08)` | `--c8-blue` (`#0047E1`) | Clean editorial Q&A |
| **10** | **Pre-Footer CTA & Footer** (`parts/footer.php`) | `#FFFFFF` (Light Base Canvas) | **Paper Grid UI** (`.c8-paper-grid`) CTA Box | `border-bottom: 1px solid rgba(8,8,8,0.08)` | `--c8-blue` (`#0047E1`) | **Light Paper Grid UI** pre-footer CTA box transitioning to dark footer bar |

---

## 2. About Us Page (`page-about.php` & `assets/css/about-us.css`)

| # | Section Name & Class/ID | Current State Audit | Target Base Canvas | Target Surface Fills | Required Background & Layout Adjustments |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01** | **Studio Hero** (`.fylla-hero-section`) | Uses `#FAFAF7` off-white | `#FFFFFF` Pure White | Clean Video Box + HUD Tag | Replace `#FAFAF7` background with `#FFFFFF` Pure White |
| **02** | **Philosophy & Values** (`.fylla-values-section`) | Uses `#FAFAF7` off-white | `#FFFFFF` Pure White | `#F2F2F0` Surface Lift Cards | Replace `#FAFAF7` with `#FFFFFF`; set cards to `#F2F2F0` (`1px solid rgba(0,0,0,0.08)`) |
| **03** | **Dev Playground** (`.dp-section`) | `#080808` right panel + radial gradient | `#FFFFFF` Full White Canvas | `#FFFFFF` Panels + `#F2F2F0` Tool Cards | Sync with Homepage: `#FFFFFF` background, solid left border `1px solid rgba(8,8,8,0.08)`, mascot `z-index: 2`, `#080808` stat text |
| **04** | **Services Deep Dive** (`.sdv-section`) | Radial blue gradient + `.sdv-bg-blob` blobs | `#080808` Solid Obsidian Dark | `#141414` Charcoal Accordions | Remove radial gradient; set `display: none !important` on `.sdv-bg-blob` blobs |
| **05** | **Pillars of Growth** (`.hww-section`) | Uses `#FAFAF7` | `#F4F5F7` Off-White Canvas | `#F2F2F0` Bento Cards | Update canvas to `#F4F5F7` architectural off-white |
| **06** | **Performance Tech Stack** (`.tmn-section`) | Uses dark background assumptions | `#FFFFFF` Pure White | `#F2F2F0` Tech Cards | Set canvas base to `#FFFFFF` Pure White |
| **07** | **Studio Dossier / Passports** (`.c8-about-section`) | Uses `#FAFAF7` | `#FFFFFF` Pure White | `#F2F2F0` Dossier Cards | Set canvas base to `#FFFFFF` Pure White |
| **08** | **Who We Build For** (`.fylla-fit-section`) | Uses `#FAFAF7` | `#FFFFFF` Pure White | `#F2F2F0` Fit Cards | Set canvas base to `#FFFFFF` Pure White |
| **09** | **Leadership & Team Bios** (`.fylla-leadership-section`) | Uses `#FAFAF7` | `#FFFFFF` Pure White | `#F2F2F0` Bio Cards | Set canvas base to `#FFFFFF` Pure White |
| **10** | **Client Education** (`.fylla-edu-section`) | Uses `#FAFAF7` | `#FFFFFF` Pure White | `#F2F2F0` Edu Cards | Set canvas base to `#FFFFFF` Pure White |
| **11** | **Pre-Footer CTA** (`.fylla-cta-section`) | Uses `#FAFAF7` grid | `#FFFFFF` Pure White | **Paper Grid UI** (`.c8-paper-grid`) | Convert to Light Paper Grid UI pre-footer box |

---

## 3. Main Services Hub Page (`page-services.php` & `shared-service-components.css`)

| # | Section Name & Class/ID | Current State Audit | Target Base Canvas | Target Surface Fills | Atmospheric Animation & Gooey Layer Strategy |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01** | **Services Hero** (`.c8srv-hero`) | `#FFFFFF` Pure White | `#FFFFFF` Pure White | Transparent SVG Gooey Filter Container | `.c8srv-anim-container` is styled with `background: transparent; border: none;` so interactive gooey balls float seamlessly over the `#FFFFFF` canvas |
| **02** | **Primary Service 6-Cards** (`#primary-service-6cards`) | Inline `background-color: #080808` + radial blue gradient | `#080808` Solid Obsidian Dark | `#141414` Elevated Charcoal Cards | Remove radial gradient; enforce solid obsidian `#080808` dark canvas |
| **03** | **Interactive Folder Deck** (`#c8srv-services-folder-deck`) | Multi-card stacked interactive folder deck | `#FFFFFF` Pure White Canvas | `#F2F2F0` Elevated Folder Cards | Enforce `#FFFFFF` canvas base with `#F2F2F0` surface lift cards |
| **04** | **Scope Estimator** (`.c8srv-est-section`) | Interactive price estimator widget | `#FFFFFF` Pure White Canvas | `#F2F2F0` Estimator Card | Set background to `#FFFFFF` Pure White |
| **05** | **FAQ Accordion** (`#faq`) | `#FFFFFF` Pure White | `#FFFFFF` Pure White | `#F2F2F0` Accordion Items | Standardize `#F2F2F0` accordion card fills |

---

## 4. Discovery Call Page (`page-discovery-call.php`)

| # | Section Name & Class/ID | Current State Audit | Target Base Canvas | Target Surface Fills | Required Adjustments |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01** | **Outer Ticket Wrapper** (`.c8dc-wrap`) | `background: var(--ink)` (`#080808`) + radial blue gradient in `::before` | `#080808` Solid Obsidian Dark | N/A | Remove radial blue gradient (`radial-gradient(...)`) in `::before` pseudo-element |
| **02** | **Ticket Stub Card** (`.c8dc-card`) | `background: var(--paper)` (`#F2F1EC`) | `#F2F2F0` Surface Lift | Perforated Tear Line + Stamp | Standardize `#F2F2F0` surface fill with `#0047E1` Royal Blue tags & stamps |

---

## 5. Contact Us Page (`page-contact.php` & `page-contact-us.php`)

| # | Section Name & Class/ID | Current State Audit | Target Base Canvas | Target Surface Fills | Required Adjustments |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01** | **Outer Contact Wrapper** (`.c8ct-wrap`) | `background: var(--ink)` (`#080808`) + radial blue gradient in `::before` | `#080808` Solid Obsidian Dark | N/A | Remove radial blue gradient (`radial-gradient(...)`) in `::before` pseudo-element |
| **02** | **Contact Form Card** (`.c8ct-card`) | `background: var(--paper)` (`#F2F1EC`) | `#F2F2F0` Surface Lift | Perforated Tear Line + Form Box | Standardize `#F2F2F0` surface fill with `#0047E1` Royal Blue submit button & tags |

---

# 📋 BATCH 2: SERVICE SINGLE LANDING PAGES (10 TEMPLATES)

*(Web Design, Custom Dev, AI MVP, Shopify, WordPress, WooCommerce, E-Commerce, SEO & Content, Digital Marketing, Brand Strategy)*

| Section # | Section Name & Purpose | Target Base Canvas | Target Surface Fills | Atmospheric Animation Strategy |
| :--- | :--- | :--- | :--- | :--- |
| **01** | **Service Hero & Value Prop** | `#FFFFFF` Pure White | Clean Canvas Base | Hero SVG gooey filter & canvas layers render seamlessly over transparent `#FFFFFF` canvas |
| **02** | **Deliverables Matrix Bento** | `#FFFFFF` Pure White | `#F2F2F0` Surface Lift Cards (`1px solid rgba(0,0,0,0.08)`) | Standardize `#F2F2F0` surface cards |
| **03** | **Technical Architecture Stack** | `#080808` Solid Obsidian Dark | `#141414` Elevated Charcoal Cards (`1px solid rgba(255,255,255,0.10)`) | Remove radial gradients; enforce solid obsidian `#080808` |
| **04** | **14-Day Sprint Model** | `#F4F5F7` Off-White Canvas | `#F2F2F0` Bento Step Cards | Update canvas to `#F4F5F7` architectural off-white |
| **05** | **Verified Case Study Spotlight** | `#FFFFFF` Pure White | `#F2F2F0` Showcase Card | Symmetrical `4rem 3.5rem` cell padding & blueprint `+` crosshairs |
| **06** | **Service FAQ & Pre-Footer CTA** | `#FFFFFF` Pure White | **Paper Grid UI** (`.c8-paper-grid`) CTA Box | Standardize Light Paper Grid UI pre-footer CTA box |

---

# 📋 BATCH 3: PORTFOLIO & CASE STUDY SEPARATION AUDIT

### 1. Dynamic Case Study Single Template (`single-case_study.php`)
- **Base Canvas**: `#FFFFFF` Pure White.
- **Showcase Grid Layout**: Symmetrical `4rem 3.5rem` card padding, `#F2F2F0` Surface Lift fills (`1px solid rgba(0,0,0,0.08)`), blueprint `+` corner crosshairs.
- **Metric Cards & Floating Badges**: `#FFFFFF` or `#F2F2F0` surface fills with `--c8-blue` (`#0047E1`) stat numbers.
- **Headings & Body Typography**: Preserve existing typography hierarchy (`#080808` for titles, `#555555` for body text) — avoiding blanket color overrides that break text legibility.

### 2. Individual Case Study Landing Pages (`page-case-study-*.php`)
*(The Duch Apartments, blvck Hair NG, WP Publishion AI, Mkenny, Stride, Sweetermen, Victoria's Lane, Kiri City, Bridgepoint)*
- **Base Canvas**: `#FFFFFF` Pure White.
- **Client Branding Boundary**: Client-specific brand colors (e.g. green for Duch, red/blue for Mkenny) MUST ONLY be used inside specific showcase mockups or style guide swatches. The page frame itself uses `#FFFFFF` base canvas and `#0047E1` Royal Blue interactive accents.

### 3. Portfolio Archive Hub (`archive-case_study.php`, `page-portfolio.php`)
- **Base Canvas**: `#FFFFFF` Pure White.
- **Case Study Cards**: `#F2F2F0` Surface Lift cards (`1px solid rgba(0,0,0,0.08)`) with `#0047E1` Royal Blue category tags.

---

# 📋 BATCH 4: BLOG, ARCHIVES & UTILITIES

1. **Blog Main Hub (`home.php`) & Single Blog Post (`single.php`)**:
   - **Base Canvas**: `#FFFFFF` Pure White.
   - **Article & Bio Cards**: `#F2F2F0` Surface Lift fills (`1px solid rgba(0,0,0,0.08)`).
2. **404 Error Page (`404.php`) & 500 Page (`500.php`)**:
   - **Base Canvas**: `#080808` Solid Obsidian Dark (No radial gradient).
   - **Error Ticket Card**: `#141414` Elevated Charcoal (`1px solid rgba(255,255,255,0.10)`).

---

## 🔒 Execution Protocol (Do Not Code Yet)

Once you review this re-audited matrix:
1. First, apply Homepage Dev Playground contrast fix & header nav pill in `front-page.php`, `parts/header.php`, and `style.css`.
2. Batch 1 Execution: Update `page-about.php`, `page-services.php`, `page-discovery-call.php`, `page-contact.php`.
3. Batch 2 Execution: Update 10 `page-service-*.php` templates.
4. Batch 3 Execution: Update Portfolio & Case Study templates.
5. Deploy to Local WP via `deploy-to-local.ps1` & push to Git.
