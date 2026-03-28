@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'toggle';
if ($color) $classes .= ' ' . match($color) {
    'neutral' => 'toggle-neutral',
    'primary' => 'toggle-primary',
    'secondary' => 'toggle-secondary',
    'accent' => 'toggle-accent',
    'info' => 'toggle-info',
    'success' => 'toggle-success',
    'warning' => 'toggle-warning',
    'error' => 'toggle-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'toggle-xs',
    'sm' => 'toggle-sm',
    'md' => 'toggle-md',
    'lg' => 'toggle-lg',
    'xl' => 'toggle-xl',
    default => '',
};
@endphp

<input type="checkbox" {{ $attributes->merge(['class' => $classes]) }} />
