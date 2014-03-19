<?php

/* views/layouts/main.twig */
class __TwigTemplate_ddd20cc6480ce19edd4534a0514129590bfd07215bb219e7ba160f3d911d5f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
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
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
        <a class=\"logo\" href=\"/\"><img alt=\"\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 39
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
        <div class=\"slogan\">";
        // line 40
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 41
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
        echo "
    </header>
    ";
        // line 43
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slider", "rootId" => 2), 2 => true), "method");
        echo "
    
    <div class=\"circles\">
        ";
        // line 46
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "sphere_module"), 2 => true), "method");
        echo "
    </div><!--end circlres-->
    <div class=\"b-news\">
        <div class=\"titl\">Новости</div>
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"/news/42/\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"/news/42/\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"/news/43/\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"/news/43/\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"/news/44/\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"/news/44/\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
    </div><!--end b-news-->
    ";
        // line 87
        $this->displayBlock('maincontent', $context, $blocks);
        // line 90
        echo "</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
        <div class=\"copy\">© 2014 ASGroup</div>
        <div class=\"tel\">";
        // line 96
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 97
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 98
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик:<a href=\"#\">In-Site</a></div>
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 87
    public function block_maincontent($context, array $blocks = array())
    {
        // line 88
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "views/layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 88,  194 => 87,  183 => 98,  179 => 97,  175 => 96,  167 => 90,  165 => 87,  153 => 78,  147 => 75,  135 => 66,  129 => 63,  117 => 54,  111 => 51,  103 => 46,  97 => 43,  92 => 41,  88 => 40,  84 => 39,  80 => 38,  71 => 32,  49 => 13,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
