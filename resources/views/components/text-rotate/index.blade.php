@props([])

@php
$classes = 'text-rotate';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
