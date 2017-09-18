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
    public function artisan_command_output_correct_info()
    {
        // Load config stub into config
        $this->loadConfigStub('ok_config_stub.php');

        Artisan::call('email-queue-checker:add-email');

        $output = Artisan::output();
        $this->assertContains((string)'Email added to queue', $output);
    }
}
