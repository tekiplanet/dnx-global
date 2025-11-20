 # DNX Global — Futuristic Dark UI Design Rules
 
 Version: 1.0  ·  Date: 2025-11-07
 
 This document defines the visual language and implementation rules for a futuristic, high-contrast, photography-first interface inspired by the provided screenshot. The system is mobile-first, fully responsive, and optimized for clarity, drama, and conversion while highlighting imagery.
 
 ---

## 24) Contact Information Footer — Design & Interaction Spec

- **Layout**
  - Three zones on desktop: Brand/Contact · Link Columns · Newsletter/Social.
  - Grid: 1-col on mobile; 2-col on md; 3-col on ≥900px.
  - Bottom bar with legal links, store badges, and copyright.

- **Content**
  - Brand block: logo, short description, contact list (phone tel:, email mailto:, location text).
  - Link columns (2–3): Services, Company, Resources.
  - Newsletter: email input + primary CTA; helper subtext updates on submit.
  - Social buttons set (LinkedIn, X, Instagram, YouTube).
  - Optional app store badges.

- **Visuals**
  - Uses `--surface-1` background with `--line` hairline dividers.
  - Buttons/inputs align with global components (radius 12, focus ring, gradient CTA).
  - Social buttons: glass chips with hover glow.

- **Motion**
  - Hover: slight lift and glow on interactive elements.
  - Back-to-top button appears after ~420px scroll and smooth-scrolls to top; honors reduced motion.

- **Responsive**
  - Newsletter input stacks vertically on ≤480px.
  - Columns collapse into stacked lists with comfortable 8–12px gaps.

- **A11y**
  - Newsletter input has associated label (visually hidden) and required validation.
  - Social buttons have `aria-label`.
  - Back-to-top is keyboard focusable with visible focus style.

---

 ## 1) Design Principles
 
 - **High-contrast heroism**: Dark canvas with luminous accent CTAs and cinematic photography.
 - **Futuristic minimalism**: Clean grids, hairline borders, subtle neon glows, and precise micro-interactions.
 - **Photography-first**: Large edge-to-edge imagery with gradient overlays for legibility.
 - **Modularity**: Reusable sections, components, and Blade layouts; strict tokenization.
 - **Accessibility**: WCAG 2.1 AA contrast, focus states visible, keyboard navigable.
 
 ---
 
 ## 2) Color System (Tokens)
 
 Use CSS variables for theming. Primary experience is dark. All text/controls must meet contrast AA.
 
 - **Core**
   - `--bg`: #0B0F13  (Near-black, bluish tint)
   - `--surface-1`: #0F141A (Default surface)
   - `--surface-2`: #111A22 (Elevated surface)
   - `--surface-3`: #0E1F2A (Hero overlay cards)
 - **Text**
   - `--text-1`: #F2F6FA (Primary)
   - `--text-2`: #C6D0DC (Secondary)
   - `--text-3`: #8A98A9 (Muted)
 - **Accents (neon/future)**
   - `--accent`: #22D3EE (Aurora Cyan — primary CTA)
   - `--accent-2`: #7C3AED (Iris Purple — secondary)
   - `--accent-3`: #FF2D92 (Neon Pink — sparingly for highlights)
   - `--accent-4`: #FDE047 (Neon Gold — small detail chips/labels)
 - **States**
   - `--success`: #22C55E
   - `--warning`: #F59E0B
   - `--danger`: #EF4444
   - `--info`: #38BDF8
 - **Lines/Effects**
   - `--line`: rgba(255,255,255,0.06) (Hairline separators)
   - `--glow`: rgba(34, 211, 238, 0.45) (Cyan glow)
 
 - **Gradients**
   - `--grad-hero`: linear-gradient(180deg, rgba(11,15,19,0.05) 0%, rgba(11,15,19,0.6) 70%, #0B0F13 100%)
   - `--grad-cta`: linear-gradient(135deg, #22D3EE 0%, #7C3AED 100%)
   - `--grad-edge`: radial-gradient(60% 60% at 0% 0%, rgba(124,58,237,0.35) 0%, rgba(34,211,238,0) 60%)
 
 Usage:
 - Backgrounds use `--bg` and step up with `--surface-*`.
 - Primary CTAs use `--accent` or `--grad-cta` with a soft external glow.
 - Avoid large neon blocks; prefer thin lines, glows, and micro accents.
 
 ---
 
 ## 3) Typography
 
 Futuristic, elegant sans for headlines; highly legible neutral sans for body. Slight negative tracking on display for density.
 
 - **Headlines**: "Space Grotesk", Sora, or Poppins (600–700). Fallback: system-ui, Arial, sans-serif.
 - **Body/UI**: Inter, Manrope, or IBM Plex Sans (400–500). Fallback: system-ui, Arial, sans-serif.
 - **Numeric/Badges (optional)**: "DM Mono" or "JetBrains Mono" for stats.
 
 - **Type scale (desktop)**
   - H1: 56–64px / 1.05 lh / -1% tracking (Hero)
   - H2: 40–48px / 1.1 lh
   - H3: 28–32px / 1.2 lh
   - Lead: 20–22px / 1.6 lh
   - Body: 16–18px / 1.7 lh
   - Caption: 13–14px / 1.5 lh / +2% tracking
   - Navigation: 13–14px uppercase / +6–8% tracking
 
 - **Type scale (mobile)**
   - H1: 36–40px
   - H2: 28–32px
   - H3: 22–24px
   - Body: 15–16px
 
 - **Rules**
   - Headline weight 600–700; body 400–500.
   - Keep hero headings left-aligned; allow line breaks for drama.
   - Max text width: 68–74ch for paragraphs.
 
 ---
 
 ## 4) Spacing, Grid, and Breakpoints
 
 - **Spacing scale** (px): 4, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96
 - **Section paddings**: mobile 56–72; tablet 80–96; desktop 112–144
 - **Container widths**: 1280 (max), 1140 (content), 960 (narrow)
 - **Grid**: 12 columns, 24px gutters desktop; 12–16px gutters mobile
 - **Breakpoints**
   - xs: 360
   - sm: 480
   - md: 768
   - lg: 1024
   - xl: 1280
   - 2xl: 1440
 
 - **Rules**
   - Hero: image bleeds edge-to-edge; content sits in container; apply `--grad-hero` overlay.
   - Maintain consistent vertical rhythm using section paddings and a baseline multiple of 8.
 
 ---
 
 ## 5) Imagery (Unsplash placeholders)
 
 - **Style**: Low-key, high-contrast, color powder/paint, studio portraits, dramatic lighting.
 - **Aspect ratios**: Hero 16:9 or 21:9; Cards 4:3; Gallery mix 1:1, 3:2, 4:5.
 - **Overlay**: Apply `--grad-hero` for text legibility; minimum 60% overlay at the bottom.
 - **Sample Unsplash queries** (to replace later):
   - https://unsplash.com/s/photos/portrait-neon
   - https://unsplash.com/s/photos/body-paint
   - https://unsplash.com/s/photos/low-key-portrait
   - https://unsplash.com/s/photos/studio-portrait
 
 - **Do**
   - Favor negative space on left for hero copy.
   - Use sharp, authentic skin tones with neon accents.
 - **Don’t**
   - Over-saturate entire canvas with neon; keep accents controlled.
 
 ---
 
 ## 6) Futuristic Elements and Motifs
 
 - **Hairline frames**: 1px lines (`--line`) to outline blocks; corner accents using 24px L-shapes.
 - **Soft neon glows**: Outer glow using `--glow` on CTAs and icons (blur 12–18px, opacity 35–45%).
 - **Glass panels**: Subtle translucent cards (bg `rgba(255,255,255,0.03)` + 1px hairline + backdrop-blur).
 - **Holographic gradient edges**: `--grad-edge` in corners of hero/cards.
 - **Micro grid**: Optional faint grid texture (2–4% opacity) on surfaces for tech feel.
 - **Stats chips**: Monospace numbers with tiny glow dot before label.
 
 ---
 
 ## 7) Components
 
 - **Buttons**
   - Primary: Filled `--accent` or `--grad-cta`, white text, soft glow, 12px radius, 14–16px text.
   - Secondary: Outline (1px `--accent`), text `--text-1`, hover fill with 10% accent tint.
   - Tertiary: Text link with underline on hover; underline is gradient.
   - Sizes: sm 36h / md 44h / lg 52h; horizontal padding 16/20/24.
 
 - **Navigation (Header)**
   - Dark transparent over hero; solid `--bg` on scroll.
   - Logo left, nav center, CTA right (“Book Now”).
   - Nav items: uppercase 13–14px, letter-spacing +6–8%.
   - Mobile: hamburger → overlay drawer with dimmed backdrop and large tap targets.
 
 - **Hero**
   - Split composition: image right-dominant; copy left with H1 + lead + primary CTA.
   - Optional stat badge stack (e.g., “35+ Awards”).
 
 - **Feature/Service Cards**
   - Glass panel style, icon (stroke) + title + short copy.
   - Hover: raise 4px, glow edge, outline intensifies to rgba(34,211,238,0.18).
 
 - **Logos/Badges Row**
   - Greyscale client logos, 48–64px height, 40–64px gap. Desaturate to 0.75 opacity.
 
 - **Content Sections**
   - Section title H2 left, small divider line, balanced negative space.
 
 - **Cards**
   - Radius 12px, border `--line`, bg `rgba(255,255,255,0.03)`, shadow 0 8 24 rgba(0,0,0,0.45).
 
 - **Forms**
   - Inputs: dark fields `#0F141A`, 1px border `--line`, focus ring `--accent` 2px outer.
   - Labels 13px `--text-2`; help text 12–13px `--text-3`.
   - Checkbox/Radio: 18px with 2px focus ring.
 
 - **Tables (Admin)**
   - Row height 56px, zebra via alpha overlays, sticky header, compact numeric columns right-aligned.
   - Hover row: subtle glow on left border (2px `--accent`).
 
 - **Badges**
   - Solid or outline with light glow; sizes 20–24px height; rounded-full for status.
 
- **Breadcrumbs**
  - 13px, `--text-3` → `--text-2` on hover; divider “/”.
 
- **Modals**
  - Backdrop `rgba(0,0,0,0.6)` + soft cyan edge glow on container.
  - Max width 640/800; header with thin divider; close button top-right.
 
- **Notifications/Toasts**
  - Right/bottom stack; 72–88px width cards; colored 2px top border by state.
 
---
 
## 8) Motion & Interactions
 
- **Durations**: 150–220ms standard; 300–450ms for hero reveals.
- **Easings**: cubic-bezier(0.22, 1, 0.36, 1) for enter; (0.4, 0, 0.2, 1) for subtle UI.
- **Hover**: translateY(-2 to -4px) + shadow intensify + glow.
- **Focus visible**: 2px outer ring using `--accent` (always visible for keyboard users).
- **Parallax**: Optional slow 3–6deg tilt/parallax on hero image (reduced motion honors user prefs).
 
---
 
## 9) Accessibility
 
- Text/background AA: maintain ≥ 4.5:1; large text ≥ 3:1.
- Hit targets ≥ 40px touch size.
- Provide visible focus states; avoid color-only distinctions.
- Respect `prefers-reduced-motion` to remove non-essential animations.
 
---
 
## 10) Responsive Behavior (Key Patterns)
 
- **Header**: sticky; condense height on scroll; CTA remains visible.
- **Hero**: text scales down and stacks; CTA remains above the fold; image crops center-face via focal point.
- **Cards**: 1-col on xs/sm, 2-col on md, 3-col on lg+.
- **Logos**: wrap into 2–3 rows on small screens; maintain equal spacing.
- **Pricing grid**: 1-col on mobile, 3-col on ≥900px; featured card visually emphasized.
- **Tables**: collapse into cards on mobile with key-value rows.
 
---
 
## 11) Iconography
 
- Style: stroke icons (Lucide/Heroicons), 1.5px stroke, `--text-2` color.
- Hover/active: tint to `--accent` with subtle glow.
- Size: 20–24px in nav; 32–40px in feature cards.
 
---
 
## 12) Token Starter (CSS Variables)
 
Use as global base (SCSS/CSS). Extend in Tailwind if used.
 
```css
:root {
  --bg: #0B0F13;
  --surface-1: #0F141A;
  --surface-2: #111A22;
  --surface-3: #0E1F2A;
  --text-1: #F2F6FA;
  --text-2: #C6D0DC;
  --text-3: #8A98A9;
  --accent: #22D3EE;
  --accent-2: #7C3AED;
  --accent-3: #FF2D92;
  --accent-4: #FDE047;
  --line: rgba(255,255,255,0.06);
  --glow: rgba(34,211,238,0.45);
}
body { background: var(--bg); color: var(--text-1); }
.surface { background: var(--surface-1); border: 1px solid var(--line); }
.btn-primary { background: var(--accent); color: #000; box-shadow: 0 0 0 0 rgba(0,0,0,0); }
.btn-primary:hover { filter: brightness(1.05); box-shadow: 0 0 24px var(--glow); }
.hairline { border: 1px solid var(--line); }
```
 
---
 
## 13) Laravel Layout Architecture
 
We will structure Blade layouts for reuse across public, user, and admin experiences.
 
- **Layouts**
  - `resources/views/layouts/base.blade.php` — global `<html>` shell, meta, font loading, color variables, Vite assets, toasts.
  - `resources/views/layouts/public.blade.php` — extends `base`; header (transparent over hero), footer.
  - `resources/views/layouts/dashboard.blade.php` — extends `base`; user sidebar/topbar, content area with page header/breadcrumbs.
  - `resources/views/layouts/admin.blade.php` — extends `base`; denser grid, table-ready styles.
 
- **Shared Partials**
  - `partials/header.blade.php` — logo, nav, CTA.
  - `partials/footer.blade.php` — links, socials, compact newsletter form.
  - `partials/mobile-nav.blade.php` — full-screen drawer.
  - `partials/breadcrumbs.blade.php`
  - `partials/alerts.blade.php` — flash/notifications.
 
- **Blade Components (examples)**
  - `x-button`, `x-icon`, `x-card`, `x-badge`, `x-container`, `x-section`, `x-input`, `x-select`, `x-modal`.
 
- **Section Contracts**
  - `@section('title')` — page title
  - `@section('meta')` — optional meta tags
  - `@section('hero')` — hero slot (public)
  - `@section('content')` — main content
  - `@push('styles')` / `@push('scripts')` — page-level assets
 
- **Public Page Pattern**
  - Hero (image with overlay) → Logos strip → Services grid → Portfolio preview → CTA → Footer
 
- **Dashboard/Admin Pattern**
  - Header/topbar → Page title + actions → Filters → Table/cards → Pagination → Footer
 
---
 
## 14) Page-Level Composition Guidelines (Public)
 
- **Home**
  - Hero: H1 (max 2–3 lines), lead, primary CTA; right-side dominant portrait image.
  - Secondary split: "Awards/Stats" left + intro copy right.
  - Logos row; Services (6 icons/cards); Portfolio grid; Pre-footer CTA panel.
 
- **About**
  - Brand story with alternating image/text sections; team grid in glass cards.
 
- **Services**
  - Category tabs; each category with card matrix and comparison highlights.
 
- **Pricing**
  - Three-tier cards (Basic/Premium/Deluxe); feature checklist; neon accent on “Recommended”.
 
- **Contact**
  - Minimal form, map (muted colors), info blocks with icons.
 
---
 
## 15) Page-Level Composition Guidelines (Dashboard/Admin)
 
- **Density**: Increase information density while maintaining 8px grid and readable contrast.
- **Navigation**: Left rail (collapsed to icons on md) or topbar with quick actions.
- **Tables**: Sticky headers, compact rows, progressive disclosure drawers for details.
- **Forms**: Multi-step drawers or modals for edits; clear primary actions.
 
---
 
## 16) Copy & Tone
 
- Short, declarative headlines; minimal filler.
- Use active verbs on CTAs: “Book Now”, “Discover More”, “View Our Work”.
 
---
 
## 17) Quality Gates (Acceptance Criteria)
 
- Contrast passes AA; keyboard navigation end-to-end.
- Primary pages responsive at xs through 2xl with stable composition.
- Hero text legible over all approved images using overlay recipe.
- Buttons, inputs, and focus states match tokens and motion rules.
- Blade layouts render with consistent spacing and section paddings.
 
---
 
## 18) Quick Reference — Visual Recipes
 
- **Hero overlay**: image + `--grad-hero`; add `--grad-edge` corner; text shadow `0 2px 12px rgba(0,0,0,0.45)`.
- **Glass card**: bg `rgba(255,255,255,0.03)` + border `--line` + blur(8px) + glow on hover.
- **CTA**: `--grad-cta` background + outer glow + slight y-translation on hover.
- **Section divider**: 1px `--line` + 24px corner ticks.
- **Segmented control**: pill group with active segment using `--grad-cta`, radius 14px, ARIA `tablist`/`tab`.
- **Chips**: pill buttons `border: --line`, active state uses `--grad-cta`; single-select vs multi-select patterns.
- **Pricing card (glass)**: `rgba(255,255,255,0.04)` bg + `--line` border + blur(10px), radius 16px; featured variant increases border alpha and shadow.
 
---
 
## 19) Assets & Fonts (to load in base layout)
 
- Google Fonts (recommended): Space Grotesk (600–700), Inter (400–600).
- Icon set: Lucide or Heroicons (stroke 1.5px).
- Unsplash placeholders per section; compress hero images (≤ 350KB where possible).
 
---
 
## 20) Implementation Notes
 
- Use Vite for asset bundling in Laravel; define tokens in a root CSS and import everywhere.
- If using Tailwind, extend theme with above colors and radii; otherwise, author SCSS with variables.
- Create a small utilities layer: `.container`, `.section`, `.hairline`, `.surface`, `.glow`, `.sr-only`.
- Establish a “Reduced Motion” mode honoring user preferences.
 
---
 
## 21) Pricing & Packages — Interaction Spec
 
- **Components**
  - Segmented control for service: Photography/Videography (`role=tablist`, each `role=tab`, `aria-selected`).
  - Duration chips: 2/4/6/8 hrs (single-select).
  - Currency chips: GBP/USD (single-select, default GBP). Optional `data-rate-usd` and `data-rate-gbp` on section for conversion.
  - Glass pricing cards for tiers (Basic, Premium, Deluxe) with feature lists and CTA.
  - Add-ons chips (multi-select): drone, second shooter, 360° booth, express edits.
 
- **Behavior**
  - Grid: 1-col mobile → 3-col desktop; Premium card can be marked as featured.
  - Prices recompute on any change: base(service, hours, tier) + Σ(add-ons), apply currency conversion if USD or GBP.
  - Display format: currency symbol + localized amount (2 dp for GBP and USD). Update “hours” text in feature copy.
  - Focus/keyboard: segments and chips have visible focus; left/right (tabs) and enter/space selection.
  - Motion: reveal-on-scroll (stagger 60ms), hover lift + glow; pause animations with `prefers-reduced-motion`.
  
- **A11y**
  - Ensure `aria-selected` updates on toggle; chip groups labeled via `aria-label`.
  - Buttons maintain ≥40px tap targets and AA contrast.

---

## 21.1) Services Comparison (Services Page Variant)

- **Purpose**
  - Present Basic, Premium, and Deluxe tiers inline on the Services page with the same dynamic pricing logic as the Home Pricing section.

- **Layout**
  - Container: glass panel frame with subtle inner edge (`.pricing.compare .compare-frame`).
  - Header: centered kicker + H2. No subcopy needed.
  - Controls: segmented service switch (photo/video), duration chips (2/4/6/8), currency chips (GBP/USD).
  - Grid: 1-column mobile → 3-column ≥900px. Premium is featured and slightly lifted.

- **Visual**
  - Use base pricing card styles; increase radius to 18px; soft neon glow on hover.
  - Prices and formatting are driven entirely by shared JS; do not hardcode amounts.

- **Behavior**
  - Must include `data-pricing` root, `.segmented .seg`, `.chips.duration`, `.chips.currency`, `.pricing-card[data-tier]`, `.addons .chip.addon`.
  - Uses the same Intl currency formatting and hours substitution as the Home section.

- **A11y**
  - Segmented has `role=tablist`; each segment has `role=tab` and updates `aria-selected`.
  - Chip groups have `role=group` with `aria-label`. Cards are standard articles.

---
 
## 22) Testimonials Carousel — Design & Interaction Spec

- **Layout**
  - Full-width container with glass cards inside a masked viewport.
  - Single card per viewport on mobile; 80% width card on desktop for peeking effect.
  - Cards use glassmorphic style consistent with pricing cards.

- **Content**
  - Quote text (16–18px), client avatar (44px, circular), name (semibold), role (12px subdued), 5-star icons.

- **Controls & Motion**
  - Prev/Next arrow buttons: rounded-rect, hairline borders, hover glow.
  - Pagination dots centered below; active dot uses gradient accent.
  - Autoplay (5s), pause on hover, resumes on leave.
  - Swipe/drag on touch/desktop; keyboard arrows navigate.
  - Smooth slide transition (500ms, `cubic-bezier(0.22, 1, 0.36, 1)`).
  - Honors reduced-motion: disable transitions and autoplay.

- **A11y**
  - Dots have `role=tab` and update `aria-selected`.
  - Arrow buttons have `aria-label`.
  - Maintain focus states and 40px minimum targets.

---

## 23) Clients/Partners Grid — Design & Interaction Spec

- **Layout**
  - Section header centered: kicker (accent), H2 title with inline count, subline paragraph ≤ 62ch.
  - Grid uses glass cards with hairline borders and subtle blur.
  - Columns: 2 on mobile, 3 on ≥768px, 4 on ≥1024px; 12–16px gaps.

- **Content**
  - Each card contains a brand logo (image) or text label placeholder.
  - Default logos are greyscale at 85% opacity; transition to full-color/100% opacity on hover.
  - Optional animated client count number increments when section enters viewport; respects reduced motion.

- **Motion**
  - Reveal-on-scroll via `.reveal-group .reveal` with stagger.
  - Hover: raise by 2px, increase border alpha, add soft glow.
  - Counter animates over ~1200ms with ease-in-out; disabled when `prefers-reduced-motion`.

- **Responsive**
  - Card height ~92px mobile → 110px desktop; content vertically centered.
  - Logos scale with `max-height: 40px` to keep visual rhythm.

- **A11y**
  - Each card has `role="img"` and `aria-label` with brand name when using decorative text placeholders.
  - Maintain ≥40px tap targets; focus outlines visible and contrast-compliant.

---
