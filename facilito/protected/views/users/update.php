<?php
$this->breadcrumbs = array(
	'Users' => array('index'),
	$model->id => array('view', 'id' => $model->id),
	'Update',
);

$this->menu = array(
	array('label' => 'Lista de Usuarios', 'url' => array('index')),
	array('label' => 'Crear Usuario', 'url' => array('create')),
	array('label' => 'Destalles del Usuario', 'url' => array('view', 'id' => $model->id)),
	array('label' => 'Administrar Usuarios', 'url' => array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>