<?php

/* /views/galleries/index.twig */
class __TwigTemplate_8c3d5ec4f0a8c35206f89bc2f4b3efbc660d0d5fcb46a904f128497aec7ff19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/galleries.twig");

        $this->blocks = array(
            'innercontent' => array($this, 'block_innercontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/galleries.twig";
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
        $context["current"] = (isset($context["curr"]) ? $context["curr"] : null);
        // line 6
        echo "
\t";
        // line 7
        $context["qwe"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => (isset($context["dataProvider"]) ? $context["dataProvider"] : null), "itemView" => "_view", "template" => "{items}", "viewData" => array("curr" => (isset($context["curr"]) ? $context["curr"] : null))), 2 => true), "method");
        // line 13
        echo "
\t";
        // line 14
        echo (isset($context["qwe"]) ? $context["qwe"] : null);
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
        return array (  44 => 14,  41 => 13,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
