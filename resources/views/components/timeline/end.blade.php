@props([
    'box' => false,
])

@php
$classes = 'timeline-end';
if ($box) $classes .= ' timeline-box';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
