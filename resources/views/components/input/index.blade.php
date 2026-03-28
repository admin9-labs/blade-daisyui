@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'type' => 'text',
    'validator' => false,
])

@php
$classes = 'input';
if ($color) $classes .= ' ' . match($color) {
    'neutral' => 'input-neutral',
    'primary' => 'input-primary',
    'secondary' => 'input-secondary',
    'accent' => 'input-accent',
    'info' => 'input-info',
    'success' => 'input-success',
    'warning' => 'input-warning',
    'error' => 'input-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'input-xs',
    'sm' => 'input-sm',
    'md' => 'input-md',
    'lg' => 'input-lg',
    'xl' => 'input-xl',
    default => '',
};
if ($ghost) $classes .= ' input-ghost';
if ($validator) $classes .= ' validator';
@endphp

<input {{ $attributes->merge(['class' => $classes, 'type' => $type]) }} />
