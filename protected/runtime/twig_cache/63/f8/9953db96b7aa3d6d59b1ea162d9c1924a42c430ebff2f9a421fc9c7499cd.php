<?php

/* views/pages/_search.twig */
class __TwigTemplate_63f89953db96b7aa3d6d59b1ea162d9c1924a42c430ebff2f9a421fc9c7499cd extends Twig_Template
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
        // line 2
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("action" => $this->getAttribute($_App_, "createUrl", array(0 => $this->getAttribute($_this_, "route")), "method"), "method" => "get", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<div class=\"row\">
        ";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "id"), "method");
        echo "
        ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "id"), "method");
        echo "
    </div><!-- /.row -->
\t<div class=\"row\">
        ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
        ";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "owner_id", 2 => $this->getAttribute($_model_, "items")), "method");
        echo "
    </div><!-- /.row -->
\t<div class=\"row\">
        ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "author"), "method");
        echo "
        ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "author", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "label"), "method");
        echo "
        ";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "short_text"), "method");
        echo "
        ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "short_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "full_text"), "method");
        echo "
        ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "full_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "create_date"), "method");
        echo "
        ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "create_date", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "template"), "method");
        echo "
        ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "template", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "status"), "method");
        echo "
        ";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "status", 2 => array(0 => "Удалена", 1 => "Опубликована", 2 => "В архиве")), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 52
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Поиск"), "method");
        echo "
\t</div>

";
        // line 55
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
        // line 56
        echo "
</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/pages/_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  170 => 55,  163 => 52,  154 => 48,  148 => 47,  139 => 43,  133 => 42,  124 => 38,  118 => 37,  109 => 33,  103 => 32,  94 => 28,  88 => 27,  79 => 23,  73 => 22,  64 => 18,  58 => 17,  50 => 14,  44 => 13,  26 => 7,  22 => 2,  19 => 1,  219 => 33,  216 => 32,  191 => 79,  180 => 74,  171 => 71,  157 => 63,  146 => 58,  135 => 53,  126 => 50,  117 => 47,  108 => 44,  91 => 35,  89 => 32,  77 => 24,  72 => 23,  67 => 22,  53 => 12,  48 => 11,  42 => 9,  37 => 8,  32 => 7,  27 => 6,  20 => 1,  113 => 72,  110 => 71,  106 => 33,  102 => 31,  99 => 41,  93 => 28,  75 => 25,  65 => 23,  61 => 21,  47 => 10,  41 => 8,  36 => 10,  33 => 6,  30 => 9,  25 => 3,);
    }
}
