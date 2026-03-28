@php
    $healthChecks = [
        ['label' => 'Token refresh', 'value' => '98.4%', 'delta' => '+1.2%', 'tone' => 'success', 'progress' => 98],
        ['label' => 'Queue recovery', 'value' => '14 min', 'delta' => '-6 min', 'tone' => 'warning', 'progress' => 72],
        ['label' => 'Visual drift', 'value' => '03 flags', 'delta' => '2 unresolved', 'tone' => 'error', 'progress' => 34],
    ];

    $shipments = [
        ['name' => 'Billing refresh', 'owner' => 'Mika Chen', 'status' => 'Review', 'tone' => 'warning', 'window' => '09:20'],
        ['name' => 'Support inbox AI', 'owner' => 'Jun Park', 'status' => 'Live', 'tone' => 'success', 'window' => '10:45'],
        ['name' => 'Role policy cleanup', 'owner' => 'Lina Zhao', 'status' => 'Blocked', 'tone' => 'error', 'window' => '13:10'],
        ['name' => 'Audit exports', 'owner' => 'Noah Bell', 'status' => 'Queued', 'tone' => 'info', 'window' => '15:40'],
    ];

    $timeline = [
        ['time' => '08:40', 'title' => 'Theme contrast audit', 'detail' => 'Surface hierarchy is stable across `corporate`, `business`, and `night`.'],
        ['time' => '11:05', 'title' => 'Dense-table pass', 'detail' => 'Pinned rows and compact typography remain readable under 1280px.'],
        ['time' => '14:20', 'title' => 'Action emphasis', 'detail' => 'Primary/ghost/dash button contrast now reads correctly in stacked toolbars.'],
    ];
@endphp

<style>
    .dui-control-room {
        --dui-ink: #161616;
        --dui-paper: #f5efe2;
        --dui-panel: rgba(255, 250, 242, 0.8);
        --dui-line: rgba(22, 22, 22, 0.1);
        --dui-signal: #d96b2b;
        --dui-deep: #1f3c36;
        background:
            radial-gradient(circle at top left, rgba(217, 107, 43, 0.18), transparent 28rem),
            radial-gradient(circle at bottom right, rgba(31, 60, 54, 0.16), transparent 24rem),
            linear-gradient(180deg, #fbf6ed 0%, #f1e8d8 100%);
        color: var(--dui-ink);
    }

    .dui-control-room .dui-frame {
        position: relative;
        overflow: hidden;
        border: 1px solid var(--dui-line);
        background: var(--dui-panel);
        box-shadow: 0 18px 45px rgba(55, 36, 13, 0.08);
        backdrop-filter: blur(18px);
    }

    .dui-control-room .dui-frame::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background-image:
            linear-gradient(to right, rgba(22, 22, 22, 0.04) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(22, 22, 22, 0.04) 1px, transparent 1px);
        background-size: 24px 24px;
        mask-image: linear-gradient(180deg, rgba(0, 0, 0, 0.45), transparent 90%);
    }

    .dui-control-room .dui-kicker {
        letter-spacing: 0.28em;
        text-transform: uppercase;
    }
</style>

<div class="dui-control-room min-h-screen p-4 md:p-8">
    <div class="mx-auto flex max-w-7xl flex-col gap-6">
        <x-dui::navbar class="dui-frame flex-col items-start gap-4 rounded-[2rem] px-4 py-3 md:flex-row md:items-center md:px-6">
            <x-dui::navbar.start class="w-full md:w-auto">
                <div class="flex items-center gap-3">
                    <div class="grid h-11 w-11 place-items-center rounded-2xl border border-black/10 bg-black text-sm font-black tracking-[0.25em] text-white">
                        A9
                    </div>
                    <div>
                        <p class="dui-kicker text-[0.65rem] font-bold text-black/50">Visual Audit</p>
                        <p class="text-lg font-black md:text-xl">Control Room</p>
                    </div>
                </div>
            </x-dui::navbar.start>

            <x-dui::navbar.center class="w-full justify-start md:w-auto md:justify-center">
                <x-dui::badge color="neutral" class="border-none bg-black text-[0.7rem] font-bold text-white">
                    DaisyUI 5 Alignment Pass
                </x-dui::badge>
            </x-dui::navbar.center>

            <x-dui::navbar.end class="w-full justify-start md:w-auto md:justify-end">
                <div class="flex flex-wrap items-center gap-2">
                    <x-dui::theme-controller type="radio" name="dui-theme-demo" value="corporate" aria-label="Corporate theme" checked="checked" class="btn btn-sm btn-ghost rounded-full" />
                    <x-dui::theme-controller type="radio" name="dui-theme-demo" value="business" aria-label="Business theme" class="btn btn-sm btn-ghost rounded-full" />
                    <x-dui::button size="sm" variant="ghost" class="rounded-full border border-black/10">Export Notes</x-dui::button>
                    <x-dui::avatar placeholder online class="ml-1">
                        <div class="w-11 rounded-2xl bg-[var(--dui-deep)] text-white">
                            <span class="text-sm font-bold">QC</span>
                        </div>
                    </x-dui::avatar>
                </div>
            </x-dui::navbar.end>
        </x-dui::navbar>

        <div class="grid gap-6 xl:grid-cols-[260px_minmax(0,1fr)]">
            <aside class="dui-frame rounded-[2rem] p-4 md:p-5">
                <div class="relative z-10 flex flex-col gap-6">
                    <div class="space-y-2">
                        <p class="dui-kicker text-xs font-bold text-black/45">Sections</p>
                        <x-dui::menu size="lg" class="w-full rounded-3xl bg-white/60 p-3">
                            <x-dui::menu.item active>Surface hierarchy</x-dui::menu.item>
                            <x-dui::menu.item>Action emphasis</x-dui::menu.item>
                            <x-dui::menu.item>Dense data states</x-dui::menu.item>
                            <x-dui::menu.item>Form composure</x-dui::menu.item>
                        </x-dui::menu>
                    </div>

                    <x-dui::card class="rounded-[1.75rem] border border-black/10 bg-black text-white shadow-none">
                        <x-dui::card.body class="gap-4">
                            <x-dui::card.title tag="h2" class="text-xl font-black">What this page stresses</x-dui::card.title>
                            <p class="text-sm leading-6 text-white/70">
                                Contrast, density, mixed emphasis, and how component families behave when they share a single visual system.
                            </p>
                            <x-dui::card.actions class="justify-start">
                                <x-dui::badge class="border-none bg-white/12 text-white">Nav</x-dui::badge>
                                <x-dui::badge class="border-none bg-white/12 text-white">Data</x-dui::badge>
                                <x-dui::badge class="border-none bg-white/12 text-white">Forms</x-dui::badge>
                            </x-dui::card.actions>
                        </x-dui::card.body>
                    </x-dui::card>

                    <div class="rounded-[1.75rem] border border-black/10 bg-white/70 p-4">
                        <p class="dui-kicker text-xs font-bold text-black/45">Immediate notes</p>
                        <x-dui::list class="mt-3">
                            <x-dui::list.row class="grid-cols-[auto_1fr] items-start">
                                <x-dui::status color="success" class="mt-2"></x-dui::status>
                                <div>
                                    <p class="font-semibold">Buttons now scale to `xl`.</p>
                                    <p class="text-sm text-black/55">Large calls-to-action no longer collapse into `lg` styling.</p>
                                </div>
                            </x-dui::list.row>
                            <x-dui::list.row class="grid-cols-[auto_1fr] items-start">
                                <x-dui::status color="warning" class="mt-2"></x-dui::status>
                                <div>
                                    <p class="font-semibold">Tab and card naming was drifting.</p>
                                    <p class="text-sm text-black/55">Legacy aliases are tolerated, but output now prefers current DaisyUI classes.</p>
                                </div>
                            </x-dui::list.row>
                        </x-dui::list>
                    </div>
                </div>
            </aside>

            <main class="flex flex-col gap-6">
                <x-dui::hero class="dui-frame rounded-[2.25rem]">
                    <x-dui::hero.content class="relative z-10 grid w-full gap-6 px-6 py-8 md:px-10 md:py-12 lg:grid-cols-[1.2fr_0.8fr]">
                        <div class="space-y-5">
                            <p class="dui-kicker text-xs font-bold text-black/45">Package Example View</p>
                            <h1 class="max-w-3xl text-3xl font-black leading-none tracking-tight sm:text-4xl md:text-6xl">
                                An editorial-grade audit surface for Blade DaisyUI components.
                            </h1>
                            <p class="max-w-2xl text-base leading-7 text-black/65 md:text-lg">
                                This is not a generic dashboard. It is a deliberate composition designed to reveal whether navigation, actions, data blocks, and form controls hold together in one coherent visual context.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <x-dui::button color="primary" size="lg" class="w-full justify-center rounded-full px-7 sm:w-auto">Review High-Risk States</x-dui::button>
                                <x-dui::button variant="dash" size="lg" class="w-full justify-center rounded-full border-black/20 sm:w-auto">Inspect Compact Density</x-dui::button>
                            </div>
                        </div>

                        <div class="grid gap-3 self-end md:grid-cols-2">
                            <div class="rounded-[1.75rem] border border-black/10 bg-black p-5 text-white">
                                <p class="dui-kicker text-[0.68rem] font-bold text-white/45">Theme integrity</p>
                                <p class="mt-3 text-3xl font-black">91%</p>
                                <p class="mt-2 text-sm text-white/65">Surfaces preserve depth when switching from light editorial themes to denser business themes.</p>
                            </div>
                            <div class="rounded-[1.75rem] border border-black/10 bg-white/80 p-5">
                                <p class="dui-kicker text-[0.68rem] font-bold text-black/40">Primary drift</p>
                                <p class="mt-3 text-3xl font-black text-[var(--dui-signal)]">04</p>
                                <p class="mt-2 text-sm text-black/55">Four components were exposing outdated or undocumented class semantics.</p>
                            </div>
                        </div>
                    </x-dui::hero.content>
                </x-dui::hero>

                <section class="grid gap-4 lg:grid-cols-3">
                    @foreach ($healthChecks as $check)
                        <x-dui::card class="dui-frame rounded-[1.75rem] shadow-none">
                            <x-dui::card.body class="relative z-10 gap-4">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <p class="dui-kicker text-[0.68rem] font-bold text-black/40">{{ $check['label'] }}</p>
                                        <x-dui::card.title tag="h2" class="mt-2 text-3xl font-black">{{ $check['value'] }}</x-dui::card.title>
                                    </div>
                                    <x-dui::badge color="{{ $check['tone'] }}" variant="soft">{{ $check['delta'] }}</x-dui::badge>
                                </div>
                                <x-dui::progress color="{{ $check['tone'] === 'error' ? 'error' : ($check['tone'] === 'warning' ? 'warning' : 'success') }}" :value="$check['progress']" class="h-2"></x-dui::progress>
                            </x-dui::card.body>
                        </x-dui::card>
                    @endforeach
                </section>

                <div class="grid gap-6 2xl:grid-cols-[1.2fr_0.8fr]">
                    <x-dui::card class="dui-frame rounded-[2rem] shadow-none">
                        <x-dui::card.body class="relative z-10 gap-6">
                            <div class="flex flex-wrap items-start justify-between gap-4">
                                <div>
                                    <p class="dui-kicker text-xs font-bold text-black/45">Release board</p>
                                    <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">Ship windows vs. visual confidence</x-dui::card.title>
                                </div>
                                <div class="flex w-full flex-wrap gap-2 sm:w-auto">
                                    <x-dui::button size="sm" variant="ghost" class="w-full rounded-full border border-black/10 sm:w-auto">Sort by risk</x-dui::button>
                                    <x-dui::button size="sm" color="neutral" class="w-full rounded-full sm:w-auto">Freeze release</x-dui::button>
                                </div>
                            </div>

                            <div class="overflow-x-auto rounded-[1.5rem] border border-black/10 bg-white/75">
                                <x-dui::table zebra size="lg">
                                    <thead>
                                        <tr class="text-black/55">
                                            <th>Stream</th>
                                            <th>Owner</th>
                                            <th>Status</th>
                                            <th>Window</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shipments as $shipment)
                                            <tr>
                                                <td class="font-semibold">{{ $shipment['name'] }}</td>
                                                <td>{{ $shipment['owner'] }}</td>
                                                <td>
                                                    <x-dui::badge color="{{ $shipment['tone'] }}" variant="outline">{{ $shipment['status'] }}</x-dui::badge>
                                                </td>
                                                <td>{{ $shipment['window'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </x-dui::table>
                            </div>

                            <x-dui::alert color="warning" variant="soft" class="relative z-10 border border-black/10">
                                <span class="font-semibold">Audit cue:</span>
                                <span>Dense tables must keep row rhythm and badge emphasis stable even when actions and long owner names collide.</span>
                            </x-dui::alert>
                        </x-dui::card.body>
                    </x-dui::card>

                    <x-dui::card class="dui-frame rounded-[2rem] shadow-none">
                        <x-dui::card.body class="relative z-10 gap-5">
                            <div>
                                <p class="dui-kicker text-xs font-bold text-black/45">Response tape</p>
                                <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">What changed in this pass</x-dui::card.title>
                            </div>

                            <x-dui::timeline vertical compact class="ml-1">
                                @foreach ($timeline as $entry)
                                    <li>
                                        <x-dui::timeline.middle>
                                            <div class="h-3 w-3 rounded-full bg-[var(--dui-signal)]"></div>
                                        </x-dui::timeline.middle>
                                        <x-dui::timeline.end box class="rounded-2xl border border-black/10 bg-white/80 p-4">
                                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-black/45">{{ $entry['time'] }}</p>
                                            <p class="mt-2 font-semibold">{{ $entry['title'] }}</p>
                                            <p class="mt-1 text-sm leading-6 text-black/60">{{ $entry['detail'] }}</p>
                                        </x-dui::timeline.end>
                                        @if (! $loop->last)
                                            <hr class="border-black/10" />
                                        @endif
                                    </li>
                                @endforeach
                            </x-dui::timeline>
                        </x-dui::card.body>
                    </x-dui::card>
                </div>

                <section class="grid gap-6 xl:grid-cols-[0.9fr_1.1fr]">
                    <x-dui::card class="dui-frame rounded-[2rem] shadow-none">
                        <x-dui::card.body class="relative z-10 gap-5">
                            <div>
                                <p class="dui-kicker text-xs font-bold text-black/45">Form composure</p>
                                <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">Stress the input family under one surface</x-dui::card.title>
                            </div>

                            <div class="grid gap-4">
                                <label class="grid gap-2">
                                    <span class="text-sm font-semibold">Incident title</span>
                                    <x-dui::input color="neutral" size="xl" value="Navigation density review" class="w-full rounded-2xl"></x-dui::input>
                                </label>

                                <div class="grid gap-4 md:grid-cols-2">
                                    <label class="grid gap-2">
                                        <span class="text-sm font-semibold">Priority</span>
                                        <x-dui::select color="neutral" class="rounded-2xl">
                                            <option>High</option>
                                            <option>Medium</option>
                                            <option>Low</option>
                                        </x-dui::select>
                                    </label>

                                    <label class="grid gap-2">
                                        <span class="text-sm font-semibold">Ship lane</span>
                                        <x-dui::select :ghost="true" class="rounded-2xl border border-black/10">
                                            <option>Control room</option>
                                            <option>Growth</option>
                                            <option>Ops</option>
                                        </x-dui::select>
                                    </label>
                                </div>

                                <label class="grid gap-2">
                                    <span class="text-sm font-semibold">Reviewer note</span>
                                    <x-dui::textarea color="neutral" class="min-h-32 rounded-[1.5rem]">Spacing is stable, but action clusters should stay under three buttons on 1024px screens.</x-dui::textarea>
                                </label>

                                <div class="flex flex-wrap items-center justify-between gap-4 rounded-[1.5rem] border border-black/10 bg-white/70 px-4 py-3">
                                    <div>
                                        <p class="font-semibold">Pin this surface as the package audit baseline</p>
                                        <p class="text-sm text-black/55">Useful for manual review after component API changes.</p>
                                    </div>
                                    <x-dui::toggle color="neutral" size="xl" checked="checked"></x-dui::toggle>
                                </div>
                            </div>
                        </x-dui::card.body>
                    </x-dui::card>

                    <x-dui::card class="dui-frame rounded-[2rem] shadow-none">
                        <x-dui::card.body class="relative z-10 gap-5">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="dui-kicker text-xs font-bold text-black/45">Composition rules</p>
                                    <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">What to look for visually</x-dui::card.title>
                                </div>
                                <x-dui::badge color="info" variant="outline">Manual QA</x-dui::badge>
                            </div>

                            <x-dui::list class="rounded-[1.5rem] border border-black/10 bg-white/75 p-3">
                                <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                    <x-dui::status color="success"></x-dui::status>
                                    <div>
                                        <p class="font-semibold">Navigation tone</p>
                                        <p class="text-sm text-black/55">The sidebar should feel quieter than the hero and action lane.</p>
                                    </div>
                                    <x-dui::badge variant="soft" color="success" class="md:justify-self-end">Stable</x-dui::badge>
                                </x-dui::list.row>
                                <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                    <x-dui::status color="warning"></x-dui::status>
                                    <div>
                                        <p class="font-semibold">Badge pressure</p>
                                        <p class="text-sm text-black/55">Too many colored badges flatten hierarchy. Keep color as a signal, not decoration.</p>
                                    </div>
                                    <x-dui::badge variant="soft" color="warning" class="md:justify-self-end">Watch</x-dui::badge>
                                </x-dui::list.row>
                                <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                    <x-dui::status color="error"></x-dui::status>
                                    <div>
                                        <p class="font-semibold">Surface collision</p>
                                        <p class="text-sm text-black/55">If cards lose depth at smaller widths, component defaults are too visually similar.</p>
                                    </div>
                                    <x-dui::badge variant="soft" color="error" class="md:justify-self-end">Critical</x-dui::badge>
                                </x-dui::list.row>
                            </x-dui::list>

                            <x-dui::divider class="before:bg-black/10 after:bg-black/10 text-black/45">Audit posture</x-dui::divider>

                            <x-dui::stat class="rounded-[1.5rem] border border-black/10 bg-black text-white">
                                <x-dui::stat.stat>
                                    <x-dui::stat.title class="text-white/55">Recommended route</x-dui::stat.title>
                                    <x-dui::stat.value class="text-2xl font-black md:text-3xl">`Route::view()`</x-dui::stat.value>
                                    <x-dui::stat.desc class="text-white/55">Render this package view directly inside a host app for manual inspection.</x-dui::stat.desc>
                                </x-dui::stat.stat>
                            </x-dui::stat>
                        </x-dui::card.body>
                    </x-dui::card>
                </section>
            </main>
        </div>
    </div>
</div>
