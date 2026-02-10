@props([
    'horizontal' => null,
    'vertical' => null,
])

@php
$classes = 'indicator-item';
if ($horizontal) $classes .= ' ' . match($horizontal) {
    'start' => 'indicator-start',
    'center' => 'indicator-center',
    'end' => 'indicator-end',
    default => '',
};
if ($vertical) $classes .= ' ' . match($vertical) {
    'top' => 'indicator-top',
    'middle' => 'indicator-middle',
    'bottom' => 'indicator-bottom',
    default => '',
};
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
