@props([])

@php
$classes = 'diff';
@endphp

<figure {{ $attributes->merge(['class' => $classes, 'tabindex' => '0']) }}>{{ $slot }}</figure>
