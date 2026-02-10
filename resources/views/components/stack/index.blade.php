@props([
    'position' => null,
])

@php
$classes = 'stack';
if ($position) $classes .= ' ' . match($position) {
    'top' => 'stack-top',
    'bottom' => 'stack-bottom',
    'left' => 'stack-left',
    'right' => 'stack-right',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
