<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Página de Prueba</title>
		<meta charset="utf-8"/>
	</head>

	<body>
		<h1>Hola mi nombre es: <i><?php echo $nombre; ?></i> y tengo <i><?php echo $edad; ?></i> años</h1>

		<h2>Dicto los cursos de:</h2>
		<ul>
			<?php foreach($cursos as $curso): ?>
			<li><?php echo $curso ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
