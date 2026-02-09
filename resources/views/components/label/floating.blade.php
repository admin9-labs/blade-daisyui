@props([])

<label {{ $attributes->merge(['class' => 'floating-label']) }}>{{ $slot }}</label>
