<?php

/* /views/galleries/admin.twig */
class __TwigTemplate_25e2d64b865965f7bd09616262153558219513a79a394a07acff1758d1597be3 extends Twig_Template
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
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
\t";
        // line 8
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "

\t";
        // line 10
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScript", array(0 => "search", 1 => "
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
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 30
        $this->env->loadTemplate("views/galleries/_search.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null))));
        // line 31
        echo "\t</div><!-- search-form -->

\t";
        // line 33
        $context["qwert"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "galleries-grid", "dataProvider" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "search"), "filter" => (isset($context["model"]) ? $context["model"] : null), "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn", "template" => "{top}{up}{down}{bottom}&nbsp;&nbsp;&nbsp;{include}&nbsp;&nbsp;&nbsp;{view}{update}{delete}", "buttons" => array("top" => array("label" => "В начало списка", "imageUrl" => "/images/go-top.png", "url" => "\"#\"", "visible" => "true", "click" => "function(){alert(\"Lets go to top!\");return false;}"), "up" => array("label" => "На один уровень вверх", "url" => "\"#\"", "visible" => "true", "imageUrl" => "/images/go-up.png", "click" => "function(){alert(\"Lets go to up!\");return false;}"), "down" => array("label" => "На один уровень вниз", "imageUrl" => "/images/go-down.png", "url" => "\"#\"", "visible" => "true", "click" => "function(){alert(\"Lets go to down!\");return false;}"), "bottom" => array("label" => "В конец списка", "url" => "\"#\"", "visible" => "true", "imageUrl" => "/images/go-bottom.png", "click" => "function(){alert(\"Lets go to bottom!\");return false;}"), "include" => array("label" => "Посмотреть вложенные элементы", "url" => "\"#\"", "visible" => "true", "imageUrl" => "/images/include.png", "click" => "function(){alert(\"Going into gallery!\");return false;}"))))), 2 => true), "method");
        // line 100
        echo "
\t";
        // line 101
        echo (isset($context["qwert"]) ? $context["qwert"] : null);
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
        return array (  83 => 101,  80 => 100,  78 => 33,  74 => 31,  72 => 30,  67 => 28,  58 => 21,  45 => 10,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
