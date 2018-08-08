<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Usuarios - Klvst3r</title>
</head>
<body>
	<h1>{{ $title }}</h1>
	<hr>
	<ul>
		@forelse ($users as $user) 
			<li>{{ $user }}</li>
		@empty
			<li>No hay Usuarios Registrados.</li>
		@endforelse
		</ul>

		{{ time() }}
	
</body>
</html>  