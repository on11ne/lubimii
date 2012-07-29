<?php
$this->breadcrumbs=array(
	'Tbl News',
);

$this->menu=array(
	array('label'=>'Create TblNews', 'url'=>array('create')),
	array('label'=>'Manage TblNews', 'url'=>array('admin')),
);
?>

<h1>Tbl News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
