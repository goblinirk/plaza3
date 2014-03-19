<?php

/* /views/fbMessages/forms.twig */
class __TwigTemplate_8af0af1ae12f9f56709b2357a05b31c35fd405bda5cb21ec596445a56349f7d8 extends Twig_Template
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
