# Enterprise Functional Specification
## 3rd Eye Oilfield Supply & Services LLP Corporate Website

---

### Document Information

| Field | Value |
|-------|-------|
| **Document Title** | Enterprise Functional Specification for Corporate Website |
| **Project** | 3rd Eye Oilfield Supply & Services LLP Website Redevelopment |
| **Client** | 3rd Eye Oilfield Supply & Services LLP |
| **Document Version** | 1.0 |
| **Date** | 2026-07-18 |
| **Status** | Master Specification |
| **Architecture** | Static HTML/CSS/JavaScript |

---

## Document History

| Version | Date | Author | Changes |
|---------|------|--------|---------|
| 1.0 | 2026-07-18 | OpenHands | Initial specification |

---

## Table of Contents

1. [Executive Summary](#1-executive-summary)
2. [Complete Site Map](#2-complete-site-map)
3. [Information Architecture](#3-information-architecture)
4. [Complete Page Specifications](#4-complete-page-specifications)
5. [Navigation Specification](#5-navigation-specification)
6. [Footer Specification](#6-footer-specification)
7. [Component Library](#7-component-library)
8. [Content Specification](#8-content-specification)
9. [Image Specification](#9-image-specification)
10. [Animation Specification](#10-animation-specification)
11. [Responsive Design](#11-responsive-design)
12. [Accessibility](#12-accessibility)
13. [Technical SEO](#13-technical-seo)
14. [Security](#14-security)
15. [Performance Standards](#15-performance-standards)
16. [Future Expansion](#16-future-expansion)
17. [Enterprise Quality Checklist](#17-enterprise-quality-checklist)
18. [Development Phases](#18-development-phases)
19. [Final Readiness Assessment](#19-final-readiness-assessment)

---

# 1. Executive Summary

## 1.1 Project Purpose

This Functional Specification establishes the complete requirements for the redevelopment of the 3rd Eye Oilfield Supply & Services LLP corporate website into a premium enterprise-grade web presence. The specification preserves the static HTML/CSS/JavaScript architecture while addressing all identified deficiencies in the current implementation.

## 1.2 Business Objectives

| Objective | Priority | Measurement |
|-----------|----------|-------------|
| Establish global corporate authority | Critical | Market perception surveys |
| Generate qualified business leads | Critical | Contact form submissions |
| Build trust with B2B and government clients | Critical | Time on site, pages per session |
| Communicate diverse sector expertise | High | Content engagement metrics |
| Facilitate partnership enquiries | High | Partnership form submissions |
| Demonstrate international capability | Medium | Geographic traffic distribution |
| Support corporate governance communication | Medium | Stakeholder feedback |

## 1.3 Website Objectives

| Objective | Target | Success Indicator |
|-----------|--------|-------------------|
| Achieve Lighthouse Performance Score | >90 | Lighthouse audit |
| Achieve WCAG 2.1 AA Accessibility | 100% | Accessibility audit |
| Achieve Lighthouse SEO Score | >95 | Lighthouse audit |
| First Contentful Paint (FCP) | <1.5s | PageSpeed Insights |
| Largest Contentful Paint (LCP) | <2.5s | PageSpeed Insights |
| Total Page Size (Homepage) | <500KB | Browser DevTools |
| Mobile Usability | Pass | Google Search Console |
| Security Headers | 100% | Security headers check |

## 1.4 Success Criteria

The website redevelopment shall be considered successful when:

1. **Performance**: All Lighthouse scores exceed 90 across Performance, Accessibility, Best Practices, and SEO categories.

2. **Accessibility**: All pages pass automated accessibility testing (axe-core, WAVE, Lighthouse) and manual keyboard navigation testing.

3. **Functionality**: All navigation links function correctly, all forms submit successfully, and all interactive elements respond appropriately.

4. **Responsiveness**: All pages render correctly across tested viewport sizes (320px to 2560px) on Chrome, Firefox, Safari, and Edge.

5. **Security**: No security vulnerabilities identified in OWASP ZAP scan; all security headers present and correctly configured.

6. **SEO**: All pages indexed correctly in Google Search Console; structured data validates without errors.

7. **Content**: All specified content present with correct spelling, grammar, and formatting.

---

# 2. Complete Site Map

## 2.1 Site Structure Overview

```
website-root/
│
├── [HOME] index.html
│   └── Anchor sections (not separate pages):
│       ├── #hero
│       ├── #about
│       ├── #sectors
│       └── #contact
│
├── [ABOUT] about.html
│   └── Sections:
│       ├── #hero
│       ├── #company-profile
│       ├── #vision-mission
│       ├── #why-choose-us
│       ├── #business-philosophy
│       ├── #global-markets
│       ├── #business-divisions
│       ├── #quality-hse-commitment
│       └── #corporate-governance
│
├── [SERVICES] services.html
│   └── Sections:
│       ├── #hero
│       ├── #introduction
│       ├── #service-philosophy
│       ├── #service-categories
│       │   ├── #oil-gas
│       │   ├── #procurement
│       │   ├── #defence
│       │   ├── #international-trade
│       │   ├── #infrastructure
│       │   ├── #project-development
│       │   ├── #agriculture
│       │   ├── #nutraceuticals
│       │   └── #strategic-advisory
│       ├── #industries-we-support
│       ├── #global-reach
│       ├── #why-work-with-us
│       └── #faq
│
├── [PRODUCTS] products.html
│   └── Sections:
│       ├── #hero
│       ├── #product-overview
│       ├── #product-categories (15 categories)
│       ├── #quality-assurance
│       ├── #global-sourcing-network
│       ├── #industries-served
│       ├── #why-choose-3rd-eye
│       └── #faq
│
├── [PROJECTS] projects.html
│   └── Sections:
│       ├── #hero
│       ├── #introduction
│       ├── #project-sectors (8 sectors)
│       ├── #project-lifecycle
│       ├── #global-markets
│       ├── #quality-hse-commitment
│       ├── #sustainability
│       ├── #why-clients-choose-us
│       └── #faq
│
├── [PARTNERS] partners.html
│   └── Sections:
│       ├── #hero
│       ├── #introduction
│       ├── #partner-categories (10 categories)
│       ├── #partnership-philosophy
│       ├── #vendor-qualification-process
│       ├── #ethical-business-practices
│       ├── #quality-compliance
│       ├── #global-network
│       ├── #become-a-partner
│       └── #faq
│
├── [CONTACT] contact.html
│   └── Sections:
│       ├── #hero
│       ├── #introduction
│       ├── #corporate-contact
│       ├── #contact-form-section
│       ├── #enquiry-types
│       └── #faq
│
├── [LEGAL]
│   ├── privacy-policy.html
│   └── terms.html
│
├── [ERROR]
│   └── 404.html
│
└── [SUPPORTING]
    ├── robots.txt
    ├── sitemap.xml
    └── security.txt
```

## 2.2 Navigation Hierarchy

| Level 1 | Level 2 | Level 3 | Type |
|----------|---------|---------|------|
| Home | - | - | Primary |
| About Us | - | - | Primary |
| Services | - | - | Primary |
| Products | - | - | Primary |
| Projects | - | - | Primary |
| Partners | - | - | Primary |
| Contact | - | - | Primary |
| Privacy Policy | - | - | Footer |
| Terms of Service | - | - | Footer |
| 404 Error | - | - | Error |

## 2.3 Internal Link Structure

### Primary Navigation Links
| From | To | URL |
|------|-----|-----|
| index.html (logo) | index.html | index.html |
| index.html (nav) | index.html#hero | #hero |
| index.html (nav) | about.html | about.html |
| index.html (nav) | services.html | services.html |
| index.html (nav) | products.html | products.html |
| index.html (nav) | projects.html | projects.html |
| index.html (nav) | partners.html | partners.html |
| index.html (nav) | contact.html | contact.html |
| about.html (logo) | index.html | index.html |
| about.html (nav) | index.html | index.html |
| about.html (nav) | about.html | about.html |
| about.html (nav) | services.html | services.html |
| about.html (nav) | products.html | products.html |
| about.html (nav) | projects.html | projects.html |
| about.html (nav) | partners.html | partners.html |
| about.html (nav) | contact.html | contact.html |
| [All pages] | privacy-policy.html | Footer link |
| [All pages] | terms.html | Footer link |

### Footer Quick Links
| Link | Destination |
|------|-------------|
| Home | index.html |
| About Us | about.html |
| Services | services.html |
| Products | products.html |
| Projects | projects.html |
| Partners | partners.html |
| Contact | contact.html |
| Privacy Policy | privacy-policy.html |
| Terms of Service | terms.html |

## 2.4 Future Expansion Pages

| Page | URL | Priority | Dependencies |
|------|-----|----------|--------------|
| Blog | blog.html | Medium | CMS integration |
| News | news.html | Medium | CMS integration |
| Careers | careers.html | High | Job application system |
| Investor Relations | investors.html | Medium | Financial content |
| Case Studies | case-studies.html | Medium | CMS integration |
| Knowledge Centre | resources.html | Low | Document management |
| Supplier Portal | suppliers.html | Medium | Authentication |
| Client Portal | clients.html | Low | Authentication |

---

# 3. Information Architecture

## 3.1 Homepage (index.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Establish brand identity, introduce company, drive primary conversions |
| **Target Audience** | First-time visitors, potential clients, investors, job seekers |
| **Primary CTA** | "Get in Touch" → Contact form |
| **Secondary CTA** | "Learn More About Us" → about.html |
| **SEO Objective** | Rank for brand terms and primary service keywords |
| **Expected Journey** | Arrive → Understand offering → View sectors → Contact |

## 3.2 About Page (about.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Build trust through company story, values, and credentials |
| **Target Audience** | Decision-makers evaluating company credibility |
| **Primary CTA** | "Partner with Us" → contact.html |
| **Secondary CTA** | "View Our Services" → services.html |
| **SEO Objective** | Rank for "about [company]" and corporate credibility terms |
| **Expected Journey** | Arrive → Read company story → View vision/mission → Evaluate credentials |

## 3.3 Services Page (services.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Demonstrate comprehensive service capabilities across all sectors |
| **Target Audience** | B2B clients, government procurement officers, EPC contractors |
| **Primary CTA** | "Enquire Now" → contact.html |
| **Secondary CTA** | "View Our Products" → products.html |
| **SEO Objective** | Rank for service-specific keywords and sector terms |
| **Expected Journey** | Arrive → Browse services → Select relevant → Enquire |

## 3.4 Products Page (products.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Showcase product portfolio and procurement capabilities |
| **Target Audience** | Procurement officers, technical buyers, EPC contractors |
| **Primary CTA** | "Get a Quote" → contact.html |
| **Secondary CTA** | "View Our Projects" → projects.html |
| **SEO Objective** | Rank for product category and equipment keywords |
| **Expected Journey** | Arrive → Browse products → Find relevant → Request quote |

## 3.5 Projects Page (projects.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Demonstrate project execution capability and international reach |
| **Target Audience** | Government agencies, large corporations, investors |
| **Primary CTA** | "Initiate a Project" → contact.html |
| **Secondary CTA** | "Become a Partner" → partners.html |
| **SEO Objective** | Rank for project development and international project terms |
| **Expected Journey** | Arrive → View project types → Assess capability → Initiate enquiry |

## 3.6 Partners Page (partners.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Establish credibility through partner network |
| **Target Audience** | Potential partners, manufacturers, technology providers |
| **Primary CTA** | "Enquire About Partnership" → contact.html |
| **Secondary CTA** | "View Our Global Reach" → about.html |
| **SEO Objective** | Rank for partnership and collaboration keywords |
| **Expected Journey** | Arrive → Understand partnership value → Enquire → Discuss |

## 3.7 Contact Page (contact.html)

| Attribute | Value |
|-----------|-------|
| **Purpose** | Facilitate business enquiries and partnership discussions |
| **Target Audience** | All visitor types with enquiry intent |
| **Primary CTA** | Submit contact form |
| **Secondary CTA** | Direct email enquiries |
| **SEO Objective** | Rank for contact and enquiry-related terms |
| **Expected Journey** | Arrive → Select enquiry type → Complete form → Submit |

## 3.8 Privacy Policy Page

| Attribute | Value |
|-----------|-------|
| **Purpose** | Legal compliance - inform users of data practices |
| **Target Audience** | Legal viewers, GDPR compliance officers |
| **Primary CTA** | None (informational only) |
| **Secondary CTA** | "Contact Us" → contact.html |
| **SEO Objective** | Required legal page, rank for policy terms |
| **Expected Journey** | Link from footer → Read policy → Return to main site |

## 3.9 Terms of Service Page

| Attribute | Value |
|-----------|-------|
| **Purpose** | Legal compliance - establish usage terms |
| **Target Audience** | Legal viewers, compliance officers |
| **Primary CTA** | None (informational only) |
| **Secondary CTA** | "Contact Us" → contact.html |
| **SEO Objective** | Required legal page |
| **Expected Journey** | Link from footer → Read terms → Return to main site |

## 3.10 404 Error Page

| Attribute | Value |
|-----------|-------|
| **Purpose** | Guide lost visitors back to useful content |
| **Target Audience** | Users encountering broken links or mistyped URLs |
| **Primary CTA** | "Return Home" → index.html |
| **Secondary CTA** | "Contact Us" → contact.html |
| **SEO Objective** | Prevent crawl errors, provide useful 404 response |
| **Expected Journey** | Encounter 404 → Return to useful page |

---

# 4. Complete Page Specifications

## 4.1 Homepage (index.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Type** | `<header class="site-header">` |
| **Content** | Logo (link to home), primary navigation |
| **Behavior** | Sticky on scroll |
| **States** | Default, scrolled (slight shadow increase) |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="hero-section home-hero">` |
| **Background** | Navy blue (#0A2E5C) with dark gradient overlay |
| **Background Image** | header-bg.jpg (optional, CSS fallback solid color) |
| **H1** | "3rd Eye Oilfield Supply & Services LLP" |
| **H1 Style** | White, Poppins 700, 56px desktop / 32px mobile |
| **Tagline** | "Global Procurement • Strategic Partnerships • Integrated Project Solutions" |
| **Tagline Style** | Off-white, Roboto 300, 1.8em |
| **Primary CTA** | Button "Get in Touch" → #contact |
| **Secondary CTA** | None |
| **Height** | Min 80vh, centered content |
| **Animation** | Fade in on load |

### Section 3: Company Introduction (#about)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="about-section">` |
| **Background** | Off-white (#F5F7FA) |
| **H2** | "About Us" |
| **Content** | 2-3 paragraphs introducing the company |
| **Content Style** | Roboto 400, 16px, max-width 800px centered |
| **CTA** | Text link "Read More About Us" → about.html |

### Section 4: Business Sectors Grid (#sectors)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="sectors-section">` |
| **Background** | White (#FFFFFF) |
| **H2** | "Our Business Sectors" |
| **Grid** | 4-column on desktop, 2-column tablet, 1-column mobile |
| **Cards** | 8 sector cards (see Component Library) |
| **Sectors** | Oil & Gas, Defence & Security, International Trade, Infrastructure, Agriculture, Nutraceuticals, Procurement & Supply Chain, Project Development |

### Section 5: Statistics (OPTIONAL - not in current)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="stats-section">` |
| **Background** | Navy blue (#0A2E5C) |
| **Content** | 4-6 key statistics (years experience, countries served, etc.) |
| **Style** | Large numbers, white text |

### Section 6: Contact CTA (#contact)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="contact-section">` |
| **Background** | Off-white (#F5F7FA) |
| **H2** | "Contact Us" |
| **Content** | Brief compelling message about partnership |
| **Form** | Simplified contact form (see Forms) |
| **CTA** | "Send Message" button |

### Section 7: Footer
| Element | Specification |
|---------|---------------|
| **Type** | `<footer class="site-footer">` |
| **Background** | Navy blue (#0A2E5C) |
| **Content** | Copyright, navigation links, contact summary |
| **See** | Footer Specification section |

---

## 4.2 About Page (about.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Type** | `<header class="site-header">` |
| **Content** | Standard navigation |
| **Active State** | "About Us" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="hero-section about-hero">` |
| **H1** | "About 3rd Eye Oilfield Supply & Services LLP" |
| **Tagline** | "Our Vision, Mission, and Commitment to Excellence" |

### Section 3: Company Profile (#company-profile)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="about-section">` |
| **Background** | Off-white |
| **H2** | "Company Profile" |
| **Content** | 2 paragraphs detailing company history and positioning |
| **Max Width** | 900px centered |

### Section 4: Vision & Mission (#vision-mission)
| Element | Specification |
|---------|---------------|
| **Type** | `<section>` with 2-column grid |
| **Background** | White |
| **Layout** | 2 cards side-by-side |
| **Card 1** | "Vision" with vision statement |
| **Card 2** | "Mission" with mission statement |

### Section 5: Why Choose Us (#why-choose-us)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="about-section">` |
| **Background** | Off-white |
| **H2** | "Why Choose Us?" |
| **Content** | Bullet list of 6 differentiators |
| **Format** | `<ul>` with styled `<li>` elements |

### Section 6: Business Philosophy (#business-philosophy)
| Element | Specification |
|---------|---------------|
| **Type** | `<section>` |
| **Background** | White |
| **H2** | "Our Business Philosophy" |
| **Content** | 1-2 paragraphs |

### Section 7: Global Markets (#global-markets)
| Element | Specification |
|---------|---------------|
| **Type** | `<section>` |
| **Background** | Off-white |
| **H2** | "Global Markets Served" |
| **Content** | 2 paragraphs on international presence |

### Section 8: Business Divisions (#business-divisions)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="bg-light-gray">` |
| **Background** | Off-white |
| **H2** | "Our Business Divisions" |
| **Grid** | Same 8-card grid as homepage sectors |

### Section 9: Quality & HSE Commitment (#quality-hse-commitment)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="about-section">` |
| **Background** | White |
| **Layout** | 2-column grid |
| **Card 1** | Quality Commitment statement |
| **Card 2** | HSE Commitment statement |

### Section 10: Corporate Governance (#corporate-governance)
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="bg-light-gray">` |
| **Background** | Off-white |
| **H2** | "Corporate Governance" |
| **Content** | 1-2 paragraphs |

### Section 11: CTA Section
| Element | Specification |
|---------|---------------|
| **Type** | `<section class="cta-section">` |
| **Background** | Navy blue |
| **H2** | "Partner with a Global Leader" |
| **Content** | Compelling partnership message |
| **CTA** | Button "Contact Us Today" → contact.html |

### Section 12: Footer
| Element | Specification |
|---------|---------------|
| **Type** | `<footer class="site-footer">` |
| **Standard footer content** |

---

## 4.3 Services Page (services.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Active State** | "Services" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **H1** | "Our Comprehensive Services" |
| **Tagline** | "Delivering Excellence Across Diverse Industries" |

### Section 3: Introduction (#introduction)
| Element | Specification |
|---------|---------------|
| **H2** | "Introduction to Our Services" |
| **Content** | 2 paragraphs on service approach |

### Section 4: Service Philosophy (#service-philosophy)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Our Service Philosophy" |
| **Content** | 1 paragraph |

### Section 5: Service Categories (#service-categories)
| Element | Specification |
|---------|---------------|
| **H2** | "Our Service Categories" |
| **Categories** | 9 detailed service sections |
| **Layout** | Each service: numbered heading + 2-column content |
| **Alternating Backgrounds** | White, Off-white |

#### Service Category Structure (Each):
| Element | Specification |
|---------|---------------|
| **Heading** | H3 with number prefix (e.g., "1. Oil & Gas Supply & Services") |
| **Column 1** | Overview, Key Capabilities (bulleted list) |
| **Column 2** | Industries Served, Benefits (bulleted list) |

### Section 6: Industries We Support (#industries-we-support)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Industries We Support" |
| **Grid** | 8-card sector grid |

### Section 7: Global Reach (#global-reach)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Global Reach" |
| **Content** | 2 paragraphs |

### Section 8: Why Work With Us (#why-work-with-us)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Why Work With Us?" |
| **Content** | 6 bullet points |

### Section 9: FAQ (#faq)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Frequently Asked Questions" |
| **Content** | 4 FAQ items (accordion style) |

### Section 10: CTA Section
| Element | Specification |
|---------|---------------|
| **H2** | "Let's Power Your Next Endeavor" |
| **CTA** | "Enquire Now" → contact.html |

---

## 4.4 Products Page (products.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Active State** | "Products" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **H1** | "Our Premium Products" |
| **Tagline** | "Global Sourcing, Uncompromising Quality" |

### Section 3: Product Overview (#product-overview)
| Element | Specification |
|---------|---------------|
| **H2** | "Product Overview" |
| **Content** | 2 paragraphs on product quality and sourcing |

### Section 4: Product Categories (#product-categories)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Product Categories" |
| **Categories** | 16 detailed product sections |
| **Structure** | Same as services (numbered heading + 2 columns) |

#### Product Categories:
1. Oilfield Equipment
2. Drilling Equipment
3. Pipes, Valves & Fittings
4. Industrial Equipment
5. Mechanical Equipment
6. Electrical Equipment
7. Instrumentation
8. Safety Equipment & PPE
9. Defence & Security Products
10. Infrastructure Products
11. Agricultural Equipment
12. Nutraceuticals
13. Healthcare Products
14. Chemicals
15. Project Procurement Packages

### Section 5: Quality Assurance (#quality-assurance)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Quality Assurance" |
| **Content** | 2 paragraphs |

### Section 6: Global Sourcing Network (#global-sourcing-network)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Global Sourcing Network" |
| **Content** | 2 paragraphs |

### Section 7: Industries We Serve (#industries-served)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Industries We Serve" |
| **Grid** | 8-card sector grid |

### Section 8: Why Choose 3rd Eye (#why-choose-3rd-eye)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Why Choose 3rd Eye for Your Products?" |
| **Content** | 6 bullet points |

### Section 9: CTA Section
| Element | Specification |
|---------|---------------|
| **H2** | "Your Global Partner for Premium Products" |
| **CTA** | "Get a Quote" → contact.html |

---

## 4.5 Projects Page (projects.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Active State** | "Projects" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **H1** | "International Projects" |
| **Tagline** | "International Project Development • Strategic Procurement • Integrated Solutions" |

### Section 3: Introduction (#introduction)
| Element | Specification |
|---------|---------------|
| **H2** | "Our Project Expertise" |
| **Content** | 2 paragraphs on project development approach |

### Section 4: Project Sectors (#project-sectors)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Our Project Sectors" |
| **Categories** | 8 detailed project types |

#### Project Sectors:
1. Oil & Gas Projects
2. Defence & Security Projects
3. Infrastructure Projects
4. Industrial Projects
5. Agriculture & Agribusiness Projects
6. Nutraceutical & Healthcare Projects
7. International Procurement Projects
8. Government Supply Projects

### Section 5: Project Lifecycle (#project-lifecycle)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Our Project Lifecycle Approach" |
| **Content** | 2 paragraphs on project management process |

### Section 6: Global Markets (#global-markets)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Global Markets" |
| **Content** | 2 paragraphs on geographic coverage |

### Section 7: Quality & HSE (#quality-hse-commitment)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **Layout** | 2-column grid |
| **Content** | Quality and HSE commitment statements |

### Section 8: Sustainability (#sustainability)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Commitment to Sustainability" |
| **Content** | 1 paragraph |

### Section 9: Why Clients Choose Us (#why-clients-choose-us)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Why Clients Choose 3rd Eye for Projects" |
| **Content** | 6 bullet points |

### Section 10: CTA Section
| Element | Specification |
|---------|---------------|
| **H2** | "Partner with Us for Your Next Major Project" |
| **CTA** | "Initiate a Project" → contact.html |

---

## 4.6 Partners Page (partners.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Active State** | "Partners" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **H1** | "Strategic Partners" |
| **Tagline** | "Building Trusted Global Partnerships" |

### Section 3: Introduction (#introduction)
| Element | Specification |
|---------|---------------|
| **H2** | "Our Collaborative Network" |
| **Content** | 2 paragraphs on partnership approach |

### Section 4: Partner Categories (#partner-categories)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Our Partner Categories" |
| **Categories** | 10 detailed partner types |

#### Partner Categories:
1. Global Manufacturers
2. Oil & Gas Technology Partners
3. Defence & Security Partners
4. Infrastructure & EPC Contractors
5. Logistics & Shipping Partners
6. Agricultural Partners
7. Financial & Investment Partners
8. Government & Institutional Partnerships

### Section 5: Partnership Philosophy (#partnership-philosophy)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Our Partnership Philosophy" |
| **Content** | 1 paragraph |

### Section 6: Vendor Qualification (#vendor-qualification-process)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Vendor Qualification Process" |
| **Content** | 1 paragraph |

### Section 7: Ethical Business Practices (#ethical-business-practices)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Ethical Business Practices" |
| **Content** | 1 paragraph |

### Section 8: Quality & Compliance (#quality-compliance)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Quality & Compliance" |
| **Content** | 1 paragraph |

### Section 9: Global Network (#global-network)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Our Global Network" |
| **Content** | 1 paragraph |

### Section 10: Become a Partner (#become-a-partner)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Become a Strategic Partner" |
| **Content** | Partnership invitation text |
| **CTA** | "Enquire About Partnership" → contact.html |

### Section 11: FAQ
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Frequently Asked Questions About Partnerships" |
| **Content** | 4 FAQ items |

### Section 12: CTA Section
| Element | Specification |
|---------|---------------|
| **H2** | "Let's Build the Future Together" |
| **CTA** | "Contact Our Partnership Team" → contact.html |

---

## 4.7 Contact Page (contact.html)

### Section 1: Header
| Element | Specification |
|---------|---------------|
| **Active State** | "Contact" highlighted |

### Section 2: Hero Banner (#hero)
| Element | Specification |
|---------|---------------|
| **H1** | "Contact Us" |
| **Tagline** | "Let's Build Long-Term Business Partnerships" |

### Section 3: Introduction (#introduction)
| Element | Specification |
|---------|---------------|
| **H2** | "Reach Out to 3rd Eye Oilfield Supply & Services LLP" |
| **Content** | 1 paragraph on invitation to connect |

### Section 4: Corporate Contact (#corporate-contact)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Corporate Contact Information" |
| **Content** | Email: hello@3rd-eye.in |
| **Display** | Formatted contact card |

### Section 5: Contact Form (#contact-form-section)
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Send Us a Message" |
| **Form Fields** | See Contact Form specification |

### Section 6: Specific Enquiries (#enquiry-types)
| Element | Specification |
|---------|---------------|
| **Background** | Off-white |
| **H2** | "Specific Enquiries" |
| **Layout** | 2x2 grid of enquiry type cards |

#### Enquiry Type Cards:
| Card | Email |
|------|-------|
| Global Business Enquiries | global@3rdeyeoilfield.com |
| Procurement Enquiries | procurement@3rdeyeoilfield.com |
| Partnership Enquiries | partners@3rdeyeoilfield.com |
| Careers Enquiries | careers@3rdeyeoilfield.com |

### Section 7: FAQ
| Element | Specification |
|---------|---------------|
| **Background** | White |
| **H2** | "Frequently Asked Questions" |
| **Content** | 3 FAQ items |

### Section 8: CTA Section
| Element | Specification |
|---------|---------------|
| **H2** | "Ready to Connect?" |
| **CTA** | "Send a Message" (scrolls to form) |

---

## 4.8 Privacy Policy Page (privacy-policy.html)

### Structure
| Element | Specification |
|---------|---------------|
| **Template** | Standard page template with hero |
| **H1** | "Privacy Policy" |
| **Content** | Standard privacy policy sections |

### Required Sections
1. Introduction
2. Information We Collect
3. How We Use Your Information
4. Information Sharing
5. Data Security
6. Your Rights
7. Cookies
8. Changes to This Policy
9. Contact Information

---

## 4.9 Terms of Service Page (terms.html)

### Structure
| Element | Specification |
|---------|---------------|
| **Template** | Standard page template with hero |
| **H1** | "Terms of Service" |
| **Content** | Standard terms sections |

### Required Sections
1. Acceptance of Terms
2. Use of the Website
3. Intellectual Property
4. User Content
5. Disclaimer
6. Limitation of Liability
7. Governing Law
8. Changes to Terms
9. Contact Information

---

## 4.10 404 Error Page (404.html)

### Structure
| Element | Specification |
|---------|---------------|
| **Template** | Standard template with simplified hero |
| **H1** | "404 - Page Not Found" |
| **Content** | "The page you are looking for could not be found." |
| **CTA** | Button "Return Home" → index.html |

---

# 5. Navigation Specification

## 5.1 Desktop Navigation

### Structure
```
┌─────────────────────────────────────────────────────────────────┐
│ [LOGO: 3rd Eye Oilfield Supply & Services LLP]                 │
│                                                                 │
│ Home  |  About Us  |  Services  |  Products  |  Projects  |  Partners  |  Contact │
└─────────────────────────────────────────────────────────────────┘
```

### Technical Specifications
| Attribute | Value |
|-----------|-------|
| **Container** | `<nav class="main-nav" aria-label="Primary navigation">` |
| **Logo** | First element, links to index.html |
| **Links** | `<ul class="nav-links">` with `<li>` items |
| **Position** | Logo left, links right (flexbox) |
| **Gap** | 30px between links |
| **Height** | Auto (content-based) |
| **Sticky** | Yes, position: sticky, top: 0 |

### States

| State | Visual Treatment |
|-------|-----------------|
| **Default** | White text, no underline |
| **Hover** | Saffron (#D97706) text, saffron underline animates from left |
| **Focus** | 3px saffron outline, 3px offset |
| **Active (current page)** | Saffron text, full saffron underline |

### Scroll Behavior
| Behavior | Specification |
|----------|---------------|
| **Initial** | Normal position |
| **Scrolled** | Sticky at top, slight shadow increase |
| **Shadow** | `box-shadow: 0 2px 10px rgba(0,0,0,0.1)` |

## 5.2 Mobile Navigation

### Structure
```
┌─────────────────────────────────────────────────────────────────┐
│ [LOGO]                                        [☰ HAMBURGER]    │
└─────────────────────────────────────────────────────────────────┘
│ ┌─────────────────────────────────────────────────────────────┐  │
│ │ Home                                                          │  │
│ │ About Us                                                      │  │
│ │ Services                                                      │  │
│ │ Products                                                      │  │
│ │ Projects                                                      │  │
│ │ Partners                                                      │  │
│ │ Contact                                                       │  │
│ └─────────────────────────────────────────────────────────────┘  │
```

### Technical Specifications
| Attribute | Value |
|-----------|-------|
| **Breakpoint** | Below 768px |
| **Hamburger Button** | `button.nav-toggle`, 44x44px touch target |
| **Icon** | Three horizontal lines, Unicode or SVG |
| **Menu** | Full-width dropdown, navy background |
| **Animation** | Slide down, 0.3s ease |
| **Close** | Click hamburger again, or click link |

### Touch Targets
| Element | Size | Requirement |
|---------|------|-------------|
| Hamburger button | 44x44px minimum | WCAG 2.1 AA |
| Menu items | Full width, 44px height minimum | WCAG 2.1 AA |

## 5.3 Sticky Header Behavior

| Aspect | Specification |
|--------|---------------|
| **Position** | `position: sticky; top: 0;` |
| **z-index** | 1000 |
| **Background** | Navy blue (#0A2E5C), solid |
| **Shadow on scroll** | Increases from subtle to medium |

## 5.4 Active Page Indicators

| Page | URL Match | Indicator |
|------|-----------|-----------|
| Home | index.html, #hero | `aria-current="page"`, saffron color |
| About | about.html | `aria-current="page"` |
| Services | services.html | `aria-current="page"` |
| Products | products.html | `aria-current="page"` |
| Projects | projects.html | `aria-current="page"` |
| Partners | partners.html | `aria-current="page"` |
| Contact | contact.html | `aria-current="page"` |

## 5.5 Skip Navigation

| Element | Specification |
|---------|---------------|
| **Link** | `<a href="#main-content" class="skip-link">Skip to main content</a>` |
| **Position (default)** | `left: 20px; top: -60px;` |
| **Position (focused)** | `top: 20px;` |
| **Trigger** | Tab key press |
| **Visual** | Navy button with white text |

---

# 6. Footer Specification

## 6.1 Footer Structure

```
┌─────────────────────────────────────────────────────────────────┐
│                      QUICK LINKS                                   │
│  Home | About Us | Services | Products | Projects | Partners |      │
│  Contact | Privacy Policy | Terms of Service                     │
├─────────────────────────────────────────────────────────────────┤
│                      SERVICES                                     │
│  Oil & Gas | Defence & Security | International Trade |           │
│  Infrastructure | Agriculture | Procurement                        │
├─────────────────────────────────────────────────────────────────┤
│                      CONTACT                                      │
│  Email: hello@3rd-eye.in                                         │
├─────────────────────────────────────────────────────────────────┤
│                      COPYRIGHT                                    │
│  © 2026 3rd Eye Oilfield Supply & Services LLP.                  │
│  All rights reserved.                                            │
└─────────────────────────────────────────────────────────────────┘
```

## 6.2 Footer Columns

### Column 1: Quick Links
| Link | Destination |
|------|-------------|
| Home | index.html |
| About Us | about.html |
| Services | services.html |
| Products | products.html |
| Projects | projects.html |
| Partners | partners.html |
| Contact | contact.html |

### Column 2: Services (Summary)
| Link | Destination |
|------|-------------|
| Oil & Gas | services.html#oil-gas |
| Defence & Security | services.html#defence |
| International Trade | services.html#trade |
| Infrastructure | services.html#infrastructure |
| Agriculture | services.html#agriculture |
| Procurement | services.html#procurement |

### Column 3: Legal & Other
| Link | Destination |
|------|-------------|
| Privacy Policy | privacy-policy.html |
| Terms of Service | terms.html |

## 6.3 Contact Information
| Element | Value |
|---------|-------|
| **Email Label** | "Email:" |
| **Email Address** | hello@3rd-eye.in |
| **Display** | Link, opens mail client |

## 6.4 Social Media Links
| Network | URL | Icon |
|---------|-----|------|
| LinkedIn | https://www.linkedin.com/company/3rd-eye-oilfield | Optional |
| Twitter | https://twitter.com/3rdeyeoilfield | Optional |

## 6.5 Copyright
| Element | Value |
|---------|-------|
| **Text** | "© 2026 3rd Eye Oilfield Supply & Services LLP. All rights reserved." |
| **Year** | Dynamic (JavaScript) or static with annual update |

## 6.6 Footer Technical Specs
| Attribute | Value |
|-----------|-------|
| **Background** | Navy blue (#0A2E5C) |
| **Text Color** | White (#FFFFFF) |
| **Link Color** | White, hover: saffron |
| **Padding** | 30px top/bottom |
| **Font** | Roboto 400, 0.9rem |
| **Layout** | 3-column grid on desktop, stacked on mobile |

---

# 7. Component Library

## 7.1 Buttons

### Primary Button
| State | Background | Text | Border | Transform |
|-------|------------|------|--------|-----------|
| Default | #0A2E5C | #FFFFFF | none | none |
| Hover | #D97706 | #FFFFFF | none | translateY(-2px) |
| Focus | #0A2E5C | #FFFFFF | 3px saffron outline | none |
| Active | #0A2E5C | #FFFFFF | none | translateY(0) |
| Disabled | #9CA3AF | #FFFFFF | none | none |

### Secondary Button
| State | Background | Text |
|-------|------------|------|
| Default | #D97706 | #FFFFFF |
| Hover | #138808 | #FFFFFF |

### Button Specifications
| Attribute | Value |
|-----------|-------|
| **Font** | Poppins 600 |
| **Size** | 14px |
| **Text Transform** | uppercase |
| **Letter Spacing** | 0.05em |
| **Padding** | 12px 25px |
| **Border Radius** | 5px |
| **Cursor** | pointer |
| **Transition** | background-color 0.3s, transform 0.3s |

### Button HTML
```html
<a href="[url]" class="btn btn--primary">Button Text</a>
<button type="submit" class="btn btn--primary">Submit</button>
```

## 7.2 Cards

### Sector Card
| Attribute | Value |
|-----------|-------|
| **Background** | White (#FFFFFF) |
| **Padding** | 30px |
| **Border Radius** | 8px |
| **Border Top** | 5px solid saffron |
| **Shadow** | 0 5px 15px rgba(0,0,0,0.08) |
| **Title** | H3, navy, centered |
| **Hover Border** | Green (#138808) |
| **Hover Shadow** | 0 8px 25px rgba(0,0,0,0.15) |
| **Hover Transform** | translateY(-8px) |

### Service/Product Category Card
| Attribute | Value |
|-----------|-------|
| **Background** | Alternating white/off-white |
| **Layout** | 2-column grid inside card |
| **Heading** | H3 with number prefix |

### Partner Card
| Attribute | Value |
|-----------|-------|
| **Layout** | 2-column grid |
| **Background** | Alternating white/off-white |

## 7.3 Hero Sections

### Standard Hero
| Attribute | Value |
|-----------|-------|
| **Background** | Linear gradient rgba(10,46,92,0.85) + header-bg.jpg |
| **Background Size** | Cover |
| **Background Position** | Center center |
| **Min Height** | 80vh |
| **Padding** | 150px 20px |
| **Content Alignment** | Center |
| **Content Max Width** | 900px |

### Hero H1
| Attribute | Value |
|-----------|-------|
| **Color** | White |
| **Font** | Poppins 700 |
| **Size** | 3.5rem desktop / 2rem mobile |
| **Line Height** | 1.1 |
| **Letter Spacing** | -0.02em |
| **Margin Bottom** | 1rem |
| **Text Shadow** | 2px 2px 4px rgba(0,0,0,0.3) |

### Hero Tagline
| Attribute | Value |
|-----------|-------|
| **Element** | `<p class="tagline">` |
| **Font** | Roboto 300 |
| **Size** | 1.8rem desktop / 1.2rem mobile |
| **Color** | Off-white (#F5F7FA) |
| **Margin Bottom** | 40px |

## 7.4 Feature Blocks

### Two-Column Feature
| Attribute | Value |
|-----------|-------|
| **Layout** | CSS Grid, 2 columns |
| **Gap** | 40px |
| **Responsive** | Stack on mobile |

### Feature with Icon (Future)
| Attribute | Value |
|-----------|-------|
| **Icon Size** | 48x48px |
| **Icon Position** | Above heading |
| **Heading** | H4 |
| **Description** | Paragraph |

## 7.5 Statistics Counter (Future Enhancement)
| Attribute | Value |
|-----------|-------|
| **Layout** | 4-column grid |
| **Number** | Poppins 700, 3rem |
| **Label** | Roboto 400, 1rem |
| **Color** | White (on dark background) |

## 7.6 Forms

### Input Fields
| Attribute | Value |
|-----------|-------|
| **Width** | 100% |
| **Padding** | 15px |
| **Border** | 1px solid #F5F7FA |
| **Border Radius** | 5px |
| **Font** | Roboto 400, 1rem |
| **Focus Border** | Saffron (#D97706) |
| **Focus Shadow** | 0 0 0 3px rgba(217,119,6,0.1) |

### Labels
| Attribute | Value |
|-----------|-------|
| **Font** | Roboto 500, 0.875rem |
| **Color** | Dark text (#1F2937) |
| **Margin Bottom** | 8px |
| **Display** | Block |

### Form Layout
| Attribute | Value |
|-----------|-------|
| **Max Width** | 600px |
| **Margin** | 40px auto 0 |
| **Padding** | 30px |
| **Background** | White |
| **Border Radius** | 8px |
| **Shadow** | 0 5px 15px rgba(0,0,0,0.08) |
| **Gap** | 20px between fields |

### Contact Form Fields
| Field | Type | Required | Validation |
|-------|------|----------|------------|
| Name | text | Yes | min 2 chars |
| Company | text | No | - |
| Country | text | No | - |
| Email | email | Yes | valid email |
| Telephone | tel | No | - |
| Subject | text | Yes | min 3 chars |
| Service | select | No | dropdown |
| Message | textarea | Yes | min 20 chars |
| Privacy Consent | checkbox | Yes | must check |

## 7.7 Tables (Not Currently Used)
| Attribute | Value |
|-----------|-------|
| **Width** | 100% |
| **Border Collapse** | Collapse |
| **Border** | 1px solid #E5E7EB |
| **Header Background** | Navy |
| **Header Text** | White |
| **Cell Padding** | 12px 16px |

## 7.8 Accordions (FAQ)

### Structure
```html
<div class="faq-item">
    <button class="faq-question" aria-expanded="false">
        Question text
        <span class="faq-icon">+</span>
    </button>
    <div class="faq-answer" hidden>
        Answer content
    </div>
</div>
```

### States
| State | Icon | Action |
|-------|------|--------|
| Closed | + | Expand on click |
| Open | − | Collapse on click |

## 7.9 Breadcrumbs

### Structure
```html
<nav aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li aria-current="page">Current Page</li>
    </ol>
</nav>
```

### Styling
| Attribute | Value |
|-----------|-------|
| **Separator** | "/" or ">" |
| **Current Item** | No link, different color |
| **Font** | Roboto 400, 0.875rem |

## 7.10 Back-to-Top Button

| Attribute | Value |
|-----------|-------|
| **Position** | Fixed, bottom-right |
| **Initial State** | Hidden (opacity 0) |
| **Visible State** | After 300px scroll |
| **Show Trigger** | opacity 1 |
| **Icon** | ↑ Unicode |
| **Size** | 44x44px |
| **Background** | Navy |
| **Text Color** | White |
| **Border Radius** | 50% |
| **Transition** | opacity 0.3s ease |

## 7.11 Alerts/Messages

### Success Message
| Attribute | Value |
|-----------|-------|
| **Background** | #d4edda |
| **Border** | 1px solid #28a745 |
| **Color** | #155724 |
| **Padding** | 15px |
| **Border Radius** | 5px |

### Error Message
| Attribute | Value |
|-----------|-------|
| **Background** | #f8d7da |
| **Border** | 1px solid #dc3545 |
| **Color** | #721c24 |
| **Padding** | 15px |
| **Border Radius** | 5px |

## 7.12 Badge/Tag

| Attribute | Value |
|-----------|-------|
| **Background** | Saffron |
| **Text Color** | White |
| **Font** | Poppins 600, 0.75rem |
| **Padding** | 4px 12px |
| **Border Radius** | 20px |
| **Text Transform** | uppercase |

---

# 8. Content Specification

## 8.1 Homepage Content

### Hero Section
| Element | Content |
|---------|---------|
| **H1** | "3rd Eye Oilfield Supply & Services LLP" |
| **Tagline** | "Global Procurement • Strategic Partnerships • Integrated Project Solutions" |

### About Section
| Element | Content |
|---------|---------|
| **H2** | "About Us" |
| **Paragraph 1** | Company introduction - global corporate entity, diverse sectors |
| **Paragraph 2** | Commitment to excellence, strategic partnerships, professional approach |

### Sectors Grid
| Card | Title |
|------|-------|
| 1 | Oil & Gas |
| 2 | Defence & Security |
| 3 | International Trade |
| 4 | Infrastructure |
| 5 | Agriculture |
| 6 | Nutraceuticals |
| 7 | Procurement & Supply Chain |
| 8 | Project Development |

### Contact Section
| Element | Content |
|---------|---------|
| **H2** | "Contact Us" |
| **Intro** | Partnership invitation message |
| **Form Fields** | Name, Email, Message |
| **Button** | "Send Message" |

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "3rd Eye Oilfield Supply & Services LLP | Global Procurement & Project Solutions" |
| **Description** | "3rd Eye Oilfield Supply & Services LLP - Global Procurement, Strategic Partnerships, Integrated Project Solutions. Providing services in Oil & Gas, Defence & Security, International Trade, Infrastructure, Agriculture, Nutraceuticals, Procurement & Supply Chain, and Project Development." |
| **Keywords** | "Oil & Gas, Defence & Security, International Trade, Infrastructure, Agriculture, Nutraceuticals, Procurement & Supply Chain, Project Development, Global Procurement, Strategic Partnerships, Integrated Project Solutions, India, Corporate, International" |

---

## 8.2 About Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "About Us - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Learn more about 3rd Eye Oilfield Supply & Services LLP - our company profile, vision, mission, core values, business philosophy, global markets, and commitment to quality and HSE." |
| **Keywords** | "3rd Eye Oilfield Supply & Services LLP, company profile, chairman's message, vision, mission, core values, business philosophy, global markets, business divisions, quality commitment, HSE commitment, corporate governance" |

### Section Headings & Content

| Section | H2 | Content Type |
|---------|-----|--------------|
| Company Profile | "Company Profile" | 2 paragraphs |
| Vision | "Vision" | 1 paragraph |
| Mission | "Mission" | 1 paragraph |
| Why Choose Us | "Why Choose Us?" | 6 bullet points |
| Business Philosophy | "Our Business Philosophy" | 1 paragraph |
| Global Markets | "Global Markets Served" | 2 paragraphs |
| Divisions | "Our Business Divisions" | 8 cards |
| Quality | "Quality Commitment" | 1 paragraph |
| HSE | "HSE Commitment" | 1 paragraph |
| Governance | "Corporate Governance" | 1 paragraph |

---

## 8.3 Services Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "Our Services - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Explore the comprehensive services offered by 3rd Eye Oilfield Supply & Services LLP, including Oil & Gas, Procurement, Defence, International Trade, Infrastructure, Project Development, and more." |

### Service Categories (9)

| # | Service | Overview | Key Capabilities | Industries | Benefits |
|---|---------|----------|------------------|------------|----------|
| 1 | Oil & Gas Supply & Services | Comprehensive supply chain for upstream, midstream, downstream | Equipment procurement, drilling support, logistics, maintenance | NOCs, IOCs, service providers | Efficiency, reduced downtime |
| 2 | Procurement & Supply Chain | End-to-end procurement management | Global sourcing, logistics, inventory, compliance | All sectors, government | Cost savings, risk mitigation |
| 3 | Defence & Security Products | Advanced defence and security solutions | Surveillance, protective gear, tactical comms, training | Military, police, homeland security | Enhanced readiness |
| 4 | International Trade | Cross-border trade facilitation | Trade compliance, documentation, finance solutions | Importers, exporters | Seamless transactions |
| 5 | Infrastructure | Large-scale infrastructure development | Project management, material sourcing, planning support | Government, construction | Turnkey solutions |
| 6 | Project Development | International project development | Feasibility, EPC support, commissioning | All sectors | End-to-end delivery |
| 7 | Agriculture & Agribusiness | Agricultural solutions and food security | Farming tech, processing, sustainable practices | Farmers, cooperatives, government | Increased yield |
| 8 | Nutraceuticals & Healthcare | Health and wellness products | Global sourcing, regulatory compliance, distribution | Pharma, healthcare, retail | Premium products |
| 9 | Strategic Business Advisory | Expert consulting services | Market research, strategy, risk management | Start-ups, enterprises, government | Informed decisions |

---

## 8.4 Products Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "Our Products - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Explore the diverse range of premium products offered by 3rd Eye Oilfield Supply & Services LLP, including Oilfield Equipment, Defence & Security Products, Infrastructure Products, Nutraceuticals, and more." |

### Product Categories (15)

| # | Category | Overview | Applications |
|---|---------|----------|--------------|
| 1 | Oilfield Equipment | Equipment for exploration, drilling, production | Onshore/offshore drilling, pipelines |
| 2 | Drilling Equipment | Rigs, bits, downhole tools | Exploratory, production, workover |
| 3 | Pipes, Valves & Fittings | Industrial piping components | Oil, gas, chemical, water |
| 4 | Industrial Equipment | Heavy machinery | Manufacturing, mining, construction |
| 5 | Mechanical Equipment | Pumps, compressors, turbines | Power, petrochemical, marine |
| 6 | Electrical Equipment | Electrical systems and components | Power generation, industrial |
| 7 | Instrumentation | Measurement and control devices | Process control, automation |
| 8 | Safety Equipment & PPE | Personal protective equipment | Industrial, oil & gas, construction |
| 9 | Defence & Security Products | Defence equipment and systems | Military, law enforcement |
| 10 | Infrastructure Products | Construction and infrastructure materials | Roads, bridges, utilities |
| 11 | Agricultural Equipment | Farming machinery and tools | Cultivation, harvesting |
| 12 | Nutraceuticals | Health supplements | Healthcare, wellness |
| 13 | Healthcare Products | Medical supplies and equipment | Hospitals, clinics |
| 14 | Chemicals | Industrial and specialty chemicals | Refining, manufacturing, agriculture |
| 15 | Project Procurement Packages | Consolidated project packages | EPC projects |

---

## 8.5 Projects Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "Projects - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Explore international project development, strategic procurement, and integrated solutions by 3rd Eye Oilfield Supply & Services LLP across Oil & Gas, Defence, Infrastructure, and more." |

### Project Sectors (8)

| # | Sector | Overview | Scope |
|---|---------|----------|-------|
| 1 | Oil & Gas Projects | Upstream, midstream, downstream development | Feasibility, EPC support, procurement |
| 2 | Defence & Security Projects | Security infrastructure and technology | Surveillance, training facilities |
| 3 | Infrastructure Projects | Large-scale infrastructure | Transportation, energy, urban development |
| 4 | Industrial Projects | Manufacturing and facility projects | Setup, upgrades, optimization |
| 5 | Agriculture Projects | Agricultural development | Farming, processing, storage |
| 6 | Nutraceutical Projects | Health product initiatives | Formulation, production |
| 7 | International Procurement | Government and institutional sourcing | Bulk supply, compliance |
| 8 | Government Supply | Public sector procurement | Equipment, materials, services |

---

## 8.6 Partners Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "Strategic Partners - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Discover 3rd Eye Oilfield Supply & Services LLP's strategic global partnerships with manufacturers, EPC contractors, technology providers, governments, and investors." |

### Partner Categories (10)

| # | Category | Focus |
|---|---------|-------|
| 1 | Global Manufacturers | Equipment, components, raw materials |
| 2 | Oil & Gas Technology | Drilling, production, refining tech |
| 3 | Defence & Security | Surveillance, protective equipment |
| 4 | Infrastructure & EPC | Construction, engineering |
| 5 | Logistics & Shipping | Transportation, freight |
| 6 | Agricultural | Farming, food production |
| 7 | Financial & Investment | Funding, investment opportunities |
| 8 | Government & Institutional | Public sector, state enterprises |

---

## 8.7 Contact Page Content

### Meta Tags
| Tag | Content |
|-----|---------|
| **Title** | "Contact Us - 3rd Eye Oilfield Supply & Services LLP" |
| **Description** | "Contact 3rd Eye Oilfield Supply & Services LLP for global procurement, project development, strategic partnerships, and business opportunities." |

### Enquiry Types

| Type | Email | Audience |
|------|-------|----------|
| Global Business Enquiries | global@3rdeyeoilfield.com | International collaborations |
| Procurement Enquiries | procurement@3rdeyeoilfield.com | Product sourcing |
| Partnership Enquiries | partners@3rdeyeoilfield.com | Partner opportunities |
| Careers Enquiries | careers@3rdeyeoilfield.com | Job seekers |

---

# 9. Image Specification

## 9.1 Logo

| Attribute | Value |
|-----------|-------|
| **Purpose** | Brand identification |
| **Location** | Header, footer, favicon |
| **Format** | PNG with transparency |
| **Dimensions** | 150px × 50px display, vector source |
| **Max File Size** | 10KB |
| **Alt Text** | "3rd Eye Oilfield Supply & Services LLP Logo" |
| **Priority** | High (preload) |

## 9.2 Hero Background

| Attribute | Value |
|-----------|-------|
| **Purpose** | Hero section visual impact |
| **Location** | Homepage hero |
| **Format** | JPEG (photos), PNG (graphics) |
| **Dimensions** | 1920px × 1080px source, responsive |
| **Max File Size** | 100KB |
| **Alt Text** | N/A (decorative via CSS) |
| **Priority** | High (preload) |
| **CSS Usage** | `background-image` on `.hero-section` |

## 9.3 Future Image Guidelines

### Product Images
| Attribute | Value |
|-----------|-------|
| **Format** | JPEG or WebP |
| **Dimensions** | 800px × 600px minimum |
| **Aspect Ratio** | 4:3 |
| **Max File Size** | 50KB |
| **Alt Text** | "[Product Name] - [Brief Description]" |
| **Loading** | Lazy |

### Team Photos
| Attribute | Value |
|-----------|-------|
| **Format** | JPEG |
| **Dimensions** | 400px × 400px minimum |
| **Aspect Ratio** | 1:1 (headshots), 16:9 (group) |
| **Max File Size** | 30KB |
| **Alt Text** | "[Person Name], [Title]" |
| **Loading** | Lazy |

### Project Images
| Attribute | Value |
|-----------|-------|
| **Format** | JPEG |
| **Dimensions** | 1200px × 800px minimum |
| **Aspect Ratio** | 3:2 |
| **Max File Size** | 80KB |
| **Alt Text** | "[Project Name] - [Description]" |
| **Loading** | Lazy |

## 9.4 Image Optimization Requirements

| Type | Tool | Target |
|------|------|--------|
| JPEG | jpegoptim | --max=85 --strip-all |
| PNG | optipng | -o5 |
| WebP | cwebp | -q 80 |

## 9.5 Alt Text Decision Tree

```
Is the image informative?
├── YES → Does it contain text?
│   ├── YES → Use exact text from image
│   └── NO → Describe what's shown
└── NO → Is it decorative?
    ├── YES → Use alt="" (empty)
    └── NO → Describe its purpose
```

---

# 10. Animation Specification

## 10.1 Page Transitions

| Type | Specification |
|------|---------------|
| **Method** | CSS transitions only |
| **Duration** | 0.3s default |
| **Timing Function** | ease |
| **Page Load** | Fade in content (opacity 0→1, 0.6s) |

## 10.2 Hero Animations

| Element | Animation | Duration | Delay |
|---------|-----------|----------|-------|
| H1 | fadeInUp | 0.6s | 0s |
| Tagline | fadeInUp | 0.6s | 0.2s |
| CTA Button | fadeInUp | 0.6s | 0.4s |

### Keyframes
```css
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
```

## 10.3 Scroll Animations

| Element | Trigger | Animation |
|---------|---------|----------|
| Cards | Intersection Observer (10% visible) | fadeInUp |
| Sections | Intersection Observer (20% visible) | fadeIn (subtle) |
| Stats | Intersection Observer (once) | countUp (optional) |

## 10.4 Hover Effects

| Element | Property | From | To | Duration |
|---------|---------|------|----|----------|
| Buttons | background-color | #0A2E5C | #D97706 | 0.3s |
| Buttons | transform | none | translateY(-2px) | 0.3s |
| Cards | transform | none | translateY(-8px) | 0.3s |
| Cards | box-shadow | shallow | deep | 0.3s |
| Cards | border-color | saffron | green | 0.3s |
| Links | color | saffron | green | 0.3s |
| Nav underline | width | 0% | 100% | 0.3s |

## 10.5 Form Interactions

| Element | Event | Animation |
|---------|-------|----------|
| Input focus | focus | border-color change + shadow |
| Error state | validation fail | shake (optional) |
| Submit button | click | loading spinner |
| Success | submit | fade in success message |

## 10.6 Reduced Motion

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

## 10.7 Performance Considerations

| Guideline | Requirement |
|-----------|-------------|
| **Animation Properties** | Prefer transform and opacity |
| **Avoid** | layout thrashing (width, height, top, left changes) |
| **GPU Acceleration** | Use `will-change` sparingly |
| **JavaScript** | Use requestAnimationFrame for JS animations |

---

# 11. Responsive Design

## 11.1 Breakpoints

| Name | Min-Width | Max-Width | Devices |
|------|-----------|-----------|---------|
| **Mobile Small** | 320px | 374px | Older smartphones |
| **Mobile** | 375px | 767px | Modern smartphones |
| **Tablet** | 768px | 1023px | Tablets, small laptops |
| **Desktop** | 1024px | 1439px | Standard laptops, desktops |
| **Large Desktop** | 1440px | ∞ | Large monitors |

## 11.2 Container Behavior

| Breakpoint | Container Width | Padding |
|------------|---------------|---------|
| Mobile | 100% | 15px |
| Tablet | 100% | 20px |
| Desktop | 1200px max | 20px |

## 11.3 Typography Scaling

| Element | Mobile | Tablet | Desktop |
|---------|--------|--------|--------|
| H1 (Hero) | 32px | 44px | 56px |
| H2 | 24px | 32px | 40px |
| H3 | 20px | 24px | 30px |
| Body | 16px | 16px | 16px |
| Nav Links | 1rem | 1.1rem | 1.1rem |

## 11.4 Grid Behavior

| Grid Type | Mobile | Tablet | Desktop |
|-----------|--------|--------|--------|
| 2-column | 1-column | 2-column | 2-column |
| 3-column | 1-column | 2-column | 3-column |
| 4-column | 1-column | 2-column | 4-column |
| Auto-fit | 1-column | 2-column | 3-4 columns |

## 11.5 Spacing Adjustments

| Element | Mobile | Tablet | Desktop |
|---------|--------|--------|--------|
| Section Padding | 50px | 60px | 80px |
| Card Padding | 20px | 25px | 30px |
| Grid Gap | 20px | 24px | 30px |
| Nav Gap | N/A | N/A | 30px |

## 11.6 Navigation Behavior

| Aspect | Mobile | Desktop |
|--------|--------|--------|
| Layout | Logo + hamburger | Logo + links |
| Links | Full-width dropdown | Inline flex |
| Menu Width | 100% | N/A |
| Touch Target | 44px min | N/A |

## 11.7 Form Responsiveness

| Aspect | Mobile | Desktop |
|--------|--------|--------|
| Width | 100% | 600px max |
| Labels | Above input | Above input |
| Two-column form | 1-column | 2-column (optional) |

## 11.8 Touch Targets

| Element | Size Requirement |
|---------|----------------|
| All clickable elements | 44px × 44px minimum |
| Navigation links | Full width, 44px height |
| Buttons | 44px height minimum |
| Form inputs | 44px height minimum |

---

# 12. Accessibility

## 12.1 WCAG 2.1 AA Compliance Target

All pages must conform to Web Content Accessibility Guidelines (WCAG) 2.1 Level AA.

## 12.2 Semantic HTML Requirements

| Element | Required Usage |
|---------|----------------|
| `<header>` | Site header, one per page |
| `<nav>` | Primary navigation, with aria-label |
| `<main>` | Primary content, one per page |
| `<section>` | Thematic groupings, with aria-labelledby |
| `<article>` | Self-contained content |
| `<aside>` | Tangentially related content |
| `<footer>` | Site footer |
| `<h1>`-`<h6>` | Heading hierarchy, no skipped levels |

## 12.3 ARIA Requirements

### Navigation
```html
<nav aria-label="Primary navigation">
```

### Sections
```html
<section id="about" aria-labelledby="about-title">
    <h2 id="about-title">About Us</h2>
</section>
```

### Current Page
```html
<a href="index.html" aria-current="page">Home</a>
```

### Forms
```html
<form aria-describedby="form-instructions">
    <p id="form-instructions" class="visually-hidden">
        Required fields are marked with asterisk
    </p>
</form>
```

## 12.4 Keyboard Navigation

| Key | Expected Behavior |
|-----|------------------|
| Tab | Move to next interactive element |
| Shift+Tab | Move to previous interactive element |
| Enter | Activate links, submit forms, expand buttons |
| Space | Activate buttons, toggle checkboxes |
| Escape | Close modals, menus (if implemented) |
| Arrow keys | Navigate within menus, accordions |

## 12.5 Focus Styles

```css
:focus-visible {
    outline: 3px solid #D97706;
    outline-offset: 3px;
}
```

## 12.6 Color Contrast

| Combination | Ratio Required | Ratio Achieved |
|-------------|---------------|----------------|
| Navy on White | 4.5:1 | 13.5:1 ✓ |
| White on Navy | 4.5:1 | 13.5:1 ✓ |
| Dark text on White | 4.5:1 | 15.4:1 ✓ |
| Muted text on White | 4.5:1 | 4.6:1 ✓ |
| Saffron on White | 4.5:1 | 3.2:1 ✗ |

**Note**: Saffron (#D97706) must NOT be used as text on white backgrounds.

## 12.7 Screen Reader Considerations

| Element | Requirement |
|---------|-------------|
| Images | All images require alt text |
| Decorative images | alt="" (empty) |
| Form labels | All inputs must have associated labels |
| Error messages | aria-describedby or aria-live |
| Hidden content | Use .visually-hidden, not display:none |

## 12.8 Visually Hidden Class

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

---

# 13. Technical SEO

## 13.1 Homepage SEO

| Element | Content |
|---------|---------|
| **Title** | "3rd Eye Oilfield Supply & Services LLP \| Global Procurement & Project Solutions" |
| **Meta Description** | "Global Procurement, Strategic Partnerships, Integrated Project Solutions. Oil & Gas, Defence, Infrastructure, Agriculture, International Trade." (155 chars) |
| **Canonical** | https://www.3rd-eye.in/ |
| **H1** | "3rd Eye Oilfield Supply & Services LLP" |

### Open Graph
```html
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.3rd-eye.in/">
<meta property="og:title" content="3rd Eye Oilfield Supply & Services LLP">
<meta property="og:description" content="Global procurement, strategic partnerships and integrated project solutions.">
<meta property="og:image" content="https://www.3rd-eye.in/img/header-bg.jpg">
<meta property="og:locale" content="en_IN">
<meta property="og:site_name" content="3rd Eye Oilfield Supply & Services LLP">
```

### Twitter Card
```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="3rd Eye Oilfield Supply & Services LLP">
<meta name="twitter:description" content="Global procurement, strategic partnerships and integrated project solutions.">
<meta name="twitter:image" content="https://www.3rd-eye.in/img/header-bg.jpg">
```

### Schema.org JSON-LD
```json
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "3rd Eye Oilfield Supply & Services LLP",
    "url": "https://www.3rd-eye.in/",
    "logo": "https://www.3rd-eye.in/img/logo.png",
    "description": "Global procurement, strategic partnerships and integrated project solutions.",
    "email": "hello@3rd-eye.in"
}
```

## 13.2 Inner Page SEO

| Page | Title Template | H1 |
|------|----------------|-----|
| about.html | "About Us - 3rd Eye Oilfield Supply & Services LLP" | "About 3rd Eye Oilfield Supply & Services LLP" |
| services.html | "Our Services - 3rd Eye Oilfield Supply & Services LLP" | "Our Comprehensive Services" |
| products.html | "Our Products - 3rd Eye Oilfield Supply & Services LLP" | "Our Premium Products" |
| projects.html | "Projects - 3rd Eye Oilfield Supply & Services LLP" | "International Projects" |
| partners.html | "Strategic Partners - 3rd Eye Oilfield Supply & Services LLP" | "Strategic Partners" |
| contact.html | "Contact Us - 3rd Eye Oilfield Supply & Services LLP" | "Contact Us" |

### Required Meta for All Pages
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="[Unique 150-160 char description]">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.3rd-eye.in/[page].html">
```

## 13.3 XML Sitemap

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
    <!-- Continue for all pages -->
</urlset>
```

## 13.4 Robots.txt

```
User-agent: *
Allow: /

Disallow: /cgi-bin/
Disallow: /mail.php

Sitemap: https://www.3rd-eye.in/sitemap.xml
```

## 13.5 Internal Linking

| Guideline | Implementation |
|-----------|-----------------|
| Navigation links | All pages link to main nav |
| Related content | Cross-link between relevant pages |
| Anchor links | Use for same-page navigation |
| Footer links | All pages include footer with links |

---

# 14. Security

## 14.1 Contact Form Security

### Recommended: Formspree Integration
```html
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
```

### Security Features (via Form Service)
| Feature | Implementation |
|---------|-----------------|
| Spam Protection | Built-in CAPTCHA/honeypot |
| Rate Limiting | Server-side |
| HTTPS | Required by form service |
| Data Validation | Server-side validation |

## 14.2 Backend Elimination

| Current State | Target State |
|--------------|-------------|
| PHP mail.php | Form service (Formspree/Netlify Forms) |
| Server-side processing | Client-side + external service |
| Potential vulnerabilities | Minimal attack surface |

## 14.3 Security Headers (.htaccess)

```apache
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-XSS-Protection "1; mode=block"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
    Header set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:; font-src 'self' https://fonts.gstatic.com;"
    Header set Strict-Transport-Security "max-age=31536000; includeSubDomains"
</IfModule>
```

## 14.4 HTTPS Requirements

| Requirement | Implementation |
|------------|----------------|
| Force HTTPS | .htaccess redirect |
| Mixed Content | All resources via HTTPS |
| External Links | Prefer HTTPS |

## 14.5 Privacy Considerations

| Item | Implementation |
|------|----------------|
| Cookie Notice | Not required (no cookies used) |
| Privacy Policy | Required, linked in footer |
| Data Collection | Contact form only, with consent |

---

# 15. Performance Standards

## 15.1 Core Web Vitals Targets

| Metric | Target | Measurement |
|--------|--------|-------------|
| First Contentful Paint (FCP) | < 1.5s | PageSpeed Insights |
| Largest Contentful Paint (LCP) | < 2.5s | PageSpeed Insights |
| Cumulative Layout Shift (CLS) | < 0.1 | PageSpeed Insights |
| Total Blocking Time (TBT) | < 200ms | PageSpeed Insights |
| Time to Interactive (TTI) | < 3.5s | PageSpeed Insights |

## 15.2 Lighthouse Targets

| Category | Target Score |
|----------|--------------|
| Performance | > 90 |
| Accessibility | > 90 |
| Best Practices | > 90 |
| SEO | > 95 |

## 15.3 Asset Size Limits

| Asset Type | Max Size | Notes |
|------------|----------|-------|
| HTML (any page) | 50KB | Uncompressed |
| CSS (total) | 10KB | Minified |
| JavaScript (total) | 10KB | Minified |
| Homepage Total | 500KB | All resources |
| Hero Image | 100KB | JPEG optimized |
| Logo | 10KB | PNG optimized |

## 15.4 Image Optimization

| Format | Tool | Settings |
|--------|------|----------|
| JPEG | jpegoptim | --max=85 --strip-all |
| PNG | optipng | -o5 |
| WebP (future) | cwebp | -q 80 |

## 15.5 CSS Optimization

| Technique | Implementation |
|-----------|----------------|
| Minification | CSSo CLI |
| Critical CSS | Inline in `<head>` (optional) |
| Unused CSS | Remove unused rules |
| Organization | Single file, logical sections |

## 15.6 JavaScript Optimization

| Technique | Implementation |
|-----------|----------------|
| Minification | Terser |
| Defer Loading | `<script defer>` |
| Feature Detection | Check before using APIs |
| No jQuery | Vanilla JavaScript only |

## 15.7 Font Loading

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" media="print" onload="this.media='all'">
```

## 15.8 Browser Caching

```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

## 15.9 Compression

```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css application/javascript application/json
</IfModule>
```

---

# 16. Future Expansion

## 16.1 Expansion Strategy

The website architecture supports future expansion without requiring complete redesign. Each expansion should be evaluated independently.

## 16.2 Recommended Future Pages

### High Priority
| Page | URL | Implementation |
|------|-----|----------------|
| Careers | careers.html | Static with application form |
| Case Studies | case-studies.html | Static or CMS |

### Medium Priority
| Page | URL | Implementation |
|------|-----|----------------|
| Blog | blog.html | CMS (Astro content, 11ty, Hugo) |
| News | news.html | CMS |
| Investor Relations | investors.html | Static |
| Supplier Portal | suppliers.html | Static intro + portal link |

### Low Priority
| Page | URL | Implementation |
|------|-----|----------------|
| Client Portal | clients.html | Static intro + portal link |
| Knowledge Centre | resources.html | CMS or document repository |

## 16.3 CMS Integration Path

If CMS becomes necessary:

| Option | Best For | Complexity |
|--------|----------|------------|
| Astro Content Collections | Blog, news, case studies | Low |
| Netlify CMS | Non-technical content editors | Medium |
| Sanity.io | Complex content requirements | Medium-High |
| Contentful | Enterprise requirements | High |

## 16.4 Multi-Language Support

| Approach | Implementation |
|----------|----------------|
| Subdirectories | /en/, /ar/, /fr/ |
| Subdomains | en.3rd-eye.in |
| Parameters | ?lang=en |
| Recommended | Subdirectories (/en/, /ar/) |

### Implementation
```html
<!-- Language switcher -->
<a href="/ar/index.html" hreflang="ar" lang="ar">العربية</a>
<link rel="alternate" hreflang="ar" href="/ar/index.html">
```

## 16.5 Authentication Integration

For future authenticated sections:

| Section | Recommendation |
|---------|----------------|
| Supplier Portal | Separate application, SSO recommended |
| Client Portal | Separate application, SSO recommended |
| Career Portal | ATS integration (Greenhouse, Lever) |

---

# 17. Enterprise Quality Checklist

## 17.1 Design Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | Logo displays correctly on all pages | Required |
| □ | Color palette matches specification | Required |
| □ | Typography hierarchy consistent | Required |
| □ | Spacing consistent throughout | Required |
| □ | Grid alignment correct | Required |
| □ | Responsive breakpoints functional | Required |
| □ | No horizontal scroll on mobile | Required |
| □ | Hero section displays correctly | Required |
| □ | Cards have consistent styling | Required |
| □ | Buttons have correct states | Required |
| □ | Footer matches specification | Required |
| □ | Navigation matches specification | Required |

## 17.2 Accessibility Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | All images have alt text | Required |
| □ | Color contrast meets WCAG AA | Required |
| □ | Keyboard navigation works | Required |
| □ | Focus indicators visible | Required |
| □ | Skip link present | Required |
| □ | ARIA landmarks present | Required |
| □ | Form labels associated | Required |
| □ | No semantic HTML errors | Required |
| □ | Screen reader tested | Recommended |
| □ | Reduced motion respected | Required |

## 17.3 SEO Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | Unique title on each page | Required |
| □ | Unique meta description on each page | Required |
| □ | H1 present on each page | Required |
| □ | Heading hierarchy correct | Required |
| □ | Canonical URLs set | Required |
| □ | Open Graph tags on all pages | Required |
| □ | Structured data validates | Required |
| □ | Sitemap includes all pages | Required |
| □ | Robots.txt configured | Required |
| □ | Internal links functional | Required |
| □ | No duplicate content | Required |

## 17.4 Security Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | HTTPS enforced | Required |
| □ | Security headers present | Required |
| □ | CSP configured | Required |
| □ | Form has spam protection | Required |
| □ | No sensitive data in code | Required |
| □ | No PHP or server-side code | Required (static target) |
| □ | Privacy policy present | Required |
| □ | Terms of service present | Required |

## 17.5 Performance Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | Lighthouse Performance > 90 | Required |
| □ | FCP < 1.5s | Required |
| □ | LCP < 2.5s | Required |
| □ | CLS < 0.1 | Required |
| □ | No render-blocking resources | Required |
| □ | Images optimized | Required |
| □ | CSS minified | Required |
| □ | JavaScript minified | Required |
| □ | Fonts optimized | Required |
| □ | Browser caching configured | Required |

## 17.6 Content Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | All placeholder text replaced | Required |
| □ | No Lorem ipsum | Required |
| □ | Grammar and spelling correct | Required |
| □ | Contact information accurate | Required |
| □ | Links point to correct destinations | Required |
| □ | Company information consistent | Required |
| □ | No broken images | Required |
| □ | Copyright year current | Required |

## 17.7 Responsive Checklist

| Device | Viewport | Status |
|--------|----------|--------|
| Mobile Small | 320px | Required |
| Mobile | 375px | Required |
| Mobile | 414px | Required |
| Tablet | 768px | Required |
| Tablet | 1024px | Required |
| Desktop | 1280px | Required |
| Desktop | 1920px | Required |
| Desktop Large | 2560px | Recommended |

## 17.8 Browser Compatibility Checklist

| Browser | Version | Status |
|---------|---------|--------|
| Chrome | Latest | Required |
| Chrome | Latest - 1 | Required |
| Firefox | Latest | Required |
| Firefox | Latest - 1 | Required |
| Safari | Latest | Required |
| Safari | Latest - 1 | Required |
| Edge | Latest | Required |
| Edge | Latest - 1 | Recommended |
| iOS Safari | Latest | Required |
| Chrome Android | Latest | Required |

## 17.9 Deployment Readiness Checklist

| Item | Requirement | Status |
|------|-------------|--------|
| □ | All tests passing | Required |
| □ | Code committed | Required |
| □ | Staging verified | Required |
| □ | DNS configured | Required |
| □ | SSL certificate valid | Required |
| □ | Sitemap submitted to Google | Required |
| □ | Analytics configured | Recommended |
| □ | Error monitoring configured | Recommended |
| □ | Backup procedure documented | Required |
| □ | Rollback plan documented | Required |

---

# 18. Development Phases

## Phase 1: Foundation (Week 1)

### Tasks
1. Set up development environment
2. Create backup of current site
3. Establish baseline metrics (Lighthouse audit)
4. Clean up file structure
5. Delete unused assets (203 files)
6. Create base HTML template
7. Set up version control

### Deliverables
- Development environment ready
- Backup created
- Baseline metrics documented
- Clean repository structure

## Phase 2: Core Template (Week 1-2)

### Tasks
1. Create standard HTML header component
2. Create standard HTML footer component
3. Create main.css with design system
4. Create main.js with core functionality
5. Implement responsive navigation
6. Implement skip links
7. Implement sticky header

### Deliverables
- Standard header template
- Standard footer template
- Design system CSS
- Responsive navigation

## Phase 3: Homepage (Week 2)

### Tasks
1. Build hero section
2. Build about preview section
3. Build sectors grid
4. Build contact CTA
5. Implement hero animations
6. Add structured data
7. Add Open Graph tags
8. Test responsiveness

### Deliverables
- Complete homepage
- All homepage SEO complete
- Homepage responsive

## Phase 4: Content Pages (Week 2-3)

### Tasks
1. Build About page
2. Build Services page
3. Build Products page
4. Build Projects page
5. Build Partners page
6. Build Contact page
7. Build 404 page
8. Implement page-specific animations

### Deliverables
- All content pages complete
- Consistent styling
- Working navigation

## Phase 5: Legal Pages (Week 3)

### Tasks
1. Create Privacy Policy page
2. Create Terms of Service page
3. Link legal pages in footer
4. Add legal pages to sitemap
5. Update robots.txt

### Deliverables
- Privacy Policy page
- Terms of Service page
- Footer updated

## Phase 6: Accessibility (Week 3)

### Tasks
1. Audit all pages with axe-core
2. Add missing alt text
3. Add missing ARIA labels
4. Fix color contrast issues
5. Test keyboard navigation
6. Test with screen reader
7. Verify skip links work

### Deliverables
- WCAG 2.1 AA compliant
- Accessibility audit report

## Phase 7: SEO Optimization (Week 3-4)

### Tasks
1. Add structured data to all pages
2. Add Open Graph to all pages
3. Add Twitter Cards to all pages
4. Verify canonical URLs
5. Update sitemap
6. Verify robots.txt
7. Test with Google Rich Results Test

### Deliverables
- Complete SEO implementation
- Structured data validated

## Phase 8: Performance Optimization (Week 4)

### Tasks
1. Optimize hero image
2. Minify CSS
3. Minify JavaScript
4. Optimize font loading
5. Add resource hints
6. Verify browser caching
7. Run Lighthouse audit
8. Achieve Lighthouse > 90

### Deliverables
- Performance-optimized site
- Lighthouse scores > 90

## Phase 9: Security (Week 4)

### Tasks
1. Configure form service (Formspree)
2. Remove PHP mail.php
3. Update security headers
4. Test form submissions
5. Verify security headers
6. Create security.txt
7. Test with OWASP ZAP

### Deliverables
- Secure contact form
- Security headers verified
- No security vulnerabilities

## Phase 10: Testing (Week 4-5)

### Tasks
1. Cross-browser testing
2. Device testing
3. Accessibility testing
4. Performance testing
5. Security testing
6. SEO testing
7. Form testing
8. Link verification
9. Fix all identified issues

### Deliverables
- Test report
- All issues resolved

## Phase 11: Deployment (Week 5)

### Tasks
1. Final code review
2. Stakeholder approval
3. Deploy to production
4. Verify production
5. Submit sitemap to Google
6. Configure analytics
7. Monitor for errors

### Deliverables
- Live website
- Google indexing verified
- Monitoring active

---

# 19. Final Readiness Assessment

## 19.1 Specification Completeness

This Functional Specification is **sufficiently complete** for a professional development team to build the website without requiring additional clarification on:

| Aspect | Status |
|--------|--------|
| Design System | ✅ Complete - colors, typography, spacing defined |
| Component Library | ✅ Complete - all components specified |
| Page Structure | ✅ Complete - every section detailed |
| Navigation | ✅ Complete - all states defined |
| Responsive Design | ✅ Complete - breakpoints specified |
| Accessibility | ✅ Complete - WCAG requirements defined |
| SEO | ✅ Complete - meta tags, structured data specified |
| Security | ✅ Complete - headers, form security defined |
| Performance | ✅ Complete - targets specified |
| Content | ✅ Complete - content structure defined |

## 19.2 Remaining Decisions

The following decisions should be confirmed before implementation:

| Decision | Options | Recommendation |
|----------|---------|----------------|
| Hosting Provider | GitHub Pages, Netlify, Vercel, S3 | Netlify (free tier, simple) |
| Form Service | Formspree, Netlify Forms | Formspree (simpler setup) |
| Analytics | Google Analytics, Plausible, Fathom | Plausible (privacy-focused) |
| Image Strategy | Current assets, new photography, stock | New professional photography |
| Content Writing | Current copy, professional copywriter | Professional copywriter |

## 19.3 Technical Decisions Made

| Decision | Justification |
|----------|---------------|
| Static HTML/CSS/JS | Stability, security, simplicity |
| No Framework | No dynamic features required |
| No CMS | Static content, manageable without CMS |
| No Build Tools | Simple deployment, no complexity |
| Form Service | Eliminates backend security concerns |

## 19.4 Implementation Readiness

| Phase | Status |
|-------|--------|
| Requirements | ✅ Complete |
| Design System | ✅ Complete |
| Component Library | ✅ Complete |
| Page Specifications | ✅ Complete |
| SEO Specifications | ✅ Complete |
| Accessibility Requirements | ✅ Complete |
| Security Requirements | ✅ Complete |
| Performance Targets | ✅ Complete |

## 19.5 Sign-Off

| Role | Name | Date | Signature |
|------|------|------|-----------|
| Author | OpenHands | 2026-07-18 | - |
| Reviewer | [Pending] | [Pending] | - |
| Approver | [Pending] | [Pending] | - |

---

## Appendix A: Color Reference

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| Navy Blue | #0A2E5C | 10, 46, 92 | Primary brand, headers |
| Deep Saffron | #D97706 | 217, 119, 6 | Accent, CTAs, links |
| India Green | #138808 | 19, 136, 8 | Success states, hover |
| White | #FFFFFF | 255, 255, 255 | Backgrounds |
| Off White | #F5F7FA | 245, 247, 250 | Section backgrounds |
| Dark Text | #1F2937 | 31, 41, 55 | Body text |
| Muted Text | #6B7280 | 107, 114, 128 | Secondary text |

## Appendix B: Typography Reference

| Element | Font | Weight | Size |
|---------|------|--------|------|
| H1 (Hero) | Poppins | 700 | 56px |
| H2 | Poppins | 600 | 40px |
| H3 | Poppins | 600 | 30px |
| H4 | Poppins | 600 | 24px |
| Body | Roboto | 400 | 16px |
| Body Small | Roboto | 400 | 14px |
| Button | Poppins | 600 | 14px |
| Nav | Roboto | 500 | 17px |

## Appendix C: Spacing Reference

| Token | Value | Usage |
|-------|-------|-------|
| xs | 4px | Tight internal |
| sm | 8px | Small gaps |
| md | 16px | Default |
| lg | 24px | Section internal |
| xl | 32px | Related elements |
| 2xl | 48px | Section padding |
| 3xl | 64px | Large gaps |
| 4xl | 80px | Hero padding |

---

*Enterprise Functional Specification v1.0*
*Created by OpenHands | 2026-07-18*

*This specification is the master blueprint for the 3rd Eye Oilfield Supply & Services LLP corporate website redevelopment.*
