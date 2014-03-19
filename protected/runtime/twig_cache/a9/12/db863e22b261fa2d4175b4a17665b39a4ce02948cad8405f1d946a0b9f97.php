<?php

/* /views/pages/admin.twig */
class __TwigTemplate_a912db863e22b261fa2d4175b4a17665b39a4ce02948cad8405f1d946a0b9f97 extends Twig_Template
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
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (($_mod_ == "pages")) {
            echo "статьями";
        } else {
            echo "новостями";
        }
        echo "</h1>

\t<a href=\"/admin/";
        // line 25
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (($_mod_ == "pages")) {
            echo "add_page";
        } else {
            echo "add_news";
        }
        echo "/\" class=\"btn btn-success btn-lg\" role=\"button\">Добавить ";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (($_mod_ == "pages")) {
            echo "статью";
        } else {
            echo "новость";
        }
        echo "</a>
\t<a href=\"/admin/pages_config/\" class=\"btn btn-default btn-lg\" role=\"button\">Конфигурация</a>

\t";
        // line 28
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 30
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/pages/_search.twig")->display(array_merge($context, array("model" => $_model_)));
        // line 31
        echo "\t</div><!-- search-form -->

\t";
        // line 33
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "pages-grid", "dataProvider" => $this->getAttribute($_model_, "search"), "filter" => $_model_, "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn", "buttons" => array("view" => array("url" => "(\$data->module==\"pages\"? \"/pages/\" : \"/news/\").\$data->id"), "update" => array("url" => "\"/admin/\".(\$data->module==\"pages\"? \"edit_page/\" : \"edit_news/\").\$data->id"))))), 2 => true), "method");
        // line 71
        echo "
\t";
        // line 72
        if (isset($context["qwert"])) { $_qwert_ = $context["qwert"]; } else { $_qwert_ = null; }
        echo $_qwert_;
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
        return array (  113 => 72,  110 => 71,  106 => 33,  102 => 31,  99 => 30,  93 => 28,  75 => 25,  65 => 23,  61 => 21,  47 => 10,  41 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
