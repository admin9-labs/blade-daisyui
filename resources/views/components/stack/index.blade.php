@props([
    'position' => null,
])

@php
$classes = 'stack';
if ($position) $classes .= " stack-{$position}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
