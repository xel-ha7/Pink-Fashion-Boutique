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

/* @particles/atomo-OwlCarousel.html.twig */
class __TwigTemplate_50a781d0ba6bbf8d8401f21cd6446e571a8d830cd4d22192591e3038641e2eae extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/atomo-OwlCarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = [];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://css/owl.carousel.min.css"), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
        }
        // line 8
        echo "    ";
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 10
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = [];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = (($this->getAttribute(($context["particle"] ?? null), "jslocation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "jslocation", []), "footer")) : ("footer"));
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 11
        echo "        ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 12
            echo "            ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 13
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owl.carousel.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        // line 15
        echo "    ";
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
    }

    public function getTemplateName()
    {
        return "@particles/atomo-OwlCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  86 => 13,  83 => 12,  80 => 11,  68 => 10,  64 => 8,  58 => 6,  55 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/atomo-OwlCarousel.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\templates\\g5_hydrogen\\custom\\particles\\atomo-OwlCarousel.html.twig");
    }
}
