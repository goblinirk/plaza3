<?php

/* /views/pages/view.twig */
class __TwigTemplate_4e9387551d05adb0934448a444bee4101dc7d0975753deefb089e7de6443ad80 extends Twig_Template
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
        return $this->env->resolveTemplate($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "template"));
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
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</div>
        ";
        // line 9
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
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
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</h2>
        ";
        // line 19
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "

";
    }

    // line 25
    public function block_innercontent($context, array $blocks = array())
    {
        // line 26
        echo "    <h1>";
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</h1>
    <div class=\"content\">
        <div class=\"b-about\">
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 29
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb");
        echo "\"></div>
            ";
        // line 30
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "
        </div><!--end b-about-->
    </div>
    <div class=\"bs-jobs\">
                ";
        // line 34
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "Gallery", 1 => array("rootId" => 1, "label" => "Наши работы", "showdesc" => false), 2 => true), "method");
        echo "
            </div><!--end bs-jobs-->
            <div class=\"b-otziv\">
                <h2>Отзывы <a href=\"#\">Читать все</a></h2>
                <div class=\"otzs\">
                    <div class=\"otziv\">
                        <div class=\"name\">Антонина</div>
                        <div class=\"text\">
                            <span class=\"str\"></span>
В октябре 2013 года мной был заключен договор с фирмой ”ЭКОСТРОЙДОМ”  на строительство брусового дома размером 6х10 по проекту S1. Руководитель фирмы Алексей Николаевич выехал к нам на участок, где непосредственно... 
                            <div class=\"link\"><a href=\"#\">Читать далее</a></div>
                        </div>
                    </div><!--end otziv-->
                    <div class=\"otziv\">
                        <div class=\"name\">Антонина</div>
                        <div class=\"text\">
                            <span class=\"str\"></span>
В октябре 2013 года мной был заключен договор с фирмой ”ЭКОСТРОЙДОМ”  на строительство брусового дома размером 6х10 по проекту S1. Руководитель фирмы Алексей Николаевич выехал к нам на участок, где непосредственно... 
                            <div class=\"link\"><a href=\"#\">Читать далее</a></div>
                        </div>
                    </div><!--end otziv-->
                    <div class=\"otziv\">
                        <div class=\"name\">Антонина</div>
                        <div class=\"text\">
                            <span class=\"str\"></span>
В октябре 2013 года мной был заключен договор с фирмой ”ЭКОСТРОЙДОМ”  на строительство брусового дома размером 6х10 по проекту S1. Руководитель фирмы Алексей Николаевич выехал к нам на участок, где непосредственно... 
                            <div class=\"link\"><a href=\"#\">Читать далее</a></div>
                        </div>
                    </div><!--end otziv-->
                
                </div><!--end otzs-->
                <div class=\"form\">
                    <h2>Написать свой отзыв</h2>
                    <table cellspacing=\"0\" cellpadding=\"0\">
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Имя\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"\" placeholder=\"Электронная почта\" type=\"text\"></td>
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
        return array (  85 => 34,  78 => 30,  74 => 29,  67 => 26,  64 => 25,  57 => 19,  53 => 18,  50 => 17,  47 => 16,  39 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
