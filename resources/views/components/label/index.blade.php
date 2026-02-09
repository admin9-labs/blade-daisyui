@props([])

<span {{ $attributes->merge(['class' => 'label']) }}>{{ $slot }}</span>
