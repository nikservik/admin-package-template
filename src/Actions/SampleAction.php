<?php


namespace VendorName\Skeleton\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsController;
use Lorisleiva\Actions\Concerns\AsObject;
use Nikservik\AdminDashboard\Middleware\AdminMiddleware;

class SampleAction
{
    use AsObject;
    use AsController;

    public static function route(): void
    {
        Route::get('/' . Config::get('package_slug.route') . '/action', static::class)
            ->middleware(['web', 'auth', AdminMiddleware::class]);
    }

    public function handle()
    {
        return 'handle';
    }

    public function asController(ActionRequest $request)
    {
        return view('package_slug::index', ['result' => $this->handle()]);
    }
}
