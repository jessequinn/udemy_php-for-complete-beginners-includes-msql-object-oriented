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

/* registration/registration.html.twig */
class __TwigTemplate_07bee38470b64631cbe7aa6752bf31b800fc30d3ee3aa584095735c42d5872a6 extends \Twig\Template
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
    <form method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("register-user"), "html", null, true);
        echo "\">

        <div class=\"form-group row\">
            <label for=\"user_username\" class=\"col-sm-2 col-form-label\">Username</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_username\" placeholder=\"Username\" name=\"user_username\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_email\" class=\"col-sm-2 col-form-label\">Email</label>
            <div class=\"col-sm-10\">
                <input type=\"email\" class=\"form-control\"
                       id=\"user_email\" placeholder=\"Email\" name=\"user_email\">
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
            <label for=\"user_firstname\" class=\"col-sm-2 col-form-label\">First Name</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_firstname\" placeholder=\"First Name\" name=\"user_firstname\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_lastname\" class=\"col-sm-2 col-form-label\">Last Name</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_lastname\" placeholder=\"Last Name\" name=\"user_lastname\">
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"col-sm-10\">
                <input class=\"btn btn-outline-dark\" type=\"submit\" value=\"Register\">
            </div>
        </div>

        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"user_role\" value=\"Admin\">

    </form>

</div>
";
        // line 79
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 79,  133 => 73,  129 => 72,  78 => 24,  75 => 23,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  59 => 14,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  41 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">

    {{ include('nav.html.twig') }}

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

    <form method=\"post\" action=\"{{ path_for('register-user') }}\">

        <div class=\"form-group row\">
            <label for=\"user_username\" class=\"col-sm-2 col-form-label\">Username</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_username\" placeholder=\"Username\" name=\"user_username\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_email\" class=\"col-sm-2 col-form-label\">Email</label>
            <div class=\"col-sm-10\">
                <input type=\"email\" class=\"form-control\"
                       id=\"user_email\" placeholder=\"Email\" name=\"user_email\">
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
            <label for=\"user_firstname\" class=\"col-sm-2 col-form-label\">First Name</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_firstname\" placeholder=\"First Name\" name=\"user_firstname\">
            </div>
        </div>

        <div class=\"form-group row\">
            <label for=\"user_lastname\" class=\"col-sm-2 col-form-label\">Last Name</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\"
                       id=\"user_lastname\" placeholder=\"Last Name\" name=\"user_lastname\">
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"col-sm-10\">
                <input class=\"btn btn-outline-dark\" type=\"submit\" value=\"Register\">
            </div>
        </div>

        <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
        <input type=\"hidden\" name=\"user_role\" value=\"Admin\">

    </form>

</div>
{{ include('footer.html') }}", "registration/registration.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/registration/registration.html.twig");
    }
}
