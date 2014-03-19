<?php

/* /views/galleries/update_image.twig */
class __TwigTemplate_840d1c614f79c0f44ad323387471dc6b233f496d0fececc8a7a4fb3388cda3a4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 8
        $this->env->loadTemplate("views/galleryImages/_form.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null))));
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
        return array (  39 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
