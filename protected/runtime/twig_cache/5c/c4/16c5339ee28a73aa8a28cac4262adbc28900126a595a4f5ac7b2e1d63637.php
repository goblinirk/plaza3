<?php

/* /views/site/index.twig */
class __TwigTemplate_5cc416c5339ee28a73aa8a28cac4262adbc28900126a595a4f5ac7b2e1d63637 extends Twig_Template
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
        echo "<h1>Welcome to <i></i></h1>

<p>Congratulations ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : null), "html", null, true);
        echo "! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
\t<li>View file: </li>
\t<li>Layout file: </li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href=\"http://www.yiiframework.com/doc/\">documentation</a>.
Feel free to ask in the <a href=\"http://www.yiiframework.com/forum/\">forum</a>,
should you have any questions.</p>
";
    }

    public function getTemplateName()
    {
        return "/views/site/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
