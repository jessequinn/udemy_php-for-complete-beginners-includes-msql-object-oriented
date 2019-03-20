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
        echo "<div class=\"navbar-spacer\"></div>
<nav class=\"navbar\">
    <div class=\"container\">
        <ul class=\"navbar-list\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"#intro\">Intro</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"resume.html\">Resume</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"publications.html\">Publications</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
        </ul>
        <ul class=\"navbar-list u-pull-right\">
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_username", [], "any", true, true)) {
            // line 12
            echo "                <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 14
            echo "                <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/login\">Login</a></li>
            ";
        }
        // line 16
        echo "        </ul>
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
        return array (  57 => 16,  53 => 14,  49 => 12,  47 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-spacer\"></div>
<nav class=\"navbar\">
    <div class=\"container\">
        <ul class=\"navbar-list\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"#intro\">Intro</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"resume.html\">Resume</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"publications.html\">Publications</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
        </ul>
        <ul class=\"navbar-list u-pull-right\">
            {% if session.user_username is defined %}
                <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/logout\">Logout</a></li>
            {% else %}
                <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/login\">Login</a></li>
            {% endif %}
        </ul>
    </div>
</nav>", "nav.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/nav.html.twig");
    }
}
