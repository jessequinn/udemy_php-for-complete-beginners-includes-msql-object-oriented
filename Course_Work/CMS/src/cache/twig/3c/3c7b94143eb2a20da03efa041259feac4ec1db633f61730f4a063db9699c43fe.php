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
class __TwigTemplate_192cd7d9243141f3a6fb4d03e5a68a9337866476f136667ef13d6b669a052269 extends \Twig\Template
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
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/login\">login</a></li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
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
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/login\">login</a></li>
        </ul>
    </div>
</nav>", "nav.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/nav.html.twig");
    }
}
