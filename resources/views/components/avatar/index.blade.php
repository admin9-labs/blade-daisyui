@props([
    'online' => false,
    'offline' => false,
    'placeholder' => false,
])

@php
$classes = 'avatar';
if ($online) $classes .= ' avatar-online';
if ($offline) $classes .= ' avatar-offline';
if ($placeholder) $classes .= ' avatar-placeholder';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
