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
        echo twig_include($this->env, $context, "header.html");
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
            <div class=\"row\">
                <div class=\"six columns\">
                    ";
        // line 10
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 11
            echo "                        <label for=\"cat_title\">Edit Category</label>
                    ";
        } else {
            // line 13
            echo "                        <label for=\"cat_title\">Add Category</label>
                    ";
        }
        // line 15
        echo "                    <input class=\"u-full-width\" type=\"text\" id=\"cat_title\" name=\"cat_title\"
                            ";
        // line 16
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 17
            echo "                                value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_title", []), "html", null, true);
            echo "\"
                            ";
        }
        // line 19
        echo "                    >
                    ";
        // line 20
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 21
            echo "                        <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category_edit"] ?? null), "cat_id", []), "html", null, true);
            echo "\" name=\"cat_id\" id=\"cat_id\">
                    ";
        }
        // line 23
        echo "                </div>
            </div>
            ";
        // line 25
        if ((isset($context["category_edit"]) || array_key_exists("category_edit", $context))) {
            // line 26
            echo "                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
            ";
        } else {
            // line 28
            echo "                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add Category\">
            ";
        }
        // line 30
        echo "        </form>
    </div>
    <div class=\"docs-section\">
        <table class=\"u-full-width\">
            <thead>
            <tr>
                ";
        // line 37
        echo "                <th>Title</th>
                <th colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 43
            echo "                <tr>
                    ";
            // line 45
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
            echo "</td>
                    <td><a href=\"/admin/categories/edit/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Edit</a></td>
                    <td><a href=\"/admin/categories/delete/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>
</div>
";
        // line 54
        echo twig_include($this->env, $context, "footer.html");
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
        return array (  145 => 54,  139 => 50,  130 => 47,  126 => 46,  121 => 45,  118 => 43,  114 => 42,  107 => 37,  99 => 30,  95 => 28,  91 => 26,  89 => 25,  85 => 23,  79 => 21,  77 => 20,  74 => 19,  68 => 17,  66 => 16,  63 => 15,  59 => 13,  55 => 11,  53 => 10,  47 => 7,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>Categories Section</h1>
        <p>You may also edit or delete individual categories.</p>
        <form action=\"{{ path_for('add-update-category') }}\" method=\"post\">
            <div class=\"row\">
                <div class=\"six columns\">
                    {% if category_edit is defined %}
                        <label for=\"cat_title\">Edit Category</label>
                    {% else %}
                        <label for=\"cat_title\">Add Category</label>
                    {% endif %}
                    <input class=\"u-full-width\" type=\"text\" id=\"cat_title\" name=\"cat_title\"
                            {% if category_edit is defined %}
                                value=\"{{ category_edit.cat_title }}\"
                            {% endif %}
                    >
                    {% if category_edit is defined %}
                        <input type=\"hidden\" value=\"{{ category_edit.cat_id }}\" name=\"cat_id\" id=\"cat_id\">
                    {% endif %}
                </div>
            </div>
            {% if category_edit is defined %}
                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit Category\">
            {% else %}
                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add Category\">
            {% endif %}
        </form>
    </div>
    <div class=\"docs-section\">
        <table class=\"u-full-width\">
            <thead>
            <tr>
                {#<th>ID</th>#}
                <th>Title</th>
                <th colspan=\"2\">Operations</th>
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
</div>
{{ include('footer.html') }}", "admin/admin_categories.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_categories.html.twig");
    }
}
