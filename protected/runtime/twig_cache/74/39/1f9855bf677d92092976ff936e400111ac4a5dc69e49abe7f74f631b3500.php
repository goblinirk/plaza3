<?php

/* /views/galleries/update.twig */
class __TwigTemplate_74391f9855bf677d92092976ff936e400111ac4a5dc69e49abe7f74f631b3500 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 6
        $this->env->loadTemplate("views/galleries/_form.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null))));
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
        return array (  37 => 6,  31 => 4,  28 => 3,);
    }
}
