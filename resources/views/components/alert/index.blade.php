@props([
    'color' => null,
    'variant' => null,
    'direction' => null,
])

@php
$classes = 'alert';
if ($color) $classes .= ' ' . match($color) {
    'info' => 'alert-info',
    'success' => 'alert-success',
    'warning' => 'alert-warning',
    'error' => 'alert-error',
    default => '',
};
if ($variant) $classes .= ' ' . match($variant) {
    'outline' => 'alert-outline',
    'dash' => 'alert-dash',
    'soft' => 'alert-soft',
    default => '',
};
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'alert-horizontal',
    'vertical' => 'alert-vertical',
    default => '',
};
@endphp

<div role="alert" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
