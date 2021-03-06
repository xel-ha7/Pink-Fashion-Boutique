<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\pinkfashion/templates/g5_hydrogen/custom/particles/owl-testimonios.yaml',
    'modified' => 1612310888,
    'data' => [
        'name' => 'Owl Testimonios',
        'description' => 'Muestra un Slide de testimonios basado usando el Owl Carousel.',
        'type' => 'particle',
        'icon' => 'fa-sliders',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Habilitar',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-warning',
                    'content' => 'Esta partícula requiere del Átomo <a href="https://github.com/aulaideal/Atomo-Owlcarousel" target="_blank"><strong>"Owl Carousel"</strong></a> y opcionalmente del Átomo <a href="https://github.com/aulaideal/Atomo-Animate.css-Wow.js" target="_blank"><strong>"Animate.css-Wow.js"</strong></a> (Animaciones con CSS3).'
                ],
                'separador01' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes Generales</h4>'
                ],
                'tituloprincipal' => [
                    'type' => 'input.text',
                    'label' => 'Título General',
                    'description' => 'Escribe el título general de la partícula',
                    'placeholder' => 'Ingrese el título',
                    'default' => 'Título General'
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
                'disenotestimonio' => [
                    'type' => 'select.select',
                    'label' => 'Diseño',
                    'description' => 'Seleccione el diseño de los testimonios.',
                    'placeholder' => 'Seleccionar...',
                    'default' => 'diseno-testi1',
                    'options' => [
                        'diseno-testi1' => 'Diseño 1',
                        'diseno-testi2' => 'Diseño 2',
                        'diseno-testi3' => 'Diseño 3',
                        'diseno-testi4' => 'Diseño 4',
                        'diseno-testi5' => 'Diseño 5',
                        'diseno-testi6' => 'Diseño 6',
                        'diseno-testi7' => 'Diseño 7',
                        'diseno-testi8' => 'Diseño 8',
                        'diseno-testi9' => 'Diseño 9',
                        'diseno-testi10' => 'Diseño 10',
                        'diseno-testi11' => 'Diseño 11',
                        'diseno-testi12' => 'Diseño 12',
                        'diseno-testi13' => 'Diseño 13',
                        'diseno-testi14' => 'Diseño 14',
                        'diseno-testi15' => 'Diseño 15',
                        'diseno-testi16' => 'Diseño 16',
                        'diseno-testi17' => 'Diseño 17',
                        'diseno-testi18' => 'Diseño 18'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items de Testimonios',
                    'description' => 'Crea cada testimonio que deseas mostrar.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        'nombre' => [
                            'type' => 'input.text',
                            'label' => 'Nombre',
                            'description' => 'Ingrese el nombre del autor del testimonio.'
                        ],
                        'imagenautor' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Imagen del autor',
                            'description' => 'Selecciona la imagen del autor.'
                        ],
                        'puestotrabajo' => [
                            'type' => 'input.text',
                            'label' => 'Cargo',
                            'description' => 'Ingrese el cargo que ocupa el autor del testimonio.'
                        ],
                        'contenidotesti' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Contenido',
                            'description' => 'Ingrese el texto del textimónio.',
                            'placeholder' => 'Ingrese su testimonio.'
                        ]
                    ]
                ],
                'separador02' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Número de testimonios a mostrar (Responsive)'
                ],
                'separador03' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<strong> Breakpoint 1</strong>'
                ],
                'breakpoint1minimo' => [
                    'type' => 'input.text',
                    'label' => 'Anchura mínima',
                    'description' => 'Defina la anchura minima de pantalla.',
                    'placeholder' => 0,
                    'default' => 0
                ],
                'breakpoint1numslides' => [
                    'type' => 'input.text',
                    'label' => 'Números de Items',
                    'description' => 'Defina la cantidad de items a mostrar.',
                    'placeholder' => 1,
                    'default' => 1,
                    'min' => 1
                ],
                'breakpoint1dots' => [
                    'type' => 'enable.enable',
                    'label' => 'Circulos de navegación',
                    'description' => 'Habilitar o deshabilitar los circulos de navegación.',
                    'default' => true
                ],
                'breakpoint1nav' => [
                    'type' => 'enable.enable',
                    'label' => 'Botones Ant/Sig',
                    'description' => 'Habilitar o Deshabilitar los botones de Anterior / Siguiente.',
                    'default' => true
                ],
                'separador04' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<strong> Breakpoint 2</strong>'
                ],
                'breakpoint2minimo' => [
                    'type' => 'input.text',
                    'label' => 'Anchura mínima',
                    'description' => 'Defina la anchura minima de pantalla.',
                    'placeholder' => 480,
                    'default' => 480
                ],
                'breakpoint2numslides' => [
                    'type' => 'input.text',
                    'label' => 'Números de Items',
                    'description' => 'Defina la cantidad de items a mostrar.',
                    'placeholder' => 2,
                    'default' => 2,
                    'min' => 1
                ],
                'breakpoint2dots' => [
                    'type' => 'enable.enable',
                    'label' => 'Circulos de navegación',
                    'description' => 'Habilitar o deshabilitar los circulos de navegación.',
                    'default' => true
                ],
                'breakpoint2nav' => [
                    'type' => 'enable.enable',
                    'label' => 'Botones Ant/Sig',
                    'description' => 'Habilitar o Deshabilitar los botones de Anterior / Siguiente.',
                    'default' => true
                ],
                'separador05' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<strong> Breakpoint 3</strong>'
                ],
                'breakpoint3minimo' => [
                    'type' => 'input.text',
                    'label' => 'Anchura mínima',
                    'description' => 'Defina la anchura minima de pantalla.',
                    'placeholder' => 768,
                    'default' => 768
                ],
                'breakpoint3numslides' => [
                    'type' => 'input.text',
                    'label' => 'Números de Items',
                    'description' => 'Defina la cantidad de items a mostrar.',
                    'placeholder' => 3,
                    'default' => 3,
                    'min' => 1
                ],
                'breakpoint3dots' => [
                    'type' => 'enable.enable',
                    'label' => 'Circulos de navegación',
                    'description' => 'Habilitar o deshabilitar los circulos de navegación.',
                    'default' => true
                ],
                'breakpoint3nav' => [
                    'type' => 'enable.enable',
                    'label' => 'Botones Ant/Sig',
                    'description' => 'Habilitar o Deshabilitar los botones de Anterior / Siguiente.',
                    'default' => true
                ],
                'separador06' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes de la imagen</h4>'
                ],
                'anchualtuimagen' => [
                    'type' => 'input.text',
                    'label' => 'Anchura/Altura',
                    'description' => 'Defina el la anchura y altura del la imagen',
                    'placeholder' => '4rem'
                ],
                'separador07' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes del Nombre</h4>'
                ],
                'tamanotextonombre' => [
                    'type' => 'input.text',
                    'label' => 'Tamaño del texto',
                    'description' => 'Defina el tamaño del nombre. Ejemplo: 1.1rem',
                    'placeholder' => '1.1rem'
                ],
                'colortextonombre' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color texto'
                ],
                'separador08' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes del Cargo</h4>'
                ],
                'tamanotextocargo' => [
                    'type' => 'input.text',
                    'label' => 'Tamaño texto',
                    'description' => 'Ajuste el tamaño del texto correspondiente al cargo de la persona que realiza el testimonio. Ejemplo: 1.1rem',
                    'placeholder' => '1.1rem'
                ],
                'colortextocargo' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color texto'
                ],
                'separador09' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes del testimonio</h4>'
                ],
                'tamanotextotestimonio' => [
                    'type' => 'input.text',
                    'label' => 'Tamaño texto',
                    'description' => 'Ajuste el tamaño del texto correspondiente al contenido del  testimonio. Ejemplo: 1.2rem ',
                    'placeholder' => '1.2rem'
                ],
                'colortextotestimonio' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color texto'
                ],
                'maxcaracteres' => [
                    'type' => 'input.text',
                    'label' => 'Max. Caracteres',
                    'description' => 'Defina el número máximo de Caracteres por comentario.'
                ],
                'separador10' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes avanzados del Slider</h4>'
                ],
                'loop' => [
                    'type' => 'enable.enable',
                    'label' => 'Bucle infinito',
                    'description' => 'Habilitar o deshabilitar  el bucle infinito.',
                    'default' => true
                ],
                'autoplay' => [
                    'type' => 'enable.enable',
                    'label' => 'Autoplay',
                    'description' => 'Habilitar o deshabilitar el Autoplay.',
                    'default' => true
                ],
                'autoplaySpeed' => [
                    'type' => 'input.text',
                    'label' => 'Velocidad del Autoplay',
                    'description' => 'Dedine la velocidad del Autoplay en milisegundos.',
                    'placeholder' => 5000
                ],
                'pauseOnHover' => [
                    'type' => 'enable.enable',
                    'label' => 'Pausar "On Hover"',
                    'description' => 'Pausar la animación cuando el curso esta sobre un testimonio.',
                    'default' => true
                ],
                'prevText' => [
                    'type' => 'input.text',
                    'label' => 'Texto "Anterior"',
                    'description' => 'Define el texto "Anterior". Funciona sólo si el campo "Ant/Sig" esta habilitado.',
                    'placeholder' => NULL
                ],
                'nextText' => [
                    'type' => 'input.text',
                    'label' => 'Texto "Siguiente"',
                    'description' => 'Define el texto "Anterior". Funciona sólo si el campo "Ant/Sig" esta habilitado.',
                    'placeholder' => NULL
                ],
                'posicionbotonesnav' => [
                    'type' => 'select.select',
                    'label' => 'Posicion navegación',
                    'description' => 'Elije la ubicación de los botones de navegación.',
                    'placeholder' => 'Seleccionar...',
                    'default' => 'posicionbotonesnav_abajo',
                    'options' => [
                        'posicionbotonesnav_abajoizquierda' => 'Abajo + Izquierda',
                        'posicionbotonesnav_abajo' => 'Abajo + Centro',
                        'posicionbotonesnav_abajoderecha' => 'Abajo + Derecha',
                        'posicionbotonesnav_centrado' => 'Centrado',
                        'posicionbotonesnav_arribaizquierda' => 'Arriba + Izquierda',
                        'posicionbotonesnav_arriba' => 'Arriba + Centro',
                        'posicionbotonesnav_arribaderecha' => 'Arriba + Derecha'
                    ]
                ],
                'colorbotonesnav' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color botones',
                    'default' => NULL
                ],
                'slideby' => [
                    'type' => 'input.text',
                    'label' => 'Items por click',
                    'description' => 'Indique la cantidad de Items que se desplazán por click.',
                    'placeholder' => 1
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'Clase CSS',
                    'description' => 'Clase CSS para la partícula.'
                ],
                'separador11' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<h4>Ajustes  de animaciones (Animate.css)</h4> Válido sólo cuando se muestra 1 slide a la vez'
                ],
                'animateIn' => [
                    'type' => 'select.select',
                    'label' => 'In Animation',
                    'description' => 'Customize the In Animation from animate css class.',
                    'default' => 'fadeIn',
                    'options' => [
                        'default' => 'default',
                        'bounce' => 'bounce',
                        'pulse' => 'pulse',
                        'swing' => 'swing',
                        'tada' => 'tada',
                        'wobble' => 'wobble',
                        'jello' => 'jello',
                        'bounceIn' => 'bounceIn',
                        'bounceInDown' => 'bounceInDown',
                        'bounceInLeft' => 'bounceInLeft',
                        'bounceInRight' => 'bounceInRight',
                        'bounceInUp' => 'bounceInUp',
                        'fadeIn' => 'fadeIn',
                        'fadeInDown' => 'fadeInDown',
                        'fadeInLeft' => 'fadeInLeft',
                        'fadeInRight' => 'fadeInRight',
                        'fadeInUp' => 'fadeInUp',
                        'flipInX' => 'flipInX',
                        'flipInY' => 'flipInY',
                        'lightSpeedIn' => 'lightSpeedIn',
                        'rotateIn' => 'rotateIn',
                        'rotateInDownLeft' => 'rotateInDownLeft',
                        'rotateInDownRight' => 'rotateInDownRight',
                        'rotateInUpLeft' => 'rotateInUpLeft',
                        'rotateInUpRight' => 'rotateInUpRight',
                        'slideInUp' => 'slideInUp',
                        'slideInDown' => 'slideInDown',
                        'slideInLeft' => 'slideInLeft',
                        'slideInRight' => 'slideInRight',
                        'zoomIn' => 'zoomIn',
                        'zoomInDown' => 'zoomInDown',
                        'zoomInLeft' => 'zoomInLeft',
                        'zoomInRight' => 'zoomInRight',
                        'zoomInUp' => 'zoomInUp',
                        'rollIn' => 'rollIn'
                    ]
                ],
                'animateOut' => [
                    'type' => 'select.select',
                    'label' => 'Out Animation',
                    'description' => 'Customize the Out Animation from animate css class.',
                    'default' => 'fadeOut',
                    'options' => [
                        'default' => 'default',
                        'bounceOut' => 'bounceOut',
                        'bounceOutDown' => 'bounceOutDown',
                        'bounceOutLeft' => 'bounceOutLeft',
                        'bounceOutRight' => 'bounceOutRight',
                        'bounceOutUp' => 'bounceOutUp',
                        'fadeOut' => 'fadeOut',
                        'fadeOutDown' => 'fadeOutDown',
                        'fadeOutDownBig' => 'fadeOutDownBig',
                        'fadeOutLeft' => 'fadeOutLeft',
                        'fadeOutLeftBig' => 'fadeOutLeftBig',
                        'fadeOutRight' => 'fadeOutRight',
                        'fadeOutRightBig' => 'fadeOutRightBig',
                        'fadeOutUp' => 'fadeOutUp',
                        'fadeOutUpBig' => 'fadeOutUpBig',
                        'flipOutX' => 'flipOutX',
                        'flipOutY' => 'flipOutY',
                        'lightSpeedIn' => 'lightSpeedIn',
                        'lightSpeedOut' => 'lightSpeedOut',
                        'rotateOut' => 'rotateOut',
                        'rotateOutDownLeft' => 'rotateOutDownLeft',
                        'rotateOutDownRight' => 'rotateOutDownRight',
                        'rotateOutUpLeft' => 'rotateOutUpLeft',
                        'rotateOutUpRight' => 'rotateOutUpRight',
                        'slideOutUp' => 'slideOutUp',
                        'slideOutDown' => 'slideOutDown',
                        'slideOutLeft' => 'slideOutLeft',
                        'slideOutRight' => 'slideOutRight',
                        'zoomOut' => 'zoomOut',
                        'zoomOutDown' => 'zoomOutDown',
                        'zoomOutLeft' => 'zoomOutLeft',
                        'zoomOutRight' => 'zoomOutRight',
                        'zoomOutUp' => 'zoomOutUp',
                        'rollOut' => 'rollOut'
                    ]
                ]
            ]
        ]
    ]
];
