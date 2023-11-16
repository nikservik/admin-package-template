<?php

namespace VendorName\Skeleton\Tests;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Livewire\LivewireServiceProvider;
use Lorisleiva\Actions\ActionServiceProvider;
use Nikservik\AdminDashboard\AdminDashboardServiceProvider;
use Nikservik\Users\UsersServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    protected User $user;
    protected User $admin;

    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        $this->user = User::factory()->create();
        $this->admin = User::factory()->create(['admin_role' => 4]);
    }

    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class,
            AdminDashboardServiceProvider::class,
            ActionServiceProvider::class,
            UsersServiceProvider::class,
            LivewireServiceProvider::class,
       ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'mysql');
        config()->set('app.locale', 'ru');
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
        $this->loadMigrationsFrom(__DIR__ . '/../vendor/nikservik/users/database/migrations');
    }

    protected function getBasePath(): string
    {
        return __DIR__.'/../laravel';
    }
}
