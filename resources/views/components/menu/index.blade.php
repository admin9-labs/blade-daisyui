@props([
    'size' => null,
    'direction' => null,
])

@php
$classes = 'menu';
if ($size) $classes .= " menu-{$size}";
if ($direction) $classes .= " menu-{$direction}";
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
