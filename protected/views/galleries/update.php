<?php
/* @var $this GalleriesController */
/* @var $model Galleries */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Galleries', 'url'=>array('index')),
	array('label'=>'Create Galleries', 'url'=>array('create')),
	array('label'=>'View Galleries', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Galleries', 'url'=>array('admin')),
);
?>

<h1>Update Galleries <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>