<?php

/* /views/pages/admin.twig */
class __TwigTemplate_f9a7d00867dee4dac267497531be8b05471d08012f57ac1c07237bf58cdf09f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
\t";
        // line 8
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "

\t";
        // line 10
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScript", array(0 => "search", 1 => "
\t\$('.search-button').click(function(){
\t    \$('.search-form').toggle();
\t    return false;
\t});
\t\$('.search-form form').submit(function(){
\t    \$.fn.yiiGridView.update('pages-grid', {
\t        data: \$(this).serialize()
\t    });
\t    return false;
\t});
\t"), "method")), "html", null, true);
        // line 21
        echo "

\t<h1>Управление ";
        // line 23
        if (((isset($context["mod"]) ? $context["mod"] : null) == "pages")) {
            echo "статьями";
        } else {
            echo "новостями";
        }
        echo "</h1>

\t<a href=\"/admin/";
        // line 25
        if (((isset($context["mod"]) ? $context["mod"] : null) == "pages")) {
            echo "add_page";
        } else {
            echo "add_news";
        }
        echo "/\" class=\"btn btn-success btn-lg\" role=\"button\">Добавить ";
        if (((isset($context["mod"]) ? $context["mod"] : null) == "pages")) {
            echo "статью";
        } else {
            echo "новость";
        }
        echo "</a>
\t<a href=\"/admin/pages_config/\" class=\"btn btn-default btn-lg\" role=\"button\">Конфигурация</a>

\t";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 30
        $this->env->loadTemplate("views/pages/_search.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null))));
        // line 31
        echo "\t</div><!-- search-form -->

\t";
        // line 33
        $context["qwert"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "pages-grid", "dataProvider" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "search"), "filter" => (isset($context["model"]) ? $context["model"] : null), "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn", "template" => "{top}{up}{down}{bottom}&nbsp;&nbsp;&nbsp;{view}{update}{delete}", "buttons" => array("view" => array("url" => "(\$data->module==\"pages\"? \"/pages/\" : \"/news/\").\$data->id"), "update" => array("url" => "\"/admin/\".(\$data->module==\"pages\"? \"edit_page/\" : \"edit_news/\").\$data->id"), "top" => array("label" => "В начало списка", "imageUrl" => "/images/go-top.png", "url" => "\"/pages/movetop/\".\$data->id", "visible" => "true"), "up" => array("label" => "На один уровень вверх", "url" => "\"/pages/moveup/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-up.png"), "down" => array("label" => "На один уровень вниз", "imageUrl" => "/images/go-down.png", "url" => "\"/pages/movedown/\".\$data->id", "visible" => "true"), "bottom" => array("label" => "В конец списка", "url" => "\"/pages/movebottom/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-bottom.png"))))), 2 => true), "method");
        // line 95
        echo "
\t";
        // line 96
        echo (isset($context["qwert"]) ? $context["qwert"] : null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/pages/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 96,  100 => 95,  98 => 33,  94 => 31,  92 => 30,  87 => 28,  71 => 25,  62 => 23,  58 => 21,  45 => 10,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
