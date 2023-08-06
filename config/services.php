<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '863895371598980',
        'client_secret' => 'c68a847ac073ae338d0b89c9e3063503',
        'redirect' => '/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '266262896619-b6radh7h84goqfdlncqokah840tdl71i.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',
    ],
    'github' => [
        'client_id' => 'Iv1.43d9d180a4082740',
        'client_secret' => '3e6fe49122b109791a85362c8d87f33d364268a7',
        'redirect' => '/auth/github/callback',
    ],
];
