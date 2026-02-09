@props([])

@php
$classes = 'timeline-middle';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
