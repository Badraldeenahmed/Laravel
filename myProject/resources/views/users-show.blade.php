@include('header')

	<div class="row mt-3">
		<div class="col-8">
			<h1>{{ $title }}</h1>
				<hr>
				Mostrando detalle del usuario: {{$id}}

		</div>
		<div class="col-4">
			<h2>
				@include('sidebar')
		</div>
	</div>

@include('footer')

