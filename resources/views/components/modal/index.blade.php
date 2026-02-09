@props([
    'open' => false,
    'position' => null,
    'id' => null,
])

@php
$classes = 'modal';
if ($open) $classes .= ' modal-open';
if ($position) $classes .= " modal-{$position}";
@endphp

<dialog {{ $attributes->merge(['class' => $classes])->when($id, fn ($a) => $a->merge(['id' => $id])) }}>{{ $slot }}</dialog>
