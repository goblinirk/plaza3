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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
\t";
        // line 6
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "

\t";
        // line 8
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
        // line 19
        echo "

\t<h1>Управление галереями</h1>

\t<a href=\"/admin/add_gallery/\" class=\"btn btn-success btn-lg\" role=\"button\">Добавить галлерею</a>
\t<a href=\"/admin/galleries_config/\" class=\"btn btn-default btn-lg\" role=\"button\">Конфигурация</a>

\t";
        // line 26
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 28
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/galleries/_search.twig")->display(array_merge($context, array("model" => $_model_)));
        // line 29
        echo "\t</div><!-- search-form -->

\t";
        // line 31
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "galleries-grid", "dataProvider" => $this->getAttribute($_model_, "search"), "filter" => $_model_, "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn"))), 2 => true), "method");
        // line 60
        echo "
\t";
        // line 61
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
        return array (  88 => 61,  85 => 60,  81 => 31,  77 => 29,  74 => 28,  68 => 26,  59 => 19,  45 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
