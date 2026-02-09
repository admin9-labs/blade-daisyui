@props([
    'color' => null,
    'size' => null,
])

@php
$classes = 'toggle';
if ($color) $classes .= " toggle-{$color}";
if ($size) $classes .= " toggle-{$size}";
@endphp

<input type="checkbox" {{ $attributes->merge(['class' => $classes]) }} />
