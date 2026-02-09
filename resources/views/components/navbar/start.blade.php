@props([])

<div {{ $attributes->merge(['class' => 'navbar-start']) }}>{{ $slot }}</div>
