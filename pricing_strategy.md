# Cr8v Stacks — Pricing Strategy & Service Matrices
*Last updated: 2026-07-22*

This document provides the competitive pricing framework for Cr8v Stacks across all 11 active service verticals and the Main Service Hub. It uses the **"From" pricing strategy** to lower inquiry friction while preserving flexibility to upsell based on project complexity.

Use these exact values to populate all service pages, estimator widgets, and investment sections.

---

## 1. Core Scoping Strategy

By using **"From"** pricing, we lower friction for initial contact while creating natural upsell paths based on scope, scale, and add-ons.

| Tier | Service | Entry Price | Scale Tiers |
|---|---|---|---|
| Strategy | Brand Strategy & Positioning | From **$800** | Startup ($800) / Scale-Up ($1,500) / Enterprise ($2,200) |
| Branding | Brand Identity Design | From **$900** | Core ($900) / Full ($1,500) / Motion ($2,400) |
| Growth | Technical SEO & Content | From **$600** | Audit ($600) / Engine ($1,200) / Enterprise ($1,800) |
| Growth | Digital Marketing & Funnels | From **$1,000** | Funnel ($1,000) / Growth Retainer ($800/mo) / Scale ($1,500/mo) |
| Build | WordPress Custom Theme | From **$1,200** | Landing ($1,200) / Core ($1,680) / Portal ($2,400) |
| Build | Web Design & UX | From **$1,200** | Landing ($1,200) / Core ($1,680) / Portal ($2,400) |
| Storefront | Shopify Storefront | From **$1,800** | Landing ($1,800) / Core ($2,520) / Portal ($3,600) |
| Storefront | WooCommerce Store | From **$1,800** | Landing ($1,800) / Core ($2,520) / Portal ($3,600) |
| Storefront | E-Commerce Development | From **$1,800** | Landing ($1,800) / Core ($2,520) / Portal ($3,600) |
| Custom Dev | Bespoke Framework (React/PHP) | From **$2,500** | MVP ($2,500) / Full App ($3,500) / Enterprise ($5,000) |
| Advanced | AI MVP Prototype | From **$3,500** | Prototype ($3,500) / Working MVP ($4,900) / Product ($7,000) |

---

## 2. Standardised Pricing Matrices by Service Page

### 💻 Web Design & WordPress Development
Bespoke B2B, SaaS, and corporate websites built without template bloat.

| Scale Tier | Multiplier | WordPress Theme | Web Design |
|---|---|---|---|
| Landing Page | 1.0x | $1,200 | $1,200 |
| Core Site (3-5 pages) | 1.4x | $1,680 | $1,680 |
| Full Stack Portal (10+ pages) | 2.0x | $2,400 | $2,400 |

---

### 🛍️ Shopify & WooCommerce E-Commerce Storefronts
Custom Liquid and WooCommerce PHP theme development. App-free cart and checkout builds.

| Scale Tier | Multiplier | Shopify Storefront | WooCommerce Store | E-Commerce Stack |
|---|---|---|---|---|
| Landing Store | 1.0x | $1,800 | $1,800 | $1,800 |
| Core Store | 1.4x | $2,520 | $2,520 | $2,520 |
| Enterprise Portal Store | 2.0x | $3,600 | $3,600 | $3,600 |

---

### 🔧 Custom Bespoke Development (PHP / React / SQL)
Custom web applications, relational SQL databases, and whitelabel admin dashboards.

| Scale Tier | Multiplier | Bespoke Web App |
|---|---|---|
| MVP Web App | 1.0x | $2,500 |
| Full Application | 1.4x | $3,500 |
| Enterprise Platform | 2.0x | $5,000 |

---

### 🤖 AI MVP Development
LLM prompt engineering, OpenAI & Claude API integrations, Supabase backends.

| Scale Tier | Multiplier | AI MVP Prototype |
|---|---|---|
| Prototype | 1.0x | $3,500 |
| Working MVP | 1.4x | $4,900 |
| Launchable Product | 2.0x | $7,000 |

---

### 🎨 Brand Identity Design & Strategy

| Pack / Scope | Brand Identity | Brand Strategy |
|---|---|---|
| Entry Tier | $900 (Core Logo & Style) | $800 (Brand Voice & Guidelines) |
| Scale Tier | $1,500 (Full Brand Guidelines & Canva Templates) | $1,500 (Full Competitor Matrix & Positioning) |
| Enterprise Tier | $2,400 (Motion Identity & Rive Animations) | $2,200 (Corporate Alignment & Asset Suite) |

---

### 📈 Digital Marketing & SEO Services

| Engagement | Digital Marketing | Technical SEO & Content |
|---|---|---|
| Entry Tier | $1,000 (Funnel & Pixel Wiring) | $600 (Technical Schema & Crawl Clean) |
| Retainer / Mid Tier | $800/mo (Growth Retainer) | $1,200 (Keyword Matrix + 6 Articles) |
| Enterprise Tier | $1,500/mo (Scale Retainer & CRO) | $1,800 (Full Technical Cleanup & Content Hub) |

---

## 3. Estimator Widget Calculation Logic

*For use in the investment section of all service pages.*

**Core Architecture Base Prices:**
* WordPress Custom: **$1,200**
* Shopify Storefront: **$1,800**
* WooCommerce Store: **$1,800**
* Custom Dev (PHP/React): **$2,500**
* AI MVP Prototype: **$3,500**

**Scale Multipliers:**
* Landing Page: **1.0x**
* Core Site (3-5 pages): **1.4x**
* Full Stack Portal (10+ pages): **2.0x**

**Growth Add-Ons:**
* None: **+$0**
* SEO Technical Clean: **+$600**
* Marketing Funnel: **+$1,000**

**Formula:**
```js
Starting Estimate = Math.round(BasePrice * ScaleMultiplier + AddOnPrice);
Ending Estimate = Math.round(Starting Estimate * 1.25);
```

---

## 4. Tailored Service-Specific Estimator Matrices & Included Deliverables

### A. Web Design & UX ($1,200 entry)
- **1. Core Scope:**
  - `Landing Page Design ($1,200)`: Custom Visual Landing Page Layout, Responsive Desktop & Mobile Layout System, Figma Design File & Style Kit Handoff
  - `Core Site Design ($1,680)`: 3-5 Custom Page Visual Designs, Brand Typography & Component Tokens, Interactive Navigation Prototype
  - `Full Design System ($2,400)`: 10+ Page High-Authority Visual Design Suite, Full Design System UI Kit & Asset Exports, CMS & Developer Integration Handoff
- **2. Project Scale:** Standard Site (1.0x), Complex Layouts (1.4x)
- **3. Strategic Add-Ons:** Interactive Prototype (+$500), CMS Theme Handoff (+$600)

### B. AI MVP Prototype ($3,500 entry)
- **1. Core Scope:**
  - `Working Prototype ($3,500)`: Multi-LLM API Wiring (OpenAI / Claude / Gemini), Interactive Web UI, Prompt Engine Layer
  - `Full AI Web App ($4,900)`: Complete User Auth & Dashboard, Custom Database Schema, Payment Gateway Integration
  - `Enterprise AI ($7,000)`: Multi-Tenant Workspace Architecture, Vector Search RAG Pipeline, Custom API Endpoint Suite
- **2. Project Scale:** Single Flow (1.0x), Multi-Role Platform (1.4x)
- **3. Strategic Add-Ons:** Vector Search RAG (+$1,200), Supabase DB & Auth (+$800)

### C. Brand Strategy & Positioning ($800 entry)
- **1. Core Scope:**
  - `Positioning Blueprint ($800)`: Competitor Gap Analysis, Core Differentiator Mapping, Value Proposition Framing
  - `Go-To-Market Scope ($1,200)`: Launch Channel Architecture, Campaign Message Hierarchy, Audience Target Profiles
  - `Full Strategy ($1,500)`: Market Positioning Framework, Customer Persona Architecture, Messaging Matrix & Brand Voice Guidelines
- **2. Project Scale:** Startup Scope (1.0x), Growth Scale (1.3x), Enterprise System (1.6x)
- **3. Strategic Add-Ons:** Identity Alignment Sheet (+$500), Content Topic Roadmap (+$400)

### D. Brand Identity Design ($900 entry)
- **1. Core Scope:**
  - `Color & Fonts ($600)`: Curated Typography Hierarchy, Primary & Secondary Color Tokens, Usage Guidelines Sheet
  - `Logo System ($900)`: Primary Vector Logo & Monogram, Favicon & Social App Icon Suite, Vector File Exports (SVG, EPS, PNG)
  - `Full Identity ($1,500)`: Primary, Secondary & Monogram Logo Suite, Color Token & Typography Hierarchy, Digital Guidelines & Asset Package
- **2. Project Scale:** Core Package (1.0x), Full System (1.3x), Enterprise Collateral (1.6x)
- **3. Strategic Add-Ons:** Motion Logo Intro (+$500), PDF Style Guidelines Book (+$300)

### E. Custom Dev (PHP/JS/React) ($2,500 entry)
- **1. Core Scope:**
  - `MVP Web App ($2,500)`: Bespoke React / Next.js Frontend Architecture, Custom Database Schema & Relational Tables, 100% Client-Owned Source Code Repo
  - `Full Application ($3,500)`: Multi-Role Admin & User Authentication, Tailored REST/GraphQL API Endpoints, Whitelabel Admin Management Panel
  - `Enterprise Platform ($5,000)`: High-Volume Multi-Tenant Architecture, Custom Payment & External API Wiring, Cloud CI/CD Automated Deployment
- **2. Project Scale:** Core Features (1.0x), Multi-Tenant (1.4x)
- **3. Strategic Add-Ons:** REST/GraphQL API (+$800), Whitelabel Admin Dashboard (+$600)

### F. Technical SEO & Content ($600 entry)
- **1. Core Scope:**
  - `Technical Clean ($600)`: Screaming Frog Crawl Audit, Entity JSON-LD Schema Setup, Indexation & Robots.txt Hardening
  - `Search Engine ($1,200)`: Semantic Keyword Matrix Mapping, Topical Cluster Content Architecture, On-Page Metadata & Header Tuning
  - `Enterprise SEO ($1,800)`: Full Multi-Regional Technical Clean, Competitor Keyword Moat Analysis, Continuous Search Rank Monitoring
- **2. Project Scale:** Single Market (1.0x), Multi-Regional (1.5x)
- **3. Strategic Add-Ons:** Keyword Cluster Package (+$500), Core Web Vitals Tuning (+$400)

### G. Digital Marketing & Funnels ($1,000 entry)
- **1. Core Scope:**
  - `Funnel Setup ($1,000)`: High-Intent Landing Page Conversion Architecture, Meta & Google Pixel Attribution Wiring, GA4 Conversion Event Dashboard
  - `Multi-Channel Ads ($1,500)`: Google Search & Meta Ad Campaign Setup, Ad Copywriting & Creative Concept Testing, Cost-Per-Acquisition (CPA) Optimization
  - `Retargeting Engine ($2,000)`: Full Funnel Dynamic Retargeting Matrix, Klaviyo Abandoned Cart & Nurture Sequences, Weekly ROAS Performance Reporting
- **2. Project Scale:** Single Channel (1.0x), Omnichannel Scale (1.4x)
- **3. Strategic Add-Ons:** Klaviyo Email Flows (+$600), CRO Audit (+$800)

### H. WordPress Custom Theme ($1,200 entry)
- **1. Core Scope:**
  - `WP Landing ($1,200)`: Custom Gutenberg Block Suite Architecture, Zero-Bloat Base Theme Code, Sub-1.2s Speed Optimization
  - `WP Core Site ($1,680)`: Custom Post Types & Taxonomy System, Advanced Custom Fields (ACF Pro) Integration, Role-Based Client Admin Access
  - `WP Enterprise ($2,400)`: Headless / Enterprise WP Portal Architecture, Multi-Language & Custom API Endpoint Suite, Continuous Security & Firewall Hardening
- **2. Project Scale:** Standard Site (1.0x), Custom Post Types (1.4x)
- **3. Strategic Add-Ons:** ACF Pro Schemas (+$400), Security Hardening (+$500)

### I. Shopify Storefront ($1,800 entry)
- **1. Core Scope:**
  - `Shopify Landing ($1,800)`: Custom Liquid 2.0 Theme Engineering, App-Free Speed Performance Tuning, Responsive OS 2.0 Section Architecture
  - `Shopify Store ($2,520)`: Slide-Out Cart Drawer & Dynamic Upsells, Custom Product Page (PDP) Layouts, Payment & Shipping Gateway Configuration
  - `Shopify Plus ($3,600)`: Enterprise Checkout Customization, Headless Hydrogen / Storefront API Architecture, Multi-Currency & International Tax Setup
- **2. Project Scale:** Standard Store (1.0x), Large Catalog (1.4x)
- **3. Strategic Add-Ons:** Cart Drawer & Upsells (+$500), Klaviyo Setup (+$600)

### J. WooCommerce Store ($1,800 entry)
- **1. Core Scope:**
  - `Woo Landing ($1,800)`: Custom WooCommerce Product & Checkout UX, Zero SaaS Transaction Fees Setup, Self-Hosted Database Ownership
  - `Woo Store ($2,520)`: Multi-Currency & Tax Logic Architecture, Custom Checkout Flow Optimization, Stripe & PayPal Native Gateway Setup
  - `Woo Enterprise ($3,600)`: High-Volume Server Load & Database Tuning, Custom ERP / Inventory API Sync Wiring, Continuous WooCommerce Security Hardening
- **2. Project Scale:** Standard Catalog (1.0x), Large Catalog (1.4x)
- **3. Strategic Add-Ons:** Stripe/PayPal Gateway (+$500), Custom Shipping Matrix (+$400)

### K. E-Commerce Hub ($1,800 entry)
- **1. Core Scope:**
  - `Shopify Store ($1,800)`: Custom Liquid 2.0 Storefront Engineering, App-Free Speed Performance Tuning, Cart Drawer & Checkout Conversion UX
  - `WooCommerce Store ($1,800)`: Custom WooCommerce Product & Cart Architecture, Multi-Currency & Native Tax Logic, 100% Self-Hosted Data Ownership
  - `Custom Headless Store ($3,500)`: Next.js / Headless E-Commerce Frontend, GraphQL Storefront API Wiring, High-Volume Transaction Server Architecture
- **2. Project Scale:** Standard Store (1.0x), Large Catalog (1.4x)
- **3. Strategic Add-Ons:** Klaviyo Setup (+$600), CRO Audit (+$800)
