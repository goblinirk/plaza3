<?php

/* /components/views/Otziv.twig */
class __TwigTemplate_34241cd2ec1f14b855ce79fa69a9cc0e49b97eabfcbfdb01920aaa8ca8141bba extends Twig_Template
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
        $context["items"] = $this->getAttribute($_this_, "getOtzivList", array(), "method");
        // line 2
        echo "<a name=\"send\"></a>
";
        // line 3
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ($_items_) {
            // line 4
            echo "\t<h2>Отзывы <a href=\"/fb/list/";
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_this_, "pageId"), "html", null, true);
            echo "\">Читать все</a></h2>
\t<div class=\"otzs\">
\t\t";
            // line 6
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "\t\t\t<div class=\"otziv\">
\t\t\t\t<div class=\"name\">";
                // line 8
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "sender"), "html", null, true);
                echo "</div>
\t            <div class=\"text\">
\t                <span class=\"str\"></span>
\t                ";
                // line 11
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "message"), "html", null, true);
                echo "
\t\t\t\t\t<div class=\"link\"><a href=\"/fb/read/";
                // line 12
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\">Читать далее</a></div>
\t            </div>
\t        </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
";
        } else {
            // line 18
            echo "\t<h2>Отзывы</h2>
\t<div class=\"otzs\">
\t\t<div class=\"text\" style=\"margin: 25px 0 0;\">
\t\t    <span class=\"str\"></span>
\t\t    Ни кто, пока еще, не оставил ни одного отзыва...
\t\t</div><br /><br />
";
        }
        // line 25
        echo "\t\t<a name=\"sendform\"></a>
\t\t<form method=\"post\" action=\"/feedback/sendotziv/\" class=\"otziv_form\">
\t\t    <input type=\"text\" name=\"Otziv[name]\" placeholder=\"Введите свое имя\" /><br />
\t\t    <input type=\"hidden\" name=\"Otziv[lastname]\" placeholder=\"\" value=\"\" />
\t\t    <input type=\"hidden\" name=\"Otziv[page_id]\" placeholder=\"\" value=\"";
        // line 29
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_this_, "pageId"), "html", null, true);
        echo "\" />
\t\t    <textarea name=\"Otziv[message]\" placeholder=\"Оставте свой отзыв\"></textarea><br />
\t\t    <input type=\"submit\" value=\"Отправить\" />
\t\t</form>
\t</div>";
    }

    public function getTemplateName()
    {
        return "/components/views/Otziv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  70 => 18,  66 => 16,  50 => 11,  43 => 8,  22 => 2,  19 => 1,  146 => 46,  143 => 45,  131 => 57,  126 => 56,  121 => 55,  112 => 48,  110 => 45,  103 => 42,  98 => 41,  93 => 40,  88 => 39,  77 => 32,  54 => 13,  47 => 10,  42 => 9,  36 => 7,  25 => 3,  20 => 1,  99 => 37,  92 => 34,  84 => 30,  79 => 25,  71 => 26,  68 => 25,  60 => 19,  55 => 12,  52 => 17,  49 => 16,  40 => 7,  35 => 6,  31 => 6,  28 => 4,);
    }
}
