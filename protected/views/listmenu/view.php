<?php
/* @var $this ListmenuController */
/* @var $model Listmenu */

$this->breadcrumbs=array(
	'Listmenus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Listmenu', 'url'=>array('index')),
	array('label'=>'Create Listmenu', 'url'=>array('create')),
	array('label'=>'Update Listmenu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Listmenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Listmenu', 'url'=>array('admin')),
);
?>

<h1>View Listmenu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'list_name',
		'menu_id',
	),
)); ?>
