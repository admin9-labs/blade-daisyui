@props([
    'half' => null,
    'shape' => 'star-2',
])

@php
$classes = "mask mask-{$shape}";
if ($half) $classes .= " mask-half-{$half}";
@endphp

<input {{ $attributes->merge(['class' => $classes, 'type' => 'radio']) }} />
