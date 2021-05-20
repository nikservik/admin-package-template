<?php

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;

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

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/package_slug.php' => config_path('package_slug.php'),
        ], 'package_slug-config');
    }
}
