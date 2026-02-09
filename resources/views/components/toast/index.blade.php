@props([
    'horizontal' => null,
    'vertical' => null,
])

@php
$classes = 'toast';
if ($horizontal) $classes .= " toast-{$horizontal}";
if ($vertical) $classes .= " toast-{$vertical}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
