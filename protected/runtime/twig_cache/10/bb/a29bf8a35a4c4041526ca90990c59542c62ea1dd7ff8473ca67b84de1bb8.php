<?php

/* views/galleryImages/_form.twig */
class __TwigTemplate_10bba29bf8a35a4c4041526ca90990c59542c62ea1dd7ff8473ca67b84de1bb8 extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "gallery-images-form", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "errorSummary", array(0 => $_model_), "method");
        echo "

\t<div class=\"row\">
        ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "thumb"), "method");
        echo "
        ";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "fileField", array(0 => $_model_, 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "hiddenField", array(0 => $_model_, 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "thumb"), "method");
        echo "
        ";
        // line 17
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if ($this->getAttribute($_model_, "thumb")) {
            // line 18
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_model_, "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 20
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 21
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 26
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row --><br />

\t<div class=\"row\">
        ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
        ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "owner_id", 2 => $this->getAttribute($_model_, "items")), "method");
        echo "
        ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "label"), "method");
        echo "
        ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "label"), "method");
        echo "
    </div><!-- /.row -->
    
    <div class=\"row\">
        ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "link"), "method");
        echo "
        ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "link", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "link"), "method");
        echo "
    </div><!-- /.row -->


    <div class=\"row\">
        ";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "description"), "method");
        echo "
        ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "description", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "description"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "status"), "method");
        echo "
        ";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "status"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 62
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => (($this->getAttribute($_model_, "isNewRecord")) ? ("Сохранить") : ("Обновить"))), "method");
        echo "
\t</div>

";
        // line 65
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
        // line 66
        echo "
";
        // line 67
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
";
        // line 68
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "
";
        // line 69
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerScriptFile", array(0 => "/scripts/upload.js"), "method")), "html", null, true);
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
        return array (  216 => 69,  211 => 68,  206 => 67,  203 => 66,  200 => 65,  192 => 62,  183 => 58,  177 => 57,  171 => 56,  162 => 52,  156 => 51,  150 => 50,  140 => 45,  134 => 44,  128 => 43,  119 => 39,  113 => 38,  107 => 37,  98 => 33,  92 => 32,  86 => 31,  79 => 26,  76 => 21,  73 => 20,  66 => 18,  63 => 17,  57 => 16,  51 => 15,  45 => 14,  39 => 13,  31 => 10,  26 => 7,  23 => 3,  19 => 1,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
