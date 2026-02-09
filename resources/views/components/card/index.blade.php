@props([
    'variant' => null,
    'size' => null,
    'side' => false,
])

@php
$classes = 'card';
if ($variant) $classes .= " card-{$variant}";
if ($size) $classes .= " card-{$size}";
if ($side) $classes .= ' card-side';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
