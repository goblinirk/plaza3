<?php

/* /views/site/mod_circles.twig */
class __TwigTemplate_abc4946d5c4651b9df0a63946c9e3c3a330eee902fb3ce8e23c1e8134c9f9d17 extends Twig_Template
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
        if (isset($context["good"])) { $_good_ = $context["good"]; } else { $_good_ = null; }
        if ($_good_) {
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "\t\t";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 16
            echo "\t\t";
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "circle-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
            // line 21
            echo "\t\t\t<input type=\"hidden\" value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" name=\"index\" />
\t\t\t<div class=\"row\">
\t\t        <label>Введите заголовок для ";
            // line 23
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo " круга:</label>
\t\t        ";
            // line 24
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_form_, "textField", array(0 => $_item_, 1 => "label"), "method");
            echo "
\t\t    </div><!-- /.row -->
\t\t\t<div class=\"row\">
\t\t        <label>Выберете страницу для ";
            // line 27
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo " круга:</label>
\t\t        ";
            // line 28
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_form_, "dropDownList", array(0 => $_item_, 1 => "owner_id", 2 => $this->getAttribute($_item_, "items")), "method");
            echo "
\t\t    </div><!-- /.row -->
\t\t    <div class=\"row buttons\">
\t\t\t\t";
            // line 31
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Сохранить"), "method");
            echo "
\t\t\t</div><br /><br />

\t\t";
            // line 34
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $this->getAttribute($_this_, "endWidget");
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
        return array (  114 => 36,  108 => 35,  105 => 34,  98 => 31,  90 => 28,  85 => 27,  77 => 24,  72 => 23,  65 => 21,  61 => 16,  57 => 15,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  40 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
