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
class __TwigTemplate_4ced47eecec8ef8dd588123b608e3057db303693e133f5afd21997424021a35f extends \Twig\Template
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
    <link rel=\"stylesheet\" href=\"/dist/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/skeleton.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/custom.css\">
    <!-- Bootstrap -->
    ";
        // line 14
        echo "    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"/dist/js/custom.js\"></script>
    <!--Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
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
            }
            // smartresize
            jQuery.fn[sr] = function (fn) {
                return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
            };

        })(jQuery, 'smartresize');

        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);";
        // line 57
        $context["key"] = [0 => "Published Posts", 1 => "Draft Posts", 2 => "Approved Comments", 3 => "Unapproved Comments", 4 => "Admins", 5 => "Subscribers", 6 => "Categories"];
        // line 66
        $context["value"] = [0 =>         // line 67
($context["published_post_count"] ?? null), 1 =>         // line 68
($context["draft_post_count"] ?? null), 2 =>         // line 69
($context["approved_comment_count"] ?? null), 3 =>         // line 70
($context["unapproved_comment_count"] ?? null), 4 =>         // line 71
($context["admin_user_count"] ?? null), 5 =>         // line 72
($context["subscriber_user_count"] ?? null), 6 =>         // line 73
($context["category_count"] ?? null)];
        // line 76
        echo "function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Data', 'Count'],
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 80
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
        // line 82
        echo "            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: '',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));

            // resize instantly
            \$(window).smartresize(function () {
                chart.draw(data, options);
            });
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
        return array (  123 => 82,  112 => 80,  108 => 79,  103 => 76,  101 => 73,  100 => 72,  99 => 71,  98 => 70,  97 => 69,  96 => 68,  95 => 67,  94 => 66,  92 => 57,  49 => 14,  35 => 1,);
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
    <link rel=\"stylesheet\" href=\"/dist/css/normalize.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/skeleton.css\">
    <link rel=\"stylesheet\" href=\"/dist/css/custom.css\">
    <!-- Bootstrap -->
    {#<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">#}
    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"/dist/js/custom.js\"></script>
    <!--Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
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
            }
            // smartresize
            jQuery.fn[sr] = function (fn) {
                return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
            };

        })(jQuery, 'smartresize');

        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);

        {%- set key = [
            'Published Posts',
            'Draft Posts',
            'Approved Comments',
            'Unapproved Comments',
            'Admins',
            'Subscribers',
            'Categories'
        ] -%}
        {%- set value = [
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
                {% for i in 0..6 %}
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

            // resize instantly
            \$(window).smartresize(function () {
                chart.draw(data, options);
            });
        }
    </script>
</head>
<body>", "admin/admin_header.html.twig", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/admin/admin_header.html.twig");
    }
}
