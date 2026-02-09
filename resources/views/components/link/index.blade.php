@props([
    'color' => null,
    'hover' => false,
])

@php
$classes = 'link';
if ($color) $classes .= " link-{$color}";
if ($hover) $classes .= ' link-hover';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
