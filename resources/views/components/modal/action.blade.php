@props([])

<div {{ $attributes->merge(['class' => 'modal-action']) }}>{{ $slot }}</div>
