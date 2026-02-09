@props([])

<div {{ $attributes->merge(['class' => 'hero-content']) }}>{{ $slot }}</div>
