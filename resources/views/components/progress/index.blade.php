@props([
    'color' => null,
    'value' => null,
    'max' => 100,
])

@php
$classes = 'progress';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'progress-primary',
    'secondary' => 'progress-secondary',
    'accent' => 'progress-accent',
    'info' => 'progress-info',
    'success' => 'progress-success',
    'warning' => 'progress-warning',
    'error' => 'progress-error',
    default => '',
};
@endphp

<progress {{ $attributes->merge(['class' => $classes]) }} @if(!is_null($value)) value="{{ $value }}" @endif max="{{ $max }}"></progress>
