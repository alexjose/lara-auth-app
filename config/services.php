<?php
return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
      | default location for this type of information, allowing packages
      | to have a conventional place to find your various credentials.
      |
     */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],
    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
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
    'facebook' => [
        'client_id' => '878186438992445',
        'client_secret' => 'f68181a5dcb8784ac33c19d7a5196195',
        'redirect' => 'http://localhost/lara-auth-app/public/callback/facebook',
    ],
    'google' => [
        'client_id'     => '401794564613-unued6uvieh51bol6tgug7ocr1p54m07.apps.googleusercontent.com',
        'client_secret' => 'jNEL-O-3F-hYZ053GQUINz3f',
        'redirect'      => 'http://localhost/lara-auth-app/public/callback/google'
    ]

];
