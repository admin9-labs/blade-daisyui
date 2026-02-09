@props([])

<div {{ $attributes->merge(['class' => 'validator-hint']) }}>{{ $slot }}</div>
