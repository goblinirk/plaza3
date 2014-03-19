<?php

/* /components/views/slider.twig */
class __TwigTemplate_33462db9fd4a93c63144267bd69faac84b9b9d551ea420d9c1ebceedb14d06fd extends Twig_Template
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
            echo "<div class=\"slider\">
    <div id=\"slides\">
        <div class=\"slides_container\">
\t\t";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t<a href=\"#\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl"), "html", null, true);
                    echo "/images/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "large"), "html", null, true);
                    echo "\" alt=\"Slide 1\"></a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </div>
        <a href=\"#\" class=\"prev\"></a>
        <a href=\"#\" class=\"next\"></a>
    </div>
</div><!--end slider-->
";
        }
    }

    public function getTemplateName()
    {
        return "/components/views/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  48 => 10,  37 => 8,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
