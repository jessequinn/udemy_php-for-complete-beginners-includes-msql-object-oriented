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

/* admin/admin_widgets.html.twig */
class __TwigTemplate_cac631e4ff51b8535039dccb5151b5fb5386a49f605fb5ab60140993ffc357ca extends \Twig\Template
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
        echo "<div class=\"card-group\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-file-alt fa-3x\"></i></span>
                <h5 class=\"float-right\">Posts</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">";
        // line 10
        echo twig_escape_filter($this->env, ($context["published_post_count"] ?? null), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-posts"), "html", null, true);
        echo "\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-comments fa-3x\"></i></span>
                <h5 class=\"float-right\">Comments</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">";
        // line 29
        echo twig_escape_filter($this->env, ($context["approved_comment_count"] ?? null), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-comments"), "html", null, true);
        echo "\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-user fa-3x\"></i></span>
                <h5 class=\"float-right\">Users</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">";
        // line 48
        echo twig_escape_filter($this->env, (($context["admin_user_count"] ?? null) + ($context["subscriber_user_count"] ?? null)), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-users"), "html", null, true);
        echo "\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-list fa-3x\"></i></span>
                <h5 class=\"float-right\">Categories</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">";
        // line 67
        echo twig_escape_filter($this->env, ($context["category_count"] ?? null), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-categories"), "html", null, true);
        echo "\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/admin_widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 71,  121 => 67,  103 => 52,  96 => 48,  78 => 33,  71 => 29,  53 => 14,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-group\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-file-alt fa-3x\"></i></span>
                <h5 class=\"float-right\">Posts</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">{{ published_post_count }}</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"{{ path_for('admin-list-posts') }}\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-comments fa-3x\"></i></span>
                <h5 class=\"float-right\">Comments</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">{{ approved_comment_count }}</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"{{ path_for('admin-list-comments') }}\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-user fa-3x\"></i></span>
                <h5 class=\"float-right\">Users</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">{{ admin_user_count + subscriber_user_count }}</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"{{ path_for('admin-list-users') }}\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-title\">
                <span class=\"float-left\"><i class=\"fa fa-list fa-3x\"></i></span>
                <h5 class=\"float-right\">Categories</h5>
            </div>
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-text text-center \">{{ category_count }}</h4>
        </div>
        <div class=\"card-footer\">
            <small class=\"text-muted\">
                <a href=\"{{ path_for('admin-list-categories') }}\">
                    <span class=\"float-left\">View Details</span>
                    <span class=\"float-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                </a>
            </small>
        </div>
    </div>
</div>", "admin/admin_widgets.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_widgets.html.twig");
    }
}
