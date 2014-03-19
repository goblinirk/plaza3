<?php

/* /views/site/modules.twig */
class __TwigTemplate_fdf754cf4c08108d4fad3e28b4c8026cd03e4b75f17970e6fb0dbb3d9d3416c7 extends Twig_Template
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
        echo "\t<h1>Управление модулями</h1>
\t 
\t<p>Выберете модуль для редактирования</p>
";
    }

    public function getTemplateName()
    {
        return "/views/site/modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  30 => 5,  25 => 3,);
    }
}
