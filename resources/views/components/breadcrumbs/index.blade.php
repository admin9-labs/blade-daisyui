@props([])

<div {{ $attributes->merge(['class' => 'breadcrumbs']) }}>
    <ul>{{ $slot }}</ul>
</div>
