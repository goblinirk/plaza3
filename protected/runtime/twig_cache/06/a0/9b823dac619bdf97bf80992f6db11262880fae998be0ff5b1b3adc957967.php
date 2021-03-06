<?php

/* /views//layouts/main.twig */
class __TwigTemplate_06a09b823dac619bdf97bf80992f6db11262880fae998be0ff5b1b3adc957967 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"/css/style.css?v4\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-responsive.css?v2\" />
\t
\t<script type=\"text/javascript\" src=\"/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

\t<header id=\"header\">
\t\t<h1 class=\"mainlabel\">PLAZA CMS 3.0</h1>
\t\t<div id=\"usermnu\">
\t\t\t<a href=\"/admin/edit_user/1\">Администратор</a>
\t\t\t<a href=\"/site/logout/\">Выход</a>
\t\t\t<a href=\"/admin/help/\">Справка</a>
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
\t\t\t\t\t<li class=\"active\"><a href=\"/admin/pages/\" onclick=\"document.location.href='/admin/pages/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/pages_btn.png\"  width=\"50\" height=\"50\" /><br />Страницы
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"/admin/navigation/\" onclick=\"document.location.href='/admin/navigation/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/nav_btn.png\" width=\"50\" height=\"50\" /><br />Навигация
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"/admin/feedback/\" onclick=\"document.location.href='/admin/feedback/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/forms_btn.png\" width=\"50\" height=\"50\" /><br />Формы
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"/admin/gallery/\" onclick=\"document.location.href='/admin/gallery/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/gallery_btn.png\" width=\"50\" height=\"50\" /><br />Галереи
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"/admin/modules/\" onclick=\"document.location.href='/admin/modules/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/modules_btn.png\" width=\"50\" height=\"50\" /><br />Модули
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"/admin/options\" onclick=\"document.location.href='/admin/options/'\" data-toggle=\"tab\">
\t\t\t\t\t\t<img src=\"/images/options_btn.png\" width=\"50\" height=\"50\" /><br />Настройки
\t\t\t\t\t</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"lA\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"lB\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"lC\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"lD\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"lE\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"lF\">
\t\t\t\t\t\t<br /><p style=\"color: #666;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</aside><!-- #sideLeft -->
\t\t</div>
\t</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
\t<p><i>Разработано в стдии IN-SITE</i></p>
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
        return "/views//layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 33,  150 => 32,  58 => 35,  56 => 32,  27 => 6,  20 => 1,);
    }
}
