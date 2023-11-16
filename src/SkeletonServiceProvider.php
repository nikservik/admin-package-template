<?php

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use VendorName\Skeleton\Livewire\Index;
use Nikservik\AdminMondar\Livewire\SampleModal;

class SkeletonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/package_slug.php', 'package_slug');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'package_slug');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'package_slug');
        $this->registerLivewireComponents();

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/package_slug.php' => config_path('package_slug.php'),
        ], 'package_slug-config');
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/package_slug')
        ], 'package_slug-trans');
    }

    protected function registerLivewireComponents()
    {
        Livewire::component('package_slug-index', Index::class);
        Livewire::component('package_slug-modal', SampleModal::class);
    }
}
