@props([])

<div {{ $attributes->merge(['class' => 'indicator']) }}>{{ $slot }}</div>
