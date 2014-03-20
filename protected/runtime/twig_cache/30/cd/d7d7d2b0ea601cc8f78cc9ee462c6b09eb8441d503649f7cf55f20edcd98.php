<?php

/* /views/site/mod_slider.twig */
class __TwigTemplate_30cdd7d7d2b0ea601cc8f78cc9ee462c6b09eb8441d503649f7cf55f20edcd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["moduleactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Управление слайдером</h1>

";
        // line 8
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "slider-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
        // line 13
        echo "
\t";
        // line 14
        if (isset($context["good"])) { $_good_ = $context["good"]; } else { $_good_ = null; }
        if ($_good_) {
            // line 15
            echo "\t\t<div class=\"alert alert-success\">Изменения успешно сохранены.</div>
\t";
        }
        // line 17
        echo "
\t<div class=\"row\">
        <label>Выберете галерею для слайдера:</label>
        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_data_, 1 => "owner_id", 2 => $this->getAttribute($_data_, "items")), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 24
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Сохранить"), "method");
        echo "
\t</div>

";
        // line 27
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/site/mod_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  64 => 24,  55 => 20,  50 => 17,  46 => 15,  43 => 14,  40 => 13,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
