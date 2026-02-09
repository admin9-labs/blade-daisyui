@props([
    'color' => null,
])

@php
$classes = 'step';
if ($color) $classes .= " step-{$color}";
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</li>
