@props([])

@php
$classes = 'list-row';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</li>
