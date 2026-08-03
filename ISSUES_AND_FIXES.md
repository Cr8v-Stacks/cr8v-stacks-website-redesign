# Cr8v Stacks — Ongoing Issues & Fix Register
*Last updated: 2026-07-27 Session 2 — Expanded Audit*

> Living record of all discovered issues. Companion to implementation_plan.md.
> New findings from 2026-07-27 morning session added below.

---

## CATEGORY A — Content & Conversion Issues

### A1 ❌ Wrong Case Study Content on 7 Individual Pages
Correct mapping from `portfolio-case-studies-MASTER.md`:

| Page | Inserted (WRONG) | Correct |
|---|---|---|
| AI MVP | Lexis Search AI | **WP Publishion AI** — own product, no CTA, not live, do not add waitlist language |
| Custom Dev | Apex Logistics Platform | **Bridgepoint Consulting Services** — NDA, architecture description only |
| Brand Strategy | Zenith Cloud Stack | **Stride Plus Media / Stride Radio** |
| Digital Marketing | Apex Telehealth | **Stride Plus Media / Stride Radio** |
| WordPress | Vanguard Capital Group | **Mkenny Properties** — live, 4 new page types, custom Elementor widget system |
| Brand Identity | Lumos Energy | **BridgePoints** — logo, color system, typography, brand guidelines from scratch |
| SEO & Content | Blvck Hair NG | ✅ Name correct — but numbers must use master file language (exponential growth, 2 storefronts) |

**Status:** ❌ Not fixed

---

### A2 ❌ Pricing Values Do Not Match `pricing_strategy.md`
Key corrections needed:
- Brand Identity entry: **$900** (not $800)
- AI MVP: Prototype $3,500 / Working MVP $4,900 / Product $7,000
- Digital Marketing: Entry $1,000 / Retainer $800/mo / Scale $1,500/mo
- E-Commerce: Landing $1,800 / Core $2,520 / Enterprise $3,600

**Status:** ❌ Not verified or corrected

---

### A3 ❌ Content Repetition — Sections Don't Build a Funnel
Every section is repeating the same pitch. Each section must serve a distinct role in a sales journey:

| # | Section | Purpose |
|---|---|---|
| 1 | Hero | Hook — name the visitor's specific pain |
| 2 | Flank Cards | Unique angle — why us, not generic "we're good" |
| 3 | Case Study | Proof — social credibility for this specific service |
| 4 | Folder Deck | Deliverables — exactly what they're buying |
| 5 | How We Approach | Process — reduce fear of the unknown |
| 6 | Platform Selection | Decision helper — reduces choice paralysis |
| 7 | Full Catalog | Upsell — adjacent services they might also need |
| 8 | Pricing | The investment — remove price anxiety |
| 9 | FAQ | Objection handling — kill last hesitations |
| 10 | Testimonials | Final social proof |
| 11 | Related Services | Navigation — clear next step |

**Status:** ❌ Needs strategic copywriting pass — do AFTER structural fixes

---

### A4 ❌ `service-page-copy-edits-MASTER.md` Edits Not Applied (Main Service Page)
1. Full Catalog: "More Ways We Build" → "Beyond the Build" with corrected service list
2. Brand Strategy / Digital Marketing connection copy
3. Hero subtext — update to reflect full layered architecture

**Status:** ❌ Not applied

---

### A5 ❌ Related Services Links Wrong on Several Pages
Per `service-page-copy-edits-MASTER.md`:
- **AI MVP** → Custom Dev / Web Design / Digital Marketing
- **Brand Strategy** → Brand Identity / Digital Marketing / Web Design
- **SEO & Content** → Digital Marketing / Brand Strategy / Web Design

**Status:** ❌ Not fixed

---

## CATEGORY B — Structural / Layout Breaks

### B1 ❌ Folder Stack UI Broken — CSS Issues (Newly Identified)

**Three separate problems confirmed:**

#### B1a — Tab positioning is broken (CSS selector bug)
The shared CSS at lines 525–533 uses **malformed selectors** for tab positioning:
```css
/* WRONG — this is not valid CSS for nth-child scoping */
.c8srv-root, .c8isv-root .c8srv-folder-card, .c8isv-folder-card:nth-child(1) .c8srv-folder-tab, .c8isv-folder-tab { left: 15px !important; }
.c8srv-root, .c8isv-root .c8srv-folder-card, .c8isv-folder-card:nth-child(2) .c8srv-folder-tab, .c8isv-folder-tab { left: 185px !important; }
```
The problem: `.c8isv-folder-tab` appears as the LAST selector in a comma-separated list, which means **ALL tabs get the last declared `left` value** (695px), since each rule overwrites the previous for `.c8isv-folder-tab`. The tab positioning rules cancel each other out.

**Correct pattern (from main service page):**
```css
.c8isv-folder-card:nth-child(1) .c8isv-folder-tab { left: 15px !important; }
.c8isv-folder-card:nth-child(2) .c8isv-folder-tab { left: 185px !important; }
.c8isv-folder-card:nth-child(3) .c8isv-folder-tab { left: 355px !important; }
.c8isv-folder-card:nth-child(4) .c8isv-folder-tab { left: 525px !important; }
.c8isv-folder-card:nth-child(5) .c8isv-folder-tab { left: 695px !important; }
```

#### B1b — Image blue background (CSS conflict)
Shared CSS at line 1495 defines `.c8isv-folder-card-right` with `border-radius: 12px; overflow: hidden; aspect-ratio: ...` — but the image container `c8isv-folder-card-img` has no `background: #FFFFFF` set, leaving the card's background color bleeding through as a blue tint (inherited from the section or a parent).

The main service page's `.c8srv-folder-card-img` explicitly sets `background: #FFFFFF !important`. The shared CSS does define this at line 590–603, but the rule at line 1495 (`c8isv-folder-card-right`) applies `border-radius + overflow: hidden` WITHOUT the white background on the inner img container — so the card background shows through.

#### B1c — Dual JS conflict (previously identified)
Both the inline `<script>` block (targeting `.c8isv-folder-card`) AND the `shared-folder-stack.js` (targeting `[class$="-folder-card"]`) run simultaneously and write conflicting transforms.

**Fix:** Remove inline folder deck JS from each page's `<script>` block. Keep `shared-folder-stack.js` as the single JS owner.

**Status:** ❌ All three sub-issues unresolved

---

### B2 ❌ E-Commerce Page — Structural Mess
- Sections duplicated/incorrectly injected from DM page
- `is-visible` hardcoded on folder section heading
- Approach, Platform Selection, FAQ missing from HTML body (CSS only)

**Status:** ❌ Partially patched but still broken

---

### B3 ⚠️ `is-visible` Hardcoded on Reveal Elements
`class="c8isv-reveal is-visible"` hardcoded in HTML on several injected sections. Must be added only by IntersectionObserver JS, never in static HTML.

**Status:** ⚠️ Audit needed across all pages

---

## CATEGORY C — New Feature Requests

### C1 🆕 Matrix Scramble Text Animation
Numbers scramble rapidly then resolve into the real text. **Agreed scope:** hero headline (once on load) + section labels (one-shot on scroll entry). Not on every heading.

**Status:** ❌ Not started

---

### C2 🆕 Button Animation — Combined Text Lift + Character Scramble

**Your question: would combining text-lift and character-scramble be overkill?**

**Answer: No — when done right, they reinforce each other.** Here's why it works:
- The **scramble** fires immediately on hover and lasts ~300ms — it creates the "activation" feeling
- The **lift** (old text slides up, same text slides in from below) takes ~250ms and gives it physical motion
- Combined they read as: *"this button is alive and responding to you"* — one without the other feels incomplete
- The key constraint: keep total animation under 400ms total and make sure it resolves to the SAME text (not different text), so it never confuses the user about what they're clicking

**Implementation note:** Both effects must use the same CSS class so changing one changes all. Currently buttons use 5+ different classes across the site — this needs unification first.

**Status:** ❌ Not started — requires class unification first (see C3)

---

### C3 🆕 Button & Title Class Unification (Prerequisite for C1 + C2)

**Current button class landscape (surveyed 2026-07-27):**

| Class | Count | Location |
|---|---|---|
| `c8isv-btn-primary` | 23x | Individual service pages |
| `c8isv-btn-ghost` | 14x | Individual service pages |
| `c8srv-price-btn is-primary` | 22x | Main service page pricing |
| `c8srv-price-btn is-light` | 11x | Main service page pricing |
| `c8isv-price-btn is-primary` | 3x | Individual pages pricing |
| `c8isv-price-btn is-outline` | 3x | Individual pages pricing |
| `c8isv-cta-btn` | 1x | E-commerce CTA (remove anyway) |
| `c8pf-explore-btn` | 10x | Portfolio section |

**Problem:** Animating `c8isv-btn-primary` does nothing for `c8srv-price-btn` — they're separate CSS rules. To fix once and have it work everywhere, the primary CTA buttons need one shared class.

**Proposed unified class:** `c8-btn-primary` (site-wide)

**Title classes:** Similar fragmentation exists between `c8isv-section-title` and `c8srv-section-title` — same problem, same solution needed.

**Status:** ❌ Not started — must do before C1 and C2

---

## Fix Priority Order

| Priority | Issue | Scope | Est. Complexity |
|---|---|---|---|
| 🔴 1 | **B1a** — Fix folder tab CSS selector bug | `shared-service-components.css` only | Low |
| 🔴 2 | **B1b** — Fix image blue background | `shared-service-components.css` only | Low |
| 🔴 3 | **B1c** — Remove inline folder deck JS | 10 individual page `<script>` blocks | Medium |
| 🟠 4 | **B3** — Audit & remove hardcoded `is-visible` | All pages | Low–Medium |
| 🟠 5 | **B2** — E-Commerce page structural rebuild | 1 page | High |
| 🟡 6 | **A1** — Correct case study content | 7 pages | Medium |
| 🟡 7 | **A2** — Correct pricing values | All pages | Low |
| 🟡 8 | **A4** — Main service page copy edits | 1 page | Low |
| 🟡 9 | **A5** — Related services links | 3 pages | Low |
| 🟢 10 | **C3** — Button & title class unification | All pages | High |
| 🟢 11 | **C2** — Button hover animation (lift + scramble) | Shared CSS/JS | Medium |
| 🟢 12 | **C1** — Matrix scramble on headings | Shared JS | Medium |
| ⚪ 13 | **A3** — Conversion funnel copywriting pass | All pages | Very High |

---

*Updated after each fix session. Red = blocking, Orange = high priority, Yellow = content, Green = new features.*
