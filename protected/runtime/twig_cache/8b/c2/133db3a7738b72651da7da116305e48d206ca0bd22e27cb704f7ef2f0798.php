<?php

/* /components/views/sphere_module.twig */
class __TwigTemplate_8bc2133db3a7738b72651da7da116305e48d206ca0bd22e27cb704f7ef2f0798 extends Twig_Template
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
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["item"] = $this->getAttribute($_this_, "getSpheres", array(0 => $_i_), "method");
            // line 3
            echo "\t<div class=\"circ ci";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\">
\t    <a href=\"";
            // line 4
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
            echo "\">
\t    <span class=\"ico\"><img alt=\"\" src=\"";
            // line 5
            if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
            echo "/images/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "icon"), "html", null, true);
            echo "\"></span>
\t    <span class=\"txt\">";
            // line 6
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
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
        return array (  46 => 6,  38 => 5,  33 => 4,  27 => 3,  23 => 2,  19 => 1,  242 => 99,  239 => 98,  227 => 109,  222 => 108,  217 => 107,  209 => 101,  207 => 98,  194 => 89,  187 => 86,  174 => 77,  167 => 74,  154 => 65,  147 => 62,  138 => 57,  126 => 49,  121 => 48,  116 => 47,  111 => 46,  102 => 41,  97 => 40,  92 => 39,  87 => 38,  77 => 32,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 4,  20 => 1,);
    }
}
