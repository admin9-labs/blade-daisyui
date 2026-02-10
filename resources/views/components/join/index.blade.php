@props([
    'direction' => null,
])

@php
$classes = 'join';
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'join-horizontal',
    'vertical' => 'join-vertical',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
