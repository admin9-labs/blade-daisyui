@props([
    'size' => null,
])

@php
$classes = 'kbd';
if ($size) $classes .= " kbd-{$size}";
@endphp

<kbd {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</kbd>
