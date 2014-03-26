<?php

/* /views/galleries/admin_images.twig */
class __TwigTemplate_ef0c50bb80335a221546895a83994b2ef7dd3713c68041a7825422015fb7ac59 extends Twig_Template
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

\t<a href=\"/admin/add_image/\" class=\"btn btn-success btn-lg\" role=\"button\">Добавить изображение</a>

\t";
        // line 27
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "link", array(0 => "Расширенный поиск", 1 => "#", 2 => array("class" => "btn btn-default btn-lg search-button")), "method");
        echo "
\t<div class=\"search-form\" style=\"display:none\">
\t";
        // line 29
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/galleries/_search.twig")->display(array_merge($context, array("model" => $_model_)));
        // line 30
        echo "\t</div><!-- search-form -->

\t";
        // line 32
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "ext.JTreeTable.JTreeTable", 1 => array("id" => "galleries-grid", "dataProvider" => $this->getAttribute($_model_, "search"), "filter" => $_model_, "template" => "{pager} {items} {pager}", "itemsCssClass" => "table table-striped", "primaryColumn" => "id", "parentColumn" => "owner_id", "ajaxUpdate" => "false", "ajaxVar" => "false", "jstree_options" => array("initialState" => "expanded"), "columns" => array(0 => array("name" => "label", "type" => "raw", "value" => "CHtml::link(CHtml::encode(\$data->label.\" [ \".\$data->id.\" ]\"), \$data->editurl)"), 1 => array("name" => "create_date", "value" => "Yii::app()->dateFormatter->format(\"dd MMM y\",strtotime(\$data->create_date))", "filter" => false), 2 => array("class" => "CButtonColumn", "template" => "{top}{up}{down}{bottom}&nbsp;&nbsp;&nbsp;{update}{delete}", "buttons" => array("update" => array("url" => "\"/admin/edit_image/\".\$data->id"), "delete" => array("url" => "\"/admin/delete_image/\".\$data->id"), "top" => array("label" => "В начало списка", "imageUrl" => "/images/go-top.png", "url" => "\"/galleries/moveimagetop/\".\$data->id", "visible" => "true"), "up" => array("label" => "На один уровень вверх", "url" => "\"/galleries/moveimageup/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-up.png"), "down" => array("label" => "На один уровень вниз", "imageUrl" => "/images/go-down.png", "url" => "\"/galleries/moveimagedown/\".\$data->id", "visible" => "true"), "bottom" => array("label" => "В конец списка", "url" => "\"/galleries/moveimagebottom/\".\$data->id", "visible" => "true", "imageUrl" => "/images/go-bottom.png"))))), 2 => true), "method");
        // line 94
        echo "
\t";
        // line 95
        if (isset($context["qwert"])) { $_qwert_ = $context["qwert"]; } else { $_qwert_ = null; }
        echo $_qwert_;
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/galleries/admin_images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 95,  86 => 94,  82 => 32,  78 => 30,  75 => 29,  69 => 27,  61 => 21,  47 => 10,  41 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
