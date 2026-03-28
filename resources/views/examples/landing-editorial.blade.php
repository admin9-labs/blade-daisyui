@php
    $features = [
        ['title' => 'Narrative-ready layouts', 'desc' => 'Every component respects editorial rhythm—hero, quote, and data tiles sit in one narrative without extra overrides.', 'tone' => 'accent'],
        ['title' => 'Action-first CTA', 'desc' => 'Buttons, badges, and panels wear fresh accent colors so conversions pop across light or dark publisher skins.', 'tone' => 'primary'],
        ['title' => 'Content + data fusion', 'desc' => 'Stats, testimonials, and reader stories coexist with tables and filters articulated in one visual language.', 'tone' => 'neutral'],
    ];

    $testimonials = [
        ['person' => 'Lena Ortiz', 'role' => 'Creative Director, Lumen Studio', 'quote' => 'The landing page feels bespoke despite being built from composable Blade dolls. The component library finally looks editorial.', 'tone' => 'success'],
        ['person' => 'Rory Kim', 'role' => 'Product Story Lead', 'quote' => 'We shipped the story-first funnel with zero overrides because the typography and cards already sing.', 'tone' => 'info'],
    ];

    $timeline = [
        ['label' => 'Concept', 'date' => 'Jan 12', 'detail' => 'Narrative sections mapped to hero > features > testimonials.'],
        ['label' => 'Design', 'date' => 'Jan 28', 'detail' => 'Control-room audit informed color ratios and button emphasis.'],
        ['label' => 'Publish', 'date' => 'Feb 05', 'detail' => 'Landing view deploys with marketing copy and data stories.'],
    ];
@endphp

<style>
    .dui-landing-editorial {
        color: var(--color-base-content);
    }
    .dui-landing-editorial .glow-panel {
        position: relative;
        overflow: hidden;
        border: 1px solid color-mix(in srgb, var(--color-base-content) 14%, transparent);
        background: color-mix(in srgb, var(--color-neutral) 78%, transparent);
        box-shadow: 0 30px 60px color-mix(in srgb, var(--color-neutral) 45%, transparent);
    }
    .dui-landing-editorial .glow-panel::after {
        content: "";
        position: absolute;
        inset: auto -10% -22% 28%;
        height: 14rem;
        border-radius: 9999px;
        background: radial-gradient(circle, color-mix(in srgb, var(--color-info) 28%, transparent), transparent 68%);
        filter: blur(28px);
        pointer-events: none;
    }
    .dui-landing-editorial .feature-card {
        transition: transform 0.4s ease, border-color 0.4s ease;
    }
    .dui-landing-editorial .feature-card:hover {
        transform: translateY(-6px);
        border-color: color-mix(in srgb, var(--color-primary) 60%, transparent);
    }
    .dui-landing-editorial .landing-hero .dui-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 14% 30%, color-mix(in srgb, var(--color-info) 26%, transparent), transparent 45%);
        pointer-events: none;
    }
    @media (max-width: 768px) {
        .dui-landing-editorial .landing-hero-content {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<div class="dui-landing-editorial py-10 px-4 md:px-8 lg:px-12">
    <div class="mx-auto grid max-w-6xl gap-8">
        <x-dui::examples.scene-header
            containerClass="rounded-[1.8rem] border border-base-content/10 bg-base-100/70 px-4 py-3 backdrop-blur md:px-6"
            kicker="Marketing Scene"
            kickerClass="text-[0.68rem] font-bold uppercase tracking-[0.3em] text-base-content/45"
            title="Landing Editorial"
            titleClass="text-lg font-black text-base-content"
            badge="Narrative + CTA Audit"
            badgeColor="accent"
            badgeVariant="soft"
            themeName="dui-theme-editorial"
            centerClass="hidden md:flex"
            themeWrapperClass="join"
            themeGroupClass="flex flex-wrap items-center gap-2"
            themeButtonClass="btn btn-sm btn-ghost rounded-full"
            actionLabel="Export Copy Deck"
            :themes="[
                ['value' => 'corporate', 'label' => 'Corporate', 'checked' => true],
                ['value' => 'business', 'label' => 'Business'],
                ['value' => 'night', 'label' => 'Night'],
            ]"
        />

        <x-dui::hero class="landing-hero glow-panel rounded-[2.25rem] border border-base-content/20">
            <x-dui::hero.content class="landing-hero-content relative grid gap-8 px-6 py-10 md:grid-cols-[1.2fr_0.8fr] md:px-10 md:py-14">
                <div class="space-y-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-info-content/80">Edition 03</p>
                    <h1 class="text-3xl font-black leading-tight text-neutral-content sm:text-4xl md:text-5xl">
                        Editorial landing flows built with Blade DaisyUI, ready for narrative-first brands.
                    </h1>
                    <p class="text-base text-neutral-content/70 md:text-lg">
                        Gradients, cards, and badges form a cohesive story lane so marketing, product, and editorial teams can compose without rewriting UI tokens.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <x-dui::button color="primary" size="lg" class="w-full justify-center rounded-full px-8 text-sm font-semibold sm:w-auto">See the Flow</x-dui::button>
                        <x-dui::button variant="ghost" size="lg" class="w-full justify-center rounded-full border border-base-content/20 px-7 text-sm sm:w-auto">Download Style Notes</x-dui::button>
                    </div>
                    <div class="flex flex-wrap gap-6 text-sm">
                        <div>
                            <p class="font-bold text-neutral-content">Projects shipped</p>
                            <p class="text-neutral-content/75">132</p>
                        </div>
                        <div>
                            <p class="font-bold text-neutral-content">Avg. conversion lift</p>
                            <p class="text-neutral-content/75">+28%</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="rounded-[1.75rem] border border-base-content/15 bg-base-100/10 p-4">
                        <x-dui::badge color="accent" class="border-none text-xs font-semibold uppercase tracking-[0.35em]">Story Pack</x-dui::badge>
                        <p class="mt-3 text-sm font-semibold text-neutral-content">Micro-story snippet</p>
                        <p class="text-sm text-neutral-content/75">“Every component is tempered for high-volume editorial pipelines and dreamy CTA clusters.”</p>
                        <x-dui::badge variant="ghost" color="accent" class="mt-4 border border-base-content/15 text-xs font-semibold uppercase tracking-[0.3em]">Inspired by DaisyUI 5</x-dui::badge>
                    </div>
                    <div class="rounded-[1.75rem] border border-base-content/10 bg-base-100/8 p-4 text-sm text-neutral-content/72">
                        <p class="text-[0.68rem] font-bold uppercase tracking-[0.32em] text-base-content/45">Theme note</p>
                        <p class="mt-3 leading-6">
                            This scene should keep one clear promise across `corporate`, `business`, and `night`: the CTA lane stays warm, while proof blocks remain calmer and supportive.
                        </p>
                    </div>
                    <x-dui::progress color="info" :value="70" class="h-2"></x-dui::progress>
                    <p class="text-xs uppercase tracking-[0.4em] text-neutral-content/60">Previewing the marketing lane</p>
                </div>
            </x-dui::hero.content>
        </x-dui::hero>

        <section class="grid gap-6 md:grid-cols-3">
            @foreach ($features as $feature)
                <x-dui::card class="feature-card h-full rounded-[1.75rem] border border-base-content/10 bg-neutral/45 text-neutral-content backdrop-blur-lg">
                    <x-dui::card.body class="flex flex-col gap-4 p-5">
                        <x-dui::badge color="{{ $feature['tone'] }}" class="text-xs font-bold uppercase tracking-[0.35em]">{{ $feature['tone'] }}</x-dui::badge>
                        <x-dui::card.title tag="h3" class="text-xl font-black text-neutral-content">{{ $feature['title'] }}</x-dui::card.title>
                        <p class="text-sm text-neutral-content/70">{{ $feature['desc'] }}</p>
                        <x-dui::button variant="ghost" class="mt-auto rounded-full border border-base-content/20 px-6 text-xs uppercase tracking-[0.3em]">Explore</x-dui::button>
                    </x-dui::card.body>
                </x-dui::card>
            @endforeach
        </section>

        <section class="grid gap-6 lg:grid-cols-[1fr_0.8fr]">
            <x-dui::card class="glow-panel rounded-[2rem] border border-base-content/15 bg-base-100/5">
                <x-dui::card.body class="space-y-5 p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-neutral-content/70">Story map</p>
                    <h2 class="text-3xl font-black text-neutral-content">How the narrative unfolds</h2>
                    <div class="grid gap-5 md:grid-cols-3">
                        @foreach ($timeline as $step)
                            <div class="space-y-1 rounded-[1.3rem] border border-base-content/10 bg-base-100/5 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-info-content/80">{{ $step['label'] }}</p>
                                <p class="text-sm text-neutral-content/80">{{ $step['date'] }}</p>
                                <p class="text-sm text-neutral-content/60">{{ $step['detail'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </x-dui::card.body>
            </x-dui::card>

            <x-dui::card class="rounded-[2rem] border border-base-content/10 bg-base-100/5">
                <x-dui::card.body class="space-y-5 p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-neutral-content/60">Testimonials</p>
                    @foreach ($testimonials as $item)
                        <div class="space-y-2 rounded-[1.3rem] border border-base-content/10 bg-neutral/40 p-4 text-neutral-content">
                            <p class="text-sm text-neutral-content/70">“{{ $item['quote'] }}”</p>
                            <div class="flex flex-col gap-2 text-xs uppercase tracking-[0.25em] text-neutral-content/60 sm:flex-row sm:items-center sm:justify-between">
                                <span>{{ $item['person'] }}</span>
                                <x-dui::badge color="{{ $item['tone'] }}" variant="soft" class="max-w-full sm:max-w-fit">{{ $item['role'] }}</x-dui::badge>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex flex-wrap gap-3 pt-2">
                        <x-dui::button color="accent" class="w-full justify-center rounded-full px-6 text-xs font-semibold uppercase tracking-[0.3em] sm:w-auto">Request preview</x-dui::button>
                        <x-dui::button variant="ghost" class="w-full justify-center rounded-full border border-base-content/20 px-6 text-xs uppercase tracking-[0.3em] sm:w-auto">See component list</x-dui::button>
                    </div>
                </x-dui::card.body>
            </x-dui::card>
        </section>
    </div>
</div>
