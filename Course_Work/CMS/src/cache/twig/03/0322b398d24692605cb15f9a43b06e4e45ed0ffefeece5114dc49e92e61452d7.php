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

/* admin/admin_add_post.html.twig */
class __TwigTemplate_f0a20f56958e66c758369dafbccec25307aa58edab82cc1f6a971793c0e13f4d extends \Twig\Template
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
        // line 3
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
        echo "
    <div class=\"docs-section\">
        <h1>Post Section</h1>
        <p>You may also edit or delete individual categories.</p>
        <form action=\"/admin/posts/add\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"post_title\">Title</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"post_title\" name=\"post_title\"
                            ";
        // line 12
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 13
            echo "                                value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_title", []), "html", null, true);
            echo "\"
                            ";
        }
        // line 15
        echo "                    >
                </div>
                <div class=\"four columns\">
                    <label for=\"post_category\">Category</label>
                    <select class=\"u-full-width\" id=\"post_category\" name=\"post_category\">
                        ";
        // line 20
        if ((isset($context["categories"]) || array_key_exists("categories", $context))) {
            // line 21
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 22
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []), "html", null, true);
                echo "\"
                                        ";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []) == twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_category_id", []))) {
                    // line 24
                    echo "                                            ";
                    echo "selected";
                    echo "
                                        ";
                }
                // line 26
                echo "                                >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        ";
        }
        // line 29
        echo "                    </select>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"post_author\">Author</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"post_title\" name=\"post_author\"
                            ";
        // line 36
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 37
            echo "                                value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_author", []), "html", null, true);
            echo "\"
                            ";
        }
        // line 39
        echo "                    >
                </div>
                <div class=\"four columns\">
                    <label for=\"post_status\">Status</label>
                    <select class=\"u-full-width\" id=\"post_status\" name=\"post_status\">
                        <option value=\"Draft\"
                                ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_status", []) == "Draft")) {
            // line 46
            echo "                                    ";
            echo "selected";
            echo "
                                ";
        }
        // line 48
        echo "                        >Draft
                        </option>
                        <option value=\"Published\"
                                ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_status", []) == "Published")) {
            // line 52
            echo "                                    ";
            echo "selected";
            echo "
                                ";
        }
        // line 54
        echo "                        >Published
                        </option>
                    </select>
                </div>
            </div>
            ";
        // line 59
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 60
            echo "                <input type=\"hidden\" name=\"post_img_org\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_img", []), "html", null, true);
            echo "\">
                <img src=\"/images/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_img", []), "html", null, true);
            echo "\" alt=\"image\">
                <input type=\"hidden\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_id", []), "html", null, true);
            echo "\" name=\"post_id\">
            ";
        }
        // line 64
        echo "            <label for=\"post_img\">Image</label>
            <input type=\"file\" id=\"post_img\" name=\"post_img\">
            <label for=\"post_tags\">Tags</label>
            <input class=\"u-full-width\" type=\"text\" id=\"post_tags\" name=\"post_tags\"
                    ";
        // line 68
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 69
            echo "                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_tags", []));
            echo "\"
                    ";
        }
        // line 71
        echo "            >
            <label for=\"post_content\">Content</label>
            <textarea class=\"u-full-width\" name=\"post_content\" id=\"post_content\">";
        // line 74
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_edit"] ?? null), "post_content", []));
        }
        // line 77
        echo "</textarea>
            ";
        // line 78
        if ((isset($context["post_edit"]) || array_key_exists("post_edit", $context))) {
            // line 79
            echo "                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit Post\">
            ";
        } else {
            // line 81
            echo "                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add Post\">
            ";
        }
        // line 83
        echo "        </form>
    </div>
</div>
";
        // line 86
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_add_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 86,  204 => 83,  200 => 81,  196 => 79,  194 => 78,  191 => 77,  188 => 75,  186 => 74,  182 => 71,  176 => 69,  174 => 68,  168 => 64,  163 => 62,  159 => 61,  154 => 60,  152 => 59,  145 => 54,  139 => 52,  137 => 51,  132 => 48,  126 => 46,  124 => 45,  116 => 39,  110 => 37,  108 => 36,  99 => 29,  96 => 28,  87 => 26,  81 => 24,  79 => 23,  74 => 22,  69 => 21,  67 => 20,  60 => 15,  54 => 13,  52 => 12,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <h1>Post Section</h1>
        <p>You may also edit or delete individual categories.</p>
        <form action=\"/admin/posts/add\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"post_title\">Title</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"post_title\" name=\"post_title\"
                            {% if post_edit is defined %}
                                value=\"{{ post_edit.post_title }}\"
                            {% endif %}
                    >
                </div>
                <div class=\"four columns\">
                    <label for=\"post_category\">Category</label>
                    <select class=\"u-full-width\" id=\"post_category\" name=\"post_category\">
                        {% if categories is defined %}
                            {% for c in categories %}
                                <option value=\"{{ c.cat_id }}\"
                                        {% if c.cat_id == post_edit.post_category_id %}
                                            {{ 'selected' }}
                                        {% endif %}
                                >{{ c.cat_title }}</option>
                            {% endfor %}
                        {% endif %}
                    </select>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"eight columns\">
                    <label for=\"post_author\">Author</label>
                    <input class=\"u-full-width\" type=\"text\" id=\"post_title\" name=\"post_author\"
                            {% if post_edit is defined %}
                                value=\"{{ post_edit.post_author }}\"
                            {% endif %}
                    >
                </div>
                <div class=\"four columns\">
                    <label for=\"post_status\">Status</label>
                    <select class=\"u-full-width\" id=\"post_status\" name=\"post_status\">
                        <option value=\"Draft\"
                                {% if post_edit.post_status == 'Draft' %}
                                    {{ 'selected' }}
                                {% endif %}
                        >Draft
                        </option>
                        <option value=\"Published\"
                                {% if post_edit.post_status == 'Published' %}
                                    {{ 'selected' }}
                                {% endif %}
                        >Published
                        </option>
                    </select>
                </div>
            </div>
            {% if post_edit is defined %}
                <input type=\"hidden\" name=\"post_img_org\" value=\"{{ post_edit.post_img }}\">
                <img src=\"/images/{{ post_edit.post_img }}\" alt=\"image\">
                <input type=\"hidden\" value=\"{{ post_edit.post_id }}\" name=\"post_id\">
            {% endif %}
            <label for=\"post_img\">Image</label>
            <input type=\"file\" id=\"post_img\" name=\"post_img\">
            <label for=\"post_tags\">Tags</label>
            <input class=\"u-full-width\" type=\"text\" id=\"post_tags\" name=\"post_tags\"
                    {% if post_edit is defined %}
                        value=\"{{ post_edit.post_tags|e }}\"
                    {% endif %}
            >
            <label for=\"post_content\">Content</label>
            <textarea class=\"u-full-width\" name=\"post_content\" id=\"post_content\">
                {%- if post_edit is defined -%}
                    {{ post_edit.post_content|e }}
                {%- endif -%}
            </textarea>
            {% if post_edit is defined %}
                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Edit Post\">
            {% else %}
                <input class=\"button-primary\" type=\"submit\" name=\"submit\" value=\"Add Post\">
            {% endif %}
        </form>
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_add_post.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_add_post.html.twig");
    }
}
