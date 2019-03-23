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

/* admin/admin_add_post.html.twig */
class __TwigTemplate_8f807393bc17447f904093385815a2c089c9c396bd0dd77468c838fba37c827e extends \Twig\Template
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
        echo twig_include($this->env, $context, "admin/admin_header.html.twig");
        echo "
<div class=\"container\">
    ";
        // line 3
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "

    ";
        // line 5
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 6
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 8
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 15
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 16
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 17
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 22
        echo "
    <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-add-post"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"post_title\">Title</label>
            <input class=\"form-control\" type=\"text\" id=\"post_title\" name=\"post_title\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_category\">Category</label>
            <select class=\"form-control\" id=\"post_category\" name=\"post_category\">
                ";
        // line 31
        if ((isset($context["categories"]) || array_key_exists("categories", $context))) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 33
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
        }
        // line 36
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"post_author\">Author</label>
            <input class=\"form-control\" type=\"text\" id=\"post_title\" name=\"post_author\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_status\">Status</label>
            <select class=\"form-control\" id=\"post_status\" name=\"post_status\">
                <option value=\"Draft\">Draft</option>
                <option value=\"Published\">Publish</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"post_img\">Image</label>
            <input type=\"file\" class=\"form-control-file\" id=\"post_img\" name=\"post_img\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_tags\">Tags</label>
            <input class=\"form-control\" type=\"text\" id=\"post_tags\" name=\"post_tags\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_content\">Content</label>
            <textarea class=\"form-control\" name=\"post_content\" id=\"post_content\"></textarea>
        </div>
        <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"submit\" value=\"Add Post\">
        <a class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-posts", ["error" => "", "message" => ""]), "html", null, true);
        // line 65
        echo "\">Return to list of posts</a>
    </form>
</div>
";
        // line 68
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_add_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 68,  139 => 65,  137 => 62,  109 => 36,  106 => 35,  95 => 33,  90 => 32,  88 => 31,  77 => 23,  74 => 22,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  58 => 13,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html.twig') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}

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

    <form action=\"{{ path_for('admin-add-post') }}\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"post_title\">Title</label>
            <input class=\"form-control\" type=\"text\" id=\"post_title\" name=\"post_title\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_category\">Category</label>
            <select class=\"form-control\" id=\"post_category\" name=\"post_category\">
                {% if categories is defined %}
                    {% for c in categories %}
                        <option value=\"{{ c.cat_id }}\">{{ c.cat_title }}</option>
                    {% endfor %}
                {% endif %}
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"post_author\">Author</label>
            <input class=\"form-control\" type=\"text\" id=\"post_title\" name=\"post_author\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_status\">Status</label>
            <select class=\"form-control\" id=\"post_status\" name=\"post_status\">
                <option value=\"Draft\">Draft</option>
                <option value=\"Published\">Publish</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"post_img\">Image</label>
            <input type=\"file\" class=\"form-control-file\" id=\"post_img\" name=\"post_img\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_tags\">Tags</label>
            <input class=\"form-control\" type=\"text\" id=\"post_tags\" name=\"post_tags\">
        </div>
        <div class=\"form-group\">
            <label for=\"post_content\">Content</label>
            <textarea class=\"form-control\" name=\"post_content\" id=\"post_content\"></textarea>
        </div>
        <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"submit\" value=\"Add Post\">
        <a class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"{{ path_for('admin-list-posts', {
            'error': '',
            'message': '',
        }) }}\">Return to list of posts</a>
    </form>
</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_add_post.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_add_post.html.twig");
    }
}
