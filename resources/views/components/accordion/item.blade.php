@props([
    'icon' => null,
    'name' => 'accordion',
    'checked' => false,
    'radio' => false,
    'title' => null,
])

@php
$classes = 'collapse';
if ($icon) $classes .= " collapse-{$icon}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($radio)
        <input type="radio" name="{{ $name }}" @if($checked) checked="checked" @endif />
    @else
        <input type="checkbox" @if($checked) checked="checked" @endif />
    @endif
    @if ($title)
        <div class="collapse-title">{{ $title }}</div>
        <div class="collapse-content">{{ $slot }}</div>
    @else
        {{ $slot }}
    @endif
</div>
