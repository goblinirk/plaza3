<?php
/* @var $this RegistryController */
/* @var $model Registry */

$this->breadcrumbs=array(
	'Registries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Registry', 'url'=>array('index')),
	array('label'=>'Create Registry', 'url'=>array('create')),
	array('label'=>'Update Registry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Registry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registry', 'url'=>array('admin')),
);
?>

<h1>View Registry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module',
		'label',
		'param',
		'value',
		'create_date',
	),
)); ?>
