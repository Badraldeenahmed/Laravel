@extends('layout')

@section('content')
	<h1>{{ $title }}</h1>

	<ul>
		@forelse ($users as $user)
			<li>{{ $user }}</li>
		@empty
			<li>No hay Usuarios registrados.</li>
		@endforelse
	</ul>
@endsection