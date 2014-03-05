<?php
/* @var $this FbMessagesController */
/* @var $model FbMessages */

$this->breadcrumbs=array(
	'Fb Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FbMessages', 'url'=>array('index')),
	array('label'=>'Create FbMessages', 'url'=>array('create')),
	array('label'=>'Update FbMessages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FbMessages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FbMessages', 'url'=>array('admin')),
);
?>

<h1>View FbMessages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'label',
		'sender',
		'message',
		'send_date',
		'status',
	),
)); ?>
