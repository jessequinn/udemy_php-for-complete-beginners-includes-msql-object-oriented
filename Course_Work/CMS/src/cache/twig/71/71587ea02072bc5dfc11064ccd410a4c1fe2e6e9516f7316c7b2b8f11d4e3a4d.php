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
class __TwigTemplate_507ba44acdc41de91c9fce928ff95b00057f982755a1c70fe739fa311da32247 extends \Twig\Template
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
        <ul class=\"navbar-list u-pull-left\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin\">Dashboard</a></li>
        </ul>
        <ul class=\"navbar-list u-pull-right\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin/categories\">Categories</a></li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#postsPopover\">Posts</a>
                <div id=\"postsPopover\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/posts\">View All Posts</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/posts/add\">Add Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin/comments\">Comments</a></li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#usersPopover\">Users</a>
                <div id=\"usersPopover\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/users\">View All Users</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/users/add\">Add User</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#userProfile\">
                    <i class=\"fas fa-user\"></i> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_firstname", []), "html", null, true);
        echo "
                </a>
                <div id=\"userProfile\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-user-form"), "html", null, true);
        echo "\">View All Users</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/logout\">Logout</a>
                        </li>
                    </ul>
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
        return array (  83 => 44,  75 => 39,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-spacer\"></div>
<nav class=\"navbar\">
    <div class=\"container\">
        <ul class=\"navbar-list u-pull-left\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin\">Dashboard</a></li>
        </ul>
        <ul class=\"navbar-list u-pull-right\">
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin/categories\">Categories</a></li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#postsPopover\">Posts</a>
                <div id=\"postsPopover\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/posts\">View All Posts</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/posts/add\">Add Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/admin/comments\">Comments</a></li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#usersPopover\">Users</a>
                <div id=\"usersPopover\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/users\">View All Users</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/admin/users/add\">Add User</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"#\" data-popover=\"#userProfile\">
                    <i class=\"fas fa-user\"></i> {{ session.user_firstname }}
                </a>
                <div id=\"userProfile\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"{{ path_for('admin-edit-user-form') }}\">View All Users</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/logout\">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>", "admin/admin_nav.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_nav.html.twig");
    }
}
