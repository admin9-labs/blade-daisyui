@props([
    'tip' => null,
    'position' => null,
    'color' => null,
    'open' => false,
])

@php
$classes = 'tooltip';
if ($position) $classes .= ' ' . match($position) {
    'top' => 'tooltip-top',
    'bottom' => 'tooltip-bottom',
    'left' => 'tooltip-left',
    'right' => 'tooltip-right',
    default => '',
};
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'tooltip-primary',
    'secondary' => 'tooltip-secondary',
    'accent' => 'tooltip-accent',
    'info' => 'tooltip-info',
    'success' => 'tooltip-success',
    'warning' => 'tooltip-warning',
    'error' => 'tooltip-error',
    default => '',
};
if ($open) $classes .= ' tooltip-open';
@endphp

<div {{ $attributes->merge(['class' => $classes])->when($tip, fn ($a) => $a->merge(['data-tip' => $tip])) }}>{{ $slot }}</div>
