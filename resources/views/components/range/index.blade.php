@props([
    'color' => null,
    'size' => null,
    'min' => null,
    'max' => null,
    'step' => null,
])

@php
$classes = 'range';
if ($color) $classes .= " range-{$color}";
if ($size) $classes .= " range-{$size}";
@endphp

<input type="range" {{ $attributes->merge(array_filter(['class' => $classes, 'min' => $min, 'max' => $max, 'step' => $step], fn ($v) => $v !== null)) }} />
