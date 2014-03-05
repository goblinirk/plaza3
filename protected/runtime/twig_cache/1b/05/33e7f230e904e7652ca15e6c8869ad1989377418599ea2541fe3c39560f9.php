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
\t\t\t
<!--\t\t\t<ul>
             <li><a href=\"#\"><span class=\"str\"></span>О компании</a>
             <ul>
             \t<li><a href=\"#\">Строительство</a>
                \t<ul>
                    <li><a href=\"#\">Домов</a></li>
                    <li><a href=\"#\">Бань</a></li>
                    </ul>
                </li>
                    <li><a href=\"#\">Ремонт,  отделка помещений</a>
                        <ul>
                            <li><a href=\"#\">Отделочные работы</a></li>
                            <li><a href=\"#\">Электромонтажные работы</a></li>
                            <li><a href=\"#\">Сантехнические работы</a></li>
                            <li><a href=\"#\">Натяжные потолки</a></li>
                            <li><a href=\"#\">Изготовление и монтаж 
                            изделий из стекла</a></li>
                            <li><a href=\"#\">Изготовление и монтаж 
                            дверей и лестниц</a></li>
                            <li><a href=\"#\">Изготовление и монтаж 
                            паркета любой сложности  </a></li>     
                        </ul>                    
                    </li>
                    <li><a  class=\"acitve\" href=\"#\">Ландшафтный  дизайн</a>
                        <ul>
                            <li><a href=\"#\">Составление ФОР эскиза</a></li> 
                            <li><a class=\"acitve\" href=\"#\">Составление 
                            детализированного
                            проекта</a></li> 
                            <li><a href=\"#\">Рокарии</a></li> 
                            <li><a href=\"#\">Водоемы</a></li> 
                        </ul>                                        
                    </li>
                    <li><a href=\"#\">Проектирование, дизайн интерьеров</a> </li>
                    <li><a href=\"#\">Сантехнические, электромонтажные работы</a></li>
             </ul>
             </li>
             <li class=\"active\"><a href=\"#\"><span class=\"str\"></span>Услуги</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Цены</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Фотогалерея</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Акции</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Вакансии</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Учебный центр</a></li>
             <li><a href=\"#\"><span class=\"str\"></span>Контакты</a></li>
\t\t\t</ul>
-->\t\t\t
\t\t</nav>
\t</div><!--end all-->
</div><!--end menu-->
<div class=\"all\">
\t<header>
\t\t<a class=\"logo\" href=\"#\"><img alt=\"\" src=\"";
        // line 85
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/logo.png\"><span>(3952) 672-295</span></a>
\t\t<div class=\"slogan\">
        На финише побеждает 
        качество с компанией 
        «АС группа»
        </div><!--end slogan-->
        <div class=\"top-banner\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 91
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/zamer.png\"></a></div>
\t</header>
    <div class=\"slider\">
            <div id=\"slides\">
                <div class=\"slides_container\">
                    <a href=\"#\"><img src=\"";
        // line 96
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/slide.png\" alt=\"Slide 1\"></a>
                    <a href=\"#\"><img src=\"";
        // line 97
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/slide.png\" alt=\"Slide 1\"></a>
                    <a href=\"#\"><img src=\"";
        // line 98
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/slide.png\" alt=\"Slide 1\"></a>
                </div>
                <a href=\"#\" class=\"prev\"></a>
                <a href=\"#\" class=\"next\"></a>
                
            </div>    
    </div><!--end slider-->
    <div class=\"circles\">
        <div class=\"circ ci1\">
            <a href=\"#\">
            <span class=\"ico\"><img alt=\"\" src=\"";
        // line 108
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/ci1.png\"></span>
            <span class=\"txt\">Строительство<br> домов и бань</span>
            </a>
        </div>
        <div class=\"circ ci2\">
            <a href=\"#\">
            <span class=\"ico\"><img alt=\"\" src=\"";
        // line 114
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/ci2.png\"></span>
            <span class=\"txt\">Ремонт<br>отделка помещений</span>
            </a>
        </div>
        <div class=\"circ ci3\">
            <a href=\"#\">
            <span class=\"ico\"><img alt=\"\" src=\"";
        // line 120
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/ci3.png\"></span>
            <span class=\"txt\">Дизайн интерьеров<br>проектирование</span>
            </a>
            <div class=\"list-link\">
                <div class=\"str\"></div>
                <ul>
                    <li><a href=\"#\">Изготовление и монтаж дверей и лестниц из массива дерева</a></li>
                    <li><a href=\"#\">Отделочные работы</a></li>
                    <li class=\"active\"><a href=\"#\">Электромонтажные работы</a></li>
                    <li><a href=\"#\">Сантехнические работы</a></li>
                    <li><a href=\"#\">Натяжные потолки</a></li>
                    <li><a href=\"#\">Изготовление и монтаж изделий из стекла</a></li>                
                </ul>
            </div><!--end list-link-->
        </div>
        <div class=\"circ ci4\">
            <a href=\"#\">
            <span class=\"ico\"><img alt=\"\" src=\"";
        // line 137
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/ci4.png\"></span>
            <span class=\"txt\">Ландшафтный<br>дизайн</span>
            </a>
        </div>
        <div class=\"circ ci5\">
            <a href=\"#\">
            <span class=\"ico\"><img alt=\"\" src=\"";
        // line 143
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/ci5.png\"></span>
            <span class=\"txt\">Изделия<br>из стекла</span>
            </a>
        </div>
    </div><!--end circlres-->
    <div class=\"b-news\">
        <div class=\"titl\">Новости</div>
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 151
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"#\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 154
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"#\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 163
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"#\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 166
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"#\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
        <div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
        // line 175
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"#\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 178
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
        echo "/images/img.png\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           Установка пластикового окна подходящего для сохранения тепла; 2. Перенос батареи, ранее ...
                </div><!--end txt-->
                <a href=\"#\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
    </div><!--end b-news-->
    ";
        // line 187
        $this->displayBlock('maincontent', $context, $blocks);
        // line 190
        echo "</div><!--ed alll-->
<div class=\"f-clear\"></div>
</div><!--end over-->
<div class=\"all\">
\t<footer>
\t\t<div class=\"copy\">© 2014 ASGroup</div>
\t\t<div class=\"tel\">(3952) 672-295</div>
        <div class=\"mail\"><a href=\"mailto:info@asgroup.ru\">info@asgroup.ru</a></div>
        <div class=\"addr\">Иркутск, ул. Пролетарская, д 5</div>
        <div class=\"design\">Разработчик:<a href=\"#\">In-Site</a></div>
    
    </footer>
</div><!--end all-->
</body>
</html>
";
    }

    // line 187
    public function block_maincontent($context, array $blocks = array())
    {
        // line 188
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
        return array (  324 => 188,  321 => 187,  302 => 190,  300 => 187,  287 => 178,  280 => 175,  267 => 166,  260 => 163,  247 => 154,  240 => 151,  228 => 143,  218 => 137,  197 => 120,  187 => 114,  177 => 108,  163 => 98,  158 => 97,  153 => 96,  144 => 91,  134 => 85,  77 => 32,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 4,  20 => 1,  58 => 15,  51 => 13,  48 => 12,  39 => 7,  34 => 6,  30 => 4,  27 => 3,);
    }
}
