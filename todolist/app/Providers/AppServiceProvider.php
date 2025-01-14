<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;


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
        $this->app->booted(function () {
            $schedule = app(Schedule::class);
            $schedule->command('backup:database')->hourly();
        });
    }
}
