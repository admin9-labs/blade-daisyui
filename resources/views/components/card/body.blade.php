@props([])

@php
$classes = 'card-body';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
