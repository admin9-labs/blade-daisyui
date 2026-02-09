@props([
    'tip' => null,
    'position' => null,
    'color' => null,
    'open' => false,
])

@php
$classes = 'tooltip';
if ($position) $classes .= " tooltip-{$position}";
if ($color) $classes .= " tooltip-{$color}";
if ($open) $classes .= ' tooltip-open';
@endphp

<div {{ $attributes->merge(['class' => $classes])->when($tip, fn ($a) => $a->merge(['data-tip' => $tip])) }}>{{ $slot }}</div>
