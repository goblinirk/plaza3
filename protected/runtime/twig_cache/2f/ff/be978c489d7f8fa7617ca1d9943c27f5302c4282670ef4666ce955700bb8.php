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
                echo "\t\t<div class=\"view\" style=\"clear: both;\">
\t\t\t<h2>";
                // line 5
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, ((($this->getAttribute($_this_, "label") == "")) ? ($this->getAttribute($_item_, "label")) : ($this->getAttribute($_this_, "label"))), "html", null, true);
                echo "</h2>
\t\t\t";
                // line 6
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if ($this->getAttribute($_this_, "showdesc")) {
                    echo "<p>";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "description"), "html", null, true);
                    echo "</p>";
                }
                // line 7
                echo "\t\t\t<div class=\"bs-gallery\" style=\"padding-bottom:30px;\">
\t\t\t\t";
                // line 8
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if (($this->getAttribute($_this_, "widget") == false)) {
                    // line 9
                    echo "\t\t\t\t\t";
                    if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context["childs"] = $this->getAttribute($_this_, "getChildGalleryBlocks", array(0 => $this->getAttribute($_item_, "id")), "method");
                    // line 10
                    echo "\t\t\t\t\t";
                    if (isset($context["childs"])) { $_childs_ = $context["childs"]; } else { $_childs_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_childs_);
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 11
                        echo "\t\t\t\t\t\t<a style=\"display:inline-block;text-align:center;\" href=\"/gallery/";
                        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_img_, "id"), "html", null, true);
                        echo "/\" title=\"";
                        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_img_, "label"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/";
                        // line 12
                        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_img_, "thumb"), "html", null, true);
                        echo "\" border=\"0\"><br />";
                        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_img_, "label"), "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t<div></div><br />
\t\t\t\t";
                // line 16
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                    if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
                    echo $this->getAttribute($_this_, "widget", array(0 => "ext.lyiightbox.LyiightBox2", 1 => array("thumbnail" => ("/images/" . $this->getAttribute($_img_, "thumb")), "image" => ("/images/" . $this->getAttribute($_img_, "large")), "title" => ("/images/" . $this->getAttribute($_img_, "description"))), 2 => true), "method");
                    // line 21
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t</div>
\t\t</div>
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
        return array (  109 => 23,  102 => 21,  97 => 17,  92 => 16,  89 => 15,  86 => 14,  74 => 12,  65 => 11,  59 => 10,  51 => 8,  48 => 7,  40 => 6,  34 => 5,  22 => 2,  19 => 1,  170 => 70,  167 => 69,  155 => 81,  150 => 80,  145 => 79,  136 => 72,  134 => 69,  105 => 44,  100 => 43,  95 => 42,  90 => 41,  79 => 34,  54 => 9,  47 => 10,  42 => 9,  36 => 7,  31 => 4,  25 => 3,  20 => 1,);
    }
}
