<?php

/* /views/pages/create.twig */
class __TwigTemplate_8aaa1f17d353e8f409bf54f7b0600407f212d8e17f0088040e0866f4d8ce02cb extends Twig_Template
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
        echo "\t<h1>Создание ";
        if (isset($context["mod"])) { $_mod_ = $context["mod"]; } else { $_mod_ = null; }
        if (($_mod_ == "pages")) {
            echo "статьи";
        } else {
            echo "новости";
        }
        echo "</h1>
\t 
\t";
        // line 8
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        $this->env->loadTemplate("views/pages/_form.twig")->display(array_merge($context, array("model" => $_model_, "seo" => $_seo_)));
    }

    public function getTemplateName()
    {
        return "/views/pages/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
