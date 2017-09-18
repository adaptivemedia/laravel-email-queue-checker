
<?php

return [
    'model' => 'Adaptivemedia\EmailQueueChecker\Test\EmailModelFake',
    'save_method' => 'save',
    'values' => [
        'to_email' => 'info@domain.com',
        'from_name' => 'test_system_name',
        'from_email' => 'system_name@emailchecker.adaptivemail.se',
    ],

    'columns' => [
    ]
];
