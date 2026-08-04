# 📐 REVISED Layout Matrix & Architecture Specification — About Us Page (`about-us.html`)

## Executive Summary of Revisions
1. **Section 03 & Section 07 Swap**:
   - **Section 03** is now the **Dev Playground Split Section (`dp-section`)** copied verbatim from the Homepage ("Always Building / Built by us"). It includes the white left side with 5 tool listings, the floating mascot video (`assets/download_mascot.mp4`), a left-side CTA button, and the Royal Blue right side with 4 metric pairs.
   - **Section 07** is now **Technical Advantage** (*Typical Templates vs. CR8V Stacks Engine*), rendered as a high-energy, custom comparison layout with status pills (`[BLOATED BUILDER]`, `[95+ PAGESPEED]`), custom SVG icons, and clean card hover elevation.
2. **5-Card Bento Grid Expansion (Section 05)**:
   - Expanded Section 05 (*Pillars of Growth*) to 5 cards (4 service pillars + 1 central visual asset card) to achieve **exact structural parity with the Homepage "How We Work" 5-card Bento Grid layout**.
3. **Clean White Founder Quote Card (Section 09)**:
   - Completely removed the dark black background box from the Founder bio section. Replaced with a **Clean White Quote Card** (`#FFFFFF` background, light grid-line border, elegant Georgia quote watermark, zero border-left accent).
4. **Enhanced Spacing & Pacing**:
   - Applied generous vertical section padding (`6rem 4rem`) to eliminate visual clutter and ensure every section breathes.

---

## 📊 Comprehensive Revised Layout Matrix

| # | Section Name | Source Origin | Target UI Component & Structure | Visual Assets & Micro-Interactions | Content Copy & Structural Mapping |
|---|---|---|---|---|---|
| **01** | **Agency Profile Hero** | **Fylla Studio** | `fylla-hero-section` with Tag Pills & HUD Image Frame | • 21:9 Widescreen Studio Workspace Image (`assets/wwa_studio_visual.jpg`)<br>• Animated HUD Tag (`// SYSTEM_ACTIVE`)<br>• Tech pill badges | Core positioning + blue gradient headline (*"WE DEFY TEMPLATES. WE CODE CONVERSIONS."*). |
| **02** | **Philosophy & Architecture** | **Fylla Studio** | Split 2-Col Layout (`fylla-values-section`) with Numbered Value Cards | • 01/02/03 Mono index counters in Royal Blue<br>• Clean card hover elevation<br>• Case Study CTA button | Founder story (Mallami Adekunle) on left + 3 architecture pillars on right (*Zero Bloat*, *Liquid Engineering*, *Entity SEO*). |
| **03** | **Dev Playground (Always Building)** | **Homepage** (*"Always Building"*) | **Verbatim Homepage White/Blue Split Layout (`dp-section`)** | • **Mascot Video**: `assets/download_mascot.mp4` straddling the split<br>• **Left White Half**: 5 Tool entries + CTA button (`Visit Dev Playground →`)<br>• **Right Blue Half**: 4 Stat Pairs (`5`, `100%`, `60s`, `∞`) | Displays internal tools (*Cost Calculator*, *Stack Directory*, *Nativus Dashboard*, *WP Publishion AI*, *LumiCode*) with exact homepage split screen parity. |
| **04** | **5-Step Stack Process** | **Homepage** (*"What We Actually Do"*) | **5-Step Pinned Stacking Scroll Trigger** (`fylla-stack-pin-container`) | • Sticky pin container with 5 layered cards<br>• Background image textures (`hww_process_layers.jpg`, `hww_workflow_visual.jpg`, etc.)<br>• Progress dots & step counters (01-05) | Process content ("Layer by Layer — Nothing ships until the layer below is solid") mapped to 5 interactive scroll cards. |
| **05** | **Pillars of Growth** | **Homepage** (*"How We Work"*) | **Expanded 5-Card Bento Grid** (Matching Homepage Layout) | • 5-Card Bento Layout<br>• Central Visual Image Card (`assets/wwa_studio_visual.jpg`)<br>• Category indexing (`01 / IDENTITY` to `05 / PERFORMANCE`) | 5 Cards: 01 Brand Strategy, 02 Web Design, **03 Central Visual Showcase**, 04 Digital Marketing, 05 Technical SEO & Performance. |
| **06** | **Performance & Tech Stack** | **Homepage** (*Testimonials Breakout*) | Dark Radial Glow Breakout + Metric Cards & Tech Logo Marquee | • Radial blue background glow (`#080808` breakout)<br>• 4 metric boxes (95%, 3.5x, 90%, 40+)<br>• SVG logo ticker (Shopify, WordPress, Claude, OpenAI, PHP, Figma) | Metric callouts + live tech stack logo row with homepage breakout layout parity. |
| **07** | **Technical Advantage** | **Custom High-Energy Layout** | Dual High-Contrast Comparison Cards (`fylla-adv-grid`) | • **Status Pills**: `[BLOATED BUILDER]` vs `[95+ PAGESPEED]`<br>• SVG vector check & warning icons<br>• Blue border hover glow | Compares *Typical Templates* vs *The CR8V Stacks Engine* in a clean, spacious, high-energy layout. |
| **08** | **Who We Build For** | **Fylla Studio** (*Fit Matrix*) | Split Fit / Not Fit Cards (`fylla-fit-grid`) | • Highlighted "Right Place" card with Royal Blue accent<br>• Clean check/cross badges<br>• Generous padding | 4 target client fit criteria vs. 4 non-fit disqualifiers clearly presented. |
| **09** | **Leadership & Founder Bio** | **Fylla Studio** + **Clean White Quote UI** | Split Bio Column + Cyberpunk Pass Card & **Clean White Quote Card** | • Dark Security Pass Card (`CR8V STACKS // SECURE PASS`, ID: `080-MA`)<br>• **WHITE Quote Card**: `#FFFFFF` bg, light border, Georgia quote watermark (NO black box, NO border-left accent) | Full Founder Bio for Mallami Adekunle + clean white executive quote card. |
| **10** | **Open Source & Education** | **Fylla Studio** (*Edu Split Layout*) | Dual Image-Frame Showcase Columns (`fylla-edu-col`) | • YouTube video mockup (`cr8v_youtube_mockup.png`) with red Play button overlay<br>• AI-to-WP Structural Tree Diagram image (`ai_wp_tree_workflow.jpg`) | Covers `@cr8vstacks` YouTube channel & AI-to-WordPress workflows. |
| **11** | **Final Contact CTA** | **Fylla Studio** (*CTA Parity*) | Split 2-Column Dark CTA Card (`fylla-cta-section`) | • High-contrast button (`Book A Discovery Call`)<br>• Mono category header (`// CONTACT`) | Streamlined closing headline + direct booking link. |

---

## 📐 Pacing & Padding Rule
Every section has explicit top & bottom padding (`6rem 4rem` desktop / `4rem 1.5rem` mobile) to create consistent rhythm and prevent visual fatigue.
