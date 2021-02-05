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

/* @particles/social-pro.html.twig */
class __TwigTemplate_59a40f7186c45cf904cba1565e2de85e474c3c73b80d7545aaca66422e027d8f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/social-pro.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "tituloprincipal", [])) {
            // line 5
            echo "        <";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "etiquetatitulo", []), "html", null, true);
            echo " class=\"g-cualidades-titulo\">";
            echo $this->getAttribute(($context["particle"] ?? null), "tituloprincipal", []);
            echo "</";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "etiquetatitulo", []), "html", null, true);
            echo ">
    ";
        }
        // line 7
        echo "
    <div class=\"g-socialpro ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        if ($this->getAttribute(($context["particle"] ?? null), "diseno", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "diseno", []));
        }
        if ($this->getAttribute(($context["particle"] ?? null), "textodebajo", [])) {
            echo " g-social-pro-vertical";
        }
        if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
            echo " g-socialpro-ambos";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "orientacionitems", []));
        echo "\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
            echo "\"";
            // line 11
            if ($this->getAttribute(($context["particle"] ?? null), "espacioiconos", [])) {
                echo "style=\"margin-right:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "espacioiconos", []), "html", null, true);
                echo ";\"";
            }
            echo ">";
            // line 14
            if ((((($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno1") || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno2")) || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno3")) || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno8"))) {
                // line 16
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 17
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 18
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t</i>";
                }
                // line 22
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 23
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 29
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno4")) {
                // line 30
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 31
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 32
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t<span";
                    // line 33
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo "></span> </i>";
                }
                // line 36
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 37
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 45
            if ((((($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno5") || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno6")) || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno7")) || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno15"))) {
                // line 47
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 48
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 49
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; \"";
                    }
                    echo ">
                \t</i>";
                }
                // line 52
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 53
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 60
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno9")) {
                // line 62
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 63
                    echo "<div class=\"g-socialpro-diseno9-con\">
\t\t\t\t\t<span class=\"g-socialpro-diseno9-hover\"";
                    // line 64
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo "></span>
                \t<i class=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 66
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t</i> 
                </div>               \t
\t\t\t\t";
                }
                // line 71
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 72
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 79
            if ((($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno10") || ($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno14"))) {
                // line 81
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 82
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 83
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t</i>";
                }
                // line 86
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 87
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 94
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno11")) {
                // line 96
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 97
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 98
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; box-shadow:0px -0.2rem 0px rgba(0, 0, 0, 0.24) inset; \"";
                    }
                    echo ">";
                }
                // line 101
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 102
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
                // line 104
                echo "</i>";
            }
            // line 107
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno12")) {
                // line 109
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 110
                    echo "<div class=\"g-socialpro-di12\"";
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";border-left: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-right: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
\t\t\t\t\t\t<span class=\"g-socialpro12-pre\"";
                    // line 111
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-left: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-right: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo "></span>
\t\t\t\t\t\t\t<i class=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"></i>
\t\t\t\t\t\t<span class=\"g-socialpro12-post\"";
                    // line 113
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-left: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-right: 1px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo "></span>
\t\t\t\t\t</div>
\t            ";
                }
                // line 117
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 118
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 123
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno13")) {
                // line 125
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 126
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 127
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";  box-shadow:0 -5rem 0 #fff inset;\"";
                    }
                    echo ">
                \t</i>";
                }
                // line 130
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 131
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 136
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno16")) {
                // line 137
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 138
                    echo "<div class=\"social-btn-cube\">
\t                \t<i class=\"social-btn-face ";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo " default\"";
                    // line 140
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; \"";
                    }
                    echo ">
\t                \t</i> 

\t                \t<i class=\"social-btn-face ";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo " active\"";
                    // line 144
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; \"";
                    }
                    echo ">
\t                \t</i>
                \t</div>";
                }
                // line 149
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 150
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 155
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno17")) {
                // line 157
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 158
                    echo "<span class=\"c--anim-btn\">
\t\t\t\t  <i class=\"c-anim-btn ";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; \"";
                    }
                    echo "></i> 
\t\t\t\t  <i class=\"c-anim-btn-2 ";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; \"";
                    }
                    echo "></i> 
\t\t\t\t</span>";
                }
                // line 164
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 165
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 171
            if (($this->getAttribute(($context["particle"] ?? null), "diseno", []) == "diseno18")) {
                // line 173
                if ((($this->getAttribute(($context["particle"] ?? null), "display", []) == "solo_ico") || ($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos"))) {
                    // line 174
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
                    echo "\"";
                    // line 175
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t</i>
                \t<div class=\"tooltip\"";
                    // line 177
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo "style=\"background:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                \t<span";
                    // line 178
                    if ($this->getAttribute($context["item"], "coloricono", [])) {
                        echo " style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo "; border-top: 5px solid ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "coloricono", []), "html", null, true);
                        echo ";\"";
                    }
                    echo "></span>
                \t";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "
                \t</div>";
                }
                // line 182
                if (($this->getAttribute(($context["particle"] ?? null), "display", []) == "ambos")) {
                    // line 183
                    echo "<span class=\"g-socialpro-texto\"";
                    if ($this->getAttribute(($context["particle"] ?? null), "colortexto", [])) {
                        echo "style=\"color:";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colortexto", []), "html", null, true);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                    echo "</span>";
                }
            }
            // line 186
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/social-pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 188,  538 => 186,  526 => 183,  524 => 182,  519 => 179,  509 => 178,  501 => 177,  492 => 175,  488 => 174,  486 => 173,  484 => 171,  472 => 165,  470 => 164,  459 => 160,  449 => 159,  446 => 158,  444 => 157,  442 => 155,  430 => 150,  428 => 149,  418 => 144,  415 => 143,  405 => 140,  402 => 139,  399 => 138,  397 => 137,  395 => 136,  383 => 131,  381 => 130,  370 => 127,  366 => 126,  364 => 125,  362 => 123,  350 => 118,  348 => 117,  334 => 113,  330 => 112,  318 => 111,  305 => 110,  303 => 109,  301 => 107,  298 => 104,  287 => 102,  285 => 101,  277 => 98,  273 => 97,  271 => 96,  269 => 94,  257 => 87,  255 => 86,  246 => 83,  242 => 82,  240 => 81,  238 => 79,  226 => 72,  224 => 71,  213 => 66,  210 => 65,  202 => 64,  199 => 63,  197 => 62,  195 => 60,  183 => 53,  181 => 52,  172 => 49,  168 => 48,  166 => 47,  164 => 45,  152 => 37,  150 => 36,  142 => 33,  134 => 32,  130 => 31,  128 => 30,  126 => 29,  114 => 23,  112 => 22,  103 => 18,  99 => 17,  97 => 16,  95 => 14,  88 => 11,  78 => 10,  74 => 9,  58 => 8,  55 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/social-pro.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\templates\\g5_hydrogen\\custom\\particles\\social-pro.html.twig");
    }
}
