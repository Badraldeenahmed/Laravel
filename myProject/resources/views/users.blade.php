<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Usuarios - Klvst3r</title>
</head>
<body>
	<h1>{{ $title }}</h1>
	<hr>

	@unless(empty($users))

	<ul>
	
	@foreach ($users as $user) 
		<li>{{ $user }}</li>
	@endforeach
	</ul>

	@else 
		<p>No hay Usuarios Registrados.</p>
	
	@endif


</body>
</html>