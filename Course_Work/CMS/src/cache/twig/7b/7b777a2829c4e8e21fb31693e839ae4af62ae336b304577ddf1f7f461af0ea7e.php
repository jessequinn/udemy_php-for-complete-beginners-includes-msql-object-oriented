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
class __TwigTemplate_afb27dc9fd52ad3a5cfed12e1ac29c1331b306c60ca6eeef2f383074efc7f703 extends \Twig\Template
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
        echo "<div class=\"doc-section\">
    <h5>Leave a Comment:</h5>
    <form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("blog-add-comment", ["id" => twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", [])]), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"row\">
            <div class=\"six columns\">
                <label for=\"comment_author\">Author</label>
                <input class=\"u-full-width\" type=\"text\" id=\"comment_author\" name=\"comment_author\">
            </div>
            <div class=\"six columns\">
                <label for=\"comment_email\">Email</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\"
                       name=\"comment_email\">
            </div>
        </div>
        <label for=\"comment_content\">Comment</label>
        <textarea class=\"u-full-width\" placeholder=\"Please leave a message ...\" id=\"comment_content\"
                  name=\"comment_content\"></textarea>
        <input type=\"hidden\" name=\"comment_post_id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post_show"] ?? null), "post_id", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "name", []), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["csrf"] ?? null), "value", []), "html", null, true);
        echo "\">
        <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
    </form>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    ";
        // line 29
        if ((isset($context["comments_show"]) || array_key_exists("comments_show", $context))) {
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments_show"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 31
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "comment_status", []) == "Approved")) {
                    // line 32
                    echo "                <div class=\"comment\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_id", []), "html", null, true);
                    echo "\">
                    <h6>Comment made by <b>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_author", []));
                    echo "</b>
                        |
                        <small class=\"heading-font-size\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_date", [])), "m/d/Y"), "html", null, true);
                    echo "</small>
                    </h6>
                    <p class=\"comment\">";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comment_content", []), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        <p class=\"comment\">
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
            purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            Donec lacinia congue felis in faucibus.
        </p>
        <!-- Nested Comment -->
        <div class=\"nested-comment\">
            <h6>Nested Start Bootstrap
                <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
            </h6>
            <p class=\"nested-comment\">
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                Cras
                purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate
                fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
        <!-- End Nested Comment -->
    </div>
</div>";
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
        return array (  117 => 42,  114 => 41,  108 => 40,  102 => 37,  97 => 35,  92 => 33,  87 => 32,  84 => 31,  79 => 30,  77 => 29,  65 => 20,  61 => 19,  57 => 18,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"doc-section\">
    <h5>Leave a Comment:</h5>
    <form action=\"{{ path_for('blog-add-comment', {id: post_show.post_id}) }}\" method=\"post\">
        <div class=\"row\">
            <div class=\"six columns\">
                <label for=\"comment_author\">Author</label>
                <input class=\"u-full-width\" type=\"text\" id=\"comment_author\" name=\"comment_author\">
            </div>
            <div class=\"six columns\">
                <label for=\"comment_email\">Email</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\"
                       name=\"comment_email\">
            </div>
        </div>
        <label for=\"comment_content\">Comment</label>
        <textarea class=\"u-full-width\" placeholder=\"Please leave a message ...\" id=\"comment_content\"
                  name=\"comment_content\"></textarea>
        <input type=\"hidden\" name=\"comment_post_id\" value=\"{{ post_show.post_id }}\">
        <input type=\"hidden\" name=\"csrf_name\" value=\"{{ csrf.name }}\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"{{ csrf.value }}\">
        <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
    </form>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    {% if comments_show is defined %}
        {% for c in comments_show %}
            {% if c.comment_status == 'Approved' %}
                <div class=\"comment\" id=\"{{ c.comment_id }}\">
                    <h6>Comment made by <b>{{ c.comment_author|e }}</b>
                        |
                        <small class=\"heading-font-size\">{{ c.comment_date|e|date(\"m/d/Y\") }}</small>
                    </h6>
                    <p class=\"comment\">{{ c.comment_content }}</p>
                </div>
            {% endif %}
        {% endfor %}
    {% endif %}

    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        <p class=\"comment\">
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
            purus
            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
            Donec lacinia congue felis in faucibus.
        </p>
        <!-- Nested Comment -->
        <div class=\"nested-comment\">
            <h6>Nested Start Bootstrap
                <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
            </h6>
            <p class=\"nested-comment\">
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                Cras
                purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate
                fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
        <!-- End Nested Comment -->
    </div>
</div>", "blog/blog_comments.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/blog/blog_comments.html.twig");
    }
}
