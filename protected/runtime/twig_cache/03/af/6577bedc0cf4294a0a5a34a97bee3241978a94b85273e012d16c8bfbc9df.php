<?php

/* /views/pages/shownews.twig */
class __TwigTemplate_03af6577bedc0cf4294a0a5a34a97bee3241978a94b85273e012d16c8bfbc9df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/inner.twig");

        $this->blocks = array(
            'innercontent' => array($this, 'block_innercontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/inner.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_innercontent($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 style=\"margin:0px; padding-bottom: 0px; font-weight: normal;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label"));
        echo "</h3>
    <i style=\"font-style:italic;font-size: 13px;\">Дата публикации: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "dateFormatter"), "format", array(0 => "dd MMM y", 1 => strtotime($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "create_date"))), "method"), "html", null, true);
        echo "
    </i>
    <br /><br />

    ";
        // line 9
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "
    <br />
    <a href=\"/news/\">Все новости</a>
    <br /><br />

";
    }

    public function getTemplateName()
    {
        return "/views/pages/shownews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 5,  31 => 4,  28 => 3,);
    }
}
