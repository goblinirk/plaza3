<?php

/* /views/fbMessages/forms.twig */
class __TwigTemplate_ae42eebc7ec255bd88aa2a4762af7f7cdce7f2b300c62c16e92f4fe4b7ef19b8 extends Twig_Template
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
        $context["feedbackctive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Управление формами</h1>
\t 
\t<p>Выберете интересующую вас форму</p>
";
    }

    public function getTemplateName()
    {
        return "/views/fbMessages/forms.twig";
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
