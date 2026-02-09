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
if ($color) $classes .= " btn-{$color}";
if ($size) $classes .= " btn-{$size}";
if ($variant) $classes .= " btn-{$variant}";
if ($wide) $classes .= ' btn-wide';
if ($block) $classes .= ' btn-block';
if ($square) $classes .= ' btn-square';
if ($circle) $classes .= ' btn-circle';
if ($active) $classes .= ' btn-active';
if ($disabled) $classes .= ' btn-disabled';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes])->when($disabled && $tag === 'button', fn ($a) => $a->merge(['disabled' => 'disabled'])) }}>{{ $slot }}</{{ $tag }}>
