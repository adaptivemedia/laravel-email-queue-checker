
<?php

return [
    'model' => 'Adaptivemedia\EmailQueueChecker\Test\EmailModelFake',

    'values' => [
        'system' => 'test_this_systems_unique_name', // TODO: change this!
        'from_name' => 'test_system_name', // TODO: change this!
        'from_email' => 'emailchecker@thissystemsdomain.com' // TODO: change this!
    ],

    /**
     * The column mappings.
     * What we call it => this systems local name for the column on the email class
     */
    'columns' => [
    ]
];
