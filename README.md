# RonAyin's LPG Store — Product Landing Page

**Week 05 Project | Laravel + Tailwind CSS**

---

## 1. Project Title

**RonAyin's LPG Store — Product Landing Page**

A fully responsive product landing page built with Laravel 11, Blade Components, and Tailwind CSS v4 for RonAyin's LPG Store located at Brgy. San Isidro, Pagsanjan, Laguna.

---

## 2. Introduction

### What is a Product Landing Page?

A product landing page is a standalone web page designed with a single focused goal — to present a product or service and encourage visitors to take a specific action, such as placing an order, calling the business, or filling out a contact form. Unlike a full website, a landing page removes distractions and guides the visitor toward one clear conversion point.

### Why Landing Pages are Important for Businesses

- **First impression** — Most potential customers will judge a business within seconds of landing on its page. A clean, professional landing page builds trust immediately.
- **Increased conversions** — A focused page with clear calls-to-action converts visitors into customers more effectively than a generic homepage.
- **24/7 availability** — A landing page works around the clock, allowing customers to browse products, get information, and place orders even outside business hours.
- **Credibility** — For small local businesses, having an online presence signals legitimacy and professionalism to potential customers.
- **Reach** — A landing page extends the store's reach beyond its immediate neighborhood, allowing anyone to discover and contact the business online.

### Purpose of the Project

This project was created to build a real-world product landing page for RonAyin's LPG Store — a local gas retailer in Pagsanjan, Laguna. The goal was to apply modern web development practices using the Laravel framework, Blade templating system, and Tailwind CSS to produce a professional, mobile-responsive, and maintainable web page that the store can actually use.

---

## 3. Objectives

The following learning objectives were accomplished during this activity:

1. Build a full product landing page using the **Laravel 11** framework following MVC conventions.
2. Design and implement **reusable Blade Components** (`navbar`, `hero`, `feature-card`, `pricing-card`, `testimonial-card`, `button`, `footer`, `section-heading`) for modular and maintainable UI development.
3. Apply **Tailwind CSS v4** utility classes to style the entire page without writing custom CSS, demonstrating utility-first design principles.
4. Implement **responsive web design** using Tailwind's breakpoint system (`sm:`, `lg:`, `xl:`) to ensure the page works correctly on mobile phones, tablets, laptops, and desktops.
5. Use **CSS Grid and Flexbox** through Tailwind utilities to create multi-column layouts that adapt to different screen sizes.
6. Integrate **JavaScript** for interactive features including a product modal with blur backdrop and a category filter system for the products section.
7. Manage **static assets** (images, fonts) through **Vite** for optimized production builds with cache-busted filenames.
8. Use **Git and GitHub** for version control, committing changes with meaningful messages throughout development.
9. Apply **UX design principles** including visual hierarchy, consistent spacing, color contrast, hover feedback, and accessible markup.

---

## 4. Responsive Web Design

### Mobile-First Design

The landing page was built with a mobile-first approach. Base styles target small screens (360px–480px) and larger layouts are layered on top using responsive prefixes. For example, the navigation collapses into a hamburger menu on mobile and expands into a full horizontal nav on desktop.

```html
<!-- Mobile: stacked, Desktop: side by side -->
<div class="flex flex-col lg:flex-row items-center gap-12">
```

### Responsive Breakpoints

Tailwind CSS v4 provides the following default breakpoints used in this project:

| Prefix | Minimum Width | Usage in Project |
|--------|--------------|-----------------|
| `sm:`  | 640px        | 2-col grids, showing nav text labels |
| `lg:`  | 1024px       | Full navbar, side-by-side hero layout |
| `xl:`  | 1280px       | 5-column product grid |

### Flexbox

Flexbox is used throughout the page for alignment and distribution of elements:

```html
<!-- Navbar: logo left, nav center, CTA right -->
<div class="flex items-center justify-between h-16 py-3">

<!-- Feature cards: icon + text side by side -->
<div class="flex items-start gap-4">

<!-- Buttons: centered in a row -->
<div class="flex flex-col sm:flex-row gap-4 justify-center">
```

### CSS Grid

CSS Grid handles multi-column layouts that need to adapt across breakpoints:

```html
<!-- Product grid: 2 cols mobile → 3 tablet → 4 desktop → 5 wide -->
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

<!-- Features: 1 col mobile → 2 tablet → 3 desktop -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Store section: 1 col mobile → 2 col desktop -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
```

### User Experience (UX)

Responsive design is critical in modern web applications because:

- Over 60% of web traffic globally comes from mobile devices. A page that breaks on mobile loses the majority of potential customers.
- Search engines like Google use mobile-first indexing, meaning a non-responsive page ranks lower in search results.
- Users expect a seamless experience regardless of the device they use. Inconsistent layouts frustrate users and increase bounce rates.
- For a local business like RonAyin's LPG Store, most customers will likely find the page through a mobile search or a Facebook link — making mobile responsiveness especially important.

---

## 5. Tailwind CSS

### Utility-First CSS

Tailwind CSS follows a utility-first approach, where instead of writing custom CSS classes, you apply small, single-purpose utility classes directly in your HTML. Each class does one specific thing:

```html
<!-- Traditional CSS approach -->
<div class="card">...</div>
<!-- .card { background: white; border-radius: 1rem; padding: 2rem; box-shadow: ...; } -->

<!-- Tailwind utility-first approach -->
<div class="bg-white rounded-2xl p-8 shadow-sm">...</div>
```

### Advantages of Tailwind CSS

- **No naming overhead** — You never have to invent class names like `.card-wrapper-inner`.
- **No context switching** — Styles live in the same file as the markup, so you always know what's being styled.
- **Smaller bundle** — Tailwind v4 scans your templates and only includes the CSS classes actually used, resulting in a very small final stylesheet.
- **Consistency** — Using a fixed design scale (spacing, colors, font sizes) produces consistent results across the entire page.
- **Responsive out of the box** — Every utility can be prefixed with a breakpoint (`sm:`, `lg:`) without any media query boilerplate.

### Responsive Utility Classes

```html
<!-- Text size: small on mobile, larger on desktop -->
<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold">

<!-- Padding: less on mobile, more on desktop -->
<div class="px-4 sm:px-6 lg:px-8">

<!-- Hidden on mobile, visible on desktop -->
<nav class="hidden lg:flex items-center gap-8">

<!-- Visible on mobile, hidden on desktop -->
<button class="lg:hidden">
```

### Component Styling

Tailwind classes are composed directly inside Blade components to create reusable styled elements:

```html
<!-- Button component with variants -->
<a href="{{ $href }}"
   class="inline-flex items-center font-semibold rounded-full
          bg-orange-500 hover:bg-orange-600 text-white
          px-6 py-2.5 text-sm transition-all duration-200
          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400">
    {{ $slot }}
</a>
```

```html
<!-- Product card with hover effects -->
<div class="group flex flex-col bg-white border border-gray-200
            rounded-2xl overflow-hidden shadow-sm
            hover:shadow-lg hover:-translate-y-1
            transition-all duration-300 cursor-pointer">
```

---

## 6. Blade Components

### What are Blade Components?

Blade Components are reusable template fragments in Laravel's Blade templating engine. They encapsulate HTML structure, Tailwind styles, and optional PHP logic into a single file that can be used anywhere in your views with a simple tag syntax.

```html
<!-- Using a component -->
<x-feature-card title="Fast Delivery" description="Same-day delivery within metro areas.">
    <x-slot:icon>...</x-slot:icon>
</x-feature-card>
```

### Why Reusable Components Improve Maintainability

- **Single source of truth** — If you need to change how all testimonial cards look, you edit one file (`testimonial-card.blade.php`) and the change applies everywhere.
- **Reduced duplication** — Instead of copy-pasting the same HTML structure 12 times for product cards, you call `<x-pricing-card>` 12 times with different props.
- **Easier debugging** — Issues are isolated to a single component file rather than scattered across multiple pages.
- **Team consistency** — All developers use the same components, ensuring visual and structural consistency across the project.

### Benefits of Modular UI Development

- Faster development once core components are built
- Components can be tested and refined independently
- Prop-driven components (`@props`) allow flexible reuse without duplication
- New pages can be built by combining existing components

### Components Built for This Project

```
resources/views/components/
├── navbar.blade.php         — Fixed top navigation with mobile hamburger
├── hero.blade.php           — Full-screen hero with background image
├── feature-card.blade.php  — Icon + title + description card
├── pricing-card.blade.php  — Product item card with modal trigger
├── testimonial-card.blade.php — Star rating + review + author card
├── button.blade.php         — Reusable button/link with variants
├── footer.blade.php         — Site footer with links and contact info
└── section-heading.blade.php — Eyebrow + heading + subtitle block
```

### Sample: pricing-card.blade.php

```blade
@props([
    'name'        => 'Product Name',
    'price'       => '₱0',
    'tag'         => null,
    'image'       => null,
    'description' => null,
    'ctaHref'     => '#get-started',
])

<div
    data-category="{{ $attributes->get('data-category', 'All') }}"
    class="product-card group flex flex-col bg-white border border-gray-200
           rounded-2xl overflow-hidden shadow-sm hover:shadow-lg
           hover:-translate-y-1 transition-all duration-300 cursor-pointer"
    onclick="openProductModal(...)">

    <div class="relative bg-gray-100 aspect-square overflow-hidden">
        @if ($image)
            <img src="{{ $image }}" class="w-full h-full object-cover
                 group-hover:scale-105 transition-transform duration-500" />
        @endif
    </div>

    <div class="flex items-center justify-between gap-2 px-4 py-3">
        <p class="text-sm font-semibold text-gray-900 truncate">{{ $name }}</p>
        <span class="text-base font-extrabold text-orange-500">{{ $price }}</span>
    </div>
</div>
```

---

## 7. User Interface Design

### Color Palette

| Role | Color | Tailwind Class |
|------|-------|---------------|
| Primary / CTA | Orange `#f97316` | `orange-500` |
| Primary Hover | Dark Orange `#ea580c` | `orange-600` |
| Background | White `#ffffff` | `white` |
| Alternate BG | Light Gray `#f9fafb` | `gray-50` |
| Body Text | Dark Gray `#111827` | `gray-900` |
| Muted Text | Medium Gray `#6b7280` | `gray-500` |
| Dark Sections | Near Black `#111827` | `gray-900` |
| Accent (stars) | Amber `#f59e0b` | `amber-400` |

The palette was kept minimal — one primary brand color (orange), neutral grays for text and backgrounds, and amber only for star ratings. This creates visual clarity and avoids competing colors.

### Typography

The project uses **Instrument Sans** (loaded via Vite/Bunny Fonts), a clean humanist sans-serif typeface that feels approachable and modern. Font sizes follow Tailwind's scale:

- Hero headline: `text-4xl` → `text-6xl` (responsive)
- Section headings: `text-2xl` → `text-3xl`
- Body text: `text-sm` to `text-base`
- Labels / eyebrows: `text-xs` uppercase with `tracking-widest`

### Iconography

All icons are inline SVGs sourced from **Heroicons** (MIT license). Using inline SVGs means:
- No additional HTTP requests
- Icons scale perfectly at any size
- Color is controlled with Tailwind text color utilities (`text-orange-500`)

### Button Styles

The `button` component supports four variants:

| Variant | Appearance | Usage |
|---------|-----------|-------|
| `primary` | Orange fill, white text | Main CTAs |
| `secondary` | Dark fill, white text | Secondary CTAs |
| `outline` | Orange border, transparent bg | Alternative actions |
| `ghost` | No border, text only | Subtle actions |

All buttons use `rounded-full` for a pill shape and include `transition-all` for smooth hover feedback.

### Card Design

Cards throughout the site share a consistent design language:
- `bg-white` background
- `border border-gray-200` subtle border
- `rounded-2xl` rounded corners
- `shadow-sm` resting shadow
- `hover:shadow-lg hover:-translate-y-1` lift effect on hover

### Layout Consistency

- All sections use `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8` for consistent container width and padding
- Vertical section spacing is consistently `py-16` or `py-24`
- Gap between grid items is consistently `gap-5` or `gap-6`

These rules ensure every section feels like it belongs to the same design system.

---

## 8. Folder Structure

```
week05-product-landing-page/
│
├── app/                        Laravel application logic (controllers, models)
├── resources/
│   ├── views/
│   │   ├── layouts/            Master layout files
│   │   │   └── app.blade.php   Main layout — navbar, main slot, footer, modal, JS
│   │   ├── components/         Reusable Blade UI components
│   │   │   ├── navbar.blade.php
│   │   │   ├── hero.blade.php
│   │   │   ├── feature-card.blade.php
│   │   │   ├── pricing-card.blade.php
│   │   │   ├── testimonial-card.blade.php
│   │   │   ├── button.blade.php
│   │   │   ├── footer.blade.php
│   │   │   └── section-heading.blade.php
│   │   └── pages/              Page-level views that extend layouts
│   │       └── home.blade.php  Main landing page
│   ├── css/
│   │   └── app.css             Tailwind CSS entry point + hero background rule
│   ├── js/
│   │   └── app.js              Vite entry + image imports for asset processing
│   └── images/                 Source images (processed by Vite at build time)
│       ├── Home BG.png
│       ├── RonAyin's LPG Store Logo.png
│       ├── 11 kg lpg.jpg
│       └── ...
│
├── public/
│   ├── build/                  Vite-compiled assets (CSS, JS, images) — DO NOT EDIT
│   └── images/                 Static images served directly
│
├── routes/
│   └── web.php                 Route definitions (home route)
│
├── screenshots/                Screenshots for documentation purposes
├── documentation/              Project documentation and comparison images
└── README.md                   This documentation file
```

### Purpose of Key Directories

- **`resources/views/layouts/`** — Contains the master layout (`app.blade.php`). All pages extend this file, ensuring the navbar, footer, modal, and scripts are included consistently on every page.
- **`resources/views/components/`** — Houses all reusable Blade components. Each file is a self-contained UI element that accepts props and renders consistent markup.
- **`resources/views/pages/`** — Contains page-specific views. These extend the layout and define the page content by assembling components.
- **`public/`** — The web root. Only files here are directly accessible by the browser. The `build/` subfolder contains Vite's production output.
- **`screenshots/`** — Stores screenshots of the project for documentation and submission purposes.
- **`documentation/`** — Contains before/after comparison images and any additional project documentation.

---

## 9. Screenshots

> Place all screenshots in the `screenshots/` folder.
> Place before/after comparison images in the `documentation/` folder.

### Required Screenshots

| Screenshot | File |
|-----------|------|
| Desktop View (1280px+) | `screenshots/desktop.png` |
| Tablet View (768px) | `screenshots/tablet.png` |
| Mobile View (375px) | `screenshots/mobile.png` |
| Navigation Bar | `screenshots/navbar.png` |
| Hero Section | `screenshots/hero.png` |
| Features Section | `screenshots/features.png` |
| Products Section | `screenshots/products.png` |
| Testimonials | `screenshots/testimonials.png` |
| Footer | `screenshots/footer.png` |
| Blade Components Folder | `screenshots/components-folder.png` |
| GitHub Repository | `screenshots/github-repo.png` |
| VS Code Project Structure | `screenshots/vscode-structure.png` |

### Before / After Comparison

| | File |
|--|------|
| Before (initial layout) | `documentation/before.png` |
| After (final polished page) | `documentation/after.png` |

---

## Design Requirements

### Design System

The page follows a consistent design system based on:
- **Spacing scale** — All spacing uses Tailwind's 4px base unit (`p-4` = 16px, `gap-6` = 24px)
- **Color system** — Single brand color (orange-500) with neutral gray scale
- **Typography scale** — Instrument Sans with Tailwind's responsive text size utilities
- **Component library** — All UI elements built as Blade components with consistent structure

### Color Contrast & Accessibility

- All text on white backgrounds uses `gray-900` or `gray-600` — both pass WCAG AA contrast ratios
- White text on `orange-500` buttons passes WCAG AA
- Hero text uses `text-white` on a dark overlay (`bg-black/80`) for strong contrast
- All interactive elements include `:focus` ring styles for keyboard navigation
- Images include descriptive `alt` attributes
- The navbar includes `aria-label`, `aria-expanded`, and `role` attributes for screen readers

### Color Harmony

The palette uses analogous warm tones (orange → amber) with a neutral gray scale. The single accent color prevents visual competition and keeps the user's attention on the CTAs.

---

## GitHub Repository

🔗 [https://github.com/Benjamin-2804/week05-product-landing-page](https://github.com/Benjamin-2804/week05-product-landing-page)

---

## How to Run Locally

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Build assets
npm run build

# Start development server
php artisan serve
```

Open **http://127.0.0.1:8000** in your browser.

---

*Built with Laravel 11 · Tailwind CSS v4 · Vite · Blade Components*
