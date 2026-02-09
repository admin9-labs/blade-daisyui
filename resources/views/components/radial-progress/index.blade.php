@props([
    'value' => 0,
    'size' => null,
    'thickness' => null,
])

@php
$classes = 'radial-progress';
$style = "--value:{$value};";
if ($size) $style .= " --size:{$size};";
if ($thickness) $style .= " --thickness:{$thickness};";
@endphp

<div {{ $attributes->merge(['class' => $classes, 'style' => $style, 'role' => 'progressbar', 'aria-valuenow' => $value]) }}>{{ $slot }}</div>
