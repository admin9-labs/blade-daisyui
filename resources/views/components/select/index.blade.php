@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'validator' => false,
])

@php
$classes = 'select';
if ($color) $classes .= ' ' . match($color) {
    'neutral' => 'select-neutral',
    'primary' => 'select-primary',
    'secondary' => 'select-secondary',
    'accent' => 'select-accent',
    'info' => 'select-info',
    'success' => 'select-success',
    'warning' => 'select-warning',
    'error' => 'select-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'select-xs',
    'sm' => 'select-sm',
    'md' => 'select-md',
    'lg' => 'select-lg',
    'xl' => 'select-xl',
    default => '',
};
if ($ghost) $classes .= ' select-ghost';
if ($validator) $classes .= ' validator';
@endphp

<select {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</select>
