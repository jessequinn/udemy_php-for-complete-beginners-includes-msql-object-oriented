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
class __TwigTemplate_f4a2929f7a910451ba2bb5a1553872f9730e0107a7b9a581176e7af60c3b504a extends \Twig\Template
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
    <div>
        <ul class=\"navbar-list u-pull-left\">
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"/admin\">
                    &nbsp;<i class=\"fab fa-dochub\"></i>ashboard
                </a>
            </li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
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
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_firstname", []), "html", null, true);
        echo "
                </a>
                <div id=\"userProfile\" class=\"popover\">
                    <ul class=\"popover-list\">
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-user-form", ["id" => twig_get_attribute($this->env, $this->source,         // line 50
($context["session"] ?? null), "user_id", [])]), "html", null, true);
        // line 52
        echo "\">Edit User</a>
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
        return array (  90 => 52,  88 => 50,  87 => 48,  79 => 43,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-spacer\"></div>
<nav class=\"navbar\">
    <div>
        <ul class=\"navbar-list u-pull-left\">
            <li class=\"navbar-item\">
                <a class=\"navbar-link\" href=\"/admin\">
                    &nbsp;<i class=\"fab fa-dochub\"></i>ashboard
                </a>
            </li>
            <li class=\"navbar-item\"><a class=\"navbar-link\" href=\"/blog\">Blog</a></li>
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
                            <a class=\"popover-link\" href=\"{{ path_for('admin-edit-user-form',
                                {
                                    'id': session.user_id
                                })
                            }}\">Edit User</a>
                        </li>
                        <li class=\"popover-item\">
                            <a class=\"popover-link\" href=\"/logout\">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>", "admin/admin_nav.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_nav.html.twig");
    }
}
