@props([
    'color' => null,
    'size' => null,
    'ghost' => false,
])

@php
$classes = 'file-input';
if ($color) $classes .= ' ' . match($color) {
    'neutral' => 'file-input-neutral',
    'primary' => 'file-input-primary',
    'secondary' => 'file-input-secondary',
    'accent' => 'file-input-accent',
    'info' => 'file-input-info',
    'success' => 'file-input-success',
    'warning' => 'file-input-warning',
    'error' => 'file-input-error',
    default => '',
};
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'file-input-xs',
    'sm' => 'file-input-sm',
    'md' => 'file-input-md',
    'lg' => 'file-input-lg',
    'xl' => 'file-input-xl',
    default => '',
};
if ($ghost) $classes .= ' file-input-ghost';
@endphp

<input type="file" {{ $attributes->merge(['class' => $classes]) }} />
