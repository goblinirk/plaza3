<?php

/* views/layouts/auth.twig */
class __TwigTemplate_c725b71b005c0286d03ec38109fbe45c900825e26ad40249a5733b45c1fc8036 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/css/admin.css?v5\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap-responsive.css?v2\" />
\t
\t<script type=\"text/javascript\" src=\"";
        // line 11
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
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
        return array (  86 => 25,  72 => 28,  70 => 25,  48 => 11,  42 => 9,  37 => 8,  32 => 7,  27 => 6,  20 => 1,  120 => 42,  117 => 41,  110 => 38,  101 => 34,  95 => 33,  89 => 26,  80 => 28,  74 => 27,  68 => 26,  59 => 22,  53 => 12,  47 => 20,  41 => 16,  38 => 9,  31 => 4,  28 => 3,);
    }
}
