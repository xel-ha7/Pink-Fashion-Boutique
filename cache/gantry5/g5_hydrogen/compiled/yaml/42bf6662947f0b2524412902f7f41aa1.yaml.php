<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\pinkfashion/templates/g5_hydrogen/custom/particles/social-pro.yaml',
    'modified' => 1612229764,
    'data' => [
        'name' => 'Social Pro',
        'description' => 'Muestra botones sociales.',
        'type' => 'particle',
        'icon' => 'fa-share-alt',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable social particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'Clases CSS',
                    'description' => 'Nombre de las clases CSS para la partícula.',
                    'default' => 'social'
                ],
                'tituloprincipal' => [
                    'type' => 'input.text',
                    'label' => 'Título General',
                    'description' => 'Escribe el título general de la partícula',
                    'placeholder' => 'Ingrese el título'
                ],
                'etiquetatitulo' => [
                    'type' => 'select.select',
                    'label' => 'Etiqueta del título',
                    'description' => 'Defina Etiqueta del título general.',
                    'placeholder' => 'Seleccionar',
                    'default' => 'h2',
                    'options' => [
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                        'h6' => 'H6'
                    ]
                ],
                'orientacionitems' => [
                    'type' => 'input.radios',
                    'label' => 'Orientación Items',
                    'description' => '¿Cómo deseas mostrar los items?',
                    'default' => 'g-social-dis-horizontal',
                    'options' => [
                        'g-social-dis-horizontal' => 'Horizontal',
                        'g-social-dis-vertical' => 'Vertical'
                    ]
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Ventana de destino',
                    'class' => 'erick',
                    'description' => 'Ventana de destino cuando el enlace es presionado.',
                    'placeholder' => 'Seleccionar...',
                    'default' => '_blank',
                    'options' => [
                        '_parent' => 'Misma ventana',
                        '_blank' => 'Nueva ventana'
                    ]
                ],
                'display' => [
                    'type' => 'input.radios',
                    'label' => 'Mostrar',
                    'description' => '¿Comó deseas mostrar los íconos?',
                    'default' => 'ambos',
                    'options' => [
                        'solo_ico' => 'Sólo icono',
                        'ambos' => 'Icono y texto'
                    ]
                ],
                'espacioiconos' => [
                    'type' => 'input.text',
                    'label' => 'Espacio entre Items',
                    'description' => 'Define el espaciado entre  items',
                    'placeholder' => '.5rem'
                ],
                'colortexto' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color del texto',
                    'placeholder' => 'Color del texto'
                ],
                'textodebajo' => [
                    'type' => 'input.checkbox',
                    'label' => 'Texto debajo del Icono',
                    'description' => 'Colocar el texto debajo de cada ícono.',
                    'default' => true
                ],
                'diseno' => [
                    'type' => 'select.select',
                    'label' => 'Diseño',
                    'description' => 'Elija el diseño para sus botones.',
                    'placeholder' => 'Seleccionar...',
                    'default' => 'diseno1',
                    'options' => [
                        'diseno1' => 'Diseño 1',
                        'diseno2' => 'Diseño 2',
                        'diseno3' => 'Diseño 3',
                        'diseno4' => 'Diseño 4',
                        'diseno5' => 'Diseño 5',
                        'diseno6' => 'Diseño 6',
                        'diseno7' => 'Diseño 7',
                        'diseno8' => 'Diseño 8',
                        'diseno9' => 'Diseño 9',
                        'diseno10' => 'Diseño 10',
                        'diseno11' => 'Diseño 11',
                        'diseno12' => 'Diseño 12',
                        'diseno13' => 'Diseño 13',
                        'diseno14' => 'Diseño 14',
                        'diseno15' => 'Diseño 15',
                        'diseno16' => 'Diseño 16',
                        'diseno17' => 'Diseño 17',
                        'diseno18' => 'Diseño 18'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items Sociales',
                    'description' => 'Crear cada item social que deseas mostrar.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        'name' => [
                            'type' => 'input.text',
                            'label' => 'Nombre',
                            'skip' => true
                        ],
                        'icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icono'
                        ],
                        'text' => [
                            'type' => 'input.text',
                            'label' => 'Texto'
                        ],
                        'link' => [
                            'type' => 'input.text',
                            'label' => 'Enlace'
                        ],
                        'coloricono' => [
                            'type' => 'input.colorpicker',
                            'label' => 'Color del Ícono',
                            'placeholder' => 'Color del Ícono'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
