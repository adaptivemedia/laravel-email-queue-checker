
<?php

return [
    'model' => 'Adaptivemedia\EmailQueueChecker\Test\EmailModelFake',
    'fill_method' => 'forceFill',
    'save_method' => 'save',
    'values' => [
    ],

    'columns' => [
        'to_email' => 'to_email',
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'subject' => 'subject',
        'body' => 'body',
    ]
];
