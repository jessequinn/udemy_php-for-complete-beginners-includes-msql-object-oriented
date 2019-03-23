<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/blog_index.html.twig */
class __TwigTemplate_5c984952377b047679c06e327ec477e5f79c566a6141e7bf7208f65a41f2e1f6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo twig_include($this->env, $context, "header.html");
        echo "
<div class=\"container\">

    ";
        // line 4
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "

    ";
        // line 6
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 7
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 8
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 9
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 16
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 17
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 18
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 23
        echo "
    <div class=\"row mb-2\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "post_status", []) == "Published")) {
                // line 27
                echo "
                <div class=\"col-md-6\">
                    <div class=\"row no-gutters border rounded
                    overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\"
                         id=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
                echo "\">
                        <div class=\"col p-4 d-flex flex-column position-static\">
                            <strong class=\"d-inline-block mb-2 text-primary\">
                                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 35
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []) == twig_get_attribute($this->env, $this->source, $context["p"], "post_category_id", []))) {
                        // line 36
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 38
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                            </strong>
                            <h3 class=\"mb-0\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []));
                echo "</h3>
                            <div class=\"mb-1 text-muted\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_date", [])), "M d"));
                echo "</div>
                            <p class=\"card-text mb-auto\">";
                // line 42
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_content", []), 0, 115));
                echo " ...</p>
                            <a href=\"/blog/post/";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []));
                echo "\" class=\"stretched-link\">Continue reading</a>
                        </div>
                        <div class=\"col-auto d-none d-lg-block\">
                            <img class=\"img-responsive fit-image\" src=\"/images/";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_img", []));
                echo "\">
                        </div>
                    </div>
                </div>

            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>

</div>
";
        // line 56
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "blog/blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  153 => 53,  147 => 52,  138 => 46,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  117 => 39,  111 => 38,  105 => 36,  102 => 35,  98 => 34,  92 => 31,  86 => 27,  83 => 26,  79 => 25,  75 => 23,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  59 => 14,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  41 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">

    {{ include('nav.html.twig') }}

    {% if message is defined and message is not empty %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            {{- message|e -}}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endif %}

    {% if error is defined and error is not empty %}
        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            {{- error|e -}}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    {% endif %}

    <div class=\"row mb-2\">
        {% for p in posts %}
            {% if p.post_status == 'Published' %}

                <div class=\"col-md-6\">
                    <div class=\"row no-gutters border rounded
                    overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\"
                         id=\"{{ p.post_id }}\">
                        <div class=\"col p-4 d-flex flex-column position-static\">
                            <strong class=\"d-inline-block mb-2 text-primary\">
                                {% for c in categories %}
                                    {% if c.cat_id == p.post_category_id %}
                                        {{ c.cat_title }}
                                    {% endif %}
                                {% endfor %}
                            </strong>
                            <h3 class=\"mb-0\">{{ p.post_title|e }}</h3>
                            <div class=\"mb-1 text-muted\">{{ p.post_date|e|date(\"M d\" )|e }}</div>
                            <p class=\"card-text mb-auto\">{{ p.post_content|slice(0, 115)|e }} ...</p>
                            <a href=\"/blog/post/{{ p.post_id|e }}\" class=\"stretched-link\">Continue reading</a>
                        </div>
                        <div class=\"col-auto d-none d-lg-block\">
                            <img class=\"img-responsive fit-image\" src=\"/images/{{ p.post_img|e }}\">
                        </div>
                    </div>
                </div>

            {% endif %}
        {% endfor %}
    </div>

</div>
{{ include('footer.html') }}", "blog/blog_index.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/blog/blog_index.html.twig");
    }
}
