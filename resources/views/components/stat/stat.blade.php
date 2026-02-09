@props([])

@php
$classes = 'stat';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
