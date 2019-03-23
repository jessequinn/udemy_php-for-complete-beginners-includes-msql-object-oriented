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
class __TwigTemplate_45d2a61e2fb7908c8a0fd081a29688b378e010575f6695f15024bdb8a326c922 extends \Twig\Template
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
        // line 4
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "

    ";
        // line 6
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 7
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 8
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 9
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 16
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 17
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 18
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 23
        echo "
    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            ";
        // line 28
        echo "            <th scope=\"col\">Username</th>
            <th scope=\"col\">Firstname</th>
            <th scope=\"col\">Lastname</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Role</th>
            <th scope=\"col\">Approve</th>
            <th scope=\"col\">Unapprove</th>
            <th scope=\"col\" colspan=\"2\">Operations</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 39
        if ((isset($context["users"]) || array_key_exists("users", $context))) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 41
                echo "                <tr>
                    ";
                // line 43
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_username", []));
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_firstname", []));
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_lastname", []));
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_email", []));
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_role", []));
                echo "</td>
                    <td><a href=\"/admin/users/approve/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []));
                echo "\">Approve</a></td>
                    <td><a href=\"/admin/users/unapprove/";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []));
                echo "\">Unapprove</a></td>
                    <td><a href=\"/admin/users/edit/";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []));
                echo "\">Edit</a></td>
                    <td><a href=\"/admin/users/delete/";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "user_id", []));
                echo "\">Delete</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "        </tbody>
    </table>

</div>
";
        // line 59
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
        return array (  155 => 59,  149 => 55,  146 => 54,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  104 => 43,  101 => 41,  96 => 40,  94 => 39,  81 => 28,  75 => 23,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  59 => 14,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  41 => 4,  35 => 1,);
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

    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            {#<th scope=\"col>ID</th>#}
            <th scope=\"col\">Username</th>
            <th scope=\"col\">Firstname</th>
            <th scope=\"col\">Lastname</th>
            <th scope=\"col\">Email</th>
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
                    <td>{{ u.user_username|e }}</td>
                    <td>{{ u.user_firstname|e }}</td>
                    <td>{{ u.user_lastname|e }}</td>
                    <td>{{ u.user_email|e }}</td>
                    <td>{{ u.user_role|e }}</td>
                    <td><a href=\"/admin/users/approve/{{ u.user_id|e }}\">Approve</a></td>
                    <td><a href=\"/admin/users/unapprove/{{ u.user_id|e }}\">Unapprove</a></td>
                    <td><a href=\"/admin/users/edit/{{ u.user_id|e }}\">Edit</a></td>
                    <td><a href=\"/admin/users/delete/{{ u.user_id|e }}\">Delete</a></td>
                </tr>
            {% endfor %}
        {% endif %}
        </tbody>
    </table>

</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_users.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_users.html.twig");
    }
}
