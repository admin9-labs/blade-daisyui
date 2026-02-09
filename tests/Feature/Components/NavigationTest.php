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

    // ─── Menu ───────────────────────────────────────────────

    public function test_menu_renders_with_default_class(): void
    {
        $this->blade('<x-dui::menu><li>Item</li></x-dui::menu>')
            ->assertSee('class="menu"', false)
            ->assertSee('<ul', false);
    }

    public function test_menu_with_size_and_direction(): void
    {
        $this->blade('<x-dui::menu size="lg" direction="horizontal"><li>Item</li></x-dui::menu>')
            ->assertSee('menu-lg', false)
            ->assertSee('menu-horizontal', false);
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
        $this->blade('<x-dui::tab variant="bordered" size="lg">Tabs</x-dui::tab>')
            ->assertSee('tabs-bordered', false)
            ->assertSee('tabs-lg', false);
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
