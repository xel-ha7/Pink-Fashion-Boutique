<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/pinkfashion/templates/g5_hydrogen/custom/particles/wow-js.yaml',
    'modified' => 1612221725,
    'data' => [
        'name' => 'WOW.js',
        'description' => 'Configure WOW.js.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable WOW.js particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom adds the <a href="http://mynameismatthieu.com/WOW/" target="_blank">WOW.js</a> functionality to your website.<br />WOW.js is a library to easily reveal elements as they enter the viewport (OnScroll Animations). By default, WOW.js works with <a href="https://github.com/daneden/animate.css" target="_blank">Animate.css</a> to trigger animations.'
                ],
                'offset' => [
                    'type' => 'input.text',
                    'label' => 'Offset',
                    'description' => 'Set the distance in pixels, related to the browser bottom, to start the animation (do NOT type in \'px\', enter just the digits).',
                    'default' => '200'
                ],
                'mobile' => [
                    'type' => 'select.select',
                    'label' => 'Mobile',
                    'description' => 'Enable or disable the animations on mobile devices.',
                    'placeholder' => 'Select...',
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ]
                ]
            ]
        ]
    ]
];
