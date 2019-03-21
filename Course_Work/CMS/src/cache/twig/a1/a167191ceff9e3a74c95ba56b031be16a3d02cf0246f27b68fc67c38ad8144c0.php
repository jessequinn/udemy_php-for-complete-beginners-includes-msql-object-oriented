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

/* admin/admin_add_user.html.twig */
class __TwigTemplate_2e78373cb214d64572aeb1f19c1bc5d5bfc13e874a401efd15786ca7ed15a6d5 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-add-user"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_username\" name=\"user_username\">
                </div>
                <div class=\"four columns\">
                    <label for=\"user_role\">Role</label>
                    <select class=\"u-full-width\" id=\"user_role\" name=\"user_role\">
                        <option value=\"Admin\">Admin</option>
                        <option value=\"Subscriber\">Subscriber</option>
                    </select>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 22
        echo "                <label for=\"user_password\">Password</label>
                <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\">
                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "                ";
        // line 28
        echo "                ";
        // line 29
        echo "            </div>
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_firstname\">Firstname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_firstname\" name=\"user_firstname\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_lastname\">Lastname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_lastname\" name=\"user_lastname\">
                </div>
            </div>
            <label for=\"user_email\">Email</label>
            <input class=\"u-full-width\" type=\"email\" id=\"user_email\" name=\"user_email\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
            <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add User\">
        </form>
        ";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 47
            echo "            <div>";
            // line 48
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            // line 49
            echo "</div>
        ";
        }
        // line 51
        echo "    </div>
</div>
";
        // line 53
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_add_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  111 => 51,  107 => 49,  105 => 48,  103 => 47,  101 => 46,  95 => 43,  91 => 42,  76 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  64 => 22,  46 => 6,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>User Section</h1>
        <form action=\"{{ path_for('admin-add-user') }}\" method=\"post\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_username\" name=\"user_username\">
                </div>
                <div class=\"four columns\">
                    <label for=\"user_role\">Role</label>
                    <select class=\"u-full-width\" id=\"user_role\" name=\"user_role\">
                        <option value=\"Admin\">Admin</option>
                        <option value=\"Subscriber\">Subscriber</option>
                    </select>
                </div>
            </div>
            <div class=\"row\">
                {#<div class=\"six columns\">#}
                <label for=\"user_password\">Password</label>
                <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\">
                {#</div>#}
                {#<div class=\"six columns\">#}
                {#<label for=\"user_password\">Password</label>#}
                {#<input class=\"u-full-width\" type=\"password\" id=\"user_username\" name=\"user_username\">#}
                {#</div>#}
            </div>
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_firstname\">Firstname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_firstname\" name=\"user_firstname\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_lastname\">Lastname</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"user_lastname\" name=\"user_lastname\">
                </div>
            </div>
            <label for=\"user_email\">Email</label>
            <input class=\"u-full-width\" type=\"email\" id=\"user_email\" name=\"user_email\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
            <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add User\">
        </form>
        {% if error is defined %}
            <div>
                {{- error -}}
            </div>
        {% endif %}
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_add_user.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_add_user.html.twig");
    }
}
