<?php

/* /components/views/Otziv.twig */
class __TwigTemplate_27c947d2c2ab572aaae8e931aa85576b89f1c7506703732b1fd70b1d4ad5785b extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOtzivList", array(), "method");
        // line 2
        echo "<a name=\"send\"></a>
";
        // line 3
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 4
            echo "\t<h2>Отзывы <a href=\"/fb/list/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageId"), "html", null, true);
            echo "\">Читать все</a></h2>
\t<div class=\"otzs\">
\t\t";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "\t\t\t<div class=\"otziv\">
\t\t\t\t<div class=\"name\">";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "sender"), "html", null, true);
                echo "</div>
\t            <div class=\"text\">
\t                <span class=\"str\"></span>
\t                ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "message"), "html", null, true);
                echo "
\t\t\t\t\t<div class=\"link\"><a href=\"/fb/read/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageId"), "html", null, true);
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
        return array (  78 => 29,  72 => 25,  63 => 18,  59 => 16,  49 => 12,  45 => 11,  39 => 8,  36 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
