<?php

/* /views/pages/create.twig */
class __TwigTemplate_f2ce8f5f89e68286e0296698590f72066a39cf817f7d4c5c1518c54277022130 extends Twig_Template
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
        if (((isset($context["mod"]) ? $context["mod"] : null) == "pages")) {
            echo "статьи";
        } else {
            echo "новости";
        }
        echo "</h1>
\t 
\t";
        // line 8
        $this->env->loadTemplate("views/pages/_form.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null), "registry" => (isset($context["registry"]) ? $context["registry"] : null))));
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
        return array (  43 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
