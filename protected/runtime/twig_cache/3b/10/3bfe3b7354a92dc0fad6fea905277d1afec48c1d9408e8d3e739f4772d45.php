<?php

/* /views/pages/view.twig */
class __TwigTemplate_3b103bfe3b7354a92dc0fad6fea905277d1afec48c1d9408e8d3e739f4772d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
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

    // line 3
    public function block_maincontent($context, array $blocks = array())
    {
        // line 4
        echo "\t
    <div class=\"b-dop-serv\">
    \t<div class=\"titl\">";
        // line 6
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "label");
        echo "</div>
        ";
        // line 7
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
        echo "
    </div><!--end b-dop-serv-->

";
    }

    // line 12
    public function block_innercontent($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>";
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "label");
        echo "</h1>
    <div class=\"content\">
        ";
        // line 15
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_model_, "full_text");
        echo "
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
        return array (  58 => 15,  51 => 13,  48 => 12,  39 => 7,  34 => 6,  30 => 4,  27 => 3,);
    }
}
