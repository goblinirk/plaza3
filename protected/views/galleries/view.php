<?php
/* @var $this GalleriesController */
/* @var $model Galleries */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Galleries', 'url'=>array('index')),
	array('label'=>'Create Galleries', 'url'=>array('create')),
	array('label'=>'Update Galleries', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Galleries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Galleries', 'url'=>array('admin')),
);
?>

<h1>View Galleries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner_id',
		'label',
		'description',
		'create_date',
		'status',
	),
)); ?>
