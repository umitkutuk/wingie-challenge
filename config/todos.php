<?php

return [
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
