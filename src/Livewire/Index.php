<?php

namespace VendorName\Skeleton\Livewire;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Livewire\Component;
use VendorName\AdminDashboard\Middleware\AdminMiddleware;

class Index extends Component
{
    protected $listeners = [
        'updated' => '$refresh',
    ];

    public static function route(): void
    {
        Route::get('/' . Config::get('package_slug.route'), static::class)
            ->middleware(['web', 'auth', AdminMiddleware::class]);
    }

    public function render()
    {
        return View::make("package_slug::index", [])
            ->layout("admin-dashboard::components.app", [
                'active' => 'package_slug',
//                опционально раздел подменю модуля
//                'active-sub' => 'main',
            ]);
    }
}
