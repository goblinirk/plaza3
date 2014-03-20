<?php

/* /views/galleries/_view.twig */
class __TwigTemplate_1fdcd208b9b821b8f51f0dcb3245909484057b27847b598e39a03814a15bfcf7 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "owner_id") == (isset($context["curr"]) ? $context["curr"] : null)) || ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id") == (isset($context["curr"]) ? $context["curr"] : null)))) {
            // line 2
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "Gallery", 1 => array("rootId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id")), 2 => true), "method");
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
        return array (  21 => 2,  19 => 1,);
    }
}
