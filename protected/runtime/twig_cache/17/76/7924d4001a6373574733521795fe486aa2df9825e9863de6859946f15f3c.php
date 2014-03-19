<?php

/* views/galleries/_form.twig */
class __TwigTemplate_17767924d4001a6373574733521795fe486aa2df9825e9863de6859946f15f3c extends Twig_Template
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
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
        ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "owner_id", 2 => $this->getAttribute($_model_, "items")), "method");
        echo "
        ";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "label"), "method");
        echo "
        ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "description"), "method");
        echo "
        ";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "description", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "description"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "status"), "method");
        echo "
        ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

\t<div class=\"row buttons\">
\t\t";
        // line 37
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => (($this->getAttribute($_model_, "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 40
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
        // line 41
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
        return array (  129 => 41,  126 => 40,  118 => 37,  108 => 32,  102 => 31,  96 => 30,  87 => 26,  81 => 25,  75 => 24,  66 => 20,  60 => 19,  54 => 18,  45 => 14,  39 => 13,  33 => 12,  26 => 7,  23 => 3,  19 => 1,  38 => 6,  31 => 4,  28 => 3,);
    }
}
