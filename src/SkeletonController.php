<?php

namespace VendorName\Skeleton;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class SkeletonController extends Controller
{
    public static function routes()
    {
        Route::namespace('VendorName\Skeleton')
            ->prefix('package_prefix')->group(function () {
                Route::get('', 'SkeletonController@index');

            });
    }

    public function index()
    {
        return view('package_slug::index');
    }
}
