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

/* @particles/totop.html.twig */
class __TwigTemplate_7a7d9d9e05228014c35c2affd7cf1ba24dc4a3ed97d0a9ec67111d370c1b41aa extends \Twig\Template
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
        // line 3
        $context["linkTitle"] = (($this->getAttribute(($context["particle"] ?? null), "title", [])) ? (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []))) : (twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []))));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/totop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_particle($context, array $blocks = [])
    {
        // line 6
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        echo " g-particle\">
    <div class=\"g-totop\">
        <a href=\"#\" id=\"g-totop\" rel=\"nofollow\"";
        // line 8
        if (($context["linkTitle"] ?? null)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($context["linkTitle"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, ($context["linkTitle"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            ";
        // line 9
        if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "content", [])) {
            echo $this->getAttribute(($context["particle"] ?? null), "content", []);
        }
        // line 11
        echo "            ";
        if (( !$this->getAttribute(($context["particle"] ?? null), "icon", []) &&  !$this->getAttribute(($context["particle"] ?? null), "content", []))) {
            echo "To Top";
        }
        // line 12
        echo "        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/totop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 11,  67 => 10,  61 => 9,  51 => 8,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/totop.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\media\\gantry5\\engines\\nucleus\\particles\\totop.html.twig");
    }
}
