@props([])

@php
$classes = 'join-item';
@endphp

{{-- join-item is a utility class added to child elements, not a wrapper --}}
<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
