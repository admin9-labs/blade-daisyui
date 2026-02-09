@props([
    'active' => false,
    'disabled' => false,
])

@php
$classes = '';
if ($active) $classes .= ' menu-active';
if ($disabled) $classes .= ' menu-disabled';
$classes = trim($classes);
@endphp

<li><a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a></li>
