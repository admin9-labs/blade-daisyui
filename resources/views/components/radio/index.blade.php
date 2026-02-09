@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'radio';
if ($color) $classes .= " radio-{$color}";
if ($size) $classes .= " radio-{$size}";
@endphp

<input type="radio" {{ $attributes->merge(['class' => $classes]) }} />
