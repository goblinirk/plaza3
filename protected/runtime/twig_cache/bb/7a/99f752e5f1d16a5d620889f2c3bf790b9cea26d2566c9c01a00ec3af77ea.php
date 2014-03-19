<?php

/* /components/views/gallery.twig */
class __TwigTemplate_bb7a99f752e5f1d16a5d620889f2c3bf790b9cea26d2566c9c01a00ec3af77ea extends Twig_Template
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
            echo "\t";
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "\t\t<h2>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
                echo "</h2>
\t\t<p>";
                // line 5
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "description"), "html", null, true);
                echo "</p>
\t\t<div class=\"bs-gallery\">
\t\t\t";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t<a class=\"gall\" rel=\"example_group\" href=\"/";
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_img_, "large"), "html", null, true);
                    echo "\">
\t\t\t\t\t<img alt=\"\" src=\"/";
                    // line 9
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_img_, "thumb"), "html", null, true);
                    echo "\">
\t\t\t\t\t<span class=\"txt\">";
                    // line 10
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_img_, "description"), "html", null, true);
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
        return array (  69 => 13,  59 => 10,  54 => 9,  48 => 8,  37 => 5,  25 => 3,  22 => 2,  23 => 3,  19 => 1,  43 => 7,  40 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
