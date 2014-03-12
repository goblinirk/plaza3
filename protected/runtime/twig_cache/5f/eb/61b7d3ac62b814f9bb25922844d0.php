<?php

/* /views/site/index.twig */
class __TwigTemplate_5feb61b7d3ac62b814f9bb25922844d0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Welcome to <i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["App"]) ? $context["App"] : null), "name"), "html", null, true);
        echo "</i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
\t<li>View file: <code></code></li>
\t<li>Layout file: <code></code></li>
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
}
