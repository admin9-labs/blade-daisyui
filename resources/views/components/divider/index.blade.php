@props([
    'color' => null,
    'direction' => null,
    'placement' => null,
    'label' => null,
])

@php
$classes = 'divider';
if ($color) $classes .= " divider-{$color}";
if ($direction) $classes .= " divider-{$direction}";
if ($placement) $classes .= " divider-{$placement}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $label ?? $slot }}</div>
