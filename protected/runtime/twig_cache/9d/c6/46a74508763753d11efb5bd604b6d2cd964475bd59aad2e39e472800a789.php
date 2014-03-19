<?php

/* views/fbMessages/_view.twig */
class __TwigTemplate_9dc646a74508763753d11efb5bd604b6d2cd964475bd59aad2e39e472800a789 extends Twig_Template
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
\t<br /><br />
\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "label"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label"), "html", null, true);
        echo "
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "sender"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "sender"), "html", null, true);
        echo "
\t<br />
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "message"), "method"), "html", null, true);
        echo ":</b><br />
\t<div style=\"background: #ECECEC;margin-left: 40px;padding: 10px 40px;border-radius: 4px;border: 1px solid #D3D3D3;\">";
        // line 13
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "message");
        echo "</div>
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "send_date"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "send_date"), "html", null, true);
        echo "
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "getAttributeLabel", array(0 => "status"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status"), "html", null, true);
        echo "
\t<br />


</div>";
    }

    public function getTemplateName()
    {
        return "views/fbMessages/_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  64 => 20,  58 => 17,  54 => 16,  48 => 13,  44 => 12,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
