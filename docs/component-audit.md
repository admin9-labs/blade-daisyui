# Component Audit

This document turns the showcase work into concrete component-level conclusions. It focuses on the parts of the package that most strongly define visual hierarchy in real layouts.

## How to use this file

1. Open both example views:
   - `blade-daisyui::examples.control-room`
   - `blade-daisyui::examples.landing-editorial`
   - `blade-daisyui::examples.settings-lab`
2. Compare the same component family across all three contexts.
3. Use the notes below to decide whether you need:
   - a code change in the wrapper
   - a docs constraint
   - a showcase adjustment

## Status scale

- `Stable` means the wrapper and the current examples communicate the component clearly.
- `Watch` means the component works, but visual misuse is easy.
- `Needs follow-up` means the API is acceptable, but the package should add stronger guidance or a better example.

## Actions

### Button

Status: `Stable`

What reads well:
- `primary` buttons dominate correctly across the showcase scenes.
- `ghost` and `dash` now work as true secondary actions instead of collapsing into undocumented styling.
- `xl` sizing is now available, which matters in hero/CTA contexts.

What to watch:
- Adjacent `primary` + `ghost` buttons are strong; three high-emphasis actions in one row usually flatten hierarchy.
- `circle` and `square` variants are visually loud and should stay attached to icon-only use cases.
- `tag="input"` is now valid HTML, but it should remain a niche use case.

Recommendation:
- Prefer one dominant action per section.
- In docs and examples, pair `primary` with `ghost` or `dash`, not with another filled button of equal size.

### Badge / Status

Status: `Watch`

What reads well:
- `soft` and `outline` badges are useful for state signaling without overpowering surrounding copy.
- `status-*` works well as a low-weight signal when paired with text.

What to watch:
- Badges are the easiest way to over-color a surface.
- Multiple badges in the same row can compete with table content, especially when mixed with filled buttons.
- `ghost` badges are visually subtle, but too many of them can look decorative rather than informative.

Recommendation:
- Use badges to encode state or category, not decoration.
- In dense tables, prefer `outline` or `soft` before using filled badge treatments.

### Alert

Status: `Stable`

What reads well:
- `soft` alerts work well inside cards and audit panels where the user needs a contextual warning instead of a full interruption.
- Horizontal alerts preserve scanability in management layouts.

What to watch:
- Filled alerts become heavy quickly when placed near other saturated components.
- Long alert copy needs width discipline or it starts behaving like a card rather than a notice.

Recommendation:
- Keep alerts short and situational.
- Prefer `soft` for embedded guidance, reserve stronger tones for edge/error states.

## Surfaces

### Card

Status: `Stable`

What reads well:
- `card-border` and `card-dash` now align with current DaisyUI semantics.
- Cards behave well as containers for stats, lists, and mixed action groups.
- `card.title` gives enough structure to create strong visual rhythm.

What to watch:
- Cards become visually flat when too many siblings share identical padding, border weight, and background tone.
- `side` layouts need stronger content asymmetry to avoid looking like an accidental split panel.

Recommendation:
- Vary card density and emphasis through content structure, not only background color.
- In showcases, keep at least one card in each cluster visually quieter than the lead card.

### Hero

Status: `Stable`

What reads well:
- `hero` adapts well to both operational and marketing contexts.
- The component is strong enough to anchor a page without extra wrapper logic.

What to watch:
- Hero sections can become generic very quickly if the content block, supporting stats, and CTA lane all use the same spacing rhythm.
- The package wrapper is intentionally thin; visual distinction depends on how the host layout styles the content inside it.

Recommendation:
- Keep hero examples intentionally art-directed.
- Treat `hero` as a composition anchor, not just a large padded container.

## Navigation

### Navbar

Status: `Stable`

What reads well:
- The start / center / end split works well in mixed utility + brand layouts.
- It supports both product UI and editorial use cases without extra abstraction.

What to watch:
- Center content loses meaning if the start and end regions become too dense.
- A navbar full of buttons, badges, and avatars starts to feel like a toolbar.

Recommendation:
- Keep one focal role per region.
- Use center content for identity or mode, not miscellaneous controls.

### Menu

Status: `Needs follow-up`

What reads well:
- The base wrapper is fine for side navigation and section lists.
- `menu.item` gives a reliable default for the common case.

What to watch:
- Menus are highly dependent on surrounding container styling, so raw component examples can look under-designed.
- `menu-active` is visually strong enough to require spacing and contrast discipline in the parent panel.
- Dropdown examples work structurally, but the package still relies on consumers to create a convincing expanded-state composition.

Recommendation:
- Keep using showcases to demonstrate menu context, not standalone snippets only.
- Future follow-up: add a more opinionated menu example page or doc section specifically for sidebar composition.

### Tab

Status: `Watch`

What reads well:
- The wrapper is now aligned with `tabs-border`, `tabs-lift`, and `tabs-box`.
- `tab.item` helps reduce inconsistent manual markup.

What to watch:
- Tabs are visually fragile when mixed with cards and panels that already have borders.
- `border` tabs and bordered content panels can easily create doubled lines and muddy edges.
- Radio-tab patterns are more layout-sensitive than anchor/button tabs.

Recommendation:
- Choose tabs only when the sibling content is truly parallel.
- In dense surfaces, prefer `lift` or `box` before stacking `border` tabs on top of another bordered panel.

## Inputs

### Input / Select / Textarea

Status: `Stable`

What reads well:
- `neutral` and `xl` now behave consistently, which is important for calmer form compositions.
- These wrappers stay visually coherent inside fieldsets and mixed card layouts.
- The settings lab proves they can coexist with helper text and validator hints without immediate spacing collapse.

What to watch:
- `ghost` inputs can disappear when the surrounding panel is already low-contrast.
- Large form controls need stronger vertical rhythm around labels and helper text; otherwise they feel bulky rather than premium.

Recommendation:
- Use `neutral` as the package default for composed forms when you want restraint.
- Use `ghost` only when the container already provides a visible boundary.

### Toggle / Checkbox / Radio / Range

Status: `Watch`

What reads well:
- The wrappers now support `neutral` and `xl`, which helps when these controls appear in settings-style panels.
- Small binary controls work well as supporting signals.

What to watch:
- These controls rarely carry hierarchy on their own; they need adjacent explanatory text.
- Large toggles and ranges can distort a calm form if they are visually louder than the submit action.

Recommendation:
- Pair binary controls with explicit copy and spacing.
- Avoid making them the most saturated object in a form section unless the control itself is the primary action.
- Re-check them in `blade-daisyui::examples.settings-lab` whenever you adjust form examples or control sizes.

## Data-dense components

### Table

Status: `Watch`

What reads well:
- Zebra rows and size controls work well for audit-style and operations-style layouts.
- The wrapper is thin enough to stay predictable.

What to watch:
- Tables inherit most of their visual success from the container around them.
- Dense rows, badges, and action buttons can quickly create a noisy right edge.
- `pinRows` and `pinCols` are useful, but they need careful host styling to avoid looking mechanically heavy.

Recommendation:
- Always review tables inside a card or panel, not on a blank page.
- In package examples, combine tables with badges sparingly and let the row text stay primary.

### Timeline / Stat / List

Status: `Stable`

What reads well:
- These components are excellent secondary structure tools.
- They help pages feel editorial or operational without needing custom abstractions.

What to watch:
- Overusing them on one screen can turn the page into a stack of equally weighted modules.
- Stats especially need surrounding quiet space or they stop feeling like summary signals.

Recommendation:
- Use them to break rhythm, not to replace all rhythm.

## Priority follow-up

### High-value doc work

- Add component-specific screenshots to the docs for `button`, `badge`, `card`, `tab`, and `input` families.
- Extend component docs with “best used for” and “avoid when” notes for high-frequency primitives.

### High-value example work

- Maintain the narrow-width audit pass across all showcase pages so future visual changes do not reintroduce clipping, overcrowded navbars, or collapsed action rows.

### Code changes not required yet

- No immediate wrapper refactor is required for `button`, `card`, `input`, `select`, `textarea`, or `table`.
- The next likely place for package-level refinement is `menu`, because its visual success is more context-dependent than most other wrappers.
