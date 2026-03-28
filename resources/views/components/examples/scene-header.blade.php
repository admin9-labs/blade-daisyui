@props([
    'containerClass',
    'kicker',
    'kickerClass',
    'title',
    'titleClass',
    'badge' => null,
    'badgeColor' => null,
    'badgeVariant' => null,
    'badgeClass' => 'font-semibold',
    'themeName',
    'themes' => [
        ['value' => 'corporate', 'label' => 'Corporate', 'checked' => true],
        ['value' => 'business', 'label' => 'Business'],
        ['value' => 'night', 'label' => 'Night'],
    ],
    'centerClass' => 'w-full justify-start md:w-auto md:justify-center',
    'endClass' => 'w-full justify-start md:w-auto md:justify-end',
    'themeGroupClass' => 'flex flex-wrap items-center gap-2',
    'themeWrapperClass' => null,
    'themeButtonClass' => 'btn btn-sm btn-ghost rounded-full',
    'actionLabel' => null,
    'actionClass' => 'rounded-full border border-base-content/15',
])

<x-dui::navbar class="{{ $containerClass }}">
    <x-dui::navbar.start class="w-full md:w-auto">
        <div>
            <p class="{{ $kickerClass }}">{{ $kicker }}</p>
            <p class="{{ $titleClass }}">{{ $title }}</p>
        </div>
    </x-dui::navbar.start>

    <x-dui::navbar.center class="{{ $centerClass }}">
        @if ($badge)
            <x-dui::badge
                @class([$badgeClass])
                @if($badgeColor) color="{{ $badgeColor }}" @endif
                @if($badgeVariant) variant="{{ $badgeVariant }}" @endif
            >{{ $badge }}</x-dui::badge>
        @endif
    </x-dui::navbar.center>

    <x-dui::navbar.end class="{{ $endClass }}">
        <div class="{{ $themeGroupClass }}">
            @if ($themeWrapperClass === 'join')
                <div class="join">
                    @foreach ($themes as $theme)
                        <x-dui::theme-controller
                            type="radio"
                            name="{{ $themeName }}"
                            value="{{ $theme['value'] }}"
                            aria-label="{{ $theme['label'] }}"
                            @checked($theme['checked'] ?? false)
                            class="{{ $themeButtonClass }} join-item"
                        />
                    @endforeach
                </div>
            @else
                @foreach ($themes as $theme)
                    <x-dui::theme-controller
                        type="radio"
                        name="{{ $themeName }}"
                        value="{{ $theme['value'] }}"
                        aria-label="{{ $theme['label'] }}"
                        @checked($theme['checked'] ?? false)
                        class="{{ $themeButtonClass }}"
                    />
                @endforeach
            @endif

            @if ($actionLabel)
                <x-dui::button size="sm" variant="ghost" class="{{ $actionClass }}">{{ $actionLabel }}</x-dui::button>
            @endif

            {{ $slot }}
        </div>
    </x-dui::navbar.end>
</x-dui::navbar>
