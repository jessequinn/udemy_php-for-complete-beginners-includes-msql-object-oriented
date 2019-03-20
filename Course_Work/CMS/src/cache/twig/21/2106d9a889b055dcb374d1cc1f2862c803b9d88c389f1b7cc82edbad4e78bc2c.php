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
                <img src=\"/images/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_img", []), "html", null, true);
                echo "\" alt=\"\">
                <p>";
                // line 31
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_content", []), 0, 200), "html", null, true);
                echo " ...</p>
                <a class=\"button\" href=\"/blog/post/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
                echo "\">Read More</a>
            </div>
        ";
            }
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        if ((isset($context["message"]) || array_key_exists("message", $context))) {
            // line 37
            echo "        <div>";
            // line 38
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            // line 39
            echo "</div>
    ";
        }
        // line 41
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 42
            echo "        <div>";
            // line 43
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            // line 44
            echo "</div>
    ";
        }
        // line 46
        echo "</div>
";
        // line 47
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
        return array (  133 => 47,  130 => 46,  126 => 44,  124 => 43,  122 => 42,  119 => 41,  115 => 39,  113 => 38,  111 => 37,  108 => 36,  102 => 35,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  71 => 26,  68 => 25,  64 => 24,  60 => 23,  35 => 1,);
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
                <img src=\"/images/{{ p.post_img }}\" alt=\"\">
                <p>{{ p.post_content|slice(0, 200) }} ...</p>
                <a class=\"button\" href=\"/blog/post/{{ p.post_id }}\">Read More</a>
            </div>
        {% endif %}
    {% endfor %}
    {% if message is defined %}
        <div>
            {{- message -}}
        </div>
    {% endif %}
    {% if error is defined %}
        <div>
            {{- error -}}
        </div>
    {% endif %}
</div>
{{ include('footer.html') }}", "blog/blog_index.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/blog/blog_index.html.twig");
    }
}
