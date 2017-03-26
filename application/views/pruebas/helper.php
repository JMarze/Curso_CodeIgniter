<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Helper</title>
		<meta charset="utf-8"/>
	</head>

	<body>
		<?php echo principal(); ?>
		<br/>
		<?php echo titulo_principal('Blog'); ?>
		<?php echo titulo_principal('CodeIgniter', 'helpers'); ?>
		<br/>
		<?php echo anchor('prueba', 'Ir a Prueba - Index'); ?>
		<br/>
		<?php echo anchor('/', 'Ir a Inicio'); ?>
	</body>
</html>
