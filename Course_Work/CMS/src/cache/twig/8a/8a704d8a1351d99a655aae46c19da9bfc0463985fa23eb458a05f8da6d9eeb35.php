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

/* admin/admin_nav.html.twig */
class __TwigTemplate_6e560513b479fc403dbe3fdbbf88db61163831e3d74506dead2a071ff1c109e4 extends \Twig\Template
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
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\"><i class=\"fab fa-blogger-b\"></i>log</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/admin/categories\">Categories</a></li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"postsPopover\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Posts
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"postsPopover\">
                    <a class=\"dropdown-item\" href=\"/admin/posts\">View All Posts</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-add-post-form"), "html", null, true);
        echo "\">Add Post</a>
                </div>
            </li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/admin/comments\">Comments</a></li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"usersPopover\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Users
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"usersPopover\">
                    <a class=\"dropdown-item\" href=\"/admin/users\">View All Users</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-add-post-form"), "html", null, true);
        echo "\">Add User</a>
                </div>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userProfile\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_firstname", []), "html", null, true);
        echo "
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"userProfile\">
                    <a class=\"dropdown-item\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-user-form", ["id" => twig_get_attribute($this->env, $this->source,         // line 45
($context["session"] ?? null), "user_id", [])]), "html", null, true);
        // line 46
        echo "\">Edit User</a>
                    <a class=\"dropdown-item\" href=\"/logout\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "admin/admin_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  89 => 45,  88 => 43,  82 => 40,  70 => 31,  56 => 20,  35 => 1,);
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
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\"><i class=\"fab fa-blogger-b\"></i>log</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/admin/categories\">Categories</a></li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"postsPopover\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Posts
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"postsPopover\">
                    <a class=\"dropdown-item\" href=\"/admin/posts\">View All Posts</a>
                    <a class=\"dropdown-item\" href=\"{{ path_for('admin-add-post-form') }}\">Add Post</a>
                </div>
            </li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"/admin/comments\">Comments</a></li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"usersPopover\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Users
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"usersPopover\">
                    <a class=\"dropdown-item\" href=\"/admin/users\">View All Users</a>
                    <a class=\"dropdown-item\" href=\"{{ path_for('admin-add-post-form') }}\">Add User</a>
                </div>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userProfile\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i> {{ session.user_firstname }}
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"userProfile\">
                    <a class=\"dropdown-item\" href=\"{{ path_for('admin-edit-user-form',
                        {
                            'id': session.user_id
                        }) }}\">Edit User</a>
                    <a class=\"dropdown-item\" href=\"/logout\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>", "admin/admin_nav.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_nav.html.twig");
    }
}
