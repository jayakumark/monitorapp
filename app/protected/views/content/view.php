<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Content','url'=>array('index')),
	array('label'=>'Create Content','url'=>array('create')),
	array('label'=>'Update Content','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Content','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Content','url'=>array('admin')),
);
?>

<h1>View <?php echo $model->name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'url',
		'type',
		'device_id',
		'sound'
	),
)); ?>
