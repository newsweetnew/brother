<?php
/* @var $this DocumentController */
/* @var $data Document */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_name')); ?>:</b>
	<?php echo CHtml::encode($data->doc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listmenu_id')); ?>:</b>
	<?php echo CHtml::encode($data->listmenu_id); ?>
	<br />


</div>