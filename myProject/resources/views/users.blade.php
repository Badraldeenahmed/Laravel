<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Usuarios - Klvst3r</title>
</head>
<body>
	<h1>{{ $title }}</h1>

	<ul>
	
	@foreach ($users as $user) 
		<li>{{ $user }}</li>
	@endforeach
	</ul>


</body>
</html>