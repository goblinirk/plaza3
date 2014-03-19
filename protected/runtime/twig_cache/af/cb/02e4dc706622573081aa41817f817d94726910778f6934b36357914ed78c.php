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
                echo "\t\t<h2>Наши работы</h2>
\t\t<div class=\"bs-gallery\">
\t\t\t";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 7
                    echo "\t\t\t\t";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.lyiightbox.LyiightBox2", 1 => array("thumbnail" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "thumb"), "image" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "large"), "title" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "description")), 2 => true), "method");
                    // line 11
                    echo "
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
        return array (  46 => 13,  36 => 7,  32 => 6,  23 => 3,  21 => 2,  19 => 1,  85 => 34,  78 => 30,  74 => 29,  67 => 26,  64 => 25,  57 => 19,  53 => 18,  50 => 17,  47 => 16,  39 => 11,  35 => 8,  31 => 6,  28 => 4,);
    }
}
