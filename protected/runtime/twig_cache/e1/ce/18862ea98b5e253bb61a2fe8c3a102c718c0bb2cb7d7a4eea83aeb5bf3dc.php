<?php

/* /views/galleries/_view.twig */
class __TwigTemplate_e1ce18862ea98b5e253bb61a2fe8c3a102c718c0bb2cb7d7a4eea83aeb5bf3dc extends Twig_Template
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["curr"])) { $_curr_ = $context["curr"]; } else { $_curr_ = null; }
        if ((($this->getAttribute($_data_, "owner_id") == $_curr_) || ($this->getAttribute($_data_, "id") == $_curr_))) {
            // line 2
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo $this->getAttribute($_this_, "widget", array(0 => "Gallery", 1 => array("rootId" => $this->getAttribute($_data_, "id")), 2 => true), "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/views/galleries/_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,  50 => 16,  47 => 15,  42 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
