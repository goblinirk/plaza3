<?php

/* views/layouts/main.twig */
class __TwigTemplate_1b0533e7f230e904e7652ca15e6c8869ad1989377418599ea2541fe3c39560f9 extends Twig_Template
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
\t\t\tif(\$('#slides') != undefined){
                \$('#slides').slides({
    \t\t\t\tpreload:false,
    \t\t\t\tplay: 5000,
    \t\t\t\tpause: 2500,
    \t\t\t\teffect: 'fade',
    \t\t\t\thoverPause: true
    \t\t\t});
            }
\t\t});
\t</script>
</head>

<body>
<div class=\"over\">
<div class=\"menu\">
\t<div class=\"all\">
\t\t<nav>
\t\t\t";
        // line 34
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
        <a class=\"logo\" href=\"/\"><img alt=\"\" src=\"";
        // line 40
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 41
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
        <div class=\"slogan\">";
        // line 42
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 43
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
        echo "
        <div class=\"zammer-form\">
            <h2>Вызвать замерщика</h2>
            <form method=\"post\" action=\"/feedback/sendorder1/\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <td><input name=\"Order[name]\" class=\"pole\" value=\"\" placeholder=\"Имя\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"Order[email]\" class=\"pole\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"Order[phone]\" class=\"pole\" value=\"\" placeholder=\"Номер телефона\" type=\"text\"></td>
              </tr>
              <tr>
                <td><textarea name=\"Order[message]\" cols=\"\" rows=\"\" placeholder=\"Сообщение\"></textarea></td>
              </tr>
              <tr>
                <td><input class=\"btn1\" name=\"\" type=\"submit\" value=\"Отправить\"></td>
              </tr>
            </table>
            </form>
        </div><!--end form-->
    </header>
    ";
        // line 67
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "slider", "rootId" => 2), 2 => true), "method");
        echo "
    
    <div class=\"circles\">
        ";
        // line 70
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "sphere_module"), 2 => true), "method");
        echo "
    </div><!--end circlres-->
    <div class=\"b-news\">
        ";
        // line 73
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "News", 1 => array("count" => 3), 2 => true), "method");
        echo "
    </div><!--end b-news-->
    ";
        // line 75
        $this->displayBlock('maincontent', $context, $blocks);
        // line 78
        echo "</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
        <div class=\"copy\">© 2014 ASGroup</div>
        <div class=\"tel\">";
        // line 84
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 85
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 86
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик: <a href=\"http://in-site.ru\" target=\"_blank\" >In-Site</a></div>
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 75
    public function block_maincontent($context, array $blocks = array())
    {
        // line 76
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
        return array (  187 => 76,  184 => 75,  172 => 86,  167 => 85,  162 => 84,  154 => 78,  152 => 75,  146 => 73,  139 => 70,  132 => 67,  104 => 43,  99 => 42,  94 => 41,  89 => 40,  79 => 34,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 4,  20 => 1,);
    }
}
