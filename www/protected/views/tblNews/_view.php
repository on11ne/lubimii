<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaser')); ?>:</b>
	<?php echo CHtml::encode($data->teaser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_text')); ?>:</b>
	<?php echo CHtml::encode($data->full_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('images')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_publish_start')); ?>:</b>
	<?php echo CHtml::encode($data->date_publish_start); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_publish_finish')); ?>:</b>
	<?php echo CHtml::encode($data->date_publish_finish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>