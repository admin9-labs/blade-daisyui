@props([
    'open' => false,
    'position' => null,
    'id' => null,
])

@php
$classes = 'modal';
if ($open) $classes .= ' modal-open';
if ($position) $classes .= ' ' . match($position) {
    'top' => 'modal-top',
    'middle' => 'modal-middle',
    'bottom' => 'modal-bottom',
    default => '',
};
@endphp

<dialog {{ $attributes->merge(['class' => $classes])->when($id, fn ($a) => $a->merge(['id' => $id])) }}>{{ $slot }}</dialog>
