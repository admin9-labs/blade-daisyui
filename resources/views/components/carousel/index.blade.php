@props([
    'snap' => null,
    'vertical' => false,
])

@php
$classes = 'carousel';
if ($snap) $classes .= " carousel-{$snap}";
if ($vertical) $classes .= ' carousel-vertical';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
