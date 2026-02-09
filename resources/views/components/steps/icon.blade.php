@props([])

<span {{ $attributes->merge(['class' => 'step-icon']) }}>{{ $slot }}</span>
