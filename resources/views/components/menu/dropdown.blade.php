@props([
    'show' => false,
])

@php
$classes = 'menu-dropdown';
if ($show) $classes .= ' menu-dropdown-show';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
