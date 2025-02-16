<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Console\Schedules\TaskScheduler;

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
        // if ($this->app->environment('production')) {
        //     URL::forceScheme('https');
        // }        
        $this->app->make(TaskScheduler::class)->register(app('Illuminate\Console\Scheduling\Schedule'));    
    }
}