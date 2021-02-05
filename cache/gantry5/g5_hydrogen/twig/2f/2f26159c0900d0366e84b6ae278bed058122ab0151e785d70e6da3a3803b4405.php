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

/* @particles/atomo-Ir-arriba.html.twig */
class __TwigTemplate_f856da9f2fb845873d9bcdcd4d6b1df0ddf75408340b2627af292429c8a6c3db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/atomo-Ir-arriba.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 5
            echo "        ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 6
            echo "        ";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "        
            <script>
                (function(\$) {
                    \$(window).load(function() {

             \$('body').append('<a class=\"ir-arriba ir-arriba-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "efecto", []));
            echo "-defecto ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "alineacion", []));
            echo " ";
            if ($this->getAttribute(($context["particle"] ?? null), "colorfondo", [])) {
                echo "g-ir-arriba-confondo";
            }
            echo "\" href=\"#\" style=\"";
            if ($this->getAttribute(($context["particle"] ?? null), "colorfondo", [])) {
                echo "background:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colorfondo", []));
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "coloricono", [])) {
                echo "color:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "coloricono", []));
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "miborderradius", [])) {
                echo "border-radius:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "miborderradius", []), "html", null, true);
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "espaciado", [])) {
                echo "padding:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "espaciado", []));
                echo ";";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "grosorborde", [])) {
                echo "border:";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "grosorborde", []));
                echo " solid";
            }
            if ($this->getAttribute(($context["particle"] ?? null), "colorborde", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "colorborde", []));
            }
            echo ";\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonicon", []));
            echo "\" aria-hidden=\"true\"> </i> </a>'); 

                     \$(window).scroll(function () {
                    if (\$(this).scrollTop() > ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "offset", []));
            echo ") {
                        \$('.ir-arriba').addClass('ir-arriba-";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "efecto", []));
            echo "');
                    } else {
                        \$('.ir-arriba').removeClass('ir-arriba-";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "efecto", []));
            echo "');
                    }
                    });

                     \$('.ir-arriba').click(function () {
                     \$('body,html').animate({
                        scrollTop: 0,
                        }, ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "velocidadscroll", []));
            echo ");
                        return false;
                    });

                    });
                })(jQuery);
            </script>
        ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/atomo-Ir-arriba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  110 => 17,  105 => 15,  101 => 14,  57 => 11,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/atomo-Ir-arriba.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\templates\\g5_hydrogen\\custom\\particles\\atomo-Ir-arriba.html.twig");
    }
}
