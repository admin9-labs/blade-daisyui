@props([])

@php
$classes = 'stat-figure';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
