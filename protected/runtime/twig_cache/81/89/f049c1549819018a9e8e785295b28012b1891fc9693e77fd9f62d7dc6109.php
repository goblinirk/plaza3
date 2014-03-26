<?php

/* /components/views/News.twig */
class __TwigTemplate_8189f049c1549819018a9e8e785295b28012b1891fc9693e77fd9f62d7dc6109 extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNewsWidget", array(), "method");
        // line 2
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 3
            echo "<div class=\"titl\">Новости</div>
\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t<div class=\"news\">
            <span class=\"lenta\"><img alt=\"\" src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
                echo "/images/lenta.png\"></span>
            <div class=\"title\"><a href=\"/news/";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "/\">Отделка лоджий и балконов 
в Иркутске</a></div>
            <div class=\"img\"><img alt=\"\" src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "thumb"), "html", null, true);
                echo "\"></div>
            <div class=\"right\">
                <div class=\"txt\">
           \t\t\t";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "short_text"), "html", null, true);
                echo "...
                </div><!--end txt-->
                <a href=\"/news/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
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
        return array (  55 => 14,  50 => 12,  42 => 9,  37 => 7,  33 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
