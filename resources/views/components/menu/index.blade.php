@props([
    'size' => null,
    'direction' => null,
])

@php
$classes = 'menu';
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'menu-xs',
    'sm' => 'menu-sm',
    'md' => 'menu-md',
    'lg' => 'menu-lg',
    'xl' => 'menu-xl',
    default => '',
};
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'menu-horizontal',
    'vertical' => 'menu-vertical',
    default => '',
};
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
