<?php

return [
    'aliases' => [
        '@ext/main' => '@app/ext/main'
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views/layouts' => '@ext/main/views/layouts',
                ],
            ],
        ],
    ],
    /*'modules' => [
        'main' => [
            'class' => 'app\modules\main\Module',
        ],
    ],*/
];
