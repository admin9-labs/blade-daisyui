@props([])

@php
$classes = 'stat-value';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
