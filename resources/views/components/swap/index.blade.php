@props([
    'active' => false,
    'effect' => null,
])

@php
$classes = 'swap';
if ($active) $classes .= ' swap-active';
if ($effect) $classes .= ' ' . match($effect) {
    'rotate' => 'swap-rotate',
    'flip' => 'swap-flip',
    default => '',
};
@endphp

<label {{ $attributes->merge(['class' => $classes]) }}>
    @unless($active)
        <input type="checkbox" />
    @endunless

    @if(isset($on))
        <div class="swap-on">{{ $on }}</div>
    @endif

    @if(isset($off))
        <div class="swap-off">{{ $off }}</div>
    @endif

    @if(isset($indeterminate))
        <div class="swap-indeterminate">{{ $indeterminate }}</div>
    @endif

    {{ $slot }}
</label>
