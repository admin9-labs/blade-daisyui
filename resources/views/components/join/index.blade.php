@props([
    'direction' => null,
])

@php
$classes = 'join';
if ($direction) $classes .= " join-{$direction}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
