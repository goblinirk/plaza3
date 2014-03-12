<?php

/* /components/views/sphere_module.twig */
class __TwigTemplate_ee3b1cd4b4230648d7ddcf5a89ab1dd5a3112afa9f16dc10adfc20bb108653c2 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            $context["item"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSpheres", array(0 => (isset($context["i"]) ? $context["i"] : null)), "method");
            // line 3
            echo "\t<div class=\"circ ci";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">
\t    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
            echo "\">
\t    <span class=\"ico\"><img alt=\"\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon"), "html", null, true);
            echo "\"></span>
\t    <span class=\"txt\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
            echo "</span>
\t    </a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/components/views/sphere_module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  54 => 13,  44 => 10,  42 => 9,  37 => 7,  33 => 6,  26 => 4,  23 => 2,  21 => 2,  19 => 1,  213 => 98,  210 => 97,  199 => 108,  195 => 107,  191 => 106,  183 => 100,  181 => 97,  169 => 88,  163 => 85,  151 => 76,  145 => 73,  133 => 64,  127 => 61,  119 => 56,  108 => 48,  104 => 47,  100 => 46,  92 => 41,  88 => 40,  84 => 39,  80 => 38,  71 => 32,  49 => 13,  43 => 10,  34 => 5,  30 => 4,  25 => 3,  20 => 1,  91 => 37,  85 => 34,  78 => 30,  74 => 29,  67 => 26,  64 => 25,  57 => 19,  53 => 18,  50 => 17,  47 => 16,  39 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
