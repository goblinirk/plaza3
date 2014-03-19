<?php

/* /views/galleries/update_image.twig */
class __TwigTemplate_6d29f7a3870e9c1d74420dbcfa2307779ee6a221893bd693114a6fdf7e41c067 extends Twig_Template
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
        echo "\t<h1>Редактирование изображения # ";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 8
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/galleryImages/_form.twig")->display(array_merge($context, array("model" => $_model_)));
    }

    public function getTemplateName()
    {
        return "/views/galleries/update_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
