<?php

namespace Adaptivemedia\EmailQueueChecker\Test;

use Illuminate\Support\Facades\Artisan;

class EmailQueueCheckerCommandTest extends TestCase
{

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ArtisanEmailQueueCheckerServiceProvider::class,
        ];
    }

    /** @test */
    public function artisan_command_runs_code()
    {
        // Load config stub into config
        $this->loadConfigStub('ok_config_stub.php');

        Artisan::call('email-queue-checker:add');

        $output = Artisan::output();
        $this->assertContains((string)'Email created', $output);
    }
}
