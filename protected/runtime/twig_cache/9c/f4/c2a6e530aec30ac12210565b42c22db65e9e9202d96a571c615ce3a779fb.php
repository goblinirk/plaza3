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
        // line 3
        $context["pageactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Редактирование записи # ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "id"), "html", null, true);
        echo "</h1>
\t";
        // line 7
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
        return array (  39 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
