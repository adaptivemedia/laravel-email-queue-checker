<?php

namespace Adaptivemedia\EmailQueueChecker\Test;

use Adaptivemedia\EmailQueueChecker\EmailQueueChecker;

class EmailQueueCheckerTest extends TestCase
{
    /** @test */
    public function an_email_can_be_filled_with_correct_properties()
    {
        // Load config stub into config
        $this->loadConfigStub('ok_config_stub.php');

        $service = new EmailQueueChecker;
        $model = $service->addEmailToQueue();

        $this->assertEquals('test_system_name', $model->attributes['from_name']);
        $this->assertEquals('OK', $model->attributes['body']);
    }

    /**
     * @test
     * @expectedException \Adaptivemedia\EmailQueueChecker\Exceptions\BadModelInConfigException
     */
    public function exception_is_thrown_when_invalid_model_class_is_supplied()
    {
        // Load config stub into config
        $this->loadConfigStub('bad_model_config_stub.php');

        $service = new EmailQueueChecker;
        $service->addEmailToQueue();
    }

    /**
     * @test
     * @expectedException \Adaptivemedia\EmailQueueChecker\Exceptions\BadKeyInConfigException
     */
    public function exception_is_thrown_when_invalid_key_is_supplied()
    {
        // Load config stub into config
        $this->loadConfigStub('bad_key_config_stub.php');

        $service = new EmailQueueChecker;
        $service->addEmailToQueue();
    }

    /**
     * @test
     * @expectedException \Adaptivemedia\EmailQueueChecker\Exceptions\BadValueInConfigException
     */
    public function exception_is_thrown_when_invalid_value_is_supplied()
    {
        // Load config stub into config
        $this->loadConfigStub('bad_value_config_stub.php');

        $service = new EmailQueueChecker;
        $service->addEmailToQueue();
    }
}
