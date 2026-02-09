<?php

namespace Admin9\BladeDaisyui\Tests\Feature\Components;

use Admin9\BladeDaisyui\Tests\TestCase;

class LayoutTest extends TestCase
{
    // ─── Calendar ──────────────────────────────────────────

    public function test_calendar_renders_slot_content(): void
    {
        $this->blade('<x-dui::calendar>Calendar widget</x-dui::calendar>')
            ->assertSeeText('Calendar widget');
    }

    public function test_calendar_has_no_wrapper_element(): void
    {
        $this->blade('<x-dui::calendar>Just content</x-dui::calendar>')
            ->assertSeeText('Just content')
            ->assertDontSee('class="calendar"', false);
    }

    // ─── Collapse ──────────────────────────────────────────

    public function test_collapse_renders_with_collapse_class(): void
    {
        $this->blade('<x-dui::collapse>Body</x-dui::collapse>')
            ->assertSee('class="collapse"', false)
            ->assertSeeText('Body');
    }

    public function test_collapse_with_icon_arrow(): void
    {
        $this->blade('<x-dui::collapse icon="arrow">Body</x-dui::collapse>')
            ->assertSee('collapse-arrow', false);
    }

    // ─── Collapse Title ────────────────────────────────────

    public function test_collapse_title_renders_with_class(): void
    {
        $this->blade('<x-dui::collapse.title>Title text</x-dui::collapse.title>')
            ->assertSee('class="collapse-title"', false)
            ->assertSeeText('Title text');
    }

    public function test_collapse_title_renders_div_element(): void
    {
        $this->blade('<x-dui::collapse.title>Heading</x-dui::collapse.title>')
            ->assertSee('<div', false);
    }

    // ─── Collapse Content ──────────────────────────────────

    public function test_collapse_content_renders_with_class(): void
    {
        $this->blade('<x-dui::collapse.content>Inner</x-dui::collapse.content>')
            ->assertSee('class="collapse-content"', false)
            ->assertSeeText('Inner');
    }

    public function test_collapse_content_renders_div_element(): void
    {
        $this->blade('<x-dui::collapse.content>Inner</x-dui::collapse.content>')
            ->assertSee('<div', false);
    }

    // ─── Divider ───────────────────────────────────────────

    public function test_divider_renders_with_divider_class(): void
    {
        $this->blade('<x-dui::divider />')
            ->assertSee('class="divider"', false);
    }

    public function test_divider_with_color_and_direction(): void
    {
        $this->blade('<x-dui::divider color="primary" direction="horizontal" />')
            ->assertSee('divider-primary', false)
            ->assertSee('divider-horizontal', false);
    }

    public function test_divider_label_prop_overrides_slot(): void
    {
        $this->blade('<x-dui::divider label="OR">Slot text</x-dui::divider>')
            ->assertSeeText('OR')
            ->assertDontSeeText('Slot text');
    }

    // ─── Drawer ────────────────────────────────────────────

    public function test_drawer_renders_with_drawer_class(): void
    {
        $this->blade('<x-dui::drawer>Content</x-dui::drawer>')
            ->assertSee('class="drawer"', false)
            ->assertSeeText('Content');
    }

    public function test_drawer_end_and_open(): void
    {
        $this->blade('<x-dui::drawer :end="true" :open="true">Content</x-dui::drawer>')
            ->assertSee('drawer-end', false)
            ->assertSee('drawer-open', false);
    }

    // ─── Drawer Toggle ─────────────────────────────────────

    public function test_drawer_toggle_renders_checkbox_with_class(): void
    {
        $this->blade('<x-dui::drawer.toggle />')
            ->assertSee('<input type="checkbox"', false)
            ->assertSee('drawer-toggle', false);
    }

    public function test_drawer_toggle_is_input_element(): void
    {
        $this->blade('<x-dui::drawer.toggle />')
            ->assertSee('<input', false);
    }

    // ─── Drawer Content ────────────────────────────────────

    public function test_drawer_content_renders_with_class(): void
    {
        $this->blade('<x-dui::drawer.content>Main</x-dui::drawer.content>')
            ->assertSee('class="drawer-content"', false)
            ->assertSeeText('Main');
    }

    public function test_drawer_content_renders_div(): void
    {
        $this->blade('<x-dui::drawer.content>Main</x-dui::drawer.content>')
            ->assertSee('<div', false);
    }

    // ─── Drawer Side ───────────────────────────────────────

    public function test_drawer_side_renders_with_class(): void
    {
        $this->blade('<x-dui::drawer.side>Sidebar</x-dui::drawer.side>')
            ->assertSee('class="drawer-side"', false)
            ->assertSeeText('Sidebar');
    }

    public function test_drawer_side_renders_div(): void
    {
        $this->blade('<x-dui::drawer.side>Sidebar</x-dui::drawer.side>')
            ->assertSee('<div', false);
    }

    // ─── Drawer Overlay ────────────────────────────────────

    public function test_drawer_overlay_renders_with_class(): void
    {
        $this->blade('<x-dui::drawer.overlay />')
            ->assertSee('drawer-overlay', false);
    }

    public function test_drawer_overlay_renders_label_element(): void
    {
        $this->blade('<x-dui::drawer.overlay />')
            ->assertSee('<label', false)
            ->assertSee('aria-label="close sidebar"', false);
    }

    // ─── Footer ────────────────────────────────────────────

    public function test_footer_renders_with_footer_class(): void
    {
        $this->blade('<x-dui::footer>Footer content</x-dui::footer>')
            ->assertSee('<footer', false)
            ->assertSee('class="footer"', false)
            ->assertSeeText('Footer content');
    }

    public function test_footer_center(): void
    {
        $this->blade('<x-dui::footer :center="true">Centered</x-dui::footer>')
            ->assertSee('footer-center', false);
    }

    // ─── Hero ──────────────────────────────────────────────

    public function test_hero_renders_with_hero_class(): void
    {
        $this->blade('<x-dui::hero>Hero content</x-dui::hero>')
            ->assertSee('class="hero"', false)
            ->assertSeeText('Hero content');
    }

    public function test_hero_renders_div(): void
    {
        $this->blade('<x-dui::hero>Content</x-dui::hero>')
            ->assertSee('<div', false);
    }

    // ─── Hero Content ──────────────────────────────────────

    public function test_hero_content_renders_with_class(): void
    {
        $this->blade('<x-dui::hero.content>Inner</x-dui::hero.content>')
            ->assertSee('class="hero-content"', false)
            ->assertSeeText('Inner');
    }

    public function test_hero_content_renders_div(): void
    {
        $this->blade('<x-dui::hero.content>Inner</x-dui::hero.content>')
            ->assertSee('<div', false);
    }

    // ─── Hero Overlay ──────────────────────────────────────

    public function test_hero_overlay_renders_with_class(): void
    {
        $this->blade('<x-dui::hero.overlay />')
            ->assertSee('class="hero-overlay"', false);
    }

    public function test_hero_overlay_renders_div(): void
    {
        $this->blade('<x-dui::hero.overlay />')
            ->assertSee('<div', false);
    }

    // ─── Indicator ─────────────────────────────────────────

    public function test_indicator_renders_with_class(): void
    {
        $this->blade('<x-dui::indicator>Content</x-dui::indicator>')
            ->assertSee('class="indicator"', false)
            ->assertSeeText('Content');
    }

    public function test_indicator_renders_div(): void
    {
        $this->blade('<x-dui::indicator>Content</x-dui::indicator>')
            ->assertSee('<div', false);
    }

    // ─── Indicator Item ────────────────────────────────────

    public function test_indicator_item_renders_with_class(): void
    {
        $this->blade('<x-dui::indicator.item>99+</x-dui::indicator.item>')
            ->assertSee('indicator-item', false)
            ->assertSeeText('99+');
    }

    public function test_indicator_item_with_position(): void
    {
        $this->blade('<x-dui::indicator.item horizontal="start" vertical="bottom">!</x-dui::indicator.item>')
            ->assertSee('indicator-start', false)
            ->assertSee('indicator-bottom', false);
    }

    // ─── Join ──────────────────────────────────────────────

    public function test_join_renders_with_join_class(): void
    {
        $this->blade('<x-dui::join>Items</x-dui::join>')
            ->assertSee('class="join"', false)
            ->assertSeeText('Items');
    }

    public function test_join_with_direction_vertical(): void
    {
        $this->blade('<x-dui::join direction="vertical">Items</x-dui::join>')
            ->assertSee('join-vertical', false);
    }

    // ─── Join Item ─────────────────────────────────────────

    public function test_join_item_renders_with_class(): void
    {
        $this->blade('<x-dui::join.item>Item</x-dui::join.item>')
            ->assertSee('join-item', false)
            ->assertSeeText('Item');
    }

    public function test_join_item_renders_div(): void
    {
        $this->blade('<x-dui::join.item>Item</x-dui::join.item>')
            ->assertSee('<div', false);
    }

    // ─── Mask ──────────────────────────────────────────────

    public function test_mask_renders_with_mask_class(): void
    {
        $this->blade('<x-dui::mask>Content</x-dui::mask>')
            ->assertSee('class="mask"', false);
    }

    public function test_mask_with_shape_squircle(): void
    {
        $this->blade('<x-dui::mask shape="squircle">Content</x-dui::mask>')
            ->assertSee('mask-squircle', false);
    }

    public function test_mask_with_half(): void
    {
        $this->blade('<x-dui::mask half="1">Content</x-dui::mask>')
            ->assertSee('mask-half-1', false);
    }

    // ─── Mockup Browser ────────────────────────────────────

    public function test_mockup_browser_renders_with_class(): void
    {
        $this->blade('<x-dui::mockup-browser>Page</x-dui::mockup-browser>')
            ->assertSee('class="mockup-browser"', false)
            ->assertSeeText('Page');
    }

    public function test_mockup_browser_renders_div(): void
    {
        $this->blade('<x-dui::mockup-browser>Page</x-dui::mockup-browser>')
            ->assertSee('<div', false);
    }

    // ─── Mockup Code ───────────────────────────────────────

    public function test_mockup_code_renders_with_class(): void
    {
        $this->blade('<x-dui::mockup-code>Code</x-dui::mockup-code>')
            ->assertSee('class="mockup-code"', false)
            ->assertSeeText('Code');
    }

    public function test_mockup_code_renders_div(): void
    {
        $this->blade('<x-dui::mockup-code>Code</x-dui::mockup-code>')
            ->assertSee('<div', false);
    }

    // ─── Mockup Phone ─────────────────────────────────────

    public function test_mockup_phone_renders_with_class(): void
    {
        $this->blade('<x-dui::mockup-phone>Screen</x-dui::mockup-phone>')
            ->assertSee('class="mockup-phone"', false)
            ->assertSeeText('Screen');
    }

    public function test_mockup_phone_renders_div(): void
    {
        $this->blade('<x-dui::mockup-phone>Screen</x-dui::mockup-phone>')
            ->assertSee('<div', false);
    }

    // ─── Mockup Window ─────────────────────────────────────

    public function test_mockup_window_renders_with_class(): void
    {
        $this->blade('<x-dui::mockup-window>App</x-dui::mockup-window>')
            ->assertSee('class="mockup-window"', false)
            ->assertSeeText('App');
    }

    public function test_mockup_window_renders_div(): void
    {
        $this->blade('<x-dui::mockup-window>App</x-dui::mockup-window>')
            ->assertSee('<div', false);
    }

    // ─── Stack ─────────────────────────────────────────────

    public function test_stack_renders_with_stack_class(): void
    {
        $this->blade('<x-dui::stack>Layers</x-dui::stack>')
            ->assertSee('class="stack"', false)
            ->assertSeeText('Layers');
    }

    public function test_stack_with_position_top(): void
    {
        $this->blade('<x-dui::stack position="top">Layers</x-dui::stack>')
            ->assertSee('stack-top', false);
    }

    // ─── Hover 3D ──────────────────────────────────────────

    public function test_hover_3d_renders_with_class(): void
    {
        $this->blade('<x-dui::hover-3d>Image</x-dui::hover-3d>')
            ->assertSee('hover-3d', false)
            ->assertSeeText('Image');
    }

    public function test_hover_3d_contains_eight_empty_divs(): void
    {
        $this->blade('<x-dui::hover-3d>Image</x-dui::hover-3d>')
            ->assertSee('<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>', false);
    }

    // ─── Hover Gallery ─────────────────────────────────────

    public function test_hover_gallery_renders_with_class(): void
    {
        $this->blade('<x-dui::hover-gallery>Gallery</x-dui::hover-gallery>')
            ->assertSee('hover-gallery', false)
            ->assertSeeText('Gallery');
    }

    public function test_hover_gallery_renders_div(): void
    {
        $this->blade('<x-dui::hover-gallery>Gallery</x-dui::hover-gallery>')
            ->assertSee('<div', false);
    }

    // ─── Text Rotate ───────────────────────────────────────

    public function test_text_rotate_renders_with_class(): void
    {
        $this->blade('<x-dui::text-rotate>Rotating</x-dui::text-rotate>')
            ->assertSee('text-rotate', false)
            ->assertSeeText('Rotating');
    }

    public function test_text_rotate_renders_span(): void
    {
        $this->blade('<x-dui::text-rotate>Rotating</x-dui::text-rotate>')
            ->assertSee('<span', false);
    }

    // ─── Theme Controller ──────────────────────────────────

    public function test_theme_controller_renders_with_class(): void
    {
        $this->blade('<x-dui::theme-controller />')
            ->assertSee('theme-controller', false);
    }

    public function test_theme_controller_renders_input(): void
    {
        $this->blade('<x-dui::theme-controller />')
            ->assertSee('<input', false);
    }
}
