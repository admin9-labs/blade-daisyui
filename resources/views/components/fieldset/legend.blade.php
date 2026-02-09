@props([])

<legend {{ $attributes->merge(['class' => 'fieldset-legend']) }}>{{ $slot }}</legend>
