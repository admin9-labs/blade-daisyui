@props([
    'color' => null,
    'size' => null,
    'min' => null,
    'max' => null,
    'step' => null,
])

@php
$classes = 'range';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'range-primary',
    'secondary' => 'range-secondary',
    'accent' => 'range-accent',
    'info' => 'range-info',
    'success' => 'range-success',
    'warning' => 'range-warning',
    'error' => 'range-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'range-xs',
    'sm' => 'range-sm',
    'md' => 'range-md',
    'lg' => 'range-lg',
    default => '',
};
@endphp

<input type="range" {{ $attributes->merge(array_filter(['class' => $classes, 'min' => $min, 'max' => $max, 'step' => $step], fn ($v) => $v !== null)) }} />
