<?php

/* views/layouts/galleries.twig */
class __TwigTemplate_d66e0ef80a67c4a91e9dc0b8731c0289c7249daa2b69fe38c4807e7fd7a757b4 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "title")) ? ($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "seo"), "title")) : ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label"))), "html", null, true);
        echo "</title>
  <!--[if lt IE 9]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
<link href=\"/css/reset.css\" rel=\"stylesheet\" />
<link href=\"/css/style.css\" rel=\"stylesheet\" />
  <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>

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
  <script type=\"text/javascript\">
    \$(function(){

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
    });
  </script>
</head>

<body>
<div class=\"over\">
<div class=\"menu\">
  <div class=\"all\">
    <nav>
      ";
        // line 97
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
    </nav>
  </div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
  <header>
    <a class=\"logo\" href=\"#\"><img alt=\"\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/images/logo.png\">
        <span>";
        // line 104
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</span></a>
    <div class=\"slogan\">";
        // line 105
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "slogan"), 2 => true), "method");
        echo "</div><!--end slogan-->
        ";
        // line 106
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
          <h1>Фотогаллерея</h1>
    <div class=\"content\">
      ";
        // line 133
        $this->displayBlock('innercontent', $context, $blocks);
        // line 136
        echo "    </div><!--end content-->
    </div><!--end container-->
</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
  <footer>
    <div class=\"copy\">© 2014 ASGroup</div>
    <div class=\"tel\">";
        // line 144
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "phone"), 2 => true), "method");
        echo "</div>
        <div class=\"mail\">";
        // line 145
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "email", "maillink" => true), 2 => true), "method");
        echo "</div>
        <div class=\"addr\">";
        // line 146
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "SysRegistry", 1 => array("param" => "address"), 2 => true), "method");
        echo "</div>
        <div class=\"design\">Разработчик: <a href=\"http://in-site.ru\" target=\"_blank\" >In-Site</a></div>
    
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 133
    public function block_innercontent($context, array $blocks = array())
    {
        // line 134
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "views/layouts/galleries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 134,  204 => 133,  192 => 146,  188 => 145,  184 => 144,  174 => 136,  172 => 133,  142 => 106,  138 => 105,  134 => 104,  130 => 103,  121 => 97,  26 => 5,  20 => 1,);
    }
}
