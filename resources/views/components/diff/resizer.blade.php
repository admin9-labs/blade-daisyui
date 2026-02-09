@props([])

@php
$classes = 'diff-resizer';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}></div>
