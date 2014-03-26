<?php

/* /components/views/BreadCrumbs.twig */
class __TwigTemplate_f26f7510ef2cd9ffa10cb3e1a5219dd7b45ad124f661033fb4ba6b26d7e0b6f0 extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMainMenu", array(), "method");
        // line 2
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "owner_id") == 0)) {
            // line 3
            echo "\t<a style=\"font-style: italic\" href=\"/index.php\">Главная</a>
\t&raquo; 
\t<a style=\"font-style: italic\" href=\"/page/";
            // line 5
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "seo"), "alias")) ? ($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "seo"), "alias")) : ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "id"))), "html", null, true);
            echo "/\">
\t\t";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "nav_label")) ? ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "nav_label")) : ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "label"))), "html", null, true);
            echo "
\t</a>
";
        } else {
            // line 9
            echo "\t";
            $context["qwert"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "BreadCrumbs", 1 => array("rootId" => $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "owner_id")), 2 => true), "method");
            // line 10
            echo "\t";
            echo (isset($context["qwert"]) ? $context["qwert"] : null);
            echo "
\t&raquo;
\t<a style=\"font-style: italic\" href=\"/page/";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "seo"), "alias")) ? ($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "seo"), "alias")) : ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "id"))), "html", null, true);
            echo "/\">
\t\t";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "nav_label")) ? ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "nav_label")) : ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "label"))), "html", null, true);
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
        return array (  50 => 13,  46 => 12,  40 => 10,  37 => 9,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
