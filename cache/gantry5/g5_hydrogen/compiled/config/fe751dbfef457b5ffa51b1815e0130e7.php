<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1612206825,
    'checksum' => 'da70291092480b581a9fcd52eed97a0c',
    'files' => [
        'templates/g5_hydrogen/custom/config/9' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/9/index.yaml',
                'modified' => 1612056927
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/9/layout.yaml',
                'modified' => 1612056927
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '9',
            'timestamp' => 1612056927,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1611523371
            ],
            'positions' => [
                
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-8836' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-2917' => 'Menu'
                ],
                'messages' => [
                    'system-messages-4327' => 'System Messages'
                ],
                'content' => [
                    'system-content-7173' => 'Page Content'
                ],
                'branding' => [
                    'branding-7678' => 'Branding'
                ],
                'sample' => [
                    'sample-3406' => 'Sample Content'
                ],
                'mobile-menu' => [
                    'mobile-menu-2651' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-2651' => 'mobile-menu-4430'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1611523371
            ],
            'layout' => [
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-8836 22',
                        1 => 'menu-2917 78'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-4327'
                    ],
                    1 => [
                        0 => 'system-content-7173'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'branding-7678'
                    ],
                    1 => [
                        0 => 'sample-3406'
                    ]
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'logo-8836' => [
                    'title' => 'Logo / Image',
                    'block' => [
                        'variations' => 'align-left nopaddingall'
                    ]
                ],
                'menu-2917' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'branding-7678' => [
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'sample-3406' => [
                    'title' => 'Sample Content',
                    'attributes' => [
                        'image' => 'gantry-media://tarjetas.png',
                        'headline' => '',
                        'description' => '',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ]
            ]
        ]
    ]
];
