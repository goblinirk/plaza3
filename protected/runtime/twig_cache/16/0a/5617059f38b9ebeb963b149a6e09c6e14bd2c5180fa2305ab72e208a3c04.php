<?php

/* views/pages/base.twig */
class __TwigTemplate_160a5617059f38b9ebeb963b149a6e09c6e14bd2c5180fa2305ab72e208a3c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t</head>
\t<body>
\t\t<div id=\"mainmenu\">
\t\t\t<a href=\"/pages/\">Статьи</a>
\t\t\t<a href=\"/page/1\">Статья под номером 1</a>
\t\t\t<a href=\"/admin/add_page\">Создать статью</a>
\t\t</div>
\t\t<div id=\"wraper\">
\t\t\t";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "\t\t</div>
\t</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/pages/base.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  34 => 12,  32 => 11,  20 => 1,  31 => 4,  28 => 3,);
    }
}
