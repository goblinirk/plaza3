<?php
/* @var $this FbMessagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fb Messages',
);

$this->menu=array(
	array('label'=>'Create FbMessages', 'url'=>array('create')),
	array('label'=>'Manage FbMessages', 'url'=>array('admin')),
);
?>

<h1>Fb Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
