<?php

/* /views/site/login.twig */
class __TwigTemplate_4aeff0c006250ccafb8e5b6131d14346a88bcb5ae8c0fe9fc80313acf831d28a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/auth.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/auth.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h1>Авторизация</h1>

\t<div class=\"form\">

\t";
        // line 9
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSubmit" => true))), "method");
        // line 16
        echo "
\t\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t\t<div class=\"row\">
\t        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t        ";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t        ";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method");
        echo "
\t    </div><!-- /.row -->

\t    <div class=\"row\">
\t        ";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t        ";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passwordField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t        ";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method");
        echo "
\t    </div><!-- /.row -->

\t    <div class=\"row\">
\t        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "checkBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t        ";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t        ";
        // line 34
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "rememberMe"), "method");
        echo "
\t    </div><!-- /.row -->

\t\t<div class=\"row buttons\">
\t\t\t";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Вход"), "method");
        echo "
\t\t</div>

\t";
        // line 41
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 42
        echo "
\t</div><!-- form -->
";
    }

    public function getTemplateName()
    {
        return "/views/site/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  97 => 41,  91 => 38,  84 => 34,  80 => 33,  76 => 32,  69 => 28,  65 => 27,  61 => 26,  54 => 22,  50 => 21,  46 => 20,  40 => 16,  38 => 9,  31 => 4,  28 => 3,);
    }
}
