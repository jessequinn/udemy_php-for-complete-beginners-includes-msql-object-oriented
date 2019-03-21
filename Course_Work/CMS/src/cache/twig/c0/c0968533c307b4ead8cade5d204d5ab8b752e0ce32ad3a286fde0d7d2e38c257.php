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

/* header.html */
class __TwigTemplate_6dbfa7f3b554829a9928a1757122e45b22ae9cd45cb9cb0a39b4e51ea6e504e2 extends \Twig\Template
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
    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"/dist/js/custom.js\"></script>
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
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
    <!--FONTAWESOME -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <!-- JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"/dist/js/custom.js\"></script>
</head>
<body>", "header.html", "/home/jessequinn/PhpstormProjects/php-for-complete-beginners-includes-msql-object-oriented/Course_Work/CMS/src/templates/header.html");
    }
}
