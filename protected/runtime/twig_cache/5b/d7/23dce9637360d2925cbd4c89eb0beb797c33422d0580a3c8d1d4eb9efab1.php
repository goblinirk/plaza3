<?php

/* /views/pages/_view.twig */
class __TwigTemplate_5bd723dce9637360d2925cbd4c89eb0beb797c33422d0580a3c8d1d4eb9efab1 extends Twig_Template
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
        echo "<div class=\"view\">

\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "label"));
        echo "</h2>
\t<br />

\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "label"));
        echo "
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "/views/pages/_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
