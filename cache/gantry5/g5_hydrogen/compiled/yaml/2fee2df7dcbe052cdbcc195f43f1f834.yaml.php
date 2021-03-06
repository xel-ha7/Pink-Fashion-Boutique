<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\pinkfashion/templates/g5_hydrogen/custom/particles/atomo-OwlCarousel.yaml',
    'modified' => 1612300077,
    'data' => [
        'name' => 'OwlCarousel 2',
        'description' => 'Plugin Jquery OwlCarousel para Gantry5.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Habilitar Globalmente Owl Carousel.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Este Átomo carga <a href="http://owlcarousel2.github.io/OwlCarousel2/" target="_blank"> el Plugin para jQuery Owl Carousel v2.2</a>. Desarrollo por <a href="http://www.aulaideal.com/" target="_blank">Aulaideal.com</a>.'
                ],
                'jslocation' => [
                    'type' => 'select.select',
                    'label' => 'JS Location',
                    'description' => 'Selecciona donde Owl Carousel será cargado. La ubicación recomendada es \'Footer\' (Antes del cierre de la etiqueta body).',
                    'placeholder' => 'Seleccionar...',
                    'default' => 'footer',
                    'options' => [
                        'footer' => 'Footer',
                        'head' => 'Head'
                    ]
                ]
            ]
        ]
    ]
];
