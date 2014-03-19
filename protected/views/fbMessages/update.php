<?php
/* @var $this FbMessagesController */
/* @var $model FbMessages */

$this->breadcrumbs=array(
	'Fb Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FbMessages', 'url'=>array('index')),
	array('label'=>'Create FbMessages', 'url'=>array('create')),
	array('label'=>'View FbMessages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FbMessages', 'url'=>array('admin')),
);
?>

<h1>Update FbMessages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>