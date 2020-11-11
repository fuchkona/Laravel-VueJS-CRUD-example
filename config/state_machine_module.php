<?php

return [

    'default_layout' => 'layouts.main',

    'app_name' => config('app.name', 'Application'),

    'default_middlewares' => [
        'web',
    ],

    'default_api_middlewares' => [
        'api',
    ],

];
