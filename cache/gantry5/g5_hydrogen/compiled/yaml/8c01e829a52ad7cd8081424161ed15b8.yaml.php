<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/pinkfashion/templates/g5_hydrogen/custom/particles/atomo-Ir-arriba.yaml',
    'modified' => 1612228561,
    'data' => [
        'name' => 'Ir arriba',
        'description' => 'Wow.js muestra las animaciones basadas en Animate.css a medida que se hace scroll sobre la página. Por su parte Animate.css es una colección de animaciones basadas en CSS3.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Habilitar Globalmente Animate.css.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Este Átomo te permite mostrar un botón en la parte inferior de tu página que te dirijirá a la parte superior usando un deslizamiento suave.'
                ],
                'alineacion' => [
                    'type' => 'input.radios',
                    'label' => 'Alineación',
                    'description' => 'Alineación horizontal del botón',
                    'default' => 'izquierda',
                    'options' => [
                        'g-arriba-izquierda' => 'Izquierda',
                        'g-arriba-derecha' => 'Derecha'
                    ]
                ],
                'offset' => [
                    'type' => 'input.text',
                    'label' => 'Offset',
                    'description' => 'Define la distancia mínima necesaria que el usuario debe hacer Scroll para mostrar el botón.(NO escribir\'px\', ingrese sólo números).',
                    'default' => '200'
                ],
                'efecto' => [
                    'type' => 'select.select',
                    'label' => 'Efecto',
                    'description' => 'Efecto del botón.',
                    'placeholder' => 'Seleccionar...',
                    'default' => 'estilo1',
                    'options' => [
                        'estilo1' => 'Estilo 1',
                        'estilo2' => 'Estilo 2',
                        'estilo3' => 'Estilo 3',
                        'estilo4' => 'Estilo 4'
                    ]
                ],
                'buttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'Ícono del botón',
                    'description' => 'Selecciona el ícono para el botón.',
                    'default' => 'fa fa-angle-up'
                ],
                'colorfondo' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color de fondo',
                    'default' => 'rgba(0, 0, 0, 0.4)'
                ],
                'coloricono' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color de Ícono',
                    'default' => '#ffffff'
                ],
                'miborderradius' => [
                    'type' => 'input.text',
                    'label' => 'Borde redondeado',
                    'description' => 'Puede usar px, rem  o %(50% para obtener un circulo perfecto).',
                    'placeholder' => '0'
                ],
                'grosorborde' => [
                    'type' => 'input.text',
                    'label' => 'Anchura del borde',
                    'description' => 'Define una anchura para el borde.',
                    'placeholder' => '0'
                ],
                'colorborde' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color del borde'
                ],
                'espaciado' => [
                    'type' => 'input.text',
                    'label' => 'Espaciado interior',
                    'description' => 'Define el espaciado interior del botón.',
                    'placeholder' => '0'
                ],
                'velocidadscroll' => [
                    'type' => 'input.text',
                    'label' => 'Velocidad del Scroll',
                    'description' => 'Defina el tiempo en milisegundos que se demorará en desplazarse hacia arriba de la página.',
                    'default' => '500'
                ]
            ]
        ]
    ]
];
