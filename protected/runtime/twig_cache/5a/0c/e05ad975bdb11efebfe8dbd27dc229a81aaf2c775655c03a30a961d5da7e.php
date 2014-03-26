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
  <script type=\"text/javascript\" src=\"/add-ons/source/jquery.fancybox.js?v=2.1.5\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/add-ons/source/jquery.fancybox.css?v=2.1.5\" media=\"screen\" />

  <!-- Add Button helper (this is optional) -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/add-ons/source/helpers/jquery.fancybox-buttons.css?v=1.0.5\" />
  <script type=\"text/javascript\" src=\"/add-ons/source/helpers/jquery.fancybox-buttons.js?v=1.0.5\"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/add-ons/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7\" />
  <script type=\"text/javascript\" src=\"/add-ons/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7\"></script>

  <!-- Add Media helper (this is optional) -->
  <script type=\"text/javascript\" src=\"/add-ons/source/helpers/jquery.fancybox-media.js?v=1.0.6\"></script>
  <script type=\"text/javascript\">
    \$(document).ready(function() {
      \$(\"a[rel=example_group]\").fancybox({
      'padding' : 5
      
      });
    });
  </script>
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
        // line 109
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t\t
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
        <a class=\"logo\" href=\"/\"><img alt=\"\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 117
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
        <div class=\"slogan\">";
        // line 118
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 119
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "banner"), 2 => true), "method");
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
    </header>
    <div class=\"container\">
    ";
        // line 144
        $this->displayBlock('innercontent', $context, $blocks);
        // line 147
        echo "    </div><!--end container-->
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
        <div class=\"copy\">© 2014 ASGroup</div>
        <div class=\"tel\">";
        // line 154
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 155
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 156
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик: <a href=\"http://in-site.ru\" target=\"_blank\" >In-Site</a></div>
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 144
    public function block_innercontent($context, array $blocks = array())
    {
        // line 145
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
        return array (  231 => 145,  228 => 144,  217 => 156,  213 => 155,  209 => 154,  200 => 147,  198 => 144,  170 => 119,  166 => 118,  162 => 117,  158 => 116,  148 => 109,  49 => 13,  43 => 10,  39 => 9,  34 => 7,  30 => 6,  25 => 4,  20 => 1,);
    }
}
