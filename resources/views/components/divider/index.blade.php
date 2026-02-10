@props([
    'color' => null,
    'direction' => null,
    'placement' => null,
    'label' => null,
])

@php
$classes = 'divider';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'divider-primary',
    'secondary' => 'divider-secondary',
    'accent' => 'divider-accent',
    'info' => 'divider-info',
    'success' => 'divider-success',
    'warning' => 'divider-warning',
    'error' => 'divider-error',
    'neutral' => 'divider-neutral',
    default => '',
};
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'divider-horizontal',
    'vertical' => 'divider-vertical',
    default => '',
};
if ($placement) $classes .= ' ' . match($placement) {
    'start' => 'divider-start',
    'end' => 'divider-end',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $label ?? $slot }}</div>
