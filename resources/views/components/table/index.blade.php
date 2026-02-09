@props([
    'zebra' => false,
    'pinRows' => false,
    'pinCols' => false,
    'size' => null,
])

@php
$classes = 'table';
if ($zebra) $classes .= ' table-zebra';
if ($pinRows) $classes .= ' table-pin-rows';
if ($pinCols) $classes .= ' table-pin-cols';
if ($size) $classes .= " table-{$size}";
@endphp

<table {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</table>
