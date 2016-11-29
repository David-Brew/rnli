<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
	'paypal' => [
        'client_id' => 'ASME4xXvmndbzCfltx6_Yv9HquIYAHw1rq_GggB0xyWEWWkc0s4DLnbl3uY0vf8q_8gL_-5kaHAnxOc6',
        'secret' => 'EPeaygjXlmWPF1WBtRxRtWV6b4KaM6RmR5v9BkPG9PLjP4jZ0JaFvEVh0DcBVf_xSmvcRuNixYnBpyfP'
    ],

];
