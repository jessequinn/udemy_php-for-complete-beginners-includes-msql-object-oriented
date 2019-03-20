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

/* admin/admin_edit_user.html.twig */
class __TwigTemplate_460e5711908685be0db729f30b050e5c94fc32d03b632a2aca4003f7036dd59b extends \Twig\Template
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
        <h1>User Section</h1>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-user"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_username\" name=\"user_username\"
                           value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_username", []), "html", null, true);
        echo "\">
                </div>
                <div class=\"four columns\">
                    <label for=\"user_role\">Role</label>
                    <select class=\"u-full-width\" id=\"user_role\" name=\"user_role\">
                        ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_role", []) == "Admin")) {
            // line 17
            echo "                            <option value=\"Admin\" selected>Admin</option>
                            <option value=\"Subscriber\">Subscriber</option>
                        ";
        } else {
            // line 20
            echo "                            <option value=\"Admin\">Admin</option>
                            <option value=\"Subscriber\" selected>Subscriber</option>
                        ";
        }
        // line 23
        echo "                    </select>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 28
        echo "                <label for=\"user_password\">Password</label>
                <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\"
                       value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_password", []), "html", null, true);
        echo "\">
                ";
        // line 32
        echo "                ";
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        // line 36
        echo "            </div>
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_firstname\">Firstname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_firstname\" name=\"user_firstname\"
                           value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_firstname", []), "html", null, true);
        echo "\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_lastname\">Lastname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_lastname\" name=\"user_lastname\"
                           value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_lastname", []), "html", null, true);
        echo "\">
                </div>
            </div>
            <label for=\"user_email\">Email</label>
            <input class=\"u-full-width\" type=\"email\" id=\"user_email\" name=\"user_email\"
                   value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_email", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "user_id", []), "html", null, true);
        echo "\">
            <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit User\">
        </form>
        ";
        // line 57
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 58
            echo "            <div>";
            // line 59
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            // line 60
            echo "</div>
        ";
        }
        // line 62
        echo "    </div>
</div>
";
        // line 64
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 64,  147 => 62,  143 => 60,  141 => 59,  139 => 58,  137 => 57,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  111 => 46,  103 => 41,  96 => 36,  94 => 35,  92 => 34,  90 => 33,  88 => 32,  84 => 30,  80 => 28,  74 => 23,  69 => 20,  64 => 17,  62 => 16,  54 => 11,  46 => 6,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>User Section</h1>
        <form action=\"{{ path_for('admin-edit-user') }}\" method=\"post\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_username\" name=\"user_username\"
                           value=\"{{ user_data.user_username }}\">
                </div>
                <div class=\"four columns\">
                    <label for=\"user_role\">Role</label>
                    <select class=\"u-full-width\" id=\"user_role\" name=\"user_role\">
                        {% if user_data.user_role == 'Admin' %}
                            <option value=\"Admin\" selected>Admin</option>
                            <option value=\"Subscriber\">Subscriber</option>
                        {% else %}
                            <option value=\"Admin\">Admin</option>
                            <option value=\"Subscriber\" selected>Subscriber</option>
                        {% endif %}
                    </select>
                </div>
            </div>
            <div class=\"row\">
                {#<div class=\"six columns\">#}
                <label for=\"user_password\">Password</label>
                <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\"
                       value=\"{{ user_data.user_password }}\">
                {#</div>#}
                {#<div class=\"six columns\">#}
                {#<label for=\"user_password\">Password</label>#}
                {#<input class=\"u-full-width\" type=\"password\" id=\"user_username\" name=\"user_username\">#}
                {#</div>#}
            </div>
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_firstname\">Firstname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_firstname\" name=\"user_firstname\"
                           value=\"{{ user_data.user_firstname }}\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_lastname\">Lastname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_lastname\" name=\"user_lastname\"
                           value=\"{{ user_data.user_lastname }}\">
                </div>
            </div>
            <label for=\"user_email\">Email</label>
            <input class=\"u-full-width\" type=\"email\" id=\"user_email\" name=\"user_email\"
                   value=\"{{ user_data.user_email }}\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
            <input type=\"hidden\" name=\"user_id\" value=\"{{ user_data.user_id }}\">
            <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit User\">
        </form>
        {% if error is defined %}
            <div>
                {{- error -}}
            </div>
        {% endif %}
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_edit_user.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_edit_user.html.twig");
    }
}
