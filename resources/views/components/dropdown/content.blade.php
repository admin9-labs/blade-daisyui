@props([])

<div {{ $attributes->merge(['class' => 'dropdown-content']) }}>{{ $slot }}</div>
