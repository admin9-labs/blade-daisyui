@props([])

<div {{ $attributes->merge(['class' => 'filter']) }}>{{ $slot }}</div>
