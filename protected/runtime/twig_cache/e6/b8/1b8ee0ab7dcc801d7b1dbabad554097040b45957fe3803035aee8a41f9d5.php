<?php

/* /views/galleries/update.twig */
class __TwigTemplate_e6b81b8ee0ab7dcc801d7b1dbabad554097040b45957fe3803035aee8a41f9d5 extends Twig_Template
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
        echo "\t<h1>Редактирование галереи # ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 6
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/galleries/_form.twig")->display(array_merge($context, array("model" => $_model_)));
    }

    public function getTemplateName()
    {
        return "/views/galleries/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  31 => 4,  28 => 3,);
    }
}
