@props([])

<span {{ $attributes->merge(['class' => 'dock-label']) }}>{{ $slot }}</span>
