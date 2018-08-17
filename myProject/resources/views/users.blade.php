@extends('layout')

@section('content')
	<div class="row mt-3">
		<div class="col-8">
			<h1>{{ $title }}</h1>
				<hr>
				<ul>
					@forelse ($users as $user) 
						<li>{{ $user }}</li>
					@empty
						<li>No hay Usuarios Registrados.</li>
					@endforelse
					</ul>

		</div>
		<div class="col-4">
			<h2>
				@include('sidebar')
		</div>
	</div>
@endsection