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
        return array (  60 => 11,  41 => 8,  35 => 7,  30 => 6,  22 => 2,  19 => 1,  219 => 88,  216 => 87,  204 => 98,  199 => 97,  194 => 96,  186 => 90,  184 => 87,  171 => 78,  164 => 75,  151 => 66,  144 => 63,  131 => 54,  124 => 51,  115 => 46,  108 => 43,  102 => 41,  97 => 40,  92 => 39,  87 => 38,  77 => 32,  54 => 10,  47 => 10,  42 => 9,  36 => 7,  31 => 6,  25 => 3,  20 => 1,);
    }
}
