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
    'themeLabel' => 'Theme',
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
                color="{{ $badgeColor ?? '' }}"
                size=""
                variant="{{ $badgeVariant ?? '' }}"
                class="{{ $badgeClass }}"
            >{{ $badge }}</x-dui::badge>
        @endif
    </x-dui::navbar.center>

    <x-dui::navbar.end class="{{ $endClass }}">
        <div class="{{ $themeGroupClass }}">
            <span class="text-[0.68rem] font-bold uppercase tracking-[0.24em] text-base-content/45">{{ $themeLabel }}</span>
            @if ($themeWrapperClass === 'join')
                <div class="join" role="radiogroup" aria-label="{{ $themeLabel }}">
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
                <div role="radiogroup" aria-label="{{ $themeLabel }}" class="contents">
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
                </div>
            @endif

            @if ($actionLabel)
                <x-dui::button size="sm" variant="ghost" class="{{ $actionClass }}">{{ $actionLabel }}</x-dui::button>
            @endif

            {{ $slot }}
        </div>
    </x-dui::navbar.end>
</x-dui::navbar>
