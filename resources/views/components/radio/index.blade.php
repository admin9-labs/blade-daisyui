@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'radio';
if ($color) $classes .= ' ' . match($color) {
    'neutral' => 'radio-neutral',
    'primary' => 'radio-primary',
    'secondary' => 'radio-secondary',
    'accent' => 'radio-accent',
    'info' => 'radio-info',
    'success' => 'radio-success',
    'warning' => 'radio-warning',
    'error' => 'radio-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'radio-xs',
    'sm' => 'radio-sm',
    'md' => 'radio-md',
    'lg' => 'radio-lg',
    'xl' => 'radio-xl',
    default => '',
};
@endphp

<input type="radio" {{ $attributes->merge(['class' => $classes]) }} />
