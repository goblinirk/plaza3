<?php
/* @var $this GalleriesController */
/* @var $model Galleries */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Galleries', 'url'=>array('index')),
	array('label'=>'Manage Galleries', 'url'=>array('admin')),
);
?>

<h1>Create Galleries</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>