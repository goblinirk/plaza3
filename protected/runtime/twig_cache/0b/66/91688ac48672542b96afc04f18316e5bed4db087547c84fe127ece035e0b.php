<?php

/* views/pages/_form.twig */
class __TwigTemplate_0b6691688ac48672542b96afc04f18316e5bed4db087547c84fe127ece035e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form\">

";
        // line 3
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
        // line 8
        echo "

\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 16
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
        ";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hiddenField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb")) {
            // line 31
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 33
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 39
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
        ";
        // line 45
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.yii-tinymce.TinyMce", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null), "attribute" => "short_text", "spellcheckerUrl" => "http://speller.yandex.net/services/tinyspell", "fileManager" => array("class" => "ext.yii-elfinder.TinyMceElFinder", "connectorRoute" => "admin/elfinder/connector"), "htmlOptions" => array("rows" => 6, "cols" => 20)), 2 => true), "method");
        // line 57
        echo "
        ";
        // line 58
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 62
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
        ";
        // line 63
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.yii-tinymce.TinyMce", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null), "attribute" => "full_text", "spellcheckerUrl" => "http://speller.yandex.net/services/tinyspell", "fileManager" => array("class" => "ext.yii-elfinder.TinyMceElFinder", "connectorRoute" => "admin/elfinder/connector"), "htmlOptions" => array("rows" => 6, "cols" => 20)), 2 => true), "method");
        // line 75
        echo "
        ";
        // line 76
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
    </div><!-- /.row -->



    <div class=\"row\">
        ";
        // line 82
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 83
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 84
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

";
        // line 88
        $this->env->loadTemplate("views/pages/_seoform.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null), "registry" => (isset($context["registry"]) ? $context["registry"] : null))));
        // line 89
        echo "
\t<div class=\"row buttons\">
\t\t";
        // line 91
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 94
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 95
        echo "
";
        // line 96
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/transliteration.js"), "method")), "html", null, true);
        echo "
";
        // line 97
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScript", array(0 => "translit", 1 => "
    el = document.getElementById('Pages_label');
    el.onkeyup = function(e) { oJS.strNormalize(this); }
    oJS.strNormalize(el);
    "), "method")), "html", null, true);
        // line 101
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/pages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 101,  169 => 97,  165 => 96,  162 => 95,  160 => 94,  154 => 91,  150 => 89,  148 => 88,  141 => 84,  137 => 83,  133 => 82,  124 => 76,  121 => 75,  119 => 63,  115 => 62,  108 => 58,  105 => 57,  103 => 45,  99 => 44,  92 => 39,  90 => 34,  87 => 33,  81 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  56 => 22,  52 => 21,  48 => 20,  41 => 16,  37 => 15,  33 => 14,  25 => 8,  23 => 3,  19 => 1,);
    }
}
