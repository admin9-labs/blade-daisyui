@props([
    'end' => false,
    'open' => false,
    'id' => null,
])

@php
$classes = 'drawer';
if ($end) $classes .= ' drawer-end';
if ($open) $classes .= ' drawer-open';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
