@props([
    'active' => false,
    'disabled' => false,
    'tag' => 'button',
])

@php
$allowedTags = ['button', 'a', 'input'];
$tag = in_array($tag, $allowedTags, true) ? $tag : 'button';
$classes = 'join-item btn';
if ($active) $classes .= ' btn-active';
if ($disabled) $classes .= ' btn-disabled';
@endphp

@if ($tag === 'input')
    <input {{ $attributes->merge(['class' => $classes, 'type' => 'radio']) }} />
@else
    <{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</{{ $tag }}>
@endif
