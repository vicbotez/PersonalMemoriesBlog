<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | The view files for your application are stored here. We will store
    | them in the "resources/views" directory by default. However, you
    | may change this to any path that is convenient for your application.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade views are stored.
    | Typically, this is within the storage directory. You may change this
    | if you need to, but it's fine by default.
    |
    */

    'compiled' => storage_path('framework/views'),

];