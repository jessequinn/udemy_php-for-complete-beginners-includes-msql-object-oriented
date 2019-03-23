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
class __TwigTemplate_6ca9407e190c9abe2f18b5a6fe620647318b8e04c8e268e6beb48eff5d03c7ae extends \Twig\Template
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
        // line 4
        echo twig_include($this->env, $context, "admin/admin_nav.html.twig");
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
    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            ";
        // line 28
        echo "            ";
        // line 29
        echo "            <th scope=\"col\">Comment</th>
            ";
        // line 31
        echo "            <th scope=\"col\">Status</th>
            <th scope=\"col\">In Response To</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Approve</th>
            <th scope=\"col\">Unapprove</th>
            <th colspan=\"2\">Operations</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "            <tr>
                ";
            // line 43
            echo "                ";
            // line 44
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_content", []), 0, 200));
            echo " ...</td>
                ";
            // line 46
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_status", []));
            echo "</td>
                <td><a href=\"/blog/post/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_post_id", []));
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
            echo "\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 49
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["p"], "post_id", []) == twig_get_attribute($this->env, $this->source, $context["c"], "comment_post_id", []))) {
                    // line 50
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "post_title", []));
                    echo "
                            ";
                }
                // line 52
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    </a></td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_date", []));
            echo "<</td>
                <td><a href=\"/admin/comments/approve/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
            echo "\">Approve</a></td>
                <td><a href=\"/admin/comments/unapprove/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
            echo "\">Unapprove</a></td>
                <td><a href=\"/admin/comments/edit/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
            echo "\">Edit</a></td>
                <td><a href=\"/admin/comments/delete/";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
            echo "\">Delete</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

</div>
";
        // line 65
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
        return array (  175 => 65,  169 => 61,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  141 => 53,  135 => 52,  129 => 50,  126 => 49,  122 => 48,  116 => 47,  111 => 46,  106 => 44,  104 => 43,  101 => 41,  97 => 40,  86 => 31,  83 => 29,  81 => 28,  75 => 23,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  59 => 14,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  41 => 4,  35 => 1,);
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

    <table class=\"table table-sm table-hover table-white\">
        <thead>
        <tr>
            {#<th scope=\"col\">ID</th>#}
            {#<th scope=\"col\">Author</th>#}
            <th scope=\"col\">Comment</th>
            {#<th scope=\"col\">Email</th>#}
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
                {#<td>{{ c.comment_author|e }}</td>#}
                <td>{{ c.comment_content|slice(0, 200)|e }} ...</td>
                {#<td>{{ c.comment_email|e }}</td>#}
                <td>{{ c.comment_status|e }}</td>
                <td><a href=\"/blog/post/{{ c.comment_post_id|e }}#{{ c.comment_id|e }}\">
                        {% for p in posts %}
                            {% if p.post_id == c.comment_post_id %}
                                {{ p.post_title|e }}
                            {% endif %}
                        {% endfor %}
                    </a></td>
                <td>{{ c.comment_date|e }}<</td>
                <td><a href=\"/admin/comments/approve/{{ c.comment_id|e }}\">Approve</a></td>
                <td><a href=\"/admin/comments/unapprove/{{ c.comment_id|e }}\">Unapprove</a></td>
                <td><a href=\"/admin/comments/edit/{{ c.comment_id|e }}\">Edit</a></td>
                <td><a href=\"/admin/comments/delete/{{ c.comment_id|e }}\">Delete</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
{{ include('admin/admin_footer.html') }}", "admin/admin_comments.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_comments.html.twig");
    }
}
