<?php

namespace Adaptivemedia\EmailQueueChecker\Test;

use Adaptivemedia\EmailQueueChecker\AddEmailQueueCheckerEmailCommand;
use Illuminate\Support\ServiceProvider;

class ArtisanEmailQueueCheckerServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('email-queue-checker:add', AddEmailQueueCheckerEmailCommand::class);
        $this->commands(['email-queue-checker:add']);
    }
}