@props([])

@php
$classes = 'list';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
