<?php

/* views/galleryImages/_form.twig */
class __TwigTemplate_89729d040f919e20073f1315bb175ae985f7d712f5cb98cbe6173876371db6c2 extends Twig_Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "gallery-images-form", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t";
        // line 10
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "errorSummary", array(0 => (isset($context["model"]) ? $context["model"] : null)), "method");
        echo "

\t<div class=\"row\">
        ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hiddenField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 16
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 17
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb")) {
            // line 18
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 20
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 26
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row --><br />

\t<div class=\"row\">
        ";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
    </div><!-- /.row -->
    
    <div class=\"row\">
        ";
        // line 43
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "link"), "method");
        echo "
        ";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "link", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "link"), "method");
        echo "
    </div><!-- /.row -->


    <div class=\"row\">
        ";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
        ";
        // line 51
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 52
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 56
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 57
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 58
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Сохранить") : ("Обновить"))), "method");
        echo "
\t</div>

";
        // line 65
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 66
        echo "
";
        // line 67
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
";
        // line 68
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "
";
        // line 69
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/upload.js"), "method")), "html", null, true);
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/galleryImages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 69,  163 => 68,  159 => 67,  156 => 66,  154 => 65,  148 => 62,  141 => 58,  137 => 57,  133 => 56,  126 => 52,  122 => 51,  118 => 50,  110 => 45,  106 => 44,  102 => 43,  95 => 39,  91 => 38,  87 => 37,  80 => 33,  76 => 32,  72 => 31,  65 => 26,  63 => 21,  60 => 20,  54 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  30 => 10,  25 => 7,  23 => 3,  19 => 1,);
    }
}
