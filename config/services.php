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
    
    'google_old' => [
        // 'client_id' => '85647384052-lp6cupjijl4ou9590ofdm32eoub3pq2d.apps.googleusercontent.com',
        'client_id' => env('GOOGLE_CLIENT_ID'),
        // 'client_secret' => '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',
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],
    
    'google' => [
        'client_id' => env('GOOGLE_STUDENTCLIENT_ID'),
        'client_secret' => env('GOOGLE_STUDENTCLIENT_SECRET'),
        'redirect' => 'http://127.0.0.1:8000/student/auth/google/callback'
    ],
];
