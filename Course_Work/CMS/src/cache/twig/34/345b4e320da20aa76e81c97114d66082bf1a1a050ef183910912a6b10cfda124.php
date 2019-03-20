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

/* blog/blog_post.html.twig */
class __TwigTemplate_da51e51fd03d049896e569aed0fa72422ac8fb35e737a1e9058147cc22bcf65c extends \Twig\Template
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
        // line 3
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
    ";
        // line 4
        if ((isset($context["post_show"]) || array_key_exists("post_show", $context))) {
            // line 5
            echo "    <div class=\"docs-section\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", []), "html", null, true);
            echo "\">
        <h1>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_title", []));
            echo "</h1>
        <p>by ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_author", []));
            echo "</p>
        <p>Posted on ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_date", [])), "d-m-y"), "html", null, true);
            echo "</p>
        <img src=\"/images/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_img", []), "html", null, true);
            echo "\" alt=\"\">
        <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_content", []), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "blog/blog_comments.html.twig");
        echo "
</div>
</div>
";
        // line 16
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "blog/blog_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 5,  44 => 4,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('nav.html.twig') }}
    {% if post_show is defined %}
    <div class=\"docs-section\" id=\"{{ post_show.post_id }}\">
        <h1>{{ post_show.post_title|e }}</h1>
        <p>by {{ post_show.post_author|e }}</p>
        <p>Posted on {{ post_show.post_date|e|date(\"d-m-y\") }}</p>
        <img src=\"/images/{{  post_show.post_img }}\" alt=\"\">
        <p>{{ post_show.post_content }}</p>
    </div>
    {% endif %}
    {{ include('blog/blog_comments.html.twig') }}
</div>
</div>
{{ include('footer.html') }}", "blog/blog_post.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/blog/blog_post.html.twig");
    }
}
