<?php

/* /components/views/BreadCrumbs.twig */
class __TwigTemplate_8da94ceeafa62f7363c400f8b90200cb3b5fee7b9b492a379817e9a10cd1a33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["items"] = $this->getAttribute($_this_, "getMainMenu", array(), "method");
        // line 2
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if (($this->getAttribute($_items_, "owner_id") == 0)) {
            // line 3
            echo "\t<a style=\"font-style: italic\" href=\"/index.php\">Главная</a>
\t&raquo; 
\t<a style=\"font-style: italic\" href=\"/page/";
            // line 5
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_items_, "seo"), "alias")) ? ($this->getAttribute($this->getAttribute($_items_, "seo"), "alias")) : ($this->getAttribute($_items_, "id"))), "html", null, true);
            echo "/\">
\t\t";
            // line 6
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_items_, "nav_label")) ? ($this->getAttribute($_items_, "nav_label")) : ($this->getAttribute($_items_, "label"))), "html", null, true);
            echo "
\t</a>
";
        } else {
            // line 9
            echo "\t";
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "BreadCrumbs", 1 => array("rootId" => $this->getAttribute($_items_, "owner_id")), 2 => true), "method");
            // line 10
            echo "\t";
            if (isset($context["qwert"])) { $_qwert_ = $context["qwert"]; } else { $_qwert_ = null; }
            echo $_qwert_;
            echo "
\t&raquo;
\t<a style=\"font-style: italic\" href=\"/page/";
            // line 12
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_items_, "seo"), "alias")) ? ($this->getAttribute($this->getAttribute($_items_, "seo"), "alias")) : ($this->getAttribute($_items_, "id"))), "html", null, true);
            echo "/\">
\t\t";
            // line 13
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_items_, "nav_label")) ? ($this->getAttribute($_items_, "nav_label")) : ($this->getAttribute($_items_, "label"))), "html", null, true);
            echo "
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/components/views/BreadCrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  53 => 12,  46 => 10,  41 => 9,  34 => 6,  29 => 5,  25 => 3,  22 => 2,  19 => 1,  113 => 41,  104 => 38,  96 => 34,  91 => 33,  81 => 28,  77 => 27,  71 => 26,  68 => 25,  60 => 19,  55 => 18,  52 => 17,  49 => 16,  40 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
