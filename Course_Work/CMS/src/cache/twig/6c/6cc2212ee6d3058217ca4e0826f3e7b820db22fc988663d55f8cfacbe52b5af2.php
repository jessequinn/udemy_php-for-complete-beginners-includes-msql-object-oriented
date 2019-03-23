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
class __TwigTemplate_c4063afc32c80c323111c689df7f10941f07f9ebe3e085409c8b75de4fb3a4fa extends \Twig\Template
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
        // line 5
        if ((isset($context["post_show"]) || array_key_exists("post_show", $context))) {
            // line 6
            echo "        <div class=\"blog-post\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", []));
            echo "\">
            ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_role", []) == "Admin")) {
                // line 8
                echo "                <span class=\"float-right\">
                <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-post-form", ["id" => twig_get_attribute($this->env, $this->source,                 // line 10
($context["post_show"] ?? null), "post_id", [])]), "html", null, true);
                // line 11
                echo "\" class=\"btn btn-default\">Edit</a>
            </span>
            ";
            }
            // line 14
            echo "            <h2 class=\"blog-post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_title", []));
            echo "</h2>
            <p class=\"blog-post-meta\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_date", [])), "M d, Y"));
            echo " by <a
                        href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_author", []));
            echo "</a></p>
            <p>
                ";
            // line 18
            echo $this->extensions['Aptoma\Twig\Extension\MarkdownExtension']->parseMarkdown(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_content", [])));
            echo "
            </p>

        </div>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "blog/blog_comments.html.twig");
        echo "

    ";
        // line 26
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 27
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 28
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 29
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 36
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 37
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 38
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 43
        echo "
</div>

";
        // line 46
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
        return array (  129 => 46,  124 => 43,  117 => 38,  115 => 37,  113 => 36,  111 => 35,  108 => 34,  101 => 29,  99 => 28,  97 => 27,  95 => 26,  90 => 24,  87 => 23,  79 => 18,  74 => 16,  70 => 15,  65 => 14,  60 => 11,  58 => 10,  57 => 9,  54 => 8,  52 => 7,  47 => 6,  45 => 5,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('nav.html.twig') }}

    {% if post_show is defined %}
        <div class=\"blog-post\" id=\"{{ post_show.post_id|e }}\">
            {% if session.user_role == 'Admin' %}
                <span class=\"float-right\">
                <a href=\"{{ path_for('admin-edit-post-form', {
                    'id': post_show.post_id,
                }) }}\" class=\"btn btn-default\">Edit</a>
            </span>
            {% endif %}
            <h2 class=\"blog-post-title\">{{ post_show.post_title|e }}</h2>
            <p class=\"blog-post-meta\">{{ post_show.post_date|e|date(\"M d, Y\")|e }} by <a
                        href=\"#\">{{ post_show.post_author|e }}</a></p>
            <p>
                {{ post_show.post_content|e|markdown }}
            </p>

        </div>
    {% endif %}

    {{ include('blog/blog_comments.html.twig') }}

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

{{ include('footer.html') }}", "blog/blog_post.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/blog/blog_post.html.twig");
    }
}
