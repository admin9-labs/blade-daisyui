@props([])

@php
$classes = 'diff-item-1';
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'img', 'tabindex' => '0']) }}>{{ $slot }}</div>
