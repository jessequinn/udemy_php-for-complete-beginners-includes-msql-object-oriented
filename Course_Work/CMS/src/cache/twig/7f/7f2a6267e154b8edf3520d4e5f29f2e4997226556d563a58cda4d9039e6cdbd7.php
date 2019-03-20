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

/* admin/admin_edit_comment.html.twig */
class __TwigTemplate_b6c5035276ae62d5194003dd016b7e3bfa707f6d79a9c4bd15d955d088130154 extends \Twig\Template
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
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "
    <div class=\"docs-section\">
        <h1>Comment Section</h1>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-comment"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"comment_author\">Author</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"comment_author\" name=\"comment_author\"
                           value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment_data"] ?? null), "comment_author", []), "html", null, true);
        echo "\">
                </div>
                <div class=\"six columns\">
                    <label for=\"comment_email\">Email</label>
                    <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\"
                           name=\"comment_email\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment_data"] ?? null), "comment_email", []), "html", null, true);
        echo "\">
                </div>
            </div>
            <label for=\"comment_content\">Comment</label>
            <textarea class=\"u-full-width\" id=\"comment_content\"
                      name=\"comment_content\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment_data"] ?? null), "comment_content", []), "html", null, true);
        echo "</textarea>
            <input type=\"hidden\" name=\"comment_post_id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment_data"] ?? null), "comment_post_id", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"comment_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment_data"] ?? null), "comment_id", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
            <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
        </form>
        ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 29
            echo "            <div>";
            // line 30
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            // line 31
            echo "</div>
        ";
        }
        // line 33
        echo "    </div>
</div>
";
        // line 35
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_edit_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  102 => 33,  98 => 31,  96 => 30,  94 => 29,  92 => 28,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  62 => 16,  54 => 11,  46 => 6,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>Comment Section</h1>
        <form action=\"{{ path_for('admin-edit-comment') }}\" method=\"post\">
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"comment_author\">Author</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"comment_author\" name=\"comment_author\"
                           value=\"{{ comment_data.comment_author }}\">
                </div>
                <div class=\"six columns\">
                    <label for=\"comment_email\">Email</label>
                    <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\"
                           name=\"comment_email\" value=\"{{ comment_data.comment_email }}\">
                </div>
            </div>
            <label for=\"comment_content\">Comment</label>
            <textarea class=\"u-full-width\" id=\"comment_content\"
                      name=\"comment_content\">{{- comment_data.comment_content -}}</textarea>
            <input type=\"hidden\" name=\"comment_post_id\" value=\"{{ comment_data.comment_post_id }}\">
            <input type=\"hidden\" name=\"comment_id\" value=\"{{ comment_data.comment_id }}\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
            <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
        </form>
        {% if error is defined %}
            <div>
                {{- error -}}
            </div>
        {% endif %}
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_edit_comment.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_edit_comment.html.twig");
    }
}
