<?php

return [
    'model' => 'App\Email',

    'values' => [
        'system' => 'this_systems_unique_name', // TODO: change this!
        'from_name' => 'Systems name', // TODO: change this!
        'from_email' => 'emailchecker@thissystemsdomain.com' // TODO: change this!
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