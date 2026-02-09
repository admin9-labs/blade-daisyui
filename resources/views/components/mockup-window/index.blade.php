@props([])

<div {{ $attributes->merge(['class' => 'mockup-window']) }}>{{ $slot }}</div>
