@props([])

@php
$classes = 'diff-item-2';
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'img']) }}>{{ $slot }}</div>
