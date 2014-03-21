<?php

/* views/layouts/contacts.twig */
class __TwigTemplate_0fc936b988a8657ebeaf702f96105f77814b577b4d2320b13c5993c5249e7cdb extends Twig_Template
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
\t\t\tif(\$('#slides') != undefined){
        \$('#slides').slides({
            preload:false,
            play: 5000,
            pause: 2500,
            effect: 'fade',
            hoverPause: true
          });
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
\t\t<a class=\"logo\" href=\"#\"><img alt=\"\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 41
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
\t\t<div class=\"slogan\">";
        // line 42
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 43
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
        echo "
        <div class=\"zammer-form\">
            <h2>Вызвать замерщика</h2>
            <form method=\"post\" action=\"/feedback/sendorder1/\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Имя\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Номер телефона\" type=\"text\"></td>
              </tr>
              <tr>
                <td><textarea name=\"\" cols=\"\" rows=\"\" placeholder=\"Сообщение\"></textarea></td>
              </tr>
              <tr>
                <td><input class=\"btn1\" name=\"\" type=\"submit\" value=\"Отправить\"></td>
              </tr>
            </table>
            </form>
        </div><!--end form-->
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
        // line 96
        $this->displayBlock('coontactscontent', $context, $blocks);
        // line 99
        echo "        </div><!--end contact-r-->
    </div><!--end container-->
    
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
\t\t<div class=\"copy\">© 2014 ASGroup</div>
\t\t<div class=\"tel\">";
        // line 108
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 109
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 110
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик:<a href=\"#\">In-Site</a></div>
    
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 96
    public function block_coontactscontent($context, array $blocks = array())
    {
        // line 97
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
        return array (  186 => 97,  183 => 96,  171 => 110,  167 => 109,  163 => 108,  152 => 99,  150 => 96,  94 => 43,  90 => 42,  86 => 41,  82 => 40,  73 => 34,  49 => 13,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
