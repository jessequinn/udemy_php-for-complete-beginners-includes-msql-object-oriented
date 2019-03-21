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

/* admin/admin_users.html.twig */
class __TwigTemplate_2f99fa12852663943cbb880bd8af3fcdaabc4839e9e56f0d35fbaa03edcac1c0 extends \Twig\Template
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
        <table class=\"table table-sm table-hover table-dark\">
            <thead>
            <tr>
                ";
        // line 9
        echo "                <th scope=\"col\">Username</th>
                <th scope=\"col\">Firstname</th>
                <th scope=\"col\">Lastname</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Role</th>
                <th scope=\"col\">Approve</th>
                <th scope=\"col\">Unapprove</th>
                <th scope=\"col\" colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 21
        if ((isset($context["users"]) || array_key_exists("users", $context))) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 23
                echo "                    <tr>
                        ";
                // line 25
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_username", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_firstname", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_lastname", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_email", []), "html", null, true);
                echo "</td>
                        <td><img width=\"100%\" src=\"../images/users/";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "post_img", []), "html", null, true);
                echo "\" alt=\"image\"></td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_role", []), "html", null, true);
                echo "</td>
                        <td><a href=\"/admin/users/approve/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []), "html", null, true);
                echo "\">Approve</a></td>
                        <td><a href=\"/admin/users/unapprove/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []), "html", null, true);
                echo "\">Unapprove</a></td>
                        <td><a href=\"/admin/users/edit/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []), "html", null, true);
                echo "\">Edit</a></td>
                        <td><a href=\"/admin/users/delete/";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []), "html", null, true);
                echo "\">Delete</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 42
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 43
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 44
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 45
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 52
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 53
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 54
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 59
        echo "</div>
";
        // line 60
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  156 => 59,  149 => 54,  147 => 53,  145 => 52,  143 => 51,  140 => 50,  133 => 45,  131 => 44,  129 => 43,  127 => 42,  121 => 38,  118 => 37,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  72 => 25,  69 => 23,  64 => 22,  62 => 21,  48 => 9,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html.twig') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <table class=\"table table-sm table-hover table-dark\">
            <thead>
            <tr>
                {#<th scope=\"col>ID</th>#}
                <th scope=\"col\">Username</th>
                <th scope=\"col\">Firstname</th>
                <th scope=\"col\">Lastname</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Role</th>
                <th scope=\"col\">Approve</th>
                <th scope=\"col\">Unapprove</th>
                <th scope=\"col\" colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            {% if users is defined %}
                {% for u in users %}
                    <tr>
                        {#<td>{{ u.user_id }}</td>#}
                        <td>{{ u.user_username }}</td>
                        <td>{{ u.user_firstname }}</td>
                        <td>{{ u.user_lastname }}</td>
                        <td>{{ u.user_email }}</td>
                        <td><img width=\"100%\" src=\"../images/users/{{ u.post_img }}\" alt=\"image\"></td>
                        <td>{{ u.user_role }}</td>
                        <td><a href=\"/admin/users/approve/{{ u.user_id }}\">Approve</a></td>
                        <td><a href=\"/admin/users/unapprove/{{ u.user_id }}\">Unapprove</a></td>
                        <td><a href=\"/admin/users/edit/{{ u.user_id }}\">Edit</a></td>
                        <td><a href=\"/admin/users/delete/{{ u.user_id }}\">Delete</a></td>
                    </tr>
                {% endfor %}
            {% endif %}
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
{{ include('admin/admin_footer.html') }}", "admin/admin_users.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_users.html.twig");
    }
}
