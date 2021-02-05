<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/pinkfashion/templates/g5_hydrogen/layouts/2_column_-_right.yaml',
    'modified' => 1611523371,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/2-col-right.png'
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => 'menu'
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'main 80' => [
                            0 => 'position-breadcrumbs',
                            1 => 'system-messages',
                            2 => 'system-content'
                        ]
                    ],
                    1 => [
                        'sidebar 20' => [
                            0 => 'position-sidebar'
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => 'position-footer',
                1 => [
                    0 => 'copyright 40',
                    1 => 'spacer 30',
                    2 => 'branding 30'
                ]
            ],
            'offcanvas' => [
                0 => 'mobile-menu'
            ]
        ],
        'structure' => [
            'sidebar' => [
                'subtype' => 'aside',
                'block' => [
                    'fixed' => 1
                ]
            ]
        ]
    ]
];
