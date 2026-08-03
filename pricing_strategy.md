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
