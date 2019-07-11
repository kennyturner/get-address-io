<?php

return [
    /*
    |--------------------------------------------------------------------------
    | getAddress.io API Base URL
    |--------------------------------------------------------------------------
    |
    | You should not need to change this.
    |
    */
    'url' => 'https://api.getAddress.io',

    /*
    |--------------------------------------------------------------------------
    | API key
    |--------------------------------------------------------------------------
    |
    | Enter your API key here.
    |
    */
    'api_key' => env('GETADDRESS_API_KEY', null),

    /*
    |--------------------------------------------------------------------------
    | Admin key
    |--------------------------------------------------------------------------
    |
    | Enter your Admin key here.
    |
    */
    'admin_key' => env('GETADDRESS_ADMIN_KEY', null),

    /*
    |--------------------------------------------------------------------------
    | Expanded Results
    |--------------------------------------------------------------------------
    |
    | Set this to true if you want to enable expanded results, giving extra
    | fields such as building name and number.
    |
    */
    'expanded_results' => false,

    /*
    |--------------------------------------------------------------------------
    | Plan Limit Delay
    |--------------------------------------------------------------------------
    |
    | Set this to the delay on your plan.
    | Free - 0
    | 50 - 5
    | 2000 - 5
    | 5000 - 2
    |
    */
    'limit_delay' => 5,

    /*
    |--------------------------------------------------------------------------
    | Enable Cache
    |--------------------------------------------------------------------------
    |
    | Set this to true if you want to use the database cache.
    |
    */
    'enable_cache' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache Expiry
    |--------------------------------------------------------------------------
    |
    | Cache expiry time in days.
    |
    */
    'cache_expiry' => 30,
];
