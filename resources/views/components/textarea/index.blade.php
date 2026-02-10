@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'validator' => false,
])

@php
$classes = 'textarea';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'textarea-primary',
    'secondary' => 'textarea-secondary',
    'accent' => 'textarea-accent',
    'info' => 'textarea-info',
    'success' => 'textarea-success',
    'warning' => 'textarea-warning',
    'error' => 'textarea-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'textarea-xs',
    'sm' => 'textarea-sm',
    'md' => 'textarea-md',
    'lg' => 'textarea-lg',
    default => '',
};
if ($ghost) $classes .= ' textarea-ghost';
if ($validator) $classes .= ' validator';
@endphp

<textarea {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</textarea>
