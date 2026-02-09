@props([
    'horizontal' => false,
    'vertical' => false,
])

@php
$classes = 'stats';
if ($horizontal) $classes .= ' stats-horizontal';
if ($vertical) $classes .= ' stats-vertical';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
