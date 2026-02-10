@props([
    'half' => null,
    'shape' => 'star-2',
])

@php
$classes = 'mask ' . match($shape) {
    'star' => 'mask-star',
    'star-2' => 'mask-star-2',
    'heart' => 'mask-heart',
    'hexagon' => 'mask-hexagon',
    'hexagon-2' => 'mask-hexagon-2',
    'decagon' => 'mask-decagon',
    'pentagon' => 'mask-pentagon',
    'diamond' => 'mask-diamond',
    'square' => 'mask-square',
    'circle' => 'mask-circle',
    'squircle' => 'mask-squircle',
    'triangle' => 'mask-triangle',
    'triangle-2' => 'mask-triangle-2',
    'triangle-3' => 'mask-triangle-3',
    'triangle-4' => 'mask-triangle-4',
    default => 'mask-star-2',
};
if ($half) $classes .= ' ' . match($half) {
    '1' => 'mask-half-1',
    '2' => 'mask-half-2',
    default => '',
};
@endphp

<input {{ $attributes->merge(['class' => $classes, 'type' => 'radio']) }} />
