<?php
/* @var $this MenuItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Items',
);

$this->menu=array(
	array('label'=>'Create MenuItems', 'url'=>array('create')),
	array('label'=>'Manage MenuItems', 'url'=>array('admin')),
);
?>

<h1>Menu Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
