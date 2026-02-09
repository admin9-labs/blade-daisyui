@props([
    'half' => false,
    'hidden' => false,
    'size' => null,
])

@php
$classes = 'rating';
if ($half) $classes .= ' rating-half';
if ($size) $classes .= " rating-{$size}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($hidden)
        <input type="radio" class="rating-hidden" aria-label="clear" />
    @endif
    {{ $slot }}
</div>
