@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
    'validator' => false,
])

@php
$classes = 'textarea';
if ($color) $classes .= " textarea-{$color}";
if ($size) $classes .= " textarea-{$size}";
if ($ghost) $classes .= ' textarea-ghost';
if ($validator) $classes .= ' validator';
@endphp

<textarea {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</textarea>
