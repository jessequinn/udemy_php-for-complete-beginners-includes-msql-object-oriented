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

/* admin/admin_posts.html.twig */
class __TwigTemplate_1dc3b314fd3f4cbd16a128c767f9d922da796de04ee6e1ab923d01c9b80274dd extends \Twig\Template
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
    <form class=\"form-inline\" method=\"post\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-mass-post-manipulation"), "html", null, true);
        echo "\">
        <div class=\"form-group mb-2\">
            <select class=\"form-control\" name=\"select_option\">
                <option selected>Selection Options</option>
                <option value=\"Published\">Publish</option>
                <option value=\"Draft\">Draft</option>
                <option value=\"Delete\">Delete</option>
            </select>
        </div>
        <input type=\"submit\" class=\"btn btn-default mb-2\" name=\"submit\" value=\"Apply\">
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-add-post-form"), "html", null, true);
        echo "\" class=\"btn btn-default mb-2\">Add New</a>

        <table class=\"table table-sm table-hover table-white\">
            <thead>
            <tr>
                ";
        // line 39
        echo "                <th scope=\"col\">
                    <input type=\"checkbox\" value=\"\" id=\"selectAllCheckbox\">
                </th>
                <th scope=\"col\">Author</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Category</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Tags</th>
                <th scope=\"col\">Comments</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">View Post</th>
                <th scope=\"col\" colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 56
            echo "                <tr>
                    ";
            // line 58
            echo "                    <td scope=\"col\">
                        <input class=\"checkboxes\" type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []));
            echo "\" name=\"checkboxArray[]\">
                    </td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_author", []));
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []));
            echo "</td>
                    <td>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 65
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []) == twig_get_attribute($this->env, $this->source, $context["p"], "post_category_id", []))) {
                    // line 66
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []));
                    echo "
                            ";
                }
                // line 68
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_status", []));
            echo "</td>
                    <td><img width=\"100%\" src=\"../images/";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_img", []));
            echo "\" alt=\"image\"></td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_tags", []));
            echo "</td>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_comment_count", []));
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_date", []));
            echo "</td>
                    <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("blog-list-post", ["id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []))]), "html", null, true);
            echo "\">View</a></td>
                    <td><a href=\"/admin/posts/edit/";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []));
            echo "\">Edit</a></td>
                    <td><a href=\"/admin/posts/delete/";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []));
            echo "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
        </table>
        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
    </form>

</div>
";
        // line 87
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 87,  207 => 83,  203 => 82,  199 => 80,  190 => 77,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  170 => 72,  166 => 71,  162 => 70,  159 => 69,  153 => 68,  147 => 66,  144 => 65,  140 => 64,  135 => 62,  131 => 61,  126 => 59,  123 => 58,  120 => 56,  116 => 55,  98 => 39,  90 => 33,  77 => 23,  74 => 22,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  58 => 13,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  40 => 3,  35 => 1,);
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

    <form class=\"form-inline\" method=\"post\" action=\"{{ path_for('admin-mass-post-manipulation') }}\">
        <div class=\"form-group mb-2\">
            <select class=\"form-control\" name=\"select_option\">
                <option selected>Selection Options</option>
                <option value=\"Published\">Publish</option>
                <option value=\"Draft\">Draft</option>
                <option value=\"Delete\">Delete</option>
            </select>
        </div>
        <input type=\"submit\" class=\"btn btn-default mb-2\" name=\"submit\" value=\"Apply\">
        <a href=\"{{ path_for('admin-add-post-form') }}\" class=\"btn btn-default mb-2\">Add New</a>

        <table class=\"table table-sm table-hover table-white\">
            <thead>
            <tr>
                {#<th scope=\"col\">ID</th>#}
                <th scope=\"col\">
                    <input type=\"checkbox\" value=\"\" id=\"selectAllCheckbox\">
                </th>
                <th scope=\"col\">Author</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Category</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Tags</th>
                <th scope=\"col\">Comments</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">View Post</th>
                <th scope=\"col\" colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            {% for p in posts %}
                <tr>
                    {#<td>{{ p.post_id }}</td>#}
                    <td scope=\"col\">
                        <input class=\"checkboxes\" type=\"checkbox\" value=\"{{ p.post_id|e }}\" name=\"checkboxArray[]\">
                    </td>
                    <td>{{ p.post_author|e }}</td>
                    <td>{{ p.post_title|e }}</td>
                    <td>
                        {% for c in categories %}
                            {% if c.cat_id == p.post_category_id %}
                                {{ c.cat_title|e }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ p.post_status|e }}</td>
                    <td><img width=\"100%\" src=\"../images/{{ p.post_img|e }}\" alt=\"image\"></td>
                    <td>{{ p.post_tags|e }}</td>
                    <td>{{ p.post_comment_count|e }}</td>
                    <td>{{ p.post_date|e }}</td>
                    <td><a href=\"{{ path_for('blog-list-post', { 'id': p.post_id|e }) }}\">View</a></td>
                    <td><a href=\"/admin/posts/edit/{{ p.post_id|e }}\">Edit</a></td>
                    <td><a href=\"/admin/posts/delete/{{ p.post_id|e }}\">Delete</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
    </form>

</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_posts.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_posts.html.twig");
    }
}
