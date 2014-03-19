<?php

/* /views/pages/view.twig */
class __TwigTemplate_3b103bfe3b7354a92dc0fad6fea905277d1afec48c1d9408e8d3e739f4772d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
            'coontactscontent' => array($this, 'block_coontactscontent'),
            'innercontent' => array($this, 'block_innercontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "model"), "template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_maincontent($context, array $blocks = array())
    {
        // line 6
        echo "\t
    <div class=\"b-dop-serv\">
    \t<div class=\"titl\">";
        // line 8
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "label");
        echo "</div>
        ";
        // line 9
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
        echo "
    </div><!--end b-dop-serv-->

";
    }

    // line 16
    public function block_coontactscontent($context, array $blocks = array())
    {
        // line 17
        echo "    
    <h2>";
        // line 18
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "label");
        echo "</h2>
        ";
        // line 19
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
        echo "

";
    }

    // line 25
    public function block_innercontent($context, array $blocks = array())
    {
        // line 26
        echo "    <h1>";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "label");
        echo "</h1>
    <div class=\"content\">
        <div class=\"b-about\">
            <div class=\"img\"><img alt=\"\" src=\"/images/";
        // line 29
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "thumb");
        echo "\"></div>
            ";
        // line 30
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
        echo "
        </div><!--end b-about-->
    </div>
    <div class=\"bs-jobs\">
                ";
        // line 34
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "Gallery", 1 => array("rootId" => 1, "label" => "Наши работы", "showdesc" => false), 2 => true), "method");
        echo "
            </div><!--end bs-jobs-->
            <div class=\"b-otziv\">
                ";
        // line 37
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "Otziv", 1 => array("pageId" => $this->getAttribute($_model_, "id")), 2 => true), "method");
        echo "
                <div class=\"form\">
                    <h2>Оставить заявку</h2>
                    <table cellspacing=\"0\" cellpadding=\"0\">
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Имя\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Номер телефона\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><textarea name=\"\" cols=\"\" rows=\"\" placeholder=\"Сообщение\"></textarea></td>
                      </tr>
                      <tr>
                        <!-- <td><input class=\"btn1\" name=\"\" type=\"submit\" value=\"Отправить\"></td> -->
                      </tr>
                    </table>
                </div><!--end form-->
            </div><!--end b-otziv-->
            <div class=\"big-tel\">
                <div class=\"phone\"><span>(3952) </span>672-295</div>
            ЗВОНИТЕ
            
            </div><!--end big-tel-->

";
    }

    public function getTemplateName()
    {
        return "/views/pages/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 34,  84 => 30,  79 => 29,  71 => 26,  68 => 25,  60 => 19,  55 => 18,  52 => 17,  49 => 16,  40 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
