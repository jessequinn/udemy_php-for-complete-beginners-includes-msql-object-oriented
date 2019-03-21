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
class __TwigTemplate_3e65c0762e1b1a07ce1137af18bd4c311e390a775f8bf613fc5e0b34b158ab3c extends \Twig\Template
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
    <div class=\"docs-section\">
        <h1>Categories Section</h1>
        <p>You may also edit or delete individual categories.</p>
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("add-update-category"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"form-group\">
                ";
        // line 9
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 10
            echo "                    <label for=\"cat_title\">Edit Category</label>
                ";
        } else {
            // line 12
            echo "                    <label for=\"cat_title\">Add Category</label>
                ";
        }
        // line 14
        echo "                <input class=\"form-control\" type=\"text\" id=\"cat_title\" name=\"cat_title\"
                        ";
        // line 15
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 16
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_title", []), "html", null, true);
            echo "\"
                        ";
        }
        // line 18
        echo "                >
            </div>
            ";
        // line 20
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 21
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_id", []), "html", null, true);
            echo "\" name=\"cat_id\" id=\"cat_id\">
            ";
        }
        // line 23
        echo "            ";
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 24
            echo "                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
            ";
        } else {
            // line 26
            echo "                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Add Category\">
            ";
        }
        // line 28
        echo "        </form>
    </div>

    <div class=\"docs-section\">
        <table class=\"table table-sm table-hover table-dark\">
            <thead>
            <tr>
                ";
        // line 36
        echo "                <th scope=\"col\">Title</th>
                <th scope=\"col\" colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "                <tr>
                    ";
            // line 44
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
            echo "</td>
                    <td><a href=\"/admin/categories/edit/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Edit</a></td>
                    <td><a href=\"/admin/categories/delete/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 53
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 54
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 56
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 63
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 64
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 65
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 70
        echo "
</div>
";
        // line 72
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
        return array (  176 => 72,  172 => 70,  165 => 65,  163 => 64,  161 => 63,  159 => 62,  156 => 61,  149 => 56,  147 => 55,  145 => 54,  143 => 53,  137 => 49,  128 => 46,  124 => 45,  119 => 44,  116 => 42,  112 => 41,  105 => 36,  96 => 28,  92 => 26,  88 => 24,  85 => 23,  79 => 21,  77 => 20,  73 => 18,  67 => 16,  65 => 15,  62 => 14,  58 => 12,  54 => 10,  52 => 9,  47 => 7,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html.twig') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>Categories Section</h1>
        <p>You may also edit or delete individual categories.</p>
        <form action=\"{{ path_for('add-update-category') }}\" method=\"post\">
            <div class=\"form-group\">
                {% if category_edit is defined %}
                    <label for=\"cat_title\">Edit Category</label>
                {% else %}
                    <label for=\"cat_title\">Add Category</label>
                {% endif %}
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
                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
            {% else %}
                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"Add Category\">
            {% endif %}
        </form>
    </div>

    <div class=\"docs-section\">
        <table class=\"table table-sm table-hover table-dark\">
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
{{ include('admin/admin_footer.html') }}", "admin/admin_categories.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_categories.html.twig");
    }
}
