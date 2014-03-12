<?php
/* @var $this MenuItemsController */
/* @var $model MenuItems */

$this->breadcrumbs=array(
	'Menu Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MenuItems', 'url'=>array('index')),
	array('label'=>'Create MenuItems', 'url'=>array('create')),
	array('label'=>'View MenuItems', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MenuItems', 'url'=>array('admin')),
);
?>

<h1>Update MenuItems <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>