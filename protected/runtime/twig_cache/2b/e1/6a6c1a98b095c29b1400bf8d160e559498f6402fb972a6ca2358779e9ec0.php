<?php

/* /views/galleries/create.twig */
class __TwigTemplate_2be16a6c1a98b095c29b1400bf8d160e559498f6402fb972a6ca2358779e9ec0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Создание галереи</h1>
\t 
\t";
        // line 6
        $this->env->loadTemplate("views/galleries/_form.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null))));
    }

    public function getTemplateName()
    {
        return "/views/galleries/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
