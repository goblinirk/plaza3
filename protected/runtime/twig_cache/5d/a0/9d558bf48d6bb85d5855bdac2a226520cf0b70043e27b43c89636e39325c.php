<?php

/* /views/fbMessages/view.twig */
class __TwigTemplate_5da09d558bf48d6bb85d5855bdac2a226520cf0b70043e27b43c89636e39325c extends Twig_Template
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
        echo "\t
\t<h1>Просмотр сообщения #";
        // line 7
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "id"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->env->loadTemplate("views/fbMessages/_view.twig")->display(array_merge($context, array("model" => $_model_)));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/fbMessages/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  42 => 9,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
