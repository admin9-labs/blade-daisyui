@props([])

<li {{ $attributes->merge(['class' => 'menu-title']) }}>{{ $slot }}</li>
