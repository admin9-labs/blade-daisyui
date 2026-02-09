@props([])

@php
$classes = 'stat-actions';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
