@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'status';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'status-primary',
    'secondary' => 'status-secondary',
    'accent' => 'status-accent',
    'info' => 'status-info',
    'success' => 'status-success',
    'warning' => 'status-warning',
    'error' => 'status-error',
    'neutral' => 'status-neutral',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'status-xs',
    'sm' => 'status-sm',
    'md' => 'status-md',
    'lg' => 'status-lg',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}></div>
