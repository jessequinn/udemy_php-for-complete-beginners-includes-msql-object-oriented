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

/* admin/admin_categories.html.twig */
class __TwigTemplate_21f0d2e04a0975efa98f0fb055196fe4faf407dc0806131c3ad3543a188532c1 extends \Twig\Template
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
    <form class=\"form-inline\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("add-update-category"), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group mb-2\">
            <input class=\"form-control\" type=\"text\" id=\"cat_title\" name=\"cat_title\"
                    ";
        // line 26
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 27
            echo "                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_title", []), "html", null, true);
            echo "\"
                    ";
        }
        // line 29
        echo "            >
        </div>
        ";
        // line 31
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 32
            echo "            <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_id", []), "html", null, true);
            echo "\" name=\"cat_id\" id=\"cat_id\">
        ";
        }
        // line 34
        echo "        ";
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 35
            echo "            <input class=\"btn btn-default mb-2\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
        ";
        } else {
            // line 37
            echo "            <input class=\"btn btn-default mb-2\" type=\"submit\" name=\"submit\" value=\"Add Category\">
        ";
        }
        // line 39
        echo "    </form>

    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            ";
        // line 45
        echo "            <th scope=\"col\">Title</th>
            <th scope=\"col\" colspan=\"2\">Operations</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 51
            echo "            <tr>
                ";
            // line 53
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
            echo "</td>
                <td><a href=\"/admin/categories/edit/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Edit</a></td>
                <td><a href=\"/admin/categories/delete/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Delete</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

</div>
";
        // line 62
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  153 => 58,  144 => 55,  140 => 54,  135 => 53,  132 => 51,  128 => 50,  121 => 45,  114 => 39,  110 => 37,  106 => 35,  103 => 34,  97 => 32,  95 => 31,  91 => 29,  85 => 27,  83 => 26,  77 => 23,  74 => 22,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  58 => 13,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  40 => 3,  35 => 1,);
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

    <form class=\"form-inline\" action=\"{{ path_for('add-update-category') }}\" method=\"post\">
        <div class=\"form-group mb-2\">
            <input class=\"form-control\" type=\"text\" id=\"cat_title\" name=\"cat_title\"
                    {% if category_edit is defined %}
                        value=\"{{ category_edit.cat_title }}\"
                    {% endif %}
            >
        </div>
        {% if category_edit is defined %}
            <input type=\"hidden\" value=\"{{ category_edit.cat_id }}\" name=\"cat_id\" id=\"cat_id\">
        {% endif %}
        {% if category_edit is defined %}
            <input class=\"btn btn-default mb-2\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
        {% else %}
            <input class=\"btn btn-default mb-2\" type=\"submit\" name=\"submit\" value=\"Add Category\">
        {% endif %}
    </form>

    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            {#<th>ID</th>#}
            <th scope=\"col\">Title</th>
            <th scope=\"col\" colspan=\"2\">Operations</th>
        </tr>
        </thead>
        <tbody>
        {% for c in categories %}
            <tr>
                {#<td>{{ c.cat_id }}</td>#}
                <td>{{ c.cat_title }}</td>
                <td><a href=\"/admin/categories/edit/{{ c.cat_id }}\">Edit</a></td>
                <td><a href=\"/admin/categories/delete/{{ c.cat_id }}\">Delete</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_categories.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_categories.html.twig");
    }
}
