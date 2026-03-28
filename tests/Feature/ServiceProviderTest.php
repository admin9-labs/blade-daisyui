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

    public function test_example_wrappers_can_be_published(): void
    {
        $this->artisan('vendor:publish', ['--tag' => 'blade-daisyui-examples', '--force' => true])
            ->assertExitCode(0);

        $this->assertFileExists(resource_path('views/blade-daisyui/control-room.blade.php'));
        $this->assertFileExists(resource_path('views/blade-daisyui/landing-editorial.blade.php'));
        $this->assertFileExists(resource_path('views/blade-daisyui/settings-lab.blade.php'));
    }

    public function test_tailwind_stub_can_be_published(): void
    {
        $this->artisan('vendor:publish', ['--tag' => 'blade-daisyui-tailwind-stub', '--force' => true])
            ->assertExitCode(0);

        $this->assertFileExists(resource_path('css/vendor/blade-daisyui-examples.css'));
    }
}
