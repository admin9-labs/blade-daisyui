@props([])

@php
$classes = 'chat-header';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
