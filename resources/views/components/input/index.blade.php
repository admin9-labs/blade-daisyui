@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'type' => 'text',
    'validator' => false,
])

@php
$classes = 'input';
if ($color) $classes .= " input-{$color}";
if ($size) $classes .= " input-{$size}";
if ($ghost) $classes .= ' input-ghost';
if ($validator) $classes .= ' validator';
@endphp

<input {{ $attributes->merge(['class' => $classes, 'type' => $type]) }} />
