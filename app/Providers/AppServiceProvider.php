<?php

namespace App\Providers;

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
    public function boot(): void
    {
        $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        app()->setLocale($browserLang);
    }
}
