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

/* admin/admin_index.html.twig */
class __TwigTemplate_53ea1a931709dc630db142f30ec1924ef3c3f08ed0e0c541dee937d274312f34 extends \Twig\Template
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
        echo twig_include($this->env, $context, "admin/admin_header.html");
        echo "
<div class=\"container\">
    ";
        // line 3
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "
    <div class=\"docs-section\">
        <h1>Admin Section</h1>
        <p>Hello ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_firstname", []));
        echo "!</p>
        <hr>
        ";
        // line 8
        echo twig_include($this->env, $context, "admin/admin_widgets.html.twig");
        echo "
        <div id=\"columnchart_material\" style=\"width: 800px; height: 500px;\"></div>
    </div>
</div>
";
        // line 12
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  46 => 6,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>Admin Section</h1>
        <p>Hello {{ session.user_firstname|e }}!</p>
        <hr>
        {{ include('admin/admin_widgets.html.twig') }}
        <div id=\"columnchart_material\" style=\"width: 800px; height: 500px;\"></div>
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_index.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_index.html.twig");
    }
}
