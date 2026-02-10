@props([
    'variant' => null,
    'size' => null,
    'side' => false,
])

@php
$classes = 'card';
if ($variant) $classes .= ' ' . match($variant) {
    'bordered' => 'card-bordered',
    'dash' => 'card-dash',
    'side' => 'card-side',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'compact' => 'card-compact',
    'normal' => 'card-normal',
    default => '',
};
if ($side) $classes .= ' card-side';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
