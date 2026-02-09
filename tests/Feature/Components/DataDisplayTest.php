<?php

namespace Admin9\BladeDaisyui\Tests\Feature\Components;

use Admin9\BladeDaisyui\Tests\TestCase;

class DataDisplayTest extends TestCase
{
    // ── Avatar ──────────────────────────────────────────────

    public function test_avatar_renders_default(): void
    {
        $this->blade('<x-dui::avatar><img src="/img.png" /></x-dui::avatar>')
            ->assertSee('class="avatar"', false)
            ->assertSee('<img src="/img.png"', false);
    }

    public function test_avatar_online(): void
    {
        $this->blade('<x-dui::avatar :online="true"><img /></x-dui::avatar>')
            ->assertSee('avatar-online', false);
    }

    // ── Avatar Group ────────────────────────────────────────

    public function test_avatar_group_renders(): void
    {
        $this->blade('<x-dui::avatar.group>items</x-dui::avatar.group>')
            ->assertSee('avatar-group', false);
    }

    // ── Badge ────────────────────────────────────────────────

    public function test_badge_renders_default(): void
    {
        $this->blade('<x-dui::badge>New</x-dui::badge>')
            ->assertSee('<span', false)
            ->assertSee('badge', false)
            ->assertSeeText('New');
    }

    public function test_badge_with_color_and_size(): void
    {
        $this->blade('<x-dui::badge color="primary" size="lg">Tag</x-dui::badge>')
            ->assertSee('badge-primary', false)
            ->assertSee('badge-lg', false);
    }

    public function test_badge_class_merge(): void
    {
        $this->blade('<x-dui::badge color="info" class="gap-2">New</x-dui::badge>')
            ->assertSee('badge badge-info', false)
            ->assertSee('gap-2', false);
    }

    public function test_badge_passes_through_id_attribute(): void
    {
        $this->blade('<x-dui::badge id="my-badge" data-count="5">5</x-dui::badge>')
            ->assertSee('id="my-badge"', false)
            ->assertSee('data-count="5"', false);
    }

    // ── Card ─────────────────────────────────────────────────

    public function test_card_renders_default(): void
    {
        $this->blade('<x-dui::card>Content</x-dui::card>')
            ->assertSee('class="card"', false)
            ->assertSeeText('Content');
    }

    public function test_card_with_variant_and_side(): void
    {
        $this->blade('<x-dui::card variant="bordered" :side="true">C</x-dui::card>')
            ->assertSee('card-bordered', false)
            ->assertSee('card-side', false);
    }

    // ── Card Body ────────────────────────────────────────────

    public function test_card_body_renders(): void
    {
        $this->blade('<x-dui::card.body>Body</x-dui::card.body>')
            ->assertSee('card-body', false)
            ->assertSeeText('Body');
    }

    // ── Card Title ───────────────────────────────────────────

    public function test_card_title_renders_h2_by_default(): void
    {
        $this->blade('<x-dui::card.title>Title</x-dui::card.title>')
            ->assertSee('<h2', false)
            ->assertSee('card-title', false)
            ->assertSeeText('Title');
    }

    public function test_card_title_custom_tag(): void
    {
        $this->blade('<x-dui::card.title tag="h3">Title</x-dui::card.title>')
            ->assertSee('<h3', false)
            ->assertDontSee('<h2', false);
    }

    public function test_card_title_invalid_tag_falls_back_to_h2(): void
    {
        $this->blade('<x-dui::card.title tag="script">Title</x-dui::card.title>')
            ->assertSee('<h2', false)
            ->assertDontSee('<script', false);
    }

    // ── Card Actions ─────────────────────────────────────────

    public function test_card_actions_renders(): void
    {
        $this->blade('<x-dui::card.actions>Actions</x-dui::card.actions>')
            ->assertSee('card-actions', false)
            ->assertSeeText('Actions');
    }

    // ── Carousel ───────────────────────────────────────────

    public function test_carousel_renders_default(): void
    {
        $this->blade('<x-dui::carousel>Slides</x-dui::carousel>')
            ->assertSee('class="carousel"', false)
            ->assertSeeText('Slides');
    }

    public function test_carousel_snap_and_vertical(): void
    {
        $this->blade('<x-dui::carousel snap="center" :vertical="true">S</x-dui::carousel>')
            ->assertSee('carousel-center', false)
            ->assertSee('carousel-vertical', false);
    }

    // ── Chat ─────────────────────────────────────────────────

    public function test_chat_renders_start_by_default(): void
    {
        $this->blade('<x-dui::chat>Hi</x-dui::chat>')
            ->assertSee('chat-start', false)
            ->assertSee('class="chat', false);
    }

    public function test_chat_end(): void
    {
        $this->blade('<x-dui::chat :end="true">Bye</x-dui::chat>')
            ->assertSee('chat-end', false)
            ->assertDontSee('chat-start', false);
    }

    // ── Chat Bubble ──────────────────────────────────────────

    public function test_chat_bubble_renders_default(): void
    {
        $this->blade('<x-dui::chat.bubble>Hello</x-dui::chat.bubble>')
            ->assertSee('chat-bubble', false)
            ->assertSeeText('Hello');
    }

    public function test_chat_bubble_with_color(): void
    {
        $this->blade('<x-dui::chat.bubble color="primary">Hi</x-dui::chat.bubble>')
            ->assertSee('chat-bubble-primary', false);
    }

    // ── Countdown ────────────────────────────────────────────

    public function test_countdown_renders_default_value(): void
    {
        $this->blade('<x-dui::countdown />')
            ->assertSee('countdown', false)
            ->assertSee('--value:0;', false);
    }

    public function test_countdown_with_value(): void
    {
        $this->blade('<x-dui::countdown :value="42" />')
            ->assertSee('--value:42;', false);
    }

    // ── Diff ──────────────────────────────────────────────────

    public function test_diff_renders_figure(): void
    {
        $this->blade('<x-dui::diff>Content</x-dui::diff>')
            ->assertSee('<figure', false)
            ->assertSee('diff', false)
            ->assertSee('tabindex="0"', false);
    }

    public function test_diff_renders_slot_content(): void
    {
        $this->blade('<x-dui::diff>Diff content</x-dui::diff>')
            ->assertSeeText('Diff content');
    }

    // ── Kbd ───────────────────────────────────────────────────

    public function test_kbd_renders_default(): void
    {
        $this->blade('<x-dui::kbd>F1</x-dui::kbd>')
            ->assertSee('<kbd', false)
            ->assertSee('kbd', false)
            ->assertSeeText('F1');
    }

    public function test_kbd_with_size(): void
    {
        $this->blade('<x-dui::kbd size="lg">Esc</x-dui::kbd>')
            ->assertSee('kbd-lg', false);
    }

    // ── List ──────────────────────────────────────────────────

    public function test_list_renders(): void
    {
        $this->blade('<x-dui::list><li>Item</li></x-dui::list>')
            ->assertSee('<ul', false)
            ->assertSee('class="list"', false)
            ->assertSeeText('Item');
    }

    public function test_list_renders_slot(): void
    {
        $this->blade('<x-dui::list><li>A</li><li>B</li></x-dui::list>')
            ->assertSeeText('A')
            ->assertSeeText('B');
    }

    // ── Stat (container) ─────────────────────────────────────

    public function test_stat_container_renders_default(): void
    {
        $this->blade('<x-dui::stat>Stats</x-dui::stat>')
            ->assertSee('class="stats"', false)
            ->assertSeeText('Stats');
    }

    public function test_stat_container_horizontal(): void
    {
        $this->blade('<x-dui::stat :horizontal="true">S</x-dui::stat>')
            ->assertSee('stats-horizontal', false);
    }

    // ── Stat.stat (individual) ────────────────────────────────

    public function test_stat_stat_renders(): void
    {
        $this->blade('<x-dui::stat.stat>Value</x-dui::stat.stat>')
            ->assertSee('class="stat"', false)
            ->assertSeeText('Value');
    }

    public function test_stat_stat_renders_slot(): void
    {
        $this->blade('<x-dui::stat.stat><div class="stat-title">Revenue</div></x-dui::stat.stat>')
            ->assertSee('stat-title', false)
            ->assertSeeText('Revenue');
    }

    // ── Status ────────────────────────────────────────────────

    public function test_status_renders_default(): void
    {
        $this->blade('<x-dui::status />')
            ->assertSee('class="status"', false);
    }

    public function test_status_with_color_and_size(): void
    {
        $this->blade('<x-dui::status color="success" size="lg" />')
            ->assertSee('status-success', false)
            ->assertSee('status-lg', false);
    }

    // ── Table ─────────────────────────────────────────────────

    public function test_table_renders_default(): void
    {
        $this->blade('<x-dui::table><tr><td>Cell</td></tr></x-dui::table>')
            ->assertSee('<table', false)
            ->assertSee('class="table"', false)
            ->assertSeeText('Cell');
    }

    public function test_table_zebra_and_pin_rows(): void
    {
        $this->blade('<x-dui::table :zebra="true" :pin-rows="true"><tr><td>A</td></tr></x-dui::table>')
            ->assertSee('table-zebra', false)
            ->assertSee('table-pin-rows', false);
    }

    public function test_table_with_size(): void
    {
        $this->blade('<x-dui::table size="xs"><tr><td>B</td></tr></x-dui::table>')
            ->assertSee('table-xs', false);
    }

    // ── Timeline ──────────────────────────────────────────────

    public function test_timeline_renders_default(): void
    {
        $this->blade('<x-dui::timeline><li>Event</li></x-dui::timeline>')
            ->assertSee('<ul', false)
            ->assertSee('class="timeline"', false)
            ->assertSeeText('Event');
    }

    public function test_timeline_horizontal_and_compact(): void
    {
        $this->blade('<x-dui::timeline :horizontal="true" :compact="true"><li>E</li></x-dui::timeline>')
            ->assertSee('timeline-horizontal', false)
            ->assertSee('timeline-compact', false);
    }
}
