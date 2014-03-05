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

    // line 3
    public function block_maincontent($context, array $blocks = array())
    {
        // line 4
        echo "\t
    <div class=\"b-dop-serv\">
    \t<div class=\"titl\">";
        // line 6
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</div>
        ";
        // line 7
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "
    </div><!--end b-dop-serv-->

";
    }

    // line 12
    public function block_coontactscontent($context, array $blocks = array())
    {
        // line 13
        echo "    
    <h2>";
        // line 14
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</h2>
        ";
        // line 15
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "

";
    }

    // line 19
    public function block_innercontent($context, array $blocks = array())
    {
        // line 20
        echo "    <h1>";
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label");
        echo "</h1>
    <div class=\"content\">
        <div class=\"b-about\">
            <div class=\"img\"><img alt=\"\" src=\"";
        // line 23
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb");
        echo "\"></div>
            ";
        // line 24
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "
        </div><!--end b-about-->
    </div>
    <div class=\"bs-jobs\">
                <h2>Наши работы</h2>
                <a href=\"#\"><img alt=\"\" src=\"/img/job.png\"></a>
                <a href=\"#\"><img alt=\"\" src=\"/img/job.png\"></a>
                <a href=\"#\"><img alt=\"\" src=\"/img/job.png\"></a>
                <a href=\"#\"><img alt=\"\" src=\"/img/job.png\"></a>
                <a href=\"#\"><img alt=\"\" src=\"/img/job.png\"></a>
                <div class=\"all-link\"><a href=\"#\">Перейти в галлерею</a></div>
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
                        <td><input name=\"\" class=\"pole\" value=\"Имя\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"Электронная почта\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><input name=\"\" class=\"pole\" value=\"Электронная почта\" type=\"text\"></td>
                      </tr>
                      <tr>
                        <td><textarea name=\"\" cols=\"\" rows=\"\">Сообщение</textarea></td>
                      </tr>
                      <tr>
                        <td><input class=\"btn1\" name=\"\" type=\"submit\" value=\"Отправить\"></td>
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
        return array (  78 => 24,  74 => 23,  67 => 20,  64 => 19,  57 => 15,  53 => 14,  50 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
