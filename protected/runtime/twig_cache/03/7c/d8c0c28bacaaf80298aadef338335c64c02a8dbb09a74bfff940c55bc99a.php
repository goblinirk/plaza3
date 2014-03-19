<?php

/* /views/site/login.twig */
class __TwigTemplate_037cd8c0c28bacaaf80298aadef338335c64c02a8dbb09a74bfff940c55bc99a extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "login-form", "enableClientValidation" => true, "clientOptions" => array("validateOnSubmit" => true))), "method");
        // line 16
        echo "
\t\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

\t\t<div class=\"row\">
\t        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "username"), "method");
        echo "
\t        ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "username"), "method");
        echo "
\t        ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "username"), "method");
        echo "
\t    </div><!-- /.row -->

\t    <div class=\"row\">
\t        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "password"), "method");
        echo "
\t        ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "passwordField", array(0 => $_model_, 1 => "password"), "method");
        echo "
\t        ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "password"), "method");
        echo "
\t    </div><!-- /.row -->

\t    <div class=\"row\">
\t        ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "checkBox", array(0 => $_model_, 1 => "rememberMe"), "method");
        echo "
\t        ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "label", array(0 => $_model_, 1 => "rememberMe"), "method");
        echo "
\t        ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "rememberMe"), "method");
        echo "
\t    </div><!-- /.row -->

\t\t<div class=\"row buttons\">
\t\t\t";
        // line 38
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Вход"), "method");
        echo "
\t\t</div>

\t";
        // line 41
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
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
        return array (  120 => 42,  117 => 41,  110 => 38,  101 => 34,  95 => 33,  89 => 32,  80 => 28,  74 => 27,  68 => 26,  59 => 22,  53 => 21,  47 => 20,  41 => 16,  38 => 9,  31 => 4,  28 => 3,);
    }
}
