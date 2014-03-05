<?php

/* /views/pages/_seoform.twig */
class __TwigTemplate_68b71efe74b7ca3e5bec7e1b3d780646bf622fe63eb6ace7c033710ae1273a6b extends Twig_Template
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
        echo "<div class=\"seoform\">

\t<div class=\"row\">
\t\t";
        // line 4
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "alias"), "method");
        echo "
        ";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "alias", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "alias"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 10
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title"), "method");
        echo "
        ";
        // line 11
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 16
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title"), "method");
        echo "
        ";
        // line 17
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "redirect_url"), "method");
        echo "
        ";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "redirect_url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
        ";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "redirect_url"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_keywords"), "method");
        echo "
        ";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_keywords", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_keywords"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_description"), "method");
        echo "
        ";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_description", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seoform"]) ? $context["seoform"] : null), 1 => "meta_description"), "method");
        echo "
\t</div>

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "/views/pages/_seoform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  105 => 37,  101 => 36,  94 => 32,  90 => 31,  86 => 30,  77 => 24,  73 => 23,  69 => 22,  62 => 18,  58 => 17,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  32 => 6,  28 => 5,  140 => 57,  138 => 56,  132 => 53,  125 => 49,  121 => 48,  117 => 47,  110 => 43,  106 => 42,  102 => 41,  95 => 37,  91 => 36,  87 => 35,  80 => 31,  76 => 30,  72 => 29,  65 => 25,  61 => 24,  57 => 23,  50 => 19,  46 => 18,  42 => 17,  37 => 14,  35 => 12,  30 => 10,  24 => 4,  22 => 2,  19 => 1,);
    }
}
