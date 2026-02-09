@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
])

@php
$classes = 'textarea';
if ($color) $classes .= " textarea-{$color}";
if ($size) $classes .= " textarea-{$size}";
if ($ghost) $classes .= ' textarea-ghost';
@endphp

<textarea {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</textarea>
