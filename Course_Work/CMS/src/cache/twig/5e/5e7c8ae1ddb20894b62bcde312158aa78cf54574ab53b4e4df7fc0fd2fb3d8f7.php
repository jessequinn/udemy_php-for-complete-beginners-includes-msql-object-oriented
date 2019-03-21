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

/* nav.html.twig */
class __TwigTemplate_98c26511981c0bea5670483daf02d82b071cd35ac531fa6e8d17ba628ff45bd1 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-white border-bottom border-dark\">
    <a class=\"navbar-brand\" href=\"/admin\">
        <i class=\"fab fa-dochub\"></i>ashboard
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
            aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#intro\">Intro</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"resume.html\">Resume</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"publications.html\">Publications</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\"><i class=\"fab fa-blogger-b\"></i>log</a></li>
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_username", [], "any", true, true)) {
            // line 16
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 18
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li>
            ";
        }
        // line 20
        echo "        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  57 => 18,  53 => 16,  51 => 15,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-white border-bottom border-dark\">
    <a class=\"navbar-brand\" href=\"/admin\">
        <i class=\"fab fa-dochub\"></i>ashboard
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\"
            aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#intro\">Intro</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"resume.html\">Resume</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"publications.html\">Publications</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\"><i class=\"fab fa-blogger-b\"></i>log</a></li>
            {% if session.user_username is defined %}
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\">Logout</a></li>
            {% else %}
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/login\">Login</a></li>
            {% endif %}
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>", "nav.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/nav.html.twig");
    }
}
