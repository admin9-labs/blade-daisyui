@props([])

@php
$classes = 'card-actions';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
