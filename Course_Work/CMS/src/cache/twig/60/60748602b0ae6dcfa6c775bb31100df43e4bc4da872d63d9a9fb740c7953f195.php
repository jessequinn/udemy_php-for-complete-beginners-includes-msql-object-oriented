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
class __TwigTemplate_f195f4cf452139950a9177252bfd7f9825cf5a0cf165501aa544b5f3754bffd5 extends \Twig\Template
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
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
    <div class=\"docs-section\">
        <form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("login-user"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\"  id=\"user_username\" name=\"user_username\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_password\">Password</label>
                    <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\">
                </div>
            </div>
            <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
            <input class=\"button-primary\" type=\"submit\" value=\"Login\">
        </form>
    </div>
</div>
";
        // line 22
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
        return array (  71 => 22,  63 => 17,  59 => 16,  45 => 5,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('nav.html.twig') }}
    <div class=\"docs-section\">
        <form method=\"post\" action=\"{{ path_for('login-user') }}\">
            <div class=\"row\">
                <div class=\"six columns\">
                    <label for=\"user_username\">Username</label>
                    <input class=\"u-full-width\" type=\"text\"  id=\"user_username\" name=\"user_username\">
                </div>
                <div class=\"six columns\">
                    <label for=\"user_password\">Password</label>
                    <input class=\"u-full-width\" type=\"password\" id=\"user_password\" name=\"user_password\">
                </div>
            </div>
            <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
            <input class=\"button-primary\" type=\"submit\" value=\"Login\">
        </form>
    </div>
</div>
{{ include('footer.html') }}", "login/login.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/login/login.html.twig");
    }
}
