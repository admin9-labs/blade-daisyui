@props([
    'text' => false,
])

@php
$classes = 'skeleton';
if ($text) $classes .= ' skeleton-text';
@endphp

@if($text)
<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
@else
<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
@endif
