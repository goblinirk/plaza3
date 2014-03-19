<?php

/* /views/fbMessages/view.twig */
class __TwigTemplate_89fefc5098c3fc64c2d5fd0d0a724ea79e08c7b624b9ec2bb8291821cff0b7f4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        $this->env->loadTemplate("views/fbMessages/_view.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null))));
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
        return array (  43 => 10,  41 => 9,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
