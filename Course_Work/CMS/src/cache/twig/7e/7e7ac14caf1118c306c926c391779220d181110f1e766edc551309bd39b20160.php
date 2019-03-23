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

/* login/login.html.twig */
class __TwigTemplate_0d671f49692146582e927cd5846fc532d50750fa7bb6288f68dcf09a187a55df extends \Twig\Template
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
        // line 4
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "

    <form method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login-user"), "html", null, true);
        echo "\">
        <div class=\"form-group row\">
            <label for=\"user_username\" class=\"col-sm-2 col-form-label\">Username</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_username\" placeholder=\"Username\" name=\"user_username\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_password\" class=\"col-sm-2 col-form-label\">Password</label>
            <div class=\"col-sm-10\">
                <input type=\"password\" class=\"form-control\"
                       id=\"user_password\" placeholder=\"Password\" name=\"user_password\">
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"col-sm-10\">
                <input class=\"btn btn-outline-dark\" type=\"submit\" value=\"Sign in\">
            </div>
        </div>

        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">

        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("registration-form"), "html", null, true);
        echo "\" class=\"btn btn-outline-dark\">Register here</a>

    </form>

</div>
";
        // line 37
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  81 => 32,  76 => 30,  72 => 29,  46 => 6,  41 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">

    {{ include('nav.html.twig') }}

    <form method=\"post\" action=\"{{ path_for('login-user') }}\">
        <div class=\"form-group row\">
            <label for=\"user_username\" class=\"col-sm-2 col-form-label\">Username</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_username\" placeholder=\"Username\" name=\"user_username\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_password\" class=\"col-sm-2 col-form-label\">Password</label>
            <div class=\"col-sm-10\">
                <input type=\"password\" class=\"form-control\"
                       id=\"user_password\" placeholder=\"Password\" name=\"user_password\">
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"col-sm-10\">
                <input class=\"btn btn-outline-dark\" type=\"submit\" value=\"Sign in\">
            </div>
        </div>

        <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">

        <a href=\"{{ path_for('registration-form') }}\" class=\"btn btn-outline-dark\">Register here</a>

    </form>

</div>
{{ include('footer.html') }}", "login/login.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/login/login.html.twig");
    }
}
