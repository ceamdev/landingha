<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Defaultsession Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the defaultsession "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    |session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish thesession
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing,set that option.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    |session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of yoursession data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use thesession like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    |session File Location
    |--------------------------------------------------------------------------
    |
    | When using the nativesession driver, we need a location wheresession
    | files may be stored. A default has beenset for you but a different
    | location may be specified. This is only needed for filesessions.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    |session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis"session drivers, you may specify a
    | connection that should be used to manage thesesessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    |session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database"session driver, you may specify the table we
    | should use to manage thesessions. Of course, asensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    |session Cache Store
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache drivensession backends you may
    | list a cache store that should be used for thesesessions. This value
    | must match with one of the application's configured cache "stores".
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    |session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Somesession drivers must manually sweep their storage location to get
    | rid of oldsessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    |session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify asession
    | instance by ID. The name specified here will get used every time a
    | newsession cookie is created by the framework for every driver.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    |session Cookie Path
    |--------------------------------------------------------------------------
    |
    | Thesession cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    |session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify asession
    | in your application. This will determine which domains the cookie is
    | available to in your application. Asensible default has beenset.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | Bysetting this option to true,session cookies will only besent back
    | to theserver if the browser has a HTTPS connection. This will keep
    | the cookie from beingsent to you when it can't be donesecurely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    |setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | willset this value to "lax" since this is asecure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies
    |--------------------------------------------------------------------------
    |
    |setting this value to true will tie the cookie to the top-level site for
    | a cross-site context. Partitioned cookies are accepted by the browser
    | when flagged "secure" and the Same-Site attribute isset to "none".
    |
    */

    'partitioned' => false,

];
