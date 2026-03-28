<?php

namespace Admin9\BladeDaisyui\Tests\Feature;

use Admin9\BladeDaisyui\Tests\TestCase;

class ExampleViewsTest extends TestCase
{
    public function test_control_room_showcase_view_renders(): void
    {
        $html = view('blade-daisyui::examples.control-room')->render();

        $this->assertStringContainsString('Control Room', $html);
        $this->assertStringContainsString('DaisyUI 5 Alignment Pass', $html);
        $this->assertStringContainsString('class="navbar', $html);
        $this->assertStringContainsString('class="table', $html);
        $this->assertStringContainsString('class="timeline', $html);
        $this->assertStringContainsString('Navigation density review', $html);
    }

    public function test_landing_editorial_showcase_view_renders(): void
    {
        $html = view('blade-daisyui::examples.landing-editorial')->render();

        $this->assertStringContainsString('Editorial landing flows', $html);
        $this->assertStringContainsString('See component list', $html);
        $this->assertStringContainsString('feature-card', $html);
        $this->assertStringContainsString('Request preview', $html);
        $this->assertStringContainsString('Story Pack', $html);
    }

    public function test_settings_lab_showcase_view_renders(): void
    {
        $html = view('blade-daisyui::examples.settings-lab')->render();

        $this->assertStringContainsString('Form Density Lab', $html);
        $this->assertStringContainsString('Save Audit Profile', $html);
        $this->assertStringContainsString('Validation calmness', $html);
        $this->assertStringContainsString('Northwind Control Cluster', $html);
        $this->assertStringContainsString('class="fieldset', $html);
    }
}
