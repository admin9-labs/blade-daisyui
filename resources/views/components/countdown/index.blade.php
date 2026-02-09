@props([
    'value' => 0,
])

@php
$classes = 'countdown';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    <span style="--value:{{ $value }};"></span>
</span>
