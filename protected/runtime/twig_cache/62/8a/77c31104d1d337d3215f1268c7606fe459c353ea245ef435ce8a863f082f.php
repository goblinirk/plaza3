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
\t\t\tif(\$('#slides') != undefined){
        \$('#slides').slides({
            preload:false,
            play: 5000,
            pause: 2500,
            effect: 'fade',
            hoverPause: true
          });
        }

        jQuery('.pole.name').blur(function(){
        if(jQuery(this).val().length < 2){
          jQuery('.form_err_msg').remove();
          jQuery(this).addClass('err_pole').after('<span class=\"form_err_msg\">Не верно заполнено поле. Пример: Александр</span>');
        } else {
          jQuery(this).removeClass('err_pole');
          jQuery('.form_err_msg').remove();
        }
      });
      jQuery('.pole.email').blur(function(){
        var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;  
        if((jQuery(this).val().length < 2) || (!re.test(jQuery(this).val()))) {
          jQuery('.form_err_msg').remove();
          jQuery(this).addClass('err_pole').after('<span class=\"form_err_msg\">Не верно заполнено поле. Пример: mail@mail.ru</span>');
        } else {
          jQuery(this).removeClass('err_pole');
          jQuery('.form_err_msg').remove();
        }
      });
      jQuery('.pole.phone').blur(function(){
        var re = /^\\+?\\d+\$/;  
        if((jQuery(this).val().length < 2) || (!re.test(jQuery(this).val()))) {
          jQuery('.form_err_msg').remove();
          jQuery(this).addClass('err_pole').after('<span class=\"form_err_msg\">Не верно заполнено поле. Пример: +79501234567</span>');
        } else {
          jQuery(this).removeClass('err_pole');
          jQuery('.form_err_msg').remove();
        }
      });
      jQuery('input[type=submit]').click(function(){
        var send = true;

        form = jQuery(this).parents('form');
        
        jQuery('input.pole', form).each(function(){
          console.log(jQuery(this));
          if(jQuery(this).val().length == 0){
            jQuery(this).addClass('err_pole').after('<span class=\"form_err_msg\">Не верно заполнено поле.</span>');
          }
        })

        if(jQuery('input.err_pole', form).length > 0){
          send = false;
          console.log();
        }
        
        if(send === false){
          alert('Некоторые поля заполненны не верно.');
          return false;
        }
      });
\t\t});
\t</script>
</head>

<body>
<div class=\"over\">
<div class=\"menu\">
\t<div class=\"all\">
\t\t<nav>
\t\t\t";
        // line 86
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
\t\t<a class=\"logo\" href=\"#\"><img alt=\"\" src=\"";
        // line 92
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 93
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
\t\t<div class=\"slogan\">";
        // line 94
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 95
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
        echo "
        <div class=\"zammer-form\">
            <h2>Вызвать замерщика</h2>
            <form method=\"post\" action=\"/feedback/sendorder1/\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <td><input name=\"Order[name]\" class=\"pole name\" value=\"\" placeholder=\"Имя\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"Order[email]\" class=\"pole email\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
              </tr>
              <tr>
                <td><input name=\"Order[phone]\" class=\"pole phone\" value=\"\" placeholder=\"Номер телефона\" type=\"text\"></td>
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
\t</header>
    <div class=\"container\">
        <div class=\"contact-l\">
            <h2>Напишите нам</h2>
            <form id=\"feedback\" action=\"/feedback/send/\" method=\"POST\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <th scope=\"row\">Ваше имя</th>
                <td><input class=\"pole name\" name=\"FbMessages[sndr_name]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Телефон</th>
                <td><input class=\"pole phone\" name=\"FbMessages[sndr_phone]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Электропочта</th>
                <td><input class=\"pole email\" name=\"FbMessages[sndr_email]\" type=\"text\"></td>
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
        // line 148
        $this->displayBlock('coontactscontent', $context, $blocks);
        // line 151
        echo "        </div><!--end contact-r-->
    </div><!--end container-->
    
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
\t\t<div class=\"copy\">© 2014 ASGroup</div>
\t\t<div class=\"tel\">";
        // line 160
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 161
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 162
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

    // line 148
    public function block_coontactscontent($context, array $blocks = array())
    {
        // line 149
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
        return array (  252 => 149,  249 => 148,  236 => 162,  231 => 161,  226 => 160,  215 => 151,  213 => 148,  156 => 95,  151 => 94,  146 => 93,  141 => 92,  131 => 86,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 4,  20 => 1,);
    }
}
