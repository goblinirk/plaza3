<?php

/* views/pages/_search.twig */
class __TwigTemplate_0a5bea12573ac0f77d55f0510e59ce6d889a753876f86bdd9a1d99e65fdbbd7e extends Twig_Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("action" => $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "createUrl", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "route")), "method"), "method" => "get", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<div class=\"row\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "id"), "method");
        echo "
        ";
        // line 10
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "id"), "method");
        echo "
    </div><!-- /.row -->
\t<div class=\"row\">
        ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
    </div><!-- /.row -->
\t<div class=\"row\">
        ";
        // line 17
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "author"), "method");
        echo "
        ";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "author", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
        ";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "create_date"), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "create_date", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 42
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "template"), "method");
        echo "
        ";
        // line 43
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "template", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 47
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 48
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array(0 => "Удалена", 1 => "Опубликована", 2 => "В архиве")), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 52
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Поиск"), "method");
        echo "
\t</div>

";
        // line 55
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
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
        return array (  133 => 56,  131 => 55,  125 => 52,  118 => 48,  107 => 43,  96 => 38,  85 => 33,  81 => 32,  74 => 28,  70 => 27,  63 => 23,  59 => 22,  52 => 18,  42 => 14,  38 => 13,  32 => 10,  28 => 9,  24 => 7,  22 => 2,  19 => 1,  201 => 33,  198 => 32,  174 => 80,  162 => 73,  154 => 70,  142 => 63,  132 => 58,  122 => 53,  114 => 47,  106 => 47,  90 => 41,  82 => 35,  80 => 32,  69 => 24,  65 => 23,  61 => 22,  48 => 17,  44 => 11,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  20 => 1,  103 => 42,  100 => 95,  98 => 44,  94 => 31,  92 => 37,  87 => 28,  71 => 25,  62 => 23,  58 => 21,  45 => 10,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
