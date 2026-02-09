@props([])

@php
$classes = 'hover-gallery';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
