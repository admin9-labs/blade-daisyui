# Visual Audit

This repo ships low-level Blade wrappers around DaisyUI 5, so the most powerful way to validate the work is by putting several components into high-stress compositions and checking the visual cues you rely on.

## What to inspect

1. **Purpose of the showcases** – `blade-daisyui::examples.control-room` is the administrative control surface for hierarchy, density, and state transitions. `blade-daisyui::examples.landing-editorial` demonstrates how the same toolkit behaves in a marketing/content context with layered art direction. `blade-daisyui::examples.settings-lab` isolates form density, validation hints, toggles, radios, and neutral controls. Always open these views after a change to confirm the intended visual context is still readable.
2. **Quick sanity check** – verify the Blade view renders inside a Laravel host by mounting it with `Route::view('/dui/<anchor>', 'blade-daisyui::examples.<anchor>')` and confirming the `hero`, `navbar`, `timeline`, `table`, `alert`, and `form` blocks all appear together. This guarantees the namespace is configured properly.

## Checklist

### Hierarchy
- Confirm navigation vs. hero vs. cards keep distinct spacing/contrast so signal ordering feels intentional.
- Make sure large text components (`hero`, `card.title`, `stat.title`) lean on `font-black` / `text-2xl+` while metadata (badges, desc) stays subtle to avoid visual flattening.
- Watch for places where DaisyUI defaults overlap (mixed `btn`, `badge`, `status`) and adjust spacing via `gap`/`padding` so hierarchy remains clear.

### Density & layout
- Stress-test the `table` and list rows: zebra stripes, border widths, `table-md`/`table-lg`, and `list-row` spacing should keep data legible when you compress viewport width.
- Ensure panels such as the control-room sidebar or editorial card grid keep a consistent gutter system (16–24px) so components don’t collide visually.
- On narrow widths, watch for toolbar rows collapsing badly: navbars, CTA lanes, table action bars, and status rows should stack cleanly instead of clipping or forcing horizontal scroll.

### Actions
- Check `btn` variations at `xl`, `ghost`, `dash`, `outline`, and `soft` in each showcase. Primary buttons should dominate, tertiary/ghost buttons should be contained, and no two adjacent buttons should fight for attention.
- Look at `swap`, `fab`, `toggle`, and `link` combinations for hover/focus states (ghost vs filled) so interactions remain readable under both light and dark backgrounds.

### Badges & chips
- Review badges that signal status: `badge-soft`, `badge-ghost`, `status-*`, and `indicator` elements should use DaisyUI color concordance so you can read tone without relying on labels.
- Confirm multi-badge clusters (e.g., boarding table rows) maintain padding and don’t wrap unexpectedly; ghost variants help keep them subtle.

### Tables & grids
- Validator: `table`, `table-zebra`, and `table-pin-*` should stay readable as rows shrink. Watch for text overflow on owner/stream columns and insert `truncate` utilities if needed.
- Use `card` and `hero` sections to wrap tables, then ensure `border`/`bordered` combos still touch correctly with the overall grid (no double borders or weird gaps).

### Forms & inputs
- Test `input`, `select`, `textarea`, `file-input`, `range`, and `toggle` with `neutral` color and `xl` size settings so they stay consistent where the showcase needs calm controls.
- Trigger `ghost` variants and `validator` flags to verify states still stack visually (labels, hints, fieldsets) without breaking grid alignment.
- In `settings-lab`, check that submit actions remain visually dominant after controls stack to one column on small screens.

### Theme transitions
- The `theme-controller` switch in the showcases lets you cycle between `corporate`, `business`, and `night`. For each theme inspect backgrounds, shadows, and text contrast to ensure component classes adjust cleanly (e.g., `btn-neutral`, `badge-neutral`, `alert-soft`).
- Track gradient overlays, noise, and glassy textures across all three showcases to make sure they don't conflict with DaisyUI color utilities.

### Host layout boundary
- Treat the example views as content partials that inherit the host Laravel app shell. The host should own page background, global typography, and outer layout framing.
- Keep visual atmosphere attached to local surfaces such as hero panels, cards, and audit shells instead of painting the whole viewport inside the package view.
- When reviewing host integration, confirm the examples still read clearly on top of the app's existing background and spacing system.

By keeping this checklist in mind, you can rapidly evaluate whether component changes still behave visually in the three curated contexts. Add new notes to this document whenever you notice an audit pattern that should be tracked on future changes.
