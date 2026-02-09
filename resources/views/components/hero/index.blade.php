@props([])

<div {{ $attributes->merge(['class' => 'hero']) }}>{{ $slot }}</div>
