@props([
    'size' => null,
])

@php
$classes = 'kbd';
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'kbd-xs',
    'sm' => 'kbd-sm',
    'md' => 'kbd-md',
    'lg' => 'kbd-lg',
    'xl' => 'kbd-xl',
    default => '',
};
@endphp

<kbd {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</kbd>
