<?php

/* /views/galleries/admin.twig */
class __TwigTemplate_f3abfed4e795c0b0ce8bbe3c403bea49770195f56f8a550313811c1c3ad118a1 extends Twig_Template
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
        $context["galleryactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
\t";
        // line 8
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "

\t";
        // line 10
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerScript", array(0 => "search", 1 => "
\t    \$('.search-button').click(function(){
\t\t\t\$('.search-form').toggle();
\t\t\treturn false;
\t\t});
\t\t\$('.search-form form').submit(function(){
\t\t\t\$('#galleries-grid').yiiGridView('update', {
\t\t\t\tdata: \$(this).serialize()
\t\t\t});
\t\t\treturn false;
\t\t});
\t"), "method")), "html", null, true);
        // line 21
        echo "

\t<h1>Управление галереями</h1>

\t<a href=\"/admin/add_gallery/\" class=\"btn btn-success btn-lg\" role=\"button\">Добавить галлерею</a>
\t<a href=\"/admin/galleries_config/\" class=\"btn btn-default btn-lg\" role=\"button\">Конфигурация</a>

\t";
        // line 28
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 30
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/galleries/_search.twig")->display(array_merge($context, array("model" => $_model_)));
        // line 31
        echo "\t</div><!-- search-form -->

\t";
        // line 33
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "galleries-grid", "dataProvider" => $this->getAttribute($_model_, "search"), "filter" => $_model_, "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn", "template" => "{top}{up}{down}{bottom}&nbsp;&nbsp;&nbsp;{include}&nbsp;&nbsp;&nbsp;{view}{update}{delete}", "buttons" => array("top" => array("label" => "В начало списка", "imageUrl" => "/images/go-top.png", "url" => "\"/galleries/movetop/\".\$data->id", "visible" => "true"), "up" => array("label" => "На один уровень вверх", "url" => "\"/galleries/moveup/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-up.png"), "down" => array("label" => "На один уровень вниз", "imageUrl" => "/images/go-down.png", "url" => "\"/galleries/movedown/\".\$data->id", "visible" => "true"), "bottom" => array("label" => "В конец списка", "url" => "\"/galleries/movebottom/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-bottom.png"), "include" => array("label" => "Посмотреть вложенные элементы", "url" => "\"/admin/gallery_images/\".\$data->id", "visible" => "true", "imageUrl" => "/images/include.png"))))), 2 => true), "method");
        // line 95
        echo "
\t";
        // line 96
        if (isset($context["qwert"])) { $_qwert_ = $context["qwert"]; } else { $_qwert_ = null; }
        echo $_qwert_;
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/galleries/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 96,  87 => 95,  83 => 33,  79 => 31,  76 => 30,  70 => 28,  61 => 21,  47 => 10,  41 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
