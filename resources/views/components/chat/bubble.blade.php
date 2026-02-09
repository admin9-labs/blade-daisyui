@props([
    'color' => null,
])

@php
$classes = 'chat-bubble';
if ($color) $classes .= " chat-bubble-{$color}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
