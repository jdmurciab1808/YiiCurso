<?php
$this->breadcrumbs = array(
	'Users' => array('index'),
	'Create',
);

$this->menu = array(
	array('label' => 'Lista de Usuarios', 'url' => array('index')),
	array('label' => 'Administrar Usuarios', 'url' => array('admin')),
);
?>

<h1>Crear Usuario</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>