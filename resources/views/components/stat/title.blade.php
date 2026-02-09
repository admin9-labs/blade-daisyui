@props([])

@php
$classes = 'stat-title';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
