<?php

namespace Admin9\BladeDaisyui;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeDaisyuiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('blade-daisyui')
            ->hasViews();
    }

    public function packageBooted(): void
    {
        Blade::anonymousComponentPath(
            $this->package->basePath('/../resources/views/components'),
            'dui'
        );

        $exampleStubs = [
            $this->package->basePath('/../stubs/views/dui/control-room.blade.php') => resource_path('views/dui/control-room.blade.php'),
            $this->package->basePath('/../stubs/views/dui/landing-editorial.blade.php') => resource_path('views/dui/landing-editorial.blade.php'),
            $this->package->basePath('/../stubs/views/dui/settings-lab.blade.php') => resource_path('views/dui/settings-lab.blade.php'),
        ];

        $tailwindStub = [
            $this->package->basePath('/../stubs/css/blade-daisyui-examples.css') => resource_path('css/vendor/blade-daisyui-examples.css'),
        ];

        $this->publishes($exampleStubs, 'blade-daisyui-examples');
        $this->publishes($tailwindStub, 'blade-daisyui-tailwind-stub');
        $this->publishes($exampleStubs + $tailwindStub, 'blade-daisyui-stubs');
    }
}
