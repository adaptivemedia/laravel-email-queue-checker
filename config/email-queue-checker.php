<?php

return [

    /**
     * Class path to the email model class
     */
    'model' => 'App\Email',

    /**
     * Values for email
     */
    'values' => [
        // The systems name
        'from_name' => 'System name', // TODO: change this!

        // Sending from email - identifies this system
        'from_email' => 'system_name@emailchecker.adaptivemail.se', // TODO: change this!

        // To which email the mail should be sent to (as setup in Mandrill)
        'to_email' => 'email.works@emailchecker.adaptivemail.se',
    ],

    /**
     * The column mappings. Identifier => the email model property
     *
     * Eg. if your email model's "body" column is named "content", change the line to:
     * 'body' => 'content'
     */
    'columns' => [
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'to_email' => 'to_email',
        'subject' => 'subject',
        'body' => 'body',
    ],
];
