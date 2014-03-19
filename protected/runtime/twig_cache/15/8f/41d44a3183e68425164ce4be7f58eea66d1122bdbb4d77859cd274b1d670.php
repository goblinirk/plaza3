<?php

/* views/pages/_form.twig */
class __TwigTemplate_158f41d44a3183e68425164ce4be7f58eea66d1122bdbb4d77859cd274b1d670 extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false, "htmlOptions" => array("enctype" => "multipart/form-data"))), "method");
        // line 8
        echo "

\t<p class=\"note\">Поля помеченные <span class=\"required\">*</span> обязательны для заполнения.</p>

<div style=\"display: inline-block;vertical-align: top;\">
    <div class=\"row\">
        ";
        // line 14
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "label"), "method");
        echo "
        ";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "label", 2 => array("size" => 160, "maxlength" => 255)), "method");
        echo "
        ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "label"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
        ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "owner_id", 2 => $this->getAttribute($_model_, "items")), "method");
        echo "
        ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "owner_id"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "thumb"), "method");
        echo "
        ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "fileField", array(0 => $_model_, 1 => "ajaxthumb", 2 => array("id" => "forum_image")), "method");
        echo "
        ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "hiddenField", array(0 => $_model_, 1 => "thumb", 2 => array("id" => "real_thumb")), "method");
        echo "
        ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "thumb"), "method");
        echo "
        ";
        // line 30
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if ($this->getAttribute($_model_, "thumb")) {
            // line 31
            echo "            <img style=\"margin: 0px 20px 0px 0px;\" class=\"preview\" src=\"/images/";
            if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_model_, "thumb"), "html", null, true);
            echo "\" width=\"80\" />
        ";
        }
        // line 33
        echo "        <a href=\"\" class=\"btn btn-info btn-lg\" onclick=\"return uploadImage();\">Выбрать</a>
        ";
        // line 34
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "htmlButton", array(0 => "Загрузить", 1 => array("onclick" => "javascript: send();", "id" => "post-submit-btn", "class" => "btn btn-success btn-lg post_submit"), 2 => true), "method");
        // line 39
        echo "
        <a href=\"\" class=\"btn btn-danger btn-lg\" onclick=\"return clearImage();\">Очистить</a>
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "short_text"), "method");
        echo "
        ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "short_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "short_text"), "method");
        echo "
    </div><!-- /.row -->

    <div class=\"row\">
        ";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "full_text"), "method");
        echo "
        ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "full_text", 2 => array("rows" => 6, "cols" => 50)), "method");
        echo "
        ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "full_text"), "method");
        echo "
    </div><!-- /.row -->



    <div class=\"row\">
        ";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "status"), "method");
        echo "
        ";
        // line 59
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "dropDownList", array(0 => $_model_, 1 => "status", 2 => array("1" => "Опубликована", "0" => "Удалена", "2" => "В архиве")), "method");
        echo "
        ";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "status"), "method");
        echo "
    </div><!-- /.row -->
</div>

";
        // line 64
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["seo"])) { $_seo_ = $context["seo"]; } else { $_seo_ = null; }
        $this->env->loadTemplate("views/pages/_seoform.twig")->display(array_merge($context, array("model" => $_model_, "seo" => $_seo_)));
        // line 65
        echo "
\t<div class=\"row buttons\">
\t\t";
        // line 67
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => (($this->getAttribute($_model_, "isNewRecord")) ? ("Создать") : ("Сохранить"))), "method");
        echo "
\t</div>

";
        // line 70
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_this_, "widget", array(0 => "ext.tinymce.SladekTinyMce", 1 => array(), 2 => true), "method"), "html", null, true);
        echo "

<script>
    tinymce.init({
        selector:'textarea',
        width: 530, 
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "endWidget");
        // line 98
        echo "
";
        // line 99
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerScriptFile", array(0 => "/scripts/transliteration.js"), "method")), "html", null, true);
        echo "
";
        // line 100
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($this->getAttribute($_App_, "clientScript"), "registerScript", array(0 => "translit", 1 => "
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
        return array (  253 => 104,  246 => 100,  241 => 99,  238 => 98,  235 => 97,  204 => 70,  196 => 67,  192 => 65,  188 => 64,  179 => 60,  173 => 59,  167 => 58,  156 => 52,  150 => 51,  144 => 50,  135 => 46,  129 => 45,  123 => 44,  116 => 39,  113 => 34,  110 => 33,  103 => 31,  100 => 30,  94 => 29,  88 => 28,  82 => 27,  76 => 26,  67 => 22,  61 => 21,  55 => 20,  46 => 16,  40 => 15,  34 => 14,  26 => 8,  23 => 3,  19 => 1,  39 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
