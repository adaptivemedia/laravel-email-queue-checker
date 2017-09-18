
<?php

return [
    'model' => 'Adaptivemedia\EmailQueueChecker\Test\EmailModelFake',
    'fill_method' => 'forceFill',
    'save_method' => 'save',
    'values' => [
        'to_email' => 'info@domain.com',
        'from_name' => 'test_system_name',
        'from_email' => 'system_name@emailchecker.adaptivemail.se',
    ],
    'columns' => [
        'from_name'  => 'from_name',
        'from_email' => 'from_email',
        'to_email'   => 'to_email',
        'subject'    => 'subject',
        'body'       => 'body',
    ]
];
