@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
])

@php
$classes = 'file-input';
if ($color) $classes .= " file-input-{$color}";
if ($size) $classes .= " file-input-{$size}";
if ($ghost) $classes .= ' file-input-ghost';
@endphp

<input type="file" {{ $attributes->merge(['class' => $classes]) }} />
