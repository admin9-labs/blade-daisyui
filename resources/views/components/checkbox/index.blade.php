@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'checkbox';
if ($color) $classes .= " checkbox-{$color}";
if ($size) $classes .= " checkbox-{$size}";
@endphp

<input type="checkbox" {{ $attributes->merge(['class' => $classes]) }} />
