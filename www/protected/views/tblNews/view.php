<?php
$this->breadcrumbs=array(
	'Tbl News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblNews', 'url'=>array('index')),
	array('label'=>'Create TblNews', 'url'=>array('create')),
	array('label'=>'Update TblNews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblNews', 'url'=>array('admin')),
);
?>

<h1>View TblNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'teaser',
		'full_text',
		'images',
		'date_created',
		'date_publish_start',
		'date_publish_finish',
		'status',
	),
)); ?>
