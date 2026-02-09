@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'type' => 'text',
])

@php
$classes = 'input';
if ($color) $classes .= " input-{$color}";
if ($size) $classes .= " input-{$size}";
if ($ghost) $classes .= ' input-ghost';
@endphp

<input {{ $attributes->merge(['class' => $classes, 'type' => $type]) }} />
