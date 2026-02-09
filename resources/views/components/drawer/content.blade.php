@props([])

<div {{ $attributes->merge(['class' => 'drawer-content']) }}>{{ $slot }}</div>
