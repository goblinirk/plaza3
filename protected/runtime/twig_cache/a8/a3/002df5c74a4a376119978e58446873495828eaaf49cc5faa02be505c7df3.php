<?php

/* views/seo/_form.twig */
class __TwigTemplate_a8a3002df5c74a4a376119978e58446873495828eaaf49cc5faa02be505c7df3 extends Twig_Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "seo-form", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "
\t<p class=\"note\">Fields with <span class=\"required\">*</span> are required.</p>

\t<div class=\"row\">
\t\t";
        // line 11
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias"), "method");
        echo "
        ";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 17
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title"), "method");
        echo "
        ";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url"), "method");
        echo "
        ";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
        ";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords"), "method");
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description"), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description"), "method");
        echo "
\t</div>


\t<div class=\"row buttons\">
\t\t";
        // line 44
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>


";
        // line 48
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 49
        echo "
</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/seo/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  109 => 44,  69 => 25,  65 => 24,  61 => 23,  54 => 19,  50 => 18,  46 => 17,  39 => 13,  35 => 12,  31 => 11,  138 => 57,  136 => 56,  129 => 52,  125 => 50,  123 => 49,  116 => 48,  112 => 44,  108 => 43,  101 => 39,  97 => 38,  93 => 37,  86 => 33,  82 => 32,  78 => 31,  71 => 27,  67 => 26,  63 => 25,  56 => 21,  52 => 20,  48 => 19,  41 => 15,  37 => 14,  33 => 13,  25 => 7,  23 => 3,  19 => 1,);
    }
}
