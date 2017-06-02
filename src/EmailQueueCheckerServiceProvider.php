<?php

namespace Adaptivemedia\EmailQueueChecker;

use Illuminate\Support\ServiceProvider;

class EmailQueueCheckerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/email-queue-checker.php' => config_path('email-queue-checker.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
