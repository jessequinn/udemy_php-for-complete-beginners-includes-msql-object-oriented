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
class __TwigTemplate_df270d6c9b27dcfa2d7f45d020ef33faec254972035890705424a6342a005fb0 extends \Twig\Template
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
    <form action=\"/blog/commentAdd\" method=\"post\">
        <div class=\"row\">
            <div class=\"six columns\">
                <label for=\"comment_author\">Author</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_author\" name=\"comment_author\">
            </div>
            <div class=\"six columns\">
                <label for=\"comment_email\">Email</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\" name=\"comment_email\">
            </div>
        </div>
        <label for=\"comment_content\">Comment</label>
        <textarea class=\"u-full-width\" placeholder=\"Please leave a message ...\" id=\"comment_content\" name=\"comment_content\"></textarea>
        <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
    </form>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
        purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.
    </div>

    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
        purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.
        <!-- Nested Comment -->
        <div class=\"nest-comment\">
            <h6>Nested Start Bootstrap
                <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
            </h6>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
            Cras
            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate
            fringilla. Donec lacinia congue felis in faucibus.
        </div>
        <!-- End Nested Comment -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blog/blog_comments.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"doc-section\">
    <h5>Leave a Comment:</h5>
    <form action=\"/blog/commentAdd\" method=\"post\">
        <div class=\"row\">
            <div class=\"six columns\">
                <label for=\"comment_author\">Author</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_author\" name=\"comment_author\">
            </div>
            <div class=\"six columns\">
                <label for=\"comment_email\">Email</label>
                <input class=\"u-full-width\" type=\"email\" placeholder=\"test@mailbox.com\" id=\"comment_email\" name=\"comment_email\">
            </div>
        </div>
        <label for=\"comment_content\">Comment</label>
        <textarea class=\"u-full-width\" placeholder=\"Please leave a message ...\" id=\"comment_content\" name=\"comment_content\"></textarea>
        <input class=\"button-primary\" type=\"submit\" value=\"Submit\">
    </form>

    <hr>

    <!-- Posted Comments -->

    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
        purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.
    </div>

    <!-- Comment -->
    <div class=\"comment\">
        <h6>Start Bootstrap
            <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
        </h6>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras
        purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.
        <!-- Nested Comment -->
        <div class=\"nest-comment\">
            <h6>Nested Start Bootstrap
                <small class=\"heading-font-size\">August 25, 2014 at 9:30 PM</small>
            </h6>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
            Cras
            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
            vulputate
            fringilla. Donec lacinia congue felis in faucibus.
        </div>
        <!-- End Nested Comment -->
    </div>
</div>", "blog/blog_comments.html.twig", "/home/jessequinn/PhpstormProjects/CMS/src/templates/blog/blog_comments.html.twig");
    }
}
