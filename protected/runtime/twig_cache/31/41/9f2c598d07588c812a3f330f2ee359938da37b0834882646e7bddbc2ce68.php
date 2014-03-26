<?php

/* views/galleries/_search.twig */
class __TwigTemplate_31419f2c598d07588c812a3f330f2ee359938da37b0834882646e7bddbc2ce68 extends Twig_Template
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
        return array (  19 => 1,  82 => 63,  79 => 62,  77 => 32,  73 => 30,  71 => 29,  66 => 27,  58 => 21,  45 => 10,  40 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
