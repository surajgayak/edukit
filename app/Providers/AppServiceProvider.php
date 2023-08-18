<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Setting;
use App\Models\Paymentmethod;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        view()->composer('layouts.frontend-layout.navfoot', function ($view) {
            $view->with([
                'courses' => Course::get(),
                'settings' => Setting::first(),
                'paymentmethods' => Paymentmethod::all()
            ]);
        });
    }
}
