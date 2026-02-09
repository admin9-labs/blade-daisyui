@props([
    'end' => false,
])

@php
$classes = 'chat';
$classes .= $end ? ' chat-end' : ' chat-start';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
