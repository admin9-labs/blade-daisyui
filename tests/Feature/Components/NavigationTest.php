<?php

namespace Admin9\BladeDaisyui\Tests\Feature\Components;

use Admin9\BladeDaisyui\Tests\TestCase;

class NavigationTest extends TestCase
{
    // ─── Breadcrumbs ────────────────────────────────────────

    public function test_breadcrumbs_renders_with_breadcrumbs_class(): void
    {
        $this->blade('<x-dui::breadcrumbs><li>Home</li></x-dui::breadcrumbs>')
            ->assertSee('class="breadcrumbs"', false)
            ->assertSeeText('Home');
    }

    public function test_breadcrumbs_contains_ul_element(): void
    {
        $this->blade('<x-dui::breadcrumbs><li>Home</li><li>Docs</li></x-dui::breadcrumbs>')
            ->assertSee('<ul>', false)
            ->assertSee('</ul>', false);
    }

    // ─── Dock ───────────────────────────────────────────────

    public function test_dock_renders_with_default_class(): void
    {
        $this->blade('<x-dui::dock>Dock content</x-dui::dock>')
            ->assertSee('class="dock"', false)
            ->assertSeeText('Dock content');
    }

    public function test_dock_with_size_adds_size_class(): void
    {
        $this->blade('<x-dui::dock size="lg">Dock</x-dui::dock>')
            ->assertSee('dock-lg', false);
    }

    // ─── Dock Label ─────────────────────────────────────────

    public function test_dock_label_renders_with_dock_label_class(): void
    {
        $this->blade('<x-dui::dock.label>Label</x-dui::dock.label>')
            ->assertSee('class="dock-label"', false)
            ->assertSee('<span', false)
            ->assertSeeText('Label');
    }

    public function test_dock_label_renders_slot_content(): void
    {
        $this->blade('<x-dui::dock.label>Home</x-dui::dock.label>')
            ->assertSeeText('Home');
    }

    // ─── Dock Item ──────────────────────────────────────────

    public function test_dock_item_renders_button(): void
    {
        $this->blade('<x-dui::dock.item>Home</x-dui::dock.item>')
            ->assertSee('<button', false)
            ->assertSeeText('Home');
    }

    public function test_dock_item_active_adds_dock_active_class(): void
    {
        $this->blade('<x-dui::dock.item :active="true">Home</x-dui::dock.item>')
            ->assertSee('dock-active', false);
    }

    public function test_dock_item_inactive_has_no_dock_active_class(): void
    {
        $this->blade('<x-dui::dock.item>Home</x-dui::dock.item>')
            ->assertDontSee('dock-active', false);
    }

    // ─── Menu ───────────────────────────────────────────────

    public function test_menu_renders_with_default_class(): void
    {
        $this->blade('<x-dui::menu><li>Item</li></x-dui::menu>')
            ->assertSee('class="menu"', false)
            ->assertSee('<ul', false);
    }

    public function test_menu_with_size_and_direction(): void
    {
        $this->blade('<x-dui::menu size="xl" direction="horizontal"><li>Item</li></x-dui::menu>')
            ->assertSee('menu-xl', false)
            ->assertSee('menu-horizontal', false);
    }

    // ─── Menu Item ────────────────────────────────────────────

    public function test_menu_item_renders_with_li_and_a(): void
    {
        $this->blade('<x-dui::menu.item>Home</x-dui::menu.item>')
            ->assertSee('<li>', false)
            ->assertSee('<a', false)
            ->assertSeeText('Home');
    }

    public function test_menu_item_active_adds_menu_active_class(): void
    {
        $this->blade('<x-dui::menu.item :active="true">Active</x-dui::menu.item>')
            ->assertSee('menu-active', false);
    }

    public function test_menu_item_disabled_adds_menu_disabled_class(): void
    {
        $this->blade('<x-dui::menu.item :disabled="true">Disabled</x-dui::menu.item>')
            ->assertSee('menu-disabled', false);
    }

    // ─── Menu Title ─────────────────────────────────────────

    public function test_menu_title_renders_with_menu_title_class(): void
    {
        $this->blade('<x-dui::menu.title>Section</x-dui::menu.title>')
            ->assertSee('class="menu-title"', false)
            ->assertSee('<li', false)
            ->assertSeeText('Section');
    }

    public function test_menu_title_renders_slot_content(): void
    {
        $this->blade('<x-dui::menu.title>Navigation</x-dui::menu.title>')
            ->assertSeeText('Navigation');
    }

    // ─── Menu Dropdown ──────────────────────────────────────

    public function test_menu_dropdown_renders_with_menu_dropdown_class(): void
    {
        $this->blade('<x-dui::menu.dropdown><li>Sub</li></x-dui::menu.dropdown>')
            ->assertSee('class="menu-dropdown"', false)
            ->assertSee('<ul', false);
    }

    public function test_menu_dropdown_show_adds_show_class(): void
    {
        $this->blade('<x-dui::menu.dropdown :show="true"><li>Sub</li></x-dui::menu.dropdown>')
            ->assertSee('menu-dropdown-show', false);
    }

    // ─── Navbar ─────────────────────────────────────────────

    public function test_navbar_renders_with_navbar_class(): void
    {
        $this->blade('<x-dui::navbar>Nav content</x-dui::navbar>')
            ->assertSee('class="navbar"', false)
            ->assertSeeText('Nav content');
    }

    public function test_navbar_renders_div_element(): void
    {
        $this->blade('<x-dui::navbar>Content</x-dui::navbar>')
            ->assertSee('<div', false);
    }

    // ─── Navbar Start / Center / End ────────────────────────

    public function test_navbar_start_renders_with_navbar_start_class(): void
    {
        $this->blade('<x-dui::navbar.start>Start</x-dui::navbar.start>')
            ->assertSee('class="navbar-start"', false)
            ->assertSeeText('Start');
    }

    public function test_navbar_center_renders_with_navbar_center_class(): void
    {
        $this->blade('<x-dui::navbar.center>Center</x-dui::navbar.center>')
            ->assertSee('class="navbar-center"', false)
            ->assertSeeText('Center');
    }

    public function test_navbar_end_renders_with_navbar_end_class(): void
    {
        $this->blade('<x-dui::navbar.end>End</x-dui::navbar.end>')
            ->assertSee('class="navbar-end"', false)
            ->assertSeeText('End');
    }

    // ─── Pagination ─────────────────────────────────────────

    public function test_pagination_renders_with_join_class(): void
    {
        $this->blade('<x-dui::pagination><button>1</button></x-dui::pagination>')
            ->assertSee('class="join"', false);
    }

    public function test_pagination_renders_slot_content(): void
    {
        $this->blade('<x-dui::pagination><button class="join-item btn">1</button></x-dui::pagination>')
            ->assertSee('join-item', false);
    }

    // ─── Pagination Item ─────────────────────────────────────

    public function test_pagination_item_renders_with_join_item_btn_class(): void
    {
        $this->blade('<x-dui::pagination.item>1</x-dui::pagination.item>')
            ->assertSee('join-item btn', false)
            ->assertSee('<button', false)
            ->assertSeeText('1');
    }

    public function test_pagination_item_active_adds_btn_active_class(): void
    {
        $this->blade('<x-dui::pagination.item :active="true">2</x-dui::pagination.item>')
            ->assertSee('btn-active', false);
    }

    public function test_pagination_item_disabled_adds_btn_disabled_class(): void
    {
        $this->blade('<x-dui::pagination.item :disabled="true">...</x-dui::pagination.item>')
            ->assertSee('btn-disabled', false);
    }

    public function test_pagination_item_tag_a_renders_anchor(): void
    {
        $this->blade('<x-dui::pagination.item tag="a" href="#">3</x-dui::pagination.item>')
            ->assertSee('<a', false)
            ->assertSee('join-item btn', false);
    }

    public function test_pagination_item_tag_input_renders_input(): void
    {
        $this->blade('<x-dui::pagination.item tag="input" aria-label="1" />')
            ->assertSee('<input', false)
            ->assertSee('type="radio"', false)
            ->assertSee('join-item btn', false);
    }

    public function test_pagination_item_invalid_tag_falls_back_to_button(): void
    {
        $this->blade('<x-dui::pagination.item tag="script">X</x-dui::pagination.item>')
            ->assertSee('<button', false)
            ->assertDontSee('<script', false);
    }

    // ─── Steps ──────────────────────────────────────────────

    public function test_steps_renders_with_default_class(): void
    {
        $this->blade('<x-dui::steps><li>Step 1</li></x-dui::steps>')
            ->assertSee('class="steps"', false)
            ->assertSee('<ul', false);
    }

    public function test_steps_with_direction_adds_direction_class(): void
    {
        $this->blade('<x-dui::steps direction="vertical"><li>Step 1</li></x-dui::steps>')
            ->assertSee('steps-vertical', false);
    }

    // ─── Steps Step ─────────────────────────────────────────

    public function test_steps_step_renders_with_default_class(): void
    {
        $this->blade('<x-dui::steps.step>Register</x-dui::steps.step>')
            ->assertSee('class="step"', false)
            ->assertSee('<li', false)
            ->assertSeeText('Register');
    }

    public function test_steps_step_with_color_adds_color_class(): void
    {
        $this->blade('<x-dui::steps.step color="primary">Done</x-dui::steps.step>')
            ->assertSee('step-primary', false);
    }

    // ─── Tab ────────────────────────────────────────────────

    public function test_tab_renders_with_tabs_class_and_role(): void
    {
        $this->blade('<x-dui::tab>Tabs</x-dui::tab>')
            ->assertSee('tabs', false)
            ->assertSee('role="tablist"', false);
    }

    public function test_tab_with_variant_and_size(): void
    {
        $this->blade('<x-dui::tab variant="border" size="xl">Tabs</x-dui::tab>')
            ->assertSee('tabs-border', false)
            ->assertSee('tabs-xl', false);
    }

    // ─── Tab Item ─────────────────────────────────────────

    public function test_tab_item_renders_with_tab_class(): void
    {
        $this->blade('<x-dui::tab.item>Tab 1</x-dui::tab.item>')
            ->assertSee('class="tab"', false)
            ->assertSee('role="tab"', false)
            ->assertSee('<a', false)
            ->assertSeeText('Tab 1');
    }

    public function test_tab_item_active_adds_tab_active_class(): void
    {
        $this->blade('<x-dui::tab.item :active="true">Tab</x-dui::tab.item>')
            ->assertSee('tab-active', false);
    }

    public function test_tab_item_disabled_adds_tab_disabled_class(): void
    {
        $this->blade('<x-dui::tab.item :disabled="true">Tab</x-dui::tab.item>')
            ->assertSee('tab-disabled', false);
    }

    public function test_tab_item_tag_button_renders_button(): void
    {
        $this->blade('<x-dui::tab.item tag="button">Tab</x-dui::tab.item>')
            ->assertSee('<button', false)
            ->assertSee('class="tab"', false);
    }

    public function test_tab_item_tag_input_renders_input(): void
    {
        $this->blade('<x-dui::tab.item tag="input" aria-label="Tab 1" />')
            ->assertSee('<input', false)
            ->assertSee('type="radio"', false)
            ->assertSee('role="tab"', false);
    }

    public function test_tab_item_invalid_tag_falls_back_to_a(): void
    {
        $this->blade('<x-dui::tab.item tag="script">Tab</x-dui::tab.item>')
            ->assertSee('<a', false)
            ->assertDontSee('<script', false);
    }

    // ─── Tab Content ────────────────────────────────────────

    public function test_tab_content_renders_with_tab_content_class(): void
    {
        $this->blade('<x-dui::tab.content>Panel</x-dui::tab.content>')
            ->assertSee('class="tab-content"', false)
            ->assertSeeText('Panel');
    }

    public function test_tab_content_renders_div_element(): void
    {
        $this->blade('<x-dui::tab.content>Content</x-dui::tab.content>')
            ->assertSee('<div', false);
    }

    // ─── Link ───────────────────────────────────────────────

    public function test_link_renders_with_default_class(): void
    {
        $this->blade('<x-dui::link href="#">Click</x-dui::link>')
            ->assertSee('class="link"', false)
            ->assertSee('<a', false)
            ->assertSeeText('Click');
    }

    public function test_link_with_color_and_hover(): void
    {
        $this->blade('<x-dui::link color="primary" :hover="true" href="#">Link</x-dui::link>')
            ->assertSee('link-primary', false)
            ->assertSee('link-hover', false);
    }
}
