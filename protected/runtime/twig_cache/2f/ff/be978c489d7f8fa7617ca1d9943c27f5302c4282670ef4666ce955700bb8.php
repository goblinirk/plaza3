<?php

/* /components/views/galleries.twig */
class __TwigTemplate_2fffbe978c489d7f8fa7617ca1d9943c27f5302c4282670ef4666ce955700bb8 extends Twig_Template
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
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, ((($this->getAttribute($_this_, "label") == "")) ? ($this->getAttribute($_item_, "label")) : ($this->getAttribute($_this_, "label"))), "html", null, true);
                echo "</h2>
\t\t";
                // line 5
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if ($this->getAttribute($_this_, "showdesc")) {
                    echo "<p>";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "description"), "html", null, true);
                    echo "</p>";
                }
                // line 6
                echo "\t\t<div class=\"bs-gallery\">
\t\t\t";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t";
                    if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo $this->getAttribute($_this_, "widget", array(0 => "ext.lyiightbox.LyiightBox2", 1 => array("thumbnail" => $this->getAttribute($_img_, "thumb"), "image" => $this->getAttribute($_img_, "large"), "title" => $this->getAttribute($_img_, "description")), 2 => true), "method");
                    // line 12
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
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
        return "/components/views/galleries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 12,  54 => 8,  49 => 7,  46 => 6,  38 => 5,  25 => 3,  22 => 2,  23 => 3,  19 => 1,  43 => 12,  40 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
