@props([
    'type' => 'spinner',
    'size' => null,
])

@php
$classes = 'loading ' . match($type) {
    'spinner' => 'loading-spinner',
    'dots' => 'loading-dots',
    'ring' => 'loading-ring',
    'ball' => 'loading-ball',
    'bars' => 'loading-bars',
    'infinity' => 'loading-infinity',
    default => 'loading-spinner',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'loading-xs',
    'sm' => 'loading-sm',
    'md' => 'loading-md',
    'lg' => 'loading-lg',
    'xl' => 'loading-xl',
    default => '',
};
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}></span>
