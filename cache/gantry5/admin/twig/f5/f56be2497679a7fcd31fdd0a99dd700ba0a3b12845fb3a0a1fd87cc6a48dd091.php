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

/* @gantry-admin/pages/menu/menuitem.html.twig */
class __TwigTemplate_8f24313892760908ead0db2356dabcc5312166f3ab1041a9677c846b4b89a1dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/menuitem.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => ($context["path"] ?? null), 3 => "validate"], "method"), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", []), "html", null, true);
        echo "</span>
            <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["data"] ?? null), "title", [])), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", []), ".enabled", [], "array")) {
            // line 10
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 10)->display(twig_array_merge($context, ["default" => true, "name" => "enabled", "field" => $this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", []), ".enabled", [], "array"), "value" => $this->getAttribute(($context["data"] ?? null), "enabled", [])]));
            // line 11
            echo "            ";
        }
        // line 12
        echo "            <span class=\"g-menuitem-path font-small\">/";
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "</span>
        </h4>
        <div class=\"inner-params\">
            ";
        // line 15
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 15)->display(twig_array_merge($context, ["skip" => [0 => "enabled", 1 => "title", 2 => ((($this->getAttribute(($context["data"] ?? null), "level", []) > 1)) ? ("dropdown") : ("-noitem-"))]]));
        // line 16
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 19
        if ($this->getAttribute(($context["gantry"] ?? null), "authorize", [0 => "menu.edit", 1 => ($context["id"] ?? null)], "method")) {
            // line 20
            echo "        ";
            // line 21
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 24
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/menuitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  89 => 22,  84 => 21,  82 => 20,  80 => 19,  75 => 16,  73 => 15,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  54 => 8,  48 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/menu/menuitem.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\administrator\\components\\com_gantry5\\templates\\pages\\menu\\menuitem.html.twig");
    }
}
