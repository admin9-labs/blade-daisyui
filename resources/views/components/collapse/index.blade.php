@props([
    'icon' => null,
])

@php
$classes = 'collapse';
if ($icon) $classes .= " collapse-{$icon}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
