<?php
return [
    /* NEEDS TO BE DUPLICATED IN THE NEW SITE
    |--------------------------------------------------------------------------
    | Client Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for client services such
    | as new websites, sites, and flights etc.. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    // add to service provider for publishing

// public function boot()
// {
//     $this->publishes([
//         __DIR__.'/path/to/config/client/client.php' => config_path('client.php'),
//     ]);
// }
        'client' => [
            'model' => App\User::class,
            'user_name' => env('USER_NAME'),
            'user_email' => env('USER_EMAIL'),
            'user_password' => env('USER_PASSWORD'),
            'user_api' => env('USER_API'),
            'user_webhook' => env('USER_WEBHOOK'),
            'user_password' => env('USER_PASSWORD'),
        ],

        'website' => [
            'model' => App\Website::class,
            'name' => env('WEB_NAME'),
            'web_directory' => env('WEB_DIRECTORY'),
            'domain' => env('WEB_DOMAIN'),
            'email' => env('WEB_EMAIL'),

            // social info or blog
            'facebook' => env('WEB_FACEBOOK'),
            'twitter' => env('WEB_TWITTER'),
            'about' => env('WEB_ABOUT'),
        ],

        'client_site' => [
            'model' => App\Site::class,
            'sid' => env('SITE_SID'),
            'repository' => env('SITE_REPOSITORY'),

            // Company Info or blog
            'address' => env('SITE_STREET'),
            'city' => env('SITE_CITY'),
            'state' => env('SITE_STATE'),
            'zip' => env('SITE_ZIP'),
            'phone' => env('SITE_PHONE'),
            'email' => env('SITE_EMAIL'),
        ],
    ];
