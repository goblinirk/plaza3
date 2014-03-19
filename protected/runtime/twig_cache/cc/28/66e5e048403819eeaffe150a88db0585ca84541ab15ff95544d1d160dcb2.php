<?php

/* /views/site/mod_circles.twig */
class __TwigTemplate_cc2866e5e048403819eeaffe150a88db0585ca84541ab15ff95544d1d160dcb2 extends Twig_Template
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
        $context["moduleactive"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>Управление кругами</h1>

\t";
        // line 8
        if ((isset($context["good"]) ? $context["good"] : null)) {
            // line 9
            echo "\t\t<div class=\"alert alert-success\">Изменения успешно сохранены.</div>
\t";
        }
        // line 11
        echo "
\t";
        // line 12
        $context["i"] = 0;
        // line 13
        echo "
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 16
            echo "\t\t";
            $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "circle-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
            // line 21
            echo "\t\t\t<input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" name=\"index\" />
\t\t\t<div class=\"row\">
\t\t        <label>Введите заголовок для ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo " круга:</label>
\t\t        ";
            // line 24
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "label"), "method");
            echo "
\t\t    </div><!-- /.row -->
\t\t\t<div class=\"row\">
\t\t        <label>Выберете страницу для ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo " круга:</label>
\t\t        ";
            // line 28
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items")), "method");
            echo "
\t\t    </div><!-- /.row -->
\t\t    <div class=\"row buttons\">
\t\t\t\t";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Сохранить"), "method");
            echo "
\t\t\t</div><br /><br />

\t\t";
            // line 34
            $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
            // line 35
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "/views/site/mod_circles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  95 => 35,  93 => 34,  87 => 31,  81 => 28,  77 => 27,  71 => 24,  67 => 23,  61 => 21,  58 => 16,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 11,  39 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
