<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teaser'); ?>
		<?php echo $form->textArea($model,'teaser',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'teaser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_text'); ?>
		<?php echo $form->textArea($model,'full_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'full_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_publish_start'); ?>
		<?php echo $form->textField($model,'date_publish_start'); ?>
		<?php echo $form->error($model,'date_publish_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_publish_finish'); ?>
		<?php echo $form->textField($model,'date_publish_finish'); ?>
		<?php echo $form->error($model,'date_publish_finish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->