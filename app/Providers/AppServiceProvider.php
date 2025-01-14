<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (request()->is('owner*')) {
            config(['session.cookie' => config('session.cookie_owner')]);
        } else {
            config(['session.cookie' => config('session.cookie')]);
        }
    }
}
