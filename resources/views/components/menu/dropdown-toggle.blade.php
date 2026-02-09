@props([
    'show' => false,
])

@php
$classes = 'menu-dropdown-toggle';
if ($show) $classes .= ' menu-dropdown-show';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
