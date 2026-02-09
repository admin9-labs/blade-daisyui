<?php

namespace Admin9\BladeDaisyui\Tests\Feature\Components;

use Admin9\BladeDaisyui\Tests\TestCase;

class ActionsTest extends TestCase
{
    // ─── Accordion ───────────────────────────────────────────

    public function test_accordion_renders_slot_content(): void
    {
        $this->blade('<x-dui::accordion>Accordion content</x-dui::accordion>')
            ->assertSeeText('Accordion content');
    }

    public function test_accordion_renders_div_wrapper(): void
    {
        $this->blade('<x-dui::accordion>Content</x-dui::accordion>')
            ->assertSee('<div', false);
    }

    public function test_accordion_class_merge(): void
    {
        $this->blade('<x-dui::accordion class="my-custom">Content</x-dui::accordion>')
            ->assertSee('my-custom', false);
    }

    public function test_accordion_passes_through_id_attribute(): void
    {
        $this->blade('<x-dui::accordion id="faq-section" data-section="faq">Content</x-dui::accordion>')
            ->assertSee('id="faq-section"', false)
            ->assertSee('data-section="faq"', false);
    }

    // ─── Accordion Item ──────────────────────────────────────

    public function test_accordion_item_renders_with_collapse_class_and_checkbox(): void
    {
        $this->blade('<x-dui::accordion.item>Body</x-dui::accordion.item>')
            ->assertSee('class="collapse"', false)
            ->assertSee('<input type="checkbox"', false);
    }

    public function test_accordion_item_radio_renders_radio_input(): void
    {
        $this->blade('<x-dui::accordion.item :radio="true" name="faq">Body</x-dui::accordion.item>')
            ->assertSee('<input type="radio" name="faq"', false)
            ->assertDontSee('<input type="checkbox"', false);
    }

    public function test_accordion_item_icon_adds_collapse_icon_class(): void
    {
        $this->blade('<x-dui::accordion.item icon="arrow">Body</x-dui::accordion.item>')
            ->assertSee('collapse-arrow', false);
    }

    public function test_accordion_item_checked_adds_checked_attribute(): void
    {
        $this->blade('<x-dui::accordion.item :checked="true">Body</x-dui::accordion.item>')
            ->assertSee('checked="checked"', false);
    }

    // ─── Alert ────────────────────────────────────────────────

    public function test_alert_renders_with_alert_class_and_role(): void
    {
        $this->blade('<x-dui::alert>Warning!</x-dui::alert>')
            ->assertSee('class="alert"', false)
            ->assertSee('role="alert"', false)
            ->assertSeeText('Warning!');
    }

    public function test_alert_with_color_and_variant(): void
    {
        $this->blade('<x-dui::alert color="error" variant="soft">Oops</x-dui::alert>')
            ->assertSee('alert-error', false)
            ->assertSee('alert-soft', false);
    }

    public function test_alert_with_direction(): void
    {
        $this->blade('<x-dui::alert direction="horizontal">Info</x-dui::alert>')
            ->assertSee('alert-horizontal', false);
    }

    // ─── Button ──────────────────────────────────────────────

    public function test_button_renders_with_btn_class(): void
    {
        $this->blade('<x-dui::button>Click</x-dui::button>')
            ->assertSee('<button', false)
            ->assertSee('class="btn"', false)
            ->assertSeeText('Click');
    }

    public function test_button_tag_a_renders_anchor(): void
    {
        $this->blade('<x-dui::button tag="a" href="#">Link</x-dui::button>')
            ->assertSee('<a', false)
            ->assertSee('</a>', false);
    }

    public function test_button_color_and_size(): void
    {
        $this->blade('<x-dui::button color="primary" size="lg">Go</x-dui::button>')
            ->assertSee('btn-primary', false)
            ->assertSee('btn-lg', false);
    }

    public function test_button_disabled_adds_class_and_attribute(): void
    {
        $this->blade('<x-dui::button :disabled="true">No</x-dui::button>')
            ->assertSee('btn-disabled', false)
            ->assertSee('disabled="disabled"', false);
    }

    public function test_button_wide_and_block(): void
    {
        $this->blade('<x-dui::button :wide="true" :block="true">Full</x-dui::button>')
            ->assertSee('btn-wide', false)
            ->assertSee('btn-block', false);
    }

    public function test_button_invalid_tag_falls_back_to_button(): void
    {
        $this->blade('<x-dui::button tag="script">XSS</x-dui::button>')
            ->assertSee('<button', false)
            ->assertDontSee('<script', false);
    }

    public function test_button_class_merge(): void
    {
        $this->blade('<x-dui::button color="primary" class="mt-4">Go</x-dui::button>')
            ->assertSee('btn btn-primary', false)
            ->assertSee('mt-4', false);
    }

    public function test_button_passes_through_data_attributes(): void
    {
        $this->blade('<x-dui::button id="my-btn" data-action="submit">Go</x-dui::button>')
            ->assertSee('id="my-btn"', false)
            ->assertSee('data-action="submit"', false);
    }

    // ─── Dropdown ──────────────────────────────────────────────

    public function test_dropdown_renders_with_dropdown_class(): void
    {
        $this->blade('<x-dui::dropdown>Menu</x-dui::dropdown>')
            ->assertSee('class="dropdown"', false)
            ->assertSeeText('Menu');
    }

    public function test_dropdown_with_position_and_hover(): void
    {
        $this->blade('<x-dui::dropdown position="end" :hover="true">Menu</x-dui::dropdown>')
            ->assertSee('dropdown-end', false)
            ->assertSee('dropdown-hover', false);
    }

    // ─── Fab ─────────────────────────────────────────────────

    public function test_fab_renders_with_fab_class(): void
    {
        $this->blade('<x-dui::fab>+</x-dui::fab>')
            ->assertSee('class="fab"', false);
    }

    public function test_fab_flower(): void
    {
        $this->blade('<x-dui::fab :flower="true">+</x-dui::fab>')
            ->assertSee('fab-flower', false);
    }

    // ─── Modal ───────────────────────────────────────────────

    public function test_modal_renders_dialog_with_modal_class(): void
    {
        $this->blade('<x-dui::modal>Content</x-dui::modal>')
            ->assertSee('<dialog', false)
            ->assertSee('class="modal"', false);
    }

    public function test_modal_open(): void
    {
        $this->blade('<x-dui::modal :open="true">Content</x-dui::modal>')
            ->assertSee('modal-open', false);
    }

    public function test_modal_with_id(): void
    {
        $this->blade('<x-dui::modal id="my-modal">Content</x-dui::modal>')
            ->assertSee('id="my-modal"', false);
    }

    // ─── Swap ────────────────────────────────────────────────

    public function test_swap_renders_with_checkbox(): void
    {
        $this->blade('<x-dui::swap>Content</x-dui::swap>')
            ->assertSee('<label', false)
            ->assertSee('class="swap"', false)
            ->assertSee('<input type="checkbox" />', false);
    }

    public function test_swap_active_removes_checkbox(): void
    {
        $this->blade('<x-dui::swap :active="true">Content</x-dui::swap>')
            ->assertSee('swap-active', false)
            ->assertDontSee('<input type="checkbox" />', false);
    }

    public function test_swap_effect(): void
    {
        $this->blade('<x-dui::swap effect="rotate">Content</x-dui::swap>')
            ->assertSee('swap-rotate', false);
    }

    public function test_swap_named_slots(): void
    {
        $this->blade('
            <x-dui::swap>
                <x-slot:on>ON</x-slot:on>
                <x-slot:off>OFF</x-slot:off>
            </x-dui::swap>
        ')
            ->assertSee('class="swap-on"', false)
            ->assertSee('class="swap-off"', false)
            ->assertSeeText('ON')
            ->assertSeeText('OFF');
    }

    // ─── Loading ─────────────────────────────────────────────

    public function test_loading_renders_with_default_spinner(): void
    {
        $this->blade('<x-dui::loading />')
            ->assertSee('<span', false)
            ->assertSee('loading', false)
            ->assertSee('loading-spinner', false);
    }

    public function test_loading_with_type_and_size(): void
    {
        $this->blade('<x-dui::loading type="dots" size="lg" />')
            ->assertSee('loading-dots', false)
            ->assertSee('loading-lg', false);
    }

    // ─── Progress ──────────────────────────────────────────────

    public function test_progress_renders_with_progress_class_and_max(): void
    {
        $this->blade('<x-dui::progress />')
            ->assertSee('<progress', false)
            ->assertSee('class="progress"', false)
            ->assertSee('max="100"', false)
            ->assertDontSee('value=', false);
    }

    public function test_progress_with_color_and_value(): void
    {
        $this->blade('<x-dui::progress color="primary" :value="50" :max="200" />')
            ->assertSee('progress-primary', false)
            ->assertSee('value="50"', false)
            ->assertSee('max="200"', false);
    }

    // ─── Radial Progress ─────────────────────────────────────

    public function test_radial_progress_renders_with_defaults(): void
    {
        $this->blade('<x-dui::radial-progress>0%</x-dui::radial-progress>')
            ->assertSee('class="radial-progress"', false)
            ->assertSee('role="progressbar"', false)
            ->assertSee('aria-valuenow="0"', false)
            ->assertSee('--value:0;', false);
    }

    public function test_radial_progress_with_value_size_thickness(): void
    {
        $this->blade('<x-dui::radial-progress :value="75" size="8rem" thickness="4px">75%</x-dui::radial-progress>')
            ->assertSee('--value:75;', false)
            ->assertSee('--size:8rem;', false)
            ->assertSee('--thickness:4px;', false)
            ->assertSee('aria-valuenow="75"', false);
    }

    // ─── Skeleton ────────────────────────────────────────────

    public function test_skeleton_renders_div_by_default(): void
    {
        $this->blade('<x-dui::skeleton />')
            ->assertSee('<div', false)
            ->assertSee('class="skeleton"', false);
    }

    public function test_skeleton_text_renders_span(): void
    {
        $this->blade('<x-dui::skeleton :text="true" />')
            ->assertSee('<span', false)
            ->assertSee('skeleton-text', false);
    }

    // ─── Toast ───────────────────────────────────────────────

    public function test_toast_renders_with_toast_class(): void
    {
        $this->blade('<x-dui::toast>Msg</x-dui::toast>')
            ->assertSee('class="toast"', false)
            ->assertSeeText('Msg');
    }

    public function test_toast_with_horizontal_and_vertical(): void
    {
        $this->blade('<x-dui::toast horizontal="end" vertical="top">Msg</x-dui::toast>')
            ->assertSee('toast-end', false)
            ->assertSee('toast-top', false);
    }

    // ─── Tooltip ─────────────────────────────────────────────

    public function test_tooltip_renders_with_tooltip_class(): void
    {
        $this->blade('<x-dui::tooltip>Hover me</x-dui::tooltip>')
            ->assertSee('class="tooltip"', false);
    }

    public function test_tooltip_with_tip_position_color(): void
    {
        $this->blade('<x-dui::tooltip tip="Hello" position="bottom" color="primary">Hover</x-dui::tooltip>')
            ->assertSee('data-tip="Hello"', false)
            ->assertSee('tooltip-bottom', false)
            ->assertSee('tooltip-primary', false);
    }

    public function test_tooltip_open(): void
    {
        $this->blade('<x-dui::tooltip :open="true" tip="Visible">Text</x-dui::tooltip>')
            ->assertSee('tooltip-open', false);
    }

    // ─── Validator ───────────────────────────────────────────

    public function test_validator_renders_slot_content(): void
    {
        $this->blade('<x-dui::validator>Input here</x-dui::validator>')
            ->assertSeeText('Input here');
    }

    // ─── Validator Hint ──────────────────────────────────────

    public function test_validator_hint_renders_with_class(): void
    {
        $this->blade('<x-dui::validator.hint>Required field</x-dui::validator.hint>')
            ->assertSee('class="validator-hint"', false)
            ->assertSeeText('Required field');
    }
}
