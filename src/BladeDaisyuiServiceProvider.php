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
    }
}
