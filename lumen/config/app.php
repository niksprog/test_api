<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Specific Settings
    |--------------------------------------------------------------------------
    |
    | These values are used by the application Middleware to determine if user
    | is allowed to make more requests.
    |
    */

    'request_limit' => 5,
    'request_time_limit' => date('Y-m-d H:i:s', strtotime('-1 hours')),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'DB' => Illuminate\Support\Facades\DB::class,
        'Config' => Illuminate\Support\Facades\Config::class,
    ]

];
