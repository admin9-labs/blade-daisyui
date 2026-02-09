@props([
    'size' => null,
])

@php
$classes = 'dock';
if ($size) $classes .= " dock-{$size}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
