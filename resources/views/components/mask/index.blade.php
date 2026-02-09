@props([
    'shape' => null,
    'half' => null,
])

@php
$classes = 'mask';
if ($shape) $classes .= " mask-{$shape}";
if ($half) $classes .= " mask-half-{$half}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
