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
- **1. Core Package:**
  - `Landing Page Design ($1,200)`: Custom Visual Landing Page Layout, Responsive Desktop & Mobile Layout System, Figma Design File & Style Kit Handoff
  - `Multi-Page Website Design ($1,680)`: 3-5 Custom Page Visual Designs, Brand Typography & Component Tokens, Interactive Navigation Prototype
  - `Design System & Portal ($2,400)`: 10+ Page High-Authority Visual Design Suite, Full Design System UI Kit & Asset Exports, CMS & Developer Integration Handoff
- **2. Layout Complexity:** Standard Site Layouts, Complex Bespoke Layouts
- **3. Strategic Add-Ons:** Interactive Clickable Figma Prototype (+$500), Developer CMS Implementation Handoff (+$600)

### B. AI MVP Prototype ($3,500 entry)
- **1. Core Package:**
  - `14-Day AI Prototype ($3,500)`: Multi-LLM API Wiring (OpenAI, Claude, & Gemini), Interactive Web UI Prototype, Prompt Engine Layer & Fine-Tuning
  - `Full AI Web Application ($4,900)`: Complete User Auth & Custom Dashboard, Relational Database Schema (Supabase/PostgreSQL), Stripe Payment Gateway Integration
  - `Enterprise AI Platform ($7,000)`: Multi-Tenant Workspace Architecture, Vector Search RAG Pipeline & Embedding Index, Custom API Endpoint Suite & Webhooks
- **2. Product Workflow Scale:** Single User Flow, Multi-Role Platform Architecture
- **3. Strategic Add-Ons:** Vector Search RAG Document Context Pipeline (+$1,200), Supabase Relational Database Schema & Auth Roles (+$800)

### C. Brand Strategy & Positioning ($800 entry)
- **1. Core Package:**
  - `Positioning Blueprint ($800)`: Competitor Gap Analysis & Market Opportunity Map, Core Differentiator Framework, Value Proposition & Pitch Framing
  - `Go-To-Market Strategy ($1,200)`: Launch Channel Architecture & Funnel Blueprint, Campaign Messaging Hierarchy, Target Audience Buyer Persona Architecture
  - `Full Brand Strategy ($1,500)`: Complete Differentiated Market Positioning Framework, Customer Persona & Buyer Journey Blueprint, Core Value Proposition & Brand Voice Guideline
- **2. Organization Scale:** Startup Launch, Growth Business, Enterprise Rebrand
- **3. Strategic Add-Ons:** Visual Identity Alignment Sheet (+$500), 6-Month Content Topic Roadmap (+$400)

### D. Brand Identity Design ($900 entry)
- **1. Core Package:**
  - `Logo System ($900)`: Primary Vector Logo, Secondary Logo & Monogram, Favicon, App Icon & Social Profile Asset Suite, Master Vector Exports (SVG, EPS, PNG, PDF)
  - `Full Brand System ($1,500)`: Complete Logo & Monogram Suite, Curated Typography Hierarchy & Color Token Palette, Figma Brand Identity Guidelines & Asset Library
  - `Brand System & Motion ($2,400)`: Complete Identity System & Style Guide, Animated 3D/2D Motion Logo Intro (Lottie/MP4), Social Video Overlay & Brand Transition Assets
- **2. Organization Scale:** Startup Brand, Multi-Product Scale, Global Enterprise
- **3. Strategic Add-Ons:** Print Stationery Suite (+$400), Editable Social Media Templates (+$500)

### E. Custom Dev (PHP/JS/React) ($2,500 entry)
- **1. Core Package:**
  - `MVP Web App ($2,500)`: Bespoke React / Next.js Frontend Architecture, Custom Database Schema & Relational Tables, 100% Client-Owned Source Code Repo
  - `Full Application ($3,500)`: Multi-Role Admin & User Authentication, Tailored REST/GraphQL API Endpoints, Whitelabel Admin Management Panel
  - `Enterprise SaaS Platform ($5,000)`: High-Volume Multi-Tenant Architecture, Custom Payment & External API Wiring, Cloud CI/CD Automated Deployment
- **2. Architecture Complexity:** Single Tenant App, Multi-Tenant Architecture
- **3. Strategic Add-Ons:** Custom REST/GraphQL API Endpoint Suite (+$800), Whitelabel Admin Management Panel (+$600)

### F. Technical SEO & Content ($600 entry)
- **1. Core Package:**
  - `Technical SEO Audit & Clean ($600)`: Screaming Frog Technical Crawl Audit, Entity JSON-LD Structured Data Schema Setup, Indexation Optimization & Robots.txt Hardening
  - `Organic Growth Search Engine ($1,200)`: Semantic Keyword & Intent Matrix Mapping, Topical Cluster Content Architecture Blueprint, On-Page Metadata & Header Hierarchy Tuning
  - `Enterprise Technical SEO ($1,800)`: Multi-Regional Technical Crawl & Indexation Clean, Competitor Keyword Moat & Authority Analysis, Continuous Search Visibility & Rank Tracking
- **2. Target Market Reach:** Single Regional Market, Multi-Regional & Global Search
- **3. Strategic Add-Ons:** High-Intent Keyword Cluster Package (+$500), Core Web Vitals Speed Tuning (+$400)

### G. Digital Marketing & Funnels ($1,000 entry)
- **1. Core Package:**
  - `Conversion Funnel Setup ($1,000)`: High-Intent Landing Page Conversion Architecture, Server-Side Meta & Google Pixel Attribution Wiring, GA4 Custom Conversion Event Dashboard
  - `Multi-Channel Paid Ads ($1,500)`: Google Search & Meta Paid Ad Campaign Architecture, High-Converting Ad Copywriting & Visual Concept Testing, Cost-Per-Acquisition (CPA) Bid Optimization
  - `Full Retargeting Engine ($2,000)`: Full-Funnel Dynamic Retargeting Pixel Matrix, Automated Klaviyo Abandoned Cart & Lead Nurture Flows, Weekly ROAS & Customer Acquisition Cost (CAC) Reporting
- **2. Ad Channel Reach:** Single Primary Ad Channel, Omnichannel Scale (Meta + Google + TikTok)
- **3. Strategic Add-Ons:** Automated Klaviyo Email Autoresponder Sequences (+$600), Landing Page CRO Audit (+$800)

### H. WordPress Custom Theme ($1,200 entry)
- **1. Core Package:**
  - `Custom WP Landing ($1,200)`: Custom Gutenberg Block Suite Architecture, Zero-Bloat Base Theme Code (No Page Builders), Sub-1.2s PageSpeed Optimization
  - `Multi-Page WP Business Site ($1,680)`: Custom Post Types & Taxonomy System, Advanced Custom Fields (ACF Pro) Integration, Role-Based Client Admin Access Panel
  - `Enterprise Headless WP Portal ($2,400)`: Headless / Enterprise WP Portal Architecture, Multi-Language & Custom API Endpoint Suite, Continuous Security & Firewall Hardening
- **2. Content & Data Structure:** Standard Page Templates, Custom Post Types & ACF Pro Schemas
- **3. Strategic Add-Ons:** ACF Pro Dynamic Fields & Flexible Blocks (+$400), Security & Firewall Protocol (+$500)

### I. Shopify Storefront ($1,800 entry)
- **1. Core Package:**
  - `Custom Liquid 2.0 Theme ($1,800)`: Custom Liquid 2.0 Theme Engineering, App-Free Speed Performance Tuning, Responsive OS 2.0 Section Architecture
  - `Full Shopify Store ($2,520)`: Slide-Out Cart Drawer & Dynamic Upsells, Custom Product Page (PDP) Layouts, Payment & Shipping Gateway Configuration
  - `Shopify Plus Enterprise ($3,600)`: Enterprise Checkout Customization, Headless Hydrogen / Storefront API Architecture, Multi-Currency & International Tax Setup
- **2. Product Catalog Scale:** Standard Product Catalog, Large Catalog & Multi-Variant
- **3. Strategic Add-Ons:** Slide-Out Cart Drawer & Free Shipping Progress Bar (+$500), Klaviyo E-Commerce Email Automation (+$600)

### J. WooCommerce Store ($1,800 entry)
- **1. Core Package:**
  - `Custom WooCommerce Store ($1,800)`: Custom WooCommerce Product & Checkout UX, Zero SaaS Transaction Fees Setup, Self-Hosted Database Ownership
  - `Full E-Commerce Engine ($2,520)`: Multi-Currency & Tax Logic Architecture, Custom Checkout Flow Optimization, Stripe & PayPal Native Gateway Setup
  - `Enterprise WooCommerce ($3,600)`: High-Volume Server Load & Database Tuning, Custom ERP / Inventory API Sync Wiring, Continuous WooCommerce Security Hardening
- **2. Product Catalog Scale:** Standard Product Catalog, Large Catalog & Multi-Inventory
- **3. Strategic Add-Ons:** Stripe & PayPal Native Payment Gateway Wiring (+$500), Custom Shipping Matrix (+$400)

### K. E-Commerce Hub ($1,800 entry)
- **1. Core Package:**
  - `Custom Shopify Store ($1,800)`: Custom Liquid 2.0 Storefront Engineering, App-Free Speed Performance Tuning, Cart Drawer & Checkout Conversion UX
  - `Custom WooCommerce Store ($1,800)`: Custom WooCommerce Product & Cart Architecture, Multi-Currency & Native Tax Logic, 100% Self-Hosted Data Ownership
  - `Custom Headless Store ($3,500)`: Next.js / Headless E-Commerce Frontend, GraphQL Storefront API Wiring, High-Volume Transaction Server Architecture
- **2. Product Catalog Scale:** Standard Store Catalog, Large Enterprise Catalog
- **3. Strategic Add-Ons:** Klaviyo E-Commerce Email Automation (+$600), Conversion Rate (CRO) Audit (+$800)
