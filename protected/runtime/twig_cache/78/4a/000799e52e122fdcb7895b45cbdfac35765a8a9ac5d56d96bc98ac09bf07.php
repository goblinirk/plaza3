<?php

/* /views/pages/_news.twig */
class __TwigTemplate_784a000799e52e122fdcb7895b45cbdfac35765a8a9ac5d56d96bc98ac09bf07 extends Twig_Template
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
        echo "<div class=\"view\">

\t<h3 style=\"margin:0px; padding-bottom: 0px; font-weight: normal;\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "label"));
        echo "</h3>
\t<i style=\"font-style:italic;font-size: 13px;\">Дата публикации: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "dateFormatter"), "format", array(0 => "dd MMM y", 1 => strtotime($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "create_date"))), "method"), "html", null, true);
        echo "
\t</i>
\t<br /><br />

\t";
        // line 8
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "short_text");
        echo "
\t<br />
\t<a href=\"/news/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
        echo "\">Читать далее</a>
\t<br /><br />
</div><hr style=\"border-color: rgba(218, 218, 218, 0.4);\" /><br />";
    }

    public function getTemplateName()
    {
        return "/views/pages/_news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 8,  27 => 4,  23 => 3,  19 => 1,  41 => 15,  38 => 14,  36 => 9,  31 => 6,  28 => 5,);
    }
}
