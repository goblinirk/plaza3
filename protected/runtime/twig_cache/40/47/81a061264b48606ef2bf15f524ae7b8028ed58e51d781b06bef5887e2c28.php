<?php

/* /components/views/galleries.twig */
class __TwigTemplate_404781a061264b48606ef2bf15f524ae7b8028ed58e51d781b06bef5887e2c28 extends Twig_Template
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
                echo "\t\t<div class=\"view\" style=\"clear: both;\">
\t\t\t<h2>";
                // line 5
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "label") == "")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label")) : ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "label"))), "html", null, true);
                echo "</h2>
\t\t\t";
                // line 6
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showdesc")) {
                    echo "<p>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                    echo "</p>";
                }
                // line 7
                echo "\t\t\t<div class=\"bs-gallery\" style=\"padding-bottom:30px;\">
\t\t\t\t";
                // line 8
                if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget") == false)) {
                    // line 9
                    echo "\t\t\t\t\t";
                    $context["childs"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChildGalleryBlocks", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")), "method");
                    // line 10
                    echo "\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["childs"]) ? $context["childs"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 11
                        echo "\t\t\t\t\t\t<a style=\"display:inline-block;text-align:center;\" href=\"/gallery/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "id"), "html", null, true);
                        echo "/\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "label"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "thumb"), "html", null, true);
                        echo "\" border=\"0\"><br />";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "label"), "html", null, true);
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
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.lyiightbox.LyiightBox2", 1 => array("thumbnail" => ("/images/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "thumb")), "image" => ("/images/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "large")), "title" => ("/images/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "description"))), 2 => true), "method");
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
        return array (  84 => 21,  81 => 17,  77 => 16,  71 => 14,  61 => 12,  54 => 11,  49 => 10,  46 => 9,  44 => 8,  41 => 7,  23 => 3,  21 => 2,  19 => 1,  91 => 23,  85 => 34,  78 => 30,  74 => 15,  67 => 26,  64 => 25,  57 => 19,  53 => 18,  50 => 17,  47 => 16,  39 => 9,  35 => 6,  31 => 5,  28 => 4,);
    }
}
