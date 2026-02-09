@props([])

@php
$classes = 'chat-footer';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
