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
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'table-xs',
    'sm' => 'table-sm',
    'md' => 'table-md',
    'lg' => 'table-lg',
    default => '',
};
@endphp

<table {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</table>
