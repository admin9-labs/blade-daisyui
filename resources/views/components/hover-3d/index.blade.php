@props([])

@php
$classes = 'hover-3d';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
