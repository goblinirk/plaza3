<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */

$this->breadcrumbs=array(
	'Gallery Images'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GalleryImages', 'url'=>array('index')),
	array('label'=>'Create GalleryImages', 'url'=>array('create')),
	array('label'=>'Update GalleryImages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GalleryImages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryImages', 'url'=>array('admin')),
);
?>

<h1>View GalleryImages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner_id',
		'label',
		'description',
		'link',
		'thumb',
		'medium',
		'large',
		'create_date',
		'status',
		'sort',
	),
)); ?>
