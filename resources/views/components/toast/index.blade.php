@props([
    'horizontal' => null,
    'vertical' => null,
])

@php
$classes = 'toast';
if ($horizontal) $classes .= ' ' . match($horizontal) {
    'start' => 'toast-start',
    'center' => 'toast-center',
    'end' => 'toast-end',
    default => '',
};
if ($vertical) $classes .= ' ' . match($vertical) {
    'top' => 'toast-top',
    'middle' => 'toast-middle',
    'bottom' => 'toast-bottom',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
