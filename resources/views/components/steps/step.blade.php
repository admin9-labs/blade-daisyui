@props([
    'color' => null,
])

@php
$classes = 'step';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'step-primary',
    'secondary' => 'step-secondary',
    'accent' => 'step-accent',
    'info' => 'step-info',
    'success' => 'step-success',
    'warning' => 'step-warning',
    'error' => 'step-error',
    'neutral' => 'step-neutral',
    default => '',
};
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</li>
