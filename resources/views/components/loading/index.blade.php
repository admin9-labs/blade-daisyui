@props([
    'type' => 'spinner',
    'size' => null,
])

@php
$classes = "loading loading-{$type}";
if ($size) $classes .= " loading-{$size}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}></span>
