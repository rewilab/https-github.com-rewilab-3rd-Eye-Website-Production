# Design Specification
## 3rd Eye Oilfield Supply & Services LLP Corporate Website

---

### Document Information

| Field | Value |
|-------|-------|
| **Project** | Premium Enterprise Corporate Website |
| **Client** | 3rd Eye Oilfield Supply & Services LLP |
| **Version** | 1.0 |
| **Date** | 2026-07-18 |
| **Architecture** | Static HTML/CSS/JavaScript |
| **Target Audience** | B2B corporate clients, government agencies, EPC contractors |

---

## Table of Contents

1. [Project Overview](#1-project-overview)
2. [Design Philosophy](#2-design-philosophy)
3. [Color System](#3-color-system)
4. [Typography System](#4-typography-system)
5. [Spacing & Layout](#5-spacing--layout)
6. [Component Library](#6-component-library)
7. [Navigation System](#7-navigation-system)
8. [Page Specifications](#8-page-specifications)
9. [Content Hierarchy](#9-content-hierarchy)
10. [Responsive Design](#10-responsive-design)
11. [Animation Specifications](#11-animation-specifications)
12. [Accessibility Requirements](#12-accessibility-requirements)
13. [SEO Specifications](#13-seo-specifications)
14. [Imagery & Iconography](#14-imagery--iconography)
15. [Form Specifications](#15-form-specifications)
16. [Technical Constraints](#16-technical-constraints)
17. [Component Code Reference](#17-component-code-reference)

---

## 1. Project Overview

### 1.1 Project Vision

A premium enterprise-grade corporate website that establishes 3rd Eye Oilfield Supply & Services LLP as a global leader in procurement, strategic partnerships, and integrated project solutions. The site must convey:

- **Professionalism**: Corporate credibility and industry authority
- **Global Reach**: International capability and diverse sector expertise
- **Reliability**: Trust, stability, and long-term partnership commitment
- **Innovation**: Modern presentation without sacrificing stability

### 1.2 Brand Identity

| Attribute | Description |
|-----------|-------------|
| **Company Name** | 3rd Eye Oilfield Supply & Services LLP |
| **Tagline** | Global Procurement • Strategic Partnerships • Integrated Project Solutions |
| **Industry** | B2B Services, Oil & Gas, Defence, Infrastructure, International Trade |
| **Target Markets** | Asia, Africa, Middle East, Europe, Americas |
| **Positioning** | Premium, trusted, global, professional |

### 1.3 Key User Personas

| Persona | Goals | Key Pages |
|---------|-------|-----------|
| **Government Procurement Officer** | Find reliable suppliers for national projects | Services, Products, Contact |
| **EPC Contractor** | Source materials and equipment for projects | Products, Projects, Partners |
| **Corporate Executive** | Evaluate company for partnership | About, Partners, Credentials |
| **International Investor** | Assess global business opportunities | Services, Global Reach, Contact |

---

## 2. Design Philosophy

### 2.1 Design Principles

1. **Clarity Over Complexity**: Clean layouts that communicate quickly
2. **Professional Authority**: Corporate credibility through restraint
3. **Global Accessibility**: Inclusive design serving diverse audiences
4. **Performance First**: Fast loading, no unnecessary flourishes
5. **Trust Through Transparency**: Clear information hierarchy

### 2.2 Visual Style

| Aspect | Specification |
|--------|---------------|
| **Style** | Corporate Modernism - clean, structured, authoritative |
| **Mood** | Professional, trustworthy, capable, established |
| **Reference** | Premium corporate sites (Shell, Schlumberger, Baker Hughes) |
| **Avoid** | Playful, startup-like, overly trendy, flashy |

### 2.3 Layout Principles

- **Grid-Based**: 12-column responsive grid
- **Vertical Rhythm**: Consistent spacing multiples (8px base)
- **Visual Hierarchy**: Clear heading levels guide the eye
- **White Space**: Generous margins create breathing room
- **Content Density**: Moderate - enough content without overwhelming

---

## 3. Color System

### 3.1 Primary Colors

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **Navy Blue** | `#0A2E5C` | rgb(10, 46, 92) | Primary brand color, headers, buttons |
| **Deep Saffron** | `#D97706` | rgb(217, 119, 6) | Accent color, CTAs, highlights |
| **India Green** | `#138808` | rgb(19, 136, 8) | Success states, secondary accents |
| **Pure White** | `#FFFFFF` | rgb(255, 255, 255) | Backgrounds, text on dark |
| **Off White** | `#F5F7FA` | rgb(245, 247, 250) | Section backgrounds |
| **Dark Text** | `#1F2937` | rgb(31, 41, 55) | Body text |
| **Muted Text** | `#6B7280` | rgb(107, 114, 128) | Secondary text, captions |

### 3.2 Color Palette Application

```
┌─────────────────────────────────────────────────────────────────┐
│ HEADER / NAVIGATION                                              │
│ Background: #0A2E5C (Navy Blue)                                  │
│ Text: #FFFFFF (White)                                           │
│ Logo Link Hover: #D97706 (Saffron)                             │
│ Nav Link Hover Underline: #D97706 (Saffron)                     │
├─────────────────────────────────────────────────────────────────┤
│ HERO SECTION                                                    │
│ Background: Navy Blue with dark overlay                          │
│ H1 Text: #FFFFFF (White)                                       │
│ Tagline: #F5F7FA (Off White)                                   │
├─────────────────────────────────────────────────────────────────┤
│ BODY SECTIONS (Alternating)                                      │
│ Light Section: Background #FFFFFF, Text #1F2937                 │
│ Dark Section: Background #F5F7FA, Text #1F2937                  │
├─────────────────────────────────────────────────────────────────┤
│ ACCENT ELEMENTS                                                  │
│ H2 Underline Accent: #D97706 (Saffron)                         │
│ Card Top Border: #D97706 (Saffron)                              │
│ Card Hover Border: #138808 (Green)                              │
├─────────────────────────────────────────────────────────────────┤
│ BUTTONS                                                          │
│ Primary Button: Background #0A2E5C, Text #FFFFFF                  │
│ Primary Hover: Background #D97706, Text #FFFFFF                 │
│ Secondary Button: Background #D97706, Text #FFFFFF              │
│ Secondary Hover: Background #138808, Text #FFFFFF               │
├─────────────────────────────────────────────────────────────────┤
│ LINKS                                                            │
│ Default: #D97706 (Saffron)                                      │
│ Hover: #138808 (Green)                                          │
│ Focus Outline: #D97706 (3px solid)                             │
├─────────────────────────────────────────────────────────────────┤
│ FOOTER                                                           │
│ Background: #0A2E5C (Navy Blue)                                 │
│ Text: #FFFFFF (White)                                           │
└─────────────────────────────────────────────────────────────────┘
```

### 3.3 Color Contrast Ratios (WCAG AA Compliance)

| Combination | Ratio | WCAG Level | Status |
|------------|-------|-----------|--------|
| Navy Blue on White | 13.5:1 | AAA | ✅ Pass |
| White on Navy Blue | 13.5:1 | AAA | ✅ Pass |
| Dark Text on White | 15.4:1 | AAA | ✅ Pass |
| Saffron on White | 3.2:1 | Fail | ❌ Fix |
| White on Saffron | 3.2:1 | Fail | ❌ Fix |
| Muted Text on White | 4.6:1 | AA | ✅ Pass |
| Green on White | 5.2:1 | AA | ✅ Pass |

**Note**: Saffron (#D97706) must NOT be used as text on white backgrounds. Use for links and button accents only.

### 3.4 Dark Mode Support

```css
@media (prefers-color-scheme: dark) {
    :root {
        --bg-primary: #0F172A;
        --bg-secondary: #1E293B;
        --text-primary: #F1F5F9;
        --text-secondary: #94A3B8;
    }
}
```

---

## 4. Typography System

### 4.1 Font Families

| Purpose | Font | Fallback | Weight |
|---------|------|----------|--------|
| **Headings** | Poppins | system-ui, sans-serif | 600, 700 |
| **Body** | Roboto | system-ui, sans-serif | 400, 500 |
| **Monospace** | (Not used) | - | - |

### 4.2 Type Scale

| Element | Font | Size | Line Height | Weight | Letter Spacing |
|---------|------|------|-------------|--------|----------------|
| **H1** | Poppins | 3.5rem (56px) | 1.1 | 700 | -0.02em |
| **H2** | Poppins | 2.5rem (40px) | 1.2 | 600 | -0.01em |
| **H3** | Poppins | 1.875rem (30px) | 1.3 | 600 | 0 |
| **H4** | Poppins | 1.5rem (24px) | 1.4 | 600 | 0 |
| **H5** | Poppins | 1.25rem (20px) | 1.4 | 600 | 0 |
| **H6** | Poppins | 1rem (16px) | 1.4 | 600 | 0 |
| **Body** | Roboto | 1rem (16px) | 1.6 | 400 | 0 |
| **Body Small** | Roboto | 0.875rem (14px) | 1.5 | 400 | 0 |
| **Caption** | Roboto | 0.75rem (12px) | 1.4 | 400 | 0.02em |
| **Button** | Poppins | 0.875rem (14px) | 1 | 600 | 0.05em |
| **Nav Links** | Roboto | 1.1rem (17.6px) | 1 | 500 | 0 |

### 4.3 Responsive Typography

| Breakpoint | H1 | H2 | H3 | Body |
|-----------|----|----|----|------|
| **Desktop (>1024px)** | 56px | 40px | 30px | 16px |
| **Tablet (768-1024px)** | 44px | 32px | 24px | 16px |
| **Mobile (320-767px)** | 32px | 24px | 20px | 16px |

### 4.4 Type Styles

```css
/* H1 - Page Titles in Hero */
h1, .h1 {
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--color-white);
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

/* H2 - Section Titles */
h2, .h2 {
    font-family: 'Poppins', system-ui, sans-serif;
    font-size: 2.5rem;
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: -0.01em;
    color: var(--color-navy);
    margin-bottom: 1rem;
    position: relative;
}

h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background-color: var(--color-saffron);
    border-radius: 2px;
    margin-top: 0.5rem;
}

/* Body Text */
p {
    font-family: 'Roboto', system-ui, sans-serif;
    font-size: 1rem;
    line-height: 1.6;
    color: var(--color-text);
    margin-bottom: 1rem;
}

/* Links */
a {
    color: var(--color-saffron);
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: var(--color-green);
}

a:focus-visible {
    outline: 3px solid var(--color-saffron);
    outline-offset: 3px;
    border-radius: 2px;
}
```

---

## 5. Spacing & Layout

### 5.1 Spacing Scale (8px Base)

| Token | Value | Usage |
|-------|-------|-------|
| `--space-xs` | 4px | Tight internal spacing |
| `--space-sm` | 8px | Small gaps |
| `--space-md` | 16px | Default gaps |
| `--space-lg` | 24px | Section internal padding |
| `--space-xl` | 32px | Between related elements |
| `--space-2xl` | 48px | Section padding top/bottom |
| `--space-3xl` | 64px | Large section gaps |
| `--space-4xl` | 80px | Hero padding |

### 5.2 Section Spacing

| Section Type | Padding (Desktop) | Padding (Mobile) |
|-------------|-----------------|-----------------|
| **Hero** | 150px 20px | 100px 20px |
| **Content Section** | 80px 0 | 50px 0 |
| **Card Grid** | 80px 0 | 50px 0 |
| **CTA Section** | 80px 0 | 50px 0 |
| **Footer** | 30px 0 | 30px 0 |

### 5.3 Container Specifications

```css
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.container--narrow {
    max-width: 800px;
}

.container--wide {
    max-width: 1400px;
}
```

### 5.4 Grid System

```css
.grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 24px;
}

.grid--2-cols {
    grid-template-columns: repeat(2, 1fr);
}

.grid--3-cols {
    grid-template-columns: repeat(3, 1fr);
}

.grid--4-cols {
    grid-template-columns: repeat(4, 1fr);
}

/* Responsive */
@media (max-width: 1024px) {
    .grid--3-cols,
    .grid--4-cols {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .grid--2-cols,
    .grid--3-cols,
    .grid--4-cols {
        grid-template-columns: 1fr;
    }
}
```

### 5.5 Card Grid

```css
.sector-grid,
.service-grid,
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 40px;
}
```

---

## 6. Component Library

### 6.1 Buttons

#### Primary Button
```css
.btn {
    display: inline-block;
    background-color: var(--color-navy);
    color: var(--color-white);
    padding: 12px 25px;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: var(--color-saffron);
    transform: translateY(-2px);
}

.btn:focus-visible {
    outline: 3px solid var(--color-saffron);
    outline-offset: 3px;
}

.btn:active {
    transform: translateY(0);
}
```

#### Button States

| State | Background | Text | Transform |
|-------|------------|------|----------|
| Default | #0A2E5C | #FFFFFF | none |
| Hover | #D97706 | #FFFFFF | translateY(-2px) |
| Focus | #0A2E5C | #FFFFFF | none + outline |
| Active | #0A2E5C | #FFFFFF | translateY(0) |
| Disabled | #9CA3AF | #FFFFFF | none |

#### Button Variants

```css
.btn--secondary {
    background-color: var(--color-saffron);
}

.btn--secondary:hover {
    background-color: var(--color-green);
}

.btn--outline {
    background-color: transparent;
    border: 2px solid var(--color-navy);
    color: var(--color-navy);
}

.btn--outline:hover {
    background-color: var(--color-navy);
    color: var(--color-white);
}
```

### 6.2 Cards

#### Sector/Service Card
```css
.sector-item,
.service-card {
    background-color: var(--color-white);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    text-align: center;
    border-top: 5px solid var(--color-saffron);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.sector-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--color-green);
}

.sector-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--color-navy);
    margin-bottom: 0.5rem;
}
```

#### Card States

| State | Transform | Shadow | Border |
|-------|-----------|--------|--------|
| Default | none | 0 5px 15px | top: 5px saffron |
| Hover | translateY(-8px) | 0 8px 25px | top: 5px green |
| Focus | none | 0 5px 15px | top: 5px saffron |

### 6.3 Form Elements

#### Text Input
```css
input[type="text"],
input[type="email"],
input[type="tel"],
textarea,
select {
    width: 100%;
    padding: 15px;
    border: 1px solid var(--color-light-gray);
    border-radius: 5px;
    font-family: 'Roboto', sans-serif;
    font-size: 1rem;
    color: var(--color-text);
    background-color: var(--color-white);
    transition: border-color 0.3s ease;
}

input:focus,
textarea:focus,
select:focus {
    border-color: var(--color-saffron);
    outline: none;
    box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.1);
}

input::placeholder {
    color: var(--color-muted);
}
```

#### Form Layout
```css
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-family: 'Roboto', sans-serif;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--color-text);
    margin-bottom: 8px;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}
```

### 6.4 Navigation

#### Header
```css
.site-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: var(--color-navy);
    padding: 20px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.main-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
```

#### Navigation Links
```css
.nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
}

.nav-links a {
    color: var(--color-white);
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 5px 0;
    position: relative;
    transition: color 0.3s ease;
}

.nav-links a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0%;
    height: 2px;
    background-color: var(--color-saffron);
    transition: width 0.3s ease;
}

.nav-links a:hover::after {
    width: 100%;
}

.nav-links a:hover {
    color: var(--color-saffron);
}

.nav-links a[aria-current="page"] {
    color: var(--color-saffron);
}

.nav-links a[aria-current="page"]::after {
    width: 100%;
}
```

### 6.5 Hero Section

```css
.hero-section {
    background: linear-gradient(rgba(10, 46, 92, 0.85), rgba(10, 46, 92, 0.85)),
                url('../img/header-bg.jpg') no-repeat center center;
    background-size: cover;
    background-position: center;
    color: var(--color-white);
    text-align: center;
    padding: 150px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
}

.hero-content {
    max-width: 900px;
}

.hero-content .tagline {
    font-size: 1.8rem;
    font-weight: 300;
    color: var(--color-light-gray);
    margin-bottom: 40px;
}
```

### 6.6 Footer

```css
.site-footer {
    background-color: var(--color-navy);
    color: var(--color-white);
    text-align: center;
    padding: 30px 0;
    font-size: 0.9rem;
}

.site-footer p {
    margin: 0;
    color: var(--color-white);
}
```

### 6.7 Section Patterns

#### Light Section (Default)
```css
.section--light {
    background-color: var(--color-white);
    color: var(--color-text);
}
```

#### Dark Section (Gray Background)
```css
.section--gray {
    background-color: var(--color-light-gray);
    color: var(--color-text);
}
```

#### CTA Section
```css
.cta-section {
    background-color: var(--color-navy);
    color: var(--color-white);
    text-align: center;
    padding: 80px 0;
}

.cta-section h2,
.cta-section p {
    color: var(--color-white);
}

.cta-section h2::after {
    left: 50%;
    transform: translateX(-50%);
}
```

---

## 7. Navigation System

### 7.1 Primary Navigation

```
┌─────────────────────────────────────────────────────────────────┐
│ [LOGO]                Home | About | Services | Products | Projects | Partners | Contact │
└─────────────────────────────────────────────────────────────────┘
```

### 7.2 Navigation Structure

| Page | URL | Position | Dropdown |
|------|-----|----------|----------|
| Home | index.html | Always | No |
| About Us | about.html | Primary | No |
| Services | services.html | Primary | No |
| Products | products.html | Primary | No |
| Projects | projects.html | Primary | No |
| Partners | partners.html | Primary | No |
| Contact | contact.html | Primary | No |

### 7.3 Navigation Behavior

| Aspect | Specification |
|--------|---------------|
| **Sticky Header** | Yes - sticks to top on scroll |
| **Mobile Menu** | Hamburger icon at < 768px |
| **Active State** | Saffron underline + color |
| **Hover State** | Saffron underline animation |
| **Focus State** | 3px saffron outline |
| **Skip Link** | "Skip to main content" hidden link, appears on focus |

### 7.4 Mobile Navigation

```css
/* Mobile menu toggle (hamburger) */
.nav-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
}

@media (max-width: 768px) {
    .nav-toggle {
        display: block;
    }
    
    .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--color-navy);
        flex-direction: column;
        padding: 20px;
        gap: 15px;
    }
    
    .nav-links.active {
        display: flex;
    }
}
```

### 7.5 Breadcrumb (Inner Pages Only)

```html
<nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li aria-current="page">Current Page</li>
    </ol>
</nav>
```

---

## 8. Page Specifications

### 8.1 Homepage (index.html)

#### Hero Section
```
┌─────────────────────────────────────────────────────────────────┐
│                                                                 │
│              3rd EYE OILFIELD SUPPLY & SERVICES LLP           │
│                                                                 │
│     Global Procurement • Strategic Partnerships • Integrated    │
│                      Project Solutions                           │
│                                                                 │
│                      [ Get in Touch ]                          │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
```

| Element | Content |
|---------|---------|
| **H1** | "3rd Eye Oilfield Supply & Services LLP" |
| **Tagline** | "Global Procurement • Strategic Partnerships • Integrated Project Solutions" |
| **CTA** | Button "Get in Touch" → scrolls to contact form |

#### About Preview Section
```
┌─────────────────────────────────────────────────────────────────┐
│                        About Us                                  │
│                      ─────────────                              │
│  [2-3 paragraph company description]                             │
│                                                                 │
│  [ Read More About Us → ]                                       │
└─────────────────────────────────────────────────────────────────┘
```

| Element | Content |
|---------|---------|
| **H2** | "About Us" |
| **Content** | 2-3 paragraphs introducing the company |
| **CTA** | "Read More About Us" → about.html |

#### Business Sectors Grid
```
┌─────────────────────────────────────────────────────────────────┐
│                      Our Business Sectors                        │
│                      ────────────────────                        │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌──────────┐     │
│  │ Oil & Gas│  │ Defence  │  │ Int'l    │  │ Infra-   │     │
│  │          │  │ & Security│  │ Trade    │  │ structure│     │
│  └──────────┘  └──────────┘  └──────────┘  └──────────┘     │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌──────────┐     │
│  │Agri-     │  │Nutra-    │  │ Procure- │  │ Project  │     │
│  │culture   │  │ceuticals │  │ ment     │  │ Develop- │     │
│  └──────────┘  └──────────┘  └──────────┘  └──────────┘     │
└─────────────────────────────────────────────────────────────────┘
```

| Card | Title | Link |
|------|-------|------|
| 1 | Oil & Gas | services.html#oil-gas |
| 2 | Defence & Security | services.html#defence |
| 3 | International Trade | services.html#trade |
| 4 | Infrastructure | services.html#infrastructure |
| 5 | Agriculture | services.html#agriculture |
| 6 | Nutraceuticals | services.html#nutraceuticals |
| 7 | Procurement & Supply Chain | services.html#procurement |
| 8 | Project Development | services.html#projects |

#### Contact CTA Section
```
┌─────────────────────────────────────────────────────────────────┐
│                        Contact Us                                │
│                      ─────────────                              │
│  [ Short compelling message about partnership ]                  │
│                                                                 │
│                      [ Get in Touch ]                            │
└─────────────────────────────────────────────────────────────────┘
```

---

### 8.2 About Page (about.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                    About 3rd Eye Oilfield                       │
│                 Supply & Services LLP                            │
│                                                                 │
│          Our Vision, Mission, and Commitment                     │
│                        to Excellence                             │
└─────────────────────────────────────────────────────────────────┘
```

#### Sections (in order)

1. **Company Profile** (Full width text)
2. **Vision & Mission** (2-column grid)
3. **Why Choose Us** (Bullet list)
4. **Business Philosophy** (Full width text)
5. **Global Markets Served** (Full width text)
6. **Our Business Divisions** (8-item grid)
7. **Quality & HSE Commitment** (2-column grid)
8. **Corporate Governance** (Full width text)
9. **CTA Section** → contact.html

---

### 8.3 Services Page (services.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                   Our Comprehensive Services                      │
│                                                                 │
│            Delivering Excellence Across Diverse Industries       │
└─────────────────────────────────────────────────────────────────┘
```

#### Service Categories

Each service follows this structure:

```
┌─────────────────────────────────────────────────────────────────┐
│ [Number]. [Service Name]                                        │
├─────────────────────────────────────────────────────────────────┤
│ ┌───────────────────┐  ┌───────────────────┐                   │
│ │ Overview          │  │ Industries Served │                   │
│ │ [2-3 sentences]    │  │ [List]            │                   │
│ ├───────────────────┤  ├───────────────────┤                   │
│ │ Key Capabilities  │  │ Benefits          │                   │
│ │ • [Capability 1]  │  │ [Benefits]        │                   │
│ │ • [Capability 2]  │  │                   │                   │
│ │ • [Capability 3]  │  │                   │                   │
│ │ • [Capability 4]  │  │                   │                   │
│ └───────────────────┘  └───────────────────┘                   │
└─────────────────────────────────────────────────────────────────┘
```

#### Services List

1. **Oil & Gas Supply & Services**
2. **Procurement & Supply Chain Management**
3. **Defence & Security Products**
4. **International Trade**
5. **Infrastructure**
6. **Project Development**
7. **Agriculture & Agribusiness**
8. **Nutraceuticals & Healthcare Products**
9. **Strategic Business Advisory**

#### Additional Sections
- Industries We Support (8-item grid)
- Global Reach (text section)
- Why Work With Us (bullet list)
- FAQ (accordion)
- CTA Section

---

### 8.4 Products Page (products.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                      Our Premium Products                         │
│                                                                 │
│              Global Sourcing, Uncompromising Quality            │
└─────────────────────────────────────────────────────────────────┘
```

#### Product Categories

Each product follows the same 2-column structure as services.

#### Product List

1. **Oilfield Equipment**
2. **Drilling Equipment**
3. **Pipes, Valves & Fittings**
4. **Industrial Equipment**
5. **Mechanical Equipment**
6. **Electrical Equipment**
7. **Instrumentation**
8. **Safety Equipment & PPE**
9. **Defence & Security Products**
10. **Infrastructure Products**
11. **Agricultural Equipment**
12. **Nutraceuticals**
13. **Healthcare Products**
14. **Chemicals**
15. **Project Procurement Packages**

#### Additional Sections
- Quality Assurance
- Global Sourcing Network
- Industries We Serve
- Why Choose 3rd Eye for Products
- CTA Section

---

### 8.5 Projects Page (projects.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                      International Projects                        │
│                                                                 │
│     International Project Development • Strategic Procurement •  │
│                      Integrated Solutions                         │
└─────────────────────────────────────────────────────────────────┘
```

#### Sections

1. **Our Project Expertise** (intro text)
2. **Project Sectors** (detailed cards):
   - Oil & Gas Projects
   - Defence & Security Projects
   - Infrastructure Projects
   - Industrial Projects
   - Agriculture & Agribusiness Projects
   - Nutraceutical & Healthcare Projects
   - International Procurement Projects
   - Government Supply Projects
3. **Our Project Lifecycle Approach**
4. **Global Markets**
5. **Quality & HSE Commitment** (2-column)
6. **Commitment to Sustainability**
7. **Why Clients Choose 3rd Eye**
8. **FAQ**
9. **CTA Section**

---

### 8.6 Partners Page (partners.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                      Strategic Partners                          │
│                                                                 │
│                  Building Trusted Global Partnerships             │
└─────────────────────────────────────────────────────────────────┘
```

#### Sections

1. **Our Collaborative Network** (intro)
2. **Partner Categories**:
   - Global Manufacturers
   - Oil & Gas Technology Partners
   - Defence & Security Partners
   - Infrastructure & EPC Contractors
   - Logistics & Shipping Partners
   - Agricultural Partners
   - Financial & Investment Partners
   - Government & Institutional Partnerships
3. **Partnership Philosophy**
4. **Vendor Qualification Process**
5. **Ethical Business Practices**
6. **Quality & Compliance**
7. **Our Global Network**
8. **Become a Partner**
9. **FAQ**
10. **CTA Section**

---

### 8.7 Contact Page (contact.html)

#### Hero
```
┌─────────────────────────────────────────────────────────────────┐
│                         Contact Us                               │
│                                                                 │
│            Let's Build Long-Term Business Partnerships            │
└─────────────────────────────────────────────────────────────────┘
```

#### Sections

1. **Reach Out Introduction** (text)
2. **Corporate Contact Information**
   - Email: hello@3rd-eye.in
3. **Contact Form**
4. **Specific Enquiries** (4 cards):
   - Global Business Enquiries → global@3rdeyeoilfield.com
   - Procurement Enquiries → procurement@3rdeyeoilfield.com
   - Partnership Enquiries → partners@3rdeyeoilfield.com
   - Careers Enquiries → careers@3rdeyeoilfield.com
5. **FAQ**
6. **CTA Section**

---

### 8.8 404 Page (404.html)

```
┌─────────────────────────────────────────────────────────────────┐
│                         404                                      │
│                     Page Not Found                               │
│                                                                 │
│          The page you are looking for could not be found.       │
│                                                                 │
│                      [ Return Home ]                             │
└─────────────────────────────────────────────────────────────────┘
```

---

## 9. Content Hierarchy

### 9.1 Page Hierarchy

| Level | Element | Style |
|-------|---------|-------|
| **H1** | Page Title (Hero) | 56px, White, uppercase, centered |
| **H2** | Major Section Title | 40px, Navy, centered, underline accent |
| **H3** | Subsection Title | 30px, Navy, left-aligned |
| **H4** | Card Title | 24px, Navy, centered |
| **Body** | Paragraph Text | 16px, Dark, left-aligned |
| **Caption** | Supporting Text | 14px, Muted, left-aligned |

### 9.2 Content Width Guidelines

| Content Type | Max Width | Alignment |
|-------------|-----------|-----------|
| Hero Text | 900px | Center |
| Section Paragraphs | 800px | Center |
| Two-Column Content | Per column | Left |
| Card Content | 100% | Left/Center |
| Lists | 700px | Left |
| Form | 600px | Left/Center |

### 9.3 Content Density

| Section Type | Paragraphs | Lists | CTAs |
|-------------|------------|-------|------|
| Hero | 0 | 1 tagline | 1 button |
| About Intro | 2-3 | 0 | 1 link |
| Service Category | 2-3 | 2 (4 items each) | 0 |
| Why Choose Us | 0 | 6 | 0 |
| CTA | 1 | 0 | 1 button |
| FAQ | 0 | 4 Q&A | 0 |

---

## 10. Responsive Design

### 10.1 Breakpoints

| Name | Min-Width | Max-Width | Target Devices |
|------|-----------|-----------|----------------|
| **Mobile Small** | 320px | 374px | Older smartphones |
| **Mobile** | 375px | 767px | Modern smartphones |
| **Tablet** | 768px | 1023px | Tablets, small laptops |
| **Desktop** | 1024px | 1439px | Standard laptops, desktops |
| **Large Desktop** | 1440px | ∞ | Large monitors |

### 10.2 Grid Behavior by Breakpoint

| Grid | Mobile | Tablet | Desktop |
|------|--------|--------|---------|
| 2-column | 1-column | 2-column | 2-column |
| 3-column | 1-column | 2-column | 3-column |
| 4-column | 1-column | 2-column | 4-column |
| Auto-fit | 1-column | 2-column | 3-4 columns |

### 10.3 Typography by Breakpoint

| Element | Mobile | Tablet | Desktop |
|---------|--------|--------|---------|
| H1 (Hero) | 32px | 44px | 56px |
| H2 | 24px | 32px | 40px |
| H3 | 20px | 24px | 30px |
| Body | 16px | 16px | 16px |
| Nav Links | 1rem | 1.1rem | 1.1rem |

### 10.4 Spacing by Breakpoint

| Element | Mobile | Tablet | Desktop |
|---------|--------|--------|---------|
| Section Padding | 50px | 60px | 80px |
| Container Padding | 15px | 20px | 20px |
| Card Padding | 20px | 25px | 30px |
| Grid Gap | 20px | 24px | 30px |

### 10.5 Component Responsiveness

#### Navigation
| State | Mobile | Desktop |
|-------|--------|---------|
| Logo | Full width, centered | Left aligned |
| Links | Hidden, hamburger shown | Visible, flex row |
| Menu | Overlay dropdown | Inline |

#### Hero
| Element | Mobile | Desktop |
|---------|--------|---------|
| H1 | 32px, 2 lines | 56px, 1 line |
| Tagline | 1.2em, stacked | 1.8em, inline |
| CTA | Full width | Auto width |

#### Cards
| Aspect | Mobile | Desktop |
|--------|--------|---------|
| Columns | 1 | 2-4 |
| Padding | 20px | 30px |
| Grid Gap | 20px | 30px |

---

## 11. Animation Specifications

### 11.1 CSS Transitions

| Property | Duration | Timing Function | Usage |
|----------|----------|----------------|-------|
| `color` | 0.3s | ease | Links, buttons |
| `background-color` | 0.3s | ease | Buttons, cards |
| `transform` | 0.3s | ease | Buttons, cards |
| `box-shadow` | 0.3s | ease | Cards on hover |
| `opacity` | 0.3s | ease | Fade effects |
| `border-color` | 0.3s | ease | Card borders |

### 11.2 Scroll Animations

```css
/* Fade in up on scroll */
.fade-in-up {
    animation: fadeInUp 0.6s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Trigger animation on intersection */
.sector-item,
.service-card,
.contact-form {
    opacity: 0;
}

.sector-item.visible,
.service-card.visible,
.contact-form.visible {
    animation: fadeInUp 0.6s ease-out forwards;
}
```

### 11.3 Hover Animations

#### Card Hover
```css
.sector-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}
```

#### Button Hover
```css
.btn:hover {
    background-color: var(--color-saffron);
    transform: translateY(-2px);
}

.btn:active {
    transform: translateY(0);
}
```

#### Navigation Underline
```css
.nav-links a::after {
    transition: width 0.3s ease;
}
```

### 11.4 Reduced Motion

```css
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
```

### 11.5 Loading States

```css
/* Button loading state */
.btn--loading {
    position: relative;
    color: transparent !important;
    pointer-events: none;
}

.btn--loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin: -10px 0 0 -10px;
    border: 2px solid var(--color-white);
    border-top-color: transparent;
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}
```

---

## 12. Accessibility Requirements

### 12.1 WCAG 2.1 AA Compliance

All pages must meet Web Content Accessibility Guidelines 2.1 Level AA.

### 12.2 Semantic HTML

| Element | Usage |
|---------|-------|
| `<header>` | Site header with navigation |
| `<nav>` | Navigation with `aria-label` |
| `<main>` | Primary content, one per page |
| `<section>` | Thematic content groupings with `aria-labelledby` |
| `<article>` | Self-contained content (cards, posts) |
| `<aside>` | Tangentially related content |
| `<footer>` | Site footer |
| `<h1>`-`<h6>` | Heading hierarchy (never skip levels) |

### 12.3 ARIA Requirements

```html
<!-- Navigation with label -->
<nav aria-label="Primary navigation">
    <ul>
        <li><a href="/" aria-current="page">Home</a></li>
    </ul>
</nav>

<!-- Sections with labels -->
<section id="about" aria-labelledby="about-title">
    <h2 id="about-title">About Us</h2>
</section>

<!-- Forms with descriptions -->
<form aria-describedby="form-instructions">
    <p id="form-instructions" class="visually-hidden">
        Required fields are marked with asterisk
    </p>
</form>

<!-- Buttons with aria-label for icon-only -->
<button aria-label="Back to top">
    <span aria-hidden="true">↑</span>
</button>
```

### 12.4 Keyboard Navigation

| Element | Keyboard | Behavior |
|---------|----------|----------|
| Links | Enter | Navigate to href |
| Buttons | Enter/Space | Activate button |
| Form inputs | Tab | Move to next input |
| Dropdowns | Arrow keys | Navigate options |
| Modals | Escape | Close modal |

### 12.5 Focus Styles

```css
:focus-visible {
    outline: 3px solid var(--color-saffron);
    outline-offset: 3px;
}
```

### 12.6 Skip Links

```html
<a href="#main-content" class="skip-link">Skip to main content</a>
```

```css
.skip-link {
    position: absolute;
    left: 20px;
    top: -60px;
    z-index: 2000;
    background: var(--color-white);
    color: var(--color-navy);
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: 600;
}

.skip-link:focus {
    top: 20px;
}
```

### 12.7 Screen Reader Only Text

```css
.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}
```

### 12.8 Image Alt Text Requirements

| Image Type | Alt Text Example |
|------------|------------------|
| Logo | "3rd Eye Oilfield Supply & Services LLP Logo" |
| Decorative | `alt=""` (empty) |
| Informative | "Team meeting discussing project timeline" |
| Functional | "Search" for search button icon |
| Text in image | Same text as visible in image |

---

## 13. SEO Specifications

### 13.1 Meta Tags (All Pages)

```html
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[Unique 150-160 char description]">
    <meta name="keywords" content="[Comma-separated keywords]">
    <meta name="author" content="3rd Eye Oilfield Supply & Services LLP">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0A2E5C">
    <link rel="canonical" href="https://www.3rd-eye.in/[page].html">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>[Page Title] | 3rd Eye Oilfield Supply & Services LLP</title>
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.3rd-eye.in/[page].html">
    <meta property="og:title" content="[Page Title]">
    <meta property="og:description" content="[Description]">
    <meta property="og:image" content="https://www.3rd-eye.in/img/header-bg.jpg">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="3rd Eye Oilfield Supply & Services LLP">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="[Page Title]">
    <meta name="twitter:description" content="[Description]">
    <meta name="twitter:image" content="https://www.3rd-eye.in/img/header-bg.jpg">
</head>
```

### 13.2 Structured Data (JSON-LD)

#### Organization (All Pages)
```json
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "3rd Eye Oilfield Supply & Services LLP",
    "url": "https://www.3rd-eye.in/",
    "logo": "https://www.3rd-eye.in/img/logo.png",
    "description": "Global procurement, strategic partnerships and integrated project solutions.",
    "email": "hello@3rd-eye.in",
    "sameAs": [
        "https://www.linkedin.com/company/3rd-eye-oilfield",
        "https://twitter.com/3rdeyeoilfield"
    ]
}
```

#### Service Pages
```json
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "[Service Name]",
    "provider": {
        "@type": "Organization",
        "name": "3rd Eye Oilfield Supply & Services LLP"
    },
    "areaServed": "Worldwide",
    "description": "[Service description]"
}
```

### 13.3 Sitemap

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.3rd-eye.in/</loc>
        <lastmod>2026-07-18</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://www.3rd-eye.in/about.html</loc>
        <lastmod>2026-07-18</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <!-- ... other pages ... -->
</urlset>
```

### 13.4 robots.txt

```
User-agent: *
Allow: /

Disallow: /cgi-bin/
Disallow: /mail.php

Sitemap: https://www.3rd-eye.in/sitemap.xml
```

---

## 14. Imagery & Iconography

### 14.1 Image Specifications

#### Logo
| Property | Value |
|----------|-------|
| **Format** | PNG (with transparency) |
| **Dimensions** | 150px × 50px (display), scalable |
| **Max File Size** | 10KB |
| **Background** | Transparent or matches header |
| **Alt Text** | "3rd Eye Oilfield Supply & Services LLP Logo" |

#### Hero Background
| Property | Value |
|----------|-------|
| **Format** | JPEG (optimized) |
| **Dimensions** | 1920px × 1080px (display), responsive |
| **File Size** | < 100KB |
| **Color** | Professional industrial/corporate imagery |
| **Alt Text** | N/A (decorative, via CSS) |

### 14.2 Image Style Guidelines

| Style | Description |
|-------|-------------|
| **Color Palette** | Professional blues, grays, whites; avoid bright/neon |
| **Mood** | Trustworthy, stable, global, capable |
| **Subjects** | Professional settings, industrial, teamwork, infrastructure |
| **Avoid** | Stock photo clichés, overly happy people, cartoon graphics |

### 14.3 Image Storage Structure

```
img/
├── logo.png                    # Company logo
├── header-bg.jpg              # Hero background
├── favicon.ico                # Favicon
└── (future)
    ├── team/                  # Team photos
    ├── projects/              # Project imagery
    ├── headquarters/          # Office/location images
    └── icons/                 # UI icons (if needed)
```

### 14.4 Responsive Images

```html
<!-- Hero background - use CSS for simplicity -->
<!-- Logo - single high-res PNG -->
<!-- Future images -->
<picture>
    <source srcset="image.webp" type="image/webp">
    <source srcset="image.jpg" type="image/jpeg">
    <img src="image.jpg" alt="Description" loading="lazy">
</picture>
```

---

## 15. Form Specifications

### 15.1 Contact Form Fields

#### Homepage (Simplified)
| Field | Type | Required | Validation |
|-------|------|----------|------------|
| Name | text | Yes | Min 2 characters |
| Email | email | Yes | Valid email format |
| Message | textarea | Yes | Min 10 characters |

#### Contact Page (Full)
| Field | Type | Required | Validation |
|-------|------|----------|------------|
| Name | text | Yes | Min 2 characters |
| Company | text | No | - |
| Country | text | No | - |
| Email | email | Yes | Valid email format |
| Telephone | tel | No | - |
| Subject | text | Yes | Min 3 characters |
| Service | select | No | Options provided |
| Message | textarea | Yes | Min 20 characters |
| Privacy Consent | checkbox | Yes | Must be checked |

### 15.2 Form Service (Recommended: Formspree)

```html
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
    <!-- Form fields -->
    <button type="submit" class="btn btn--primary">Send Message</button>
</form>
```

### 15.3 Form Validation

```javascript
// Client-side validation
const validators = {
    required: (value) => value.trim().length > 0,
    email: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
    minLength: (value, min) => value.length >= min,
};

// Error display
function showError(input, message) {
    const error = document.createElement('span');
    error.className = 'error-message';
    error.textContent = message;
    input.parentElement.appendChild(error);
    input.classList.add('error');
}
```

### 15.4 Form Success/Error States

```css
.form-success {
    background-color: #d4edda;
    border: 1px solid #28a745;
    color: #155724;
    padding: 15px;
    border-radius: 5px;
}

.form-error {
    background-color: #f8d7da;
    border: 1px solid #dc3545;
    color: #721c24;
    padding: 15px;
    border-radius: 5px;
}
```

---

## 16. Technical Constraints

### 16.1 File Organization

```
/
├── index.html
├── about.html
├── services.html
├── products.html
├── projects.html
├── partners.html
├── contact.html
├── 404.html
├── privacy-policy.html
├── terms.html
├── css/
│   └── main.css
├── js/
│   └── main.js
├── img/
│   ├── logo.png
│   └── header-bg.jpg
├── .htaccess
├── robots.txt
├── sitemap.xml
└── security.txt
```

### 16.2 Browser Support

| Browser | Version | Support Level |
|---------|---------|---------------|
| Chrome | Latest 2 | Full |
| Firefox | Latest 2 | Full |
| Safari | Latest 2 | Full |
| Edge | Latest 2 | Full |
| iOS Safari | Latest 2 | Full |
| Chrome Android | Latest 2 | Full |

### 16.3 Performance Targets

| Metric | Target | Measurement |
|--------|--------|------------|
| First Contentful Paint (FCP) | < 1.5s | Lighthouse |
| Largest Contentful Paint (LCP) | < 2.5s | Lighthouse |
| Total Blocking Time (TBT) | < 200ms | Lighthouse |
| Cumulative Layout Shift (CLS) | < 0.1 | Lighthouse |
| Time to Interactive (TTI) | < 3.5s | Lighthouse |
| PageSpeed Score | > 90 | Lighthouse |
| Total Page Size | < 500KB | Browser DevTools |

### 16.4 Security Requirements

| Requirement | Implementation |
|-------------|----------------|
| HTTPS | Required (redirect HTTP → HTTPS) |
| Security Headers | CSP, HSTS, X-Frame-Options |
| Form Security | Form service (Formspree/Netlify) |
| No Backend | PHP removed, static only |

### 16.5 Hosting Requirements

| Requirement | Specification |
|-------------|----------------|
| **Type** | Static hosting (GitHub Pages, Netlify, Vercel, S3) |
| **SSL** | Required (HTTPS) |
| **CDN** | Recommended |
| **Domain** | www.3rd-eye.in with redirect |
| **Email** | Separate email hosting |

### 16.6 Asset Optimization

| Asset | Format | Max Size | Optimization |
|-------|--------|----------|-------------|
| CSS | Minified CSS | 10KB | CSSo |
| JavaScript | Minified JS | 10KB | Terser |
| Logo | PNG | 10KB | optipng |
| Hero BG | JPEG | 100KB | jpegoptim |

---

## 17. Component Code Reference

### 17.1 HTML Template Structure

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[Description]">
    <title>[Page Title] | 3rd Eye Oilfield</title>
    
    <!-- Preconnect for fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <!-- Skip Link -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <nav class="main-nav" aria-label="Primary navigation">
                <a href="index.html" class="logo">3rd Eye Oilfield</a>
                <ul class="nav-links">
                    <li><a href="index.html" aria-current="page">Home</a></li>
                    <!-- ... other links ... -->
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        <section id="hero" class="hero-section" aria-labelledby="hero-title">
            <div class="hero-content">
                <h1 id="hero-title">[Hero Title]</h1>
                <p class="tagline">[Tagline]</p>
                <a href="#contact" class="btn btn--primary">Get in Touch</a>
            </div>
        </section>
        
        <!-- Content Sections -->
        <section id="about" class="section--light" aria-labelledby="about-title">
            <div class="container">
                <h2 id="about-title">About Us</h2>
                <p>Content...</p>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container text-center">
                <h2>Ready to Connect?</h2>
                <a href="contact.html" class="btn btn--primary">Contact Us</a>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 3rd Eye Oilfield Supply & Services LLP. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="js/main.js" defer></script>
</body>
</html>
```

### 17.2 CSS Variables

```css
:root {
    /* Colors */
    --color-navy: #0A2E5C;
    --color-saffron: #D97706;
    --color-green: #138808;
    --color-white: #FFFFFF;
    --color-light-gray: #F5F7FA;
    --color-text: #1F2937;
    --color-muted: #6B7280;
    
    /* Typography */
    --font-heading: 'Poppins', system-ui, sans-serif;
    --font-body: 'Roboto', system-ui, sans-serif;
    
    /* Spacing */
    --space-xs: 4px;
    --space-sm: 8px;
    --space-md: 16px;
    --space-lg: 24px;
    --space-xl: 32px;
    --space-2xl: 48px;
    --space-3xl: 64px;
    --space-4xl: 80px;
    
    /* Layout */
    --container-max: 1200px;
    --border-radius: 8px;
    
    /* Transitions */
    --transition-fast: 0.2s ease;
    --transition-base: 0.3s ease;
}
```

### 17.3 JavaScript Functions

```javascript
// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});

// Form validation
function validateForm(form) {
    const required = form.querySelectorAll('[required]');
    let isValid = true;
    
    required.forEach(field => {
        if (!field.value.trim()) {
            showError(field, 'This field is required');
            isValid = false;
        }
    });
    
    return isValid;
}

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);
```

---

## Appendix A: Complete File Manifest

| File | Purpose | Min Size | Max Size |
|------|---------|----------|----------|
| index.html | Homepage | 5KB | 10KB |
| about.html | About page | 8KB | 15KB |
| services.html | Services page | 15KB | 25KB |
| products.html | Products page | 15KB | 25KB |
| projects.html | Projects page | 15KB | 25KB |
| partners.html | Partners page | 12KB | 20KB |
| contact.html | Contact page | 8KB | 15KB |
| 404.html | Error page | 2KB | 5KB |
| privacy-policy.html | Legal | 5KB | 10KB |
| terms.html | Legal | 5KB | 10KB |
| main.css | Stylesheet | 5KB | 10KB |
| main.js | JavaScript | 5KB | 10KB |
| logo.png | Logo | 5KB | 10KB |
| header-bg.jpg | Hero BG | 80KB | 100KB |

---

## Appendix B: Color Reference

| Name | Hex | RGB | HSL | Usage |
|------|-----|-----|-----|-------|
| Navy Blue | #0A2E5C | 10, 46, 92 | 215°, 80%, 20% | Primary |
| Deep Saffron | #D97706 | 217, 119, 6 | 33°, 95%, 44% | Accent |
| India Green | #138808 | 19, 136, 8 | 112°, 89%, 28% | Success |
| White | #FFFFFF | 255, 255, 255 | 0°, 0%, 100% | Backgrounds |
| Off White | #F5F7FA | 245, 247, 250 | 220°, 33%, 97% | Section BG |
| Dark Text | #1F2937 | 31, 41, 55 | 220°, 28%, 17% | Body text |
| Muted | #6B7280 | 107, 114, 128 | 220°, 9%, 46% | Secondary |

---

*Design Specification v1.0 | 2026-07-18*
*This specification is sufficient for multiple developers to independently build the same website.*
