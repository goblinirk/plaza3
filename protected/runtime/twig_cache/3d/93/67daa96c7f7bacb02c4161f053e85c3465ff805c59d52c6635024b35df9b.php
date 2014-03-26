<?php

/* views/galleries/_form.twig */
class __TwigTemplate_3d9367daa96c7f7bacb02c4161f053e85c3465ff805c59d52c6635024b35df9b extends Twig_Template
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

\t<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hiddenField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 22
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb")) {
            // line 23
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 25
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 26
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 31
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 42
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
        ";
        // line 43
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 48
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 49
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

\t<div class=\"row buttons\">
\t\t";
        // line 55
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 58
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 59
        echo "
";
        // line 60
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
";
        // line 61
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "
";
        // line 62
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/upload.js"), "method")), "html", null, true);
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/galleries/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  144 => 61,  140 => 60,  137 => 59,  135 => 58,  129 => 55,  121 => 50,  117 => 49,  113 => 48,  106 => 44,  102 => 43,  98 => 42,  91 => 38,  87 => 37,  83 => 36,  76 => 31,  74 => 26,  71 => 25,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  40 => 14,  36 => 13,  32 => 12,  25 => 7,  23 => 3,  19 => 1,  37 => 6,  31 => 4,  28 => 3,);
    }
}
