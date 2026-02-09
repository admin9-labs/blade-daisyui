<?php

namespace Admin9\BladeDaisyui\Tests\Feature\Components;

use Admin9\BladeDaisyui\Tests\TestCase;

class DataInputTest extends TestCase
{
    // ─── Checkbox ───────────────────────────────────────────

    public function test_checkbox_renders_with_type_and_class(): void
    {
        $this->blade('<x-dui::checkbox />')
            ->assertSee('<input type="checkbox"', false)
            ->assertSee('class="checkbox"', false);
    }

    public function test_checkbox_with_color_and_size(): void
    {
        $this->blade('<x-dui::checkbox color="primary" size="lg" />')
            ->assertSee('checkbox-primary', false)
            ->assertSee('checkbox-lg', false);
    }

    // ─── Fieldset ───────────────────────────────────────────

    public function test_fieldset_renders_with_class(): void
    {
        $this->blade('<x-dui::fieldset>Content</x-dui::fieldset>')
            ->assertSee('<fieldset', false)
            ->assertSee('class="fieldset"', false)
            ->assertSeeText('Content');
    }

    public function test_fieldset_renders_slot_content(): void
    {
        $this->blade('<x-dui::fieldset>Form fields here</x-dui::fieldset>')
            ->assertSeeText('Form fields here');
    }

    // ─── Fieldset Legend ────────────────────────────────────

    public function test_fieldset_legend_renders_with_class(): void
    {
        $this->blade('<x-dui::fieldset.legend>Title</x-dui::fieldset.legend>')
            ->assertSee('<legend', false)
            ->assertSee('class="fieldset-legend"', false)
            ->assertSeeText('Title');
    }

    public function test_fieldset_legend_renders_slot_text(): void
    {
        $this->blade('<x-dui::fieldset.legend>My Legend</x-dui::fieldset.legend>')
            ->assertSeeText('My Legend');
    }

    // ─── File Input ─────────────────────────────────────────

    public function test_file_input_renders_with_type_and_class(): void
    {
        $this->blade('<x-dui::file-input />')
            ->assertSee('<input type="file"', false)
            ->assertSee('class="file-input"', false);
    }

    public function test_file_input_with_color_and_ghost(): void
    {
        $this->blade('<x-dui::file-input color="secondary" :ghost="true" />')
            ->assertSee('file-input-secondary', false)
            ->assertSee('file-input-ghost', false);
    }

    // ─── Filter ─────────────────────────────────────────────

    public function test_filter_renders_with_class(): void
    {
        $this->blade('<x-dui::filter>Filters</x-dui::filter>')
            ->assertSee('class="filter"', false)
            ->assertSeeText('Filters');
    }

    public function test_filter_renders_slot_content(): void
    {
        $this->blade('<x-dui::filter>Category options</x-dui::filter>')
            ->assertSeeText('Category options');
    }

    // ─── Filter Reset ───────────────────────────────────────

    public function test_filter_reset_renders_with_class_and_type(): void
    {
        $this->blade('<x-dui::filter.reset />')
            ->assertSee('btn filter-reset', false)
            ->assertSee('type="radio"', false);
    }

    public function test_filter_reset_renders_input_element(): void
    {
        $this->blade('<x-dui::filter.reset />')
            ->assertSee('<input', false);
    }

    // ─── Filter Item ───────────────────────────────────────

    public function test_filter_item_renders_with_btn_class_and_radio_type(): void
    {
        $this->blade('<x-dui::filter.item />')
            ->assertSee('<input', false)
            ->assertSee('class="btn"', false)
            ->assertSee('type="radio"', false);
    }

    public function test_filter_item_passes_through_attributes(): void
    {
        $this->blade('<x-dui::filter.item name="frameworks" aria-label="Vue" />')
            ->assertSee('name="frameworks"', false)
            ->assertSee('aria-label="Vue"', false);
    }

    // ─── Input ──────────────────────────────────────────────

    public function test_input_renders_with_default_type_and_class(): void
    {
        $this->blade('<x-dui::input />')
            ->assertSee('<input', false)
            ->assertSee('type="text"', false)
            ->assertSee('class="input"', false);
    }

    public function test_input_with_color_size_and_ghost(): void
    {
        $this->blade('<x-dui::input color="primary" size="sm" :ghost="true" />')
            ->assertSee('input-primary', false)
            ->assertSee('input-sm', false)
            ->assertSee('input-ghost', false);
    }

    public function test_input_with_email_type(): void
    {
        $this->blade('<x-dui::input type="email" />')
            ->assertSee('type="email"', false);
    }

    // ─── Label ──────────────────────────────────────────────

    public function test_label_renders_span_with_class(): void
    {
        $this->blade('<x-dui::label>Username</x-dui::label>')
            ->assertSee('<span', false)
            ->assertSee('class="label"', false)
            ->assertSeeText('Username');
    }

    public function test_label_renders_slot_content(): void
    {
        $this->blade('<x-dui::label>Email address</x-dui::label>')
            ->assertSeeText('Email address');
    }

    // ─── Label Floating ─────────────────────────────────────

    public function test_label_floating_renders_with_class(): void
    {
        $this->blade('<x-dui::label.floating>Content</x-dui::label.floating>')
            ->assertSee('<label', false)
            ->assertSee('class="floating-label"', false)
            ->assertSeeText('Content');
    }

    public function test_label_floating_renders_slot_content(): void
    {
        $this->blade('<x-dui::label.floating>Float me</x-dui::label.floating>')
            ->assertSeeText('Float me');
    }

    // ─── Radio ──────────────────────────────────────────────

    public function test_radio_renders_with_type_and_class(): void
    {
        $this->blade('<x-dui::radio />')
            ->assertSee('<input type="radio"', false)
            ->assertSee('class="radio"', false);
    }

    public function test_radio_with_color_and_size(): void
    {
        $this->blade('<x-dui::radio color="accent" size="sm" />')
            ->assertSee('radio-accent', false)
            ->assertSee('radio-sm', false);
    }

    // ─── Range ──────────────────────────────────────────────

    public function test_range_renders_with_type_and_class(): void
    {
        $this->blade('<x-dui::range />')
            ->assertSee('<input type="range"', false)
            ->assertSee('class="range"', false);
    }

    public function test_range_with_color_and_min_max_step(): void
    {
        $this->blade('<x-dui::range color="warning" min="0" max="100" step="5" />')
            ->assertSee('range-warning', false)
            ->assertSee('min="0"', false)
            ->assertSee('max="100"', false)
            ->assertSee('step="5"', false);
    }

    // ─── Rating ─────────────────────────────────────────────

    public function test_rating_renders_with_class(): void
    {
        $this->blade('<x-dui::rating>Stars</x-dui::rating>')
            ->assertSee('class="rating"', false)
            ->assertSeeText('Stars');
    }

    public function test_rating_half_adds_class(): void
    {
        $this->blade('<x-dui::rating :half="true">Stars</x-dui::rating>')
            ->assertSee('rating-half', false);
    }

    public function test_rating_hidden_adds_hidden_input(): void
    {
        $this->blade('<x-dui::rating :hidden="true">Stars</x-dui::rating>')
            ->assertSee('<input type="radio" class="rating-hidden" aria-label="clear"', false);
    }

    // ─── Rating Star ────────────────────────────────────────

    public function test_rating_star_renders_with_mask_class(): void
    {
        $this->blade('<x-dui::rating.star name="r1" />')
            ->assertSee('<input', false)
            ->assertSee('type="radio"', false)
            ->assertSee('mask mask-star-2', false);
    }

    public function test_rating_star_custom_shape(): void
    {
        $this->blade('<x-dui::rating.star shape="heart" name="r2" />')
            ->assertSee('mask mask-heart', false);
    }

    public function test_rating_star_half_adds_half_class(): void
    {
        $this->blade('<x-dui::rating.star half="1" name="r3" />')
            ->assertSee('mask-half-1', false);
    }

    public function test_rating_star_passes_through_attributes(): void
    {
        $this->blade('<x-dui::rating.star name="r4" aria-label="3 stars" checked="checked" />')
            ->assertSee('name="r4"', false)
            ->assertSee('aria-label="3 stars"', false)
            ->assertSee('checked="checked"', false);
    }

    // ─── Select ─────────────────────────────────────────────

    public function test_select_renders_with_class(): void
    {
        $this->blade('<x-dui::select><option>A</option></x-dui::select>')
            ->assertSee('<select', false)
            ->assertSee('class="select"', false);
    }

    public function test_select_with_color_and_ghost(): void
    {
        $this->blade('<x-dui::select color="info" :ghost="true"><option>B</option></x-dui::select>')
            ->assertSee('select-info', false)
            ->assertSee('select-ghost', false);
    }

    // ─── Textarea ───────────────────────────────────────────

    public function test_textarea_renders_with_class(): void
    {
        $this->blade('<x-dui::textarea>Text</x-dui::textarea>')
            ->assertSee('<textarea', false)
            ->assertSee('class="textarea"', false);
    }

    public function test_textarea_with_color_and_ghost(): void
    {
        $this->blade('<x-dui::textarea color="error" :ghost="true">Text</x-dui::textarea>')
            ->assertSee('textarea-error', false)
            ->assertSee('textarea-ghost', false);
    }

    // ─── Toggle ─────────────────────────────────────────────

    public function test_toggle_renders_with_type_and_class(): void
    {
        $this->blade('<x-dui::toggle />')
            ->assertSee('<input type="checkbox"', false)
            ->assertSee('class="toggle"', false);
    }

    public function test_toggle_with_color_and_size(): void
    {
        $this->blade('<x-dui::toggle color="success" size="md" />')
            ->assertSee('toggle-success', false)
            ->assertSee('toggle-md', false);
    }
}
