<?php

/* views/layouts/auth.twig */
class __TwigTemplate_b0bb3c8700df62c791c6959aa2f45fe560707aa0fa3d4c9a1ca2957498f1a746 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pagetitle"), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/admin.css?v5\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap-responsive.css?v2\" />
\t
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

\t<header id=\"header\">
\t\t
\t</header><!-- #header-->

\t<section id=\"middle_auth\">
\t\t
\t\t\t\t";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t\t
\t</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
\t<p><i>Разработано в стдии IN-SITE</i></p>
</footer><!-- #footer -->

</body>
</html>";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "views/layouts/auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  80 => 25,  66 => 28,  64 => 25,  48 => 12,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
