<?php

/* views/layouts/inner.twig */
class __TwigTemplate_5a0ce05ad975bdb11efebfe8dbd27dc229a81aaf2c775655c03a30a961d5da7e extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "title")) ? ($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "title")) : ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label"))), "html", null, true);
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "meta_description"), "html", null, true);
        echo "\">
\t<!--[if IE]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/reset.css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\" />
\t
\t<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t\t
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
        <a class=\"logo\" href=\"/\"><img alt=\"\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 40
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
        <div class=\"slogan\">";
        // line 41
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 42
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
        echo "
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 56
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 57
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
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
        return array (  132 => 46,  129 => 45,  118 => 57,  114 => 56,  110 => 55,  101 => 48,  99 => 45,  93 => 42,  89 => 41,  85 => 40,  81 => 39,  71 => 32,  49 => 13,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
