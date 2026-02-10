@props([
    'color' => null,
])

@php
$classes = 'chat-bubble';
if ($color) $classes .= ' ' . match($color) {
    'primary' => 'chat-bubble-primary',
    'secondary' => 'chat-bubble-secondary',
    'accent' => 'chat-bubble-accent',
    'info' => 'chat-bubble-info',
    'success' => 'chat-bubble-success',
    'warning' => 'chat-bubble-warning',
    'error' => 'chat-bubble-error',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
