@props([
    'half' => false,
    'hidden' => false,
    'size' => null,
])

@php
$classes = 'rating';
if ($half) $classes .= ' rating-half';
if ($size) $classes .= ' ' . match($size) {
    'xs' => 'rating-xs',
    'sm' => 'rating-sm',
    'md' => 'rating-md',
    'lg' => 'rating-lg',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($hidden)
        <input type="radio" class="rating-hidden" aria-label="clear" />
    @endif
    {{ $slot }}
</div>
