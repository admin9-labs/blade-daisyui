@props([
    'snapIcon' => false,
    'compact' => false,
    'horizontal' => false,
    'vertical' => false,
])

@php
$classes = 'timeline';
if ($snapIcon) $classes .= ' timeline-snap-icon';
if ($compact) $classes .= ' timeline-compact';
if ($horizontal) $classes .= ' timeline-horizontal';
if ($vertical) $classes .= ' timeline-vertical';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
