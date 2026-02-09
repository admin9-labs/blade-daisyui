@props([])

<div {{ $attributes->merge(['class' => 'mockup-browser']) }}>{{ $slot }}</div>
