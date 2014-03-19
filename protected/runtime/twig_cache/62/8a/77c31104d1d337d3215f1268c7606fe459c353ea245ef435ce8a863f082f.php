<?php

/* views/layouts/contacts.twig */
class __TwigTemplate_628a77c31104d1d337d3215f1268c7606fe459c353ea245ef435ce8a863f082f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'coontactscontent' => array($this, 'block_coontactscontent'),
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
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
\t\t<a class=\"logo\" href=\"#\"><img alt=\"\" src=\"";
        // line 38
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 39
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
\t\t<div class=\"slogan\">";
        // line 40
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        <div class=\"top-banner\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 41
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/zamer.png\"></a></div>
\t</header>
    <div class=\"container\">
        <div class=\"contact-l\">
            <h2>Напишите нам</h2>
            <form id=\"feedback\" action=\"/feedback/send/\" method=\"POST\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <th scope=\"row\">Ваше имя</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_name]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Телефон</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_phone]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Электропочта</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_email]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Сообщение</th>
                <td><textarea name=\"FbMessages[sndr_message]\" cols=\"\" rows=\"\"></textarea></td>
              </tr>
              <tr>
                <th scope=\"row\">&nbsp;</th>
                <td><input class=\"btn2\" name=\"\" type=\"submit\" value=\"Отправить\"></td>
              </tr>
            </table>
            </form>
        </div><!--end contact-l-->
        <div class=\"contact-r\"> 
            ";
        // line 72
        $this->displayBlock('coontactscontent', $context, $blocks);
        // line 75
        echo "        </div><!--end contact-r-->
    </div><!--end container-->
    
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
\t\t<div class=\"copy\">© 2014 ASGroup</div>
\t\t<div class=\"tel\">";
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
        <div class=\"design\">Разработчик:<a href=\"#\">In-Site</a></div>
    
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 72
    public function block_coontactscontent($context, array $blocks = array())
    {
        // line 73
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "views/layouts/contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 73,  173 => 72,  160 => 86,  155 => 85,  150 => 84,  139 => 75,  137 => 72,  102 => 41,  97 => 40,  92 => 39,  87 => 38,  77 => 32,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 4,  20 => 1,);
    }
}
