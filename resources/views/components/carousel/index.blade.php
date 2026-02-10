@props([
    'snap' => null,
    'vertical' => false,
])

@php
$classes = 'carousel';
if ($snap) $classes .= ' ' . match($snap) {
    'start' => 'carousel-start',
    'center' => 'carousel-center',
    'end' => 'carousel-end',
    default => '',
};
if ($vertical) $classes .= ' carousel-vertical';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
