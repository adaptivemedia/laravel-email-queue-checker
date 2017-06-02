<?php

namespace Adaptivemedia\EmailQueueChecker;

use Adaptivemedia\EmailQueueChecker\Exceptions\BadKeyInConfigException;
use Adaptivemedia\EmailQueueChecker\Exceptions\BadModelInConfigException;
use Adaptivemedia\EmailQueueChecker\Exceptions\BadValueInConfigException;
use Illuminate\Database\Eloquent\Model;

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
        $model = $this->resolveModel()->fillModel()->getModel();

        $model->save();

        return $model;
    }

    /**
     * @return Model
     */
    private function getModel()
    {
        return $this->model;
    }

    /**
     * @return $this
     */
    private function fillModel()
    {
        $fill = [
            $this->resolveKeyForColumn('from_name')  => $this->resolveValueForColumn('from_name'),
            $this->resolveKeyForColumn('from_email') => $this->resolveValueForColumn('from_email'),
            $this->resolveKeyForColumn('to_email')   => 'email.works@emailchecker.adaptivemail.se',
            $this->resolveKeyForColumn('subject')    => 'System: ' . $this->resolveValueForColumn('system'),
            $this->resolveKeyForColumn('body')       => $this->renderBody(),
        ];

        $this->model->forceFill($fill);

        return $this;
    }

    /**
     * @return $this
     */
    private function resolveModel()
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
     * @return mixed
     * @throws \Exception
     */
    private function resolveKeyForColumn(string $column)
    {
        $value = config('email-queue-checker.columns.' . $column);
        if (! $value) {
            throw new BadKeyInConfigException("No key found for column $column");
        }

        return $value;
    }

    /**
     * @param string $column
     * @return mixed
     * @throws \Exception
     */
    private function resolveValueForColumn(string $column)
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