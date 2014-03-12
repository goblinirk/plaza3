<?php

/* views/layouts/index.twig */
class __TwigTemplate_d145315e096a8b672ce9819ce0bb952ec43cca6bada46a4f457738e7fd36142f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<!--[if IE]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t<title>";
        // line 6
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_this_, "pagetitle"), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"/css/style2.css?v4\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-responsive.css?v2\" />
\t<script type=\"text/javascript\" src=\"/scripts/jquery-1.9.1.js?v2\"></script>
\t<script type=\"text/javascript\" src=\"/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

\t<header id=\"header\">
\t\t<h1 class=\"mainlabel\">Капитал</h1>
\t\t<div id=\"usermnu\">
\t\t\t<a href=\"/page/1/\">О НАС</a>
\t\t\t<a href=\"/page/2/\">ИНФОРМАЦИЯ</a>
\t\t\t<a href=\"/page/5/\">НОВОСТИ</a>
\t\t\t<a href=\"/page/6/\">КОНТАКТЫ</a>
\t\t\t<a href=\"/site/login\">РЕГИСТРАЦИЯ</a>
\t\t</div>
\t</header><!-- #header-->

\t<section id=\"middle\">
\t\t<img src=\"/images/kapital/image.png\" />
\t\t<div id=\"midwrap\">
\t\t\t<div style=\"margin: 0 auto;width: 570px;border-top: 1px solid #e0e0e0;border-bottom: 1px solid #e0e0e0;margin-top: 20px;\">
\t\t\t\t<h1 style=\"font-family: 'Times New Roman'; font-size: 34px; \">ВАШИ ДЕНЬГИ - НАША РАБОТА</h1>
\t\t\t</div>
\t\t<div id=\"container\">
\t\t\t<div id=\"content\"><div id=\"contwrap\">


\t\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t\t</div></div><!-- #content-->
\t\t</div><!-- #container-->

\t\t</div>
\t</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
\t<p><i>(с) Copyright 2014</i></p>
</footer><!-- #footer -->

</body>
</html>";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "views/layouts/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 41,  84 => 40,  67 => 43,  65 => 40,  27 => 6,  20 => 1,  123 => 45,  120 => 44,  113 => 41,  104 => 37,  98 => 36,  92 => 35,  80 => 28,  74 => 27,  68 => 26,  59 => 22,  53 => 21,  47 => 20,  41 => 16,  38 => 9,  31 => 4,  28 => 3,);
    }
}
