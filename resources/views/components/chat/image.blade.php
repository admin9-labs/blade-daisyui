@props([])

@php
$classes = 'chat-image';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
