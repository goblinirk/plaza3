<?php
/* @var $this FbMessagesController */
/* @var $model FbMessages */

$this->breadcrumbs=array(
	'Fb Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FbMessages', 'url'=>array('index')),
	array('label'=>'Manage FbMessages', 'url'=>array('admin')),
);
?>

<h1>Create FbMessages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>