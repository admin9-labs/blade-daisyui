@props([
    'color' => null,
    'size' => null,
    'variant' => null,
    'wide' => false,
    'block' => false,
    'square' => false,
    'circle' => false,
    'tag' => null,
    'active' => false,
    'disabled' => false,
])

@php
$allowedTags = ['button', 'a', 'input', 'label', 'span', 'div'];
$tag = in_array($tag, $allowedTags, true) ? $tag : 'button';

$classes = 'btn';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'btn-primary',
    'secondary' => 'btn-secondary',
    'accent' => 'btn-accent',
    'info' => 'btn-info',
    'success' => 'btn-success',
    'warning' => 'btn-warning',
    'error' => 'btn-error',
    'neutral' => 'btn-neutral',
    'ghost' => 'btn-ghost',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'btn-xs',
    'sm' => 'btn-sm',
    'md' => 'btn-md',
    'lg' => 'btn-lg',
    default => '',
};
if ($variant) $classes .= ' ' . match($variant) {
    'outline' => 'btn-outline',
    'link' => 'btn-link',
    'soft' => 'btn-soft',
    'dash' => 'btn-dash',
    default => '',
};
if ($wide) $classes .= ' btn-wide';
if ($block) $classes .= ' btn-block';
if ($square) $classes .= ' btn-square';
if ($circle) $classes .= ' btn-circle';
if ($active) $classes .= ' btn-active';
if ($disabled) $classes .= ' btn-disabled';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes])->when($disabled && $tag === 'button', fn ($a) => $a->merge(['disabled' => 'disabled'])) }}>{{ $slot }}</{{ $tag }}>
