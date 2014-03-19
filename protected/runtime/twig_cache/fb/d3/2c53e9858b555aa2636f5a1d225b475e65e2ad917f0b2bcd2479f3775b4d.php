<?php

/* /views/site/mod_slider.twig */
class __TwigTemplate_fbd32c53e9858b555aa2636f5a1d225b475e65e2ad917f0b2bcd2479f3775b4d extends Twig_Template
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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "slider-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
        // line 13
        echo "
\t";
        // line 14
        if ((isset($context["good"]) ? $context["good"] : null)) {
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
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["data"]) ? $context["data"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items")), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row buttons\">
\t\t";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Сохранить"), "method");
        echo "
\t</div>

";
        // line 27
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
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
        return array (  68 => 28,  66 => 27,  60 => 24,  53 => 20,  48 => 17,  44 => 15,  42 => 14,  39 => 13,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
