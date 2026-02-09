@props([])

@php
$classes = 'stat-desc';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
