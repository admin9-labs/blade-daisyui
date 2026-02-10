@props([
    'variant' => null,
    'size' => null,
    'placement' => null,
])

@php
$classes = 'tabs';
if ($variant) $classes .= ' ' . match($variant) {
    'bordered' => 'tabs-bordered',
    'lifted' => 'tabs-lifted',
    'boxed' => 'tabs-boxed',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'tabs-xs',
    'sm' => 'tabs-sm',
    'md' => 'tabs-md',
    'lg' => 'tabs-lg',
    default => '',
};
if ($placement) $classes .= ' ' . match($placement) {
    'top' => 'tabs-top',
    'bottom' => 'tabs-bottom',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'tablist']) }}>{{ $slot }}</div>
