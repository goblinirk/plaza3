<?php
/* @var $this MenuItemsController */
/* @var $model MenuItems */

$this->breadcrumbs=array(
	'Menu Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MenuItems', 'url'=>array('index')),
	array('label'=>'Manage MenuItems', 'url'=>array('admin')),
);
?>

<h1>Create MenuItems</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>