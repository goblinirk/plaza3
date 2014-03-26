<?php

/* /views/galleries/index.twig */
class __TwigTemplate_af53260e9cd5d611f923d752c1498cebf99712bd5e938e6a783ef5f9da9deeed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/inner.twig");

        $this->blocks = array(
            'innercontent' => array($this, 'block_innercontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/inner.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_innercontent($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t";
        // line 5
        if (isset($context["curr"])) { $_curr_ = $context["curr"]; } else { $_curr_ = null; }
        $context["current"] = $_curr_;
        // line 6
        echo "
\t<h1>Галерея</h1>

\t";
        // line 9
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        if (isset($context["curr"])) { $_curr_ = $context["curr"]; } else { $_curr_ = null; }
        $context["qwe"] = $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_view", "template" => "{items}", "viewData" => array("curr" => $_curr_)), 2 => true), "method");
        // line 15
        echo "
\t";
        // line 16
        if (isset($context["qwe"])) { $_qwe_ = $context["qwe"]; } else { $_qwe_ = null; }
        echo $_qwe_;
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/galleries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  47 => 15,  42 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
