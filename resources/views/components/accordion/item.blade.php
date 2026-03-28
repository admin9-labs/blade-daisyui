@props([
    'icon' => null,
    'name' => 'accordion',
    'checked' => false,
    'radio' => false,
    'title' => null,
])

@php
$classes = 'collapse';
if ($icon) $classes .= ' ' . match($icon) {
    'arrow' => 'collapse-arrow',
    'plus' => 'collapse-plus',
    default => '',
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($radio)
        <input type="radio" name="{{ $name }}" @if($checked) checked="checked" @endif />
    @else
        <input type="checkbox" @if($checked) checked="checked" @endif />
    @endif
    @if ($title)
        <div class="collapse-title text-base-content text-lg leading-7 font-semibold md:text-xl">{{ $title }}</div>
        <div class="collapse-content text-base-content/75 text-base leading-7">
            <div class="[&_a]:text-primary [&_a]:transition-colors [&_a]:duration-200 [&_p+p]:mt-4">
                {{ $slot }}
            </div>
        </div>
    @else
        {{ $slot }}
    @endif
</div>
