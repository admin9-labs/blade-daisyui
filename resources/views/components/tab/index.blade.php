@props([
    'variant' => null,
    'size' => null,
    'placement' => null,
])

@php
$classes = 'tabs';
if ($variant) $classes .= " tabs-{$variant}";
if ($size) $classes .= " tabs-{$size}";
if ($placement) $classes .= " tabs-{$placement}";
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'tablist']) }}>{{ $slot }}</div>
