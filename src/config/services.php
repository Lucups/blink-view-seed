<?php
return [
    'request' => [
        'class' => \blink\http\Request::class,
        'middleware' => [],
    ],
    'response' => [
        'class' => \blink\http\Response::class,
        'middleware' => [],
    ],
    'view' => [
        'class' => \blink\view\View::class,
        'config'=> [
            'debug'     => true,
            'views_dir' => '/src/views/',
            'cache_dir' => '/runtime/cache/',
        ]
    ],
    'session' => [
        'class' => 'blink\session\Manager',
        'expires' => 3600 * 24 * 15,
        'storage' => [
            'class' => 'blink\session\FileStorage',
            'path' => __DIR__ . '/../../runtime/sessions'
        ]
    ],
    'auth' => [
        'class' => 'blink\auth\Auth',
        'model' => 'app\models\User',
    ],
    'log' => [
        'class' => 'blink\log\Logger',
        'targets' => [
            'file' => [
                'class' => 'blink\log\StreamTarget',
                'enabled' => true,
                'stream' => 'php://stderr',
                'level' => 'info',
            ]
        ],
    ],
];
