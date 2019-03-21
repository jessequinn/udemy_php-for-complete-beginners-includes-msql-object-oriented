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
class __TwigTemplate_f4461d24428ec6d8aa91c93cdfc13f6b6245df574348a2d637603b68c086139c extends \Twig\Template
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
    <section class=\"header\">
        <h2 class=\"title\">A dead simple, responsive boilerplate.</h2>
        <a class=\"button button-primary\"
           href=\"https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip\"
           onclick=\"_gaq.push(['_trackEvent', 'skeleton', 'download'])\">Download</a>
        <div class=\"value-props row\">
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/feather.svg\">
                Light as a feather at ~400 lines &amp; built with mobile in mind.
            </div>
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/pens.svg\">
                Styles designed to be a starting point, not a UI framework.
            </div>
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/watch.svg\">
                Quick to start with zero compiling or installing necessary.
            </div>
        </div>
    </section>
    ";
        // line 23
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "post_status", []) == "Published")) {
                // line 26
                echo "            <div class=\"docs-section\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
                echo "\">
                <h1>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []));
                echo "</h1>
                <p>by ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_author", []));
                echo "</p>
                <p>Posted on ";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_date", [])), "m/d/Y"), "html", null, true);
                echo "</p>
                <a href=\"/blog/post/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
                echo "\">
                    <img src=\"/images/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_img", []), "html", null, true);
                echo "\" alt=\"\">
                </a>
                <p>";
                // line 33
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_content", []), 0, 200), "html", null, true);
                echo " ...</p>
                <a class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"/blog/post/";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
                echo "\">Read More</a>
            </div>
        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 40
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 41
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 42
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 49
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 50
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 51
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 56
        echo "</div>
";
        // line 57
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
        return array (  148 => 57,  145 => 56,  138 => 51,  136 => 50,  134 => 49,  132 => 48,  129 => 47,  122 => 42,  120 => 41,  118 => 40,  116 => 39,  113 => 38,  107 => 37,  101 => 34,  97 => 33,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  71 => 26,  68 => 25,  64 => 24,  60 => 23,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    <section class=\"header\">
        <h2 class=\"title\">A dead simple, responsive boilerplate.</h2>
        <a class=\"button button-primary\"
           href=\"https://github.com/dhg/Skeleton/releases/download/2.0.4/Skeleton-2.0.4.zip\"
           onclick=\"_gaq.push(['_trackEvent', 'skeleton', 'download'])\">Download</a>
        <div class=\"value-props row\">
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/feather.svg\">
                Light as a feather at ~400 lines &amp; built with mobile in mind.
            </div>
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/pens.svg\">
                Styles designed to be a starting point, not a UI framework.
            </div>
            <div class=\"four columns value-prop\">
                <img class=\"value-img\" src=\"images/watch.svg\">
                Quick to start with zero compiling or installing necessary.
            </div>
        </div>
    </section>
    {{ include('nav.html.twig') }}
    {% for p in posts %}
        {% if p.post_status == 'Published' %}
            <div class=\"docs-section\" id=\"{{ p.post_id }}\">
                <h1>{{ p.post_title|e }}</h1>
                <p>by {{ p.post_author|e }}</p>
                <p>Posted on {{ p.post_date|e|date(\"m/d/Y\" ) }}</p>
                <a href=\"/blog/post/{{ p.post_id }}\">
                    <img src=\"/images/{{ p.post_img }}\" alt=\"\">
                </a>
                <p>{{ p.post_content|slice(0, 200) }} ...</p>
                <a class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"/blog/post/{{ p.post_id }}\">Read More</a>
            </div>
        {% endif %}
    {% endfor %}

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
</div>
{{ include('footer.html') }}", "blog/blog_index.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/blog/blog_index.html.twig");
    }
}
