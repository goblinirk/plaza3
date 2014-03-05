<?php

/* /views/pages/update.twig */
class __TwigTemplate_9cf4c2a6e530aec30ac12210565b42c22db65e9e9202d96a571c615ce3a779fb extends Twig_Template
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
        echo "\t<h1>Редактирование записи # ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 6
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        $this->env->loadTemplate("views/pages/_form.twig")->display(array_merge($context, array("model" => $_model_, "seo" => $_seo_)));
    }

    public function getTemplateName()
    {
        return "/views/pages/update.twig";
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
