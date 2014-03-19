<?php

/* /views/pages/shownews.twig */
class __TwigTemplate_e9e76608eb20194835735c407a0195cd3d46f08049fb70eb3c99b9365358995e extends Twig_Template
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
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "label"));
        echo "</h3>
    <i style=\"font-style:italic;font-size: 13px;\">Дата публикации: ";
        // line 5
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_App_, "dateFormatter"), "format", array(0 => "dd MMM y", 1 => strtotime($this->getAttribute($_model_, "create_date"))), "method"), "html", null, true);
        echo "
    </i>
    <br /><br />

    ";
        // line 9
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
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
        return array (  46 => 9,  37 => 5,  31 => 4,  28 => 3,);
    }
}
