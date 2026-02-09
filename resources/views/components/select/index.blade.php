@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
])

@php
$classes = 'select';
if ($color) $classes .= " select-{$color}";
if ($size) $classes .= " select-{$size}";
if ($ghost) $classes .= ' select-ghost';
@endphp

<select {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</select>
