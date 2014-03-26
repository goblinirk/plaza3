<?php

/* /components/views/News.twig */
class __TwigTemplate_097a3c1df239e57f40d2551f21a312469ef97c21f25208d4b48f414513acbbaa extends Twig_Template
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
        $context["items"] = $this->getAttribute($_this_, "getNewsWidget", array(), "method");
        // line 2
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 3
            echo "<div class=\"titl\">Новости</div>
\t";
            // line 4
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t<div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
                // line 6
                if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
                echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"/news/";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "/\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
                // line 9
                if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
                echo "/images/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "thumb"), "html", null, true);
                echo "\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           \t\t\t";
                // line 12
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "short_text"), "html", null, true);
                echo "...
                </div><!--end txt-->
                <a href=\"/news/";
                // line 14
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "/\" class=\"btn1\">Подробнее</a> 
            </div><!--end right-->
        </div><!--end news-->
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/components/views/News.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 12,  41 => 7,  33 => 5,  28 => 4,  22 => 2,  19 => 1,  187 => 76,  184 => 75,  172 => 86,  167 => 85,  162 => 84,  154 => 78,  152 => 75,  146 => 73,  139 => 70,  132 => 67,  104 => 43,  99 => 42,  94 => 41,  89 => 40,  79 => 34,  54 => 13,  47 => 9,  42 => 9,  36 => 6,  31 => 6,  25 => 3,  20 => 1,);
    }
}
