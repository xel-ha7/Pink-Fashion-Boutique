<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/owl-testimonios.html.twig */
class __TwigTemplate_cc58f2a465b4e740ffd12bbf7ad0165d2c17e5bb221073079b9057df3c0be1e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owl-testimonios.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_particle($context, array $blocks = [])
    {
        // line 5
        echo "  
<div class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " g-owlcarousel-layout-testimonial ";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "false")) {
            echo "g-owlcarousel-nav-disabled";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["particle"] ?? null), "posicionbotonesnav", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "posicionbotonesnav", []), "html", null, true);
        }
        echo "\">

";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "tituloprincipal", [])) {
            // line 9
            echo "        <";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "etiquetatitulo", []), "html", null, true);
            echo " class=\"g-cualidades-titulo\">";
            echo $this->getAttribute(($context["particle"] ?? null), "tituloprincipal", []);
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "etiquetatitulo", []), "html", null, true);
            echo ">
";
        }
        // line 11
        echo "
    <div id=\"g-owlcarousel-";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel owl-theme\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <div class=\"item g-content\">
";
            // line 18
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi1")) {
                // line 19
                echo "            ";
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 20
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">                        
                        <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
            ";
                }
                // line 24
                echo "                
            <div class=\"g-owltesti-detalles\">
                ";
                // line 26
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 27
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 28
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 29
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 30
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 31
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 32
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 33
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo " | </div>";
                    }
                    // line 35
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 36
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 37
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 38
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 39
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 40
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 42
                    echo "</div>
                ";
                }
                // line 44
                echo "
                 ";
                // line 45
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 46
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 47
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 48
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 49
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 50
                    echo ">
                      ";
                    // line 51
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo " 
                    </div>
                ";
                }
                // line 54
                echo "            </div>            
        ";
            }
            // line 56
            echo "
";
            // line 60
            echo "
        ";
            // line 61
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi2")) {
                // line 62
                echo "            ";
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 63
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
            ";
                }
                // line 66
                echo "                
            <div class=\"g-owltesti-detalles\">
               
                 ";
                // line 69
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 70
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 71
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 72
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 73
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 74
                    echo ">
                     <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                     ";
                    // line 76
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    </div>
                ";
                }
                // line 79
                echo "
                 ";
                // line 80
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 81
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 82
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 83
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 84
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 85
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 86
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 87
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 89
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 90
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 91
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 92
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 93
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 94
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 96
                    echo "</div>
                ";
                }
                // line 98
                echo "
            </div>            
        ";
            }
            // line 101
            echo "
";
            // line 105
            echo "
        ";
            // line 106
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi3")) {
                // line 107
                echo "
            ";
                // line 108
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 109
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 110
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 111
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 112
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 113
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                ";
                    // line 115
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo " 
                </div>
            ";
                }
                // line 118
                echo "
            <div class=\"g-owltesti-detalles\">
                ";
                // line 120
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 121
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
                ";
                }
                // line 124
                echo " 

                 ";
                // line 126
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 127
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 128
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 129
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 130
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 131
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 132
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 133
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 135
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 136
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 137
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 138
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 139
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 140
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 142
                    echo "</div>
                ";
                }
                // line 144
                echo "            </div>
        ";
            }
            // line 146
            echo "
";
            // line 150
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi4")) {
                echo "              

             ";
                // line 152
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 153
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 154
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 155
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 156
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 157
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                ";
                    // line 159
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    </div>
            ";
                }
                // line 162
                echo "
            <div class=\"g-owltesti-detalles\">
                ";
                // line 164
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 165
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
                ";
                }
                // line 168
                echo "  

                ";
                // line 170
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 171
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 172
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 173
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 174
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 175
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 176
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 177
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 179
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 180
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 181
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 182
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 183
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 184
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 186
                    echo "</div>
                ";
                }
                // line 188
                echo "            </div>
          
        ";
            }
            // line 191
            echo "
";
            // line 195
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi5")) {
                echo "             
            
                ";
                // line 197
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 198
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 199
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 200
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 201
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 202
                    echo ">                         
                ";
                    // line 203
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    <div class=\"g-owltesti-flecha\"></div>
                    <div class=\"g-owltesti-flecha-inner\"></div>
                </div>
                ";
                }
                // line 208
                echo "

                <div class=\"g-owltesti-detalles\">
                    ";
                // line 211
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 212
                    echo "                    <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 213
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                    </div>
                    ";
                }
                // line 215
                echo " 

                    ";
                // line 217
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 218
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 219
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 220
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 221
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 222
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 223
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 224
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 226
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 227
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 228
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 229
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 230
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 231
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 233
                    echo "</div>
                ";
                }
                // line 235
                echo "
                </div>            
        ";
            }
            // line 238
            echo "
";
            // line 242
            echo "
        ";
            // line 243
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi6")) {
                echo "              

             ";
                // line 245
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 246
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 247
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 248
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 249
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 250
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                ";
                    // line 252
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                </div>
            ";
                }
                // line 255
                echo "
            ";
                // line 256
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 257
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 258
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 260
                echo "  

            ";
                // line 262
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 263
                    echo "            <div class=\"g-owltesti-metatestimonios\">";
                    // line 264
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 265
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 266
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 267
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 268
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 269
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 271
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 272
                        echo "                <div class=\"g-owltesti-puestotrabajo\"";
                        // line 273
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 274
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 275
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 276
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 278
                    echo "</div>
            ";
                }
                // line 279
                echo "          
        ";
            }
            // line 281
            echo "
";
            // line 285
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi7")) {
                echo " 

            ";
                // line 287
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 288
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 289
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 290
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 291
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 292
                    echo ">
                     <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                    ";
                    // line 294
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    </div>
                    <div class=\"g-owltesti-content-flecha\"><span class=\"g-owltesti-flecha\"></span></div> 
            ";
                }
                // line 298
                echo "
            ";
                // line 299
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 300
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 301
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 303
                echo "  

            ";
                // line 305
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 306
                    echo "               <div class=\"g-owltesti-metatestimonios\">";
                    // line 307
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 308
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 309
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 310
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 311
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 312
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 314
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 315
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 316
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 317
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 318
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 319
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 321
                    echo "</div>
            ";
                }
                // line 322
                echo "          
        ";
            }
            // line 324
            echo "
";
            // line 328
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi8")) {
                echo "              

            ";
                // line 330
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 331
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 332
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 333
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 334
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 335
                    echo ">
                     <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                    ";
                    // line 337
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                        <div class=\"g-owltesti-flecha\"></div><div class=\"g-owltesti-flecha-inner\"></div>  
                    </div>
            ";
                }
                // line 341
                echo "
            ";
                // line 342
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 343
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 344
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 346
                echo "  

             ";
                // line 348
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 349
                    echo "               <div class=\"g-owltesti-metatestimonios\">";
                    // line 350
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 351
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 352
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 353
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 354
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 355
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 357
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 358
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 359
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 360
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 361
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 362
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 364
                    echo "</div>
            ";
                }
                // line 365
                echo "          
        ";
            }
            // line 367
            echo "
";
            // line 371
            echo "
        ";
            // line 372
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi9")) {
                echo "    

            ";
                // line 374
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 375
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 376
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 379
                echo "
             ";
                // line 380
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 381
                    echo "               <div class=\"g-owltesti-metatestimonios\">";
                    // line 382
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 383
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 384
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 385
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 386
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 387
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 389
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 390
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 391
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 392
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 393
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 394
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 396
                    echo "</div>
            ";
                }
                // line 398
                echo "
            ";
                // line 399
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 400
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 401
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 402
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 403
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 404
                    echo ">                         
                    ";
                    // line 405
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    </div>
                ";
                }
                // line 407
                echo "          
        ";
            }
            // line 409
            echo "
";
            // line 413
            echo "
        ";
            // line 414
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi10")) {
                // line 415
                echo "
            ";
                // line 416
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 417
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 418
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 419
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 420
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 421
                    echo ">                                          
                ";
                    // line 422
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                <div class=\"g-owltesti-flecha\"></div><div class=\"g-owltesti-flecha-inner\"></div>
                </div>
            ";
                }
                // line 426
                echo "

            ";
                // line 428
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 429
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 430
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 432
                echo "  

            ";
                // line 434
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 435
                    echo "               <div class=\"g-owltesti-metatestimonios\">";
                    // line 436
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 437
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 438
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 439
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 440
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 441
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 443
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 444
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 445
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 446
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 447
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 448
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 450
                    echo "</div>
            ";
                }
                // line 451
                echo "          
        ";
            }
            // line 453
            echo "
";
            // line 457
            echo "        ";
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi11")) {
                echo "              
           
                ";
                // line 459
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 460
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 461
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 462
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 463
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 464
                    echo ">                           
                    ";
                    // line 465
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    <div class=\"g-owltesti-flecha\"></div><div class=\"g-owltesti-flecha-inner\"></div>
                    </div>
                ";
                }
                // line 469
                echo "

                 <div class=\"g-owltesti-detalles\">

                    ";
                // line 473
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 474
                    echo "                    <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 475
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                    </div>
                    ";
                }
                // line 477
                echo " 

                     ";
                // line 479
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 480
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 481
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 482
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 483
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 484
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 485
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 486
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 488
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 489
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 490
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 491
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 492
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 493
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 495
                    echo "</div>
                ";
                }
                // line 497
                echo "                </div>
        ";
            }
            // line 499
            echo "
";
            // line 503
            echo "
        ";
            // line 504
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi12")) {
                echo "              
            <div class=\"g-owltesti-detalles\">               
                ";
                // line 506
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 507
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 508
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 509
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 510
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 511
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 512
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 513
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 515
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 516
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 517
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 518
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 519
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 520
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 522
                    echo "</div>
                ";
                }
                // line 524
                echo "            </div> 

            ";
                // line 526
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 527
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 528
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 529
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 530
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 531
                    echo ">

                ";
                    // line 533
                    if ($this->getAttribute($context["item"], "imagenautor", [])) {
                        // line 534
                        echo "                <div class=\"g-owltesti-imagen\"";
                        if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                            echo "style=\"width:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                            echo "; height:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                        // line 535
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                        echo ");\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                        echo "\"></div>
                </div>
                ";
                    }
                    // line 537
                    echo " 
                                         
                ";
                    // line 539
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    <div class=\"g-owltesti-flecha\"></div>
                </div>
            ";
                }
                // line 542
                echo "                       
        ";
            }
            // line 544
            echo "
";
            // line 548
            echo "
        ";
            // line 549
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi13")) {
                // line 550
                echo "            ";
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 551
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 552
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                    ";
                    // line 553
                    if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                        // line 554
                        echo "                    <div class=\"g-owltesti-metatestimonios\">";
                        // line 555
                        if ($this->getAttribute($context["item"], "nombre", [])) {
                            // line 556
                            echo "<div class=\"g-owltesti-nombre\"";
                            // line 557
                            if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                                echo "style=\"";
                                // line 558
                                if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                    echo "font-size:";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                    echo ";";
                                }
                                // line 559
                                if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                    echo "color:";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                    echo ";";
                                }
                                echo "\"";
                            }
                            echo ">";
                            // line 560
                            echo $this->getAttribute($context["item"], "nombre", []);
                            echo "</div>";
                        }
                        // line 562
                        if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                            // line 563
                            echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                            // line 564
                            if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                                echo "style=\"";
                                // line 565
                                if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                    echo "font-size:";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                    echo ";";
                                }
                                // line 566
                                if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                    echo "color:";
                                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                    echo ";";
                                }
                                echo "\"";
                            }
                            echo ">";
                            // line 567
                            echo $this->getAttribute($context["item"], "puestotrabajo", []);
                            echo "</div>";
                        }
                        // line 569
                        echo "</div>
                    ";
                    }
                    // line 571
                    echo "                </div>
            ";
                }
                // line 572
                echo "    


            <div class=\"g-owltesti-detalles\"> 
                ";
                // line 576
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 577
                    echo "                    <div class=\"g-owltesti-contenido\"";
                    // line 578
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 579
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 580
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 581
                    echo ">                         
                    ";
                    // line 582
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    <div class=\"g-owltesti-flecha\"></div><div class=\"g-owltesti-flecha-inner\"></div>
                    </div>
                ";
                }
                // line 585
                echo " 
            </div>            
        ";
            }
            // line 588
            echo "
";
            // line 592
            echo "
        ";
            // line 593
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi14")) {
                echo "              
            <div class=\"g-owltesti-detalles\">
                ";
                // line 595
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 596
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"flex-basis:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 597
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
                ";
                }
                // line 599
                echo " 

                ";
                // line 601
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 602
                    echo "                <div class=\"g-owltesti-metatestimonios\">";
                    // line 603
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 604
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 605
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 606
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 607
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 608
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 610
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 611
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 612
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 613
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 614
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 615
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 617
                    echo "</div>
                ";
                }
                // line 619
                echo "            </div>

            ";
                // line 621
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 622
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 623
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 624
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 625
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 626
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                ";
                    // line 628
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "<i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>  
                    <div class=\"g-owltesti-flecha\"></div><div class=\"g-owltesti-flecha-inner\"></div>
                </div>
            ";
                }
                // line 632
                echo "                      
        ";
            }
            // line 634
            echo "
";
            // line 638
            echo "
        ";
            // line 639
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi15")) {
                echo "           
            ";
                // line 640
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 641
                    echo "            <div class=\"g-owltesti-contenido\"";
                    // line 642
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 643
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 644
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 645
                    echo ">
                ";
                    // line 646
                    if ($this->getAttribute($context["item"], "imagenautor", [])) {
                        // line 647
                        echo "                <div class=\"g-owltesti-imagen\"";
                        if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                            echo "style=\"width:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                            echo "; height:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                        // line 648
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                        echo ");\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                        echo "\"></div>
                </div>
                ";
                    }
                    // line 650
                    echo " 
                <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                ";
                    // line 652
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>
            </div>                    
            ";
                }
                // line 656
                echo "
            <div class=\"g-owltesti-detalles\">  
                ";
                // line 658
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 659
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 660
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 661
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 662
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 663
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 664
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 665
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 667
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 668
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 669
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 670
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 671
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 672
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 674
                    echo "</div>
                ";
                }
                // line 676
                echo "            </div>
        ";
            }
            // line 678
            echo "
";
            // line 682
            echo "
        ";
            // line 683
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi16")) {
                echo "             
                ";
                // line 684
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 685
                    echo "                <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 686
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
                </div>
                ";
                }
                // line 689
                echo "                 <div class=\"g-owltesti-detalles\">
                 ";
                // line 690
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 691
                    echo "                    <div class=\"g-owltesti-metatestimonios\">";
                    // line 692
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 693
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 694
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 695
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 696
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 697
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 699
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 700
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 701
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 702
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 703
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 704
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 706
                    echo "</div>
                </div>
                ";
                }
                // line 708
                echo "           
            
            ";
                // line 710
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 711
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 712
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 713
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 714
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 715
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>                            
                ";
                    // line 717
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                </div>
            ";
                }
                // line 719
                echo "          
        ";
            }
            // line 721
            echo "
";
            // line 725
            echo "
        ";
            // line 726
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi17")) {
                echo "  
        <div class=\"g-owltesti-contenedor\">
            ";
                // line 728
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 729
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 730
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 733
                echo "            ";
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 734
                    echo "               <div class=\"g-owltesti-metatestimonios\">";
                    // line 735
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 736
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 737
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 738
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 739
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 740
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 742
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 743
                        echo "                    <div class=\"g-owltesti-puestotrabajo\"";
                        // line 744
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 745
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 746
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 747
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 749
                    echo "</div>
            ";
                }
                // line 751
                echo "
            ";
                // line 752
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 753
                    echo "                <div class=\"g-owltesti-contenido\"";
                    // line 754
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 755
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 756
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 757
                    echo ">
                 <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <div>                            
                    ";
                    // line 760
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
                    </div>
                </div>
            ";
                }
                // line 764
                echo "        </div>         
        ";
            }
            // line 766
            echo "
";
            // line 770
            echo "
        ";
            // line 771
            if (($this->getAttribute(($context["particle"] ?? null), "disenotestimonio", []) == "diseno-testi18")) {
                echo "           
            ";
                // line 772
                if ($this->getAttribute($context["item"], "imagenautor", [])) {
                    // line 773
                    echo "            <div class=\"g-owltesti-imagen\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", [])) {
                        echo "style=\"width:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "; height:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "anchualtuimagen", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                <div class=\"g-owltesti-imagen-data\" style=\"background-image:url(";
                    // line 774
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "imagenautor", [])));
                    echo ");\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", []));
                    echo "\"></div>
            </div>
            ";
                }
                // line 777
                echo "
            ";
                // line 778
                if ($this->getAttribute($context["item"], "contenidotesti", [])) {
                    // line 779
                    echo "            <div class=\"g-owltesti-contenido\"";
                    // line 780
                    if (($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []) || $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []))) {
                        echo "style=\"";
                        // line 781
                        if ($this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", [])) {
                            echo "font-size:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        // line 782
                        if ($this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", [])) {
                            echo "color:";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextotestimonio", []), "html", null, true);
                            echo ";";
                        }
                        echo "\"";
                    }
                    // line 783
                    echo ">
           ";
                    // line 784
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($context["item"], "contenidotesti", []), $this->getAttribute(($context["particle"] ?? null), "maxcaracteres", []));
                    echo "
            </div>
            ";
                }
                // line 787
                echo "
            <div class=\"g-owltesti-detalles\">  

                ";
                // line 790
                if (($this->getAttribute($context["item"], "nombre", []) || $this->getAttribute($context["item"], "puestotrabajo", []))) {
                    // line 791
                    echo "                   <div class=\"g-owltesti-metatestimonios\">";
                    // line 792
                    if ($this->getAttribute($context["item"], "nombre", [])) {
                        // line 793
                        echo "<div class=\"g-owltesti-nombre\"";
                        // line 794
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []) || $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []))) {
                            echo "style=\"";
                            // line 795
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextonombre", []), "html", null, true);
                                echo ";";
                            }
                            // line 796
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextonombre", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextonombre", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">";
                        // line 797
                        echo $this->getAttribute($context["item"], "nombre", []);
                        echo "</div>";
                    }
                    // line 799
                    if ($this->getAttribute($context["item"], "puestotrabajo", [])) {
                        // line 800
                        echo "                        <div class=\"g-owltesti-puestotrabajo\"";
                        // line 801
                        if (($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []) || $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []))) {
                            echo "style=\"";
                            // line 802
                            if ($this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", [])) {
                                echo "font-size:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "tamanotextocargo", []), "html", null, true);
                                echo ";";
                            }
                            // line 803
                            if ($this->getAttribute(($context["particle"] ?? null), "colortextocargo", [])) {
                                echo "color:";
                                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortextocargo", []), "html", null, true);
                                echo ";";
                            }
                            echo "\"";
                        }
                        echo ">
                             - ";
                        // line 804
                        echo $this->getAttribute($context["item"], "puestotrabajo", []);
                        echo "</div>";
                    }
                    // line 806
                    echo "</div>
                ";
                }
                // line 808
                echo "            </div>          
        ";
            }
            // line 809
            echo "       

";
            // line 814
            echo "
        </div>        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "    </div>
</div>

";
    }

    // line 821
    public function block_javascript_footer($context, array $blocks = [])
    {
        echo "    
    <script type=\"text/javascript\">
    jQuery(window).load(function() {
        var owl";
        // line 824
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), ["-" => "_"]), "html", null, true);
        echo " = jQuery('#g-owlcarousel-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
        owl";
        // line 825
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), ["-" => "_"]), "html", null, true);
        echo ".owlCarousel({ 
            ";
        // line 826
        if ($this->getAttribute(($context["particle"] ?? null), "slideby", [])) {
            // line 827
            echo "            slideBy:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "slideby", []), "html", null, true);
            echo ",
            dotsEach:";
            // line 828
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "slideby", []), "html", null, true);
            echo ",
            ";
        }
        // line 830
        echo "            rtl: ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            ";
        // line 831
        if (($this->getAttribute(($context["particle"] ?? null), "animateOut", []) && ($this->getAttribute(($context["particle"] ?? null), "animateOut", []) != "default"))) {
            // line 832
            echo "            animateOut: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateOut", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateOut", []), "fadeOut")) : ("fadeOut")));
            echo "',
            ";
        }
        // line 834
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "animateIn", []) && ($this->getAttribute(($context["particle"] ?? null), "animateIn", []) != "default"))) {
            // line 835
            echo "            animateIn: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateIn", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateIn", []), "fadeIn")) : ("fadeIn")));
            echo "',
            ";
        }
        // line 837
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "prevText", []) && $this->getAttribute(($context["particle"] ?? null), "nextText", []))) {
            // line 838
            echo "            navText: ['";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "prevText", []), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "nextText", []), "html", null, true);
            echo "'],
            ";
        } else {
            // line 840
            echo "            navText: ['<i class=\"fa fa-chevron-left\" style=\"color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colorbotonesnav", []), "html", null, true);
            echo "\"></i>','<i class=\"fa fa-chevron-right\" style=\"color:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colorbotonesnav", []), "html", null, true);
            echo "\"></i>'],
            ";
        }
        // line 842
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "loop", [])) {
            // line 843
            echo "            loop: true,
            ";
        } else {
            // line 845
            echo "            loop: false,
            ";
        }
        // line 847
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "autoplay", [])) {
            // line 848
            echo "            autoplay: true,
            autoplayTimeout:";
            // line 849
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", []), "5000")) : ("5000")), "html", null, true);
            echo ",
            ";
            // line 850
            if ($this->getAttribute(($context["particle"] ?? null), "pauseOnHover", [])) {
                // line 851
                echo "            autoplayHoverPause: true,
            ";
            } else {
                // line 853
                echo "            autoplayHoverPause: false,
            ";
            }
            // line 855
            echo "            ";
        } else {
            // line 856
            echo "            autoplay: false,
            ";
        }
        // line 858
        echo "            responsive:{
                ";
        // line 859
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint1minimo", []), "html", null, true);
        echo ":{
                items:";
        // line 860
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint1numslides", []), "html", null, true);
        echo ",
                nav:";
        // line 861
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint1dots", []), "html", null, true);
        echo ",
                dots:";
        // line 862
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint1nav", []), "html", null, true);
        echo ",
                },
                ";
        // line 864
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint2minimo", []), "html", null, true);
        echo ":{
                items:";
        // line 865
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint2numslides", []), "html", null, true);
        echo ",
                nav:";
        // line 866
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint2dots", []), "html", null, true);
        echo ",
                dots:";
        // line 867
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint2nav", []), "html", null, true);
        echo ",
                },
                ";
        // line 869
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint3minimo", []), "html", null, true);
        echo ":{
                items:";
        // line 870
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint3numslides", []), "html", null, true);
        echo ",
                nav:";
        // line 871
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint3dots", []), "html", null, true);
        echo ",
                dots:";
        // line 872
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "breakpoint3nav", []), "html", null, true);
        echo ",                
                }
            }            
        })        
    });
    </script>  
";
    }

    public function getTemplateName()
    {
        return "@particles/owl-testimonios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2673 => 872,  2669 => 871,  2665 => 870,  2661 => 869,  2656 => 867,  2652 => 866,  2648 => 865,  2644 => 864,  2639 => 862,  2635 => 861,  2631 => 860,  2627 => 859,  2624 => 858,  2620 => 856,  2617 => 855,  2613 => 853,  2609 => 851,  2607 => 850,  2603 => 849,  2600 => 848,  2597 => 847,  2593 => 845,  2589 => 843,  2586 => 842,  2578 => 840,  2570 => 838,  2567 => 837,  2561 => 835,  2558 => 834,  2552 => 832,  2550 => 831,  2541 => 830,  2536 => 828,  2531 => 827,  2529 => 826,  2525 => 825,  2519 => 824,  2512 => 821,  2505 => 817,  2497 => 814,  2493 => 809,  2489 => 808,  2485 => 806,  2481 => 804,  2471 => 803,  2465 => 802,  2462 => 801,  2460 => 800,  2458 => 799,  2454 => 797,  2445 => 796,  2439 => 795,  2436 => 794,  2434 => 793,  2432 => 792,  2430 => 791,  2428 => 790,  2423 => 787,  2417 => 784,  2414 => 783,  2406 => 782,  2400 => 781,  2397 => 780,  2395 => 779,  2393 => 778,  2390 => 777,  2382 => 774,  2371 => 773,  2369 => 772,  2365 => 771,  2362 => 770,  2359 => 766,  2355 => 764,  2348 => 760,  2343 => 757,  2335 => 756,  2329 => 755,  2326 => 754,  2324 => 753,  2322 => 752,  2319 => 751,  2315 => 749,  2311 => 747,  2302 => 746,  2296 => 745,  2293 => 744,  2291 => 743,  2289 => 742,  2285 => 740,  2276 => 739,  2270 => 738,  2267 => 737,  2265 => 736,  2263 => 735,  2261 => 734,  2258 => 733,  2250 => 730,  2239 => 729,  2237 => 728,  2232 => 726,  2229 => 725,  2226 => 721,  2222 => 719,  2216 => 717,  2212 => 715,  2204 => 714,  2198 => 713,  2195 => 712,  2193 => 711,  2191 => 710,  2187 => 708,  2182 => 706,  2178 => 704,  2169 => 703,  2163 => 702,  2160 => 701,  2158 => 700,  2156 => 699,  2152 => 697,  2143 => 696,  2137 => 695,  2134 => 694,  2132 => 693,  2130 => 692,  2128 => 691,  2126 => 690,  2123 => 689,  2115 => 686,  2106 => 685,  2104 => 684,  2100 => 683,  2097 => 682,  2094 => 678,  2090 => 676,  2086 => 674,  2082 => 672,  2073 => 671,  2067 => 670,  2064 => 669,  2062 => 668,  2060 => 667,  2056 => 665,  2047 => 664,  2041 => 663,  2038 => 662,  2036 => 661,  2034 => 660,  2032 => 659,  2030 => 658,  2026 => 656,  2019 => 652,  2015 => 650,  2007 => 648,  1996 => 647,  1994 => 646,  1991 => 645,  1983 => 644,  1977 => 643,  1974 => 642,  1972 => 641,  1970 => 640,  1966 => 639,  1963 => 638,  1960 => 634,  1956 => 632,  1949 => 628,  1945 => 626,  1937 => 625,  1931 => 624,  1928 => 623,  1926 => 622,  1924 => 621,  1920 => 619,  1916 => 617,  1912 => 615,  1903 => 614,  1897 => 613,  1894 => 612,  1892 => 611,  1890 => 610,  1886 => 608,  1877 => 607,  1871 => 606,  1868 => 605,  1866 => 604,  1864 => 603,  1862 => 602,  1860 => 601,  1856 => 599,  1848 => 597,  1837 => 596,  1835 => 595,  1830 => 593,  1827 => 592,  1824 => 588,  1819 => 585,  1812 => 582,  1809 => 581,  1801 => 580,  1795 => 579,  1792 => 578,  1790 => 577,  1788 => 576,  1782 => 572,  1778 => 571,  1774 => 569,  1770 => 567,  1761 => 566,  1755 => 565,  1752 => 564,  1750 => 563,  1748 => 562,  1744 => 560,  1735 => 559,  1729 => 558,  1726 => 557,  1724 => 556,  1722 => 555,  1720 => 554,  1718 => 553,  1712 => 552,  1701 => 551,  1698 => 550,  1696 => 549,  1693 => 548,  1690 => 544,  1686 => 542,  1679 => 539,  1675 => 537,  1667 => 535,  1656 => 534,  1654 => 533,  1650 => 531,  1642 => 530,  1636 => 529,  1633 => 528,  1631 => 527,  1629 => 526,  1625 => 524,  1621 => 522,  1617 => 520,  1608 => 519,  1602 => 518,  1599 => 517,  1597 => 516,  1595 => 515,  1591 => 513,  1582 => 512,  1576 => 511,  1573 => 510,  1571 => 509,  1569 => 508,  1567 => 507,  1565 => 506,  1560 => 504,  1557 => 503,  1554 => 499,  1550 => 497,  1546 => 495,  1542 => 493,  1533 => 492,  1527 => 491,  1524 => 490,  1522 => 489,  1520 => 488,  1516 => 486,  1507 => 485,  1501 => 484,  1498 => 483,  1496 => 482,  1494 => 481,  1492 => 480,  1490 => 479,  1486 => 477,  1478 => 475,  1467 => 474,  1465 => 473,  1459 => 469,  1452 => 465,  1449 => 464,  1441 => 463,  1435 => 462,  1432 => 461,  1430 => 460,  1428 => 459,  1422 => 457,  1419 => 453,  1415 => 451,  1411 => 450,  1407 => 448,  1398 => 447,  1392 => 446,  1389 => 445,  1387 => 444,  1385 => 443,  1381 => 441,  1372 => 440,  1366 => 439,  1363 => 438,  1361 => 437,  1359 => 436,  1357 => 435,  1355 => 434,  1351 => 432,  1343 => 430,  1332 => 429,  1330 => 428,  1326 => 426,  1319 => 422,  1316 => 421,  1308 => 420,  1302 => 419,  1299 => 418,  1297 => 417,  1295 => 416,  1292 => 415,  1290 => 414,  1287 => 413,  1284 => 409,  1280 => 407,  1274 => 405,  1271 => 404,  1263 => 403,  1257 => 402,  1254 => 401,  1252 => 400,  1250 => 399,  1247 => 398,  1243 => 396,  1239 => 394,  1230 => 393,  1224 => 392,  1221 => 391,  1219 => 390,  1217 => 389,  1213 => 387,  1204 => 386,  1198 => 385,  1195 => 384,  1193 => 383,  1191 => 382,  1189 => 381,  1187 => 380,  1184 => 379,  1176 => 376,  1165 => 375,  1163 => 374,  1158 => 372,  1155 => 371,  1152 => 367,  1148 => 365,  1144 => 364,  1140 => 362,  1131 => 361,  1125 => 360,  1122 => 359,  1120 => 358,  1118 => 357,  1114 => 355,  1105 => 354,  1099 => 353,  1096 => 352,  1094 => 351,  1092 => 350,  1090 => 349,  1088 => 348,  1084 => 346,  1076 => 344,  1065 => 343,  1063 => 342,  1060 => 341,  1053 => 337,  1049 => 335,  1041 => 334,  1035 => 333,  1032 => 332,  1030 => 331,  1028 => 330,  1022 => 328,  1019 => 324,  1015 => 322,  1011 => 321,  1007 => 319,  998 => 318,  992 => 317,  989 => 316,  987 => 315,  985 => 314,  981 => 312,  972 => 311,  966 => 310,  963 => 309,  961 => 308,  959 => 307,  957 => 306,  955 => 305,  951 => 303,  943 => 301,  932 => 300,  930 => 299,  927 => 298,  920 => 294,  916 => 292,  908 => 291,  902 => 290,  899 => 289,  897 => 288,  895 => 287,  889 => 285,  886 => 281,  882 => 279,  878 => 278,  874 => 276,  865 => 275,  859 => 274,  856 => 273,  854 => 272,  852 => 271,  848 => 269,  839 => 268,  833 => 267,  830 => 266,  828 => 265,  826 => 264,  824 => 263,  822 => 262,  818 => 260,  810 => 258,  799 => 257,  797 => 256,  794 => 255,  788 => 252,  784 => 250,  776 => 249,  770 => 248,  767 => 247,  765 => 246,  763 => 245,  758 => 243,  755 => 242,  752 => 238,  747 => 235,  743 => 233,  739 => 231,  730 => 230,  724 => 229,  721 => 228,  719 => 227,  717 => 226,  713 => 224,  704 => 223,  698 => 222,  695 => 221,  693 => 220,  691 => 219,  689 => 218,  687 => 217,  683 => 215,  675 => 213,  664 => 212,  662 => 211,  657 => 208,  649 => 203,  646 => 202,  638 => 201,  632 => 200,  629 => 199,  627 => 198,  625 => 197,  619 => 195,  616 => 191,  611 => 188,  607 => 186,  603 => 184,  594 => 183,  588 => 182,  585 => 181,  583 => 180,  581 => 179,  577 => 177,  568 => 176,  562 => 175,  559 => 174,  557 => 173,  555 => 172,  553 => 171,  551 => 170,  547 => 168,  539 => 166,  528 => 165,  526 => 164,  522 => 162,  516 => 159,  512 => 157,  504 => 156,  498 => 155,  495 => 154,  493 => 153,  491 => 152,  485 => 150,  482 => 146,  478 => 144,  474 => 142,  470 => 140,  461 => 139,  455 => 138,  452 => 137,  450 => 136,  448 => 135,  444 => 133,  435 => 132,  429 => 131,  426 => 130,  424 => 129,  422 => 128,  420 => 127,  418 => 126,  414 => 124,  406 => 122,  395 => 121,  393 => 120,  389 => 118,  383 => 115,  379 => 113,  371 => 112,  365 => 111,  362 => 110,  360 => 109,  358 => 108,  355 => 107,  353 => 106,  350 => 105,  347 => 101,  342 => 98,  338 => 96,  334 => 94,  325 => 93,  319 => 92,  316 => 91,  314 => 90,  312 => 89,  308 => 87,  299 => 86,  293 => 85,  290 => 84,  288 => 83,  286 => 82,  284 => 81,  282 => 80,  279 => 79,  273 => 76,  269 => 74,  261 => 73,  255 => 72,  252 => 71,  250 => 70,  248 => 69,  243 => 66,  235 => 64,  224 => 63,  221 => 62,  219 => 61,  216 => 60,  213 => 56,  209 => 54,  203 => 51,  200 => 50,  192 => 49,  186 => 48,  183 => 47,  181 => 46,  179 => 45,  176 => 44,  172 => 42,  168 => 40,  159 => 39,  153 => 38,  150 => 37,  148 => 36,  146 => 35,  142 => 33,  133 => 32,  127 => 31,  124 => 30,  122 => 29,  120 => 28,  118 => 27,  116 => 26,  112 => 24,  104 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 14,  80 => 13,  76 => 12,  73 => 11,  63 => 9,  61 => 8,  46 => 6,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/owl-testimonios.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\templates\\g5_hydrogen\\custom\\particles\\owl-testimonios.html.twig");
    }
}
