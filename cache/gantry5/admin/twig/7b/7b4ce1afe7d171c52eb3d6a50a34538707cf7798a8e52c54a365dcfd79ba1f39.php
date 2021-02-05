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

/* @gantry-admin/ajax/icons.html.twig */
class __TwigTemplate_496ed6edbc2f69bb76777410ad56a6e7efe79c10e532b6e0085cf570fd460145 extends \Twig\Template
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
        echo "<div class=\"g-particles-header icons-header settings-block clearfix\">
    <div class=\"float-left particle-search-wrapper\">
        <input type=\"text\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\"/>
        <span class=\"particle-search-total\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
    </div>
    <div class=\"float-right\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["option"]) {
            // line 8
            echo "            ";
            if (twig_test_iterable($context["option"])) {
                // line 9
                echo "                <select name=\"type\">
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 11
                    echo "                    <option value=\"fa-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                </select>
            ";
            } else {
                // line 15
                echo "                <label><input type=\"checkbox\" name=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" value=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</label>
            ";
            }
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</div>

<div class=\"g-particles-main icons-wrapper\">
    <ul>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 24
            echo "            <li data-g-icon=\"";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\"><i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
</div>
<div class=\"g-particles-footer settings-block clearfix\">
    <div class=\"float-left g-icon-preview\"></div>
    <div class=\"float-right\">
        <button href=\"#\" class=\"button button-primary\" data-g-select=\"\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo "</button>
        <button href=\"#\" class=\"button g5-dialog-close\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  120 => 31,  113 => 26,  100 => 24,  96 => 23,  89 => 18,  83 => 17,  73 => 15,  69 => 13,  58 => 11,  54 => 10,  51 => 9,  48 => 8,  44 => 7,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/ajax/icons.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\administrator\\components\\com_gantry5\\templates\\ajax\\icons.html.twig");
    }
}
