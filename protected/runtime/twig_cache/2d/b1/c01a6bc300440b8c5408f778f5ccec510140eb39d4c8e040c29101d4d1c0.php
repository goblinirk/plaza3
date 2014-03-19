<?php

/* views/galleries/_search.twig */
class __TwigTemplate_2db1c01a6bc300440b8c5408f778f5ccec510140eb39d4c8e040c29101d4d1c0 extends Twig_Template
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
        echo "<?php
/* @var \$this GalleriesController */
/* @var \$model Galleries */
/* @var \$form CActiveForm */
?>

<div class=\"wide form\">

<?php \$form=\$this->beginWidget('CActiveForm', array(
\t'action'=>Yii::app()->createUrl(\$this->route),
\t'method'=>'get',
)); ?>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'id'); ?>
\t\t<?php echo \$form->textField(\$model,'id'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'owner_id'); ?>
\t\t<?php echo \$form->textField(\$model,'owner_id'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'label'); ?>
\t\t<?php echo \$form->textField(\$model,'label',array('size'=>60,'maxlength'=>128)); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'description'); ?>
\t\t<?php echo \$form->textField(\$model,'description',array('size'=>60,'maxlength'=>320)); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'create_date'); ?>
\t\t<?php echo \$form->textField(\$model,'create_date'); ?>
\t</div>

\t<div class=\"row\">
\t\t<?php echo \$form->label(\$model,'status'); ?>
\t\t<?php echo \$form->textField(\$model,'status'); ?>
\t</div>

\t<div class=\"row buttons\">
\t\t<?php echo CHtml::submitButton('Search'); ?>
\t</div>

<?php \$this->endWidget(); ?>

</div><!-- search-form -->";
    }

    public function getTemplateName()
    {
        return "views/galleries/_search.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  90 => 100,  87 => 99,  83 => 33,  79 => 31,  76 => 30,  70 => 28,  61 => 21,  47 => 10,  41 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
