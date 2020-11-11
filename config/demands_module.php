<?php

use Hamelius\Demands\Guards\Checkers\CheckIfDemandTypeTransitionRequiredFieldsAreNotEmpty;
use Hamelius\Demands\Guards\Checkers\CheckIfUserCanApplyTransition;

return [

    'default_layout' => 'layouts.main',

    'app_name' => config('app.name', 'Application'),

    'default_middlewares' => [
        'web',
    ],

    'default_api_middlewares' => [
        'api',
    ],

    'default_checkers'       => [
        CheckIfDemandTypeTransitionRequiredFieldsAreNotEmpty::class,
        CheckIfUserCanApplyTransition::class
    ],
    'default_actions_before' => [],
    'default_actions_after'  => [],

    'available_checkers'       => [],
    'available_actions_before' => [],
    'available_actions_after'  => [
        \Hamelius\Demands\Guards\Actions\LoggerAction::class,
        \Hamelius\Demands\Guards\Actions\SampleActionWithRequiredFields::class
    ],

    'system' => [
        'userModel'           => config('auth.providers.users.model', '\App\User'),
        'user_title_property' => 'email',
        'uploaded_files_dir' => 'uploaded'
            . DIRECTORY_SEPARATOR
            . 'vendor'
            . DIRECTORY_SEPARATOR
            . 'demadns'
            . DIRECTORY_SEPARATOR,
    ],
];
