@props([
    'color' => null,
    'hover' => false,
])

@php
$classes = 'link';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'link-primary',
    'secondary' => 'link-secondary',
    'accent' => 'link-accent',
    'neutral' => 'link-neutral',
    default => '',
};
if ($hover) $classes .= ' link-hover';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
