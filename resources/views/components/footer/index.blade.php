@props([
    'center' => false,
    'direction' => null,
])

@php
$classes = 'footer';
if ($center) $classes .= ' footer-center';
if ($direction) $classes .= " footer-{$direction}";
@endphp

<footer {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</footer>
