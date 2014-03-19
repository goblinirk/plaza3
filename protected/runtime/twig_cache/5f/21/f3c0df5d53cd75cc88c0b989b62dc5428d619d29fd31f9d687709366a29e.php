<?php

/* views/pages/_seoform.twig */
class __TwigTemplate_5f21f3c0df5d53cd75cc88c0b989b62dc5428d619d29fd31f9d687709366a29e extends Twig_Template
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
        ";
        // line 4
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "show_in_nav"), "method");
        echo "
        ";
        // line 5
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "show_in_nav", 2 => array("1" => " Да ", "0" => " Нет ")), "method");
        echo "
        ";
        // line 6
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "show_in_nav"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
\t\t";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "nav_label"), "method");
        echo "
        ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "nav_label", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "nav_label"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "template"), "method");
        echo "
        ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "template", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "template"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_seo_, 1 => "alias"), "method");
        echo "
        ";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_seo_, 1 => "alias", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_seo_, 1 => "alias"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_seo_, 1 => "redirect_url"), "method");
        echo "
        ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_seo_, 1 => "redirect_url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
        ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_seo_, 1 => "redirect_url"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_seo_, 1 => "title"), "method");
        echo "
        ";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_seo_, 1 => "title", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_seo_, 1 => "title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_seo_, 1 => "meta_keywords"), "method");
        echo "
        ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_seo_, 1 => "meta_keywords", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_seo_, 1 => "meta_keywords"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_seo_, 1 => "meta_description"), "method");
        echo "
        ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_seo_, 1 => "meta_description", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_seo_, 1 => "meta_description"), "method");
        echo "
\t</div>

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/pages/_seoform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 52,  181 => 51,  175 => 50,  166 => 46,  160 => 45,  154 => 44,  145 => 40,  139 => 39,  133 => 38,  122 => 32,  101 => 26,  95 => 25,  89 => 24,  80 => 20,  74 => 19,  68 => 18,  57 => 12,  51 => 11,  45 => 10,  36 => 6,  24 => 4,  253 => 104,  246 => 100,  241 => 99,  238 => 98,  235 => 97,  204 => 70,  196 => 67,  192 => 65,  188 => 64,  179 => 60,  173 => 59,  167 => 58,  156 => 52,  150 => 51,  144 => 50,  135 => 46,  129 => 45,  123 => 44,  116 => 31,  113 => 34,  110 => 30,  103 => 31,  100 => 30,  94 => 29,  88 => 28,  82 => 27,  76 => 26,  67 => 22,  61 => 21,  55 => 20,  46 => 16,  40 => 15,  34 => 14,  26 => 8,  23 => 3,  19 => 1,  39 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
