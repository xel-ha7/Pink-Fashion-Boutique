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

/* partials/error_head.html.twig */
class __TwigTemplate_68afc11b7fb6899dedf2c005cbcff690ee6cb8dde574b4d879babd7a7af96929 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'head_application' => [$this, 'block_head_application'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/page_head.html.twig", "partials/error_head.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_application($context, array $blocks = [])
    {
        // line 4
        echo "<meta charset=\"utf-8\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (((isset($context["errorcode"]) || array_key_exists("errorcode", $context))) ? (_twig_default_filter(($context["errorcode"] ?? null), 500)) : (500)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter(($context["error"] ?? null), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_UNKNOWN_ERROR"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_UNKNOWN_ERROR"))), "html", null, true);
        echo "</title>
    ";
        // line 7
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "errorPage", [0 => true], "method");
        // line 8
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "finalize", [], "method");
        // line 9
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "styles", [0 => "head", 1 => true], "method"), "
    ");
        echo "
    ";
        // line 10
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "scripts", [0 => "head", 1 => true], "method"), "
    ");
    }

    public function getTemplateName()
    {
        return "partials/error_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  56 => 9,  54 => 8,  52 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/error_head.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\media\\gantry5\\engines\\nucleus\\twig\\partials\\error_head.html.twig");
    }
}
