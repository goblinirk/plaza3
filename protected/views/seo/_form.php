<?php
/* @var $this SeoController */
/* @var $model Seo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'module'); ?>
		<?php echo $form->textField($model,'module',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'module'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_id'); ?>
		<?php echo $form->textField($model,'owner_id'); ?>
		<?php echo $form->error($model,'owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_keywords'); ?>
		<?php echo $form->textField($model,'meta_keywords',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'meta_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_robots'); ?>
		<?php echo $form->textField($model,'meta_robots',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'meta_robots'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_author'); ?>
		<?php echo $form->textField($model,'meta_author',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'meta_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redirect_header'); ?>
		<?php echo $form->textField($model,'redirect_header',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'redirect_header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'redirect_url'); ?>
		<?php echo $form->textField($model,'redirect_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'redirect_url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->