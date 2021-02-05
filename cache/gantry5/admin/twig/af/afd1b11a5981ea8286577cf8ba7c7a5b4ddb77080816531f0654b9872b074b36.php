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

/* forms/override.html.twig */
class __TwigTemplate_47d2a6c2575192ce4d8822af1bafb1f8f0c361717a20d1cf8ac9207ac85c9cca extends \Twig\Template
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
        echo "<input type=\"checkbox\"
       class=\"settings-param-toggle\"
       id=\"of-";
        // line 3
        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . ($context["name"] ?? null)), "html", null, true);
        echo "\"";
        echo ((($context["has_value"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo "
       role=\"checkbox\"
       aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", twig_trim_filter(twig_title_string_filter($this->env, twig_replace_filter((($context["scope"] ?? null) . ($context["name"] ?? null)), ["." => " "])))), "html", null, true);
        echo "\"
       title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", $this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
        echo "\" />
<label class=\"settings-param-override\" for=\"of-";
        // line 7
        echo twig_escape_filter($this->env, (($context["scope"] ?? null) . ($context["name"] ?? null)), "html", null, true);
        echo "\"></label>
";
    }

    public function getTemplateName()
    {
        return "forms/override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  45 => 6,  41 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/override.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\administrator\\components\\com_gantry5\\templates\\forms\\override.html.twig");
    }
}
