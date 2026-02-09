@props([
    'position' => null,
    'hover' => false,
    'open' => false,
    'close' => false,
])

@php
$classes = 'dropdown';
if ($position) $classes .= " dropdown-{$position}";
if ($hover) $classes .= ' dropdown-hover';
if ($open) $classes .= ' dropdown-open';
if ($close) $classes .= ' dropdown-close';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
