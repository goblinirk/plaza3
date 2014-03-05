<?php

/* views/pages/_form.twig */
class __TwigTemplate_0b6691688ac48672542b96afc04f18316e5bed4db087547c84fe127ece035e0b extends Twig_Template
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
        echo "<div class=\"form\">

";
        // line 3
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false)), "method");
        // line 7
        echo "

\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
        ";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
        ";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
    </div><!-- /.row -->



    <div class=\"row\">
        ";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 46
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 47
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

";
        // line 51
        $this->env->loadTemplate("views/pages/_seoform.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null))));
        // line 52
        echo "
\t<div class=\"row buttons\">
\t\t";
        // line 54
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.tinymce.SladekTinyMce", 1 => array(), 2 => true), "method"), "html", null, true);
        echo "

<script>
    tinymce.init({
        selector:'textarea',
        width: 530, 
        height: 240,
        plugins: [
             \"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker\",
             \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",
             \"save table contextmenu directionality emoticons template paste textcolor\"
       ],
       content_css: \"css/content.css\",
       toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons\", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]});
</script>

";
        // line 82
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 83
        echo "
";
        // line 84
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/transliteration.js"), "method")), "html", null, true);
        echo "
";
        // line 85
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScript", array(0 => "translit", 1 => "
    el = document.getElementById('Pages_label');
    el.onkeypress = function(e) { oJS.strNormalize(this); }
    oJS.strNormalize(el);
    "), "method")), "html", null, true);
        // line 89
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/pages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 89,  174 => 85,  170 => 84,  167 => 83,  165 => 82,  137 => 57,  131 => 54,  127 => 52,  125 => 51,  118 => 47,  114 => 46,  110 => 45,  101 => 39,  97 => 38,  93 => 37,  86 => 33,  82 => 32,  78 => 31,  71 => 27,  67 => 26,  63 => 25,  56 => 21,  52 => 20,  48 => 19,  41 => 15,  37 => 14,  33 => 13,  25 => 7,  23 => 3,  19 => 1,);
    }
}
