<?php
/* @var $this ListmenuController */
/* @var $model Listmenu */

$this->breadcrumbs=array(
	'Listmenus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Listmenu', 'url'=>array('index')),
	array('label'=>'Create Listmenu', 'url'=>array('create')),
	array('label'=>'View Listmenu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Listmenu', 'url'=>array('admin')),
);
?>

<h1>Update Listmenu <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>