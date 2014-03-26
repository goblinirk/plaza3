<?php

/* /components/views/mainMenu.twig */
class __TwigTemplate_81793a60054ba965f1c186421ee48e841be60870f7067f82cbb5e823e997a1e4 extends Twig_Template
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
        $context["items"] = $this->getAttribute($_this_, "getMainMenu", array(), "method");
        // line 2
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 3
            echo "<ul style=\"padding-bottom: 60px;\">
\t";
            // line 4
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t<li>
\t\t\t<a href=\"/page/";
                // line 6
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_item_, "seo"), "alias")) ? ($this->getAttribute($this->getAttribute($_item_, "seo"), "alias")) : ($this->getAttribute($_item_, "id"))), "html", null, true);
                echo "/\">
\t\t\t\t";
                // line 7
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_item_, "nav_label")) ? ($this->getAttribute($_item_, "nav_label")) : ($this->getAttribute($_item_, "label"))), "html", null, true);
                echo "
\t\t\t</a>
\t\t\t";
                // line 9
                if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context["qwert"] = $this->getAttribute($_this_, "widget", array(0 => "MainMenu", 1 => array("rootId" => $this->getAttribute($_item_, "id")), 2 => true), "method");
                // line 10
                echo "\t\t\t";
                if (isset($context["qwert"])) { $_qwert_ = $context["qwert"]; } else { $_qwert_ = null; }
                echo $_qwert_;
                echo "
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/components/views/mainMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  51 => 10,  41 => 7,  33 => 5,  22 => 2,  19 => 1,  243 => 112,  240 => 111,  228 => 122,  223 => 121,  218 => 120,  210 => 114,  208 => 111,  195 => 102,  188 => 99,  175 => 90,  168 => 87,  155 => 78,  148 => 75,  139 => 70,  132 => 67,  104 => 43,  99 => 42,  94 => 41,  89 => 40,  54 => 13,  47 => 9,  42 => 9,  36 => 6,  25 => 3,  20 => 1,  101 => 37,  92 => 34,  84 => 30,  79 => 34,  71 => 26,  68 => 25,  60 => 19,  55 => 18,  52 => 17,  49 => 16,  40 => 9,  35 => 8,  31 => 6,  28 => 4,);
    }
}
