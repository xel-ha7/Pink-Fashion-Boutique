<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\pinkfashion/templates/g5_hydrogen/blueprints/styles/header.yaml',
    'modified' => 1611523371,
    'data' => [
        'name' => 'Header Colors',
        'description' => 'Header colors for the Hydrogen theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#2a816d'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
