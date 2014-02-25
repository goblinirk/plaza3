<?php
/* @var $this SeoController */
/* @var $data Seo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('module')); ?>:</b>
	<?php echo CHtml::encode($data->module); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->meta_keywords); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_robots')); ?>:</b>
	<?php echo CHtml::encode($data->meta_robots); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_author')); ?>:</b>
	<?php echo CHtml::encode($data->meta_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redirect_header')); ?>:</b>
	<?php echo CHtml::encode($data->redirect_header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redirect_url')); ?>:</b>
	<?php echo CHtml::encode($data->redirect_url); ?>
	<br />

	*/ ?>

</div>