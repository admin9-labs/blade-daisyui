@props([
    'active' => false,
])

@php
$classes = $active ? 'dock-active' : '';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
