<?php
/* @var $this RegistryController */
/* @var $model Registry */

$this->breadcrumbs=array(
	'Registries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Registry', 'url'=>array('index')),
	array('label'=>'Manage Registry', 'url'=>array('admin')),
);
?>

<h1>Create Registry</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>