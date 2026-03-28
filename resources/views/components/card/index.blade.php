@props([
    'variant' => null,
    'size' => null,
    'side' => false,
])

@php
$classes = 'card';
if ($variant) $classes .= ' ' . match($variant) {
    'border' => 'card-border',
    'bordered' => 'card-border',
    'dash' => 'card-dash',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'card-xs',
    'sm' => 'card-sm',
    'md' => 'card-md',
    'lg' => 'card-lg',
    'xl' => 'card-xl',
    'compact' => 'card-sm',
    'normal' => 'card-md',
    default => '',
};
if ($side) $classes .= ' card-side';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
