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

/* admin/admin_header.html.twig */
class __TwigTemplate_d3cd8b30a046175ce8073ff47226b8ba55b943d2c07c1e6d863b5bbb69163063 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <!--simplemde -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/custom.css\">
    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            crossorigin=\"anonymous\"></script>
     <!--Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    ";
        // line 24
        echo "    <script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
    <script type=\"text/javascript\">
        (function (\$, sr) {
            // debouncing function from John Hann
            // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
            // https://gist.github.com/randylien/5683851
            var debounce = function (func, threshold, execAsap) {
                var timeout;

                return function debounced() {
                    var obj = this, args = arguments;

                    function delayed() {
                        if (!execAsap)
                            func.apply(obj, args);
                        timeout = null;
                    };

                    if (timeout)
                        clearTimeout(timeout);
                    else if (execAsap)
                        func.apply(obj, args);

                    timeout = setTimeout(delayed, threshold || 100);
                };
            };

            // smartresize
            jQuery.fn[sr] = function (fn) {
                return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
            };

        })(jQuery, 'smartresize');

        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);";
        // line 61
        $context["key"] = [0 => "All Posts", 1 => "Published Posts", 2 => "Draft Posts", 3 => "Approved Comments", 4 => "Unapproved Comments", 5 => "Admins", 6 => "Subscribers", 7 => "Categories"];
        // line 71
        $context["value"] = [0 => (        // line 72
($context["published_post_count"] ?? null) + ($context["draft_post_count"] ?? null)), 1 =>         // line 73
($context["published_post_count"] ?? null), 2 =>         // line 74
($context["draft_post_count"] ?? null), 3 =>         // line 75
($context["approved_comment_count"] ?? null), 4 =>         // line 76
($context["unapproved_comment_count"] ?? null), 5 =>         // line 77
($context["admin_user_count"] ?? null), 6 =>         // line 78
($context["subscriber_user_count"] ?? null), 7 =>         // line 79
($context["category_count"] ?? null)];
        // line 82
        echo "function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Data', 'Count'],
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            echo "                ['";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["key"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "html", null, true);
            echo "],
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: '',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));

            // // resize instantly
            // \$(window).smartresize(function () {
            //     chart.draw(data, options);
            // });
        }
    </script>
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "admin/admin_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 88,  117 => 86,  113 => 85,  108 => 82,  106 => 79,  105 => 78,  104 => 77,  103 => 76,  102 => 75,  101 => 74,  100 => 73,  99 => 72,  98 => 71,  96 => 61,  59 => 24,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,300,600\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <!--simplemde -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/custom.css\">
    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            crossorigin=\"anonymous\"></script>
     <!--Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    {# https://simplemde.com/ #}
    <script src=\"https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js\"></script>
    <script type=\"text/javascript\">
        (function (\$, sr) {
            // debouncing function from John Hann
            // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
            // https://gist.github.com/randylien/5683851
            var debounce = function (func, threshold, execAsap) {
                var timeout;

                return function debounced() {
                    var obj = this, args = arguments;

                    function delayed() {
                        if (!execAsap)
                            func.apply(obj, args);
                        timeout = null;
                    };

                    if (timeout)
                        clearTimeout(timeout);
                    else if (execAsap)
                        func.apply(obj, args);

                    timeout = setTimeout(delayed, threshold || 100);
                };
            };

            // smartresize
            jQuery.fn[sr] = function (fn) {
                return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
            };

        })(jQuery, 'smartresize');

        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);

        {%- set key = [
            'All Posts',
            'Published Posts',
            'Draft Posts',
            'Approved Comments',
            'Unapproved Comments',
            'Admins',
            'Subscribers',
            'Categories'
        ] -%}
        {%- set value = [
            published_post_count + draft_post_count,
            published_post_count,
            draft_post_count,
            approved_comment_count,
            unapproved_comment_count,
            admin_user_count,
            subscriber_user_count,
            category_count
        ] -%}

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Data', 'Count'],
                {% for i in 0..7 %}
                ['{{ key[i] }}',{{ value[i] }}],
                {% endfor %}
            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: '',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));

            // // resize instantly
            // \$(window).smartresize(function () {
            //     chart.draw(data, options);
            // });
        }
    </script>
</head>
<body>", "admin/admin_header.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_header.html.twig");
    }
}
