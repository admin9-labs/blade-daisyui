@props([
    'color' => null,
    'variant' => null,
    'direction' => null,
])

@php
$classes = 'alert';
if ($color) $classes .= " alert-{$color}";
if ($variant) $classes .= " alert-{$variant}";
if ($direction) $classes .= " alert-{$direction}";
@endphp

<div role="alert" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
