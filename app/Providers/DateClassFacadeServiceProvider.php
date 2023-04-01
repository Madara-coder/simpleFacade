<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CustomSolution\DateClass;

class DateClassFacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('dateClass', function () {
            return new DateClass();
        });
    }
}
