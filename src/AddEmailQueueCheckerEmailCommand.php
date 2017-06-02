<?php

namespace Adaptivemedia\EmailQueueChecker;

use Illuminate\Console\Command;

class AddEmailQueueCheckerEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email-queue-checker:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds an email to the queue to be able to test that the queue works';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $service = app(EmailQueueChecker::class);

        $service->addEmailToQueue();
        
        $this->info('Email created');
    }
}
