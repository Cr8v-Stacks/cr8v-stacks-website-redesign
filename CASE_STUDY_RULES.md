# CR8V STACKS — Case Study Visual Design Rules & Production Framework

> **MANDATORY REFERENCE FOR ALL CASE STUDY CREATIVE ASSETS**  
> Never deviate from these rules. Every single image generated, composited, or engineered must strictly adhere to this framework.

---

## 1. Core Philosophy: Showcase The ACTUAL WORK DONE
1. **Never generate empty backdrops, random laptops, generic props, or irrelevant objects.**
   - Every asset must directly showcase the actual software, digital storefront, brand system, or engineering work performed for that specific client.
   - If an asset is for a luxury watch e-commerce store, it must show the actual watch catalog, the specific product models, the actual prices (NGN), and the checkout interface.
   - If an asset is for an ad campaign, it must show the actual ad creatives, audience targeting parameters, and ROAS return metrics.

2. **Audience Alignment & Cultural Accuracy**:
   - **SweeterMen NG & Victoria's Lane**: Both target **Black / African luxury audiences** (Nigeria/UK direct-to-consumer).
   - NEVER use European / Caucasian models or stock presets.
   - All currencies must reflect the brand's operational market (e.g. NGN ₦ with Paystack payment gateway routing).

3. **Platform Distinction**:
   - **SweeterMen NG = WOOCOMMERCE**: WordPress custom PHP architecture, zero plugin bloat, custom checkout hooks, Paystack gateway, Meta paid ads funnels.
   - **Victoria's Lane = SHOPIFY**: Shopify Liquid custom storefront, AJAX slide-out cart, native Shopify variant matrix, fashion CRO.
   - Never confuse WooCommerce features with Shopify Liquid features.

---

## 2. Resource & Quota Allocation (No Wasted AI Tokens)
- **Hard Quota Limit**: Maximum **2 to 3 AI Image Generator calls per case study** (strictly for primary hero visuals or complex photorealistic product composites where code cannot render physical textures).
- **The Remaining 7 to 8 Assets**: Built via high-fidelity graphics, real UI compositing, and architectural models using existing surface substrates.
- **Pre-Approval Requirement**:
  - Always map out the exact 10-slot visual plan with the user **before** touching the generator or writing any script.
  - Review existing assets, mockups, and live scrapes first to see what can be repurposed.

---

## 3. The 11-Slot Asset Specifications & Dimensions
Every case study suite requires:
1. **Hero Landscape (`case_study_[slug].webp`)** [1376×768, 16:9]: Flagship case study hero showing primary desktop + mobile interface with core outcome metrics.
2. **Hero Vertical (`cs_[slug]_hero_vertical.webp`)** [896×1200, 3:4 Portrait]: Dedicated vertical card for Section 3 of the relevant Service Page.
3. **Asset 01 (`[slug]_asset_01_[name].webp`)** [1376×768, 16:9]: Strategic Challenge & Core Architecture / Design System / PDP Matrix.
4. **Asset 02 (`[slug]_asset_02_[name].webp`)** [1376×768, 16:9]: Conversion Flow / 1-Step Checkout Engine / UX Innovation.
5. **Asset 03 (`[slug]_asset_03_[name].webp`)** [896×1200, 3:4 Portrait]: System Architecture / Growth Engine / Tactile Physical Boardroom Model. (Matches `.c8cs-sovereignty-img-box` container).
6. **Gallery 01 (`[slug]_gallery_01.webp`)** [1376×768, 16:9]: Floating storefront catalog matrix (~86% canvas width on studio background) with macro crops of real products.
7. **Gallery 02 (`[slug]_gallery_02.webp`)** [1376×768, 16:9]: Mobile storefront discovery, drawer navigation, or PayLater / Installment breakdown.
8. **Gallery 03 (`[slug]_gallery_03.webp`)** [1376×768, 16:9]: Paid acquisition / Meta feed ad creative with verified performance telemetry.
9. **Gallery 04 (`[slug]_gallery_04.webp`)** [1376×768, 16:9]: Core Web Vitals, Google PageSpeed scorecard, and speed waterfall benchmarks.
10. **Gallery 05 (`[slug]_gallery_05.webp`)** [1376×768, 16:9]: Verified client/customer social proof, reviews, and trust architecture.
11. **Gallery 06 (`[slug]_gallery_06.webp`)** [1376×768, 16:9]: Pure full-bleed photograph of physical packaging, unboxing, or real-world delivery (zero synthetic Python text overlays).

---

## 4. Typography & Font Integrity Rules (Strict Zero-Glyph-Fallback)
1. **Currency Glyph Support (CRITICAL)**:
   - NEVER use `georgiab.ttf` (Georgia) or `consolab.ttf` (Consolas) for currency prices or strings containing `₦`. They lack Unicode `₦` (U+20A6) and will render a broken hollow box `□`.
   - ALWAYS use **Segoe UI Bold (`segoeuib.ttf`)** or system fonts with verified native `₦` glyph support.
2. **Vector Icons vs Raw Unicode Characters**:
   - NEVER use raw Unicode symbols like `✓`, `🔒`, `★` in standard fonts.
   - Always draw crisp vector checkmarks via `draw_vector_check()` (`draw.line`), polygon stars via `draw_five_stars()`, or native shapes.

---

## 5. Mathematical Layout & Alignment Constraints
1. **Zero Text Overlap (Dynamic Bounding Boxes)**:
   - NEVER use hardcoded X-coordinates for sibling text beside prices or headings.
   - ALWAYS measure the bounding box dynamically:
     ```python
     bbox = draw.textbbox((x, y), text, font=font)
     sibling_x = bbox[2] + margin  # e.g., +20px or +24px
     ```
2. **Zero Container Overflow (Right-Aligned Elements)**:
   - For total prices, badges, or tags aligned towards the right side of a card, ALWAYS calculate:
     ```python
     bbox = draw.textbbox((0, 0), text, font=font)
     text_w = bbox[2] - bbox[0]
     x = card_x + card_w - interior_padding - text_w
     ```
   - Never hardcode an arbitrary offset like `card_x + card_w - 400` that can overflow when font sizes or lengths change.
3. **Mathematically Centered Buttons**:
   - Every CTA button must calculate true optical center:
     ```python
     tx = btn_x + (btn_w - text_w) // 2
     ty = btn_y + (btn_h - text_h) // 2 - bbox[1]
     ```
4. **No Generic Eyebrows**:
   - Never add generic eyebrow badges like "Case Study WooCommerce Showcase" or "Case Study Showcase". Keep badges strictly informative (e.g. "WOOCOMMERCE STORE", "FLAGSHIP HOROLOGY", "SHOPIFY LIQUID").

---

## 6. Authentic E-Commerce Components
1. **Swatch Variants**:
   - Must look like authentic luxury e-commerce swatches (circular preview discs with active metallic/accent ring borders), never rectangular text buttons.
2. **Product Macro Imagery**:
   - Product catalog grids must feature tight macro crops of actual physical merchandise (e.g., watches, handbags, garments). Never crop laptop keyboards, desks, or trackpads into product slots.
3. **Floating UI Framing**:
   - Complex catalog layouts must float on a clean, light studio canvas (~86% canvas width) with soft drop shadows, preventing visual claustrophobia.

---

## 7. UI Consistency & Sync Requirements
1. **Brand Token Consistency**:
   - Header style, brand typography, accent colors, button radius, and badge treatments must remain strictly consistent across all 11 assets for any single client.
2. **Copy Alignment**:
   - The written copy in `single-case_study.php` (headlines, overview items, asset titles, bullet points) must **100% describe what is visible in the corresponding image**.
   - If the visual changes, the copy in the template must be updated in lockstep.
3. **Distribution Sync**:
   - Whenever assets are regenerated or modified, rebuild strictly 2 zip packages using `scratch/build_zips.py`:
     - `cr8v-stacks.zip` (complete theme archive containing root folder `cr8v-stacks/` with all PHP templates, styles, and assets)
     - `case-study-images.zip` (standalone collection of all high-resolution case study assets)
   - NEVER create or package into `cr8v-stacks-update.zip` or `cr8v-stacks-theme-code.zip` (these cause folder name mismatches on WordPress).
   - Synchronize both packages across both the primary repository and the OneDrive workspace (`OneDrive\Documents\Dev-Playground\Cr8v Stacks Website Redesign`).

---

## 8. Third-Party Brand Pricing Integrity & Emoji Rules
1. **Illustrative Pricing Disclaimer**:
   - When showcasing external or client brands where exact retail prices were not directly fetched from an official live store catalog, always add a subtle badge: `ILLUSTRATIVE PRICING` or an explicit note `*Prices shown for illustrative / UX demonstration purposes only`.
   - Never portray speculative numbers as official brand pricing.
2. **Zero Emoji Glyphs in PIL / TrueType**:
   - Never include Unicode emojis (flags like 🇳🇬 🇺🇸, symbols like 💗, etc.) in text strings drawn via PIL. Standard desktop TrueType fonts (Georgia, Segoe UI, Consolas) do not support color emojis and render them as hollow tofu boxes (`□` or `  `).
   - Always use clean typographic text phrases instead (e.g., `Lagos & Global Dispatch`, `Worldwide Express Delivery`).

---

## 9. Design System Architecture & Brand Identity Standards
*(Reference files stored in `design-system-references/`: `ref_ds_01_components.png`, `ref_ds_02_elevation_fields.webp`, `ref_ds_03_tokens_signup.png`)*

1. **Design System Visual Standards (Asset 01 / Tokens)**:
   - **Typography Scales**: Must include primary type family, weights, font styles count, prominent display glyph ("Aa"), and explicit type scale ladder (H1, H2, H3, Body, Mono with px/pt specs).
   - **Color Token Ramps**: Multi-step horizontal color swatch ramps (Primary, Secondary, Accent, Neutrals, System Status) with exact hex codes.
   - **Component State Matrix**: Realistic component states (Default, Hover, Active, Disabled, Outline) across buttons, badge chips, form inputs, and tab bars.
   - **Live In-Context Application**: Real UI component card (e.g., Portal Login, Advisory Brief, Sign-Up) demonstrating the design tokens applied in actual use.

2. **Asset 03 for Brand Identity Niche (Non-Conventional Direction)**:
   - For Brand Identity case studies (e.g., BridgePoint Advisory), Asset 03 must NEVER use e-commerce CRO, checkout lift, or booking revenue metrics.
   - Asset 03 must showcase **Brand Governance Architecture & Sovereign Vector System**:
     - Signature white architectural board on granite boardroom table.
     - Top Plaque: `Brand Identity Architecture: Sovereign Vector System & Corporate Governance`
     - 3D Tactile Blocks: `Core Vector Geometry (0.5px)`, `Multi-Channel Brand Manual (42+ Assets)`, `Executive Stationery & Boardroom Collateral`.
     - Comparative Metric: `Cohesive Brand Equity (+98% Stakeholder Alignment)` vs. `Visual Disconnect ($0 Market Authority)`.
