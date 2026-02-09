@props([
    'horizontal' => null,
    'vertical' => null,
])

@php
$classes = 'indicator-item';
if ($horizontal) $classes .= " indicator-{$horizontal}";
if ($vertical) $classes .= " indicator-{$vertical}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
