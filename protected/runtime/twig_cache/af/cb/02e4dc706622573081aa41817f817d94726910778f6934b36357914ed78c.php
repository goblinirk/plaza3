<?php

/* /components/views/gallery.twig */
class __TwigTemplate_afcb02e4dc706622573081aa41817f817d94726910778f6934b36357914ed78c extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getGalleryBlock", array(), "method");
        // line 2
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "\t\t<h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
                echo "</h2>
\t\t<p>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                echo "</p>
\t\t<div class=\"bs-gallery\">
\t\t\t";
                // line 7
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t<a class=\"gall\" rel=\"example_group\" href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "large"), "html", null, true);
                    echo "\">
\t\t\t\t\t<img alt=\"\" src=\"/";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "thumb"), "html", null, true);
                    echo "\">
\t\t\t\t\t<span class=\"txt\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "description"), "html", null, true);
                    echo "</span>
\t\t\t\t</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/components/views/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 10,  47 => 9,  42 => 8,  38 => 7,  33 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
