@props([
    'color' => null,
    'value' => null,
    'max' => 100,
])

@php
$classes = 'progress';
if ($color) $classes .= " progress-{$color}";
@endphp

<progress {{ $attributes->merge(['class' => $classes]) }} @if(!is_null($value)) value="{{ $value }}" @endif max="{{ $max }}"></progress>
