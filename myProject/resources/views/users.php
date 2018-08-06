<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Usuarios - Klvst3r</title>
</head>
<body>
	<h1><?php echo e($title) ?></h1>

	<ul>
	
	<?php foreach($users as $user): ?>
		<li><?php echo e($user) ?></li>
	<?php endforeach;  ?>

	</ul>
</body>
</html>