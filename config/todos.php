<?php

return [
    'work_hour' => 45,
    'start_at' => "09:00",
    'end_at' => "18:00",

    'integrations' => [
        [
            'name' => env('MOCKY1_NAME'),
            'adapter_name' => env('MOCKY1_ADAPTER_NAME'),
            'adapter_url' => env('MOCKY1_ADAPTER_URL')
        ],
        [
            'name' => env('MOCKY2_NAME'),
            'adapter_name' => env('MOCKY2_ADAPTER_NAME'),
            'adapter_url' => env('MOCKY2_ADAPTER_URL')
        ]
    ],

    env('MOCKY1_NAME') => [
        'adapter_name' => env('MOCKY1_ADAPTER_NAME'),
        'adapter_url' => env('MOCKY1_ADAPTER_URL')
    ],

    env('MOCKY2_NAME') => [
        'adapter_name' => env('MOCKY2_ADAPTER_NAME'),
        'adapter_url' => env('MOCKY2_ADAPTER_URL')
    ],
];
