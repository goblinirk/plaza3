<?php

/* /views/pages/news.twig */
class __TwigTemplate_7d531e414951b1b6356ac403f90eace9182833976727a45efca9990f7b4fe146 extends Twig_Template
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

    // line 5
    public function block_innercontent($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<h2>Новости</h2>
    
    ";
        // line 9
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["dataProvider"])) { $_dataProvider_ = $context["dataProvider"]; } else { $_dataProvider_ = null; }
        $context["tmp"] = $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => $_dataProvider_, "itemView" => "_news", "template" => "{items}{pager}"), 2 => true), "method");
        // line 14
        echo "
\t";
        // line 15
        if (isset($context["tmp"])) { $_tmp_ = $context["tmp"]; } else { $_tmp_ = null; }
        echo $_tmp_;
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/pages/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  40 => 14,  36 => 9,  31 => 6,  28 => 5,);
    }
}
