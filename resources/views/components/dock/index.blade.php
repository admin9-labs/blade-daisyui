@props([
    'size' => null,
])

@php
$classes = 'dock';
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'dock-xs',
    'sm' => 'dock-sm',
    'md' => 'dock-md',
    'lg' => 'dock-lg',
    'xl' => 'dock-xl',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
