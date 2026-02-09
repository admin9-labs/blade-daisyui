@props([])

<div {{ $attributes->merge(['class' => 'drawer-side']) }}>{{ $slot }}</div>
