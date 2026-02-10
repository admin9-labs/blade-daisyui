@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'checkbox';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'checkbox-primary',
    'secondary' => 'checkbox-secondary',
    'accent' => 'checkbox-accent',
    'info' => 'checkbox-info',
    'success' => 'checkbox-success',
    'warning' => 'checkbox-warning',
    'error' => 'checkbox-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'checkbox-xs',
    'sm' => 'checkbox-sm',
    'md' => 'checkbox-md',
    'lg' => 'checkbox-lg',
    default => '',
};
@endphp

<input type="checkbox" {{ $attributes->merge(['class' => $classes]) }} />
