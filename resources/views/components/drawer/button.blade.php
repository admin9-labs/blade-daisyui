@props([])

<label {{ $attributes->merge(['class' => 'btn drawer-button']) }}>{{ $slot }}</label>
