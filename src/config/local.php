<?php

return [
    'aliases' => [
        '@modules/frontend' => '@root/modules/frontend'
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views/layouts' => '@modules/frontend/views/layouts',
                ],
            ],
        ],
    ],
    /*'modules' => [
        'frontend' => [
            'class' => 'modules\frontend\Module',
        ],
    ],*/
];
