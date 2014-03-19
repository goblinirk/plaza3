<?php

/* views/layouts/inner.twig */
class __TwigTemplate_d7396b1c483c0f2360e008e42b74796d95339a40d4a593032aec4e34cce502e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'innercontent' => array($this, 'block_innercontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_model_, "seo"), "title")) ? ($this->getAttribute($this->getAttribute($_model_, "seo"), "title")) : ($this->getAttribute($_model_, "label"))), "html", null, true);
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"";
        // line 6
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_model_, "seo"), "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 7
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_model_, "seo"), "meta_description"), "html", null, true);
        echo "\">
\t<!--[if IE]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t<link href=\"";
        // line 9
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/css/reset.css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 10
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\" />
\t
\t<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/scripts/slides.min.jquery.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t\$('#slides').slides({
\t\t\t\tpreload:false,
\t\t\t\tplay: 5000,
\t\t\t\tpause: 2500,
\t\t\t\teffect: 'fade',
\t\t\t\thoverPause: true
\t\t\t});
\t\t});
\t</script>
</head>

<body>
<div class=\"over\">
<div class=\"menu\">
\t<div class=\"all\">
\t\t<nav>
\t\t\t";
        // line 32
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t\t
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
        <a class=\"logo\" href=\"/\"><img alt=\"\" src=\"";
        // line 39
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 40
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
        <div class=\"slogan\">";
        // line 41
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        <div class=\"top-banner\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 42
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/zamer.png\"></a></div>
    </header>
    <div class=\"container\">
    ";
        // line 45
        $this->displayBlock('innercontent', $context, $blocks);
        // line 48
        echo "    </div><!--end container-->
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
        <div class=\"copy\">© 2014 ASGroup</div>
        <div class=\"tel\">";
        // line 55
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 56
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 57
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик:<a href=\"#\">In-Site</a></div>
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 45
    public function block_innercontent($context, array $blocks = array())
    {
        // line 46
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "views/layouts/inner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  143 => 45,  131 => 57,  126 => 56,  121 => 55,  112 => 48,  110 => 45,  103 => 42,  98 => 41,  93 => 40,  88 => 39,  77 => 32,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  25 => 4,  20 => 1,  99 => 37,  92 => 34,  84 => 30,  79 => 29,  71 => 26,  68 => 25,  60 => 19,  55 => 18,  52 => 17,  49 => 16,  40 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
