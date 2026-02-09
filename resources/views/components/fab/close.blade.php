@props([])

<div {{ $attributes->merge(['class' => 'fab-close']) }}>{{ $slot }}</div>
