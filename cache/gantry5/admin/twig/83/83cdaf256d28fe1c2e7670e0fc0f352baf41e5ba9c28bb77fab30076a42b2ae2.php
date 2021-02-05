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

/* forms/fields/gantry/inherit.html.twig */
class __TwigTemplate_bbb4974370660cdbbef0dc66fd573b7e86786e23a49484e1395b667b849f994c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"g-inherit";
        echo ((($context["inherit"] ?? null)) ? ("") : (" hide"));
        echo "\">
    <div class=\"g-inherit-content\">
        ";
        // line 3
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITING_FROM_X", (("<strong>" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", []), "name", [0 => ($context["inherit"] ?? null)], "method"))) . "</strong>"));
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/inherit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/gantry/inherit.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\administrator\\components\\com_gantry5\\templates\\forms\\fields\\gantry\\inherit.html.twig");
    }
}
