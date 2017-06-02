<?php

namespace Adaptivemedia\EmailQueueChecker\Test;


class EmailModelFake
{
    public $attributes = [];

    public function save()
    {
        return $this;
    }

    public function forceFill($attributes = [])
    {
        $this->attributes = $attributes;

        return $this;
    }
}