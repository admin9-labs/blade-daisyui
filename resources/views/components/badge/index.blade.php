@props([
    'color' => null,
    'size' => null,
    'variant' => null,
])

@php
$classes = 'badge';
if ($color) $classes .= " badge-{$color}";
if ($size) $classes .= " badge-{$size}";
if ($variant) $classes .= " badge-{$variant}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
