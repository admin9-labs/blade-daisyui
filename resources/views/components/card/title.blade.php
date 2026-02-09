@props([
    'tag' => null,
])

@php
$allowedTags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'span', 'div'];
$tag = in_array($tag, $allowedTags, true) ? $tag : 'h2';

$classes = 'card-title';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</{{ $tag }}>
