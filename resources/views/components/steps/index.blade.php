@props([
    'direction' => null,
])

@php
$classes = 'steps';
if ($direction) $classes .= ' ' . match($direction) {
    'horizontal' => 'steps-horizontal',
    'vertical' => 'steps-vertical',
    default => '',
};
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</ul>
