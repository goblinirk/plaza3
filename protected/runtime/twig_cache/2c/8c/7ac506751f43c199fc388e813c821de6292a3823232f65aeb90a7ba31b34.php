<?php

/* /components/views/slider.twig */
class __TwigTemplate_2c8c7ac506751f43c199fc388e813c821de6292a3823232f65aeb90a7ba31b34 extends Twig_Template
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
        $context["items"] = $this->getAttribute($_this_, "getGalleryBlock", array(), "method");
        // line 2
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 3
            echo "<div class=\"slider\">
    <div id=\"slides\">
        <div class=\"slides_container\">
\t\t";
            // line 6
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "\t\t\t";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t<a href=\"#\"><img src=\"";
                    if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_App_, "baseUrl"), "html", null, true);
                    echo "/images/";
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_img_, "large"), "html", null, true);
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
        return array (  30 => 6,  62 => 13,  51 => 10,  41 => 8,  33 => 5,  22 => 2,  19 => 1,  243 => 112,  240 => 111,  228 => 122,  223 => 121,  218 => 120,  210 => 114,  208 => 111,  195 => 102,  188 => 99,  175 => 90,  168 => 87,  155 => 78,  148 => 75,  139 => 70,  132 => 67,  104 => 43,  99 => 42,  94 => 41,  89 => 40,  54 => 10,  47 => 9,  42 => 9,  36 => 6,  25 => 3,  20 => 1,  101 => 37,  92 => 34,  84 => 30,  79 => 34,  71 => 26,  68 => 25,  60 => 11,  55 => 18,  52 => 17,  49 => 16,  40 => 9,  35 => 7,  31 => 6,  28 => 4,);
    }
}
