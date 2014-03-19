<?php

/* /views/pages/_news.twig */
class __TwigTemplate_6fb9d26460d926f07252b2fc9cccc3238a59c0e6bc39beda06e1b1b8f13392ce extends Twig_Template
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "label"));
        echo "</h3>
\t<i style=\"font-style:italic;font-size: 13px;\">Дата публикации: ";
        // line 4
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_App_, "dateFormatter"), "format", array(0 => "dd MMM y", 1 => strtotime($this->getAttribute($_data_, "create_date"))), "method"), "html", null, true);
        echo "
\t</i>
\t<br /><br />

\t";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($_data_, "short_text");
        echo "
\t<br />
\t<a href=\"/news/";
        // line 10
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
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
        return array (  37 => 8,  23 => 3,  19 => 1,  43 => 10,  40 => 14,  36 => 9,  31 => 6,  28 => 4,);
    }
}
