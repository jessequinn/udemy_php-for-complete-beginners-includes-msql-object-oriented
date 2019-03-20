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
class __TwigTemplate_61b46ef503b7aa37bd0955842004d604522acd2bb9cf9e951172a5fd1d7f9ad5 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"three columns\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-file-alt fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>";
        // line 10
        echo twig_escape_filter($this->env, ($context["post_count"] ?? null), "html", null, true);
        echo "</div>
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-posts"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-comments fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>";
        // line 32
        echo twig_escape_filter($this->env, ($context["comment_count"] ?? null), "html", null, true);
        echo "</div>
                        <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-comments"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-user fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>";
        // line 54
        echo twig_escape_filter($this->env, ($context["user_count"] ?? null), "html", null, true);
        echo "</div>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-users"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-red\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-list fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>";
        // line 76
        echo twig_escape_filter($this->env, ($context["category_count"] ?? null), "html", null, true);
        echo "</div>
                        <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-categories"), "html", null, true);
        echo "\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
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
        return array (  138 => 81,  130 => 76,  110 => 59,  102 => 54,  82 => 37,  74 => 32,  54 => 15,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"three columns\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-file-alt fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>{{ post_count }}</div>
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href=\"{{ path_for('admin-list-posts') }}\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-comments fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>{{ comment_count }}</div>
                        <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href=\"{{ path_for('admin-list-comments') }}\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-user fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>{{ user_count }}</div>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href=\"{{ path_for('admin-list-users') }}\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"three columns\">
        <div class=\"panel panel-red\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"three columns\">
                        <i class=\"fa fa-list fa-3x\"></i>
                    </div>
                    <div class=\"nine columns text-right\">
                        <div class='huge'>{{ category_count }}</div>
                        <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href=\"{{ path_for('admin-list-categories') }}\">
                <div class=\"panel-footer\">
                    <span class=\"u-pull-left\">View Details</span>
                    <span class=\"u-pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"u-cf\"></div>
                </div>
            </a>
        </div>
    </div>
</div>", "admin/admin_widgets.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_widgets.html.twig");
    }
}
