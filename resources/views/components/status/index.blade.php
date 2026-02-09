@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'status';
if ($color) $classes .= " status-{$color}";
if ($size) $classes .= " status-{$size}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}></div>
