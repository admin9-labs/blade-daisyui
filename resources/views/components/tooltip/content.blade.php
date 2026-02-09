@props([])

<div {{ $attributes->merge(['class' => 'tooltip-content']) }}>{{ $slot }}</div>
