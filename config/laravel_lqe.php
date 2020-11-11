<?php

use App\Http\Controllers\Transformers\BrandTransformer;
use App\Http\Controllers\Transformers\NetworkTransformer;
use App\Models\Brand;
use App\Models\Network;

return [

    'default_layout' => 'layouts.main',

    'app_name' => config('app.name', 'Application'),

    'default_middlewares' => [
        'web',
    ],

    'web_prefix' => 'admin',

    'default_api_middlewares' => [
        'api',
    ],

    'system' => [
        'user_model'          => config('auth.providers.users.model', '\App\User'),
        'brand_model'         => Brand::class,
        'brand_transformer'   => BrandTransformer::class,
        'network_model'       => Network::class,
        'network_transformer' => NetworkTransformer::class,

        'uploaded_files_dir' => 'uploaded'
            . DIRECTORY_SEPARATOR
            . 'vendor'
            . DIRECTORY_SEPARATOR
            . 'laravel_lqe'
            . DIRECTORY_SEPARATOR,
    ],
];
