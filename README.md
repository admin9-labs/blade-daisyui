# Blade DaisyUI

Blade components for [DaisyUI 5](https://daisyui.com/) — pure UI, zero business logic.

Provides **65 components** as anonymous Blade views with a `<x-dui::*>` prefix, ready to drop into any Laravel 11/12 project that uses Tailwind CSS + DaisyUI 5.

## Requirements

- PHP 8.2+
- Laravel 11 or 12
- Tailwind CSS 4 + DaisyUI 5 (installed in your project)

## Installation

```bash
composer require admin9/blade-daisyui
```

The package auto-discovers its service provider. No manual registration needed.

## Usage

All components use the `dui` namespace:

```blade
{{-- Button --}}
<x-dui::button color="primary">Click me</x-dui::button>

{{-- Card --}}
<x-dui::card>
    <x-dui::card.body>
        <x-dui::card.title>Hello</x-dui::card.title>
        <p>Card content here.</p>
        <x-dui::card.actions>
            <x-dui::button color="primary">Buy Now</x-dui::button>
        </x-dui::card.actions>
    </x-dui::card.body>
</x-dui::card>

{{-- Badge --}}
<x-dui::badge color="secondary">New</x-dui::badge>

{{-- Alert --}}
<x-dui::alert color="info">Heads up!</x-dui::alert>

{{-- Modal --}}
<x-dui::modal id="my-modal">
    <x-dui::modal.box>Modal content</x-dui::modal.box>
</x-dui::modal>
```

## Components (65)

### Actions
accordion, alert, button, dropdown, fab, loading, modal, progress, radial-progress, skeleton, swap, toast, tooltip

### Data Display
avatar, badge, card, carousel, chat, countdown, diff, kbd, list, stat, status, table, timeline

### Data Input
calendar, checkbox, fieldset, file-input, filter, input, label, radio, range, rating, select, textarea, toggle, validator

### Layout
collapse, divider, dock, drawer, footer, hero, indicator, join, mask, navbar, stack

### Navigation
breadcrumbs, link, menu, pagination, steps, tab

### Mockup
mockup-browser, mockup-code, mockup-phone, mockup-window

### Effects
hover-3d, hover-gallery, text-rotate, theme-controller

## Props Convention

Components accept DaisyUI modifier props directly:

| Prop | Type | Description |
|------|------|-------------|
| `color` | string | DaisyUI color: `primary`, `secondary`, `accent`, `info`, `success`, `warning`, `error` |
| `size` | string | Size modifier: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | string | Style variant: `outline`, `soft`, `dash`, `ghost`, `link` (component-specific) |

All extra HTML attributes are forwarded to the root element via `$attributes->merge()`.

## Customizing Classes

Every component merges your classes with its defaults:

```blade
{{-- Adds "mt-4" alongside the built-in "btn btn-primary" --}}
<x-dui::button color="primary" class="mt-4">Go</x-dui::button>
```

## Visual Review

The package now includes curated example views under the `blade-daisyui::examples.*` namespace. Mount them in any Laravel app to exercise the components together and validate the visual hierarchy described in [`docs/visual-audit.md`](docs/visual-audit.md) :

```php
use Illuminate\Support\Facades\Route;

Route::view('/dui/control-room', 'blade-daisyui::examples.control-room');
Route::view('/dui/landing-editorial', 'blade-daisyui::examples.landing-editorial');
Route::view('/dui/settings-lab', 'blade-daisyui::examples.settings-lab');
```

- `blade-daisyui::examples.control-room` is the administrative control surface that stresses hierarchy, density, tables, alerts, and complex form combinations.
- `blade-daisyui::examples.landing-editorial` is a content-marketing scene that proves the same toolkit can compose gradients, hero storytelling, and layered badges without collapsing into a generic layout.
- `blade-daisyui::examples.settings-lab` is the form-heavy settings scene that stresses neutral controls, validation, filters, toggles, radios, and dense field groupings.

Use the `docs/visual-audit.md` checklist while stepping through both scenes so you notice density shifts, theme transitions, badge pressure, and form behavior before releasing component changes.

For component-level conclusions, see [`docs/component-audit.md`](docs/component-audit.md). That file summarizes which high-frequency primitives are visually stable, which ones are easy to misuse, and where follow-up work is actually worth doing.

### Recommended: Publish The Host Stubs

The package example views are content-only partials. The fastest way to use them in a real Laravel app is to publish the host wrapper views and the Tailwind/DaisyUI CSS stub:

```bash
php artisan vendor:publish --tag=blade-daisyui-stubs
```

This will publish:

- `resources/views/dui/control-room.blade.php`
- `resources/views/dui/landing-editorial.blade.php`
- `resources/views/dui/settings-lab.blade.php`
- `resources/css/vendor/blade-daisyui-examples.css`

The published wrapper views use:

```blade
@extends('layouts.app')

@section('content')
    @include('blade-daisyui::examples.control-room')
@endsection
```

If your app uses a component layout instead of `@extends`, just edit the published stubs.

### Minimal Host App Routes

Once the wrapper views are published, point routes to the host views instead of the package partials:

```php
use Illuminate\Support\Facades\Route;

Route::view('/dui/control-room', 'dui.control-room');
Route::view('/dui/landing-editorial', 'dui.landing-editorial');
Route::view('/dui/settings-lab', 'dui.settings-lab');
```

### Minimal Host App Styling Requirements

The published CSS stub contains the required Tailwind + DaisyUI imports and scans the package Blade files:

```css
@import "tailwindcss";
@plugin "daisyui";

@source "../views/**/*.blade.php";
@source "../js/**/*.js";
@source "../../vendor/admin9/blade-daisyui/resources/views/**/*.blade.php";
```

Make sure your layout still loads the compiled assets, for example:

```blade
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## Testing

```bash
composer test
```

## License

MIT. See [LICENSE.md](LICENSE.md).
