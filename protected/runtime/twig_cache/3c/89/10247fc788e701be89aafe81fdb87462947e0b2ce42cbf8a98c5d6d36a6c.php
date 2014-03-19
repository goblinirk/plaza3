<?php

/* /views/fbMessages/message.twig */
class __TwigTemplate_3c8910247fc788e701be89aafe81fdb87462947e0b2ce42cbf8a98c5d6d36a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/messages.twig");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/messages.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_message($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "success")) {
            // line 5
            echo "\t\t<div style=\"
\t\tcolor: #468847;
\t\tbackground-color: #dff0d8;
\t\tborder-color: #d6e9c6;
\t\tpadding: 8px 35px 8px 14px;
\t\ttext-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
\t\tborder: 1px solid #fbeed5;
\t\t-webkit-border-radius: 4px;
\t\t-moz-border-radius: 4px;
\t\tborder-radius: 4px;\">";
            // line 14
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $_message_, "html", null, true);
            echo "</div>
\t";
        }
        // line 16
        echo "\t";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "error")) {
            // line 17
            echo "\t\t<div style=\"
\t\tcolor: #b94a48;
\t\tbackground-color: #f2dede;
\t\tborder-color: #eed3d7;
\t\tpadding: 8px 35px 8px 14px;
\t\ttext-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
\t\tborder: 1px solid #fbeed5;
\t\t-webkit-border-radius: 4px;
\t\t-moz-border-radius: 4px;
\t\tborder-radius: 4px;\">";
            // line 26
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $_message_, "html", null, true);
            echo "</div>
\t";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/fbMessages/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  67 => 26,  56 => 17,  52 => 16,  46 => 14,  35 => 5,  31 => 4,  28 => 3,);
    }
}
