@props([])

@php
$classes = 'carousel-item';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
