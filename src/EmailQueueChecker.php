<?php

namespace Adaptivemedia\EmailQueueChecker;

use Adaptivemedia\EmailQueueChecker\Exceptions\BadColumnInConfigException;
use Adaptivemedia\EmailQueueChecker\Exceptions\BadModelInConfigException;
use Adaptivemedia\EmailQueueChecker\Exceptions\BadValueInConfigException;

class EmailQueueChecker
{
    /**
     * @var mixed
     */
    private $model;

    /**
     * Add an email to the local queue for sending
     *
     * @return mixed  Returns the Email Model
     */
    public function addEmailToQueue()
    {
        return $this->resolveModel()->fillModel()->saveModel()->getModel();
    }

    /**
     * @return mixed
     */
    private function getModel()
    {
        return $this->model;
    }

    /**
     * @return EmailQueueChecker
     */
    private function fillModel(): EmailQueueChecker
    {
        $data = [
            $this->resolveKeyForColumn('from_name')  => $this->resolveValueForColumn('from_name'),
            $this->resolveKeyForColumn('from_email') => $this->resolveValueForColumn('from_email'),
            $this->resolveKeyForColumn('to_email')   => $this->resolveValueForColumn('to_email'),
            $this->resolveKeyForColumn('subject')    => 'Emailchecker for ' . $this->resolveValueForColumn('from_name'),
            $this->resolveKeyForColumn('body')       => $this->renderBody(),
        ];

        $this->model->forceFill($data);

        return $this;
    }

    /**
     * @return EmailQueueChecker
     */
    private function saveModel(): EmailQueueChecker
    {
        $this->model->save();

        return $this;
    }

    /**
     * @return EmailQueueChecker
     * @throws BadModelInConfigException
     */
    private function resolveModel(): EmailQueueChecker
    {
        $modelClass = config('email-queue-checker.model');
        if (! class_exists($modelClass)) {
            throw new BadModelInConfigException('Model class given (' . $modelClass . ') was not found');
        }

        $this->model = new $modelClass;

        return $this;
    }

    /**
     * @param string $column
     * @return string
     * @throws BadColumnInConfigException
     */
    private function resolveKeyForColumn(string $column): string
    {
        $value = config('email-queue-checker.columns.' . $column);
        if (! $value) {
            throw new BadColumnInConfigException("No key found for column $column");
        }

        return $value;
    }

    /**
     * @param string $column
     * @return string
     * @throws BadValueInConfigException
     */
    private function resolveValueForColumn(string $column): string
    {
        $value = config('email-queue-checker.values.' . $column);
        if (! $value) {
            throw new BadValueInConfigException("No value found for column $column");
        }

        return $value;
    }

    /**
     * @return string
     */
    private function renderBody()
    {
        return 'OK';
    }
}
