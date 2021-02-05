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

/* @particles/contentarray.html.twig */
class __TwigTemplate_b43be747d8795dbf2b57c37edb5a49be50757dc9f87f34e14cf9cdfb381c6571 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
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
        // line 3
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["particle"] ?? null), "extra", []));
        // line 4
        $context["article_settings"] = $this->getAttribute(($context["particle"] ?? null), "article", []);
        // line 5
        $context["filter"] = $this->getAttribute(($context["article_settings"] ?? null), "filter", []);
        // line 6
        $context["sort"] = $this->getAttribute(($context["article_settings"] ?? null), "sort", []);
        // line 7
        $context["limit"] = $this->getAttribute(($context["article_settings"] ?? null), "limit", []);
        // line 8
        $context["display"] = $this->getAttribute(($context["article_settings"] ?? null), "display", []);
        // line 11
        $context["category_options"] = (($this->getAttribute(($context["filter"] ?? null), "categories", [])) ? (["id" => [0 => twig_split_filter($this->env, $this->getAttribute(($context["filter"] ?? null), "categories", []), ","), 1 => 0]]) : ([]));
        // line 12
        $context["categories"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "category", 1 => ($context["category_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method"), "limit", [0 => 0], "method"), "find", [], "method");
        // line 15
        if ($this->getAttribute(($context["filter"] ?? null), "articles", [])) {
            // line 16
            $context["article_options"] = (($this->getAttribute(($context["filter"] ?? null), "articles", [])) ? (["id" => [0 => twig_split_filter($this->env, twig_replace_filter($this->getAttribute(($context["filter"] ?? null), "articles", []), [" " => ""]), ",")]]) : ([]));
            // line 17
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content", 1 => ($context["article_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
        } else {
            // line 19
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content"], "method"), "category", [0 => ($context["categories"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
        }
        // line 22
        $context["featured"] = (($this->getAttribute(($context["filter"] ?? null), "featured", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["filter"] ?? null), "featured", []), "include")) : ("include"));
        // line 23
        if ((($context["featured"] ?? null) == "exclude")) {
            // line 24
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => false], "method");
        } elseif ((        // line 25
($context["featured"] ?? null) == "only")) {
            // line 26
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => true], "method");
        }
        // line 29
        $context["start"] = ($this->getAttribute(($context["limit"] ?? null), "start", []) + max(0, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute(($context["ajax"] ?? null), "start", []))));
        // line 30
        $this->getAttribute($this->getAttribute($this->getAttribute(($context["article_finder"] ?? null), "order", [0 => $this->getAttribute(($context["sort"] ?? null), "orderby", []), 1 => $this->getAttribute(($context["sort"] ?? null), "ordering", [])], "method"), "limit", [0 => $this->getAttribute(($context["limit"] ?? null), "total", [])], "method"), "start", [0 => ($context["start"] ?? null)], "method");
        // line 31
        $context["total"] = $this->getAttribute(($context["article_finder"] ?? null), "count", [], "method");
        // line 32
        $context["articles"] = $this->getAttribute(($context["article_finder"] ?? null), "find", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentarray.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_particle($context, array $blocks = [])
    {
        // line 35
        echo "
     ";
        // line 36
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 37
            echo "            <h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>
        ";
        }
        // line 39
        echo "
    ";
        // line 41
        echo "    <div class=\"g-content-array g-joomla-articles";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        }
        echo "\"";
        echo ($context["attr_extra"] ?? null);
        echo ">

        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["articles"] ?? null), $this->getAttribute(($context["limit"] ?? null), "columns", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 44
            echo "            <div class=\"g-grid\">
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 46
                echo "
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                ";
                // line 50
                if (($this->getAttribute(($context["display"] ?? null), "edit", []) && $this->getAttribute($context["article"], "edit", []))) {
                    // line 51
                    echo "                                    <a class=\"g-array-item-edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "edit", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("COM_CONTENT_FORM_EDIT_ARTICLE"), "html", null, true);
                    echo "</a>
                                ";
                }
                // line 53
                echo "                                ";
                if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                    // line 54
                    echo "                                    ";
                    if ((($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro")) || ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "show"))) {
                        // line 55
                        echo "                                        <div class=\"g-array-item-image\">
                                            <a href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", []), "html", null, true);
                        echo "\">
                                                <img src=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []));
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro_alt", []), "html", null, true);
                        echo "\" />
                                            </a>
                                        </div>
                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 60
$context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full"))) {
                        // line 61
                        echo "                                        <div class=\"g-array-item-image\">
                                            <a href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", []), "html", null, true);
                        echo "\">
                                                <img src=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", [])), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []));
                        echo " alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext_alt", []), "html", null, true);
                        echo "\" />
                                            </a>
                                        </div>
                                    ";
                    }
                    // line 67
                    echo "                                ";
                }
                // line 68
                echo "
                                ";
                // line 69
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "enabled", [])) {
                    // line 70
                    echo "                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", []), "html", null, true);
                    echo "\">
                                                ";
                    // line 73
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                    echo "
                                            </a>
                                        </h3>
                                    </div>
                                ";
                }
                // line 78
                echo "
                                ";
                // line 79
                if (((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", []) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", [])) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "enabled", [])) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "hits", []), "enabled", []))) {
                    // line 80
                    echo "                                    <div class=\"g-array-item-details\">
                                        ";
                    // line 81
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", [])) {
                        // line 82
                        echo "                                            <span class=\"g-array-item-date\">
                                                ";
                        // line 83
                        if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "enabled", []) == "published")) {
                            // line 84
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, $this->getAttribute($context["article"], "publish_up", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])]), "html", null, true);
                            echo "
                                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 85
($context["display"] ?? null), "date", []), "enabled", []) == "modified")) {
                            // line 86
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, $this->getAttribute($context["article"], "modified", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])]), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 88
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, $this->getAttribute($context["article"], "created", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", []), "format", [])]), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 90
                        echo "                                            </span>
                                        ";
                    }
                    // line 92
                    echo "
                                        ";
                    // line 93
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", [])) {
                        // line 94
                        echo "                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", []), "name", []), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 98
                    echo "
                                        ";
                    // line 99
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "enabled", [])) {
                        // line 100
                        echo "                                            ";
                        $context["category_link"] = ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", []), "enabled", []) == "link");
                        // line 101
                        echo "                                            <span class=\"g-array-item-category\">
                                                ";
                        // line 102
                        $context["cat"] = twig_last($this->env, $this->getAttribute($context["article"], "categories", []));
                        // line 103
                        echo "                                                ";
                        if (($context["category_link"] ?? null)) {
                            // line 104
                            echo "                                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["cat"] ?? null), "route", []), "html", null, true);
                            echo "\">
                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                            // line 105
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["cat"] ?? null), "title", []), "html", null, true);
                            echo "
                                                    </a>
                                                ";
                        } else {
                            // line 108
                            echo "                                                    <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["cat"] ?? null), "title", []), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 110
                        echo "                                            </span>
                                        ";
                    }
                    // line 112
                    echo "
                                        ";
                    // line 113
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "hits", []), "enabled", [])) {
                        // line 114
                        echo "                                            <span class=\"g-array-item-hits\">
                                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>";
                        // line 115
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hits", []), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 118
                    echo "                                    </div>
                                ";
                }
                // line 120
                echo "
                                ";
                // line 121
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", [])) {
                    // line 122
                    echo "                                    ";
                    $context["article_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", []) == "intro")) ? ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "prepare", [])) ? ($this->getAttribute($context["article"], "preparedIntroText", [])) : ($this->getAttribute($context["article"], "introtext", [])))) : ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "prepare", [])) ? ($this->getAttribute($context["article"], "preparedText", [])) : ($this->getAttribute($context["article"], "text", [])))));
                    // line 123
                    echo "                                    <div class=\"g-array-item-text\">
                                        ";
                    // line 124
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "formatting", []) == "text")) {
                        // line 125
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["article_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                        echo "
                                        ";
                    } else {
                        // line 127
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["article_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                        echo "
                                        ";
                    }
                    // line 129
                    echo "                                    </div>
                                ";
                }
                // line 131
                echo "
                                ";
                // line 132
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "enabled", [])) {
                    // line 133
                    echo "                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", []), "html", null, true);
                    echo "\">
                                            <button class=\"button";
                    // line 135
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "css", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", []), "css", []), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", [], "any", false, true), "label", []), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</button>

                                        </a>
                                    </div>
                                ";
                }
                // line 140
                echo "                            </div>
                        </div>
                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
        ";
        // line 148
        if (((($context["total"] ?? null) > $this->getAttribute(($context["limit"] ?? null), "total", [])) && $this->getAttribute(($context["display"] ?? null), "pagination_buttons", []))) {
            // line 149
            echo "            <div class=\"g-content-array-pagination\">
                <button class=\"button float-left contentarray-button pagination-button pagination-button-prev\" data-id=\"";
            // line 150
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, max(0, (($context["start"] ?? null) - $this->getAttribute(($context["limit"] ?? null), "total", []))), "html", null, true);
            echo "\"";
            echo ((((($context["start"] ?? null) - $this->getAttribute(($context["limit"] ?? null), "total", [])) < 0)) ? (" disabled") : (""));
            echo ">Prev</button>
                <button class=\"button float-right contentarray-button pagination-button pagination-button-next\" data-id=\"";
            // line 151
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, (($context["start"] ?? null) + $this->getAttribute(($context["limit"] ?? null), "total", [])), "html", null, true);
            echo "\"";
            echo ((((($context["start"] ?? null) + $this->getAttribute(($context["limit"] ?? null), "total", [])) >= ($context["total"] ?? null))) ? (" disabled") : (""));
            echo ">Next</button>
                <div class=\"clearfix\"></div>
            </div>
        ";
        }
        // line 155
        echo "    </div>
";
    }

    // line 158
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 159
        if (((($context["total"] ?? null) > $this->getAttribute(($context["limit"] ?? null), "total", [])) && $this->getAttribute(($context["display"] ?? null), "pagination_buttons", []))) {
            // line 160
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 161
            echo "<script>
    (function (\$) {
        \$(document).on('click', 'button.contentarray-button', function () {
            var id = \$(this).attr('data-id'),
                start = \$(this).attr('data-start'),
                request = {
                'option' : 'com_ajax',
                'plugin' : 'particle',
                'Itemid' : ";
            // line 169
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->intFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "itemid", []));
            echo ",
                'id'     : id,
                'start'  : start,
                'format' : 'json'
            };
            \$.ajax({
                type       : 'GET',
                data       : request,
                indexValue : id + '-particle',
                success: function (response) {
                    if(response.data){
                        \$('#' + this.indexValue).html(response.data[0].html);
                    } else {
                        // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                        \$('#' + this.indexValue).html(response.message);
                    }
                },
                error: function(response) {
                    // TODO: Improve error handling -- instead of replacing particle content, display flash message or something...
                    \$('#' + this.indexValue).html('AJAX FAILED ON ERROR');
                }
            });
            return false;
        });
    })(jQuery)
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/contentarray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 169,  425 => 161,  423 => 160,  421 => 159,  418 => 158,  413 => 155,  402 => 151,  394 => 150,  391 => 149,  389 => 148,  386 => 147,  379 => 145,  369 => 140,  356 => 135,  352 => 134,  349 => 133,  347 => 132,  344 => 131,  340 => 129,  334 => 127,  328 => 125,  326 => 124,  323 => 123,  320 => 122,  318 => 121,  315 => 120,  311 => 118,  305 => 115,  302 => 114,  300 => 113,  297 => 112,  293 => 110,  287 => 108,  281 => 105,  276 => 104,  273 => 103,  271 => 102,  268 => 101,  265 => 100,  263 => 99,  260 => 98,  254 => 95,  251 => 94,  249 => 93,  246 => 92,  242 => 90,  236 => 88,  230 => 86,  228 => 85,  223 => 84,  221 => 83,  218 => 82,  216 => 81,  213 => 80,  211 => 79,  208 => 78,  200 => 73,  196 => 72,  192 => 70,  190 => 69,  187 => 68,  184 => 67,  173 => 63,  169 => 62,  166 => 61,  164 => 60,  154 => 57,  150 => 56,  147 => 55,  144 => 54,  141 => 53,  133 => 51,  131 => 50,  125 => 46,  121 => 45,  118 => 44,  114 => 43,  103 => 41,  100 => 39,  94 => 37,  92 => 36,  89 => 35,  86 => 34,  81 => 1,  79 => 32,  77 => 31,  75 => 30,  73 => 29,  70 => 26,  68 => 25,  66 => 24,  64 => 23,  62 => 22,  59 => 19,  56 => 17,  54 => 16,  52 => 15,  50 => 12,  48 => 11,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/contentarray.html.twig", "C:\\xampp\\htdocs\\pinkfashion\\media\\gantry5\\engines\\nucleus\\particles\\contentarray.html.twig");
    }
}
