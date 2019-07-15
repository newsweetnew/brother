<?php
/* @var $this ListmenuController */
/* @var $model Listmenu */

$this->breadcrumbs=array(
	'Listmenus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Listmenu', 'url'=>array('index')),
	array('label'=>'Create Listmenu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#listmenu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('เพิ่มข้อมูล',array('listmenu/index')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'listmenu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'list_name',
		'menu_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
