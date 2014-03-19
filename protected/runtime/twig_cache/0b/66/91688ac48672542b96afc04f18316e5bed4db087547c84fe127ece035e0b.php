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
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
        // line 8
        echo "

\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
        ";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 16
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
        ";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id", 2 => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "items")), "method");
        echo "
        ";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hiddenField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "thumb"), "method");
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb")) {
            // line 31
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 33
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 39
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
        ";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 46
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "short_text"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
        ";
        // line 51
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 52
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "full_text"), "method");
        echo "
    </div><!-- /.row -->



    <div class=\"row\">
        ";
        // line 58
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
        ";
        // line 59
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 60
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

";
        // line 64
        $this->env->loadTemplate("views/pages/_seoform.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null), "registry" => (isset($context["registry"]) ? $context["registry"] : null))));
        // line 65
        echo "
\t<div class=\"row buttons\">
\t\t";
        // line 67
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.tinymce.SladekTinyMce", 1 => array(), 2 => true), "method"), "html", null, true);
        echo "

<script>
    tinymce.init({
        selector:'textarea',
        width: 500, 
        height: 240,
        language: 'ru',
        plugins: [
             \"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker\",
             \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",
             \"save table contextmenu directionality emoticons template paste textcolor filemanager\"
       ],
       image_advtab: true,
       content_css: \"css/content.css\",
       toolbar: \"bold italic | alignleft aligncenter alignright alignjustify | fontselect | fontsizeselect | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor emoticons\", 
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
        // line 97
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget");
        // line 98
        echo "
";
        // line 99
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScriptFile", array(0 => "/scripts/transliteration.js"), "method")), "html", null, true);
        echo "
";
        // line 100
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "clientScript"), "registerScript", array(0 => "translit", 1 => "
    el = document.getElementById('Pages_label');
    el.onkeyup = function(e) { oJS.strNormalize(this); }
    oJS.strNormalize(el);
    "), "method")), "html", null, true);
        // line 104
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
        return array (  203 => 104,  197 => 100,  193 => 99,  190 => 98,  188 => 97,  158 => 70,  152 => 67,  148 => 65,  146 => 64,  139 => 60,  135 => 59,  131 => 58,  122 => 52,  118 => 51,  114 => 50,  107 => 46,  103 => 45,  99 => 44,  92 => 39,  90 => 34,  87 => 33,  81 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  56 => 22,  52 => 21,  48 => 20,  41 => 16,  37 => 15,  23 => 3,  19 => 1,  38 => 7,  33 => 14,  30 => 5,  25 => 8,);
    }
}
