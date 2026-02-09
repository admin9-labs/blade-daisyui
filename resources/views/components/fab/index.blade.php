@props([
    'flower' => false,
])

@php
$classes = 'fab';
if ($flower) $classes .= ' fab-flower';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
