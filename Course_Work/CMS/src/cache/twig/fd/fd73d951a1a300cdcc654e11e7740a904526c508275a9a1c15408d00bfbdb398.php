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

/* admin/admin_posts.html.twig */
class __TwigTemplate_59ab13814d974e79e6881b4076a5591b45aa52488bcfdab810bd877e597c1d49 extends \Twig\Template
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
        <table class=\"u-full-width\">
            <thead>
            <tr>
                ";
        // line 9
        echo "                <th>Author</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Image</th>
                <th>Tags</th>
                <th>Comments</th>
                <th>Date</th>
                <th colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                <tr>
                    ";
            // line 24
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_author", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 28
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "cat_id", []) == twig_get_attribute($this->env, $this->source, $context["p"], "post_category_id", []))) {
                    // line 29
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cat_title", []), "html", null, true);
                    echo "
                            ";
                }
                // line 31
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_status", []), "html", null, true);
            echo "</td>
                    <td><img width=\"100%\" src=\"../images/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_img", []), "html", null, true);
            echo "\" alt=\"image\"></td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_tags", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_comment_count", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_date", []));
            echo "</td>
                    <td><a href=\"/admin/posts/edit/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
            echo "\">Edit</a></td>
                    <td><a href=\"/admin/posts/delete/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []), "html", null, true);
            echo "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
</div>
";
        // line 46
        echo twig_include($this->env, $context, "footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  134 => 42,  125 => 39,  121 => 38,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  98 => 32,  92 => 31,  86 => 29,  83 => 28,  79 => 27,  74 => 25,  69 => 24,  66 => 22,  62 => 21,  48 => 9,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('header.html') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section\">
        <table class=\"u-full-width\">
            <thead>
            <tr>
                {#<th>ID</th>#}
                <th>Author</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Image</th>
                <th>Tags</th>
                <th>Comments</th>
                <th>Date</th>
                <th colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            {% for p in posts %}
                <tr>
                    {#<td>{{ p.post_id }}</td>#}
                    <td>{{ p.post_author }}</td>
                    <td>{{ p.post_title }}</td>
                    <td>
                        {% for c in categories %}
                            {%  if c.cat_id == p.post_category_id %}
                                {{  c.cat_title }}
                            {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ p.post_status }}</td>
                    <td><img width=\"100%\" src=\"../images/{{ p.post_img }}\" alt=\"image\"></td>
                    <td>{{ p.post_tags }}</td>
                    <td>{{ p.post_comment_count }}</td>
                    <td>{{  p.post_date|e }}</td>
                    <td><a href=\"/admin/posts/edit/{{ p.post_id }}\">Edit</a></td>
                    <td><a href=\"/admin/posts/delete/{{ p.post_id }}\">Delete</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{{ include('footer.html') }}", "admin/admin_posts.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/admin/admin_posts.html.twig");
    }
}
