@props([
    'icon' => null,
    'open' => false,
    'close' => false,
])

@php
$classes = 'collapse';
if ($icon) $classes .= ' ' . match($icon) {
    'arrow' => 'collapse-arrow',
    'plus' => 'collapse-plus',
    default => '',
};
if ($open) $classes .= ' collapse-open';
if ($close) $classes .= ' collapse-close';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
