<?php

/* views/fbMessages/_view.twig */
class __TwigTemplate_431e1a995eba7382956d7facdcf372595a38245d2fdadeb8f29f734a31b4c84d extends Twig_Template
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
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "getAttributeLabel", array(0 => "label"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 4
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "label"), "html", null, true);
        echo "
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 7
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "getAttributeLabel", array(0 => "sender"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 8
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "sender"), "html", null, true);
        echo "
\t<br />
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 12
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "getAttributeLabel", array(0 => "message"), "method"), "html", null, true);
        echo ":</b><br />
\t<div style=\"background: #ECECEC;margin-left: 40px;padding: 10px 40px;border-radius: 4px;border: 1px solid #D3D3D3;\">";
        // line 13
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "message");
        echo "</div>
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 16
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "getAttributeLabel", array(0 => "send_date"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 17
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "send_date"), "html", null, true);
        echo "
\t<br />

\t<b style=\"width: 160px;display: inline-block;padding-left: 40px;\">";
        // line 20
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "getAttributeLabel", array(0 => "status"), "method"), "html", null, true);
        echo ":</b>
\t";
        // line 21
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_model_, "status"), "html", null, true);
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
        return array (  77 => 21,  72 => 20,  65 => 17,  60 => 16,  53 => 13,  48 => 12,  40 => 8,  35 => 7,  28 => 4,  23 => 3,  19 => 1,  45 => 10,  42 => 9,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
