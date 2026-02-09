@props([])

<div {{ $attributes->merge(['class' => 'navbar']) }}>{{ $slot }}</div>
