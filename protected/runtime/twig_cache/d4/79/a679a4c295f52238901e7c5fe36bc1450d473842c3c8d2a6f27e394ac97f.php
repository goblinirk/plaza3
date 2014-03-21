<?php

/* views/layouts/admin.twig */
class __TwigTemplate_d479a679a4c295f52238901e7c5fe36bc1450d473842c3c8d2a6f27e394ac97f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pagetitle"), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/admin.css?v5\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/css/bootstrap-responsive.css?v2\" />
\t
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/add-ons/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/css/style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

\t<header id=\"header\">
\t\t<h1 class=\"mainlabel\">PLAZA CMS 3.0</h1>
\t\t<div id=\"usermnu\">
\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/admin/edit_user/1\">Администратор</a>
\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/site/logout/\">Выход</a>
\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
        echo "/admin/help/\">Справка</a>
\t\t</div>
\t</header><!-- #header-->

\t<section id=\"middle\">
\t\t<div id=\"midwrap\">
\t\t<div id=\"container\">
\t\t\t<div id=\"content\"><div id=\"contwrap\">
\t\t\t\t";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t\t\t</div></div><!-- #content-->
\t\t</div><!-- #container-->

\t\t<aside id=\"sideLeft\">
\t\t\t<div class=\"tabbable tabs-left\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li ";
        // line 41
        if ((isset($context["pageactive"]) ? $context["pageactive"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"/admin/pages/\" onclick=\"document.location.href='/admin/pages/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/pages_btn.png\"  width=\"35\" height=\"35\" /><br />Страницы
\t\t\t\t\t</a></li>
\t\t\t\t\t<li ";
        // line 44
        if ((isset($context["feedbackctive"]) ? $context["feedbackctive"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"/admin/feedback/\" onclick=\"document.location.href='/admin/feedback/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/forms_btn.png\" width=\"35\" height=\"35\" /><br />Формы
\t\t\t\t\t</a></li>
\t\t\t\t\t<li ";
        // line 47
        if ((isset($context["galleryactive"]) ? $context["galleryactive"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"/admin/galleries/\" onclick=\"document.location.href='/admin/galleries/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/gallery_btn.png\" width=\"35\" height=\"35\" /><br />Галереи
\t\t\t\t\t</a></li>
\t\t\t\t\t<li ";
        // line 50
        if ((isset($context["moduleactive"]) ? $context["moduleactive"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"/admin/modules/\" onclick=\"document.location.href='/admin/modules/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/modules_btn.png\" width=\"35\" height=\"35\" /><br />Модули
\t\t\t\t\t</a></li>
\t\t\t\t\t<li ";
        // line 53
        if ((isset($context["optionactive"]) ? $context["optionactive"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"/admin/options\" onclick=\"document.location.href='/admin/options/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/options_btn.png\" width=\"35\" height=\"35\" /><br />Настройки
\t\t\t\t\t</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane ";
        // line 58
        if ((isset($context["pageactive"]) ? $context["pageactive"] : null)) {
            echo " active ";
        }
        echo "\" id=\"lA\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">В данном разделе вы можете редактировать информацию на страницах вашего сайта, создавать новые страницы, а так же заниматься публикацией новостей.</p><br />
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/pages/\">Управление страницами</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/news/\">Управление новостями</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane ";
        // line 63
        if ((isset($context["feedbackctive"]) ? $context["feedbackctive"] : null)) {
            echo " active ";
        }
        echo "\" id=\"lB\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">В данном разделе вы можете читать сообщения пользователей с сайта, настраивать электронный адрес для оповещений с сайта, и отвечать пользователям.</p>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/fb_contacts/\">Обратная связь</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/fb_otziv/\">Отзывы</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/fb_order1/\">Заявки</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/fb_order2/\">Заказ замерщика</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane ";
        // line 70
        if ((isset($context["galleryactive"]) ? $context["galleryactive"] : null)) {
            echo " active ";
        }
        echo "\" id=\"lC\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">В данном разделе вы можете редактировать медиа содержимое вашего сайта, создавать новые галереи, загружать изображения и управлять их отображением.</p><p style=\"color: #666;\">Для просмотра, уже загруженных, изображений перейдите в раздел <q>Посмотреть вложенные изображения</q> интересующей вас галереи.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane ";
        // line 73
        if ((isset($context["moduleactive"]) ? $context["moduleactive"] : null)) {
            echo " active ";
        }
        echo "\" id=\"lD\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">В данном разделе вы можете редактировать отдельные блоки вашего сайта, для того, что бы наать выберете интересующий вас модуль.</p><br />
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/mod_slider/\">Управление слайдером</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/mod_circles/\">Управление кругами</a>
\t\t\t\t\t\t<a style=\"display: block;padding: 10px 0px;text-align: center;border-top: 1px solid #B8B8B8;\" href=\"/admin/mod_banners/\">Управление баннерами</a>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane ";
        // line 80
        if ((isset($context["optionactive"]) ? $context["optionactive"] : null)) {
            echo " active ";
        }
        echo "\" id=\"lE\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">В этом разделе вы можете управлять основными настройками и переменными окружения вашего сайта.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</aside><!-- #sideLeft -->
\t\t</div>
\t</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
\t<p><i>Разработано в студии IN-SITE</i></p>
</footer><!-- #footer -->

</body>
</html>";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "views/layouts/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 33,  198 => 32,  174 => 80,  162 => 73,  154 => 70,  142 => 63,  132 => 58,  122 => 53,  114 => 50,  106 => 47,  98 => 44,  90 => 41,  82 => 35,  80 => 32,  69 => 24,  65 => 23,  61 => 22,  48 => 12,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
