@props([
    'center' => false,
    'direction' => null,
])

@php
$classes = 'footer';
if ($center) $classes .= ' footer-center';
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'footer-horizontal',
    'vertical' => 'footer-vertical',
    default => '',
};
@endphp

<footer {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</footer>
