<?php

/* /views/pages/news.twig */
class __TwigTemplate_9dc581780cc26640131daf397b77c28636eb2ea0312755c7775296a89da5f1fe extends Twig_Template
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
        $context["tmp"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => (isset($context["dataProvider"]) ? $context["dataProvider"] : null), "itemView" => "_news", "template" => "{items}{pager}"), 2 => true), "method");
        // line 14
        echo "
\t";
        // line 15
        echo (isset($context["tmp"]) ? $context["tmp"] : null);
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
        return array (  41 => 15,  38 => 14,  36 => 9,  31 => 6,  28 => 5,);
    }
}
