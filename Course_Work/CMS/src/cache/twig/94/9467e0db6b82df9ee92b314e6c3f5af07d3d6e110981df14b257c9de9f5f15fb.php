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

/* blog/blog_comments.html.twig */
class __TwigTemplate_dd83270fbc1d8836e6b920f854ba5edc917d2ab863c5f2101182e0d4f6491e25 extends \Twig\Template
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
        echo "<div class=\"alert alert-white alert-dismissible fade show border\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
    <div class=\"actionBox\">
        <ul class=\"commentList\">
            ";
        // line 7
        if ((isset($context["comments_show"]) || array_key_exists("comments_show", $context))) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments_show"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 9
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "comment_status", []) == "Approved")) {
                    // line 10
                    echo "                        <li id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []));
                    echo "\">
                            <div class=\"commentText\">
                                <p class=\"\">";
                    // line 12
                    echo $this->extensions['Aptoma\Twig\Extension\MarkdownExtension']->parseMarkdown(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_content", [])));
                    echo "</p> <span
                                        class=\"date sub-text\">on ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_date", [])), " M d, y"), "html", null, true);
                    echo "</span>
                            </div>
                        </li>
                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
        }
        // line 19
        echo "        </ul>
        <form class=\"form-inline mt-2 mt-md-0\" role=\"form\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("blog-add-comment", ["id" => twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", [])]), "html", null, true);
        echo "\"
              method=\"post\">
            <div class=\"form-group\">
                <textarea class=\"form-control mr-sm-2\" placeholder=\"Your comments\" id=\"comment_content\"
                          name=\"comment_content\"></textarea>
                <small id=\"commentHelp\" class=\"form-text text-muted\">Comments need to be approved prior to appearing on the site.</small>
            </div>
            <input type=\"hidden\" name=\"comment_post_id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
            <input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"Add\">
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog/blog_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  96 => 28,  92 => 27,  82 => 20,  79 => 19,  76 => 18,  70 => 17,  63 => 13,  59 => 12,  53 => 10,  50 => 9,  45 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-white alert-dismissible fade show border\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
    <div class=\"actionBox\">
        <ul class=\"commentList\">
            {% if comments_show is defined %}
                {% for c in comments_show %}
                    {% if c.comment_status == 'Approved' %}
                        <li id=\"{{ c.comment_id|e }}\">
                            <div class=\"commentText\">
                                <p class=\"\">{{ c.comment_content|e|markdown }}</p> <span
                                        class=\"date sub-text\">on {{ c.comment_date|e|date(\" M d, y\") }}</span>
                            </div>
                        </li>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\" role=\"form\" action=\"{{ path_for('blog-add-comment', { 'id': post_show.post_id }) }}\"
              method=\"post\">
            <div class=\"form-group\">
                <textarea class=\"form-control mr-sm-2\" placeholder=\"Your comments\" id=\"comment_content\"
                          name=\"comment_content\"></textarea>
                <small id=\"commentHelp\" class=\"form-text text-muted\">Comments need to be approved prior to appearing on the site.</small>
            </div>
            <input type=\"hidden\" name=\"comment_post_id\" value=\"{{ post_show.post_id }}\">
            <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
            <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
            <input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"Add\">
        </form>
    </div>
</div>
", "blog/blog_comments.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/blog/blog_comments.html.twig");
    }
}
