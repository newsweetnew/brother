<?php
/* @var $this ListmenuController */
/* @var $model Listmenu */

$this->breadcrumbs=array(
	'Listmenus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Listmenu', 'url'=>array('index')),
	array('label'=>'Manage Listmenu', 'url'=>array('admin')),
);
?>

<h1>Create Listmenu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>