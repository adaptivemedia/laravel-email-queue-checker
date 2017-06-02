<?php
namespace Adaptivemedia\EmailQueueChecker\Test;

use Adaptivemedia\EmailQueueChecker\EmailQueueCheckerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            EmailQueueCheckerServiceProvider::class,
        ];
    }

    protected function loadConfigStub($stub)
    {
        // Load config stub into config
        $config = require(__DIR__ . '/stubs/' . $stub);
        foreach ($config as $key => $val) {
            $this->app['config']->set('email-queue-checker.' . $key, $val);
        }
    }
}
