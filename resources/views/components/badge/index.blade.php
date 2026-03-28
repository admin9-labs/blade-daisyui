@props([
    'color' => null,
    'size' => null,
    'variant' => null,
])

@php
$classes = 'badge';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'badge-primary',
    'secondary' => 'badge-secondary',
    'accent' => 'badge-accent',
    'info' => 'badge-info',
    'success' => 'badge-success',
    'warning' => 'badge-warning',
    'error' => 'badge-error',
    'neutral' => 'badge-neutral',
    'ghost' => 'badge-ghost',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'badge-xs',
    'sm' => 'badge-sm',
    'md' => 'badge-md',
    'lg' => 'badge-lg',
    'xl' => 'badge-xl',
    default => '',
};
if ($variant) $classes .= ' ' . match($variant) {
    'outline' => 'badge-outline',
    'dash' => 'badge-dash',
    'soft' => 'badge-soft',
    'ghost' => 'badge-ghost',
    default => '',
};
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
