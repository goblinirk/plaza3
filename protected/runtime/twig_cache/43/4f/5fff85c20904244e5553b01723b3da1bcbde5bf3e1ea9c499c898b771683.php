<?php

/* /views/site/mod_banners.twig */
class __TwigTemplate_434f5fff85c20904244e5553b01723b3da1bcbde5bf3e1ea9c499c898b771683 extends Twig_Template
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
        echo "\t<h1>Управление баннерами</h1>

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
            echo " баннера:</label>
\t\t        ";
            // line 24
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "label"), "method");
            echo "
\t\t    </div><!-- /.row -->
\t\t    <div class=\"row\">
\t\t    \t<label>Выберете картинку для ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo " баннера:</label>
\t\t        ";
            // line 28
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
            echo "
\t\t        ";
            // line 29
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "thumb"), "method");
            echo "
\t\t        ";
            // line 30
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "thumb")) {
                // line 31
                echo "\t\t            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "thumb"), "html", null, true);
                echo "\" width=\"80\" />
\t\t        ";
            }
            // line 33
            echo "\t\t        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
\t\t        ";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
            // line 39
            echo "
\t\t        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
\t\t    </div><!-- /.row --><br />
\t\t    <div class=\"row\">
\t\t        <label>Выберете ссылку для ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo " баннера:</label>
\t\t        ";
            // line 44
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => "owner_id"), "method");
            echo "
\t\t    </div><!-- /.row -->

\t\t    <div class=\"row buttons\">
\t\t\t\t";
            // line 48
            echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Сохранить"), "method");
            echo "
\t\t\t</div><br /><br />

\t\t";
            // line 51
            $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
            // line 52
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t
";
        // line 54
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery"), "method")), "html", null, true);
        echo "
";
        // line 55
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerCoreScript", array(0 => "jquery.ui"), "method")), "html", null, true);
        echo "
";
        // line 56
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/upload.js"), "method")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/site/mod_banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  140 => 55,  136 => 54,  133 => 53,  127 => 52,  125 => 51,  119 => 48,  112 => 44,  108 => 43,  102 => 39,  100 => 34,  97 => 33,  91 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  71 => 24,  67 => 23,  61 => 21,  58 => 16,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 11,  39 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 3,);
    }
}
