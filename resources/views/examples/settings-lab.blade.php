@php
    $filters = ['Critical', 'Ops', 'Content', 'Billing'];
    $checks = [
        ['label' => 'Autosave snapshots', 'desc' => 'Capture incomplete edits every 30 seconds.', 'checked' => true],
        ['label' => 'Weekly digest', 'desc' => 'Summarize configuration drift and unresolved validation warnings.', 'checked' => false],
    ];
@endphp

<style>
    .dui-settings-lab {
        --dui-shell: var(--color-base-200);
        --dui-ink: var(--color-base-content);
        --dui-muted: color-mix(in srgb, var(--color-base-content) 58%, transparent);
        --dui-line: color-mix(in srgb, var(--color-base-content) 10%, transparent);
        --dui-panel: color-mix(in srgb, var(--color-base-100) 86%, transparent);
        --dui-blue: var(--color-primary);
        --dui-lime: var(--color-success);
        color: var(--dui-ink);
    }

    .dui-settings-lab .lab-panel {
        border: 1px solid var(--dui-line);
        background: var(--dui-panel);
        box-shadow: 0 18px 50px color-mix(in srgb, var(--color-base-content) 10%, transparent);
        backdrop-filter: blur(18px);
    }

    .dui-settings-lab .lab-kicker {
        letter-spacing: 0.26em;
        text-transform: uppercase;
    }
</style>

<div class="dui-settings-lab px-4 py-6 md:px-8 md:py-10">
    <div class="mx-auto flex max-w-7xl flex-col gap-6">
        <x-dui::examples.scene-header
            containerClass="lab-panel flex-col items-start gap-4 rounded-[2rem] px-5 py-4 md:flex-row md:items-center"
            kicker="Settings Audit"
            kickerClass="lab-kicker text-[0.68rem] font-bold text-base-content/45"
            title="Form Density Lab"
            titleClass="text-xl font-black"
            badge="Validation + Controls"
            badgeColor="info"
            badgeVariant="soft"
            themeName="dui-theme-settings"
            :themes="[
                ['value' => 'corporate', 'label' => 'Corporate theme', 'checked' => true],
                ['value' => 'business', 'label' => 'Business theme'],
                ['value' => 'night', 'label' => 'Night theme'],
            ]"
        />

        <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
            <div class="flex flex-col gap-6">
                <x-dui::card class="lab-panel rounded-[2rem] shadow-none">
                    <x-dui::card.body class="gap-6">
                        <div class="flex flex-wrap items-start justify-between gap-4">
                            <div>
                                <p class="lab-kicker text-xs font-bold text-base-content/40">Scene purpose</p>
                                <x-dui::card.title tag="h1" class="mt-2 text-2xl font-black sm:text-3xl md:text-4xl">Stress the form family under realistic settings density.</x-dui::card.title>
                            </div>
                            <x-dui::badge color="neutral" class="border-none">Scene 03</x-dui::badge>
                        </div>

                        <p class="max-w-3xl text-base leading-7 text-[color:var(--dui-muted)]">
                            This page exists to verify whether inputs, selects, textareas, toggles, radios, filters, and validator hints still feel composed when they share one compact control surface.
                        </p>

                        <x-dui::filter class="flex-wrap gap-2">
                            <x-dui::filter.reset name="setting-scope" aria-label="All scopes" />
                            @foreach ($filters as $filter)
                                <x-dui::filter.item name="setting-scope" aria-label="{{ $filter }}" @checked($loop->first) />
                            @endforeach
                        </x-dui::filter>
                    </x-dui::card.body>
                </x-dui::card>

                <x-dui::card class="lab-panel rounded-[2rem] shadow-none">
                    <x-dui::card.body class="gap-6">
                        <div>
                            <p class="lab-kicker text-xs font-bold text-base-content/40">Profile settings</p>
                            <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">Calibration form</x-dui::card.title>
                        </div>

                        <form class="grid gap-5">
                            <div class="grid gap-5 lg:grid-cols-2">
                                <x-dui::fieldset class="gap-2">
                                    <x-dui::fieldset.legend>Workspace name</x-dui::fieldset.legend>
                                    <x-dui::input color="neutral" size="xl" value="Northwind Control Cluster" class="w-full rounded-2xl" />
                                    <x-dui::label class="text-[color:var(--dui-muted)]">Visible to audit collaborators and export recipients.</x-dui::label>
                                </x-dui::fieldset>

                                <x-dui::fieldset class="gap-2">
                                    <x-dui::fieldset.legend>Review owner</x-dui::fieldset.legend>
                                    <x-dui::select color="neutral" class="w-full rounded-2xl">
                                        <option>Mae Chen</option>
                                        <option>Dario Bell</option>
                                        <option>Sana Mori</option>
                                    </x-dui::select>
                                    <x-dui::label class="text-[color:var(--dui-muted)]">Use a neutral control style unless owner selection is the primary action.</x-dui::label>
                                </x-dui::fieldset>
                            </div>

                            <x-dui::fieldset class="gap-2">
                                <x-dui::fieldset.legend>Reviewer email</x-dui::fieldset.legend>
                                <x-dui::input type="email" :validator="true" value="ops-review@northwind.dev" required color="neutral" class="w-full rounded-2xl" />
                                <x-dui::validator.hint>Use a valid mailbox for digest delivery.</x-dui::validator.hint>
                            </x-dui::fieldset>

                            <x-dui::fieldset class="gap-2">
                                <x-dui::fieldset.legend>Audit note</x-dui::fieldset.legend>
                                <x-dui::textarea color="neutral" :validator="true" required class="min-h-36 rounded-[1.5rem]">Ghost controls only work here because the panel already provides enough boundary. In flatter contexts, neutral surfaces read better.</x-dui::textarea>
                                <x-dui::validator.hint>Keep the note specific enough that another reviewer can reproduce the judgment.</x-dui::validator.hint>
                            </x-dui::fieldset>

                            <div class="grid gap-5 lg:grid-cols-[0.85fr_1.15fr]">
                                <x-dui::fieldset class="gap-3 rounded-[1.5rem] border border-[color:var(--dui-line)] bg-base-100/65 p-4">
                                    <x-dui::fieldset.legend>Alert level</x-dui::fieldset.legend>
                                    <label class="flex items-center gap-3">
                                        <x-dui::radio color="primary" name="alert-level" checked="checked" />
                                        <span>Balanced</span>
                                    </label>
                                    <label class="flex items-center gap-3">
                                        <x-dui::radio color="warning" name="alert-level" />
                                        <span>High visibility</span>
                                    </label>
                                    <label class="flex items-center gap-3">
                                        <x-dui::radio color="error" name="alert-level" />
                                        <span>Escalation mode</span>
                                    </label>
                                </x-dui::fieldset>

                                <x-dui::fieldset class="gap-4 rounded-[1.5rem] border border-[color:var(--dui-line)] bg-base-100/65 p-4">
                                    <x-dui::fieldset.legend>Automation sensitivity</x-dui::fieldset.legend>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="font-semibold">Calm</span>
                                            <span class="font-semibold text-[color:var(--dui-blue)]">70%</span>
                                        </div>
                                        <x-dui::range color="primary" size="xl" min="0" max="100" value="70" />
                                        <p class="text-sm text-[color:var(--dui-muted)]">Range controls should not visually overpower the submit action.</p>
                                    </div>
                                </x-dui::fieldset>
                            </div>

                            <div class="grid gap-4 rounded-[1.75rem] border border-[color:var(--dui-line)] bg-neutral text-neutral-content p-5">
                                @foreach ($checks as $check)
                                    <label class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                        <div>
                                            <p class="font-semibold">{{ $check['label'] }}</p>
                                            <p class="text-sm text-neutral-content/60">{{ $check['desc'] }}</p>
                                        </div>
                                        <x-dui::toggle color="neutral" size="xl" @checked($check['checked']) />
                                    </label>
                                @endforeach
                            </div>

                            <div class="flex flex-wrap items-center gap-3">
                                <x-dui::button color="primary" size="lg" class="w-full justify-center rounded-full px-7 sm:w-auto">Save Audit Profile</x-dui::button>
                                <x-dui::button variant="ghost" size="lg" class="w-full justify-center rounded-full border border-base-300 px-7 sm:w-auto">Preview Validation State</x-dui::button>
                                <x-dui::button variant="dash" size="lg" class="w-full justify-center rounded-full px-7 sm:w-auto">Reset Density</x-dui::button>
                            </div>
                        </form>
                    </x-dui::card.body>
                </x-dui::card>
            </div>

            <div class="flex flex-col gap-6">
                <x-dui::stat class="lab-panel rounded-[2rem] shadow-none">
                    <x-dui::stat.stat>
                        <x-dui::stat.title>Validation calmness</x-dui::stat.title>
                        <x-dui::stat.value class="text-[color:var(--dui-blue)]">87%</x-dui::stat.value>
                        <x-dui::stat.desc>Controls remain legible when helper text, validation hints, and toggles share one column.</x-dui::stat.desc>
                    </x-dui::stat.stat>
                    <x-dui::stat.stat>
                        <x-dui::stat.title>Visual pressure</x-dui::stat.title>
                        <x-dui::stat.value class="text-[color:var(--dui-lime)]">Low</x-dui::stat.value>
                        <x-dui::stat.desc>Neutral surfaces keep the form readable without flattening the main action.</x-dui::stat.desc>
                    </x-dui::stat.stat>
                </x-dui::stat>

                <x-dui::card class="lab-panel rounded-[2rem] shadow-none">
                    <x-dui::card.body class="gap-5">
                        <div>
                            <p class="lab-kicker text-xs font-bold text-base-content/40">Audit cues</p>
                            <x-dui::card.title tag="h2" class="mt-2 text-2xl font-black">What to watch on this screen</x-dui::card.title>
                        </div>

                        <x-dui::list class="rounded-[1.5rem] border border-[color:var(--dui-line)] bg-base-100/70 p-3">
                            <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                <x-dui::status color="success"></x-dui::status>
                                <div>
                                    <p class="font-semibold">Label rhythm</p>
                                    <p class="text-sm text-[color:var(--dui-muted)]">Legends, labels, and hints should form a clear reading stack above each control.</p>
                                </div>
                                <x-dui::badge color="success" variant="soft" class="md:justify-self-end">Stable</x-dui::badge>
                            </x-dui::list.row>
                            <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                <x-dui::status color="warning"></x-dui::status>
                                <div>
                                    <p class="font-semibold">Ghost misuse</p>
                                    <p class="text-sm text-[color:var(--dui-muted)]">Ghost fields only work when the panel already provides a visible shell.</p>
                                </div>
                                <x-dui::badge color="warning" variant="soft" class="md:justify-self-end">Watch</x-dui::badge>
                            </x-dui::list.row>
                            <x-dui::list.row class="grid-cols-[auto_1fr] gap-3 md:grid-cols-[auto_1fr_auto] md:items-center">
                                <x-dui::status color="error"></x-dui::status>
                                <div>
                                    <p class="font-semibold">Binary overload</p>
                                    <p class="text-sm text-[color:var(--dui-muted)]">Toggles, radios, and checkboxes need explanatory copy or they become scattered noise.</p>
                                </div>
                                <x-dui::badge color="error" variant="soft" class="md:justify-self-end">Critical</x-dui::badge>
                            </x-dui::list.row>
                        </x-dui::list>

                        <x-dui::alert color="info" variant="soft" class="border border-[color:var(--dui-line)]">
                            <span class="font-semibold">Scene rule:</span>
                            <span>On form-heavy pages, the submit action should remain the strongest object even when controls use `xl` sizing.</span>
                        </x-dui::alert>
                    </x-dui::card.body>
                </x-dui::card>
            </div>
        </div>
    </div>
</div>
