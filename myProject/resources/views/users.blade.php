@include('header')

	<h1>{{ $title }}</h1>
	<hr>
	<ul>
		@forelse ($users as $user) 
			<li>{{ $user }}</li>
		@empty
			<li>No hay Usuarios Registrados.</li>
		@endforelse
		</ul>

@include('footer')