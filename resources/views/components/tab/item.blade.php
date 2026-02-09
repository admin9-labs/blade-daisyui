@props([
    'active' => false,
    'disabled' => false,
    'tag' => 'a',
])

@php
$allowedTags = ['a', 'button', 'input'];
$tag = in_array($tag, $allowedTags, true) ? $tag : 'a';
$classes = 'tab';
if ($active) $classes .= ' tab-active';
if ($disabled) $classes .= ' tab-disabled';
@endphp

@if ($tag === 'input')
    <input {{ $attributes->merge(['class' => $classes, 'type' => 'radio', 'role' => 'tab']) }} />
@else
    <{{ $tag }} {{ $attributes->merge(['class' => $classes, 'role' => 'tab']) }}>{{ $slot }}</{{ $tag }}>
@endif
