@props([])

@php
$classes = 'avatar-group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
