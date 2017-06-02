
<?php

return [
    'model' => 'Adaptivemedia\EmailQueueChecker\Test\EmailModelFake',

    'values' => [

    ],

    /**
     * The column mappings.
     * What we call it => this systems local name for the column on the email class
     */
    'columns' => [
        'to_email' => 'to_email',
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'subject' => 'subject',
        'body' => 'body',
    ]
];
