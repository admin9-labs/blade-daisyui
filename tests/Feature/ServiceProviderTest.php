<?php

namespace Admin9\BladeDaisyui\Tests\Feature;

use Admin9\BladeDaisyui\Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    public function test_dui_prefix_is_registered(): void
    {
        $this->blade('<x-dui::badge>OK</x-dui::badge>')
            ->assertSee('badge', false)
            ->assertSeeText('OK');
    }
}
