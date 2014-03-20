<?php

/* /views/galleries/create_image.twig */
class __TwigTemplate_479369834d7db8f08d792901eb53380c6e738eac7311e10fd6410c21687f039d extends Twig_Template
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
        $context["galleryactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Загрузка изображения</h1>
\t 
\t";
        // line 8
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        $this->env->loadTemplate("views/galleryImages/_form.twig")->display(array_merge($context, array("model" => $_model_, "seo" => $_seo_)));
    }

    public function getTemplateName()
    {
        return "/views/galleries/create_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
