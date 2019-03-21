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

/* admin/admin_comments.html.twig */
class __TwigTemplate_c004491af7bde527e3bc0f7210b0dd67294026749bd6d26cb3520a3fd9a5f5a0 extends \Twig\Template
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
    <div class=\"docs-section \">
        <h1>Comments Section</h1>
        <p>You may edit or delete individual comments.</p>
        <table class=\"table table-sm table-hover table-dark\">
            <thead>
            <tr>
                ";
        // line 11
        echo "                <th scope=\"col\">Author</th>
                <th scope=\"col\">Comment</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">In Response To</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Approve</th>
                <th scope=\"col\">Unapprove</th>
                <th colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 24
            echo "                <tr>
                    ";
            // line 26
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_author", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_content", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_email", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_status", []), "html", null, true);
            echo "</td>
                    <td><a href=\"/blog/post/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_post_id", []), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
            echo "\">
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []) == twig_get_attribute($this->env, $this->source, $context["c"], "comment_post_id", []))) {
                    // line 33
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []), "html", null, true);
                    echo "
                                ";
                }
                // line 35
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </a> </td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_date", []));
            echo "<</td>
                    <td><a href=\"/admin/comments/approve/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
            echo "\">Approve</a></td>
                    <td><a href=\"/admin/comments/unapprove/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
            echo "\">Unapprove</a></td>
                    <td><a href=\"/admin/comments/edit/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
            echo "\">Edit</a></td>
                    <td><a href=\"/admin/comments/delete/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
            echo "\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 48
        if (((isset($context["message"]) || array_key_exists("message", $context)) &&  !twig_test_empty(($context["message"] ?? null)))) {
            // line 49
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            // line 50
            echo twig_escape_filter($this->env, ($context["message"] ?? null));
            // line 51
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (((isset($context["error"]) || array_key_exists("error", $context)) &&  !twig_test_empty(($context["error"] ?? null)))) {
            // line 58
            echo "        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 59
            echo twig_escape_filter($this->env, ($context["error"] ?? null));
            // line 60
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 65
        echo "</div>
";
        // line 66
        echo twig_include($this->env, $context, "admin/admin_footer.html");
    }

    public function getTemplateName()
    {
        return "admin/admin_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  176 => 65,  169 => 60,  167 => 59,  165 => 58,  163 => 57,  160 => 56,  153 => 51,  151 => 50,  149 => 49,  147 => 48,  141 => 44,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  107 => 35,  101 => 33,  98 => 32,  94 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  71 => 26,  68 => 24,  64 => 23,  50 => 11,  40 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('admin/admin_header.html.twig') }}
<div class=\"container\">
    {{ include('admin/admin_nav.html.twig') }}
    <div class=\"docs-section \">
        <h1>Comments Section</h1>
        <p>You may edit or delete individual comments.</p>
        <table class=\"table table-sm table-hover table-dark\">
            <thead>
            <tr>
                {#<th scope=\"col\">ID</th>#}
                <th scope=\"col\">Author</th>
                <th scope=\"col\">Comment</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">In Response To</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Approve</th>
                <th scope=\"col\">Unapprove</th>
                <th colspan=\"2\">Operations</th>
            </tr>
            </thead>
            <tbody>
            {% for c in comments %}
                <tr>
                    {#<td>{{ c.comment_id }}</td>#}
                    <td>{{ c.comment_author }}</td>
                    <td>{{ c.comment_content }}</td>
                    <td>{{ c.comment_email }}</td>
                    <td>{{ c.comment_status }}</td>
                    <td><a href=\"/blog/post/{{ c.comment_post_id }}#{{ c.comment_id }}\">
                            {% for p in posts %}
                                {% if p.post_id == c.comment_post_id %}
                                    {{ p.post_title }}
                                {% endif %}
                            {% endfor %}
                        </a> </td>
                    <td>{{ c.comment_date|e }}<</td>
                    <td><a href=\"/admin/comments/approve/{{ c.comment_id }}\">Approve</a></td>
                    <td><a href=\"/admin/comments/unapprove/{{ c.comment_id }}\">Unapprove</a></td>
                    <td><a href=\"/admin/comments/edit/{{ c.comment_id }}\">Edit</a></td>
                    <td><a href=\"/admin/comments/delete/{{ c.comment_id }}\">Delete</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

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
</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_comments.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_comments.html.twig");
    }
}
