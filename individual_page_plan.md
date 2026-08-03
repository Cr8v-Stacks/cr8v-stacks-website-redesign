# CR8V Stacks — Individual Service Page Master Plan
*WooCommerce as the build target. All other 9 service pages follow the same template.*
*Last updated: 2026-07-10*

---

## REFERENCE IMAGE CONFIRMED — `67c32430d443d137574237.jpg`
*Path: `C:\Users\HP\Downloads\Mega Menu\67c32430d443d137574237.jpg`*

The image shows a **horizontal accordion / stacked list** layout with:
- A massive display header (e.g. "SERVICES") at the top in heavy condensed type
- Three service rows, each containing: small number → large serif service name → small accent-coloured sub-tags → description text → image on the right
- **Two cards visually stacked** — a white foreground card and a colourful/blurred background card offset behind it
- The stacking creates a "fan" effect: as you scroll, rows open up beneath each other

**What this means for the individual service page:**
The "Primary Service" and "How We Approach It" sections should use the same **sticky-scroll stacking card animation** already used in the Growth Layer on the main service page. The CARD CONTENT should be styled like this reference image:
- Left side: small monospace number + large Bebas Neue service name + small accent-colour sub-tags + description text
- Right side: image

This replaces the current tab-panel design on the WooCommerce page.

---

## PART A: Main Service Page — Remaining Fixes (Code Now)

### 1. Growth & Strategy Horizontal Padding
**Root cause**: Line 817 has a duplicate `c8srv-folder-section` CSS block with `padding: 4rem 0 !important` — overrides the first block at line 291, and both have zero horizontal padding.
**Fix**: The inner `c8srv-wrap` around the text header IS already in place (applied). User should hard-refresh (Ctrl+Shift+R). If still not visible, replace the line 817 CSS with `padding: 4rem 3.5rem !important` and remove the inner wrap.

### 2. Mobile Animations
All animations are gated with `if (window.innerWidth < 900) { disable }`.
- **Folder deck** (Growth Layer): On mobile, cards should show in a vertical stagger fade-in instead of the sticky scroll stack
- **Hoverlist fan**: On mobile, shows a simple tap-to-expand or reveals cards in sequence on load
- **Flank cards**: Already shows at full positions on mobile (< 769) — good
- **Reveal on scroll**: Already works on mobile — good
- **Fix approach**: Replace the hard `< 900` cutoffs with mobile-adapted animations (stagger fade-in, not disabled)

### 3. Three-Fan Card UI — ✅ DECIDED: Uniform Oversized Stack Typography + Colorful Cards

**Decision**: Same 3-card shell across ALL pages (main + all 10 individual pages).
- Each card shows **1–2 stack keywords in massive Bebas Neue** — text bleeds past card edges intentionally.
- Each of the 3 fan cards gets a **different background colour** to add visual variety (e.g. navy / warm cream / off-white, or a 3-tone palette from the brand colours). Structure is uniform; colour is not.
- JS swaps `innerText` via `data-*` attributes on hoverlist item hover. Zero images. Zero extra scripts per service.
- Data attributes on each hoverlist item: `data-s1="WordPress"` `data-s2="PHP"` `data-s3="MySQL"` etc.
- Correct stacks per service are documented in the table below — use those values for `data-*` attributes.

**Correct tech stacks by service (for fan cards / hero pills / stack badges):**

| Service | Stacks (NEVER list payment gateways here) |
|---|---|
| Website Design & Dev | WordPress · Figma · HTML/CSS · JavaScript · React |
| Brand Strategy | Miro · Notion · Google Slides |
| Brand Identity | Figma · Adobe Photoshop · Canva · Rive |
| Digital Marketing | Meta Ads · Google Ads · Klaviyo · Mailchimp |
| SEO & Content | WordPress · Screaming Frog · Semrush · Google Search Console |
| Shopify | Shopify · Liquid · JavaScript · CSS |
| WordPress | WordPress · PHP · Gutenberg · ACF |
| WooCommerce | WooCommerce · WordPress · PHP · MySQL |
| Custom Dev | React · Next.js · PHP · Node.js · MySQL |
| AI MVP | Python · OpenAI API · Claude · Supabase |

> [!CAUTION]
> **Paystack, Stripe, Flutterwave** = payment gateways — go in capabilities/FAQ copy ONLY. Never in stack badges, hero pills, or fan card content.

**Files confirmed with incorrect `Stripe & Paystack` stack badges (fix at build time):**
- `_BACKUP_July8_Revert\AI MVP Service Page.html` L766
- `_BACKUP_July8_Revert\Brand Identity Design Service Page.html` L766
- `_BACKUP_July8_Revert\Brand Strategy Service Page.html` L766
- `_BACKUP_July8_Revert\Custom Dev Service Page.html` L766
- `_BACKUP_July8_Revert\Digital Marketing Service Page.html` L766
- `_BACKUP_July8_Revert\SEO and Content Service Page.html` L766
- `_BACKUP_July8_Revert\Shopify Service Page.html` L766
- `_BACKUP_July8_Revert\Web Design Service Page.html` L767
- `_BACKUP_July8_Revert\WooCommerce Service Page.html` L766
- `_BACKUP_July8_Revert\WordPress Service Page.html` L766

### 4. Fan Card Animation Fix (Hoverlist Preview)
**Problem**: Left and right fan cards currently appear to point INTO the center card (both tops rotate toward center).
**Fix**: Match the Why It Works flank cards — left card rotates clockwise (top leans right/away), right card counter-clockwise (top leans left/away). Remove the downward Y translation that makes them appear below the center card.
```css
/* Current (wrong) */
.c8srv-fan-left  { transform: rotate(-12deg) translate(-80px, 20px); }
.c8srv-fan-right { transform: rotate(12deg)  translate(80px,  20px); }

/* Fix — fan AWAY from center like open book */
.c8srv-fan-left  { transform: translate(-90px, 0) rotate(8deg);  }
.c8srv-fan-right { transform: translate(90px,  0) rotate(-8deg); }
```

---

## PART B: WooCommerce Individual Service Page — Section Architecture

### Root CSS class: `c8isv-root` (same as existing WooCommerce page)
All styling is scoped. This prevents conflicts with Elementor.

---

### Section Order (Conversion-Optimised)

| # | Section | Design Ref | Status in Existing WC Page |
|---|---|---|---|
| 1 | **Hero** | `c8srv-hero-atmos` pattern from main service page | EXISTS — but missing atmos animation |
| 2 | **Primary Service** | `c8srv-folder-section` sticky stacking cards (Growth Layer) | EXISTS — wrong design (tab panel) |
| 3 | **How We Approach It** | Fan-opening animation (ref: `c67c32430d443d137574237.jpg`) | EXISTS — wrong design (image + text block) |
| 4 | **Our Process** | Existing `c8isv-stack-outer` animation — KEEP. Card style → Why It Works card style | EXISTS — animation good, card design needs update |
| 5 | **Portfolio Showcase** | Premium image/slider section | MISSING |
| 6 | **Full Catalog** | `c8srv-hoverlist-section` fan hover (same as main service page) | EXISTS — wrong design (plain list) |
| 7 | **Investment** | `c8srv-pricing-section` layout from main service page | EXISTS — similar, needs visual alignment |
| 8 | **Client Feedback** | Tweaked fan card variation (different from Our Process) | EXISTS — cards exist but need styling |
| 9 | **FAQ** | Accordion — `c8srv-accordion-section` style | EXISTS — needs WooCommerce-specific Q&A |
| 10 | **Related Services** | Premium card row | EXISTS — placeholder only |

---

### Section Details

#### Section 1 — Hero
```
Design: c8srv-hero-atmos from main service page
- Full-height hero with glowing atmosphere effect that follows cursor
- H1: "WooCommerce Stores Built for Full Ownership and Zero Ceiling."
- Sub: "Self-hosted ecommerce engineered with custom PHP, zero bloat, and checkout performance."
- CTA: "See the Build →" / "Get a Quote →"
- Pill tags: WooCommerce · WordPress · PHP · MySQL
- Data: data-c8srv-atmos, data-c8srv-glow (for cursor tracking JS)
```

#### Section 2 — Primary Service (Folder Deck)
```
Design: EXACT copy of Growth & Strategy folder-deck from main service page
- Class: c8isv-folder-section / c8isv-folder-deck / c8isv-folder-card
- 3 sticky stacking cards covering:
  Card 01: Custom Product Catalog Engineering
  Card 02: Checkout & Payment Integration
  Card 03: Speed & Performance Architecture
- Each card: left (title, desc, explore link) + right (image from image_prompts.md)
- Images: cr8v-wc-product.png, cr8v-wc-checkout.png, cr8v-wc-speed.png
```

#### Section 3 — How We Approach It (Fan-Opening Animation)
```
Design: Fan/folder-opening animation — cards start stacked/closed, open on scroll
- Reference image: c67c32430d443d137574237.jpg (user to confirm location)
- PLACEHOLDER until image is found: use same folder-deck animation but rotated fan direction
- 3 or 4 cards representing methodology steps
- Cards open like a fan as section enters viewport
```
> **BLOCKED on reference image.** User needs to confirm location of `c67c32430d443d137574237.jpg`.

#### Section 4 — Our Process
```
Design: Keep c8isv-stack-outer ANIMATION. Change card VISUAL to match c8srv-flank-card style.
- Card face: monospace step label + divider line + H3 title + description
- 4 cards: Discover → Design → Build → Launch
- Same scroll-in-from-right animation already in the page
- Card content from SEO strategy doc case study for WooCommerce:
  Step 01 / Discover: Checkout audit, speed baseline, plugin inventory
  Step 02 / Design: Cart drawer UX, mobile layout, schema planning
  Step 03 / Build: Custom PHP hooks, MySQL queries, payment gateway wiring (Stripe / Paystack as gateway — not a stack)
  Step 04 / Launch: Speed testing (< 0.5s), redirect setup, sitemap submission
```

#### Section 5 — Portfolio Showcase (NEW — MISSING from all versions)
```
Design: Premium showcase section
- Label: "Our Work"
- H2: "Built for Real Stores, Real Outcomes"
- 2-3 featured project cards using the case study from SEO doc:
  Project: Aura Organics (Global cosmetics storefront)
  Result: Custom PHP checkout hooks, -35% checkout bounce-rate
- Each card: image + project name + result stat + "View Case Study →" link
- Image filenames (to generate): cr8v-wc-showcase-aura.png
- Click-through: "#" for now, links to full portfolio page later
- CTA below: "See All Projects →"
```

#### Section 6 — Full Catalog (Hoverlist)
```
Design: EXACT copy of c8srv-hoverlist-section from main service page (fan animation)
- Class: c8isv-hoverlist-section
- Label: "Full Catalog"
- H2: "Every WooCommerce Service We Offer"
- 4 hover items specific to WooCommerce:
  01 — Custom Theme Development
  02 — Payment Gateway Integration
  03 — Checkout Optimisation
  04 — Speed & Performance Caching
- 3-fan card preview: picks up whichever UI option user chooses from Part A
```

#### Section 7 — Investment
```
Design: c8srv-pricing-section style from main service page
- Two pricing cards + estimator widget:
  Card 1 (light): Project-Based — "From $1,800" — WooCommerce starter
  Card 2 (navy): Growth Retainer — "$950/mo" — ongoing support
- Estimator: same platform/scale/growth selector as main page
  Platform: WooCommerce (pre-selected)
  Scale: Landing / Core Store / Full Portal
  Growth add-on: SEO / Marketing / None
```

#### Section 8 — Client Feedback
```
Design: Tweaked Why It Works fan card — 3 testimonial cards
- NOT identical to Our Process — differentiate by:
  Using a horizontal reveal (cards slide in from center outward, not top-down)
  Cards have a quote mark accent, client name, and company
- 3 testimonial cards (placeholder content for now):
  [Client 1] — Aura Organics — WooCommerce build
  [Client 2] — [Company] — Speed/checkout result
  [Client 3] — [Company] — Payment integration
```

#### Section 9 — FAQ
```
Design: Accordion (c8isv-accordion style existing in WC page)
- Keep existing accordion animation
- Replace placeholder content with WooCommerce-specific FAQs:
  Q: Can I use Paystack or Flutterwave for payments?
  A: Yes — they are payment gateways we wire directly into the build (not plugins).
  Q: Will I need plugins for the cart and checkout?
  A: No. Custom PHP hooks replace plugin dependencies entirely...
  Q: How fast will my WooCommerce store load?
  A: We target < 0.5s on mobile. We test with GTmetrix...
  Q: Can I add subscription products or bundles?
  A: Yes. We code variation rules, grouped products, and bundle logic natively...
  Q: What happens after launch?
  A: You own everything. No licensing, no lock-in...
```

#### Section 10 — Related Services
```
Design: Premium horizontal card row
- 3 cards pointing to related service pages:
  Card: Shopify Storefronts → "../Shopify Service Page/"
  Card: Custom Development → "../Custom Dev Service Page/"
  Card: SEO & Content → "../SEO and Content Service Page/"
- Card design: service name in Bebas Neue + 1-line descriptor + explore arrow
- Hover: subtle lift + navy underline
```

---

## PART C: SEO Strategy Report — Improvements Needed

**Current issues:**
- Mermaid diagram references MTN/Airtel (too Nigeria-specific, limits perception as global agency)
- Missing: Core Web Vitals strategy section
- Missing: Internal linking strategy
- Missing: Local vs. international SEO split strategy
- Missing: Content calendar framework
- Missing: Schema markup implementation plan

**Improvements to add:**
1. Replace MTN/Airtel reference → "Mobile-first performance (sub-1s 4G load)"
2. Add "Technical SEO Foundation" section: Core Web Vitals targets, schema types per page, canonical URL strategy
3. Add "Content Engine" section: blog frequency, topic clusters, pillar pages
4. Add "Internal Linking Architecture" map — service pages linking to each other
5. Expand case studies with specific search ranking improvements (e.g., "ranked #3 for 'custom WooCommerce developer' in 6 months")
6. Add "Backlink Acquisition Strategy": directories, PR outreach, niche blogs

---

## PART D: Image Prompts — Gaps Identified

**Missing prompts (not in current image_prompts.md):**

| Page | Missing Images |
|---|---|
| All pages | Hero background/texture (1 per page) |
| WooCommerce | Product catalog card, checkout page, speed results, Aura Organics showcase |
| Shopify | Storefront hero, liquid code card, cart drawer card |
| WordPress | Gutenberg editor card, PageSpeed 99 result card |
| Custom Dev | Admin panel card, database schema card, API connection card |
| AI MVP | LLM prompt card, serverless API card, MVP prototype card |
| Brand Strategy | Competitor matrix card, style board card |
| Brand Identity | Logo system card, color palette card |
| All | Related services card thumbnails (per page) |
| All | Portfolio showcase hero images (per client case study) |

---

## PART E: Resolved Items & Remaining Tasks

> [!NOTE]
> **Reference image `67c32430d443d137574237.jpg`** — ✅ FOUND. Located at `C:\Users\HP\Downloads\Mega Menu\67c32430d443d137574237.jpg`. Design fully documented at the top of this file.

> [!NOTE]
> **Fan card design** — ✅ DECIDED. Uniform Oversized Stack Typography with 3 different background colours across the 3 fan cards. Full spec in Part A §3 above.

> [!NOTE]
> **Growth & Strategy padding** — ✅ FIXED. CSS updated to `padding: 4rem 3.5rem !important`. Duplicate CSS at line 817 deleted. Inner wrap removed from HTML.

> [!IMPORTANT]
> **Mobile animations** — ⏳ PENDING. Hard `< 900` breakpoint gates need replacing with mobile-adapted stagger animations. Do before individual page build is declared complete.

> [!IMPORTANT]
> **Fan card coding** — ⏳ PENDING. Build and test the fan card on the MAIN service page first (as working reference), then carry forward to all individual pages.
