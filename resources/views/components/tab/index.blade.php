@props([
    'variant' => null,
    'size' => null,
    'placement' => null,
])

@php
$classes = 'tabs';
if ($variant) $classes .= ' ' . match($variant) {
    'border' => 'tabs-border',
    'bordered' => 'tabs-border',
    'lift' => 'tabs-lift',
    'lifted' => 'tabs-lift',
    'box' => 'tabs-box',
    'boxed' => 'tabs-box',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'tabs-xs',
    'sm' => 'tabs-sm',
    'md' => 'tabs-md',
    'lg' => 'tabs-lg',
    'xl' => 'tabs-xl',
    default => '',
};
if ($placement) $classes .= ' ' . match($placement) {
    'top' => 'tabs-top',
    'bottom' => 'tabs-bottom',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'tablist']) }}>{{ $slot }}</div>
