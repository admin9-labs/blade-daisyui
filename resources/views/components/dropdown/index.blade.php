@props([
    'position' => null,
    'hover' => false,
    'open' => false,
    'close' => false,
])

@php
$classes = 'dropdown';
if ($position) $classes .= ' ' . match($position) {
    'top' => 'dropdown-top',
    'bottom' => 'dropdown-bottom',
    'left' => 'dropdown-left',
    'right' => 'dropdown-right',
    'end' => 'dropdown-end',
    default => '',
};
if ($hover) $classes .= ' dropdown-hover';
if ($open) $classes .= ' dropdown-open';
if ($close) $classes .= ' dropdown-close';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
