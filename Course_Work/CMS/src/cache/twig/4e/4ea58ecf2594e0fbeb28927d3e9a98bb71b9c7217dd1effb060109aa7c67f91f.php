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

/* admin/admin_edit_post.html.twig */
class __TwigTemplate_0bc1396b54cd18c92f3c6b54e1e8c7aa44a62677c7b6cccb7289068b5adf83ba extends \Twig\Template
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
        echo twig_include($this->env, $context, "admin/admin_header.html.twig");
        echo "
<div class=\"container\">
    ";
        // line 3
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "

    ";
        // line 5
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 6
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 8
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 15
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 16
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 17
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 22
        echo "
    <div class=\"container\">
        <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-edit-post"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"post_title\">Title</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_title\" name=\"post_title\"
                       value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_title", []), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_category\">Category</label>
                <select class=\"form-control\" id=\"post_category\" name=\"post_category\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 35
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
            echo "\"
                                ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []) == twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_category_id", []))) {
                // line 37
                echo "                                    ";
                echo "selected";
                echo "
                                ";
            }
            // line 39
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"post_author\">Author</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_title\" name=\"post_author\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_author", []), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_status\">Status</label>
                <select class=\"form-control\" id=\"post_status\" name=\"post_status\">
                    <option value=\"Draft\"
                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_status", []) == "Draft")) {
            // line 53
            echo "                                ";
            echo "selected";
            echo "
                            ";
        }
        // line 55
        echo "                    >Draft
                    </option>
                    <option value=\"Published\"
                            ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_status", []) == "Published")) {
            // line 59
            echo "                                ";
            echo "selected";
            echo "
                            ";
        }
        // line 61
        echo "                    >Published
                    </option>
                </select>
            </div>
            <input type=\"hidden\" name=\"post_img_org\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_img", []), "html", null, true);
        echo "\">
            <img src=\"/images/";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_img", []), "html", null, true);
        echo "\" alt=\"image\">
            <input type=\"hidden\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_id", []), "html", null, true);
        echo "\" name=\"post_id\">
            <div class=\"form-group\">
                <label for=\"post_img\">Image</label>
                <input type=\"file\" class=\"form-control-file\" id=\"post_img\" name=\"post_img\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_tags\">Tags</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_tags\" name=\"post_tags\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_tags", []));
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_content\">Content</label>
                <textarea class=\"form-control\"
                          name=\"post_content\" id=\"post_content\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_data"] ?? null), "post_content", []));
        echo "</textarea>
            </div>
            <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"submit\" value=\"Edit Post\">
            <button class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("admin-list-posts", ["error" => "", "message" => ""]), "html", null, true);
        // line 86
        echo "\">Return to list of posts
            </button>
        </form>
    </div>

</div>
";
        // line 92
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_edit_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 92,  198 => 86,  196 => 83,  190 => 80,  182 => 75,  171 => 67,  167 => 66,  163 => 65,  157 => 61,  151 => 59,  149 => 58,  144 => 55,  138 => 53,  136 => 52,  127 => 46,  120 => 41,  111 => 39,  105 => 37,  103 => 36,  98 => 35,  94 => 34,  86 => 29,  78 => 24,  74 => 22,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  58 => 13,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html.twig') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}

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

    <div class=\"container\">
        <form action=\"{{ path_for('admin-edit-post') }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"post_title\">Title</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_title\" name=\"post_title\"
                       value=\"{{ post_data.post_title }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_category\">Category</label>
                <select class=\"form-control\" id=\"post_category\" name=\"post_category\">
                    {% for c in categories %}
                        <option value=\"{{ c.cat_id }}\"
                                {% if c.cat_id == post_data.post_category_id %}
                                    {{ 'selected' }}
                                {% endif %}
                        >{{ c.cat_title }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"post_author\">Author</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_title\" name=\"post_author\" value=\"{{ post_data.post_author }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_status\">Status</label>
                <select class=\"form-control\" id=\"post_status\" name=\"post_status\">
                    <option value=\"Draft\"
                            {% if post_data.post_status == 'Draft' %}
                                {{ 'selected' }}
                            {% endif %}
                    >Draft
                    </option>
                    <option value=\"Published\"
                            {% if post_data.post_status == 'Published' %}
                                {{ 'selected' }}
                            {% endif %}
                    >Published
                    </option>
                </select>
            </div>
            <input type=\"hidden\" name=\"post_img_org\" value=\"{{ post_data.post_img }}\">
            <img src=\"/images/{{ post_data.post_img }}\" alt=\"image\">
            <input type=\"hidden\" value=\"{{ post_data.post_id }}\" name=\"post_id\">
            <div class=\"form-group\">
                <label for=\"post_img\">Image</label>
                <input type=\"file\" class=\"form-control-file\" id=\"post_img\" name=\"post_img\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_tags\">Tags</label>
                <input class=\"form-control\" type=\"text\"
                       id=\"post_tags\" name=\"post_tags\" value=\"{{ post_data.post_tags|e }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"post_content\">Content</label>
                <textarea class=\"form-control\"
                          name=\"post_content\" id=\"post_content\">{{ post_data.post_content|e }}</textarea>
            </div>
            <input class=\"btn btn-outline-dark my-2 my-sm-0\" type=\"submit\" name=\"submit\" value=\"Edit Post\">
            <button class=\"btn btn-outline-dark my-2 my-sm-0\" href=\"{{ path_for('admin-list-posts', {
                'error': '',
                'message': '',
            }) }}\">Return to list of posts
            </button>
        </form>
    </div>

</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_edit_post.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_edit_post.html.twig");
    }
}
