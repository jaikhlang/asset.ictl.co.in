@if(Session::has('success'))

	<div class="red-text" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if(count($errors) > 0)
	<div class="red-text" role="alert">
		<strong>Error:</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

	</div>
@endif
