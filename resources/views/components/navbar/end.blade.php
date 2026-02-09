@props([])

<div {{ $attributes->merge(['class' => 'navbar-end']) }}>{{ $slot }}</div>
