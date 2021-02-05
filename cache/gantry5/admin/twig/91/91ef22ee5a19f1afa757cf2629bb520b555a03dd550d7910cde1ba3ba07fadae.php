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

/* forms/fields/menu/list.html.twig */
class __TwigTemplate_dbf046ef6bcc92371769045f3b0e957a619038bfdc2a6d2bfa971e33c6838755 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/select/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/select/selectize.html.twig", "forms/fields/menu/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("options", $context, $blocks);
        echo "
    ";
        // line 5
        $context["current"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "getDefaultMenuName", [], "method");
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "getMenus", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 7
            echo "        ";
            $context["text"] = twig_capitalize_string_filter($this->env, $context["key"]);
            // line 8
            echo "        <option
                ";
            // line 10
            echo "                ";
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "selected=\"selected\"";
            }
            // line 11
            echo "                value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                ";
            // line 13
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), "disabled", []), [0 => "on", 1 => "true", 2 => 1])) {
                echo "disabled=\"disabled\"";
            }
            // line 14
            echo "                >";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo ((((($context["current"] ?? null) == $context["key"]) && $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "hasDefaultMenu", [], "method"))) ? (" ★") : (""));
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  70 => 13,  65 => 11,  60 => 10,  57 => 8,  54 => 7,  49 => 6,  47 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/menu/list.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\administrator\\components\\com_gantry5\\templates\\forms\\fields\\menu\\list.html.twig");
    }
}
