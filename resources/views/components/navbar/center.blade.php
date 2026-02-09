@props([])

<div {{ $attributes->merge(['class' => 'navbar-center']) }}>{{ $slot }}</div>
