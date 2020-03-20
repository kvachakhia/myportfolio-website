<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;
use App\About;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::forever('abouts', About::all());
    }
}
