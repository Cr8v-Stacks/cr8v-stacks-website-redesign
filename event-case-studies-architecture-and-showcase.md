# Event Case Studies: Master Architecture, Engineering Ground Truth & Showcase Blueprint

**Document Reference:** `event-case-studies-architecture-and-showcase.md`  
**Status:** Canonical Ground Truth & Operational Reference  
**Last Updated:** September 2026  
**Purpose:** Permanent reference specification for the **Red Cap Entertainment** and **Crux Nxtion** case studies within the Cr8v Stacks portfolio website redesign, establishing complete parity with the canonical [Kiri City Stays](file:///C:/Users/user/Documents/Dev-Playground/Cr8v%20Stacks%20Website%20Redesign/kiri-city-stays.html) standard.

---

## 1. Executive Summary & Core Philosophy

The Red Cap Entertainment and Crux Nxtion case studies represent a landmark milestone in Cr8v Stacks' engineering practice: **The Rapid Event Deployment & Universal Inquiries Framework**.

### The 2026 Agency Problem
In 2026, AI can rapidly generate webpage HTML/CSS, but the agency industry struggles with how to push AI-generated websites into production while maintaining client editability. Most agencies attempt to hack Elementor JSON or force complex block editor schemas, introducing severe performance bloat, fragile dependencies, slow load times (3.8s–5.2s), and broken responsive layouts.

### The Cr8v Stacks Solution: Back to Native WordPress Core
Cr8v Stacks pioneered a high-velocity, dependency-free pipeline:
1. **AI-Assisted Semantic HTML/CSS First**: Clean, modular, framework-agnostic markup structured with CSS custom properties.
2. **Native WordPress Customizer Conversion**: Utilizing the native WordPress Customizer as the single, robust control surface (`WP_Customize_Section`, `WP_Customize_Setting`, `WP_Customize_Control`).
3. **Instant Live Preview Without Page Builders**:
   - **Selective Refresh (`selective_refresh`)**: WordPress swaps targeted DOM partials automatically when content, cards, or text change.
   - **`postMessage` Transport**: Real-time CSS custom property updates directly on `:root` via `customize-preview.js` with zero full-page reloads.
4. **Lazy-Mode Scoped Controls**: Customizer settings conditionally register based on the template actively previewed in the frame (`$wp_customize->get_preview_url()`), preventing administrative clutter.
5. **Multi-Variant Page Template Library**: Every page variant built feeds into a reusable library (`templates/home/template-home-variant-a.php`, etc.), selectable by clients via the native WordPress **Page Attributes > Template** dropdown on subsequent builds.
6. **Sub-1.0s Production Performance**: Pure static PHP template output achieving **100/100 Google PageSpeed scores** with **0.58s–0.65s load times**, < 400 DOM nodes, and 0 KB runtime builder bloat.

---

## 2. The Universal Companion Inquiries Engine (`cr8v-inquiries` / `cr8v-events-core`)

A shared core companion plugin engineered by Cr8v Stacks to eliminate third-party form plugins (WPForms, Contact Form 7, Gravity Forms) across all event client websites.

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│                        UNIVERSAL INQUIRIES & EVENT CORE PLUGIN                         │
├────────────────────────────────────────────────────────────────────────────────────────┤
│ 1. Data Model & Storage:                                                               │
│    - CPT 'cr8v_inquiry' + Custom WP Admin Dashboard (admin.php?page=cr8v-inquiries)    │
│    - 4-Stage Lifecycle CRM:                                                            │
│        Stage 01: New / Unread                                                          │
│        Stage 02: In Review                                                             │
│        Stage 03: Client Contacted                                                      │
│        Stage 04: Concluded / Booked                                                    │
│    - Telemetry: Pipeline conversion rates, quote value (£), technical lead assignment  │
│    - Meta fields: _cr8v_inquiry_email, _phone, _services, _discipline, _scope, _status │
│                                                                                        │
│ 2. Security & Anti-Spam Triple Gate:                                                   │
│    - Trap 01: Invisible Honeypot field (bwc_hp_check / rce_hp_check)                   │
│    - Trap 02: 2-Second Time-Gate validation (catches rapid bot POST requests)          │
│    - Trap 03: Transient IP Rate Limiter (Max 5 submissions per 10-minute window)       │
│                                                                                        │
│ 3. Multi-Discipline Intake Specification Matrix:                                       │
│    - Interactive selectable chips covering 10+ live production & advisory disciplines  │
│                                                                                        │
│ 4. Automated Dual Branded HTML Email Dossier Engine:                                   │
│    - Lead Production Desk Dossier: Dark-mode executive brief with formatted badges      │
│    - Client Confirmation Dossier: Editorial receipt verifying intake parameters        │
└────────────────────────────────────────────────────────────────────────────────────────┘
```

---

## 3. Verified Client Ground Truth & Technical Scope

### A. Red Cap Entertainment ([https://redcapentertainment.co.uk/](https://redcapentertainment.co.uk/))
* **Official Positioning**: *Live Spectacle Architecture, African Cultural Staging & Elite Event Production UK Nationwide*.
* **Core Manifesto**:
  > *"Red Cap Entertainment produces live cultural experiences, festivals, exhibitions and heritage-led productions across the UK and internationally. Our work brings African cultural heritage into contemporary live settings through performance, visual culture, storytelling and ceremonial traditions."*
* **Core Taglines**: `CULTURE. IN MOTION. ON STAGE.` • `UK-BASED • PRODUCING ACROSS THE UK & INTERNATIONALLY` • `WE BUILD THE NIGHT, NOT JUST ONE PART OF IT.`
* **Creative Director & Founder**: **Farida Atanda** (Live Cultural Event Producer & Creative Director, legal training provenance, *Scream Honours 2026 • AFRI-BALL Producer of the Year*).
* **Press Coverage**: Features in *The Nation*, *Vanguard*, and *PM News*.
* **The 4 Core Disciplines**:
  1. *01 Live Cultural Production*: Concept development, artistic direction, and end-to-end technical delivery of multidisciplinary live African cultural experiences.
  2. *02 Festivals & Public Programmes*: Heritage-led festivals and open-air public programmes (*Festival of Unity / NAFEST* at National Theatre Lagos, *Hubert Ogunde Opera & Folk Festival*, *UnityFEST*, *Adinkra Symbols Symposium*).
  3. *03 Exhibitions & Curatorial Projects*: Visual arts and material culture (*Beyond the Bronze: Modern Benin Art Exhibition* at Adeline Gallery Lagos, fine art illumination, institutional liaison).
  4. *04 Ceremonial & Cultural Showcases*: Sovereign and matrimonial traditions (*The Pan-African Royal Nuptials / Alaga Showcase* at National Theatre of Ghana, *Igbo Nuptials Showcase 2.0 (UK Edition)* at Atoy Venues Sheffield, *Arewa Heritage & Poetry Night* at Arewa House Kaduna).
  5. *Diaspora Commerce*: *Traders Fair & Cultural Showcase* at Sheffield Exhibition Centre.
* **Red Cap Specific Engineering Deliverables**:
  - Event CPT Archive & Single Templates with dynamic `cr8v_is_event_past()` timestamp calculus.
  - Concluded event auto-disabling ("Event Concluded" status pill and disabled calendar button).
  - Real-time downloadable `.ics` calendar invite generator (`cr8v_render_calendar_button()`).
  - Full TGMPA v2.6.1 auto-bundling and 1-Click Starter Content Demo Importer (`inc/demo-importer.php`).
  - Bespoke WP Admin branding (`admin-style.css`) with Deep Obsidian/Crimson/Gold accents and custom Gutenberg editor stylesheet matching `Anton` + `Manrope` typography.

---

### B. Crux Nxtion ([https://cruxnxtion.co.uk/](https://cruxnxtion.co.uk/))
* **Official Positioning**: *The Dual-Wing Cultural & Commercial Powerhouse*.
* **Founder & Principal**: **Olabamidele "Bambad" Badmos** (Creative Director & Principal Consultant).
* **Brand Taglines**: *"We plan it. We book it. We run it."* • *"FOR YOUR NIGHT / FOR YOUR BUSINESS"* • *"Turning business ideas into businesses that work."*
* **The Dual-Wing Domain Architecture**:
  1. **Events Wing** (`#002671` / `#1E48B0` / `#5B8DEF` / Dark Mode `#0A0F26`):
     - Event Planning & Management (End-to-end execution).
     - Entertainment Booking & Talent (DJs, hosts, live performers).
     - Event Design & Audio-Visual Production (Weddings, birthdays, launches).
     - Event Marketing & Promotion (Buzz that fills the room).
     - On-Site Floor Coordination (Day-of logistics & live operations).
  2. **Consultancy Wing** (`#8C7AE6` / `#B7A6FF` / Light Mode `#FFFFFF`):
     - Business Setup & Strategy (From idea to a viable plan).
     - Branding & Strategic Marketing.
     - Business Growth & Revenue Scaling.
     - Commercial Fitout & Setup (Unit sourcing, commercial leasing, and shopfitting).
     - Specialized Visas & Advisory (UK Global Talent and Founder Visas).
* **Crux Nxtion Specific Engineering Deliverables**:
  - Hardware-Accelerated Slanted Header Switcher Pod (`clip-path: polygon(8px 0, 100% 0, calc(100% - 8px) 100%, 0 100%)`) allowing users to seamlessly toggle between the Events platform and the Consultancy platform with zero page reload latency.
  - Fixed Bottom Floating Mobile Switcher docking gracefully to the mobile viewport edge for thumb-zone navigation.
  - Multi-tier 10-discipline inquiry intake matrix routing commercial briefs vs. live nightlife briefs to appropriate account teams.
  - Autonomous 301 URL migration router preserving organic Google search equity.

---

## 4. The Canonical Case Study Standard (Parity with Kiri City Stays)

To guarantee broadcast-grade quality and eliminate prior layout bugs, both case studies adhere to the strict layout, design tokens, and components defined in [kiri-city-stays.html](file:///C:/Users/user/Documents/Dev-Playground/Cr8v%20Stacks%20Website%20Redesign/kiri-city-stays.html):

| Design Dimension | Canonical Standard | Strict Invariant |
| :--- | :--- | :--- |
| **Theme / Chrome Colors** | Pure Cr8v Stacks Palette (`#FFFFFF`, `#FAFAF7`, `--c8-blue: #0047E1`, `--c8-ink: #111215`, `--c8-sub: #55575D`, hairline grid `#E5E7EB`). | **Zero Client Brand Color Leakage**: Client colors exist *only* inside screenshots and tag chips, never in the page shell or background. |
| **Border Radius** | Strict architectural 4px max (`border-radius: 4px !important;`). | No large rounded bubble cards or generic pill shapes on outer containers. |
| **Hero Media Switcher** | Dual Switcher (`.c8cs-grow-media-wrapper`): Landscape 16:9 Portfolio View vs. Vertical 3:4 Service Page View. | Clean perspective desk/tabletop photo setup; **zero slanted screen errors, zero artificial stickers pasted over cables**. |
| **Asset 02 Standard** | **Pure Desktop & Interface Engineering Architecture (16:9)**. | **NEVER a mobile drawer screenshot!** Must showcase real desktop engineering (Customizer pipeline for Red Cap; Slanted switcher pod for Crux). |
| **Asset 03 Standard** | **3:4 Portrait White Architectural System Model Board on Granite** on the right, paired with 3 numbered takeaway chips (`01`, `02`, `03`) on the left (`.c8cs-sovereignty-split`). | Non-negotiable across every single case study in the redesign. |
| **The Showcase Section** | Dedicated engineering feature showcase highlighting the bespoke digital products, interactive components, and workflows built by Cr8v Stacks. | Component A: Multi-Slide Carousel Deck (6 Slides) + Component B: Mobile Inspection Stage (2 Vertical Phone Cards). |
| **Mobile Lightbox Standard** | When any mobile interface card is clicked in the inspector, it must open **inside an authentic mobile device casing/frame** rather than a flat stretched image. | Preserves true mobile ergonomics and perspective. |
| **Gallery Stream** | 9 high-fidelity cells strictly showcasing the actual digital systems, dashboards, interfaces, and architecture Cr8v Stacks built. | **Must showcase what Cr8v Stacks built on WordPress**, not generic third-party event photos or client retail operations! |

---

## 5. Deliverable Specifications: What We Actually Built

### A. Red Cap Entertainment (`red-cap-entertainment.html`)

#### Section 4: Core Technical Deliverables
* **Asset 01 (16:9 Desktop)**: *Master Brand Standards & Cultural Vector Identity* (`rc_asset_01_brand.webp`): Heavy Anton display typography, Syne luxury headings, Space Mono stage cues, gold feather rosette seal, and cultural color tokens (`#B4282D`, `#D19228`, `#FAF3E4`, `#121212`).
* **Asset 02 (16:9 Desktop)**: *The 2026 AI-to-Customizer Rapid Architecture* (`rc_asset_02_customizer.webp`): 4-stage pipeline diagram detailing Stage 01 semantic HTML/CSS, Stage 02 `WP_Customize_Manager` mapping, Stage 03 selective refresh & `postMessage` transport, and Stage 04 sub-1.0s production performance.
* **Asset 03 (3:4 White Architectural Model Board on Granite)**: *Universal Event Data Core & Dynamic Calendar Calculus* (`rc_asset_03_ecosystem.webp`): 3D relief model mapping Event CPT loop &rarr; `cr8v_is_event_past()` timestamp calculus &rarr; real-time `.ics` calendar generator &rarr; `cr8v-inquiries` intake router.

#### Section 5: Dedicated Engineering Showcase Section (Component A & B)
* **Component A: Multi-Slide Engineering Carousel Deck (6 Slides)**:
  1. *Slide 01 // Native Customizer Control Surface*: Instant live text and layout controls with zero page reloads via selective refresh partials.
  2. *Slide 02 // 4-Stage Inquiries Pipeline CRM Dashboard*: Bespoke `admin.php?page=cr8v-inquiries` interface tracking lead lifecycle, quote values (£), and conversion telemetry.
  3. *Slide 03 // Multi-Variant Page Template Library*: Native WordPress Page Attributes selector with lazy-mode scoped customizer controls.
  4. *Slide 04 // Dynamic .ics Calendar Generator*: Real-time `.ics` calendar invite creation and automated past-event disabling state (`cr8v_is_event_past()`).
  5. *Slide 05 // 1-Click Starter Content Demo Importer*: Automated database seeder (`inc/demo-importer.php`) populating sample cultural productions upon theme activation.
  6. *Slide 06 // Dual Executive HTML Email Engine*: Dark-mode briefing worksheet dispatched to lead producers alongside client confirmation receipts.
* **Component B: Mobile Interface Inspection Stage (2-Card Comparison Grid)**:
  - *Card 01*: Full-screen mobile navigation drawer with cultural navigation hierarchy (`scratch_rc_live_mobile_hero.png`).
  - *Card 02*: Live event production docket & ticket stub interaction on mobile viewports.

#### Section 6: Engineering Showcase Stream (9 Gallery Cells)
1. *Cell 01 [Event CPT Docket Archive]*: Dynamic Event CPT Archive with upcoming/past status filters (`scratch_rc_live_events_archive.png`).
2. *Cell 02 [Universal Inquiries CRM Dashboard]*: `admin.php?page=cr8v-inquiries` custom post type database manager (`rc_gallery_02_inquiries.webp`).
3. *Cell 03 [Single Event Production Logistics]*: Single event production brief with dynamic `.ics` trigger (`scratch_rc_live_single_event.png`).
4. *Cell 04 [Executive HTML Email Dossier]*: Branded intake brief rendered with service chips and client metadata (`rc_gallery_04_email_dossier.webp`).
5. *Cell 05 [Native Customizer Live Panel]*: Native WordPress Customizer panel with selective refresh partial highlights (`rc_asset_02_customizer.webp`).
6. *Cell 06 [Production Commissioning Brief]*: Interactive brief intake matrix with honeypot bot defense (`scratch_rc_live_contact.png`).
7. *Cell 07 [Press & Award Verification Portal]*: Scream Honours 2026 Producer of the Year credential archive (`scratch_rc_live_desktop_docket.png`).
8. *Cell 08 [1-Click Starter Content Demo Seeder]*: Bundled demo seeder interface (`inc/demo-importer.php`).
9. *Cell 09 [Bespoke WP Admin Theme]*: Deep Obsidian and Crimson admin theme with custom status pills (`admin-style.css`).

---

### B. Crux Nxtion (`crux-nxtion.html`)

#### Section 4: Core Technical Deliverables
* **Asset 01 (16:9 Desktop)**: *Dual-Wing Design System & Typography Tokens* (`crux_asset_01_tokens.webp`): High-contrast Dark Mode (Events) and Crisp Light Mode (Consultancy) token specs, Bebas Neue and Space Grotesk type scales, and slanted button geometry.
* **Asset 02 (16:9 Desktop)**: *Slanted Capsule Switcher Architecture* (`crux_asset_02_switcher.webp`): Mathematical polygon geometry (`clip-path: polygon(...)`), persistent mobile sticky switcher pod, and instant zero-reload mode switching.
* **Asset 03 (3:4 White Architectural Model Board on Granite)**: *Platform Architecture: WordPress Core Engine & Dual-Wing Ecosystem* (`crux_asset_03_ecosystem.webp`): 3D relief model mapping the Dual-Wing Domain Sovereignty core branching through slanted polygon scenography, `cr8v-events-core` companion plugin, and 10-discipline inquiry intake router.

#### Section 5: Dedicated Engineering Showcase Section (Component A & B)
* **Component A: Multi-Slide Engineering Carousel Deck (6 Slides)**:
  1. *Slide 01 // Slanted Parallelogram Switcher Pod*: Mathematical polygon geometry (`clip-path: polygon`) for instantaneous domain context switching.
  2. *Slide 02 // 4-Stage Inquiries Pipeline CRM Dashboard*: Structured inquiry intake log with 10-discipline tags and status lifecycle management.
  3. *Slide 03 // 10-Discipline Service Intake Matrix*: Multi-discipline chip selector routing nightlife briefs vs. corporate consultancy briefs.
  4. *Slide 04 // Native Customizer Token Engine*: Real-time CSS custom property manipulation via `postMessage` transport on `:root`.
  5. *Slide 05 // Multi-Variant Page Template Library*: Reusable template variants selectable via WP Page Attributes dropdown.
  6. *Slide 06 // Dual-Tier Automated Email Dispatch*: Executive briefing dossiers formatted for senior partners with instant booking links.
* **Component B: Mobile Interface Inspection Stage (2-Card Comparison Grid)**:
  - *Card 01*: Full-screen mobile navigation drawer with dual-wing accordion panels (`crux_gallery_06_mobile_drawer.webp`).
  - *Card 02*: Fixed bottom floating switcher pod docked to mobile viewport for thumb-zone navigation (`scratch_crux_live_mobile_hero.png`).

#### Section 6: Engineering Showcase Stream (9 Gallery Cells)
1. *Cell 01 [Events Wing Live Portal]*: High-energy nightlife and concert booking interface (`scratch_crux_live_events.png`).
2. *Cell 02 [Consultancy Wing Corporate Advisory]*: Crisp corporate advisory and executive business consulting portal (`scratch_crux_live_consultancy.png`).
3. *Cell 03 [Hardware-Accelerated Switcher Pod]*: Slanted switcher toggling Events and Consultancy platforms (`crux_asset_02_switcher.webp`).
4. *Cell 04 [Universal Inquiries CRM Dashboard]*: 10-discipline pipeline CRM dashboard (`crux_gallery_04_inquiries.webp`).
5. *Cell 05 [Enterprise Commercial Intake Matrix]*: Intake brief with wing routing tags (`scratch_crux_live_contact.png`).
6. *Cell 06 [Native Customizer Scoped Controls]*: Lazy-mode Customizer panel scoped to active page template variants.
7. *Cell 07 [Single Event Production Logistics]*: Event docket schedule and talent booking lineup (`scratch_crux_live_desktop_services.png`).
8. *Cell 08 [Executive Consultancy Dossier]*: Business strategy intake brief dispatched to senior advisory teams.
9. *Cell 09 [Bespoke WP Admin Theme]*: Dual-wing administration interface and management surface.
