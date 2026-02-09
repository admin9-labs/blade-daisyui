@props([
    'direction' => null,
])

@php
$classes = 'steps';
if ($direction) $classes .= " steps-{$direction}";
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
