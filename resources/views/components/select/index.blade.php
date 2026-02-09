@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'validator' => false,
])

@php
$classes = 'select';
if ($color) $classes .= " select-{$color}";
if ($size) $classes .= " select-{$size}";
if ($ghost) $classes .= ' select-ghost';
if ($validator) $classes .= ' validator';
@endphp

<select {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</select>
