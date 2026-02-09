@props([])

<div {{ $attributes->merge(['class' => 'modal-box']) }}>{{ $slot }}</div>
